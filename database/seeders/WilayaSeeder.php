<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaSeeder extends Seeder
{
    private $wilayas = [
        [
            'id' => '1',
            'wilaya_name' => 'Adrar',
            'ar_name' => 'أدرار',
        ],
        [
            'id' => '2',
            'wilaya_name' => 'Chlef',
            'ar_name' => 'الشلف',
        ],
        [
            'id' => '3',
            'wilaya_name' => 'Laghouat',
            'ar_name' => 'الأغواط',
        ],
        [
            'id' => '4',
            'wilaya_name' => 'Oum El Bouaghi',
            'ar_name' => 'أم البواقي',
        ],
        [
            'id' => '5',
            'wilaya_name' => 'Batna',
            'ar_name' => 'باتنة',
        ],
        [
            'id' => '6',
            'wilaya_name' => 'Béjaïa',
            'ar_name' => 'بجاية',
        ],
        [
            'id' => '7',
            'wilaya_name' => 'Biskra',
            'ar_name' => 'بسكرة',
        ],
        [
            'id' => '8',
            'wilaya_name' => 'Bechar',
            'ar_name' => 'بشار',
        ],
        [
            'id' => '9',
            'wilaya_name' => 'Blida',
            'ar_name' => 'البليدة',
        ],
        [
            'id' => '10',
            'wilaya_name' => 'Bouira',
            'ar_name' => 'البويرة',
        ],
        [
            'id' => '11',
            'wilaya_name' => 'Tamanrasset',
            'ar_name' => 'تمنراست',
        ],
        [
            'id' => '12',
            'wilaya_name' => 'Tbessa',
            'ar_name' => 'تبسة',
        ],
        [
            'id' => '13',
            'wilaya_name' => 'Tlemcen',
            'ar_name' => 'تلمسان',
        ],
        [
            'id' => '14',
            'wilaya_name' => 'Tiaret',
            'ar_name' => 'تيارت',
        ],
        [
            'id' => '15',
            'wilaya_name' => 'Tizi Ouzou',
            'ar_name' => 'تيزي وزو',
        ],
        [
            'id' => '16',
            'wilaya_name' => 'Alger',
            'ar_name' => 'الجزائر',
        ],
        [
            'id' => '17',
            'wilaya_name' => 'Djelfa',
            'ar_name' => 'الجلفة',
        ],
        [
            'id' => '18',
            'wilaya_name' => 'Jijel',
            'ar_name' => 'جيجل',
        ],
        [
            'id' => '19',
            'wilaya_name' => 'Setif',
            'ar_name' => 'سطيف',
        ],
        [
            'id' => '20',
            'wilaya_name' => 'Saeda',
            'ar_name' => 'سعيدة',
        ],
        [
            'id' => '21',
            'wilaya_name' => 'Skikda',
            'ar_name' => 'سكيكدة',
        ],
        [
            'id' => '22',
            'wilaya_name' => 'Sidi Bel Abbes',
            'ar_name' => 'سيدي بلعباس',
        ],
        [
            'id' => '23',
            'wilaya_name' => 'Annaba',
            'ar_name' => 'عنابة',
        ],
        [
            'id' => '24',
            'wilaya_name' => 'Guelma',
            'ar_name' => 'قالمة',
        ],
        [
            'id' => '25',
            'wilaya_name' => 'Constantine',
            'ar_name' => 'قسنطينة',
        ],
        [
            'id' => '26',
            'wilaya_name' => 'Medea',
            'ar_name' => 'المدية',
        ],
        [
            'id' => '27',
            'wilaya_name' => 'Mostaganem',
            'ar_name' => 'مستغانم',
        ],
        [
            'id' => '28',
            'wilaya_name' => "M'Sila",
            'ar_name' => 'المسيلة',
        ],
        [
            'id' => '29',
            'wilaya_name' => 'Mascara',
            'ar_name' => 'معسكر',
        ],
        [
            'id' => '30',
            'wilaya_name' => 'Ouargla',
            'ar_name' => 'ورقلة',
        ],
        [
            'id' => '31',
            'wilaya_name' => 'Oran',
            'ar_name' => 'وهران',
        ],
        [
            'id' => '32',
            'wilaya_name' => 'El Bayadh',
            'ar_name' => 'البيض',
        ],
        [
            'id' => '33',
            'wilaya_name' => 'Illizi',
            'ar_name' => 'إليزي',
        ],
        [
            'id' => '34',
            'wilaya_name' => 'Bordj Bou Arreridj',
            'ar_name' => 'برج بوعريريج',
        ],
        [
            'id' => '35',
            'wilaya_name' => 'Boumerdes',
            'ar_name' => 'بومرداس',
        ],
        [
            'id' => '36',
            'wilaya_name' => 'El Tarf',
            'ar_name' => 'الطارف',
        ],
        [
            'id' => '37',
            'wilaya_name' => 'Tindouf',
            'ar_name' => 'تندوف',
        ],
        [
            'id' => '38',
            'wilaya_name' => 'Tissemsilt',
            'ar_name' => 'تيسمسيلت',
        ],
        [
            'id' => '39',
            'wilaya_name' => 'El Oued',
            'ar_name' => 'الوادي',
        ],
        [
            'id' => '40',
            'wilaya_name' => 'Khenchela',
            'ar_name' => 'خنشلة',
        ],
        [
            'id' => '41',
            'wilaya_name' => 'Souk Ahras',
            'ar_name' => 'سوق أهراس',
        ],
        [
            'id' => '42',
            'wilaya_name' => 'Tipaza',
            'ar_name' => 'تيبازة',
        ],
        [
            'id' => '43',
            'wilaya_name' => 'Mila',
            'ar_name' => 'ميلة',
        ],
        [
            'id' => '44',
            'wilaya_name' => 'Ain Defla',
            'ar_name' => 'عين الدفلى',
        ],
        [
            'id' => '45',
            'wilaya_name' => 'Naama',
            'ar_name' => 'النعامة',
        ],
        [
            'id' => '46',
            'wilaya_name' => 'Ain Temouchent',
            'ar_name' => 'عين تموشنت',
        ],
        [
            'id' => '47',
            'wilaya_name' => 'Ghardaefa',
            'ar_name' => 'غرداية',
        ],
        [
            'id' => '48',
            'wilaya_name' => 'Relizane',
            'ar_name' => 'غليزان',
        ],
        [
            'id' => '49',
            'wilaya_name' => "El M'ghair",
            'ar_name' => 'المغير',
        ],
        [
            'id' => '50',
            'wilaya_name' => 'El Menia',
            'ar_name' => 'المنيعة',
        ],
        [
            'id' => '51',
            'wilaya_name' => 'Ouled Djellal',
            'ar_name' => 'أولاد جلال',
        ],
        [
            'id' => '52',
            'wilaya_name' => 'Bordj Baji Mokhtar',
            'ar_name' => 'برج باجي مختار',
        ],
        [
            'id' => '53',
            'wilaya_name' => 'Béni Abbès',
            'ar_name' => 'بني عباس',
        ],
        [
            'id' => '54',
            'wilaya_name' => 'Timimoun',
            'ar_name' => 'تيميمون',
        ],
        [
            'id' => '55',
            'wilaya_name' => 'Touggourt',
            'ar_name' => 'تقرت',
        ],
        [
            'id' => '56',
            'wilaya_name' => 'Djanet',
            'ar_name' => 'جانت',
        ],
        [
            'id' => '57',
            'wilaya_name' => 'In Salah',
            'ar_name' => 'عين صالح',
        ],
        [
            'id' => '58',
            'wilaya_name' => 'In Guezzam',
            'ar_name' => 'عين قزام',
        ],
    ];

    public function run()
    {
        DB::table('wilayas')->insert($this->wilayas);
    }
}
