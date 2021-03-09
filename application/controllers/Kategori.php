<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Kategori extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_kk');
        if ($id == '') {
            $kategori = $this->db->get('kategori')->result();
        } else {
            $this->db->where('id_kk', $id);
            $kategori = $this->db->get('kategori')->result();
        }
        $this->response($kategori, 200);
    }
    function index_post()
    {
        $data = array(
            'no_kk'                   => $this->post('no_kk'),
            'nama_keluarga'           => $this->post('nama_keluarga'),
            
        );
        $insert = $this->db->insert('kategori',$data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put()
    {
        $id = $this->put('id_kk');
        $data = array(
            'no_kk'                   => $this->put('no_kk'),
            'nama_keluarga'           => $this->put('nama_keluarga'),
        );
        $this->db->where('id_kk', $id);
        $update = $this->db->update('kategori', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete()
    {
        $id = $this->delete('id_kk');
        $this->db->where('id_kk', $id);
        $delete = $this->db->delete('kategori');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>