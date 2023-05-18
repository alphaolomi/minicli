<?php

namespace App\Command\Todos;

use App\Command\BaseController;

class DefaultController extends BaseController
{
    public function handle(): void
    {
        $this->render(<<<HTML
            <div class="py-2">
                <div class="px-1 bg-cyan-600">INFO</div>
                <span class="ml-1">
                  Run <span class="font-bold italic">./minicli todos list</span> to list all todos.
                </span>

                <span class="ml-1">
                  Run <span class="font-bold italic">./minicli todos add "My new todo"</span> to add a new todo.
                </span>

                <span class="ml-1">
                  Run <span class="font-bold italic">./minicli todos remove 1</span> to remove a todo by ID.
                </span>
            </div>
        HTML);
    }
}
