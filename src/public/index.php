<?php



use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';


$transaction = new Transaction(25);

//$transaction->amount=125;
//$transaction->setAmount(125);

/*$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');

$reflectionProperty->setAccessible(true);

$reflectionProperty->setValue($transaction, 125);

var_dump($reflectionProperty->getValue($transaction));*/

//Abstraction

$transaction->copyFrom(new Transaction(100));
//$transaction->process();
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