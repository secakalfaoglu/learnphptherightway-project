<?php

namespace app;

class ToasterPro extends Toaster //Toaster'dan kalıtım alıyor
{

    //public int $size = 4;
   // protected int $size = 4;

    public function __construct()
    {
        parent::__construct(); //Toaster'dakine erişebilmek için. Öncesinde olmalı
        $this->size = 4;
    }

    public function addSlice(string $slice):void
    {
        //parent::addSlice($slice); //methodda bunu yapmadan override yapabilirsin
        if (count($this->slice) < $this->size)
        {
            $this->slice[] = $slice;
        }
    }
    public function toastBagel()
    {
        foreach ($this->slice as $i => $slice)
        {
            echo ($i+1) . ': Toasting ' . $slice . ' with bagels option'. PHP_EOL;
        }
    }

    public function foo()
    {
        throw new \Exception('Not Supported');
    }


}

?>