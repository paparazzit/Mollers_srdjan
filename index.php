    <?php include "header.php"?>
        <!-- Header slider -->
        
        <section class="home_header--slider ">
            <div class="slide1 slider  show_slides">
                <img src="Design/Slider/slide1.png" alt="">
            </div>
            <div class="slide2 slider ">
                <img src="Design/Slider/Screenshot 001 copy 1.png" alt="">
            </div>
            <div class="slide3 slider ">
                <img src="Design/Slider/slide2.png" alt="">
            </div>
        <div class="slider_content">
            <h1 class="slide_headline">Esencijalne masne <br> kiseline</h1>
            <a href="#" class="slider_link" id="slider_link">Saznaj više</a>
            <div class="slider_navigation">
                <!-- <div class="nav-btn "></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div> -->
            </div>
        </div>
        <!-- <div class="content slider_content2">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing.</h1>
            <a href="Saznaj više"></a>
            <div class="slider_navigation">
                <div class="nav-btn active"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
            </div>
        </div>
        <div class="content slider_content3">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing.</h1>
            <a href="Saznaj više"></a>
            <div class="slider_navigation">
                <div class="nav-btn active"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
            </div>
        </div> -->
        <img src="Design/home/flag.png" alt="Norway flag" id="slider_flag">
        </section>



        <!-- Section products -->
        <section class="home_products margin-medium-top">
            <div class="home_products--wrapper">
                <?php
                    include "Base/Products.php";
                    $lp -> show_four_products();
                ?>
            </div>
            <a href="products.php" class="all_products--btn">Svi proizvodi</a>
        </section>


        <!-- Section man standing parallax -->
        <section class="home_parallax_man margin-medium-top"  >
            <div class="man_standing--parallax intersect " id="man">
                <img src="Design/parallax/man_single.webp" alt="" class="man_single">
                <img src="Design/parallax/background_layer.webp" alt="" class="background">
                <div class="man_standing--content">
                    <p>Sve što bi trebalo da znate o Möller’s uljima jetre bakalara</p>
                    <p>Möller’s ulje jetre norveškog arktičkog bakalara predstavlja izvor omega-3 masnih kiselina EPA i DHA i vitamina A, D i E. Prednost ulja jetre bakalara nad ostalim oblicima jeste njegova stabilnost, bolja i brža apsorpcija.</p>
                    <a href="#">Saznaj više</a>
                </div>
            </div>
        </section>

        <!-- Section vitamins -->
        <section class="home_vitamins margin-medium-top home_parallax--second ">
            <div class="home_vitamins--row">
                <div class="col-1 col intersect" >
                    <div class="col-1-img col-img vitamin_img">
                    <span class="img-txt">A</span>
                        <img src="Design/home/A_circle.png" alt="vitamin info">
                        
                    </div>
                        <h2>Vitamin A</h2>
                        <span class="home_vitamins-col-desc">Vitamin A za dobar vid i poboljšanu oštrinu vida</span><br>
                        <a href="/Mollers/vitamins.php" class="home_vitamins-btn">Saznaj više</a>
                </div>
                <div class="col-2 col intersect">
                    <div class="col-2-img col-img vitamin_img">
                        <span class="img-txt">D</span>
                        <img src="Design/home/D_circle.png" alt="vitamin info" >
                    </div>
                        <h2>Vitamin D</h2>
                        <span class="home_vitamins-col-desc">Kosti dece zahtevaju vitamin D za zdrav rast i razvoj</span><br>
                        <a href="/Mollers/vitamins.php"class="home_vitamins-btn">Saznaj više</a>
                </div>
                <div class="col-3 col intersect">
                    <div class="col-3-img col-img vitamin_img">
                        <span class="img-txt">E</span>
                        <img src="Design/home/E_circle.png" alt="vitamin info">
                    </div>
                        <h2>Vitamin E</h2>
                        <span class="home_vitamins-col-desc">Vitamin E doprinosi jačanju imuniteta</span><br>
                        <a href="/Mollers/vitamins.php"class="home_vitamins-btn">Saznaj više</a>
                </div>
            </div>
        </section>



        <!-- Section familly parallax -->
        <section class="home_familly margin-medium-top home_parallax--third intersect">
            <div class="home_familly--parallax">
                <img src="Design/home/family_long.png" alt="">
                <div class="familly--content">
                    <span>Šta je Omega-3?</span>
                    <p>Omega-3 masne kiseline su opšti pojam za grupu polinezasićenih masnih
                    kiselina. Njihovo ime potiče od njihovih dvostrukih veza koja se nalazi na
                    trećem atomu računajući od metilnog kraja (2,3). Omega-3 masna kiselina
                    alfa-linoleinska kiselina je prekursor dugih omega-3 masnih kiselina (3,4), i
                    obično se mogu naći u uljima najčešće konzumiranoj biljci poput kanole i
                    sjemena lana (2,5). To je Omega-3masna kiselina iz morskih izvora, koja
                    ima hiljade studija koje dokazuju svoje zdravstvene efekte.</p>
                    <a href="omega3.php">Saznaj više</a>
                </div>
                </div>
        </section>
        <section class="home_dha" >
            <div class="home_dha--cover">
                <div class="home_dha--cover-textbox">
                    <h3>DHA</h3>
                    <p>Dokozaheksaenoinska kiselina (DHA) je omega-3 masna kiselina koja je primarna strukturna komponenta ljudskog moždanog cerebralnog korteksa. Doprinosi normalnom razvoju mozga i očiju dece.</p>
                    <a href="/Mollers/dha.php">Saznaj više</a>
                    <div class="home_dha--radiobtn">
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </section>
    
    <?php include "section-social.php"?>
   <?php include "footer.php"?>
   </main>
   