<?php
class db
{
    public $host;
    public $user;
    public $pass;
    public $data;
    public $con;
    public $table;
    function db()
    {
        $this->host="localhost";
        $this->user="usern";
        $this->pass="passwrd";
        $this->data="dbname";   
    }   
    public function connect()
    {
        $this->con=mysql_connect($this->host,$this->user,$this->pass);
        if(!$this->con)
        {
            echo mysql_error();
        }
        $sel=mysql_select_db($this->data, $this->con);
        if(!$sel)
        {
            echo mysql_error();
        }
    }
    public function insert($name,$number)
    {
        $sql=mysql_query("INSERT INTO tablename(name, number) VALUES('$name', '$number')");
        if(!$sql)
        {
            echo mysql_error();
        }
    }
}
?>