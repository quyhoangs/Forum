<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReadThreadsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp() : void 
    {
        parent::setUp();
        $this->thread=factory('App\Thread')->create();
    }

    public function test_a_user_can_view_all_threads()
    {   

        $response = $this->get('/threads') ->assertSee($this->thread->title);
       
    }
    public function test_a_user_can_read_a_single_threads()
    {   
        $response= $this->get('/threads/'.$this->thread->id)->assertSee($this->thread->title);
    }

    public function test_a_user_can_read_replies_that_are_associated_with_a_thread()
    {   
        $reply=factory('App\Reply')
            ->create(['thread_id'=> $this->thread->id]);
            
        $this->get('/threads/'.$this->thread->id)
            ->assertSee($reply->body);
    }
}
