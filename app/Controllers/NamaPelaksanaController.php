<?php

namespace App\Controllers;

use App\Models\NamaPelaksanaModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class NamaPelaksanaController extends Controller
{
    public function index()
    {
        $namaPelaksanaModel = new NamaPelaksanaModel();
        $namaPelaksanas = $namaPelaksanaModel->findAll();

        return view('nama_pelaksana/index', ['nama_pelaksanas' => $namaPelaksanas]);
    }

    public function create()
    {
        $userModel = new UserModel();
        $usersWithUserRole = $userModel->getUsersWithUserRole();

        if ($this->request->getMethod() === 'post') {
            $namaPelaksanaModel = new NamaPelaksanaModel();

            // Ambil data dari form
            $formData = [
                'user_id' => $this->request->getPost('user_id'),
                'nama_pelaksana' => $this->request->getPost('nama_pelaksana'),
                'nik_nip' => $this->request->getPost('nik_nip'),
                'jabatan' => $this->request->getPost('jabatan'),
                'status_pegawai' => $this->request->getPost('status_pegawai'),
                'no_telp' => $this->request->getPost('no_telp'),
                'email' => $this->request->getPost('email'),
                'user_input' => $this->request->getPost('user_input'),
                'user_edit' => $this->request->getPost('user_edit')
                // Tambahkan field lain sesuai dengan form Anda
            ];

            // Simpan data ke dalam tabel 'nama_pelaksana'
            $namaPelaksanaModel->insert($formData);

            return redirect()->to('/nama_pelaksana');
        }

        return view('nama_pelaksana/create', ['usersWithUserRole' => $usersWithUserRole]);
    }


    public function edit($id)
    {
        $namaPelaksanaModel = new NamaPelaksanaModel();
        $nama_pelaksana = $namaPelaksanaModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $namaPelaksanaModel->update($id, $this->request->getPost());

            return redirect()->to('/nama_pelaksana');
        }

        return view('nama_pelaksana/edit', ['nama_pelaksana' => $nama_pelaksana]);
    }

    public function delete($id)
    {
        $namaPelaksanaModel = new NamaPelaksanaModel();
        $namaPelaksanaModel->delete($id);

        return redirect()->to('/nama_pelaksana');
    }
}
