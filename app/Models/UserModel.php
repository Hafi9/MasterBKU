<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['role_id', 'nama_user', 'username', 'password'];

    public function getUsers()
    {
        return $this->findAll();
    }

    public function createUser($data)
    {
        return $this->insert($data);
    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($id);
    }
    
    public function getUsersWithRole()
    {
        return $this->db->table('users')
            ->select('users.*, role.nama_role') // Pilih kolom yang diinginkan
            ->join('role', 'role.id = users.role_id') // Lakukan join antara tabel users dan role
            ->get()
            ->getResultArray();
    }
    public function getUsersWithUserRole()
    {
        return $this->select('users.id, users.nama_user')
                    ->join('role', 'role.id = users.role_id')
                    ->where('role.nama_role', 'user')
                    ->findAll();
    }

}
