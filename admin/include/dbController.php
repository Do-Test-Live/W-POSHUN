<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "poshun";
    private $from_email='noreply@ngt-tech.io';
    private $notification_email='francis@ngttech.io';
    private $conn;

    function __construct() {
        if($_SERVER['SERVER_NAME']=="poshun.ngt.hk"||$_SERVER['SERVER_NAME']=="www.poshun.ngt.hk"){
            $this->host = "localhost";
            $this->user = "ujw0jirc4jwib";
            $this->password = "#bX49&qjE6#c";
            $this->database = "db8itvrgvgj2gg";
        }

        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function checkValue($value) {
        $value=mysqli_real_escape_string($this->conn, $value);
        return $value;
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function insertQuery($query) {
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    function from_email(){
        return $this->from_email;
    }

    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    function notify_email(){
        return $this->notification_email;
    }
}
