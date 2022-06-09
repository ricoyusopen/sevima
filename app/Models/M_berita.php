<?php
namespace App\Models;

use CodeIgniter\Model;

class M_berita extends Model {
	protected $table 		 = 'tb_berita';
	// protected $DBGroup       = 'default';
	// protected $primaryKey    = 'id';
	// protected $returnType    = 'object';
	// protected $useTimestamps = true;
	protected $allowedFields = ['title', 'description', 'image', 'author', 'created_date'];


	public function getBerita ($id = false) {
        if($id === false){
            return $this->findAll(1);            
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function saveBerita($data) {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateBerita($data, $id) {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteBerita($id)  {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    } 

}