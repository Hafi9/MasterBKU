<?php

namespace App\Controllers;

use App\Models\PerjalananDinasModel;
use App\Models\NamaPelaksanaModel;
use App\Models\BbmModel;
use CodeIgniter\Controller;

class PerjalananDinasController extends Controller
{
    public function index()
    {
        $perjalananDinasModel = new PerjalananDinasModel();
        $data['perjalanan'] = $perjalananDinasModel->getPerjalananDinasData();

        return view('perjalanan_dinas/index', $data);
    }

    // Fungsi lainnya seperti create, edit, delete, dsb.
    public function create()
    {
        // Fetch data for dropdowns
        $namaPelaksanaModel = new NamaPelaksanaModel();
        $bbmModel = new BbmModel();

        $data['namaPelaksana'] = $namaPelaksanaModel->findAll();
        $data['bbm'] = $bbmModel->findAll();

        if ($this->request->getMethod() === 'post') {
            $perjalananDinasModel = new PerjalananDinasModel();

            // Fetch form data
            $formData = [
                'pelaksana_id' => $this->request->getPost('pelaksana_id'),
                'bbm_id' => $this->request->getPost('bbm_id'),
                'status' => $this->request->getPost('status'),
                'biaya' => $this->request->getPost('biaya'),
                // ... other fields
            ];

            // Save to database
            $perjalananDinasModel->insert($formData);

            return redirect()->to('/perjalanan_dinas');
        }

        return view('perjalanan_dinas/create', $data);
    }

    public function edit($id)
    {
        $perjalananDinasModel = new PerjalananDinasModel();
        $namaPelaksanaModel = new NamaPelaksanaModel();
        $bbmModel = new BbmModel();

        $data['perjalanan_dinas'] = $perjalananDinasModel->find($id);
        $data['namaPelaksana'] = $namaPelaksanaModel->findAll();
        $data['bbm'] = $bbmModel->findAll();

        if ($this->request->getMethod() === 'post') {
            // Process form data and update the record
            // ...

            return redirect()->to('/perjalanan_dinas');
        }

        return view('perjalanan_dinas/edit', $data);
    }

    public function delete($id)
    {
        $perjalananDinasModel = new PerjalananDinasModel();
        $perjalananDinasModel->delete($id);

        return redirect()->to('/perjalanan_dinas');
    }
}
