<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Projects')->delete();

        $lists = array(
            ['id' => 1, 'name' => 'Liste 1', 'slug' => 'Liste-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Liste 2', 'slug' => 'Liste-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Liste 3', 'slug' => 'Liste-3', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        DB::table('Projects')->insert($lists);
    }
}
