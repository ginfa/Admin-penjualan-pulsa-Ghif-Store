<?php



class Kuota6 extends CI_Controller{


    public function kuotasmartfren()
    {
        $data['tampilsf'] = $this->Provider6->displaysmartfren();
        $this->load->view('hSf', $data);
    }

    public function kuotasmartfrenjuga()
    {
        $data['tampilsf'] = $this->Provider6->displaysmartfren();
        $this->load->view('sfAdmin', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id_edit');
        $kuota = $this->input->post('kuota_edit');
        $waktu = $this->input->post('waktu_edit');
        $harga = $this->input->post('harga_edit');
        $status = $this->input->post('status_edit');

        $simpan = $this->Provider6->prosesedit($id,$kuota,$waktu,$harga ,$status);
        if (!$simpan)
        {
            echo "Gagal di ubah";
        }
        else
        {
            echo "Berhasil di ubah";
            redirect("kuota/kuotasmartfrenjuga");
        }
    }

    public  function hapus($id)
    {
        $hapus = $this->Provider6->hapus();
        if(!$hapus){
            echo "gagal dihapus";
        }else{
            redirect("Kuota6/kuotasmartfrenjuga");
        }
    }





}





?>