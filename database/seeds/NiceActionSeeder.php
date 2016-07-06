<?php

use Illuminate\Database\Seeder;
use App\NiceAction;

class NiceActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nice_action=new NiceAction;
        $nice_action->name="Greet";
        $nice_action->niceness=3;
        $nice_action->save();
 
        $nice_action=new NiceAction;
        $nice_action->name="hug";
        $nice_action->niceness=6;
        $nice_action->save();

        $nice_action=new NiceAction;
        $nice_action->name="kiss";
        $nice_action->niceness=12;
        $nice_action->save();
       
    }
}
