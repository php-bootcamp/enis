<?php
 abstract class SQL {

    use PDOConnector;

    public  $connectionStatus =false;
     
    public abstract function create(SQLQuery $query);

    public abstract function update(SQLQuery $query);

    public abstract function delete(SQLQuery $query);

    protected  function setParams(array $params){}

    public  function isConnected(){}
 }


