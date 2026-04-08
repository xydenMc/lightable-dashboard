<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    // Home / Dashboard
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'daily_sales' => 35000,
            'daily_percent' => 12.5,
            'monthly_sales' => 850000,
            'monthly_percent' => 8.3,
            'yearly_sales' => 8500000,
            'total_earnings' => 1250000,
            'total_ideas' => 1247,
            'total_location' => 48,
            'rating' => 4.8,
            'rating_details' => [5 => 320, 4 => 150, 3 => 60, 2 => 20, 1 => 4],
            'recent_users' => [
                ['name' => 'John Doe', 'role' => 'Administrator', 'time' => '2 minutes ago'],
                ['name' => 'Jane Smith', 'role' => 'Editor', 'time' => '15 minutes ago'],
                ['name' => 'Mike Johnson', 'role' => 'User', 'time' => '1 hour ago'],
                ['name' => 'Sarah Williams', 'role' => 'Moderator', 'time' => '3 hours ago'],
                ['name' => 'David Brown', 'role' => 'User', 'time' => '5 hours ago']
            ]
        ];
        
        return view('index', $data);
    }
    
    // Affiliate Page
    public function affiliate()
    {
        $data = [
            'title' => 'Affiliate Dashboard',
            'stats' => [
                'referrals' => ['value' => '45.2K', 'growth' => '+12.5%', 'icon' => 'users'],
                'conversion' => ['value' => '3.24%', 'growth' => '+0.8%', 'icon' => 'chart-line'],
                'visits' => ['value' => '128.4K', 'growth' => '+23.1%', 'icon' => 'eye']
            ],
            'chartData' => [
                'labels' => ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6'],
                'revenue' => [12, 19, 15, 27, 22, 34],
                'conversion' => [2.1, 2.5, 2.3, 3.1, 2.8, 3.5]
            ],
            'affiliates' => [
                ['name' => 'John Doe', 'campaign' => 'Summer Sale', 'earnings' => 12450, 'growth' => 12, 'progress' => 75, 'avatar' => 'user'],
                ['name' => 'Jane Smith', 'campaign' => 'Winter Promo', 'earnings' => 8900, 'growth' => 8, 'progress' => 60, 'avatar' => 'user-circle'],
                ['name' => 'Mike Johnson', 'campaign' => 'Spring Deal', 'earnings' => 15600, 'growth' => 15, 'progress' => 85, 'avatar' => 'user-tie'],
                ['name' => 'Sarah Williams', 'campaign' => 'Black Friday', 'earnings' => 21300, 'growth' => 25, 'progress' => 95, 'avatar' => 'user-graduate']
            ],
            'topVisitors' => [
                ['name' => 'Adeline', 'earnings' => 18450, 'growth' => 32, 'avatar' => 'crown'],
                ['name' => 'Benjamin', 'earnings' => 12400, 'growth' => 18, 'avatar' => 'user-astronaut'],
                ['name' => 'Charlotte', 'earnings' => 9800, 'growth' => 22, 'avatar' => 'user-ninja'],
                ['name' => 'Daniel', 'earnings' => 7600, 'growth' => 14, 'avatar' => 'user-secret']
            ]
        ];
        
        return view('affiliate', $data);
    }
    
    // Finance Page
    public function finance()
    {
        $data = ['title' => 'Finance Dashboard'];
        return view('finance', $data);
    }
    
    // Helpdesk Page
    public function helpdesk()
    {
        $data = ['title' => 'Helpdesk Dashboard'];
        return view('helpdesk', $data);
    }
    
    // Invoice Page
    public function invoice()
    {
        $data = ['title' => 'Invoice Dashboard'];
        return view('invoice', $data);
    }
    
    // Layouts Page
    public function layouts()
    {
        $data = ['title' => 'Layouts'];
        return view('layouts', $data);
    }
    
    // Widget Page
    public function widget()
    {
        $data = ['title' => 'Widget'];
        return view('widget', $data);
    }
    
    // Statistics Page
    public function statistics()
    {
        $data = ['title' => 'Statistics'];
        return view('statistics', $data);
    }
}