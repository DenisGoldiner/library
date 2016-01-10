<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 30.11.2015
 * Time: 12:44
 */
$collection = new Collection();

$connection = new DBConnector();
$db = $connection -> connect();
$sql = mysql_query("SELECT * FROM author", $db);
var_dump($sql);

$author_1 = new SimpleAuthor();