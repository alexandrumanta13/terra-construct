<?php
title('Protectie antifoc tubulatura de ventilatie'); 
meta('VERMIPLASTER® BD este unul dintre cele mai performante produse de protectie antifoc a tubulaturilor de ventilatie, prin intermediul Terra General Contractor.');

include('./templates/header/header.php'); 
?>

<section class="parallax_window_in short" data-parallax="scroll"
    data-image-src="img/protectie-antifoc-tubulatura-de-ventilatie.jpg" data-natural-width="1400"
    data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Protectie antifoc tubulatura de ventilatie</h1>
            <p>Tubulatura traditionala de ventilatie a unei cladiri, asupra careia nu au fost aplicate masuri
                antiincendiu, nu reuseste sa atinga standardele acceptate la nivel international cu privire la protectia
                impotriva incendiilor. Sub actiunea temperaturilor extrem de ridicate, conductele de ventilatie se
                supraincalzesc, deformandu-se rapid. Astfel, nu doar ca se ajunge la raspandirea fumului si a
                flacarilor, ci chiar la accelerarea acestora.

            </p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60_35">
        <div class="row">

            <div class="col-md-9">
                <img src="img/protectie-antifoc-tubulatura-de-ventilatie.jpg"
                    alt="protectie-antifoc-tubulatura-de-ventilatie" class="img-responsive border">
                <h3>Conceput pentru a oferi protectie antifoc tubulaturii de ventilatie

                </h3>
                <p>Folosim unul dintre cele mai performante produse de protectie antifoc a tubulaturilor de ventilatie,
                    conceput pentru a mentine stabilitatea si capacitatea portanta de pana la 240 de minute, timp in
                    care fie focul este stins, fie cladirea este evacuata.
                    Produsele utilizate sunt agrementate in Romania de A.T.ROM-2000 SRL prin agrementul tehnic
                    020-03/250-2010 si avizat de Consiliul Tehnic Permament pentru Constructii din subordinea MDRT.
                    Protectia antifoc a tubulaturii de ventilatie se realizeaza cu ajutorul unui mortar industrial cu
                    granulatie fina, ce sustine procesul de protectie pasiva la foc, avand o destinatie special
                    conceputa pentru tuburile de ventilatie. Totusi, acest produs se poate utiliza fara probleme si
                    pentru protectia structurilor metalice, precum si a planseelor din beton.
                </p>
                <div class="row flex">


                    <div class="col-md-12 flex--middle flex--column">
                        <h3>CARACTERISTICI TEHNICE: </h3>
                        <ul class="red-dots flex--middle flex--column">
                            <li>Conform ISO 9001:2008 </li>
                            <li>Clasa de reactie la foc: A1</li>
                            <li>Culoare: Alba </li>
                            <li>Raportul de amestec (apa/mortar uscat): 0,70 la 1,1l/kg </li>
                            <li>Rezistenta la incovoiere: = 9 Kg/cm2 </li>
                            <li>Rezistenta la compresiune: = 0,48 N/mm2</li>
                            <li>pH: 12-13 </li>
                            <li>Incadrarea PSI: Nu arde </li>
                            <li>Rezistenta la jet de apa (UNE 23.806-81): Stabil</li>
                        </ul>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-12">
                        <h3 class="margin_30">Pentru protectia antifoc a tubulaturii de ventilatie, produsul se poate
                            aplica intre urmatoarele limite:

                        </h3>

                    </div>

                    <div class="col-md-12">
                        <ul class="red-dots">
                            <li><strong>Grosimea stratului aplicat</strong> de produs variaza de la 5mm pana la 25 mm,
                                cu un consum de 4,5-5 kg/mp/cm aplicat.
                            </li>
                            <li><strong>Timp de expunere la foc:</strong> de la 30 min. la 240 min.</li>
                            <li><strong>Temperatura critica:
                                </strong> 500°C si 550°C</li>

                        </ul>
                    </div>


                </div>
                <!-- End row -->



            </div><!-- End col-md-9 -->

            <div class="col-md-3">
                <div class="box_style_1">
                    <ul id="cat_nav">


                        <?php
                            foreach($config['services'] as $k => $v) {
                                ?>
                        <li>
                            <a href="<?= $v ?>"><?= $k ?></a>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                    <hr>

                    <h5>Vrei mai multe informatii?</h5>
                    <p class="nopadding">
                        Un consultant specializat este disponibil pentru o discutie.<br>
                        <a href="/contact" class="link_normal">Contacteaza-ne</a>
                    </p>
                </div><!-- End Box_style_1 -->

            

                <div class="box_style_2">
                    <h4><i class="icon_lightbulb_alt"></i> Bine de stiut</h4>
                    <ul>
                        <li>Produsul pe care il folosim (ambalat in saci) se depoziteaza in spatii uscate cu o umiditate de cel
                            mult 65%.
                        </li>
                        <li>Temperaturile de depozitare se incadreaza intre 5°C si 35°C
                        </li>
                        <li>Nu este material coroziv, conform raportului Institutul de Stiinte in Constructii Eduardo
                            Torroja, Consiliul Superior pentru Cercetari Stiintifice din Madrid.</li>
                        <li>NU contine materiale toxice sau periculoase, iar la incalzire se emana doar apa.
                        </li>
                        <li>Nu are in compozitie azbest.
                        </li>
                    </ul>

                </div>
            </div><!-- End col-md-3 -->

        </div><!-- End row -->
    </div><!-- End container -->
    <section class="contact-us">
			<div class="contact-us__inner">
				<div class="text">
					<h3>Te contactam noi</h3>
					<p>Pentru orice fel de intrebare, problema, cotatie de pret sau oferta puteti sa ne contactati la
						numarul de telefon afisat sau prin formularul de contact.</p>
				</div>
				<div class="form">
                <div id="message-contact"></div>
					<form action="assets/contact-simple.php" method="post" id="contactform">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">

								<select class="form-control" name="interest" id="interest">
									<option value="-1">Sunt interesat de: </option>

									<option value="Termoprotectie cu vopseluri">Termoprotectie cu vopseluri</option>

									<option value="Protectie antifoc tubulatura de ventilatie">Protectie antifoc
										tubulatura de ventilatie</option>

									<option value="Protectii anticorozive">Protectii anticorozive</option>
									<option value="Ignifugare lemn">Ignifugare lemn</option>
									<option value="Termoprotectie cu mortare antifoc">Termoprotectie cu mortare antifoc
									</option>
									<option value="Sablare industriala">Sablare industriala</option>
									<option value="Etansare goluri de trecere">Etansare goluri de trecere</option>
									<option value="Protectie antifoc cu vata minerala">Protectie antifoc cu vata
										minerala</option>

									<option value="Altele">Altele</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">

								<input type="text" id="name_contact" name="name_contact" placeholder="Numele"
									class="form-control required">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">

								<input type="text" id="phone_contact" name="phone_contact" placeholder="Telefon"
									class="form-control required">
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn_1 medium" id="submit-contact">Trimite</button>
						</div>
					</form>
				</div>
			</div>
		</section>
</main><!-- End main -->


<?php include('./templates/footer/footer.php'); ?>