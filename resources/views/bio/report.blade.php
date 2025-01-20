@extends('layouts.master')

@section('content')
<div class="bg-dark text-white text-center py-5" style="background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="text-center">Taula de continguts JSON</h1>
        <p>Aquest són tots els resultats tabulats en JSON</p>
        <p>Si vols pots tornar al inici</p>
        <div class="text-center">
            <a href="/" class="btn btn-custom" id="veure">Inici</a>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="text-center">Nom</th>
                    <th scope="col" class="text-center">Data de naixement</th>
                    <th scope="col" class="text-center">Físic</th>
                    <th scope="col" class="text-center">Emotiu</th>
                    <th scope="col" class="text-center">Intel·lectual</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datosJson as $datoJson)
                    <tr>
                        <td class="text-center">{{ $datoJson["nom"] }}</td>
                        <td class="text-center">{{ $datoJson["dataNaixement"] }}</td>
                        <td class="text-center">{{ $datoJson["fisicResultat"] }}%</td>
                        <td class="text-center">{{ $datoJson["emotiuResultat"] }}%</td>
                        <td class="text-center">{{ $datoJson["intelectualResultat"] }}%</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-danger">L'array de dades està buit</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection