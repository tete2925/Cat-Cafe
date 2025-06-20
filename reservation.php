<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reservation</title>
  <link rel="stylesheet" href="./index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>

  <?php require 'navbar.html'; ?>

  
  <div class="container-fluid mt-5" style="position: relative;">
    <h2 class="r text-primary text-center ">Reservation Form</h2>

    <div class="kitten">
      <img src="./imgs/cat-kitten-pixel-art-cat-1aff464dfe4364a01019b92731bf5252.png" alt="">
    </div>

    <div class="cform mb-5">
      <form action="reserve.php" method="POST" class="row g-3">

        <label class="label">Full Name</label>
        <input type="text" name="name" class="form" required>

        <label class="label">NRC / ID</label>
        <input type="text" name="nrc" class="form" required>

        <label class="label">Email</label>
        <input type="email" name="email" class="form" required>

        <label class="label">Visit Date</label>
        <input type="date" name="date" class="form" required>

        <label class="label">Visit Time</label>
        <input type="time" name="time" class="form" required>


        <label class="label">Number of Guests</label>
        <input type="number" name="guests" class="form" min="1" value="1" required oninput="updateCost(document.querySelector('select[name=hours]').value)">

        <label class="label">Special Requests (optional)</label>
        <textarea name="spr" class="form" rows="2"></textarea>

        <strong>Total Cost: <span id="cost">0</span> MMK</strong>

        
        <input type="hidden" id="cart-data" name="cart">
        <input type="hidden" id="total-cost" name="total">

        <button type="submit" class="bn ">Confirm</button>
      </form>
    </div>
  </div>

  


<script>
  
  function calculateTotal() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const guests = Number(document.querySelector('input[name="guests"]').value) || 1;

    let total = cart.reduce((sum, item) => sum + item.price * item.qty, 0);
    total = total * guests;

    document.getElementById('cost').textContent = total;
    document.getElementById('total-cost').value = total;
  }

  calculateTotal();

  document.querySelector('input[name="guests"]').addEventListener('input', calculateTotal);

   document.querySelector('form').addEventListener('submit', function(event) {
    alert('Reservation successfully confirmed! Thank you for booking with Meow Manor.');
    
  });
  
</script>



  <?php require 'footer.html'; ?>
</body>
</html>
