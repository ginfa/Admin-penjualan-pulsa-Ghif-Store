<?php



class Kuota5 extends CI_Controller{


    public function tokenPLN()
    {
        $data['tampilPLN'] = $this->Provider5->displaypln();
        $this->load->view('hAxis', $data);
    }

    public function tokenplnjuga()
    {
        $data['tampilPLN'] = $this->Provider5->displaypln();
        $this->load->view('plnAdmin', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id_edit');
        $kuota = $this->input->post('kuota_edit');
        $waktu = $this->input->post('waktu_edit');
        $harga = $this->input->post('harga_edit');
        $status = $this->input->post('status_edit');

        $simpan = $this->Provider5->prosesedit($id,$kuota,$waktu,$harga ,$status);
        if (!$simpan)
        {
            echo "Gagal di ubah";
        }
        else
        {
            echo "Berhasil di ubah";
            redirect("kuota/tokenplnjuga");
        }
    }

    public function hapus($id)
    {
        $hapus = $this->Provider5->hapus($id);
        if(!$hapus)
        {
            echo "gagal dihapus";

        }else{
            redirect("Kuota5/tokenplnjuga");
        }
    }





}





?>