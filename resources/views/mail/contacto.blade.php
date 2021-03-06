<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Grupo Axial - Contacto</title>
	<style>
		body{
			--color-uno: rgb(0, 69, 125);
			--color-dos: #55c9d8;
			--color-tres: rgb(148, 149, 142);
			--color-cuatro: #231F20;
			--color-cinco: #dddddd;
			--color-fondo: linear-gradient(to top, #efefef 0%, #f5f8f9b5 75%, #e7e8e9 100%);
		}

		table{
			max-width: 600px;
			padding: 10px;
			margin: 0 auto;
			border-collapse: collapse;
		}

		td{
			background-color: var(--color-fondo);
		}

		td > div{
			color: #34495e;
			margin: 4% 10% 2% 10%;
			text-align: justify;
			font-family: sans-serif;
		}

		h2{
			color: var(--color-uno);
			margin:0 0 7px;
			text-align: center !important;
		}

		ul{
			font-size: 15px;
			margin: 10px 0;
		}

		.dates{
			margin: 2px;
			font-size: 15px;
			min-height: 100px;
			background-color: #fff;
			padding: 1rem;
			margin-bottom: 1.5rem;
		}

		.dates p{
			flex-basis: 100%;
			font-size: 1.5rem;
    		margin-top: 0;
			text-align: center;
		}

		.dates > div{
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-wrap: wrap;
		}

		.dates > div > div{
			flex-basis: calc(50% - 2.5px);
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}

		.dates .separador{
			position: relative;
			height: 25px;
			flex-basis: 5px;
			background: var(--color-uno);
			border-radius: 10px;
			display: block;
			transform: translateY(-80%);
		}

		.dates .separador::before{
			position: absolute;
			content: "";
			height: 50%;
			width: 100%;
			top: 105%;
			left: 0;
			background: var(--color-uno);
			border-radius: 10px;
		}

		.dates .separador::after{
			position: absolute;
			content: "";
			height: 100%;
			width: 100%;
			top: 160%;
			left: 0;
			background: var(--color-uno);
			border-radius: 10px;
		}

		.dates div span{
			flex-basis: 100%;
			text-align: center;
		}

		.dates div .day{
			flex-basis: 100%;
			text-align: center;
    		font-size: 4rem;
		}

		.dates div .text{
			flex-basis: 100%;
			display: flex;
			justify-content: center;
		}

		.dates div .text .month,
		.dates div .text .year{
			flex-basis: fit-content;
		}

		.dates div .text .month{
			margin-right: 1rem;
		}

		.return{
			width: 100%;
			text-align: center;
		}

		.return a{
			text-decoration: none;
			border-radius: 5px;
			padding: 11px 23px;
			color: #fff;
			transition: 500ms;
			background-color: var(--color-uno);
		}

		.return a:hover{
			background-color: var(--color-cuatro);
		}

		.copyright{
			color: #fff;
			font-size: 1.1rem;
			text-align: center;
			margin: 30px 0 0 0;
			padding: 1rem;
			background-color: var(--color-cuatro);
		}
	</style>
</head>
<body>
<table>
	<tr>
		<td>
			<div>
				<h2 class="text-center">Grupo Axial contacto web</h2>

				<ul>
					@if(isset($data->nombre))
						<li><strong>Se ha contactado:</strong> {{ $data->nombre }}</li>
					@else
						<li><strong>Se ha contactado:</strong> alguien, sin dejar su nombre</li>
					@endif
					<li><strong>Email:</strong> {{ $data->correo }}</li>
					<li><strong>Telefono:</strong>  {{ $data->telefono }}</li>
				</ul>
				
				<div class="dates">
					<p>{{$data->mensaje}}</p>
				</div>

				<div class="return">
					<a target="_blank" href="URL">Ir a la página</a>
				</div>
				
				<p class="copyright">© Digitalo: <a style="color: white; text-decoration: none;" target="_blank" href="https://www.digitalo.com.ar/"> www.digitalo.com.ar</a></p>
			</div>
		</td>
	</tr>
</table>
</body>
</html>