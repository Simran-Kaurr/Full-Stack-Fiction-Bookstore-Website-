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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>

</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images\book-3387071_1280.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Apni Kitab is more than just an online bookstore.It is a community of book lovers. Our team comprises avid readers and literary enthusiasts who understand the magic of getting lost in a good book. We are committed to providing a diverse selection of titles ensuring there is something for everyone.</p>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images\author-1.jpeg" alt="">
         <p>Appni Kitab has quickly become my favorite online bookstore! Their selection is incredible, and I always find what I'm looking for, whether it's the latest bestseller or a hidden gem. The personalized recommendations are spot on, making my reading journey even more enjoyable. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aaron Warner</h3>
      </div>

      <div class="box">
         <img src="images\f832fcd95c7513fac76db532dc04dad1.jpg" alt="">
         <p>I've been using Appni Kitab for the past six months, and I couldn't be happier. The website is user-friendly, and the checkout process is smooth and secure. I especially love the community features, like the book clubs and reviews. It’s a great way to connect with fellow readers..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Zade Meadows</h3>
      </div>

      <div class="box">
         <img src="images\main-qimg-3b16714716013e03def12401684592b3-lq.jpeg" alt="">
         <p>Appni Kitab offers an impressive variety of books at competitive prices. Their customer service is excellent, always ready to assist with any inquiries. I recently pre-ordered a book, and it arrived right on the release day. Kudos to the team for their efficiency!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kim Teahyung</h3>
      </div>

      <div class="box">
         <img src="images\OIP.jpeg" alt="">
         <p>What sets Appni Kitab apart is their dedication to customer satisfaction. I once received a damaged book, and their support team promptly replaced it without any hassle. Their commitment to quality and service is truly commendable. I’m a loyal customer for life!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jungkook</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I love the ease of shopping at Appni Kitab. The website is well-organized, and the search function is very efficient. I’ve discovered so many amazing books through their recommendation system. Plus, the delivery is always quick and reliable. Highly recommend for all book lovers!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sam</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Appni Kitab has transformed my reading habits! The wide range of genres and the easy navigation make it a joy to browse and buy books. I particularly appreciate the detailed descriptions and reviews that help me choose my next read. Fast delivery and great customer service.. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Moranda</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images\Rolf_Bauerdick.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>John kimsom</h3>
      </div>

      <div class="box">
         <img src="images\Ana-Huang-headshot-2-1351x1536.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ana Huang</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>knox gray</h3>
      </div>

      <div class="box">
         <img src="images\images (1).jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Collen Hover</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Josh</h3>
      </div>

      <div class="box">
         <img src="images\images.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Adaline</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
