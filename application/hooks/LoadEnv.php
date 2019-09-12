<?php

class LoadEnv
{
    public function run()
    {
        $dotenv = new \Dotenv\Dotenv('./');
        $dotenv->overload();
    }
}