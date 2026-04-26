<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_quotation extends CI_Controller
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
        $data['title'] = "View Quotation";
        $data['quotation'] = $this->admin->get('quotation');

        $this->template->load('templates/dashboard', 'quotation/data', $data);
    }

    public function test_email()
    {
        $this->load->library('email');
        $this->email->from('marketing@leaforaagro.com', 'Leafora Agro');
        $this->email->to('agrowpacific@gmail.com');
        $this->email->subject('Test SMTP');
        $this->email->message('Hello, test SMTP');

        if ($this->email->send()) {
            echo 'OK';
        } else {
            echo nl2br($this->email->print_debugger(['headers']));
        }
    }





    public function add()
    {
        date_default_timezone_set('Asia/Jakarta');
        $input = $this->input->post(null, true);

        // Simpan ke DB
        $data = [
            'nama'       => $input['nama'],
            'email'      => $input['email'],
            'negara'     => $input['negara'],
            'no_wa'      => $input['no_wa'],
            'produk'      => $input['produk'],
            'created_at' => date('d-M-y H:i') // pertimbangkan time() untuk format konsisten


        ];

        if ($this->admin->insert('quotation', $data)) {

            // Kirim email notifikasi
            $this->load->library('email'); // otomatis pakai config/email.php

            $this->email->from('marketing@leaforaagro.com', 'Leafora Agro Industri');
            $this->email->to('agrowpacific@gmail.com');
            // $this->email->reply_to('marketing@leaforaagro.com', 'NTE'); // opsional
            $this->email->subject('Notifikasi quotation Baru');

            // rakit HTML (aman & rapi)
            $html  = '<h3>quotation</h3>';
            $html .= '<p><b>Nama:</b> '   . htmlspecialchars($input['nama'])   . '</p>';
            $html .= '<p><b>Email:</b> '  . htmlspecialchars($input['email'])  . '</p>';
            $html .= '<p><b>Negara:</b> ' . htmlspecialchars($input['negara']) . '</p>';
            $html .= '<p><b>No WA:</b> '  . htmlspecialchars($input['no_wa'])  . '</p>';
            $html .= '<p><b>Produk:</b> '  . htmlspecialchars($input['produk'])  . '</p>';


            $this->email->message($html);

            if ($this->email->send()) {
                set_pesan('Pesan Berhasil Terkirim.');
            } else {
                // tampilkan error singkat saja ke user; detailnya di log
                log_message('error', 'Email gagal: ' . $this->email->print_debugger(['headers']));
                set_pesan('Pesan terkirim.', false);
            }

            redirect('produk');
            return; // pastikan eksekusi berhenti di sini
        }

        set_pesan('Pesan gagal terkirim', false);
        redirect('produk');
    }




    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $quotation = $this->admin->get('quotation', ['id' => $id]);

        // Hapus file foto jika ada
        if ($quotation && $quotation['foto'] && file_exists('./uploads/quotation/' . $quotation['foto'])) {
            unlink('./uploads/quotation/' . $quotation['foto']);
        }

        // Hapus data dari database
        if ($this->admin->delete('quotation', 'id', $id)) {
            set_pesan('Data berhasil dihapus.');
        } else {
            set_pesan('Data gagal dihapus.', false);
        }

        redirect('m_quotation');
    }
}
