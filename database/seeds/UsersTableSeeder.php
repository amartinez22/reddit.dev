<?php

use Illuminate\Database\Seeder;
use App\Providers\User;

class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = "Bobby Tables";
        $user1->email = "bobbytables@yahoo.com";
        $user1->password = Hash::make('password123');
        $user1->save();

        $user2 = new User();
        $user2->name = "Allen Thomas";
        $user2->email = "allenthomas@yahoo.com";
        $user2->password = Hash::make('password123');
        $user2->save();

        $user3 = new User();
        $user3->name = "Justin Reich";
        $user3->email = "justin@instructor.com";
        $user3->password = Hash::make('password123');
        $user3->save();

        $user4 = new User();
        $user4->name = "Ryan Orsinger";
        $user4->email = "orsingeriscool@yahoo.com";
        $user4->password = Hash::make('password123');
        $user4->save();

        $user5= new User();
        $user5->name = "Analyssa Tables";
        $user5->email = "analyssa@yahoo.com";
        $user5->password = Hash::make('password123');
        $user5->save();

        $user6 = new User();
        $user6->name = "Veronica Allen";
        $user6->email = "veronica@yahoo.com";
        $user6->password = Hash::make('password123');
        $user6->save();

        $user7 = new User();
        $user7->name = "Warren Junior";
        $user7->email = "warren@yahoo.com";
        $user7->password = Hash::make('password123');
        $user7->save();

        $user8 = new User();
        $user8->name = "Sadie Ortiz";
        $user8->email = "sadietherat@yahoo.com";
        $user8->password = Hash::make('password123');
        $user8->save();

        $user9 = new User();
        $user9->name = "Water Bottle";
        $user9->email = "water@yahoo.com";
        $user9->password = Hash::make('password123');
        $user9->save();

        $user10 = new User();
        $user10->name = "Gemmy Singleterry";
        $user10->email = "gemmytherat@yahoo.com";
        $user10->password = Hash::make('password123');
        $user10->save();

       
    }
}
