<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:41
 */
class BookData
{
    private $bookInfo;
    private $dateInfo;

    /**
     * BookData constructor.
     * @param $bookInfo
     * @param $dateInfo
     */
    public function __construct(BookInfo $bookInfo,DateInfo $dateInfo)
    {
        $this->bookInfo = $bookInfo;
        $this->dateInfo = $dateInfo;
    }
}