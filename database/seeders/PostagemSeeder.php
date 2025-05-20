<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'titulo' => 'postagem 1',
            'descricao' => 'descriçao da postagem 1',
            'created_at' => now(),
            'created_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'titulo' => 'postagem 2',
            'descricao' => 'descriçao da postagem 2',
            'created_at' => now(),
            'created_at' => now()
        ]);

         DB::table('postagens')->insert([
            'categoria_id' => 3,
            'titulo' => 'postagem 3',
            'descricao' => 'descriçao da postagem 3',
            'created_at' => now(),
            'created_at' => now()
        ]);
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'titulo' => 'postagem 4',
            'descricao' => 'descriçao da postagem 4',
            'created_at' => now(),
            'created_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'titulo' => 'postagem 5',
            'descricao' => 'descriçao da postagem 5',
            'created_at' => now(),
            'created_at' => now()
        ]);

         DB::table('postagens')->insert([
            'categoria_id' => 3,
            'titulo' => 'postagem 6',
            'descricao' => 'descriçao da postagem 6',
            'created_at' => now(),
            'created_at' => now()
        ]);
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'titulo' => 'postagem 7',
            'descricao' => 'descriçao da postagem 7',
            'created_at' => now(),
            'created_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'titulo' => 'postagem 8',
            'descricao' => 'descriçao da postagem 8',
            'created_at' => now(),
            'created_at' => now()
        ]);

         DB::table('postagens')->insert([
            'categoria_id' => 3,
            'titulo' => 'postagem 9',
            'descricao' => 'descriçao da postagem 9',
            'created_at' => now(),
            'created_at' => now()
        ]);
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'titulo' => 'postagem 10',
            'descricao' => 'descriçao da postagem 10',
            'created_at' => now(),
            'created_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'titulo' => 'postagem 11',
            'descricao' => 'descriçao da postagem 11',
            'created_at' => now(),
            'created_at' => now()
        ]);

         DB::table('postagens')->insert([
            'categoria_id' => 3,
            'titulo' => 'postagem 12',
            'descricao' => 'descriçao da postagem 12',
            'created_at' => now(),
            'created_at' => now()
        ]);

    }
}
