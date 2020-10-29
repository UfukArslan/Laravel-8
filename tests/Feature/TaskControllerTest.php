<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);

        $response->assertViewHas('tasks');
    }

    public function testShow()
    {
        $task = Task::factory()->make();

        $response = $this->get('/tasks/' . $task->id);

        $response->assertStatus(200);

        //$response->assertSeeText('Detail of task #'.$task->id);
    }

    public function testShowUnexistingTask(){

        $response = $this->get('/task/1234');

        $response->assertStatus(404);
    }

     public function testPostOhneName(){

        $response = $this->post('/tasks', ['name' => '']);

        $response->assertStatus(302);

    }

      public function testPostWithName(){

        $response = $this->post('/tasks', ['name' => 'Sally']);

        $response->assertStatus(200);
        $response->assertViewHas('task');

    }




}
