<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWarga extends Model
{
    public function AllWarga()
    {
        return $this->db->table('warga')
            ->Get()->getResultArray();
    }
}
