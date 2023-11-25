<?php

namespace App\Controllers;

use App\Models\PengirimanUangModel;
use App\Models\BagianDPRDModel;

class PengirimanUangController extends BaseController
{
    public function index()
    {
        $pengirimanUangModel = new PengirimanUangModel();
        $data['pengiriman_uang'] = $pengirimanUangModel->findAll();

        return view('pengiriman_uang/index', $data);
    }

    // Controller PengirimanUang
    public function create()
    {
        $pengirimanUangModel = new PengirimanUangModel();
        $bagianDprdModel = new BagianDprdModel();
        $bagianDprd = $bagianDprdModel->getBagianDPRD();

        if ($this->request->getMethod() === 'post') {
            $data = [
                'kas_id' => $this->request->getPost('kas_id'),
                'bagian_dprd_id' => $this->request->getPost('bagian_dprd_id'),
                'jumlah_uang' => $this->request->getPost('jumlah_uang'),
                'tanggal_pengiriman' => $this->request->getPost('tanggal_pengiriman'),
                'keterangan' => $this->request->getPost('keterangan'),
                'user_input' => $this->request->getPost('user_input'),
                'user_edit' => $this->request->getPost('user_edit')
                // Tambahkan field lain sesuai dengan form Anda
            ];

            $pengirimanUangModel->insert($data);

            return redirect()->to('/pengiriman_uang');
        }

        return view('pengiriman_uang/create', ['bagianDprd' => $bagianDprd]);
    }

    public function edit($id)
    {
        $pengirimanUangModel = new PengirimanUangModel();
        $data['pengiriman_uang'] = $pengirimanUangModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $data = [
                'kas_id' => $this->request->getPost('kas_id'),
                'bagian_dprd_id' => $this->request->getPost('bagian_dprd_id'),
                'jumlah_uang' => $this->request->getPost('jumlah_uang'),
                'tanggal_pengiriman' => $this->request->getPost('tanggal_pengiriman'),
                'keterangan' => $this->request->getPost('keterangan'),
                'user_input' => $this->request->getPost('user_input'),
                'user_edit' => $this->request->getPost('user_edit')
                // Tambahkan field lain sesuai dengan form Anda
            ];

            $pengirimanUangModel->update($id, $data);

            return redirect()->to('/pengiriman_uang');
        }

        return view('pengiriman_uang/edit', $data);
    }

    public function delete($id)
    {
        $pengirimanUangModel = new PengirimanUangModel();
        $pengirimanUangModel->delete($id);

        return redirect()->to('/pengiriman_uang');
    }
}
