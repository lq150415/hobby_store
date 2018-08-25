<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Type;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
          User::create([
            'name' => 'Luis Felipe',
            'lastname' => 'Quisbert',
            'lastnamesec' => 'Quispe',
            'role' => 'Administrador',
            'email' => 'lq150415@gmail.com',
            'password' => bcrypt('Soloes-1'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Usuario por defecto creado!');
          Category::create([
            'name' => 'Die Cast',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Categoria creada!');
          Category::create([
            'name' => 'Modelismo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Categoria creada!');
          Category::create([
            'name' => 'Arte Vintage',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Categoria creada!');
          Type::create([
            'type' => 'Aviones',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Tipos de productos creados!');
          Type::create([
            'type' => 'Helicopteros',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Tipos de productos creados!');
          Type::create([
            'type' => 'Automoviles',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Tipos de productos creados!');
          Type::create([
            'type' => 'Maquinaria',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Tipos de productos creados!');
          Type::create([
            'type' => 'Barcos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Tipos de productos creados!');
          Type::create([
            'type' => 'Tanques',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Tipos de productos creados!');
          Model::reguard();
    }
}
