<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiSiamoController extends Controller
{
    private $arrayPeople = [
        [
            'name' => 'Luca',
            'surname' => 'Rossi',
            'age' => 28,
            'detail' => 'Ingegnere informatico presso una startup tecnologica, specializzato nello sviluppo di applicazioni web.'
        ],
        [
            'name' => 'Maria',
            'surname' => 'Bianchi',
            'age' => 34,
            'detail' => 'Manager delle risorse umane in una multinazionale, esperta nella gestione e sviluppo del personale.'
        ],
        [
            'name' => 'Giovanni',
            'surname' => 'Verdi',
            'age' => 45,
            'detail' => 'Architetto con uno studio indipendente, focalizzato su progetti sostenibili ed eco-friendly.'
        ],
        [
            'name' => 'Sara',
            'surname' => 'Neri',
            'age' => 22,
            'detail' => 'Graphic designer freelance, con una passione per il design minimalista e branding creativo.'
        ]
    ];

    public function chiSiamo()
    {
        return view("person.chiSiamo", ['People' => $this->arrayPeople]);
    }

    public function dettaglio($detail)
    {
        foreach ($this->arrayPeople as $person) {
            if ($detail === $person['detail']) {
                return view('person.dettaglioPerson', ['person' => $person]);
            }
        }

        return redirect()->route('chiSiamo'); // Redirect in caso di dettaglio non trovato
    }
}
