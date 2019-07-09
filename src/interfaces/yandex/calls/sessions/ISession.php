<?php
namespace extas\interfaces\yandex\calls\sessions;

use extas\interfaces\IItem;

interface ISession extends IItem
{
    public function isNew(): bool;
    public function getMessageId(): int;
    public function getSessionId(): string;
    public function getSkillId(): string;
    public function getUserId(): string;
}
