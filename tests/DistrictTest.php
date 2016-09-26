<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DistrictTest extends TestCase
{
	use DatabaseMigrations;

  /** @test */
  public function it_fetches_districts()
  {
  	$this->seed('DistrictsTableSeeder');
  	$user = factory(App\User::class)->create(['password' => '12345678']);

  	$this->get('/api/districts', $this->headers($user))
     ->seeJsonStructure([
        'districts' => [
          '*' => [
              'province_id',
              'name_en',
              'name_kh',
              'province' => []
          ]
       ]
     ]);
  }
}
