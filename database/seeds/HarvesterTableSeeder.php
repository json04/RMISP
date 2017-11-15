<?php

use Illuminate\Database\Seeder;

class HarvesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('harvesters')->delete();
       $harvesters = array(

       		array(
       			'fname' => 'Rolan',
       			'mname' => '',
       			'lname' => 'Abejero',
            'suffix' => '',
       			'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
       			'contact' => '',
       		),

          array(
            'fname' => 'Elizalde',
            'mname' => '',
            'lname' => 'Alex',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Roel',
            'mname' => '',
            'lname' => 'Amolato',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Roel',
            'mname' => '',
            'lname' => 'Añes',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Rodel',
            'mname' => '',
            'lname' => 'Arnado',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Ricky',
            'mname' => '',
            'lname' => 'Bagatsolon',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Agustin',
            'mname' => '',
            'lname' => 'Bentillo',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Aljun',
            'mname' => '',
            'lname' => 'Bentillo',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Joel',
            'mname' => '',
            'lname' => 'Boligao',
            'suffix' => '',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Constantino',
            'mname' => '',
            'lname' => 'Brigole',
            'suffix' => 'Jr.',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Noel',
            'mname' => '',
            'lname' => 'Brigole',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Rodolfo',
            'mname' => '',
            'lname' => 'Brigole',
            'suffix' => 'Jr.',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Tito',
            'mname' => '',
            'lname' => 'Brigole',
            'suffix' => '',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Francisco',
            'mname' => '',
            'lname' => 'Bungaos',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Erwin',
            'mname' => '',
            'lname' => 'Butaya',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Nelson',
            'mname' => '',
            'lname' => 'Butaya',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Wilfredo',
            'mname' => '',
            'lname' => 'Butaya',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Dionito',
            'mname' => '',
            'lname' => 'Cabanag',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Florencito',
            'mname' => '',
            'lname' => 'Cabanag',
            'suffix' => '',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Perlito',
            'mname' => '',
            'lname' => 'Cabanag',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Archie',
            'mname' => '',
            'lname' => 'Castigador',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Bernabe',
            'mname' => '',
            'lname' => 'Castigador',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Nelson',
            'mname' => '',
            'lname' => 'Castigador',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Nolito',
            'mname' => '',
            'lname' => 'Castigador',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Rizaldo',
            'mname' => '',
            'lname' => 'Castigador',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Jaime',
            'mname' => '',
            'lname' => 'Cinco',
            'suffix' => '',
            'address' => 'Purok-10 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Amer',
            'mname' => '',
            'lname' => 'Cordero',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Gregorio',
            'mname' => '',
            'lname' => 'Delacerna',
            'suffix' => '',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Elesio',
            'mname' => '',
            'lname' => 'Delapeña',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Jorge',
            'mname' => '',
            'lname' => 'Delapeña',
            'suffix' => 'Jr.',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Francisco',
            'mname' => '',
            'lname' => 'Dingcol',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Alberto',
            'mname' => '',
            'lname' => 'Dotillos',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Hilario',
            'mname' => '',
            'lname' => 'Dotillos',
            'suffix' => 'Jr.',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Vicente',
            'mname' => '',
            'lname' => 'Dotillos',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Elmer',
            'mname' => '',
            'lname' => 'Econar',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Rex',
            'mname' => '',
            'lname' => 'Fajardo',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'William',
            'mname' => '',
            'lname' => 'Incornal',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Orestes',
            'mname' => '',
            'lname' => 'Lanciso',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Ronald',
            'mname' => '',
            'lname' => 'Lascuña',
            'suffix' => '',
            'address' => 'Purok-1 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Ronaldo',
            'mname' => '',
            'lname' => 'Lungay',
            'suffix' => '',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Lynmar',
            'mname' => '',
            'lname' => 'Mabida',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Alvino',
            'mname' => '',
            'lname' => 'Mana-ay',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Antonio',
            'mname' => '',
            'lname' => 'Manalo',
            'suffix' => '',
            'address' => 'Purok-1 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Delio',
            'mname' => '',
            'lname' => 'Manalo',
            'suffix' => '',
            'address' => 'Purok-1 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Melchor',
            'mname' => '',
            'lname' => 'Manalo',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Rolando',
            'mname' => '',
            'lname' => 'Metante',
            'suffix' => 'Jr.',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Roldan',
            'mname' => '',
            'lname' => 'Metante',
            'suffix' => '',
            'address' => 'Purok-2 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Julius',
            'mname' => '',
            'lname' => 'Miñoza',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Syreel',
            'mname' => '',
            'lname' => 'Nilugao',
            'suffix' => '',
            'address' => 'Purok-1 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Antonio',
            'mname' => '',
            'lname' => 'Padayhag',
            'suffix' => '',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Jarlie',
            'mname' => '',
            'lname' => 'Padayhag',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Joel',
            'mname' => '',
            'lname' => 'Paragoso',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Crisanto',
            'mname' => '',
            'lname' => 'Robles',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Alfredo',
            'mname' => '',
            'lname' => 'Romano',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Anthony',
            'mname' => '',
            'lname' => 'Sabolbora',
            'suffix' => '',
            'address' => 'Purok-1 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Wilson',
            'mname' => '',
            'lname' => 'Sabolbora',
            'suffix' => '',
            'address' => 'Purok-2 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Roldan',
            'mname' => '',
            'lname' => 'Sinco',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Rodrigo',
            'mname' => '',
            'lname' => 'Singco',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Romeo',
            'mname' => '',
            'lname' => 'Tapio',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Ronie',
            'mname' => '',
            'lname' => 'Tapio',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Joselito',
            'mname' => '',
            'lname' => 'Uray',
            'suffix' => '',
            'address' => 'Purok-3 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

          array(
            'fname' => 'Alvin',
            'mname' => '',
            'lname' => 'Villafranca',
            'suffix' => '',
            'address' => 'Purok-9 San Jose, Quezon, Bukidnon',
            'contact' => '',
          ),

       	);
     DB::table('harvesters')->insert($harvesters);
    }
}
