<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
	use DatabaseMigrations;

  /**
   * @test
   */
  public function it_fetch_users()
  {
    $user = factory(App\User::class)->create(['password' => '12345678']);

		$this->get('/api/users', $this->headers($user))
     ->seeJsonStructure([
        'data' => [
                '*' => [
                    'user_name'
                ]
             ],
        'current_page'
     ]);
  }
}
