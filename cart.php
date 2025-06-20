<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Cart</title>
  <link rel="stylesheet" href="./index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  
  <style>

    
    .yc{
      margin: 30px 30px 30px 0px;
      color: #ef0d7e;
    }

    .res{
      background-color:rgb(255, 65, 160);
      color: white;
      padding: 7px;
      border:none;
      border-radius: 10px;
      margin-bottom: 50px;
      
    }

    .tt{
      color:rgb(222, 13, 117);
    }
    .col{
      width: 90px;
    }

     .co2{
      width: 60px;
    }


  </style>
  
</head>
<body >
  

<?php require 'navbar.html'; ?>

  <h2 class="yc ms-3">Your Cart</h2>

  <table class="table ms-3" style="width:1000px; border: 2px solid #ef0d7e; background-color:rgb(255, 255, 152);">
    <thead>
      <tr>
        <th class="col">Item</th>
        <th class="co2">Qty</th>
        <th class="co2">Price</th>
        <th class="co2">Subtotal</th>
        <th class="co2">Action</th>
      </tr>
    </thead>
    <tbody id="cart-body"></tbody>
  </table>

  <button class="btn btn-danger mb-3 ms-3" onclick="clearCart()">Clear All</button>

  <h4 class="tt ms-3">Total: <span id="total">0</span> MMK</h4>

  <button class="res ms-3" onclick="location.href='./reservation.php'">Proceed to Reservation</button>

  

  <script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const tbody = document.getElementById('cart-body');
    const totalDisplay = document.getElementById('total');

    function renderCart() {
      tbody.innerHTML = '';
      let total = 0;

      cart.forEach((item, index) => {
        const subtotal = item.qty * item.price;
        total += subtotal;

        tbody.innerHTML += `
          <tr>
            <td>${item.name}</td>
            <td>${item.qty}</td>
            <td>${item.price} MMK</td>
            <td>${subtotal} MMK</td>
            <td><button class="btn btn-sm btn-danger" onclick="deleteItem(${index})">Delete</button></td>
          </tr>`;
      });

      totalDisplay.textContent = total;
    }

    function deleteItem(index) {
      cart.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    }

    function clearCart() {
      if (confirm("Clear all items from the cart?")) {
        cart = [];
        localStorage.removeItem('cart');
        renderCart();
      }
    }

    renderCart();
  </script>

<?php require 'footer.html'; ?>

</body>
</html>
