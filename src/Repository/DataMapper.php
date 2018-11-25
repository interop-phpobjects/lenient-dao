<?php
namespace Interop\Lenient\Dao\Repository;

interface DataMapper
{
    /**
     * @return array|object entity
     */
    public function map($data);

    /**
     * @return array        data
     */
    public function demap($entity);

    /**
     * @return array|object entity
     */
    public function fillId($entity,$id);

    /**
     * @return string       Specify fetch class when table operations
     */
    public function getFetchClass();
}