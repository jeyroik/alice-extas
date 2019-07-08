<?php
namespace extas\interfaces\yandex;

use extas\interfaces\IItem;

/**
 * Interface IAliceRequest
 *
 * @package extas\interfaces\yandex
 * @author jeyroik@gmail.com
 */
interface IAliceRequest extends IItem
{
    const SUBJECT = 'yandex.alice.request';

    public function getSession();
    public function getType();
    public function getCommand();
    public function getPayload();
}
