<?php
namespace extas\components\plugins\alice;

use extas\components\plugins\PluginInstallDefault;
use extas\components\yandex\skills\AliceSkill;
use extas\interfaces\yandex\skills\IAliceSkillRepository;

/**
 * Class PluginInstallSkills
 *
 * @package extas\components\plugins\alice
 * @author jeyroik@gmail.com
 */
class PluginInstallSkills extends PluginInstallDefault
{
    protected $selfName = 'skill';
    protected $selfSection = 'skills';
    protected $selfUID = AliceSkill::FIELD__ID;
    protected $selfItemClass = AliceSkill::class;
    protected $selfRepositoryClass = IAliceSkillRepository::class;
}
