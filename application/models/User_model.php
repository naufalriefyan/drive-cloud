<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('data')->result_array();
    }

    public function dataUser()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true)
        ];

        $this->db->insert('data', $data);
    }

    public function hapusData($id)
    {
        $this->db->delete('drivedata', ['id_drive' => $id]);
    }

    public function getData($id)
    {
        return $this->db->get_where('data', ['id' => $id])->row_array();
    }

    public function updateUser($id)
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true)
        ];

        $this->db->update('data', $data);
    }

    public function uploadData($data)
    {
        return $this->db->insert('drivedata', $data);
    }

    function getRows($params = array())
    {
        $user = $this->session->userdata('email');
        $this->db->select('*');
        $this->db->from('drivedata');
        $this->db->where('email', $user);

        if (array_key_exists('id_drive', $params) && !empty($params['id_drive'])) {
            $this->db->where('id_drive', $params['id_drive']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
        } else {
            //set start and limit  
            if (array_key_exists('start', $params) && array_key_exists('limit', $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists('start', $params) && array_key_exists('limit', $params)) {
                $this->db->limit($params['limit']);
            }
            //get records 
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
        }
        //return fatches data
        return $result;
    }
}
