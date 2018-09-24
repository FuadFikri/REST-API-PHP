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

    function create(){
        $query = "INSERT into ".$this->table_name ." set title=?, author_name=?, price=?, isbn=?, category=?";
        
        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->title = $this->title;
        $this->author_name = $this->author_name;
        $this->price = $this->price;
        $this->isbn = $this->isbn;
        $this->category = $this->category;

        // bind values
        $stmt->bindParam(1, $this->title);
        $stmt->bindParam(2, $this->author_name);
        $stmt->bindParam(3, $this->price);
        $stmt->bindParam(4, $this->isbn);
        $stmt->bindParam(5, $this->category);

        // execute
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
?>