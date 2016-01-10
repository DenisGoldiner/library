<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:10
 */
class AuthorData
{
    private $authorBasicDateInfo;
    private $authorName;

    /**
     * AuthorData constructor.
     * @param $authorBasicDateInfo
     * @param $authorName
     */
    public function __construct(AuthorBasicDateInfo $authorBasicDateInfo,AuthorName $authorName)
    {
        $this->authorBasicDateInfo = $authorBasicDateInfo;
        $this->authorName = $authorName;
    }
}