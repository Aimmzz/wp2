<?php

class Model_websepatu extends CI_Model
{
    public $merksepatu, $harga;
    public function getmerk($merksepatu = null){
        $this->merksepatu = $merksepatu;
        if ($this->merksepatu == "Nike") {
            $this->harga = 375000;
        } elseif ($this->merksepatu == "Adiddas") {
            $this->harga = 300000;
        } elseif ($this->merksepatu == "Kickers") {
            $this->harga = 250000;
        } elseif ($this->merksepatu == "Eiger") {
            $this->harga = 275000;
        } elseif ($this->merksepatu == "Bucheri") {
            $this->harga = 400000;
        }
        return $this->harga;
    }
}
