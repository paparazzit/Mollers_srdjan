<?php include_once "header.php";
      
?>

        <section class="section_cart--wrapper margin-big-bottom">
        <?php $k -> cart();?>
        </section>
        <div  class="checkout_form modal" id="modal">
                <form action="Cart/save_cart.php" method="post">
                        <span>Vaše informacije</span>
                        <div class="name">
                                <input type="text" placeholder="Name" name="name" required>
                                <input type="text" placeholder="Last Name" name="lName"required>
                        </div>
                        <div class="city">
                                <input type="text" placeholder="City" name="city"required>
                                <input type="text" placeholder="Postal Code" name="postal"required>
                        </div>
                        <input type="text" placeholder="Shipping Address" id="shipping" name="address"required>
                        <input type="text" placeholder="Phone Number" id="phone" name="phone"required>

                        <textarea name="comment" id="" cols="30" rows="4" placeholder="Comment"></textarea>
                        <div class="payment">
                                <span>Payment Method</span>
                                <div class="credit">
                                        <input type="radio" name="payment_method" id="credit">
                                        <label for="credit">Credit/Debit Card</label>
                                </div>
                                <div class="cash">
                                        <input type="radio" name="payment_method" id="cash">
                                        <label for="cash">Cash on Delivery</label>
                                </div>
                        </div>
                        <div class="total_amount">
                                <span>Ukupno za plaćanje:<span class="bold"><?= $k -> total();?></span>
                                rsd</span>
                                <input type="submit" value="Plati" name="checkout">
                        </div>               
                </form>
                
        </div>
        <div class="overlay" id="overlay"></div>
        </main>
<?php include "section-social.php"?>
<?php include "footer.php"?>
