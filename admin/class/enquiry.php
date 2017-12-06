<?php
/**
 * This class process all the function and operations regarding the enquiry
 */
class Enquiry extends Database
{

  public function Enquiry()
  {
    $this->table('enquiry');
    Database::Database();
  }

  public function selectAllEnquiry(){
    $data = $this->select();
    return $data;
  }
}

?>
