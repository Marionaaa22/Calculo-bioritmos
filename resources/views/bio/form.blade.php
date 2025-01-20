@extends('layouts.master')

@section('content')


<div class="bg-dark text-white text-center py-5" style="background-size: cover; background-position: center;">
    <div class="container">
        <div class="text-center mb-4">
            <h1>Definició</h1>
            <p>La naturalesa i tot el que ella comprèn: clima, estacions, reproducció dels animals, collites, etc., 
                es regeixen per cicles biològics o ritmes. Existeixen diferents bioritmes que afecten el nostre 
                comportament en diferents maneres. S'ha comprovat estadísticament que l'energia física es comporta 
                cíclicament en períodes de 23 dies, l'energia emotiva en períodes de 28 dies i l'energia 
                intel·lectual en 33 dies. Al moment de néixer, cada cicle comença des de zero i comença a 
                pujar en una fase positiva, durant la qual les energies i les capacitats són altes.
            </p>
        </div>
    </div>
</div>

<div class="container my-5">
    <h1 class="text-center mb-4">Calcula els teus biorritmes</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form action="resultat" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input name="nom" type="text" class="form-control" id="floatingName" placeholder="Nom" required>
                    <label for="floatingName">Nom:</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="dataNaixement" type="date" class="form-control" id="floatingDob" placeholder="Data de naixement" required>
                    <label for="floatingDob">Data de naixement:</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-custom" id="enviar">Envia</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection