<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:23
 */
class GenreData
{
    private $basicDataInfo;
    private $genreInfo;

    /**
     * GenreData constructor.
     * @param $basicDataInfo
     * @param $genreInfo
     */
    public function __construct(GenreBasicDateInfo $basicDataInfo,GenreInfo $genreInfo)
    {
        $this->basicDataInfo = $basicDataInfo;
        $this->genreInfo = $genreInfo;
    }

}