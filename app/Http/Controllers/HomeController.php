<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Mostra la homepage
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Dati che potrebbero essere passati alla view
        $data = [
            'stats' => [
                'daily_customers' => 240,
                'orders_delivered' => 1450,
                'certifications' => 12,
                'satisfied_customers' => 3260
            ],
            'contact' => [
                'phone' => '320 862 6210',
                'email' => 'info@tortelliamo.it',
                'address' => 'Piazza Cesare Battisti 3, Novellara, Reggio Emilia',
                'maps_link' => 'https://maps.google.com/?q=Piazza+Cesare+Battisti+3+Novellara'
            ],
            'hours' => [
                'weekdays' => '9:00 - 14:00, 16:00 - 20:00',
                'saturday' => '9:00 - 14:00, 16:00 - 20:00',
                'sunday' => '9:00 - 14:00',
                'holidays' => 'Chiuso',
                'production' => '5:00 - 12:00'
            ],
            'social' => [
                'facebook' => '#',
                'instagram' => '#',
                'tripadvisor' => '#'
            ]
        ];

        return view('home', $data);
    }
}
