<?php
namespace Interop\Lenient\Dao\Exception;

interface DeadlockLoserDataAccessException
extends PessimisticLockingFailureException
{}
