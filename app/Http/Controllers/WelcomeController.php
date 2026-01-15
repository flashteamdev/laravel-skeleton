<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

final class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        // Static testimonials for demonstration
        $testimonials = [
            [
                'name' => 'Alex Rivera',
                'position' => 'CEO at TechStream',
                'testimonial' => 'Laravel Skeleton provided us with the perfect foundation for our SaaS. The built-in components are a game changer.',
                'image' => 'https://ui-avatars.com/api/?name=Alex+Rivera&background=random',
                'star' => 5,
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'Lead Developer',
                'testimonial' => 'The clean architecture and elegant design of this starter kit saved us hundreds of hours of development time.',
                'image' => 'https://ui-avatars.com/api/?name=Sarah+Johnson&background=random',
                'star' => 5,
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'Founder of Bloom',
                'testimonial' => 'I was amazed by how easy it was to customize everything. It is modern, fast, and incredibly reliable.',
                'image' => 'https://ui-avatars.com/api/?name=Michael+Chen&background=random',
                'star' => 4,
            ],
        ];

        return view('welcome', [
            'testimonials' => $testimonials,
        ]);
    }
}
