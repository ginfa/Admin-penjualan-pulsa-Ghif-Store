<?php

class Provider4 extends CI_Model{

    public  function displayaxis()
    {
        $query = "select * from tb_kuota where kuota = 'axis'";
        return $this->db->query($query);
    }

    public  function hapus($id)
    {
        $data = array(

            'id' => $id

        );

        $query = $this->db->query('tb_kuota', $data);
        return $query;

    }







}



?>