<?php



class Kuota3 extends CI_Controller{


    public function kuotadata3()
    {
        $data['tampil3'] = $this->Provider3->display3();
        $this->load->view('h3', $data);
    }

    public function kuotadata3juga()
    {
        $data['tampil3'] = $this->Provider3->display3();
        $this->load->view('3Admin', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id_edit');
        $kuota = $this->input->post('kuota_edit');
        $waktu = $this->input->post('waktu_edit');
        $harga = $this->input->post('harga_edit');
        $status = $this->input->post('status_edit');

        $simpan = $this->Provider3->prosesedit($id,$kuota,$waktu,$harga ,$status);
        if (!$simpan)
        {
            echo "Gagal di ubah";
        }
        else
        {
            echo "Berhasil di ubah";
            redirect("kuota/kuotadata3juga");
        }
    }

    public function hapus($id)
    {
        $hapus = $this->Provider3->proses($id);
        if(!$hapus)
        {
            echo "gagal dihapus";
        }
        else{
            redirect("kuota3/kuotadata3juga");
        }
    }





}





?>