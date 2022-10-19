<header>
		<div id="top_line">
			<div class="container">
				<div class="row">

					<div class="col-sm-12">
						<ul id="top_links">
							<li><a href="tel://0751145191" id="phone_top">(0751) 145 191</a></li>
						</ul>
					</div>
				</div><!-- End row -->
			</div><!-- End container-->
		</div><!-- End top line-->

		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div id="logo">
						<a href="/"><img src="img/logo-TGC.png" width="130" alt="Terra General Contractor"
								data-retina="true"></a>
					</div>
				</div>
				<nav class="col-xs-9">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
							mobile</span></a>
					<div class="main-menu">
						<div id="header_menu">
							<img src="img/logo-TGC.png" width="190" alt="Terra General Contractor" data-retina="true">
						</div>
						<a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
						<ul>
							<li>
								<a href="/" class="show-submenu">Acasa</a>

							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">Servicii <i
										class="icon-down-open-mini"></i></a>
								<ul>
									<?php
                                        foreach($config['services'] as $k => $v) {
                                            ?>
                                            <li>
                                                <a href="<?= $v ?>"><?= $k ?></a>
                                            </li>
                                            <?php
                                        }
                                    ?>
									<!-- <li><a href="termoprotectie-cu-vopsea-termospumanta.html">Termoprotectie cu vopseluri
											termospumante-intumescente</a></li>
									<li><a href="protectie-antifoc-tubulatura-ventilatie.html">Protectie antifoc tubulatura de ventilatie</a>
									</li>
									<li><a href="services_layout_3.html">Protectii anticorozive</a></li>
									<li><a href="service_layout_1.html">Ignifugare lemn</a></li>
									<li><a href="termoprotectie-cu-mortar-antifoc.html">Termoprotectie cu mortare antifoc</a></li>
									<li><a href="services_layout_3.html">Sablare industriala</a></li>
									<li><a href="services_layout_3.html">Etansare goluri de trecere</a></li>
									<li><a href="services_layout_3.html">Protectie antifoc cu vata minerala</a></li> -->
								</ul>
							</li>
							<!-- <li>
								<a href="javascript:void(0);">CLIENTI</a>
							</li> -->
							<li><a href="/despre-noi">DESPRE NOI</a></li>

							<li>
								<a href="/contact" class="show-submenu">CONTACT</a>

							</li>

						</ul>
					</div><!-- End main-menu -->
				</nav>
			</div>
		</div><!-- container -->
	</header><!-- End Header -->