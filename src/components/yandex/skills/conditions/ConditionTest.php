<?php
namespace extas\components\yandex\skills\conditions;

use extas\interfaces\yandex\calls\IAliceCall;

/**
 * Class ConditionTest
 *
 * @package extas\components\yandex\skills\conditions
 * @author jeyroik@gmail.com
 */
class ConditionTest
{
    /**
     * @param IAliceCall $call
     *
     * @return bool
     */
    public function __invoke(IAliceCall $call)
    {
        $cmd = $call->getRequest()->getCommand();

        return strpos($cmd, 'ping') !== false;
    }
}
