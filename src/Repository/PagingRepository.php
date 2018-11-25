<?php
namespace Interop\Lenient\Dao\Repository;

interface PagingRepository extends Repository
{
    /**
     *  @param  array $filter     Query filter
     *  @param  array $sort       key name and direction
     *  @return Paginator         Paging object
     */
    public function findAll(array $filter=null,array $sort=null);
}
