<?php

    require_once '../Transaction.php';

    // Classes & Objects

    //$transaction =new Transaction(100,'Transaction 1');
    //$transaction -> addTax(8);
    //$transaction -> applyDiscount(10);
    //$transaction ->addTax(8)->applyDiscount(10);
    //$transaction->amount=15;
    //var_dump($transaction ->getAmount());

    /*$amount = (new Transaction(100, 'Transaction 1'))
        ->addTax(8)
        ->applyDiscount(10)
        ->getAmount();*/

    /*$class = 'Transaction';

    $amount = (new $class(100, 'Transaction 1'))
        ->addTax(8)
        ->applyDiscount(10)
        ->getAmount();

    var_dump($amount);*/

   /* $transaction1 = (new Transaction(100, 'Transaction 1'))
        ->addTax(8)
        ->applyDiscount(10);
    $transaction2 = (new Transaction(200, 'Transaction 2'))
        ->addTax(8)
        ->applyDiscount(15);

    var_dump($transaction1->getAmount(), $transaction2->getAmount());*/

    /*$amount = (new Transaction(100, 'Transaction 1'))
        ->addTax(8)
        ->applyDiscount(10)
        ->getAmount();
    var_dump($amount);*/

   /* $transaction = (new Transaction(100, 'Transaction 1'))
        ->addTax(8)
        ->applyDiscount(10);*/

    //var_dump($transaction->getAmount());

   // $amount = $transaction->getAmount();
/*var_dump($amount);*/

    /*unset($transaction);
    var_dump($amount);*/

    //$transaction=null;
    //exit;
    //var_dump($amount);

    $str = '{"a":1,"b":2,"c":3}';

    $arr = json_decode($str, true);
    var_dump($arr);

    $arr = json_decode($str);
    var_dump($arr);
    var_dump($arr->a);
    var_dump($arr->b);
    var_dump($arr->c);

    $obj = new \stdClass();
    $obj->a = 1;
    $obj->b = 2;
    $obj->c = 3;

    var_dump($obj);


    $arr=[1,2,3];
    var_dump((object)$arr);

    $obj =(object)$arr;
    var_dump($obj ->{0});
    var_dump($obj ->{1});
    var_dump($obj ->{2});


    var_dump((object)1);

    $obj = (object) 1;
    var_dump($obj -> scalar);

    $obj = (object) true;
    var_dump($obj -> scalar);

    $obj = (object) false;
    var_dump($obj -> scalar);

    $obj = (object) null;
    var_dump($obj);










?>