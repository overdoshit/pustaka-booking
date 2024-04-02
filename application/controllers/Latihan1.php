<?php
class Latihan1 extends CI_Controller {

    public function index() {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan($number1, $number2) {
        $this->load->model('Model_latihan1');
        
        $hasil = $this->Model_latihan1->jumlah($number1, $number2);
        echo "Hasil Penjumlahan dari ". $number1 ." + ". $number2 ." = ".$hasil;
    }

    public function penjumlahan_2($number1, $number2) {
        $this->load->model('Model_latihan1');

        $data['nilai1'] = $number1;
        $data['nilai2'] = $number2;
        $data['hasil'] = $this->Model_latihan1->jumlah($number1, $number2);

        $this->load->view('view-latihan', $data);
    }
}
