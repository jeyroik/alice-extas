<?php
namespace extas\components\yandex\skills\scenarios;

use extas\components\repositories\Repository;

/**
 * Class ScenarioRepository
 *
 * @package extas\components\yandex\skills\scenarios
 * @author jeyroik@gmail.com
 */
class ScenarioRepository extends Repository
{
    protected $scope = 'alice';
    protected $name = 'scenarios';
    protected $pk = Scenario::FIELD__NAME;
    protected $idAs = '';
    protected $itemClass = Scenario::class;
}
