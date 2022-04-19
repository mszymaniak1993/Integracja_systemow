<?php
class Project{
    private $dbTable = "project";
    public $id;
    public $title;
    public $description;
    public $contract_no;
    public $beneficiary;
    public $fund;
    public $location;
    public $duration;
    public $information;
    public function __construct($db){
        $this->conn = $db;
    }
    function read(){
        if($this->id) {
            $stmt = $this->conn->prepare("SELECT * FROM ".$this->dbTable." WHERE idproject = ?");
            $stmt->bind_param("i", $this->id);
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM ".$this->dbTable);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    function write(){
        //TODO
    }
}
?>