<?php

class Provider3 extends CI_Model{

    public  function display3()
    {
        $query = "select * from tb_kuota where kuota = '3'";
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