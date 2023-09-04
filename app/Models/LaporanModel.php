<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    public function getLaporan()
    {
        return $this->db->table('warga')
            ->join('iuran', 'iuran.warga_id=warga.warga_id')
            ->get()->getResultArray();
    }
}
