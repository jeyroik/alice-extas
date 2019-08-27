<?php
namespace extas\interfaces\yandex\responses\cards;

use extas\interfaces\IHasName;
use extas\interfaces\IHasType;
use extas\interfaces\IItem;

/**
 * Interface ICard
 *
 * @package extas\interfaces\yandex\responses\cards
 * @author jeyroik@gmail.com
 */
interface ICard extends IItem, IHasName, IHasType
{
    const SUBJECT = 'alice.response.card';

    const TYPE__IMAGE_SINGLE = 'BigImage';
    const TYPE__IMAGE_LIST = 'ItemsList';

    const STAGE__CARD_BUILD = 'alice.card.build';

    /**
     * @return $this
     */
    public function build();
}
