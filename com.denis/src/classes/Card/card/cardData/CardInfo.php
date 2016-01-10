<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:32
 */
class CardInfo
{
    private $cardBasicDateInfo;
    private $specifications;

    /**
     * CardInfo constructor.
     * @param $cardBasicDateInfo
     * @param $specifications
     */
    public function __construct(CardBasicDateInfo $cardBasicDateInfo,Specifications $specifications)
    {
        $this->cardBasicDateInfo = $cardBasicDateInfo;
        $this->specifications = $specifications;
    }
}