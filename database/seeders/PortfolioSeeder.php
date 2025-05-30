<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'E-commerce Platform',
                'title_fr' => 'Plateforme E-commerce',
                'description' => 'A modern e-commerce platform with advanced features and seamless user experience.',
                'description_fr' => 'Une plateforme e-commerce moderne avec des fonctionnalités avancées et une expérience utilisateur fluide.',
                'image' => 'portfolios/ecommerce.jpg',
                'technologies' => json_encode(['Laravel', 'Vue.js', 'Tailwind CSS', 'MySQL']),
                'client' => 'TechStore',
                'completion_date' => '2024-01-15',
                'project_url' => 'https://techstore.example.com',
                'order' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'AI Analytics Dashboard',
                'title_fr' => 'Tableau de Bord Analytique IA',
                'description' => 'Real-time analytics dashboard powered by machine learning algorithms.',
                'description_fr' => 'Tableau de bord analytique en temps réel alimenté par des algorithmes d\'apprentissage automatique.',
                'image' => 'portfolios/ai-dashboard.jpg',
                'technologies' => json_encode(['Python', 'TensorFlow', 'React', 'PostgreSQL']),
                'client' => 'DataCorp',
                'completion_date' => '2024-02-20',
                'project_url' => 'https://aicorp.example.com',
                'order' => 2,
                'is_featured' => true,
            ],
            [
                'title' => 'Smart Home System',
                'title_fr' => 'Système de Maison Intelligente',
                'description' => 'IoT-based home automation system with voice control capabilities.',
                'description_fr' => 'Système d\'automatisation domestique basé sur l\'IoT avec capacités de contrôle vocal.',
                'image' => 'portfolios/smart-home.jpg',
                'technologies' => json_encode(['IoT', 'Node.js', 'MongoDB', 'React Native']),
                'client' => 'SmartLiving',
                'completion_date' => '2024-03-10',
                'project_url' => 'https://smartliving.example.com',
                'order' => 3,
                'is_featured' => false,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
} 