<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getUsersWithRole(); 

        return view('user/index', ['users' => $users]);
    }

    public function create()
    {
        $userModel = new UserModel();
        $roleModel = new RoleModel(); // Menggunakan RoleModel dari namespace App\Models

        // Mendapatkan daftar peran untuk ditampilkan di form create
        $roles = $roleModel->getRole();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'role_id' => 'required',
            'nama_user' => 'required',
            'username' => 'required|is_unique[users.username]',
            'password' => 'required'
        ])) {
            $userModel->createUser([
                'role_id' => $this->request->getPost('role_id'),
                'nama_user' => $this->request->getPost('nama_user'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ]);
            return redirect()->to('/user');
        }

        // Menyiapkan data roles untuk dikirim ke view
        $data['roles'] = $roles;

        return view('user/create', $data);
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $userModel->updateUser($id, $this->request->getPost());
            return redirect()->to('/user');
        }

        return view('user/edit', ['user' => $user]);
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->deleteUser($id);
        return redirect()->to('/user');
    }
}
