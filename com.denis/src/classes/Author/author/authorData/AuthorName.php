<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:11
 */
class AuthorName
{
    private $authorFirstName;
    private $authorLastName;

    /**
     * AuthorName constructor.
     * @param $authorFirstName
     * @param $authorLastName
     */
    public function __construct(AuthorFirstName $authorFirstName,AuthorLastName $authorLastName)
    {
        $this->authorFirstName = $authorFirstName;
        $this->authorLastName = $authorLastName;
    }
}