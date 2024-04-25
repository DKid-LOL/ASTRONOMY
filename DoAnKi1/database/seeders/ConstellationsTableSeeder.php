<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConstellationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Constellations')->insert([
            ['name' => 'orion(thợ săn)', 'location' => 'Dễ thấy trong bầu trời mùa đông ở cả hai bán cầu.' , 'Outstanding features' => 'Dải đai của Orion bao gồm ba ngôi sao thẳng hàng là Alnitak, Alnilam, và Mintaka.', 'Other main stars' => 'Betelgeuse (màu đỏ, vai của Orion) và Rigel (màu xanh sáng, chân của Orion).', 'Some attractive astronomical objects' => 'Đám mây Orion, M42 (Tinh vân Orion).'],
            ['name' => 'Ursa Major (Chòm Đại Hùng)', 'location' => 'Dễ nhận thấy quanh năm ở bán cầu Bắc.' , 'Outstanding features' => 'Cái gầu hoặc Đại Hùng Đẩu, bao gồm bảy ngôi sao sáng.', 'Other main stars' => 'Dubhe và Merak (hai ngôi sao tạo thành phần cạnh của cái gầu), giúp chỉ đường tới sao Bắc Đẩu.', 'Some attractive astronomical objects' => 'M101 (Tinh vân xoắn ốc).'],
            ['name' => 'Scorpius (Bọ cạp)', 'location' => 'Xuất hiện tốt nhất trong mùa hè ở bán cầu Bắc.' , 'Outstanding features' => 'Hình dạng như một con bọ cạp.', 'Other main stars' => ' Antares (ngôi sao đỏ rực, "trái tim" của Bọ cạp).', 'Some attractive astronomical objects' => 'M4 (Cụm sao cầu gần Antares).'],
            ['name' => 'Leo (Sư tử)', 'location' => 'Dễ thấy vào mùa xuân ở bán cầu Bắc.' , 'Outstanding features' => 'Hình dạng giống như một con sư tử.', 'Other main stars' => 'Regulus (đánh dấu "trái tim" của sư tử), Algieba.', 'Some attractive astronomical objects' => ' Leo Triplet (ba thiên hà giao diện với nhau).'],
            ['name' => 'Cassiopeia (Nữ Hoàng Cassiopeia)', 'location' => 'Dễ nhận thấy quanh năm ở bán cầu Bắc.' , 'Outstanding features' => 'Hình dạng chữ W hoặc M.', 'Other main stars' => 'Schedar, Caph.', 'Some attractive astronomical objects' => 'Tinh vân Cassiopeia A, M52 (Cụm sao mở).'],
            ['name' => 'Cygnus (Thiên nga)', 'location' => 'Dễ thấy vào mùa hè và thu ở bán cầu Bắc.' , 'Outstanding features' => 'Hình dạng như một con thiên nga đang bay.', 'Other main stars' => 'Deneb (đuôi của thiên nga, một phần của Tam giác Mùa hè).', 'Some attractive astronomical objects' => 'Cygnus X-1 (một trong những nguồn tia X mạnh nhất trên bầu trời.'],
            ['name' => 'Aquarius (Người mang nước)', 'location' => 'Dễ nhìn thấy vào mùa thu ở bán cầu Bắc.' , 'Outstanding features' => ' Hình ảnh tượng trưng là người đang đổ nước từ bình.', 'Other main stars' => 'Sadalmelik (ngôi sao sáng nhất trong chòm), Sadalsuud, và Aquarii.', 'Some attractive astronomical objects' => 'M2 (một trong những cụm sao cầu sáng nhất), Nebula Helix (một tinh vân hành tinh đẹp mắt).'],

        ]);
    }
}
