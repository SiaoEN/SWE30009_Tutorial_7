<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="description"	content="Project Report"/>
	<meta name="keywords"		  content="Dessert Shop"/>
	<meta name="author"			  content="Siao En YONG"/>
    <link rel="stylesheet" href="dessertcart.css"/>
	<title>SWE30009 - Dessert Cart Application</title>

</head>

<body>
  <header>
  <div class="header-left">
    <img src="DSlogo.png" alt="Dessert Shop Logo" class="logo">
    <span class="title">Sweet Life: Dessert Shop</span>
  </div>
  <nav class="header-right">
    <a href="dessertmenu.php" class="nav-link">Menu</a>
  </nav>
</header>


    <h2 class="confirm">Confirm Your Order</h2>
     <?php
        $price1 = 3.00;
        $price2 = 4.50;
        $price3 = 12.00;
        $price4 = 14.00;
        $price5 = 11.00;
        $price6 = 16.00;
        $price7 = 6.00;
        $price8 = 10.50;

      // Check if discount checkbox was ticked
      $discount = isset($_POST['apply_discount']) ? 0.5 : 1.0;

      // Apply discount to prices
      $price1 *= $discount; $price2 *= $discount; $price3 *= $discount; $price4 *= $discount;
      $price5 *= $discount; $price6 *= $discount; $price7 *= $discount; $price8 *= $discount;

      // Sanitize and validate quantities
      function safeQty($value, $itemName) {
          if (!is_numeric($value) || $value < 0) {
              echo "<p style='color:red'>Invalid input for {$itemName}. Replaced with 0.</p>";
              return 0; // invalid or negative will be replace to 0
          }
          if ($value > 100) {
              echo "<p style='color:red'>Quantity for {$itemName} capped at 100.</p>";
              return 100; // clamp to maximum allowed
          }

          return (int)$value; // valid number within range
        }

      $qty1 = safeQty($_POST['qty1'], "Chocolate Donut");
      $qty2 = safeQty($_POST['qty2'], "Blueberry Muffin");
      $qty3 = safeQty($_POST['qty3'], "Strawberry Milkshake");
      $qty4 = safeQty($_POST['qty4'], "Caramel Macchiato");
      $qty5 = safeQty($_POST['qty5'], "Pistachio Gelato");
      $qty6 = safeQty($_POST['qty6'], "Tiramisu");
      $qty7 = safeQty($_POST['qty7'], "Macarons");
      $qty8 = safeQty($_POST['qty8'], "Creme Brulee");

      // Subtotals
      $subtotal1 = $price1 * $qty1;
      $subtotal2 = $price2 * $qty2;
      $subtotal3 = $price3 * $qty3;
      $subtotal4 = $price4 * $qty4;
      $subtotal5 = $price5 * $qty5;
      $subtotal6 = $price6 * $qty6;
      $subtotal7 = $price7 * $qty7;
      $subtotal8 = $price8 * $qty8;

       // Grand total before tax
      $grand_total = $subtotal1 + $subtotal2 + $subtotal3 + $subtotal4 + $subtotal5 + $subtotal6 + $subtotal7 + $subtotal8;

      // Apply 6% SST
      $sst = $grand_total * 0.06;
      $final_total = $grand_total + $sst;
    ?>

    <table>
      <thead>
        <tr>
          <th>Sample image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>

        </tr>
      <thead>
       <tbody>
        <?php if ($qty1 > 0): ?>
        <tr>
          <td><img src="ChocoDonut.jpg" width="100"></td>
          <td>Chocolate Donut</td>
          <td>RM<?php echo number_format($price1, 2); ?></td>
          <td><?php echo $qty1; ?></td>
          <td>RM<?php echo number_format($subtotal1, 2); ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($qty2 > 0): ?>
        <tr>
          <td><img src="BlueberryMuffin.jpg" width="100"></td>
          <td>Blueberry Muffin</td>
          <td>RM<?php echo number_format($price2, 2); ?></td>
          <td><?php echo $qty2; ?></td>
          <td>RM<?php echo number_format($subtotal2, 2); ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($qty3 > 0): ?>
        <tr>
          <td><img src="StrawberryMS.jpg" width="100"></td>
          <td>Strawberry Milkshake</td>
          <td>RM<?php echo number_format($price3, 2); ?></td>
          <td><?php echo $qty3; ?></td>
          <td>RM<?php echo number_format($subtotal3, 2); ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($qty4 > 0): ?>
        <tr>
          <td><img src="CaramelMacchiato.jpg" width="100"></td>
          <td>Caramel Macchiato</td>
          <td>RM<?php echo number_format($price4, 2); ?></td>
          <td><?php echo $qty4; ?></td>
          <td>RM<?php echo number_format($subtotal4, 2); ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($qty5 > 0): ?>
        <tr>
          <td><img src="PistachioGelato.jpg" width="100"></td>
          <td>Pistachio Gelato</td>
          <td>RM<?php echo number_format($price5, 2); ?></td>
          <td><?php echo $qty5; ?></td>
          <td>RM<?php echo number_format($subtotal5, 2); ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($qty6 > 0): ?>
        <tr>
          <td><img src="Tiramisu.jpg" width="100"></td>
          <td>Tiramisu</td>
          <td>RM<?php echo number_format($price6, 2); ?></td>
          <td><?php echo $qty6; ?></td>
          <td>RM<?php echo number_format($subtotal6, 2); ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($qty7 > 0): ?>
        <tr>
          <td><img src="Macarons.jpg" width="100"></td>
          <td>Macarons</td>
          <td>RM<?php echo number_format($price7, 2); ?></td>
          <td><?php echo $qty7; ?></td>
          <td>RM<?php echo number_format($subtotal7, 2); ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($qty8 > 0): ?>
        <tr>
          <td><img src="CremeBrulee.jpg" width="100"></td>
          <td>Creme Brulee</td>
          <td>RM<?php echo number_format($price8, 2); ?></td>
          <td><?php echo $qty8; ?></td>
          <td>RM<?php echo number_format($subtotal8, 2); ?></td>
        </tr>
        <?php endif; ?>

      </tbody>

    </table>
    <br>
      <?php
      if (isset($_POST['apply_discount'])) {
          echo "<p style='color:green;'>50% Discount Applied</p>";
      } else {
          echo "<p style='color:gray;'>No Discount Applied</p>";
      }
      ?>
      <div class="totals">
      <h2>Subtotal: RM<?php echo number_format($grand_total, 2); ?></h2>
      <h2>+ SST (6%): RM<?php echo number_format($sst, 2); ?></h2>
      <h2 id="total_amount" style="color:red;">Total Amount To Pay: RM<?php echo number_format($final_total, 2); ?></h2>
      </div>

      <a href="dessertmenu.php" class="btn-back">← Back to Menu</a>

</body>

</html>