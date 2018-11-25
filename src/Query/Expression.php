<?php
namespace Interop\Lenient\Dao\Query;

interface Expression
{
    const BEGIN_WITH = 1;
    const EQUAL = 2;
    const GREATER_THAN = 3;
    const GREATER_THAN_OR_EQUAL = 4;
    const IN = 5;
    const LESS_THAN = 6;
    const LESS_THAN_OR_EQUAL = 7;
    const NOT_EQUAL = 8;

    public function getPropertyName();
    public function getOperator();
    public function getValue();
}
