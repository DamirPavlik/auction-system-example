<?php

namespace app\Models;

class BaseModel
{
    private readonly \mysqli $sql;
    public function __construct()
    {
        $this->sql = mysqli_connect(
            hostname: $_ENV["DB_HOSTNAME"],
            username: $_ENV["DB_USERNAME"],
            password: $_ENV["DB_PASSWORD"],
            database: $_ENV["DB_DATABASE"],
        );
    }

    public function getConnection()
    {
        return $this->sql;
    }
}