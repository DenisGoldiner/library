<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:46
 */
class BookInfo
{
    private $bookBasicInfo;
    private $bookLocation;

    /**
     * BookInfo constructor.
     * @param $bookBasicInfo
     * @param $bookLocation
     */
    public function __construct(BookBasicInfo $bookBasicInfo,BookLocation $bookLocation)
    {
        $this->bookBasicInfo = $bookBasicInfo;
        $this->bookLocation = $bookLocation;
    }
}