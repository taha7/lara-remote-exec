<?php

namespace Taha7\LaraRemoteExec;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Taha7\LaraRemoteExec\LaraRemoteExec
 */
class LaraRemoteExecFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lara-remote-exec';
    }
}
