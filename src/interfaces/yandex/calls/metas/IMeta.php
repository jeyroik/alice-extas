<?php
namespace extas\interfaces\yandex\calls\metas;

use extas\interfaces\IItem;

interface IMeta extends IItem
{
    public function getLocale(): string;
    public function getTimezone(): string;
    public function getClientId(): string;

    /**
     * @return IMetaInterface[]
     */
    public function getInterfaces(): array;
}
