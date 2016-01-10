<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:06
 */
abstract class Author
{
    private $authorData;
    private $AuthorId;

    /**
     * Author constructor.
     * @param $authorData
     * @param $AuthorId
     */
    public function __construct(AuthorData $authorData, AuthorId $AuthorId)
    {
        $this->authorData = $authorData;
        $this->AuthorId = $AuthorId;
    }

}