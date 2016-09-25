<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProvincesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();

    App\Province::create([ 'id' => 1, 'code' => 'BAN', 'name_kh' => 'ខេត្តបន្ទាយមានជ័យ', 'name_en' => 'Banteay Meanchey']);
    App\Province::create([ 'id' => 2, 'code' => 'BAT', 'name_kh' => 'ខេត្តបាត់ដំបង', 'name_en' => 'Battambang']);
    App\Province::create([ 'id' => 3, 'code' => 'CHA', 'name_kh' => 'ខេត្តកំពង់ចាម', 'name_en' => 'Kampong Cham']);
    App\Province::create([ 'id' => 4, 'code' => 'CHH', 'name_kh' => 'ខេត្តកំពង់ឆ្នាំង', 'name_en' => 'Kampong Chhnang']);
    App\Province::create([ 'id' => 5, 'code' => 'SPE', 'name_kh' => 'ខេត្តកំពង់ស្ពឺ', 'name_en' => 'Kampong Speu']);
    App\Province::create([ 'id' => 6, 'code' => 'THO', 'name_kh' => 'ខេត្តកំពង់ធំ', 'name_en' => 'Kampong Thom']);
    App\Province::create([ 'id' => 7, 'code' => 'KAM', 'name_kh' => 'ខេត្តកំពត', 'name_en' => 'Kampot']);
    App\Province::create([ 'id' => 8, 'code' => 'KAN', 'name_kh' => 'ខេត្តកណ្ដាល', 'name_en' => 'Kandal']);
    App\Province::create([ 'id' => 9, 'code' => 'KOH', 'name_kh' => 'ខេត្តកោះកុង', 'name_en' => 'Koh Kong']);
    App\Province::create([ 'id' => 10, 'code' => 'KRA', 'name_kh' => 'ខេត្តក្រចេះ', 'name_en' => 'Kratie']);
    App\Province::create([ 'id' => 11, 'code' => 'MON', 'name_kh' => 'ខេត្តមណ្ឌលគិរី', 'name_en' => 'Mondul Kiri']);
    App\Province::create([ 'id' => 12, 'code' => 'PNP', 'name_kh' => 'រាជធានីភ្នំពេញ', 'name_en' => 'Phnom Penh']);
    App\Province::create([ 'id' => 13, 'code' => 'PRH', 'name_kh' => 'ខេត្តព្រះវិហារ', 'name_en' => 'Preah Vihear']);
    App\Province::create([ 'id' => 14, 'code' => 'PRE', 'name_kh' => 'ខេត្តព្រៃវែង', 'name_en' => 'Prey Veng']);
    App\Province::create([ 'id' => 15, 'code' => 'PUR', 'name_kh' => 'ខេត្តពោធិ៍សាត់', 'name_en' => 'Pursat']);
    App\Province::create([ 'id' => 16, 'code' => 'RAT', 'name_kh' => 'ខេត្តរតនគិរី', 'name_en' => 'Rattanakiri']);
    App\Province::create([ 'id' => 17, 'code' => 'SIE', 'name_kh' => 'ខេត្តសៀមរាប', 'name_en' => 'Siem Reap']);
    App\Province::create([ 'id' => 18, 'code' => 'SIH', 'name_kh' => 'ខេត្តព្រះសីហនុ', 'name_en' => 'Sihanouk Ville']);
    App\Province::create([ 'id' => 19, 'code' => 'STU', 'name_kh' => 'ខេត្តស្ទឹងត្រែង', 'name_en' => 'Stung Treng']);
    App\Province::create([ 'id' => 20, 'code' => 'SVA', 'name_kh' => 'ខេត្តស្វាយរៀង', 'name_en' => 'Svay Rieng']);
    App\Province::create([ 'id' => 21, 'code' => 'TAK', 'name_kh' => 'ខេត្តតាកែវ', 'name_en' => 'Takeo']);
    App\Province::create([ 'id' => 22, 'code' => 'ODD', 'name_kh' => 'ខេត្តឧត្ដរមានជ័យ', 'name_en' => 'Otdar Meanchey']);
    App\Province::create([ 'id' => 23, 'code' => 'KEP', 'name_kh' => 'ខេត្តកែប', 'name_en' => 'Kep Ville']);
    App\Province::create([ 'id' => 24, 'code' => 'PAI', 'name_kh' => 'ខេត្តប៉ៃលិន', 'name_en' => 'Pailine Ville']);

    Model::reguard();
  }
}
