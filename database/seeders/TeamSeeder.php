<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'picture' => 'obi.jpg',
            'name' => 'zahid h. tobi',
            'social_media' => [
                'instagram' => [
                    'icon' => 'instagram-alt',
                    'url' => 'https://www.instagram.com/wwfyy_/profilecard/?igsh=dWJobGh0ZDl1b2du'
                ],
                'tiktok' => [
                    'icon' => 'tiktok',
                    'url' => 'https://www.tiktok.com/@awlfyy_?_t=8s0dkIvJwE4&_r=1'
                ],
                'youtube' => [
                    'icon' => 'youtube',
                    'url' => 'https://youtube.com/@zyalwfie?si=dCRzllvWF0b0_RVX'
                ],
            ]
        ]);

        Team::create([
            'picture' => 'wafy.jpeg',
            'name' => 'ziyad alwafie',
            'social_media' => [
                'instagram' => [
                    'icon' => 'instagram-alt',
                    'url' => 'https://www.instagram.com/wwfyy_/profilecard/?igsh=dWJobGh0ZDl1b2du'
                ],
                'tiktok' => [
                    'icon' => 'tiktok',
                    'url' => 'https://www.tiktok.com/@awlfyy_?_t=8s0dkIvJwE4&_r=1'
                ],
                'youtube' => [
                    'icon' => 'youtube',
                    'url' => 'https://youtube.com/@zyalwfie?si=dCRzllvWF0b0_RVX'
                ],
            ]
        ]);

        Team::create([
            'picture' => 'jung.jpg',
            'name' => 'zulkarnaen',
            'social_media' => [
                'instagram' => [
                    'icon' => 'instagram-alt',
                    'url' => 'https://www.instagram.com/wwfyy_/profilecard/?igsh=dWJobGh0ZDl1b2du'
                ],
                'tiktok' => [
                    'icon' => 'tiktok',
                    'url' => 'https://www.tiktok.com/@awlfyy_?_t=8s0dkIvJwE4&_r=1'
                ],
                'youtube' => [
                    'icon' => 'youtube',
                    'url' => 'https://youtube.com/@zyalwfie?si=dCRzllvWF0b0_RVX'
                ],
            ]
        ]);
    }
}
