<?php

namespace App\Config;

use Exception;

class AppConfig
{
    private array $options = [];
    private array $config = [];

    public function load(array $options = [
        'config_path' => __DIR__ . '/configs.json',
    ])
    {
        $this->options = $options;
        $this->loadJsonConfig();
        $this->loadEnvConfig();

        return $this->config;
    }

    // load json
    public function loadJsonConfig(): void
    {
        try {
            $externalJSONPath = $this->options['config_path'];
            if (is_file($externalJSONPath)) {
                $externalJSONContent = file_get_contents($externalJSONPath);
                $parsedContent = json_decode($externalJSONContent);
                $this->config = array_merge($this->config, $parsedContent);
            }
        } catch (Exception $exception) {
        }
    }

    // load env
    public function loadEnvConfig(): void
    {
        try {
            $configs[] = getenv('MINICLI_ENV') ?: 'production';
            $this->config = array_merge($this->config, $configs);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
