@extends('layouts.app')
@section('main')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($trains as $treno)
                <div class="col py-2">
                    <div class="card text-center">
                        <div class="card-header">
                            PARTENZA: {{$treno['orario_partenza']}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$treno['stazione_partenza']}} - {{$treno['stazione_arrivo']}}</h5>
                            <p class="card-text">{{$treno['azienda']}} -> {{$treno['codice_treno']}}</p>
                            <a href="#" class="btn btn-primary">dettagli treno</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            ARRIVO: {{$treno['orario_arrivo']}}
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </main>
@endsection