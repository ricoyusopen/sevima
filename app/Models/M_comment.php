<?php
namespace App\Models;

use CodeIgniter\Model;

class M_comment extends Model {
	protected $table 		 = 'tb_komentar';
	// protected $DBGroup       = 'default';
	// protected $primaryKey    = 'id';
	// protected $returnType    = 'object';
	// protected $useTimestamps = true;
	protected $allowedFields = ['title', 'description', 'image', 'author', 'created_date'];


	public function getComment () {
        // $builder = $db->table('tb_komentar');
        // $builder->select('*');
        // $builder->join('users', 'users.user_id = tb_komentar.id_user');
        // $query = $builder->get();
        // echo json_encode($query);
        // var_dump($query);
        // die();
        //return $query;
        $query = "select K.komentar, U.user_name from tb_komentar K join users U ON U.user_id=K.id_user ";
        return $this->db->query($query);
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