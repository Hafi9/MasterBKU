<?php

namespace App\Controllers;

use App\Models\RoleModel;
use CodeIgniter\Controller;

class RoleController extends Controller
{
    public function index()
    {
        $roleModel = new RoleModel();
        $roles = $roleModel->getRole();

        return view('role/index', ['roles' => $roles]);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $roleModel = new RoleModel();
            $roleModel->createRole($this->request->getPost());
            return redirect()->to('/role');
        }

        return view('role/create');
    }

    public function edit($id)
    {
        $roleModel = new RoleModel();
        $role = $roleModel->getRole($id);

        if ($this->request->getMethod() === 'post') {
            $roleModel->updateRole($id, $this->request->getPost());
            return redirect()->to('/role');
        }

        return view('role/edit', ['role' => $role]);
    }

    public function delete($id)
    {
        $roleModel = new RoleModel();
        $roleModel->deleteRole($id);
        return redirect()->to('/role');
    }
}
