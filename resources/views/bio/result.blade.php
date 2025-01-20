@extends('layouts.master')

@section('content')
<div class="bg-dark text-white text-center py-5" style="background-size: cover; background-position: center;">
    <div class="container">
        <h1>Resultats dels teus biorritmes</h1>
        <h2>Hola {{ $nom }}!</h2>
        <h2>Amb la data de naixament obtinguda {{ $dataNaixement }}</h2>
        <p>Aquest són els resultats obtinguts dels teus biorritmes. Si vols pots veure'ls de manera tabulada amb el format JSON.</p>
        <div class="text-center">
            <a href="report" class="btn btn-custom" id="veure">Veure</a>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="mb-4">
        <h2>Fisic: {{ $fisicResultat }}%</h2>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $fisicResultat }}%;" aria-valuenow="{{ $fisicResultat }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <div class="mb-4">
        <h2>Emotiu: {{ $emotiuResultat }}%</h2>
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: {{ $emotiuResultat }}%;" aria-valuenow="{{ $emotiuResultat }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <div class="mb-4">
        <h2>Intel·lectual: {{ $intelectualResultat }}%</h2>
        <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $intelectualResultat }}%;" aria-valuenow="{{ $intelectualResultat }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>
@endsection