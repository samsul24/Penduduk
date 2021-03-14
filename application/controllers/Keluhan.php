<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Keluhan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_keluhan');
        if ($id == '') {
            $keluhan = $this->db->get('keluhan')->result();
        } else {
            $this->db->where('id_keluhan', $id);
            $keluhan = $this->db->get('keluhan')->result();
        }
        $this->response($keluhan, 200);
    }
    function index_post()
    {
        $data = array(
            'nama_pengguna'                   =>$this->post('nama_pengguna'),
            'komentar'           =>$this->post('komentar'),
            'status'           =>$this->post('status'),
            'image'           =>$this->post('image'),
            
        );
        $insert = $this->db->insert('keluhan',$data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put()
    {
        $id = $this->put('id_keluhan');
        $data = array(
            'nama_pengguna'       =>$this->put('nama_pengguna'),
            'komentar'           =>$this->put('komentar'),
            'status'           =>$this->put('status'),
        );
        $this->db->where('id_keluhan', $id);
        $update = $this->db->update('keluhan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete()
    {
        $id = $this->delete('id_keluhan');
        $this->db->where('id_keluhan', $id);
        $delete = $this->db->delete('keluhan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>