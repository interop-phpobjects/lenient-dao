<?php
namespace Interop\Lenient\Dao\Resource;

interface DataSource
{
    public function getConnection($username=null,$password=null);
}
