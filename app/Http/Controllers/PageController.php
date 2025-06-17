<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static array $flights = [
        [
            'id' => 1,
            'destination' => 'Torino',
            'time' => [
                'departure' => '11:30',
                'arrival' => '15:00',
            ],
            'cover' => "https://st.depositphotos.com/1022597/3251/i/600/depositphotos_32515789-stock-photo-turin-view.jpg"
        ],
        [
            'id' => 2,
            'destination' => 'Roma',
            'time' => [
                'departure' => '09:30',
                'arrival' => '11:00',
            ],
            'cover' => "https://www.fieraroma.it/wp-content/uploads/2022/10/fontana-trevi-roma.jpg"
        ],
        [
            'id' => 3,
            'destination' => 'Napoli',
            'time' => [
                'departure' => '17:30',
                'arrival' => '19:00',
            ],
            'cover' => "https://www.mardeisargassi.it/wp-content/uploads/2018/12/napoli-citt%C3%A0.jpg"
        ],
        [
            'id' => 4,
            'destination' => 'Milano',
            'time' => [
                'departure' => '19:30',
                'arrival' => '23:00',
            ],
            'cover' => "https://i0.wp.com/www.diariodalmondo.com/wp-content/uploads/2021/12/Duomo-di-Milano-diario-dal-mondo.jpg?fit=1250%2C938&ssl=1"
        ],
    ];
    //collegamento all'homepage
    public function homepage()
    {

        return view('homepage', ['flights' => self::$flights]);
    }
    public function flights($id)
    {

        foreach (self::$flights as $flight) {
            if ($id == $flight['id']) {
                return view('detail', ['flight' => $flight]);
            }
        }
        abort(404);
    }
}
