<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 15:47
 */
class ClientCard
{
    private $clientCard;
    private $booksNumber;

    /**
     * ClientCardInfo constructor.
     * @param $clientCard
     * @param $booksNumber
     */
    public function __construct(Card $clientCard,BooksNumber $booksNumber)
    {
        $this->clientCard = $clientCard;
        $this->booksNumber = $booksNumber;
    }
}