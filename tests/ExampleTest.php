<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user =Factory(\App\User::class)->create([
            'name'=>'Joel Enrique',
            'email'=>'joel@mimail.cl',
        ]);

        $this->actingAs($user,'api')
            ->visit('api/user')
            ->see('Joel Enrique')
            ->see('joel@mimail.cl');
    }
}
