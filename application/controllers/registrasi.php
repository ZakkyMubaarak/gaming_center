<?php 

class Registrasi extends CI_Controller{

    public function index()
    {
        $this->form_validation->set_rules('nama',' Nama', 'required', [
            'required'  => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('username',' Username', 'required', [
            'required'  => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('no_ktp',' No_ktp', 'required', [
            'required'  => 'No_ktp wajib diisi!'
        ]);
        $this->form_validation->set_rules('password_1',' Password', 'required|matches[password_2]', [
            'required'  => 'Password wajib diisi!',
            'matches'   => 'Password tidak cocok'
        ]);
        $this->form_validation->set_rules('password_2',' Password','required|matches[password_1]');

        if($this->form_validation->run() == FALSE)  {
        $this->load->view('templates/header');
        $this->load->view('registrasi');
        $this->load->view('templates/footer');
        } else {
            $data = array(
                'id_user'   =>  '',
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'no_ktp'    => $this->input->post('no_ktp'),
                'password'  => $this->input->post('password_1'),
                'role_id'   => 2,
        );

        $this->db->insert('tb_user',$data);
        redirect('auth/login');

        }
    }
}