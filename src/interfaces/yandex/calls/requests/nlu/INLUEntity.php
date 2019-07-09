<?php
namespace extas\interfaces\yandex\calls\requests\nlu;

use extas\interfaces\IItem;

interface INLUEntity extends IItem
{
    public function getStartToken(): string;
    public function getEndToken(): string;

    public function getType(): string;
    public function getValue(): INLUValue;
}