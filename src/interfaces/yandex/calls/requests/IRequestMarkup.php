<?php
namespace extas\interfaces\yandex\calls\requests;

use extas\interfaces\IItem;

interface IRequestMarkup extends IItem
{
    public function isDangerousContext(): bool;
}
