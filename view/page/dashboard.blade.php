<!-- load head app -->

{<head>}

	<div class="flex-container">
		<div class="user-panel">
			<div class="user-foto">
				
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
			<div class="container-search">
				<div class="head-line text-center mb-3">
					<h1>Indowebs <button class="btn btn-primary">Beta</button></h1>
					<p>Easy learn coding</p>
				</div>

				<form id="search-engine" class="mt-5" enctype="multypart/form-data" method="post">
					<div class="container-search-control text-center">
						<input type="" class="form-control" name="" placeholder="search what do you want about programing and etch">
						<button class="btn btn-primary"><i class="fas fa-search"></i></button>
					</div>
				</form>

				<script type="text/javascript">
					
					document.getElementById('search-engine').addEventListener('submit', function(event){

						alert('ok')

						event.preventDefault();

					}, false)

				</script>
				
				<!-- load card info -->

				{<cardinfo>}

				<!-- load sosmed view -->

				{<sosmed>}

			</div>
		</div>
	</div>

<!-- load footer  -->

{<foo>}