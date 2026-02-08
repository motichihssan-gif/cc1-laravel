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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $expert = Expert::create([
            'nomExp' => 'Dupont',
            'prénomExp' => 'Jean',
            'télExp' => '0123456789',
            'SpécialitéExp' => 'Informatique',
            'EmailExp' => 'jean.dupont@example.com',
        ]);

        $evenement = Evenement::create([
            'thème' => 'Conférence Informatique Avancée',
            'date_debut' => '2024-04-01',
            'date_fin' => '2024-04-03',
            'description' => 'Conférence sur les dernières avancées en informatique',
            'cout_journalier' => 500,
            'expert_id' => $expert->id,
        ]);

        Atelier::create([
            'nomAtelier' => 'Atelier de Développement Web',
            'descriptionAtelier' => 'Pratique avancée sur les technologies web modernes',
            'evenement_id' => $evenement->id,
        ]);
        
        Atelier::create([
            'nomAtelier' => 'Atelier de Sécurité Informatique',
            'descriptionAtelier' => 'Séances pratiques pour renforcer la sécurité des applications',
            'evenement_id' => $evenement->id,
        ]);
    }
}
