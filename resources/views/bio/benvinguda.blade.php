@extends('layouts.master')

@section('content')

        <div class="bg-dark text-white text-center py-5" style= "background-size: cover; background-position: center">
            <div class="container">
                <h1>Benvinguts</h1>
                <p>Descobreix el ritme natural de la teva vida amb el càlcul dels teus bioritmes!</p>
                <p>Fes el primer pas cap a una vida més equilibrada i conscient. Calcula els teus bioritmes avui i descobreix com alinear-te amb els teus cicles naturals per a viure plenament!</p>
            <div class="text-center">
                <a href="{{ route('form') }}" class="btn btn-custom" id="enviar">Comença</a>
            </div>
            </div>
        </div>
        <div>
            <div class="container">
                <h1>Què són els Bioritmes?</h1>
                <p>Els bioritmes són cicles biològics que influeixen en diferents aspectes de la nostra vida. Hi ha tres cicles principals:</p>
                <p><strong>Físic:</strong> Afecta la teva força, coordinació, benestar físic i resistència.</p>
                <p><strong>Emocional:</strong> Influeix en el teu estat d'ànim, creativitat, percepció i sentiments.</p>
                <p><strong>Intel·lectual:</strong> Impacta la teva capacitat d'aprenentatge, pensament lògic, memòria i alerta mental.</p>

                <h1>Com Funciona?</h1>
                <p>És molt senzill. Només necessites ingressar el teu nom i data de naixement, i el nostre avançat algorisme calcularà els teus bioritmes per a oferir-te una anàlisi detallada. Això et permetrà:</p>
                <p><strong>Planificar millor el teu dia:</strong> Coneix els teus dies de major energia física per a realitzar activitats que requereixen esforç.</p>
                <p><strong>Gestionar les teves emocions:</strong> Comprèn els teus estats emocionals per a millorar les teves relacions personals i professionals.</p>
                <p><strong>Optimitzar el teu rendiment intel·lectual:</strong> Identifica els millors moments per a l'aprenentatge i tasques que requereixen concentració.</p>
            </div>
        </div>

@endsection