<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:10
 */
class AuthorBasicDateInfo
{
    private $authorCreate;
    private $authorUpdate;

    /**
     * AuthorBasicDateInfo constructor.
     * @param $authorCreate
     * @param $authorUpdate
     */
    public function __construct(AuthorCreate $authorCreate,AuthorUpdate $authorUpdate)
    {
        $this->authorCreate = $authorCreate;
        $this->authorUpdate = $authorUpdate;
    }
}