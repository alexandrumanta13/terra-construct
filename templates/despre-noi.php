<?php
title('Despre noi'); 
meta('Compania TERRA GENERAL CONTRACTOR SRL este o companie romaneasca cu capital integral privat, autorizata si specializata in domeniul protectiilor pasive la incendiu.');
include('./templates/header/header.php'); 
?>

<section class="parallax_window_in short" data-parallax="scroll"
    data-image-src="img/slides/protectie-anticoroziva-slide-1.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>TERRA GENERAL CONTRACTOR SRL</h1>
            <p>SPECIALISTI IN SISTEME ANTIFOC SI ANTICOROZIVE DIN 2005</p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="intro">
                    <p><img src="img/despre-noi-terra-general-contractor.jpg" alt="despre-noi-terra-general-contractor"
                            class="img-responsive"></p>
                    <h2>SPECIALISTI IN SISTEME ANTIFOC SI ANTICOROZIVE DIN 2005</h2>
                    <p class="lead">
                        Compania TERRA GENERAL CONTRACTOR SRL este o companie romaneasca cu capital integral privat,
                        autorizata si specializata in domeniul protectiilor pasive la incendiu.

                    </p>
                </div>
            </div>
        </div><!-- End row -->

        <hr>

        <div class="row">

            <div class="col-sm-12">
                <ul class="feat" id="about">
                    <li>
                        <i class="icon-users"></i>
                        <h4>FILOSOFIA NOASTRA</h4>
                        <p>
                            Misiunea noastra este de a dezvolta si oferi solutii sigure, utile si eficiente, care
                            raspund nevoilor clientilor nostri, protejand in acelasi timp mediul inconjurator. Toate
                            materialele folosite pentru implementarea solutiilor noastre de protectie sunt de cea mai
                            buna calitate si supuse constant unor verificari amanuntite. Aceste masuri ne ajuta sa ne
                            asiguram ca putem garanta eficienta, stabilitatea si buna functionare a serviciilor pe care
                            le oferim.
                        </p>
                    </li>
                    <li>
                        <i class="icon-fire"></i>
                        <h4>GARANTII DE CALITATE</h4>
                        <p>
                            Ca urmare a dorintei de a ne ridica la standardele de calitate europene, dar si pentru a
                            oferi clientilor nostri garantia unor lucrari executate profesionist, compania TERRA GENERAL
                            CONTRACTOR detine implementat sistemul de management integrat calitate + mediu + sanatate si
                            securitate ocupationala (SR EN ISO 9001: 2008, SR EN ISO 14001: 2005 si SR OHSAS 18001:
                            2008).

                        </p>
                    </li>

                </ul>
            </div>
        </div><!-- End row -->

        <hr>



        <!--Team Carousel -->
        <div class="row">
            <div class="owl-carousel team-carousel">

                <div class="team-item">
                    <div class="team-item-img">
                        <img src="img/ISO 9001-1-water-m.jpg" alt="">

                    </div>
                </div>

                <div class="team-item">
                    <div class="team-item-img">
                        <img src="img/ISO_14001_w.jpg" alt="">

                    </div>
                </div>

                <div class="team-item">
                    <div class="team-item-img">
                        <img src="img/ISO_18001-w.jpg" alt="">

                    </div>
                </div>

                <div class="team-item">
                    <div class="team-item-img">
                        <img src="img/Certificare-TVT.jpg" alt="">

                    </div>
                </div>

                <div class="team-item">
                    <div class="team-item-img">
                        <img src="img/Certificare-TPT.jpg" alt="">

                    </div>
                </div>

                <div class="team-item">
                    <div class="team-item-img">
                        <img src="img/certificat_ignif.jpg" alt="">

                    </div>
                </div>
            </div>
        </div>
        <!--End Team Carousel-->
        <hr>



        <div class="row">

            <div class="col-sm-12">
                <ul class="feat" id="about">
                    <li>
                        <i class="icon-shield"></i>
                        <h4>SOLUTII CE INDEPLINESC CERINTELE LEGALE</h4>
                        <p>
                            Toate solutiile si materialele antiincendiu propuse si utilizate de noi indeplinesc
                            cerintele legale. <strong>TERRA GENERAL CONTRACTOR</strong> detine toate agrementele tehnice
                            si avizele emise
                            de institutiile abilitate - MLPAT, INCERC, MAI-IGSU-CNSIPC. De asemnea, produsele sunt
                            insotite de certificate de calitate si declaratii de conformitate.
                        </p>
                    </li>
                    <li>
                        <i class="icon-ccw-2"></i>
                        <h4>OFERIM SOLUTII LA CHEIE</h4>
                        <ul>
                            <li>protectii anticorozive a structurilor metalice</li>
                            <li>protectii antifoc a structurilor metalice cu vopseluri termospumante</li>
                            <li>protectii antifoc a structurilor metalice cu mortare antifoc - torcretare</li>
                            <li>protectie antifoc a tubulaturilor de ventilatie</li>
                            <li>ignifugari si aseptizari lemn</li>
                            <li>livrari materiale de constructii si amenajari interioare</li>
                            <li>intocmire documentatii specifice - evaluari risc de incendiu, scenarii de siguranta la
                                foc, etc</li>

                        </ul>
                    </li>

                </ul>

                <p class="lead">Specialistii nostri va stau la dispozitie in orice moment pentru identificarea solutiilor tehnice legale care se preteaza cerintelor dumneavoastra.</p>
            </div>
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