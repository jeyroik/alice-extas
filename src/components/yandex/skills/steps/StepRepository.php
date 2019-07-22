<?php
namespace extas\components\yandex\skills\steps;

use extas\components\repositories\Repository;
use extas\interfaces\yandex\skills\steps\IStepRepository;

/**
 * Class StepRepository
 *
 * @package extas\components\yandex\skills\steps
 * @author jeyroik@gmail.com
 */
class StepRepository extends Repository implements IStepRepository
{
    protected $itemClass = Step::class;
    protected $idAs = '';
    protected $pk = Step::FIELD__NAME;
    protected $name = 'steps';
    protected $scope = 'alice';
}
