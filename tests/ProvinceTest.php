<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProvinceTest extends TestCase
{
	use DatabaseMigrations;

  /** @test */
  public function it_fetches_provinces()
  {
  	$this->seed('ProvincesTableSeeder');
  	$user = factory(App\User::class)->create(['password' => '12345678']);

  	$this->get('/api/provinces', $this->headers($user))
     ->seeJsonStructure([
        'provinces' => [
	        '*' => [
	            'name_kh',
	            'name_en'
	        ]
        ]
     ]);
  }
}
