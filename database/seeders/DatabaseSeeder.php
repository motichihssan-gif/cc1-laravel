<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Expert;
use App\Models\Evenement;
use App\Models\Atelier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $expert1 = Expert::create([
            'nomExp' => 'Dupont',
            'prénomExp' => 'Jean',
            'télExp' => '0123456789',
            'SpécialitéExp' => 'Informatique',
            'EmailExp' => 'jean.dupont@example.com',
        ]);

        $expert2 = Expert::create([
            'nomExp' => 'Martin',
            'prénomExp' => 'Alice',
            'télExp' => '0987654321',
            'SpécialitéExp' => 'Médecine',
            'EmailExp' => 'alice.martin@example.com',
        ]);

        $ev1 = Evenement::create([
            'thème' => 'Conférence Informatique Avancée',
            'date_debut' => '2024-04-01',
            'date_fin' => '2024-04-03',
            'description' => 'Conférence sur les dernières avancées en informatique',
            'cout_journalier' => 500,
            'expert_id' => $expert1->id,
        ]);

        Evenement::create([
            'thème' => 'Atelier de Programmation Java',
            'date_debut' => '2024-05-01',
            'date_fin' => '2024-05-03',
            'description' => 'Atelier pratique de programmation Java',
            'cout_journalier' => 550,
            'expert_id' => $expert1->id,
        ]);

        Evenement::create([
            'thème' => 'Hackathon Cybersecurity',
            'date_debut' => '2024-06-01',
            'date_fin' => '2024-06-03',
            'description' => 'Compétition de sécurité informatique',
            'cout_journalier' => 600,
            'expert_id' => $expert1->id,
        ]);

        Evenement::create([
            'thème' => 'Conférence Médicale Internationale',
            'date_debut' => '2024-05-15',
            'date_fin' => '2024-05-17',
            'description' => 'Conférence médicale internationale',
            'cout_journalier' => 700,
            'expert_id' => $expert2->id,
        ]);

        Atelier::create([
            'nomAtelier' => 'Atelier de Développement Web',
            'descriptionAtelier' => 'Pratique avancée sur les technologies web modernes',
            'evenement_id' => $ev1->id,
        ]);
        
        Atelier::create([
            'nomAtelier' => 'Atelier de Sécurité Informatique',
            'descriptionAtelier' => 'Séances pratiques pour renforcer la sécurité des applications',
            'evenement_id' => $ev1->id,
        ]);
    }
}
