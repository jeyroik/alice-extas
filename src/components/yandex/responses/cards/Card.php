<?php
namespace extas\components\yandex\responses\cards;

use extas\components\Item;
use extas\interfaces\yandex\responses\cards\ICard;

/**
 * Class Card
 *
 * @package extas\components\yandex\responses\cards
 * @author jeyroik@gmail.com
 */
abstract class Card extends Item implements ICard
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->config[static::FIELD__TYPE] ?? '';
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type)
    {
        $this->config[static::FIELD__TYPE] = $type;

        return $this;
    }
}
