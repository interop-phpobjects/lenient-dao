<?php
namespace Interop\Lenient\Dao\Query;

interface Parameter
{
    public function getName();
    public function setName($name);
    public function getValue();
    public function setValue($value);
}
