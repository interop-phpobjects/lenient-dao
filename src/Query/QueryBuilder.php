<?php
namespace Interop\Lenient\Dao\Query;

interface QueryBuilder
{
	/**
	 * @return Expression   Condition expression.
	 */
    public function createExpression($propertyName=null,$operator=null,$value=null);

    /**
     * @return String       Named query string
     */
    public function buildNamedQueryString(array $filter=null,array $sort=null);

    /**
     * @return Enum Expression   Operator code of the BEGIN_WITH
     */
    public function bw();

    /**
     * @return Enum Expression   Operator code of the EQUAL
     */
    public function eq();

    /**
     * @return Enum Expression   Operator code of the GREATER_THAN
     */
    public function gt();

    /**
     * @return Enum Expression   Operator code of the GREATER_THAN_OR_EQUAL
     */
    public function gte();

    /**
     * @return Enum Expression   Operator code of the IN
     */
    public function in();

    /**
     * @return Enum Expression   Operator code of the LESS_THAN
     */
    public function lt();

    /**
     * @return Enum Expression   Operator code of the LESS_THAN_OR_EQUAL
     */
    public function lte();

    /**
     * @return Enum Expression   Operator code of the NOT_EQUAL
     */
    public function Neq();
}
