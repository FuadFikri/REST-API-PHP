<?php
class Books{
    //database connection
    private $conn;
    private $table_name="books";

    //object properties
    public $id;
    public $title;
    public $author_name;
    public $price;
    public $isbn;
    public $category;
    
    //constructor with db as database connection
    public function __construct($db){
        $this->conn =$db;
    }

    // read books
    function read(){
        // select query
        $query = "SELECT * FROM ".$this->table_name;
        
        // prerpare query statement
        $stmt = $this->conn->prepare($query);

        // execute
        $stmt->execute();

        return $stmt;
    }
}
?>