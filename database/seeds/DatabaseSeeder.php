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
        DB::table('users')->delete();
        
        $user = new User();
        $user->name = 'Administrator';
        $user->email = 'admin@teikasmuzikanti.dev';
        $user->password = bcrypt('admin');    
        $user->save();
    }
}
class InfoTableSeeder extends Seeder {
    public function run(){
        DB::table('info')->delete();
        Info::create(array('info'=>'Esam Teikas Muzikanti'));
    }
} 

class EventsTableSeeder extends Seeder {
    public function run(){
        DB::table('events')->delete();
        Events::create(array('id' => 1,'event'=>'pasākums', 'kad' =>'2016-02-28', 'kur' => 'muzejā', 'created_at' => '2016-01-17 14:57:51', 'updated_at' => '2016-01-17 14:57:51'));
    }
 }
 


    

