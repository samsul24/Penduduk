<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PendudukClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/keluarga/penduduk";
        $this->API2 = "http://localhost:8080/keluarga/kategori";
    }

    public function index()
    {
        $data['penduduk'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Penduduk";
        $this->load->view('header0');
        $this->load->view('bar1');
        $this->load->view('data/datapenduduk', $data);
        $this->load->view('footer');
    }

    public function post(){
      // $this->API = "http://localhost:8080/keluarga/penduduk";
      // $data['penduduk'] = json_decode($this->curl->simple_get($this->API));
      $this->API2 = "http://localhost:8080/keluarga/kategori";
      $data['kategori'] = json_decode($this->curl->simple_get($this->API2));
      $data['title'] = "Tambah Data Penduduk";
      $this->load->view('header0', $data, FALSE);
      $this->load->view('bar', $data, FALSE);
      $this->load->view('data/post/penduduk', $data, FALSE);
      $this->load->view('footer', $data, FALSE);
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
        'no_kk'                 => $this->input->post('no_kk'),
        'nik'                   => $this->input->post('nik'),
        'nama'                  => $this->input->post('nama'),
        'ttl'                   => $this->input->post('ttl'),
        'jenis_kelamin'         => $this->input->post('jenis_kelamin'),
        'alamat'                => $this->input->post('alamat'),
        'rt'                     => $this->input->post('rt'),
        'rw'                      => $this->input->post('rw'),
        'kel_des'                => $this->input->post('kel_des'),
        'kecamatan'                => $this->input->post('kecamatan'),
        'agama'                 => $this->input->post('agama'),
        'status_perkawinan'     => $this->input->post('status_perkawinan'),
        'pekerjaan'             => $this->input->post('pekerjaan'),
        'kewarganegaraan'       => $this->input->post('kewarganegaraan'),
        'berlaku'               => $this->input->post('berlaku'),
        'gaji'               => $this->input->post('gaji'),
        'image'                  => $file_name,
      );
      // var_dump($data);
      // die;

      $insert = $this->curl->simple_post($this->API, $data);
      if ($insert) {
        $this->session->set_flashdata('result', '');

        redirect('pendudukclient', 'refresh');
      } else {
        $this->session->set_flashdata('result', '');
      }
      redirect('pendudukclient', 'refresh');
    }
  }
}
    public function put()
    {
        $params = array('id_penduduk' =>  $this->uri->segment(3));
        $data['kartupenduduk'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Penduduk";
        $this->load->view('header0');
        $this->load->view('bar1');
        $this->load->view('data/put/penduduk', $data);
        $this->load->view('footer');

    }
    public function put_process()
    {
        $data = array(
            'id_penduduk'           => $this->input->post('id_penduduk'),
            'no_kk'                 => $this->input->post('no_kk'),
            'nik'                   => $this->input->post('nik'),
            'nama'                  => $this->input->post('nama'),
            'ttl'                   => $this->input->post('ttl'),
            'jenis_kelamin'         => $this->input->post('jenis_kelamin'),
            'alamat'                => $this->input->post('alamat'),
            'rt'                     => $this->input->post('rt'),
            'rw'                      => $this->input->post('rw'),
            'kel_des'                => $this->input->post('kel_des'),
            'kecamatan'                => $this->input->post('kecamatan'),
            'agama'                 => $this->input->post('agama'),
            'status_perkawinan'     => $this->input->post('status_perkawinan'),
            'pekerjaan'             => $this->input->post('pekerjaan'),
            'kewarganegaraan'       => $this->input->post('kewarganegaraan'),
            'berlaku'               => $this->input->post('berlaku'),
            'gaji'               => $this->input->post('gaji'),
            // 'image'                  => $this->input->post('image'), 
      
          );
          // print_r($data);
          // exit;
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
          echo"berhasil";
            // $this->session->set_flashdata('result', 'Update Data penduduk Berhasil');
        } else {
          echo"gagal";
            // $this->session->set_flashdata('result', 'Update Data penduduk Gagal');
        }
        // print_r($update);
        // exit;
        redirect('pendudukclient');
    }
    public function delete()
    {
        $params = array('id_penduduk' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data penduduk Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data penduduk Gagal');
        }
        redirect('pendudukclient');
    }
    public function search()
    {
      $this->load->library('form_validation');
  
      $this->load->library('curl');
      // $result=$this->db->get_where('materi',array('id_penduduk'=>1))
      // $data['result']=$result;
      $this->API = "http://localhost:8080/keluarga/penduduk";
      $data['penduduk'] = json_decode($this->curl->simple_get($this->API));
      $data['title'] = "Penduduk";
      $this->form_validation->set_rules('id_penduduk', 'id_penduduk', 'required');
  
      // die;
      if ($this->form_validation->run() == TRUE) {
        $data['isipenduduk'] = json_decode($this->curl->simple_get(
          $this->API . '?id_penduduk=' . $this->input->post('id_penduduk')
        ));
        $this->load->view('header0');
        $this->load->view('bar1');
        $this->load->view('data/detail', $data);
      } else {
        $this->load->view('header0');
        $this->load->view('bar1');
        $this->load->view('data/detail', $data);
        $this->load->view('footer');
      }
      // $this->load->view('footer');
  
}
}
?>