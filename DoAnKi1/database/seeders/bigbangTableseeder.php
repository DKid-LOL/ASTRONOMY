<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bigbangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bigbang')->insert([
            ['name' => 'bigbang', 'Initial Singularity' => 'Vụ Nổ Lớn bắt đầu từ một điểm có mật độ và nhiệt độ vô hạn, được gọi là điểm đơn (singularity), khoảng 13.8 tỷ năm trước. Điểm này chứa toàn bộ khối lượng và năng lượng của vũ trụ.' , 'Ifnlation' => 'Một phần nhỏ giây sau Vụ Nổ Lớn, vũ trụ đã trải qua một giai đoạn bành trướng nhanh chóng theo cấp số nhân được gọi là "sự lạm phát." Giai đoạn lạm phát này đã kéo căng cấu trúc của vũ trụ xa hơn nhiều so với kích thước ban đầu của nó.', 'Cooling and Formation of Basic Elements' => 'Khi vũ trụ bành trướng, nó cũng bắt đầu làm mát. Sự làm mát này cho phép hình thành các hạt nhân tử, bao gồm proton, neutron và electron. Vài phút sau sự bành trướng, điều kiện đã trở nên thích hợp để những hạt này kết hợp thành các hạt nhân đơn giản trong một quá trình được gọi là tổng hợp hạt nhân—chủ yếu tạo ra hydro và heli.', 'Formation of Atoms and Molecules' => 'Hàng trăm nghìn năm sau, khi vũ trụ tiếp tục làm mát, electron kết hợp với các hạt nhân để tạo thành các nguyên tử trung hòa. Kỷ nguyên mà nguyên tử đầu tiên hình thành được gọi là tái hợp. Sự hình thành hydro trung hòa đã cho phép vũ trụ trở nên trong suốt với bức xạ, giải phóng bức xạ nền vi sóng vũ trụ mà chúng ta vẫn có thể quan sát ngày nay.','Cosmic Microwave Background Radiation (CMB)' => 'CMB là một bức xạ nền vi sóng vũ trụ nhẹ, lấp đầy vũ trụ và là dư âm từ một giai đoạn sớm của vũ trụ trong lý thuyết Vụ Nổ Lớn. Nó được coi là bằng chứng then chốt cho lý thuyết Vụ Nổ Lớn vì sự tồn tại và các đặc tính của nó đã được dự đoán bởi lý thuyết trước khi nó được quan sát.', 'Structure Formation' => 'Lực hấp dẫn đã kéo các vật chất ban đầu đồng nhất vào các cục, hình thành các ngôi sao và thiên hà đầu tiên. Trong hàng tỷ năm, những cấu trúc nhỏ này đã phát triển thành mạng lưới vũ trụ rộng lớn của các thiên hà và cụm thiên hà mà chúng ta quan sát ngày nay.', 'Accelerating Expansion' => 'Quan sát các siêu tân tinh ở xa vào cuối những năm 1990 cho thấy sự bành trướng của vũ trụ đang tăng tốc. Điều này dẫn đến lý thuyết về năng lượng tối, một lực bí ẩn đang thúc đẩy sự tăng tốc này.'],
           
        ]);
            
}
}