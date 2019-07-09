<?php
namespace extas\interfaces\yandex\calls\requests;

use extas\interfaces\IItem;

interface IRequestNLU extends IItem
{
    /**
     * @return string[]
     */
    public function getTokens(): array;


    public function getEntities();
}
