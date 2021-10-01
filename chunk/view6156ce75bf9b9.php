<!-- load head app -->

 <?php $this->temp('head'); ?> 

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
					<h1>Indowebs</h1>
					<p>Easy learn coding</p>
				</div>

				<form action="" class="mt-5" enctype="multypart/form-data" method="post">
					<div class="container-search-control text-center">
						<input type="" class="form-control" name="" placeholder="search what do you want about programing and etch">
						<button class="btn btn-primary"><i class="fas fa-search"></i></button>
					</div>
				</form>


				<?php


				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				    $_SESSION['postdata'] = $_POST;
				    unset($_POST);
				    header("Location: ".$_SERVER['PHP_SELF']);
				    exit;
				}
				?>


				<!-- load card info -->

				 <?php $this->temp('cardinfo'); ?> 

				<!-- load sosmed view -->

				 <?php $this->temp('sosmed'); ?> 

			</div>
		</div>
	</div>

<!-- load footer  -->

 <?php $this->temp('foo'); ?> 