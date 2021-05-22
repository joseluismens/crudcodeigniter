<?php

namespace App\Models;
use CodeIgniter\Model;

	class CrudModel extends Model {
        protected $table      = 'usuarios';
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $returnType     = 'array';
        protected $allowedFields = ['nombres','apellido_paterno','apellido_materno','rut',
    'telefono','status','fecha_nacimiento', 'email'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

		public function listar() {
			$usuarios = $this->db->query("SELECT * FROM usuarios");
			return $usuarios->getResult();
		}
		public function insertar($datos) {
			$usuarios = $this->db->table('usuarios');
			$usuarios->insert($datos);
            return $this->db->insertID(); 
 
		}

		public function obtenerUsuario($data) {
			$usuario =  $this->db->table('usuarios');
			$usuario->where($data);
			return $usuario->get()->getResultArray();
		}

		public function actualizar($data, $id) {
			$usuarios = $this->db->table('usuarios');
			$usuarios->set($data);
			$usuarios->where('id', $id);
			return $usuarios->update();
		}

		public function eliminar($data) {
			$usuarios = $this->db->table('usuarios');
			$usuarios->where($data);


		
			return $usuarios->delete();
		}
	}