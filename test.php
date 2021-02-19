<?php

include "IQuery.php";
include "IDatabaseType.php";
include "PDOConnector.php";
include "SQLQuery.php";
include "SQL.php";
include "SQLCrud.php";
include "MySQL.php";
include "PostgreSQL.php";

$db = new MySQL("localhost", "root", "toor", "database");

$query = (new SQLQuery())->setTable("users")->select()->addWhere("username", "=", ":user")->addBinding("user", "eray");

$eray = $db->first($query);

echo "En büyük Cimbom";
