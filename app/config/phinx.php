<?php

// Loads the environment variables from an .env file.
(new Dotenv\Dotenv(path()))->load();

/**
 * Phinx configurations.
 *
 * @link https://phinx.org
 *
 * @var array
 */
return [
    /**
     * List of paths.
     *
     * @var array
     */
    'paths' => [
        /**
         * List of migration paths.
         *
         * @var array
         */
        'migrations' => [ path('app/database/migrations') ],

        /**
         * List of seed paths.
         *
         * @var array
         */
        'seeds' => [ path('app/database/seeds') ],
    ],

    /**
     * Configurations for specific environments.
     *
     * @var array
     */
    'environments' => [
        /**
         * Name of the default migration table.
         *
         * @var string
         */
        'default_migration_table' => 'phinxlog',

        /**
         * Name of the default database.
         *
         * @var string
         */
        'default_database' => 'mysql_' . getenv('APP_ENVIRONMENT'),

        /**
         * MySQL connection for a specified environment.
         *
         * @var array
         */
        'mysql_' . getenv('APP_ENVIRONMENT') => [
            /**
             * Name of the database adapter.
             *
             * @var string
             */
            'adapter' => getenv('MYSQL_DRIVER'),

            /**
             * Name of the database hostname.
             *
             * @var string
             */
            'host' => getenv('MYSQL_HOSTNAME'),

            /**
             * Name of the database.
             *
             * @var string
             */
            'name' => getenv('MYSQL_DATABASE'),

            /**
             * Name of the database username.
             *
             * @var string
             */
            'user' => getenv('MYSQL_USERNAME'),

            /**
             * Name of the database password.
             *
             * @var string
             */
            'pass' => getenv('MYSQL_PASSWORD'),

            /**
             * Name of the database port number.
             *
             * @var integer
             */
            'port' => getenv('MYSQL_PORT'),

            /**
             * Name of the database character set.
             *
             * @var string
             */
            'charset' => getenv('MYSQL_CHARSET'),
        ],

        /**
         * SQLite connection for a specified environment.
         *
         * @var array
         */
        'sqlite_' . getenv('APP_ENVIRONMENT') => [
            /**
             * Name of the database adapter.
             *
             * @var string
             */
            'adapter' => getenv('SQLITE_DRIVER'),

            /**
             * Path of the database file.
             *
             * @var string
             */
            'name' => getenv('SQLITE_DATABASE'),
        ],
    ],
];
