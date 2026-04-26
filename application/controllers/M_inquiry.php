<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_inquiry extends CI_Controller
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
        $data['title'] = "View inquiry";
        $data['inquiry'] = $this->admin->get('inquiry');

        $this->template->load('templates/dashboard', 'inquiry/data', $data);
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
            'subjek'     => $input['subjek'],
            'pesan'      => $input['pesan'],
            'created_at' => date('d-M-y H:i') // pertimbangkan time() untuk format konsisten


        ];

        if ($this->admin->insert('inquiry', $data)) {

            // Kirim email notifikasi
            $this->load->library('email'); // otomatis pakai config/email.php

            $this->email->from('marketing@leaforaagro.com', 'Leafora Agro Industri');
            $this->email->to('agrowpacific@gmail.com');
            // $this->email->reply_to('marketing@leaforaagro.com', 'NTE'); // opsional
            $this->email->subject('Notifikasi Inquiry Baru');

            // rakit HTML (aman & rapi)
            $html  = '<h3>Inquiry</h3>';
            $html .= '<p><b>Nama:</b> '   . htmlspecialchars($input['nama'])   . '</p>';
            $html .= '<p><b>Email:</b> '  . htmlspecialchars($input['email'])  . '</p>';
            $html .= '<p><b>Negara:</b> ' . htmlspecialchars($input['negara']) . '</p>';
            $html .= '<p><b>No WA:</b> '  . htmlspecialchars($input['no_wa'])  . '</p>';
            $html .= '<p><b>Subjek:</b> ' . htmlspecialchars($input['subjek']) . '</p>';
            $html .= '<p><b>Pesan:</b><br>' . nl2br(htmlspecialchars($input['pesan'])) . '</p>';

            $this->email->message($html);

            if ($this->email->send()) {
                set_pesan('Pesan Berhasil Terkirim & email notifikasi dikirim.');
            } else {
                // tampilkan error singkat saja ke user; detailnya di log
                log_message('error', 'Email gagal: ' . $this->email->print_debugger(['headers']));
                set_pesan('Pesan terkirim, tapi email notifikasi gagal dikirim.', false);
            }

            redirect('contact');
            return; // pastikan eksekusi berhenti di sini
        }

        set_pesan('Pesan gagal terkirim', false);
        redirect('contact');
    }

    public function send()
    {
        date_default_timezone_set('Asia/Jakarta');
        $input = $this->input->post(null, true);

        // Simpan ke DB
        $data = [
            'nama'       => $input['nama'],
            'email'      => $input['email'],
            'negara'     => $input['negara'],
            'no_wa'      => $input['no_wa'],
            'subjek'     => $input['subjek'],
            'pesan'      => $input['pesan'],
            'created_at' => date('d-M-y H:i') // pertimbangkan time() untuk format konsisten


        ];

        if ($this->admin->insert('inquiry', $data)) {

            // Kirim email notifikasi
            $this->load->library('email'); // otomatis pakai config/email.php

            $this->email->from('marketing@leaforaagro.com', 'Leafora Agro Industri');
            $this->email->to('agrowpacific@gmail.com');
            // $this->email->reply_to('marketing@leaforaagro.com', 'NTE'); // opsional
            $this->email->subject('Notifikasi Inquiry Baru');

            // rakit HTML (aman & rapi)
            $html  = '<h3>Inquiry</h3>';
            $html .= '<p><b>Nama:</b> '   . htmlspecialchars($input['nama'])   . '</p>';
            $html .= '<p><b>Email:</b> '  . htmlspecialchars($input['email'])  . '</p>';
            $html .= '<p><b>Negara:</b> ' . htmlspecialchars($input['negara']) . '</p>';
            $html .= '<p><b>No WA:</b> '  . htmlspecialchars($input['no_wa'])  . '</p>';
            $html .= '<p><b>Subjek:</b> ' . htmlspecialchars($input['subjek']) . '</p>';
            $html .= '<p><b>Pesan:</b><br>' . nl2br(htmlspecialchars($input['pesan'])) . '</p>';

            $this->email->message($html);

            if ($this->email->send()) {
                set_pesan('Pesan Berhasil Terkirim.');
            } else {
                // tampilkan error singkat saja ke user; detailnya di log
                log_message('error', 'Email gagal: ' . $this->email->print_debugger(['headers']));
                set_pesan('Pesan terkirim.', false);
            }

            redirect('home');
            return; // pastikan eksekusi berhenti di sini
        }

        set_pesan('Pesan gagal terkirim', false);
        redirect('home');
    }


    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $inquiry = $this->admin->get('inquiry', ['id' => $id]);

        // Hapus file foto jika ada
        if ($inquiry && $inquiry['foto'] && file_exists('./uploads/inquiry/' . $inquiry['foto'])) {
            unlink('./uploads/inquiry/' . $inquiry['foto']);
        }

        // Hapus data dari database
        if ($this->admin->delete('inquiry', 'id', $id)) {
            set_pesan('Data berhasil dihapus.');
        } else {
            set_pesan('Data gagal dihapus.', false);
        }

        redirect('m_inquiry');
    }
}
