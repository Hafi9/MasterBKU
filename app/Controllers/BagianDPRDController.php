<?php

namespace App\Controllers;

use App\Models\BagianDPRDModel;
use CodeIgniter\Controller;

class BagianDPRDController extends Controller
{
    public function index()
    {
        $bagianModel = new BagianDPRDModel();
        $data['bagian'] = $bagianModel->getBagianDPRD();
        
        return view('bagian_dprd/index', $data);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $bagianModel = new BagianDPRDModel();
            $bagianModel->insertBagianDPRD([
                'nama_bagian' => $this->request->getPost('nama_bagian'),
                'sisa_anggaran' => $this->request->getPost('sisa_anggaran')
            ]);

            return redirect()->to('/bagian_dprd');
        }

        return view('bagian_dprd/create');
    }

    public function edit($id)
    {
        $bagianModel = new BagianDPRDModel();
        $data['bagian'] = $bagianModel->getBagianDPRDByID($id);

        if ($this->request->getMethod() === 'post') {
            $bagianModel->updateBagianDPRD($id, [
                'nama_bagian' => $this->request->getPost('nama_bagian'),
                'sisa_anggaran' => $this->request->getPost('sisa_anggaran')
            ]);

            return redirect()->to('/bagian_dprd');
        }

        return view('bagian_dprd/edit', $data);
    }

    public function delete($id)
    {
        $bagianModel = new BagianDPRDModel();
        $bagianModel->deleteBagianDPRD($id);

        return redirect()->to('/bagian_dprd');
    }
}
