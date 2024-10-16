<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'Samsung mobile',
                'price'=> 20000,
                'category'=> 'Mobile',
                'description'=> 'A samsung phone with 6 gb ram and 128 gb internal memory',
                'gallery' => 'https://images.unsplash.com/photo-1509395062183-67c5ad6faff9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fG1vYmlsZSUyMHBob25lfGVufDB8fDB8fHww'
            ],
            [
                'name'=>'Iphone mobile',
                'price'=> 200000,
                'category'=> 'Mobile',
                'description'=> 'An Iphone with 6 gb ram and 128 gb internal memory',
                'gallery' => 'https://images.unsplash.com/photo-1515529706504-b440b49fb63b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fG1vYmlsZSUyMHBob25lfGVufDB8fDB8fHww'
            ],
            [
                'name'=>'Huwai mobile',
                'price'=> 50000,
                'category'=> 'Mobile',
                'description'=> 'An Huwai with 6 gb ram and 128 gb internal memory',
                'gallery' => 'https://images.unsplash.com/flagged/photo-1581390476351-b5d89504a5cb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fG1vYmlsZSUyMHBob25lfGVufDB8fDB8fHww'
            ],
        ]);
    }
}
