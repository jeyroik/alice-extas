<?php
namespace extas\interfaces\yandex\responses\cards;

use extas\interfaces\IItem;

/**
 * Interface ICard
 *
 * @package extas\interfaces\yandex\responses\cards
 * @author jeyroik@gmail.com
 */
interface ICard extends IItem
{
    const FIELD__TYPE = 'type';

    const TYPE__IMAGE_SINGLE = 'BigImage';
    const TYPE__IMAGE_LIST = 'ItemsList';

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type);
}
