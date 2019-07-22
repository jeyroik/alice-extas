<?php
namespace extas\components\plugins\alice;

use extas\components\plugins\PluginInstallDefault;
use extas\components\yandex\responses\cards\Card;
use extas\interfaces\yandex\responses\cards\ICardRepository;

/**
 * Class PluginInstallCards
 *
 * @package extas\components\plugins\alice
 * @author jeyroik@gmail.com
 */
class PluginInstallCards extends PluginInstallDefault
{
    protected $selfRepositoryClass = ICardRepository::class;
    protected $selfItemClass = Card::class;
    protected $selfUID = Card::FIELD__ID;
    protected $selfSection = 'cards';
    protected $selfName = 'card';
}
