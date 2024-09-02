<?php



use App\Toaster;
use App\ToasterPro;

require __DIR__ . '/../vendor/autoload.php';

$toaster = new Toaster();
//$toaster-> size=10;

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toast();

$toaster = new ToasterPro();
//$toaster = new Toaster();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
//$toaster->toastBagel();

foo($toaster);
/*function foo(ToasterPro $toaster)
{
    $toaster->toast();
}*/
function foo(Toaster $toaster)
{
    $toaster->toast();
}


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