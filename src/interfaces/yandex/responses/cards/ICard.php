<?php
namespace extas\interfaces\yandex\responses\cards;

use extas\interfaces\IHasName;
use extas\interfaces\IItem;

/**
 * Interface ICard
 *
 * @package extas\interfaces\yandex\responses\cards
 * @author jeyroik@gmail.com
 */
interface ICard extends IItem, IHasName
{
    const SUBJECT = 'alice.response.card';

    const FIELD__TYPE = 'type';
    const FIELD__ID = 'id';

    const TYPE__IMAGE_SINGLE = 'BigImage';
    const TYPE__IMAGE_LIST = 'ItemsList';

    const STAGE__CARD_BUILD = 'alice.card.build';

    /**
     * @return $this
     */
    public function build();

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

    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id);
}
