<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'section_title' => 'Customer Support',
            'description' => 'Our support team is available second the clock to address any concerns or queries you may have.'
        ]);

        Contact::create([
            'section_title' => 'Feedback and Suggestions',
            'description' => 'We value your feedback and are continuously working to improve firstGroup. Your input is crucial in shaping the future of firstGroup.'
        ]);

        Contact::create([
            'section_title' => 'Media Queries',
            'description' => 'For media-related questions or press inquiries, please contact us at firstgroup@gmail.com.'
        ]);
    }
}
