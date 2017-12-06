<?php
class Banner extends Database{

	public function Banner(){
		$this->table('banner');
		Database::Database();
	}

	public function addBanner($data){
		$banner_id = $this->insert($data);
		return $banner_id;
	}

	public function getAllBanner(){
		$this->fields(" banner.*, file.file_title ");
		$this->join(" Left JOIN file ON file.banner_id = banner.id ");
		$this->orderBy(" banner.id ASC");
		$data = $this->select();
		return $data;
	}

	public function getBannerById($id){
		$this->where('id = '.$id);
		$data = $this->select();
		return $data;
	}

	public function deleteBanner($banner_id){
		$this->where(' id = '.$banner_id);
		$del = $this->delete();
		return $del;
	}


	public function updateBanner($data, $id){
		$this->where(' id = '.$id);
		$update = $this->update($data);
		return $update;
	}
}
