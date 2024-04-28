<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EarthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Earth')->insert([
            ['name' => 'Earth', 'Forming the Earth' => 'Trái Đất hình thành khoảng 4.54 tỷ năm trước, từ đĩa tiền hành tinh xung quanh Mặt Trời. Quá trình hình thành ban đầu bao gồm sự va chạm và kết dính của các vật chất, dần dần tạo thành một hành tinh đặc.' , 'Cooling and First Crust Forming' => 'Sau khi hình thành, Trái Đất nóng chảy toàn bộ do năng lượng từ các va chạm và phân rã phóng xạ. Khi bắt đầu làm mát, lớp vỏ đá đầu tiên của Trái Đất hình thành.', 'The Emergence of the Early Ocean and Atmosphere' => 'Nước từ hơi nước trong khí quyển ngưng tụ, hình thành đại dương sơ khai. Trong giai đoạn này, khí quyển chủ yếu chứa carbon dioxide, amoniac và methane, không có oxy tự do.', 'Development of Living Organisms' => 'Sự sống đầu tiên, dưới dạng vi khuẩn, xuất hiện khoảng 3.5 tỷ năm trước. Các vi sinh vật như tảo xanh lam đã bắt đầu quá trình quang hợp, giải phóng oxy vào khí quyển, dẫn đến sự kiện Oxy hóa Lớn khoảng 2.4 tỷ năm trước, làm tăng mức oxy và giảm carbon dioxide trong khí quyển.','Continental Separation and Movement' => 'Các lục địa ban đầu của Trái Đất liên tục chuyển động do hiện tượng kiến tạo mảng. Sự chuyển động này đã gây ra sự hình thành, phân rã và tái hình thành của các siêu lục địa, ví dụ như Pangea.', 'The Development of Diverse Life' => 'Sự phát triển của các loài động vật phức tạp bắt đầu trong thời kỳ Cambrian, khoảng 540 triệu năm trước, một sự kiện được gọi là Bùng Nổ Cambrian. Sự phong phú và đa dạng của sự sống trên Trái Đất đã tăng lên đáng kể kể từ đó.', 'Ice Ages and Warming' => 'Trái Đất đã trải qua nhiều chu kỳ băng hà và thời kỳ ấm lên. Sự thay đổi trong khí hậu này đã ảnh hưởng lớn đến sự phát triển của các hệ sinh thái và sự phân bố của các loài.','Human Influence' => 'Trong vài nghìn năm qua, hoạt động của con người đã bắt đầu ảnh hưởng đáng kể đến Trái Đất, từ việc thay đổi cảnh quan, sử dụng tài nguyên, đến ô nhiễm môi trường và biến đổi khí hậu.'],
           
        ]);
            
}
}