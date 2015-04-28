<div id="main_head">
	<?php
		$nomeProjeto = nomeProjeto(); 
		echo criaHeaderContainer("Seja muito bem vindo ao {$nomeProjeto}");
	?>
	<div id="carousel-example-generic" class="carousel slide banner"
		data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0"
				class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			<li data-target="#carousel-example-generic" data-slide-to="5"></li>
			<li data-target="#carousel-example-generic" data-slide-to="6"></li>
			<li data-target="#carousel-example-generic" data-slide-to="7"></li>
			<li data-target="#carousel-example-generic" data-slide-to="8"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?= base_url("img/banner/banner.png")?>" class="img-responsive"
					alt="1">
				<div class="carousel-caption">...</div>
			</div>
			<div class="item">
				<img src="<?= base_url("img/banner/1.jpg")?>" class="img-responsive"
					alt="2">
			</div>
			<div class="item">
				<img src="<?= base_url("img/banner/2.jpg")?>" class="img-responsive"
					alt="3">
			</div>
			<div class="item">
				<img src="<?= base_url("img/banner/3.jpg")?>" class="img-responsive"
					alt="4">
			</div>
			<div class="item">
				<img src="<?= base_url("img/banner/4.jpg")?>" class="img-responsive"
					alt="5">
			</div>
			<div class="item">
				<img src="<?= base_url("img/banner/5.jpg")?>" class="img-responsive"
					alt="6">
			</div>
			<div class="item">
				<img src="<?= base_url("img/banner/6.jpg")?>" class="img-responsive"
					alt="7">
			</div>
			<div class="item">
				<img src="<?= base_url("img/banner/7.jpg")?>" class="img-responsive"
					alt="8">
			</div>
			<div class="item">
				<img src="<?= base_url("img/banner/8.jpg")?>" class="img-responsive"
					alt="9">
			</div>
		</div>

		<a class="left carousel-control" href="#carousel-example-generic"
			role="button" data-slide="prev"> <span
			class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
			class="sr-only">Previous</span>
		</a> <a class="right carousel-control"
			href="#carousel-example-generic" role="button" data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>