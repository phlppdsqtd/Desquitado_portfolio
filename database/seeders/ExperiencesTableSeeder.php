<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $experiences = [
            ['title' => 'Digital Marketing & Guest Relations Lead', 'company' => 'YRJ Engineering Services & Dayunan', 'duration' => 'Nov 2019 – Present', 'description' => 'Managed marketing and social media strategy, content approval, and brand alignment. Primary contact for guest bookings.', 'type' => 'work'],
            ['title' => 'Specialist – Materials Data Engineer', 'company' => 'Shell (SBO Manila)', 'duration' => 'Nov 2016 – Oct 2019', 'description' => 'Delivered improvement projects, increased data quality, and harmonized Material Master data.', 'type' => 'work'],
            ['title' => 'Senior Analyst – Materials Data Engineer', 'company' => 'Shell (SBO Manila)', 'duration' => 'Dec 2015 – Oct 2016', 'description' => 'Processed general data requests, acted as focal for GSAP East, and delivered continuous improvement projects.', 'type' => 'work'],
            ['title' => 'Plant Engineer', 'company' => 'Bangko Sentral ng Pilipinas', 'duration' => 'Mar 2013 – Nov 2015', 'description' => 'Operated equipment for wiping solutions and cylinders. Prepared project proposals for process improvement.', 'type' => 'work'],
            ['title' => 'Bachelor of Science in Computer Science', 'company' => 'University of St. La Salle', 'duration' => 'Batch 2026', 'description' => 'Dean’s Lister', 'type' => 'education'],
            ['title' => 'Bachelor of Science in Chemical Engineering', 'company' => 'University of St. La Salle', 'duration' => 'Batch 2012', 'description' => 'Dean’s Lister, Batch Rank: 9. Chemical Engineering Licensure Examination Passer (2012).', 'type' => 'education'],
        ];
        foreach ($experiences as $experience) Experience::create($experience);
    }
}
