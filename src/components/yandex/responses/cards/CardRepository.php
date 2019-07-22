<?php
namespace extas\components\yandex\responses\cards;

use extas\components\repositories\Repository;

/**
 * Class CardRepository
 *
 * @package extas\components\yandex\responses\cards
 * @author jeyroik@gmail.com
 */
class CardRepository extends Repository
{
    protected $itemClass = Card::class;
    protected $idAs = Card::FIELD__ID;
    protected $pk = Card::FIELD__NAME;
    protected $name = 'cards';
    protected $scope = 'alice';
}
