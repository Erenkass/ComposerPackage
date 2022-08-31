<?php

namespace Tekrom\Ecommerce\Factory;

use Tekrom\Ecommerce\Platform\Trendyol;
use Tekrom\Ecommerce\Platform\Modanisa;

class PlatformFactory
{

static function create($name,$config){
    static $object;

   if($name == "trendyol"){
       $object = new Trendyol($config);

    }

    if($name == "modanisa"){
        $object = new Modanisa($config);


    }

    return $object;
}

}