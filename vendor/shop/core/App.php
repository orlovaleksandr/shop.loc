<?php

namespace shop;


class App
{

    public function __construct()
    {
        echo $query = trim($_SERVER['QUERY_STRING'], '/');
    }

}