<?php
title('Sabalare industriala'); 
meta('Tehnica de sablare industriala se bazeaza pe utilizarea energiei cinetice atasata unor particule dure de mici dimensiuni care lovesc suprafata, spargand crusta');

include('./templates/header/header.php');
?>
<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/sablare industriala header.jpg"
    data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Sablare industriala</h1>
            <p>Sablarea industriala este o metoda de indepartare a straturilor de oxizi si impuritati organice prin
                improscare cu particule solide de mici dimensiuni.
                <strong>Nu exista o solutie mai eficienta sau mai rapida</strong> pentru a indeparta murdaria, rugina,
                vopseaua,
                depunerile sau reziduurile industriale decat sablarea.

            </p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60_35">
        <div class="row">

            <div class="col-md-9">


                <h2>Cum functioneaza metoda de sablare industriala?</h2>

                <div class="row">
                    <div class="col-md-12">
                        <img src="img/sablare industriala.jpg" alt="sablare industriala"
                            class="img-responsive border margin_30">
                    </div>

                    <div class="col-md-12">
                        <p>Tehnica de sablare industriala se bazeaza pe utilizarea energiei cinetice atasata unor
                            particule dure de mici dimensiuni care lovesc suprafata, sparg crusta de oxizi si
                            indeparteaza impuritatile impreuna cu resturile rezultate prin fragmentarea acestora,
                            utilizandu-se ca agent purtator fie aerul sub presiune, fie efectul fortei centrifuge.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3>Sablare industriala la cele mai inalte standarde de calitate</h3>
                        <p>Datorita experientei pe care o avem in executarea lucrarilor de protectie anticoroziva,
                            intelegem in profunzime nevoia de a obtine o suprafata curata, perfect sablata, astfel incat
                            aplicarea ulterioara a straturilor de produse conform cerintelor tehnice sa fie optima.
                            Indiferent daca doriti pregatirea unei suprafete sau o simpla curatare, avem capacitatea de
                            a executa astfel de lucrari prin intermediul:</p>

                        <ul class="red-dots">
                            <li>Sablarii cu gheata carbonica</li>
                            <li>Sablarii cu nisip </li>
                        </ul>

                        <img src="img/sablare industriala 1.jpg" alt="sablare industriala 1"
                            class="img-responsive border margin_30">

                        <p>Pentru orice grad de curatare dorit, fie ca vorbim despre sablare usoara (Sa1), sablare
                            profunda (Sa2) sablare foarte profunda (Sa2 ½) sau sablare foarte profunda pana la ''alb
                            metallic'' (Sa3) si indiferent de nivelul de calitate a suprafetei ce urmeaza a fi sablata
                            (A, B, C sau D) va putem sta la dispozitie pentru a obtine rugozitatea conform standardului
                            ISO 8503, dar si gradul de curatare conform standardului ISO 8501-1:2007
                            Dispunem de personal cu experienta si instalatii de sablare mobile, astfel incat putem
                            executa lucrarile in locatiile dumneavoastra, in orice oras din tara.
                        </p>
                        <p>Preturile pentru executia lucrarilor de sablare difera in functie de complexitatea si
                            dimensiunea lucrarii, de calitatea si tipul suprafetei ce urmeaza a fi sablata, dar si de
                            metoda si gradul de sablare.
                        </p>
                        <p>Ne puteti trimite poze si cereri de oferta la adresa: <a
                                href="mailto:marketing@terrageneralcontractor.ro">marketing@terrageneralcontractor.ro</a>
                            sau
                            va putem raspunde la intrebari legate de sablare daca ne apelati la numarul <a
                                href="tel:0751145191">0751145191</a>
                        </p>

                    </div>
                </div>


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