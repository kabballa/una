<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 */

$aConfig = array(
    /**
     * Main Section.
     */
    'title' => 'Credits',
    'version_from' => '14.0.4',
    'version_to' => '14.0.5',
    'vendor' => 'BoonEx',

    'compatible_with' => array(
        '14.0.0-RC4'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/credits/updates/update_14.0.4_14.0.5/',
    'home_uri' => 'credits_update_1404_1405',

    'module_dir' => 'boonex/credits/',
    'module_uri' => 'credits',

    'db_prefix' => 'bx_credits_',
    'class_prefix' => 'BxCredits',

    /**
     * Installation/Uninstallation Section.
     */
    'install' => array(
        'execute_sql' => 1,
        'update_files' => 1,
        'update_languages' => 0,
        'clear_db_cache' => 1,
    ),

    /**
     * Category for language keys.
     */
    'language_category' => 'Credits',

    /**
     * Files Section
     */
    'delete_files' => array(),
);
