   <?php include("../composants/header.php")  ?>

   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="../assets/css/style.css">
   </head>

   <body>
       <section class="container-form">

           <h2>Contact</h2>
           <form action="" method="post">

               <div>
                   <label class="label" for="inputPassword">Nom :</label>

                   <div>
                       <input class="fields" type="text" name="name" id="name">
                   </div>
               </div>

               <div>
                   <label class="label" for="Email">Email :</label>
                   <div>
                       <input class="fields" type="email" id="inputPassword">
                   </div>
               </div>

               <div>
                   <label class="label" for="inputPassword">Votre message :</label>
                   <div>
                       <textarea class="fields" name="" id="" cols="30" rows="10"></textarea>
                   </div>
               </div>




               <button class="btn" type="submit">Envoyer</button>


           </form>
       </section>
   </body>

   </html>







   <?php include_once("../composants/footer.php");
