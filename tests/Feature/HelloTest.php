<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use App\Person;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;

class HelloTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);

        $arr = [];
        $this->assertTrue(true);

        $msg = 'hello';
        $this->assertEquals('hello', $msg);

        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);
    }

    use RefreshDatabase;

    public function testHelloController()
    {
        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/hello');
        $response->assertStatus(302);

        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/hello');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }

    public function testHelloDB()
    {
        factory(User::class)->create([
            'name' => 'aaa',
            'email' => 'aaa@gmail.com',
            'password' => '12345678'
        ]);

        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users',[
            'name' => 'aaa',
            'email' => 'aaa@gmail.com',
            'password' => '12345678'
        ]);


        factory(Person::class)->create([
            'name' => 'aaa',
            'mail' => 'aaa@gmail.com',
            'age' => 20
        ]);

        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people',[
            'name' => 'aaa',
            'mail' => 'aaa@gmail.com',
            'age' => 20
        ]);
    }
}
