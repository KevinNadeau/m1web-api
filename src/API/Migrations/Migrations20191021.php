<?php

namespace App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191019 extends AbstractMigrations {
    protected $sql = 'create table if not exists country(
	id int not null
		primary key,
	nom text null,
	city_id int null
);
';
}