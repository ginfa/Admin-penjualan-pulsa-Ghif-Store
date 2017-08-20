<?php



class Kuota4 extends CI_Controller{


    public function kuotaxis()
    {
        $data['tampilaxis'] = $this->Provider4->displayaxis();
        $this->load->view('hAxis', $data);
    }

    public function kuotaxisjuga()
    {
        $data['tampilaxis'] = $this->Provider4->displayaxis();
        $this->load->view('axisAdmin', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id_edit');
        $kuota = $this->input->post('kuota_edit');
        $waktu = $this->input->post('waktu_edit');
        $harga = $this->input->post('harga_edit');
        $status = $this->input->post('status_edit');

        $simpan = $this->Provider4->prosesedit($id,$kuota,$waktu,$harga ,$status);
        if (!$simpan)
        {
            echo "Gagal di ubah";
        }
        else
        {
            echo "Berhasil di ubah";
            redirect("kuota/kuotaaxisjuga");
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
            redirect("kuota2/kuotaaxisjuga");
        }


    }





}





?>