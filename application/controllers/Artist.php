<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artist_model');
    }

    function index()
    {
        $data['title'] = 'Artist';
        $this->load->view('artist/index', $data);
    }

    function artist_data()
    {
        $data = $this->Artist_model->artist_list();
        echo json_encode($data);
    }

    function save()
    {
        $data = $this->Artist_model->save_artist();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->Artist_model->update_artist();
        echo json_encode($data);
    }

    function delete()
    {
        $data = $this->Artist_model->delete_artist();
        echo json_encode($data);
    }
}
