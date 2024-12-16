<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'countClassRows' => 5,
        'classMembers' => [
            [
                'name' => 'Abrudan Darius',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Alexe Matei',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Burlea Iustina',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Chelu Tudor',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Ciule Ioan',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Cretu Augustin',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'David Raluca',
                'icon' => 'fa-solid fa-leaf'
            ],
            [
                'name' => 'Derece Amelie',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Dinca Tudor',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Dinca Lavinia',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Dobre David',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Dragulescu Estera',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Emamgholivand Saman',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Georgescu Filip',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Ilie Ioan',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Ilie Luca',
                'icon' => 'fa-solid fa-burger'
            ],
            [
                'name' => 'Ionescu Cosmin',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Lebbos Samia',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Moraru Mara',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Pavel Matei',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Sandu Tiberiu',
                'icon' => 'fa-solid fa-hockey-puck'
            ],
            [
                'name' => 'Stanila Alexandru',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Stoinescu Antonia',
                'icon' => 'fa-solid fa-user'
            ],
            [
                'name' => 'Teodorescu Raisa',
                'icon' => 'fa-solid fa-user'
            ],
//            [
//                'name' => 'Raisa',
//                'icon' => 'fa-solid fa-child'
//            ],
//            [
//                'name' => 'Tudor',
//                'icon' => 'fa-solid fa-feather'
//            ],
//            [
//                'name' => 'Amelie',
//                'icon' => 'fa-solid fa-bomb'
//            ],
        ],
        'classTeachers' => [
            [
                'suffix' => 'Dna.',
                'name' => 'Pricop Nicoleta',
                'discipline' => 'Limba engleza'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Rucareanu Alexandra',
                'discipline' => 'Limba si literatura romana'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Alexandru Elena',
                'discipline' => 'Limba franceza'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Tron Alina',
                'discipline' => 'Matematica'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Teodoru Marinela',
                'discipline' => 'Fizica'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Moreanu Gabriela',
                'discipline' => 'Biologie'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Sfetcu Catalina',
                'discipline' => 'Educatie sociala'
            ],
            [
                'suffix' => 'Dl',
                'name' => 'Vasile Marian',
                'discipline' => 'Istorie'
            ],
            [
                'suffix' => 'Dl',
                'name' => 'Cengher Mihai',
                'discipline' => 'Geografie'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Trif Letitia',
                'discipline' => 'Religie'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Gheorghe Larisa',
                'discipline' => 'Educatie muzicala'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Dedu Lacramioara',
                'discipline' => 'Educatie plastica'
            ],
            [
                'suffix' => 'Dl',
                'name' => 'Triculescu Gabriel',
                'discipline' => 'Educatie fizica si sport'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Farcas Marina',
                'discipline' => 'Educatie tehnologica'
            ],
            [
                'suffix' => 'Dna',
                'name' => 'Marinescu Tatiana',
                'discipline' => 'TIC'
            ],
        ],
    ]);
});
