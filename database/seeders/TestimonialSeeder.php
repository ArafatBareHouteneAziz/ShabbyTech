<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'John Smith',
                'client_position' => 'CEO',
                'client_position_fr' => 'PDG',
                'testimonial' => 'ShabbyTech delivered an exceptional e-commerce platform that has transformed our business. Their team\'s expertise and dedication are unmatched.',
                'testimonial_fr' => 'ShabbyTech a livré une plateforme e-commerce exceptionnelle qui a transformé notre entreprise. L\'expertise et le dévouement de leur équipe sont inégalés.',
                'client_image' => 'testimonials/john-smith.jpg',
                'rating' => 5,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'client_name' => 'Sarah Johnson',
                'client_position' => 'CTO',
                'client_position_fr' => 'DSI',
                'testimonial' => 'The AI analytics dashboard developed by ShabbyTech has revolutionized our data analysis capabilities. Their innovative solutions are truly impressive.',
                'testimonial_fr' => 'Le tableau de bord analytique IA développé par ShabbyTech a révolutionné nos capacités d\'analyse de données. Leurs solutions innovantes sont vraiment impressionnantes.',
                'client_image' => 'testimonials/sarah-johnson.jpg',
                'rating' => 5,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => 'Michael Brown',
                'client_position' => 'Product Manager',
                'client_position_fr' => 'Chef de Produit',
                'testimonial' => 'Working with ShabbyTech on our smart home system was a pleasure. Their attention to detail and technical expertise exceeded our expectations.',
                'testimonial_fr' => 'Travailler avec ShabbyTech sur notre système de maison intelligente a été un plaisir. Leur attention aux détails et leur expertise technique ont dépassé nos attentes.',
                'client_image' => 'testimonials/michael-brown.jpg',
                'rating' => 5,
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
} 