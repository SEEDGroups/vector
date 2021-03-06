<?php
/**
 * This call deals all the function related to the events
 */
class Event extends Database
{

  function __construct()
  {
    $this->table(' events');
    Database::Database();
  }

  public function selectData(){
    $this->orderBy(" event_date Desc");
    $result = $this->select();
    return $result;
  }

  public function insertData($data){
    $result = $this->insert($data);
    return $result;
  }

  public function updateData($data, $id){
    $this->where(" id=".$id);
    $result= $this->update($data);
    return $result;
  }

  public function selectOneData($id){
    $this->where(" id=".$id);
    $result = $this->select();
    return $result;
  }
}


?>
