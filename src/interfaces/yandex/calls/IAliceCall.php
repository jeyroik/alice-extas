<?php
namespace extas\interfaces\yandex\calls;

use extas\interfaces\IItem;
use extas\interfaces\yandex\calls\metas\IMeta;
use extas\interfaces\yandex\calls\requests\IRequest;
use extas\interfaces\yandex\calls\sessions\ISession;

/**
 * Interface IAliceRequest
 *
 * @package extas\interfaces\yandex\calls
 * @author jeyroik@gmail.com
 */
interface IAliceCall extends IItem
{
    const SUBJECT = 'yandex.alice.call';

    public function getMeta(): IMeta;
    public function getRequest(): IRequest;
    public function getSession(): ISession;
    public function getVersion(): string;
}
