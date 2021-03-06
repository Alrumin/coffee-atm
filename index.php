<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Coffee-atm</title>
  </head>
  <body>
   <div class="container">
     <div class="row coffee-machine" id="coffee">
       <div class="col-6 coffee-kind d-flex flex-column justify-content">
         <div class="coffee-item" onclick="buyCoffee('Американо',56, this)">
           <img src="img/americano.png" alt="americano">
           <span>Американо - 56 руб.</span>
           </div>
         <div class="coffee-item" onclick="buyCoffee('Эспрессо', 88, this)">
           <img src="img/espresso.png" alt="espresso">
           <span>Эспрессо - 88 руб.</span>
           </div>
         <div class="coffee-item" onclick="buyCoffee('Латте', 70, this)">
           <img src="img/latte.png" alt="latte">
           <span>Латте - 70 руб.</span>
           </div>
         <div class="coffee-item" onclick="buyCoffee('Капучино', 92, this)">
           <img src="img/cappuccino.png" alt="cappuccino">
           <span>Капучино - 92 руб.</span>
           </div>
       </div>
       <div class="col-6 coffee-maker">
         <div class="row">
           <div class="col-6 cook p-3">
             <div class="display">
               <p class="display-text">Выбирете кофе</p>
               <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                </div>
               </div>
             </div>
             <div class = "drop-off-win">
               <div class="coffee-cup d-none">
                 <div class="water">
                   <div class="mh-100"></div>
                 </div>
               </div>
             </div>   
           </div>
           <div class="col-6 balance">
             <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Баланс" aria-label="Имя получателя" aria-describedby="basic-addon2" readonly>
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">	&#8381;</span>
              </div>
             </div>
             <div class="atm">
               <img src="img/atm.svg" alt="atm">
             </div>
             <button class="btn btn-dark  btn-now btn-block mt-3 change-btn">Сдача</button>
             <div class="change-box mt-3"></div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="bills">
        <img src="img/50rub.jpg" alt="50" cost="50">
        <img src="img/100rub.jpg" alt="100" cost="100">
        <img src="img/500rub.jpg" alt="500" cost="500">
   </div>  
    <!-- Optional JavaScript -->
    <script src="js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>