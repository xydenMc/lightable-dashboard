<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard - Light Able Style',
            'daily_sales' => 249.95,
            'daily_percent' => 36,
            'monthly_sales' => 249.95,
            'monthly_percent' => 20,
            'yearly_sales' => 249.95,
            'total_earnings' => 249.95,
            'total_ideas' => 235,
            'total_location' => 26,
            'total_likes' => 12281,
            'target' => 35098,
            'duration' => 3539,
            'rating' => 4.7,
            'rating_details' => [
                5 => 384,
                4 => 145,
                3 => 24,
                2 => 1,
                1 => 0
            ],
            'recent_users' => [
                ['name' => 'Adama andrew', 'role' => 'Android developer', 'time' => '11 may 12:30'],
                ['name' => 'Garrett garot', 'role' => 'Android developer', 'time' => '11 may 12:30'],
                ['name' => 'Ashton martin', 'role' => 'Android developer', 'time' => '11 may 12:30'],
                ['name' => 'Cedric kale', 'role' => 'Android developer', 'time' => '11 may 12:30']
            ]
        ];

        return view('dashboard/index', $data);
    }

    public function affiliate()
    {
        $data = [
            'title' => 'Affiliate Dashboard',
            'stats' => [
                'referrals' => ['value' => '134.6K', 'growth' => '+55%', 'currency' => '$', 'icon' => 'users'],
                'conversion' => ['value' => '8.57%', 'growth' => '+3.6%', 'icon' => 'percent'],
                'visits' => ['value' => '278', 'growth' => '+7%', 'icon' => 'eye']
            ],
            'affiliates' => [
                ['name' => 'John Doe', 'campaign' => 'Dashboard', 'earnings' => 38, 'growth' => 5.8, 'progress' => 42, 'avatar' => 'user'],
                ['name' => 'Keefs', 'campaign' => 'New Website', 'earnings' => 928, 'growth' => 51.2, 'progress' => 88, 'avatar' => 'code'],
                ['name' => 'Lazaro', 'campaign' => 'Dashboard', 'earnings' => 674, 'growth' => 17.1, 'progress' => 74, 'avatar' => 'chart-line'],
                ['name' => 'Adeline', 'campaign' => 'New Website', 'earnings' => 1438, 'growth' => 15.8, 'progress' => 96, 'avatar' => 'star'],
                ['name' => 'John Doe', 'campaign' => 'Invoice', 'earnings' => 90, 'growth' => 9.8, 'progress' => 31, 'avatar' => 'file-invoice'],
                ['name' => 'Keefs', 'campaign' => 'Dashboard', 'earnings' => 123, 'growth' => 5.8, 'progress' => 48, 'avatar' => 'rocket'],
                ['name' => 'Lazaro', 'campaign' => 'Landing page', 'earnings' => 928, 'growth' => 51.2, 'progress' => 88, 'avatar' => 'landmark'],
            ],
            'topVisitors' => [
                ['name' => 'Adeline', 'earnings' => 1438, 'growth' => 15.8, 'avatar' => 'medal'],
                ['name' => 'John Doe', 'earnings' => 90, 'growth' => 9.8, 'avatar' => 'user-circle'],
                ['name' => 'Keefs', 'earnings' => 123, 'growth' => 5.8, 'avatar' => 'laptop-code'],
                ['name' => 'Lazaro', 'earnings' => 928, 'growth' => 51.2, 'avatar' => 'chart-pie'],
                ['name' => 'John Doe', 'earnings' => 38, 'growth' => 5.8, 'avatar' => 'briefcase'],
                ['name' => 'Keefs', 'earnings' => 928, 'growth' => 51.2, 'avatar' => 'globe'],
                ['name' => 'Lazaro', 'earnings' => 674, 'growth' => 17.1, 'avatar' => 'chart-simple'],
            ],
            'chartData' => [
                'labels' => ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6'],
                'revenue' => [22.5, 28.7, 35.2, 42.9, 51.3, 67.8],
                'conversion' => [5.2, 6.0, 7.1, 7.8, 8.3, 8.57]
            ]
        ];

        return view('dashboard/affiliate', $data);
    }
      // TAMBAHKAN METHOD INI
    public function finance()
    {
        $data = [
            'title' => 'Finance Dashboard'
        ];
        return view('dashboard/finance', $data);
    }
    
    public function helpdesk()
    {
        $data = [
            'title' => 'Helpdesk Dashboard'
        ];
        return view('dashboard/helpdesk', $data);
    }
    
    public function invoice()
    {
        $data = [
            'title' => 'Invoice Dashboard'
        ];
        return view('dashboard/invoice', $data);
    }
}