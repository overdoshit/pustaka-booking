<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('Web_new/head'); ?>
</head>
<body>
    <div id="wrapper">
        <?php $this->load->view('Web_new/menu'); ?>
        <section>
            <h1><?php echo $judul ?></h1>
            <h4>Social Media</h4>
            <ul type="disc">
                <li>Instagram : @RentalBuku</li>
                <li>Facebook : RentalBuku</li>
            </ul>
            <h4>Call Center</h4>
            <ul type="disc">
                <li>Phone : 021-1234567890</li>
                <li>Whatsapp : +62 1234567890</li>
            </ul>
            <h4>Address</h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2724.3334805360164!2d106.6863464664693!3d-6.305095838154523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sJl.%20Letnan%20Sutopo%20BSD%20Serpong%20Kec.%20Serpong%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015311!5e0!3m2!1sid!2sid!4v1693844209254!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <p>Jl. Letnan Sutopo BSD Serpong Kec. Serpong,
                <br>Kota Tangerang Selatan, Banten 15311</p>
        </section>
        <?php $this->load->view('Web_new/footer'); ?>
    <div>
</body>
</html>
