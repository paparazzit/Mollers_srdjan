<?php include "header.php"?>
    <section class="section_contact margin-big-bottom" >
        <div class="contact_aside contact_img"></div>
        <div class="contact_content--wrapper">
                <div class="contact_content--header">
                    <h1>Kontaktirajte nas</h1>
                    <p>Ako imate pitanja, savete ili žalbu u vezi sa našim proizvodima, veb stranicom ili iz drugih razloga želite da nas kontaktirate, možete popuniti obrazac u nastavku.</p>
                </div>
                <div class="contact_content">
                    <div class="form-1 form">
                        <h4>Vrsta upita</h4>
                        <div class="contact_select--custom">
                            <select name="" id="" >
                            <option selected disabled hidden>Povratna informacija</option>
                            <option value="">Kritika</option>
                            <option value="">Savet</option>
                            <option value="">Pitanje</option>
                            </select>
                            <span class="contact_select--arow"></span>
                        </div>
                        <div class="contact_select--custom">
                            <select name="" id="custom2">
                            <?php include "Base/Products.php";
                                        $lp ->contact_select_product();?>
                            </select>
                            <span class="contact_select--arow"></span>
                        </div>
                    </div>
                    <div class="form-2 form">
                        <form action="">
                            <h4>Šta želite da nam kažete?</h4>
                            <textarea id="msg" name="msg" placeholder="Vaša poruka"></textarea>                       
                        </form>
                    </div>
                    <div class="form-3 form">
                        <h4>Vaše informacije</h4>
                        <form action="">
                            <input type="text" placeholder="Ime">
                            <input type="text"placeholder="Prezime" >
                            <input type="text" placeholder="Adresa" >
                            <input type="text" placeholder="Poštanski broj">
                            <input type="text" placeholder="Grad">
                            <input type="email" placeholder="Email" id="email"><span id="validation_msg"></span>
                            <input type="text" placeholder="Broj telefona">
                        </form>
                    </div>
                    <div class="form-4 form" id="border_none">
                    <h4>Saglasnost</h4>
                    <form action="">
                        <input type="checkbox" name="" id="">
                        <p>Da li želite da se za vaš upit i ostatak prepiske pobrinemo za kasnije? Poznavanje vaše istorije omogućiće nam da sagledamo slučaj u kontekstu i pružimo bolju uslugu u slučaju kasnijeg upita.</p>
                    </form>
                    <a href="" class="contact_btn" id="validate" >Pošaljite obrazac</a>
                    </div>
                </div>
        </div>
    </section>

<?php include "section-social.php"?>
<?php include "footer.php"?>
</main>

