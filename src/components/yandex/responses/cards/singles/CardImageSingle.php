<?php
namespace extas\components\yandex\responses\cards\singles;

use extas\components\THasDescription;
use extas\components\yandex\responses\buttons\THasButton;
use extas\components\yandex\responses\cards\Card;
use extas\interfaces\yandex\responses\cards\singles\ICardImageSingle;

/**
 * Class CardImageSingle
 *
 * @package extas\components\yandex\responses\cards\singles
 * @author jeyroik@gmail.com
 */
class CardImageSingle extends Card implements ICardImageSingle
{
    use THasButton;
    use THasDescription;

    /**
     * Используется в THasButton
     *
     * @var string
     */
    protected $buttonClass = SingleButton::class;

    /**
     * @return string
     */
    public function getImageId(): string
    {
        return $this->config[static::FIELD__IMAGE_ID] ?? '';
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId(string $imageId)
    {
        $this->config[static::FIELD__IMAGE_ID] = $imageId;

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
