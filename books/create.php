<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
     
    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/books.php';
     
    $database = new Database();
    $db = $database->getConnection();
     
    $books = new books($db);
     
    // get posted data
    //$data = json_decode(file_get_contents("php://input"));
     
    // set books property values
    $books->title = isset($_GET['title']) ? $_GET['title'] : die();
    $books->author_name = isset($_GET['author_name']) ? $_GET['author_name'] : die();
    $books->price = isset($_GET['price']) ? $_GET['price'] : die();
    $books->isbn = isset($_GET['isbn']) ? $_GET['isbn'] : die();
    $books->category = isset($_GET['category']) ? $_GET['category'] : die();
   
    // create the books
    if($books->create()){
        echo '{';
            echo '"message": "books was created."';
        echo '}';
    }
     
    // if unable to create the books, tell the user
    else{
        echo '{';
            echo '"message": "Unable to create books."';
        echo '}';
    }
?>