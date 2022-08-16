<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artist_model extends CI_Model
{

    /**
     * * @param string $user_name
     * @param string $password
     * @return void
     */

    public function __construct()
    {
        $this->load->database();
    }

    function artist_list()
    {
        $this->db->order_by('ArtistID', 'asc');
        $hasil = $this->db->get('artist');
        return $hasil->result();
    }

    function save_artist()
    {
        $data = array(
            'ArtistName'  => $this->input->post('ArtistName'),
            'PackageName'  => $this->input->post('PackageName'),
            'ImageURL' => $this->input->post('ImageURL'),
            'ReleaseDate' => $this->input->post('ReleaseDate'),
            'Price' => $this->input->post('Price'),
            'SampleURL' => $this->input->post('SampleURL'),
        );
        $result = $this->db->insert('artist', $data);
        return $result;
    }

    function update_artist()
    {
        $ArtistID = $this->input->post('ArtistID');
        $ArtistName = $this->input->post('ArtistName');
        $PackageName = $this->input->post('PackageName');
        $ImageURL = $this->input->post('ImageURL');
        $ReleaseDate = $this->input->post('ReleaseDate');
        $Price = $this->input->post('Price');
        $SampleURL = $this->input->post('SampleURL');

        $this->db->set('ArtistName', $ArtistName);
        $this->db->set('PackageName', $PackageName);
        $this->db->set('ImageURL', $ImageURL);
        $this->db->set('ReleaseDate', $ReleaseDate);
        $this->db->set('Price', $Price);
        $this->db->set('SampleURL', $SampleURL);
        $this->db->where('ArtistID', $ArtistID);
        $result = $this->db->update('artist');
        return $result;
    }

    function delete_artist()
    {
        $ArtistID = $this->input->post('ArtistID');
        $this->db->where('ArtistID', $ArtistID);
        $result = $this->db->delete('artist');
        return $result;
    }
}
