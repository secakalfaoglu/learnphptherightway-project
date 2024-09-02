<?php

namespace app;

//Singleton Pattern
class DB
{
    public static ?DB $instance = null;
    private function __construct(public array $config)
    {
        echo 'Instance Created <br />';

    } //bu şekilde, $db = DB::getInstance([]); ile sadece bir kez gelir

//    public function __construct(public array $config)
//    {
//        echo 'Instance Created <br />';
//    }   // bu şekilde $db = new DB([]); ile kaç defa çağırırsam o kadar gelir

    public static function getInstance(array $config): DB
    {
        if (self::$instance === null)
        {
            self::$instance = new DB($config);
        }
        return self::$instance;
    }

}

?>