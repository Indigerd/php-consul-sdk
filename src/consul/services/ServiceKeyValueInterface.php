<?php
/**
 * @author Alexander Stepanenko <alex.stepanenko@gmail.com>
 */

namespace indigerd\consul\services;

use indigerd\consul\models\KeyValue;

interface ServiceKeyValueInterface
{
    public function getKeyValue(string $key) : KeyValue;
    public function setKeyValue(KeyValue $keyValue);
    public function deleteKeyValue(KeyValue $keyValue, bool $recurse);
}
