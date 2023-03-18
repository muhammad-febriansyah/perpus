<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
    {
        $this->load->view('frontend/atas');
        $this->load->view('frontend/index');
        $this->load->view('frontend/bawah');
           
    }
    
    public function login()
    {
        $this->load->view('frontend/atas');
        $this->load->view('frontend/login');
        $this->load->view('frontend/bawah');
           
    }

    public function regis()
    {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $this->db->query("INSERT into siswa values('','$nis','$nama','$username',md5('$password'),'$kelas','$alamat',now())");
        $this->session->set_flashdata('msg', 'regis');
        redirect('home','refresh');
    }



    public function cekuser()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$q = $this->db->query("select * from siswa where username='$username' and password=md5('$password')");
		if($q->num_rows() > 0){
			$row =$q->row();
			$data = array(
				"id"	=>	$row->id,
				"nama"	=> $row->nama
			);
			$this->session->set_userdata($data);
			redirect('siswa/','refresh');
		}else{
			$this->session->set_flashdata('msg', 'error');
			redirect('home/login','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/','refresh');
	}
}

/* End of file Home.php */
