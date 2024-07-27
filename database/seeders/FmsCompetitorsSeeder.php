<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\FmsCompetitorsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FmsCompetitorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $competitors = [
            'Chuty', 'Skone', 'Gazir', 'Mounts', 'Less', 'Zasko Master', 'Mecha', 'Blon', 'Sweet Pain', 'Mnak', 'Jesus LC', 'Tirpa', // FMS España
            'Dominic','Lancer Lirical','Majestic','Ari Carrillo','Lobo Estepario','RC','Kaiser','Dante','Chang','Zticma', // FMS México
            'Larrix', 'G Sony', 'MP', 'Jesse Pungaz', 'CTZ', 'Jaff', 'Mito', 'Rapder', 'Naista', 'Dybbuk', 'Dac', // FMS Argentina
            'Teorema', 'Klan', 'Joqerr', 'Acertijo', 'Satim', 'Nasho', 'El Menor', 'Anubis', 'Sawi', 'Jair Wong', 'Rodamiento', 'Basek',  //FMS Chile
            'Stuart', 'Coloso', 'Valles T', 'Nitro', 'RBN', 'Carpediem', 'Lokillo', 'Marithea', 'Ken Zingle', 'Puppy', 'Diego MC', 'Airon', //FMS Colombia
            'Metalingüistica', 'Ritmodelia', 'Letra', 'Replik', 'Switch', 'Yartzi', 'SNK', 'Zaki', 'Aldahir', 'Exodo Lirical', 'Jony Beltran', 'Reverse', // FMS Caribe
            'Stick', 'Filosofo', 'Blackcode', 'Cacha', 'Jota', 'Nekroos', 'Kian', 'Racso', 'Skill', 'Piero Pistas', 'Litzen', 'Vijay Kesh' // FMS Peru
        ];

        foreach ($competitors as $key => $competitor) {
            User::create([
                'name' => $competitor,
            ]);
        }

    }
}
