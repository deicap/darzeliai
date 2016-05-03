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
					
					<h1 class="page-title">Statistinė informacija</h1>

					<div class="form-section form-section-borderless">

						<div class="form-group">
							
							<label for="">Pirmas pasirinkimas</label>

							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
							
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
							
							<label>Pasirinkite Seniuniją:</label>
							
							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
									
									<select class="form-control">
										<option>Kauno seniūnija</option>
										<option>Kauno seniūnija</option>
										<option>Kauno seniūnija</option>
										<option>Kauno seniūnija</option>
									</select>
									
								</div>
							</div>
							
						</div>
						

							
						<div class="form-group">
							
							<label>Pasirinkite Įstaigą:</label>
							
							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
									
									<select class="form-control">
										<option>Darželis "Saulutė"</option>
										<option>Darželis "Saulutė"</option>
										<option>Darželis "Saulutė"</option>
										<option>Darželis "Saulutė"</option>
									</select>
								
								</div>
							</div>
							
						</div>
						

							
						<div class="form-group">
							
							<label>Mokslo metai:</label>
							
							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
							
								<select class="form-control">
									<option>2014/2015</option>
									<option>2014/2015</option>
									<option>2014/2015</option>
									<option>2014/2015</option>
								</select>
								
								</div>
							</div>
							
						</div>
						

							
						<div class="form-group">
							
							<label>Ugdymo programa:</label>
							
							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
							
									<select class="form-control">
										<option>Ikimokyklinio amžiaus</option>
										<option>Ikimokyklinio amžiaus</option>
										<option>Ikimokyklinio amžiaus</option>
										<option>Ikimokyklinio amžiaus</option>
									</select>
									
								</div>
							</div>
							
						</div>
						

					
					</div>
					
					
						
					
					<div class="form-buttons">
					
						<button class="btn btn-success btn-wider">Filtruoti rezultatus</button>
						
						<button class="btn btn-default">Rodyti visus rezultatus</button>
					
					</div>
					
						
				</form>
				

				<div class="line"></div>

				<p>Rasti <strong>687 rezultatai</strong> pagal Jūsų užklausą:</p>

				<div class="table-container table-container-responsive">

					<div class="table-container-responsive-scroll">
						
						
							<table class="table-grid">
							
								<thead>
									<tr>
										<th>Seniūnija</th>
										<th>Įstaiga</th>
										<th>Amž. grupė</th>
										<th>Grupių sk.</th>
										<th>Vietų sk.</th>
										<th>Vaikų sk.</th>
										<th>Spec. poreikių vaikų. sk. šiai dienai</th>
										<th>Laisvų vietų sk.</th>
										<th>Nepatekę vaikai</th>
										<th>Laukiančių vaikų sk.</th>
										<th>Mokslo metai</th>
									</tr>
								</thead>
								
								<tbody>
									
									<?php for ($i = 1; $i < 8; $i++) { ?>
									
									<tr>
										<td>Kauno seniūnija</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
										
									<?php } ?>
									
								</tbody>
								
							</table>
					
						
					</div>
					
				</div>
			
				
			</article>
			
		</div>
		
	
	</div>
	
</main>