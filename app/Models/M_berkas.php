<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class BerkasModel extends Model{
	// protected $DBGroup              = 'default';
	protected $table                = 'berkas';
	// protected $primaryKey           = 'id_berkas';
	// protected $returnType           = 'object';
	// protected $useTimestamps = true;
	// protected $allowedFields        = ['kd_berkas', 'berkas', 'keterangan'];

	public function getGambar()   {
        return $this->findAll();  
    }
    public function simpan_gambar($data)  {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}