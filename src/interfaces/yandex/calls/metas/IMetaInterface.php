<?php
namespace extas\interfaces\yandex\calls\metas;

use extas\interfaces\IItem;

interface IMetaInterface extends IItem
{
    public function getName();
    public function getOptions();
}
