<?php

namespace App\Command\Demo;

use App\Command\BaseController;

class ConfigController extends BaseController
{
    public function handle(): void
    {
        $configValue = $this->getApp()->config->miniCliEnv ;

        $this->render(<<<HTML
            <div class="py-2">
                <div class="px-1 bg-green-600">MiniTerm</div>
                <em class="ml-1">
                  Hello, {$configValue}
                </em>
            </div>
        HTML);
    }
}
