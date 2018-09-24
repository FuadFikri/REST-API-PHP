<?php
    //required header
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/books.php';

    // instantiantie database and books object
    $database = new Database();
    $db = $database->getConnection();

    $books = New books($db);

    // query books
    $stmt = $books->read();
    $num = $stmt->rowCount();

    if($num>0){
        $books_arr=array();
        $books_arr["books"]=array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))  {
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);
            $books_item=array(
                "id"=>$id,
                "title"=>$title,
                "author_name"=>$author_name,
                "price"=>$price,
                "isbn"=>$isbn,
                "category"=>$category,
            );
            array_push($books_arr["books"], $books_item);
        }
        echo json_encode($books_arr);
        }else{
            echo json_encode(
                array("message"=>"No books found")
            );
        }


?>