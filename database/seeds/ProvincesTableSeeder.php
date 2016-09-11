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
    App\Province::create(['code' => 'PNP', 'name_en' => 'Phnom Penh', 'name_kh' => 'ភ្នំពេញ']);
    App\Province::create(['code' => 'CHH', 'name_en' => 'Kampong Chhnang', 'name_kh' => 'កំពង់ឆ្នាំង']);
    App\Province::create(['code' => 'BAN', 'name_en' => 'Banteay Meanchey', 'name_kh' => 'បន្ទាយមានជ័យ']);
    App\Province::create(['code' => 'ODD', 'name_en' => 'Oddor Meanchey', 'name_kh' => 'ឧត្តរមានជ័យ']);
    App\Province::create(['code' => 'BAT', 'name_en' => 'Battambang', 'name_kh' => 'បាត់ដំបង']);
    App\Province::create(['code' => 'CHA', 'name_en' => 'Kampong Cham', 'name_kh' => 'កំពង់ចាម']);
    App\Province::create(['code' => 'SPE', 'name_en' => 'Kampong Speu', 'name_kh' => 'កំពង់ស្ពឺ']);
    App\Province::create(['code' => 'THO', 'name_en' => 'Kampong Thom', 'name_kh' => 'កំពង់ធំ']);
    App\Province::create(['code' => 'KAM', 'name_en' => 'Kampot', 'name_kh' => 'កំពត']);
    App\Province::create(['code' => 'KAN', 'name_en' => 'Kandal', 'name_kh' => 'កណ្តាល']);
    App\Province::create(['code' => 'KOH', 'name_en' => 'Koh Kong', 'name_kh' => 'កោះកុង']);
    App\Province::create(['code' => 'KRA', 'name_en' => 'Kratie', 'name_kh' => 'ក្រចេះ']);
    App\Province::create(['code' => 'MON', 'name_en' => 'Mondulkiri', 'name_kh' => 'មណ្ឌលគីវី']);
    App\Province::create(['code' => 'PRH', 'name_en' => 'Preah Vihear', 'name_kh' => 'ព្រះវិហា']);
    App\Province::create(['code' => 'PRE', 'name_en' => 'Prey Veng', 'name_kh' => 'ព្រៃវែង']);
    App\Province::create(['code' => 'PUR', 'name_en' => 'Pursat', 'name_kh' => 'ពោធិ៍សាត់']);
    App\Province::create(['code' => 'RAT', 'name_en' => 'Rattanakiri', 'name_kh' => 'រតនគីរី']);
    App\Province::create(['code' => 'SIE', 'name_en' => 'Siemreap', 'name_kh' => 'សៀមរាប']);
    App\Province::create(['code' => 'SIH', 'name_en' => 'Sihanouk Ville', 'name_kh' => 'ក្រុងព្រះសីហនុ']);
    App\Province::create(['code' => 'STU', 'name_en' => 'Stung Treng', 'name_kh' => 'ស្ទឹងត្រែង']);
    App\Province::create(['code' => 'SVA', 'name_en' => 'Svay Rieng', 'name_kh' => 'ស្វាយរៀង']);
    App\Province::create(['code' => 'TAK', 'name_en' => 'Takeo', 'name_kh' => 'តាកែវ']);
    App\Province::create(['code' => 'KEP', 'name_en' => 'Kep Ville', 'name_kh' => 'កែប']);
    App\Province::create(['code' => 'PAI', 'name_en' => 'Pailine Ville', 'name_kh' => 'ប៉ៃលិន']);
  }
}
