<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Meow Manor</title>
  <link rel="stylesheet" href="./index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>
<body>

<?php require 'navbar.html'; ?>


<div class="container-fluid">
  <h2 class="ph text-center "> Treats For Cats</h2>
  <div class="row4">
    <div class="treats d-flex">

      <div class="card me-5 text-center" style="width: 18rem; background-color: rgb(124, 189, 250); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
">
  <img src="./imgs/download.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Whiskas Tuna</h5>
    <p class="card-text">8000MMK</p>
    <button onclick="addToCart('Whiskas Tuna',8000 )" class="buybtn">Buy</button>
  </div>
</div>

<div class="card me-5 text-center" style="width: 18rem; background-color: rgb(124, 189, 250); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
">
  <img src="./imgs/downloadd.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Ciao Churu Tuna</h5>
    <p class="card-text">8000MMK</p>
    <button onclick="addToCart('Ciao Churu Tuna',8000 )" class="buybtn">Buy</button>
  </div>
</div>

<div class="card me-5 text-center" style="width: 18rem; background-color: rgb(124, 189, 250); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
">
  <img src="./imgs/Birdie-And-Louie-Wet-Cat-Food-Tuna-And-Olives-849547022133.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Birdie & Louie</h5>
    <p class="card-text">8000MMK</p>
  <button onclick="addToCart('Birdie & Louie',8000 )" class="buybtn">Buy</button>
  </div>
</div>

    </div>
  </div>

   <div class="row5 mb-5">
    <div class="treats d-flex">

      <div class="card me-5 text-center" style="width: 18rem; background-color: rgb(124, 189, 250); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
">
  <img src="./imgs/pink-salmon-smoked-salmon-fish-steak-others-bb96bc3b6b0467a0535bcf1b2d6e3a24.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Raw Tuna</h5>
    <p class="card-text">8000MMK</p>
     <button onclick="addToCart('Raw Tuna',8000 )" class="buybtn">Buy</button>
  </div>
</div>

<div class="card me-5 text-center" style="width: 18rem; background-color: rgb(124, 189, 250); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
">
  <img src="./imgs/fish-clip-art-fish-png-fd8540791e634779ab5619cad0c4eaf9.png" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">Fried Fish</h5>
    <p class="card-text">8000MMK</p>
     <button onclick="addToCart('Fried Fish',8000 )" class="buybtn">Buy</button>
  </div>
</div>

<div class="catfood card me-5 text-center" style="width: 18rem; background-color: rgb(124, 189, 250); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);">
  <img src="./imgs/chicken-egg-boiled-egg-ramen-boiled-egg-83d3c4694ca2d64bb41225b0db5ecc7d.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Egg</h5>
    <p class="card-text">8000MMK</p>
     <button onclick="addToCart('Egg',8000 )" class="buybtn">Buy</button>
  </div>
</div>

    </div>
  </div>

</div>




<script>
    function addToCart(name, price) {
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      let existing = cart.find(item => item.name === name);
      if (existing) {
        existing.qty += 1;
      } else {
        cart.push({ name, price, qty: 1 });
      }
      localStorage.setItem('cart', JSON.stringify(cart));
      alert(name + ' added to cart!');
    }
  </script>




<?php require 'footer.html'; ?>

</body>
</html>