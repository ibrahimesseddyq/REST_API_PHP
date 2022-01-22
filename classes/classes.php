<?php 
class Database{
    public $host;
    public $user;
    public $password;
    public $dbname;

    function __construct($host, $user, $password, $dbname){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
    }
    function connect() {
        try{
        $con=mysqli_connect($this->host,$this->dbname,$this->user,$this->password);
        }catch(Exception $e){
            echo "Connection failed ".$e;
        }
        return $con;
    }
}




class Country{
    public $id;
    public $name ;
    public $area;
    public $population;
    public $capital;
    
    function __construct($id,$name,$area,$population,$capital){
        $this->id=$id;
        $this->name=$name;
        $this->area=$area;
        $this->population=$population;
        $this->capital=$capital;
    }
}
?>