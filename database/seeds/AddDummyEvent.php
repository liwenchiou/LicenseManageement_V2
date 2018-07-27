<?php

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'Finacial forum', 'start_date'=>'2018-7-12', 'end_date'=>'2018-07-15'],
            ['title'=>'Devtalk', 'start_date'=>'2018-7-13', 'end_date'=>'2018-07-25'],
            ['title'=>'Super Event', 'start_date'=>'2018-07-23', 'end_date'=>'2018-07-24'],
            ['title'=>'wtf event', 'start_date'=>'2018-07-19', 'end_date'=>'2018-07-27'],
        ];
        \DB::table('events')->insert($data);
    }
}
