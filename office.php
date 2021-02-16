<?php
session_start();
require_once("config.php");


//code for Cart
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
		if(!empty($_POST["quantity"])) {
			$pid=$_GET["pid"];
			$result=mysqli_query($con,"SELECT * FROM tblproduct4 WHERE id='$pid'");
	          while($productByCode=mysqli_fetch_array($result)){
			$itemArray = array($productByCode["code"]=>array('name'=>$productByCode["name"], 'code'=>$productByCode["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
	break;

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="style.css">
</HEAD>
<BODY>
    <nav id="navbar">
        <div id="logo">
            <img src="image/logo.png" alt="TheFurniturePoint.com">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="kitchen.php">Kitchen</a></li>
            <li class="item"><a href="livingroom.php">Living Room</a></li>
            <li class="item"><a href="bedroom.php">Bedroom</a></li>
            <li class="item"><a href="office.php">Office Essentials</a></li>
            <li class="item"><a href="aboutUs.php">More</a></li>
            <?php
                session_start();
                if (isset($_SESSION["userUID"])) {
                    echo '<div>
                    <button class="btn" onclick="redirectout()">LOG-OUT</button>
                    </div>';
                }
                else{
                    echo '<div>
                    <button class="btn1" onclick="redirectsign()">Sign up</button>
                    <button class="btn" onclick="redirect()">LOG-IN</button>
                    </div>';
                }
             ?>
            <script>
                function redirect() {
                    window.location.href = "login.php";
                }
                function redirectout() {
                    window.location.href = "logout.php";
                }

                function redirectsign(){
                    window.location.href='signup.php';
                }
            </script>

            


        </ul>
        <div id="login">
            <img src="image/login.png">
        </div>


    </nav>
<!-- Cart ---->
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>
<a id="btnEmpty2" href="checkout.php">Checkout</a>
<a id="btnEmpty" href="office.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="12" cellspacing="5">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "Rs. ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "Rs. ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="livingroom.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "Rs. ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>




<div id="product-grid">
	<div class="txt-heading">Bedroom Products</div>
	<?php
	$product= mysqli_query($con,"SELECT * FROM tblproduct4 ORDER BY id ASC");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
		
	?>
		<div class="product-item">
			<form method="post" action="office.php?action=add&pid=<?php echo $row["id"]; ?>">
			<div class="product-image"><img src="<?php echo $row["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $row["name"]; ?></div>
			<div class="product-price"><?php echo "Rs.".$row["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="11" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
            
            </div>
			</form>
		</div>
	<?php
		}
	}  else {
 echo "No Records.";

	}
	?>
</div>


</BODY>
</HTML>