<?php


namespace Rentit\Models;
use Illuminate\Database\Capsule\Manager as Capsule;
class DB{
  //  static $instance;
    function __construct()
    {
        $capsule=new Capsule();
        $capsule->addConnection(
            [
                'driver'=>DBDRIVER,
                'host'=>DBHOST,
                'database'=>DBNAME,
                'username'=>DBUSER,
                'password'=>DBPASS,
                'charset'=>'utf8',
                'collation'=>'utf8_unicode_ci',
                'prefix'=>''
            ]
        );
       $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }


}