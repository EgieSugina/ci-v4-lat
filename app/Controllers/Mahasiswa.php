<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswamodel;
    public function __construct()
    {
        $this->mahasiswamodel = new MahasiswaModel();
    }
    public function index()
    {
        $mahasiswa = $this->mahasiswamodel->findAll();
        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        echo view('mahasiswa/data_mahasiswa', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Mahasiswa',
        ];
        echo view('mahasiswa/form_tambah', $data);
    }
    public function simpan()
    {
        // Save the data
        $saved = $this->mahasiswamodel->save([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);
        if ($saved) {
            $toastMessage = 'Data berhasil disimpan!';
        } else {
            $toastMessage = 'Gagal menyimpan data.';
        }
        $session = session();
        $session->setFlashdata('toast', $toastMessage);

        return redirect()->to('mahasiswa');
    }

    public function edit($id_mhs)
    {
        $mahasiswa = $this->mahasiswamodel->data_mhs($id_mhs);
        $data = [
            'title' => 'Edit Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        echo view('mahasiswa/form_edit', $data);
    }
    public function update()
    {
        $id_mhs = $this->request->getVar('id');
        $data = [
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp')
        ];
        $update = $this->mahasiswamodel->update_data($data, $id_mhs);
        if ($update) {
            $toastMessage = 'Data berhasil di ganti dan disimpan!';
        } else {
            $toastMessage = 'Gagal merubah data.';
        }
        $session = session();
        $session->setFlashdata('toast', $toastMessage);
        return redirect()->to('mahasiswa');
    }
    public function delete($id_mhs)
    {
        $hapus = $this->mahasiswamodel->delete_data($id_mhs);
        if ($hapus) {
            $toastMessage = 'Data berhasil di hapus!';
        } else {
            $toastMessage = 'Gagal menghapus data.';
        }
        $session = session();
        $session->setFlashdata('toast', $toastMessage);
        return redirect()->to('mahasiswa');
    }
}





