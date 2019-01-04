<?php

use Illuminate\Database\Seeder;
use App\Restdata;


class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['message' => 'google', 'url' => 'https://google.co.jp'],
            ['message' => 'yahoo', 'url' => 'https://www.yahoo.co.jp/'],
            ['message' => 'amazon', 'url' => 'https://www.amazon.co.jp/'],
        ];

        foreach($array as $item) {
            $restdata = new Restdata;
            $restdata->fill($item)->save();
        }
    }
}
