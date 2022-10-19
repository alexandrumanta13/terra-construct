<?php
title('Termoprotectie cu vopsea termospumanta'); 
meta('Lucrarile de termoprotectie cu vopsea termospumanta sunt efectuate de catre personal calificat. Personalul nostru detine certificate de competenta profesionala.');
include('./templates/header/header.php'); 
?>

<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/termoprotectie cu vopsea termospumanta 1.jpg" data-natural-width="1400" data-natural-height="350">
		<div id="sub_content_in">
			<div class="container">
				<h1>Contactati-ne</h1>
				<p>Va stam la dispozitie!</p>
			</div>
		</div>
	</section><!-- End section -->
	
      <main>
        <div class="container margin_60_35">
        	<div class="row">
                
            <div class="col-md-9">
                <p>Specialistii nostri va stau la dispozitie in orice moment pentru identificarea solutiilor tehnice legale care se preteaza cerintelor dumneavoastra, iar pachetul de servicii oferit este la cheie.  Pentru a intra in legatura cu noi, va rugam sa folositi adresele si telefonul de contact sau trimiteti-ne un mesaj folosind formularul din aceasta pagina.</p>
                    
              <div id="message-contact"></div>
                <form method="post" action="assets/contact.php" id="contactform">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Nume</label>
                                <input type="text" class="form-control" id="name_contact" name="name_contact" >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Prenume</label>
                                <input type="text" class="form-control" id="lastname_contact" name="lastname_contact">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email_contact" name="email_contact" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telefon</label>
                                <input type="text" id="phone_contact" name="phone_contact" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mesajul tau</label>
                                <textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           
                            <input type="submit" value="Trimite" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
                        </div>
                    </div>
                </form>                    
           </div><!-- End col-md-9 -->
                
           <div class="col-md-3">
                	<div class="box_style_2">
                        <h5>Adresa</h5>
                            <ul>
                                <li>J.W. Marriott Grand Office, Calea 13 Septembrie nr. 90, etaj 7
							Bucuresti, 050726 România</li>
                            </ul>
                             <h5>Contacte</h5>
                            <ul>
                            	<li><strong>Informatii generale</strong><br><a href="tel://0751145191">(0751) 145 191</a> / <a href="tel:0726112869">(0726) 112 869</a></li>
                              
                                <li><strong>Cere oferta</strong><br><a href="mailto:office@terrageneralcontractor.ro">office@terrageneralcontractor.ro</a></li>
                                <li><strong>Marketing</strong><br><a href="mailto:marketing@terrageneralcontractor.ro">marketing@terrageneralcontractor.ro</a></li></li>
                            </ul>
                    </div>
                    <!-- <div class="quote_banner"><a href="/cere-oferta">Vrei o oferta?</a></div> -->
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                       
               <hr>
                <div id="map"></div><!-- end map-->
                </div>
            </div>
        </div><!-- End container -->
	</main><!-- End main -->
    
    

    <?php include('./templates/footer/footer.php'); ?>