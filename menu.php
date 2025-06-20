<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>
<body>
    <?php require 'navbar.html'; ?>


    
<div class="container">
  <h2 class="s text-center  text-primary">Menu</h2>
  <div class="row3">

<div class="menu">
  <h1 class="mt">Meow Manor<br><span>Coffee</span></h1>
  <div class="mcard d-flex ">
    <ul class="mlist p-3">
      <li>Expresso</li>
      <li>Double Expresso</li>
      <li>Latte</li>
      <li>Americano</li>
      <li>Macchiato</li>
      <li>Flat White</li>
      <li>Cappuccino</li>
    </ul>

    <ul class="mlist p-3">
      <li>10000MMK</li>
      <li>12000MMK</li>
      <li>9000MMK</li>
      <li>59000MMK</li>
      <li>8000MMK</li>
      <li>10000MMK</li>
      <li>15000MMK</li>
    </ul>


    <ul class="mbuy p-3">
      <li><button onclick="addToCart('Expresso',10000 )" class="butbuy">Buy</button></li>
      <li><button onclick="addToCart('Double Expresso',12000 )" class="butbuy">Buy</button></li>
      <li><button onclick="addToCart('Latte',9000 )" class="butbuy">Buy</button></li>
      <li><button onclick="addToCart('Americano',59000 )" class="butbuy">Buy</button></li>
      <li><button onclick="addToCart('Macchiato',8000 )" class="butbuy">Buy</button></li>
      <li><button onclick="addToCart('Flat White',10000 )" class="butbuy">Buy</button></li>
      <li><button onclick="addToCart('Cappuccino',15000 )" class="butbuy">Buy</button></li>
      
    </ul>



  </div>

  <div class="menu">
  <h1 class="mc">Cakes</h1>
  <div class="mcardd d-flex mt-5">
    <ul class="mlist p-3">
      <li>Chocolate Cake</li>
      <li>Vanilla Sponge Cake</li>
      <li> Red Velvet Cake</li>
      <li> Strawberry Shortcake</li>
    </ul>

    <ul class="mlist p-3">
      <li>20000MMK</li>
      <li>21000MMK</li>
      <li>22000MMK</li>
      <li>21000MMK</li>
     
    </ul>


    <ul class="mbuyy p-3">
       <li><button onclick="addToCart('Chocolate Cake',20000 )" class="butbuyy">Buy</button></li>
       <li><button onclick="addToCart('Vanilla Sponge Cake',21000 )" class="butbuyy">Buy</button></li>
       <li><button onclick="addToCart('Red Velvet Cake',22000 )" class="butbuyy">Buy</button></li>
       <li><button onclick="addToCart('Strawberry Shortcake',21000 )" class="butbuyy">Buy</button></li>
      
      
    </ul>



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