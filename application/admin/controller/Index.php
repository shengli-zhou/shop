<?php
namespace app\admin\controller;

use Db;

class Index extends Common
{
    public function index()
    {
    	
        return $this->fetch();
    }
    
 
}

