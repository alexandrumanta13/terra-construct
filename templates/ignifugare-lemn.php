<?php
title('Ignifugare lemn'); 
meta('Ignifugarea lemnului are un rol deosebit de important in protectia la foc a constructiilor de acest tip. Prin folosirea substantelor ignifuge pe masa lemnoasa se reduce semnificativ riscul de ardere. 
Sistemele de protectie a lemnului, oferite de compania noastra, sunt sisteme pe baza de lacuri ignifuge si fungicizate, precum si sisteme de protectie cu vopsele ignifuge termospumante.
');

include('./templates/header/header.php');
?>
<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/ignifugare lemn.jpg"
    data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Ignifugare lemn</h1>
            <p>Ignifugarea lemnului are un rol deosebit de important in protectia la foc a constructiilor de acest tip.
                Prin folosirea substantelor ignifuge pe masa lemnoasa se reduce semnificativ riscul de ardere.
                Sistemele de protectie a lemnului, oferite de compania noastra, sunt sisteme pe baza de lacuri ignifuge
                si fungicizate, precum si sisteme de protectie cu vopsele ignifuge termospumante.

            </p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60_35">
        <div class="row">

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12">
                        <img src="img/ignifugare lemn.jpg" alt="ignifugare lemn"
                            class="img-responsive border margin_30">
                    </div>

                    
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <h3>Ignifugare lemn - un procedeu performant si ecologic
                        </h3>
                        <p>Acoperirile ignifuge izoleaza suprafata lemnului si tin oxigenul departe de aceasta.
                            Sistemele propuse de noi sunt ECOLOGICE, nu contin halogeni si au in compozitie aditivi de
                            tip nano. Astfel, in cazul unui incendiu va avea loc o descompunere endotermica fara
                            degajare de compusi toxici sau corozivi pentru om si mediul ambiant.</p>
                        <img src="img/ignifugare-lemn 1.jpg" alt="ignifugare-lemn 1"
                            class="img-responsive border margin_30">


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Avantajele sistemelor ignifuge oferite de Terra General Contractor sunt:
                        </h3>
                    </div>


                    <div class="col-md-12">
                        <ul class="red-dots">
                            <li>dificultatea de aprindere a materialului lemnos</li>
                            <li>rezistenta la foc sporita - aprox. 120 min</li>
                            <li>rezistenta chimica</li>
                            <li>hidratarea lemnului</li>
                            <li>oprirea absorbtiei apei</li>
                            <li>rezistenta indelungata la intemperii</li>
                            <li>actiunea repelenta asupra daunatorilor (microrganisme, carii, ciuperci)</li>
                            <li>salvarea resurselor naturale: solventii organici volatili fiind inlocuiti cu apa</li>
                        </ul>
                        <p>Procedeul de ignifugare poate fi realizat pe orice suprafata care se aprinde si arde cu
                            usurinta, cel mai des intalnit material de constructie fiind lemnul. Actiunea consta in
                            aplicarea unor produse ce au in componenta lor substante ignifuge, capabile sa intarzie
                            semnificativ declansarea arderii.</p>
                        <p>Substantele ignifuge pot fi aplicate pe toate partile componente ale unei cladiri din
                            material
                            lemnos, de la pereti exteriori si interiori, mansarda, pod si mobila. Atentie insa,
                            ignifugarea
                            lemnului nu-i ofera acestuia imunitate la foc, dar contribuie la sporirea semnificativa a
                            rezistentei.</p>
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

             

                <div class="box_style_2">
                    <h4><i class="icon_lightbulb_alt"></i> Bine de stiut</h4>
                    <ul>
                        <li>Ignifugarea lemnului poate fi realizata prin imersie, pulverizare sau pensulare.</li>
                        <li>Ignifugarea necesita a fi refacuta la perioade de timp ce depind de mai multi factori.</li>
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