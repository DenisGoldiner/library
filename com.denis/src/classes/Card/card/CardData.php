<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:30
 */
class CardData
{
    private $cardInfo;
    private $cardName;

    /**
     * CardData constructor.
     * @param $cardInfo
     * @param $cardName
     */
    public function __construct(CardInfo $cardInfo,CardName $cardName)
    {
        $this->cardInfo = $cardInfo;
        $this->cardName = $cardName;
    }
}