<?php

use Illuminate\Database\Seeder;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s', strtotime('now'));
        for($i=1; $i<7; $i++){
           DB::table('descriptions')->insert([
            'product_id'=>$i,
            'body'=>uniqid(),
            'created_at'=>$now,
            'updated_at'=>$now,
            ]); 
        }
        
    }
}
