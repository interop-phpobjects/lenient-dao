<?php
namespace Interop\Lenient\Dao\Query;

interface Cursor
{
    public function fetch();
    public function close();
}