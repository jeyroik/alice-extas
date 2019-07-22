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

    /**
     * @return mixed
     */
    public function run();
}
