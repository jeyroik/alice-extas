<?php
namespace extas\components\yandex\responses\cards\lists;

use extas\components\yandex\responses\cards\Card;
use extas\components\yandex\responses\cards\singles\CardImageSingle;
use extas\interfaces\yandex\responses\cards\lists\ICardImageList;
use extas\interfaces\yandex\responses\cards\lists\IListFooter;
use extas\interfaces\yandex\responses\cards\lists\IListHeader;
use extas\interfaces\yandex\responses\cards\singles\ICardImageSingle;

/**
 * Class CardImageList
 *
 * @package extas\components\yandex\responses\cards\lists
 * @author jeyroik@gmail.com
 */
class CardImageList extends Card implements ICardImageList
{
    /**
     * @return IListFooter
     */
    public function getFooter(): IListFooter
    {
        $footer = $this->config[static::FIELD__FOOTER] ?? [];

        return new ListFooter($footer);
    }

    /**
     * @return IListHeader
     */
    public function getHeader(): IListHeader
    {
        $header = $this->config[static::FIELD__HEADER] ?? [];

        return new ListHeader($header);
    }

    /**
     * @return ICardImageSingle[]
     */
    public function getItems(): array
    {
        $itemsData = $this->config[static::FIELD__ITEMS] ?? [];
        $items = [];

        foreach ($itemsData as $item) {
            $items[] = new CardImageSingle($item);
        }

        return $items;
    }

    /**
     * @param IListFooter $footer
     *
     * @return $this
     */
    public function setFooter(IListFooter $footer)
    {
        $this->config[static::FIELD__FOOTER] = $footer->__toArray();

        return $this;
    }

    /**
     * @param IListHeader $header
     *
     * @return $this
     */
    public function setHeader(IListHeader $header)
    {
        $this->config[static::FIELD__HEADER] = $header->__toArray();

        return $this;
    }

    /**
     * @param array|ICardImageSingle[] $items
     *
     * @return $this
     */
    public function setItems(array $items)
    {
        $itemsData = [];

        foreach ($items as $item) {
            $itemsData[] = $item instanceof ICardImageSingle ? $item->__toArray() : $item;
        }

        $this->config[static::FIELD__ITEMS] = $itemsData;

        return $this;
    }

    /**
     * @param ICardImageSingle $item
     *
     * @return $this
     */
    public function addItem(ICardImageSingle $item)
    {
        $this->config[static::FIELD__ITEMS] = $this->config[static::FIELD__ITEMS] ?? [];
        $this->config[static::FIELD__ITEMS][] = $item->__toArray();

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
