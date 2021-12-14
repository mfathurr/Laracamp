<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

// 2nd method
// use Illuminate\Support\Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // 2nd method
        // $camps = [
        //     [
        //         'title' => 'Gila Belajar',
        //         'slug' => Str::slug('Gila Belajar')
        //     ]
        // ];

        // 1st method
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }
        // note: tidak perlu membuat created_at & updated_at

        // 2nd method
        Camp::insert($camps);
    }
}
