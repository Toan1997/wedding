<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            'Vì sao Anh/Chị quyết định nghỉ việc tại công ty?',
            'Điều gì đã khiến anh/chị bắt đầu tìm kiếm (tiếp nhận) cơ hội làm việc mới?',
            'Công ty có trang bị đầy đủ điều kiện để anh/chị làm việc tốt nhất khả năng không?',
            'Công ty mới có điểm nào ưu việt hơn công ty đang làm.',
            'Anh/Chị thích và không thích công ty ở điểm nào?',
            'Nhận xét về người quản lý trực tiếp & ban lãnh đạo công ty của anh/chị.',
            'Nếu anh/chị có thể thay đổi một điều gì đó ở công việc hay công ty chúng ta, anh/em sẽ thay đổi điều gì?',
            'Anh/Chị sẽ giới thiệu (đề xuất) cơ hội nghề nghiệp tạo công ty với bạn bè chứ? Vì sao?',
            'Bạn cảm thấy thành quả của mình đã được nhận ra và trân trọng ở mức nào?',
            'Bạn thấy mình đã được đào tạo và hỗ trợ đúng với mong muốn chưa?',
            'Có điều gì mà bạn ước là mình đã biết sớm hơn không?'   
        ];
        for($i = 0; $i < count($questions);$i++)
        {
        	DB::table('questions')->insert(
	        	[
	        		'name' => $questions[$i],
                    'created_at' => new DateTime(),
	        	]
        	);
        }
    }
}
