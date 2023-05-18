<?php

/**
 * This file contains all the configuration values for the application.
 * You can override these values by creating a config.local.php file and
 * setting the values there.
 *
 * @see
 */

return [
    /**
     * Twitter API Keys
     */
    'twitter_consumer_key' => getenv('MINICLI_TWITTER_KEY') ?: 'APP_CONSUMER_KEY',
    'twitter_consumer_secret' => getenv('MINICLI_TWITTER_SECRET') ?: 'APP_CONSUMER_SECRET',
    'twitter_user_token' => getenv('MINICLI_TWITTER_TOKEN') ?: 'USER_ACCESS_TOKEN',
    'twitter_token_secret' => getenv('MINICLI_TWITTER_TOKEN_SECRET') ?: 'USER_ACCESS_TOKEN_SECRET',

    /**
     * Github API Keys
     */
    'github_api_bearer' => getenv('MINICLI_GITHUB_TOKEN') ?: 'GITHUB_API_BEARER_TOKEN',

    /**
     * Paths
     */
    'logs_dir' => getenv('DYNA_IMAGES_DIR') ?: __DIR__ . '/logs',
];
