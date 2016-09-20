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
              'code',
              'name_en',
              'name_kh'
          ]
       ]
     ]);
  }

  /** @test */
  public function it_store_new_province()
  {
    $user = factory(App\User::class)->create(['password' => '12345678']);

    $form_data = [
      'code' => 'KRA',
      'name_en' => 'Kratie',
      'name_kh' => 'ក្រចេះ', 
    ];

    $this->post('/api/province/store', $form_data, $this->headers($user))
        ->seeInDatabase('provinces', $form_data);
  }

  /** @test */
  public function it_update_province()
  {
    $user = factory(App\User::class)->create(['password' => '12345678']);

    $form_data = [
      'code' => 'PNP',
      'name_en' => 'Phnom Penh',
      'name_kh' => 'ភ្នំពេញ',
    ];

    $province = factory(App\Province::class)->create($form_data);
    $this->seeInDatabase('provinces', $form_data);

    $province->code = 'PNP1';
    $province->name_en = 'Phnom Penh 1';
    $province->name_kh = 'ភ្នំពេញ 1';

    $this->put('/api/province/update', $province->toArray(), $this->headers($user))
        ->seeInDatabase('provinces', $province->toArray());
  }
}
