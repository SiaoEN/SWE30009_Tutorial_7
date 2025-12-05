<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="description"	content="Project Report"/>
	<meta name="keywords"		  content="Dessert Shop"/>
	<meta name="author"			  content="Siao En YONG"/>
    <link rel="stylesheet" href="dessertmenu.css"/>
	<title>SWE30009 - Dessert Cart Application</title>

</head>

<body>
  <header>
  <div class="header-left">
    <img src="DSlogo.png" alt="Dessert Shop Logo" class="logo">
    <span class="title">Sweet Life: Dessert Shop</span>
  </div>
  </header>

    <h2 class="application">Dessert Cart Application</h2>
    <?php
        $price1 = 3.00;
        $price2 = 4.50;
        $price3 = 12.00;
        $price4 = 14.00;
        $price5 = 11.00;
        $price6 = 16.00;
        $price7 = 6.00;
        $price8 = 10.50;
    ?>
    <form action="dessertcart.php" method="post">
    <table>
      <thead>
        <tr>
          <th>Sample image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Remarks</th>

        </tr>
      <thead>
      <tbody>
        <tr>
          <td><img src="ChocoDonut.jpg" width="100"></td>
          <td>Chocolate Donut</td>
          <td>RM<?php echo number_format($price1, 2); ?></td>
          <td><input type="text" name="qty1"></input></td>
          <td><input type="text" name="remarks1" size="80"></input></td>
        </tr>

        <tr>
          <td><img src="BlueberryMuffin.jpg" width="100"></td>
          <td>Blueberry Muffin</td>
          <td>RM<?php echo number_format($price2, 2); ?></td>
          <td><input type="text" name="qty2"></input></td>
          <td><input type="text" name="remarks2" size="80"></input></td>
        </tr>

        <tr>
          <td><img src="StrawberryMS.jpg" width="100"></td>
          <td>Strawberry Milkshake</td>
          <td>RM<?php echo number_format($price3, 2); ?></td>
          <td><input type="text" name="qty3"></input></td>
          <td><input type="text" name="remarks3"size="80"></input></td>
        </tr>

        <tr>
          <td><img src="CaramelMacchiato.jpg" width="100"></td>
          <td>Caramel Macchiato</td>
          <td>RM<?php echo number_format($price4, 2); ?></td>
          <td><input type="text" name="qty4"></input></td>
          <td><input type="text" name="remarks4" size="80"></input></td>
        </tr>

        <tr>
          <td><img src="PistachioGelato.jpg" width="100"></td>
          <td>Pistachio Gelato</td>
          <td>RM<?php echo number_format($price5, 2); ?></td>
          <td><input type="text" name="qty5"></input></td>
          <td><input type="text" name="remarks5" size="80"></input></td>
        </tr>

        <tr>
          <td><img src="Tiramisu.jpg" width="100"></td>
          <td>Tiramisu</td>
          <td>RM<?php echo number_format($price6, 2); ?></td>
          <td><input type="text" name="qty6"></input></td>
          <td><input type="text" name="remarks6" size="80"></input></td>
        </tr>

        <tr>
          <td><img src="Macarons.jpg" width="100"></td>
          <td>Macarons</td>
          <td>RM<?php echo number_format($price7, 2); ?></td>
          <td><input type="text" name="qty7"></input></td>
          <td><input type="text" name="remarks7" size="80"></input></td>
        </tr>

        <tr>
          <td><img src="CremeBrulee.jpg" width="100"></td>
          <td>Creme Brulee</td>
          <td>RM<?php echo number_format($price8, 2); ?></td>
          <td><input type="text" name="qty8"></input></td>
          <td><input type="text" name="remarks8" size="80"></input></td>
        </tr>
      </tbody>

    </table>

    <div >
     <br>
     <label>
     <input type="checkbox" name="apply_discount" value="1">
     Apply 50% discount for late-evening hours
     </label>
     <button name="submit_button" type="submit" style="float: right; font-size:25px">Calculate Bill</button>
    </div>
    </form>

</body>

</html>