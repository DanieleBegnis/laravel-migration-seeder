@extends('layouts.app')

@section('content')
    <h1 class="text-center">I TRENI CHE STANNO PER PARTIRE</h1>
    <div class="row">
        @foreach ($trains as $train)
            {{-- @if (($trains['departing_at']) > '16:00:00') --}}
            <div class="col">
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->azienda }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">To: {{ $train->departing_station }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">From: {{ $train->arriving_station }}</h6>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
        @endforeach
    </div>
@endsection
