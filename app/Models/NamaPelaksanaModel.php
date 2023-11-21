<?php

namespace App\Models;

use CodeIgniter\Model;

class NamaPelaksanaModel extends Model
{
    protected $table = 'nama_pelaksana';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'nama_pelaksana',
        'nik_nip',
        'jabatan',
        'status_pegawai',
        'no_telp',
        'email',
        'user_input',
        'user_edit'
    ];
    
    // Menampilkan semua data nama pelaksana
    public function getAllNamaPelaksana()
    {
        return $this->findAll();
    }
    
    // Menambah data nama pelaksana baru
    public function insertNamaPelaksana($data)
    {
        return $this->insert($data);
    }
    
    // Mendapatkan detail data nama pelaksana berdasarkan ID
    public function getNamaPelaksanaById($id)
    {
        return $this->find($id);
    }
    
    // Mengupdate data nama pelaksana berdasarkan ID
    public function updateNamaPelaksana($id, $data)
    {
        return $this->update($id, $data);
    }
    
    // Menghapus data nama pelaksana berdasarkan ID
    public function deleteNamaPelaksana($id)
    {
        return $this->delete($id);
    }
}
