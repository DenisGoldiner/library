<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:38
 */
class Specifications
{
    private $cardPrice;
    private $MaxBookNumber;

    /**
     * Specifications constructor.
     * @param $cardPrice
     * @param $MaxBookNumber
     */
    public function __construct(CardPrice $cardPrice,MaxBookNumber $MaxBookNumber)
    {
        $this->cardPrice = $cardPrice;
        $this->MaxBookNumber = $MaxBookNumber;
    }


}