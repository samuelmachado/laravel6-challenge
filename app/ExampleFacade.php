<?php 

namespace App;

use Illuminate\Support\Facades\Facade;

class ExampleFacade extends Facade 
{
    protected $apiKey;

    public function __construct($apiKey)
    {   
        $this->apiKey = $apiKey;
    }
    protected static function getFacadeAccessor()
    {
        return OtherExample::class;
    }
}