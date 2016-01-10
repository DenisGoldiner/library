<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:48
 */
class BookLocation
{
    private $bookLocation;

    /**
     * BookLocation constructor.
     * @param $bookLocation
     */
    public function __construct(Client $bookLocation)
    {
        $this->bookLocation = $bookLocation;
    }

}