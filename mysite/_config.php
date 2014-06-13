<?php

global $project;
$project = 'MGM_Project';

global $database;
$database = 'mgm';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');

//tiny change