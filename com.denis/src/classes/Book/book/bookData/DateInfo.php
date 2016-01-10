<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:46
 */
class DateInfo
{
    private $bookBasicDateInfo;
    private $publishDate;

    /**
     * DateInfo constructor.
     * @param $bookBasicDateInfo
     * @param $publishDate
     */
    public function __construct(BookBasicDateInfo $bookBasicDateInfo,PublishDate $publishDate)
    {
        $this->bookBasicDateInfo = $bookBasicDateInfo;
        $this->publishDate = $publishDate;
    }
}