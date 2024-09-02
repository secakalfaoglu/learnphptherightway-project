<?php


use App\DB;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';


//$transaction = new Transaction(25,'Transaction 1');
//var_dump($transaction::$count); //static olana erişim sağlanabilir böyle
//var_dump(Transaction::getCount());

$transaction = new Transaction(25,'Transaction 1');
/*$db = new DB([]);
$db = new DB([]);
$db = new DB([]);
$db = new DB([]);*/
//$db = DB::getInstance([]);

$transaction->process();
//var_dump($transaction::getCount());
var_dump($transaction->amount);
?>




<?php
/*class Car {
public string $marka;
public string $model;
public string $yil;

public function __construct(string $marka, string $model, int $yil) {
$this->marka = $marka;
$this->model = $model;
$this->yil = $yil;
}

    public function getCarDetails(): string {
        return $this->yil . ' ' . $this->marka . ' ' . $this->model;
    }
}



$myCar = new Car('Toyota', 'Corolla', 2020);
echo $myCar->getCarDetails(); // Çıktı: 2020 Toyota Corolla

*/?>