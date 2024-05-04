<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObservatoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('observatory')->insert([
            ['name' => 'Đài Quan Sát Dựa Trên Mặt Đất', 'Telescope' => 'Là thiết bị chính, có thể là kính phản xạ hoặc kính khúc xạ, đôi khi là kết hợp cả hai. Kính phản xạ sử dụng gương để thu nhận và tập trung ánh sáng, trong khi kính khúc xạ sử dụng thấu kính.' , 'Dome' => 'Là cấu trúc bảo vệ kính thiên văn khỏi các yếu tố thời tiết và có khả năng xoay để kính thiên văn có thể hướng về nhiều phía khác nhau trên bầu trời.', 'Control room' => 'Trang bị các hệ thống máy tính và phần mềm để điều khiển kính thiên văn và xử lý dữ liệu quan sát. Thường bao gồm các màn hình hiển thị dữ liệu quan sát thời gian thực.'],
            ['name' => 'Đài Quan Sát Không Gian', 'Satellite' => 'Phương tiện mang kính thiên văn, được phóng vào quỹ đạo xung quanh Trái Đất hoặc vào không gian sâu.' , 'Space telescope' => 'Thường thiết kế để quan sát ở các bước sóng mà khí quyển Trái Đất hấp thụ, như tia X hoặc hồng ngoại.', 'Data Transmission System' => 'Gửi dữ liệu từ không gian về Trái Đất thông qua các liên kết vệ tinh.'],
            ['name' => 'Đài Quan Sát Radio', 'Radio antenna' => 'Thay vì kính quang học, đài quan sát radio sử dụng các ăng-ten lớn để thu nhận sóng radio từ vũ trụ.' , 'Antenna Array' => 'Các ăng-ten có thể được sắp xếp thành mảng lớn để tăng khả năng nhạy và độ phân giải của quan sát.', 'Signal Processor' => ' Phức tạp hơn so với đài quan sát quang học, bao gồm các thiết bị để khuếch đại và phân tích các tín hiệu radio yếu.'],
            ['name' => 'Đài Quan Sát Mặt Trời', 'Special filter' => 'Sử dụng các loại kính lọc để bảo vệ thiết bị và người quan sát khỏi bức xạ mạnh từ Mặt Trời.' , 'Spectrum analyzers' => 'Cho phép nghiên cứu chi tiết các phổ bức xạ từ Mặt Trời để hiểu các hoạt động như bùng nổ mặt trời và bức xạ mặt trời.', 'Accurate tracking system' => ' Để theo dõi các chuyển động của Mặt Trời một cách chính xác, đòi hỏi hệ thống theo dõi cực kỳ chính xác để duy trì sự hướng của kính thiên văn.'],
        ]);
    }
}
