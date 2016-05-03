<main class="site-main">

	<?php include('templates/components/site-hero.php'); ?>
	
	<div class="container">
		
		<?php include('templates/components/site-breadcrumb.php'); ?>
		
		<div class="row">
			
			<aside class="hidden-xs col-sm-4 col-md-4 col-lg-3 site-aside">
				
				<?php include('templates/components/site-aside-nav.php'); ?>
				
			</aside>
			
			<article class="col-xs-12 col-sm-8 col-md-8 cold-lg-9 site-article">
			
				
				
				<h1 class="page-title">Mano vaikai eilėje</h1>


				<div class="table-container table-container-responsive">
				<div class="table-container-responsive-scroll">
					
						<table class="table-grid">
						
							<thead>
								<tr>
									<th>Vaikas</th>
									<th class="text-center">Prašymo užregistravimo<br />data, laikas</th>
									<th>Įstaigos pavadinimas</th>
									<th>Taikomas prioritetas</th>
									<th class="th-min text-center">Peržiūrėti/ spausdinti</th>
									<th class="th-min text-center">Papildyti prašymą</th>
									<th class="th-min text-center">Anuliuoti prašymą</th>
								</tr>
							</thead>
							
							<tbody>
								
								<?php for ($i = 1; $i < 8; $i++) { ?>
								
								<tr>
									<td><span class="small">Vaikas Vaikelis</span></td>
									<td class="text-center"><span class="small">2016-02-12<br />10:35</span></td>
									<td><span class="small">Lopšelis darželis "Mažylis"</span></td>
									<td><span class="small">Taikomas: vaikams iš šeimų, kur tėvai augina tris ir daugiau vaikų iki 7 metų</span></td>
									<td class="text-center"><a href="/"><i class="fa fa-search icon-table"></i></a></td>
									<td class="text-center"><a href="/"><i class="fa fa-pencil-square-o icon-table"></i></td>
									<td class="text-center"><a href="/"><i class="fa fa-trash-o icon-table"></i></a></td>
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