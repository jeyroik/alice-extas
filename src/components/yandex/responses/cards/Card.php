<?php
namespace extas\components\yandex\responses\cards;

use extas\components\Item;
use extas\components\THasName;
use extas\interfaces\yandex\responses\cards\ICard;

/**
 * Class Card
 *
 * @package extas\components\yandex\responses\cards
 * @author jeyroik@gmail.com
 */
class Card extends Item implements ICard
{
    use THasName;

    /**
     * @return $this
     */
    public function build()
    {
        $built = $this->__toArray();

        $stage = static::STAGE__CARD_BUILD . '.' . $this->getType();
        foreach ($this->getPluginsByStage($stage) as $plugin) {
            $plugin($built, $this);
        }

        $this->config = $built;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->config[static::FIELD__ID] ?? '';
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id)
    {
        $this->config[static::FIELD__ID] = $id;

        return $this;
    }

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

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
