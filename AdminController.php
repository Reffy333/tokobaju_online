<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BajusModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarBaju()
    {
        $bajuModel = new BajusModel();

        $data['clothes'] = $bajuModel->findAll();

        return view('admin/daftar-baju', $data);
    }

    public function daftarBajuTambah()
    {
        return view('admin/daftar-baju-tambah');
    }

    public function createBaju()
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if ($file && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $bajuModel = new BajusModel();

        if ($bajuModel->insert($data, false)) {
            return redirect()->to('admin/daftar-baju')->with('berhasil', 'Data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-baju')->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function daftarBajuEdit($id)
    {
        $bajuModel = new BajusModel();
        $clothes = $bajuModel->find($id);
    
        if (!$clothes) {
            return redirect()->to('admin/daftar-baju')->with('gagal', 'Data baju tidak ditemukan!');
        }
    
        return view('admin/daftar-baju-edit', ['clothes' => $clothes]);
    }
    
    public function changeBaju($id)
    {
        $bajuModel = new BajusModel(); 
        $existingclothes = $bajuModel->find($id); 
    
        if (!$existingclothes) {
            return redirect()->to('admin/daftar-baju')->with('gagal', 'Data baju tidak ditemukan!');
        }
    
        $data = $this->request->getPost(); 
        $file = $this->request->getFile('gambar');
    
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path; 
        } else {
            $data['gambar'] = $existingclothes['gambar'];
        }
    
        if ($bajuModel->update($id, $data)) {
            return redirect()->to('admin/daftar-baju')->with('berhasil', 'Data berhasil diperbarui!');
        } else {
            return redirect()->to('admin/daftar-baju')->with('gagal', 'Data gagal diperbarui!');
        }
    }
    public function hapusBaju($id)
    {
        $clothesModel = new \App\Models\BajusModel();
    
        $baju = $clothesModel->find($id);
    
        if ($baju) {
            $clothesModel->delete($id);
    

            return redirect()->to('/admin/daftar-baju')->with('success', 'Baju berhasil dihapus.');
        }

        return redirect()->to('/admin/daftar-baju')->with('error', 'Baju tidak ditemukan.');
    }
    
    

    public function transaksi()
    {
        return view('admin/transaksi');
    }
 
    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }
}