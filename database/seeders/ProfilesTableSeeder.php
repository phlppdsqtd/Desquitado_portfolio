<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'name' => 'Philipp Mark C. Desquitado',
            'email' => 'philippdesquitado@gmail.com',
            'phone' => '+63 999 558 4335',
            'address' => 'L9 B4 Villa Fe Subd., Bacolod City',
            'about' => 'Software Developer, Data Analyst, Materials Data Engineer and Digital Marketing Lead with a computer science and chemical engineering background. Experienced in SAP master data harmonization, process automation, and building digital brand identities from the ground up.'
        ]);
    }
}
