<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:47
 */
class BookBasicDateInfo
{
    private $bookCreate;
    private $bookUpdate;

    /**
     * BookBasicDateInfo constructor.
     * @param $bookCreate
     * @param $bookUpdate
     */
    public function __construct(BookCreate $bookCreate,BookUpdate $bookUpdate)
    {
        $this->bookCreate = $bookCreate;
        $this->bookUpdate = $bookUpdate;
    }
}