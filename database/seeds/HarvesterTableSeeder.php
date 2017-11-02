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
       			'fname' => 'Cruz',
       			'mname' => 'Marcel',
       			'lname' => 'Marley',
       			'address' => '4057 Bee Street, Norton Shores Michigan',
       			'contact' => '231-780-2843',
       		),

       		array(
       			'fname' => 'Gilberto',
       			'mname' => 'Goro',
       			'lname' => 'Yang',
       			'address' => '3930 Ferry Street, Cedar Bluff Alabama',
       			'contact' => '256-779-1259',
       		),

       		array(
       			'fname' => 'Tomas',
       			'mname' => 'Jordan',
       			'lname' => 'Lange',
       			'address' => '889 Daylene Drive, GRAND RAPIDS Minnesota',
       			'contact' => '734-549-8959',
       		),

       		array(
       			'fname' => 'Jane',
       			'mname' => 'Aric',
       			'lname' => 'Austin',
       			'address' => '4611 Despard Street, Dunwoody Georgia',
       			'contact' => '404-774-1601',
       		),

       		array(
       			'fname' => 'Susan',
       			'mname' => 'Troy',
       			'lname' => 'Beltran',
       			'address' => '4737 D Street, Bloomfield Township Michigan',
       			'contact' => '586-480-6577',
       		),

       		array(
       			'fname' => 'Vivian',
       			'mname' => 'Pronc',
       			'lname' => 'Reed',
       			'address' => '2161 Northwest Boulevard, River Edge New Jersey',
       			'contact' => '201-986-5791',
       		),

       		array(
       			'fname' => 'Martin',
       			'mname' => 'Pastina',
       			'lname' => 'Whitted',
       			'address' => '1179 Horizon Circle, Kent Washington',
       			'contact' => '253-639-8888',
       		),

       		array(
       			'fname' => 'Brenda',
       			'mname' => 'Huiller',
       			'lname' => 'Egan',
       			'address' => '3308 Church Street, New York',
       			'contact' => '718-414-3737',
       		),

       		array(
       			'fname' => 'Emma',
       			'mname' => 'Jose',
       			'lname' => 'Woodson',
       			'address' => '2433 Pick Street, Aurora Colorado',
       			'contact' => '970-643-6289',
       		),

       		array(
       			'fname' => 'Noreen',
       			'mname' => 'Morgan',
       			'lname' => 'Hil',
       			'address' => '982 Taylor Street, ZALMA Missouri',
       			'contact' => '914-686-4056',
       		),
       	);
     DB::table('harvesters')->insert($harvesters);
    }
}
