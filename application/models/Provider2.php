<?php

class Provider2 extends CI_Model{

    public  function displayXl()
    {
        $query = "select * from tb_kuota where kuota = 'xl'";
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