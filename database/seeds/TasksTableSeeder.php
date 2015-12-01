<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tasks')->delete();

        $lists = array(
            ['id' => 1, 'name' => 'Tache 1', 'slug' => 'Tache-1', 'project_id' => 1, 'completed' => false, 'description' => 'Ma tache', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Tache 2', 'slug' => 'Tache-2', 'project_id' => 1, 'completed' => false, 'description' => 'Ma tache', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Tache 3', 'slug' => 'Tache-3', 'project_id' => 1, 'completed' => false, 'description' => 'Ma tache', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Tache 4', 'slug' => 'Tache-4', 'project_id' => 1, 'completed' => true, 'description' => 'Ma tache', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Tache 5', 'slug' => 'Tache-5', 'project_id' => 1, 'completed' => true, 'description' => 'Ma tache', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Tache 6', 'slug' => 'Tache-6', 'project_id' => 2, 'completed' => true, 'description' => 'Ma tache', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Tache 7', 'slug' => 'Tache-7', 'project_id' => 2, 'completed' => false, 'description' => 'Ma tache', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        DB::table('Tasks')->insert($lists);
    }
}
