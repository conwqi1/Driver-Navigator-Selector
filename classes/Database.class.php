<?php

class Database
{

    private $connection = null;

    public function __construct()
    {
        // does db connection already exist (or is it null) ?
        if (!$this->connection) {
            // create db connection, using the constants from config/db.php
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);                     
            // if no connection errors: return true else false
            return (!$this->connection->connect_errno ? true : false);
        }
    }

    public function getDatabaseConnection()
    {
        return $this->connection;
    }
}