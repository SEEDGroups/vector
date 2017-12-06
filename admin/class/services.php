<?php
/**
 * This function handles all the operations of "About BEA"
 */
class Services extends Database
{

  public function __construct()
  {
    $this->table(' sub_cat');
    Database::Database();
  }

  public function selectData($id){
    $this->fields(" sub_cat.*, services.title ");
    $this->join(" Left join services on services.id = sub_cat.service_id ");
    $this->where(' sub_cat.id = '.$id);
    $data =  $this->select();
    return $data;
  }

  public function updateData($data, $id){
    //Update aboutcids set column = newdata where id = 4
    $this->where(' id = '.$id);
    $result = $this->update($data);
    return $result;
  }
}

?>
