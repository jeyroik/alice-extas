<?php
namespace extas\interfaces\yandex\calls\requests;

use extas\interfaces\IItem;

/**
 * Interface IRequestMarkup
 *
 * @package extas\interfaces\yandex\calls\requests
 * @author jeyroik@gmail.com
 */
interface IRequestMarkup extends IItem
{
    const SUBJECT = 'alice.call.request.markup';

    const FIELD__IS_DANGEROUS_CONTEXT = 'dangerous_context';

    /**
     * @return bool
     */
    public function isDangerousContext(): bool;

    /**
     * @param bool $isDangerousContext
     *
     * @return $this
     */
    public function setIsDangerousContext(bool $isDangerousContext);
}
