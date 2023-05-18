<?php

namespace App\Command\Demo;

use App\Command\BaseController;

class DefaultController extends BaseController
{
    public function handle(): void
    {
        $this->render(<<<'HTML'
    <pre>
 __  __ _       _  ____ _     ___ 
|  \/  (_)_ __ (_)/ ___| |   |_ _|
| |\/| | | '_ \| | |   | |    | | 
| |  | | | | | | | |___| |___ | | 
|_|  |_|_|_| |_|_|\____|_____|___|
    </pre>
HTML);

        $version = $this->getApp()->config->version ?? '1.0.0';
        $author = $this->getApp()->config->author ?? 'Alpha Olomi';

        $this->getPrinter()->display("Version: {$version}");
        $this->getPrinter()->display("Author: {$author}");

        $this->render(<<<HTML
        <div class="py-2">
            <div class="px-1 bg-cyan-600">INFO</div>
            <span class="ml-1">
              Run <span class="font-bold italic">./minicli help</span> for usage help.
            </span>
        </div>
    HTML);
    }
}
