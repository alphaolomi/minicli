<?php

namespace App\Command\Todos;

use App\Command\BaseController;

class ListController extends BaseController
{
    public $baseApi = 'https://jsonplaceholder.typicode.com/todos';

    public function handle(): void
    {
        // if (empty($this->hasParam('page')) || empty($this->hasParam('limit'))) {
        //     $this->getPrinter()->error("Please, inform the name of Pokemon you want to fetch info.");
        //     $this->getPrinter()->error("Usage: ./minicli demo todos page=\"1\" limit=\"5\" ");
        //     return;
        // }

        $page = $this->getParam('page') ?? 1;
        $limit = $this->getParam('limit') ?? 5;

        $this->getPrinter()->info('Showing todos');
        $this->getPrinter()->newline();
        $this->getPrinter()->display("Page: $page, Limit: $limit");
        $this->fetchPokemonInfo($page, $limit);
    }

    public function fetchPokemonInfo(string $page, string $limit): void
    {
        $pokemonInfo = $this->get($this->baseApi . "?_page=$page&_limit=$limit");

        if (is_string($pokemonInfo)) {
            $this->printPokemonTableInfo($pokemonInfo);
        }
    }

    public function printPokemonTableInfo(string $info): void
    {
        try {
            $rows = json_decode($info, true);

            $headers = ['User ID', 'ID', 'Title', 'Completed'];

            $this->view('table', ['headers' => $headers, 'rows' => $rows]);

        } catch (\Throwable $th) {
            if ($this->getApp()->config->debug) {
                $this->getPrinter()->error("An error occurred:");
                $this->getPrinter()->error($th->getMessage());
            }
            return;
        }
    }

    public function get($url): string|bool
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
