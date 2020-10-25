<?php  
 
    error_log(-1);
    require_once './utils/show.php';
    require_once './classes/Product.php';
    require_once './classes/Book.php';
    require_once './classes/Notebook.php';


    $book = new Book('3 Man cool',20,700);
    $notebook = new Notebook('Dell',2000,'AMD');

    showInfo($book,);
    showInfo($notebook);

    echo $book->getProduct();
    echo $notebook->getProduct(); 

?>