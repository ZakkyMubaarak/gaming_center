<?php

class Kategori extends CI_Controller{
    public function Playstasion()
    {
        $data['playstasion'] = $this->model_kategori->data_playstasion()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('playstasion',$data);
        $this->load->view('templates/footer');
    }

    public function Nintendo()
    {
        $data['nintendo'] = $this->model_kategori->data_nintendo()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('nintendo',$data);
        $this->load->view('templates/footer');
    }

    public function Xbox()
    {
        $data['xbox'] = $this->model_kategori->data_xbox()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('xbox',$data);
        $this->load->view('templates/footer');
    }

    public function PSP()
    {
        $data['psp'] = $this->model_kategori->data_psp()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('psp',$data);
        $this->load->view('templates/footer');
    }
    public function kontakkami()
    {
        $data['kontakkami'] = $this->model_kategori->data_kontakkami()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kontakkami',$data);
        $this->load->view('templates/footer');
    }
}