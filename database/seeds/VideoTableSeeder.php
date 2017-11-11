<?php

use Illuminate\Database\Seeder;

use App\Video;
use Faker\Factory;


class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Video::truncate();

        $video = array(
                        ['name'=>'Bản tin thời sự trưa 01/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/4OgeI_giehw?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 01/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/cUEzPmTDPGg?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 02/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/QdBfiL2c3_c?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 02/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/Kp3Dsx82tpI?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 03/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/OEzb_FPAXj4?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 03/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/q5d9SC1pap4?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 04/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/oPd6xQD_WAk?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 04/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/BXIXG_zJIKQ?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 05/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/RSIXjTMWmxo?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 05/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/b--UloOdfz0?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 06/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/DOhPACg4lz0?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 06/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/3nGRI46cY94?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 07/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/Z5vZgQHzn30?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 07/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/JxD_pjDah4g?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 08/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/SRK_D9Psfko?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 08/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/2TCnlUXE9YU?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 09/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/eNBjiZIXL3g?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 09/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/kZg28mAP0Lg?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Bản tin thời sự trưa 10/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/eSRBJNnpMa0?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>'],
                        ['name'=>'Chương trình thời sự tối 10/11/2017','src'=>'<iframe width="854" height="480" src="https://www.youtube.com/embed/EoaipTt72wQ?list=PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv" frameborder="0" gesture="media" allowfullscreen></iframe>']
                            );

        foreach($video as $vd) {

            Video::create([
                'loaivideo_id' => '1',
                'name' => $vd['name'],
                'slug' => str_slug($vd['name']),
                'src' => $vd['src'],
                'daduyet' => '1'
            ]);

        }
    }
}
