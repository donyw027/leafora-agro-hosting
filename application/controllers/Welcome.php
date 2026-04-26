<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */




	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
		$this->load->library('form_validation');
		$this->load->model('Blog_model', 'blog');
		$this->load->helper(['url', 'text', 'security']);

		// Cek jika tidak ada bahasa tersimpan, default ke indonesian
		if (!$this->session->userdata('site_lang')) {
			$this->session->set_userdata('site_lang', 'english');
		}

		// Load bahasa sesuai session
		$this->lang->load('web_lang', $this->session->userdata('site_lang'));
	}


	public function change_language($lang)
	{
		// Set session sesuai pilihan bahasa
		if ($lang == 'en') {
			$this->session->set_userdata('site_lang', 'english');
		} else {
			$this->session->set_userdata('site_lang', 'indonesian');
		}

		redirect($_SERVER['HTTP_REFERER']); // kembali ke halaman sebelumnya
	}

	public function index()
	{
		$data['title'] = 'Leafora Agro Industri';
		$data['sliders'] = $this->admin->get_all_slider(true);
		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('home', $data);
		$this->load->view('head_foot/footer');
	}



	public function about()
	{
		$data['title'] = 'About | Leafora Agro Industri';

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('about');
		$this->load->view('head_foot/footer');
	}

	public function layanan()
	{
		$data['title'] = 'Services | Leafora Agro Industri ';

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('layanan');
		$this->load->view('head_foot/footer');
	}

	public function produk()
	{
		$this->load->helper('text');
		$data['title'] = 'Products | Leafora Agro Industri';

		$this->load->library('pagination');

		$config['base_url'] = site_url('welcome/produk'); // atau sesuaikan dengan controller-mu
		$config['total_rows'] = $this->admin->count('produk');
		$config['per_page'] = 9;
		$config['uri_segment'] = 3;

		$config['full_tag_open'] = '<ul class="pagination justify-content-end">';  // horizontal & kanan
		$config['full_tag_close'] = '</ul>';

		$config['first_link'] = '&laquo;';
		$config['last_link'] = '&raquo;';
		$config['next_link'] = '&gt;';
		$config['prev_link'] = '&lt;';

		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['attributes'] = ['class' => 'page-link'];


		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$data['produk'] = $this->admin->get_limit('produk', $config['per_page'], $page);
		$data['pagination'] = $this->pagination->create_links();
		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('produk');
		$this->load->view('head_foot/footer');
	}

	public function galery()
	{
		$data['title'] = 'Galery | Leafora Agro Industri';
		// $data['galeri'] = $this->admin->get('galery');


		$this->load->library('pagination');

		$config['base_url'] = site_url('welcome/galery'); // atau sesuaikan dengan controller-mu
		$config['total_rows'] = $this->admin->count('galery');
		$config['per_page'] = 9;
		$config['uri_segment'] = 3;

		$config['full_tag_open'] = '<ul class="pagination justify-content-end">';  // horizontal & kanan
		$config['full_tag_close'] = '</ul>';

		$config['first_link'] = '&laquo;';
		$config['last_link'] = '&raquo;';
		$config['next_link'] = '&gt;';
		$config['prev_link'] = '&lt;';

		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['attributes'] = ['class' => 'page-link'];


		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$data['galeri'] = $this->admin->get_limit('galery', $config['per_page'], $page);
		$data['pagination'] = $this->pagination->create_links();


		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('galery');
		$this->load->view('head_foot/footer');
	}



	public function contact()
	{
		$data['title'] = 'Contact | Leafora Agro Industri ';

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('contact');
		$this->load->view('head_foot/footer');
	}

	public function blog()
	{
		$data['title'] = 'Blog | Leafora Agro Industri ';
		$data['posts'] = $this->blog->get_published(20, 0);
		$data['recent_posts'] = $this->blog->get_recent(5);

		// Load layout
		$this->load->view('head_foot/header', $data);
		$this->load->view('blog', $data);
		$this->load->view('head_foot/footer');
	}

	public function singleblog($slug = null)
	{
		if (!$slug || !($post = $this->blog->find_by_slug($slug))) {
			show_404();
		}

		// Bersihkan konten jika perlu (biar aman tapi HTML tetap tampil)
		$post->content = $this->security->xss_clean($post->content);

		$data['title'] = $post->title . ' | Leafora Agro Industri';
		$data['post']  = $post;
		$data['recent_posts'] = $this->blog->get_recent(5, $post->slug);

		$this->load->view('head_foot/header', $data);
		$this->load->view('singleblog', $data);
		$this->load->view('head_foot/footer');
	}




	private function _validasi($mode)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim');

		if ($mode == 'add') {
			$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
			$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
			$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('no_wa', 'no_wa', 'required|trim|numeric');
			$this->form_validation->set_rules('salary_ekspetasi', 'Salary Expetation', 'required|trim');
			$this->form_validation->set_rules('last_salary', 'Last Salary', 'required|trim');

			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required|trim');
			$this->form_validation->set_rules('experience', 'experience', 'required|trim');
			$this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
			$this->form_validation->set_rules('jk', 'jk', 'required|trim');
			$this->form_validation->set_rules('foto', 'foto', 'callback_validasi_foto');
			$this->form_validation->set_rules('cv', 'cv', 'callback_validasi_cv');
		} else {
			$db = $this->admin->get('kandidat', ['id' => $this->input->post('id', true)]);
			$username = $this->input->post('username', true);
		}
	}

	public function validasi_foto()
	{
		if (!isset($_FILES['foto']) || $_FILES['foto']['error'] != 0) {
			$this->form_validation->set_message('validasi_foto', 'Foto wajib diunggah.');
			return false;
		}

		$allowed_ext = ['jpg', 'jpeg', 'png'];
		$ext = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));

		if (!in_array($ext, $allowed_ext)) {
			$this->form_validation->set_message('validasi_foto', 'Format foto harus JPG, JPEG, atau PNG.');
			return false;
		}

		if ($_FILES['foto']['size'] > 1024 * 1024) {
			$this->form_validation->set_message('validasi_foto', 'Ukuran foto maksimal 1MB.');
			return false;
		}

		return true;
	}

	public function validasi_cv()
	{
		if (!isset($_FILES['cv']) || $_FILES['cv']['error'] != 0) {
			$this->form_validation->set_message('validasi_cv', 'CV wajib diunggah.');
			return false;
		}

		$ext = strtolower(pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION));
		if ($ext != 'pdf') {
			$this->form_validation->set_message('validasi_cv', 'CV harus berupa file PDF.');
			return false;
		}

		if ($_FILES['cv']['size'] > 1024 * 1024) {
			$this->form_validation->set_message('validasi_cv', 'Ukuran CV maksimal 1MB.');
			return false;
		}

		return true;
	}
}
