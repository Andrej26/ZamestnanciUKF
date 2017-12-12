<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // naplnenie andreja ako admina
                DB::table('zamestnanec')->insert([
                        'idzamestnanec' => 0,
                        'meno' => "Andrej tibensky",
                         'profil' => "Admin andrej",
                        'email' => 'Andrejtibensky20@gmail.com',
                        'password' => bcrypt('passwd'),
                        'Katedra_idKatedra' => 42,
                        'rolaPouzivatela_idrolaPouzivatela' => 3,
                        'aktivny' => 1,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                        ]);

                // naplnenie tagov
                DB::table('tags')->insert([
                        'name' => "matematika"
                        ]);
                DB::table('tags')->insert([
                        'name' => "informatika",
                    ]);
                DB::table('tags')->insert([
                        'name' => "filozofia",
                    ]);
                DB::table('tags')->insert([
                        'name' => "chemia",
                    ]);
                DB::table('tags')->insert([
                        'name' => "profesor/ka",
                    ]);
                DB::table('tags')->insert([
                        'name' => "docent/ka",
                    ]);
                DB::table('tags')->insert([
                        'name' => "archeológia",
                    ]);

                // pridanie potrebnych udajov gadusovej ako exponat na ukazku
                DB::table('zamestnanec_tag')->insert([
                        array('zamestnanec_id' => 1004, 'tag_id' => 4),
                        array('zamestnanec_id' => 1004, 'tag_id' => 2),
                        array('zamestnanec_id' => 1004, 'tag_id' => 3),
                        array('zamestnanec_id' => 1036, 'tag_id' => 3),
                        array('zamestnanec_id' => 1036, 'tag_id' => 2),
                    ]);

                DB::table('komentar')->insert([
                        array('autor' => 1004, 'okomentovanyId' => 1036, 'odsuhlaseny' => 1, 'komentar' => 'Najlepsia ucitelka na svete'),
                        array('autor' => 1004, 'okomentovanyId' => 1036, 'odsuhlaseny' => 1, 'komentar' => 'Je to parada'),
                        array('autor' => 1004, 'okomentovanyId' => 1004, 'odsuhlaseny' => 1, 'komentar' => 'Toto je skandal'),
                        array('autor' => 1036, 'okomentovanyId' => 1004, 'odsuhlaseny' => 1, 'komentar' => 'ste super'),
                        array('autor' => 1036, 'okomentovanyId' => 1004, 'odsuhlaseny' => 1, 'komentar' => 'Dobry den ako sa mame'),
                    ]);
    }
}
