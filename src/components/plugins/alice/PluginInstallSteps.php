<?php
namespace extas\components\plugins\alice;

use extas\components\plugins\PluginInstallDefault;
use extas\components\yandex\skills\steps\Step;
use extas\interfaces\yandex\skills\steps\IStepRepository;

/**
 * Class PluginInstallSteps
 *
 * @package extas\components\plugins\alice
 * @author jeyroik@gmail.com
 */
class PluginInstallSteps extends PluginInstallDefault
{
    protected $selfRepositoryClass = IStepRepository::class;
    protected $selfItemClass = Step::class;
    protected $selfUID = Step::FIELD__TITLE;
    protected $selfSection = 'steps';
    protected $selfName = 'step';
}
