<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_role'];

    public function getRole($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    public function createRole($data)
    {
        return $this->insert($data);
    }

    public function updateRole($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteRole($id)
    {
        return $this->delete($id);
    }
}
