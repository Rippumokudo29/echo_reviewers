<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '傍胸骨左縁左室長軸断面',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('categories')->insert([
            'name' => '傍胸骨左縁左室短軸断面(大動脈弁レベル)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('categories')->insert([
            'name' => '傍胸骨左縁左室短軸断面(僧帽弁口レベル)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
            'name' => '傍胸骨左縁左室短軸断面(腱索レベル)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
            'name' => '傍胸骨左縁左室短軸断面(乳頭筋レベル)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('categories')->insert([
            'name' => '傍胸骨左縁左室短軸断面(心尖部レベル)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('categories')->insert([
            'name' => '心尖部四腔断面',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
