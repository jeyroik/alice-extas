<?php
namespace extas\components\yandex\responses\buttons;

use extas\components\repositories\Repository;
use extas\interfaces\yandex\responses\buttons\IButtonRepository;

/**
 * Class ButtonRepository
 *
 * @package extas\components\yandex\responses\buttons
 * @author jeyroik@gmail.com
 */
class ButtonRepository extends Repository implements IButtonRepository
{
    protected $scope = 'alice';
    protected $name = 'buttons';
    protected $pk = Button::FIELD__NAME;
    protected $idAs = '';
    protected $itemClass = Button::class;
}
