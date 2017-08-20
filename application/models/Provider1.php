<?php

        class Provider1 extends CI_Model{

            public  function displayTsl()
            {
                $query = "select * from tb_kuota where kuota = 'simpati'";
                return $this->db->query($query);
            }


            public function prosesedit($id, $kuota, $isi, $waktu, $harga, $status)
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

            public function editTsel($id)
            {
                $query = "select * from tb_kuota where id = $id";
                return $this->db->query($query);
            }


            public function hapus($id)
            {
                $data = array (

                    'id' => $id

                );

                $query = $this->db->delete('tb_kuota',$data);
                return $query;
            }

        }



?>