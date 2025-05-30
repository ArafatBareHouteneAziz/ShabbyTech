<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'Alex Thompson',
                'position' => 'Lead Developer',
                'position_fr' => 'Développeur Principal',
                'bio' => 'Full-stack developer with 8+ years of experience in web and mobile application development.',
                'bio_fr' => 'Développeur full-stack avec plus de 8 ans d\'expérience dans le développement d\'applications web et mobiles.',
                'image' => 'team/alex-thompson.jpg',
                'email' => 'alex@shabbytech.com',
                'linkedin_url' => 'https://linkedin.com/in/alexthompson',
                'github_url' => 'https://github.com/alexthompson',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Emma Wilson',
                'position' => 'AI Engineer',
                'position_fr' => 'Ingénieur IA',
                'bio' => 'Machine learning specialist with expertise in natural language processing and computer vision.',
                'bio_fr' => 'Spécialiste en apprentissage automatique avec expertise en traitement du langage naturel et vision par ordinateur.',
                'image' => 'team/emma-wilson.jpg',
                'email' => 'emma@shabbytech.com',
                'linkedin_url' => 'https://linkedin.com/in/emmawilson',
                'github_url' => 'https://github.com/emmawilson',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'David Chen',
                'position' => 'IoT Specialist',
                'position_fr' => 'Spécialiste IoT',
                'bio' => 'IoT expert with extensive experience in smart home and industrial automation solutions.',
                'bio_fr' => 'Expert IoT avec une vaste expérience dans les solutions d\'automatisation domestique et industrielle.',
                'image' => 'team/david-chen.jpg',
                'email' => 'david@shabbytech.com',
                'linkedin_url' => 'https://linkedin.com/in/davidchen',
                'github_url' => 'https://github.com/davidchen',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($teamMembers as $teamMember) {
            TeamMember::create($teamMember);
        }
    }
} 