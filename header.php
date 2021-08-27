<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body >
    <?php
        include_once "Cart/Cart.php";
        $br = $k -> get_cart_amount();?>
    <!-- Navigation bar -->
       <nav class="nav">
        <div class="nav_logo--box nav_col-1">
            <a href="/Mollers/index.php"><img src="Design/home/Asset11.png" alt="logo"></a>
        </div>
        <div class="nav_col-2">
            <ul class="nav_shop">
                <li class="nav_shop--btn"><a href="/Mollers/shop.php" >PRODAVNICA</a></li>
                <li class="nav_shop--cart"><a href="/Mollers/cart.php" ><img src="Design/home/cart.png" alt="shopping_cart"><span><?=$br?></span></a></li>
            </ul>
            <ul class="nav_social">
                <li class="nav_social--fb"><a href="" ><img src="Design/home/fb.png" alt="fb"></a></li>
                <li class="nav_social--inst"><a href="" ><img src="Design/home/inst.png" alt="inst"></a></li>
            </ul>
            <div class="nav_burger open " id="mySidenav"><a href=""></a></div>
            <div class="navigation nav-btn">
                <a class="navigation_exit--btn close">+</a>
                <div class="navigation-items">
                    <h6>Menu</h6>
                    <ul>
                        <li><a href="about.php">Sve što bi trebalo da znate o Moller’s uljima jetre bakalara</a></li>
                        <li><a href="vitamins.php">Vitamini A - D - E</a></li>
                        <li><a href="omega3.php">Šta je Omega-3?</a></li>
                        <li><a href="dha.php">DHA - EPA</a></li>
                        <li><a href="history.php">Istorijat</a></li>
                        <li><a href="products.php">Naši proizvodi</a></li>
                    </ul>
                </div>
                <div class="navigation-footer">
                    <ul>
                        <li><a href="country.php">Izaberi zemlju</a></li>
                        <li><a href="contact.php">Kontaktiraj nas</a></li>
                        <li><a href="faq.php">Pitanja i odgovori</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
         