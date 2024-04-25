<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('planets')->insert([
            ['name' => 'Mercury(Sao Thủy)', 'size' => '4,880 km (3,032 dặm)' , 'atmosphere' => 'Không có bầu khí quyển đáng kể', 'distance_from_sun' => '57,910,000 km (trung bình)', 'distance_from_earth' => 'Biến đổi tùy theo vị trí trong quỹ đạo của nó'],
            ['name' => 'Venus(Sao Kim)', 'size' => '12,104 km (7,521 dặm)', 'atmosphere' => 'Dày đặc, tạo ra hiệu ứng nhà kính mạnh mẽ', 'distance_from_sun' => '108,200,000 km (trung bình', 'distance_from_earth' => 'Biến đổi tùy theo vị trí trong quỹ đạo của nó'],
            ['name' => 'Earth(Trái Đất)', 'size' => '12,742 km (7,918 dặm)', 'atmosphere' => 'Chứa oxy và các thành phần khác, hỗ trợ sự sống', 'distance_from_sun' => '149,600,000 km (trung bình)', 'distance_from_earth' => '0 km (chính là nơi chúng ta đang sống)'],
            ['name' => 'Sao Hỏa (Mars)', 'size' => '6,779 km (4,212 dặm)', 'atmosphere' => 'Mỏng và có khả năng chứa nước', 'distance_from_sun' => '227,900,000 km (trung bình)', 'distance_from_earth' => 'Biến đổi tùy theo vị trí trong quỹ đạo của nó'],
            ['name' => 'Sao Mộc (Jupiter)', 'size' => '139,822 km (86,881 dặm)', 'atmosphere' => 'Chứa khí hiđro và hélium, cùng với các thành phần khác', 'distance_from_sun' => '778,500,000 km (trung bình)', 'distance_from_earth' => 'Biến đổi tùy theo vị trí trong quỹ đạo của nó'],
            ['name' => 'Sao Thổ (Saturn)', 'size' => '116,464 km (72,367 dặm)', 'atmosphere' => 'Chứa khí hiđro và hélium, cùng với các thành phần khác', 'distance_from_sun' => '1,429,400,000 km (trung bình)', 'distance_from_earth' => 'Biến đổi tùy theo vị trí trong quỹ đạo của nó'],
            ['name' => 'Sao Thiên Vương (Uranus)', 'size' => '50,724 km (31,518 dặm)', 'atmosphere' => 'Chứa khí methane, gây ra màu xanh lam đặc trưng', 'distance_from_sun' => '2,870,990,000 km (trung bình)', 'distance_from_earth' => 'Biến đổi tùy theo vị trí trong quỹ đạo của nó'],
            ['name' => 'Sao Hải Vương (Neptune)', 'size' => ' 49,244 km (30,677 dặm)', 'atmosphere' => 'Chứa khí methane, gây ra màu xanh đậm', 'distance_from_sun' => '4,504,300,000 km (trung bình)', 'distance_from_earth' => 'Biến đổi tùy theo vị trí trong quỹ đạo của nó'],
        ]);
    }
}
    