@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-2">

            @foreach ($trains as $train)
                <div class="col mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->agency }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $train->train_code }}</h6>
                            <p class="card-text"><span class="font-weight-bold">Partenza:</span> <span class="text-uppercase">
                                    {{ $train->starting_station }}</span>
                                {{ $train->departure_hour }} <br>
                                <span class="font-weight-bold">Arrivo:</span> <span
                                    class="text-uppercase">{{ $train->destination_station }}</span>
                                {{ $train->arrival_hour }}
                            </p>
                            <p class="card-text">
                                Data: <span>{{ date('d-m-Y', strtotime($train->departure_date)) }}</span>
                            </p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
