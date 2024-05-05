<?php

namespace app\Models;
require_once "BaseModel.php";

class User extends BaseModel
{
    public function test(): void
    {
        echo "hello world";
    }
}