<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
           'header' =>'Header',
           'name_website'=>'Company',
            'description_id'=>'Ini Deskripsi',
            'description_en'=>'This is a Description',
            'vision'=>'Visi Perusahaan',
            'mission'=>'Misi Perusahaan',
            'address'=>'Surabaya',
            'code_pos'=>'602500',
            'latitude'=>'-0',
            'longitude'=>'0',
            'email'=>'maulana@webmaster.com',
            'phone_number'=>'08323232',
            'whatsapp'=>'08323232',
            'icon'=>'favicon.ico',
            'logo'=>'logo.jpg',
            'white_logo'=>'logo.jpg',
        ]);
    }
}
