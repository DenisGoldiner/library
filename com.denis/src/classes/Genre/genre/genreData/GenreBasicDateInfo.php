<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:23
 */
class GenreBasicDateInfo
{
    private $genreCreate;
    private $genreUpdate;

    /**
     * BasicDataInfo constructor.
     * @param $genreCreate
     * @param $genreUpdate
     */
    public function __construct(GenreCreate $genreCreate,GenreUpdate $genreUpdate)
    {
        $this->genreCreate = $genreCreate;
        $this->genreUpdate = $genreUpdate;
    }

}