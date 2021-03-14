<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KeluhanClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/keluarga/keluhan";
    }

    public function index()
    {
        $data['keluhan'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "keluhan";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/keluhan', $data);
        $this->load->view('footer');
    }
    public function berhasil()
    {
      $data['title'] = "Tambah Data keluhan";
      $this->load->view('user/berhasil', $data);
    }
    public function post()
    {
      $data['title'] = "Tambah Data keluhan";
      $this->load->view('user/keluhan', $data);
    }
  
    public function post_process()
    {
        $file_name = $_FILES['image']['name'];
        if ($file_name != '') {
            $config['upload_path'] = 'img/foto' ;
            $config['allowed_types'] = '*';

            $new_name = $file_name;
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                // redirect($_SERVER['HTTP_REFERER']);
              echo"gagal";
            } else {
                $dataFile  = $this->upload->data();
                $file_name = $dataFile['file_name'];

        $data = array(
            'nama_pengguna'      =>$this->input->post('nama_pengguna'),
            'komentar'           =>$this->input->post('komentar'),
            'status'           => 'Belum Ditangani',
            'image'              =>$file_name,
        );
        $insert =  $this->curl->simple_post($this->API,$data);
        if ($insert) {
        print_r('berhasil');
        } else {
            print_r('gagal');
        }
        redirect('keluhanclient/berhasil');

      }
    }
}
    
    public function put()
    {
        $params = array('id_keluhan' =>  $this->uri->segment(3));
        $data['keluhan'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data keluhan";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/put/keluhan', $data);
        $this->load->view('footer');

    }
    public function put_process()
    {
        $data = array(
            'id_keluhan'         => $this->input->post('id_keluhan'),
            'nama_pengguna'      =>$this->input->post('nama_pengguna'),
            'komentar'           =>$this->input->post('komentar'),
            'status'           => $this->input->post('status'),
        );
        
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            echo"berhasil";
        } else {
            echo"gagal";
        }
        redirect('keluhanclient');
    }
    public function delete()
    {
        $params = array('id_keluhan' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data keluhan Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data keluhan Gagal');
        }
        redirect('keluhanclient');
    }
}
?>