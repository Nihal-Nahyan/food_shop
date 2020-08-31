


<?php

require "db_connect.inc.php";

$gerseyprice = 0;
$quantity = 0;
$regSuccessful = "";
$price=null ;

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST['calculate'])){

        $Item = $_POST['Item'];
        $quantity = $_POST['quantity'];

        if ($Item == "French fries Pack [BDT 150]" and $quantity == "1"  ){

            $price=150;
        }

        if ($Item == "French fries Pack [BDT 150]" and $quantity == "2"  ){

            $price=300;
        }

        if ($Item == "French fries Pack [BDT 150]" and $quantity == "3"  ){

            $price=450;
        }


        if ($Item == "Cheese Burger [BDT 410]" and $quantity == "1"  ){

            $price=410;
        }

        if ($Item == "Cheese Burger [BDT 410]" and $quantity == "2"  ){

            $price=820;
        }

        if ($Item == "Cheese Burger [BDT 410]" and $quantity == "3"  ){

            $price=1230;
        }

}


        if ($Item == "Pizza 12 inch [BDT 800]" and $quantity == "1"  ){

            $price=800;
        }

        if ($Item == "Pizza 12 inch [BDT 800]" and $quantity == "2"  ){

            $price=1600;
        }

        if ($Item == "Pizza 12 inch [BDT 800]" and $quantity == "3"  ){

            $price=2400;
        }

        if ($Item == "Fizzy Drink [BDT 30]" and $quantity == "1"  ){

            $price=30;
        }

        if ($Item == "Fizzy Drink [BDT 30]" and $quantity == "2"  ){

            $price=60;
        }

        if ($Item == "Fizzy Drink [BDT 30]" and $quantity == "3"  ){

            $price=90;
        }

    }


    if(isset($_POST['order'])){



    $Item = $_POST['Item'];
        $quantity = $_POST['quantity'];

        if ($Item == "French fries Pack [BDT 150]" and $quantity == "1"  ){

            $price=150;
        }

        if ($Item == "French fries Pack [BDT 150]" and $quantity == "2"  ){

            $price=300;
        }

        if ($Item == "French fries Pack [BDT 150]" and $quantity == "3"  ){

            $price=450;
        }


        if ($Item == "Cheese Burger [BDT 410]" and $quantity == "1"  ){

            $price=410;
        }

        if ($Item == "Cheese Burger [BDT 410]" and $quantity == "2"  ){

            $price=820;
        }

        if ($Item == "Cheese Burger [BDT 410]" and $quantity == "3"  ){

            $price=1230;
        }

}


        if ($Item == "Pizza 12 inch [BDT 800]" and $quantity == "1"  ){

            $price=800;
        }

        if ($Item == "Pizza 12 inch [BDT 800]" and $quantity == "2"  ){

            $price=1600;
        }

        if ($Item == "Pizza 12 inch [BDT 800]" and $quantity == "3"  ){

            $price=2400;
        }

        if ($Item == "Fizzy Drink [BDT 30]" and $quantity == "1"  ){

            $price=30;
        }

        if ($Item == "Fizzy Drink [BDT 30]" and $quantity == "2"  ){

            $price=60;
        }

        if ($Item == "Fizzy Drink [BDT 30]" and $quantity == "3"  ){

            $price=90;
        }


    $Item = mysqli_real_escape_string($conn, $_POST['Item']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);

    $sqlUserInsert = "insert into order2 (Item, quantity, price)
        values ('$Item', '$quantity', '$price');";

        mysqli_query($conn, $sqlUserInsert);
    }


}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Shop</title>
  </head>
  <body>


    <div style="background-color:#FF3D3D" align="center">
    <br>  <h1 style="color:white"><img src="img/logo.png" width="10%">  Online Food Shop</h1><br>

    </div>



    <h2 align="center"><b>Order your food now !! <h2>
      <hr>
      <div  width="50%">

        <table Column="3" border="1">
          <tr>
            <td><h3 align="center">  French fries Pack</h3></td>
            <td><h3 align="center" >Cheese Burger</h3></td>&nbsp;
            <td><h3 align="center">Pizza 12 inch</h3></td>
            <td><h3 align="center">Fizzy Drink</h3></td>
          </tr>

          <tr>
            <td><img src="img/fry.jpg" width="85%" ></td>
            <td><img src="img/burger.jpg" width="75%"></td>
            <td><img src="img/pizza.jpg" width="75%"></td>
            <td><img src="img/drink.jpg" width="95%"></td>


          </tr>

          <tr>
            <td><h6 align="center">  [BDT 150]</h6></td>
            <td><h6 align="center" >[BDT 410]</h6></td>&nbsp;
            <td><h6 align="center">[BDT 800]</h6></td>
            <td><h6 align="center">[BDT 30]</h6></td>
          </tr>


        </table></div>
        <hr>
         &nbsp;


<div style="background-color:#99f11a" align="center">



  <h1 style="text-align:center;color:white" > Order your Food here</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
  <table border="1">

  <tr><label>Please Select an item </label></tr>


  <tr>

              <td>
                  <input type="checkbox" name="Item" value="French fries Pack [BDT 150]"> French fries Pack [BDT 150]<br>
                  <select name="quantity">
                  <option  value="" disable select>Please select Quantity</option>
                    <option  value="1">1 pack </option>
                    <option  value="2">2 pack </option>
                    <option  value="3">3 pack </option></select>
                  </td>
                </tr>
                <tr><td>
                  <input type="checkbox" name="Item" value="Cheese Burger [BDT 410]">Cheese Burger [BDT 410]<br>
                  <select name="quantity">
                  <option  value="" disable select>Please select Quantity</option>
                    <option  value="1">One </option>
                    <option  value="2">Two </option>
                    <option  value="3">Three </option></select>
                </td></tr>
                <tr><td>
                  <input type="checkbox" name="Item" value="Pizza 12 inch[BDT 800]"> Pizza 12 inch [BDT 800]<br>
                  <select name="quantity">
                  <option  value="" disable select>Please select Quantity</option>
                    <option  value="1">One </option>
                    <option  value="2">Two </option>
                    <option  value="3">Three</option></select>

                  </td></tr>
                  <tr><td>
                  <input type="checkbox" name="Item" value="Fizzy Drink [BDT 30]">Fizzy Drink [BDT 30]<br>
                  <select name="quantity">
                  <option  value="" disable select>Please select Quantity</option>
                    <option  value="1">1 Glass </option>
                    <option  value="2">2 Glass </option>
                    <option  value="3">3 Glass </option></select>

                  </td></tr>
              </tr>
            </tr>




            <tr> <td> <input type="submit" name="calculate" value="calculate" width="100%"> </td>
            <td> <input type="submit" name="order" value="order"> </td>
            </tr>

            <tr> <td> <h4> </h4> <?php echo $price; ?></td></tr>
  </table>
  </form>

  </div>



  </body>
</html>
