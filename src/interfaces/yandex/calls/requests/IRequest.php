<?php
namespace extas\interfaces\yandex\calls\requests;

use extas\interfaces\IItem;

interface IRequest extends IItem
{
    public function getCommand(): string;
    public function getOriginalUtterance(): string;
    public function getType(): string;
    public function getMarkup(): IRequestMarkup;
    public function getPayload(): IRequestPayload;

    public function getNlu(): IRequestNLU;
}
