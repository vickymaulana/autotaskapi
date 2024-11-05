<?php

namespace Vendor\TasksApi\Database\Seeders;

use Illuminate\Database\Seeder;
use Vendor\TasksApi\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Task::create([
            'title' => 'Task One',
            'description' => 'This is the description of task one.',
            'is_completed' => false,
        ]);

        Task::create([
            'title' => 'Task Two',
            'description' => 'This is the description of task two.',
            'is_completed' => true,
        ]);
    }
}
