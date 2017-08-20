<?php

    class Provider extends CI_Model{

        public function tambah_kuota($kuota, $isi, $waktu, $harga, $status)
        {
            $q = "insert into tb_kuota (kuota,isi,waktu,harga,status)
            values ('$kuota','$isi','$waktu','$harga','$status')";
            return $this->db->query($q);
        }

        public  function displayIm3()
        {
            $query = "select * from tb_kuota where kuota = 'im3'";
            return $this->db->query($query);
        }


        public function proseseditm3($id, $kuota, $isi, $waktu, $harga, $status)
        {
            $data = array (

                'kuota' => $kuota,
                'isi' => $isi,
                'waktu' => $waktu,
                'harga' => $harga,
                'status' => $status
            );

            return $this->db->update('tb_kuota', $data, array('id' => $id));

        }

        public function editIm3($id)
        {
            $query = "select * from tb_kuota where id = $id";
            return $this->db->query($query);
        }

    }


?>