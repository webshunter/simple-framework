<div class="row d-flex justify-content-center">
	<div class="col-lg-4 col-sm-6 col-12 text-center">
		<div class="panel-app-menu">

			{!
				$appMenu = (object) [
					"fab fa-github" => (object) [
						"color" => "#333"
					],
					"fab fa-whatsapp" => (object) [
						"color" => "green"
					],
					"fab fa-instagram" => (object) [
						"color" => "#99d"
					]
				];

			!}

			{-- foreach($appMenu as $icon => $menu) : --}
				<a href=""><i style="font-size: 16pt; color: {{$menu->color}};" class="{{$icon}}"></i></a>
			{-- endforeach --}

		</div>
	</div>
</div>
<div class="container footer text-center p-md-3">
	&copy; Copyright by indowebs on 2021
</div>