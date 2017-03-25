<?php
/*
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;*/

class ExampleTest extends FeatureTestCase
{
	//use DatabaseMigrations;
	//use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
	function test_basic_example()
    {
    	$name = "Victor Planchuelo";
    	$email = 'admin@forolaravel53.com';

    	$user = factory(\App\User::class)->create([
    		'name' => $name,
			'email' => $email,
		]);

        $this->actingAs($user, 'api')
			->visit('api/user')
			->see($name)
        	->see($email);
    }
}
