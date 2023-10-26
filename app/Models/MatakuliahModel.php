<?php

namespace App\Models;

use CodeIgniter\Model;

class MatakuliahModel extends Model
{
    protected $table = "tbl_matakuliah";
    protected $allowedFields = ['kode_mk', 'nama_mk', 'sks', 'ruangan'];
    protected $primaryKey = 'id_mk';

    public function data_mk($id_mk)
    {
        return $this->find($id_mk);
    }
    public function update_data($data, $id_mk)
    {
        $query = $this->db->table($this->table)->update($data, array('id_mk' => $id_mk));
        return $query;
    }
    public function delete_data($id_mk)
    {
        $query = $this->db->table($this->table)->delete(array('id_mk' => $id_mk));
        return $query;
    }
}

