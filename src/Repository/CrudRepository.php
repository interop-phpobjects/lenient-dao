<?php
namespace Interop\Lenient\Dao\Repository;

interface CrudRepository extends Repository
{
    /**
     *  @return RepositoryFactory
     */
    //public function getRepositoryFactory();

    /**
     *  @return void
     */
    //public function setDataMapper(DataMapper $dataMapper);

    /**
     *  @param  array|object $entity Savinging entity
     *  @return array|object         Saved entity
     */
    public function save($entity);

    /**
     *  @param  object $id        Primary Key
     *  @return array|object|null found object
     */
    public function findById($id);

    /**
     *  @param  array $filter     Query filter
     *  @param  array $sort       key name and direction
     *  @return ResultList        found object
     */
    public function findAll(array $filter=null,array $sort=null,$limit=null,$offset=null);

    /**
     *  @param  array $filter     Query filter
     *  @param  array $sort       key name and direction
     *  @return array|object|null found object
     */
    public function findOne(array $filter=null,array $sort=null,$offset=null);

    /**
     *  @param  object $entity      Entity
     *  @return void
     */
    public function delete($entity);

    /**
     *  @param  object $entityOrKey Primary Key
     *  @param  string $keyName     Alternate key name
     */
    public function deleteById($id);

    /**
     *  @param  array $filter     Query filter
     *  @return void
     */
    public function deleteAll(array $filter=null);

    /**
     *  @param  object $id        Primary Key
     *  @return boolean           found object
     */
    public function existsById($id);

    /**
     *  @param  array $filter     Query filter
     *  @return void
     */
    public function count(array $filter=null);

    /**
     * @return QueryBuilder             Query builder
     */
    public function getQueryBuilder();
}
