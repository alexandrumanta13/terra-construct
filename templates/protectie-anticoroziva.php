<?php
title('Protectie anticoroziva'); 
meta('Sistemele de protectie anticoroziva oferite de compania noastra sunt concepute pe asocieri compatibile intre grunduri si emailuri pentru o mai mare diversitate.');

include('./templates/header/header.php');
?>
<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/protectie anticoroziva header.jpg"
    data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Protectie anticoroziva</h1>
            <p>In timp si sub actiunea umezelii, a oxigenului sau a sarurilor, precum si a altor elemente acide si
                bazice, metalele sunt afectate de coroziune. Aceasta ataca stratul superficial al vopselei de la
                suprafata metalului, patrunzand strat dupa strat, ducand la deteriorarea structurilor metalice.
            </p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60_35">
        <div class="row">

            <div class="col-md-9">


                <h2>Ce rol joaca protectia anticoroziva?</h2>

                <div class="row">
                    <div class="col-md-12">
                        <p>Studiile expertilor au demonstrat ca protectia anticoroziva prelungeste durata de viata a
                            constructiilor realizate pe/din structuri metalice, fie ca vorbim despre cladiri de birouri
                            si comerciale, hale de productie si depozitare, poduri, nave maritime ori avioane. Este de
                            la sine inteles faptul ca lipsa unei masuri de protectie impotriva coroziunii duce in tip la
                            degradarea acestora, ceea ce poate determina daune importante.
                        </p>
                        <img src="img/protectie-anticoroziva-1.jpg" alt="protectie-anticoroziva-1"
                            class="img-responsive border margin_30">
                        <p>Structurile metalice neprotejate anticoroziv se vor uza in numai cativa ani, inlocuirea lor
                            devenind iminenta.
                            Tratarea suprafetelor metalice nu doar ca te ajuta sa economisesti bani pentru ca asigura o
                            mai buna longevitate, dar pastreaza frumusetea oricarui timp de cladire pentru o perioada
                            mai indelungata.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3>Protectia anticoroziva - sustinuta si reglementata de Uniunea Europeana</h3>
                    </div>
                </div>

                <div class="row flex margin_30">
                    <div class="col-md-3">
                        <img src="img/protectie-anticoroziva.jpg" alt="protectie-anticoroziva"
                            class="img-responsive border">
                    </div>
                    <div class="col-md-9 flex flex--center">
                        <p>Din anul 1988, Uniunea Europeana a regelmentat domeniul de activitate destinat protectiilor,
                            prin standardul european ISO 12944: "Protectia anticoroziva a structurilor din otel cu
                            ajutorul sistemelor de vopsire".
                            ISO 12944 din 1988, cu revizuire in 2008, contine informatii precise in ceea ce priveste
                            folosirea protectiilor anticorozive. Capitolele includ principii de baza, influenta
                            factorilor de mediu, evaluarea si pregatirea suprafetelor, exemple de sisteme de protectii
                            si masuri de întretinere, teste de laborator ale sistemelor de acoperire si masuri de
                            supervizare a lucrarilor.


                        </p>
                    </div>
                </div>



                <div class="row flex">
                    <div class="col-md-12">
                        <h3>Serviciul de protectie anticoroziva oferit de TERRA GENERAL CONTRACTOR</h3>
                        <img src="img/protectie anticoroziva 2.jpg" alt="protectie anticoroziva 2"
                            class="img-responsive border margin_30">

                        <p>Sistemele de protectie anticoroziva oferite de compania noastra sunt concepute pe asocieri
                            compatibile intre grunduri si emailuri, astfel incat, in functie de natura obiectivului
                            protejat, putem prezenta o gama larga de produse cu proprietati anticorozive.
                            Emailurile si grundurile alchidice si epoxidice sunt utilizate atat
                            pentru protectia, cat si pentru finisarea suprafetelor care sunt expuse sau functioneaza in
                            conditii climatice normale sau conditii climatice corozive. Astfel, sistemele de protectie
                            anticoroziva oferite de noi se pliaza pe necesitatile fiecarui obiectiv, avand aderenta
                            foarte buna la stratul-suport.
                        </p>
                        <p>Sistemele prezinta rezistenta la ceata salina, uzura, intemperii, lumina si coroziune
                            alcalina (apa dulce si saruri).</p>
                        <p>Compania noastra ofera solutii optime pentru protectii anticorozive prin:
                        </p>
                        <ul class="red-dots">
                            <li>consultanta la nivel inalt </li>
                            <li>produse de calitate superioara</li>
                            <li>manopera executata de profesionisti</li>
                        </ul>
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
                        <li>Viteza de coroziune este direct influentata de umiditate, directia si viteza vantului,
                            intensitatea sorelui, nivelul de poluare, praf, etc.</li>
                        <li>Suprafetele ce urmeaza a fi supuse tratamentului de protectie anticoroziva necesita
                            curatare, degresare, fiind necesare indepartarea zgurii si a sarurilor solubile.</li>
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