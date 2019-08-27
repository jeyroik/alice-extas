<?php
namespace extas\interfaces\yandex;

use extas\interfaces\IItem;

/**
 * Interface IAlice
 *
 * @package extas\interfaces\yandex
 * @author jeyroik@gmail.com
 */
interface IAlice extends IItem
{
    const SUBJECT = 'yandex.alice';

    const OPTION__THROW_ON_ERROR = 'throw_on_error';

    /**
     * @return mixed
     */
    public function run();
}
