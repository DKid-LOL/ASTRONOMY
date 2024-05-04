<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CometsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comets')->insert([
            ['name' => 'Comets(Sao Chổi)', 'Nucleus' => 'Đây là phần trung tâm rắn của sao chổi, thường được cấu tạo bởi băng, bụi, và các hợp chất hữu cơ. Kích thước của hạt nhân có thể dao động từ vài trăm mét đến vài chục kilômét.' , 'Coma' => 'Khi sao chổi tiến gần mặt trời, nhiệt độ tăng lên khiến cho băng trong hạt nhân bắt đầu bốc hơi, tạo ra một lớp khí và bụi bao quanh hạt nhân gọi là coma. Coma có thể rất lớn, đôi khi kích thước lớn hơn cả hành tinh.', 'Tail' => 'Sao chổi thường có hai loại đuôi: đuôi bụi và đuôi ion. Đuôi bụi được hình thành từ các hạt bụi nhỏ được giải phóng từ hạt nhân và bị ánh sáng mặt trời chiếu sáng. Đuôi ion, hoặc đuôi plasma, được tạo ra từ các ion hình thành do bức xạ mặt trời và luôn hướng trực tiếp ra xa mặt trời.', 'Hydrogen Envelope' => 'Khi sao chổi đến gần mặt trời, một lớp khí hydro mở rộng cũng có thể hình thành xung quanh nó. Đây là một lớp khí khổng lồ và mờ nhạt, thường không thể nhìn thấy bằng mắt thường mà chỉ có thể quan sát được qua các dụng cụ chuyên dụng.'],
        ]);
    }
}
