<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'site_logo' => '/logo/logo.jpg',
            'site_title1' => 'E-Budgetin',
            'site_title2' => 'E-Budgetin',
            'address' => 'Jl.Ahmad Yani no 46 Rt 02 Rw 01, Selopuro Blitar',
            'kode_pos' => '66184',
            'phone' => '085730004337',
            'with_scanner' => '1',
            'user_id' => '1',
        ]);
    }
}
