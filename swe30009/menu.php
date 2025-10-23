<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="description"	content=""/>
	<meta name="keywords"		  content=""/>
	<meta name="author"			  content=""/>
	<title>SWE30009 - Tutorial 7 Sample Food Cart Application</title>
	<style>
        
        div{
          max-width: 1200px;
          width: 100%;
          margin: 0 auto;
          position: relative;
        }
        
        table {
          border-spacing: 1;
          border: 1px solid;
          // border-collapse: collapse;
          background: white;
          border-radius: 6px;
          // overflow: hidden;
          max-width: 1200px;
          width: 100%;
          margin: 0 auto;
          position: relative;
        }
        table * {
          position: relative;
        }
        table td, table th {
          padding-left: 8px;
        }
        table td{
          height: 80px;
        }
        table thead tr {
          height: 40px;
          background: #FFED86;
          font-size: 20px;
        }
        table tbody tr {
          height: 48px;
          border-bottom: 1px solid #E3F1D5;
        }
        table tbody tr:last-child {
          border: 0;
        }
        table td, table th {
          text-align: left;
        }
        table td.l, table th.l {
          text-align: right;
        }
        table td.c, table th.c {
          text-align: center;
        }
        table td.r, table th.r {
          text-align: center;
        }

        @media screen and (max-width: 35.5em) {
          table {
            display: block;
          }
          table > *, table tr, table td, table th {
            display: block;
          }
          table thead {
            display: none;
          }
          table tbody tr {
            height: auto;
            padding: 8px 0;
          }
          table tbody tr td {
            padding-left: 45%;
            margin-bottom: 12px;
          }
          table tbody tr td:last-child {
            margin-bottom: 0;
          }
          table tbody tr td:before {
            position: absolute;
            font-weight: 700;
            width: 40%;
            left: 10px;
            top: 0;
          }
          // table tbody tr td:nth-child(1):before {
            // content: "Code";
          // }
          // table tbody tr td:nth-child(2):before {
            // content: "Stock";
          // }
          // table tbody tr td:nth-child(3):before {
            // content: "Cap";
          // }
          // table tbody tr td:nth-child(4):before {
            // content: "Inch";
          // }
          // table tbody tr td:nth-child(5):before {
            // content: "Box Type";
          // }
        }
        body {
          background: #FFF;
          font: 400 20px "Calibri", "Arial";
          //padding: 5px;
		  padding-top: 0px;
        }

        blockquote {
          color: white;
          text-align: center;
        }

	</style>

</head>

<body>
    <h2>Sample Food Cart Application</h2>
    <?php
        $price1 = 8.00;
        $price2 = 6.00;
        $price3 = 3.00;
        $price4 = 2.00;
        $price5 = 1.00;
    ?>
    <form action="cart.php" method="post">
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
          <td><img src="Burger.jpg" width="100"></td>
          <td>Burger</td>
          <td>RM<?php echo number_format($price1, 2); ?></td>
          <td><input type="text" name="qty1"></input></td>
          <td><input type="text" name="remarks1" size="80"></input></td>
          
        </tr>
           <tr>
          <td><img src="FriedRice.jpg" width="100"></td>
          <td>Fried Rice</td>
          <td>RM<?php echo number_format($price2, 2); ?></td>
          <td><input type="text" name="qty2"></input></td>
          <td><input type="text" name="remarks2" size="80"></input></td>
          
        </tr>
           <tr>
          <td><img src="RotiCanai.jpg" width="100"></td>
          <td>Roti Canai</td>
          <td>RM<?php echo number_format($price3, 2); ?></td>
          <td><input type="text" name="qty3"></input></td>
          <td><input type="text" name="remarks3"size="80"></input></td>
          
        </tr>
           <tr>
          <td><img src="Coffee.jpg" width="100"></td>
          <td>Coffee</td>
          <td>RM<?php echo number_format($price4, 2); ?></td>
          <td><input type="text" name="qty4"></input></td>
          <td><input type="text" name="remarks4" size="80"></input></td>
          
        </tr>
        <tr>
          <td><img src="Tea.jpg" width="100"></td>
          <td>Tea</td>
          <td>RM<?php echo number_format($price5, 2); ?></td>
          <td><input type="text" name="qty5"></input></td>
          <td><input type="text" name="remarks5" size="80"></input></td>
          
        </tr>
      </tbody>
      
    </table>
    
    <div >
    <br>
    <button name="submit_button" type="submit" style="float: right; font-size:25px">Order</button>
    </div>
    </form>
    
</body>
    
</html>