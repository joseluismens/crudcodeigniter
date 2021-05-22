<?php

namespace App\Controllers;
use App\Models\CrudModel;
class Crud extends BaseController
{
	public function index()
	{
		$Crud = new CrudModel();

		$datos= $Crud->listar();
		$mensaje=session('mensaje');

		$data=[
			"datos"=>$datos,
			"mensaje"=>$mensaje
		];
		return view('listado',$data);
	}

	public function crear() {
		$datos = [
					"nombres" => $_POST['nombres'],
					"apellido_paterno" => $_POST['apellido_paterno'],
					"apellido_materno" => $_POST['apellido_materno'],
					"rut"=>$_POST['rut'],
					"telefono"=>$_POST['telefono'],
					"email"=>$_POST['email'],
					"status"=>$_POST['status'],
					"fecha_nacimiento"=>$_POST['fecha_nacimiento']

				];
		$Crud = new CrudModel();
		$respuesta = $Crud->insertar($datos);
		
		if ($respuesta > 0) {
			return redirect()->to(base_url().'/')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}
	}

	public function update(){
		$datos = [
			"nombres" => $_POST['nombres'],
			"apellido_paterno" => $_POST['apellido_paterno'],
			"apellido_materno" => $_POST['apellido_materno'],
			"rut"=>$_POST['rut'],
			"telefono"=>$_POST['telefono'],
			"email"=>$_POST['email'],
			"status"=>$_POST['status'],
			"fecha_nacimiento"=>$_POST['fecha_nacimiento']

		];
		$id = $_POST['id'];

		$Crud = new CrudModel();

		$respuesta = $Crud->actualizar($datos, $id);

		if ($respuesta) {
			return redirect()->to(base_url().'/')->with('mensaje','2');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}
	}
	public function getUser($id) {
		$data = ["id" => $id];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerUsuario($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
	}




	public function delete($id){
		$Crud = new CrudModel();
		$data = ["id" => $id];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url().'/')->with('mensaje','4');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','5');
		}
	}
}
