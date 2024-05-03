<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('web_new/head'); ?>
</head>
<body>
    <div id="wrapper">
        <?php $this->load->view('web_new/menu'); ?>
        <section>
            <h1><?php echo $judul ?></h1>
            <img id=img src="<?php echo base_url() ?>assets/images/faiz.png" alt="Faiz">
            <h4>Nama</h4>
            <ul type="disc">
                <li>Nama Depan : Faiz</li>
                <li>Nama Belakang : Kurniawan</li>
            </ul>
            <br>
            <h4>Alamat</h4>
            <ul type="none">
                <li>Perumahan Amarapura, Kademangan, Setu</li>
            </ul>
            <h4>Tempat Lahir</h4>
            <ul type="none">
                <li>Tangerang</li>
            </ul>
            <h4>Olah Raga Favorit</h4>
            <ul type="square">
                <li>Bulutangkis</li>
                <li>Bola</li>
            </ul>
        </section>
        <?php $this->load->view('web_new/footer'); ?>
    <div>
</body>
</html>
