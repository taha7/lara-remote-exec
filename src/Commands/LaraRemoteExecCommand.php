<?php

namespace Taha7\LaraRemoteExec\Commands;

use Illuminate\Console\Command;

class LaraRemoteExecCommand extends Command
{
    public $signature = 'lara-remote-exec';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
