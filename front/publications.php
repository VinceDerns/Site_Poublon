<?php include('../composants/header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mes Publications</title>
   <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../css/livres.css">
   <script src="https://kit.fontawesome.com/ea6733594a.js" crossorigin="anonymous"></script>
   <script src="../JS/script.js"></script>
</head>

<body>


   <header class="book_header">
      <h2 class="book_title">Mes livres</h2>
   </header>

   <main>
      <section class="book">
         <div class="book_container">
            <div class="book_box">
               <a href="../front/hibiscus_bleu.php"><img class="book_cover" src="../assets/img/L'hibiscus bleu.jpg" alt=""></a>
            </div>
            <div class="book_box">
               <a href="../front/les_ailes_du_paradis.php"><img class="book_cover" src="../assets/img/Les ailes du paradis.jpg" alt=""></a>
            </div>
            <div class="book_box">
               <a href="../front/les_oiseaux_de_la_colere.php"><img class="book_cover" src="../assets/img/Les oiseaux de la colère.jpg" alt=""></a>
            </div>
            <div class="book_box">
               <a href="../front/un_tout_petit_peche.php"><img class="book_cover" src="../assets/img/Un tout petit péché.jpg" alt=""></a>
            </div>
            <div class="book_box">
               <a href="../front/Revin_ardennes_France.php"><img class="book_cover" src="../assets/img/Reven_Ardennes_France.webp" alt=""></a>
            </div>
         </div>
      </section>
   </main>

   <?php include('../composants/footer.php') ?>

</body>

</html>