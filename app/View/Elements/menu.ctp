	<!--SLIDER-->
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
	<!--SLIDER-->

<div class="menu">
			<ul>
				<li class="first current"><a href="#">Inicio</a></li>
				<li><a href="blog.html">Pacientes</a></li>
				<li><a href="services.html">Doctores</a></li>
				<li><a href="single.html">Historia</a></li>
				
			</ul>
		</div>
		
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Pacientes</option>
				<option value="blog.html">Doctores</option>
				<option value="services.html">Historia</option>
				
			</select>
		</div>