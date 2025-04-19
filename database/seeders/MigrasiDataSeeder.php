<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MigrasiDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = DB::connection('sqlite_old')->table('divisions')->get();

        foreach ($divisions as $item) {
            DB::connection('mysql')->table('divisions')->insert([
                'name' => $item->name,
                'description' =>$item->description,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
            ]);
        }

        $infos = DB::connection('sqlite_old')->table('infos')->get();

        foreach ($infos as $item) {
            DB::connection('mysql')->table('infos')->insert([
                'title' => $item->title,
                'content' =>$item->content,
                'image1' => $item->image1,
                'image2' => $item->image2,
                'image3' => $item->image3,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
            ]);
        }

        $leaders = DB::connection('sqlite_old')->table('leaders')->get();

        foreach ($leaders as $item) {
            DB::connection('mysql')->table('leaders')->insert([
                'name' => $item->name,
                'rank' =>$item->rank,
                'position' => $item->position,
                'image' => $item->image,
                'about' => $item->about,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
            ]);
        }
    }
}
