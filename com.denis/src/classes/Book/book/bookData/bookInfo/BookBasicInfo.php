<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:50
 */
class BookBasicInfo
{
    private $bookName;
    private $externalInfo;

    /**
     * BasicInfo constructor.
     * @param $bookName
     * @param $externalInfo
     */
    public function __construct(BookName $bookName,ExternalInfo $externalInfo)
    {
        $this->bookName = $bookName;
        $this->externalInfo = $externalInfo;
    }
}