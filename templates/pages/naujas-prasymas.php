<main class="site-main">

	<?php include('templates/components/site-hero.php'); ?>
	
	<div class="container">
		
		<?php include('templates/components/site-breadcrumb.php'); ?>
		
		<div class="row">
			
			<aside class="hidden-xs col-sm-4 col-md-4 col-lg-3 site-aside">
				
				<?php include('templates/components/site-aside-nav.php'); ?>
				
			</aside>
			
			<article class="col-xs-12 col-sm-8 col-md-8 cold-lg-9 site-article">
			
			
				<form class="site-form" autocomplete="off">
					
					<h1 class="page-title">Naujas prašymas</h1>
				
					
					<div class="form-section">
						
						<h2 class="form-section-title">Vieno iš tėvų (globėjų) duomenys</h2>

						<div>
							
							<div class="form-group">
								
								<label for="">Vardas Pavardė</label>

								<div class="form-value">
									<span class="text-primary">Vardenis Pavardenis</span>
								</div>
								
							</div>
							
							<div class="form-group">
								
								<label for="">Deklaruotos gyvenamosios vietos adresas</label>
					
								<div class="form-value">
									<span class="text-primary">Šermukšnių g. 5-12, Kaunas</span>
								</div>
								
							</div>
							
							<div class="form-group">
								
								<label for="">Telefono numeris</label>
					
								<div class="row">
									<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
										<input type="text" class="form-control" value="+370 614 00000" />
									</div>
								</div>
			
							</div>
							
							<div class="form-group">
								
								<label for="">El. pašto adresas</label>
					
								<div class="row">
									<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
										<input type="text" class="form-control" value="VardenisPavardenis@pastas.lt" />
									</div>
								</div>
								
							</div>
							
						</div>
					
					</div>
					
					
					
					
					
					
					
					
					<div class="form-section">
						
						<h2 class="form-section-title">Vaikas</h2>

						<div>
							
							<div class="form-group">
							
								<label for="">Vardas Pavardė</label>

								<div class="row">
									<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
										<input type="text" class="form-control" value="Vardenė Paverdenytė" />
									</div>
								</div>
								
							</div>
							
							<div class="form-group">
								
								<label for="">Vaiko asmens kodas</label>
				
								<div class="form-value">
									<span class="text-primary">61201010000</span>
								</div>
								
							</div>
							
						</div>
					
					</div>
					
					
					
					
					
					
					
					<div class="form-section">
						
						<h2 class="form-section-title">Įstaigos pasirinkimas</h2>

			
						<div class="form-group">
							
							<label for="">Data, nuo kada vaikas lankys įstaigą</label>
		
							<div class="row">
							
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
									
									<input type="text" class="datepicker form-control" value="2018-08-01" />
									
									<script>
										
										$(document).ready(function(){
											
											$('.datepicker').datepicker();
										
										});
										
									</script>
									
								</div>
								
							</div>
				
						</div>
						

			
						<div class="form-group has-error">
							
							<label for="">Data, nuo kada vaikas lankys įstaigą</label>
		
							<div class="row">
							
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
									
									<input type="text" class="datepicker form-control" value="2018-08-01" />
									
									<script>
										
										$(document).ready(function(){
											
											$('.datepicker').datepicker();
										
										});
										
									</script>
									
								</div>
								
								<div class="col-xs-12 col-sm-5 col-md-6 col-lg-7">
									
									<div class="form-control-message">
										<span class="text-danger small"><i class="fa fa-exclamation-triangle"></i> Neteisingai pasirinkta data</span>
									</div>
									
								</div>
								
							</div>
				
						</div>
						
						
							
						<div class="form-group">
							
							<label for="">Pirmas pasirinkimas</label>

							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
							
									<select class="form-control">
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
									</select>
									
								</div>
							</div>
					
						</div>
						
							
							
							
						<div class="form-group">
							
							<label>Pageidauju, kad lankytų grupę:</label>
			
							<div class="checkbox-group">
								
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox1" value="option1"> lopšelio
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox2" value="option2"> darželio
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox3" value="option3"> priešmokyklinio ugdymo
								</label>
								
							</div>
							
						</div>
						
						
						
						
						
						<div class="form-group">
							
							<label for="">Antras pasirinkimas</label>
			
							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
									<select class="form-control">
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
										<option>Lopšelis-darželis Mažylis</option>
									</select>
								</div>
							</div>

						</div>
						
						
						
						
							
						<div class="form-group">
							
							<label>Pageidauju, kad lankytų grupę:</label>
				
							<div class="checkbox-group">
								
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox1" value="option1"> lopšelio
								</label>
								
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox2" value="option2"> darželio
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox3" value="option3"> priešmokyklinio ugdymo
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox3" value="option3"> darbuotojų vaikams
								</label>
								
							</div>
							
						</div>
							
		
					
					</div>
					
					
					
					
					<div class="form-section">
						
						
						<h2 class="form-section-title form-section-title-collapsable">							
							<button class="collapse-btn" type="button" data-toggle="collapse" data-target="#pirmenybesDokumentai" aria-expanded="false" aria-controls="pirmenybesDokumentai"><i class="fa fa-minus"></i><i class="fa fa-plus"></i></button>
							<span>Dokumentai, suteikiantys pirmenybę</span>
						</h2>

						
						<div class="collapse" id="pirmenybesDokumentai">
							
							<p class="checkbox checkbox-group-title">
								<label><input type="checkbox" value="">
									<span>Vaikas auga šeimoje įrašytoje į socialinės rizikos šeimų apskaitą ir jo tėvai (globėjai) yra piniginės socialinės paramos gavėjai pagal Piniginės socialinės paramos nepasiturintiems gyventojams įstatymą. Pateikiu (pažymėti):</span>
								</label>
							</p>

							<div class="checkbox-group checkbox-group-indent">
								
								<div class="checkbox">
									<label>
										<input type="checkbox" id="inlineCheckbox1" value="option1"> <span>Vaiko teisių apsaugos skyriaus pažymą</span>
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" id="inlineCheckbox1" value="option1"> <span>Socialinės paramos skyriaus pažymą</span>
									</label>
								</div>

							</div>
							
		
							<p class="checkbox checkbox-group-title">
								<label><input type="checkbox" value="">
									<span>Vaikui nustatytas neįgalumas. Pateikiu (pažymėti):</span>
								</label>
							</p>

							<div class="checkbox-group checkbox-group-indent">
							
								<div class="checkbox">
									<label>
										<input type="checkbox" id="inlineCheckbox1" value="option1"> <span>Neįgalumo lygio pažymą</span>
									</label>
								</div>


								<div class="checkbox">
									<label>
										<input type="checkbox" id="inlineCheckbox1" value="option1"> <span>Pedagoginės psichologinės tarnybos pažymą dėl specialiųjų poreikių įvertinimo</span>
									</label>
								</div>

							</div>
							
							
							<p class="checkbox checkbox-group-title">
								<label><input type="checkbox" value="">
									<span>Vaikas, kurių tėvai yra netekę 60-100 procentų darbingumo. Pateikiu (pažymėti):</span>
								</label>
							</p>
							
							<div class="checkbox-group checkbox-group-indent">
							
								<div class="checkbox">
									<label>
										<input type="checkbox" id="inlineCheckbox1" value="option1"> <span>Tėvo (globėjo) neįgalumo ir darbingumo nustatymo tarnybos pažymą</span>
									</label>
									<span class="selected-file text-nowrap"><span>Failo_pavadinimas.pdf</span> <i title="Pašalinti dokumentą" class="fa fa-times text-danger" aria-hidden="true"></i></span>
								</div>
								
								<div class="checkbox">
									<label>
										<input type="checkbox" id="inlineCheckbox1" value="option1"> <span>Motinos (globėjos) neįgalumo ir darbingumo nustatymo tarnybos pažymą.</span>
									</label>
									<button class="btn btn-xs btn-primary btn-upload"><i class="fa fa-upload" aria-hidden="true"></i> Įkelti dokumentą</button>
								</div>
							
							</div>
						
						</div>
					
					</div>
					
					
					
					
					
					
					
					
					
					
					<div class="form-section">
						
						<h2 class="form-section-title">Informacijos gavimas</h2>

						<p>Priėmus vaiką į įstaigą pageidauju gauti pranešimą apie skirtą vietą švietimo įstaigoje:</p>
					
						<div class="radio-group">
						
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									Elektroniniu laišku
								</label>
							</div>
	
							<div class="radio disabled">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
									Trumpąja žinute (SMS)
								</label>
							</div>
							
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									Paštu
								</label>
							</div>

						</div>
					
					</div>
					
					
					
					
					
					
					
					<div class="form-section">
						
						<h2 class="form-section-title">Patvirtinimas</h2>

						<div class="checkbox">
							<label>
							<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							Tėvai (globėjai), gavę pranešimą apie skirtą vietą Švietimo įstaigoje, per 10 kalendorinių darbo dienų patvirtina apie vaiko atvykimą, pasirašydami sutartį arba pateikia prašymą dėl Švietimo įstaigos lankymo datos nukėlimo.
							</label>
						</div>
						
						<div class="checkbox">
							<label>
							<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							Nepasirašius sutarties, nepranešus apie neatvykimą pateisinančias priežastis ir nepateikus reikiamų dokumentų iki rugsėjo 1 d. sutartis nesudaroma – vaikas netenka vietos švietimo įstaigoje. Vaiko vieta priimamų vaikų sąraše ir laukiančių vaikų sąrašuose neišsaugoma.
							</label>
						</div>
						
						<div class="checkbox">
							<label>
							<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" >
							Sudarius sutartį ir vaiką priėmus į pirmą pageidaujamą įstaigą (I pasirinkimą), vaikas automatiškai bus išbraukiamas iš antros pageidaujamos įstaigos (II pasirinkimo) pageidaujančių lankyti vaikų sąrašo.
							</label>
						</div>
						
						<div class="checkbox">
							<label>
							<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" >
							Sutinku, kad mano duomenys būtų tvarkomi Lietuvos Respublikos teisės aktų nustatyta tvarka.
							</label>
						</div>
							
					</div>
					
	
					
					
					
					<div class="form-buttons">
					
						<button class="btn btn-success btn-wider">Pateikti prašymą</button>
						
						<button class="btn btn-default"><i class="fa fa-times"></i> Atšaukti</button>
					
					</div>
					
					
					
				</form>
				
			
				
				<div class="alert alert-info" role="alert">
				
					<div class="trow">
					
						<div class="trow-min">
						
							<i class="fa fa-check alert-fa"></i>
						
						</div>
						
						<div>
							
							Jūsų prašymas sėkmingai išsaugotas. Priėmus vaiką į įstaigą inforuosime Jūsų pasirinktu būdu.
							
						</div>
					
					</div>
					
					<div class="alert-splitter"></div>
					
					<div class="text-center">

						<i class="fa fa-print larger"></i> <a class="small" href="#">Spausdinti užpildytą prašymą</a>

					</div>
				
				</div>
				
				
				
				
				<div class="alert alert-danger" role="alert">
				
					<div class="trow">
					
						<div class="trow-min">
						
							<i class="fa fa-exclamation-triangle alert-fa"></i>
						
						</div>
						
						<div>
							
							Neteisingai užpildėte pažymėtus laukus. Prašome pataisyti ir bandyti dar kartą.
							
						</div>
					
					</div>
				
				</div>
			

			
			
				
			</article>
			
		</div>
		
	
	</div>
	
</main>