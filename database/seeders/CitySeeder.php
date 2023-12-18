<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{

    private  $cities = [
        [
        "id" => "1",
        "code_postal" => "01001",
        "city_name" => "Adrar",
        "wilaya_id" => "1",
        "ar_name" => "أدرار",
        "longitude" => "28.0064311",
        "latitude" => "-0.2807066"
        ],
    [
        "id" => "2",
        "code_postal" => "01002",
        "city_name" => "Tamest",
        "wilaya_id" => "1",
        "ar_name" => "تأماست",
        "longitude" => "27.4257197",
        "latitude" => "-0.2807673"
    ],
    [
        "id" => "3",
        "code_postal" => "01003",
        "city_name" => "Charouine",
        "wilaya_id" => "1",
        "ar_name" => "شروين",
        "longitude" => "29.0189483",
        "latitude" => "-0.2690792"
    ],
    [
        "id" => "4",
        "code_postal" => "01004",
        "city_name" => "Reggane",
        "wilaya_id" => "1",
        "ar_name" => "رڨان",
        "longitude" => "25.4775826",
        "latitude" => "-4.3665328"
    ],
    [
        "id" => "5",
        "code_postal" => "01005",
        "city_name" => "In Zghmir",
        "wilaya_id" => "1",
        "ar_name" => "ان زغمير",
        "longitude" => "25.8711501",
        "latitude" => "-6.252223"
    ],
    [
        "id" => "6",
        "code_postal" => "01006",
        "city_name" => "Tit",
        "wilaya_id" => "1",
        "ar_name" => "تــيـــت",
        "longitude" => "26.9368382",
        "latitude" => "1.481824"
    ],
    [
        "id" => "7",
        "code_postal" => "01007",
        "city_name" => "Ksar Kaddour",
        "wilaya_id" => "1",
        "ar_name" => "قصر قدور",
        "longitude" => "29.5798013",
        "latitude" => "0.3643512"
    ],
    [
        "id" => "8",
        "code_postal" => "01008",
        "city_name" => "Tsabit",
        "wilaya_id" => "1",
        "ar_name" => "تسابيت",
        "longitude" => "28.3533514",
        "latitude" => "-0.2255095"
    ],
    [
        "id" => "9",
        "code_postal" => "01009",
        "city_name" => "Timimoun",
        "wilaya_id" => "1",
        "ar_name" => "تيميمون",
        "longitude" => "29.2536341",
        "latitude" => "0.218653"
    ],
    [
        "id" => "10",
        "code_postal" => "01010",
        "city_name" => "Ouled Said",
        "wilaya_id" => "1",
        "ar_name" => "أولاد سعيد",
        "longitude" => "29.4217292",
        "latitude" => "0.2254341"
    ],
    [
        "id" => "11",
        "code_postal" => "01011",
        "city_name" => "Zaouiet Kounta",
        "wilaya_id" => "1",
        "ar_name" => "زاوية كنتة",
        "longitude" => "27.2293681",
        "latitude" => "-0.2202846"
    ],
    [
        "id" => "12",
        "code_postal" => "01012",
        "city_name" => "Aoulef",
        "wilaya_id" => "1",
        "ar_name" => "أولف",
        "longitude" => "26.9710733",
        "latitude" => "1.059451"
    ],
    [
        "id" => "13",
        "code_postal" => "01013",
        "city_name" => "Timokten",
        "wilaya_id" => "1",
        "ar_name" => "تيمقتن",
        "longitude" => "27.0221605",
        "latitude" => "1.0255048"
    ],
    [
        "id" => "14",
        "code_postal" => "01014",
        "city_name" => "Tamentit",
        "wilaya_id" => "1",
        "ar_name" => "تامنطيت",
        "longitude" => "27.764557",
        "latitude" => "-0.2722121"
    ],
    [
        "id" => "15",
        "code_postal" => "01015",
        "city_name" => "Fenoughil",
        "wilaya_id" => "1",
        "ar_name" => "فنوغيل",
        "longitude" => "27.6489014",
        "latitude" => "-0.3155995"
    ],
    [
        "id" => "16",
        "code_postal" => "01016",
        "city_name" => "Tinerkouk",
        "wilaya_id" => "1",
        "ar_name" => "زاوية دباغ",
        "longitude" => "29.708777",
        "latitude" => "0.6955288"
    ],
    [
        "id" => "17",
        "code_postal" => "01017",
        "city_name" => "Deldoul",
        "wilaya_id" => "1",
        "ar_name" => "دﻟﺪول",
        "longitude" => "34.2080511",
        "latitude" => "3.2543828"
    ],
    [
        "id" => "18",
        "code_postal" => "01018",
        "city_name" => "Sali",
        "wilaya_id" => "1",
        "ar_name" => "سالى",
        "longitude" => "26.7370315",
        "latitude" => "-2.8517184"
    ],
    [
        "id" => "19",
        "code_postal" => "01019",
        "city_name" => "Akabli",
        "wilaya_id" => "1",
        "ar_name" => "أقبلي",
        "longitude" => "26.7057062",
        "latitude" => "1.344838"
    ],
    [
        "id" => "20",
        "code_postal" => "01020",
        "city_name" => "Metarfa",
        "wilaya_id" => "1",
        "ar_name" => "المطارفة",
        "longitude" => "28.5978205",
        "latitude" => "-0.1587011"
    ],
    [
        "id" => "21",
        "code_postal" => "01021",
        "city_name" => "Ouled Ahmed Tammi",
        "wilaya_id" => "1",
        "ar_name" => "أولاد أحمد تيمى",
        "longitude" => "27.9766155",
        "latitude" => "-0.20396"
    ],
    [
        "id" => "22",
        "code_postal" => "01022",
        "city_name" => "Bouda",
        "wilaya_id" => "1",
        "ar_name" => "بودة",
        "longitude" => "27.9779233",
        "latitude" => "-0.4533424"
    ],
    [
        "id" => "23",
        "code_postal" => "01023",
        "city_name" => "Aougrout",
        "wilaya_id" => "1",
        "ar_name" => "أوقروت",
        "longitude" => "28.7499992",
        "latitude" => "0.2412452"
    ],
    [
        "id" => "24",
        "code_postal" => "01024",
        "city_name" => "Talmine",
        "wilaya_id" => "1",
        "ar_name" => "",
        "longitude" => "27.9766155",
        "latitude" => "-0.20396"
    ],
    [
        "id" => "25",
        "code_postal" => "01025",
        "city_name" => "Bordj Badji Mokhtar",
        "wilaya_id" => "1",
        "ar_name" => "برج باجي مختار",
        "longitude" => "22.9676154",
        "latitude" => "-3.946422"
    ],
    [
        "id" => "26",
        "code_postal" => "01026",
        "city_name" => "Sbaa",
        "wilaya_id" => "1",
        "ar_name" => "السبع",
        "longitude" => "28.2112372",
        "latitude" => "-0.1862527"
    ],
    [
        "id" => "27",
        "code_postal" => "01027",
        "city_name" => "Ouled Aissa",
        "wilaya_id" => "1",
        "ar_name" => "أولاد عيسى",
        "longitude" => "29.4201586",
        "latitude" => "-0.104542"
    ],
    [
        "id" => "28",
        "code_postal" => "01028",
        "city_name" => "Timiaouine",
        "wilaya_id" => "1",
        "ar_name" => "تيمياوين",
        "longitude" => "20.9259001",
        "latitude" => "0.7958642"
    ],
    [
        "id" => "29",
        "code_postal" => "02001",
        "city_name" => "Chlef",
        "wilaya_id" => "2",
        "ar_name" => "الشلف",
        "longitude" => "36.1691042",
        "latitude" => "1.2838598"
    ],
    [
        "id" => "30",
        "code_postal" => "02002",
        "city_name" => "Tenes",
        "wilaya_id" => "2",
        "ar_name" => "تنس",
        "longitude" => "36.508324",
        "latitude" => "1.2426542"
    ],
    [
        "id" => "31",
        "code_postal" => "02003",
        "city_name" => "Benairia",
        "wilaya_id" => "2",
        "ar_name" => "بنايرية",
        "longitude" => "36.3849733",
        "latitude" => "1.3150523"
    ],
    [
        "id" => "32",
        "code_postal" => "02004",
        "city_name" => "El Karimia",
        "wilaya_id" => "2",
        "ar_name" => "الكريمية",
        "longitude" => "36.0774092",
        "latitude" => "1.5112398"
    ],
    [
        "id" => "33",
        "code_postal" => "02005",
        "city_name" => "Tadjna",
        "wilaya_id" => "2",
        "ar_name" => "تاجنة",
        "longitude" => "36.3240803",
        "latitude" => "1.1303901"
    ],
    [
        "id" => "34",
        "code_postal" => "02006",
        "city_name" => "Taougrite",
        "wilaya_id" => "2",
        "ar_name" => "تاوقريت",
        "longitude" => "36.2460876",
        "latitude" => "0.8993445"
    ],
    [
        "id" => "35",
        "code_postal" => "02007",
        "city_name" => "Beni Haoua",
        "wilaya_id" => "2",
        "ar_name" => "بني حواء",
        "longitude" => "36.4938241",
        "latitude" => "1.5198873"
    ],
    [
        "id" => "36",
        "code_postal" => "02008",
        "city_name" => "Sobha",
        "wilaya_id" => "2",
        "ar_name" => "صبحة",
        "longitude" => "36.1084781",
        "latitude" => "1.1017012"
    ],
    [
        "id" => "37",
        "code_postal" => "02009",
        "city_name" => "Harchoun",
        "wilaya_id" => "2",
        "ar_name" => "حرشون",
        "longitude" => "36.1184786",
        "latitude" => "1.4187143"
    ],
    [
        "id" => "38",
        "code_postal" => "02010",
        "city_name" => "Ouled Fares",
        "wilaya_id" => "2",
        "ar_name" => "أولاد فارس",
        "longitude" => "36.2302131",
        "latitude" => "1.0951463"
    ],
    [
        "id" => "39",
        "code_postal" => "02011",
        "city_name" => "Sidi Akacha",
        "wilaya_id" => "2",
        "ar_name" => "سيدي عكاشة",
        "longitude" => "36.4357802",
        "latitude" => "1.2554858"
    ],
    [
        "id" => "40",
        "code_postal" => "02012",
        "city_name" => "Boukadir",
        "wilaya_id" => "2",
        "ar_name" => "بوقدير",
        "longitude" => "36.0617947",
        "latitude" => "1.1083316"
    ],
    [
        "id" => "41",
        "code_postal" => "02013",
        "city_name" => "Beni Rached",
        "wilaya_id" => "2",
        "ar_name" => "بني راشد",
        "longitude" => "36.2930145",
        "latitude" => "1.4611361"
    ],
    [
        "id" => "42",
        "code_postal" => "02014",
        "city_name" => "Talassa",
        "wilaya_id" => "2",
        "ar_name" => "تلعصة",
        "longitude" => "36.4266341",
        "latitude" => "1.0790634"
    ],
    [
        "id" => "43",
        "code_postal" => "02015",
        "city_name" => "Herenfa",
        "wilaya_id" => "2",
        "ar_name" => "الهرنفة",
        "longitude" => "36.2438569",
        "latitude" => "1.0440444"
    ],
    [
        "id" => "44",
        "code_postal" => "02016",
        "city_name" => "Oued Goussine",
        "wilaya_id" => "2",
        "ar_name" => "واد ڨوسين",
        "longitude" => "36.4949721",
        "latitude" => "1.3928579"
    ],
    [
        "id" => "45",
        "code_postal" => "02017",
        "city_name" => "Dahra",
        "wilaya_id" => "2",
        "ar_name" => "الظهرة",
        "longitude" => "36.2551398",
        "latitude" => "0.8432006"
    ],
    [
        "id" => "46",
        "code_postal" => "02018",
        "city_name" => "Ouled Abbes",
        "wilaya_id" => "2",
        "ar_name" => "أولاد عباس",
        "longitude" => "36.2139534",
        "latitude" => "1.4578336"
    ],
    [
        "id" => "47",
        "code_postal" => "02019",
        "city_name" => "Sendjas",
        "wilaya_id" => "2",
        "ar_name" => "سنجاس",
        "longitude" => "36.0396831",
        "latitude" => "1.2713566"
    ],
    [
        "id" => "48",
        "code_postal" => "02020",
        "city_name" => "Zeboudja",
        "wilaya_id" => "2",
        "ar_name" => "الزبوجة",
        "longitude" => "36.3910799",
        "latitude" => "1.3907765"
    ],
    [
        "id" => "49",
        "code_postal" => "02021",
        "city_name" => "Oued Sly",
        "wilaya_id" => "2",
        "ar_name" => "واد سلي",
        "longitude" => "36.0806537",
        "latitude" => "1.1443351"
    ],
    [
        "id" => "50",
        "code_postal" => "02022",
        "city_name" => "Abou El Hassen",
        "wilaya_id" => "2",
        "ar_name" => "أبو الحسن",
        "longitude" => "36.407875",
        "latitude" => "1.1184571"
    ],
    [
        "id" => "51",
        "code_postal" => "02023",
        "city_name" => "El Marsa",
        "wilaya_id" => "2",
        "ar_name" => "المرصى",
        "longitude" => "36.2599947",
        "latitude" => "0.722512"
    ],
    [
        "id" => "52",
        "code_postal" => "02024",
        "city_name" => "Chettia",
        "wilaya_id" => "2",
        "ar_name" => "الشطية",
        "longitude" => "36.1782742",
        "latitude" => "1.1791394"
    ],
    [
        "id" => "53",
        "code_postal" => "02025",
        "city_name" => "Sidi Abderrahmane",
        "wilaya_id" => "2",
        "ar_name" => "سيدي عبد الرحمان",
        "longitude" => "36.4236714",
        "latitude" => "1.0492304"
    ],
    [
        "id" => "54",
        "code_postal" => "02026",
        "city_name" => "Moussadek",
        "wilaya_id" => "2",
        "ar_name" => "مصدق",
        "longitude" => "36.3521334",
        "latitude" => "1.0004317"
    ],
    [
        "id" => "55",
        "code_postal" => "02027",
        "city_name" => "El Hadjadj",
        "wilaya_id" => "2",
        "ar_name" => "الحجاج",
        "longitude" => "35.6908338",
        "latitude" => "1.538967"
    ],
    [
        "id" => "56",
        "code_postal" => "02028",
        "city_name" => "Labiod Medjadja",
        "wilaya_id" => "2",
        "ar_name" => "الأبيض مجاجة",
        "longitude" => "36.2682804",
        "latitude" => "1.3325618"
    ],
    [
        "id" => "57",
        "code_postal" => "02029",
        "city_name" => "Oued Fodda",
        "wilaya_id" => "2",
        "ar_name" => "واد الفضة",
        "longitude" => "36.1995109",
        "latitude" => "1.4672731"
    ],
    [
        "id" => "58",
        "code_postal" => "02030",
        "city_name" => "Ouled Ben Abdelkader",
        "wilaya_id" => "2",
        "ar_name" => "أولاد بن عبد القادر",
        "longitude" => "35.9670371",
        "latitude" => "1.192049"
    ],
    [
        "id" => "59",
        "code_postal" => "02031",
        "city_name" => "Bouzghaia",
        "wilaya_id" => "2",
        "ar_name" => "بوزغاية",
        "longitude" => "36.3604333",
        "latitude" => "1.1871646"
    ],
    [
        "id" => "60",
        "code_postal" => "02032",
        "city_name" => "Ain Merane",
        "wilaya_id" => "2",
        "ar_name" => "عين مران",
        "longitude" => "36.1625642",
        "latitude" => "0.9651016"
    ],
    [
        "id" => "61",
        "code_postal" => "02033",
        "city_name" => "Oum Drou",
        "wilaya_id" => "2",
        "ar_name" => "أم الذروع",
        "longitude" => "36.2034869",
        "latitude" => "1.3460801"
    ],
    [
        "id" => "62",
        "code_postal" => "02034",
        "city_name" => "Breira",
        "wilaya_id" => "2",
        "ar_name" => "بريرة",
        "longitude" => "36.4476233",
        "latitude" => "1.5221188"
    ],
    [
        "id" => "63",
        "code_postal" => "02035",
        "city_name" => "Beni Bouateb",
        "wilaya_id" => "2",
        "ar_name" => "بني بوعتاب",
        "longitude" => "35.9895844",
        "latitude" => "1.5589402"
    ],
    [
        "id" => "64",
        "code_postal" => "03001",
        "city_name" => "Laghouat",
        "wilaya_id" => "3",
        "ar_name" => "الأغواط",
        "longitude" => "33.7939523",
        "latitude" => "2.8368501"
    ],
    [
        "id" => "65",
        "code_postal" => "03002",
        "city_name" => "Ksar El Hirane",
        "wilaya_id" => "3",
        "ar_name" => "قصر الحيران",
        "longitude" => "33.7855481",
        "latitude" => "3.119366"
    ],
    [
        "id" => "66",
        "code_postal" => "03003",
        "city_name" => "Benacer Ben Chohra",
        "wilaya_id" => "3",
        "ar_name" => "بن ناصر بن شهرة",
        "longitude" => "33.7522913",
        "latitude" => "2.9939138"
    ],
    [
        "id" => "67",
        "code_postal" => "03004",
        "city_name" => "Sidi Makhlouf",
        "wilaya_id" => "3",
        "ar_name" => "سيدي مخلوف",
        "longitude" => "34.1276242",
        "latitude" => "3.0060262"
    ],
    [
        "id" => "68",
        "code_postal" => "03005",
        "city_name" => "Hassi Delaa",
        "wilaya_id" => "3",
        "ar_name" => "حاسي دلاعة",
        "longitude" => "33.4154299",
        "latitude" => "3.5410309"
    ],
    [
        "id" => "69",
        "code_postal" => "03006",
        "city_name" => "Hassi R'Mel",
        "wilaya_id" => "3",
        "ar_name" => "حاسي الرمل",
        "longitude" => "32.9412958",
        "latitude" => "3.2443135"
    ],
    [
        "id" => "70",
        "code_postal" => "03007",
        "city_name" => "Ain Mahdi",
        "wilaya_id" => "3",
        "ar_name" => "عــيــن مـــاضــي",
        "longitude" => "33.7955179",
        "latitude" => "2.2924947"
    ],
    [
        "id" => "71",
        "code_postal" => "03008",
        "city_name" => "Tadjmout",
        "wilaya_id" => "3",
        "ar_name" => "تاجموت",
        "longitude" => "33.8376241",
        "latitude" => "2.5234705"
    ],
    [
        "id" => "72",
        "code_postal" => "03009",
        "city_name" => "El Kheneg",
        "wilaya_id" => "3",
        "ar_name" => "الخنق",
        "longitude" => "33.7441108",
        "latitude" => "2.7841758"
    ],
    [
        "id" => "73",
        "code_postal" => "03010",
        "city_name" => "Gueltat Sidi Saad",
        "wilaya_id" => "3",
        "ar_name" => "قلتة سيدي سعد",
        "longitude" => "34.2983511",
        "latitude" => "1.9323492"
    ],
    [
        "id" => "74",
        "code_postal" => "03011",
        "city_name" => "Ain Sidi Ali",
        "wilaya_id" => "3",
        "ar_name" => "عين سيدي علي",
        "longitude" => "34.1666661",
        "latitude" => "1.5412452"
    ],
    [
        "id" => "75",
        "code_postal" => "03012",
        "city_name" => "Beidha",
        "wilaya_id" => "3",
        "ar_name" => "بيضاء",
        "longitude" => "33.7873735",
        "latitude" => "2.8829115"
    ],
    [
        "id" => "76",
        "code_postal" => "03013",
        "city_name" => "Brida",
        "wilaya_id" => "3",
        "ar_name" => "بريدة",
        "longitude" => "33.9495922",
        "latitude" => "1.7465471"
    ],
    [
        "id" => "77",
        "code_postal" => "03014",
        "city_name" => "El Ghicha",
        "wilaya_id" => "3",
        "ar_name" => "الغيشة",
        "longitude" => "33.9297719",
        "latitude" => "2.1396303"
    ],
    [
        "id" => "78",
        "code_postal" => "03015",
        "city_name" => "Hadj Mechri",
        "wilaya_id" => "3",
        "ar_name" => "الحاج المشري",
        "longitude" => "33.9572842",
        "latitude" => "1.5908605"
    ],
    [
        "id" => "79",
        "code_postal" => "03016",
        "city_name" => "Sebgag",
        "wilaya_id" => "3",
        "ar_name" => "سبقاق",
        "longitude" => "34.0285379",
        "latitude" => "1.9293458"
    ],
    [
        "id" => "80",
        "code_postal" => "03017",
        "city_name" => "Taouiala",
        "wilaya_id" => "3",
        "ar_name" => "تاويالة",
        "longitude" => "33.8715595",
        "latitude" => "1.8530845"
    ],
    [
        "id" => "81",
        "code_postal" => "03018",
        "city_name" => "Tadjrouna",
        "wilaya_id" => "3",
        "ar_name" => "تاجرونة",
        "longitude" => "33.5036312",
        "latitude" => "2.0924622"
    ],
    [
        "id" => "82",
        "code_postal" => "03019",
        "city_name" => "Aflou",
        "wilaya_id" => "3",
        "ar_name" => "أفلو",
        "longitude" => "34.1121156",
        "latitude" => "2.0835167"
    ],
    [
        "id" => "83",
        "code_postal" => "03020",
        "city_name" => "El Assafia",
        "wilaya_id" => "3",
        "ar_name" => "العسافية",
        "longitude" => "33.8269722",
        "latitude" => "2.9816293"
    ],
    [
        "id" => "84",
        "code_postal" => "03021",
        "city_name" => "Oued Morra",
        "wilaya_id" => "3",
        "ar_name" => "وادي مرة",
        "longitude" => "34.1666661",
        "latitude" => "2.3079121"
    ],
    [
        "id" => "85",
        "code_postal" => "03022",
        "city_name" => "Oued M'Zi",
        "wilaya_id" => "3",
        "ar_name" => "وادي مزي",
        "longitude" => "33.9410427",
        "latitude" => "2.4231133"
    ],
    [
        "id" => "86",
        "code_postal" => "03023",
        "city_name" => "El Haouaita",
        "wilaya_id" => "3",
        "ar_name" => "الهوارية",
        "longitude" => "37.0505755",
        "latitude" => "10.9904863"
    ],
    [
        "id" => "87",
        "code_postal" => "03024",
        "city_name" => "Sidi Bouzid",
        "wilaya_id" => "3",
        "ar_name" => "سيدي بوزيد",
        "longitude" => "35.0363883",
        "latitude" => "9.4595281"
    ],
    [
        "id" => "88",
        "code_postal" => "04001",
        "city_name" => "Oum El Bouaghi",
        "wilaya_id" => "4",
        "ar_name" => "أم البواقي",
        "longitude" => "35.8725963",
        "latitude" => "7.0830052"
    ],
    [
        "id" => "89",
        "code_postal" => "04002",
        "city_name" => "Ain Beida",
        "wilaya_id" => "4",
        "ar_name" => "عين البيضاء",
        "longitude" => "35.7948292",
        "latitude" => "7.3338883"
    ],
    [
        "id" => "90",
        "code_postal" => "04003",
        "city_name" => "Ain M'lila",
        "wilaya_id" => "4",
        "ar_name" => "عين مليلة",
        "longitude" => "36.0260869",
        "latitude" => "6.4239017"
    ],
    [
        "id" => "91",
        "code_postal" => "04004",
        "city_name" => "Behir Chergui",
        "wilaya_id" => "4",
        "ar_name" => "بحير الشرڨي",
        "longitude" => "35.7937891",
        "latitude" => "7.7132713"
    ],
    [
        "id" => "92",
        "code_postal" => "04005",
        "city_name" => "El Amiria",
        "wilaya_id" => "4",
        "ar_name" => "العامرية",
        "longitude" => "36.1101777",
        "latitude" => "6.9026434"
    ],
    [
        "id" => "93",
        "code_postal" => "04006",
        "city_name" => "Sigus",
        "wilaya_id" => "4",
        "ar_name" => "سيقوس",
        "longitude" => "36.1085199",
        "latitude" => "6.603674"
    ],
    [
        "id" => "94",
        "code_postal" => "04007",
        "city_name" => "El Belala",
        "wilaya_id" => "4",
        "ar_name" => "البلالة",
        "longitude" => "35.6660914",
        "latitude" => "7.7837598"
    ],
    [
        "id" => "95",
        "code_postal" => "04008",
        "city_name" => "Ain Babouche",
        "wilaya_id" => "4",
        "ar_name" => "عين بابوش",
        "longitude" => "35.9402286",
        "latitude" => "7.1751022"
    ],
    [
        "id" => "96",
        "code_postal" => "04009",
        "city_name" => "Berriche",
        "wilaya_id" => "4",
        "ar_name" => "بريش",
        "longitude" => "35.9155816",
        "latitude" => "7.3676848"
    ],
    [
        "id" => "97",
        "code_postal" => "04010",
        "city_name" => "Ouled Hamla",
        "wilaya_id" => "4",
        "ar_name" => "أولاد حملة",
        "longitude" => "36.0811426",
        "latitude" => "6.3334038"
    ],
    [
        "id" => "98",
        "code_postal" => "04011",
        "city_name" => "Dhala",
        "wilaya_id" => "4",
        "ar_name" => "الضلعة",
        "longitude" => "35.4610885",
        "latitude" => "7.5379943"
    ],
    [
        "id" => "99",
        "code_postal" => "04012",
        "city_name" => "Ain Kercha",
        "wilaya_id" => "4",
        "ar_name" => "عين كرشة",
        "longitude" => "35.9275632",
        "latitude" => "6.6811426"
    ],
    [
        "id" => "100",
        "code_postal" => "04013",
        "city_name" => "Hanchir Toumghani",
        "wilaya_id" => "4",
        "ar_name" => "هنشير تومغني",
        "longitude" => "35.9371712",
        "latitude" => "6.7319584"
    ],
    [
        "id" => "101",
        "code_postal" => "04014",
        "city_name" => "El Djazia",
        "wilaya_id" => "4",
        "ar_name" => "الجازيـــــــة",
        "longitude" => "35.663473",
        "latitude" => "7.5030506"
    ],
    [
        "id" => "102",
        "code_postal" => "04015",
        "city_name" => "Ain Diss",
        "wilaya_id" => "4",
        "ar_name" => "عين الديس",
        "longitude" => "35.8101391",
        "latitude" => "7.2888545"
    ],
    [
        "id" => "103",
        "code_postal" => "04016",
        "city_name" => "Fkirina",
        "wilaya_id" => "4",
        "ar_name" => "فكرينة",
        "longitude" => "35.6638941",
        "latitude" => "7.2909736"
    ],
    [
        "id" => "104",
        "code_postal" => "04017",
        "city_name" => "Souk Naamane",
        "wilaya_id" => "4",
        "ar_name" => "سوق نعمان",
        "longitude" => "35.93924",
        "latitude" => "6.2583772"
    ],
    [
        "id" => "105",
        "code_postal" => "04018",
        "city_name" => "Zorg",
        "wilaya_id" => "4",
        "ar_name" => "الزرڨ",
        "longitude" => "35.8726014",
        "latitude" => "7.1180248"
    ],
    [
        "id" => "106",
        "code_postal" => "04019",
        "city_name" => "El Fedjoudj Boughrara Saoudi",
        "wilaya_id" => "4",
        "ar_name" => "الفجوج بوغرارة سعودى",
        "longitude" => "35.709409",
        "latitude" => "6.8162978"
    ],
    [
        "id" => "107",
        "code_postal" => "04020",
        "city_name" => "Ouled Zouai",
        "wilaya_id" => "4",
        "ar_name" => "أولاد زواي",
        "longitude" => "35.8556626",
        "latitude" => "6.3821021"
    ],
    [
        "id" => "108",
        "code_postal" => "04021",
        "city_name" => "Bir Chouhada",
        "wilaya_id" => "4",
        "ar_name" => "بئر الشهداء",
        "longitude" => "35.9007146",
        "latitude" => "6.1753867"
    ],
    [
        "id" => "109",
        "code_postal" => "04022",
        "city_name" => "Ksar Sbahi",
        "wilaya_id" => "4",
        "ar_name" => "قصر صباحي",
        "longitude" => "36.0820976",
        "latitude" => "7.250204"
    ],
    [
        "id" => "110",
        "code_postal" => "04023",
        "city_name" => "Oued Nini",
        "wilaya_id" => "4",
        "ar_name" => "وادي نيني",
        "longitude" => "35.5716976",
        "latitude" => "7.3377513"
    ],
    [
        "id" => "111",
        "code_postal" => "04024",
        "city_name" => "Meskiana",
        "wilaya_id" => "4",
        "ar_name" => "مسكيانة",
        "longitude" => "35.6297416",
        "latitude" => "7.6523636"
    ],
    [
        "id" => "112",
        "code_postal" => "04025",
        "city_name" => "Ain Fekroune",
        "wilaya_id" => "4",
        "ar_name" => "عين فكرون",
        "longitude" => "35.9745986",
        "latitude" => "6.851982"
    ],
    [
        "id" => "113",
        "code_postal" => "04026",
        "city_name" => "Rahia",
        "wilaya_id" => "4",
        "ar_name" => "الراحية",
        "longitude" => "35.7166662",
        "latitude" => "7.6579122"
    ],
    [
        "id" => "114",
        "code_postal" => "04027",
        "city_name" => "Ain Zitoun",
        "wilaya_id" => "4",
        "ar_name" => "عين الزيتون",
        "longitude" => "35.6841587",
        "latitude" => "6.9309782"
    ],
    [
        "id" => "115",
        "code_postal" => "04028",
        "city_name" => "Ouled Gacem",
        "wilaya_id" => "4",
        "ar_name" => "أولاد ڨاسم",
        "longitude" => "36.0328844",
        "latitude" => "6.6594743"
    ],
    [
        "id" => "116",
        "code_postal" => "04029",
        "city_name" => "El Harmilia",
        "wilaya_id" => "4",
        "ar_name" => "الحرملية",
        "longitude" => "35.9257478",
        "latitude" => "6.6176749"
    ],
    [
        "id" => "117",
        "code_postal" => "05001",
        "city_name" => "Batna",
        "wilaya_id" => "5",
        "ar_name" => "باتنة",
        "longitude" => "35.5784266",
        "latitude" => "6.1083422"
    ],
    [
        "id" => "118",
        "code_postal" => "05002",
        "city_name" => "Ghassira",
        "wilaya_id" => "5",
        "ar_name" => "غسيرة",
        "longitude" => "35.0629605",
        "latitude" => "6.1563323"
    ],
    [
        "id" => "119",
        "code_postal" => "05003",
        "city_name" => "Maafa",
        "wilaya_id" => "5",
        "ar_name" => "معافة",
        "longitude" => "35.2770359",
        "latitude" => "5.8156273"
    ],
    [
        "id" => "120",
        "code_postal" => "05004",
        "city_name" => "Merouana",
        "wilaya_id" => "5",
        "ar_name" => "مروانة",
        "longitude" => "35.6417881",
        "latitude" => "5.8172903"
    ],
    [
        "id" => "121",
        "code_postal" => "05005",
        "city_name" => "Seriana",
        "wilaya_id" => "5",
        "ar_name" => "سريانة",
        "longitude" => "35.7161562",
        "latitude" => "6.127064"
    ],
    [
        "id" => "122",
        "code_postal" => "05006",
        "city_name" => "Menaa",
        "wilaya_id" => "5",
        "ar_name" => "منعة",
        "longitude" => "35.1373236",
        "latitude" => "5.9981034"
    ],
    [
        "id" => "123",
        "code_postal" => "05007",
        "city_name" => "El Madher",
        "wilaya_id" => "5",
        "ar_name" => "المعذر",
        "longitude" => "35.6392974",
        "latitude" => "6.3042185"
    ],
    [
        "id" => "124",
        "code_postal" => "05008",
        "city_name" => "Tazoult",
        "wilaya_id" => "5",
        "ar_name" => "تازولت",
        "longitude" => "35.470362",
        "latitude" => "6.1694644"
    ],
    [
        "id" => "125",
        "code_postal" => "05009",
        "city_name" => "Ngaous",
        "wilaya_id" => "5",
        "ar_name" => "نڨاوس",
        "longitude" => "35.5525842",
        "latitude" => "5.5189965"
    ],
    [
        "id" => "126",
        "code_postal" => "05010",
        "city_name" => "Guigba",
        "wilaya_id" => "5",
        "ar_name" => "قيقبة",
        "longitude" => "35.7407753",
        "latitude" => "5.5352956"
    ],
    [
        "id" => "127",
        "code_postal" => "05011",
        "city_name" => "Inoughissen",
        "wilaya_id" => "5",
        "ar_name" => "إينوغيسن",
        "longitude" => "35.2771231",
        "latitude" => "6.4628765"
    ],
    [
        "id" => "128",
        "code_postal" => "05012",
        "city_name" => "Ouyoun El Assafir",
        "wilaya_id" => "5",
        "ar_name" => "عيون العصافير",
        "longitude" => "35.5468473",
        "latitude" => "6.2710449"
    ],
    [
        "id" => "129",
        "code_postal" => "05013",
        "city_name" => "Djerma",
        "wilaya_id" => "5",
        "ar_name" => "جرمة",
        "longitude" => "35.6853933",
        "latitude" => "6.2267778"
    ],
    [
        "id" => "130",
        "code_postal" => "05014",
        "city_name" => "Bitam",
        "wilaya_id" => "5",
        "ar_name" => "بيطام",
        "longitude" => "35.1772246",
        "latitude" => "4.9980505"
    ],
    [
        "id" => "131",
        "code_postal" => "05015",
        "city_name" => "Metkaouak",
        "wilaya_id" => "5",
        "ar_name" => "عزيل عبد القادر",
        "longitude" => "35.323352",
        "latitude" => "4.6952399"
    ],
    [
        "id" => "132",
        "code_postal" => "05016",
        "city_name" => "Arris",
        "wilaya_id" => "5",
        "ar_name" => "اريس",
        "longitude" => "35.3105194",
        "latitude" => "6.2007524"
    ],
    [
        "id" => "133",
        "code_postal" => "05017",
        "city_name" => "Kimmel",
        "wilaya_id" => "5",
        "ar_name" => "كيمل",
        "longitude" => "34.9992137",
        "latitude" => "6.2208802"
    ],
    [
        "id" => "134",
        "code_postal" => "05018",
        "city_name" => "Tilatou",
        "wilaya_id" => "5",
        "ar_name" => "تيلاطو",
        "longitude" => "35.3131323",
        "latitude" => "5.4911366"
    ],
    [
        "id" => "135",
        "code_postal" => "05019",
        "city_name" => "Ain Djasser",
        "wilaya_id" => "5",
        "ar_name" => "عين جاسر",
        "longitude" => "35.8311206",
        "latitude" => "5.9331296"
    ],
    [
        "id" => "136",
        "code_postal" => "05020",
        "city_name" => "Ouled Selam",
        "wilaya_id" => "5",
        "ar_name" => "أولاد سلام",
        "longitude" => "35.8457485",
        "latitude" => "5.7276937"
    ],
    [
        "id" => "137",
        "code_postal" => "05021",
        "city_name" => "Tigherghar",
        "wilaya_id" => "5",
        "ar_name" => "تيغرغار",
        "longitude" => "35.0765612",
        "latitude" => "5.8212842"
    ],
    [
        "id" => "138",
        "code_postal" => "05022",
        "city_name" => "Ain Yagout",
        "wilaya_id" => "5",
        "ar_name" => "عين ياقوت",
        "longitude" => "35.7864482",
        "latitude" => "6.2679257"
    ],
    [
        "id" => "139",
        "code_postal" => "05023",
        "city_name" => "Fesdis",
        "wilaya_id" => "5",
        "ar_name" => "فسديس",
        "longitude" => "35.6179227",
        "latitude" => "6.1696788"
    ],
    [
        "id" => "140",
        "code_postal" => "05024",
        "city_name" => "Sefiane",
        "wilaya_id" => "5",
        "ar_name" => "سفيان",
        "longitude" => "35.4280853",
        "latitude" => "5.5186532"
    ],
    [
        "id" => "141",
        "code_postal" => "05025",
        "city_name" => "Rahbat",
        "wilaya_id" => "5",
        "ar_name" => "الرحبات",
        "longitude" => "35.7257797",
        "latitude" => "5.5571911"
    ],
    [
        "id" => "142",
        "code_postal" => "05026",
        "city_name" => "Tighanimine",
        "wilaya_id" => "5",
        "ar_name" => "تيغانمين",
        "longitude" => "35.185829",
        "latitude" => "6.2290737"
    ],
    [
        "id" => "143",
        "code_postal" => "05027",
        "city_name" => "Lemsane",
        "wilaya_id" => "5",
        "ar_name" => "لمسان",
        "longitude" => "35.6384911",
        "latitude" => "5.7282516"
    ],
    [
        "id" => "144",
        "code_postal" => "05028",
        "city_name" => "Ksar Belezma",
        "wilaya_id" => "5",
        "ar_name" => "قصر بلازمة",
        "longitude" => "35.728729",
        "latitude" => "5.8247576"
    ],
    [
        "id" => "145",
        "code_postal" => "05029",
        "city_name" => "Seggana",
        "wilaya_id" => "5",
        "ar_name" => "سقانة",
        "longitude" => "35.3380358",
        "latitude" => "5.4071512"
    ],
    [
        "id" => "146",
        "code_postal" => "05030",
        "city_name" => "Ichmoul",
        "wilaya_id" => "5",
        "ar_name" => "ايشمول",
        "longitude" => "35.3059756",
        "latitude" => "6.4186737"
    ],
    [
        "id" => "147",
        "code_postal" => "05031",
        "city_name" => "Foum Toub",
        "wilaya_id" => "5",
        "ar_name" => "فم الطوب",
        "longitude" => "35.3867728",
        "latitude" => "6.4478348"
    ],
    [
        "id" => "148",
        "code_postal" => "05032",
        "city_name" => "Beni Foudhala El Hakania",
        "wilaya_id" => "5",
        "ar_name" => "بنى فضالة الحقانية",
        "longitude" => "35.3790646",
        "latitude" => "5.9300746"
    ],
    [
        "id" => "149",
        "code_postal" => "05033",
        "city_name" => "Oued El Ma",
        "wilaya_id" => "5",
        "ar_name" => "واد الماء",
        "longitude" => "35.6696259",
        "latitude" => "5.952935"
    ],
    [
        "id" => "150",
        "code_postal" => "05034",
        "city_name" => "Talkhamt",
        "wilaya_id" => "5",
        "ar_name" => "تالخمت",
        "longitude" => "35.722912",
        "latitude" => "5.7070515"
    ],
    [
        "id" => "151",
        "code_postal" => "05035",
        "city_name" => "Bouzina",
        "wilaya_id" => "5",
        "ar_name" => "بوزينة",
        "longitude" => "35.2757765",
        "latitude" => "5.9780111"
    ],
    [
        "id" => "152",
        "code_postal" => "05036",
        "city_name" => "Chemora",
        "wilaya_id" => "5",
        "ar_name" => "الشمرة",
        "longitude" => "35.6301185",
        "latitude" => "6.4747992"
    ],
    [
        "id" => "153",
        "code_postal" => "05037",
        "city_name" => "Oued Chaaba",
        "wilaya_id" => "5",
        "ar_name" => "واد الشعبة",
        "longitude" => "35.5243377",
        "latitude" => "6.011965"
    ],
    [
        "id" => "154",
        "code_postal" => "05038",
        "city_name" => "Taxlent",
        "wilaya_id" => "5",
        "ar_name" => "تاكسلانت",
        "longitude" => "35.5635407",
        "latitude" => "5.7388089"
    ],
    [
        "id" => "155",
        "code_postal" => "05039",
        "city_name" => "Gosbat",
        "wilaya_id" => "5",
        "ar_name" => "القصبات",
        "longitude" => "35.6198308",
        "latitude" => "5.3394309"
    ],
    [
        "id" => "156",
        "code_postal" => "05040",
        "city_name" => "Ouled Aouf",
        "wilaya_id" => "5",
        "ar_name" => "أولاد عوف",
        "longitude" => "35.4740373",
        "latitude" => "5.7172224"
    ],
    [
        "id" => "157",
        "code_postal" => "05041",
        "city_name" => "Boumagueur",
        "wilaya_id" => "5",
        "ar_name" => "بــومقر",
        "longitude" => "35.4973671",
        "latitude" => "5.5073234"
    ],
    [
        "id" => "158",
        "code_postal" => "05042",
        "city_name" => "Barika",
        "wilaya_id" => "5",
        "ar_name" => "بريكة",
        "longitude" => "35.3698534",
        "latitude" => "5.1424493"
    ],
    [
        "id" => "159",
        "code_postal" => "05043",
        "city_name" => "Djezzar",
        "wilaya_id" => "5",
        "ar_name" => "الجزار",
        "longitude" => "35.5180608",
        "latitude" => "5.1947203"
    ],
    [
        "id" => "160",
        "code_postal" => "05044",
        "city_name" => "Tkout",
        "wilaya_id" => "5",
        "ar_name" => "تكوت",
        "longitude" => "35.1533059",
        "latitude" => "6.2237014"
    ],
    [
        "id" => "161",
        "code_postal" => "05045",
        "city_name" => "Ain Touta",
        "wilaya_id" => "5",
        "ar_name" => "عين التوتة",
        "longitude" => "35.3640241",
        "latitude" => "5.7540788"
    ],
    [
        "id" => "162",
        "code_postal" => "05046",
        "city_name" => "Hidoussa",
        "wilaya_id" => "5",
        "ar_name" => "حيدوسة",
        "longitude" => "35.528608",
        "latitude" => "5.7812335"
    ],
    [
        "id" => "163",
        "code_postal" => "05047",
        "city_name" => "Teniet El Abed",
        "wilaya_id" => "5",
        "ar_name" => "نية العابد",
        "longitude" => "35.2869315",
        "latitude" => "6.1926387"
    ],
    [
        "id" => "164",
        "code_postal" => "05048",
        "city_name" => "Oued Taga",
        "wilaya_id" => "5",
        "ar_name" => "وادي الطاقة",
        "longitude" => "35.4185955",
        "latitude" => "6.2379494"
    ],
    [
        "id" => "165",
        "code_postal" => "05049",
        "city_name" => "Ouled Fadel",
        "wilaya_id" => "5",
        "ar_name" => "أولاد فاضل",
        "longitude" => "35.5552777",
        "latitude" => "6.540245"
    ],
    [
        "id" => "166",
        "code_postal" => "05050",
        "city_name" => "Timgad",
        "wilaya_id" => "5",
        "ar_name" => "تيمقاد",
        "longitude" => "35.5269245",
        "latitude" => "6.3713303"
    ],
    [
        "id" => "167",
        "code_postal" => "05051",
        "city_name" => "Ras El Aioun",
        "wilaya_id" => "5",
        "ar_name" => "رأس العيون",
        "longitude" => "35.6547596",
        "latitude" => "5.5340598"
    ],
    [
        "id" => "168",
        "code_postal" => "05052",
        "city_name" => "Chir",
        "wilaya_id" => "5",
        "ar_name" => "شير",
        "longitude" => "35.218839",
        "latitude" => "6.061661"
    ],
    [
        "id" => "169",
        "code_postal" => "05053",
        "city_name" => "Ouled Si Slimane",
        "wilaya_id" => "5",
        "ar_name" => "أولاد سي سليمان",
        "longitude" => "35.5671114",
        "latitude" => "5.5504885"
    ],
    [
        "id" => "170",
        "code_postal" => "05054",
        "city_name" => "Zanat El Beida",
        "wilaya_id" => "5",
        "ar_name" => "زانة البيضاء",
        "longitude" => "35.7947074",
        "latitude" => "5.9551803"
    ],
    [
        "id" => "171",
        "code_postal" => "05055",
        "city_name" => "M'doukel",
        "wilaya_id" => "5",
        "ar_name" => "أمدوكال",
        "longitude" => "35.1132204",
        "latitude" => "5.0064721"
    ],
    [
        "id" => "172",
        "code_postal" => "05056",
        "city_name" => "Ouled Ammar",
        "wilaya_id" => "5",
        "ar_name" => "أولاد عمار",
        "longitude" => "35.4637775",
        "latitude" => "5.1226733"
    ],
    [
        "id" => "173",
        "code_postal" => "05057",
        "city_name" => "El Hassi",
        "wilaya_id" => "5",
        "ar_name" => "الحاسي",
        "longitude" => "35.7805122",
        "latitude" => "5.8788416"
    ],
    [
        "id" => "174",
        "code_postal" => "05058",
        "city_name" => "Lazrou",
        "wilaya_id" => "5",
        "ar_name" => "لازرو",
        "longitude" => "35.8042574",
        "latitude" => "6.2001918"
    ],
    [
        "id" => "175",
        "code_postal" => "05059",
        "city_name" => "Boumia",
        "wilaya_id" => "5",
        "ar_name" => "بومية",
        "longitude" => "35.7041224",
        "latitude" => "6.3963578"
    ],
    [
        "id" => "176",
        "code_postal" => "05060",
        "city_name" => "Boulhilat",
        "wilaya_id" => "5",
        "ar_name" => "بولهيلات",
        "longitude" => "35.7374798",
        "latitude" => "6.5889619"
    ],
    [
        "id" => "177",
        "code_postal" => "05061",
        "city_name" => "Larbaa",
        "wilaya_id" => "5",
        "ar_name" => "الاربعاء",
        "longitude" => "36.5787079",
        "latitude" => "3.103324"
    ],
    [
        "id" => "178",
        "code_postal" => "06001",
        "city_name" => "Bejaia",
        "wilaya_id" => "6",
        "ar_name" => "بجاية",
        "longitude" => "36.7695763",
        "latitude" => "4.938545"
    ],
    [
        "id" => "179",
        "code_postal" => "06002",
        "city_name" => "Amizour",
        "wilaya_id" => "6",
        "ar_name" => "اميزور",
        "longitude" => "36.6429158",
        "latitude" => "4.8679708"
    ],
    [
        "id" => "180",
        "code_postal" => "06003",
        "city_name" => "Ferraoun",
        "wilaya_id" => "6",
        "ar_name" => "فرعون",
        "longitude" => "36.5654312",
        "latitude" => "4.8417715"
    ],
    [
        "id" => "181",
        "code_postal" => "06004",
        "city_name" => "Taourirt Ighil",
        "wilaya_id" => "6",
        "ar_name" => "تاوريرت اغيل",
        "longitude" => "36.7329317",
        "latitude" => "4.6709356"
    ],
    [
        "id" => "182",
        "code_postal" => "06005",
        "city_name" => "Chelata",
        "wilaya_id" => "6",
        "ar_name" => "شلاطة",
        "longitude" => "36.5079843",
        "latitude" => "4.4892072"
    ],
    [
        "id" => "183",
        "code_postal" => "06006",
        "city_name" => "Tamokra",
        "wilaya_id" => "6",
        "ar_name" => "تامقرة",
        "longitude" => "36.3916342",
        "latitude" => "4.5814411"
    ],
    [
        "id" => "184",
        "code_postal" => "06007",
        "city_name" => "Timzrit",
        "wilaya_id" => "6",
        "ar_name" => "تيمزريت",
        "longitude" => "36.6161452",
        "latitude" => "4.7342109"
    ],
    [
        "id" => "185",
        "code_postal" => "06008",
        "city_name" => "Souk El Thenine",
        "wilaya_id" => "6",
        "ar_name" => "ﺳﻮق اﻻﺛﻨﻴﻦ",
        "longitude" => "36.6150269",
        "latitude" => "5.2777913"
    ],
    [
        "id" => "186",
        "code_postal" => "06009",
        "city_name" => "M'cisna",
        "wilaya_id" => "6",
        "ar_name" => "مسيسنة",
        "longitude" => "36.5646521",
        "latitude" => "4.6922142"
    ],
    [
        "id" => "187",
        "code_postal" => "06010",
        "city_name" => "Thinabdher",
        "wilaya_id" => "6",
        "ar_name" => "تينبذار",
        "longitude" => "36.6333952",
        "latitude" => "4.6645332"
    ],
    [
        "id" => "188",
        "code_postal" => "06011",
        "city_name" => "Tichi",
        "wilaya_id" => "6",
        "ar_name" => "تيشي",
        "longitude" => "36.620329",
        "latitude" => "5.0944646"
    ],
    [
        "id" => "189",
        "code_postal" => "06012",
        "city_name" => "Semaoun",
        "wilaya_id" => "6",
        "ar_name" => "سمعون",
        "longitude" => "36.6163121",
        "latitude" => "4.8029022"
    ],
    [
        "id" => "190",
        "code_postal" => "06013",
        "city_name" => "Kendira",
        "wilaya_id" => "6",
        "ar_name" => "كنديرة",
        "longitude" => "36.5568449",
        "latitude" => "4.948437"
    ],
    [
        "id" => "191",
        "code_postal" => "06014",
        "city_name" => "Tifra",
        "wilaya_id" => "6",
        "ar_name" => "تيفرة",
        "longitude" => "36.6626768",
        "latitude" => "4.6505501"
    ],
    [
        "id" => "192",
        "code_postal" => "06015",
        "city_name" => "Ighram",
        "wilaya_id" => "6",
        "ar_name" => "إغرم",
        "longitude" => "36.4765457",
        "latitude" => "4.3924687"
    ],
    [
        "id" => "193",
        "code_postal" => "06016",
        "city_name" => "Amalou",
        "wilaya_id" => "6",
        "ar_name" => "امالو",
        "longitude" => "36.4780606",
        "latitude" => "4.5674507"
    ],
    [
        "id" => "194",
        "code_postal" => "06017",
        "city_name" => "Ighil Ali",
        "wilaya_id" => "6",
        "ar_name" => "إغيل على",
        "longitude" => "36.2905404",
        "latitude" => "4.4345472"
    ],
    [
        "id" => "195",
        "code_postal" => "06018",
        "city_name" => "Ifelain Ilmathen",
        "wilaya_id" => "6",
        "ar_name" => "افناين الماثن",
        "longitude" => "36.6673126",
        "latitude" => "4.7479832"
    ],
    [
        "id" => "196",
        "code_postal" => "06019",
        "city_name" => "Toudja",
        "wilaya_id" => "6",
        "ar_name" => "توجة",
        "longitude" => "36.7862498",
        "latitude" => "4.7209914"
    ],
    [
        "id" => "197",
        "code_postal" => "06020",
        "city_name" => "Darguina",
        "wilaya_id" => "6",
        "ar_name" => "درقينة",
        "longitude" => "36.5537403",
        "latitude" => "5.3057073"
    ],
    [
        "id" => "198",
        "code_postal" => "06021",
        "city_name" => "Sidi Ayad",
        "wilaya_id" => "6",
        "ar_name" => "سيدي عياد",
        "longitude" => "36.6095992",
        "latitude" => "4.6956681"
    ],
    [
        "id" => "199",
        "code_postal" => "06022",
        "city_name" => "Aokas",
        "wilaya_id" => "6",
        "ar_name" => "أوقاس",
        "longitude" => "36.6195851",
        "latitude" => "5.2038174"
    ],
    [
        "id" => "200",
        "code_postal" => "06023",
        "city_name" => "Ait Djellil",
        "wilaya_id" => "6",
        "ar_name" => "آيث جليل",
        "longitude" => "36.5626795",
        "latitude" => "4.7643966"
    ],
    [
        "id" => "201",
        "code_postal" => "06024",
        "city_name" => "Adekar",
        "wilaya_id" => "6",
        "ar_name" => "آدكار",
        "longitude" => "36.7343709",
        "latitude" => "4.5420287"
    ],
    [
        "id" => "202",
        "code_postal" => "06025",
        "city_name" => "Akbou",
        "wilaya_id" => "6",
        "ar_name" => "أقبو",
        "longitude" => "36.4583204",
        "latitude" => "4.4639658"
    ],
    [
        "id" => "203",
        "code_postal" => "06026",
        "city_name" => "Seddouk",
        "wilaya_id" => "6",
        "ar_name" => "صدوق",
        "longitude" => "36.5367869",
        "latitude" => "4.6409049"
    ],
    [
        "id" => "204",
        "code_postal" => "06027",
        "city_name" => "Tazmalt",
        "wilaya_id" => "6",
        "ar_name" => "تازمالت",
        "longitude" => "36.3980947",
        "latitude" => "4.3892305"
    ],
    [
        "id" => "205",
        "code_postal" => "06028",
        "city_name" => "Ait R'zine",
        "wilaya_id" => "6",
        "ar_name" => "آيت أرزين",
        "longitude" => "36.3866561",
        "latitude" => "4.4646094"
    ],
    [
        "id" => "206",
        "code_postal" => "06029",
        "city_name" => "Chemini",
        "wilaya_id" => "6",
        "ar_name" => "شميني",
        "longitude" => "36.5928345",
        "latitude" => "4.5601731"
    ],
    [
        "id" => "207",
        "code_postal" => "06030",
        "city_name" => "Souk Oufella",
        "wilaya_id" => "6",
        "ar_name" => "سوق أوفلة",
        "longitude" => "36.5880436",
        "latitude" => "4.5992053"
    ],
    [
        "id" => "208",
        "code_postal" => "06031",
        "city_name" => "Taskriout",
        "wilaya_id" => "6",
        "ar_name" => "تاسقريوت",
        "longitude" => "36.5565707",
        "latitude" => "5.2237624"
    ],
    [
        "id" => "209",
        "code_postal" => "06032",
        "city_name" => "Tibane",
        "wilaya_id" => "6",
        "ar_name" => "طيبان",
        "longitude" => "36.6131706",
        "latitude" => "4.6360841"
    ],
    [
        "id" => "210",
        "code_postal" => "06033",
        "city_name" => "Tala Hamza",
        "wilaya_id" => "6",
        "ar_name" => "ثالة حمزة",
        "longitude" => "36.6904609",
        "latitude" => "4.9432228"
    ],
    [
        "id" => "211",
        "code_postal" => "06034",
        "city_name" => "Barbacha",
        "wilaya_id" => "6",
        "ar_name" => "برباشة",
        "longitude" => "36.5628189",
        "latitude" => "4.8862205"
    ],
    [
        "id" => "212",
        "code_postal" => "06035",
        "city_name" => "Beni Ksila",
        "wilaya_id" => "6",
        "ar_name" => "بنى كسيلة",
        "longitude" => "36.8280602",
        "latitude" => "4.6309708"
    ],
    [
        "id" => "213",
        "code_postal" => "06036",
        "city_name" => "Ouzallaguen",
        "wilaya_id" => "6",
        "ar_name" => "أوزلاقن",
        "longitude" => "36.5473904",
        "latitude" => "4.5075207"
    ],
    [
        "id" => "214",
        "code_postal" => "06037",
        "city_name" => "Bouhamza",
        "wilaya_id" => "6",
        "ar_name" => "بوحمزة",
        "longitude" => "36.4393229",
        "latitude" => "4.5700544"
    ],
    [
        "id" => "215",
        "code_postal" => "06038",
        "city_name" => "Beni Melikeche",
        "wilaya_id" => "6",
        "ar_name" => "بنى مليكش",
        "longitude" => "36.4475154",
        "latitude" => "4.3846601"
    ],
    [
        "id" => "216",
        "code_postal" => "06039",
        "city_name" => "Sidi Aich",
        "wilaya_id" => "6",
        "ar_name" => "سيدي عيش",
        "longitude" => "36.6223093",
        "latitude" => "4.6792592"
    ],
    [
        "id" => "217",
        "code_postal" => "06040",
        "city_name" => "El Kseur",
        "wilaya_id" => "6",
        "ar_name" => "القصر",
        "longitude" => "36.7187382",
        "latitude" => "4.7678254"
    ],
    [
        "id" => "218",
        "code_postal" => "06041",
        "city_name" => "Melbou",
        "wilaya_id" => "6",
        "ar_name" => "ملبو",
        "longitude" => "36.6217049",
        "latitude" => "5.351135"
    ],
    [
        "id" => "219",
        "code_postal" => "06042",
        "city_name" => "Akfadou",
        "wilaya_id" => "6",
        "ar_name" => "اكفادو",
        "longitude" => "36.6580416",
        "latitude" => "4.5747965"
    ],
    [
        "id" => "220",
        "code_postal" => "06043",
        "city_name" => "Leflaye",
        "wilaya_id" => "6",
        "ar_name" => "لفلاى",
        "longitude" => "36.597995",
        "latitude" => "4.6441959"
    ],
    [
        "id" => "221",
        "code_postal" => "06044",
        "city_name" => "Kherrata",
        "wilaya_id" => "6",
        "ar_name" => "خراطة",
        "longitude" => "36.4719307",
        "latitude" => "5.2047107"
    ],
    [
        "id" => "222",
        "code_postal" => "06045",
        "city_name" => "Draa Kaid",
        "wilaya_id" => "6",
        "ar_name" => "ذراع القايد",
        "longitude" => "36.4405974",
        "latitude" => "5.168301"
    ],
    [
        "id" => "223",
        "code_postal" => "06046",
        "city_name" => "Tamridjet",
        "wilaya_id" => "6",
        "ar_name" => "تامريجت",
        "longitude" => "36.5729424",
        "latitude" => "5.3775099"
    ],
    [
        "id" => "224",
        "code_postal" => "06047",
        "city_name" => "Ait Smail",
        "wilaya_id" => "6",
        "ar_name" => "آيت سماعيل",
        "longitude" => "36.554314",
        "latitude" => "5.1892262"
    ],
    [
        "id" => "225",
        "code_postal" => "06048",
        "city_name" => "Boukhelifa",
        "wilaya_id" => "6",
        "ar_name" => "بوخليفة",
        "longitude" => "36.6367939",
        "latitude" => "5.0058926"
    ],
    [
        "id" => "226",
        "code_postal" => "06049",
        "city_name" => "Tizi N'berber",
        "wilaya_id" => "6",
        "ar_name" => "تيزى نبربر",
        "longitude" => "36.5899196",
        "latitude" => "5.1307333"
    ],
    [
        "id" => "227",
        "code_postal" => "06050",
        "city_name" => "Beni Maouch",
        "wilaya_id" => "6",
        "ar_name" => "بني معوش",
        "longitude" => "36.4881459",
        "latitude" => "4.72105"
    ],
    [
        "id" => "228",
        "code_postal" => "06051",
        "city_name" => "Oued Ghir",
        "wilaya_id" => "6",
        "ar_name" => "وادي غير",
        "longitude" => "36.7149207",
        "latitude" => "4.9085928"
    ],
    [
        "id" => "229",
        "code_postal" => "06052",
        "city_name" => "Boudjellil",
        "wilaya_id" => "6",
        "ar_name" => "بوجليل",
        "longitude" => "36.3223972",
        "latitude" => "4.3477724"
    ],
    [
        "id" => "230",
        "code_postal" => "07001",
        "city_name" => "Biskra",
        "wilaya_id" => "7",
        "ar_name" => "بسكرة",
        "longitude" => "34.851484",
        "latitude" => "5.6546304"
    ],
    [
        "id" => "231",
        "code_postal" => "07002",
        "city_name" => "Oumache",
        "wilaya_id" => "7",
        "ar_name" => "أوماش",
        "longitude" => "34.586303",
        "latitude" => "5.5181413"
    ],
    [
        "id" => "232",
        "code_postal" => "07003",
        "city_name" => "Branis",
        "wilaya_id" => "7",
        "ar_name" => "البرانس",
        "longitude" => "34.9709574",
        "latitude" => "5.6412543"
    ],
    [
        "id" => "233",
        "code_postal" => "07004",
        "city_name" => "Chetma",
        "wilaya_id" => "7",
        "ar_name" => "شتمة",
        "longitude" => "34.8655388",
        "latitude" => "5.7729266"
    ],
    [
        "id" => "234",
        "code_postal" => "07005",
        "city_name" => "Ouled Djellal",
        "wilaya_id" => "7",
        "ar_name" => "أولاد جلال",
        "longitude" => "34.4174639",
        "latitude" => "4.9713028"
    ],
    [
        "id" => "235",
        "code_postal" => "07006",
        "city_name" => "Ras El Miaad",
        "wilaya_id" => "7",
        "ar_name" => "راس الميعاد",
        "longitude" => "34.0268001",
        "latitude" => "4.1596986"
    ],
    [
        "id" => "236",
        "code_postal" => "07007",
        "city_name" => "Besbes",
        "wilaya_id" => "7",
        "ar_name" => "البسباس",
        "longitude" => "36.7204026",
        "latitude" => "7.7544139"
    ],
    [
        "id" => "237",
        "code_postal" => "07008",
        "city_name" => "Sidi Khaled",
        "wilaya_id" => "7",
        "ar_name" => "سيدي خالد",
        "longitude" => "34.3845588",
        "latitude" => "4.8400248"
    ],
    [
        "id" => "238",
        "code_postal" => "07009",
        "city_name" => "Doucen",
        "wilaya_id" => "7",
        "ar_name" => "الدوسن",
        "longitude" => "34.6197821",
        "latitude" => "4.9863232"
    ],
    [
        "id" => "239",
        "code_postal" => "07010",
        "city_name" => "Ech Chaiba",
        "wilaya_id" => "7",
        "ar_name" => "أولاد رحمة",
        "longitude" => "34.6257746",
        "latitude" => "4.5572238"
    ],
    [
        "id" => "240",
        "code_postal" => "07011",
        "city_name" => "Sidi Okba",
        "wilaya_id" => "7",
        "ar_name" => "سيدي عقبة",
        "longitude" => "34.776526",
        "latitude" => "5.8344242"
    ],
    [
        "id" => "241",
        "code_postal" => "07012",
        "city_name" => "Mchouneche",
        "wilaya_id" => "7",
        "ar_name" => "مشونش",
        "longitude" => "34.9063847",
        "latitude" => "5.8993044"
    ],
    [
        "id" => "242",
        "code_postal" => "07013",
        "city_name" => "El Haouch",
        "wilaya_id" => "7",
        "ar_name" => "الحوش",
        "longitude" => "34.5603287",
        "latitude" => "5.8852281"
    ],
    [
        "id" => "243",
        "code_postal" => "07014",
        "city_name" => "Ain Naga",
        "wilaya_id" => "7",
        "ar_name" => "عين الناقة",
        "longitude" => "34.6508231",
        "latitude" => "6.0189093"
    ],
    [
        "id" => "244",
        "code_postal" => "07015",
        "city_name" => "Zeribet El Oued",
        "wilaya_id" => "7",
        "ar_name" => "زريبة الوادي",
        "longitude" => "34.683456",
        "latitude" => "6.3748921"
    ],
    [
        "id" => "245",
        "code_postal" => "07016",
        "city_name" => "El Feidh",
        "wilaya_id" => "7",
        "ar_name" => "الفيض",
        "longitude" => "34.4990192",
        "latitude" => "6.1924699"
    ],
    [
        "id" => "246",
        "code_postal" => "07017",
        "city_name" => "El Kantara",
        "wilaya_id" => "7",
        "ar_name" => "القنطرة",
        "longitude" => "35.2052532",
        "latitude" => "5.5062642"
    ],
    [
        "id" => "247",
        "code_postal" => "07018",
        "city_name" => "Ain Zaatout",
        "wilaya_id" => "7",
        "ar_name" => "عين زعطوط",
        "longitude" => "35.1705188",
        "latitude" => "5.7860157"
    ],
    [
        "id" => "248",
        "code_postal" => "07019",
        "city_name" => "El Outaya",
        "wilaya_id" => "7",
        "ar_name" => "لوطاية",
        "longitude" => "34.9772883",
        "latitude" => "5.4401959"
    ],
    [
        "id" => "249",
        "code_postal" => "07020",
        "city_name" => "Djemorah",
        "wilaya_id" => "7",
        "ar_name" => "جمورة",
        "longitude" => "35.0989288",
        "latitude" => "5.6954643"
    ],
    [
        "id" => "250",
        "code_postal" => "07021",
        "city_name" => "Tolga",
        "wilaya_id" => "7",
        "ar_name" => "طولقة",
        "longitude" => "34.894129",
        "latitude" => "4.9483543"
    ],
    [
        "id" => "251",
        "code_postal" => "07022",
        "city_name" => "Lioua",
        "wilaya_id" => "7",
        "ar_name" => "لواء",
        "longitude" => "34.5726359",
        "latitude" => "5.224675"
    ],
    [
        "id" => "252",
        "code_postal" => "07023",
        "city_name" => "Lichana",
        "wilaya_id" => "7",
        "ar_name" => "لشانة",
        "longitude" => "34.7379403",
        "latitude" => "5.3672479"
    ],
    [
        "id" => "253",
        "code_postal" => "07024",
        "city_name" => "Ourlal",
        "wilaya_id" => "7",
        "ar_name" => "أورلال",
        "longitude" => "34.563429",
        "latitude" => "5.3748787"
    ],
    [
        "id" => "254",
        "code_postal" => "07025",
        "city_name" => "M'lili",
        "wilaya_id" => "7",
        "ar_name" => "مليلي",
        "longitude" => "34.5781616",
        "latitude" => "5.4617608"
    ],
    [
        "id" => "255",
        "code_postal" => "07026",
        "city_name" => "Foughala",
        "wilaya_id" => "7",
        "ar_name" => "فوغالة",
        "longitude" => "34.7598362",
        "latitude" => "5.2212069"
    ],
    [
        "id" => "256",
        "code_postal" => "07027",
        "city_name" => "Bordj Ben Azzouz",
        "wilaya_id" => "7",
        "ar_name" => "برج بن عزوز",
        "longitude" => "34.7281944",
        "latitude" => "5.281975"
    ],
    [
        "id" => "257",
        "code_postal" => "07028",
        "city_name" => "M'ziraa",
        "wilaya_id" => "7",
        "ar_name" => "مزيرعة",
        "longitude" => "34.8853471",
        "latitude" => "6.0060458"
    ],
    [
        "id" => "258",
        "code_postal" => "07029",
        "city_name" => "Bouchagroun",
        "wilaya_id" => "7",
        "ar_name" => "بوشقرون",
        "longitude" => "34.7378859",
        "latitude" => "5.4169652"
    ],
    [
        "id" => "259",
        "code_postal" => "07030",
        "city_name" => "Mekhadma",
        "wilaya_id" => "7",
        "ar_name" => "مخادمة",
        "longitude" => "34.5636943",
        "latitude" => "5.3092183"
    ],
    [
        "id" => "260",
        "code_postal" => "07031",
        "city_name" => "El Ghrous",
        "wilaya_id" => "7",
        "ar_name" => "الغروس",
        "longitude" => "34.7175474",
        "latitude" => "5.0903931"
    ],
    [
        "id" => "261",
        "code_postal" => "07032",
        "city_name" => "El Hadjab",
        "wilaya_id" => "7",
        "ar_name" => "الحاجب",
        "longitude" => "34.7967888",
        "latitude" => "5.4551949"
    ],
    [
        "id" => "262",
        "code_postal" => "07033",
        "city_name" => "Khanguet Sidinadji",
        "wilaya_id" => "7",
        "ar_name" => "خنڨة سيدي ناجي",
        "longitude" => "34.784537",
        "latitude" => "6.6327354"
    ],
    [
        "id" => "263",
        "code_postal" => "08001",
        "city_name" => "Bechar",
        "wilaya_id" => "8",
        "ar_name" => "بشار",
        "longitude" => "31.5965368",
        "latitude" => "-2.4145248"
    ],
    [
        "id" => "264",
        "code_postal" => "08002",
        "city_name" => "Erg Ferradj",
        "wilaya_id" => "8",
        "ar_name" => "عرق فراج",
        "longitude" => "31.0835905",
        "latitude" => "-2.8630916"
    ],
    [
        "id" => "265",
        "code_postal" => "08003",
        "city_name" => "Ouled Khoudir",
        "wilaya_id" => "8",
        "ar_name" => "أولاد خدير",
        "longitude" => "29.2558699",
        "latitude" => "-1.0641503"
    ],
    [
        "id" => "266",
        "code_postal" => "08004",
        "city_name" => "Meridja",
        "wilaya_id" => "8",
        "ar_name" => "مريجة",
        "longitude" => "31.5494045",
        "latitude" => "-2.95583"
    ],
    [
        "id" => "267",
        "code_postal" => "08005",
        "city_name" => "Timoudi",
        "wilaya_id" => "8",
        "ar_name" => "تيمودى",
        "longitude" => "29.3195526",
        "latitude" => "-1.135803"
    ],
    [
        "id" => "268",
        "code_postal" => "08006",
        "city_name" => "Lahmar",
        "wilaya_id" => "8",
        "ar_name" => "لحمر",
        "longitude" => "31.9312184",
        "latitude" => "-2.2681563"
    ],
    [
        "id" => "269",
        "code_postal" => "08007",
        "city_name" => "Beni Abbes",
        "wilaya_id" => "8",
        "ar_name" => "بني عباس",
        "longitude" => "30.1302299",
        "latitude" => "-2.1782542"
    ],
    [
        "id" => "270",
        "code_postal" => "08008",
        "city_name" => "Beni Ikhlef",
        "wilaya_id" => "8",
        "ar_name" => "بني يخلف",
        "longitude" => "29.5802183",
        "latitude" => "-1.6128088"
    ],
    [
        "id" => "271",
        "code_postal" => "08009",
        "city_name" => "Mechraa Houari Boumedienne",
        "wilaya_id" => "8",
        "ar_name" => "مشرع ھوارى بومدين",
        "longitude" => "30.9318258",
        "latitude" => "-2.741164"
    ],
    [
        "id" => "272",
        "code_postal" => "08010",
        "city_name" => "Kenedsa",
        "wilaya_id" => "8",
        "ar_name" => "القنادسة",
        "longitude" => "31.5570599",
        "latitude" => "-2.4381801"
    ],
    [
        "id" => "273",
        "code_postal" => "08011",
        "city_name" => "Igli",
        "wilaya_id" => "8",
        "ar_name" => "إقلي",
        "longitude" => "30.452849",
        "latitude" => "-2.3000801"
    ],
    [
        "id" => "274",
        "code_postal" => "08012",
        "city_name" => "Tabalbala",
        "wilaya_id" => "8",
        "ar_name" => "تبلبالة",
        "longitude" => "28.9735664",
        "latitude" => "-5.9957642"
    ],
    [
        "id" => "275",
        "code_postal" => "08013",
        "city_name" => "Taghit",
        "wilaya_id" => "8",
        "ar_name" => "تــــاغـيــث",
        "longitude" => "30.9150725",
        "latitude" => "-2.0472123"
    ],
    [
        "id" => "276",
        "code_postal" => "08014",
        "city_name" => "El Ouata",
        "wilaya_id" => "8",
        "ar_name" => "الوطى",
        "longitude" => "29.854111",
        "latitude" => "-1.8650158"
    ],
    [
        "id" => "277",
        "code_postal" => "08015",
        "city_name" => "Boukais",
        "wilaya_id" => "8",
        "ar_name" => "بوكايس",
        "longitude" => "31.9230182",
        "latitude" => "-2.4714058"
    ],
    [
        "id" => "278",
        "code_postal" => "08016",
        "city_name" => "Mogheul",
        "wilaya_id" => "8",
        "ar_name" => "موغل",
        "longitude" => "32.0219943",
        "latitude" => "-2.2227252"
    ],
    [
        "id" => "279",
        "code_postal" => "08017",
        "city_name" => "Abadla",
        "wilaya_id" => "8",
        "ar_name" => "العبادلة",
        "longitude" => "31.0174866",
        "latitude" => "-2.7615494"
    ],
    [
        "id" => "280",
        "code_postal" => "08018",
        "city_name" => "Kerzaz",
        "wilaya_id" => "8",
        "ar_name" => "كرزاز",
        "longitude" => "29.4602231",
        "latitude" => "-1.4553024"
    ],
    [
        "id" => "281",
        "code_postal" => "08019",
        "city_name" => "Ksabi",
        "wilaya_id" => "8",
        "ar_name" => "قصابى",
        "longitude" => "29.0984238",
        "latitude" => "-1.0022456"
    ],
    [
        "id" => "282",
        "code_postal" => "08020",
        "city_name" => "Tamtert",
        "wilaya_id" => "8",
        "ar_name" => "تامترت",
        "longitude" => "29.9166662",
        "latitude" => "-1.9087548"
    ],
    [
        "id" => "283",
        "code_postal" => "08021",
        "city_name" => "Beni Ounif",
        "wilaya_id" => "8",
        "ar_name" => "بني ونيف",
        "longitude" => "32.0512638",
        "latitude" => "-1.2519046"
    ],
    [
        "id" => "284",
        "code_postal" => "09001",
        "city_name" => "Blida",
        "wilaya_id" => "9",
        "ar_name" => "البليدة‎",
        "longitude" => "36.4802972",
        "latitude" => "2.7659184"
    ],
    [
        "id" => "285",
        "code_postal" => "09002",
        "city_name" => "Chebli",
        "wilaya_id" => "9",
        "ar_name" => "الشبلي",
        "longitude" => "36.5685763",
        "latitude" => "2.9433463"
    ],
    [
        "id" => "286",
        "code_postal" => "09003",
        "city_name" => "Bouinan",
        "wilaya_id" => "9",
        "ar_name" => "بوعينان",
        "longitude" => "36.5154839",
        "latitude" => "2.9218243"
    ],
    [
        "id" => "287",
        "code_postal" => "09004",
        "city_name" => "Oued El Alleug",
        "wilaya_id" => "9",
        "ar_name" => "واد العلايڨ",
        "longitude" => "36.5502875",
        "latitude" => "2.7026126"
    ],
    [
        "id" => "288",
        "code_postal" => "09007",
        "city_name" => "Ouled Yaich",
        "wilaya_id" => "9",
        "ar_name" => "اولاد يعيش",
        "longitude" => "36.4852123",
        "latitude" => "2.8325741"
    ],
    [
        "id" => "289",
        "code_postal" => "09008",
        "city_name" => "Chrea",
        "wilaya_id" => "9",
        "ar_name" => "الشريعة",
        "longitude" => "36.4254896",
        "latitude" => "2.8286336"
    ],
    [
        "id" => "290",
        "code_postal" => "09010",
        "city_name" => "El Affroun",
        "wilaya_id" => "9",
        "ar_name" => "العفرون",
        "longitude" => "36.4460675",
        "latitude" => "2.5382873"
    ],
    [
        "id" => "291",
        "code_postal" => "09011",
        "city_name" => "Chiffa",
        "wilaya_id" => "9",
        "ar_name" => "الشفة",
        "longitude" => "36.444398",
        "latitude" => "2.6691173"
    ],
    [
        "id" => "292",
        "code_postal" => "09012",
        "city_name" => "Hammam Melouane",
        "wilaya_id" => "9",
        "ar_name" => "حمام ملوان",
        "longitude" => "36.436102",
        "latitude" => "2.8604689"
    ],
    [
        "id" => "293",
        "code_postal" => "09013",
        "city_name" => "Ben Khlil",
        "wilaya_id" => "9",
        "ar_name" => "بني خليل",
        "longitude" => "36.5959588",
        "latitude" => "2.7838729"
    ],
    [
        "id" => "294",
        "code_postal" => "09014",
        "city_name" => "Soumaa",
        "wilaya_id" => "9",
        "ar_name" => "صومعة",
        "longitude" => "36.507015",
        "latitude" => "2.8509281"
    ],
    [
        "id" => "295",
        "code_postal" => "09016",
        "city_name" => "Mouzaia",
        "wilaya_id" => "9",
        "ar_name" => "موزاية",
        "longitude" => "36.50497",
        "latitude" => "2.6139932"
    ],
    [
        "id" => "296",
        "code_postal" => "09017",
        "city_name" => "Souhane",
        "wilaya_id" => "9",
        "ar_name" => "صوحان",
        "longitude" => "36.5263305",
        "latitude" => "3.1705831"
    ],
    [
        "id" => "297",
        "code_postal" => "09018",
        "city_name" => "Meftah",
        "wilaya_id" => "9",
        "ar_name" => "مفتاح",
        "longitude" => "36.6238272",
        "latitude" => "3.1711838"
    ],
    [
        "id" => "298",
        "code_postal" => "09019",
        "city_name" => "Ouled Selama",
        "wilaya_id" => "9",
        "ar_name" => "أولاد سلامة",
        "longitude" => "36.514057",
        "latitude" => "3.0705904"
    ],
    [
        "id" => "299",
        "code_postal" => "09020",
        "city_name" => "Boufarik",
        "wilaya_id" => "9",
        "ar_name" => "بوفاريك",
        "longitude" => "36.5739581",
        "latitude" => "2.8478167"
    ],
    [
        "id" => "300",
        "code_postal" => "09021",
        "city_name" => "Larbaa",
        "wilaya_id" => "9",
        "ar_name" => "الاربعاء",
        "longitude" => "36.5787079",
        "latitude" => "3.103324"
    ],
    [
        "id" => "301",
        "code_postal" => "09022",
        "city_name" => "Oued Djer",
        "wilaya_id" => "9",
        "ar_name" => "واد جر",
        "longitude" => "36.4223526",
        "latitude" => "2.4657911"
    ],
    [
        "id" => "302",
        "code_postal" => "09023",
        "city_name" => "Beni Tamou",
        "wilaya_id" => "9",
        "ar_name" => "بني تامو",
        "longitude" => "36.5401306",
        "latitude" => "2.7729529"
    ],
    [
        "id" => "303",
        "code_postal" => "09024",
        "city_name" => "Bouarfa",
        "wilaya_id" => "9",
        "ar_name" => "بوعرفة",
        "longitude" => "36.4151693",
        "latitude" => "2.7284692"
    ],
    [
        "id" => "304",
        "code_postal" => "09025",
        "city_name" => "Beni Mered",
        "wilaya_id" => "9",
        "ar_name" => "بني مراد",
        "longitude" => "36.5327654",
        "latitude" => "2.8198593"
    ],
    [
        "id" => "305",
        "code_postal" => "09026",
        "city_name" => "Bougara",
        "wilaya_id" => "9",
        "ar_name" => "بوڨرة",
        "longitude" => "36.4936597",
        "latitude" => "2.9731862"
    ],
    [
        "id" => "306",
        "code_postal" => "09027",
        "city_name" => "Guerrouaou",
        "wilaya_id" => "9",
        "ar_name" => "ڨرواو",
        "longitude" => "36.5019935",
        "latitude" => "2.8148899"
    ],
    [
        "id" => "307",
        "code_postal" => "09028",
        "city_name" => "Ain Romana",
        "wilaya_id" => "9",
        "ar_name" => "عين الرمانة",
        "longitude" => "36.3875985",
        "latitude" => "2.5722144"
    ],
    [
        "id" => "308",
        "code_postal" => "09029",
        "city_name" => "Djebabra",
        "wilaya_id" => "9",
        "ar_name" => "جبابرة",
        "longitude" => "36.5803885",
        "latitude" => "3.2252592"
    ],
    [
        "id" => "309",
        "code_postal" => "10001",
        "city_name" => "Bouira",
        "wilaya_id" => "10",
        "ar_name" => "البويرة",
        "longitude" => "36.3728066",
        "latitude" => "3.8350413"
    ],
    [
        "id" => "310",
        "code_postal" => "10002",
        "city_name" => "El Asnam",
        "wilaya_id" => "10",
        "ar_name" => "الأصنام",
        "longitude" => "36.3709809",
        "latitude" => "3.8941923"
    ],
    [
        "id" => "311",
        "code_postal" => "10003",
        "city_name" => "Guerrouma",
        "wilaya_id" => "10",
        "ar_name" => "قرومة",
        "longitude" => "36.4678041",
        "latitude" => "3.3603546"
    ],
    [
        "id" => "312",
        "code_postal" => "10004",
        "city_name" => "Souk El Khemis",
        "wilaya_id" => "10",
        "ar_name" => "سوق الخميس",
        "longitude" => "36.3941664",
        "latitude" => "3.5550187"
    ],
    [
        "id" => "313",
        "code_postal" => "10005",
        "city_name" => "Kadiria",
        "wilaya_id" => "10",
        "ar_name" => "قادرية",
        "longitude" => "36.5253163",
        "latitude" => "3.5963676"
    ],
    [
        "id" => "314",
        "code_postal" => "10006",
        "city_name" => "Hanif",
        "wilaya_id" => "10",
        "ar_name" => "احنيف",
        "longitude" => "36.2632628",
        "latitude" => "4.0687934"
    ],
    [
        "id" => "315",
        "code_postal" => "10007",
        "city_name" => "Dirah",
        "wilaya_id" => "10",
        "ar_name" => "ديــرة",
        "longitude" => "36.0038981",
        "latitude" => "3.5835066"
    ],
    [
        "id" => "316",
        "code_postal" => "10008",
        "city_name" => "Ait Laaziz",
        "wilaya_id" => "10",
        "ar_name" => "آيت لعزيز",
        "longitude" => "36.4453381",
        "latitude" => "3.8484757"
    ],
    [
        "id" => "317",
        "code_postal" => "10009",
        "city_name" => "Taghzout",
        "wilaya_id" => "10",
        "ar_name" => "تاغزوت",
        "longitude" => "36.4161178",
        "latitude" => "3.9036414"
    ],
    [
        "id" => "318",
        "code_postal" => "10010",
        "city_name" => "Raouraoua",
        "wilaya_id" => "10",
        "ar_name" => "الروراوة",
        "longitude" => "36.2168126",
        "latitude" => "3.5492681"
    ],
    [
        "id" => "319",
        "code_postal" => "10011",
        "city_name" => "Mezdour",
        "wilaya_id" => "10",
        "ar_name" => "مسدور",
        "longitude" => "36.0722819",
        "latitude" => "3.923954"
    ],
    [
        "id" => "320",
        "code_postal" => "10012",
        "city_name" => "Haizer",
        "wilaya_id" => "10",
        "ar_name" => "حيزر",
        "longitude" => "36.4068708",
        "latitude" => "3.9487242"
    ],
    [
        "id" => "321",
        "code_postal" => "10013",
        "city_name" => "Lakhdaria",
        "wilaya_id" => "10",
        "ar_name" => "الأخضرية",
        "longitude" => "36.5613265",
        "latitude" => "3.5173819"
    ],
    [
        "id" => "322",
        "code_postal" => "10014",
        "city_name" => "Maala",
        "wilaya_id" => "10",
        "ar_name" => "معالة",
        "longitude" => "36.4945576",
        "latitude" => "3.4880279"
    ],
    [
        "id" => "323",
        "code_postal" => "10015",
        "city_name" => "El Hachimia",
        "wilaya_id" => "10",
        "ar_name" => "الھاشمية",
        "longitude" => "36.2227385",
        "latitude" => "3.7198058"
    ],
    [
        "id" => "324",
        "code_postal" => "10016",
        "city_name" => "Aomar",
        "wilaya_id" => "10",
        "ar_name" => "أعمر",
        "longitude" => "36.5022135",
        "latitude" => "3.7122176"
    ],
    [
        "id" => "325",
        "code_postal" => "10017",
        "city_name" => "Chorfa",
        "wilaya_id" => "10",
        "ar_name" => "الشرفاء",
        "longitude" => "36.3782491",
        "latitude" => "4.3082238"
    ],
    [
        "id" => "326",
        "code_postal" => "10018",
        "city_name" => "Bordj Oukhriss",
        "wilaya_id" => "10",
        "ar_name" => "برج أوخريص",
        "longitude" => "36.09281",
        "latitude" => "3.8468001"
    ],
    [
        "id" => "327",
        "code_postal" => "10019",
        "city_name" => "El Adjiba",
        "wilaya_id" => "10",
        "ar_name" => "العجيبة",
        "longitude" => "36.3723036",
        "latitude" => "4.0139476"
    ],
    [
        "id" => "328",
        "code_postal" => "10020",
        "city_name" => "El Hakimia",
        "wilaya_id" => "10",
        "ar_name" => "الحاكمية",
        "longitude" => "36.0907204",
        "latitude" => "3.72668"
    ],
    [
        "id" => "329",
        "code_postal" => "10021",
        "city_name" => "El Khebouzia",
        "wilaya_id" => "10",
        "ar_name" => "الخبوزية",
        "longitude" => "36.3091266",
        "latitude" => "3.5599129"
    ],
    [
        "id" => "330",
        "code_postal" => "10022",
        "city_name" => "Ahl El Ksar",
        "wilaya_id" => "10",
        "ar_name" => "أھل القصر",
        "longitude" => "36.2426022",
        "latitude" => "3.9606117"
    ],
    [
        "id" => "331",
        "code_postal" => "10023",
        "city_name" => "Bouderbala",
        "wilaya_id" => "10",
        "ar_name" => "بودربالة",
        "longitude" => "36.5662885",
        "latitude" => "3.4137415"
    ],
    [
        "id" => "332",
        "code_postal" => "10024",
        "city_name" => "Zbarbar",
        "wilaya_id" => "10",
        "ar_name" => "زبربر",
        "longitude" => "36.4732903",
        "latitude" => "3.4459708"
    ],
    [
        "id" => "333",
        "code_postal" => "10025",
        "city_name" => "Ain El Hadjar",
        "wilaya_id" => "10",
        "ar_name" => "عين الحجر",
        "longitude" => "36.3598252",
        "latitude" => "3.7160585"
    ],
    [
        "id" => "334",
        "code_postal" => "10026",
        "city_name" => "Djebahia",
        "wilaya_id" => "10",
        "ar_name" => "الجباحية",
        "longitude" => "36.4603324",
        "latitude" => "3.6520932"
    ],
    [
        "id" => "335",
        "code_postal" => "10027",
        "city_name" => "Aghbalou",
        "wilaya_id" => "10",
        "ar_name" => "أغبالو",
        "longitude" => "36.4259787",
        "latitude" => "4.2679284"
    ],
    [
        "id" => "336",
        "code_postal" => "10028",
        "city_name" => "Taguedit",
        "wilaya_id" => "10",
        "ar_name" => "تاڨديت",
        "longitude" => "35.9534858",
        "latitude" => "3.7969676"
    ],
    [
        "id" => "337",
        "code_postal" => "10029",
        "city_name" => "Ain Turk",
        "wilaya_id" => "10",
        "ar_name" => "عين الترك",
        "longitude" => "36.4049144",
        "latitude" => "3.7447465"
    ],
    [
        "id" => "338",
        "code_postal" => "10030",
        "city_name" => "Saharidj",
        "wilaya_id" => "10",
        "ar_name" => "الصهاريج",
        "longitude" => "36.4310532",
        "latitude" => "4.1825268"
    ],
    [
        "id" => "339",
        "code_postal" => "10031",
        "city_name" => "Dechmia",
        "wilaya_id" => "10",
        "ar_name" => "الدشمية",
        "longitude" => "36.1366443",
        "latitude" => "3.5034345"
    ],
    [
        "id" => "340",
        "code_postal" => "10032",
        "city_name" => "Ridane",
        "wilaya_id" => "10",
        "ar_name" => "ريدان",
        "longitude" => "36.0701573",
        "latitude" => "3.399751"
    ],
    [
        "id" => "341",
        "code_postal" => "10033",
        "city_name" => "Bechloul",
        "wilaya_id" => "10",
        "ar_name" => "بشلول",
        "longitude" => "36.3745093",
        "latitude" => "3.9607305"
    ],
    [
        "id" => "342",
        "code_postal" => "10034",
        "city_name" => "Boukram",
        "wilaya_id" => "10",
        "ar_name" => "بوكرام",
        "longitude" => "36.5178782",
        "latitude" => "3.2987712"
    ],
    [
        "id" => "343",
        "code_postal" => "10035",
        "city_name" => "Ain Bessam",
        "wilaya_id" => "10",
        "ar_name" => "عين بسام",
        "longitude" => "36.3364461",
        "latitude" => "3.5562554"
    ],
    [
        "id" => "344",
        "code_postal" => "10036",
        "city_name" => "Bir Ghbalou",
        "wilaya_id" => "10",
        "ar_name" => "بئر غبالو",
        "longitude" => "36.268461",
        "latitude" => "3.5073827"
    ],
    [
        "id" => "345",
        "code_postal" => "10037",
        "city_name" => "Mchedallah",
        "wilaya_id" => "10",
        "ar_name" => "مشدا الله",
        "longitude" => "36.3633061",
        "latitude" => "4.1871831"
    ],
    [
        "id" => "346",
        "code_postal" => "10038",
        "city_name" => "Sour El Ghozlane",
        "wilaya_id" => "10",
        "ar_name" => "سور الغزلان",
        "longitude" => "36.1694764",
        "latitude" => "3.55647"
    ],
    [
        "id" => "347",
        "code_postal" => "10039",
        "city_name" => "Maamora",
        "wilaya_id" => "10",
        "ar_name" => "المعمورة",
        "longitude" => "35.9979399",
        "latitude" => "3.525493"
    ],
    [
        "id" => "348",
        "code_postal" => "10040",
        "city_name" => "Ouled Rached",
        "wilaya_id" => "10",
        "ar_name" => "أولاد راشد",
        "longitude" => "36.2020432",
        "latitude" => "3.9321509"
    ],
    [
        "id" => "349",
        "code_postal" => "10041",
        "city_name" => "Ain Laloui",
        "wilaya_id" => "10",
        "ar_name" => "عين العلوي",
        "longitude" => "36.3067411",
        "latitude" => "3.6860828"
    ],
    [
        "id" => "350",
        "code_postal" => "10042",
        "city_name" => "Hadjera Zerga",
        "wilaya_id" => "10",
        "ar_name" => "الحجرة الزرقاء",
        "longitude" => "35.9465348",
        "latitude" => "3.6906234"
    ],
    [
        "id" => "351",
        "code_postal" => "10043",
        "city_name" => "Ath Mansour",
        "wilaya_id" => "10",
        "ar_name" => "آث منصور",
        "longitude" => "36.2991769",
        "latitude" => "4.2484448"
    ],
    [
        "id" => "352",
        "code_postal" => "10044",
        "city_name" => "El Mokrani",
        "wilaya_id" => "10",
        "ar_name" => "المقراني",
        "longitude" => "36.4249768",
        "latitude" => "3.5341619"
    ],
    [
        "id" => "353",
        "code_postal" => "10045",
        "city_name" => "Oued El Berdi",
        "wilaya_id" => "10",
        "ar_name" => "وادى البردي",
        "longitude" => "36.257285",
        "latitude" => "3.8546965"
    ],
    [
        "id" => "354",
        "code_postal" => "11001",
        "city_name" => "Tamanghasset",
        "wilaya_id" => "11",
        "ar_name" => "تمنراست",
        "longitude" => "22.2707733",
        "latitude" => "4.5540574"
    ],
    [
        "id" => "355",
        "code_postal" => "11002",
        "city_name" => "Abalessa",
        "wilaya_id" => "11",
        "ar_name" => "أبلسة",
        "longitude" => "21.984742",
        "latitude" => "2.2077874"
    ],
    [
        "id" => "356",
        "code_postal" => "11003",
        "city_name" => "In Ghar",
        "wilaya_id" => "11",
        "ar_name" => "عـيـن غــار",
        "longitude" => "27.1037909",
        "latitude" => "1.8904637"
    ],
    [
        "id" => "357",
        "code_postal" => "11004",
        "city_name" => "In Guezzam",
        "wilaya_id" => "11",
        "ar_name" => "عين قزام",
        "longitude" => "20.3875487",
        "latitude" => "4.7892187"
    ],
    [
        "id" => "358",
        "code_postal" => "11005",
        "city_name" => "Idles",
        "wilaya_id" => "11",
        "ar_name" => "إدلس",
        "longitude" => "23.8174829",
        "latitude" => "5.9250425"
    ],
    [
        "id" => "359",
        "code_postal" => "11006",
        "city_name" => "Tazouk",
        "wilaya_id" => "11",
        "ar_name" => "تاظروك",
        "longitude" => "23.4241274",
        "latitude" => "6.2425195"
    ],
    [
        "id" => "360",
        "code_postal" => "11007",
        "city_name" => "Tinzaouatine",
        "wilaya_id" => "11",
        "ar_name" => "تين زاوتين",
        "longitude" => "20.4281421",
        "latitude" => "2.0907022"
    ],
    [
        "id" => "361",
        "code_postal" => "11008",
        "city_name" => "In Salah",
        "wilaya_id" => "11",
        "ar_name" => "عين صالح",
        "longitude" => "27.1955358",
        "latitude" => "2.4666218"
    ],
    [
        "id" => "362",
        "code_postal" => "11009",
        "city_name" => "In Amguel",
        "wilaya_id" => "11",
        "ar_name" => "ان أمقل",
        "longitude" => "24.9098562",
        "latitude" => "1.2189579"
    ],
    [
        "id" => "363",
        "code_postal" => "11010",
        "city_name" => "Foggaret Ezzaouia",
        "wilaya_id" => "11",
        "ar_name" => "فقارة الزوى",
        "longitude" => "27.3604139",
        "latitude" => "2.8384638"
    ],
    [
        "id" => "364",
        "code_postal" => "12001",
        "city_name" => "Tebessa",
        "wilaya_id" => "12",
        "ar_name" => "تبسة",
        "longitude" => "35.4117209",
        "latitude" => "8.0755254"
    ],
    [
        "id" => "365",
        "code_postal" => "12002",
        "city_name" => "Bir El Ater",
        "wilaya_id" => "12",
        "ar_name" => "بئر العاتر",
        "longitude" => "34.7546133",
        "latitude" => "8.0234307"
    ],
    [
        "id" => "366",
        "code_postal" => "12003",
        "city_name" => "Cheria",
        "wilaya_id" => "12",
        "ar_name" => "الــشــريــعـة",
        "longitude" => "35.267904",
        "latitude" => "7.7355765"
    ],
    [
        "id" => "367",
        "code_postal" => "12004",
        "city_name" => "Stah Guentis",
        "wilaya_id" => "12",
        "ar_name" => "سطح قنطيس",
        "longitude" => "34.9951892",
        "latitude" => "7.2928362"
    ],
    [
        "id" => "368",
        "code_postal" => "12005",
        "city_name" => "El Aouinet",
        "wilaya_id" => "12",
        "ar_name" => "العوينات",
        "longitude" => "35.8685842",
        "latitude" => "7.8693435"
    ],
    [
        "id" => "369",
        "code_postal" => "12006",
        "city_name" => "Lahouidjbet",
        "wilaya_id" => "12",
        "ar_name" => "الحويجبات",
        "longitude" => "35.292789",
        "latitude" => "8.274572"
    ],
    [
        "id" => "370",
        "code_postal" => "12007",
        "city_name" => "Safsaf El Ouesra",
        "wilaya_id" => "12",
        "ar_name" => "صفصاف الوسرة",
        "longitude" => "34.9570976",
        "latitude" => "8.1988049"
    ],
    [
        "id" => "371",
        "code_postal" => "12008",
        "city_name" => "Hammamet",
        "wilaya_id" => "12",
        "ar_name" => "الحمامات",
        "longitude" => "35.4519226",
        "latitude" => "7.923867"
    ],
    [
        "id" => "372",
        "code_postal" => "12009",
        "city_name" => "Negrine",
        "wilaya_id" => "12",
        "ar_name" => "نقرين",
        "longitude" => "34.485828",
        "latitude" => "7.5028466"
    ],
    [
        "id" => "373",
        "code_postal" => "12010",
        "city_name" => "Bir El Mokadem",
        "wilaya_id" => "12",
        "ar_name" => "بــئــر مــقـدم",
        "longitude" => "35.3704867",
        "latitude" => "7.8005075"
    ],
    [
        "id" => "374",
        "code_postal" => "12011",
        "city_name" => "El Kouif",
        "wilaya_id" => "12",
        "ar_name" => "الكويف",
        "longitude" => "35.499565",
        "latitude" => "8.3115219"
    ],
    [
        "id" => "375",
        "code_postal" => "12012",
        "city_name" => "Morsott",
        "wilaya_id" => "12",
        "ar_name" => "مرسط",
        "longitude" => "35.6694643",
        "latitude" => "8.0015659"
    ],
    [
        "id" => "376",
        "code_postal" => "12013",
        "city_name" => "El Ogla",
        "wilaya_id" => "12",
        "ar_name" => "العقلة",
        "longitude" => "35.1833322",
        "latitude" => "7.4579122"
    ],
    [
        "id" => "377",
        "code_postal" => "12014",
        "city_name" => "Bir Dheb",
        "wilaya_id" => "12",
        "ar_name" => "بٔير الذھب",
        "longitude" => "35.4117259",
        "latitude" => "8.110545"
    ],
    [
        "id" => "378",
        "code_postal" => "12015",
        "city_name" => "El Ogla",
        "wilaya_id" => "12",
        "ar_name" => "العقلة",
        "longitude" => "35.1833322",
        "latitude" => "7.4579122"
    ],
    [
        "id" => "379",
        "code_postal" => "12016",
        "city_name" => "Gorriguer",
        "wilaya_id" => "12",
        "ar_name" => "قوريقر",
        "longitude" => "35.1833322",
        "latitude" => "7.4579122"
    ],
    [
        "id" => "380",
        "code_postal" => "12017",
        "city_name" => "Bekkaria",
        "wilaya_id" => "12",
        "ar_name" => "بكارية",
        "longitude" => "35.3666661",
        "latitude" => "8.2412452"
    ],
    [
        "id" => "381",
        "code_postal" => "12018",
        "city_name" => "Boukhadra",
        "wilaya_id" => "12",
        "ar_name" => "بوخضرة",
        "longitude" => "35.7490236",
        "latitude" => "8.0267572"
    ],
    [
        "id" => "382",
        "code_postal" => "12019",
        "city_name" => "Ouenza",
        "wilaya_id" => "12",
        "ar_name" => "الونزة",
        "longitude" => "35.9421139",
        "latitude" => "8.1088536"
    ],
    [
        "id" => "383",
        "code_postal" => "12020",
        "city_name" => "El Ma El Biodh",
        "wilaya_id" => "12",
        "ar_name" => "الماء الأبيض",
        "longitude" => "35.2066339",
        "latitude" => "8.1509541"
    ],
    [
        "id" => "384",
        "code_postal" => "12021",
        "city_name" => "Oum Ali",
        "wilaya_id" => "12",
        "ar_name" => "أم على",
        "longitude" => "35.0115532",
        "latitude" => "8.2926392"
    ],
    [
        "id" => "385",
        "code_postal" => "12022",
        "city_name" => "Tlidjene",
        "wilaya_id" => "12",
        "ar_name" => "ثليجان",
        "longitude" => "35.1184512",
        "latitude" => "7.7597808"
    ],
    [
        "id" => "386",
        "code_postal" => "12023",
        "city_name" => "Ain Zerga",
        "wilaya_id" => "12",
        "ar_name" => "عين الزرقاء",
        "longitude" => "35.6333322",
        "latitude" => "8.2579122"
    ],
    [
        "id" => "387",
        "code_postal" => "12024",
        "city_name" => "El Meridj",
        "wilaya_id" => "12",
        "ar_name" => "المريج",
        "longitude" => "35.7935581",
        "latitude" => "8.2175374"
    ],
    [
        "id" => "388",
        "code_postal" => "12025",
        "city_name" => "Boulhaf Dyr",
        "wilaya_id" => "12",
        "ar_name" => "بولحاف الدير",
        "longitude" => "35.4117259",
        "latitude" => "8.110545"
    ],
    [
        "id" => "389",
        "code_postal" => "12026",
        "city_name" => "Bedjene",
        "wilaya_id" => "12",
        "ar_name" => "بجن",
        "longitude" => "35.3487094",
        "latitude" => "7.469641"
    ],
    [
        "id" => "390",
        "code_postal" => "12027",
        "city_name" => "El Mazeraa",
        "wilaya_id" => "12",
        "ar_name" => "المزرعة",
        "longitude" => "35.4117259",
        "latitude" => "8.110545"
    ],
    [
        "id" => "391",
        "code_postal" => "12028",
        "city_name" => "Ferkane",
        "wilaya_id" => "12",
        "ar_name" => "فـــــــركـــــان",
        "longitude" => "34.557943",
        "latitude" => "7.3995494"
    ],
    [
        "id" => "392",
        "code_postal" => "13001",
        "city_name" => "Tlemcen",
        "wilaya_id" => "13",
        "ar_name" => "تلمسان",
        "longitude" => "34.8959491",
        "latitude" => "-1.3501175"
    ],
    [
        "id" => "393",
        "code_postal" => "13002",
        "city_name" => "Beni Mester",
        "wilaya_id" => "13",
        "ar_name" => "بني مستار",
        "longitude" => "34.8639575",
        "latitude" => "-1.4356042"
    ],
    [
        "id" => "394",
        "code_postal" => "13003",
        "city_name" => "Ain Tallout",
        "wilaya_id" => "13",
        "ar_name" => "عين تالوت",
        "longitude" => "34.9238688",
        "latitude" => "-0.9667326"
    ],
    [
        "id" => "395",
        "code_postal" => "13004",
        "city_name" => "Remchi",
        "wilaya_id" => "13",
        "ar_name" => "الرمشي",
        "longitude" => "35.0550485",
        "latitude" => "-1.4635847"
    ],
    [
        "id" => "396",
        "code_postal" => "13005",
        "city_name" => "El Fehoul",
        "wilaya_id" => "13",
        "ar_name" => "الفحول",
        "longitude" => "35.1166788",
        "latitude" => "-1.2970948"
    ],
    [
        "id" => "397",
        "code_postal" => "13006",
        "city_name" => "Sabra",
        "wilaya_id" => "13",
        "ar_name" => "صبرة",
        "longitude" => "34.8255654",
        "latitude" => "-1.5368414"
    ],
    [
        "id" => "398",
        "code_postal" => "13007",
        "city_name" => "Ghazaouet",
        "wilaya_id" => "13",
        "ar_name" => "الغزوات",
        "longitude" => "35.0934337",
        "latitude" => "-1.8720748"
    ],
    [
        "id" => "399",
        "code_postal" => "13008",
        "city_name" => "Souani",
        "wilaya_id" => "13",
        "ar_name" => "السواني",
        "longitude" => "34.9184687",
        "latitude" => "-1.92235"
    ],
    [
        "id" => "400",
        "code_postal" => "13009",
        "city_name" => "Djebala",
        "wilaya_id" => "13",
        "ar_name" => "جبالة",
        "longitude" => "34.9775481",
        "latitude" => "-1.8940714"
    ],
    [
        "id" => "401",
        "code_postal" => "13010",
        "city_name" => "El Gor",
        "wilaya_id" => "13",
        "ar_name" => "الغور",
        "longitude" => "34.6356392",
        "latitude" => "-1.1625071"
    ],
    [
        "id" => "402",
        "code_postal" => "13011",
        "city_name" => "Oued Chouly",
        "wilaya_id" => "13",
        "ar_name" => "وادى الشولى",
        "longitude" => "34.8666661",
        "latitude" => "-1.1420878"
    ],
    [
        "id" => "403",
        "code_postal" => "13012",
        "city_name" => "Ain Fezza",
        "wilaya_id" => "13",
        "ar_name" => "عين فزّة",
        "longitude" => "34.8794264",
        "latitude" => "-1.2421418"
    ],
    [
        "id" => "404",
        "code_postal" => "13013",
        "city_name" => "Ouled Mimoun",
        "wilaya_id" => "13",
        "ar_name" => "أولاد ميمون",
        "longitude" => "34.9018053",
        "latitude" => "-1.0442162"
    ],
    [
        "id" => "405",
        "code_postal" => "13014",
        "city_name" => "Amieur",
        "wilaya_id" => "13",
        "ar_name" => "عمير",
        "longitude" => "34.8959541",
        "latitude" => "-1.3150979"
    ],
    [
        "id" => "406",
        "code_postal" => "13015",
        "city_name" => "Ain Youcef",
        "wilaya_id" => "13",
        "ar_name" => "عين يوسف",
        "longitude" => "35.048443",
        "latitude" => "-1.3841379"
    ],
    [
        "id" => "407",
        "code_postal" => "13016",
        "city_name" => "Zenata",
        "wilaya_id" => "13",
        "ar_name" => "زناتة",
        "longitude" => "34.9849042",
        "latitude" => "-1.4760198"
    ],
    [
        "id" => "408",
        "code_postal" => "13017",
        "city_name" => "Beni Snous",
        "wilaya_id" => "13",
        "ar_name" => "بنى سنوس",
        "longitude" => "34.6593315",
        "latitude" => "-1.5615608"
    ],
    [
        "id" => "409",
        "code_postal" => "13018",
        "city_name" => "Bab El Assa",
        "wilaya_id" => "13",
        "ar_name" => "باب العسة",
        "longitude" => "34.9654779",
        "latitude" => "-2.0399109"
    ],
    [
        "id" => "410",
        "code_postal" => "13019",
        "city_name" => "Dar Yaghmouracene",
        "wilaya_id" => "13",
        "ar_name" => "دار يغمراسن",
        "longitude" => "34.8959541",
        "latitude" => "-1.3150979"
    ],
    [
        "id" => "411",
        "code_postal" => "13020",
        "city_name" => "Fellaoucene",
        "wilaya_id" => "13",
        "ar_name" => "فلاوسن",
        "longitude" => "35.013723",
        "latitude" => "-1.6538313"
    ],
    [
        "id" => "412",
        "code_postal" => "13021",
        "city_name" => "Azails",
        "wilaya_id" => "13",
        "ar_name" => "العزايل",
        "longitude" => "34.8959541",
        "latitude" => "-1.3150979"
    ],
    [
        "id" => "413",
        "code_postal" => "13022",
        "city_name" => "Sebbaa Chioukh",
        "wilaya_id" => "13",
        "ar_name" => "سبعة شيوخ",
        "longitude" => "35.1563716",
        "latitude" => "-1.3705445"
    ],
    [
        "id" => "414",
        "code_postal" => "13023",
        "city_name" => "Terni Beni Hediel",
        "wilaya_id" => "13",
        "ar_name" => "تيرني بني هديل",
        "longitude" => "34.7966361",
        "latitude" => "-1.3623785"
    ],
    [
        "id" => "415",
        "code_postal" => "13024",
        "city_name" => "Bensekrane",
        "wilaya_id" => "13",
        "ar_name" => "بن سكران",
        "longitude" => "35.0745555",
        "latitude" => "-1.2362705"
    ],
    [
        "id" => "416",
        "code_postal" => "13025",
        "city_name" => "Ain Nehala",
        "wilaya_id" => "13",
        "ar_name" => "عين نحالة",
        "longitude" => "35.0273782",
        "latitude" => "-0.9359407"
    ],
    [
        "id" => "417",
        "code_postal" => "13026",
        "city_name" => "Hennaya",
        "wilaya_id" => "13",
        "ar_name" => "الحناية",
        "longitude" => "34.9490231",
        "latitude" => "-1.3866808"
    ],
    [
        "id" => "418",
        "code_postal" => "13027",
        "city_name" => "Maghnia",
        "wilaya_id" => "13",
        "ar_name" => "مغنية",
        "longitude" => "34.8481781",
        "latitude" => "-1.780215"
    ],
    [
        "id" => "419",
        "code_postal" => "13028",
        "city_name" => "Hammam Boughrara",
        "wilaya_id" => "13",
        "ar_name" => "حمام بوغرارة",
        "longitude" => "34.8904539",
        "latitude" => "-1.6555881"
    ],
    [
        "id" => "420",
        "code_postal" => "13029",
        "city_name" => "Souahlia",
        "wilaya_id" => "13",
        "ar_name" => "تونان",
        "longitude" => "35.0438386",
        "latitude" => "-1.9086172"
    ],
    [
        "id" => "421",
        "code_postal" => "13030",
        "city_name" => "Msirda Fouaga",
        "wilaya_id" => "13",
        "ar_name" => "مسيردة الفواقة",
        "longitude" => "35.0142663",
        "latitude" => "-2.073219"
    ],
    [
        "id" => "422",
        "code_postal" => "13031",
        "city_name" => "Ain Fetah",
        "wilaya_id" => "13",
        "ar_name" => "عين فتاح",
        "longitude" => "36.0036103",
        "latitude" => "0.3170785"
    ],
    [
        "id" => "423",
        "code_postal" => "13032",
        "city_name" => "El Aricha",
        "wilaya_id" => "13",
        "ar_name" => "العريشة",
        "longitude" => "34.2202108",
        "latitude" => "-1.2723972"
    ],
    [
        "id" => "424",
        "code_postal" => "13033",
        "city_name" => "Souk Thlata",
        "wilaya_id" => "13",
        "ar_name" => "سوق الثلاثاء",
        "longitude" => "35.0194848",
        "latitude" => "-2.0213987"
    ],
    [
        "id" => "425",
        "code_postal" => "13034",
        "city_name" => "Sidi Abdelli",
        "wilaya_id" => "13",
        "ar_name" => "سيدي العبدلي",
        "longitude" => "35.0652344",
        "latitude" => "-1.1432004"
    ],
    [
        "id" => "426",
        "code_postal" => "13035",
        "city_name" => "Sebdou",
        "wilaya_id" => "13",
        "ar_name" => "سبدو",
        "longitude" => "34.6392357",
        "latitude" => "-1.3469271"
    ],
    [
        "id" => "427",
        "code_postal" => "13036",
        "city_name" => "Beni Ouarsous",
        "wilaya_id" => "13",
        "ar_name" => "برج عريمة",
        "longitude" => "35.0818832",
        "latitude" => "-1.5645648"
    ],
    [
        "id" => "428",
        "code_postal" => "13037",
        "city_name" => "Sidi Medjahed",
        "wilaya_id" => "13",
        "ar_name" => "سيدي مجاهد",
        "longitude" => "34.77568",
        "latitude" => "-1.6426706"
    ],
    [
        "id" => "429",
        "code_postal" => "13038",
        "city_name" => "Beni Boussaid",
        "wilaya_id" => "13",
        "ar_name" => "بني بوسعيد",
        "longitude" => "34.6490781",
        "latitude" => "-1.762104"
    ],
    [
        "id" => "430",
        "code_postal" => "13039",
        "city_name" => "Marsa Ben Mhidi",
        "wilaya_id" => "13",
        "ar_name" => "مرسى بن مھيدي",
        "longitude" => "35.0790982",
        "latitude" => "-2.2135629"
    ],
    [
        "id" => "431",
        "code_postal" => "13040",
        "city_name" => "Nedroma",
        "wilaya_id" => "13",
        "ar_name" => "ندرومة",
        "longitude" => "35.0141436",
        "latitude" => "-1.769829"
    ],
    [
        "id" => "432",
        "code_postal" => "13041",
        "city_name" => "Sidi Djillali",
        "wilaya_id" => "13",
        "ar_name" => "سيدي الجيلالي",
        "longitude" => "34.4459186",
        "latitude" => "-1.5761732"
    ],
    [
        "id" => "433",
        "code_postal" => "13042",
        "city_name" => "Beni Bahdel",
        "wilaya_id" => "13",
        "ar_name" => "بني بهدل",
        "longitude" => "34.7114024",
        "latitude" => "-1.5174008"
    ],
    [
        "id" => "434",
        "code_postal" => "13043",
        "city_name" => "El Bouihi",
        "wilaya_id" => "13",
        "ar_name" => "البويھي",
        "longitude" => "34.8959541",
        "latitude" => "-1.3150979"
    ],
    [
        "id" => "435",
        "code_postal" => "13044",
        "city_name" => "Honaine",
        "wilaya_id" => "13",
        "ar_name" => "هنين",
        "longitude" => "35.1800515",
        "latitude" => "-1.657691"
    ],
    [
        "id" => "436",
        "code_postal" => "13045",
        "city_name" => "Tianet",
        "wilaya_id" => "13",
        "ar_name" => "تيانت",
        "longitude" => "35.0491084",
        "latitude" => "-1.8584921"
    ],
    [
        "id" => "437",
        "code_postal" => "13046",
        "city_name" => "Ouled Riyah",
        "wilaya_id" => "13",
        "ar_name" => "أولاد رياح",
        "longitude" => "34.9615122",
        "latitude" => "-1.5020585"
    ],
    [
        "id" => "438",
        "code_postal" => "13047",
        "city_name" => "Bouhlou",
        "wilaya_id" => "13",
        "ar_name" => "بوحلو",
        "longitude" => "34.7787462",
        "latitude" => "-1.5850461"
    ],
    [
        "id" => "439",
        "code_postal" => "13048",
        "city_name" => "Souk El Khemis",
        "wilaya_id" => "13",
        "ar_name" => "سوق الخميس",
        "longitude" => "35.1732293",
        "latitude" => "-1.5607239"
    ],
    [
        "id" => "440",
        "code_postal" => "13049",
        "city_name" => "Ain Ghoraba",
        "wilaya_id" => "13",
        "ar_name" => "عين غرابة",
        "longitude" => "34.7147251",
        "latitude" => "-1.4039435"
    ],
    [
        "id" => "441",
        "code_postal" => "13050",
        "city_name" => "Chetouane",
        "wilaya_id" => "13",
        "ar_name" => "شتوان",
        "longitude" => "34.9175348",
        "latitude" => "-1.3164927"
    ],
    [
        "id" => "442",
        "code_postal" => "13051",
        "city_name" => "Mansourah",
        "wilaya_id" => "13",
        "ar_name" => "المنصورة",
        "longitude" => "34.8704299",
        "latitude" => "-1.389299"
    ],
    [
        "id" => "443",
        "code_postal" => "13052",
        "city_name" => "Beni Semiel",
        "wilaya_id" => "13",
        "ar_name" => "بني مستار",
        "longitude" => "34.8639575",
        "latitude" => "-1.4356042"
    ],
    [
        "id" => "444",
        "code_postal" => "13053",
        "city_name" => "Ain Kebira",
        "wilaya_id" => "13",
        "ar_name" => "عين الكبيرة",
        "longitude" => "35.0317001",
        "latitude" => "-1.686101"
    ],
    [
        "id" => "445",
        "code_postal" => "14001",
        "city_name" => "Tiaret",
        "wilaya_id" => "14",
        "ar_name" => "تيارت‎",
        "longitude" => "35.3599696",
        "latitude" => "1.3215754"
    ],
    [
        "id" => "446",
        "code_postal" => "14002",
        "city_name" => "Medroussa",
        "wilaya_id" => "14",
        "ar_name" => "مدروسة",
        "longitude" => "35.1752197",
        "latitude" => "1.1979175"
    ],
    [
        "id" => "447",
        "code_postal" => "14003",
        "city_name" => "Ain Bouchekif",
        "wilaya_id" => "14",
        "ar_name" => "بوشقيف",
        "longitude" => "35.3543704",
        "latitude" => "1.5036248"
    ],
    [
        "id" => "448",
        "code_postal" => "14004",
        "city_name" => "Sidi Ali Mellal",
        "wilaya_id" => "14",
        "ar_name" => "سيدي علي ملال",
        "longitude" => "35.5635054",
        "latitude" => "1.2199974"
    ],
    [
        "id" => "449",
        "code_postal" => "14005",
        "city_name" => "Ain Zarit",
        "wilaya_id" => "14",
        "ar_name" => "عين زاريت",
        "longitude" => "35.351973",
        "latitude" => "1.6572618"
    ],
    [
        "id" => "450",
        "code_postal" => "14006",
        "city_name" => "Ain Deheb",
        "wilaya_id" => "14",
        "ar_name" => "عين الذهب",
        "longitude" => "34.847125",
        "latitude" => "1.530876"
    ],
    [
        "id" => "451",
        "code_postal" => "14007",
        "city_name" => "Sidi Bakhti",
        "wilaya_id" => "14",
        "ar_name" => "سيدي بختي",
        "longitude" => "35.2393277",
        "latitude" => "0.9755382"
    ],
    [
        "id" => "452",
        "code_postal" => "14008",
        "city_name" => "Medrissa",
        "wilaya_id" => "14",
        "ar_name" => "مدريسة",
        "longitude" => "34.8949768",
        "latitude" => "1.2315845"
    ],
    [
        "id" => "453",
        "code_postal" => "14009",
        "city_name" => "Zmalet El Emir Aek",
        "wilaya_id" => "14",
        "ar_name" => "زمالة الأمير عبد القادر",
        "longitude" => "34.899755",
        "latitude" => "2.279362"
    ],
    [
        "id" => "454",
        "code_postal" => "14010",
        "city_name" => "Madna",
        "wilaya_id" => "14",
        "ar_name" => "مادنة",
        "longitude" => "35.3599899",
        "latitude" => "1.3916159"
    ],
    [
        "id" => "455",
        "code_postal" => "14011",
        "city_name" => "Sebt",
        "wilaya_id" => "14",
        "ar_name" => "السبت",
        "longitude" => "35.3599899",
        "latitude" => "1.3916159"
    ],
    [
        "id" => "456",
        "code_postal" => "14012",
        "city_name" => "Mellakou",
        "wilaya_id" => "14",
        "ar_name" => "ملاكو",
        "longitude" => "35.2514714",
        "latitude" => "1.2272501"
    ],
    [
        "id" => "457",
        "code_postal" => "14013",
        "city_name" => "Dahmouni",
        "wilaya_id" => "14",
        "ar_name" => "دحموني",
        "longitude" => "35.4166137",
        "latitude" => "1.4674473"
    ],
    [
        "id" => "458",
        "code_postal" => "14014",
        "city_name" => "Rahouia",
        "wilaya_id" => "14",
        "ar_name" => "رحوية",
        "longitude" => "35.5308956",
        "latitude" => "1.0130642"
    ],
    [
        "id" => "459",
        "code_postal" => "14015",
        "city_name" => "Mahdia",
        "wilaya_id" => "14",
        "ar_name" => "المھدية",
        "longitude" => "35.4312648",
        "latitude" => "1.7415474"
    ],
    [
        "id" => "460",
        "code_postal" => "14016",
        "city_name" => "Sougueur",
        "wilaya_id" => "14",
        "ar_name" => "سوقر",
        "longitude" => "35.1812014",
        "latitude" => "1.4648287"
    ],
    [
        "id" => "461",
        "code_postal" => "14017",
        "city_name" => "Sidi Abdelghani",
        "wilaya_id" => "14",
        "ar_name" => "سيدي عبد الغنى",
        "longitude" => "35.2355935",
        "latitude" => "1.6199474"
    ],
    [
        "id" => "462",
        "code_postal" => "14018",
        "city_name" => "Ain El Hadid",
        "wilaya_id" => "14",
        "ar_name" => "عين الحديد",
        "longitude" => "35.0604573",
        "latitude" => "0.8713103"
    ],
    [
        "id" => "463",
        "code_postal" => "14019",
        "city_name" => "Ouled Djerad",
        "wilaya_id" => "14",
        "ar_name" => "اولاد جراد",
        "longitude" => "35.3599899",
        "latitude" => "1.3916159"
    ],
    [
        "id" => "464",
        "code_postal" => "14020",
        "city_name" => "Naima",
        "wilaya_id" => "14",
        "ar_name" => "نعيمة",
        "longitude" => "35.092594",
        "latitude" => "1.4729726"
    ],
    [
        "id" => "465",
        "code_postal" => "14021",
        "city_name" => "Meghila",
        "wilaya_id" => "14",
        "ar_name" => "مغيلة",
        "longitude" => "35.3633423",
        "latitude" => "1.3249683"
    ],
    [
        "id" => "466",
        "code_postal" => "14022",
        "city_name" => "Guertoufa",
        "wilaya_id" => "14",
        "ar_name" => "قرطوفة",
        "longitude" => "35.3929502",
        "latitude" => "1.246283"
    ],
    [
        "id" => "467",
        "code_postal" => "14023",
        "city_name" => "Sidi Hosni",
        "wilaya_id" => "14",
        "ar_name" => "سيدي حسني",
        "longitude" => "35.4697136",
        "latitude" => "1.5114355"
    ],
    [
        "id" => "468",
        "code_postal" => "14024",
        "city_name" => "Djillali Ben Amar",
        "wilaya_id" => "14",
        "ar_name" => "جيلالي بن عمار",
        "longitude" => "35.4442917",
        "latitude" => "0.8475566"
    ],
    [
        "id" => "469",
        "code_postal" => "14025",
        "city_name" => "Sebaine",
        "wilaya_id" => "14",
        "ar_name" => "سبعين",
        "longitude" => "35.4574363",
        "latitude" => "1.5985322"
    ],
    [
        "id" => "470",
        "code_postal" => "14026",
        "city_name" => "Tousnina",
        "wilaya_id" => "14",
        "ar_name" => "توسنينة",
        "longitude" => "35.1140017",
        "latitude" => "1.2658846"
    ],
    [
        "id" => "471",
        "code_postal" => "14027",
        "city_name" => "Frenda",
        "wilaya_id" => "14",
        "ar_name" => "فرندة",
        "longitude" => "35.0625636",
        "latitude" => "1.0403751"
    ],
    [
        "id" => "472",
        "code_postal" => "14028",
        "city_name" => "Ain Kermes",
        "wilaya_id" => "14",
        "ar_name" => "عين كرمس",
        "longitude" => "34.9297691",
        "latitude" => "1.00103"
    ],
    [
        "id" => "473",
        "code_postal" => "14029",
        "city_name" => "Ksar Chellala",
        "wilaya_id" => "14",
        "ar_name" => "قصر الشلالة",
        "longitude" => "35.2197113",
        "latitude" => "2.3002837"
    ],
    [
        "id" => "474",
        "code_postal" => "14030",
        "city_name" => "Rechaiga",
        "wilaya_id" => "14",
        "ar_name" => "الرشايقة",
        "longitude" => "35.4099423",
        "latitude" => "1.9612956"
    ],
    [
        "id" => "475",
        "code_postal" => "14031",
        "city_name" => "Nadorah",
        "wilaya_id" => "14",
        "ar_name" => "ملاكو",
        "longitude" => "35.2514714",
        "latitude" => "1.2272501"
    ],
    [
        "id" => "476",
        "code_postal" => "14032",
        "city_name" => "Tagdemt",
        "wilaya_id" => "14",
        "ar_name" => "تاقدمت",
        "longitude" => "35.3354988",
        "latitude" => "1.2243641"
    ],
    [
        "id" => "477",
        "code_postal" => "14033",
        "city_name" => "Oued Lilli",
        "wilaya_id" => "14",
        "ar_name" => "وادى ليلى",
        "longitude" => "35.5119281",
        "latitude" => "1.2582952"
    ],
    [
        "id" => "478",
        "code_postal" => "14034",
        "city_name" => "Mechraa Safa",
        "wilaya_id" => "14",
        "ar_name" => "مشرع الصفاء",
        "longitude" => "35.3599899",
        "latitude" => "1.3916159"
    ],
    [
        "id" => "479",
        "code_postal" => "14035",
        "city_name" => "Hamadia",
        "wilaya_id" => "14",
        "ar_name" => "الحمادية",
        "longitude" => "35.4612984",
        "latitude" => "1.8652296"
    ],
    [
        "id" => "480",
        "code_postal" => "14036",
        "city_name" => "Chehaima",
        "wilaya_id" => "14",
        "ar_name" => "شحيمة",
        "longitude" => "34.897482",
        "latitude" => "1.2948222"
    ],
    [
        "id" => "481",
        "code_postal" => "14037",
        "city_name" => "Takhemaret",
        "wilaya_id" => "14",
        "ar_name" => "تاخمرت",
        "longitude" => "35.1048114",
        "latitude" => "0.6649302"
    ],
    [
        "id" => "482",
        "code_postal" => "14038",
        "city_name" => "Sidi Abderrahmane",
        "wilaya_id" => "14",
        "ar_name" => "سيدي عبدالرحمان",
        "longitude" => "34.7996374",
        "latitude" => "1.1235237"
    ],
    [
        "id" => "483",
        "code_postal" => "14039",
        "city_name" => "Serghine",
        "wilaya_id" => "14",
        "ar_name" => "سرغين",
        "longitude" => "35.2557642",
        "latitude" => "2.4738335"
    ],
    [
        "id" => "484",
        "code_postal" => "14040",
        "city_name" => "Bougara",
        "wilaya_id" => "14",
        "ar_name" => "بوقرة",
        "longitude" => "35.5542945",
        "latitude" => "1.9566606"
    ],
    [
        "id" => "485",
        "code_postal" => "14041",
        "city_name" => "Faidja",
        "wilaya_id" => "14",
        "ar_name" => "الفايجة",
        "longitude" => "35.3599899",
        "latitude" => "1.3916159"
    ],
    [
        "id" => "486",
        "code_postal" => "14042",
        "city_name" => "Tidda",
        "wilaya_id" => "14",
        "ar_name" => "تيدة",
        "longitude" => "35.583236",
        "latitude" => "1.263181"
    ],
    [
        "id" => "487",
        "code_postal" => "15001",
        "city_name" => "Tizi Ouzou",
        "wilaya_id" => "15",
        "ar_name" => "تيزي وزو",
        "longitude" => "36.7001863",
        "latitude" => "4.0059166"
    ],
    [
        "id" => "488",
        "code_postal" => "15002",
        "city_name" => "Ain El Hammam",
        "wilaya_id" => "15",
        "ar_name" => "عين الحمام",
        "longitude" => "36.5725501",
        "latitude" => "4.246757"
    ],
    [
        "id" => "489",
        "code_postal" => "15003",
        "city_name" => "Akbil",
        "wilaya_id" => "15",
        "ar_name" => "أقبيل",
        "longitude" => "36.5045347",
        "latitude" => "4.2789395"
    ],
    [
        "id" => "490",
        "code_postal" => "15004",
        "city_name" => "Freha",
        "wilaya_id" => "15",
        "ar_name" => "فريحة",
        "longitude" => "36.7609641",
        "latitude" => "4.1820964"
    ],
    [
        "id" => "491",
        "code_postal" => "15005",
        "city_name" => "Souamaa",
        "wilaya_id" => "15",
        "ar_name" => "صوامع",
        "longitude" => "36.6699749",
        "latitude" => "4.2847082"
    ],
    [
        "id" => "492",
        "code_postal" => "15006",
        "city_name" => "Mechtrass",
        "wilaya_id" => "15",
        "ar_name" => "مشطراس",
        "longitude" => "36.5543756",
        "latitude" => "3.9810203"
    ],
    [
        "id" => "493",
        "code_postal" => "15007",
        "city_name" => "Irdjen",
        "wilaya_id" => "15",
        "ar_name" => "إرجن",
        "longitude" => "36.6675039",
        "latitude" => "4.1060517"
    ],
    [
        "id" => "494",
        "code_postal" => "15008",
        "city_name" => "Timizart",
        "wilaya_id" => "15",
        "ar_name" => "تيميزارت",
        "longitude" => "36.7971206",
        "latitude" => "4.1694482"
    ],
    [
        "id" => "495",
        "code_postal" => "15009",
        "city_name" => "Makouda",
        "wilaya_id" => "15",
        "ar_name" => "ماكودة",
        "longitude" => "36.7937385",
        "latitude" => "4.0162747"
    ],
    [
        "id" => "496",
        "code_postal" => "15010",
        "city_name" => "Draa El Mizan",
        "wilaya_id" => "15",
        "ar_name" => "ذراع الميزان",
        "longitude" => "36.5470073",
        "latitude" => "3.7377549"
    ],
    [
        "id" => "497",
        "code_postal" => "15011",
        "city_name" => "Tizi Ghenif",
        "wilaya_id" => "15",
        "ar_name" => "تيزي غنيف",
        "longitude" => "36.5902982",
        "latitude" => "3.7422175"
    ],
    [
        "id" => "498",
        "code_postal" => "15012",
        "city_name" => "Bounouh",
        "wilaya_id" => "15",
        "ar_name" => "بونوح",
        "longitude" => "36.4936137",
        "latitude" => "3.9005751"
    ],
    [
        "id" => "499",
        "code_postal" => "15013",
        "city_name" => "Ait Chaffaa",
        "wilaya_id" => "15",
        "ar_name" => "آيت شفعة",
        "longitude" => "36.8274474",
        "latitude" => "4.4618199"
    ],
    [
        "id" => "500",
        "code_postal" => "15014",
        "city_name" => "Frikat",
        "wilaya_id" => "15",
        "ar_name" => "فريقات",
        "longitude" => "36.4984125",
        "latitude" => "3.8441856"
    ],
    [
        "id" => "501",
        "code_postal" => "15015",
        "city_name" => "Beni Aissi",
        "wilaya_id" => "15",
        "ar_name" => "بني عيسي",
        "longitude" => "36.6547723",
        "latitude" => "4.0545452"
    ],
    [
        "id" => "502",
        "code_postal" => "15016",
        "city_name" => "Beni Zmenzer",
        "wilaya_id" => "15",
        "ar_name" => "أيت زمنزر",
        "longitude" => "36.6377976",
        "latitude" => "4.0034"
    ],
    [
        "id" => "503",
        "code_postal" => "15017",
        "city_name" => "Iferhounene",
        "wilaya_id" => "15",
        "ar_name" => "إيفرحونن",
        "longitude" => "36.5212265",
        "latitude" => "4.3082031"
    ],
    [
        "id" => "504",
        "code_postal" => "15018",
        "city_name" => "Azazga",
        "wilaya_id" => "15",
        "ar_name" => "عزازقة",
        "longitude" => "36.7422819",
        "latitude" => "4.3001578"
    ],
    [
        "id" => "505",
        "code_postal" => "15019",
        "city_name" => "Iloula Oumalou",
        "wilaya_id" => "15",
        "ar_name" => "إيلولة أمالو",
        "longitude" => "36.5648402",
        "latitude" => "4.3743839"
    ],
    [
        "id" => "506",
        "code_postal" => "15020",
        "city_name" => "Yakouren",
        "wilaya_id" => "15",
        "ar_name" => "اعكورن",
        "longitude" => "36.7370677",
        "latitude" => "4.3947111"
    ],
    [
        "id" => "507",
        "code_postal" => "15021",
        "city_name" => "Larba Nait Irathen",
        "wilaya_id" => "15",
        "ar_name" => "الأربعاء نايت إيراثن",
        "longitude" => "36.6369786",
        "latitude" => "4.1448706"
    ],
    [
        "id" => "508",
        "code_postal" => "15022",
        "city_name" => "Tizi Rached",
        "wilaya_id" => "15",
        "ar_name" => "تيزي راشد",
        "longitude" => "36.6869348",
        "latitude" => "4.1508398"
    ],
    [
        "id" => "509",
        "code_postal" => "15023",
        "city_name" => "Zekri",
        "wilaya_id" => "15",
        "ar_name" => "زكري",
        "longitude" => "36.7845712",
        "latitude" => "4.5092844"
    ],
    [
        "id" => "510",
        "code_postal" => "15024",
        "city_name" => "Ouaguenoun",
        "wilaya_id" => "15",
        "ar_name" => "واقنون",
        "longitude" => "36.75758",
        "latitude" => "4.1374033"
    ],
    [
        "id" => "511",
        "code_postal" => "15025",
        "city_name" => "Ain Zaouia",
        "wilaya_id" => "15",
        "ar_name" => "عين الزاوية",
        "longitude" => "36.576394",
        "latitude" => "3.8364146"
    ],
    [
        "id" => "512",
        "code_postal" => "15026",
        "city_name" => "Mkira",
        "wilaya_id" => "15",
        "ar_name" => "مكيرة",
        "longitude" => "36.6308053",
        "latitude" => "3.7426895"
    ],
    [
        "id" => "513",
        "code_postal" => "15027",
        "city_name" => "Ait Yahia",
        "wilaya_id" => "15",
        "ar_name" => "أيت يحي",
        "longitude" => "36.5983865",
        "latitude" => "4.2844951"
    ],
    [
        "id" => "514",
        "code_postal" => "15028",
        "city_name" => "Ait Mahmoud",
        "wilaya_id" => "15",
        "ar_name" => "أيت محمود",
        "longitude" => "36.6099011",
        "latitude" => "4.0829223"
    ],
    [
        "id" => "515",
        "code_postal" => "15029",
        "city_name" => "Maatka",
        "wilaya_id" => "15",
        "ar_name" => "المعاتقة",
        "longitude" => "36.6103742",
        "latitude" => "3.9321607"
    ],
    [
        "id" => "516",
        "code_postal" => "15030",
        "city_name" => "Ait Boumehdi",
        "wilaya_id" => "15",
        "ar_name" => "آيت بومھدى",
        "longitude" => "36.4881938",
        "latitude" => "4.1571444"
    ],
    [
        "id" => "517",
        "code_postal" => "15031",
        "city_name" => "Abi Youcef",
        "wilaya_id" => "15",
        "ar_name" => "أبي يوسف",
        "longitude" => "36.524679",
        "latitude" => "4.3011139"
    ],
    [
        "id" => "518",
        "code_postal" => "15032",
        "city_name" => "Beni Douala",
        "wilaya_id" => "15",
        "ar_name" => "بني دوالة",
        "longitude" => "36.6234865",
        "latitude" => "4.0457361"
    ],
    [
        "id" => "519",
        "code_postal" => "15033",
        "city_name" => "Illilten",
        "wilaya_id" => "15",
        "ar_name" => "إليلتن",
        "longitude" => "36.5107269",
        "latitude" => "4.3705193"
    ],
    [
        "id" => "520",
        "code_postal" => "15034",
        "city_name" => "Bouzguen",
        "wilaya_id" => "15",
        "ar_name" => "بوزقن",
        "longitude" => "36.6175618",
        "latitude" => "4.4228207"
    ],
    [
        "id" => "521",
        "code_postal" => "15035",
        "city_name" => "Ait Aggouacha",
        "wilaya_id" => "15",
        "ar_name" => "أيت أقواشة",
        "longitude" => "36.6198894",
        "latitude" => "4.2120707"
    ],
    [
        "id" => "522",
        "code_postal" => "15036",
        "city_name" => "Ouadhia",
        "wilaya_id" => "15",
        "ar_name" => "واضية",
        "longitude" => "36.5677265",
        "latitude" => "4.0785704"
    ],
    [
        "id" => "523",
        "code_postal" => "15037",
        "city_name" => "Azzefoun",
        "wilaya_id" => "15",
        "ar_name" => "أزفون",
        "longitude" => "36.8702256",
        "latitude" => "4.3178818"
    ],
    [
        "id" => "524",
        "code_postal" => "15038",
        "city_name" => "Tigzirt",
        "wilaya_id" => "15",
        "ar_name" => "تقزيرت",
        "longitude" => "36.8639518",
        "latitude" => "4.1020626"
    ],
    [
        "id" => "525",
        "code_postal" => "15039",
        "city_name" => "Ait Aissa Mimoun",
        "wilaya_id" => "15",
        "ar_name" => "آيت عيسى ميمون",
        "longitude" => "36.7514348",
        "latitude" => "4.0819593"
    ],
    [
        "id" => "526",
        "code_postal" => "15040",
        "city_name" => "Boghni",
        "wilaya_id" => "15",
        "ar_name" => "بوغني",
        "longitude" => "36.5145938",
        "latitude" => "3.9000151"
    ],
    [
        "id" => "527",
        "code_postal" => "15041",
        "city_name" => "Ifigha",
        "wilaya_id" => "15",
        "ar_name" => "ايفيغاء",
        "longitude" => "36.6655524",
        "latitude" => "4.3826971"
    ],
    [
        "id" => "528",
        "code_postal" => "15042",
        "city_name" => "Ait Oumalou",
        "wilaya_id" => "15",
        "ar_name" => "آيت أومالو",
        "longitude" => "36.6546349",
        "latitude" => "4.1929358"
    ],
    [
        "id" => "529",
        "code_postal" => "15043",
        "city_name" => "Tirmitine",
        "wilaya_id" => "15",
        "ar_name" => "ترمتين",
        "longitude" => "36.6686122",
        "latitude" => "3.9267051"
    ],
    [
        "id" => "530",
        "code_postal" => "15044",
        "city_name" => "Akerrou",
        "wilaya_id" => "15",
        "ar_name" => "أقرو",
        "longitude" => "36.8097183",
        "latitude" => "4.4087242"
    ],
    [
        "id" => "531",
        "code_postal" => "15045",
        "city_name" => "Yatafen",
        "wilaya_id" => "15",
        "ar_name" => "يطافن",
        "longitude" => "36.5076873",
        "latitude" => "4.2052774"
    ],
    [
        "id" => "532",
        "code_postal" => "15046",
        "city_name" => "Beni Ziki",
        "wilaya_id" => "15",
        "ar_name" => "بنى زيكى",
        "longitude" => "36.5577577",
        "latitude" => "4.4700776"
    ],
    [
        "id" => "533",
        "code_postal" => "15047",
        "city_name" => "Draa Ben Khedda",
        "wilaya_id" => "15",
        "ar_name" => "ذراع بن خدة",
        "longitude" => "36.7218395",
        "latitude" => "3.9216358"
    ],
    [
        "id" => "534",
        "code_postal" => "15048",
        "city_name" => "Ouacif",
        "wilaya_id" => "15",
        "ar_name" => "واسيف",
        "longitude" => "36.518106",
        "latitude" => "4.1780763"
    ],
    [
        "id" => "535",
        "code_postal" => "15049",
        "city_name" => "Idjeur",
        "wilaya_id" => "15",
        "ar_name" => "آجر",
        "longitude" => "36.6731533",
        "latitude" => "4.4981712"
    ],
    [
        "id" => "536",
        "code_postal" => "15050",
        "city_name" => "Mekla",
        "wilaya_id" => "15",
        "ar_name" => "مقلع",
        "longitude" => "36.6754811",
        "latitude" => "4.1969679"
    ],
    [
        "id" => "537",
        "code_postal" => "15051",
        "city_name" => "Tizi Nthlata",
        "wilaya_id" => "15",
        "ar_name" => "تيزي نثلاثة",
        "longitude" => "36.5614012",
        "latitude" => "4.0110525"
    ],
    [
        "id" => "538",
        "code_postal" => "15052",
        "city_name" => "Beni Yenni",
        "wilaya_id" => "15",
        "ar_name" => "بني يني",
        "longitude" => "36.5780655",
        "latitude" => "4.1617148"
    ],
    [
        "id" => "539",
        "code_postal" => "15053",
        "city_name" => "Aghrib",
        "wilaya_id" => "15",
        "ar_name" => "أغريب",
        "longitude" => "36.8198487",
        "latitude" => "4.2726598"
    ],
    [
        "id" => "540",
        "code_postal" => "15054",
        "city_name" => "Iflissen",
        "wilaya_id" => "15",
        "ar_name" => "إفليسن",
        "longitude" => "36.8728441",
        "latitude" => "4.1818421"
    ],
    [
        "id" => "541",
        "code_postal" => "15055",
        "city_name" => "Boudjima",
        "wilaya_id" => "15",
        "ar_name" => "بوجيمة",
        "longitude" => "36.8046355",
        "latitude" => "4.1193574"
    ],
    [
        "id" => "542",
        "code_postal" => "15056",
        "city_name" => "Ait Yahia Moussa",
        "wilaya_id" => "15",
        "ar_name" => "أيت يحي موسى",
        "longitude" => "36.6423405",
        "latitude" => "3.8041329"
    ],
    [
        "id" => "543",
        "code_postal" => "15057",
        "city_name" => "Souk El Thenine",
        "wilaya_id" => "15",
        "ar_name" => "سوق الإثنين",
        "longitude" => "36.6035414",
        "latitude" => "3.9314975"
    ],
    [
        "id" => "544",
        "code_postal" => "15058",
        "city_name" => "Ait Khelil",
        "wilaya_id" => "15",
        "ar_name" => "أيت خليلي",
        "longitude" => "36.6760946",
        "latitude" => "4.2387675"
    ],
    [
        "id" => "545",
        "code_postal" => "15059",
        "city_name" => "Sidi Naamane",
        "wilaya_id" => "15",
        "ar_name" => "سيدي نعمان",
        "longitude" => "36.7771939",
        "latitude" => "3.9208277"
    ],
    [
        "id" => "546",
        "code_postal" => "15060",
        "city_name" => "Iboudraren",
        "wilaya_id" => "15",
        "ar_name" => "أبودرارن",
        "longitude" => "36.5115392",
        "latitude" => "4.1786226"
    ],
    [
        "id" => "547",
        "code_postal" => "15061",
        "city_name" => "Agouni Gueghrane",
        "wilaya_id" => "15",
        "ar_name" => "آقنى قغران",
        "longitude" => "36.5042565",
        "latitude" => "4.0879622"
    ],
    [
        "id" => "548",
        "code_postal" => "15062",
        "city_name" => "Mizrana",
        "wilaya_id" => "15",
        "ar_name" => "مزرانة",
        "longitude" => "36.8631777",
        "latitude" => "4.0352004"
    ],
    [
        "id" => "549",
        "code_postal" => "15063",
        "city_name" => "Imsouhal",
        "wilaya_id" => "15",
        "ar_name" => "إمسوحال",
        "longitude" => "36.5781164",
        "latitude" => "4.3630843"
    ],
    [
        "id" => "550",
        "code_postal" => "15064",
        "city_name" => "Tadmait",
        "wilaya_id" => "15",
        "ar_name" => "تادمايت",
        "longitude" => "36.7209434",
        "latitude" => "3.8253437"
    ],
    [
        "id" => "551",
        "code_postal" => "15065",
        "city_name" => "Ait Bouadou",
        "wilaya_id" => "15",
        "ar_name" => "أيت بوعدو",
        "longitude" => "36.5074837",
        "latitude" => "4.0215722"
    ],
    [
        "id" => "552",
        "code_postal" => "15066",
        "city_name" => "Assi Youcef",
        "wilaya_id" => "15",
        "ar_name" => "أسي يوسف",
        "longitude" => "36.5028276",
        "latitude" => "3.9916789"
    ],
    [
        "id" => "553",
        "code_postal" => "15067",
        "city_name" => "Ait Toudert",
        "wilaya_id" => "15",
        "ar_name" => "أيت تودرت",
        "longitude" => "36.5308324",
        "latitude" => "4.1318418"
    ],
    [
        "id" => "554",
        "code_postal" => "16001",
        "city_name" => "Alger Centre",
        "wilaya_id" => "16",
        "ar_name" => "الجزائر الوسطى",
        "longitude" => "36.7681618",
        "latitude" => "3.0404258"
    ],
    [
        "id" => "555",
        "code_postal" => "16002",
        "city_name" => "Sidi Mhamed",
        "wilaya_id" => "16",
        "ar_name" => "سيدي امحمد",
        "longitude" => "36.759285",
        "latitude" => "3.0467857"
    ],
    [
        "id" => "556",
        "code_postal" => "16003",
        "city_name" => "El Madania",
        "wilaya_id" => "16",
        "ar_name" => "المدنية",
        "longitude" => "36.7422816",
        "latitude" => "3.0604942"
    ],
    [
        "id" => "557",
        "code_postal" => "16004",
        "city_name" => "Belouizdad",
        "wilaya_id" => "16",
        "ar_name" => "بلوزداد",
        "longitude" => "36.7504548",
        "latitude" => "3.0639145"
    ],
    [
        "id" => "558",
        "code_postal" => "16005",
        "city_name" => "Bab El Oued",
        "wilaya_id" => "16",
        "ar_name" => "باب الواد",
        "longitude" => "36.7917802",
        "latitude" => "3.0445432"
    ],
    [
        "id" => "559",
        "code_postal" => "16006",
        "city_name" => "Bologhine",
        "wilaya_id" => "16",
        "ar_name" => "بولوغين",
        "longitude" => "36.8039256",
        "latitude" => "3.0296193"
    ],
    [
        "id" => "560",
        "code_postal" => "16007",
        "city_name" => "Casbah",
        "wilaya_id" => "16",
        "ar_name" => "القصبة",
        "longitude" => "36.7847303",
        "latitude" => "3.0504945"
    ],
    [
        "id" => "561",
        "code_postal" => "16008",
        "city_name" => "Oued Koriche",
        "wilaya_id" => "16",
        "ar_name" => "وادي قريش",
        "longitude" => "36.7850295",
        "latitude" => "3.0243678"
    ],
    [
        "id" => "562",
        "code_postal" => "16009",
        "city_name" => "Bir Mourad Rais",
        "wilaya_id" => "16",
        "ar_name" => "بير مراد رايس",
        "longitude" => "36.730271",
        "latitude" => "3.0257462"
    ],
    [
        "id" => "563",
        "code_postal" => "16010",
        "city_name" => "El Biar",
        "wilaya_id" => "16",
        "ar_name" => "الآبيار",
        "longitude" => "36.7671977",
        "latitude" => "3.0119382"
    ],
    [
        "id" => "564",
        "code_postal" => "16011",
        "city_name" => "Bouzareah",
        "wilaya_id" => "16",
        "ar_name" => "بوزريعة",
        "longitude" => "36.7891132",
        "latitude" => "2.9938601"
    ],
    [
        "id" => "565",
        "code_postal" => "16012",
        "city_name" => "Birkhadem",
        "wilaya_id" => "16",
        "ar_name" => "بئر خادم",
        "longitude" => "36.7146375",
        "latitude" => "3.0311349"
    ],
    [
        "id" => "566",
        "code_postal" => "16013",
        "city_name" => "El Harrach",
        "wilaya_id" => "16",
        "ar_name" => "الحراش",
        "longitude" => "36.7120702",
        "latitude" => "3.1217531"
    ],
    [
        "id" => "567",
        "code_postal" => "16014",
        "city_name" => "Baraki",
        "wilaya_id" => "16",
        "ar_name" => "براقي",
        "longitude" => "36.6701186",
        "latitude" => "3.0635219"
    ],
    [
        "id" => "568",
        "code_postal" => "16015",
        "city_name" => "Oued Smar",
        "wilaya_id" => "16",
        "ar_name" => "وادي سمار",
        "longitude" => "36.7098628",
        "latitude" => "3.1596368"
    ],
    [
        "id" => "569",
        "code_postal" => "16016",
        "city_name" => "Bourouba",
        "wilaya_id" => "16",
        "ar_name" => "بوروبة",
        "longitude" => "36.7166963",
        "latitude" => "3.0955372"
    ],
    [
        "id" => "570",
        "code_postal" => "16017",
        "city_name" => "Hussein Dey",
        "wilaya_id" => "16",
        "ar_name" => "حسين داي",
        "longitude" => "36.7402922",
        "latitude" => "3.0914013"
    ],
    [
        "id" => "571",
        "code_postal" => "16018",
        "city_name" => "Kouba",
        "wilaya_id" => "16",
        "ar_name" => "القبة",
        "longitude" => "36.7241467",
        "latitude" => "3.0598317"
    ],
    [
        "id" => "572",
        "code_postal" => "16019",
        "city_name" => "Bachedjerah",
        "wilaya_id" => "16",
        "ar_name" => "باش جراح",
        "longitude" => "36.723121",
        "latitude" => "3.0940781"
    ],
    [
        "id" => "573",
        "code_postal" => "16020",
        "city_name" => "Dar El Beida",
        "wilaya_id" => "16",
        "ar_name" => "الدار البيضاء",
        "longitude" => "36.7024372",
        "latitude" => "3.1766575"
    ],
    [
        "id" => "574",
        "code_postal" => "16021",
        "city_name" => "Bab Azzouar",
        "wilaya_id" => "16",
        "ar_name" => "باب الزوار",
        "longitude" => "36.7228311",
        "latitude" => "3.1689279"
    ],
    [
        "id" => "575",
        "code_postal" => "16022",
        "city_name" => "Ben Aknoun",
        "wilaya_id" => "16",
        "ar_name" => "بن عكنون",
        "longitude" => "36.7571759",
        "latitude" => "2.9946244"
    ],
    [
        "id" => "576",
        "code_postal" => "16023",
        "city_name" => "Dely Ibrahim",
        "wilaya_id" => "16",
        "ar_name" => "دالي ابراهيم",
        "longitude" => "36.7567281",
        "latitude" => "2.962446"
    ],
    [
        "id" => "577",
        "code_postal" => "16024",
        "city_name" => "El Hammamet",
        "wilaya_id" => "16",
        "ar_name" => "الحمامات",
        "longitude" => "36.8024015",
        "latitude" => "2.9559659"
    ],
    [
        "id" => "578",
        "code_postal" => "16025",
        "city_name" => "Rais Hamidou",
        "wilaya_id" => "16",
        "ar_name" => "الرايس حميدو",
        "longitude" => "36.8077359",
        "latitude" => "2.9921434"
    ],
    [
        "id" => "579",
        "code_postal" => "16026",
        "city_name" => "Djasr Kasentina",
        "wilaya_id" => "16",
        "ar_name" => "جسر قسنطينة",
        "longitude" => "36.6927735",
        "latitude" => "3.0610977"
    ],
    [
        "id" => "580",
        "code_postal" => "16027",
        "city_name" => "El Mouradia",
        "wilaya_id" => "16",
        "ar_name" => "المرادية",
        "longitude" => "36.7490236",
        "latitude" => "3.0384439"
    ],
    [
        "id" => "581",
        "code_postal" => "16028",
        "city_name" => "Hydra",
        "wilaya_id" => "16",
        "ar_name" => "حيدرة",
        "longitude" => "36.7407683",
        "latitude" => "3.0079149"
    ],
    [
        "id" => "582",
        "code_postal" => "16029",
        "city_name" => "Mohammadia",
        "wilaya_id" => "16",
        "ar_name" => "المحمدية",
        "longitude" => "36.7353224",
        "latitude" => "3.1359743"
    ],
    [
        "id" => "583",
        "code_postal" => "16030",
        "city_name" => "Bordj El Kiffan",
        "wilaya_id" => "16",
        "ar_name" => "برج الكيفان",
        "longitude" => "36.7533604",
        "latitude" => "3.1868338"
    ],
    [
        "id" => "584",
        "code_postal" => "16031",
        "city_name" => "El Magharia",
        "wilaya_id" => "16",
        "ar_name" => "المقرية",
        "longitude" => "36.7305475",
        "latitude" => "3.1026854"
    ],
    [
        "id" => "585",
        "code_postal" => "16032",
        "city_name" => "Beni Messous",
        "wilaya_id" => "16",
        "ar_name" => "بني مسوس",
        "longitude" => "36.7844574",
        "latitude" => "2.9591524"
    ],
    [
        "id" => "586",
        "code_postal" => "16033",
        "city_name" => "Les Eucalyptus",
        "wilaya_id" => "16",
        "ar_name" => "الكليتوس",
        "longitude" => "36.668168",
        "latitude" => "3.1306093"
    ],
    [
        "id" => "587",
        "code_postal" => "16034",
        "city_name" => "Birtouta",
        "wilaya_id" => "16",
        "ar_name" => "بئر توتة",
        "longitude" => "36.6424589",
        "latitude" => "2.9745906"
    ],
    [
        "id" => "588",
        "code_postal" => "16035",
        "city_name" => "Tassala El Merdja",
        "wilaya_id" => "16",
        "ar_name" => "تسالة المرجة",
        "longitude" => "36.6277781",
        "latitude" => "2.8848547"
    ],
    [
        "id" => "589",
        "code_postal" => "16036",
        "city_name" => "Ouled Chebel",
        "wilaya_id" => "16",
        "ar_name" => "أولاد الشبل",
        "longitude" => "36.6082831",
        "latitude" => "2.9737753"
    ],
    [
        "id" => "590",
        "code_postal" => "16037",
        "city_name" => "Sidi Moussa",
        "wilaya_id" => "16",
        "ar_name" => "سيدي موسى",
        "longitude" => "36.6162931",
        "latitude" => "3.0682748"
    ],
    [
        "id" => "591",
        "code_postal" => "16038",
        "city_name" => "Ain Taya",
        "wilaya_id" => "16",
        "ar_name" => "عين طاية",
        "longitude" => "36.7880614",
        "latitude" => "3.2742797"
    ],
    [
        "id" => "592",
        "code_postal" => "16039",
        "city_name" => "Bordj El Bahri",
        "wilaya_id" => "16",
        "ar_name" => "برج البحري",
        "longitude" => "36.7880016",
        "latitude" => "3.2321689"
    ],
    [
        "id" => "593",
        "code_postal" => "16040",
        "city_name" => "Marsa",
        "wilaya_id" => "16",
        "ar_name" => "المرسى",
        "longitude" => "36.8081013",
        "latitude" => "3.2263432"
    ],
    [
        "id" => "594",
        "code_postal" => "16041",
        "city_name" => "Haraoua",
        "wilaya_id" => "16",
        "ar_name" => "هراوة",
        "longitude" => "36.7726194",
        "latitude" => "3.3006834"
    ],
    [
        "id" => "595",
        "code_postal" => "16042",
        "city_name" => "Rouiba",
        "wilaya_id" => "16",
        "ar_name" => "رويبة",
        "longitude" => "36.7375877",
        "latitude" => "3.2491683"
    ],
    [
        "id" => "596",
        "code_postal" => "16043",
        "city_name" => "Reghaia",
        "wilaya_id" => "16",
        "ar_name" => "الرغاية",
        "longitude" => "36.7538466",
        "latitude" => "3.312152"
    ],
    [
        "id" => "597",
        "code_postal" => "16044",
        "city_name" => "Ain Benian",
        "wilaya_id" => "16",
        "ar_name" => "عين بنيان",
        "longitude" => "36.7941279",
        "latitude" => "2.9099606"
    ],
    [
        "id" => "598",
        "code_postal" => "16045",
        "city_name" => "Staoueli",
        "wilaya_id" => "16",
        "ar_name" => "سطاوالي",
        "longitude" => "36.7426531",
        "latitude" => "2.8372776"
    ],
    [
        "id" => "599",
        "code_postal" => "16046",
        "city_name" => "Zeralda",
        "wilaya_id" => "16",
        "ar_name" => "زرالدة",
        "longitude" => "36.6995503",
        "latitude" => "2.8049892"
    ],
    [
        "id" => "600",
        "code_postal" => "16047",
        "city_name" => "Mahelma",
        "wilaya_id" => "16",
        "ar_name" => "محالمة",
        "longitude" => "36.6721514",
        "latitude" => "2.8158789"
    ],
    [
        "id" => "601",
        "code_postal" => "16048",
        "city_name" => "Rahmania",
        "wilaya_id" => "16",
        "ar_name" => "رحمانية",
        "longitude" => "36.6805606",
        "latitude" => "2.8805201"
    ],
    [
        "id" => "602",
        "code_postal" => "16049",
        "city_name" => "Souidania",
        "wilaya_id" => "16",
        "ar_name" => "سويدانية",
        "longitude" => "36.7112067",
        "latitude" => "2.8684395"
    ],
    [
        "id" => "603",
        "code_postal" => "16050",
        "city_name" => "Cheraga",
        "wilaya_id" => "16",
        "ar_name" => "شراقة",
        "longitude" => "36.7596098",
        "latitude" => "2.8933198"
    ],
    [
        "id" => "604",
        "code_postal" => "16051",
        "city_name" => "Ouled Fayet",
        "wilaya_id" => "16",
        "ar_name" => "أولاد فايت",
        "longitude" => "36.725135",
        "latitude" => "2.9078787"
    ],
    [
        "id" => "605",
        "code_postal" => "16052",
        "city_name" => "El Achour",
        "wilaya_id" => "16",
        "ar_name" => "العاشور",
        "longitude" => "36.7269712",
        "latitude" => "2.9530471"
    ],
    [
        "id" => "606",
        "code_postal" => "16053",
        "city_name" => "Draria",
        "wilaya_id" => "16",
        "ar_name" => "درارية",
        "longitude" => "36.7132847",
        "latitude" => "2.9677778"
    ],
    [
        "id" => "607",
        "code_postal" => "16054",
        "city_name" => "Douera",
        "wilaya_id" => "16",
        "ar_name" => "دويرة",
        "longitude" => "36.6681547",
        "latitude" => "2.8979868"
    ],
    [
        "id" => "608",
        "code_postal" => "16055",
        "city_name" => "Baba Hassen",
        "wilaya_id" => "16",
        "ar_name" => "بابا حسن",
        "longitude" => "36.6959627",
        "latitude" => "2.9591094"
    ],
    [
        "id" => "609",
        "code_postal" => "16056",
        "city_name" => "Khracia",
        "wilaya_id" => "16",
        "ar_name" => "خرايسية",
        "longitude" => "36.6691421",
        "latitude" => "2.9639691"
    ],
    [
        "id" => "610",
        "code_postal" => "16057",
        "city_name" => "Saoula",
        "wilaya_id" => "16",
        "ar_name" => "السحاولة",
        "longitude" => "36.6866758",
        "latitude" => "3.0056614"
    ],
    [
        "id" => "611",
        "code_postal" => "17001",
        "city_name" => "Djelfa",
        "wilaya_id" => "17",
        "ar_name" => "الجلفة",
        "longitude" => "34.6741226",
        "latitude" => "3.2504381"
    ],
    [
        "id" => "612",
        "code_postal" => "17002",
        "city_name" => "Moudjebara",
        "wilaya_id" => "17",
        "ar_name" => "مجبرة",
        "longitude" => "34.5040006",
        "latitude" => "3.4597278"
    ],
    [
        "id" => "613",
        "code_postal" => "17003",
        "city_name" => "El Guedid",
        "wilaya_id" => "17",
        "ar_name" => "القديد",
        "longitude" => "34.646898",
        "latitude" => "2.6057338"
    ],
    [
        "id" => "614",
        "code_postal" => "17004",
        "city_name" => "Hassi Bahbah",
        "wilaya_id" => "17",
        "ar_name" => "حاسي بحبح",
        "longitude" => "35.0764297",
        "latitude" => "2.9959141"
    ],
    [
        "id" => "615",
        "code_postal" => "17005",
        "city_name" => "Ain Maabed",
        "wilaya_id" => "17",
        "ar_name" => "عين معبد",
        "longitude" => "34.8059782",
        "latitude" => "3.1152247"
    ],
    [
        "id" => "616",
        "code_postal" => "17006",
        "city_name" => "Sed Rahal",
        "wilaya_id" => "17",
        "ar_name" => "سد رحال",
        "longitude" => "33.9518497",
        "latitude" => "3.2188654"
    ],
    [
        "id" => "617",
        "code_postal" => "17007",
        "city_name" => "Feidh El Botma",
        "wilaya_id" => "17",
        "ar_name" => "فيض البطمة",
        "longitude" => "34.5303577",
        "latitude" => "3.7719368"
    ],
    [
        "id" => "618",
        "code_postal" => "17008",
        "city_name" => "Birine",
        "wilaya_id" => "17",
        "ar_name" => "البيرين",
        "longitude" => "35.6315904",
        "latitude" => "3.2060765"
    ],
    [
        "id" => "619",
        "code_postal" => "17009",
        "city_name" => "Bouira Lahdeb",
        "wilaya_id" => "17",
        "ar_name" => "بويرة الأحداب",
        "longitude" => "35.2444181",
        "latitude" => "3.1338179"
    ],
    [
        "id" => "620",
        "code_postal" => "17010",
        "city_name" => "Zaccar",
        "wilaya_id" => "17",
        "ar_name" => "زكار",
        "longitude" => "34.4305669",
        "latitude" => "3.3213472"
    ],
    [
        "id" => "621",
        "code_postal" => "17011",
        "city_name" => "El Khemis",
        "wilaya_id" => "17",
        "ar_name" => "الخميس",
        "longitude" => "35.2876616",
        "latitude" => "2.5915396"
    ],
    [
        "id" => "622",
        "code_postal" => "17012",
        "city_name" => "Sidi Baizid",
        "wilaya_id" => "17",
        "ar_name" => "سيدي بايزيد",
        "longitude" => "35.0582537",
        "latitude" => "3.425889"
    ],
    [
        "id" => "623",
        "code_postal" => "17013",
        "city_name" => "M'Liliha",
        "wilaya_id" => "17",
        "ar_name" => "المليليحة",
        "longitude" => "34.7546461",
        "latitude" => "3.4761"
    ],
    [
        "id" => "624",
        "code_postal" => "17014",
        "city_name" => "El Idrissia",
        "wilaya_id" => "17",
        "ar_name" => "الإدريسية",
        "longitude" => "34.4515826",
        "latitude" => "2.5095583"
    ],
    [
        "id" => "625",
        "code_postal" => "17015",
        "city_name" => "Douis",
        "wilaya_id" => "17",
        "ar_name" => "الدويس",
        "longitude" => "34.3739232",
        "latitude" => "2.6978792"
    ],
    [
        "id" => "626",
        "code_postal" => "17016",
        "city_name" => "Hassi El Euch",
        "wilaya_id" => "17",
        "ar_name" => "حاسي العش",
        "longitude" => "35.1540377",
        "latitude" => "3.2426298"
    ],
    [
        "id" => "627",
        "code_postal" => "17017",
        "city_name" => "Messaad",
        "wilaya_id" => "17",
        "ar_name" => "مسعد",
        "longitude" => "34.1658932",
        "latitude" => "3.4682458"
    ],
    [
        "id" => "628",
        "code_postal" => "17018",
        "city_name" => "Guettara",
        "wilaya_id" => "17",
        "ar_name" => "قتارة",
        "longitude" => "33.1614178",
        "latitude" => "4.6788776"
    ],
    [
        "id" => "629",
        "code_postal" => "17019",
        "city_name" => "Sidi Ladjel",
        "wilaya_id" => "17",
        "ar_name" => "سيدي لعجال",
        "longitude" => "35.4433626",
        "latitude" => "2.4941109"
    ],
    [
        "id" => "630",
        "code_postal" => "17020",
        "city_name" => "Had Sahary",
        "wilaya_id" => "17",
        "ar_name" => "حد الصحاري",
        "longitude" => "35.3538344",
        "latitude" => "3.3463044"
    ],
    [
        "id" => "631",
        "code_postal" => "17021",
        "city_name" => "Guernini",
        "wilaya_id" => "17",
        "ar_name" => "القرنيني",
        "longitude" => "35.2001485",
        "latitude" => "2.6780462"
    ],
    [
        "id" => "632",
        "code_postal" => "17022",
        "city_name" => "Selmana",
        "wilaya_id" => "17",
        "ar_name" => "سلمانة",
        "longitude" => "34.1762848",
        "latitude" => "3.5904298"
    ],
    [
        "id" => "633",
        "code_postal" => "17023",
        "city_name" => "Ain Chouhada",
        "wilaya_id" => "17",
        "ar_name" => "عين الشهداء",
        "longitude" => "34.2421928",
        "latitude" => "2.510569"
    ],
    [
        "id" => "634",
        "code_postal" => "17024",
        "city_name" => "Oum Laadham",
        "wilaya_id" => "17",
        "ar_name" => "ام العظام",
        "longitude" => "33.7195744",
        "latitude" => "4.5251226"
    ],
    [
        "id" => "635",
        "code_postal" => "17025",
        "city_name" => "Dar Chouikh",
        "wilaya_id" => "17",
        "ar_name" => "دار الشيوخ",
        "longitude" => "34.8946674",
        "latitude" => "3.4691904"
    ],
    [
        "id" => "636",
        "code_postal" => "17026",
        "city_name" => "Charef",
        "wilaya_id" => "17",
        "ar_name" => "الشارف",
        "longitude" => "34.619593",
        "latitude" => "2.792244"
    ],
    [
        "id" => "637",
        "code_postal" => "17027",
        "city_name" => "Beni Yacoub",
        "wilaya_id" => "17",
        "ar_name" => "بن يعقوب",
        "longitude" => "34.4666662",
        "latitude" => "2.7745782"
    ],
    [
        "id" => "638",
        "code_postal" => "17028",
        "city_name" => "Zaafrane",
        "wilaya_id" => "17",
        "ar_name" => "الزعفران",
        "longitude" => "34.8540509",
        "latitude" => "2.8442416"
    ],
    [
        "id" => "639",
        "code_postal" => "17029",
        "city_name" => "Deldoul",
        "wilaya_id" => "17",
        "ar_name" => "دلدول",
        "longitude" => "34.6672467",
        "latitude" => "3.2993118"
    ],
    [
        "id" => "640",
        "code_postal" => "17030",
        "city_name" => "Ain El Ibel",
        "wilaya_id" => "17",
        "ar_name" => "عين الابل",
        "longitude" => "34.3539985",
        "latitude" => "3.2157325"
    ],
    [
        "id" => "641",
        "code_postal" => "17031",
        "city_name" => "Ain Oussera",
        "wilaya_id" => "17",
        "ar_name" => "عين وسارة",
        "longitude" => "35.4466401",
        "latitude" => "2.8711647"
    ],
    [
        "id" => "642",
        "code_postal" => "17032",
        "city_name" => "Benhar",
        "wilaya_id" => "17",
        "ar_name" => "بنهار",
        "longitude" => "35.4848362",
        "latitude" => "3.0055036"
    ],
    [
        "id" => "643",
        "code_postal" => "17033",
        "city_name" => "Hassi Fedoul",
        "wilaya_id" => "17",
        "ar_name" => "حاسي فدول",
        "longitude" => "35.4392023",
        "latitude" => "2.1992396"
    ],
    [
        "id" => "644",
        "code_postal" => "17034",
        "city_name" => "Amourah",
        "wilaya_id" => "17",
        "ar_name" => "عمورة",
        "longitude" => "34.3553852",
        "latitude" => "3.8660287"
    ],
    [
        "id" => "645",
        "code_postal" => "17035",
        "city_name" => "Ain Fekka",
        "wilaya_id" => "17",
        "ar_name" => "عين افقة",
        "longitude" => "35.429667",
        "latitude" => "3.4118023"
    ],
    [
        "id" => "646",
        "code_postal" => "17036",
        "city_name" => "Tadmit",
        "wilaya_id" => "17",
        "ar_name" => "تعضميت",
        "longitude" => "34.2833322",
        "latitude" => "2.9745782"
    ],
    [
        "id" => "647",
        "code_postal" => "18001",
        "city_name" => "Jijel",
        "wilaya_id" => "18",
        "ar_name" => "جيجل",
        "longitude" => "36.7962663",
        "latitude" => "5.715465"
    ],
    [
        "id" => "648",
        "code_postal" => "18002",
        "city_name" => "Erraguene",
        "wilaya_id" => "18",
        "ar_name" => "إراڨن",
        "longitude" => "36.7962714",
        "latitude" => "5.7504845"
    ],
    [
        "id" => "649",
        "code_postal" => "18003",
        "city_name" => "El Aouana",
        "wilaya_id" => "18",
        "ar_name" => "العوانة",
        "longitude" => "36.7383739",
        "latitude" => "5.5575774"
    ],
    [
        "id" => "650",
        "code_postal" => "18004",
        "city_name" => "Ziamma Mansouriah",
        "wilaya_id" => "18",
        "ar_name" => "زيامة منصورية",
        "longitude" => "36.6501629",
        "latitude" => "5.4284118"
    ],
    [
        "id" => "651",
        "code_postal" => "18005",
        "city_name" => "Taher",
        "wilaya_id" => "18",
        "ar_name" => "الطاهير",
        "longitude" => "36.7775912",
        "latitude" => "5.8348749"
    ],
    [
        "id" => "652",
        "code_postal" => "18006",
        "city_name" => "Emir Abdelkader",
        "wilaya_id" => "18",
        "ar_name" => "الامير عبد القادر",
        "longitude" => "36.7557894",
        "latitude" => "5.778586"
    ],
    [
        "id" => "653",
        "code_postal" => "18007",
        "city_name" => "Chekfa",
        "wilaya_id" => "18",
        "ar_name" => "الشقفة",
        "longitude" => "36.7728541",
        "latitude" => "5.9468436"
    ],
    [
        "id" => "654",
        "code_postal" => "18008",
        "city_name" => "Chahna",
        "wilaya_id" => "18",
        "ar_name" => "الشحنة",
        "longitude" => "36.6772642",
        "latitude" => "5.9446441"
    ],
    [
        "id" => "655",
        "code_postal" => "18009",
        "city_name" => "El Milia",
        "wilaya_id" => "18",
        "ar_name" => "الميلية",
        "longitude" => "36.7469209",
        "latitude" => "6.2451046"
    ],
    [
        "id" => "656",
        "code_postal" => "18010",
        "city_name" => "Sidi Maarouf",
        "wilaya_id" => "18",
        "ar_name" => "سيدي معروف",
        "longitude" => "36.6373452",
        "latitude" => "6.2617134"
    ],
    [
        "id" => "657",
        "code_postal" => "18011",
        "city_name" => "Settara",
        "wilaya_id" => "18",
        "ar_name" => "السطارة",
        "longitude" => "36.7183649",
        "latitude" => "6.324544"
    ],
    [
        "id" => "658",
        "code_postal" => "18012",
        "city_name" => "El Ancer",
        "wilaya_id" => "18",
        "ar_name" => "العنصر",
        "longitude" => "36.7982581",
        "latitude" => "6.1523866"
    ],
    [
        "id" => "659",
        "code_postal" => "18013",
        "city_name" => "Sidi Abdelaziz",
        "wilaya_id" => "18",
        "ar_name" => "سيدي عبد العزيز",
        "longitude" => "36.8535179",
        "latitude" => "6.0439396"
    ],
    [
        "id" => "660",
        "code_postal" => "18014",
        "city_name" => "Kaous",
        "wilaya_id" => "18",
        "ar_name" => "قاوس",
        "longitude" => "36.7590016",
        "latitude" => "5.7313651"
    ],
    [
        "id" => "661",
        "code_postal" => "18015",
        "city_name" => "Ghebala",
        "wilaya_id" => "18",
        "ar_name" => "غبالة",
        "longitude" => "36.6290636",
        "latitude" => "6.3831317"
    ],
    [
        "id" => "662",
        "code_postal" => "18016",
        "city_name" => "Bouraoui Belhadef",
        "wilaya_id" => "18",
        "ar_name" => "بوراوي بلهادف",
        "longitude" => "36.6979904",
        "latitude" => "6.0968648"
    ],
    [
        "id" => "663",
        "code_postal" => "18017",
        "city_name" => "Djmila",
        "wilaya_id" => "18",
        "ar_name" => "جيملة",
        "longitude" => "36.5827122",
        "latitude" => "5.8287487"
    ],
    [
        "id" => "664",
        "code_postal" => "18018",
        "city_name" => "Selma Benziada",
        "wilaya_id" => "18",
        "ar_name" => "سلمى بن زيادة",
        "longitude" => "36.6505425",
        "latitude" => "5.5628345"
    ],
    [
        "id" => "665",
        "code_postal" => "18019",
        "city_name" => "Boussif Ouled Askeur",
        "wilaya_id" => "18",
        "ar_name" => "أولاد عسكر",
        "longitude" => "36.6455063",
        "latitude" => "6.0109806"
    ],
    [
        "id" => "666",
        "code_postal" => "18020",
        "city_name" => "El Kennar Nouchfi",
        "wilaya_id" => "18",
        "ar_name" => "القنار",
        "longitude" => "36.8243495",
        "latitude" => "5.9558128"
    ],
    [
        "id" => "667",
        "code_postal" => "18021",
        "city_name" => "Ouled Yahia Khadrouch",
        "wilaya_id" => "18",
        "ar_name" => "اولاد يحيى",
        "longitude" => "36.7223204",
        "latitude" => "6.1822341"
    ],
    [
        "id" => "668",
        "code_postal" => "18022",
        "city_name" => "Boudria Beni Yadjis",
        "wilaya_id" => "18",
        "ar_name" => "بودريعة بن ياجيس",
        "longitude" => "36.5902781",
        "latitude" => "5.6954215"
    ],
    [
        "id" => "669",
        "code_postal" => "18023",
        "city_name" => "Kemir Oued Adjoul",
        "wilaya_id" => "18",
        "ar_name" => "بني بلعيد",
        "longitude" => "36.8774044",
        "latitude" => "6.1179255"
    ],
    [
        "id" => "670",
        "code_postal" => "18024",
        "city_name" => "Texena",
        "wilaya_id" => "18",
        "ar_name" => "تاكسنة",
        "longitude" => "36.6702895",
        "latitude" => "5.6987689"
    ],
    [
        "id" => "671",
        "code_postal" => "18025",
        "city_name" => "Djemaa Beni Habibi",
        "wilaya_id" => "18",
        "ar_name" => "الجمعة بني حبيبي",
        "longitude" => "36.809857",
        "latitude" => "6.1050402"
    ],
    [
        "id" => "672",
        "code_postal" => "18026",
        "city_name" => "Bordj T'her",
        "wilaya_id" => "18",
        "ar_name" => "برج الطهر",
        "longitude" => "36.7484784",
        "latitude" => "6.0248638"
    ],
    [
        "id" => "673",
        "code_postal" => "18027",
        "city_name" => "Ouled Rabah",
        "wilaya_id" => "18",
        "ar_name" => "ولاد رابح",
        "longitude" => "36.5974059",
        "latitude" => "6.1619139"
    ],
    [
        "id" => "674",
        "code_postal" => "18028",
        "city_name" => "Ouadjana",
        "wilaya_id" => "18",
        "ar_name" => "وجانة",
        "longitude" => "36.675",
        "latitude" => "5.8128487"
    ],
    [
        "id" => "675",
        "code_postal" => "19001",
        "city_name" => "Setif",
        "wilaya_id" => "19",
        "ar_name" => "سطيف‎",
        "longitude" => "36.1904969",
        "latitude" => "5.350173"
    ],
    [
        "id" => "676",
        "code_postal" => "19002",
        "city_name" => "Ain El Kebira",
        "wilaya_id" => "19",
        "ar_name" => "عين الكبيرة",
        "longitude" => "36.3773932",
        "latitude" => "5.4503964"
    ],
    [
        "id" => "677",
        "code_postal" => "19003",
        "city_name" => "Beni Aziz",
        "wilaya_id" => "19",
        "ar_name" => "بني عزيز",
        "longitude" => "36.4732335",
        "latitude" => "5.5735848"
    ],
    [
        "id" => "678",
        "code_postal" => "19004",
        "city_name" => "Ouled Sidi Ahmed",
        "wilaya_id" => "19",
        "ar_name" => "أولاد سي أحمد",
        "longitude" => "35.907478",
        "latitude" => "5.1083824"
    ],
    [
        "id" => "679",
        "code_postal" => "19005",
        "city_name" => "Boutaleb",
        "wilaya_id" => "19",
        "ar_name" => "بوطالب",
        "longitude" => "35.6858444",
        "latitude" => "5.1806519"
    ],
    [
        "id" => "680",
        "code_postal" => "19006",
        "city_name" => "Ain Roua",
        "wilaya_id" => "19",
        "ar_name" => "عين الروى",
        "longitude" => "36.3210122",
        "latitude" => "5.1291535"
    ],
    [
        "id" => "681",
        "code_postal" => "19007",
        "city_name" => "Draa Kebila",
        "wilaya_id" => "19",
        "ar_name" => "ذراع قبيلة",
        "longitude" => "36.4219572",
        "latitude" => "4.9356912"
    ],
    [
        "id" => "682",
        "code_postal" => "19008",
        "city_name" => "Bir El Arch",
        "wilaya_id" => "19",
        "ar_name" => "بئر العرش",
        "longitude" => "36.1012237",
        "latitude" => "5.7440447"
    ],
    [
        "id" => "683",
        "code_postal" => "19009",
        "city_name" => "Beni Chebana",
        "wilaya_id" => "19",
        "ar_name" => "بني شبانة",
        "longitude" => "36.4681034",
        "latitude" => "4.8420284"
    ],
    [
        "id" => "684",
        "code_postal" => "19010",
        "city_name" => "Ouled Tebben",
        "wilaya_id" => "19",
        "ar_name" => "أولاد تبــان",
        "longitude" => "35.787273",
        "latitude" => "5.0449536"
    ],
    [
        "id" => "685",
        "code_postal" => "19011",
        "city_name" => "Hamma",
        "wilaya_id" => "19",
        "ar_name" => "حــامة",
        "longitude" => "35.6877227",
        "latitude" => "5.31252"
    ],
    [
        "id" => "686",
        "code_postal" => "19012",
        "city_name" => "Maaouia",
        "wilaya_id" => "19",
        "ar_name" => "معـاويـة",
        "longitude" => "36.3748054",
        "latitude" => "5.6401895"
    ],
    [
        "id" => "687",
        "code_postal" => "19013",
        "city_name" => "Ain Legraj",
        "wilaya_id" => "19",
        "ar_name" => "عين لڨراج",
        "longitude" => "36.4102318",
        "latitude" => "4.7998641"
    ],
    [
        "id" => "688",
        "code_postal" => "19014",
        "city_name" => "Ain Abessa",
        "wilaya_id" => "19",
        "ar_name" => "عين عباسـة",
        "longitude" => "36.3045155",
        "latitude" => "5.1522342"
    ],
    [
        "id" => "689",
        "code_postal" => "19015",
        "city_name" => "Dehamcha",
        "wilaya_id" => "19",
        "ar_name" => "الدهامشة",
        "longitude" => "36.3786819",
        "latitude" => "5.5425141"
    ],
    [
        "id" => "690",
        "code_postal" => "19016",
        "city_name" => "Babor",
        "wilaya_id" => "19",
        "ar_name" => "بابور",
        "longitude" => "36.5019013",
        "latitude" => "5.3674976"
    ],
    [
        "id" => "691",
        "code_postal" => "19017",
        "city_name" => "Guidjel",
        "wilaya_id" => "19",
        "ar_name" => "قجــال",
        "longitude" => "36.0807516",
        "latitude" => "5.4235957"
    ],
    [
        "id" => "692",
        "code_postal" => "19018",
        "city_name" => "Ain Lahdjar",
        "wilaya_id" => "19",
        "ar_name" => "عين لحجـر",
        "longitude" => "35.960213",
        "latitude" => "5.4198543"
    ],
    [
        "id" => "693",
        "code_postal" => "19019",
        "city_name" => "Bousselam",
        "wilaya_id" => "19",
        "ar_name" => "بوسلام",
        "longitude" => "36.4937736",
        "latitude" => "4.9369786"
    ],
    [
        "id" => "694",
        "code_postal" => "19020",
        "city_name" => "El Eulma",
        "wilaya_id" => "19",
        "ar_name" => "العلمة",
        "longitude" => "36.1657394",
        "latitude" => "5.620148"
    ],
    [
        "id" => "695",
        "code_postal" => "19021",
        "city_name" => "Djemila",
        "wilaya_id" => "19",
        "ar_name" => "جميلـة",
        "longitude" => "36.3469977",
        "latitude" => "5.6877397"
    ],
    [
        "id" => "696",
        "code_postal" => "19022",
        "city_name" => "Beni Ouartilane",
        "wilaya_id" => "19",
        "ar_name" => "بني ورتيلان",
        "longitude" => "36.4307623",
        "latitude" => "4.7427652"
    ],
    [
        "id" => "697",
        "code_postal" => "19023",
        "city_name" => "Rosfa",
        "wilaya_id" => "19",
        "ar_name" => "الرصفة",
        "longitude" => "35.7790515",
        "latitude" => "5.182669"
    ],
    [
        "id" => "698",
        "code_postal" => "19024",
        "city_name" => "Ouled Addouane",
        "wilaya_id" => "19",
        "ar_name" => "أولاد عدوان",
        "longitude" => "36.3363273",
        "latitude" => "5.4260439"
    ],
    [
        "id" => "699",
        "code_postal" => "19025",
        "city_name" => "Belaa",
        "wilaya_id" => "19",
        "ar_name" => "البلاعة",
        "longitude" => "36.2217494",
        "latitude" => "5.7975172"
    ],
    [
        "id" => "700",
        "code_postal" => "19026",
        "city_name" => "Ain Arnat",
        "wilaya_id" => "19",
        "ar_name" => "عين أرنـات",
        "longitude" => "36.1756548",
        "latitude" => "5.173013"
    ],
    [
        "id" => "701",
        "code_postal" => "19027",
        "city_name" => "Amoucha",
        "wilaya_id" => "19",
        "ar_name" => "عموشة",
        "longitude" => "36.3748316",
        "latitude" => "5.3447173"
    ],
    [
        "id" => "702",
        "code_postal" => "19028",
        "city_name" => "Ain Oulmane",
        "wilaya_id" => "19",
        "ar_name" => "عين ولمان",
        "longitude" => "35.9239262",
        "latitude" => "5.2415487"
    ],
    [
        "id" => "703",
        "code_postal" => "19029",
        "city_name" => "Beidha Bordj",
        "wilaya_id" => "19",
        "ar_name" => "بيضاء برج",
        "longitude" => "35.8379281",
        "latitude" => "5.5996773"
    ],
    [
        "id" => "704",
        "code_postal" => "19030",
        "city_name" => "Bouandas",
        "wilaya_id" => "19",
        "ar_name" => "بوعنداس",
        "longitude" => "36.5042094",
        "latitude" => "5.0698679"
    ],
    [
        "id" => "705",
        "code_postal" => "19031",
        "city_name" => "Bazer Sakhra",
        "wilaya_id" => "19",
        "ar_name" => "بازر الصخرة",
        "longitude" => "36.0795448",
        "latitude" => "5.6140969"
    ],
    [
        "id" => "706",
        "code_postal" => "19032",
        "city_name" => "Hammam Essokhna",
        "wilaya_id" => "19",
        "ar_name" => "حمــام السخنة",
        "longitude" => "35.9499435",
        "latitude" => "5.6908217"
    ],
    [
        "id" => "707",
        "code_postal" => "19033",
        "city_name" => "Mezloug",
        "wilaya_id" => "19",
        "ar_name" => "مزلوق",
        "longitude" => "36.1050372",
        "latitude" => "5.2373002"
    ],
    [
        "id" => "708",
        "code_postal" => "19034",
        "city_name" => "Bir Haddada",
        "wilaya_id" => "19",
        "ar_name" => "بئر حدادة",
        "longitude" => "35.9625421",
        "latitude" => "5.3953788"
    ],
    [
        "id" => "709",
        "code_postal" => "19035",
        "city_name" => "Serdj El Ghoul",
        "wilaya_id" => "19",
        "ar_name" => "سرج الغول",
        "longitude" => "36.475214",
        "latitude" => "5.5168507"
    ],
    [
        "id" => "710",
        "code_postal" => "19036",
        "city_name" => "Harbil",
        "wilaya_id" => "19",
        "ar_name" => "حربيل",
        "longitude" => "36.3471017",
        "latitude" => "4.8497854"
    ],
    [
        "id" => "711",
        "code_postal" => "19037",
        "city_name" => "El Ouricia",
        "wilaya_id" => "19",
        "ar_name" => "الأورسية",
        "longitude" => "36.2706726",
        "latitude" => "5.3148483"
    ],
    [
        "id" => "712",
        "code_postal" => "19038",
        "city_name" => "Tizi Nbechar",
        "wilaya_id" => "19",
        "ar_name" => "تيزي نبشار",
        "longitude" => "36.4317298",
        "latitude" => "5.2875111"
    ],
    [
        "id" => "713",
        "code_postal" => "19039",
        "city_name" => "Salah Bey",
        "wilaya_id" => "19",
        "ar_name" => "صـالح باي",
        "longitude" => "35.8237361",
        "latitude" => "5.2648518"
    ],
    [
        "id" => "714",
        "code_postal" => "19040",
        "city_name" => "Ain Azal",
        "wilaya_id" => "19",
        "ar_name" => "عين أزال",
        "longitude" => "35.8195556",
        "latitude" => "5.4648373"
    ],
    [
        "id" => "715",
        "code_postal" => "19041",
        "city_name" => "Guenzet",
        "wilaya_id" => "19",
        "ar_name" => "ڨنزات",
        "longitude" => "36.3357504",
        "latitude" => "4.7548888"
    ],
    [
        "id" => "716",
        "code_postal" => "19042",
        "city_name" => "Talaifacene",
        "wilaya_id" => "19",
        "ar_name" => "تالة إيفاسن",
        "longitude" => "35.9637883",
        "latitude" => "5.6440518"
    ],
    [
        "id" => "717",
        "code_postal" => "19043",
        "city_name" => "Bougaa",
        "wilaya_id" => "19",
        "ar_name" => "بوقاعـة",
        "longitude" => "36.3394384",
        "latitude" => "5.0449321"
    ],
    [
        "id" => "718",
        "code_postal" => "19044",
        "city_name" => "Beni Fouda",
        "wilaya_id" => "19",
        "ar_name" => "بني فودة",
        "longitude" => "36.2770368",
        "latitude" => "5.4987834"
    ],
    [
        "id" => "719",
        "code_postal" => "19045",
        "city_name" => "Tachouda",
        "wilaya_id" => "19",
        "ar_name" => "تاشودة",
        "longitude" => "36.2670155",
        "latitude" => "5.6616471"
    ],
    [
        "id" => "720",
        "code_postal" => "19046",
        "city_name" => "Beni Mouhli",
        "wilaya_id" => "19",
        "ar_name" => "إيث موحلي",
        "longitude" => "36.5137668",
        "latitude" => "4.858188"
    ],
    [
        "id" => "721",
        "code_postal" => "19047",
        "city_name" => "Ouled Sabor",
        "wilaya_id" => "19",
        "ar_name" => "أولاد صـابر",
        "longitude" => "36.180991",
        "latitude" => "5.4739354"
    ],
    [
        "id" => "722",
        "code_postal" => "19048",
        "city_name" => "Guellal",
        "wilaya_id" => "19",
        "ar_name" => "قلال",
        "longitude" => "36.036461",
        "latitude" => "5.2209924"
    ],
    [
        "id" => "723",
        "code_postal" => "19049",
        "city_name" => "Ain Sebt",
        "wilaya_id" => "19",
        "ar_name" => "عين السبت",
        "longitude" => "36.4924439",
        "latitude" => "5.649352"
    ],
    [
        "id" => "724",
        "code_postal" => "19050",
        "city_name" => "Hammam Guergour",
        "wilaya_id" => "19",
        "ar_name" => "حمام قرقور",
        "longitude" => "36.3463283",
        "latitude" => "4.932553"
    ],
    [
        "id" => "725",
        "code_postal" => "19051",
        "city_name" => "Ait Naoual Mezada",
        "wilaya_id" => "19",
        "ar_name" => "آيت نوال مزادة",
        "longitude" => "36.5453859",
        "latitude" => "5.0547929"
    ],
    [
        "id" => "726",
        "code_postal" => "19052",
        "city_name" => "Ksar El Abtal",
        "wilaya_id" => "19",
        "ar_name" => "قصرالأبطال",
        "longitude" => "35.9761631",
        "latitude" => "5.1490233"
    ],
    [
        "id" => "727",
        "code_postal" => "19053",
        "city_name" => "Beni Hocine",
        "wilaya_id" => "19",
        "ar_name" => "بني حسين",
        "longitude" => "36.2590992",
        "latitude" => "5.0521419"
    ],
    [
        "id" => "728",
        "code_postal" => "19054",
        "city_name" => "Ait Tizi",
        "wilaya_id" => "19",
        "ar_name" => "آيت تيزي",
        "longitude" => "36.5360367",
        "latitude" => "5.1052087"
    ],
    [
        "id" => "729",
        "code_postal" => "19055",
        "city_name" => "Maouklane",
        "wilaya_id" => "19",
        "ar_name" => "موكلان",
        "longitude" => "36.4012018",
        "latitude" => "5.0266852"
    ],
    [
        "id" => "730",
        "code_postal" => "19056",
        "city_name" => "Guelta Zerka",
        "wilaya_id" => "19",
        "ar_name" => "القلتة الزرقاء",
        "longitude" => "36.2047344",
        "latitude" => "5.6012867"
    ],
    [
        "id" => "731",
        "code_postal" => "19057",
        "city_name" => "Oued El Barad",
        "wilaya_id" => "19",
        "ar_name" => "واد البارد",
        "longitude" => "36.4982198",
        "latitude" => "5.3679794"
    ],
    [
        "id" => "732",
        "code_postal" => "19058",
        "city_name" => "Taya",
        "wilaya_id" => "19",
        "ar_name" => "طاية",
        "longitude" => "35.9253339",
        "latitude" => "5.8147183"
    ],
    [
        "id" => "733",
        "code_postal" => "19059",
        "city_name" => "El Ouldja",
        "wilaya_id" => "19",
        "ar_name" => "الولجـة",
        "longitude" => "36.0876231",
        "latitude" => "5.8494875"
    ],
    [
        "id" => "734",
        "code_postal" => "19060",
        "city_name" => "Tella",
        "wilaya_id" => "19",
        "ar_name" => "التلة",
        "longitude" => "35.9637883",
        "latitude" => "5.6440518"
    ],
    [
        "id" => "735",
        "code_postal" => "20001",
        "city_name" => "Saida",
        "wilaya_id" => "20",
        "ar_name" => "سعيدة",
        "longitude" => "34.84194",
        "latitude" => "0.1133388"
    ],
    [
        "id" => "736",
        "code_postal" => "20002",
        "city_name" => "Doui Thabet",
        "wilaya_id" => "20",
        "ar_name" => "دوى ثابت",
        "longitude" => "34.8926538",
        "latitude" => "-0.0842"
    ],
    [
        "id" => "737",
        "code_postal" => "20003",
        "city_name" => "Ain El Hadjar",
        "wilaya_id" => "20",
        "ar_name" => "عين الحجر",
        "longitude" => "34.7609324",
        "latitude" => "0.1333378"
    ],
    [
        "id" => "738",
        "code_postal" => "20004",
        "city_name" => "Ouled Khaled",
        "wilaya_id" => "20",
        "ar_name" => "أولاد خالد",
        "longitude" => "34.841945",
        "latitude" => "0.1483583"
    ],
    [
        "id" => "739",
        "code_postal" => "20005",
        "city_name" => "Moulay Larbi",
        "wilaya_id" => "20",
        "ar_name" => "موالي العربي",
        "longitude" => "34.6487428",
        "latitude" => "0.0046133"
    ],
    [
        "id" => "740",
        "code_postal" => "20006",
        "city_name" => "Youb",
        "wilaya_id" => "20",
        "ar_name" => "يوب",
        "longitude" => "34.9207469",
        "latitude" => "-0.2177601"
    ],
    [
        "id" => "741",
        "code_postal" => "20007",
        "city_name" => "Hounet",
        "wilaya_id" => "20",
        "ar_name" => "هونت",
        "longitude" => "35.1193494",
        "latitude" => "-0.1492344"
    ],
    [
        "id" => "742",
        "code_postal" => "20008",
        "city_name" => "Sidi Amar",
        "wilaya_id" => "20",
        "ar_name" => "يدي عمر",
        "longitude" => "35.0264293",
        "latitude" => "0.1049602"
    ],
    [
        "id" => "743",
        "code_postal" => "20009",
        "city_name" => "Sidi Boubekeur",
        "wilaya_id" => "20",
        "ar_name" => "سيدي بوبكر",
        "longitude" => "35.0307334",
        "latitude" => "0.0453185"
    ],
    [
        "id" => "744",
        "code_postal" => "20010",
        "city_name" => "El Hassasna",
        "wilaya_id" => "20",
        "ar_name" => "حساسنة",
        "longitude" => "34.8248463",
        "latitude" => "0.3121231"
    ],
    [
        "id" => "745",
        "code_postal" => "20011",
        "city_name" => "Maamora",
        "wilaya_id" => "20",
        "ar_name" => "معمورة",
        "longitude" => "34.68074",
        "latitude" => "0.4905867"
    ],
    [
        "id" => "746",
        "code_postal" => "20012",
        "city_name" => "Sidi Ahmed",
        "wilaya_id" => "20",
        "ar_name" => "سيدي أحمد",
        "longitude" => "34.5499905",
        "latitude" => "0.2527392"
    ],
    [
        "id" => "747",
        "code_postal" => "20013",
        "city_name" => "Ain Sekhouna",
        "wilaya_id" => "20",
        "ar_name" => "العين السخونة",
        "longitude" => "34.5044436",
        "latitude" => "0.8354119"
    ],
    [
        "id" => "748",
        "code_postal" => "20014",
        "city_name" => "Ouled Brahim",
        "wilaya_id" => "20",
        "ar_name" => "أولاد ابراھيم",
        "longitude" => "34.986248",
        "latitude" => "0.4696722"
    ],
    [
        "id" => "749",
        "code_postal" => "20015",
        "city_name" => "Tircine",
        "wilaya_id" => "20",
        "ar_name" => "تيرسين",
        "longitude" => "34.9016504",
        "latitude" => "0.549488"
    ],
    [
        "id" => "750",
        "code_postal" => "20016",
        "city_name" => "Ain Soltane",
        "wilaya_id" => "20",
        "ar_name" => "عين السلطان",
        "longitude" => "34.9675528",
        "latitude" => "0.3012402"
    ],
    [
        "id" => "751",
        "code_postal" => "21001",
        "city_name" => "Skikda",
        "wilaya_id" => "21",
        "ar_name" => "سكيكدة",
        "longitude" => "36.8777706",
        "latitude" => "6.86568"
    ],
    [
        "id" => "752",
        "code_postal" => "21002",
        "city_name" => "Ain Zouit",
        "wilaya_id" => "21",
        "ar_name" => "عين زويت",
        "longitude" => "36.8887165",
        "latitude" => "6.7802703"
    ],
    [
        "id" => "753",
        "code_postal" => "21003",
        "city_name" => "El Hadaik",
        "wilaya_id" => "21",
        "ar_name" => "الحدايق",
        "longitude" => "36.8244178",
        "latitude" => "6.878085"
    ],
    [
        "id" => "754",
        "code_postal" => "21004",
        "city_name" => "Azzaba",
        "wilaya_id" => "21",
        "ar_name" => "عزابة",
        "longitude" => "36.7430777",
        "latitude" => "7.0997212"
    ],
    [
        "id" => "755",
        "code_postal" => "21005",
        "city_name" => "Djendel",
        "wilaya_id" => "21",
        "ar_name" => "جندل",
        "longitude" => "36.7814565",
        "latitude" => "7.1617769"
    ],
    [
        "id" => "756",
        "code_postal" => "21006",
        "city_name" => "Ain Cherchar",
        "wilaya_id" => "21",
        "ar_name" => "عين شرشار",
        "longitude" => "36.7329798",
        "latitude" => "7.2109578"
    ],
    [
        "id" => "757",
        "code_postal" => "21007",
        "city_name" => "Bekkouche Lakhdar",
        "wilaya_id" => "21",
        "ar_name" => "بكوش لخضر",
        "longitude" => "36.7011643",
        "latitude" => "7.2953939"
    ],
    [
        "id" => "758",
        "code_postal" => "21008",
        "city_name" => "Ben Azzouz",
        "wilaya_id" => "21",
        "ar_name" => "بن عزوز",
        "longitude" => "36.8648574",
        "latitude" => "7.2885273"
    ],
    [
        "id" => "759",
        "code_postal" => "21009",
        "city_name" => "Es Sebt",
        "wilaya_id" => "21",
        "ar_name" => "السبت",
        "longitude" => "36.659999",
        "latitude" => "7.0612452"
    ],
    [
        "id" => "760",
        "code_postal" => "21010",
        "city_name" => "Collo",
        "wilaya_id" => "21",
        "ar_name" => "القل",
        "longitude" => "37.0006567",
        "latitude" => "6.537659"
    ],
    [
        "id" => "761",
        "code_postal" => "21011",
        "city_name" => "Beni Zid",
        "wilaya_id" => "21",
        "ar_name" => "بنى زيد",
        "longitude" => "36.8166662",
        "latitude" => "6.4912452"
    ],
    [
        "id" => "762",
        "code_postal" => "21012",
        "city_name" => "Kerkera",
        "wilaya_id" => "21",
        "ar_name" => "كركرة",
        "longitude" => "36.9297905",
        "latitude" => "6.5761113"
    ],
    [
        "id" => "763",
        "code_postal" => "21013",
        "city_name" => "Ouled Attia",
        "wilaya_id" => "21",
        "ar_name" => "أولاد عطية",
        "longitude" => "35.5368952",
        "latitude" => "2.1427722"
    ],
    [
        "id" => "764",
        "code_postal" => "21014",
        "city_name" => "Oued Zehour",
        "wilaya_id" => "21",
        "ar_name" => "وادي الزهور",
        "longitude" => "36.922037",
        "latitude" => "6.3040281"
    ],
    [
        "id" => "765",
        "code_postal" => "21015",
        "city_name" => "Zitouna",
        "wilaya_id" => "21",
        "ar_name" => "الزيتونة",
        "longitude" => "36.9888779",
        "latitude" => "6.4497961"
    ],
    [
        "id" => "766",
        "code_postal" => "21016",
        "city_name" => "El Harrouch",
        "wilaya_id" => "21",
        "ar_name" => "الحروش",
        "longitude" => "36.6547652",
        "latitude" => "6.8234108"
    ],
    [
        "id" => "767",
        "code_postal" => "21017",
        "city_name" => "Zerdazas",
        "wilaya_id" => "21",
        "ar_name" => "زردازة",
        "longitude" => "36.8777912",
        "latitude" => "6.9357204"
    ],
    [
        "id" => "768",
        "code_postal" => "21018",
        "city_name" => "Ouled Hebaba",
        "wilaya_id" => "21",
        "ar_name" => "أولاد حبابة",
        "longitude" => "36.8777912",
        "latitude" => "6.9357204"
    ],
    [
        "id" => "769",
        "code_postal" => "21019",
        "city_name" => "Sidi Mezghiche",
        "wilaya_id" => "21",
        "ar_name" => "سيدي مزغيش",
        "longitude" => "36.6779093",
        "latitude" => "6.7110264"
    ],
    [
        "id" => "770",
        "code_postal" => "21020",
        "city_name" => "Emdjez Edchich",
        "wilaya_id" => "21",
        "ar_name" => "مجاز الدشيش",
        "longitude" => "36.7047297",
        "latitude" => "6.7961489"
    ],
    [
        "id" => "771",
        "code_postal" => "21021",
        "city_name" => "Beni Oulbane",
        "wilaya_id" => "21",
        "ar_name" => "بني والبان",
        "longitude" => "36.6282861",
        "latitude" => "6.6174172"
    ],
    [
        "id" => "772",
        "code_postal" => "21022",
        "city_name" => "Ain Bouziane",
        "wilaya_id" => "21",
        "ar_name" => "عين بوزيان",
        "longitude" => "36.6036397",
        "latitude" => "6.6793845"
    ],
    [
        "id" => "773",
        "code_postal" => "21023",
        "city_name" => "Ramdane Djamel",
        "wilaya_id" => "21",
        "ar_name" => "رمضان جمال",
        "longitude" => "36.7585337",
        "latitude" => "6.8745445"
    ],
    [
        "id" => "774",
        "code_postal" => "21024",
        "city_name" => "Beni Bachir",
        "wilaya_id" => "21",
        "ar_name" => "بني بشير",
        "longitude" => "36.7833322",
        "latitude" => "6.9245782"
    ],
    [
        "id" => "775",
        "code_postal" => "21025",
        "city_name" => "Salah Bouchaour",
        "wilaya_id" => "21",
        "ar_name" => "صالح بوالشعور",
        "longitude" => "36.6997005",
        "latitude" => "6.8379484"
    ],
    [
        "id" => "776",
        "code_postal" => "21026",
        "city_name" => "Tamalous",
        "wilaya_id" => "21",
        "ar_name" => "تمالوس",
        "longitude" => "36.8366625",
        "latitude" => "6.6275453"
    ],
    [
        "id" => "777",
        "code_postal" => "21027",
        "city_name" => "Ain Kechra",
        "wilaya_id" => "21",
        "ar_name" => "عين قشرة",
        "longitude" => "36.745039",
        "latitude" => "6.423676"
    ],
    [
        "id" => "778",
        "code_postal" => "21028",
        "city_name" => "Oum Toub",
        "wilaya_id" => "21",
        "ar_name" => "أم الطوب",
        "longitude" => "36.6889452",
        "latitude" => "6.5584944"
    ],
    [
        "id" => "779",
        "code_postal" => "21029",
        "city_name" => "Bein El Ouiden",
        "wilaya_id" => "21",
        "ar_name" => "بين الويدان",
        "longitude" => "36.8057424",
        "latitude" => "6.5480875"
    ],
    [
        "id" => "780",
        "code_postal" => "21030",
        "city_name" => "Filfila",
        "wilaya_id" => "21",
        "ar_name" => "فلفلة",
        "longitude" => "36.8880361",
        "latitude" => "7.0082877"
    ],
    [
        "id" => "781",
        "code_postal" => "21031",
        "city_name" => "Cheraia",
        "wilaya_id" => "21",
        "ar_name" => "الشرايع",
        "longitude" => "37.0030051",
        "latitude" => "6.4972247"
    ],
    [
        "id" => "782",
        "code_postal" => "21032",
        "city_name" => "Kanoua",
        "wilaya_id" => "21",
        "ar_name" => "قنواع",
        "longitude" => "37.0381362",
        "latitude" => "6.4001584"
    ],
    [
        "id" => "783",
        "code_postal" => "21033",
        "city_name" => "El Ghedir",
        "wilaya_id" => "21",
        "ar_name" => "الغدير",
        "longitude" => "36.6870219",
        "latitude" => "6.9730998"
    ],
    [
        "id" => "784",
        "code_postal" => "21034",
        "city_name" => "Bouchtata",
        "wilaya_id" => "21",
        "ar_name" => "بوشطاطة",
        "longitude" => "36.7833322",
        "latitude" => "6.7912452"
    ],
    [
        "id" => "785",
        "code_postal" => "21035",
        "city_name" => "Ouldja Boulbalout",
        "wilaya_id" => "21",
        "ar_name" => "الولجة بو البلوط",
        "longitude" => "36.73896",
        "latitude" => "6.344292"
    ],
    [
        "id" => "786",
        "code_postal" => "21036",
        "city_name" => "Kheneg Mayoum",
        "wilaya_id" => "21",
        "ar_name" => "خنق مايوم",
        "longitude" => "36.8777912",
        "latitude" => "6.9357204"
    ],
    [
        "id" => "787",
        "code_postal" => "21037",
        "city_name" => "Hamadi Krouma",
        "wilaya_id" => "21",
        "ar_name" => "حمادي كرومة",
        "longitude" => "36.8471689",
        "latitude" => "6.9208716"
    ],
    [
        "id" => "788",
        "code_postal" => "21038",
        "city_name" => "El Marsa",
        "wilaya_id" => "21",
        "ar_name" => "المرسى",
        "longitude" => "37.0091437",
        "latitude" => "7.116813"
    ],
    [
        "id" => "789",
        "code_postal" => "22001",
        "city_name" => "Sidi Bel Abbes",
        "wilaya_id" => "22",
        "ar_name" => "سيدي بلعباس",
        "longitude" => "35.2063139",
        "latitude" => "-0.7001772"
    ],
    [
        "id" => "790",
        "code_postal" => "22002",
        "city_name" => "Tessala",
        "wilaya_id" => "22",
        "ar_name" => "تسالة",
        "longitude" => "35.2714294",
        "latitude" => "-0.8558205"
    ],
    [
        "id" => "791",
        "code_postal" => "22003",
        "city_name" => "Sidi Brahim",
        "wilaya_id" => "22",
        "ar_name" => "سيدي ابراهيم",
        "longitude" => "35.2591019",
        "latitude" => "-0.5991847"
    ],
    [
        "id" => "792",
        "code_postal" => "22004",
        "city_name" => "Mostefa Ben Brahim",
        "wilaya_id" => "22",
        "ar_name" => "مصطفى بن ابراهيم",
        "longitude" => "35.1721396",
        "latitude" => "-0.4142215"
    ],
    [
        "id" => "793",
        "code_postal" => "22005",
        "city_name" => "Telagh",
        "wilaya_id" => "22",
        "ar_name" => "تلاغ",
        "longitude" => "34.8036693",
        "latitude" => "-0.6044224"
    ],
    [
        "id" => "794",
        "code_postal" => "22006",
        "city_name" => "Mezaourou",
        "wilaya_id" => "22",
        "ar_name" => "مزاورو",
        "longitude" => "34.834391",
        "latitude" => "-0.795146"
    ],
    [
        "id" => "795",
        "code_postal" => "22007",
        "city_name" => "Boukhanafis",
        "wilaya_id" => "22",
        "ar_name" => "بوخنفيس",
        "longitude" => "35.046047",
        "latitude" => "-0.7594111"
    ],
    [
        "id" => "796",
        "code_postal" => "22008",
        "city_name" => "Sidi Ali Boussidi",
        "wilaya_id" => "22",
        "ar_name" => "سيدي علي بوسيدي",
        "longitude" => "35.1040625",
        "latitude" => "-0.8716112"
    ],
    [
        "id" => "797",
        "code_postal" => "22009",
        "city_name" => "Badredine El Mokrani",
        "wilaya_id" => "22",
        "ar_name" => "بدر الدين المقراني",
        "longitude" => "35.0098106",
        "latitude" => "-0.8547677"
    ],
    [
        "id" => "798",
        "code_postal" => "22010",
        "city_name" => "Marhoum",
        "wilaya_id" => "22",
        "ar_name" => "مرحوم",
        "longitude" => "34.4457418",
        "latitude" => "-0.2038049"
    ],
    [
        "id" => "799",
        "code_postal" => "22011",
        "city_name" => "Tafissour",
        "wilaya_id" => "22",
        "ar_name" => "تفسور",
        "longitude" => "34.6926458",
        "latitude" => "-0.2074045"
    ],
    [
        "id" => "800",
        "code_postal" => "22012",
        "city_name" => "Amarnas",
        "wilaya_id" => "22",
        "ar_name" => "العمارنة",
        "longitude" => "35.0999604",
        "latitude" => "-0.6567147"
    ],
    [
        "id" => "801",
        "code_postal" => "22013",
        "city_name" => "Tilmouni",
        "wilaya_id" => "22",
        "ar_name" => "تلموني",
        "longitude" => "35.1832214",
        "latitude" => "-0.5905178"
    ],
    [
        "id" => "802",
        "code_postal" => "22014",
        "city_name" => "Sidi Lahcene",
        "wilaya_id" => "22",
        "ar_name" => "سيدي لحسن",
        "longitude" => "35.1925854",
        "latitude" => "-0.8112957"
    ],
    [
        "id" => "803",
        "code_postal" => "22015",
        "city_name" => "Ain Thrid",
        "wilaya_id" => "22",
        "ar_name" => "عين التريد",
        "longitude" => "35.284671",
        "latitude" => "-0.6782448"
    ],
    [
        "id" => "804",
        "code_postal" => "22016",
        "city_name" => "Makedra",
        "wilaya_id" => "22",
        "ar_name" => "مكدرة",
        "longitude" => "35.4412149",
        "latitude" => "-0.4348398"
    ],
    [
        "id" => "805",
        "code_postal" => "22017",
        "city_name" => "Tenira",
        "wilaya_id" => "22",
        "ar_name" => "تنيرة",
        "longitude" => "35.0063927",
        "latitude" => "-0.5771282"
    ],
    [
        "id" => "806",
        "code_postal" => "22018",
        "city_name" => "Moulay Slissen",
        "wilaya_id" => "22",
        "ar_name" => "مولاي سليسن",
        "longitude" => "34.821448",
        "latitude" => "-0.769794"
    ],
    [
        "id" => "807",
        "code_postal" => "22019",
        "city_name" => "El Hacaiba",
        "wilaya_id" => "22",
        "ar_name" => "الحصيبة",
        "longitude" => "34.699542",
        "latitude" => "-0.7694292"
    ],
    [
        "id" => "808",
        "code_postal" => "22020",
        "city_name" => "Hassi Zehana",
        "wilaya_id" => "22",
        "ar_name" => "حاسي زهانة",
        "longitude" => "35.0251892",
        "latitude" => "-0.8964662"
    ],
    [
        "id" => "809",
        "code_postal" => "22021",
        "city_name" => "Tabia",
        "wilaya_id" => "22",
        "ar_name" => "طابية",
        "longitude" => "35.0181729",
        "latitude" => "-0.7786567"
    ],
    [
        "id" => "810",
        "code_postal" => "22022",
        "city_name" => "Merine",
        "wilaya_id" => "22",
        "ar_name" => "مرين",
        "longitude" => "34.7805884",
        "latitude" => "-0.4548597"
    ],
    [
        "id" => "811",
        "code_postal" => "22023",
        "city_name" => "Ras El Ma",
        "wilaya_id" => "22",
        "ar_name" => "رأس الماء",
        "longitude" => "34.5039368",
        "latitude" => "-0.8212282"
    ],
    [
        "id" => "812",
        "code_postal" => "22024",
        "city_name" => "Ain Tindamine",
        "wilaya_id" => "22",
        "ar_name" => "عين تندامين",
        "longitude" => "34.6890805",
        "latitude" => "-0.7245612"
    ],
    [
        "id" => "813",
        "code_postal" => "22025",
        "city_name" => "Ain Kada",
        "wilaya_id" => "22",
        "ar_name" => "عين قادة",
        "longitude" => "35.1368876",
        "latitude" => "-0.8607745"
    ],
    [
        "id" => "814",
        "code_postal" => "22026",
        "city_name" => "Mcid",
        "wilaya_id" => "22",
        "ar_name" => "مسيد",
        "longitude" => "35.139035",
        "latitude" => "-0.2525651"
    ],
    [
        "id" => "815",
        "code_postal" => "22027",
        "city_name" => "Sidi Khaled",
        "wilaya_id" => "22",
        "ar_name" => "سيدي خالد",
        "longitude" => "35.1200723",
        "latitude" => "-0.7417066"
    ],
    [
        "id" => "816",
        "code_postal" => "22028",
        "city_name" => "Ain El Berd",
        "wilaya_id" => "22",
        "ar_name" => "عين البرد",
        "longitude" => "35.3828523",
        "latitude" => "-0.5661419"
    ],
    [
        "id" => "817",
        "code_postal" => "22029",
        "city_name" => "Sfissef",
        "wilaya_id" => "22",
        "ar_name" => "سفيزف",
        "longitude" => "35.2442317",
        "latitude" => "-0.3162029"
    ],
    [
        "id" => "818",
        "code_postal" => "22030",
        "city_name" => "Ain Adden",
        "wilaya_id" => "22",
        "ar_name" => "عين عدان",
        "longitude" => "35.330304",
        "latitude" => "-0.2660537"
    ],
    [
        "id" => "819",
        "code_postal" => "22031",
        "city_name" => "Oued Taourira",
        "wilaya_id" => "22",
        "ar_name" => "واد تاوريرة",
        "longitude" => "34.8024792",
        "latitude" => "-0.3307029"
    ],
    [
        "id" => "820",
        "code_postal" => "22032",
        "city_name" => "Dhaya",
        "wilaya_id" => "22",
        "ar_name" => "الظاية",
        "longitude" => "34.6752163",
        "latitude" => "-0.6322849"
    ],
    [
        "id" => "821",
        "code_postal" => "22033",
        "city_name" => "Zerouala",
        "wilaya_id" => "22",
        "ar_name" => "زروالة",
        "longitude" => "35.2429835",
        "latitude" => "-0.5271103"
    ],
    [
        "id" => "822",
        "code_postal" => "22034",
        "city_name" => "Lamtar",
        "wilaya_id" => "22",
        "ar_name" => "لمطار",
        "longitude" => "35.0592826",
        "latitude" => "-0.8357771"
    ],
    [
        "id" => "823",
        "code_postal" => "22035",
        "city_name" => "Sidi Chaib",
        "wilaya_id" => "22",
        "ar_name" => "سيدي شعيب",
        "longitude" => "34.5927664",
        "latitude" => "-0.555625"
    ],
    [
        "id" => "824",
        "code_postal" => "22036",
        "city_name" => "Sidi Dahou",
        "wilaya_id" => "22",
        "ar_name" => "سيدي دحو",
        "longitude" => "35.1171744",
        "latitude" => "-0.9150603"
    ],
    [
        "id" => "825",
        "code_postal" => "22037",
        "city_name" => "Oued Sbaa",
        "wilaya_id" => "22",
        "ar_name" => "واد السبع",
        "longitude" => "34.5903826",
        "latitude" => "-0.717178"
    ],
    [
        "id" => "826",
        "code_postal" => "22038",
        "city_name" => "Boudjebaa El Bordj",
        "wilaya_id" => "22",
        "ar_name" => "بوجبهة البرج",
        "longitude" => "35.3519121",
        "latitude" => "-0.3280353"
    ],
    [
        "id" => "827",
        "code_postal" => "22039",
        "city_name" => "Sehala Thaoura",
        "wilaya_id" => "22",
        "ar_name" => "سهالة الثورة",
        "longitude" => "35.2240535",
        "latitude" => "-0.929592"
    ],
    [
        "id" => "828",
        "code_postal" => "22040",
        "city_name" => "Sidi Yacoub",
        "wilaya_id" => "22",
        "ar_name" => "سيدي يعقوب",
        "longitude" => "35.1557033",
        "latitude" => "-0.8069145"
    ],
    [
        "id" => "829",
        "code_postal" => "22041",
        "city_name" => "Sidi Hamadouche",
        "wilaya_id" => "22",
        "ar_name" => "سيدي حمادوش",
        "longitude" => "35.3114849",
        "latitude" => "-0.5885866"
    ],
    [
        "id" => "830",
        "code_postal" => "22042",
        "city_name" => "Belarbi",
        "wilaya_id" => "22",
        "ar_name" => "بلعربي",
        "longitude" => "35.1309933",
        "latitude" => "-0.5169609"
    ],
    [
        "id" => "831",
        "code_postal" => "22043",
        "city_name" => "Oued Sefioun",
        "wilaya_id" => "22",
        "ar_name" => "واد سفيون",
        "longitude" => "35.0664471",
        "latitude" => "-0.3616477"
    ],
    [
        "id" => "832",
        "code_postal" => "22044",
        "city_name" => "Teghalimet",
        "wilaya_id" => "22",
        "ar_name" => "تغاليمت",
        "longitude" => "34.8852137",
        "latitude" => "-0.563019"
    ],
    [
        "id" => "833",
        "code_postal" => "22045",
        "city_name" => "Ben Badis",
        "wilaya_id" => "22",
        "ar_name" => "ابن باديس",
        "longitude" => "34.92614",
        "latitude" => "-0.9757259"
    ],
    [
        "id" => "834",
        "code_postal" => "22046",
        "city_name" => "Sidi Ali Benyoub",
        "wilaya_id" => "22",
        "ar_name" => "سيدي علي بن يوب",
        "longitude" => "34.9488777",
        "latitude" => "-0.794194"
    ],
    [
        "id" => "835",
        "code_postal" => "22047",
        "city_name" => "Chetouane Belaila",
        "wilaya_id" => "22",
        "ar_name" => "شطوان بلايلة",
        "longitude" => "34.950063",
        "latitude" => "-0.8453465"
    ],
    [
        "id" => "836",
        "code_postal" => "22048",
        "city_name" => "Bir El Hammam",
        "wilaya_id" => "22",
        "ar_name" => "بئر الحمام",
        "longitude" => "34.4187435",
        "latitude" => "-0.5031502"
    ],
    [
        "id" => "837",
        "code_postal" => "22049",
        "city_name" => "Taoudmout",
        "wilaya_id" => "22",
        "ar_name" => "تاودموت",
        "longitude" => "34.5881382",
        "latitude" => "-0.1211071"
    ],
    [
        "id" => "838",
        "code_postal" => "22050",
        "city_name" => "Redjem Demouche",
        "wilaya_id" => "22",
        "ar_name" => "رجم دموش",
        "longitude" => "34.4269826",
        "latitude" => "-0.8185673"
    ],
    [
        "id" => "839",
        "code_postal" => "22051",
        "city_name" => "Benachiba Chelia",
        "wilaya_id" => "22",
        "ar_name" => "بن عشيبة شلية",
        "longitude" => "34.9637049",
        "latitude" => "-0.6169817"
    ],
    [
        "id" => "840",
        "code_postal" => "22052",
        "city_name" => "Hassi Dahou",
        "wilaya_id" => "22",
        "ar_name" => "حاسي دحو",
        "longitude" => "35.108878",
        "latitude" => "-0.5963542"
    ],
    [
        "id" => "841",
        "code_postal" => "23001",
        "city_name" => "Annaba",
        "wilaya_id" => "23",
        "ar_name" => "عنابة",
        "longitude" => "36.9184139",
        "latitude" => "7.6752351"
    ],
    [
        "id" => "842",
        "code_postal" => "23002",
        "city_name" => "Berrahel",
        "wilaya_id" => "23",
        "ar_name" => "برحال",
        "longitude" => "36.8106093",
        "latitude" => "7.4170564"
    ],
    [
        "id" => "843",
        "code_postal" => "23003",
        "city_name" => "El Hadjar",
        "wilaya_id" => "23",
        "ar_name" => "الحجار",
        "longitude" => "36.7742133",
        "latitude" => "7.6264832"
    ],
    [
        "id" => "844",
        "code_postal" => "23004",
        "city_name" => "Eulma",
        "wilaya_id" => "23",
        "ar_name" => "العلمة",
        "longitude" => "36.7095806",
        "latitude" => "7.3636267"
    ],
    [
        "id" => "845",
        "code_postal" => "23005",
        "city_name" => "El Bouni",
        "wilaya_id" => "23",
        "ar_name" => "البوني",
        "longitude" => "36.8404084",
        "latitude" => "7.6381562"
    ],
    [
        "id" => "846",
        "code_postal" => "23006",
        "city_name" => "Oued El Aneb",
        "wilaya_id" => "23",
        "ar_name" => "وادي العنب",
        "longitude" => "36.936216",
        "latitude" => "7.4220268"
    ],
    [
        "id" => "847",
        "code_postal" => "23007",
        "city_name" => "Cheurfa",
        "wilaya_id" => "23",
        "ar_name" => "الشرفة",
        "longitude" => "36.721776",
        "latitude" => "7.5026509"
    ],
    [
        "id" => "848",
        "code_postal" => "23008",
        "city_name" => "Seraidi",
        "wilaya_id" => "23",
        "ar_name" => "سرايدي",
        "longitude" => "36.9465799",
        "latitude" => "7.5518106"
    ],
    [
        "id" => "849",
        "code_postal" => "23009",
        "city_name" => "Ain Berda",
        "wilaya_id" => "23",
        "ar_name" => "عين الباردة",
        "longitude" => "36.6718947",
        "latitude" => "7.5182507"
    ],
    [
        "id" => "850",
        "code_postal" => "23010",
        "city_name" => "Chetaibi",
        "wilaya_id" => "23",
        "ar_name" => "شطايبي",
        "longitude" => "37.0130857",
        "latitude" => "7.3259042"
    ],
    [
        "id" => "851",
        "code_postal" => "23011",
        "city_name" => "Sidi Amer",
        "wilaya_id" => "23",
        "ar_name" => "سيدي عمار",
        "longitude" => "36.8079881",
        "latitude" => "7.5912068"
    ],
    [
        "id" => "852",
        "code_postal" => "23012",
        "city_name" => "Treat",
        "wilaya_id" => "23",
        "ar_name" => "التريعات",
        "longitude" => "36.933511",
        "latitude" => "7.3342297"
    ],
    [
        "id" => "853",
        "code_postal" => "24001",
        "city_name" => "Guelma",
        "wilaya_id" => "24",
        "ar_name" => "قالمة",
        "longitude" => "36.4569037",
        "latitude" => "7.3984116"
    ],
    [
        "id" => "854",
        "code_postal" => "24002",
        "city_name" => "Nechmaya",
        "wilaya_id" => "24",
        "ar_name" => "نشماية",
        "longitude" => "36.611178",
        "latitude" => "7.5036084"
    ],
    [
        "id" => "855",
        "code_postal" => "24003",
        "city_name" => "Bouati Mahmoud",
        "wilaya_id" => "24",
        "ar_name" => "بوعاتي محمود",
        "longitude" => "36.5895674",
        "latitude" => "7.3207353"
    ],
    [
        "id" => "856",
        "code_postal" => "24004",
        "city_name" => "Oued Zenati",
        "wilaya_id" => "24",
        "ar_name" => "وادي الزناتي",
        "longitude" => "36.3153995",
        "latitude" => "7.1469496"
    ],
    [
        "id" => "857",
        "code_postal" => "24005",
        "city_name" => "Tamlouka",
        "wilaya_id" => "24",
        "ar_name" => "تاملوكة",
        "longitude" => "36.1569512",
        "latitude" => "7.1315431"
    ],
    [
        "id" => "858",
        "code_postal" => "24006",
        "city_name" => "Oued Fragha",
        "wilaya_id" => "24",
        "ar_name" => "وادي فراغة",
        "longitude" => "36.5567569",
        "latitude" => "7.7080895"
    ],
    [
        "id" => "859",
        "code_postal" => "24007",
        "city_name" => "Ain Sandel",
        "wilaya_id" => "24",
        "ar_name" => "عين صندل",
        "longitude" => "36.2432261",
        "latitude" => "7.5088549"
    ],
    [
        "id" => "860",
        "code_postal" => "24008",
        "city_name" => "Ras El Agba",
        "wilaya_id" => "24",
        "ar_name" => "راس العقبة",
        "longitude" => "36.3734915",
        "latitude" => "7.2205067"
    ],
    [
        "id" => "861",
        "code_postal" => "24009",
        "city_name" => "Dahouara",
        "wilaya_id" => "24",
        "ar_name" => "الدهوارة",
        "longitude" => "36.3509675",
        "latitude" => "7.728399"
    ],
    [
        "id" => "862",
        "code_postal" => "24010",
        "city_name" => "Belkhir",
        "wilaya_id" => "24",
        "ar_name" => "بلخير",
        "longitude" => "36.4607299",
        "latitude" => "7.4686431"
    ],
    [
        "id" => "863",
        "code_postal" => "24011",
        "city_name" => "Ben Djarah",
        "wilaya_id" => "24",
        "ar_name" => "بن جراح",
        "longitude" => "36.4323579",
        "latitude" => "7.3656034"
    ],
    [
        "id" => "864",
        "code_postal" => "24012",
        "city_name" => "Bou Hamdane",
        "wilaya_id" => "24",
        "ar_name" => "بوحمدان",
        "longitude" => "36.4607875",
        "latitude" => "7.0672535"
    ],
    [
        "id" => "865",
        "code_postal" => "24013",
        "city_name" => "Ain Makhlouf",
        "wilaya_id" => "24",
        "ar_name" => "عين مخلوف",
        "longitude" => "36.2433466",
        "latitude" => "7.2423719"
    ],
    [
        "id" => "866",
        "code_postal" => "24014",
        "city_name" => "Ain Ben Beida",
        "wilaya_id" => "24",
        "ar_name" => "عين بن بيضاء",
        "longitude" => "36.6166662",
        "latitude" => "7.6912452"
    ],
    [
        "id" => "867",
        "code_postal" => "24015",
        "city_name" => "Khezara",
        "wilaya_id" => "24",
        "ar_name" => "خزارة",
        "longitude" => "36.3706489",
        "latitude" => "7.5256133"
    ],
    [
        "id" => "868",
        "code_postal" => "24016",
        "city_name" => "Beni Mezline",
        "wilaya_id" => "24",
        "ar_name" => "بني مزلين",
        "longitude" => "36.4813374",
        "latitude" => "7.5999319"
    ],
    [
        "id" => "869",
        "code_postal" => "24017",
        "city_name" => "Bou Hachana",
        "wilaya_id" => "24",
        "ar_name" => "بوحشانة",
        "longitude" => "36.3062461",
        "latitude" => "7.5039195"
    ],
    [
        "id" => "870",
        "code_postal" => "24018",
        "city_name" => "Guelaat Bou Sbaa",
        "wilaya_id" => "24",
        "ar_name" => "قلعة بوصبع",
        "longitude" => "36.5487411",
        "latitude" => "7.4658322"
    ],
    [
        "id" => "871",
        "code_postal" => "24019",
        "city_name" => "Hammam Maskhoutine",
        "wilaya_id" => "24",
        "ar_name" => "حمام مسخوطين",
        "longitude" => "36.4599991",
        "latitude" => "7.2612452"
    ],
    [
        "id" => "872",
        "code_postal" => "24020",
        "city_name" => "El Fedjoudj",
        "wilaya_id" => "24",
        "ar_name" => "الفجوج",
        "longitude" => "36.5092883",
        "latitude" => "7.3712466"
    ],
    [
        "id" => "873",
        "code_postal" => "24021",
        "city_name" => "Bordj Sabat",
        "wilaya_id" => "24",
        "ar_name" => "برج صباط",
        "longitude" => "36.4020468",
        "latitude" => "7.038288"
    ],
    [
        "id" => "874",
        "code_postal" => "24022",
        "city_name" => "Hamman Nbail",
        "wilaya_id" => "24",
        "ar_name" => "حمام النبايل",
        "longitude" => "36.3240283",
        "latitude" => "7.6336956"
    ],
    [
        "id" => "875",
        "code_postal" => "24023",
        "city_name" => "Ain Larbi",
        "wilaya_id" => "24",
        "ar_name" => "عين العربى",
        "longitude" => "36.4569088",
        "latitude" => "7.4334312"
    ],
    [
        "id" => "876",
        "code_postal" => "24024",
        "city_name" => "Medjez Amar",
        "wilaya_id" => "24",
        "ar_name" => "مجاز عمار",
        "longitude" => "36.4453028",
        "latitude" => "7.3073994"
    ],
    [
        "id" => "877",
        "code_postal" => "24025",
        "city_name" => "Bouchegouf",
        "wilaya_id" => "24",
        "ar_name" => "بوشقوف",
        "longitude" => "36.4698174",
        "latitude" => "7.7139471"
    ],
    [
        "id" => "878",
        "code_postal" => "24026",
        "city_name" => "Heliopolis",
        "wilaya_id" => "24",
        "ar_name" => "ھيليوبوليس",
        "longitude" => "36.5051137",
        "latitude" => "7.4183462"
    ],
    [
        "id" => "879",
        "code_postal" => "24027",
        "city_name" => "Houari Boumediene",
        "wilaya_id" => "24",
        "ar_name" => "هواري بومدين",
        "longitude" => "36.4170552",
        "latitude" => "7.2737237"
    ],
    [
        "id" => "880",
        "code_postal" => "24028",
        "city_name" => "Roknia",
        "wilaya_id" => "24",
        "ar_name" => "الركنية",
        "longitude" => "36.5448453",
        "latitude" => "7.2242832"
    ],
    [
        "id" => "881",
        "code_postal" => "24029",
        "city_name" => "Salaoua Announa",
        "wilaya_id" => "24",
        "ar_name" => "سلاوة عنونة",
        "longitude" => "36.3864653",
        "latitude" => "7.2468782"
    ],
    [
        "id" => "882",
        "code_postal" => "24030",
        "city_name" => "Medjez Sfa",
        "wilaya_id" => "24",
        "ar_name" => "مجاز الصفاء",
        "longitude" => "36.4343861",
        "latitude" => "7.7743936"
    ],
    [
        "id" => "883",
        "code_postal" => "24031",
        "city_name" => "Boumahra Ahmed",
        "wilaya_id" => "24",
        "ar_name" => "بومهرة أحمد",
        "longitude" => "36.4588487",
        "latitude" => "7.5044774"
    ],
    [
        "id" => "884",
        "code_postal" => "24032",
        "city_name" => "Ain Reggada",
        "wilaya_id" => "24",
        "ar_name" => "عين رقادة",
        "longitude" => "36.2606161",
        "latitude" => "7.0637584"
    ],
    [
        "id" => "885",
        "code_postal" => "24033",
        "city_name" => "Oued Cheham",
        "wilaya_id" => "24",
        "ar_name" => "وادي الشحم",
        "longitude" => "36.3814206",
        "latitude" => "7.75918"
    ],
    [
        "id" => "886",
        "code_postal" => "24034",
        "city_name" => "Djeballah Khemissi",
        "wilaya_id" => "24",
        "ar_name" => "جبالة لخميسي",
        "longitude" => "36.4642865",
        "latitude" => "7.5646019"
    ],
    [
        "id" => "887",
        "code_postal" => "25001",
        "city_name" => "Constantine",
        "wilaya_id" => "25",
        "ar_name" => "قسنطينة",
        "longitude" => "36.3539041",
        "latitude" => "6.5073908"
    ],
    [
        "id" => "888",
        "code_postal" => "25002",
        "city_name" => "Hamma Bouziane",
        "wilaya_id" => "25",
        "ar_name" => "حامة بوزيان",
        "longitude" => "36.4279139",
        "latitude" => "6.4871452"
    ],
    [
        "id" => "889",
        "code_postal" => "25003",
        "city_name" => "Ibn Badis",
        "wilaya_id" => "25",
        "ar_name" => "إبن باديس",
        "longitude" => "36.3480237",
        "latitude" => "6.7097178"
    ],
    [
        "id" => "890",
        "code_postal" => "25004",
        "city_name" => "Zighoud Youcef",
        "wilaya_id" => "25",
        "ar_name" => "زيغود يوسف",
        "longitude" => "36.5297763",
        "latitude" => "6.5941469"
    ],
    [
        "id" => "891",
        "code_postal" => "25005",
        "city_name" => "Didouche Mourad",
        "wilaya_id" => "25",
        "ar_name" => "ديدوش مراد",
        "longitude" => "36.4639526",
        "latitude" => "6.5927385"
    ],
    [
        "id" => "892",
        "code_postal" => "25006",
        "city_name" => "El Khroub",
        "wilaya_id" => "25",
        "ar_name" => "الخروب",
        "longitude" => "36.2838625",
        "latitude" => "6.5156439"
    ],
    [
        "id" => "893",
        "code_postal" => "25007",
        "city_name" => "Ain Abid",
        "wilaya_id" => "25",
        "ar_name" => "عين عبيد",
        "longitude" => "36.2465349",
        "latitude" => "6.7979518"
    ],
    [
        "id" => "894",
        "code_postal" => "25008",
        "city_name" => "Beni Hamiden",
        "wilaya_id" => "25",
        "ar_name" => "بني حميدان",
        "longitude" => "36.5203461",
        "latitude" => "6.4731762"
    ],
    [
        "id" => "895",
        "code_postal" => "25009",
        "city_name" => "Ouled Rahmoune",
        "wilaya_id" => "25",
        "ar_name" => "أولاد رحمون",
        "longitude" => "36.1816075",
        "latitude" => "6.5482917"
    ],
    [
        "id" => "896",
        "code_postal" => "25010",
        "city_name" => "Ain Smara",
        "wilaya_id" => "25",
        "ar_name" => "عين سمارة",
        "longitude" => "36.2946549",
        "latitude" => "6.4221713"
    ],
    [
        "id" => "897",
        "code_postal" => "25011",
        "city_name" => "Mesaoud Boudjeriou",
        "wilaya_id" => "25",
        "ar_name" => "مسعود بوجريو",
        "longitude" => "36.4463789",
        "latitude" => "6.3586781"
    ],
    [
        "id" => "898",
        "code_postal" => "25012",
        "city_name" => "Ibn Ziad",
        "wilaya_id" => "25",
        "ar_name" => "ابن زياد",
        "longitude" => "36.3691447",
        "latitude" => "6.3523267"
    ],
    [
        "id" => "899",
        "code_postal" => "26001",
        "city_name" => "Medea",
        "wilaya_id" => "26",
        "ar_name" => "المدية",
        "longitude" => "36.2838204",
        "latitude" => "2.7028058"
    ],
    [
        "id" => "900",
        "code_postal" => "26002",
        "city_name" => "Ouzera",
        "wilaya_id" => "26",
        "ar_name" => "وزرة",
        "longitude" => "36.2615351",
        "latitude" => "2.8073906"
    ],
    [
        "id" => "901",
        "code_postal" => "26003",
        "city_name" => "Ouled Maaref",
        "wilaya_id" => "26",
        "ar_name" => "أولاد معرف",
        "longitude" => "35.7948583",
        "latitude" => "2.9102508"
    ],
    [
        "id" => "902",
        "code_postal" => "26004",
        "city_name" => "Ain Boucif",
        "wilaya_id" => "26",
        "ar_name" => "عين بوسيف",
        "longitude" => "35.8347645",
        "latitude" => "3.0031194"
    ],
    [
        "id" => "903",
        "code_postal" => "26005",
        "city_name" => "Aissaouia",
        "wilaya_id" => "26",
        "ar_name" => "العيساوية",
        "longitude" => "36.4109256",
        "latitude" => "3.1566785"
    ],
    [
        "id" => "904",
        "code_postal" => "26006",
        "city_name" => "Ouled Deide",
        "wilaya_id" => "26",
        "ar_name" => "أولاد دايد",
        "longitude" => "36.1013316",
        "latitude" => "2.9097357"
    ],
    [
        "id" => "905",
        "code_postal" => "26007",
        "city_name" => "El Omaria",
        "wilaya_id" => "26",
        "ar_name" => "العمارية",
        "longitude" => "36.3025098",
        "latitude" => "2.9355786"
    ],
    [
        "id" => "906",
        "code_postal" => "26008",
        "city_name" => "Derrag",
        "wilaya_id" => "26",
        "ar_name" => "دراڨ",
        "longitude" => "35.8431534",
        "latitude" => "2.2165241"
    ],
    [
        "id" => "907",
        "code_postal" => "26009",
        "city_name" => "El Guelbelkebir",
        "wilaya_id" => "26",
        "ar_name" => "القلب الكبير",
        "longitude" => "36.2477512",
        "latitude" => "3.3416865"
    ],
    [
        "id" => "908",
        "code_postal" => "26010",
        "city_name" => "Bouaiche",
        "wilaya_id" => "26",
        "ar_name" => "بوعيش",
        "longitude" => "35.6097793",
        "latitude" => "2.1731367"
    ],
    [
        "id" => "909",
        "code_postal" => "26011",
        "city_name" => "Mezerena",
        "wilaya_id" => "26",
        "ar_name" => "مزغنة",
        "longitude" => "36.3467956",
        "latitude" => "3.2758115"
    ],
    [
        "id" => "910",
        "code_postal" => "26012",
        "city_name" => "Ouled Brahim",
        "wilaya_id" => "26",
        "ar_name" => "أولاد إبراهيم",
        "longitude" => "36.2195223",
        "latitude" => "2.8815053"
    ],
    [
        "id" => "911",
        "code_postal" => "26013",
        "city_name" => "Tizi Mahdi",
        "wilaya_id" => "26",
        "ar_name" => "تيزي المهدي",
        "longitude" => "36.2131052",
        "latitude" => "2.7286213"
    ],
    [
        "id" => "912",
        "code_postal" => "26014",
        "city_name" => "Sidi Ziane",
        "wilaya_id" => "26",
        "ar_name" => "سيدي زيان",
        "longitude" => "36.0275429",
        "latitude" => "3.1710122"
    ],
    [
        "id" => "913",
        "code_postal" => "26015",
        "city_name" => "Tamesguida",
        "wilaya_id" => "26",
        "ar_name" => "تمزڨيدة",
        "longitude" => "36.3206865",
        "latitude" => "2.6122974"
    ],
    [
        "id" => "914",
        "code_postal" => "26016",
        "city_name" => "El Hamdania",
        "wilaya_id" => "26",
        "ar_name" => "الحمدانية",
        "longitude" => "36.3465239",
        "latitude" => "2.7878641"
    ],
    [
        "id" => "915",
        "code_postal" => "26017",
        "city_name" => "Kef Lakhdar",
        "wilaya_id" => "26",
        "ar_name" => "الكاف الأخضر",
        "longitude" => "35.9218925",
        "latitude" => "3.1958172"
    ],
    [
        "id" => "916",
        "code_postal" => "26018",
        "city_name" => "Chelalet El Adhaoura",
        "wilaya_id" => "26",
        "ar_name" => "شلالة العذاورة",
        "longitude" => "35.9605086",
        "latitude" => "3.3358071"
    ],
    [
        "id" => "917",
        "code_postal" => "26019",
        "city_name" => "Bouskene",
        "wilaya_id" => "26",
        "ar_name" => "بوسكن",
        "longitude" => "36.1950571",
        "latitude" => "3.1348775"
    ],
    [
        "id" => "918",
        "code_postal" => "26020",
        "city_name" => "Rebaia",
        "wilaya_id" => "26",
        "ar_name" => "الربعية",
        "longitude" => "36.0223957",
        "latitude" => "3.0759976"
    ],
    [
        "id" => "919",
        "code_postal" => "26021",
        "city_name" => "Bouchrahil",
        "wilaya_id" => "26",
        "ar_name" => "بوشراحيل",
        "longitude" => "36.2735556",
        "latitude" => "3.1350492"
    ],
    [
        "id" => "920",
        "code_postal" => "26022",
        "city_name" => "Ouled Hellal",
        "wilaya_id" => "26",
        "ar_name" => "أولاد هلال",
        "longitude" => "36.0034964",
        "latitude" => "2.3924341"
    ],
    [
        "id" => "921",
        "code_postal" => "26023",
        "city_name" => "Tafraout",
        "wilaya_id" => "26",
        "ar_name" => "تافراوت",
        "longitude" => "35.9953336",
        "latitude" => "3.2743524"
    ],
    [
        "id" => "922",
        "code_postal" => "26024",
        "city_name" => "Baata",
        "wilaya_id" => "26",
        "ar_name" => "بعطة",
        "longitude" => "36.3720772",
        "latitude" => "3.059561"
    ],
    [
        "id" => "923",
        "code_postal" => "26025",
        "city_name" => "Boghar",
        "wilaya_id" => "26",
        "ar_name" => "بوغار",
        "longitude" => "35.9371699",
        "latitude" => "2.6326821"
    ],
    [
        "id" => "924",
        "code_postal" => "26026",
        "city_name" => "Sidi Naamane",
        "wilaya_id" => "26",
        "ar_name" => "سيدي نعمان",
        "longitude" => "36.2654589",
        "latitude" => "3.0135987"
    ],
    [
        "id" => "925",
        "code_postal" => "26027",
        "city_name" => "Ouled Bouachra",
        "wilaya_id" => "26",
        "ar_name" => "أولاد بوعشرة",
        "longitude" => "36.0987018",
        "latitude" => "2.6346133"
    ],
    [
        "id" => "926",
        "code_postal" => "26028",
        "city_name" => "Sidi Zahar",
        "wilaya_id" => "26",
        "ar_name" => "سيدي زهار",
        "longitude" => "36.0709876",
        "latitude" => "3.2656834"
    ],
    [
        "id" => "927",
        "code_postal" => "26029",
        "city_name" => "Oued Harbil",
        "wilaya_id" => "26",
        "ar_name" => "وادي حربيل",
        "longitude" => "36.2397747",
        "latitude" => "2.5734161"
    ],
    [
        "id" => "928",
        "code_postal" => "26030",
        "city_name" => "Benchicao",
        "wilaya_id" => "26",
        "ar_name" => "بن شكاو",
        "longitude" => "36.1913329",
        "latitude" => "2.7682088"
    ],
    [
        "id" => "929",
        "code_postal" => "26031",
        "city_name" => "Sidi Damed",
        "wilaya_id" => "26",
        "ar_name" => "سيدي دامد",
        "longitude" => "35.8219378",
        "latitude" => "3.2306644"
    ],
    [
        "id" => "930",
        "code_postal" => "26032",
        "city_name" => "Aziz",
        "wilaya_id" => "26",
        "ar_name" => "عزيز",
        "longitude" => "35.7544258",
        "latitude" => "2.2227155"
    ],
    [
        "id" => "931",
        "code_postal" => "26033",
        "city_name" => "Souagui",
        "wilaya_id" => "26",
        "ar_name" => "السواڨي",
        "longitude" => "36.1114893",
        "latitude" => "3.1635449"
    ],
    [
        "id" => "932",
        "code_postal" => "26034",
        "city_name" => "Zoubiria",
        "wilaya_id" => "26",
        "ar_name" => "الزبيرية",
        "longitude" => "36.065692",
        "latitude" => "2.7869199"
    ],
    [
        "id" => "933",
        "code_postal" => "26035",
        "city_name" => "Ksar El Boukhari",
        "wilaya_id" => "26",
        "ar_name" => "قصر البخاري",
        "longitude" => "35.8750361",
        "latitude" => "2.6861545"
    ],
    [
        "id" => "934",
        "code_postal" => "26036",
        "city_name" => "El Azizia",
        "wilaya_id" => "26",
        "ar_name" => "العزيزية",
        "longitude" => "36.3151797",
        "latitude" => "3.4549421"
    ],
    [
        "id" => "935",
        "code_postal" => "26037",
        "city_name" => "Djouab",
        "wilaya_id" => "26",
        "ar_name" => "جواب",
        "longitude" => "36.1117003",
        "latitude" => "3.3535741"
    ],
    [
        "id" => "936",
        "code_postal" => "26038",
        "city_name" => "Chahbounia",
        "wilaya_id" => "26",
        "ar_name" => "الشهبونية",
        "longitude" => "35.5846723",
        "latitude" => "2.4968901"
    ],
    [
        "id" => "937",
        "code_postal" => "26039",
        "city_name" => "Meghraoua",
        "wilaya_id" => "26",
        "ar_name" => "مغراوة",
        "longitude" => "36.3822217",
        "latitude" => "3.4680723"
    ],
    [
        "id" => "938",
        "code_postal" => "26040",
        "city_name" => "Cheniguel",
        "wilaya_id" => "26",
        "ar_name" => "شنيڨل",
        "longitude" => "35.9572465",
        "latitude" => "3.4658406"
    ],
    [
        "id" => "939",
        "code_postal" => "26041",
        "city_name" => "Ain Ouksir",
        "wilaya_id" => "26",
        "ar_name" => "عين القصير",
        "longitude" => "35.7760055",
        "latitude" => "3.3282462"
    ],
    [
        "id" => "940",
        "code_postal" => "26042",
        "city_name" => "Oum El Djalil",
        "wilaya_id" => "26",
        "ar_name" => "أم الجليل",
        "longitude" => "35.8304434",
        "latitude" => "2.6069329"
    ],
    [
        "id" => "941",
        "code_postal" => "26043",
        "city_name" => "Ouamri",
        "wilaya_id" => "26",
        "ar_name" => "عوامري",
        "longitude" => "36.2537814",
        "latitude" => "2.4798606"
    ],
    [
        "id" => "942",
        "code_postal" => "26044",
        "city_name" => "Si Mahdjoub",
        "wilaya_id" => "26",
        "ar_name" => "سى المحجوب",
        "longitude" => "36.1691158",
        "latitude" => "2.7172917"
    ],
    [
        "id" => "943",
        "code_postal" => "26045",
        "city_name" => "Tlatet Eddouair",
        "wilaya_id" => "26",
        "ar_name" => "ثلاثة الدوائر",
        "longitude" => "35.9963494",
        "latitude" => "2.8731719"
    ],
    [
        "id" => "944",
        "code_postal" => "26046",
        "city_name" => "Beni Slimane",
        "wilaya_id" => "26",
        "ar_name" => "بني سليمان",
        "longitude" => "36.2181313",
        "latitude" => "3.2412217"
    ],
    [
        "id" => "945",
        "code_postal" => "26047",
        "city_name" => "Berrouaghia",
        "wilaya_id" => "26",
        "ar_name" => "البرواڨية",
        "longitude" => "36.1528037",
        "latitude" => "2.8436539"
    ],
    [
        "id" => "946",
        "code_postal" => "26048",
        "city_name" => "Seghouane",
        "wilaya_id" => "26",
        "ar_name" => "سغوان",
        "longitude" => "35.9968593",
        "latitude" => "2.8356717"
    ],
    [
        "id" => "947",
        "code_postal" => "26049",
        "city_name" => "Meftaha",
        "wilaya_id" => "26",
        "ar_name" => "المفاتحة",
        "longitude" => "35.8821773",
        "latitude" => "2.8140852"
    ],
    [
        "id" => "948",
        "code_postal" => "26050",
        "city_name" => "Mihoub",
        "wilaya_id" => "26",
        "ar_name" => "ميهوب",
        "longitude" => "36.3861353",
        "latitude" => "3.3691094"
    ],
    [
        "id" => "949",
        "code_postal" => "26051",
        "city_name" => "Boughezoul",
        "wilaya_id" => "26",
        "ar_name" => "بوغزول",
        "longitude" => "35.6795297",
        "latitude" => "2.6264943"
    ],
    [
        "id" => "950",
        "code_postal" => "26052",
        "city_name" => "Tablat",
        "wilaya_id" => "26",
        "ar_name" => "تابلاط",
        "longitude" => "36.4231476",
        "latitude" => "3.2734726"
    ],
    [
        "id" => "951",
        "code_postal" => "26053",
        "city_name" => "Deux Bassins",
        "wilaya_id" => "26",
        "ar_name" => "فج الحوضين",
        "longitude" => "36.4676678",
        "latitude" => "3.2670586"
    ],
    [
        "id" => "952",
        "code_postal" => "26054",
        "city_name" => "Draa Essamar",
        "wilaya_id" => "26",
        "ar_name" => "ذراع السمار",
        "longitude" => "36.2689828",
        "latitude" => "2.6257727"
    ],
    [
        "id" => "953",
        "code_postal" => "26055",
        "city_name" => "Sidi Errabia",
        "wilaya_id" => "26",
        "ar_name" => "سيدي الربيع",
        "longitude" => "36.282548",
        "latitude" => "3.2951253"
    ],
    [
        "id" => "954",
        "code_postal" => "26056",
        "city_name" => "Bir Ben Laabed",
        "wilaya_id" => "26",
        "ar_name" => "بئر بن العابد",
        "longitude" => "36.1905774",
        "latitude" => "3.3408711"
    ],
    [
        "id" => "955",
        "code_postal" => "26057",
        "city_name" => "El Ouinet",
        "wilaya_id" => "26",
        "ar_name" => "العوينات",
        "longitude" => "35.8638348",
        "latitude" => "2.9963896"
    ],
    [
        "id" => "956",
        "code_postal" => "26058",
        "city_name" => "Ouled Antar",
        "wilaya_id" => "26",
        "ar_name" => "أولاد عنتر",
        "longitude" => "35.9546472",
        "latitude" => "2.5264159"
    ],
    [
        "id" => "957",
        "code_postal" => "26059",
        "city_name" => "Bouaichoune",
        "wilaya_id" => "26",
        "ar_name" => "بوعيشون",
        "longitude" => "36.1351828",
        "latitude" => "2.5703691"
    ],
    [
        "id" => "958",
        "code_postal" => "26060",
        "city_name" => "Hannacha",
        "wilaya_id" => "26",
        "ar_name" => "حناشة",
        "longitude" => "36.1693058",
        "latitude" => "2.5216172"
    ],
    [
        "id" => "959",
        "code_postal" => "26061",
        "city_name" => "Sedraia",
        "wilaya_id" => "26",
        "ar_name" => "سدراية",
        "longitude" => "36.2330914",
        "latitude" => "3.4389756"
    ],
    [
        "id" => "960",
        "code_postal" => "26062",
        "city_name" => "Medjebar",
        "wilaya_id" => "26",
        "ar_name" => "مجبر",
        "longitude" => "35.9562974",
        "latitude" => "2.7541324"
    ],
    [
        "id" => "961",
        "code_postal" => "26063",
        "city_name" => "Khams Djouamaa",
        "wilaya_id" => "26",
        "ar_name" => "خمس جوامع",
        "longitude" => "36.1478178",
        "latitude" => "3.0538534"
    ],
    [
        "id" => "962",
        "code_postal" => "26064",
        "city_name" => "Saneg",
        "wilaya_id" => "26",
        "ar_name" => "سانڨ",
        "longitude" => "35.8406053",
        "latitude" => "2.760999"
    ],
    [
        "id" => "963",
        "code_postal" => "27001",
        "city_name" => "Mostaganem",
        "wilaya_id" => "27",
        "ar_name" => "مستغانم",
        "longitude" => "35.9751637",
        "latitude" => "0.0448868"
    ],
    [
        "id" => "964",
        "code_postal" => "27002",
        "city_name" => "Sayada",
        "wilaya_id" => "27",
        "ar_name" => "صيادة",
        "longitude" => "35.9321147",
        "latitude" => "0.0894758"
    ],
    [
        "id" => "965",
        "code_postal" => "27003",
        "city_name" => "Fornaka",
        "wilaya_id" => "27",
        "ar_name" => "فرناكة",
        "longitude" => "35.7604979",
        "latitude" => "-0.0327569"
    ],
    [
        "id" => "966",
        "code_postal" => "27004",
        "city_name" => "Stidia",
        "wilaya_id" => "27",
        "ar_name" => "ستيدية",
        "longitude" => "35.8286516",
        "latitude" => "-0.0143553"
    ],
    [
        "id" => "967",
        "code_postal" => "27005",
        "city_name" => "Ain Nouissy",
        "wilaya_id" => "27",
        "ar_name" => "عين نويسي",
        "longitude" => "35.8032737",
        "latitude" => "0.0398253"
    ],
    [
        "id" => "968",
        "code_postal" => "27006",
        "city_name" => "Hassi Maameche",
        "wilaya_id" => "27",
        "ar_name" => "حاسي مماش",
        "longitude" => "35.8606343",
        "latitude" => "0.0229141"
    ],
    [
        "id" => "969",
        "code_postal" => "27007",
        "city_name" => "Ain Tadles",
        "wilaya_id" => "27",
        "ar_name" => "عين تادلس",
        "longitude" => "35.9940136",
        "latitude" => "0.2932405"
    ],
    [
        "id" => "970",
        "code_postal" => "27008",
        "city_name" => "Sour",
        "wilaya_id" => "27",
        "ar_name" => "صور",
        "longitude" => "36.0006026",
        "latitude" => "0.3356516"
    ],
    [
        "id" => "971",
        "code_postal" => "27009",
        "city_name" => "Oued El Kheir",
        "wilaya_id" => "27",
        "ar_name" => "واد الخير",
        "longitude" => "35.9498792",
        "latitude" => "0.3768825"
    ],
    [
        "id" => "972",
        "code_postal" => "27010",
        "city_name" => "Sidi Bellater",
        "wilaya_id" => "27",
        "ar_name" => "سيدي بلعاتر",
        "longitude" => "36.0267851",
        "latitude" => "0.2672123"
    ],
    [
        "id" => "973",
        "code_postal" => "27011",
        "city_name" => "Kheiredine",
        "wilaya_id" => "27",
        "ar_name" => "خير الدين",
        "longitude" => "35.9549081",
        "latitude" => "0.1016209"
    ],
    [
        "id" => "974",
        "code_postal" => "27012",
        "city_name" => "Sidi Ali",
        "wilaya_id" => "27",
        "ar_name" => "سيدي علي",
        "longitude" => "36.0968612",
        "latitude" => "0.3972458"
    ],
    [
        "id" => "975",
        "code_postal" => "27013",
        "city_name" => "Abdelmalek Ramdane",
        "wilaya_id" => "27",
        "ar_name" => "عبد المالك رمضان",
        "longitude" => "36.1034611",
        "latitude" => "0.2672312"
    ],
    [
        "id" => "976",
        "code_postal" => "27014",
        "city_name" => "Hadjadj",
        "wilaya_id" => "27",
        "ar_name" => "حجاج",
        "longitude" => "36.0963942",
        "latitude" => "0.3163505"
    ],
    [
        "id" => "977",
        "code_postal" => "27015",
        "city_name" => "Nekmaria",
        "wilaya_id" => "27",
        "ar_name" => "نقمارية",
        "longitude" => "36.1880382",
        "latitude" => "0.6165754"
    ],
    [
        "id" => "978",
        "code_postal" => "27016",
        "city_name" => "Sidi Lakhdar",
        "wilaya_id" => "27",
        "ar_name" => "سيدي لخضر",
        "longitude" => "36.1633785",
        "latitude" => "0.4315995"
    ],
    [
        "id" => "979",
        "code_postal" => "27017",
        "city_name" => "Achaacha",
        "wilaya_id" => "27",
        "ar_name" => "عشعاشة",
        "longitude" => "36.2449302",
        "latitude" => "0.6235599"
    ],
    [
        "id" => "980",
        "code_postal" => "27018",
        "city_name" => "Khadra",
        "wilaya_id" => "27",
        "ar_name" => "خضراء",
        "longitude" => "36.2538598",
        "latitude" => "0.5688214"
    ],
    [
        "id" => "981",
        "code_postal" => "27019",
        "city_name" => "Bouguirat",
        "wilaya_id" => "27",
        "ar_name" => "بوقيراط",
        "longitude" => "35.751283",
        "latitude" => "0.2465079"
    ],
    [
        "id" => "982",
        "code_postal" => "27020",
        "city_name" => "Sirat",
        "wilaya_id" => "27",
        "ar_name" => "سيرات",
        "longitude" => "35.780582",
        "latitude" => "0.183571"
    ],
    [
        "id" => "983",
        "code_postal" => "27021",
        "city_name" => "Ain Sidi Cherif",
        "wilaya_id" => "27",
        "ar_name" => "عين سيدي شريف",
        "longitude" => "35.8358105",
        "latitude" => "0.1163113"
    ],
    [
        "id" => "984",
        "code_postal" => "27022",
        "city_name" => "Mesra",
        "wilaya_id" => "27",
        "ar_name" => "ماسرة",
        "longitude" => "35.8389326",
        "latitude" => "0.1574992"
    ],
    [
        "id" => "985",
        "code_postal" => "27023",
        "city_name" => "Mansourah",
        "wilaya_id" => "27",
        "ar_name" => "منصورة",
        "longitude" => "35.8432384",
        "latitude" => "0.2285671"
    ],
    [
        "id" => "986",
        "code_postal" => "27024",
        "city_name" => "Souaflia",
        "wilaya_id" => "27",
        "ar_name" => "سوافلية",
        "longitude" => "35.8616131",
        "latitude" => "0.3271866"
    ],
    [
        "id" => "987",
        "code_postal" => "27025",
        "city_name" => "Ouled Boughalem",
        "wilaya_id" => "27",
        "ar_name" => "أوالد بوغالم",
        "longitude" => "36.3160232",
        "latitude" => "0.661025"
    ],
    [
        "id" => "988",
        "code_postal" => "27026",
        "city_name" => "Ouled Maallah",
        "wilaya_id" => "27",
        "ar_name" => "أولاد مع اللّه",
        "longitude" => "36.0072076",
        "latitude" => "0.5870175"
    ],
    [
        "id" => "989",
        "code_postal" => "27027",
        "city_name" => "Mezghrane",
        "wilaya_id" => "27",
        "ar_name" => "مزغران",
        "longitude" => "35.8844492",
        "latitude" => "0.0250619"
    ],
    [
        "id" => "990",
        "code_postal" => "27028",
        "city_name" => "Ain Boudinar",
        "wilaya_id" => "27",
        "ar_name" => "عين بودينار",
        "longitude" => "36.0091691",
        "latitude" => "0.1825405"
    ],
    [
        "id" => "991",
        "code_postal" => "27029",
        "city_name" => "Tazgait",
        "wilaya_id" => "27",
        "ar_name" => "تزقايت",
        "longitude" => "36.0944945",
        "latitude" => "0.5438018"
    ],
    [
        "id" => "992",
        "code_postal" => "27030",
        "city_name" => "Safsaf",
        "wilaya_id" => "27",
        "ar_name" => "صفصاف",
        "longitude" => "35.8436642",
        "latitude" => "0.3698229"
    ],
    [
        "id" => "993",
        "code_postal" => "27031",
        "city_name" => "Touahria",
        "wilaya_id" => "27",
        "ar_name" => "طواھيرية",
        "longitude" => "35.8109224",
        "latitude" => "0.2054358"
    ],
    [
        "id" => "994",
        "code_postal" => "27032",
        "city_name" => "El Hassiane",
        "wilaya_id" => "27",
        "ar_name" => "الحسيان",
        "longitude" => "35.7530845",
        "latitude" => "0.1155925"
    ],
    [
        "id" => "995",
        "code_postal" => "28001",
        "city_name" => "Msila",
        "wilaya_id" => "28",
        "ar_name" => "المسيلة",
        "longitude" => "35.7210664",
        "latitude" => "4.3786421"
    ],
    [
        "id" => "996",
        "code_postal" => "28002",
        "city_name" => "Maadid",
        "wilaya_id" => "28",
        "ar_name" => "المعاضيد",
        "longitude" => "35.7973219",
        "latitude" => "4.6873829"
    ],
    [
        "id" => "997",
        "code_postal" => "28003",
        "city_name" => "Hammam Dhalaa",
        "wilaya_id" => "28",
        "ar_name" => "حمـام الضلعة",
        "longitude" => "35.9303231",
        "latitude" => "4.2004576"
    ],
    [
        "id" => "998",
        "code_postal" => "28004",
        "city_name" => "Ouled Derradj",
        "wilaya_id" => "28",
        "ar_name" => "أولاد دراج",
        "longitude" => "35.6715243",
        "latitude" => "4.6290103"
    ],
    [
        "id" => "999",
        "code_postal" => "28005",
        "city_name" => "Tarmount",
        "wilaya_id" => "28",
        "ar_name" => "تارمونت",
        "longitude" => "35.8174498",
        "latitude" => "4.1865609"
    ],
    [
        "id" => "1000",
        "code_postal" => "28006",
        "city_name" => "Mtarfa",
        "wilaya_id" => "28",
        "ar_name" => "مطارفة",
        "longitude" => "35.6887798",
        "latitude" => "4.5064011"
    ],
    [
        "id" => "1001",
        "code_postal" => "28007",
        "city_name" => "Khoubana",
        "wilaya_id" => "28",
        "ar_name" => "خبانة",
        "longitude" => "35.3114022",
        "latitude" => "4.3378725"
    ],
    [
        "id" => "1002",
        "code_postal" => "28008",
        "city_name" => "M'cif",
        "wilaya_id" => "28",
        "ar_name" => "مسيف",
        "longitude" => "35.315",
        "latitude" => "4.5858374"
    ],
    [
        "id" => "1003",
        "code_postal" => "28009",
        "city_name" => "Chellal",
        "wilaya_id" => "28",
        "ar_name" => "شلال",
        "longitude" => "35.5134267",
        "latitude" => "4.2335024"
    ],
    [
        "id" => "1004",
        "code_postal" => "28010",
        "city_name" => "Ouled Madhi",
        "wilaya_id" => "28",
        "ar_name" => "أولاد مـاضي",
        "longitude" => "35.524776",
        "latitude" => "4.4095411"
    ],
    [
        "id" => "1005",
        "code_postal" => "28011",
        "city_name" => "Magra",
        "wilaya_id" => "28",
        "ar_name" => "مقرة",
        "longitude" => "35.6076161",
        "latitude" => "4.9762812"
    ],
    [
        "id" => "1006",
        "code_postal" => "28012",
        "city_name" => "Berhoum",
        "wilaya_id" => "28",
        "ar_name" => "برهوم",
        "longitude" => "35.6351693",
        "latitude" => "4.9263356"
    ],
    [
        "id" => "1007",
        "code_postal" => "28013",
        "city_name" => "Ain Khadra",
        "wilaya_id" => "28",
        "ar_name" => "عين الخضراء",
        "longitude" => "35.5456141",
        "latitude" => "4.8777554"
    ],
    [
        "id" => "1008",
        "code_postal" => "28014",
        "city_name" => "Ouled Addi Guebala",
        "wilaya_id" => "28",
        "ar_name" => "اولاد عدي لقبالة",
        "longitude" => "35.676541",
        "latitude" => "4.7484866"
    ],
    [
        "id" => "1009",
        "code_postal" => "28015",
        "city_name" => "Belaiba",
        "wilaya_id" => "28",
        "ar_name" => "بلعايبة",
        "longitude" => "35.5682674",
        "latitude" => "5.1394531"
    ],
    [
        "id" => "1010",
        "code_postal" => "28016",
        "city_name" => "Sidi Aissa",
        "wilaya_id" => "28",
        "ar_name" => "سيدي عيسى",
        "longitude" => "35.8255783",
        "latitude" => "3.6556044"
    ],
    [
        "id" => "1011",
        "code_postal" => "28017",
        "city_name" => "Ain El Hadjel",
        "wilaya_id" => "28",
        "ar_name" => "عين الحجل",
        "longitude" => "35.6184864",
        "latitude" => "3.6830434"
    ],
    [
        "id" => "1012",
        "code_postal" => "28018",
        "city_name" => "Sidi Hadjeres",
        "wilaya_id" => "28",
        "ar_name" => "سيدي ھجرس",
        "longitude" => "35.7020457",
        "latitude" => "3.7978373"
    ],
    [
        "id" => "1013",
        "code_postal" => "28019",
        "city_name" => "Ouanougha",
        "wilaya_id" => "28",
        "ar_name" => "ونوغة",
        "longitude" => "35.9310253",
        "latitude" => "4.041585"
    ],
    [
        "id" => "1014",
        "code_postal" => "28020",
        "city_name" => "Bou Saada",
        "wilaya_id" => "28",
        "ar_name" => "بوسعادة",
        "longitude" => "35.2131065",
        "latitude" => "4.0429152"
    ],
    [
        "id" => "1015",
        "code_postal" => "28021",
        "city_name" => "Ouled Sidi Brahim",
        "wilaya_id" => "28",
        "ar_name" => "أولاد سيدي ابراهيم",
        "longitude" => "35.3495826",
        "latitude" => "3.9983262"
    ],
    [
        "id" => "1016",
        "code_postal" => "28022",
        "city_name" => "Sidi Ameur",
        "wilaya_id" => "28",
        "ar_name" => "سيدي عامر",
        "longitude" => "35.3659746",
        "latitude" => "3.6834134"
    ],
    [
        "id" => "1017",
        "code_postal" => "28023",
        "city_name" => "Tamsa",
        "wilaya_id" => "28",
        "ar_name" => "تامسة",
        "longitude" => "35.2027774",
        "latitude" => "3.7451258"
    ],
    [
        "id" => "1018",
        "code_postal" => "28024",
        "city_name" => "Ben Srour",
        "wilaya_id" => "28",
        "ar_name" => "بن سرور",
        "longitude" => "34.9930313",
        "latitude" => "4.4258488"
    ],
    [
        "id" => "1019",
        "code_postal" => "28025",
        "city_name" => "Ouled Slimane",
        "wilaya_id" => "28",
        "ar_name" => "أولاد سليمان",
        "longitude" => "34.9246808",
        "latitude" => "4.7197332"
    ],
    [
        "id" => "1020",
        "code_postal" => "28026",
        "city_name" => "El Houamed",
        "wilaya_id" => "28",
        "ar_name" => "الحوامد",
        "longitude" => "35.1664895",
        "latitude" => "4.3637934"
    ],
    [
        "id" => "1021",
        "code_postal" => "28027",
        "city_name" => "El Hamel",
        "wilaya_id" => "28",
        "ar_name" => "الهامل",
        "longitude" => "35.1212832",
        "latitude" => "3.9996217"
    ],
    [
        "id" => "1022",
        "code_postal" => "28028",
        "city_name" => "Ouled Mansour",
        "wilaya_id" => "28",
        "ar_name" => "أولاد منصور",
        "longitude" => "35.7319531",
        "latitude" => "4.2625131"
    ],
    [
        "id" => "1023",
        "code_postal" => "28029",
        "city_name" => "Maarif",
        "wilaya_id" => "28",
        "ar_name" => "المعاريف",
        "longitude" => "35.360452",
        "latitude" => "4.1652669"
    ],
    [
        "id" => "1024",
        "code_postal" => "28030",
        "city_name" => "Dehahna",
        "wilaya_id" => "28",
        "ar_name" => "الدهاهنة",
        "longitude" => "35.7328552",
        "latitude" => "4.9668048"
    ],
    [
        "id" => "1025",
        "code_postal" => "28031",
        "city_name" => "Bouti Sayah",
        "wilaya_id" => "28",
        "ar_name" => "بوطي السايح",
        "longitude" => "35.6757367",
        "latitude" => "3.4628716"
    ],
    [
        "id" => "1026",
        "code_postal" => "28032",
        "city_name" => "Khettouti Sed Djir",
        "wilaya_id" => "28",
        "ar_name" => "خطوطي سد الجير",
        "longitude" => "35.679121",
        "latitude" => "4.0557899"
    ],
    [
        "id" => "1027",
        "code_postal" => "28033",
        "city_name" => "Zarzour",
        "wilaya_id" => "28",
        "ar_name" => "الزرزور",
        "longitude" => "35.0536128",
        "latitude" => "4.7163"
    ],
    [
        "id" => "1028",
        "code_postal" => "28034",
        "city_name" => "Oued Chair",
        "wilaya_id" => "28",
        "ar_name" => "محمد بوضياف",
        "longitude" => "34.8994154",
        "latitude" => "4.3559827"
    ],
    [
        "id" => "1029",
        "code_postal" => "28035",
        "city_name" => "Benzouh",
        "wilaya_id" => "28",
        "ar_name" => "بن الزوه",
        "longitude" => "35.4561038",
        "latitude" => "3.9870825"
    ],
    [
        "id" => "1030",
        "code_postal" => "28036",
        "city_name" => "Bir Foda",
        "wilaya_id" => "28",
        "ar_name" => "بير الفضة",
        "longitude" => "34.8183094",
        "latitude" => "3.7172307"
    ],
    [
        "id" => "1031",
        "code_postal" => "28037",
        "city_name" => "Ain Fares",
        "wilaya_id" => "28",
        "ar_name" => "عين فارس",
        "longitude" => "34.742717",
        "latitude" => "4.3576134"
    ],
    [
        "id" => "1032",
        "code_postal" => "28038",
        "city_name" => "Sidi Mhamed",
        "wilaya_id" => "28",
        "ar_name" => "سيدي محمد",
        "longitude" => "34.7726262",
        "latitude" => "4.1440667"
    ],
    [
        "id" => "1033",
        "code_postal" => "28039",
        "city_name" => "Ouled Atia",
        "wilaya_id" => "28",
        "ar_name" => "منعة",
        "longitude" => "35.1324378",
        "latitude" => "3.455394"
    ],
    [
        "id" => "1034",
        "code_postal" => "28040",
        "city_name" => "Souamaa",
        "wilaya_id" => "28",
        "ar_name" => "الصوامع",
        "longitude" => "35.5173258",
        "latitude" => "4.5889058"
    ],
    [
        "id" => "1035",
        "code_postal" => "28041",
        "city_name" => "Ain El Melh",
        "wilaya_id" => "28",
        "ar_name" => "عين الملح",
        "longitude" => "34.7887663",
        "latitude" => "4.0208139"
    ],
    [
        "id" => "1036",
        "code_postal" => "28042",
        "city_name" => "Medjedel",
        "wilaya_id" => "28",
        "ar_name" => "مجدل",
        "longitude" => "35.0618873",
        "latitude" => "3.3440071"
    ],
    [
        "id" => "1037",
        "code_postal" => "28043",
        "city_name" => "Slim",
        "wilaya_id" => "28",
        "ar_name" => "سليم",
        "longitude" => "34.9545036",
        "latitude" => "3.7464989"
    ],
    [
        "id" => "1038",
        "code_postal" => "28044",
        "city_name" => "Ain Errich",
        "wilaya_id" => "28",
        "ar_name" => "عين الريش",
        "longitude" => "34.4919894",
        "latitude" => "3.8159469"
    ],
    [
        "id" => "1039",
        "code_postal" => "28045",
        "city_name" => "Beni Ilmane",
        "wilaya_id" => "28",
        "ar_name" => "بنى يلمان",
        "longitude" => "35.9460168",
        "latitude" => "3.934125"
    ],
    [
        "id" => "1040",
        "code_postal" => "28046",
        "city_name" => "Oultene",
        "wilaya_id" => "28",
        "ar_name" => "ولتام",
        "longitude" => "35.1127067",
        "latitude" => "4.1979763"
    ],
    [
        "id" => "1041",
        "code_postal" => "28047",
        "city_name" => "Djebel Messaad",
        "wilaya_id" => "28",
        "ar_name" => "جبل مساعد",
        "longitude" => "34.9863778",
        "latitude" => "4.0131749"
    ],
    [
        "id" => "1042",
        "code_postal" => "29001",
        "city_name" => "Mascara",
        "wilaya_id" => "29",
        "ar_name" => "مـعـسـكـر",
        "longitude" => "35.3185",
        "latitude" => "0.1511"
    ],
    [
        "id" => "1043",
        "code_postal" => "29002",
        "city_name" => "Bou Hanifia",
        "wilaya_id" => "29",
        "ar_name" => "بوحنيفية",
        "longitude" => "35.2512",
        "latitude" => "-0.0494"
    ],
    [
        "id" => "1044",
        "code_postal" => "29003",
        "city_name" => "Tizi",
        "wilaya_id" => "29",
        "ar_name" => "تيزي",
        "longitude" => "35.2512",
        "latitude" => "0.0714"
    ],
    [
        "id" => "1045",
        "code_postal" => "29004",
        "city_name" => "Hacine",
        "wilaya_id" => "29",
        "ar_name" => "حسين",
        "longitude" => "35.3969",
        "latitude" => "-0.0055"
    ],
    [
        "id" => "1046",
        "code_postal" => "29005",
        "city_name" => "Maoussa",
        "wilaya_id" => "29",
        "ar_name" => "ماوسة",
        "longitude" => "35.314",
        "latitude" => "0.2472"
    ],
    [
        "id" => "1047",
        "code_postal" => "29006",
        "city_name" => "Teghennif",
        "wilaya_id" => "29",
        "ar_name" => "تيغنيف",
        "longitude" => "35.3521",
        "latitude" => "0.3323"
    ],
    [
        "id" => "1048",
        "code_postal" => "29007",
        "city_name" => "El Hachem",
        "wilaya_id" => "29",
        "ar_name" => "الهاشم",
        "longitude" => "35.3028",
        "latitude" => "0.4834"
    ],
    [
        "id" => "1049",
        "code_postal" => "29008",
        "city_name" => "Sidi Kada",
        "wilaya_id" => "29",
        "ar_name" => "سيدي قادة",
        "longitude" => "35.2692",
        "latitude" => "0.3488"
    ],
    [
        "id" => "1050",
        "code_postal" => "29009",
        "city_name" => "Zelmata",
        "wilaya_id" => "29",
        "ar_name" => "زلماطة",
        "longitude" => "35.2266",
        "latitude" => "0.4752"
    ],
    [
        "id" => "1051",
        "code_postal" => "29010",
        "city_name" => "Oued El Abtal",
        "wilaya_id" => "29",
        "ar_name" => "واد الأبطال",
        "longitude" => "35.3924",
        "latitude" => "0.6894"
    ],
    [
        "id" => "1052",
        "code_postal" => "29011",
        "city_name" => "Ain Ferah",
        "wilaya_id" => "29",
        "ar_name" => "عين فراح",
        "longitude" => "35.3162",
        "latitude" => "0.7828"
    ],
    [
        "id" => "1053",
        "code_postal" => "29012",
        "city_name" => "Ghriss",
        "wilaya_id" => "29",
        "ar_name" => "غريس",
        "longitude" => "35.1839",
        "latitude" => "0.162"
    ],
    [
        "id" => "1054",
        "code_postal" => "29013",
        "city_name" => "Froha",
        "wilaya_id" => "29",
        "ar_name" => "فروحة",
        "longitude" => "35.24",
        "latitude" => "0.1263"
    ],
    [
        "id" => "1055",
        "code_postal" => "29014",
        "city_name" => "Matemore",
        "wilaya_id" => "29",
        "ar_name" => "مطمور",
        "longitude" => "35.2624",
        "latitude" => "0.2142"
    ],
    [
        "id" => "1056",
        "code_postal" => "29015",
        "city_name" => "Makdha",
        "wilaya_id" => "29",
        "ar_name" => "ماقضة",
        "longitude" => "35.1076",
        "latitude" => "0.2966"
    ],
    [
        "id" => "1057",
        "code_postal" => "29016",
        "city_name" => "Sidi Boussaid",
        "wilaya_id" => "29",
        "ar_name" => "سيدي بوسعيد",
        "longitude" => "35.2266",
        "latitude" => "0.2966"
    ],
    [
        "id" => "1058",
        "code_postal" => "29017",
        "city_name" => "El Bordj",
        "wilaya_id" => "29",
        "ar_name" => "البرج",
        "longitude" => "35.4528",
        "latitude" => "0.3021"
    ],
    [
        "id" => "1059",
        "code_postal" => "29018",
        "city_name" => "Ain Fekan",
        "wilaya_id" => "29",
        "ar_name" => "عين فكان",
        "longitude" => "35.1615",
        "latitude" => "-0.0027"
    ],
    [
        "id" => "1060",
        "code_postal" => "29019",
        "city_name" => "Benian",
        "wilaya_id" => "29",
        "ar_name" => "بنيان",
        "longitude" => "35.0356",
        "latitude" => "0.2307"
    ],
    [
        "id" => "1061",
        "code_postal" => "29020",
        "city_name" => "Khalouia",
        "wilaya_id" => "29",
        "ar_name" => "خلوية",
        "longitude" => "35.3991",
        "latitude" => "0.2966"
    ],
    [
        "id" => "1062",
        "code_postal" => "29021",
        "city_name" => "El Menaouer",
        "wilaya_id" => "29",
        "ar_name" => "المناور",
        "longitude" => "35.4797",
        "latitude" => "0.4037"
    ],
    [
        "id" => "1063",
        "code_postal" => "29022",
        "city_name" => "Oued Taria",
        "wilaya_id" => "29",
        "ar_name" => "واد التاغية",
        "longitude" => "35.0514",
        "latitude" => "0.0879"
    ],
    [
        "id" => "1064",
        "code_postal" => "29023",
        "city_name" => "Aouf",
        "wilaya_id" => "29",
        "ar_name" => "عوف",
        "longitude" => "35.0334",
        "latitude" => "0.3571"
    ],
    [
        "id" => "1065",
        "code_postal" => "29024",
        "city_name" => "Ain Fares",
        "wilaya_id" => "29",
        "ar_name" => "عين فارس",
        "longitude" => "35.417",
        "latitude" => "0.2444"
    ],
    [
        "id" => "1066",
        "code_postal" => "29025",
        "city_name" => "Ain Frass",
        "wilaya_id" => "29",
        "ar_name" => "عين فراس",
        "longitude" => "35.1255",
        "latitude" => "-0.1511"
    ],
    [
        "id" => "1067",
        "code_postal" => "29026",
        "city_name" => "Sig",
        "wilaya_id" => "29",
        "ar_name" => "سيڨ",
        "longitude" => "35.4685",
        "latitude" => "-0.184"
    ],
    [
        "id" => "1068",
        "code_postal" => "29027",
        "city_name" => "Oggaz",
        "wilaya_id" => "29",
        "ar_name" => "عقاز",
        "longitude" => "35.502",
        "latitude" => "-0.2664"
    ],
    [
        "id" => "1069",
        "code_postal" => "29028",
        "city_name" => "Alaimia",
        "wilaya_id" => "29",
        "ar_name" => "العلايمية",
        "longitude" => "35.6115",
        "latitude" => "-0.2197"
    ],
    [
        "id" => "1070",
        "code_postal" => "29029",
        "city_name" => "El Gaada",
        "wilaya_id" => "29",
        "ar_name" => "القعدة",
        "longitude" => "35.4685",
        "latitude" => "-0.184"
    ],
    [
        "id" => "1071",
        "code_postal" => "29030",
        "city_name" => "Zahana",
        "wilaya_id" => "29",
        "ar_name" => "زھانة",
        "longitude" => "35.4551",
        "latitude" => "-0.412"
    ],
    [
        "id" => "1072",
        "code_postal" => "29031",
        "city_name" => "Mohammadia",
        "wilaya_id" => "29",
        "ar_name" => "المحمدية",
        "longitude" => "35.5266",
        "latitude" => "0.0687"
    ],
    [
        "id" => "1073",
        "code_postal" => "29032",
        "city_name" => "Sidi Abdelmoumene",
        "wilaya_id" => "29",
        "ar_name" => "سيدي عبد المومن",
        "longitude" => "35.5713",
        "latitude" => "0.0522"
    ],
    [
        "id" => "1074",
        "code_postal" => "29033",
        "city_name" => "Ferraguig",
        "wilaya_id" => "29",
        "ar_name" => "فرقيق",
        "longitude" => "35.4685",
        "latitude" => "0.1538"
    ],
    [
        "id" => "1075",
        "code_postal" => "29034",
        "city_name" => "El Ghomri",
        "wilaya_id" => "29",
        "ar_name" => "الغمري",
        "longitude" => "35.6205",
        "latitude" => "0.2005"
    ],
    [
        "id" => "1076",
        "code_postal" => "29035",
        "city_name" => "Sedjerara",
        "wilaya_id" => "29",
        "ar_name" => "سجرارة",
        "longitude" => "35.6138",
        "latitude" => "0.3433"
    ],
    [
        "id" => "1077",
        "code_postal" => "29036",
        "city_name" => "Moctadouz",
        "wilaya_id" => "29",
        "ar_name" => "مقطع الدوز",
        "longitude" => "35.5356",
        "latitude" => "-0.0494"
    ],
    [
        "id" => "1078",
        "code_postal" => "29037",
        "city_name" => "Bou Henni",
        "wilaya_id" => "29",
        "ar_name" => "بوهني",
        "longitude" => "35.4976",
        "latitude" => "-0.0851"
    ],
    [
        "id" => "1079",
        "code_postal" => "29038",
        "city_name" => "Guettena",
        "wilaya_id" => "29",
        "ar_name" => "القيطنة",
        "longitude" => "35.3207",
        "latitude" => "-0.2032"
    ],
    [
        "id" => "1080",
        "code_postal" => "29039",
        "city_name" => "El Mamounia",
        "wilaya_id" => "29",
        "ar_name" => "المامونية",
        "longitude" => "35.3611",
        "latitude" => "0.1401"
    ],
    [
        "id" => "1081",
        "code_postal" => "29040",
        "city_name" => "El Keurt",
        "wilaya_id" => "29",
        "ar_name" => "الكرط",
        "longitude" => "35.3162",
        "latitude" => "0.0906"
    ],
    [
        "id" => "1082",
        "code_postal" => "29041",
        "city_name" => "Gharrous",
        "wilaya_id" => "29",
        "ar_name" => "غروس",
        "longitude" => "35.1323",
        "latitude" => "0.401"
    ],
    [
        "id" => "1083",
        "code_postal" => "29042",
        "city_name" => "Gherdjoum",
        "wilaya_id" => "29",
        "ar_name" => "ڤرجوم",
        "longitude" => "35.1143",
        "latitude" => "0.0714"
    ],
    [
        "id" => "1084",
        "code_postal" => "29043",
        "city_name" => "Chorfa",
        "wilaya_id" => "29",
        "ar_name" => "الشرفة",
        "longitude" => "35.3678",
        "latitude" => "-0.2444"
    ],
    [
        "id" => "1085",
        "code_postal" => "29044",
        "city_name" => "Ras Ain Amirouche",
        "wilaya_id" => "29",
        "ar_name" => "رأس العين عميروش",
        "longitude" => "35.5289",
        "latitude" => "-0.2115"
    ],
    [
        "id" => "1086",
        "code_postal" => "29045",
        "city_name" => "Nesmot",
        "wilaya_id" => "29",
        "ar_name" => "نسموط",
        "longitude" => "35.1862",
        "latitude" => "0.3845"
    ],
    [
        "id" => "1087",
        "code_postal" => "29046",
        "city_name" => "Sidi Abdeldjebar",
        "wilaya_id" => "29",
        "ar_name" => "سيدي عبد الجبار",
        "longitude" => "35.379",
        "latitude" => "0.5246"
    ],
    [
        "id" => "1088",
        "code_postal" => "29047",
        "city_name" => "Sehailia",
        "wilaya_id" => "29",
        "ar_name" => "سحايلية",
        "longitude" => "35.4484",
        "latitude" => "0.3818"
    ],
    [
        "id" => "1089",
        "code_postal" => "30001",
        "city_name" => "Ouargla",
        "wilaya_id" => "30",
        "ar_name" => "ورڨلة",
        "longitude" => "31.8974",
        "latitude" => "5.3421"
    ],
    [
        "id" => "1090",
        "code_postal" => "30002",
        "city_name" => "Ain Beida",
        "wilaya_id" => "30",
        "ar_name" => "عين البيضاء",
        "longitude" => "31.8717",
        "latitude" => "5.3888"
    ],
    [
        "id" => "1091",
        "code_postal" => "30003",
        "city_name" => "Ngoussa",
        "wilaya_id" => "30",
        "ar_name" => "نقوسة",
        "longitude" => "32.0744",
        "latitude" => "5.3091"
    ],
    [
        "id" => "1092",
        "code_postal" => "30004",
        "city_name" => "Hassi Messaoud",
        "wilaya_id" => "30",
        "ar_name" => "حاسي مسعود",
        "longitude" => "31.6148",
        "latitude" => "6.0727"
    ],
    [
        "id" => "1093",
        "code_postal" => "30005",
        "city_name" => "Rouissat",
        "wilaya_id" => "30",
        "ar_name" => "الرويسات",
        "longitude" => "31.8694",
        "latitude" => "5.3366"
    ],
    [
        "id" => "1094",
        "code_postal" => "30006",
        "city_name" => "Balidat Ameur",
        "wilaya_id" => "30",
        "ar_name" => "بليدة عامر",
        "longitude" => "32.8854",
        "latitude" => "5.9793"
    ],
    [
        "id" => "1095",
        "code_postal" => "30007",
        "city_name" => "Tebesbest",
        "wilaya_id" => "30",
        "ar_name" => "تبسبست",
        "longitude" => "33.0536",
        "latitude" => "6.0809"
    ],
    [
        "id" => "1096",
        "code_postal" => "30008",
        "city_name" => "Nezla",
        "wilaya_id" => "30",
        "ar_name" => "نزلة",
        "longitude" => "33.0167",
        "latitude" => "6.0507"
    ],
    [
        "id" => "1097",
        "code_postal" => "30009",
        "city_name" => "Zaouia El Abidia",
        "wilaya_id" => "30",
        "ar_name" => "الزاوية العابدية",
        "longitude" => "33.072",
        "latitude" => "6.0809"
    ],
    [
        "id" => "1098",
        "code_postal" => "30010",
        "city_name" => "Sidi Slimane",
        "wilaya_id" => "30",
        "ar_name" => "سيدي سليمان",
        "longitude" => "33.2238",
        "latitude" => "6.0919"
    ],
    [
        "id" => "1099",
        "code_postal" => "30011",
        "city_name" => "Sidi Khouiled",
        "wilaya_id" => "30",
        "ar_name" => "سيدي خويلد",
        "longitude" => "31.9137",
        "latitude" => "5.419"
    ],
    [
        "id" => "1100",
        "code_postal" => "30012",
        "city_name" => "Hassi Ben Abdellah",
        "wilaya_id" => "30",
        "ar_name" => "حاسي بن عبد ﷲ",
        "longitude" => "31.9603",
        "latitude" => "5.4684"
    ],
    [
        "id" => "1101",
        "code_postal" => "30013",
        "city_name" => "Touggourt",
        "wilaya_id" => "30",
        "ar_name" => "توقرت",
        "longitude" => "33.0351",
        "latitude" => "6.0672"
    ],
    [
        "id" => "1102",
        "code_postal" => "30014",
        "city_name" => "El Hadjira",
        "wilaya_id" => "30",
        "ar_name" => "الحجيرة",
        "longitude" => "32.548",
        "latitude" => "5.5124"
    ],
    [
        "id" => "1103",
        "code_postal" => "30015",
        "city_name" => "Taibet",
        "wilaya_id" => "30",
        "ar_name" => "الطيبات",
        "longitude" => "33.019",
        "latitude" => "6.3995"
    ],
    [
        "id" => "1104",
        "code_postal" => "30016",
        "city_name" => "Tamacine",
        "wilaya_id" => "30",
        "ar_name" => "تماسين",
        "longitude" => "32.9568",
        "latitude" => "6.0233"
    ],
    [
        "id" => "1105",
        "code_postal" => "30017",
        "city_name" => "Benaceur",
        "wilaya_id" => "30",
        "ar_name" => "بن ناصر",
        "longitude" => "33.0444",
        "latitude" => "6.4407"
    ],
    [
        "id" => "1106",
        "code_postal" => "30018",
        "city_name" => "Mnaguer",
        "wilaya_id" => "30",
        "ar_name" => "المنقر",
        "longitude" => "33.0467",
        "latitude" => "6.405"
    ],
    [
        "id" => "1107",
        "code_postal" => "30019",
        "city_name" => "Megarine",
        "wilaya_id" => "30",
        "ar_name" => "المقارين",
        "longitude" => "33.1272",
        "latitude" => "6.0947"
    ],
    [
        "id" => "1108",
        "code_postal" => "30020",
        "city_name" => "El Allia",
        "wilaya_id" => "30",
        "ar_name" => "العالية",
        "longitude" => "32.6313",
        "latitude" => "5.4245"
    ],
    [
        "id" => "1109",
        "code_postal" => "30021",
        "city_name" => "El Borma",
        "wilaya_id" => "30",
        "ar_name" => "البرمة",
        "longitude" => "31.5891",
        "latitude" => "9.1791"
    ],
    [
        "id" => "1110",
        "code_postal" => "31001",
        "city_name" => "Oran",
        "wilaya_id" => "31",
        "ar_name" => "وهران",
        "longitude" => "35.6372",
        "latitude" => "-0.6482"
    ],
    [
        "id" => "1111",
        "code_postal" => "31002",
        "city_name" => "Gdyel",
        "wilaya_id" => "31",
        "ar_name" => "ڨديل",
        "longitude" => "35.7175",
        "latitude" => "-0.423"
    ],
    [
        "id" => "1112",
        "code_postal" => "31003",
        "city_name" => "Bir El Djir",
        "wilaya_id" => "31",
        "ar_name" => "بئر الجير",
        "longitude" => "35.6729",
        "latitude" => "-0.5548"
    ],
    [
        "id" => "1113",
        "code_postal" => "31004",
        "city_name" => "Hassi Bounif",
        "wilaya_id" => "31",
        "ar_name" => "حاسيْ بُونِيف",
        "longitude" => "35.635",
        "latitude" => "-0.4999"
    ],
    [
        "id" => "1114",
        "code_postal" => "31005",
        "city_name" => "Es Senia",
        "wilaya_id" => "31",
        "ar_name" => "السانية",
        "longitude" => "35.5859",
        "latitude" => "-0.618"
    ],
    [
        "id" => "1115",
        "code_postal" => "31006",
        "city_name" => "Arzew",
        "wilaya_id" => "31",
        "ar_name" => "أرزيو",
        "longitude" => "35.8044",
        "latitude" => "-0.3214"
    ],
    [
        "id" => "1116",
        "code_postal" => "31007",
        "city_name" => "Bethioua",
        "wilaya_id" => "31",
        "ar_name" => "ﺑﻃﻴﻭة",
        "longitude" => "35.7398",
        "latitude" => "-0.2609"
    ],
    [
        "id" => "1117",
        "code_postal" => "31008",
        "city_name" => "Marsat El Hadjadj",
        "wilaya_id" => "31",
        "ar_name" => "مَرس ألحَجَاج",
        "longitude" => "35.7198",
        "latitude" => "-0.1675"
    ],
    [
        "id" => "1118",
        "code_postal" => "31009",
        "city_name" => "Ain Turk",
        "wilaya_id" => "31",
        "ar_name" => "عيْن التُرْكْ",
        "longitude" => "35.6662",
        "latitude" => "-0.7498"
    ],
    [
        "id" => "1119",
        "code_postal" => "31010",
        "city_name" => "El Ancar",
        "wilaya_id" => "31",
        "ar_name" => "العنصر",
        "longitude" => "35.6216",
        "latitude" => "-0.8679"
    ],
    [
        "id" => "1120",
        "code_postal" => "31011",
        "city_name" => "Oued Tlelat",
        "wilaya_id" => "31",
        "ar_name" => "وادى تليلات",
        "longitude" => "35.4853",
        "latitude" => "-0.4504"
    ],
    [
        "id" => "1121",
        "code_postal" => "31012",
        "city_name" => "Tafraoui",
        "wilaya_id" => "31",
        "ar_name" => "طفراوي",
        "longitude" => "35.4182",
        "latitude" => "-0.5273"
    ],
    [
        "id" => "1122",
        "code_postal" => "31013",
        "city_name" => "Sidi Chami",
        "wilaya_id" => "31",
        "ar_name" => "سيدي الشحمي",
        "longitude" => "35.5859",
        "latitude" => "-0.5191"
    ],
    [
        "id" => "1123",
        "code_postal" => "31014",
        "city_name" => "Boufatis",
        "wilaya_id" => "31",
        "ar_name" => "بوفاطيس",
        "longitude" => "35.6149",
        "latitude" => "-0.412"
    ],
    [
        "id" => "1124",
        "code_postal" => "31015",
        "city_name" => "Mers El Kebir",
        "wilaya_id" => "31",
        "ar_name" => "المرسى الكبير",
        "longitude" => "35.6751",
        "latitude" => "-0.7196"
    ],
    [
        "id" => "1125",
        "code_postal" => "31016",
        "city_name" => "Bousfer",
        "wilaya_id" => "31",
        "ar_name" => "بوسفر",
        "longitude" => "35.6461",
        "latitude" => "-0.8102"
    ],
    [
        "id" => "1126",
        "code_postal" => "31017",
        "city_name" => "El Karma",
        "wilaya_id" => "31",
        "ar_name" => "الكرمة",
        "longitude" => "35.5479",
        "latitude" => "-0.5795"
    ],
    [
        "id" => "1127",
        "code_postal" => "31018",
        "city_name" => "El Braya",
        "wilaya_id" => "31",
        "ar_name" => "ألبْرَيَ",
        "longitude" => "35.5657",
        "latitude" => "-0.5191"
    ],
    [
        "id" => "1128",
        "code_postal" => "31019",
        "city_name" => "Hassi Ben Okba",
        "wilaya_id" => "31",
        "ar_name" => "حاسي بن عقبة",
        "longitude" => "35.664",
        "latitude" => "-0.4669"
    ],
    [
        "id" => "1129",
        "code_postal" => "31020",
        "city_name" => "Ben Freha",
        "wilaya_id" => "31",
        "ar_name" => "بن فريحة",
        "longitude" => "35.6283",
        "latitude" => "-0.4202"
    ],
    [
        "id" => "1130",
        "code_postal" => "31021",
        "city_name" => "Hassi Mefsoukh",
        "wilaya_id" => "31",
        "ar_name" => "حاسي مفسوخ",
        "longitude" => "35.7376",
        "latitude" => "-0.3735"
    ],
    [
        "id" => "1131",
        "code_postal" => "31022",
        "city_name" => "Sidi Ben Yabka",
        "wilaya_id" => "31",
        "ar_name" => "سيدي بن يبقى",
        "longitude" => "35.7643",
        "latitude" => "-0.3955"
    ],
    [
        "id" => "1132",
        "code_postal" => "31023",
        "city_name" => "Messerghin",
        "wilaya_id" => "31",
        "ar_name" => "مسرغين",
        "longitude" => "35.5546",
        "latitude" => "-0.7306"
    ],
    [
        "id" => "1133",
        "code_postal" => "31024",
        "city_name" => "Boutlelis",
        "wilaya_id" => "31",
        "ar_name" => "بوتليليس",
        "longitude" => "35.5076",
        "latitude" => "-0.9009"
    ],
    [
        "id" => "1134",
        "code_postal" => "31025",
        "city_name" => "Ain Kerma",
        "wilaya_id" => "31",
        "ar_name" => "عين الكرمة",
        "longitude" => "35.5836",
        "latitude" => "-0.975"
    ],
    [
        "id" => "1135",
        "code_postal" => "31026",
        "city_name" => "Ain Biya",
        "wilaya_id" => "31",
        "ar_name" => "عين البية",
        "longitude" => "35.751",
        "latitude" => "-0.2829"
    ],
    [
        "id" => "1136",
        "code_postal" => "32001",
        "city_name" => "El Bayadh",
        "wilaya_id" => "32",
        "ar_name" => "الـبـيـض",
        "longitude" => "33.6146",
        "latitude" => "1.019"
    ],
    [
        "id" => "1137",
        "code_postal" => "32002",
        "city_name" => "Rogassa",
        "wilaya_id" => "32",
        "ar_name" => "روقاصة",
        "longitude" => "33.9525",
        "latitude" => "0.9256"
    ],
    [
        "id" => "1138",
        "code_postal" => "32003",
        "city_name" => "Stitten",
        "wilaya_id" => "32",
        "ar_name" => "ستيتين",
        "longitude" => "33.6924",
        "latitude" => "1.2222"
    ],
    [
        "id" => "1139",
        "code_postal" => "32004",
        "city_name" => "Brezina",
        "wilaya_id" => "32",
        "ar_name" => "بريزينة",
        "longitude" => "33.0317",
        "latitude" => "1.2607"
    ],
    [
        "id" => "1140",
        "code_postal" => "32005",
        "city_name" => "Ghassoul",
        "wilaya_id" => "32",
        "ar_name" => "غسول",
        "longitude" => "33.3099",
        "latitude" => "1.203"
    ],
    [
        "id" => "1141",
        "code_postal" => "32006",
        "city_name" => "Boualem",
        "wilaya_id" => "32",
        "ar_name" => "بوعلام",
        "longitude" => "33.6626",
        "latitude" => "1.5353"
    ],
    [
        "id" => "1142",
        "code_postal" => "32007",
        "city_name" => "El Abiodh Sidi Cheikh",
        "wilaya_id" => "32",
        "ar_name" => "الابيض سيدي الشيخ",
        "longitude" => "32.8311",
        "latitude" => "0.5383"
    ],
    [
        "id" => "1143",
        "code_postal" => "32008",
        "city_name" => "Ain El Orak",
        "wilaya_id" => "32",
        "ar_name" => "عين العراك",
        "longitude" => "33.3443",
        "latitude" => "0.7388"
    ],
    [
        "id" => "1144",
        "code_postal" => "32009",
        "city_name" => "Arbaouat",
        "wilaya_id" => "32",
        "ar_name" => "أربوات",
        "longitude" => "33.0225",
        "latitude" => "0.5823"
    ],
    [
        "id" => "1145",
        "code_postal" => "32010",
        "city_name" => "Bougtoub",
        "wilaya_id" => "32",
        "ar_name" => "بوقطب",
        "longitude" => "33.9775",
        "latitude" => "0.0879"
    ],
    [
        "id" => "1146",
        "code_postal" => "32011",
        "city_name" => "El Kheither",
        "wilaya_id" => "32",
        "ar_name" => "الخيثر",
        "longitude" => "34.0777",
        "latitude" => "0.0742"
    ],
    [
        "id" => "1147",
        "code_postal" => "32012",
        "city_name" => "Kef El Ahmar",
        "wilaya_id" => "32",
        "ar_name" => "الكاف الاحمر",
        "longitude" => "33.7837",
        "latitude" => "0.6317"
    ],
    [
        "id" => "1148",
        "code_postal" => "32013",
        "city_name" => "Boussemghoun",
        "wilaya_id" => "32",
        "ar_name" => "بوسمغون",
        "longitude" => "32.7965",
        "latitude" => "0.0192"
    ],
    [
        "id" => "1149",
        "code_postal" => "32014",
        "city_name" => "Chellala",
        "wilaya_id" => "32",
        "ar_name" => "شلالة",
        "longitude" => "32.9672",
        "latitude" => "0.0549"
    ],
    [
        "id" => "1150",
        "code_postal" => "32015",
        "city_name" => "Krakda",
        "wilaya_id" => "32",
        "ar_name" => "كراكدة",
        "longitude" => "33.2525",
        "latitude" => "0.9586"
    ],
    [
        "id" => "1151",
        "code_postal" => "32016",
        "city_name" => "El Bnoud",
        "wilaya_id" => "32",
        "ar_name" => "البنود",
        "longitude" => "32.2453",
        "latitude" => "0.2444"
    ],
    [
        "id" => "1152",
        "code_postal" => "32017",
        "city_name" => "Cheguig",
        "wilaya_id" => "32",
        "ar_name" => "الشقيق",
        "longitude" => "34.1027",
        "latitude" => "1.2277"
    ],
    [
        "id" => "1153",
        "code_postal" => "32018",
        "city_name" => "Sidi Ameur",
        "wilaya_id" => "32",
        "ar_name" => "سيدي عامر",
        "longitude" => "33.7015",
        "latitude" => "1.4337"
    ],
    [
        "id" => "1154",
        "code_postal" => "32019",
        "city_name" => "El Mehara",
        "wilaya_id" => "32",
        "ar_name" => "المھارة",
        "longitude" => "33.2456",
        "latitude" => "0.3653"
    ],
    [
        "id" => "1155",
        "code_postal" => "32020",
        "city_name" => "Tousmouline",
        "wilaya_id" => "32",
        "ar_name" => "توسمولين",
        "longitude" => "33.5849",
        "latitude" => "0.3076"
    ],
    [
        "id" => "1156",
        "code_postal" => "32021",
        "city_name" => "Sidi Slimane",
        "wilaya_id" => "32",
        "ar_name" => "سيدي سليمان",
        "longitude" => "33.7814",
        "latitude" => "1.7303"
    ],
    [
        "id" => "1157",
        "code_postal" => "32022",
        "city_name" => "Sidi Tifour",
        "wilaya_id" => "32",
        "ar_name" => "سيدي طيفور",
        "longitude" => "33.6512",
        "latitude" => "1.6837"
    ],
    [
        "id" => "1158",
        "code_postal" => "33001",
        "city_name" => "Illizi",
        "wilaya_id" => "33",
        "ar_name" => "إلـيـزي",
        "longitude" => "26.4361",
        "latitude" => "8.4842"
    ],
    [
        "id" => "1159",
        "code_postal" => "33002",
        "city_name" => "Djanet",
        "wilaya_id" => "33",
        "ar_name" => "جانت",
        "longitude" => "24.4821",
        "latitude" => "9.4839"
    ],
    [
        "id" => "1160",
        "code_postal" => "33003",
        "city_name" => "Debdeb",
        "wilaya_id" => "33",
        "ar_name" => "دبداب",
        "longitude" => "29.8978",
        "latitude" => "9.4208"
    ],
    [
        "id" => "1161",
        "code_postal" => "33004",
        "city_name" => "Bordj Omar Driss",
        "wilaya_id" => "33",
        "ar_name" => "برج عمر ادريس",
        "longitude" => "28.0793",
        "latitude" => "6.817"
    ],
    [
        "id" => "1162",
        "code_postal" => "33005",
        "city_name" => "Bordj El Haouasse",
        "wilaya_id" => "33",
        "ar_name" => "برج الحواس",
        "longitude" => "24.5146",
        "latitude" => "9.451"
    ],
    [
        "id" => "1163",
        "code_postal" => "33006",
        "city_name" => "In Amenas",
        "wilaya_id" => "33",
        "ar_name" => "إن أميناس",
        "longitude" => "27.9677",
        "latitude" => "9.5663"
    ],
    [
        "id" => "1164",
        "code_postal" => "34001",
        "city_name" => "Bordj Bou Arreridj",
        "wilaya_id" => "34",
        "ar_name" => "برج بوعريريج",
        "longitude" => "36.0025",
        "latitude" => "4.7653"
    ],
    [
        "id" => "1165",
        "code_postal" => "34002",
        "city_name" => "Ras El Oued",
        "wilaya_id" => "34",
        "ar_name" => "رأس الوادي",
        "longitude" => "35.8846",
        "latitude" => "5.0372"
    ],
    [
        "id" => "1166",
        "code_postal" => "34003",
        "city_name" => "Bordj Zemoura",
        "wilaya_id" => "34",
        "ar_name" => "برج زمورة",
        "longitude" => "36.2288",
        "latitude" => "4.856"
    ],
    [
        "id" => "1167",
        "code_postal" => "34004",
        "city_name" => "Mansoura",
        "wilaya_id" => "34",
        "ar_name" => "منصورة",
        "longitude" => "36.018",
        "latitude" => "4.4604"
    ],
    [
        "id" => "1168",
        "code_postal" => "34005",
        "city_name" => "El Mhir",
        "wilaya_id" => "34",
        "ar_name" => "المھير",
        "longitude" => "36.0535",
        "latitude" => "4.3835"
    ],
    [
        "id" => "1169",
        "code_postal" => "34006",
        "city_name" => "Ben Daoud",
        "wilaya_id" => "34",
        "ar_name" => "بن داود",
        "longitude" => "36.0757",
        "latitude" => "4.1721"
    ],
    [
        "id" => "1170",
        "code_postal" => "34007",
        "city_name" => "El Achir",
        "wilaya_id" => "34",
        "ar_name" => "العشير",
        "longitude" => "36.0025",
        "latitude" => "4.6335"
    ],
    [
        "id" => "1171",
        "code_postal" => "34008",
        "city_name" => "Ain Taghrout",
        "wilaya_id" => "34",
        "ar_name" => "عين تاغروت",
        "longitude" => "36.0646",
        "latitude" => "5.0757"
    ],
    [
        "id" => "1172",
        "code_postal" => "34009",
        "city_name" => "Bordj Ghdir",
        "wilaya_id" => "34",
        "ar_name" => "برج غدير",
        "longitude" => "35.8356",
        "latitude" => "4.8889"
    ],
    [
        "id" => "1173",
        "code_postal" => "34010",
        "city_name" => "Sidi Embarek",
        "wilaya_id" => "34",
        "ar_name" => "سيدي مبارك",
        "longitude" => "36.0402",
        "latitude" => "4.9109"
    ],
    [
        "id" => "1174",
        "code_postal" => "34011",
        "city_name" => "El Hamadia",
        "wilaya_id" => "34",
        "ar_name" => "الحمادية",
        "longitude" => "35.9157",
        "latitude" => "4.7461"
    ],
    [
        "id" => "1175",
        "code_postal" => "34012",
        "city_name" => "Belimour",
        "wilaya_id" => "34",
        "ar_name" => "بليمور",
        "longitude" => "35.9157",
        "latitude" => "4.8807"
    ],
    [
        "id" => "1176",
        "code_postal" => "34013",
        "city_name" => "Medjana",
        "wilaya_id" => "34",
        "ar_name" => "مجانة",
        "longitude" => "36.0669",
        "latitude" => "4.6692"
    ],
    [
        "id" => "1177",
        "code_postal" => "34014",
        "city_name" => "Teniet En Nasr",
        "wilaya_id" => "34",
        "ar_name" => "ثنية النصر",
        "longitude" => "36.1667",
        "latitude" => "4.6005"
    ],
    [
        "id" => "1178",
        "code_postal" => "34015",
        "city_name" => "Djaafra",
        "wilaya_id" => "34",
        "ar_name" => "جعافرة",
        "longitude" => "36.2288",
        "latitude" => "4.6637"
    ],
    [
        "id" => "1179",
        "code_postal" => "34016",
        "city_name" => "El Main",
        "wilaya_id" => "34",
        "ar_name" => "إلماين",
        "longitude" => "36.3018",
        "latitude" => "4.7488"
    ],
    [
        "id" => "1180",
        "code_postal" => "34017",
        "city_name" => "Ouled Brahem",
        "wilaya_id" => "34",
        "ar_name" => "أولاد ابراھم",
        "longitude" => "35.8067",
        "latitude" => "5.0757"
    ],
    [
        "id" => "1181",
        "code_postal" => "34018",
        "city_name" => "Ouled Dahmane",
        "wilaya_id" => "34",
        "ar_name" => "أولاد دحمان",
        "longitude" => "36.3018",
        "latitude" => "3.4662"
    ],
    [
        "id" => "1182",
        "code_postal" => "34019",
        "city_name" => "Hasnaoua",
        "wilaya_id" => "34",
        "ar_name" => "حسناوة",
        "longitude" => "36.0891",
        "latitude" => "4.7955"
    ],
    [
        "id" => "1183",
        "code_postal" => "34020",
        "city_name" => "Khelil",
        "wilaya_id" => "34",
        "ar_name" => "خليل",
        "longitude" => "36.1113",
        "latitude" => "5.029"
    ],
    [
        "id" => "1184",
        "code_postal" => "34021",
        "city_name" => "Taglait",
        "wilaya_id" => "34",
        "ar_name" => "تاقلعيت",
        "longitude" => "35.7064",
        "latitude" => "4.9988"
    ],
    [
        "id" => "1185",
        "code_postal" => "34022",
        "city_name" => "Ksour",
        "wilaya_id" => "34",
        "ar_name" => "القصور",
        "longitude" => "35.9269",
        "latitude" => "4.5978"
    ],
    [
        "id" => "1186",
        "code_postal" => "34023",
        "city_name" => "Ouled Sidi Brahim",
        "wilaya_id" => "34",
        "ar_name" => "آث سيذى پراهم.",
        "longitude" => "36.1645",
        "latitude" => "4.3341"
    ],
    [
        "id" => "1187",
        "code_postal" => "34024",
        "city_name" => "Tafreg",
        "wilaya_id" => "34",
        "ar_name" => "تفرڨ",
        "longitude" => "36.2531",
        "latitude" => "4.7324"
    ],
    [
        "id" => "1188",
        "code_postal" => "34025",
        "city_name" => "Colla",
        "wilaya_id" => "34",
        "ar_name" => "القلة",
        "longitude" => "36.1977",
        "latitude" => "4.6609"
    ],
    [
        "id" => "1189",
        "code_postal" => "34026",
        "city_name" => "Tixter",
        "wilaya_id" => "34",
        "ar_name" => "تقصطر",
        "longitude" => "35.9825",
        "latitude" => "5.0812"
    ],
    [
        "id" => "1190",
        "code_postal" => "34027",
        "city_name" => "El Ach",
        "wilaya_id" => "34",
        "ar_name" => "العش",
        "longitude" => "35.8846",
        "latitude" => "4.6829"
    ],
    [
        "id" => "1191",
        "code_postal" => "34028",
        "city_name" => "El Anseur",
        "wilaya_id" => "34",
        "ar_name" => "العناصر",
        "longitude" => "36.1357",
        "latitude" => "4.4907"
    ],
    [
        "id" => "1192",
        "code_postal" => "34029",
        "city_name" => "Tesmart",
        "wilaya_id" => "34",
        "ar_name" => "تسمارت",
        "longitude" => "36.2044",
        "latitude" => "4.823"
    ],
    [
        "id" => "1193",
        "code_postal" => "34030",
        "city_name" => "Ain Tesra",
        "wilaya_id" => "34",
        "ar_name" => "عين تسرة",
        "longitude" => "35.9713",
        "latitude" => "5.0015"
    ],
    [
        "id" => "1194",
        "code_postal" => "34031",
        "city_name" => "Bir Kasdali",
        "wilaya_id" => "34",
        "ar_name" => "بئر قصد علي",
        "longitude" => "36.0846",
        "latitude" => "5.0345"
    ],
    [
        "id" => "1195",
        "code_postal" => "34032",
        "city_name" => "Ghilassa",
        "wilaya_id" => "34",
        "ar_name" => "غيلاسة",
        "longitude" => "35.8067",
        "latitude" => "4.9054"
    ],
    [
        "id" => "1196",
        "code_postal" => "34033",
        "city_name" => "Rabta",
        "wilaya_id" => "34",
        "ar_name" => "الرابطة",
        "longitude" => "35.8579",
        "latitude" => "4.7488"
    ],
    [
        "id" => "1197",
        "code_postal" => "34034",
        "city_name" => "Haraza",
        "wilaya_id" => "34",
        "ar_name" => "الحرازة",
        "longitude" => "36.0913",
        "latitude" => "4.2242"
    ],
    [
        "id" => "1198",
        "code_postal" => "35001",
        "city_name" => "Boumerdes",
        "wilaya_id" => "35",
        "ar_name" => "بومرداس",
        "longitude" => "36.7048",
        "latitude" => "3.4662"
    ],
    [
        "id" => "1199",
        "code_postal" => "35002",
        "city_name" => "Boudouaou",
        "wilaya_id" => "35",
        "ar_name" => "بودواو",
        "longitude" => "36.6695",
        "latitude" => "3.4058"
    ],
    [
        "id" => "1200",
        "code_postal" => "35004",
        "city_name" => "Afir",
        "wilaya_id" => "35",
        "ar_name" => "أفير",
        "longitude" => "36.7048",
        "latitude" => "3.7024"
    ],
    [
        "id" => "1201",
        "code_postal" => "35005",
        "city_name" => "Bordj Menaiel",
        "wilaya_id" => "35",
        "ar_name" => "برج منايل",
        "longitude" => "36.6783",
        "latitude" => "3.7244"
    ],
    [
        "id" => "1202",
        "code_postal" => "35006",
        "city_name" => "Baghlia",
        "wilaya_id" => "35",
        "ar_name" => "بغلية",
        "longitude" => "36.7532",
        "latitude" => "3.8617"
    ],
    [
        "id" => "1203",
        "code_postal" => "35007",
        "city_name" => "Sidi Daoud",
        "wilaya_id" => "35",
        "ar_name" => "سيدي داود",
        "longitude" => "36.7884",
        "latitude" => "3.8507"
    ],
    [
        "id" => "1204",
        "code_postal" => "35008",
        "city_name" => "Naciria",
        "wilaya_id" => "35",
        "ar_name" => "الناصرية",
        "longitude" => "36.6849",
        "latitude" => "3.8287"
    ],
    [
        "id" => "1205",
        "code_postal" => "35009",
        "city_name" => "Djinet",
        "wilaya_id" => "35",
        "ar_name" => "جنات",
        "longitude" => "36.8148",
        "latitude" => "3.7244"
    ],
    [
        "id" => "1206",
        "code_postal" => "35010",
        "city_name" => "Isser",
        "wilaya_id" => "35",
        "ar_name" => "يسر",
        "longitude" => "36.6607",
        "latitude" => "3.6667"
    ],
    [
        "id" => "1207",
        "code_postal" => "35011",
        "city_name" => "Zemmouri",
        "wilaya_id" => "35",
        "ar_name" => "زموري",
        "longitude" => "36.7202",
        "latitude" => "3.6008"
    ],
    [
        "id" => "1208",
        "code_postal" => "35012",
        "city_name" => "Si Mustapha",
        "wilaya_id" => "35",
        "ar_name" => "سي مصطفى",
        "longitude" => "36.6629",
        "latitude" => "3.6145"
    ],
    [
        "id" => "1209",
        "code_postal" => "35013",
        "city_name" => "Tidjelabine",
        "wilaya_id" => "35",
        "ar_name" => "تيجلابين",
        "longitude" => "36.6651",
        "latitude" => "3.4964"
    ],
    [
        "id" => "1210",
        "code_postal" => "35014",
        "city_name" => "Chabet El Ameur",
        "wilaya_id" => "35",
        "ar_name" => "شعبة العامر",
        "longitude" => "36.5703",
        "latitude" => "3.6996"
    ],
    [
        "id" => "1211",
        "code_postal" => "35015",
        "city_name" => "Thenia",
        "wilaya_id" => "35",
        "ar_name" => "الثنية",
        "longitude" => "36.6651",
        "latitude" => "3.5541"
    ],
    [
        "id" => "1212",
        "code_postal" => "35018",
        "city_name" => "Timezrit",
        "wilaya_id" => "35",
        "ar_name" => "تمزريت",
        "longitude" => "36.61",
        "latitude" => "3.8068"
    ],
    [
        "id" => "1213",
        "code_postal" => "35019",
        "city_name" => "Corso",
        "wilaya_id" => "35",
        "ar_name" => "قورصو",
        "longitude" => "36.6937",
        "latitude" => "3.4332"
    ],
    [
        "id" => "1214",
        "code_postal" => "35020",
        "city_name" => "Ouled Moussa",
        "wilaya_id" => "35",
        "ar_name" => "أولاد موسى",
        "longitude" => "36.621",
        "latitude" => "3.3673"
    ],
    [
        "id" => "1215",
        "code_postal" => "35021",
        "city_name" => "Larbatache",
        "wilaya_id" => "35",
        "ar_name" => "الأربعطاش",
        "longitude" => "36.5725",
        "latitude" => "3.3728"
    ],
    [
        "id" => "1216",
        "code_postal" => "35022",
        "city_name" => "Bouzegza Keddara",
        "wilaya_id" => "35",
        "ar_name" => "بوزقزة قدارة",
        "longitude" => "36.5615",
        "latitude" => "3.4799"
    ],
    [
        "id" => "1217",
        "code_postal" => "35025",
        "city_name" => "Taourga",
        "wilaya_id" => "35",
        "ar_name" => "تورقة",
        "longitude" => "36.7312",
        "latitude" => "3.9468"
    ],
    [
        "id" => "1218",
        "code_postal" => "35026",
        "city_name" => "Ouled Aissa",
        "wilaya_id" => "35",
        "ar_name" => "أولاد عيسى",
        "longitude" => "36.7444",
        "latitude" => "3.815"
    ],
    [
        "id" => "1219",
        "code_postal" => "35027",
        "city_name" => "Ben Choud",
        "wilaya_id" => "35",
        "ar_name" => "بن شود",
        "longitude" => "36.7994",
        "latitude" => "3.8809"
    ],
    [
        "id" => "1220",
        "code_postal" => "35028",
        "city_name" => "Dellys",
        "wilaya_id" => "35",
        "ar_name" => "دلس",
        "longitude" => "36.85",
        "latitude" => "3.9139"
    ],
    [
        "id" => "1221",
        "code_postal" => "35029",
        "city_name" => "Ammal",
        "wilaya_id" => "35",
        "ar_name" => "عمال",
        "longitude" => "36.5725",
        "latitude" => "3.5898"
    ],
    [
        "id" => "1222",
        "code_postal" => "35030",
        "city_name" => "Beni Amrane",
        "wilaya_id" => "35",
        "ar_name" => "بنى عمران",
        "longitude" => "36.6056",
        "latitude" => "3.5925"
    ],
    [
        "id" => "1223",
        "code_postal" => "35031",
        "city_name" => "Souk El Had",
        "wilaya_id" => "35",
        "ar_name" => "سوق الحد",
        "longitude" => "36.6277",
        "latitude" => "3.5898"
    ],
    [
        "id" => "1224",
        "code_postal" => "35032",
        "city_name" => "Boudouaou El Bahri",
        "wilaya_id" => "35",
        "ar_name" => "بودواو البحرى",
        "longitude" => "36.7114",
        "latitude" => "3.3865"
    ],
    [
        "id" => "1225",
        "code_postal" => "35033",
        "city_name" => "Ouled Hedadj",
        "wilaya_id" => "35",
        "ar_name" => "أولاد ھداج",
        "longitude" => "36.6563",
        "latitude" => "3.3508"
    ],
    [
        "id" => "1226",
        "code_postal" => "35035",
        "city_name" => "Laghata",
        "wilaya_id" => "35",
        "ar_name" => "لقاطة",
        "longitude" => "36.6871",
        "latitude" => "3.6832"
    ],
    [
        "id" => "1227",
        "code_postal" => "35036",
        "city_name" => "Hammedi",
        "wilaya_id" => "35",
        "ar_name" => "حمادى",
        "longitude" => "36.6144",
        "latitude" => "3.2684"
    ],
    [
        "id" => "1228",
        "code_postal" => "35037",
        "city_name" => "Khemis El Khechna",
        "wilaya_id" => "35",
        "ar_name" => "خميس الخشنة",
        "longitude" => "36.5858",
        "latitude" => "3.3289"
    ],
    [
        "id" => "1229",
        "code_postal" => "35038",
        "city_name" => "El Kharrouba",
        "wilaya_id" => "35",
        "ar_name" => "الخروبة",
        "longitude" => "36.5946",
        "latitude" => "3.4058"
    ],
    [
        "id" => "1230",
        "code_postal" => "36001",
        "city_name" => "El Tarf",
        "wilaya_id" => "36",
        "ar_name" => "الطارف",
        "longitude" => "36.7048",
        "latitude" => "8.3139"
    ],
    [
        "id" => "1231",
        "code_postal" => "36002",
        "city_name" => "Bouhadjar",
        "wilaya_id" => "36",
        "ar_name" => "بوحجار",
        "longitude" => "36.4401",
        "latitude" => "8.1052"
    ],
    [
        "id" => "1232",
        "code_postal" => "36003",
        "city_name" => "Ben Mhidi",
        "wilaya_id" => "36",
        "ar_name" => "بن مهيدى",
        "longitude" => "36.7092",
        "latitude" => "7.9047"
    ],
    [
        "id" => "1233",
        "code_postal" => "36004",
        "city_name" => "Bougous",
        "wilaya_id" => "36",
        "ar_name" => "بوقوس",
        "longitude" => "36.5968",
        "latitude" => "8.3688"
    ],
    [
        "id" => "1234",
        "code_postal" => "36005",
        "city_name" => "El Kala",
        "wilaya_id" => "36",
        "ar_name" => "القالة",
        "longitude" => "36.8324",
        "latitude" => "8.443"
    ],
    [
        "id" => "1235",
        "code_postal" => "36006",
        "city_name" => "Ain El Assel",
        "wilaya_id" => "36",
        "ar_name" => "عين العسل",
        "longitude" => "36.7246",
        "latitude" => "8.3826"
    ],
    [
        "id" => "1236",
        "code_postal" => "36007",
        "city_name" => "El Aioun",
        "wilaya_id" => "36",
        "ar_name" => "العيون",
        "longitude" => "36.8082",
        "latitude" => "8.5968"
    ],
    [
        "id" => "1237",
        "code_postal" => "36008",
        "city_name" => "Bouteldja",
        "wilaya_id" => "36",
        "ar_name" => "بوثلجة",
        "longitude" => "36.4401",
        "latitude" => "8.1052"
    ],
    [
        "id" => "1238",
        "code_postal" => "36009",
        "city_name" => "Souarekh",
        "wilaya_id" => "36",
        "ar_name" => "السوارخ",
        "longitude" => "36.8192",
        "latitude" => "8.5638"
    ],
    [
        "id" => "1239",
        "code_postal" => "36010",
        "city_name" => "Berrihane",
        "wilaya_id" => "36",
        "ar_name" => "برحان",
        "longitude" => "36.7752",
        "latitude" => "8.1244"
    ],
    [
        "id" => "1240",
        "code_postal" => "36011",
        "city_name" => "Lac Des Oiseaux",
        "wilaya_id" => "36",
        "ar_name" => "بحيرة الطيور",
        "longitude" => "36.7136",
        "latitude" => "8.1189"
    ],
    [
        "id" => "1241",
        "code_postal" => "36012",
        "city_name" => "Chefia",
        "wilaya_id" => "36",
        "ar_name" => "الشافية",
        "longitude" => "36.5483",
        "latitude" => "8.0392"
    ],
    [
        "id" => "1242",
        "code_postal" => "36013",
        "city_name" => "Drean",
        "wilaya_id" => "36",
        "ar_name" => "الذرعان",
        "longitude" => "36.621",
        "latitude" => "7.7509"
    ],
    [
        "id" => "1243",
        "code_postal" => "36014",
        "city_name" => "Chihani",
        "wilaya_id" => "36",
        "ar_name" => "شهانى",
        "longitude" => "36.5836",
        "latitude" => "7.7756"
    ],
    [
        "id" => "1244",
        "code_postal" => "36015",
        "city_name" => "Chebaita Mokhtar",
        "wilaya_id" => "36",
        "ar_name" => "شبيطة مختار",
        "longitude" => "36.6937",
        "latitude" => "7.7426"
    ],
    [
        "id" => "1245",
        "code_postal" => "36016",
        "city_name" => "Besbes",
        "wilaya_id" => "36",
        "ar_name" => "البسباس",
        "longitude" => "36.6387",
        "latitude" => "7.847"
    ],
    [
        "id" => "1246",
        "code_postal" => "36017",
        "city_name" => "Asfour",
        "wilaya_id" => "36",
        "ar_name" => "عصفور",
        "longitude" => "36.6122",
        "latitude" => "7.9761"
    ],
    [
        "id" => "1247",
        "code_postal" => "36018",
        "city_name" => "Echatt",
        "wilaya_id" => "36",
        "ar_name" => "الشط",
        "longitude" => "36.7664",
        "latitude" => "7.8745"
    ],
    [
        "id" => "1248",
        "code_postal" => "36019",
        "city_name" => "Zerizer",
        "wilaya_id" => "36",
        "ar_name" => "زريزر",
        "longitude" => "36.6651",
        "latitude" => "7.8937"
    ],
    [
        "id" => "1249",
        "code_postal" => "36020",
        "city_name" => "Zitouna",
        "wilaya_id" => "36",
        "ar_name" => "الزيتونة",
        "longitude" => "36.6056",
        "latitude" => "8.2343"
    ],
    [
        "id" => "1250",
        "code_postal" => "36021",
        "city_name" => "Ain Kerma",
        "wilaya_id" => "36",
        "ar_name" => "عين الكرمة",
        "longitude" => "36.5306",
        "latitude" => "8.2013"
    ],
    [
        "id" => "1251",
        "code_postal" => "36022",
        "city_name" => "Oued Zitoun",
        "wilaya_id" => "36",
        "ar_name" => "وادى الزيتون",
        "longitude" => "36.4025",
        "latitude" => "8.0585"
    ],
    [
        "id" => "1252",
        "code_postal" => "36023",
        "city_name" => "Hammam Beni Salah",
        "wilaya_id" => "36",
        "ar_name" => "حمام بنى صالح",
        "longitude" => "36.4577",
        "latitude" => "8.0338"
    ],
    [
        "id" => "1253",
        "code_postal" => "36024",
        "city_name" => "Raml Souk",
        "wilaya_id" => "36",
        "ar_name" => "رمل سوق",
        "longitude" => "36.7224",
        "latitude" => "8.5364"
    ],
    [
        "id" => "1254",
        "code_postal" => "37001",
        "city_name" => "Tindouf",
        "wilaya_id" => "37",
        "ar_name" => "تندوف",
        "longitude" => "27.5972",
        "latitude" => "-8.1491"
    ],
    [
        "id" => "1255",
        "code_postal" => "37002",
        "city_name" => "Oum El Assel",
        "wilaya_id" => "37",
        "ar_name" => "أم العسل",
        "longitude" => "28.2983",
        "latitude" => "-6.5341"
    ],
    [
        "id" => "1256",
        "code_postal" => "38001",
        "city_name" => "Tissemsilt",
        "wilaya_id" => "38",
        "ar_name" => "تـيـسـمـسـيـلـت",
        "longitude" => "35.5445",
        "latitude" => "1.8127"
    ],
    [
        "id" => "1257",
        "code_postal" => "38002",
        "city_name" => "Bordj Bou Naama",
        "wilaya_id" => "38",
        "ar_name" => "برج بونعامة",
        "longitude" => "35.7855",
        "latitude" => "1.6177"
    ],
    [
        "id" => "1258",
        "code_postal" => "38003",
        "city_name" => "Theniet El Had",
        "wilaya_id" => "38",
        "ar_name" => "ثنية الاحد",
        "longitude" => "35.8078",
        "latitude" => "2.0297"
    ],
    [
        "id" => "1259",
        "code_postal" => "38004",
        "city_name" => "Lazharia",
        "wilaya_id" => "38",
        "ar_name" => "الازھرية",
        "longitude" => "35.8746",
        "latitude" => "1.5601"
    ],
    [
        "id" => "1260",
        "code_postal" => "38005",
        "city_name" => "Beni Chaib",
        "wilaya_id" => "38",
        "ar_name" => "بنى شعيب",
        "longitude" => "35.7565",
        "latitude" => "1.799"
    ],
    [
        "id" => "1261",
        "code_postal" => "38006",
        "city_name" => "Lardjem",
        "wilaya_id" => "38",
        "ar_name" => "لارجم",
        "longitude" => "35.6852",
        "latitude" => "1.5491"
    ],
    [
        "id" => "1262",
        "code_postal" => "38007",
        "city_name" => "Melaab",
        "wilaya_id" => "38",
        "ar_name" => "ملعب",
        "longitude" => "35.6517",
        "latitude" => "1.3321"
    ],
    [
        "id" => "1263",
        "code_postal" => "38008",
        "city_name" => "Sidi Lantri",
        "wilaya_id" => "38",
        "ar_name" => "سيدي العنترى",
        "longitude" => "35.6383",
        "latitude" => "1.4035"
    ],
    [
        "id" => "1264",
        "code_postal" => "38009",
        "city_name" => "Bordj El Emir Abdelkader",
        "wilaya_id" => "38",
        "ar_name" => "برج الامير عبد القادر",
        "longitude" => "35.8523",
        "latitude" => "2.2714"
    ],
    [
        "id" => "1265",
        "code_postal" => "38010",
        "city_name" => "Layoune",
        "wilaya_id" => "38",
        "ar_name" => "العيون",
        "longitude" => "35.6316",
        "latitude" => "1.9995"
    ],
    [
        "id" => "1266",
        "code_postal" => "38011",
        "city_name" => "Khemisti",
        "wilaya_id" => "38",
        "ar_name" => "خميستى",
        "longitude" => "35.6026",
        "latitude" => "1.9501"
    ],
    [
        "id" => "1267",
        "code_postal" => "38012",
        "city_name" => "Ouled Bessem",
        "wilaya_id" => "38",
        "ar_name" => "أولاد بسام",
        "longitude" => "35.6227",
        "latitude" => "1.8649"
    ],
    [
        "id" => "1268",
        "code_postal" => "38013",
        "city_name" => "Ammari",
        "wilaya_id" => "38",
        "ar_name" => "عمارى",
        "longitude" => "35.5132",
        "latitude" => "1.6617"
    ],
    [
        "id" => "1269",
        "code_postal" => "38014",
        "city_name" => "Youssoufia",
        "wilaya_id" => "38",
        "ar_name" => "اليوسفية",
        "longitude" => "35.8857",
        "latitude" => "2.1121"
    ],
    [
        "id" => "1270",
        "code_postal" => "38015",
        "city_name" => "Sidi Boutouchent",
        "wilaya_id" => "38",
        "ar_name" => "سيدي بوتوشنت",
        "longitude" => "35.761",
        "latitude" => "1.9501"
    ],
    [
        "id" => "1271",
        "code_postal" => "38016",
        "city_name" => "Larbaa",
        "wilaya_id" => "38",
        "ar_name" => "الاربعاء",
        "longitude" => "35.8501",
        "latitude" => "1.4749"
    ],
    [
        "id" => "1272",
        "code_postal" => "38017",
        "city_name" => "Maasem",
        "wilaya_id" => "38",
        "ar_name" => "المعاصم",
        "longitude" => "35.5959",
        "latitude" => "1.5546"
    ],
    [
        "id" => "1273",
        "code_postal" => "38018",
        "city_name" => "Sidi Abed",
        "wilaya_id" => "38",
        "ar_name" => "سيدي عابد",
        "longitude" => "35.6807",
        "latitude" => "1.7056"
    ],
    [
        "id" => "1274",
        "code_postal" => "38019",
        "city_name" => "Tamalaht",
        "wilaya_id" => "38",
        "ar_name" => "تاملاحت",
        "longitude" => "35.7499",
        "latitude" => "1.6232"
    ],
    [
        "id" => "1275",
        "code_postal" => "38020",
        "city_name" => "Sidi Slimane",
        "wilaya_id" => "38",
        "ar_name" => "سيدي سليمان",
        "longitude" => "35.7967",
        "latitude" => "1.6809"
    ],
    [
        "id" => "1276",
        "code_postal" => "38021",
        "city_name" => "Boucaid",
        "wilaya_id" => "38",
        "ar_name" => "بوقايد",
        "longitude" => "35.8278",
        "latitude" => "1.6205"
    ],
    [
        "id" => "1277",
        "code_postal" => "38022",
        "city_name" => "Beni Lahcene",
        "wilaya_id" => "38",
        "ar_name" => "بنى لحسن",
        "longitude" => "35.7499",
        "latitude" => "1.6891"
    ],
    [
        "id" => "1278",
        "code_postal" => "39001",
        "city_name" => "El Oued",
        "wilaya_id" => "39",
        "ar_name" => "الوادي",
        "longitude" => "33.3018",
        "latitude" => "6.8665"
    ],
    [
        "id" => "1279",
        "code_postal" => "39002",
        "city_name" => "Robbah",
        "wilaya_id" => "39",
        "ar_name" => "رباح",
        "longitude" => "33.2146",
        "latitude" => "6.9104"
    ],
    [
        "id" => "1280",
        "code_postal" => "39003",
        "city_name" => "Oued El Alenda",
        "wilaya_id" => "39",
        "ar_name" => "وادى العلندة",
        "longitude" => "33.164",
        "latitude" => "6.7566"
    ],
    [
        "id" => "1281",
        "code_postal" => "39004",
        "city_name" => "Bayadha",
        "wilaya_id" => "39",
        "ar_name" => "البياضة",
        "longitude" => "33.2697",
        "latitude" => "6.9159"
    ],
    [
        "id" => "1282",
        "code_postal" => "39005",
        "city_name" => "Nakhla",
        "wilaya_id" => "39",
        "ar_name" => "النخلة",
        "longitude" => "33.2123",
        "latitude" => "6.9516"
    ],
    [
        "id" => "1283",
        "code_postal" => "39006",
        "city_name" => "Guemar",
        "wilaya_id" => "39",
        "ar_name" => "ڨمار",
        "longitude" => "33.428",
        "latitude" => "6.7978"
    ],
    [
        "id" => "1284",
        "code_postal" => "39007",
        "city_name" => "Kouinine",
        "wilaya_id" => "39",
        "ar_name" => "كوينين",
        "longitude" => "33.3386",
        "latitude" => "6.8253"
    ],
    [
        "id" => "1285",
        "code_postal" => "39008",
        "city_name" => "Reguiba",
        "wilaya_id" => "39",
        "ar_name" => "الرڨيبة",
        "longitude" => "33.499",
        "latitude" => "6.7126"
    ],
    [
        "id" => "1286",
        "code_postal" => "39009",
        "city_name" => "Hamraia",
        "wilaya_id" => "39",
        "ar_name" => "الحمراية",
        "longitude" => "34.047",
        "latitude" => "6.2292"
    ],
    [
        "id" => "1287",
        "code_postal" => "39010",
        "city_name" => "Taghzout",
        "wilaya_id" => "39",
        "ar_name" => "تغزوت",
        "longitude" => "33.4097",
        "latitude" => "6.795"
    ],
    [
        "id" => "1288",
        "code_postal" => "39011",
        "city_name" => "Debila",
        "wilaya_id" => "39",
        "ar_name" => "الدبيلة",
        "longitude" => "33.4418",
        "latitude" => "6.9379"
    ],
    [
        "id" => "1289",
        "code_postal" => "39012",
        "city_name" => "Hassani Abdelkrim",
        "wilaya_id" => "39",
        "ar_name" => "بلدية حساني عبد الكريم",
        "longitude" => "33.412",
        "latitude" => "6.8939"
    ],
    [
        "id" => "1290",
        "code_postal" => "39013",
        "city_name" => "Hassi Khelifa",
        "wilaya_id" => "39",
        "ar_name" => "حاسى خليفة",
        "longitude" => "33.5357",
        "latitude" => "7.0285"
    ],
    [
        "id" => "1291",
        "code_postal" => "39014",
        "city_name" => "Taleb Larbi",
        "wilaya_id" => "39",
        "ar_name" => "طالب العربي",
        "longitude" => "33.6615",
        "latitude" => "7.5174"
    ],
    [
        "id" => "1292",
        "code_postal" => "39015",
        "city_name" => "Douar El Ma",
        "wilaya_id" => "39",
        "ar_name" => "دوار الماء",
        "longitude" => "33.1962",
        "latitude" => "7.3746"
    ],
    [
        "id" => "1293",
        "code_postal" => "39016",
        "city_name" => "Sidi Aoun",
        "wilaya_id" => "39",
        "ar_name" => "سيدي عون",
        "longitude" => "33.4761",
        "latitude" => "6.9022"
    ],
    [
        "id" => "1294",
        "code_postal" => "39017",
        "city_name" => "Trifaoui",
        "wilaya_id" => "39",
        "ar_name" => "تريفاوى",
        "longitude" => "33.3569",
        "latitude" => "6.9351"
    ],
    [
        "id" => "1295",
        "code_postal" => "39018",
        "city_name" => "Magrane",
        "wilaya_id" => "39",
        "ar_name" => "المڨرن",
        "longitude" => "33.5174",
        "latitude" => "6.9489"
    ],
    [
        "id" => "1296",
        "code_postal" => "39019",
        "city_name" => "Beni Guecha",
        "wilaya_id" => "39",
        "ar_name" => "بن ڨشة",
        "longitude" => "33.9331",
        "latitude" => "7.3361"
    ],
    [
        "id" => "1297",
        "code_postal" => "39020",
        "city_name" => "Ourmas",
        "wilaya_id" => "39",
        "ar_name" => "أورماس",
        "longitude" => "33.3477",
        "latitude" => "6.7813"
    ],
    [
        "id" => "1298",
        "code_postal" => "39021",
        "city_name" => "Still",
        "wilaya_id" => "39",
        "ar_name" => "سطيل",
        "longitude" => "34.1948",
        "latitude" => "5.9134"
    ],
    [
        "id" => "1299",
        "code_postal" => "39022",
        "city_name" => "Mrara",
        "wilaya_id" => "39",
        "ar_name" => "مرارة",
        "longitude" => "33.5883",
        "latitude" => "5.2872"
    ],
    [
        "id" => "1300",
        "code_postal" => "39023",
        "city_name" => "Sidi Khellil",
        "wilaya_id" => "39",
        "ar_name" => "سيدي خليل",
        "longitude" => "33.7734",
        "latitude" => "5.9601"
    ],
    [
        "id" => "1301",
        "code_postal" => "39024",
        "city_name" => "Tendla",
        "wilaya_id" => "39",
        "ar_name" => "تندلة",
        "longitude" => "33.6112",
        "latitude" => "6.0342"
    ],
    [
        "id" => "1302",
        "code_postal" => "39025",
        "city_name" => "El Ogla",
        "wilaya_id" => "39",
        "ar_name" => "العقلة",
        "longitude" => "33.1801",
        "latitude" => "6.9461"
    ],
    [
        "id" => "1303",
        "code_postal" => "39026",
        "city_name" => "Mih Ouansa",
        "wilaya_id" => "39",
        "ar_name" => "مية ونسة",
        "longitude" => "33.1318",
        "latitude" => "6.7044"
    ],
    [
        "id" => "1304",
        "code_postal" => "39027",
        "city_name" => "El Mghair",
        "wilaya_id" => "39",
        "ar_name" => "المغير",
        "longitude" => "33.8852",
        "latitude" => "5.9244"
    ],
    [
        "id" => "1305",
        "code_postal" => "39028",
        "city_name" => "Djamaa",
        "wilaya_id" => "39",
        "ar_name" => "جامعة",
        "longitude" => "33.467",
        "latitude" => "5.9903"
    ],
    [
        "id" => "1306",
        "code_postal" => "39029",
        "city_name" => "Oum Touyour",
        "wilaya_id" => "39",
        "ar_name" => "أم الطيور",
        "longitude" => "34.0879",
        "latitude" => "5.8337"
    ],
    [
        "id" => "1307",
        "code_postal" => "39030",
        "city_name" => "Sidi Amrane",
        "wilaya_id" => "39",
        "ar_name" => "سيدي عمران",
        "longitude" => "33.4303",
        "latitude" => "6.0123"
    ],
    [
        "id" => "1308",
        "code_postal" => "40001",
        "city_name" => "Khenchela",
        "wilaya_id" => "40",
        "ar_name" => "خنشلة",
        "longitude" => "35.3678",
        "latitude" => "7.1439"
    ],
    [
        "id" => "1309",
        "code_postal" => "40002",
        "city_name" => "Mtoussa",
        "wilaya_id" => "40",
        "ar_name" => "متوسة",
        "longitude" => "35.5356",
        "latitude" => "7.2455"
    ],
    [
        "id" => "1310",
        "code_postal" => "40003",
        "city_name" => "Kais",
        "wilaya_id" => "40",
        "ar_name" => "قايس",
        "longitude" => "35.4305",
        "latitude" => "6.9241"
    ],
    [
        "id" => "1311",
        "code_postal" => "40004",
        "city_name" => "Baghai",
        "wilaya_id" => "40",
        "ar_name" => "بغاي",
        "longitude" => "35.4573",
        "latitude" => "7.1136"
    ],
    [
        "id" => "1312",
        "code_postal" => "40005",
        "city_name" => "El Hamma",
        "wilaya_id" => "40",
        "ar_name" => "الحامة",
        "longitude" => "35.3991",
        "latitude" => "7.0834"
    ],
    [
        "id" => "1313",
        "code_postal" => "40006",
        "city_name" => "Ain Touila",
        "wilaya_id" => "40",
        "ar_name" => "عين الطويلة",
        "longitude" => "35.3723",
        "latitude" => "7.3526"
    ],
    [
        "id" => "1314",
        "code_postal" => "40007",
        "city_name" => "Taouzianat",
        "wilaya_id" => "40",
        "ar_name" => "تاوزيانت",
        "longitude" => "35.4506",
        "latitude" => "6.7538"
    ],
    [
        "id" => "1315",
        "code_postal" => "40008",
        "city_name" => "Bouhmama",
        "wilaya_id" => "40",
        "ar_name" => "بوحمامة",
        "longitude" => "35.2557",
        "latitude" => "6.7456"
    ],
    [
        "id" => "1316",
        "code_postal" => "40009",
        "city_name" => "El Oueldja",
        "wilaya_id" => "40",
        "ar_name" => "الولجة",
        "longitude" => "34.851",
        "latitude" => "6.6797"
    ],
    [
        "id" => "1317",
        "code_postal" => "40010",
        "city_name" => "Remila",
        "wilaya_id" => "40",
        "ar_name" => "الرميلة",
        "longitude" => "35.5065",
        "latitude" => "6.9351"
    ],
    [
        "id" => "1318",
        "code_postal" => "40011",
        "city_name" => "Cherchar",
        "wilaya_id" => "40",
        "ar_name" => "ششار",
        "longitude" => "34.9749",
        "latitude" => "7.0038"
    ],
    [
        "id" => "1319",
        "code_postal" => "40012",
        "city_name" => "Djellal",
        "wilaya_id" => "40",
        "ar_name" => "جلال",
        "longitude" => "34.8533",
        "latitude" => "6.8994"
    ],
    [
        "id" => "1320",
        "code_postal" => "40013",
        "city_name" => "Babar",
        "wilaya_id" => "40",
        "ar_name" => "بابار",
        "longitude" => "35.1053",
        "latitude" => "7.0999"
    ],
    [
        "id" => "1321",
        "code_postal" => "40014",
        "city_name" => "Tamza",
        "wilaya_id" => "40",
        "ar_name" => "تامزة",
        "longitude" => "35.2535",
        "latitude" => "6.8335"
    ],
    [
        "id" => "1322",
        "code_postal" => "40015",
        "city_name" => "Ensigha",
        "wilaya_id" => "40",
        "ar_name" => "انسيغة",
        "longitude" => "35.3342",
        "latitude" => "7.1439"
    ],
    [
        "id" => "1323",
        "code_postal" => "40016",
        "city_name" => "Ouled Rechache",
        "wilaya_id" => "40",
        "ar_name" => "أولاد رشاش",
        "longitude" => "35.2333",
        "latitude" => "7.3526"
    ],
    [
        "id" => "1324",
        "code_postal" => "40017",
        "city_name" => "El Mahmal",
        "wilaya_id" => "40",
        "ar_name" => "المحمل",
        "longitude" => "35.3095",
        "latitude" => "7.2125"
    ],
    [
        "id" => "1325",
        "code_postal" => "40018",
        "city_name" => "Msara",
        "wilaya_id" => "40",
        "ar_name" => "أمصارة",
        "longitude" => "35.1749",
        "latitude" => "6.5726"
    ],
    [
        "id" => "1326",
        "code_postal" => "40019",
        "city_name" => "Yabous",
        "wilaya_id" => "40",
        "ar_name" => "يابوس",
        "longitude" => "35.3454",
        "latitude" => "6.6412"
    ],
    [
        "id" => "1327",
        "code_postal" => "40020",
        "city_name" => "Khirane",
        "wilaya_id" => "40",
        "ar_name" => "خيران",
        "longitude" => "34.9344",
        "latitude" => "6.7593"
    ],
    [
        "id" => "1328",
        "code_postal" => "40021",
        "city_name" => "Chelia",
        "wilaya_id" => "40",
        "ar_name" => "شلية",
        "longitude" => "35.3006",
        "latitude" => "6.7786"
    ],
    [
        "id" => "1329",
        "code_postal" => "41001",
        "city_name" => "Souk Ahras",
        "wilaya_id" => "41",
        "ar_name" => "سوق أهراس",
        "longitude" => "36.2232",
        "latitude" => "7.9541"
    ],
    [
        "id" => "1330",
        "code_postal" => "41002",
        "city_name" => "Sedrata",
        "wilaya_id" => "41",
        "ar_name" => "سدراتة",
        "longitude" => "36.0658",
        "latitude" => "7.5311"
    ],
    [
        "id" => "1331",
        "code_postal" => "41003",
        "city_name" => "Hanancha",
        "wilaya_id" => "41",
        "ar_name" => "الحنانشة",
        "longitude" => "36.1545",
        "latitude" => "7.8333"
    ],
    [
        "id" => "1332",
        "code_postal" => "41004",
        "city_name" => "Mechroha",
        "wilaya_id" => "41",
        "ar_name" => "المشروحة",
        "longitude" => "36.2941",
        "latitude" => "7.836"
    ],
    [
        "id" => "1333",
        "code_postal" => "41005",
        "city_name" => "Ouled Driss",
        "wilaya_id" => "41",
        "ar_name" => "أولاد ادريس",
        "longitude" => "36.2875",
        "latitude" => "8.0173"
    ],
    [
        "id" => "1334",
        "code_postal" => "41006",
        "city_name" => "Tiffech",
        "wilaya_id" => "41",
        "ar_name" => "تيفاش",
        "longitude" => "36.0924",
        "latitude" => "7.6987"
    ],
    [
        "id" => "1335",
        "code_postal" => "41007",
        "city_name" => "Zaarouria",
        "wilaya_id" => "41",
        "ar_name" => "الزعرورية",
        "longitude" => "36.1634",
        "latitude" => "7.9568"
    ],
    [
        "id" => "1336",
        "code_postal" => "41008",
        "city_name" => "Taoura",
        "wilaya_id" => "41",
        "ar_name" => "تاورة",
        "longitude" => "36.1057",
        "latitude" => "8.042"
    ],
    [
        "id" => "1337",
        "code_postal" => "41009",
        "city_name" => "Drea",
        "wilaya_id" => "41",
        "ar_name" => "الدريعة",
        "longitude" => "36.0524",
        "latitude" => "7.8827"
    ],
    [
        "id" => "1338",
        "code_postal" => "41010",
        "city_name" => "Haddada",
        "wilaya_id" => "41",
        "ar_name" => "الحدادة",
        "longitude" => "36.1678",
        "latitude" => "8.3386"
    ],
    [
        "id" => "1339",
        "code_postal" => "41011",
        "city_name" => "Khedara",
        "wilaya_id" => "41",
        "ar_name" => "لخضارة",
        "longitude" => "36.221",
        "latitude" => "8.3167"
    ],
    [
        "id" => "1340",
        "code_postal" => "41012",
        "city_name" => "Merahna",
        "wilaya_id" => "41",
        "ar_name" => "المراهنة",
        "longitude" => "36.1345",
        "latitude" => "8.1738"
    ],
    [
        "id" => "1341",
        "code_postal" => "41013",
        "city_name" => "Ouled Moumen",
        "wilaya_id" => "41",
        "ar_name" => "أولاد مؤمن",
        "longitude" => "36.3472",
        "latitude" => "8.399"
    ],
    [
        "id" => "1342",
        "code_postal" => "41014",
        "city_name" => "Bir Bouhouche",
        "wilaya_id" => "41",
        "ar_name" => "بئر بوحوش",
        "longitude" => "35.9858",
        "latitude" => "7.468"
    ],
    [
        "id" => "1343",
        "code_postal" => "41015",
        "city_name" => "Mdaourouche",
        "wilaya_id" => "41",
        "ar_name" => "مداوروش",
        "longitude" => "36.0124",
        "latitude" => "7.8195"
    ],
    [
        "id" => "1344",
        "code_postal" => "41016",
        "city_name" => "Oum El Adhaim",
        "wilaya_id" => "41",
        "ar_name" => "أم العظائم",
        "longitude" => "35.9702",
        "latitude" => "7.6025"
    ],
    [
        "id" => "1345",
        "code_postal" => "41017",
        "city_name" => "Ain Zana",
        "wilaya_id" => "41",
        "ar_name" => "عين الزانة",
        "longitude" => "36.3384",
        "latitude" => "8.1903"
    ],
    [
        "id" => "1346",
        "code_postal" => "41018",
        "city_name" => "Ain Soltane",
        "wilaya_id" => "41",
        "ar_name" => "عين السلطان",
        "longitude" => "36.1146",
        "latitude" => "7.3691"
    ],
    [
        "id" => "1347",
        "code_postal" => "41019",
        "city_name" => "Quillen",
        "wilaya_id" => "41",
        "ar_name" => "ويلان",
        "longitude" => "36.2653",
        "latitude" => "8.1216"
    ],
    [
        "id" => "1348",
        "code_postal" => "41020",
        "city_name" => "Sidi Fredj",
        "wilaya_id" => "41",
        "ar_name" => "سيدي فرج",
        "longitude" => "36.0902",
        "latitude" => "8.1958"
    ],
    [
        "id" => "1349",
        "code_postal" => "41021",
        "city_name" => "Safel El Ouiden",
        "wilaya_id" => "41",
        "ar_name" => "سافل الويدان",
        "longitude" => "35.9213",
        "latitude" => "7.4625"
    ],
    [
        "id" => "1350",
        "code_postal" => "41022",
        "city_name" => "Ragouba",
        "wilaya_id" => "41",
        "ar_name" => "الرقوبة",
        "longitude" => "36.0191",
        "latitude" => "7.7179"
    ],
    [
        "id" => "1351",
        "code_postal" => "41023",
        "city_name" => "Khemissa",
        "wilaya_id" => "41",
        "ar_name" => "خميسة",
        "longitude" => "36.1257",
        "latitude" => "7.6602"
    ],
    [
        "id" => "1352",
        "code_postal" => "41024",
        "city_name" => "Oued Keberit",
        "wilaya_id" => "41",
        "ar_name" => "وادى الكبريت",
        "longitude" => "35.8701",
        "latitude" => "7.9156"
    ],
    [
        "id" => "1353",
        "code_postal" => "41025",
        "city_name" => "Terraguelt",
        "wilaya_id" => "41",
        "ar_name" => "ترقالت",
        "longitude" => "35.839",
        "latitude" => "7.5613"
    ],
    [
        "id" => "1354",
        "code_postal" => "41026",
        "city_name" => "Zouabi",
        "wilaya_id" => "41",
        "ar_name" => "الزوابى",
        "longitude" => "36.0524",
        "latitude" => "7.4432"
    ],
    [
        "id" => "1355",
        "code_postal" => "42001",
        "city_name" => "Tipaza",
        "wilaya_id" => "42",
        "ar_name" => "تيبازة",
        "longitude" => "36.5284",
        "latitude" => "2.45"
    ],
    [
        "id" => "1356",
        "code_postal" => "42002",
        "city_name" => "Menaceur",
        "wilaya_id" => "42",
        "ar_name" => "مناصر",
        "longitude" => "36.4312",
        "latitude" => "2.2412"
    ],
    [
        "id" => "1357",
        "code_postal" => "42003",
        "city_name" => "Larhat",
        "wilaya_id" => "42",
        "ar_name" => "الأرهاط",
        "longitude" => "36.4953",
        "latitude" => "1.8018"
    ],
    [
        "id" => "1358",
        "code_postal" => "42004",
        "city_name" => "Douaouda",
        "wilaya_id" => "42",
        "ar_name" => "دواودة",
        "longitude" => "36.6034",
        "latitude" => "2.7823"
    ],
    [
        "id" => "1359",
        "code_postal" => "42005",
        "city_name" => "Bourkika",
        "wilaya_id" => "42",
        "ar_name" => "بورقيقة",
        "longitude" => "36.4312",
        "latitude" => "2.4747"
    ],
    [
        "id" => "1360",
        "code_postal" => "42006",
        "city_name" => "Khemisti",
        "wilaya_id" => "42",
        "ar_name" => "خميستي",
        "longitude" => "36.5637",
        "latitude" => "2.6807"
    ],
    [
        "id" => "1361",
        "code_postal" => "42010",
        "city_name" => "Aghabal",
        "wilaya_id" => "42",
        "ar_name" => "أغابال",
        "longitude" => "36.429",
        "latitude" => "1.8402"
    ],
    [
        "id" => "1362",
        "code_postal" => "42012",
        "city_name" => "Hadjout",
        "wilaya_id" => "42",
        "ar_name" => "حجوط",
        "longitude" => "36.4489",
        "latitude" => "2.4142"
    ],
    [
        "id" => "1363",
        "code_postal" => "42013",
        "city_name" => "Sidi Amar",
        "wilaya_id" => "42",
        "ar_name" => "سيدي عمر",
        "longitude" => "36.4798",
        "latitude" => "2.3071"
    ],
    [
        "id" => "1364",
        "code_postal" => "42014",
        "city_name" => "Gouraya",
        "wilaya_id" => "42",
        "ar_name" => "ڨورايا",
        "longitude" => "36.5041",
        "latitude" => "1.9061"
    ],
    [
        "id" => "1365",
        "code_postal" => "42015",
        "city_name" => "Nodor",
        "wilaya_id" => "42",
        "ar_name" => "الناظور",
        "longitude" => "36.5063",
        "latitude" => "2.3923"
    ],
    [
        "id" => "1366",
        "code_postal" => "42016",
        "city_name" => "Chaiba",
        "wilaya_id" => "42",
        "ar_name" => "الشعيبة",
        "longitude" => "36.5615",
        "latitude" => "2.7301"
    ],
    [
        "id" => "1367",
        "code_postal" => "42017",
        "city_name" => "Ain Tagourait",
        "wilaya_id" => "42",
        "ar_name" => "عين تڨورايت",
        "longitude" => "36.5416",
        "latitude" => "2.6093"
    ],
    [
        "id" => "1368",
        "code_postal" => "42022",
        "city_name" => "Cherchel",
        "wilaya_id" => "42",
        "ar_name" => "شرشال",
        "longitude" => "36.5461",
        "latitude" => "2.1973"
    ],
    [
        "id" => "1369",
        "code_postal" => "42023",
        "city_name" => "Damous",
        "wilaya_id" => "42",
        "ar_name" => "الداموس",
        "longitude" => "36.4865",
        "latitude" => "1.7056"
    ],
    [
        "id" => "1370",
        "code_postal" => "42024",
        "city_name" => "Meurad",
        "wilaya_id" => "42",
        "ar_name" => "مراد",
        "longitude" => "36.4135",
        "latitude" => "2.428"
    ],
    [
        "id" => "1371",
        "code_postal" => "42025",
        "city_name" => "Fouka",
        "wilaya_id" => "42",
        "ar_name" => "فوكة",
        "longitude" => "36.6034",
        "latitude" => "2.7493"
    ],
    [
        "id" => "1372",
        "code_postal" => "42026",
        "city_name" => "Bou Ismail",
        "wilaya_id" => "42",
        "ar_name" => "بو اسماعيل",
        "longitude" => "36.5791",
        "latitude" => "2.6889"
    ],
    [
        "id" => "1373",
        "code_postal" => "42027",
        "city_name" => "Ahmer El Ain",
        "wilaya_id" => "42",
        "ar_name" => "أحمر العين",
        "longitude" => "36.4158",
        "latitude" => "2.5626"
    ],
    [
        "id" => "1374",
        "code_postal" => "42030",
        "city_name" => "Bou Haroun",
        "wilaya_id" => "42",
        "ar_name" => "بوهارون",
        "longitude" => "36.5615",
        "latitude" => "2.6559"
    ],
    [
        "id" => "1375",
        "code_postal" => "42032",
        "city_name" => "Sidi Ghiles",
        "wilaya_id" => "42",
        "ar_name" => "سيدي غيلاس",
        "longitude" => "36.5196",
        "latitude" => "2.1231"
    ],
    [
        "id" => "1376",
        "code_postal" => "42033",
        "city_name" => "Messelmoun",
        "wilaya_id" => "42",
        "ar_name" => "مسلمون",
        "longitude" => "36.4997",
        "latitude" => "2.0023"
    ],
    [
        "id" => "1377",
        "code_postal" => "42034",
        "city_name" => "Sidi Rached",
        "wilaya_id" => "42",
        "ar_name" => "سيدي راشد",
        "longitude" => "36.4997",
        "latitude" => "2.5323"
    ],
    [
        "id" => "1378",
        "code_postal" => "42035",
        "city_name" => "Kolea",
        "wilaya_id" => "42",
        "ar_name" => "القليعة",
        "longitude" => "36.5769",
        "latitude" => "2.7658"
    ],
    [
        "id" => "1379",
        "code_postal" => "42036",
        "city_name" => "Attatba",
        "wilaya_id" => "42",
        "ar_name" => "الحطاطبة",
        "longitude" => "36.5107",
        "latitude" => "2.6752"
    ],
    [
        "id" => "1380",
        "code_postal" => "42040",
        "city_name" => "Sidi Semiane",
        "wilaya_id" => "42",
        "ar_name" => "سيدي سميان",
        "longitude" => "36.4401",
        "latitude" => "2.0984"
    ],
    [
        "id" => "1381",
        "code_postal" => "42041",
        "city_name" => "Beni Milleuk",
        "wilaya_id" => "42",
        "ar_name" => "بني ميلك",
        "longitude" => "36.3538",
        "latitude" => "1.7496"
    ],
    [
        "id" => "1382",
        "code_postal" => "42042",
        "city_name" => "Hadjerat Ennous",
        "wilaya_id" => "42",
        "ar_name" => "حجرة النص",
        "longitude" => "36.5107",
        "latitude" => "2.0517"
    ],
    [
        "id" => "1383",
        "code_postal" => "43001",
        "city_name" => "Mila",
        "wilaya_id" => "43",
        "ar_name" => "ميلة",
        "longitude" => "36.387",
        "latitude" => "6.2677"
    ],
    [
        "id" => "1384",
        "code_postal" => "43002",
        "city_name" => "Ferdjioua",
        "wilaya_id" => "43",
        "ar_name" => "فرجيوة",
        "longitude" => "36.345",
        "latitude" => "5.9464"
    ],
    [
        "id" => "1385",
        "code_postal" => "43003",
        "city_name" => "Chelghoum Laid",
        "wilaya_id" => "43",
        "ar_name" => "شلغوم العيد",
        "longitude" => "36.1035",
        "latitude" => "6.1661"
    ],
    [
        "id" => "1386",
        "code_postal" => "43004",
        "city_name" => "Oued Athmenia",
        "wilaya_id" => "43",
        "ar_name" => "وادي العثمانية",
        "longitude" => "36.1856",
        "latitude" => "6.2869"
    ],
    [
        "id" => "1387",
        "code_postal" => "43005",
        "city_name" => "Ain Mellouk",
        "wilaya_id" => "43",
        "ar_name" => "عين ملوك",
        "longitude" => "36.2121",
        "latitude" => "6.1771"
    ],
    [
        "id" => "1388",
        "code_postal" => "43006",
        "city_name" => "Telerghma",
        "wilaya_id" => "43",
        "ar_name" => "تلاغمة",
        "longitude" => "36.0524",
        "latitude" => "6.3638"
    ],
    [
        "id" => "1389",
        "code_postal" => "43007",
        "city_name" => "Oued Seguen",
        "wilaya_id" => "43",
        "ar_name" => "وادى سقان",
        "longitude" => "36.1079",
        "latitude" => "6.4188"
    ],
    [
        "id" => "1390",
        "code_postal" => "43008",
        "city_name" => "Tadjenanet",
        "wilaya_id" => "43",
        "ar_name" => "تاجنانت",
        "longitude" => "36.0524",
        "latitude" => "6.0013"
    ],
    [
        "id" => "1391",
        "code_postal" => "43009",
        "city_name" => "Benyahia Abderrahmane",
        "wilaya_id" => "43",
        "ar_name" => "بن يحيى عبد الرحمان",
        "longitude" => "36.17",
        "latitude" => "6.0123"
    ],
    [
        "id" => "1392",
        "code_postal" => "43010",
        "city_name" => "Oued Endja",
        "wilaya_id" => "43",
        "ar_name" => "وادى النجاء",
        "longitude" => "36.3671",
        "latitude" => "6.1221"
    ],
    [
        "id" => "1393",
        "code_postal" => "43011",
        "city_name" => "Ahmed Rachedi",
        "wilaya_id" => "43",
        "ar_name" => "أحمد راشدي",
        "longitude" => "36.3273",
        "latitude" => "6.1249"
    ],
    [
        "id" => "1394",
        "code_postal" => "43012",
        "city_name" => "Ouled Khalouf",
        "wilaya_id" => "43",
        "ar_name" => "أولاد خلوف",
        "longitude" => "35.9947",
        "latitude" => "6.1386"
    ],
    [
        "id" => "1395",
        "code_postal" => "43013",
        "city_name" => "Tiberguent",
        "wilaya_id" => "43",
        "ar_name" => "تيبرقنت",
        "longitude" => "36.3472",
        "latitude" => "6.0397"
    ],
    [
        "id" => "1396",
        "code_postal" => "43014",
        "city_name" => "Bouhatem",
        "wilaya_id" => "43",
        "ar_name" => "بوحاتم",
        "longitude" => "36.241",
        "latitude" => "6.015"
    ],
    [
        "id" => "1397",
        "code_postal" => "43015",
        "city_name" => "Rouached",
        "wilaya_id" => "43",
        "ar_name" => "رواشد",
        "longitude" => "36.2121",
        "latitude" => "6.2677"
    ],
    [
        "id" => "1398",
        "code_postal" => "43016",
        "city_name" => "Tessala Lamatai",
        "wilaya_id" => "43",
        "ar_name" => "تسالة لمطاي",
        "longitude" => "36.2786",
        "latitude" => "5.5893"
    ],
    [
        "id" => "1399",
        "code_postal" => "43017",
        "city_name" => "Grarem Gouga",
        "wilaya_id" => "43",
        "ar_name" => "القرارم قوقة",
        "longitude" => "36.4533",
        "latitude" => "6.3336"
    ],
    [
        "id" => "1400",
        "code_postal" => "43018",
        "city_name" => "Sidi Merouane",
        "wilaya_id" => "43",
        "ar_name" => "سيدي مروان",
        "longitude" => "36.4577",
        "latitude" => "6.2622"
    ],
    [
        "id" => "1401",
        "code_postal" => "43019",
        "city_name" => "Tassadane Haddada",
        "wilaya_id" => "43",
        "ar_name" => "تسدان حدادة",
        "longitude" => "36.345",
        "latitude" => "5.9464"
    ],
    [
        "id" => "1402",
        "code_postal" => "43020",
        "city_name" => "Derradji Bousselah",
        "wilaya_id" => "43",
        "ar_name" => "دراحي بوصلاح",
        "longitude" => "36.2764",
        "latitude" => "5.9573"
    ],
    [
        "id" => "1403",
        "code_postal" => "43021",
        "city_name" => "Minar Zarza",
        "wilaya_id" => "43",
        "ar_name" => "مينار زرزة",
        "longitude" => "36.2542",
        "latitude" => "5.5399"
    ],
    [
        "id" => "1404",
        "code_postal" => "43022",
        "city_name" => "Amira Arras",
        "wilaya_id" => "43",
        "ar_name" => "عميرة أراس",
        "longitude" => "36.2587",
        "latitude" => "6.3968"
    ],
    [
        "id" => "1405",
        "code_postal" => "43023",
        "city_name" => "Terrai Bainen",
        "wilaya_id" => "43",
        "ar_name" => "ترعى بينان",
        "longitude" => "36.4688",
        "latitude" => "6.1221"
    ],
    [
        "id" => "1406",
        "code_postal" => "43024",
        "city_name" => "Hamala",
        "wilaya_id" => "43",
        "ar_name" => "حمالة",
        "longitude" => "36.5085",
        "latitude" => "6.3391"
    ],
    [
        "id" => "1407",
        "code_postal" => "43025",
        "city_name" => "Ain Tine",
        "wilaya_id" => "43",
        "ar_name" => "عين التين",
        "longitude" => "36.3339",
        "latitude" => "6.3254"
    ],
    [
        "id" => "1408",
        "code_postal" => "43026",
        "city_name" => "El Mechira",
        "wilaya_id" => "43",
        "ar_name" => "المشيرة",
        "longitude" => "35.948",
        "latitude" => "6.232"
    ],
    [
        "id" => "1409",
        "code_postal" => "43027",
        "city_name" => "Sidi Khelifa",
        "wilaya_id" => "43",
        "ar_name" => "سيدي خليفة",
        "longitude" => "36.2875",
        "latitude" => "6.3007"
    ],
    [
        "id" => "1410",
        "code_postal" => "43028",
        "city_name" => "Zeghaia",
        "wilaya_id" => "43",
        "ar_name" => "زغاية",
        "longitude" => "36.4047",
        "latitude" => "6.1716"
    ],
    [
        "id" => "1411",
        "code_postal" => "43029",
        "city_name" => "Elayadi Barbes",
        "wilaya_id" => "43",
        "ar_name" => "العياضى برباس",
        "longitude" => "36.3782",
        "latitude" => "5.8804"
    ],
    [
        "id" => "1412",
        "code_postal" => "43030",
        "city_name" => "Ain Beida Harriche",
        "wilaya_id" => "43",
        "ar_name" => "عين البيضاء حريش",
        "longitude" => "36.3361",
        "latitude" => "5.8997"
    ],
    [
        "id" => "1413",
        "code_postal" => "43031",
        "city_name" => "Yahia Beniguecha",
        "wilaya_id" => "43",
        "ar_name" => "يحيى بنى قشة",
        "longitude" => "36.1722",
        "latitude" => "5.592"
    ],
    [
        "id" => "1414",
        "code_postal" => "43032",
        "city_name" => "Chigara",
        "wilaya_id" => "43",
        "ar_name" => "الشيقارة",
        "longitude" => "36.4975",
        "latitude" => "6.221"
    ],
    [
        "id" => "1415",
        "code_postal" => "44001",
        "city_name" => "Ain Defla",
        "wilaya_id" => "44",
        "ar_name" => "عين دفلة - عين الدفلى",
        "longitude" => "36.2",
        "latitude" => "1.9693"
    ],
    [
        "id" => "1416",
        "code_postal" => "44002",
        "city_name" => "Miliana",
        "wilaya_id" => "44",
        "ar_name" => "مليانة",
        "longitude" => "36.2266",
        "latitude" => "2.211"
    ],
    [
        "id" => "1417",
        "code_postal" => "44003",
        "city_name" => "Boumedfaa",
        "wilaya_id" => "44",
        "ar_name" => "بومدفع",
        "longitude" => "36.3063",
        "latitude" => "2.4774"
    ],
    [
        "id" => "1418",
        "code_postal" => "44004",
        "city_name" => "Khemis Miliana",
        "wilaya_id" => "44",
        "ar_name" => "خميس مليانة",
        "longitude" => "36.1955",
        "latitude" => "2.2"
    ],
    [
        "id" => "1419",
        "code_postal" => "44005",
        "city_name" => "Hammam Righa",
        "wilaya_id" => "44",
        "ar_name" => "حمام ريغة",
        "longitude" => "36.3196",
        "latitude" => "2.4005"
    ],
    [
        "id" => "1420",
        "code_postal" => "44006",
        "city_name" => "Arib",
        "wilaya_id" => "44",
        "ar_name" => "عريب",
        "longitude" => "36.2199",
        "latitude" => "2.0654"
    ],
    [
        "id" => "1421",
        "code_postal" => "44007",
        "city_name" => "Djelida",
        "wilaya_id" => "44",
        "ar_name" => "جليدة",
        "longitude" => "36.1357",
        "latitude" => "2.0847"
    ],
    [
        "id" => "1422",
        "code_postal" => "44008",
        "city_name" => "El Amra",
        "wilaya_id" => "44",
        "ar_name" => "العامرة",
        "longitude" => "36.2398",
        "latitude" => "1.8457"
    ],
    [
        "id" => "1423",
        "code_postal" => "44009",
        "city_name" => "Bourached",
        "wilaya_id" => "44",
        "ar_name" => "بوراشد",
        "longitude" => "36.1046",
        "latitude" => "1.9281"
    ],
    [
        "id" => "1424",
        "code_postal" => "44010",
        "city_name" => "El Attaf",
        "wilaya_id" => "44",
        "ar_name" => "العطاف",
        "longitude" => "36.1578",
        "latitude" => "1.6699"
    ],
    [
        "id" => "1425",
        "code_postal" => "44011",
        "city_name" => "El Abadia",
        "wilaya_id" => "44",
        "ar_name" => "العبادية",
        "longitude" => "36.2044",
        "latitude" => "1.6837"
    ],
    [
        "id" => "1426",
        "code_postal" => "44012",
        "city_name" => "Djendel",
        "wilaya_id" => "44",
        "ar_name" => "جندل",
        "longitude" => "36.1534",
        "latitude" => "2.4088"
    ],
    [
        "id" => "1427",
        "code_postal" => "44013",
        "city_name" => "Oued Chorfa",
        "wilaya_id" => "44",
        "ar_name" => "وادى الشرفاء",
        "longitude" => "36.1357",
        "latitude" => "2.5159"
    ],
    [
        "id" => "1428",
        "code_postal" => "44014",
        "city_name" => "Ain Lechiakh",
        "wilaya_id" => "44",
        "ar_name" => "عين االشياخ",
        "longitude" => "36.0935",
        "latitude" => "2.4033"
    ],
    [
        "id" => "1429",
        "code_postal" => "44015",
        "city_name" => "Oued Djemaa",
        "wilaya_id" => "44",
        "ar_name" => "وادى جمعة",
        "longitude" => "35.7354",
        "latitude" => "0.6839"
    ],
    [
        "id" => "1430",
        "code_postal" => "44016",
        "city_name" => "Rouina",
        "wilaya_id" => "44",
        "ar_name" => "روينة",
        "longitude" => "36.1867",
        "latitude" => "1.8155"
    ],
    [
        "id" => "1431",
        "code_postal" => "44017",
        "city_name" => "Zeddine",
        "wilaya_id" => "44",
        "ar_name" => "زدين",
        "longitude" => "36.1024",
        "latitude" => "1.8512"
    ],
    [
        "id" => "1432",
        "code_postal" => "44018",
        "city_name" => "El Hassania",
        "wilaya_id" => "44",
        "ar_name" => "الحسنية",
        "longitude" => "35.8824",
        "latitude" => "1.9171"
    ],
    [
        "id" => "1433",
        "code_postal" => "44019",
        "city_name" => "Bir Ouled Khelifa",
        "wilaya_id" => "44",
        "ar_name" => "بئر ولد خليفة",
        "longitude" => "36.1179",
        "latitude" => "2.233"
    ],
    [
        "id" => "1434",
        "code_postal" => "44020",
        "city_name" => "Ain Soltane",
        "wilaya_id" => "44",
        "ar_name" => "عين السلطان",
        "longitude" => "36.1822",
        "latitude" => "2.2961"
    ],
    [
        "id" => "1435",
        "code_postal" => "44021",
        "city_name" => "Tarik Ibn Ziad",
        "wilaya_id" => "44",
        "ar_name" => "طارق بن زياد",
        "longitude" => "35.9358",
        "latitude" => "2.1506"
    ],
    [
        "id" => "1436",
        "code_postal" => "44022",
        "city_name" => "Bordj Emir Khaled",
        "wilaya_id" => "44",
        "ar_name" => "برج الأمير خالد",
        "longitude" => "36.058",
        "latitude" => "2.2055"
    ],
    [
        "id" => "1437",
        "code_postal" => "44023",
        "city_name" => "Ain Torki",
        "wilaya_id" => "44",
        "ar_name" => "عين التركى",
        "longitude" => "36.2686",
        "latitude" => "2.3016"
    ],
    [
        "id" => "1438",
        "code_postal" => "44024",
        "city_name" => "Sidi Lakhdar",
        "wilaya_id" => "44",
        "ar_name" => "سيدي لخضر",
        "longitude" => "36.2022",
        "latitude" => "2.1616"
    ],
    [
        "id" => "1439",
        "code_postal" => "44025",
        "city_name" => "Ben Allal",
        "wilaya_id" => "44",
        "ar_name" => "بن علال",
        "longitude" => "36.2465",
        "latitude" => "2.1588"
    ],
    [
        "id" => "1440",
        "code_postal" => "44026",
        "city_name" => "Ain Benian",
        "wilaya_id" => "44",
        "ar_name" => "عين البنيان",
        "longitude" => "36.291",
        "latitude" => "2.472"
    ],
    [
        "id" => "1441",
        "code_postal" => "44027",
        "city_name" => "Hoceinia",
        "wilaya_id" => "44",
        "ar_name" => "حسينية",
        "longitude" => "36.2531",
        "latitude" => "2.4005"
    ],
    [
        "id" => "1442",
        "code_postal" => "44028",
        "city_name" => "Barbouche",
        "wilaya_id" => "44",
        "ar_name" => "بربوش",
        "longitude" => "36.0358",
        "latitude" => "2.4829"
    ],
    [
        "id" => "1443",
        "code_postal" => "44029",
        "city_name" => "Djemaa Ouled Chikh",
        "wilaya_id" => "44",
        "ar_name" => "جمعة أولاد الشيخ",
        "longitude" => "36.0136",
        "latitude" => "2.005"
    ],
    [
        "id" => "1444",
        "code_postal" => "44030",
        "city_name" => "Mekhatria",
        "wilaya_id" => "44",
        "ar_name" => "المخاطرية",
        "longitude" => "36.2376",
        "latitude" => "1.9611"
    ],
    [
        "id" => "1445",
        "code_postal" => "44031",
        "city_name" => "Bathia",
        "wilaya_id" => "44",
        "ar_name" => "بطحية",
        "longitude" => "35.8512",
        "latitude" => "1.8402"
    ],
    [
        "id" => "1446",
        "code_postal" => "44032",
        "city_name" => "Tachta Zegagha",
        "wilaya_id" => "44",
        "ar_name" => "تاشتة زقاغة",
        "longitude" => "36.2863",
        "latitude" => "1.6507"
    ],
    [
        "id" => "1447",
        "code_postal" => "44033",
        "city_name" => "Ain Bouyahia",
        "wilaya_id" => "44",
        "ar_name" => "عين بويحى",
        "longitude" => "36.2199",
        "latitude" => "1.7661"
    ],
    [
        "id" => "1448",
        "code_postal" => "44034",
        "city_name" => "El Maine",
        "wilaya_id" => "44",
        "ar_name" => "الماين",
        "longitude" => "35.9869",
        "latitude" => "1.7578"
    ],
    [
        "id" => "1449",
        "code_postal" => "44035",
        "city_name" => "Tiberkanine",
        "wilaya_id" => "44",
        "ar_name" => "تبركانين",
        "longitude" => "36.1024",
        "latitude" => "1.6342"
    ],
    [
        "id" => "1450",
        "code_postal" => "44036",
        "city_name" => "Belaas",
        "wilaya_id" => "44",
        "ar_name" => "بالعاص",
        "longitude" => "35.918",
        "latitude" => "1.8512"
    ],
    [
        "id" => "1451",
        "code_postal" => "45001",
        "city_name" => "Naama",
        "wilaya_id" => "45",
        "ar_name" => "النــعـامـة",
        "longitude" => "33.195",
        "latitude" => "-0.3131"
    ],
    [
        "id" => "1452",
        "code_postal" => "45002",
        "city_name" => "Mechria",
        "wilaya_id" => "45",
        "ar_name" => "مشرية",
        "longitude" => "33.4841",
        "latitude" => "-0.2829"
    ],
    [
        "id" => "1453",
        "code_postal" => "45003",
        "city_name" => "Ain Sefra",
        "wilaya_id" => "45",
        "ar_name" => "عين الصفراء",
        "longitude" => "32.6879",
        "latitude" => "-0.585"
    ],
    [
        "id" => "1454",
        "code_postal" => "45004",
        "city_name" => "Tiout",
        "wilaya_id" => "45",
        "ar_name" => "تيوت",
        "longitude" => "32.7041",
        "latitude" => "-0.4202"
    ],
    [
        "id" => "1455",
        "code_postal" => "45005",
        "city_name" => "Sfissifa",
        "wilaya_id" => "45",
        "ar_name" => "صفيصيفة",
        "longitude" => "32.6648",
        "latitude" => "-0.8679"
    ],
    [
        "id" => "1456",
        "code_postal" => "45006",
        "city_name" => "Moghrar",
        "wilaya_id" => "45",
        "ar_name" => "مغرار",
        "longitude" => "32.4495",
        "latitude" => "-0.5795"
    ],
    [
        "id" => "1457",
        "code_postal" => "45007",
        "city_name" => "Assela",
        "wilaya_id" => "45",
        "ar_name" => "عسلة",
        "longitude" => "32.9372",
        "latitude" => "-0.0769"
    ],
    [
        "id" => "1458",
        "code_postal" => "45008",
        "city_name" => "Djeniane Bourzeg",
        "wilaya_id" => "45",
        "ar_name" => "جنين بورزق",
        "longitude" => "32.3057",
        "latitude" => "-0.8047"
    ],
    [
        "id" => "1459",
        "code_postal" => "45009",
        "city_name" => "Ain Ben Khelil",
        "wilaya_id" => "45",
        "ar_name" => "عين بن خليل",
        "longitude" => "33.2226",
        "latitude" => "-0.7635"
    ],
    [
        "id" => "1460",
        "code_postal" => "45010",
        "city_name" => "Makman Ben Amer",
        "wilaya_id" => "45",
        "ar_name" => "مكمن بن عمر",
        "longitude" => "33.6512",
        "latitude" => "-0.7278"
    ],
    [
        "id" => "1461",
        "code_postal" => "45011",
        "city_name" => "Kasdir",
        "wilaya_id" => "45",
        "ar_name" => "قصدير",
        "longitude" => "33.6443",
        "latitude" => "-1.3596"
    ],
    [
        "id" => "1462",
        "code_postal" => "45012",
        "city_name" => "El Biod",
        "wilaya_id" => "45",
        "ar_name" => "البيوض",
        "longitude" => "33.6969",
        "latitude" => "-0.1346"
    ],
    [
        "id" => "1463",
        "code_postal" => "46001",
        "city_name" => "Ain Temouchent",
        "wilaya_id" => "46",
        "ar_name" => "عـيـن تـمـوشـنـت",
        "longitude" => "35.2254",
        "latitude" => "-1.1398"
    ],
    [
        "id" => "1464",
        "code_postal" => "46002",
        "city_name" => "Chaabet El Ham",
        "wilaya_id" => "46",
        "ar_name" => "شعبة اللحم",
        "longitude" => "35.2703",
        "latitude" => "-1.1014"
    ],
    [
        "id" => "1465",
        "code_postal" => "46003",
        "city_name" => "Ain Kihal",
        "wilaya_id" => "46",
        "ar_name" => "عين الكيحل",
        "longitude" => "35.1401",
        "latitude" => "-1.1948"
    ],
    [
        "id" => "1466",
        "code_postal" => "46004",
        "city_name" => "Hammam Bouhadjar",
        "wilaya_id" => "46",
        "ar_name" => "حمام بو حجر",
        "longitude" => "35.3151",
        "latitude" => "-0.9695"
    ],
    [
        "id" => "1467",
        "code_postal" => "46005",
        "city_name" => "Bou Zedjar",
        "wilaya_id" => "46",
        "ar_name" => "بوزجار",
        "longitude" => "35.5099",
        "latitude" => "-1.1673"
    ],
    [
        "id" => "1468",
        "code_postal" => "46006",
        "city_name" => "Oued Berkeche",
        "wilaya_id" => "46",
        "ar_name" => "وادى برقش",
        "longitude" => "35.1581",
        "latitude" => "-0.9833"
    ],
    [
        "id" => "1469",
        "code_postal" => "46007",
        "city_name" => "Aghlal",
        "wilaya_id" => "46",
        "ar_name" => "أغلال",
        "longitude" => "35.1356",
        "latitude" => "-1.0684"
    ],
    [
        "id" => "1470",
        "code_postal" => "46008",
        "city_name" => "Terga",
        "wilaya_id" => "46",
        "ar_name" => "تارقة",
        "longitude" => "35.3532",
        "latitude" => "-1.1783"
    ],
    [
        "id" => "1471",
        "code_postal" => "46009",
        "city_name" => "Ain El Arbaa",
        "wilaya_id" => "46",
        "ar_name" => "عين الاربعاء",
        "longitude" => "35.342",
        "latitude" => "-0.8817"
    ],
    [
        "id" => "1472",
        "code_postal" => "46010",
        "city_name" => "Tamzoura",
        "wilaya_id" => "46",
        "ar_name" => "تامزوغة",
        "longitude" => "35.3443",
        "latitude" => "-0.6564"
    ],
    [
        "id" => "1473",
        "code_postal" => "46011",
        "city_name" => "Chentouf",
        "wilaya_id" => "46",
        "ar_name" => "شنتوف",
        "longitude" => "35.2389",
        "latitude" => "-1.03"
    ],
    [
        "id" => "1474",
        "code_postal" => "46012",
        "city_name" => "Sidi Ben Adda",
        "wilaya_id" => "46",
        "ar_name" => "سيدي بن عدة",
        "longitude" => "35.2411",
        "latitude" => "-1.181"
    ],
    [
        "id" => "1475",
        "code_postal" => "46013",
        "city_name" => "Aoubellil",
        "wilaya_id" => "46",
        "ar_name" => "عقب الليل",
        "longitude" => "35.0705",
        "latitude" => "-0.9915"
    ],
    [
        "id" => "1476",
        "code_postal" => "46014",
        "city_name" => "El Malah",
        "wilaya_id" => "46",
        "ar_name" => "المالح",
        "longitude" => "35.3286",
        "latitude" => "-1.0931"
    ],
    [
        "id" => "1477",
        "code_postal" => "46015",
        "city_name" => "Sidi Boumediene",
        "wilaya_id" => "46",
        "ar_name" => "سيدي بومدين",
        "longitude" => "35.2882",
        "latitude" => "-0.8926"
    ],
    [
        "id" => "1478",
        "code_postal" => "46016",
        "city_name" => "Oued Sabah",
        "wilaya_id" => "46",
        "ar_name" => "وادى الصباح",
        "longitude" => "35.3084",
        "latitude" => "-0.8102"
    ],
    [
        "id" => "1479",
        "code_postal" => "46017",
        "city_name" => "Ouled Boudjemaa",
        "wilaya_id" => "46",
        "ar_name" => "أولاد بوجمعة",
        "longitude" => "35.4092",
        "latitude" => "-1.192"
    ],
    [
        "id" => "1480",
        "code_postal" => "46018",
        "city_name" => "Ain Tolba",
        "wilaya_id" => "46",
        "ar_name" => "عين الطلبة",
        "longitude" => "35.1828",
        "latitude" => "-1.2497"
    ],
    [
        "id" => "1481",
        "code_postal" => "46019",
        "city_name" => "El Amria",
        "wilaya_id" => "46",
        "ar_name" => "العامرية",
        "longitude" => "35.4607",
        "latitude" => "-1.0162"
    ],
    [
        "id" => "1482",
        "code_postal" => "46020",
        "city_name" => "Hassi El Ghella",
        "wilaya_id" => "46",
        "ar_name" => "حاسى الغلة",
        "longitude" => "35.389",
        "latitude" => "-1.0519"
    ],
    [
        "id" => "1483",
        "code_postal" => "46021",
        "city_name" => "Hassasna",
        "wilaya_id" => "46",
        "ar_name" => "الحساسنة",
        "longitude" => "35.2075",
        "latitude" => "-0.986"
    ],
    [
        "id" => "1484",
        "code_postal" => "46022",
        "city_name" => "Ouled Kihal",
        "wilaya_id" => "46",
        "ar_name" => "أولاد الكيحل",
        "longitude" => "35.3039",
        "latitude" => "-1.236"
    ],
    [
        "id" => "1485",
        "code_postal" => "46023",
        "city_name" => "Beni Saf",
        "wilaya_id" => "46",
        "ar_name" => "بني صاف",
        "longitude" => "35.2366",
        "latitude" => "-1.3843"
    ],
    [
        "id" => "1486",
        "code_postal" => "46024",
        "city_name" => "Sidi Safi",
        "wilaya_id" => "46",
        "ar_name" => "سيدي الصافي",
        "longitude" => "35.2165",
        "latitude" => "-1.3129"
    ],
    [
        "id" => "1487",
        "code_postal" => "46025",
        "city_name" => "Oulhaca El Gheraba",
        "wilaya_id" => "46",
        "ar_name" => "ولهاصة الغرابة",
        "longitude" => "35.1671",
        "latitude" => "-1.5051"
    ],
    [
        "id" => "1488",
        "code_postal" => "46026",
        "city_name" => "Sidi Ouriache",
        "wilaya_id" => "46",
        "ar_name" => "سيدي وريلش",
        "longitude" => "35.1244",
        "latitude" => "-1.5051"
    ],
    [
        "id" => "1489",
        "code_postal" => "46027",
        "city_name" => "El Emir Abdelkader",
        "wilaya_id" => "46",
        "ar_name" => "الأمير عبد القادر",
        "longitude" => "35.1603",
        "latitude" => "-1.4035"
    ],
    [
        "id" => "1490",
        "code_postal" => "46028",
        "city_name" => "El Messaid",
        "wilaya_id" => "46",
        "ar_name" => "المساعيد",
        "longitude" => "35.4763",
        "latitude" => "-1.1234"
    ],
    [
        "id" => "1491",
        "code_postal" => "47001",
        "city_name" => "Ghardaia",
        "wilaya_id" => "47",
        "ar_name" => "غرداية",
        "longitude" => "32.4171",
        "latitude" => "3.6832"
    ],
    [
        "id" => "1492",
        "code_postal" => "47002",
        "city_name" => "El Meniaa",
        "wilaya_id" => "47",
        "ar_name" => "المنيعة",
        "longitude" => "30.5197",
        "latitude" => "2.8812"
    ],
    [
        "id" => "1493",
        "code_postal" => "47003",
        "city_name" => "Dhayet Bendhahoua",
        "wilaya_id" => "47",
        "ar_name" => "ضاية بن ضحوة",
        "longitude" => "32.4704",
        "latitude" => "3.6063"
    ],
    [
        "id" => "1494",
        "code_postal" => "47004",
        "city_name" => "Berriane",
        "wilaya_id" => "47",
        "ar_name" => "بريان",
        "longitude" => "32.7919",
        "latitude" => "3.7628"
    ],
    [
        "id" => "1495",
        "code_postal" => "47005",
        "city_name" => "Metlili",
        "wilaya_id" => "47",
        "ar_name" => "متليلي الشعانبة",
        "longitude" => "32.2058",
        "latitude" => "3.6282"
    ],
    [
        "id" => "1496",
        "code_postal" => "47006",
        "city_name" => "El Guerrara",
        "wilaya_id" => "47",
        "ar_name" => "الڨرارة",
        "longitude" => "32.7226",
        "latitude" => "4.4934"
    ],
    [
        "id" => "1497",
        "code_postal" => "47007",
        "city_name" => "El Atteuf",
        "wilaya_id" => "47",
        "ar_name" => "العطف",
        "longitude" => "32.4101",
        "latitude" => "3.7491"
    ],
    [
        "id" => "1498",
        "code_postal" => "47008",
        "city_name" => "Zelfana",
        "wilaya_id" => "47",
        "ar_name" => "زلفانة",
        "longitude" => "32.612",
        "latitude" => "3.312"
    ],
    [
        "id" => "1499",
        "code_postal" => "47009",
        "city_name" => "Sebseb",
        "wilaya_id" => "47",
        "ar_name" => "سبسب",
        "longitude" => "32.0965",
        "latitude" => "3.5898"
    ],
    [
        "id" => "1500",
        "code_postal" => "47010",
        "city_name" => "Bounoura",
        "wilaya_id" => "47",
        "ar_name" => "بونورة",
        "longitude" => "32.4194",
        "latitude" => "3.7079"
    ],
    [
        "id" => "1501",
        "code_postal" => "47011",
        "city_name" => "Hassi Fehal",
        "wilaya_id" => "47",
        "ar_name" => "حاسي الفحل",
        "longitude" => "31.5364",
        "latitude" => "3.6749"
    ],
    [
        "id" => "1502",
        "code_postal" => "47012",
        "city_name" => "Hassi Gara",
        "wilaya_id" => "47",
        "ar_name" => "حاسي قارة",
        "longitude" => "30.4842",
        "latitude" => "2.9141"
    ],
    [
        "id" => "1503",
        "code_postal" => "47013",
        "city_name" => "Mansoura",
        "wilaya_id" => "47",
        "ar_name" => "منصورة",
        "longitude" => "31.9125",
        "latitude" => "3.7463"
    ],
    [
        "id" => "1504",
        "code_postal" => "48001",
        "city_name" => "Relizane",
        "wilaya_id" => "48",
        "ar_name" => "غيليزان",
        "longitude" => "35.6696",
        "latitude" => "0.5493"
    ],
    [
        "id" => "1505",
        "code_postal" => "48002",
        "city_name" => "Oued Rhiou",
        "wilaya_id" => "48",
        "ar_name" => "وادي رهيو",
        "longitude" => "35.9035",
        "latitude" => "0.9174"
    ],
    [
        "id" => "1506",
        "code_postal" => "48003",
        "city_name" => "Belaassel Bouzegza",
        "wilaya_id" => "48",
        "ar_name" => "بلعسل بوزقزة",
        "longitude" => "35.7766",
        "latitude" => "0.4999"
    ],
    [
        "id" => "1507",
        "code_postal" => "48004",
        "city_name" => "Sidi Saada",
        "wilaya_id" => "48",
        "ar_name" => "سيدي سعادة",
        "longitude" => "35.6227",
        "latitude" => "0.206"
    ],
    [
        "id" => "1508",
        "code_postal" => "48005",
        "city_name" => "Ouled Aiche",
        "wilaya_id" => "48",
        "ar_name" => "أولاد يعيش",
        "longitude" => "35.7788",
        "latitude" => "0.9998"
    ],
    [
        "id" => "1509",
        "code_postal" => "48006",
        "city_name" => "Sidi Lazreg",
        "wilaya_id" => "48",
        "ar_name" => "سيدي لزرق",
        "longitude" => "35.5803",
        "latitude" => "0.7745"
    ],
    [
        "id" => "1510",
        "code_postal" => "48007",
        "city_name" => "El Hamadna",
        "wilaya_id" => "48",
        "ar_name" => "الحمادنة",
        "longitude" => "35.8367",
        "latitude" => "0.7498"
    ],
    [
        "id" => "1511",
        "code_postal" => "48008",
        "city_name" => "Sidi Mhamed Ben Ali",
        "wilaya_id" => "48",
        "ar_name" => "سيدي امحمد بن علي",
        "longitude" => "36.0791",
        "latitude" => "0.8432"
    ],
    [
        "id" => "1512",
        "code_postal" => "48009",
        "city_name" => "Mediouna",
        "wilaya_id" => "48",
        "ar_name" => "مديونة",
        "longitude" => "36.0524",
        "latitude" => "0.7498"
    ],
    [
        "id" => "1513",
        "code_postal" => "48010",
        "city_name" => "Sidi Khettab",
        "wilaya_id" => "48",
        "ar_name" => "سيدي خطاب",
        "longitude" => "35.8479",
        "latitude" => "0.5109"
    ],
    [
        "id" => "1514",
        "code_postal" => "48011",
        "city_name" => "Ammi Moussa",
        "wilaya_id" => "48",
        "ar_name" => "عمي موسى",
        "longitude" => "35.8033",
        "latitude" => "1.1179"
    ],
    [
        "id" => "1515",
        "code_postal" => "48012",
        "city_name" => "Zemmoura",
        "wilaya_id" => "48",
        "ar_name" => "زمورة",
        "longitude" => "35.6539",
        "latitude" => "0.7498"
    ],
    [
        "id" => "1516",
        "code_postal" => "48013",
        "city_name" => "Beni Dergoun",
        "wilaya_id" => "48",
        "ar_name" => "بني درقن",
        "longitude" => "35.7164",
        "latitude" => "0.7993"
    ],
    [
        "id" => "1517",
        "code_postal" => "48014",
        "city_name" => "Djidiouia",
        "wilaya_id" => "48",
        "ar_name" => "جيديوة",
        "longitude" => "35.8657",
        "latitude" => "0.8295"
    ],
    [
        "id" => "1518",
        "code_postal" => "48015",
        "city_name" => "El Guettar",
        "wilaya_id" => "48",
        "ar_name" => "القطارة",
        "longitude" => "36.0236",
        "latitude" => "0.8157"
    ],
    [
        "id" => "1519",
        "code_postal" => "48016",
        "city_name" => "Hamri",
        "wilaya_id" => "48",
        "ar_name" => "الحمري",
        "longitude" => "36.042",
        "latitude" => "-0.379"
    ],
    [
        "id" => "1520",
        "code_postal" => "48017",
        "city_name" => "El Matmar",
        "wilaya_id" => "48",
        "ar_name" => "المطمار",
        "longitude" => "35.6673",
        "latitude" => "0.4614"
    ],
    [
        "id" => "1521",
        "code_postal" => "48018",
        "city_name" => "Sidi Mhamed Ben Aouda",
        "wilaya_id" => "48",
        "ar_name" => "سيدي بن عودة",
        "longitude" => "35.54",
        "latitude" => "0.5878"
    ],
    [
        "id" => "1522",
        "code_postal" => "48019",
        "city_name" => "Ain Tarek",
        "wilaya_id" => "48",
        "ar_name" => "عين طارق",
        "longitude" => "35.7164",
        "latitude" => "1.1316"
    ],
    [
        "id" => "1523",
        "code_postal" => "48020",
        "city_name" => "Oued Essalem",
        "wilaya_id" => "48",
        "ar_name" => "وادي السلام",
        "longitude" => "35.5155",
        "latitude" => "0.9256"
    ],
    [
        "id" => "1524",
        "code_postal" => "48021",
        "city_name" => "Ouarizane",
        "wilaya_id" => "48",
        "ar_name" => "ﻭﺍﺭﻳﺯﺍﻥ",
        "longitude" => "35.9813",
        "latitude" => "0.8981"
    ],
    [
        "id" => "1525",
        "code_postal" => "48022",
        "city_name" => "Mazouna",
        "wilaya_id" => "48",
        "ar_name" => "مازونة",
        "longitude" => "36.0635",
        "latitude" => "0.8762"
    ],
    [
        "id" => "1526",
        "code_postal" => "48023",
        "city_name" => "Kalaa",
        "wilaya_id" => "48",
        "ar_name" => "قلعة",
        "longitude" => "35.5177",
        "latitude" => "0.3296"
    ],
    [
        "id" => "1527",
        "code_postal" => "48024",
        "city_name" => "Ain Rahma",
        "wilaya_id" => "48",
        "ar_name" => "عين الرحمة",
        "longitude" => "35.5602",
        "latitude" => "0.3928"
    ],
    [
        "id" => "1528",
        "code_postal" => "48025",
        "city_name" => "Yellel",
        "wilaya_id" => "48",
        "ar_name" => "يلل",
        "longitude" => "35.6584",
        "latitude" => "0.3543"
    ],
    [
        "id" => "1529",
        "code_postal" => "48026",
        "city_name" => "Oued El Djemaa",
        "wilaya_id" => "48",
        "ar_name" => "وادى الجمعة",
        "longitude" => "35.7343",
        "latitude" => "0.6812"
    ],
    [
        "id" => "1530",
        "code_postal" => "48027",
        "city_name" => "Ramka",
        "wilaya_id" => "48",
        "ar_name" => "رمكة",
        "longitude" => "35.7922",
        "latitude" => "1.3321"
    ],
    [
        "id" => "1531",
        "code_postal" => "48028",
        "city_name" => "Mendes",
        "wilaya_id" => "48",
        "ar_name" => "مندس",
        "longitude" => "35.587",
        "latitude" => "0.8624"
    ],
    [
        "id" => "1532",
        "code_postal" => "48029",
        "city_name" => "Lahlef",
        "wilaya_id" => "48",
        "ar_name" => "لحلاف",
        "longitude" => "35.8301",
        "latitude" => "0.9805"
    ],
    [
        "id" => "1533",
        "code_postal" => "48030",
        "city_name" => "Beni Zentis",
        "wilaya_id" => "48",
        "ar_name" => "بني زنتيس",
        "longitude" => "36.048",
        "latitude" => "0.6647"
    ],
    [
        "id" => "1534",
        "code_postal" => "48031",
        "city_name" => "Souk El Haad",
        "wilaya_id" => "48",
        "ar_name" => "سوق الحد",
        "longitude" => "35.8924",
        "latitude" => "1.2469"
    ],
    [
        "id" => "1535",
        "code_postal" => "48032",
        "city_name" => "Dar Ben Abdellah",
        "wilaya_id" => "48",
        "ar_name" => "دار بن عبد الله",
        "longitude" => "35.6383",
        "latitude" => "0.6866"
    ],
    [
        "id" => "1536",
        "code_postal" => "48033",
        "city_name" => "El Hassi",
        "wilaya_id" => "48",
        "ar_name" => "الحاسى",
        "longitude" => "35.7075",
        "latitude" => "1.0547"
    ],
    [
        "id" => "1537",
        "code_postal" => "48034",
        "city_name" => "Had Echkalla",
        "wilaya_id" => "48",
        "ar_name" => "حد الشقالة",
        "longitude" => "35.616",
        "latitude" => "1.1481"
    ],
    [
        "id" => "1538",
        "code_postal" => "48035",
        "city_name" => "Bendaoud",
        "wilaya_id" => "48",
        "ar_name" => "بن داود",
        "longitude" => "35.6562",
        "latitude" => "0.5191"
    ],
    [
        "id" => "1539",
        "code_postal" => "48036",
        "city_name" => "El Ouldja",
        "wilaya_id" => "48",
        "ar_name" => "العلجة",
        "longitude" => "35.8479",
        "latitude" => "1.1206"
    ],
    [
        "id" => "1540",
        "code_postal" => "48037",
        "city_name" => "Merdja Sidi Abed",
        "wilaya_id" => "48",
        "ar_name" => "مرجة سيدي عابد",
        "longitude" => "36.013883",
        "latitude" => "0.989746"
    ],
    [
        "id" => "1541",
        "code_postal" => "48038",
        "city_name" => "Ouled Sidi Mihoub",
        "wilaya_id" => "48",
        "ar_name" => "أولاد سيدي ميهوب",
        "longitude" => "35.9752",
        "latitude" => "0.6916"
    ],

];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert($this->cities);
    }

}
    

