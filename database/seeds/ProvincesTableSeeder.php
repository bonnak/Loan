<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    App\Province::create(['name_kh' => 'ភ្នំពេញ', 'name_en' => 'Phnom Penh']);
    App\Province::create(['name_kh' => 'កំពង់ឆ្នាំង', 'name_en' => 'Kampong Chhnang']);
    App\Province::create(['name_kh' => 'បន្ទាយមានជ័យ', 'name_en' => 'Banteay Meanchey']);
    App\Province::create(['name_kh' => 'ឧត្តរមានជ័យ', 'name_en' => 'Oddor Meanchey']);
    App\Province::create(['name_kh' => 'បាត់ដំបង', 'name_en' => 'Battambang']);
    App\Province::create(['name_kh' => 'កំពង់ចាម', 'name_en' => 'Kampong Cham']);
    App\Province::create(['name_kh' => 'កំពង់ស្ពឺ', 'name_en' => 'Kampong Speu']);
    App\Province::create(['name_kh' => 'កំពង់ធំ', 'name_en' => 'Kampong Thom']);
    App\Province::create(['name_kh' => 'កំពត', 'name_en' => 'Kampot']);
    App\Province::create(['name_kh' => 'កណ្តាល', 'name_en' => 'Kandal']);
    App\Province::create(['name_kh' => 'កោះកុង', 'name_en' => 'Koh Kong']);
    App\Province::create(['name_kh' => 'ក្រចេះ', 'name_en' => 'Kratie']);
    App\Province::create(['name_kh' => 'មណ្ឌលគីវី', 'name_en' => 'Mondulkiri']);
    App\Province::create(['name_kh' => 'ព្រះវិហា', 'name_en' => 'Preah Vihear']);
    App\Province::create(['name_kh' => 'ព្រៃវែង', 'name_en' => 'Prey Veng']);
    App\Province::create(['name_kh' => 'ពោធិ៍សាត់', 'name_en' => 'Pursat']);
    App\Province::create(['name_kh' => 'រតនគីរី', 'name_en' => 'Rattanakiri']);
    App\Province::create(['name_kh' => 'សៀមរាប', 'name_en' => 'Siemreap']);
    App\Province::create(['name_kh' => 'ក្រុងព្រះសីហនុ', 'name_en' => 'Sihanouk Ville']);
    App\Province::create(['name_kh' => 'ស្ទឹងត្រែង', 'name_en' => 'Stung Treng']);
    App\Province::create(['name_kh' => 'ស្វាយរៀង', 'name_en' => 'Svay Rieng']);
    App\Province::create(['name_kh' => 'តាកែវ', 'name_en' => 'Takeo']);
    App\Province::create(['name_kh' => 'កែប', 'name_en' => 'Kep Ville']);
    App\Province::create(['name_kh' => 'ប៉ៃលិន', 'name_en' => 'Pailine Ville']);
  }
}
