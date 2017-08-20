<?php



    class Kuota1 extends CI_Controller{


        public function kuotaTsel()
        {
            $data['tampilTsl'] = $this->Provider1->displayTsl();
            $this->load->view('hSimpati', $data);
        }

        public function kuotaTseljuga()
        {
            $data['tampilTsl'] = $this->Provider1->displayTsl();
            $this->load->view('tselAdmin', $data);
        }

        public function dataTsl()
        {
            $this->load->view('tselAdmin');
        }

        public function editkuota($id)
        {
            $data['tampilid'] = $this->Provider1->editTsel($id);
            $this->load->view('editSimpati', $data);
        }

        public function edit()
        {
            $id = $this->input->post('id_edit');
            $kuota = $this->input->post('kuota_edit');
            $isi = $this->input->post('isi_edit');
            $waktu = $this->input->post('waktu_edit');
            $harga = $this->input->post('harga_edit');
            $status = $this->input->post('status_edit');

            $simpan = $this->Provider1->prosesedit($id, $kuota, $isi ,$waktu ,$harga ,$status);
            if (!$simpan)
            {
                echo "Gagal di ubah";
            }
            else
            {

                redirect("kuota1/kuotaTseljuga");
            }
        }


        public function hapus($id)
        {
            $hapus = $this->Provider1->hapus($id);
            if (!$hapus)
            {
                echo "Gagal hapus";
            }
            else
            {
                redirect("kuota1/kuotaTseljuga");
            }
        }




    }





?>