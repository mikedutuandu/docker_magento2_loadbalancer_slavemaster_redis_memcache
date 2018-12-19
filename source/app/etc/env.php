<?php
return array(
    'backend' =>
        array(
            'frontName' => 'admin',
        ),
    'crypt' =>
        array(
            'key' => '04c4d0e09240ecba61c0ee90f6865d03',
        ),
    'db' =>
        array(
            'table_prefix' => '',
            'connection' =>
                array(
                    'default' =>
                        array(
                            'host' => '10.254.254.254:802',
                            'dbname' => 'mage2',
                            'username' => 'root',
                            'password' => 'root',
                            'active' => '1',
                        ),
                ),
        ),
    'resource' =>
        array(
            'default_setup' =>
                array(
                    'connection' => 'default',
                ),
        ),
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' =>
        array(
            'save' => 'memcached',
            'save_path' => '10.254.254.254:1102'
        ),

    'cache_types' =>
        array(
            'config' => 1,
            'layout' => 1,
            'block_html' => 1,
            'collections' => 1,
            'reflection' => 1,
            'db_ddl' => 1,
            'eav' => 1,
            'customer_notification' => 1,
            'full_page' => 1,
            'config_integration' => 1,
            'config_integration_api' => 1,
            'translate' => 1,
            'config_webservice' => 1,
        ),
    'cache' =>
        array(
            'frontend' =>
                array(
                    'default' =>
                        array(
                            'backend' => 'Cm_Cache_Backend_Redis',
                            'backend_options' =>
                                array(
                                    'server' => '10.254.254.254',
                                    'database' => '0',
                                    'port' => '1002'
                                ),
                        ),
                    'page_cache' =>
                        array(
                            'backend' => 'Cm_Cache_Backend_Redis',
                            'backend_options' =>
                                array(
                                    'server' => '10.254.254.254',
                                    'port' => '1002',
                                    'database' => '1',
                                    'compress_data' => '0'
                                )
                        )
                )
        ),
    'install' =>
        array(
            'date' => 'Tue, 07 Nov 2017 02:53:45 +0000',
        ),
);
