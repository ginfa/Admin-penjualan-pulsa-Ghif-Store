<?php

class Provider5 extends CI_Model{

    public  function displaypln()
    {
        $query = "select * from tb_kuota where kuota = 'token_pln'";
        return $this->db->query($query);
    }


    public function hapus($id)
    {
        $data = array(

            'id' => $id

        );

        $query = $this->db->query('tb_kuota',$data);
        return $query;
    }




}



?>