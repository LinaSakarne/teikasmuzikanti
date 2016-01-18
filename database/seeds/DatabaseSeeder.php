<?php


use App\Events;
use App\Info;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(InfoTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }

}
class UserTableSeeder extends Seeder {
    public function run() {
//        DB::table('users')->delete();
        
        $user = new User();
        $user->name = 'Administrator';
        $user->email = 'admin@teikasmuzikanti.dev';
        $user->password = bcrypt('admin');    
        $user->save();
    }
}
class InfoTableSeeder extends Seeder {
    public function run(){
//        DB::table('info')->delete();
        Info::create(array('info'=>'Esam muzicējoši jaunieši, kuri satikās folkloras kopā "Kokle". Visi dzīvojam Teikā, no kurienes arī mūsu nosaukums. Esam muzikāli instrumentāla apvienība, kuras dalībnieki katrs savā laikā pievienojās folkloras kopai Kokle. Gadu gaitā sapratām, ka esam labi sadziedājušies un saspēlējušies tāpēc nolēmām izveidot "Teikas Muzikantus".'));
        
        
    }
} 

class EventsTableSeeder extends Seeder {
    public function run(){
//        DB::table('events')->delete();
        
        Events::create(array('id' => 2,'event'=>'muzicēsim līdz pusnaktij.', 'kad' =>'2016-02-20', 'kur' => ' Folklubā "Ala" no 21:00', 'created_at' => '2016-01-17 14:57:51', 'updated_at' => '2016-01-17 14:57:51'));
        Events::create(array('id' => 3,'event'=>' svinēsim Meteņus visas dienas garumā.', 'kad' =>'2016-02-28', 'kur' => 'Brīvdabas muzejā ', 'created_at' => '2016-01-17 14:57:51', 'updated_at' => '2016-01-17 14:57:51'));
        Events::create(array('id' => 4,'event'=>'rādīsim savas prasmes 19:00.', 'kad' =>'2016-04-19', 'kur' => 'Kokneses ziņģē, Kokneses kultūras namā  ', 'created_at' => '2016-01-17 14:57:51', 'updated_at' => '2016-01-17 14:57:51'));
    }
 }
 


    

