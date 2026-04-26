<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        if (!is_admin()) {
            redirect('dashboard');
        }

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Produk Management";
        $data['produk'] = $this->admin->get('produk');

        $this->template->load('templates/dashboard', 'produk/data', $data);
    }



    private function _validasi($mode)
    {
        // $this->form_validation->set_rules('foto', 'Foto', 'required|trim');
        $this->form_validation->set_rules('detail', 'detail', 'required|trim');

        if ($mode == 'add') {
            // $this->form_validation->set_rules('foto', 'foto', 'required|trim|is_unique[user.foto]|alpha_numeric');
        } else {
            $db = $this->admin->get('user', ['id_user' => $this->input->post('id_user', true)]);
            $username = $this->input->post('username', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Produk";
            $this->template->load('templates/dashboard', 'produk/add', $data);
        } else {
            $input = $this->input->post(null, true);

            // Konfigurasi upload
            $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $config['upload_path']   = './uploads/produk/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp|PNG';
            $config['max_size']      = 2048;
            $config['file_name'] = date('His') . rand(10, 99) . '.' . $ext;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $uploaded = $this->upload->data();
                $input_data = [
                    'nama_produk' => $input['nama_produk'],
                    'foto'  => $uploaded['file_name'],
                    'detail' => $input['detail']
                ];

                if ($this->admin->insert('produk', $input_data)) {
                    set_pesan('Data berhasil disimpan.');
                    redirect('m_produk');
                } else {
                    set_pesan('Data gagal disimpan', false);
                    redirect('m_produk/add');
                }
            } else {
                set_pesan($this->upload->display_errors(), false);
                redirect('m_produk/add');
            }
        }
    }


    public function edit($id)
    {
        $produk = $this->admin->get('produk', ['id' => $id]);

        // ✅ Validasi title wajib diisi
        $this->form_validation->set_rules('detail', 'detail', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Galeri";
            $data['produk'] = $produk;
            $this->template->load('templates/dashboard', 'produk/edit', $data);
        } else {
            $input = $this->input->post(null, true);

            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path'] = './uploads/produk/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $config['max_size'] = 2048;
                $config['file_name'] = date('His') . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    if ($produk['foto'] && file_exists('./uploads/produk/' . $produk['foto'])) {
                        unlink('./uploads/produk/' . $produk['foto']);
                    }
                    $foto_baru = $this->upload->data('file_name');
                } else {
                    set_pesan($this->upload->display_errors(), false);
                    redirect('m_produk/edit/' . $id);
                }
            } else {
                $foto_baru = $produk['foto'];
            }

            $input_data = [
                'nama_produk' => $input['nama_produk'],
                'foto'  => $foto_baru,
                'detail' => $input['detail']
            ];

            if ($this->admin->update('produk', 'id', $id, $input_data)) {
                set_pesan('Data berhasil diupdate.');
                redirect('m_produk');
            } else {
                set_pesan('Gagal update data.', false);
                redirect('m_produk/edit/' . $id);
            }
        }
    }



    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $produk = $this->admin->get('produk', ['id' => $id]);

        // Hapus file foto jika ada
        if ($produk && $produk['foto'] && file_exists('./uploads/produk/' . $produk['foto'])) {
            unlink('./uploads/produk/' . $produk['foto']);
        }

        // Hapus data dari database
        if ($this->admin->delete('produk', 'id', $id)) {
            set_pesan('Data berhasil dihapus.');
        } else {
            set_pesan('Data gagal dihapus.', false);
        }

        redirect('m_produk');
    }
}
