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

<h2 class="ph text-center "> Meet The Cats</h2>

  
  <div class="top-row">
    <img src="./imgs/woman-enjoying-her-relaxation-ritual.jpg" class="cimg">
    <img src="./imgs/selective-focus-closeup-shot-gray-furry-tabby-cat-sitting-wooden-chair.jpg" class="cimg">
  </div>

  
  <div class="cat-gallery">
    
    <div class="column">
      <img src="./imgs/side-view-japanese-woman-with-cat.jpg" class="cimg">
      <img src="./imgs/yeti1.jpg" class="cimg">
      <img src="./imgs/cat-2151382_1280.jpg" class="cimg">
    </div>

    
    <div class="middle-column">
      <img src="./imgs/cat-932846_1280.jpg" class="center-img">
    </div>

    
    <div class="column">
      <img src="./imgs/cute-cat-spending-time-outdoors.jpg" class="cimg">
      <img src="./imgs/photo_2025-06-02_16-11-57.jpg" class="cimg">
      <img src="./imgs/cat-window.jpg" class="cimg">
    </div>
  </div>

 
  <div class="bottom-row">
    <img src="./imgs/brown-kitten-black-kitten-playing-brown-sofa-near-pillows.jpg" class="cimg">
    <img src="./imgs/cat-7997170_1280.jpg" class="cimg">
    
    
  </div>

  <!-- hour start -->
<div class="container">
 <h2 class="ph text-center "> Hours Of Stay</h2>
 <div class="row8 d-flex mb-5">
<div class="hour d-flex">
  <form>
    <label><input type="radio" name="hours" value="1" checked> 1 hour</label>
    <label><input type="radio" name="hours" value="2"> 2 hours</label>
    <label><input type="radio" name="hours" value="3"> 3 hours</label>
    <label><input type="radio" name="hours" value="4"> 4 hours</label>
    <button type="button" class="add" onclick="addHourToCart()">Add</button>
  </form>

  <ul class="hpp pt-3 " style="list-style: none;">
      <li class="k mb-2">5000MMK</li>
      <li class="k mb-2">10000MMK</li>
      <li class="k mb-2">15000MMK</li>
      <li class="k mb-2">20000MMK</li>
     
    </ul>
</div>


</div>
</div>


<script>
function addHourToCart() {
  const selected = document.querySelector('input[name="hours"]:checked').value;
  const name = `${selected} Hour Visit`;
  const price = selected * 5000;

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




  <!-- hour end -->

<?php require 'footer.html'; ?>

</body>
</html>