<?php
namespace extas\components\yandex;

use extas\components\Item;
use extas\interfaces\yandex\IAlice;

/**
 * Class Alice
 *
 * @package extas\components\yandex
 * @author jeyroik@gmail.com
 */
class Alice extends Item implements IAlice
{
    public static function run()
    {
        $yandexRequest = json_decode(file_get_contents('php://input'), true);
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
