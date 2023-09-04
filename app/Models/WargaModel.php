<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModel extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'warga_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nik', 'nama', 'kelamin', 'alamat', 'no_rumah', 'status',];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function search($keyword)
    {
        return $this->table('warga')->like('nama', $keyword)->orLike('alamat', $keyword);
    }

    public function getWarga($warga_id = false)
    {
        if ($warga_id == false) {
            return $this->findAll();
        }
        return $this->where(['warga_id' => $warga_id])->first();
    }
}
