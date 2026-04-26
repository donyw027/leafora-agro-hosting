<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_galery extends CI_Controller
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
        $data['title'] = "Galery Management";
        $data['galery'] = $this->admin->get('galery');

        $this->template->load('templates/dashboard', 'galery/data', $data);
    }



    private function _validasi($mode)
    {
        // $this->form_validation->set_rules('foto', 'Foto', 'required|trim');
        $this->form_validation->set_rules('title', 'title', 'required|trim');

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
            $data['title'] = "Tambah Galeri";
            $this->template->load('templates/dashboard', 'galery/add', $data);
        } else {
            $input = $this->input->post(null, true);

            // Konfigurasi upload
            $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $config['upload_path']   = './uploads/galery/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size']      = 2048;
            $config['file_name'] = date('His') . rand(10, 99) . '.' . $ext;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $uploaded = $this->upload->data();
                $input_data = [
                    'foto'  => $uploaded['file_name'],
                    'title' => $input['title']
                ];

                if ($this->admin->insert('galery', $input_data)) {
                    set_pesan('Data berhasil disimpan.');
                    redirect('m_galery');
                } else {
                    set_pesan('Data gagal disimpan', false);
                    redirect('m_galery/add');
                }
            } else {
                set_pesan($this->upload->display_errors(), false);
                redirect('m_galery/add');
            }
        }
    }


    public function edit($id)
    {
        $galery = $this->admin->get('galery', ['id' => $id]);

        // ✅ Validasi title wajib diisi
        $this->form_validation->set_rules('title', 'Judul', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Galeri";
            $data['galery'] = $galery;
            $this->template->load('templates/dashboard', 'galery/edit', $data);
        } else {
            $input = $this->input->post(null, true);

            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path'] = './uploads/galery/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $config['max_size'] = 2048;
                $config['file_name'] = date('His') . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    if ($galery['foto'] && file_exists('./uploads/galery/' . $galery['foto'])) {
                        unlink('./uploads/galery/' . $galery['foto']);
                    }
                    $foto_baru = $this->upload->data('file_name');
                } else {
                    set_pesan($this->upload->display_errors(), false);
                    redirect('m_galery/edit/' . $id);
                }
            } else {
                $foto_baru = $galery['foto'];
            }

            $input_data = [
                'foto'  => $foto_baru,
                'title' => $input['title']
            ];

            if ($this->admin->update('galery', 'id', $id, $input_data)) {
                set_pesan('Data berhasil diupdate.');
                redirect('m_galery');
            } else {
                set_pesan('Gagal update data.', false);
                redirect('m_galery/edit/' . $id);
            }
        }
    }



    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $galery = $this->admin->get('galery', ['id' => $id]);

        // Hapus file foto jika ada
        if ($galery && $galery['foto'] && file_exists('./uploads/galery/' . $galery['foto'])) {
            unlink('./uploads/galery/' . $galery['foto']);
        }

        // Hapus data dari database
        if ($this->admin->delete('galery', 'id', $id)) {
            set_pesan('Data berhasil dihapus.');
        } else {
            set_pesan('Data gagal dihapus.', false);
        }

        redirect('m_galery');
    }
}
