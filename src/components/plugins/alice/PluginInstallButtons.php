<?php
namespace extas\components\plugins\alice;

use extas\components\plugins\PluginInstallDefault;
use extas\components\yandex\responses\buttons\Button;
use extas\interfaces\yandex\responses\buttons\IButtonRepository;

/**
 * Class PluginInstallButtons
 *
 * @package extas\components\plugins\alice
 * @author jeyroik@gmail.com
 */
class PluginInstallButtons extends PluginInstallDefault
{
    protected $selfItemClass = Button::class;
    protected $selfName = 'button';
    protected $selfSection = 'buttons';
    protected $selfUID = Button::FIELD__TITLE;
    protected $selfRepositoryClass = IButtonRepository::class;
}
