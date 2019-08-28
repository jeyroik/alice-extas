<?php
namespace extas\components\yandex\skills;

use extas\components\repositories\Repository;
use extas\interfaces\yandex\skills\IAliceSkillRepository;

/**
 * Class AliceSkillRepository
 *
 * @package extas\components\yandex\skills
 * @author jeyroik@gmail.com
 */
class AliceSkillRepository extends Repository implements IAliceSkillRepository
{
    protected $itemClass = AliceSkill::class;
    protected $pk = AliceSkill::FIELD__ID;
    protected $name = 'skills';
    protected $scope = 'alice';
    protected $idAs = '';
}
