<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.04.2017
 * Time: 11:10
 */
class DB {

/*    protected $db_name = 'strategy_db_site';
    protected $db_user = 'strategy_site_user';
    protected $db_pass = '&ofvTz8xK7=Y';
    protected $db_host = 'localhost';
    public $connection;*/

    protected $db_name = 'strategy_db_site';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_host = 'localhost';
    public $connection;

    //Constructor is called whenever a new object is created.
    //Takes an associative array with the DB row as an argument.
    function __construct() {
        $this->connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass);
        mysqli_select_db($this->connection, $this->db_name);
        return true;
    }

// Открывает соединение к БД. Убедитесь, что
// эта функция вызывается на каждой странице
    public function connect() {
        $this->connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass);
        mysqli_select_db($this->connection, $this->db_name);
        return true;
    }

// Берет ряд mysql и возвращает ассоциативный массив, в котором
// названия колонок являются ключами массива. Если singleRow - true,
// тогда выводится только один ряд
    public function processRowSet($rowSet, $singleRow=false)
    {
        $resultArray = array();
        while($row = mysqli_fetch_assoc($rowSet))
        {
            array_push($resultArray, $row);
        }
        if($singleRow === true)
            return $resultArray[0];
        return $resultArray;
    }
    public function selectQ($query) {
        //$sql = "SELECT * FROM $table WHERE $where";
        $result = mysqli_query($this->connection, $query);
        if(mysqli_num_rows($result) == 1)
            return $this->processRowSet($result, true);
        return $this->processRowSet($result);
    }
    //Выбирает ряды из БД
    //Выводит полный ряд или ряды из $table используя $where
    public function select($table, $where = '1=1') {
        $sql = "SELECT * FROM $table WHERE $where";
        $result = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($result) == 1)
            return $this->processRowSet($result, true);
        return $this->processRowSet($result);
    }

    //Вносит изменения в БД
    public function update($data, $table, $where) {
        foreach ($data as $column => $value) {
            $sql = "UPDATE $table SET $column = '$value' WHERE $where";
            //echo $sql;
            mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));
        }
        return true;
    }

    public function view($table, $where) {

        $sql = "UPDATE $table SET `view` = `view` + 1 WHERE $where";
        //echo $sql;
        mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));

        return true;
    }

    public function selectQuery($query) {

        //mysqli_query($this->connection, $query) or die(mysqli_error($this->connection));
        $result = mysqli_query($this->connection, $query);
        if(mysqli_num_rows($result) == 1)
            return $this->processRowSet($result, true);
        return $this->processRowSet($result);
    }

    public function insert($data, $table) {

        $columns = "";
        $values = "";
        foreach ($data as $column => $value) {
            $columns .= ($columns == "") ? "" : ', ';
            $columns .= $column;
            $values .= ($values == "") ? "" : "', '" ;
            $values .= $value;
        }
        $sql = "insert into $table ($columns) values ('".$values."')";

        /*if($_SERVER['REMOTE_ADDR'] == '87.237.238.83'){
            echo ($sql); die;
        }*/

        mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));

        //Выводит ID пользователя в БД.
        return mysqli_insert_id($this->connection);
    }
}

