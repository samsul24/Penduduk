<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Penduduk extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_penduduk');
        $id2 = $this->get('id_kk');
        if ($id == '') {
            $kartupenduduk = $this->db->get('kartupenduduk')->result();
        } else {
            $this->db->where('id_penduduk', $id);
            $kartupenduduk = $this->db->get('kartupenduduk')->result();
        }
        if ($id2 != '') {
            $this->db->where('id_kk', $id2);
            $kartupenduduk = $this->db->get('kartupenduduk')->result();
        }
        $this->response($kartupenduduk, 200);
    }
    function index_post()
    {
        $data = array(
            'no_kk'                 =>$this->post('no_kk'),
            'nik'                   =>$this->post('nik'),
            'nama'                  =>$this->post('nama'),
            'ttl'                   =>$this->post('ttl'),
            'jenis_kelamin'         =>$this->post('jenis_kelamin'),
            'alamat'                =>$this->post('alamat'),
            'rt'                     => $this->post('rt'),
            'rw'                      => $this->post('rw'),
            'kel_des'                => $this->post('kel_des'),
            'kecamatan'                => $this->post('kecamatan'),
            'agama'                 =>$this->post('agama'),
            'status_perkawinan'     =>$this->post('status_perkawinan'),
            'pekerjaan'             =>$this->post('pekerjaan'),
            'kewarganegaraan'       =>$this->post('kewarganegaraan'),
            'berlaku'               =>$this->post('berlaku'),
            'gaji'               =>$this->post('gaji'),
            'image'                  =>$this->post('image'),
        
        );
        $insert = $this->db->insert('kartupenduduk',$data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put()
    {
        $id = $this->put('id_penduduk');
        $data = array(
            'no_kk'                 => $this->put('no_kk'),
            'nik'                   => $this->put('nik'),
            'nama'                  => $this->put('nama'),
            'ttl'                   => $this->put('ttl'),
            'jenis_kelamin'         => $this->put('jenis_kelamin'),
            'alamat'                => $this->put('alamat'),
            'rt'                     => $this->put('rt'),
            'rw'                      => $this->put('rw'),
            'kel_des'                => $this->put('kel_des'),
            'kecamatan'                => $this->put('kecamatan'),
            'agama'                 => $this->put('agama'),
            'status_perkawinan'     => $this->put('status_perkawinan'),
            'pekerjaan'             => $this->put('pekerjaan'),
            'kewarganegaraan'       => $this->put('kewarganegaraan'),
            'berlaku'               => $this->put('berlaku'),
            'gaji'               =>$this->post('gaji'),
            // 'image'                  => $this->put('image'),
            );
            $this->db->where('id_penduduk', $id);
            $update = $this->db->update('kartupenduduk', $data);
            if ($update) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }
    function index_delete()
    {
        $id = $this->delete('id_penduduk');
        $this->db->where('id_penduduk', $id);
        $delete = $this->db->delete('kartupenduduk');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>