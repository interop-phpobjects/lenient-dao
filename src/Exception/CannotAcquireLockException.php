<?php
namespace Interop\Lenient\Dao\Exception;

interface CannotAcquireLockException
extends PessimisticLockingFailureException
{}
