<?php



class Kuota2 extends CI_Controller{


    public function kuotaXl()
    {
        $data['tampilXl'] = $this->Provider2->displayXl();
        $this->load->view('hXl', $data);
    }

    public function kuotaXljuga()
    {
        $data['tampilXl'] = $this->Provider2->displayXl();
        $this->load->view('xlAdmin', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id_edit');
        $kuota = $this->input->post('kuota_edit');
        $waktu = $this->input->post('waktu_edit');
        $harga = $this->input->post('harga_edit');
        $status = $this->input->post('status_edit');

        $simpan = $this->Provider2->prosesedit($id,$kuota,$waktu,$harga ,$status);
        if (!$simpan)
        {
            echo "Gagal di ubah";
        }
        else
        {
            echo "Berhasil di ubah";
            redirect("kuota/kuotaXljuga");
        }
    }

    public function hapus($id)
    {

        $hapus = $this->Provider2->proses($id);
        if(!$hapus)
        {
            echo "gagal dihapus";
        }
        else{
            redirect("kuota2/kuotaXljuga");
        }


    }





}





?>