<?php
namespace Interop\Lenient\Dao\Query;

use Iterator;

interface ResultList extends Cursor,Iterator
{
    const TYPE_FORWARD_ONLY = 1;
    const TYPE_SCROLL_INSENSITIVE = 2;
    const TYPE_SCROLL_SENSITIVE = 3;
    
    const CONCUR_READ_ONLY = 1;
    const CONCUR_UPDATABLE = 2;

    const HOLD_CURSORS_OVER_COMMIT = 1;
    const CLOSE_CURSORS_AT_COMMIT = 2;

    public function setFetchFunction(/*callable*/$fetchFunction);
    public function getFetchFunction();
    public function setCloseFunction(/*callable*/$closeFunction);
    public function getCloseFunction();
    public function addFilter(/*callable*/$filter);
    public function setFilters(array $filters);
    public function getFilters();

//    public function current();
//    public function first();
//    public function last();
//    public function absolute($row);
//    public function relative($rows);
//    public function deleteRow();
    

//    public function initialize($cursor,$method);
//    public function getCursor();
//    public function getFetchFunction();
//    public function setCursor($cursor);
//    public function setLoader($callback);
//    public function isEmpty();
}