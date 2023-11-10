<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function images()
    {
        return response()->json([
            [
                'nume' => 'Imagine 1',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'rating' => '4.9',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+1'
            ],
            [
                'nume' => 'Imagine 2',
                'text' => 'Donec faucibus tellus eu elit pretium ultricies.',
                'rating' => '3.7',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+2'
            ],
            [
                'nume' => 'Imagine 3',
                'text' => 'Praesent pulvinar turpis ac placerat pretium.',
                'rating' => '4.5',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+3'
            ],
            [
                'nume' => 'Imagine 4',
                'text' => 'Integer sagittis velit et mi tempus condimentum.',
                'rating' => '2.6',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+4'
            ],
            [
                'nume' => 'Imagine 5',
                'text' => 'Aenean fermentum odio sit amet elit varius, sed imperdiet erat suscipit.',
                'rating' => '3.2',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+5'
            ],
            [
                'nume' => 'Imagine 6',
                'text' => 'Sed tempor dolor nec blandit posuere.',
                'rating' => '4.1',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+6'
            ],
            [
                'nume' => 'Imagine 7',
                'text' => 'Fusce iaculis leo at ipsum vulputate, eu feugiat nisl sagittis.',
                'rating' => '1.7',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+7'
            ],
            [
                'nume' => 'Imagine 8',
                'text' => 'Ut rutrum mi vel purus vestibulum, sit amet ornare leo fringilla.',
                'rating' => '3.8',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+8'
            ],
            [
                'nume' => 'Imagine 9',
                'text' => 'Cras gravida ligula sit amet ligula consectetur, nec tincidunt justo convallis.',
                'rating' => '4.4',
                'imagine' => 'https://via.placeholder.com/300?text=Imagine+9'
            ]
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nume' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'telefon' => ['required','string','min:8','max:12'],
            'mesaj' => ['required','string','max:255'],
            'termeni' => ['required','boolean'],
        ]);
        if ($validator->fails()) {
            return response()->json([
                'data' => [
                    'message' => 'Unul sau mai multe campuri sunt gresite.',
                    'errors' => $validator->errors()
                ],
            ], 422);
        }

        $contact = new Contact;

        $contact->nume = $request->nume;
        $contact->email = $request->email;
        $contact->telefon = $request->telefon;
        $contact->mesaj = $request->mesaj;
        $contact->termeni = $request->termeni;

        $contact->save();

        return response()->json([
            'data' => [
                'message' => 'Mesajul a fost trimis cu succes.'
            ]
        ], 201);
    }
}
