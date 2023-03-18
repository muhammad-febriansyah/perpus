<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('home', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('siswa/atas');
        $this->load->view('siswa/index');
        $this->load->view('siswa/bawah');
           
    }
    
    public function profil()
    {
        $this->load->view('siswa/atas');
        $this->load->view('siswa/profil');
        $this->load->view('siswa/bawah');
           
    }
    

    public function pinjam()
    {
        $this->load->view('siswa/atas');
        $this->load->view('siswa/pinjam');
        $this->load->view('siswa/bawah');
           
    }
    public function kembali()
    {
        $this->load->view('siswa/atas');
        $this->load->view('siswa/kembali');
        $this->load->view('siswa/bawah');
           
    }
    public function pesan()
    {
        $this->load->view('siswa/atas');
        $this->load->view('siswa/pesan');
        $this->load->view('siswa/bawah');
           
    }
    public function detailbuku($id='')
    {
        $data['id'] = $id;
        $this->load->view('siswa/atas');
        $this->load->view('siswa/detailbuku',$data);
        $this->load->view('siswa/bawah');
           
    }

    public function pinjambuku()
    {
        $judul = $_POST['judul'];
        $siswa = $this->session->userdata("nama");
        $q = $this->db->query("select * from peminjaman where buku='$judul' and siswa='$siswa' and status='Pinjam'");
        if($q->num_rows() > 0){
            $this->session->set_flashdata('msg', 'sudahpinjam');
            redirect('siswa/pinjam','refresh');
        }else{
            $this->db->query("INSERT into  peminjaman values('','$siswa','$judul',now(),'','Baik','','','Pinjam')");
            $this->session->set_flashdata('msg', 'pinjam');
            redirect('siswa/pinjam','refresh');
        }
    }

    public function kembalikan()
    {
        $buku  =$_POST['buku'];
        $kondisi  =$_POST['kondisi'];
        $siswa = $this->session->userdata("nama");
        if($kondisi == "Baik"){
            $this->db->query("UPDATE peminjaman set tglkembali=now(),kondisikembali='$kondisi',denda='0',status='Kembali' where siswa='$siswa' and buku='$buku'");
        }elseif($kondisi == "Rusak"){
            $this->db->query("UPDATE peminjaman set tglkembali=now(),kondisikembali='$kondisi',denda='20000',status='Kembali' where siswa='$siswa' and buku='$buku'");
        }else{
            $this->db->query("UPDATE peminjaman set tglkembali=now(),kondisikembali='$kondisi',denda='50000',status='Kembali' where siswa='$siswa' and buku='$buku'");
        }
        $this->session->set_flashdata('msg', 'kembali');
        redirect('siswa/kembali','refresh');
    }

    public function updateprofil()
    {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $id = $this->session->userdata("id");
        if ($password != "") {
            $this->db->query("UPDATE siswa set nis='$nis',nama='$nama',username='$username',password=md5('$password'),kelas='$kelas',alamat='$alamat' where id='$id'");
        } else {
            $this->db->query("UPDATE siswa set nis='$nis',nama='$nama',username='$username',kelas='$kelas',alamat='$alamat' where id='$id'");
        }
        $this->session->set_flashdata('msg', 'profil');
        redirect('siswa/profil', 'refresh');
    }
}

/* End of file Siswa.php */