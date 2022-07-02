<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'kategori' => 'Pelecehan Seksual',
            'image' => 'Gambar 1',
            'judul' => 'Pelecehan Seksual Di Dalam Kereta',
            'slug' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam possimus odit!',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur quam excepturi dolorem magnam dolor temporibus? Tenetur, ipsum aliquid dolor sapiente delectus excepturi accusamus quis harum corporis cum odit deleniti. Aliquam quod assumenda possimus hic? Ratione commodi non distinctio quasi consequatur, possimus, perferendis sequi quaerat harum tempora ut illo accusantium similique. Inventore quaerat est mollitia unde? Quisquam quis sed amet debitis voluptatum! Impedit quas amet inventore doloribus harum doloremque eos provident eaque exercitationem? Iste harum error libero quia, maxime animi? Animi consequatur nemo, architecto vel sapiente magni dolores dolor amet assumenda ducimus iste corrupti blanditiis at veritatis quisquam ab rem cumque illum a quo! Ea quae aut nihil, quidem nostrum deleniti dignissimos magni nulla velit, quo animi. Eaque sapiente tenetur atque.',
            'sumber' => 'Detik.com',
            'publish' => '2000-01-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
