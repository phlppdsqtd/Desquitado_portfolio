<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            ['title' => 'BalayHub', 'description' => 'Web-based platform designed to help users discover and review rental properties by browsing listings, viewing property details, and leaving ratings.', 'technologies' => 'PHP, MySQL, HTML, CSS, JavaScript'],
            ['title' => 'Wreath of Ascendancy', 'description' => 'A 3D fantasy typing game where players progress through an infinitely tall tower filled with monsters.', 'technologies' => 'Unity, Blender, C#'],
            ['title' => 'Lightbringer', 'description' => 'A 2D action platformer where players battle enemies and navigate levels using combat and movement abilities.', 'technologies' => 'Unity, Photoshop, C#'],
            ['title' => 'Dayúnan Brand Launch', 'description' => 'Built brand identity and launched social channels, growing Facebook following to 2k+ organically in 2 months.', 'technologies' => 'Meta Business Suite, Figma, Canva'],
            ['title' => 'Material Data Inconsistency Cleansing', 'description' => 'Delivered USD 500,000 benefit through 4 CI projects associated with data cleansing and generic material master reduction.', 'technologies' => 'SAP, Excel'],
            ['title' => 'Bulk Material Automation', 'description' => 'Designed automation scripts for bulk material master creation, yielding an 18% increase in efficiency.', 'technologies' => 'Innowera, SAP'],
        ];
        foreach ($projects as $project) Project::create($project);
    }
}
