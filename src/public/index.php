<?php


/*
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\','/',$class) . '.php');
    if (file_exists($path)) {
        require_once $path;
    }

    //var_dump('Autoloader 1');
});*/

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';


$transaction = new Transaction();

//echo Transaction::STATUS_PAID;
//echo $transaction::STATUS_PAID;

//echo $transaction::class;
//echo Transaction::class;

//$transaction->setStatus('paid');
$transaction->setStatus(Status::PAID);

var_dump($transaction);

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