@extends('layouts.app')

@section('content')
    @foreach ($trains as $train)
        <div>
            <div>{{ $train->azienda }}</div>
        </div>
    @endforeach
@endsection