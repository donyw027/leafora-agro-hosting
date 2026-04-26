<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_slider extends CI_Controller
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
        $data['title'] = 'Slider Management';
        $data['sliders'] = $this->admin->get_all_slider();
        $this->template->load('templates/dashboard', 'slider/data', $data);
    }

    private function _rules()
    {
        $this->form_validation->set_rules('badge_text', 'Badge Text', 'required|trim');
        $this->form_validation->set_rules('title_text', 'Title', 'required|trim');
        $this->form_validation->set_rules('description_text', 'Description', 'required|trim');
        $this->form_validation->set_rules('small_title', 'Small Title', 'required|trim');
        $this->form_validation->set_rules('small_description', 'Small Description', 'required|trim');
        $this->form_validation->set_rules('button_primary_url', 'Primary Button URL', 'required|trim');
        $this->form_validation->set_rules('button_secondary_url', 'Secondary Button URL', 'required|trim');
        $this->form_validation->set_rules('sort_order', 'Sort Order', 'required|integer');
        $this->form_validation->set_rules('is_active', 'Status', 'required|in_list[0,1]');
    }

    public function add()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Slider';
            $this->template->load('templates/dashboard', 'slider/add', $data);
            return;
        }

        if (empty($_FILES['background_image']['name'])) {
            set_pesan('Background image wajib diupload.', false);
            redirect('m_slider/add');
        }

        $upload = $this->_upload_image('background_image');
        if (!$upload['status']) {
            set_pesan($upload['message'], false);
            redirect('m_slider/add');
        }

        $input = $this->input->post(null, true);
        $data_insert = [
            'badge_text' => $input['badge_text'],
            'title_text' => $input['title_text'],
            'description_text' => $input['description_text'],
            'small_title' => $input['small_title'],
            'small_description' => $input['small_description'],
            'button_primary_url' => $input['button_primary_url'],
            'button_secondary_url' => $input['button_secondary_url'],
            'background_image' => $upload['file_name'],
            'sort_order' => (int) $input['sort_order'],
            'is_active' => (int) $input['is_active'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($this->admin->insert('slider_home', $data_insert)) {
            set_pesan('Slider berhasil ditambahkan.');
            redirect('m_slider');
        }

        set_pesan('Slider gagal ditambahkan.', false);
        redirect('m_slider/add');
    }

    public function edit($id)
    {
        $slider = $this->admin->get('slider_home', ['id' => $id]);
        if (!$slider) {
            show_404();
        }

        $this->_rules();

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Slider';
            $data['slider'] = $slider;
            $this->template->load('templates/dashboard', 'slider/edit', $data);
            return;
        }

        $input = $this->input->post(null, true);
        $background_image = $slider['background_image'];

        if (!empty($_FILES['background_image']['name'])) {
            $upload = $this->_upload_image('background_image');
            if (!$upload['status']) {
                set_pesan($upload['message'], false);
                redirect('m_slider/edit/' . $id);
            }

            if (!empty($background_image) && file_exists(FCPATH . 'uploads/slider/' . $background_image)) {
                unlink(FCPATH . 'uploads/slider/' . $background_image);
            }

            $background_image = $upload['file_name'];
        }

        $data_update = [
            'badge_text' => $input['badge_text'],
            'title_text' => $input['title_text'],
            'description_text' => $input['description_text'],
            'small_title' => $input['small_title'],
            'small_description' => $input['small_description'],
            'button_primary_url' => $input['button_primary_url'],
            'button_secondary_url' => $input['button_secondary_url'],
            'background_image' => $background_image,
            'sort_order' => (int) $input['sort_order'],
            'is_active' => (int) $input['is_active'],
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($this->admin->update('slider_home', 'id', $id, $data_update)) {
            set_pesan('Slider berhasil diupdate.');
            redirect('m_slider');
        }

        set_pesan('Slider gagal diupdate.', false);
        redirect('m_slider/edit/' . $id);
    }

    public function delete($id)
    {
        $slider = $this->admin->get('slider_home', ['id' => $id]);
        if (!$slider) {
            show_404();
        }

        if (!empty($slider['background_image']) && file_exists(FCPATH . 'uploads/slider/' . $slider['background_image'])) {
            unlink(FCPATH . 'uploads/slider/' . $slider['background_image']);
        }

        if ($this->admin->delete('slider_home', 'id', $id)) {
            set_pesan('Slider berhasil dihapus.');
        } else {
            set_pesan('Slider gagal dihapus.', false);
        }

        redirect('m_slider');
    }

    private function _upload_image($field_name)
    {
        $ext = pathinfo($_FILES[$field_name]['name'], PATHINFO_EXTENSION);
        $config['upload_path'] = './uploads/slider/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp|JPG|JPEG|PNG|WEBP';
        $config['max_size'] = 4096;
        $config['file_name'] = 'slider_' . date('YmdHis') . '_' . rand(10, 99) . '.' . $ext;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload($field_name)) {
            $uploaded = $this->upload->data();
            return [
                'status' => true,
                'file_name' => $uploaded['file_name']
            ];
        }

        return [
            'status' => false,
            'message' => $this->upload->display_errors('', '')
        ];
    }
}
