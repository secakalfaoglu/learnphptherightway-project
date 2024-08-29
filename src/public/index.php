<?php


/*
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\','/',$class) . '.php');
    if (file_exists($path)) {
        require_once $path;
    }

    //var_dump('Autoloader 1');
});*/

/*spl_autoload_register(function ($class) {
    var_dump('Autoloader 2');
},prepend:true);*/
//prepend kullanılmadığında autolod'ı sırayla görür

require __DIR__ . '/../vendor/autoload.php';
use App\PaymentGateway\Paddle\Transaction;


$paddleTransaction = new Transaction();



$id =new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();

var_dump($paddleTransaction);
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