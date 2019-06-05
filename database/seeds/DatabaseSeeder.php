<?php

use Illuminate\Database\Seeder;
use App\Cuenta;
use App\User;

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
          self::seedCuentas();
          $this->command->info('Tabla cuentas inicializada con datos!');
          self::seedUsers();
          $this->command->info('Tabla usuarios inicializada con datos!');
    }
    
    private static function seedCuentas()
    {
    }
    
    private static function seedUsers()
    {
        User::truncate();
        
        User::create([
                'name' => 'Usuario1',
                'email' => 'usuario1@banco2mares.com',
                'password' => bcrypt('alumno')
        ]);
        User::create([
                'name' => 'Usuario2',
                'email' => 'usuario2@banco2mares.com',
                'password' => bcrypt('alumno')
        ]);
    }

    private static $arrayCuentas = array(
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 4656, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 5141, 'bloqueada' => 1),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 1999, 'bloqueada' => 0),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 8067, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 5485, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 2062, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 5438, 'bloqueada' => 0),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 5111, 'bloqueada' => 1),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 7382, 'bloqueada' => 0),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 9738, 'bloqueada' => 1),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 2388, 'bloqueada' => 1),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 8799, 'bloqueada' => 1),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 7237, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 6222, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 9644, 'bloqueada' => 1),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 2931, 'bloqueada' => 1),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 2036, 'bloqueada' => 0),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 1716, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 6603, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 6250, 'bloqueada' => 0),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 703, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 4679, 'bloqueada' => 1),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 9971, 'bloqueada' => 0),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 3343, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 613, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 4229, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 9706, 'bloqueada' => 1),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 6660, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 2614, 'bloqueada' => 0),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 2937, 'bloqueada' => 1),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 8631, 'bloqueada' => 0),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 5688, 'bloqueada' => 1),
        array('interes' => 0.25, 'tipo' => 'Ahorro', 'saldo' => 2416, 'bloqueada' => 0),
        array('interes' => 0.5, 'tipo' => 'Corriente', 'saldo' => 1213, 'bloqueada' => 0)
    );
}
