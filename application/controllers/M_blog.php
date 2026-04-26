<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_blog extends CI_Controller
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
        $data['title'] = "blog Management";
        $data['blog'] = $this->admin->get('blog');

        $this->template->load('templates/dashboard', 'blog/data', $data);
    }


    private function _validasi($mode)
    {
        $this->form_validation->set_rules('title', 'Judul', 'required|trim');
        // $this->form_validation->set_rules('status','Status','required|in_list[draft,publish]');
        return $this->form_validation->run();   // <-- penting
    }


    private function slug_exists($slug, $ignore_id = null)
    {
        $this->db->from('blog')->where('slug', $slug);
        if ($ignore_id) $this->db->where('id !=', $ignore_id);
        return $this->db->count_all_results() > 0;
    }

    private function slug_from_title($title, $ignore_id = null)
    {
        $this->load->helper(['url', 'text', 'string']); // url_title, convert_accented_characters, random_string
        $base = url_title(convert_accented_characters($title), 'dash', true); // "My Post" -> "my-post"
        if ($base === '') $base = strtolower(random_string('alnum', 8));

        $slug = $base;
        $i = 2;
        while ($this->slug_exists($slug, $ignore_id)) {
            $slug = $base . '-' . $i++;               // my-post-2, my-post-3, ...
        }
        return $slug;
    }


    public function add()
    {
        date_default_timezone_set('Asia/Jakarta');
        if (!$this->_validasi('add')) {
            $data['title'] = "Tambah blog";
            // supaya tahu kenapa gagal:
            // log_message('error', validation_errors());
            return $this->template->load('templates/dashboard', 'blog/add', $data);
        }

        $input = $this->input->post(null, true);
        $slug  = $this->slug_from_title($input['title']);

        // upload optional
        $foto_name = null;
        if (!empty($_FILES['foto']['name'])) {

            $original   = $_FILES['foto']['name'];
            $ext        = strtolower(pathinfo($original, PATHINFO_EXTENSION)); // <- definisikan dulu
            $new_name   = date('His') . rand(10, 99) . '.' . $ext;             // format custom

            $config = [
                'upload_path'      => './uploads/blog/',
                'allowed_types'    => 'jpg|jpeg|png|webp',
                'max_size'         => 2048,
                'file_ext_tolower' => true,
                'detect_mime'      => true,
                'remove_spaces'    => true,
                // JANGAN pakai encrypt_name kalau mau nama custom
                'encrypt_name'     => false,
                'overwrite'        => false,
                'file_name'        => $new_name,
            ];

            if (!is_dir($config['upload_path'])) {
                mkdir($config['upload_path'], 0755, true);
            }

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                set_pesan($this->upload->display_errors(), false);
                return redirect('m_blog/add');
            }

            $foto_name = $this->upload->data('file_name'); // akan sama dengan $new_name
        }

        // fallback status & format tanggal
        $status = isset($input['status']) && in_array($input['status'], ['draft', 'publish'])
            ? $input['status'] : 'draft';

        $row = [
            'title'      => $input['title'],
            'slug'       => $slug,
            'content'    => $input['content'],
            'foto'       => $foto_name,
            'status'     => $status,
            'created_at' => date('d M y H:i'),   // pakai format DATETIME
        ];

        if ($this->admin->insert('blog', $row)) {
            set_pesan('Data berhasil disimpan.');
            return redirect('m_blog');
        }
        set_pesan('Data gagal disimpan', false);
        return redirect('m_blog/add');
    }




    public function edit($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        // Lebih baik set timezone di index.php/config.php, bukan di sini
        $blog = $this->admin->get('blog', ['id' => $id]) ?: show_404();

        if (!$this->_validasi('edit')) { // <- pakai _validasi, bukan _rules
            $data['title'] = "Edit Blog";
            $data['blog']  = $blog;
            return $this->template->load('templates/dashboard', 'blog/edit', $data);
        }

        $input = $this->input->post(null, true);

        // ==== Upload foto (opsional) ====
        $foto_baru = $blog['foto'];
        if (!empty($_FILES['foto']['name'])) {
            $original = $_FILES['foto']['name'];
            $ext      = strtolower(pathinfo($original, PATHINFO_EXTENSION));
            $new_name = date('His') . rand(10, 99) . '.' . $ext;   // konsisten dgn add()

            $config = [
                'upload_path'      => './uploads/blog/',
                'allowed_types'    => 'jpg|jpeg|png|webp',
                'max_size'         => 2048,
                'file_ext_tolower' => true,
                'detect_mime'      => true,
                'remove_spaces'    => true,
                'encrypt_name'     => false,
                'overwrite'        => false,
                'file_name'        => $new_name,
            ];

            if (!is_dir($config['upload_path'])) {
                mkdir($config['upload_path'], 0755, true);
            }

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                // Hapus file lama kalau ada
                if (!empty($blog['foto']) && file_exists('./uploads/blog/' . $blog['foto'])) {
                    @unlink('./uploads/blog/' . $blog['foto']);
                }
                $foto_baru = $this->upload->data('file_name');
            } else {
                set_pesan($this->upload->display_errors(), false);
                return redirect('m_blog/edit/' . $id);
            }
        }

        // ==== Slug: kalau mau slug ikut title, pakai ini; kalau mau tetap, pakai $blog['slug'] ====
        $slug_baru = $this->slug_from_title($input['title'], $id);

        // (Opsional) validasi status sederhana
        $status = isset($input['status']) && in_array($input['status'], ['draft', 'publish'])
            ? $input['status'] : 'draft';

        $row = [
            'title'      => $input['title'],
            'slug'       => $slug_baru,                 // ganti jadi $blog['slug'] jika slug ingin tetap
            'content'    => $input['content'],
            'foto'       => $foto_baru,
            'status'     => $status,
            'created_at' => date('d M y H:i'),        // gunakan format DATETIME standar
        ];

        if ($this->admin->update('blog', 'id', $id, $row)) {
            set_pesan('Data berhasil diupdate.');
            return redirect('m_blog');
        }

        set_pesan('Gagal update data.', false);
        return redirect('m_blog/edit/' . $id);
    }





    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $blog = $this->admin->get('blog', ['id' => $id]);

        // Hapus file foto jika ada
        if ($blog && $blog['foto'] && file_exists('./uploads/blog/' . $blog['foto'])) {
            unlink('./uploads/blog/' . $blog['foto']);
        }

        // Hapus data dari database
        if ($this->admin->delete('blog', 'id', $id)) {
            set_pesan('Data berhasil dihapus.');
        } else {
            set_pesan('Data gagal dihapus.', false);
        }

        redirect('m_blog');
    }
}
