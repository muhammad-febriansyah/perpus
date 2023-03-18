<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('welcome', 'refresh');
        }
        $this->load->library('fpdf');

    }

    public function index()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/index');
        $this->load->view('assets/bawah');
    }
    public function profil()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/profil');
        $this->load->view('assets/bawah');
    }

    public function setting()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/setting');
        $this->load->view('assets/bawah');
    }

    public function updateprofil()
    {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $this->session->userdata("id");
        if ($password != "") {
            $this->db->query("UPDATE admin set nama='$nama',username='$username',password=md5('$password') where id='$id'");
        } else {
            $this->db->query("UPDATE admin set nama='$nama',username='$username' where id='$id'");
        }
        $this->session->set_flashdata('msg', 'profil');
        redirect('main/profil', 'refresh');
    }

    public function setlogo()
    {
        $config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->upload->do_upload('gambar')) {
                echo false;
            } else {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './image/' . $gbr['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = true;
                $config['quality'] = '80%';
                $config['width'] = 1024;
                $config['height'] = 768;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $q = $this->db->query("select * from setting");
                $row = $q->row();
                unlink('./image/' . $row->logo);
                $this->db->query("update setting set logo='$gambar'");
                $this->session->set_flashdata('msg', 'edit');
                redirect('main/setting', 'refresh');

            }
        }
    }

    public function updatesetting()
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $h = $_POST['h'];
        $this->db->query("UPDATE setting SET web='$a',keyword='$b',telp='$c',email='$d',alamat='$h'");
        $this->session->set_flashdata('msg', 'edit');
        redirect('main/setting', 'refresh');
    }

    public function user()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/user');
        $this->load->view('assets/bawah');
    }
    public function adduser()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/adduser');
        $this->load->view('assets/bawah');
    }

    public function hapususer($id = '')
    {
        $this->db->query("delete from admin where id='$id'");
        $this->session->set_flashdata('msg', 'hapus');
        redirect('main/user', 'refresh');
    }

    public function saveuser()
    {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->db->query("insert into admin values('','$nama','$username',md5('$password'))");
        $this->session->set_flashdata('msg', 'success');
        redirect('main/user', 'refresh');
    }

    public function siswa()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/siswa');
        $this->load->view('assets/bawah');
    }
    public function buku()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/buku');
        $this->load->view('assets/bawah');
    }
    public function addbuku()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/addbuku');
        $this->load->view('assets/bawah');
    }
    public function kategori()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/kategori');
        $this->load->view('assets/bawah');
    }

    public function savekategori()
    {
        $kat = $_POST['kat'];
        $this->db->query("INSERT into kategori values('','$kat')");
        $this->session->set_flashdata('msg', 'success');
        redirect('main/kategori', 'refresh');
    }

    public function hapuskategori($id = '')
    {
        $this->db->query("delete from kategori where id='$id'");
        $this->session->set_flashdata('msg', 'hapus');
        redirect('main/kategori', 'refresh');
    }

    public function savebuku()
    {
        $config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("gambar")) { //upload file
            $gbr = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = './image/' . $gbr['file_name'];
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = true;
            $config['quality'] = '80%';
            $config['width'] = 1024;
            $config['height'] = 768;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $gambar = $gbr['file_name'];
            $judul = $_POST['judul'];
            $kategori = $_POST['kategori'];
            $pengarang = $_POST['pengarang'];
            $terbit = $_POST['terbit'];
            $kondisi = $_POST['kondisi'];
            $iduser = $this->session->userdata('id');
            $this->db->query("insert into buku values('','$judul','$kategori','$iduser','$pengarang','$terbit','$gambar','$kondisi')");
            $this->session->set_flashdata('msg', 'success');
            redirect('main/buku', 'refresh');
        } else {
            $this->session->set_flashdata('msg', 'gagal');
            redirect('main/buku', 'refresh');
        }
    }

    public function hapusbuku($id = '')
    {
        $q = $this->db->query("select * from buku where id='$id'");
        $row = $q->row();
        unlink('./image/' . $row->cover);
        $this->db->query("delete from buku where id='$id'");
        $this->session->set_flashdata('msg', 'hapus');
        redirect('main/buku', 'refresh');
    }

    public function editbuku($id = '')
    {
        $data['id'] = $id;
        $this->load->view('assets/atas');
        $this->load->view('assets/editbuku', $data);
        $this->load->view('assets/bawah');
    }

    public function detailbuku($id = '')
    {
        $data['id'] = $id;
        $this->load->view('assets/atas');
        $this->load->view('assets/detailbuku', $data);
        $this->load->view('assets/bawah');
    }

    public function updatebuku($id = '')
    {
        $config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->upload->do_upload('gambar')) {
                echo false;
            } else {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './image/' . $gbr['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = true;
                $config['quality'] = '50%';
                $config['width'] = 256;
                $config['height'] = 256;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $judul = $_POST['judul'];
                $kategori = $_POST['kategori'];
                $pengarang = $_POST['pengarang'];
                $terbit = $_POST['terbit'];
                $kondisi = $_POST['kondisi'];
                $q = $this->db->query("select * from buku where id='$id'");
                $row = $q->row();
                unlink('./image/' . $row->cover);
                $this->db->query("UPDATE buku set judul='$judul',kategori='$kategori',pengarang='$pengarang',terbit='$terbit',cover='$gambar',jenis='$kondisi' where id='$id'");
                $this->session->set_flashdata('msg', 'edit');
                redirect('main/buku', 'refresh');
            }
        } else {
            $judul = $_POST['judul'];
            $kategori = $_POST['kategori'];
            $pengarang = $_POST['pengarang'];
            $terbit = $_POST['terbit'];
            $kondisi = $_POST['kondisi'];
            $this->db->query("UPDATE buku SET judul='$judul',kategori='$kategori',pengarang='$pengarang',terbit='$terbit',jenis='$kondisi' WHERE id='$id'");
            $this->session->set_flashdata('msg', 'edit');
            redirect('main/buku', 'refresh');
        }
    }

    public function pesan()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/pesan');
        $this->load->view('assets/bawah');
    }
    public function peminjaman()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/peminjaman');
        $this->load->view('assets/bawah');
    }
    public function laporan()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/laporan');
        $this->load->view('assets/bawah');
    }

    public function hapussiswa($id = '')
    {
        $this->db->query("delete from siswa where id='$id'");
        $this->session->set_flashdata('msg', 'hapus');
        redirect('main/siswa', 'refresh');
    }

    public function kirimpesan()
    {
        $penerima = $_POST['penerima'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $pengirim = $this->session->userdata("nama");
        $this->db->query("INSERT into pesan values('','$penerima','$pengirim','$judul','$isi','Terkirim',now())");
        $this->session->set_flashdata('msg', 'pesan');
        redirect('main/pesan', 'refresh');
    }

    public function hapuspesan($id='')
    {
        $this->db->query("DELETE from pesan where id='$id'");
        $this->session->set_flashdata('msg', 'hapus');
        redirect('main/pesan', 'refresh');
    }

    public function caripinjam()
    {
        $data['pinjam'] = $_POST['pinjam'];
        $this->load->view('assets/caripinjam', $data);
    }
    public function carikembali()
    {
        $data['kembali'] = $_POST['kembali'];
        $this->load->view('assets/carikembali', $data);
    }
    public function carisiswa()
    {
        $data['siswa'] = $_POST['siswa'];
        $this->load->view('assets/carisiswa', $data);
    }
}

/* End of file Main.php */
