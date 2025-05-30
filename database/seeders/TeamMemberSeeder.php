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
                'name' => 'Arafat Bare',
                'position' => 'Lead Developer',
                'position_fr' => 'Développeur Principal',
                'bio' => 'Full-stack developer with 4+ years of experience in web and mobile application development.',
                'bio_fr' => 'Développeur full-stack avec plus de 8 ans d\'expérience dans le développement d\'applications web et mobiles.',
                'image' => 'team/arafat.jpg',
                'email' => 'arafat@shabbytech.com',
                'linkedin_url' => 'https://linkedin.com/in/arafatbare',
                'github_url' => 'https://github.com/arafatbare',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Houtene Aziz',
                'position' => 'AI Engineer',
                'position_fr' => 'Ingénieur IA',
                'bio' => 'Machine learning specialist with expertise in natural language processing and computer vision.',
                'bio_fr' => 'Spécialiste en apprentissage automatique avec expertise en traitement du langage naturel et vision par ordinateur.',
                'image' => 'team/houtene.jpg',
                'email' => 'houtene@shabbytech.com',
                'linkedin_url' => 'https://linkedin.com/in/houteneaziz',
                'github_url' => 'https://github.com/houteneaziz',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Arafat Bare',
                'position' => 'IoT Specialist',
                'position_fr' => 'Spécialiste IoT',
                'bio' => 'IoT expert with extensive experience in smart home and industrial automation solutions.',
                'bio_fr' => 'Expert IoT avec une vaste expérience dans les solutions d\'automatisation domestique et industrielle.',
                'image' => 'team/arafat.jpg',
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