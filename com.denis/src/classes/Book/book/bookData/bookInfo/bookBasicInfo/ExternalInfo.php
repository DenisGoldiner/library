<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:56
 */
class ExternalInfo
{
    private $genre;
    private $author;

    /**
     * ExternalInfo constructor.
     * @param $genre
     * @param $author
     */
    public function __construct(Genre $genre, Author $author)
    {
        $this->genre = $genre;
        $this->author = $author;
    }

}