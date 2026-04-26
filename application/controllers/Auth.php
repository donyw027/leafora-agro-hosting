<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model', 'auth');
        $this->load->model('Admin_model', 'admin');
    }

    private function _has_login()
    {
        if ($this->session->has_userdata('login_session')) {
            redirect('auth/dashboard');
        }
    }

    public function index()
    {
        $this->_has_login();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login |  Leafora Agro Industri';
            $this->template->load('templates/auth', 'admin/login', $data);
        } else {
            $input = $this->input->post(null, true);

            $cek_username = $this->auth->cek_username($input['username']);
            if ($cek_username > 0) {
                $password = $this->auth->get_password($input['username']);
                if (password_verify($input['password'], $password)) {
                    $user_db = $this->auth->userdata($input['username']);
                    if ($user_db['is_active'] != 1) {
                        set_pesan('akun anda belum aktif/dinonaktifkan. Silahkan hubungi admin.', false);
                        redirect('login');
                    } else {
                        $userdata = [
                            'user'  => $user_db['id_user'],
                            'nama'  => $user_db['nama'],
                            'email'  => $user_db['email'],
                            'role'  => $user_db['role'],
                            'timestamp' => time()
                        ];

                        // $tgl = date('d M Y | H:i');
                        // $data_log = [
                        //     'tanggal'       => $tgl,
                        //     'aksi'       => 'Login kedalam sistem informasi',
                        //     'aktor'       => $user_db['nama']
                        // ];
                        // $this->admin->insert('log_s', $data_log);
                        $this->session->set_userdata('login_session', $userdata);
                        redirect('auth/dashboard');
                    }
                } else {
                    set_pesan('password salah', false);
                    redirect('auth');
                }
            } else {
                set_pesan('username belum terdaftar', false);
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login_session');
        session_destroy(); // tambahkan ini untuk benar-benar menghancurkan sesi
        set_pesan('anda telah berhasil logout');
        redirect('login'); // redirect ke halaman login
    }


    public function dashboard()
    {

        $session = $this->session->userdata('login_session');
        if (!$session) {
            redirect('login'); // redirect ke halaman login
        }

        $data['quotation']  = $this->db->count_all('quotation');
        $data['inquiry']  = $this->db->count_all('inquiry');
        $data['produk']  = $this->db->count_all('produk');
        $data['slider']  = $this->db->count_all('slider_home');
        $data['galery']  = $this->db->count_all('galery');
        $data['blog']  = $this->db->count_all('blog');
        $data['user']  = $this->db->count_all('user');

        $data['title'] = "Dashboard | Leafora Agro Industri";
        $role = $this->session->userdata('login_session')['role'];
        $this->template->load('templates/dashboard', 'admin/beranda', $data);
    }
}
