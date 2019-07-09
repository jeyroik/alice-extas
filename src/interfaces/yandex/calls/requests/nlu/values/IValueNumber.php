<?php
namespace extas\interfaces\yandex\calls\requests\nlu\values;

use extas\interfaces\yandex\calls\requests\nlu\INLUValue;

/**
 * Interface IValueNumber
 *
 * Using:
 * $number = $entity->getValue();
 * echo $number->__toInt();
 *
 * @package extas\interfaces\yandex\calls\requests\nlu\values
 * @author jeyroik@gmail.com
 */
interface IValueNumber extends INLUValue
{
    const SUBJECT = 'alice.call.request.nlu.value.number';

    const FIELD__VALUE = 'value';

    const CON__EQUAL = 0;
    const CON__NOT_EQUAL = 1;
    const CON__GREATER = 2;
    const CON__LOWER = 3;
    const CON__GREATER_OR_EQUAL = 4;
    const CON__LOWER_OR_EQUAL = 5;
    const CON__IS_EMPTY = 6;
    const CON__LIKE = 7;

    /**
     * @return float
     */
    public function __toFloat(): float;

    /**
     * @param string $condition
     * @param int $compareTo
     *
     * @return bool
     */
    public function is($condition, $compareTo = null): bool;
}
