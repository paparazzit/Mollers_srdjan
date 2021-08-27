<?php include "header.php"?>

    <section class="products_header margin-medium-bottom">
        <div class="products_header--textbox">
                <h1>Naši proizvodi</h1>
                <span>Möller’s masne kiseline</span>
        </div>
    </section>
    <section class="products_info margin-big-bottom">
        <div class="products_info--row">
            <div class="products_info--col1 products_info--col">
            <p id="bold">Möller’s provides you and your family with rich, healthy omega-3 products, full of essential vitamins, and has done so since 1854.</p>
            </div>
            <div class="products_info--col2 products_info--col">
                <p>Möller’s brand is Norway’s number 1 omega-3 brand*. Our range consists of high quality products for all life phases, from pregnancy, family life with children, to adulthood and  healthy aging. We have developed different user formats like liquid, capsules and jellies  to suit your personal preferances.</p>
            </div>
            <div class="products_info--col3 products_info--col">
            <p>Take good care of yourself and your loved ones with healthy daily habits throughout life!</p>
            </div>
        </div>
    </section>
    <section class="products_all_products margin-big-bottom">
        <div class="all_products--wrapper">
            <?php  include "Base/Products.php";
                    $lp -> show_all_products();
            ?>
        </div>
    </section>

<?php include "section-social.php"?>
<?php include "footer.php"?>
</main>