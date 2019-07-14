<?php
namespace extas\components\plugins\alice;

use extas\components\plugins\PluginInstallDefault;
use extas\components\yandex\skills\scenarios\Scenario;
use extas\interfaces\yandex\skills\scenarios\IScenarioRepository;

/**
 * Class PluginInstallScenarios
 *
 * @package extas\components\plugins\alice
 * @author jeyroik@gmail.com
 */
class PluginInstallScenarios extends PluginInstallDefault
{
    protected $selfRepositoryClass = IScenarioRepository::class;
    protected $selfItemClass = Scenario::class;
    protected $selfUID = Scenario::FIELD__NAME;
    protected $selfSection = 'scenarios';
    protected $selfName = 'scenario';
}
