<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'HTML', 'category' => 'Web Development', 'level' => 'Advanced', 'icon_name' => 'bi-filetype-html'],
            ['name' => 'CSS', 'category' => 'Web Development', 'level' => 'Intermediate', 'icon_name' => 'bi-filetype-css'],
            ['name' => 'Bootstrap', 'category' => 'Web Development', 'level' => 'Intermediate', 'icon_name' => 'bi-bootstrap'],
            ['name' => 'JavaScript', 'category' => 'Web Development', 'level' => 'Intermediate', 'icon_name' => 'bi-filetype-js'],
            ['name' => 'PHP', 'category' => 'Web Development', 'level' => 'Intermediate', 'icon_name' => 'bi-filetype-php'],
            ['name' => 'Laravel', 'category' => 'Web Development', 'level' => 'Beginner', 'icon_name' => 'bi-gem'],
            ['name' => 'Django', 'category' => 'Web Development', 'level' => 'Beginner', 'icon_name' => 'bi-file-earmark-code'],

            ['name' => 'Python', 'category' => 'Software & Mobile', 'level' => 'Advanced', 'icon_name' => 'bi-filetype-py'],
            ['name' => 'Java', 'category' => 'Software & Mobile', 'level' => 'Intermediate', 'icon_name' => 'bi-braces-asterisk'],
            ['name' => 'C++ & C#', 'category' => 'Software & Mobile', 'level' => 'Advanced', 'icon_name' => 'bi-code-square'],
            ['name' => 'Flutter', 'category' => 'Software & Mobile', 'level' => 'Beginner', 'icon_name' => 'bi-phone'],
            ['name' => 'Unity', 'category' => 'Software & Mobile', 'level' => 'Advanced', 'icon_name' => 'bi-controller'],

            ['name' => 'Machine Learning', 'category' => 'Business Intelligence', 'level' => 'Intermediate', 'icon_name' => 'bi-robot'],
            ['name' => 'Data Analytics', 'category' => 'Business Intelligence', 'level' => 'Intermediate', 'icon_name' => 'bi-graph-up-arrow'],
            ['name' => 'MS Excel & Access Database', 'category' => 'Business Intelligence', 'level' => 'Advanced', 'icon_name' => 'bi-filetype-xlsx'],

            ['name' => 'Material Master SAP ERP', 'category' => 'Enterprise & Engineering', 'level' => 'Advanced', 'icon_name' => 'bi-database-fill-gear'],
            ['name' => 'Innowera Process Runner', 'category' => 'Enterprise & Engineering', 'level' => 'Intermediate', 'icon_name' => 'bi-gear-fill'],
            ['name' => 'AutoCAD', 'category' => 'Enterprise & Engineering', 'level' => 'Beginner', 'icon_name' => 'bi-bounding-box-circles'],

            ['name' => 'Digital Marketing Strategy', 'category' => 'Marketing & Branding', 'level' => 'Intermediate', 'icon_name' => 'bi-megaphone-fill'],
            ['name' => 'Content Creation & Branding', 'category' => 'Marketing & Branding', 'level' => 'Intermediate', 'icon_name' => 'bi-brush-fill'],
        ];

        foreach ($skills as $skillData) {
            Skill::firstOrCreate(
                ['name' => $skillData['name']],
                $skillData
            );
        }
    }
}