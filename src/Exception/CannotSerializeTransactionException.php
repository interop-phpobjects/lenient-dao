<?php
namespace Interop\Lenient\Dao\Exception;

interface CannotSerializeTransactionException
extends PessimisticLockingFailureException
{}
