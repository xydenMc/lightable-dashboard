<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard - Light Able Style',
            // Data untuk card
            'daily_sales' => 249.95,
            'daily_percent' => 36,
            'monthly_sales' => 249.95,
            'monthly_percent' => 20,
            'yearly_sales' => 249.95,
            
            // Data statistik
            'total_earnings' => 249.95,
            'total_ideas' => 235,
            'total_location' => 26,
            'total_likes' => 12281,
            'target' => 35098,
            'duration' => 3539,
            
            // Data rating
            'rating' => 4.7,
            'rating_details' => [
                5 => 384, 4 => 145, 3 => 24, 2 => 1, 1 => 0
            ],
            
            // Data users
            'recent_users' => [
                ['name' => 'Adama andrew', 'role' => 'Android developer', 'time' => '11 may 12:30'],
                ['name' => 'Garrett garot', 'role' => 'Android developer', 'time' => '11 may 12:30'],
                ['name' => 'Ashton martin', 'role' => 'Android developer', 'time' => '11 may 12:30'],
                ['name' => 'Cedric kale', 'role' => 'Android developer', 'time' => '11 may 12:30']
            ]
        ];
        
        return view('dashboard/index', $data);
    }
}