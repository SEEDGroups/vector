<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-08-22 18:44:36
 * @Organization: Knockout System Pvt. Ltd.
 */
class File extends Database{

	public function File(){
		$this->table(' Files');
		Database::Database();
	}

	public function addFile($data){
		$File_id = $this->insert($data);
		return $File_id;
	}

	public function getAllFile($is_die = false){
		$this->orderBy();
		$data = $this->select($is_die);
		return $data;
	}

	public function getFileById($id, $is_die=false){
		$this->where('id = '.$id);
		$data = $this->select($is_die);
		return $data;
	}

	public function deleteFile($File_id, $is_die=false){
		$this->where(' id = '.$File_id);
		$del = $this->delete($is_die);
		return $del;
	}


	public function updateFile($data, $id, $is_die = false){
		$this->where(' id = '.$id);
		$update = $this->update($data, $is_die);
		return $update;
	}
}
