@extends('layout/template') 
@section('content')
	<h1>Teste</h1>
	<ul>
		@if (1 == 1)
			@for ($i = 0; $i < 10; $i++)
				<li> Item - {{ $i }} </li>
			@endfor
		@else
			<h3>Não há itens!</h3>
		@endif
	</ul>
@endsection