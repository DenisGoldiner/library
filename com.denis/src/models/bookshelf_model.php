<?php

/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 09.01.2016
 * Time: 18:13
 */
class bookshelf_model
{
    public static function getBooksList(){
        include_once src_path.'/classes/Book/Book.php';
        $booksList = array();

        $dataBase = DBConnector::getConnection();
        $result = $dataBase->query('SELECT * from book ORDER BY book_id');
        $i = 0;
        while($row = $result->fetch()){


            $booksList[$i]['book_id'] = $row['book_id'];
            $booksList[$i]['book_name'] = $row['book_name'];
            $booksList[$i]['author_id'] = $row['author_id'];
            $booksList[$i]['book_publish_date'] = $row['book_publish_date'];
            $booksList[$i]['genre_id'] = $row['genre_id'];


     //       $booksList[$i]['book_location'] = $row['book_location'];
     //       $booksList[$i]['book_creation'] = $row['book_creation'];
     //       $booksList[$i]['book_update'] = $row['book_update'];
            $i ++;
        }

        return $booksList;
    }
}