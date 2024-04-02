<?php
class Model_latihan1 extends CI_Model {
    public $nilai1, $nilai2, $hasil;

    public function jumlah($number1 = null, $number2 = null) {
        $this->nilai1 = $number1;
        $this->nilai2 = $number2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
