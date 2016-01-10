<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:24
 */
class GenreInfo
{
    private $genreName;
    private $interestAge;

    /**
     * GenreInfo constructor.
     * @param $genreName
     * @param $interestAge
     */
    public function __construct(GenreName $genreName,InterestAge $interestAge)
    {
        $this->genreName = $genreName;
        $this->interestAge = $interestAge;
    }


}