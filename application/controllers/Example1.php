<?php
class Example1 extends CI_Controller{

    public function Index(){
        echo "<h1>Hello Folks</h1>";
        echo "My name is Faiz Kurniawan,
        i live in South Tangerang,
        my hobby is playing online <s>horror</s> games";
    }

    public function Intro(){
        echo "<h1>Introduction</h1>";
        echo "
        <ul>
            <li>Nama: Faiz Aditya Kurniawan</li>
            <li>Kelas: 17.6A.27</li>
            <li>Program Studi: Teknologi Informasi</li>
            <li>Semester: 6</li>
            <li>Alamat: Perumahan Amarapura, Kademangan, Setu, Tangerang Selatan, Banten, 15314</li>
	    </ul>";
    }
}
