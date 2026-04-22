<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Home';
        $data['active'] = 'home';
        $data['artikel'] = $this->db->get('artikel')->result_array();

        $this->load->view('home', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Artikel';
        $data['active'] = 'home';
        $data['detail'] = $this->db->get_where('artikel', array('id' => $id))->row_array();

        $this->load->view('detail', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            $data = array(
                'judul'   => $this->input->post('judul'),
                'penulis' => $this->input->post('penulis'),
                'isi'     => $this->input->post('isi')
            );

            $this->db->insert('artikel', $data);
            redirect('artikel');
        }

        $data['title'] = 'Tambah Artikel';
        $data['active'] = 'tambah';

        $this->load->view('tambah', $data);
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            $data = array(
                'judul'   => $this->input->post('judul'),
                'penulis' => $this->input->post('penulis'),
                'isi'     => $this->input->post('isi')
            );

            $this->db->where('id', $id);
            $this->db->update('artikel', $data);

            redirect('artikel');
        }

        $data['title'] = 'Edit Artikel';
        $data['active'] = 'home';
        $data['edit'] = $this->db->get_where('artikel', array('id' => $id))->row_array();

        $this->load->view('edit', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('artikel', array('id' => $id));
        redirect('artikel');
    }

    public function tentang()
    {
        $data['title'] = 'Tentang';
        $data['active'] = 'tentang';

        $this->load->view('tentang', $data);
    }
}