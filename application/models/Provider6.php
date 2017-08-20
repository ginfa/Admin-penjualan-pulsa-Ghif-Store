<?php

class Provider6 extends CI_Model{

    public  function displaysmartfren()
    {
        $query = "select * from tb_kuota where kuota = 'smartfren'";
        return $this->db->query($query);
    }


    public function hapus($id)
    {
        $data = array(

            'id' => $id

        );

        $qeury = $this->db->query('tb_kuota',$data);
        return $qeury;
    }




}



?>