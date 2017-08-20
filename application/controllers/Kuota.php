<?php

    class Kuota extends CI_Controller{

        public function hDepan()
        {
            $this->load->view('hDepan');
        }

        public function inputKuota()
        {
            $this->load->view('inputKuota');
        }

        public function tambahKuota()
        {
            $kuota = $this->input->post('kuota');
            $isi = $this->input->post('isi');
            $waktu = $this->input->post('waktu');
            $harga = $this->input->post('harga');
            $status = $this->input->post('status');

            $q = $this->Provider->tambah_kuota($kuota,$isi,$waktu,$harga,$status);
            redirect("Kuota/inputKuota");


        }

        public function kuotaIm3()
        {
            $data['tampilIm3'] = $this->Provider->displayIm3();
            $this->load->view('hIm3', $data);
        }

        public function kuotaIm3juga()
        {
            $data['tampilIm3'] = $this->Provider->displayIm3();
            $this->load->view('im3Admin', $data);
        }

        public function editkuota($id)
        {
            $data['tampilbyid'] = $this->Provider->editIm3($id);
            $this->load->view('editIm3', $data);
        }

        public function editm3()
        {
            $id = $this->input->post('id_edit');
            $kuota = $this->input->post('kuota_edit');
            $isi = $this->input->post('isi_edit');
            $waktu = $this->input->post('waktu_edit');
            $harga = $this->input->post('harga_edit');
            $status = $this->input->post('status_edit');

            $simpan = $this->Provider->proseseditm3($id, $kuota, $isi ,$waktu ,$harga ,$status);
            if (!$simpan)
            {
                echo "Gagal di ubah";
            }
            else
            {
                redirect("Kuota/kuotaIm3juga");
            }
        }



    }

?>