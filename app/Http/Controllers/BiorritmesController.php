<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class BiorritmesController extends Controller
{
    public function mostrarForm(){
        return view("bio.form");
    }

    public function mostraResultats(Request $request){
        $nom = $request->input("nom");
        $dataNaixement = $request->input("dataNaixement");
        
        $dn = Carbon::parse($dataNaixement);
        $da = Carbon::now();
        $dies = $dn->diffInDays($da);

        // Càlculs de biorritmes
        $fisic = sin(2 * pi() * $dies / 23);
        $emotiu = sin(2 * pi() * $dies / 28);
        $intelectual = sin(2 * pi() * $dies / 33);

        // Resultats
        $fisicResultat = number_format(($fisic + 1) * 50, 2);
        $emotiuResultat = number_format(($emotiu + 1) * 50, 2);
        $intelectualResultat = number_format(($intelectual + 1) * 50, 2);

        $dadesFormulari = [
            "nom" => $nom,
            "dataNaixement" => $dataNaixement,
            "fisicResultat" => $fisicResultat,
            "emotiuResultat" => $emotiuResultat,
            "intelectualResultat" => $intelectualResultat
        ];

        $this->guardarJSON($dadesFormulari);

        return view("bio.result", [
            "nom" => $nom,
            "dataNaixement" => $dataNaixement,
            "fisic" => $fisic,
            "emotiu" => $emotiu,
            "intelectual" => $intelectual,
            "fisicResultat" => $fisicResultat,
            "emotiuResultat" => $emotiuResultat,
            "intelectualResultat" => $intelectualResultat
        ]);
    }

    public function guardarJSON($dadesFormulari)
    {
        $nomArxiuJson = 'arxiu.json';

        if (Storage::disk('local')->exists($nomArxiuJson)) {
            $json = Storage::disk('local')->get($nomArxiuJson);
            $jsonData = json_decode($json, true);
            $jsonData[] = $dadesFormulari;
            Storage::disk('local')->put($nomArxiuJson, json_encode($jsonData, JSON_PRETTY_PRINT));
        } else {
            $arxiuJson = json_encode([$dadesFormulari], JSON_PRETTY_PRINT);
            Storage::disk('local')->put($nomArxiuJson, $arxiuJson);
        }
    }

    public function mostraReport()
    {
        $nomArxiuJson = 'arxiu.json';
        if (Storage::disk('local')->exists($nomArxiuJson)) {
            $json = Storage::disk('local')->get($nomArxiuJson);
            $jsonData = json_decode($json, true);
            return view("bio.report", ["datosJson" => $jsonData]);
        } else {
            return "file not found";
        }
    }
}

