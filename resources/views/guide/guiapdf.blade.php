<!DOCTYPE html>
{{-- titulo da página --}}
@section('title', 'Guia do Usuário PDF')
{{-- FIM titulo da página --}}
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name') }} - @yield('title')</title>
	<link rel="stylesheet" href="pdf/app.css">
	
	<style>
		*{
			text-shadow:none !important;
			filter:none !important;
			-ms-filter:none !important;
			-webkit-print-color-adjust: exact;
			-moz-print-color-adjust: exact;
			print-color-adjust: exact;
			box-sizing: border-box;
			/*page-break-after: always;*/
		}
		h1, h2, h3, h4, h5, p{
			text-transform: uppercase;
		}
		p{
			font-size: 7pt;
			margin: 1pt 10pt 0 10pt;

			

		}
		.container-professional{
			/*background: aqua;*/
			orphans: 4;
			widows: 2;
			/*page-break-after: always;*/  /*faz com que todos os páragrafos comecem em páginas separadas*/
		}

		.professional{

		}
		.container-spcialty{
			padding-left: 20px;
		}
		.city{
			font-size: 10pt;
			margin:0px;
			background: #fcdb18;
		}
		.name{
			margin-bottom: 0pt;
			margin-top: 0pt;
			font-size: 8pt;
		}

		.specialty{
			font-size: 9pt;
			margin-top: 20px;
			margin:0px;
			color: #086ab3;
		}

		.phone{
			border-bottom: 1px solid #ADADAD;
			padding-bottom: 5px;
			font-size: 7pt;
		}
		.city-small{
			display: inline-block;
			padding: 3px;
			font-size: 10px;
		}

		h5{
			margin-left: 15px;
		}

		h4{
			margin: 10pt 0pt 0pt 0pt ;

		}

		h3{
			color: #086ab3 !important;
		}
		h2{
		/*	font-size: 16pt;
			padding: 10pt;
			width: 50%;*/
		}
		h1{
			background-color: #086ab3;
			color: #fff !important;
			padding: 2pt 10px;
			border-bottom: 4pt solid #fcdb18;
			font-size: 14pt;
		}


	</style>
	<!-- Scripts -->
	<script>
		window.Laravel = <?php echo json_encode([
		                                        'csrfToken' => csrf_token(),
		                                        ]); ?>
		                                    </script>
		                                    {{-- Fontes Adobe TypeKit --}}
		                                </head>
		                                <body>
		                                	@foreach($registereds as $registered)
		                                	<h1>{{$registered->name}}</h1>
		                                	@foreach($registered->cities as $city)
		                                	<h3 class="city">{{$city->name}} - {{$registered->uf}}</h3>
		                                	@foreach($city->specialties as $specialty)
		                                	<div class="container-spcialty">
		                                		<h4 class="specialty">{{$specialty->name}}</h4>

		                                		@foreach($specialty->professionals as $professional)
		                                		<div class="container-professional">
		                                			{{-- Name e Pronome --}}
		                                			<h5 class="name">
		                                				
		                                				@if(!empty($professional->pt))
		                                				
		                                				{{$professional->pt.'. '}}
		                                				
		                                				@endif
		                                				{{$professional->name}}
		                                			</h5>
		                                			{{-- Registro Profissional --}}
		                                			<p class="register">
		                                				
		                                				@if(!empty($professional->register))
		                                				
		                                				{{$professional->register}}
		                                				
		                                				@endif

		                                			</p>

		                                			{{-- Área de atuação/atendimento --}}
		                                		</h5>
		                                		<p class="metts">
		                                			
		                                			@if(!empty($professional->metts))
		                                			
		                                			{{$professional->metts}}
		                                			
		                                			@endif

		                                		</p>
		                                		{{-- Endereço --}}

		                                		@foreach($professional->addresses as $address)

		                                		@if(!empty($address->address))
		                                		
		                                		<p class="address">
		                                			
		                                			@if($address->clinic)
		                                			{{$address->clinic}}<br>
		                                			@endif
		                                			@if(!empty($address->thoroughfare))
		                                			@if(title_case($address->thoroughfare) == 'Rua')
		                                			{{ $address->thoroughfare.' '.$address->address.' - '.$address->district}}
		                                			@else
		                                			{{ $address->thoroughfare.'. '.$address->address.' - '.$address->district}}

		                                			@endif
		                                			@else
		                                			@if(title_case($address->thoroughfare) == 'Rua')
		                                			{{ $address->thoroughfare.' '.$address->address.' - '.$address->district}}
		                                			@else
		                                			{{ $address->thoroughfare.'. '.$address->address.' - '.$address->district}}

		                                			@endif
		                                			@endif

		                                			@if($address->complement)
		                                			{{ ' - '. $address->complement}}
		                                			@endif
		                                		</p>

		                                		
		                                		@endif

		                                		


		                                		@endforeach
		                                		{{-- Telefones --}}
		                                		<p class="phone">
		                                			
		                                			@foreach($professional->phones as $phone)
		                                			@if(!empty($phone->number))
		                                			{{$phone->ddd.'.'}} {{$phone->number}}

		                                			{{-- Verifica se deve ou não colocar o '|' --}}
		                                			@if(!$loop->last)
		                                			| 
		                                			@else
		                                			
		                                			@endif

		                                			
		                                			@endif
		                                			@endforeach
		                                		</p>
		                                		{{-- Fim  --}}
		                                	</div>{{-- FIm container Professional --}}
		                                	@endforeach
		                                </div>	{{-- FIm container especialidade --}}
		                                @endforeach

		                                @endforeach

		                                @endforeach

{{-- 	<table>
		<thead>
			<tr>
				<th>Estado</th>
				<th>Cidade</th>
				<th>Especialidade</th>
				<th>Nome</th>
				<th>Endereço</th>
				<th>Telefone</th>
			</tr>
		</thead>
		<tbody>
		@foreach($registereds as $registered)
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>{{$registered->name}}</td>
				<td></td>
				<td></td>
			</tr>
		@endforeach
		</tbody>
	</table> --}}


</body>
</html>

