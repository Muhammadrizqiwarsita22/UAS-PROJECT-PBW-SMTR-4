<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery</title>
    <link rel="icon" href="images/oh.png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</div>
<section class="about">
    <div class="flex">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>SWEET CAKE BAKERY ?</h3>
            <p>Kami adalah toko online yang menjual cake. Kami didirikan pada 2024 oleh Trinaqyla dengan visi untuk Sweet Cake Bakery lahir dari kecintaan kami pada kue-kue yang lezat dan dibuat dengan bahan-bahan berkualitas tinggi.  Kami percaya bahwa setiap potong kue harus menjadi pengalaman yang menyenangkan,  menimbulkan senyum dan  menciptakan momen kebersamaan yang indah.</p>
            <p>Terima kasih telah mengunjungi halaman Tentang Kami!, Kami harap Anda dapat berbelanja bersama kami.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>
    </div>
    </section>
    <section class="reviews">
    <h1 class="title">client's reviews</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p>Untuk rasa enak, dijamin percaya. untuk soal webnya bagus uy, mantaap.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Rico Pahlevi Siregar</h3>
        </div>
        <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>Aku mau ngasih tau nih guys, Bakery launching product baru lohh yaitu cromboloni coklat.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Muhammad Rifal Rifdiansyah</h3>
        </div>
        <div class="box">
            <img src="images/pic-3.jpg" alt="">
            <p>Untuk millecrape oreo kok rasa nya sangat bukan oreo sih min.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Radhitya Mugi Pradana</h3>
        </div>
        <div class="box">
            <img src="images/pic-4.jpg" alt="">
            <p>Sudah 2x beli cupcake mesennya sesuai di gambar tapi selalu di kasih yang coklat.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Fauzan Ario Bagaskoro</h3>
        </div>
        <div class="box">
            <img src="images/pic-5.jpg" alt="">
            <p>Enak, tapi tidak sesuai.. saya pesan yang croissant hijau tapi dateng nya keju.. tapi gapapa karena enak jadi tetap saya kasih bintang 4.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Najma Alfisyahrina</h3>
        </div>
        <div class="box">
            <img src="images/pic-6.jpg" alt="">
            <p>Rasanya tetap enak, cuman penampilan ngga sesuai dengan yang di gambar.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mutiara Isya Meliana</h3>
        </div>
    </div>
    </section>
    <section class="authors">
    <h1 class="title">greate authors</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/author-3.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Muhammad Rizqi Warsita</h3>
        </div>
        <div class="box">
            <img src="images/author-1.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Putri Ayu Dina</h3>
        </div>
        <div class="box">
            <img src="images/author-2.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Nadila Hardiyanty</h3>
        </div>
        <div class="box">
            <img src="images/author-6.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Pandapotan Kristian Sitorus</h3>
        </div>
        <div class="box">
            <img src="images/author-5.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Rivan Herdyansyah</h3>
        </div>
        <div class="box">
            <img src="images/author-4.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Pita Hutabalian</h3>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>