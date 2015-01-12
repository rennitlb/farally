@extends('layouts.main')

@section('content')
<h3>Find Your Travel Buddy</h3>
{{ Form::open(array('url'=>'/s')) }}
{{ Form::text('location-search', null, array('placeholder'=>'search by destination', 'id'=>'location-search')) }}
<ul class="filter">
	<li>
		{{ Form::label('start-destination', 'Start:') }}
		{{ Form::text('start-destination') }}
	</li>
	<li>
		{{ Form::label('start_date', 'From:') }}
		{{Form::input('date','start_date')}}
	</li>
	<li>
		{{ Form::label('end_date', 'To:') }}
		{{Form::input('date','end_date')}}
	</li>
	<li>
		{{ Form::label('max_travellers', 'Max Travellers:') }}
		{{ Form::number('max_travellers') }}

	</li>
</ul>
{{ Form::submit('search')}}
{{ Form::close() }}
@if(count($searchResults))
<ul class="list">
	@foreach ($searchResults as $result)
	<li class="list_item">
		<a href="trips/{{{ $result->id }}}">
			<h3 class="list_item_title">{{{ $result->title }}} by {{{ $result->username }}}</h3>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, velit alias praesentium veritatis! Possimus cumque, sed assumenda amet eos ipsam molestias? Doloribus deserunt et sequi illum at iusto odit, deleniti.</p>
		</a>
	</li>
	@endforeach
</ul>
@endif

@stop

