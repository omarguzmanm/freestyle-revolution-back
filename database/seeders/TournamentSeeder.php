<?php

namespace Database\Seeders;

use App\Models\Tournament;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', 'admin@admin.com')->first();

        $tournaments = [
            'FMS España', 'FMS México', 'FMS Argentina', 'FMS Chile', 'FMS Colombia', 'FMS Caribe', 'FMS Peru', 'FMS Internacional',
            'Red Bull España', 'Red Bull México', 'Red Bull Argentina', 'Red Bull Chile', 'Red Bull Colombia', 'Red Bull Caribe', 'Red Bull Perú', 'Red Bull Internacional',
            'God Level', 'Supremacía MC', 'Gold Battle', 'BDM México', 'BDM España', 'BDM Argentina', 'BDM Chile', 'BDM Colombia', 'BDM Perú', 'BDM Internacional',   
        ];

        foreach ($tournaments as $tournament) {
            Tournament::create([
                'user_id' => $admin->id,
                'title' => $tournament,
                'description' => 'Descripción del torneo',
                'location' => 'Ubicación del torneo',
                'date' => now(),
                'image' => 'https://via.placeholder.com/150',
            ]);
        }
    }
}
