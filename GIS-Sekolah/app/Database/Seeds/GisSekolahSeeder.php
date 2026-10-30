<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use RuntimeException;
use Throwable;

class GisSekolahSeeder extends Seeder
{
    private const DATA = <<<'GIS_SEED_DATA'
{
  "tbl_jenjang": [
    {
      "id_jenjang": 1,
      "jenjang": "TK",
      "marker": "tk.png"
    },
    {
      "id_jenjang": 2,
      "jenjang": "SD",
      "marker": "sd.png"
    },
    {
      "id_jenjang": 3,
      "jenjang": "SMP",
      "marker": "smp.png"
    },
    {
      "id_jenjang": 4,
      "jenjang": "SMA",
      "marker": "sma.png"
    }
  ],
  "tbl_kabupaten": [
    {
      "id_kabupaten": "1101",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN SIMEULUE"
    },
    {
      "id_kabupaten": "1102",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH SINGKIL"
    },
    {
      "id_kabupaten": "1103",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH SELATAN"
    },
    {
      "id_kabupaten": "1104",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH TENGGARA"
    },
    {
      "id_kabupaten": "1105",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH TIMUR"
    },
    {
      "id_kabupaten": "1106",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH TENGAH"
    },
    {
      "id_kabupaten": "1107",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH BARAT"
    },
    {
      "id_kabupaten": "1108",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH BESAR"
    },
    {
      "id_kabupaten": "1109",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN PIDIE"
    },
    {
      "id_kabupaten": "1110",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN BIREUEN"
    },
    {
      "id_kabupaten": "1111",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH UTARA"
    },
    {
      "id_kabupaten": "1112",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH BARAT DAYA"
    },
    {
      "id_kabupaten": "1113",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN GAYO LUES"
    },
    {
      "id_kabupaten": "1114",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH TAMIANG"
    },
    {
      "id_kabupaten": "1115",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN NAGAN RAYA"
    },
    {
      "id_kabupaten": "1116",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN ACEH JAYA"
    },
    {
      "id_kabupaten": "1117",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN BENER MERIAH"
    },
    {
      "id_kabupaten": "1118",
      "id_provinsi": "11",
      "nama_kabupaten": "KABUPATEN PIDIE JAYA"
    },
    {
      "id_kabupaten": "1171",
      "id_provinsi": "11",
      "nama_kabupaten": "KOTA BANDA ACEH"
    },
    {
      "id_kabupaten": "1172",
      "id_provinsi": "11",
      "nama_kabupaten": "KOTA SABANG"
    },
    {
      "id_kabupaten": "1173",
      "id_provinsi": "11",
      "nama_kabupaten": "KOTA LANGSA"
    },
    {
      "id_kabupaten": "1174",
      "id_provinsi": "11",
      "nama_kabupaten": "KOTA LHOKSEUMAWE"
    },
    {
      "id_kabupaten": "1175",
      "id_provinsi": "11",
      "nama_kabupaten": "KOTA SUBULUSSALAM"
    },
    {
      "id_kabupaten": "1201",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN NIAS"
    },
    {
      "id_kabupaten": "1202",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN MANDAILING NATAL"
    },
    {
      "id_kabupaten": "1203",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN TAPANULI SELATAN"
    },
    {
      "id_kabupaten": "1204",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN TAPANULI TENGAH"
    },
    {
      "id_kabupaten": "1205",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN TAPANULI UTARA"
    },
    {
      "id_kabupaten": "1206",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN TOBA SAMOSIR"
    },
    {
      "id_kabupaten": "1207",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN LABUHAN BATU"
    },
    {
      "id_kabupaten": "1208",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN ASAHAN"
    },
    {
      "id_kabupaten": "1209",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN SIMALUNGUN"
    },
    {
      "id_kabupaten": "1210",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN DAIRI"
    },
    {
      "id_kabupaten": "1211",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN KARO"
    },
    {
      "id_kabupaten": "1212",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN DELI SERDANG"
    },
    {
      "id_kabupaten": "1213",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN LANGKAT"
    },
    {
      "id_kabupaten": "1214",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN NIAS SELATAN"
    },
    {
      "id_kabupaten": "1215",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN HUMBANG HASUNDUTAN"
    },
    {
      "id_kabupaten": "1216",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN PAKPAK BHARAT"
    },
    {
      "id_kabupaten": "1217",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN SAMOSIR"
    },
    {
      "id_kabupaten": "1218",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN SERDANG BEDAGAI"
    },
    {
      "id_kabupaten": "1219",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN BATU BARA"
    },
    {
      "id_kabupaten": "1220",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN PADANG LAWAS UTARA"
    },
    {
      "id_kabupaten": "1221",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN PADANG LAWAS"
    },
    {
      "id_kabupaten": "1222",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN LABUHAN BATU SELATAN"
    },
    {
      "id_kabupaten": "1223",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN LABUHAN BATU UTARA"
    },
    {
      "id_kabupaten": "1224",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN NIAS UTARA"
    },
    {
      "id_kabupaten": "1225",
      "id_provinsi": "12",
      "nama_kabupaten": "KABUPATEN NIAS BARAT"
    },
    {
      "id_kabupaten": "1271",
      "id_provinsi": "12",
      "nama_kabupaten": "KOTA SIBOLGA"
    },
    {
      "id_kabupaten": "1272",
      "id_provinsi": "12",
      "nama_kabupaten": "KOTA TANJUNG BALAI"
    },
    {
      "id_kabupaten": "1273",
      "id_provinsi": "12",
      "nama_kabupaten": "KOTA PEMATANG SIANTAR"
    },
    {
      "id_kabupaten": "1274",
      "id_provinsi": "12",
      "nama_kabupaten": "KOTA TEBING TINGGI"
    },
    {
      "id_kabupaten": "1275",
      "id_provinsi": "12",
      "nama_kabupaten": "KOTA MEDAN"
    },
    {
      "id_kabupaten": "1276",
      "id_provinsi": "12",
      "nama_kabupaten": "KOTA BINJAI"
    },
    {
      "id_kabupaten": "1277",
      "id_provinsi": "12",
      "nama_kabupaten": "KOTA PADANGSIDIMPUAN"
    },
    {
      "id_kabupaten": "1278",
      "id_provinsi": "12",
      "nama_kabupaten": "KOTA GUNUNGSITOLI"
    },
    {
      "id_kabupaten": "1301",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN KEPULAUAN MENTAWAI"
    },
    {
      "id_kabupaten": "1302",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN PESISIR SELATAN"
    },
    {
      "id_kabupaten": "1303",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN SOLOK"
    },
    {
      "id_kabupaten": "1304",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN SIJUNJUNG"
    },
    {
      "id_kabupaten": "1305",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN TANAH DATAR"
    },
    {
      "id_kabupaten": "1306",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN PADANG PARIAMAN"
    },
    {
      "id_kabupaten": "1307",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN AGAM"
    },
    {
      "id_kabupaten": "1308",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN LIMA PULUH KOTA"
    },
    {
      "id_kabupaten": "1309",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN PASAMAN"
    },
    {
      "id_kabupaten": "1310",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN SOLOK SELATAN"
    },
    {
      "id_kabupaten": "1311",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN DHARMASRAYA"
    },
    {
      "id_kabupaten": "1312",
      "id_provinsi": "13",
      "nama_kabupaten": "KABUPATEN PASAMAN BARAT"
    },
    {
      "id_kabupaten": "1371",
      "id_provinsi": "13",
      "nama_kabupaten": "KOTA PADANG"
    },
    {
      "id_kabupaten": "1372",
      "id_provinsi": "13",
      "nama_kabupaten": "KOTA SOLOK"
    },
    {
      "id_kabupaten": "1373",
      "id_provinsi": "13",
      "nama_kabupaten": "KOTA SAWAH LUNTO"
    },
    {
      "id_kabupaten": "1374",
      "id_provinsi": "13",
      "nama_kabupaten": "KOTA PADANG PANJANG"
    },
    {
      "id_kabupaten": "1375",
      "id_provinsi": "13",
      "nama_kabupaten": "KOTA BUKITTINGGI"
    },
    {
      "id_kabupaten": "1376",
      "id_provinsi": "13",
      "nama_kabupaten": "KOTA PAYAKUMBUH"
    },
    {
      "id_kabupaten": "1377",
      "id_provinsi": "13",
      "nama_kabupaten": "KOTA PARIAMAN"
    },
    {
      "id_kabupaten": "1401",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN KUANTAN SINGINGI"
    },
    {
      "id_kabupaten": "1402",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN INDRAGIRI HULU"
    },
    {
      "id_kabupaten": "1403",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN INDRAGIRI HILIR"
    },
    {
      "id_kabupaten": "1404",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN PELALAWAN"
    },
    {
      "id_kabupaten": "1405",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN S I A K"
    },
    {
      "id_kabupaten": "1406",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN KAMPAR"
    },
    {
      "id_kabupaten": "1407",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN ROKAN HULU"
    },
    {
      "id_kabupaten": "1408",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN BENGKALIS"
    },
    {
      "id_kabupaten": "1409",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN ROKAN HILIR"
    },
    {
      "id_kabupaten": "1410",
      "id_provinsi": "14",
      "nama_kabupaten": "KABUPATEN KEPULAUAN MERANTI"
    },
    {
      "id_kabupaten": "1471",
      "id_provinsi": "14",
      "nama_kabupaten": "KOTA PEKANBARU"
    },
    {
      "id_kabupaten": "1473",
      "id_provinsi": "14",
      "nama_kabupaten": "KOTA D U M A I"
    },
    {
      "id_kabupaten": "1501",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN KERINCI"
    },
    {
      "id_kabupaten": "1502",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN MERANGIN"
    },
    {
      "id_kabupaten": "1503",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN SAROLANGUN"
    },
    {
      "id_kabupaten": "1504",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN BATANG HARI"
    },
    {
      "id_kabupaten": "1505",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN MUARO JAMBI"
    },
    {
      "id_kabupaten": "1506",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN TANJUNG JABUNG TIMUR"
    },
    {
      "id_kabupaten": "1507",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN TANJUNG JABUNG BARAT"
    },
    {
      "id_kabupaten": "1508",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN TEBO"
    },
    {
      "id_kabupaten": "1509",
      "id_provinsi": "15",
      "nama_kabupaten": "KABUPATEN BUNGO"
    },
    {
      "id_kabupaten": "1571",
      "id_provinsi": "15",
      "nama_kabupaten": "KOTA JAMBI"
    },
    {
      "id_kabupaten": "1572",
      "id_provinsi": "15",
      "nama_kabupaten": "KOTA SUNGAI PENUH"
    },
    {
      "id_kabupaten": "1601",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN OGAN KOMERING ULU"
    },
    {
      "id_kabupaten": "1602",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN OGAN KOMERING ILIR"
    },
    {
      "id_kabupaten": "1603",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN MUARA ENIM"
    },
    {
      "id_kabupaten": "1604",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN LAHAT"
    },
    {
      "id_kabupaten": "1605",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN MUSI RAWAS"
    },
    {
      "id_kabupaten": "1606",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN MUSI BANYUASIN"
    },
    {
      "id_kabupaten": "1607",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN BANYU ASIN"
    },
    {
      "id_kabupaten": "1608",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN OGAN KOMERING ULU SELATAN"
    },
    {
      "id_kabupaten": "1609",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN OGAN KOMERING ULU TIMUR"
    },
    {
      "id_kabupaten": "1610",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN OGAN ILIR"
    },
    {
      "id_kabupaten": "1611",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN EMPAT LAWANG"
    },
    {
      "id_kabupaten": "1612",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN PENUKAL ABAB LEMATANG ILIR"
    },
    {
      "id_kabupaten": "1613",
      "id_provinsi": "16",
      "nama_kabupaten": "KABUPATEN MUSI RAWAS UTARA"
    },
    {
      "id_kabupaten": "1671",
      "id_provinsi": "16",
      "nama_kabupaten": "KOTA PALEMBANG"
    },
    {
      "id_kabupaten": "1672",
      "id_provinsi": "16",
      "nama_kabupaten": "KOTA PRABUMULIH"
    },
    {
      "id_kabupaten": "1673",
      "id_provinsi": "16",
      "nama_kabupaten": "KOTA PAGAR ALAM"
    },
    {
      "id_kabupaten": "1674",
      "id_provinsi": "16",
      "nama_kabupaten": "KOTA LUBUKLINGGAU"
    },
    {
      "id_kabupaten": "1701",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN BENGKULU SELATAN"
    },
    {
      "id_kabupaten": "1702",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN REJANG LEBONG"
    },
    {
      "id_kabupaten": "1703",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN BENGKULU UTARA"
    },
    {
      "id_kabupaten": "1704",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN KAUR"
    },
    {
      "id_kabupaten": "1705",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN SELUMA"
    },
    {
      "id_kabupaten": "1706",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN MUKOMUKO"
    },
    {
      "id_kabupaten": "1707",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN LEBONG"
    },
    {
      "id_kabupaten": "1708",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN KEPAHIANG"
    },
    {
      "id_kabupaten": "1709",
      "id_provinsi": "17",
      "nama_kabupaten": "KABUPATEN BENGKULU TENGAH"
    },
    {
      "id_kabupaten": "1771",
      "id_provinsi": "17",
      "nama_kabupaten": "KOTA BENGKULU"
    },
    {
      "id_kabupaten": "1801",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN LAMPUNG BARAT"
    },
    {
      "id_kabupaten": "1802",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN TANGGAMUS"
    },
    {
      "id_kabupaten": "1803",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN LAMPUNG SELATAN"
    },
    {
      "id_kabupaten": "1804",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN LAMPUNG TIMUR"
    },
    {
      "id_kabupaten": "1805",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN LAMPUNG TENGAH"
    },
    {
      "id_kabupaten": "1806",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN LAMPUNG UTARA"
    },
    {
      "id_kabupaten": "1807",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN WAY KANAN"
    },
    {
      "id_kabupaten": "1808",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN TULANGBAWANG"
    },
    {
      "id_kabupaten": "1809",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN PESAWARAN"
    },
    {
      "id_kabupaten": "1810",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN PRINGSEWU"
    },
    {
      "id_kabupaten": "1811",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN MESUJI"
    },
    {
      "id_kabupaten": "1812",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN TULANG BAWANG BARAT"
    },
    {
      "id_kabupaten": "1813",
      "id_provinsi": "18",
      "nama_kabupaten": "KABUPATEN PESISIR BARAT"
    },
    {
      "id_kabupaten": "1871",
      "id_provinsi": "18",
      "nama_kabupaten": "KOTA BANDAR LAMPUNG"
    },
    {
      "id_kabupaten": "1872",
      "id_provinsi": "18",
      "nama_kabupaten": "KOTA METRO"
    },
    {
      "id_kabupaten": "1901",
      "id_provinsi": "19",
      "nama_kabupaten": "KABUPATEN BANGKA"
    },
    {
      "id_kabupaten": "1902",
      "id_provinsi": "19",
      "nama_kabupaten": "KABUPATEN BELITUNG"
    },
    {
      "id_kabupaten": "1903",
      "id_provinsi": "19",
      "nama_kabupaten": "KABUPATEN BANGKA BARAT"
    },
    {
      "id_kabupaten": "1904",
      "id_provinsi": "19",
      "nama_kabupaten": "KABUPATEN BANGKA TENGAH"
    },
    {
      "id_kabupaten": "1905",
      "id_provinsi": "19",
      "nama_kabupaten": "KABUPATEN BANGKA SELATAN"
    },
    {
      "id_kabupaten": "1906",
      "id_provinsi": "19",
      "nama_kabupaten": "KABUPATEN BELITUNG TIMUR"
    },
    {
      "id_kabupaten": "1971",
      "id_provinsi": "19",
      "nama_kabupaten": "KOTA PANGKAL PINANG"
    },
    {
      "id_kabupaten": "2101",
      "id_provinsi": "21",
      "nama_kabupaten": "KABUPATEN KARIMUN"
    },
    {
      "id_kabupaten": "2102",
      "id_provinsi": "21",
      "nama_kabupaten": "KABUPATEN BINTAN"
    },
    {
      "id_kabupaten": "2103",
      "id_provinsi": "21",
      "nama_kabupaten": "KABUPATEN NATUNA"
    },
    {
      "id_kabupaten": "2104",
      "id_provinsi": "21",
      "nama_kabupaten": "KABUPATEN LINGGA"
    },
    {
      "id_kabupaten": "2105",
      "id_provinsi": "21",
      "nama_kabupaten": "KABUPATEN KEPULAUAN ANAMBAS"
    },
    {
      "id_kabupaten": "2171",
      "id_provinsi": "21",
      "nama_kabupaten": "KOTA B A T A M"
    },
    {
      "id_kabupaten": "2172",
      "id_provinsi": "21",
      "nama_kabupaten": "KOTA TANJUNG PINANG"
    },
    {
      "id_kabupaten": "3101",
      "id_provinsi": "31",
      "nama_kabupaten": "KABUPATEN KEPULAUAN SERIBU"
    },
    {
      "id_kabupaten": "3171",
      "id_provinsi": "31",
      "nama_kabupaten": "KOTA JAKARTA SELATAN"
    },
    {
      "id_kabupaten": "3172",
      "id_provinsi": "31",
      "nama_kabupaten": "KOTA JAKARTA TIMUR"
    },
    {
      "id_kabupaten": "3173",
      "id_provinsi": "31",
      "nama_kabupaten": "KOTA JAKARTA PUSAT"
    },
    {
      "id_kabupaten": "3174",
      "id_provinsi": "31",
      "nama_kabupaten": "KOTA JAKARTA BARAT"
    },
    {
      "id_kabupaten": "3175",
      "id_provinsi": "31",
      "nama_kabupaten": "KOTA JAKARTA UTARA"
    },
    {
      "id_kabupaten": "3201",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN BOGOR"
    },
    {
      "id_kabupaten": "3202",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN SUKABUMI"
    },
    {
      "id_kabupaten": "3203",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN CIANJUR"
    },
    {
      "id_kabupaten": "3204",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN BANDUNG"
    },
    {
      "id_kabupaten": "3205",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN GARUT"
    },
    {
      "id_kabupaten": "3206",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN TASIKMALAYA"
    },
    {
      "id_kabupaten": "3207",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN CIAMIS"
    },
    {
      "id_kabupaten": "3208",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN KUNINGAN"
    },
    {
      "id_kabupaten": "3209",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN CIREBON"
    },
    {
      "id_kabupaten": "3210",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN MAJALENGKA"
    },
    {
      "id_kabupaten": "3211",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN SUMEDANG"
    },
    {
      "id_kabupaten": "3212",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN INDRAMAYU"
    },
    {
      "id_kabupaten": "3213",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN SUBANG"
    },
    {
      "id_kabupaten": "3214",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN PURWAKARTA"
    },
    {
      "id_kabupaten": "3215",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN KARAWANG"
    },
    {
      "id_kabupaten": "3216",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN BEKASI"
    },
    {
      "id_kabupaten": "3217",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN BANDUNG BARAT"
    },
    {
      "id_kabupaten": "3218",
      "id_provinsi": "32",
      "nama_kabupaten": "KABUPATEN PANGANDARAN"
    },
    {
      "id_kabupaten": "3271",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA BOGOR"
    },
    {
      "id_kabupaten": "3272",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA SUKABUMI"
    },
    {
      "id_kabupaten": "3273",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA BANDUNG"
    },
    {
      "id_kabupaten": "3274",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA CIREBON"
    },
    {
      "id_kabupaten": "3275",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA BEKASI"
    },
    {
      "id_kabupaten": "3276",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA DEPOK"
    },
    {
      "id_kabupaten": "3277",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA CIMAHI"
    },
    {
      "id_kabupaten": "3278",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA TASIKMALAYA"
    },
    {
      "id_kabupaten": "3279",
      "id_provinsi": "32",
      "nama_kabupaten": "KOTA BANJAR"
    },
    {
      "id_kabupaten": "3301",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN CILACAP"
    },
    {
      "id_kabupaten": "3302",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN BANYUMAS"
    },
    {
      "id_kabupaten": "3303",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN PURBALINGGA"
    },
    {
      "id_kabupaten": "3304",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN BANJARNEGARA"
    },
    {
      "id_kabupaten": "3305",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN KEBUMEN"
    },
    {
      "id_kabupaten": "3306",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN PURWOREJO"
    },
    {
      "id_kabupaten": "3307",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN WONOSOBO"
    },
    {
      "id_kabupaten": "3308",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN MAGELANG"
    },
    {
      "id_kabupaten": "3309",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN BOYOLALI"
    },
    {
      "id_kabupaten": "3310",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN KLATEN"
    },
    {
      "id_kabupaten": "3311",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN SUKOHARJO"
    },
    {
      "id_kabupaten": "3312",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN WONOGIRI"
    },
    {
      "id_kabupaten": "3313",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN KARANGANYAR"
    },
    {
      "id_kabupaten": "3314",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN SRAGEN"
    },
    {
      "id_kabupaten": "3315",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN GROBOGAN"
    },
    {
      "id_kabupaten": "3316",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN BLORA"
    },
    {
      "id_kabupaten": "3317",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN REMBANG"
    },
    {
      "id_kabupaten": "3318",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN PATI"
    },
    {
      "id_kabupaten": "3319",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN KUDUS"
    },
    {
      "id_kabupaten": "3320",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN JEPARA"
    },
    {
      "id_kabupaten": "3321",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN DEMAK"
    },
    {
      "id_kabupaten": "3322",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN SEMARANG"
    },
    {
      "id_kabupaten": "3323",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN TEMANGGUNG"
    },
    {
      "id_kabupaten": "3324",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN KENDAL"
    },
    {
      "id_kabupaten": "3325",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN BATANG"
    },
    {
      "id_kabupaten": "3326",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN PEKALONGAN"
    },
    {
      "id_kabupaten": "3327",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN PEMALANG"
    },
    {
      "id_kabupaten": "3328",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN TEGAL"
    },
    {
      "id_kabupaten": "3329",
      "id_provinsi": "33",
      "nama_kabupaten": "KABUPATEN BREBES"
    },
    {
      "id_kabupaten": "3371",
      "id_provinsi": "33",
      "nama_kabupaten": "KOTA MAGELANG"
    },
    {
      "id_kabupaten": "3372",
      "id_provinsi": "33",
      "nama_kabupaten": "KOTA SURAKARTA"
    },
    {
      "id_kabupaten": "3373",
      "id_provinsi": "33",
      "nama_kabupaten": "KOTA SALATIGA"
    },
    {
      "id_kabupaten": "3374",
      "id_provinsi": "33",
      "nama_kabupaten": "KOTA SEMARANG"
    },
    {
      "id_kabupaten": "3375",
      "id_provinsi": "33",
      "nama_kabupaten": "KOTA PEKALONGAN"
    },
    {
      "id_kabupaten": "3376",
      "id_provinsi": "33",
      "nama_kabupaten": "KOTA TEGAL"
    },
    {
      "id_kabupaten": "3401",
      "id_provinsi": "34",
      "nama_kabupaten": "KABUPATEN KULON PROGO"
    },
    {
      "id_kabupaten": "3402",
      "id_provinsi": "34",
      "nama_kabupaten": "KABUPATEN BANTUL"
    },
    {
      "id_kabupaten": "3403",
      "id_provinsi": "34",
      "nama_kabupaten": "KABUPATEN GUNUNG KIDUL"
    },
    {
      "id_kabupaten": "3404",
      "id_provinsi": "34",
      "nama_kabupaten": "KABUPATEN SLEMAN"
    },
    {
      "id_kabupaten": "3471",
      "id_provinsi": "34",
      "nama_kabupaten": "KOTA YOGYAKARTA"
    },
    {
      "id_kabupaten": "3501",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN PACITAN"
    },
    {
      "id_kabupaten": "3502",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN PONOROGO"
    },
    {
      "id_kabupaten": "3503",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN TRENGGALEK"
    },
    {
      "id_kabupaten": "3504",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN TULUNGAGUNG"
    },
    {
      "id_kabupaten": "3505",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN BLITAR"
    },
    {
      "id_kabupaten": "3506",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN KEDIRI"
    },
    {
      "id_kabupaten": "3507",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN MALANG"
    },
    {
      "id_kabupaten": "3508",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN LUMAJANG"
    },
    {
      "id_kabupaten": "3509",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN JEMBER"
    },
    {
      "id_kabupaten": "3510",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN BANYUWANGI"
    },
    {
      "id_kabupaten": "3511",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN BONDOWOSO"
    },
    {
      "id_kabupaten": "3512",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN SITUBONDO"
    },
    {
      "id_kabupaten": "3513",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN PROBOLINGGO"
    },
    {
      "id_kabupaten": "3514",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN PASURUAN"
    },
    {
      "id_kabupaten": "3515",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN SIDOARJO"
    },
    {
      "id_kabupaten": "3516",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN MOJOKERTO"
    },
    {
      "id_kabupaten": "3517",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN JOMBANG"
    },
    {
      "id_kabupaten": "3518",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN NGANJUK"
    },
    {
      "id_kabupaten": "3519",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN MADIUN"
    },
    {
      "id_kabupaten": "3520",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN MAGETAN"
    },
    {
      "id_kabupaten": "3521",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN NGAWI"
    },
    {
      "id_kabupaten": "3522",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN BOJONEGORO"
    },
    {
      "id_kabupaten": "3523",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN TUBAN"
    },
    {
      "id_kabupaten": "3524",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN LAMONGAN"
    },
    {
      "id_kabupaten": "3525",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN GRESIK"
    },
    {
      "id_kabupaten": "3526",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN BANGKALAN"
    },
    {
      "id_kabupaten": "3527",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN SAMPANG"
    },
    {
      "id_kabupaten": "3528",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN PAMEKASAN"
    },
    {
      "id_kabupaten": "3529",
      "id_provinsi": "35",
      "nama_kabupaten": "KABUPATEN SUMENEP"
    },
    {
      "id_kabupaten": "3571",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA KEDIRI"
    },
    {
      "id_kabupaten": "3572",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA BLITAR"
    },
    {
      "id_kabupaten": "3573",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA MALANG"
    },
    {
      "id_kabupaten": "3574",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA PROBOLINGGO"
    },
    {
      "id_kabupaten": "3575",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA PASURUAN"
    },
    {
      "id_kabupaten": "3576",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA MOJOKERTO"
    },
    {
      "id_kabupaten": "3577",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA MADIUN"
    },
    {
      "id_kabupaten": "3578",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA SURABAYA"
    },
    {
      "id_kabupaten": "3579",
      "id_provinsi": "35",
      "nama_kabupaten": "KOTA BATU"
    },
    {
      "id_kabupaten": "3601",
      "id_provinsi": "36",
      "nama_kabupaten": "KABUPATEN PANDEGLANG"
    },
    {
      "id_kabupaten": "3602",
      "id_provinsi": "36",
      "nama_kabupaten": "KABUPATEN LEBAK"
    },
    {
      "id_kabupaten": "3603",
      "id_provinsi": "36",
      "nama_kabupaten": "KABUPATEN TANGERANG"
    },
    {
      "id_kabupaten": "3604",
      "id_provinsi": "36",
      "nama_kabupaten": "KABUPATEN SERANG"
    },
    {
      "id_kabupaten": "3671",
      "id_provinsi": "36",
      "nama_kabupaten": "KOTA TANGERANG"
    },
    {
      "id_kabupaten": "3672",
      "id_provinsi": "36",
      "nama_kabupaten": "KOTA CILEGON"
    },
    {
      "id_kabupaten": "3673",
      "id_provinsi": "36",
      "nama_kabupaten": "KOTA SERANG"
    },
    {
      "id_kabupaten": "3674",
      "id_provinsi": "36",
      "nama_kabupaten": "KOTA TANGERANG SELATAN"
    },
    {
      "id_kabupaten": "5101",
      "id_provinsi": "51",
      "nama_kabupaten": "KABUPATEN JEMBRANA"
    },
    {
      "id_kabupaten": "5102",
      "id_provinsi": "51",
      "nama_kabupaten": "KABUPATEN TABANAN"
    },
    {
      "id_kabupaten": "5103",
      "id_provinsi": "51",
      "nama_kabupaten": "KABUPATEN BADUNG"
    },
    {
      "id_kabupaten": "5104",
      "id_provinsi": "51",
      "nama_kabupaten": "KABUPATEN GIANYAR"
    },
    {
      "id_kabupaten": "5105",
      "id_provinsi": "51",
      "nama_kabupaten": "KABUPATEN KLUNGKUNG"
    },
    {
      "id_kabupaten": "5106",
      "id_provinsi": "51",
      "nama_kabupaten": "KABUPATEN BANGLI"
    },
    {
      "id_kabupaten": "5107",
      "id_provinsi": "51",
      "nama_kabupaten": "KABUPATEN KARANG ASEM"
    },
    {
      "id_kabupaten": "5108",
      "id_provinsi": "51",
      "nama_kabupaten": "KABUPATEN BULELENG"
    },
    {
      "id_kabupaten": "5171",
      "id_provinsi": "51",
      "nama_kabupaten": "KOTA DENPASAR"
    },
    {
      "id_kabupaten": "5201",
      "id_provinsi": "52",
      "nama_kabupaten": "KABUPATEN LOMBOK BARAT"
    },
    {
      "id_kabupaten": "5202",
      "id_provinsi": "52",
      "nama_kabupaten": "KABUPATEN LOMBOK TENGAH"
    },
    {
      "id_kabupaten": "5203",
      "id_provinsi": "52",
      "nama_kabupaten": "KABUPATEN LOMBOK TIMUR"
    },
    {
      "id_kabupaten": "5204",
      "id_provinsi": "52",
      "nama_kabupaten": "KABUPATEN SUMBAWA"
    },
    {
      "id_kabupaten": "5205",
      "id_provinsi": "52",
      "nama_kabupaten": "KABUPATEN DOMPU"
    },
    {
      "id_kabupaten": "5206",
      "id_provinsi": "52",
      "nama_kabupaten": "KABUPATEN BIMA"
    },
    {
      "id_kabupaten": "5207",
      "id_provinsi": "52",
      "nama_kabupaten": "KABUPATEN SUMBAWA BARAT"
    },
    {
      "id_kabupaten": "5208",
      "id_provinsi": "52",
      "nama_kabupaten": "KABUPATEN LOMBOK UTARA"
    },
    {
      "id_kabupaten": "5271",
      "id_provinsi": "52",
      "nama_kabupaten": "KOTA MATARAM"
    },
    {
      "id_kabupaten": "5272",
      "id_provinsi": "52",
      "nama_kabupaten": "KOTA BIMA"
    },
    {
      "id_kabupaten": "5301",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN SUMBA BARAT"
    },
    {
      "id_kabupaten": "5302",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN SUMBA TIMUR"
    },
    {
      "id_kabupaten": "5303",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN KUPANG"
    },
    {
      "id_kabupaten": "5304",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN TIMOR TENGAH SELATAN"
    },
    {
      "id_kabupaten": "5305",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN TIMOR TENGAH UTARA"
    },
    {
      "id_kabupaten": "5306",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN BELU"
    },
    {
      "id_kabupaten": "5307",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN ALOR"
    },
    {
      "id_kabupaten": "5308",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN LEMBATA"
    },
    {
      "id_kabupaten": "5309",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN FLORES TIMUR"
    },
    {
      "id_kabupaten": "5310",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN SIKKA"
    },
    {
      "id_kabupaten": "5311",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN ENDE"
    },
    {
      "id_kabupaten": "5312",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN NGADA"
    },
    {
      "id_kabupaten": "5313",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN MANGGARAI"
    },
    {
      "id_kabupaten": "5314",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN ROTE NDAO"
    },
    {
      "id_kabupaten": "5315",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN MANGGARAI BARAT"
    },
    {
      "id_kabupaten": "5316",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN SUMBA TENGAH"
    },
    {
      "id_kabupaten": "5317",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN SUMBA BARAT DAYA"
    },
    {
      "id_kabupaten": "5318",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN NAGEKEO"
    },
    {
      "id_kabupaten": "5319",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN MANGGARAI TIMUR"
    },
    {
      "id_kabupaten": "5320",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN SABU RAIJUA"
    },
    {
      "id_kabupaten": "5321",
      "id_provinsi": "53",
      "nama_kabupaten": "KABUPATEN MALAKA"
    },
    {
      "id_kabupaten": "5371",
      "id_provinsi": "53",
      "nama_kabupaten": "KOTA KUPANG"
    },
    {
      "id_kabupaten": "6101",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN SAMBAS"
    },
    {
      "id_kabupaten": "6102",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN BENGKAYANG"
    },
    {
      "id_kabupaten": "6103",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN LANDAK"
    },
    {
      "id_kabupaten": "6104",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN MEMPAWAH"
    },
    {
      "id_kabupaten": "6105",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN SANGGAU"
    },
    {
      "id_kabupaten": "6106",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN KETAPANG"
    },
    {
      "id_kabupaten": "6107",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN SINTANG"
    },
    {
      "id_kabupaten": "6108",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN KAPUAS HULU"
    },
    {
      "id_kabupaten": "6109",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN SEKADAU"
    },
    {
      "id_kabupaten": "6110",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN MELAWI"
    },
    {
      "id_kabupaten": "6111",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN KAYONG UTARA"
    },
    {
      "id_kabupaten": "6112",
      "id_provinsi": "61",
      "nama_kabupaten": "KABUPATEN KUBU RAYA"
    },
    {
      "id_kabupaten": "6171",
      "id_provinsi": "61",
      "nama_kabupaten": "KOTA PONTIANAK"
    },
    {
      "id_kabupaten": "6172",
      "id_provinsi": "61",
      "nama_kabupaten": "KOTA SINGKAWANG"
    },
    {
      "id_kabupaten": "6201",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN KOTAWARINGIN BARAT"
    },
    {
      "id_kabupaten": "6202",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN KOTAWARINGIN TIMUR"
    },
    {
      "id_kabupaten": "6203",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN KAPUAS"
    },
    {
      "id_kabupaten": "6204",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN BARITO SELATAN"
    },
    {
      "id_kabupaten": "6205",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN BARITO UTARA"
    },
    {
      "id_kabupaten": "6206",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN SUKAMARA"
    },
    {
      "id_kabupaten": "6207",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN LAMANDAU"
    },
    {
      "id_kabupaten": "6208",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN SERUYAN"
    },
    {
      "id_kabupaten": "6209",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN KATINGAN"
    },
    {
      "id_kabupaten": "6210",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN PULANG PISAU"
    },
    {
      "id_kabupaten": "6211",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN GUNUNG MAS"
    },
    {
      "id_kabupaten": "6212",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN BARITO TIMUR"
    },
    {
      "id_kabupaten": "6213",
      "id_provinsi": "62",
      "nama_kabupaten": "KABUPATEN MURUNG RAYA"
    },
    {
      "id_kabupaten": "6271",
      "id_provinsi": "62",
      "nama_kabupaten": "KOTA PALANGKA RAYA"
    },
    {
      "id_kabupaten": "6301",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN TANAH LAUT"
    },
    {
      "id_kabupaten": "6302",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN KOTA BARU"
    },
    {
      "id_kabupaten": "6303",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN BANJAR"
    },
    {
      "id_kabupaten": "6304",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN BARITO KUALA"
    },
    {
      "id_kabupaten": "6305",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN TAPIN"
    },
    {
      "id_kabupaten": "6306",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN HULU SUNGAI SELATAN"
    },
    {
      "id_kabupaten": "6307",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN HULU SUNGAI TENGAH"
    },
    {
      "id_kabupaten": "6308",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN HULU SUNGAI UTARA"
    },
    {
      "id_kabupaten": "6309",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN TABALONG"
    },
    {
      "id_kabupaten": "6310",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN TANAH BUMBU"
    },
    {
      "id_kabupaten": "6311",
      "id_provinsi": "63",
      "nama_kabupaten": "KABUPATEN BALANGAN"
    },
    {
      "id_kabupaten": "6371",
      "id_provinsi": "63",
      "nama_kabupaten": "KOTA BANJARMASIN"
    },
    {
      "id_kabupaten": "6372",
      "id_provinsi": "63",
      "nama_kabupaten": "KOTA BANJAR BARU"
    },
    {
      "id_kabupaten": "6401",
      "id_provinsi": "64",
      "nama_kabupaten": "KABUPATEN PASER"
    },
    {
      "id_kabupaten": "6402",
      "id_provinsi": "64",
      "nama_kabupaten": "KABUPATEN KUTAI BARAT"
    },
    {
      "id_kabupaten": "6403",
      "id_provinsi": "64",
      "nama_kabupaten": "KABUPATEN KUTAI KARTANEGARA"
    },
    {
      "id_kabupaten": "6404",
      "id_provinsi": "64",
      "nama_kabupaten": "KABUPATEN KUTAI TIMUR"
    },
    {
      "id_kabupaten": "6405",
      "id_provinsi": "64",
      "nama_kabupaten": "KABUPATEN BERAU"
    },
    {
      "id_kabupaten": "6409",
      "id_provinsi": "64",
      "nama_kabupaten": "KABUPATEN PENAJAM PASER UTARA"
    },
    {
      "id_kabupaten": "6411",
      "id_provinsi": "64",
      "nama_kabupaten": "KABUPATEN MAHAKAM HULU"
    },
    {
      "id_kabupaten": "6471",
      "id_provinsi": "64",
      "nama_kabupaten": "KOTA BALIKPAPAN"
    },
    {
      "id_kabupaten": "6472",
      "id_provinsi": "64",
      "nama_kabupaten": "KOTA SAMARINDA"
    },
    {
      "id_kabupaten": "6474",
      "id_provinsi": "64",
      "nama_kabupaten": "KOTA BONTANG"
    },
    {
      "id_kabupaten": "6501",
      "id_provinsi": "65",
      "nama_kabupaten": "KABUPATEN MALINAU"
    },
    {
      "id_kabupaten": "6502",
      "id_provinsi": "65",
      "nama_kabupaten": "KABUPATEN BULUNGAN"
    },
    {
      "id_kabupaten": "6503",
      "id_provinsi": "65",
      "nama_kabupaten": "KABUPATEN TANA TIDUNG"
    },
    {
      "id_kabupaten": "6504",
      "id_provinsi": "65",
      "nama_kabupaten": "KABUPATEN NUNUKAN"
    },
    {
      "id_kabupaten": "6571",
      "id_provinsi": "65",
      "nama_kabupaten": "KOTA TARAKAN"
    },
    {
      "id_kabupaten": "7101",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN BOLAANG MONGONDOW"
    },
    {
      "id_kabupaten": "7102",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN MINAHASA"
    },
    {
      "id_kabupaten": "7103",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN KEPULAUAN SANGIHE"
    },
    {
      "id_kabupaten": "7104",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN KEPULAUAN TALAUD"
    },
    {
      "id_kabupaten": "7105",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN MINAHASA SELATAN"
    },
    {
      "id_kabupaten": "7106",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN MINAHASA UTARA"
    },
    {
      "id_kabupaten": "7107",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN BOLAANG MONGONDOW UTARA"
    },
    {
      "id_kabupaten": "7108",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN SIAU TAGULANDANG BIARO"
    },
    {
      "id_kabupaten": "7109",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN MINAHASA TENGGARA"
    },
    {
      "id_kabupaten": "7110",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN BOLAANG MONGONDOW SELATAN"
    },
    {
      "id_kabupaten": "7111",
      "id_provinsi": "71",
      "nama_kabupaten": "KABUPATEN BOLAANG MONGONDOW TIMUR"
    },
    {
      "id_kabupaten": "7171",
      "id_provinsi": "71",
      "nama_kabupaten": "KOTA MANADO"
    },
    {
      "id_kabupaten": "7172",
      "id_provinsi": "71",
      "nama_kabupaten": "KOTA BITUNG"
    },
    {
      "id_kabupaten": "7173",
      "id_provinsi": "71",
      "nama_kabupaten": "KOTA TOMOHON"
    },
    {
      "id_kabupaten": "7174",
      "id_provinsi": "71",
      "nama_kabupaten": "KOTA KOTAMOBAGU"
    },
    {
      "id_kabupaten": "7201",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN BANGGAI KEPULAUAN"
    },
    {
      "id_kabupaten": "7202",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN BANGGAI"
    },
    {
      "id_kabupaten": "7203",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN MOROWALI"
    },
    {
      "id_kabupaten": "7204",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN POSO"
    },
    {
      "id_kabupaten": "7205",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN DONGGALA"
    },
    {
      "id_kabupaten": "7206",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN TOLI-TOLI"
    },
    {
      "id_kabupaten": "7207",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN BUOL"
    },
    {
      "id_kabupaten": "7208",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN PARIGI MOUTONG"
    },
    {
      "id_kabupaten": "7209",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN TOJO UNA-UNA"
    },
    {
      "id_kabupaten": "7210",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN SIGI"
    },
    {
      "id_kabupaten": "7211",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN BANGGAI LAUT"
    },
    {
      "id_kabupaten": "7212",
      "id_provinsi": "72",
      "nama_kabupaten": "KABUPATEN MOROWALI UTARA"
    },
    {
      "id_kabupaten": "7271",
      "id_provinsi": "72",
      "nama_kabupaten": "KOTA PALU"
    },
    {
      "id_kabupaten": "7301",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN KEPULAUAN SELAYAR"
    },
    {
      "id_kabupaten": "7302",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN BULUKUMBA"
    },
    {
      "id_kabupaten": "7303",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN BANTAENG"
    },
    {
      "id_kabupaten": "7304",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN JENEPONTO"
    },
    {
      "id_kabupaten": "7305",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN TAKALAR"
    },
    {
      "id_kabupaten": "7306",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN GOWA"
    },
    {
      "id_kabupaten": "7307",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN SINJAI"
    },
    {
      "id_kabupaten": "7308",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN MAROS"
    },
    {
      "id_kabupaten": "7309",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN PANGKAJENE DAN KEPULAUAN"
    },
    {
      "id_kabupaten": "7310",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN BARRU"
    },
    {
      "id_kabupaten": "7311",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN BONE"
    },
    {
      "id_kabupaten": "7312",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN SOPPENG"
    },
    {
      "id_kabupaten": "7313",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN WAJO"
    },
    {
      "id_kabupaten": "7314",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN SIDENRENG RAPPANG"
    },
    {
      "id_kabupaten": "7315",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN PINRANG"
    },
    {
      "id_kabupaten": "7316",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN ENREKANG"
    },
    {
      "id_kabupaten": "7317",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN LUWU"
    },
    {
      "id_kabupaten": "7318",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN TANA TORAJA"
    },
    {
      "id_kabupaten": "7322",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN LUWU UTARA"
    },
    {
      "id_kabupaten": "7325",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN LUWU TIMUR"
    },
    {
      "id_kabupaten": "7326",
      "id_provinsi": "73",
      "nama_kabupaten": "KABUPATEN TORAJA UTARA"
    },
    {
      "id_kabupaten": "7371",
      "id_provinsi": "73",
      "nama_kabupaten": "KOTA MAKASSAR"
    },
    {
      "id_kabupaten": "7372",
      "id_provinsi": "73",
      "nama_kabupaten": "KOTA PAREPARE"
    },
    {
      "id_kabupaten": "7373",
      "id_provinsi": "73",
      "nama_kabupaten": "KOTA PALOPO"
    },
    {
      "id_kabupaten": "7401",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN BUTON"
    },
    {
      "id_kabupaten": "7402",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN MUNA"
    },
    {
      "id_kabupaten": "7403",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN KONAWE"
    },
    {
      "id_kabupaten": "7404",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN KOLAKA"
    },
    {
      "id_kabupaten": "7405",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN KONAWE SELATAN"
    },
    {
      "id_kabupaten": "7406",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN BOMBANA"
    },
    {
      "id_kabupaten": "7407",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN WAKATOBI"
    },
    {
      "id_kabupaten": "7408",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN KOLAKA UTARA"
    },
    {
      "id_kabupaten": "7409",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN BUTON UTARA"
    },
    {
      "id_kabupaten": "7410",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN KONAWE UTARA"
    },
    {
      "id_kabupaten": "7411",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN KOLAKA TIMUR"
    },
    {
      "id_kabupaten": "7412",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN KONAWE KEPULAUAN"
    },
    {
      "id_kabupaten": "7413",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN MUNA BARAT"
    },
    {
      "id_kabupaten": "7414",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN BUTON TENGAH"
    },
    {
      "id_kabupaten": "7415",
      "id_provinsi": "74",
      "nama_kabupaten": "KABUPATEN BUTON SELATAN"
    },
    {
      "id_kabupaten": "7471",
      "id_provinsi": "74",
      "nama_kabupaten": "KOTA KENDARI"
    },
    {
      "id_kabupaten": "7472",
      "id_provinsi": "74",
      "nama_kabupaten": "KOTA BAUBAU"
    },
    {
      "id_kabupaten": "7501",
      "id_provinsi": "75",
      "nama_kabupaten": "KABUPATEN BOALEMO"
    },
    {
      "id_kabupaten": "7502",
      "id_provinsi": "75",
      "nama_kabupaten": "KABUPATEN GORONTALO"
    },
    {
      "id_kabupaten": "7503",
      "id_provinsi": "75",
      "nama_kabupaten": "KABUPATEN POHUWATO"
    },
    {
      "id_kabupaten": "7504",
      "id_provinsi": "75",
      "nama_kabupaten": "KABUPATEN BONE BOLANGO"
    },
    {
      "id_kabupaten": "7505",
      "id_provinsi": "75",
      "nama_kabupaten": "KABUPATEN GORONTALO UTARA"
    },
    {
      "id_kabupaten": "7571",
      "id_provinsi": "75",
      "nama_kabupaten": "KOTA GORONTALO"
    },
    {
      "id_kabupaten": "7601",
      "id_provinsi": "76",
      "nama_kabupaten": "KABUPATEN MAJENE"
    },
    {
      "id_kabupaten": "7602",
      "id_provinsi": "76",
      "nama_kabupaten": "KABUPATEN POLEWALI MANDAR"
    },
    {
      "id_kabupaten": "7603",
      "id_provinsi": "76",
      "nama_kabupaten": "KABUPATEN MAMASA"
    },
    {
      "id_kabupaten": "7604",
      "id_provinsi": "76",
      "nama_kabupaten": "KABUPATEN MAMUJU"
    },
    {
      "id_kabupaten": "7605",
      "id_provinsi": "76",
      "nama_kabupaten": "KABUPATEN MAMUJU UTARA"
    },
    {
      "id_kabupaten": "7606",
      "id_provinsi": "76",
      "nama_kabupaten": "KABUPATEN MAMUJU TENGAH"
    },
    {
      "id_kabupaten": "8101",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN MALUKU TENGGARA BARAT"
    },
    {
      "id_kabupaten": "8102",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN MALUKU TENGGARA"
    },
    {
      "id_kabupaten": "8103",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN MALUKU TENGAH"
    },
    {
      "id_kabupaten": "8104",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN BURU"
    },
    {
      "id_kabupaten": "8105",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN KEPULAUAN ARU"
    },
    {
      "id_kabupaten": "8106",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN SERAM BAGIAN BARAT"
    },
    {
      "id_kabupaten": "8107",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN SERAM BAGIAN TIMUR"
    },
    {
      "id_kabupaten": "8108",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN MALUKU BARAT DAYA"
    },
    {
      "id_kabupaten": "8109",
      "id_provinsi": "81",
      "nama_kabupaten": "KABUPATEN BURU SELATAN"
    },
    {
      "id_kabupaten": "8171",
      "id_provinsi": "81",
      "nama_kabupaten": "KOTA AMBON"
    },
    {
      "id_kabupaten": "8172",
      "id_provinsi": "81",
      "nama_kabupaten": "KOTA TUAL"
    },
    {
      "id_kabupaten": "8201",
      "id_provinsi": "82",
      "nama_kabupaten": "KABUPATEN HALMAHERA BARAT"
    },
    {
      "id_kabupaten": "8202",
      "id_provinsi": "82",
      "nama_kabupaten": "KABUPATEN HALMAHERA TENGAH"
    },
    {
      "id_kabupaten": "8203",
      "id_provinsi": "82",
      "nama_kabupaten": "KABUPATEN KEPULAUAN SULA"
    },
    {
      "id_kabupaten": "8204",
      "id_provinsi": "82",
      "nama_kabupaten": "KABUPATEN HALMAHERA SELATAN"
    },
    {
      "id_kabupaten": "8205",
      "id_provinsi": "82",
      "nama_kabupaten": "KABUPATEN HALMAHERA UTARA"
    },
    {
      "id_kabupaten": "8206",
      "id_provinsi": "82",
      "nama_kabupaten": "KABUPATEN HALMAHERA TIMUR"
    },
    {
      "id_kabupaten": "8207",
      "id_provinsi": "82",
      "nama_kabupaten": "KABUPATEN PULAU MOROTAI"
    },
    {
      "id_kabupaten": "8208",
      "id_provinsi": "82",
      "nama_kabupaten": "KABUPATEN PULAU TALIABU"
    },
    {
      "id_kabupaten": "8271",
      "id_provinsi": "82",
      "nama_kabupaten": "KOTA TERNATE"
    },
    {
      "id_kabupaten": "8272",
      "id_provinsi": "82",
      "nama_kabupaten": "KOTA TIDORE KEPULAUAN"
    },
    {
      "id_kabupaten": "9101",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN FAKFAK"
    },
    {
      "id_kabupaten": "9102",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN KAIMANA"
    },
    {
      "id_kabupaten": "9103",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN TELUK WONDAMA"
    },
    {
      "id_kabupaten": "9104",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN TELUK BINTUNI"
    },
    {
      "id_kabupaten": "9105",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN MANOKWARI"
    },
    {
      "id_kabupaten": "9106",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN SORONG SELATAN"
    },
    {
      "id_kabupaten": "9107",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN SORONG"
    },
    {
      "id_kabupaten": "9108",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN RAJA AMPAT"
    },
    {
      "id_kabupaten": "9109",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN TAMBRAUW"
    },
    {
      "id_kabupaten": "9110",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN MAYBRAT"
    },
    {
      "id_kabupaten": "9111",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN MANOKWARI SELATAN"
    },
    {
      "id_kabupaten": "9112",
      "id_provinsi": "91",
      "nama_kabupaten": "KABUPATEN PEGUNUNGAN ARFAK"
    },
    {
      "id_kabupaten": "9171",
      "id_provinsi": "91",
      "nama_kabupaten": "KOTA SORONG"
    },
    {
      "id_kabupaten": "9401",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN MERAUKE"
    },
    {
      "id_kabupaten": "9402",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN JAYAWIJAYA"
    },
    {
      "id_kabupaten": "9403",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN JAYAPURA"
    },
    {
      "id_kabupaten": "9404",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN NABIRE"
    },
    {
      "id_kabupaten": "9408",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN KEPULAUAN YAPEN"
    },
    {
      "id_kabupaten": "9409",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN BIAK NUMFOR"
    },
    {
      "id_kabupaten": "9410",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN PANIAI"
    },
    {
      "id_kabupaten": "9411",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN PUNCAK JAYA"
    },
    {
      "id_kabupaten": "9412",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN MIMIKA"
    },
    {
      "id_kabupaten": "9413",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN BOVEN DIGOEL"
    },
    {
      "id_kabupaten": "9414",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN MAPPI"
    },
    {
      "id_kabupaten": "9415",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN ASMAT"
    },
    {
      "id_kabupaten": "9416",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN YAHUKIMO"
    },
    {
      "id_kabupaten": "9417",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN PEGUNUNGAN BINTANG"
    },
    {
      "id_kabupaten": "9418",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN TOLIKARA"
    },
    {
      "id_kabupaten": "9419",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN SARMI"
    },
    {
      "id_kabupaten": "9420",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN KEEROM"
    },
    {
      "id_kabupaten": "9426",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN WAROPEN"
    },
    {
      "id_kabupaten": "9427",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN SUPIORI"
    },
    {
      "id_kabupaten": "9428",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN MAMBERAMO RAYA"
    },
    {
      "id_kabupaten": "9429",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN NDUGA"
    },
    {
      "id_kabupaten": "9430",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN LANNY JAYA"
    },
    {
      "id_kabupaten": "9431",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN MAMBERAMO TENGAH"
    },
    {
      "id_kabupaten": "9432",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN YALIMO"
    },
    {
      "id_kabupaten": "9433",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN PUNCAK"
    },
    {
      "id_kabupaten": "9434",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN DOGIYAI"
    },
    {
      "id_kabupaten": "9435",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN INTAN JAYA"
    },
    {
      "id_kabupaten": "9436",
      "id_provinsi": "94",
      "nama_kabupaten": "KABUPATEN DEIYAI"
    },
    {
      "id_kabupaten": "9471",
      "id_provinsi": "94",
      "nama_kabupaten": "KOTA JAYAPURA"
    }
  ],
  "tbl_kecamatan": [
    {
      "id_kecamatan": "1101010",
      "id_kabupaten": "1101",
      "nama_kecamatan": "TEUPAH SELATAN"
    },
    {
      "id_kecamatan": "1101020",
      "id_kabupaten": "1101",
      "nama_kecamatan": "SIMEULUE TIMUR"
    },
    {
      "id_kecamatan": "1101021",
      "id_kabupaten": "1101",
      "nama_kecamatan": "TEUPAH BARAT"
    },
    {
      "id_kecamatan": "1101022",
      "id_kabupaten": "1101",
      "nama_kecamatan": "TEUPAH TENGAH"
    },
    {
      "id_kecamatan": "1101030",
      "id_kabupaten": "1101",
      "nama_kecamatan": "SIMEULUE TENGAH"
    },
    {
      "id_kecamatan": "1101031",
      "id_kabupaten": "1101",
      "nama_kecamatan": "TELUK DALAM"
    },
    {
      "id_kecamatan": "1101032",
      "id_kabupaten": "1101",
      "nama_kecamatan": "SIMEULUE CUT"
    },
    {
      "id_kecamatan": "1101040",
      "id_kabupaten": "1101",
      "nama_kecamatan": "SALANG"
    },
    {
      "id_kecamatan": "1101050",
      "id_kabupaten": "1101",
      "nama_kecamatan": "SIMEULUE BARAT"
    },
    {
      "id_kecamatan": "1101051",
      "id_kabupaten": "1101",
      "nama_kecamatan": "ALAFAN"
    },
    {
      "id_kecamatan": "1102010",
      "id_kabupaten": "1102",
      "nama_kecamatan": "PULAU BANYAK"
    },
    {
      "id_kecamatan": "1102011",
      "id_kabupaten": "1102",
      "nama_kecamatan": "PULAU BANYAK BARAT"
    },
    {
      "id_kecamatan": "1102020",
      "id_kabupaten": "1102",
      "nama_kecamatan": "SINGKIL"
    },
    {
      "id_kecamatan": "1102021",
      "id_kabupaten": "1102",
      "nama_kecamatan": "SINGKIL UTARA"
    },
    {
      "id_kecamatan": "1102022",
      "id_kabupaten": "1102",
      "nama_kecamatan": "KUALA BARU"
    },
    {
      "id_kecamatan": "1102030",
      "id_kabupaten": "1102",
      "nama_kecamatan": "SIMPANG KANAN"
    },
    {
      "id_kecamatan": "1102031",
      "id_kabupaten": "1102",
      "nama_kecamatan": "GUNUNG MERIAH"
    },
    {
      "id_kecamatan": "1102032",
      "id_kabupaten": "1102",
      "nama_kecamatan": "DANAU PARIS"
    },
    {
      "id_kecamatan": "1102033",
      "id_kabupaten": "1102",
      "nama_kecamatan": "SURO"
    },
    {
      "id_kecamatan": "1102042",
      "id_kabupaten": "1102",
      "nama_kecamatan": "SINGKOHOR"
    },
    {
      "id_kecamatan": "1102043",
      "id_kabupaten": "1102",
      "nama_kecamatan": "KOTA BAHARU"
    },
    {
      "id_kecamatan": "1103010",
      "id_kabupaten": "1103",
      "nama_kecamatan": "TRUMON"
    },
    {
      "id_kecamatan": "1103011",
      "id_kabupaten": "1103",
      "nama_kecamatan": "TRUMON TIMUR"
    },
    {
      "id_kecamatan": "1103012",
      "id_kabupaten": "1103",
      "nama_kecamatan": "TRUMON TENGAH"
    },
    {
      "id_kecamatan": "1103020",
      "id_kabupaten": "1103",
      "nama_kecamatan": "BAKONGAN"
    },
    {
      "id_kecamatan": "1103021",
      "id_kabupaten": "1103",
      "nama_kecamatan": "BAKONGAN TIMUR"
    },
    {
      "id_kecamatan": "1103022",
      "id_kabupaten": "1103",
      "nama_kecamatan": "KOTA BAHAGIA"
    },
    {
      "id_kecamatan": "1103030",
      "id_kabupaten": "1103",
      "nama_kecamatan": "KLUET SELATAN"
    },
    {
      "id_kecamatan": "1103031",
      "id_kabupaten": "1103",
      "nama_kecamatan": "KLUET TIMUR"
    },
    {
      "id_kecamatan": "1103040",
      "id_kabupaten": "1103",
      "nama_kecamatan": "KLUET UTARA"
    },
    {
      "id_kecamatan": "1103041",
      "id_kabupaten": "1103",
      "nama_kecamatan": "PASIE RAJA"
    },
    {
      "id_kecamatan": "1103042",
      "id_kabupaten": "1103",
      "nama_kecamatan": "KLUET TENGAH"
    },
    {
      "id_kecamatan": "1103050",
      "id_kabupaten": "1103",
      "nama_kecamatan": "TAPAK TUAN"
    },
    {
      "id_kecamatan": "1103060",
      "id_kabupaten": "1103",
      "nama_kecamatan": "SAMA DUA"
    },
    {
      "id_kecamatan": "1103070",
      "id_kabupaten": "1103",
      "nama_kecamatan": "SAWANG"
    },
    {
      "id_kecamatan": "1103080",
      "id_kabupaten": "1103",
      "nama_kecamatan": "MEUKEK"
    },
    {
      "id_kecamatan": "1103090",
      "id_kabupaten": "1103",
      "nama_kecamatan": "LABUHAN HAJI"
    },
    {
      "id_kecamatan": "1103091",
      "id_kabupaten": "1103",
      "nama_kecamatan": "LABUHAN HAJI TIMUR"
    },
    {
      "id_kecamatan": "1103092",
      "id_kabupaten": "1103",
      "nama_kecamatan": "LABUHAN HAJI BARAT"
    },
    {
      "id_kecamatan": "1104010",
      "id_kabupaten": "1104",
      "nama_kecamatan": "LAWE ALAS"
    },
    {
      "id_kecamatan": "1104011",
      "id_kabupaten": "1104",
      "nama_kecamatan": "BABUL RAHMAH"
    },
    {
      "id_kecamatan": "1104012",
      "id_kabupaten": "1104",
      "nama_kecamatan": "TANOH ALAS"
    },
    {
      "id_kecamatan": "1104020",
      "id_kabupaten": "1104",
      "nama_kecamatan": "LAWE SIGALA-GALA"
    },
    {
      "id_kecamatan": "1104021",
      "id_kabupaten": "1104",
      "nama_kecamatan": "BABUL MAKMUR"
    },
    {
      "id_kecamatan": "1104022",
      "id_kabupaten": "1104",
      "nama_kecamatan": "SEMADAM"
    },
    {
      "id_kecamatan": "1104023",
      "id_kabupaten": "1104",
      "nama_kecamatan": "LAUSER"
    },
    {
      "id_kecamatan": "1104030",
      "id_kabupaten": "1104",
      "nama_kecamatan": "BAMBEL"
    },
    {
      "id_kecamatan": "1104031",
      "id_kabupaten": "1104",
      "nama_kecamatan": "BUKIT TUSAM"
    },
    {
      "id_kecamatan": "1104032",
      "id_kabupaten": "1104",
      "nama_kecamatan": "LAWE SUMUR"
    },
    {
      "id_kecamatan": "1104040",
      "id_kabupaten": "1104",
      "nama_kecamatan": "BABUSSALAM"
    },
    {
      "id_kecamatan": "1104041",
      "id_kabupaten": "1104",
      "nama_kecamatan": "LAWE BULAN"
    },
    {
      "id_kecamatan": "1104050",
      "id_kabupaten": "1104",
      "nama_kecamatan": "BADAR"
    },
    {
      "id_kecamatan": "1104051",
      "id_kabupaten": "1104",
      "nama_kecamatan": "DARUL HASANAH"
    },
    {
      "id_kecamatan": "1104052",
      "id_kabupaten": "1104",
      "nama_kecamatan": "KETAMBE"
    },
    {
      "id_kecamatan": "1104053",
      "id_kabupaten": "1104",
      "nama_kecamatan": "DELENG POKHKISEN"
    },
    {
      "id_kecamatan": "1105080",
      "id_kabupaten": "1105",
      "nama_kecamatan": "SERBA JADI"
    },
    {
      "id_kecamatan": "1105081",
      "id_kabupaten": "1105",
      "nama_kecamatan": "SIMPANG JERNIH"
    },
    {
      "id_kecamatan": "1105082",
      "id_kabupaten": "1105",
      "nama_kecamatan": "PEUNARON"
    },
    {
      "id_kecamatan": "1105090",
      "id_kabupaten": "1105",
      "nama_kecamatan": "BIREM BAYEUN"
    },
    {
      "id_kecamatan": "1105100",
      "id_kabupaten": "1105",
      "nama_kecamatan": "RANTAU SELAMAT"
    },
    {
      "id_kecamatan": "1105101",
      "id_kabupaten": "1105",
      "nama_kecamatan": "SUNGAI RAYA"
    },
    {
      "id_kecamatan": "1105110",
      "id_kabupaten": "1105",
      "nama_kecamatan": "PEUREULAK"
    },
    {
      "id_kecamatan": "1105111",
      "id_kabupaten": "1105",
      "nama_kecamatan": "PEUREULAK TIMUR"
    },
    {
      "id_kecamatan": "1105112",
      "id_kabupaten": "1105",
      "nama_kecamatan": "PEUREULAK BARAT"
    },
    {
      "id_kecamatan": "1105120",
      "id_kabupaten": "1105",
      "nama_kecamatan": "RANTO PEUREULAK"
    },
    {
      "id_kecamatan": "1105130",
      "id_kabupaten": "1105",
      "nama_kecamatan": "IDI RAYEUK"
    },
    {
      "id_kecamatan": "1105131",
      "id_kabupaten": "1105",
      "nama_kecamatan": "PEUDAWA"
    },
    {
      "id_kecamatan": "1105132",
      "id_kabupaten": "1105",
      "nama_kecamatan": "BANDA ALAM"
    },
    {
      "id_kecamatan": "1105133",
      "id_kabupaten": "1105",
      "nama_kecamatan": "IDI TUNONG"
    },
    {
      "id_kecamatan": "1105134",
      "id_kabupaten": "1105",
      "nama_kecamatan": "DARUL IHSAN"
    },
    {
      "id_kecamatan": "1105135",
      "id_kabupaten": "1105",
      "nama_kecamatan": "IDI TIMUR"
    },
    {
      "id_kecamatan": "1105140",
      "id_kabupaten": "1105",
      "nama_kecamatan": "DARUL AMAN"
    },
    {
      "id_kecamatan": "1105150",
      "id_kabupaten": "1105",
      "nama_kecamatan": "NURUSSALAM"
    },
    {
      "id_kecamatan": "1105151",
      "id_kabupaten": "1105",
      "nama_kecamatan": "DARUL FALAH"
    },
    {
      "id_kecamatan": "1105160",
      "id_kabupaten": "1105",
      "nama_kecamatan": "JULOK"
    },
    {
      "id_kecamatan": "1105161",
      "id_kabupaten": "1105",
      "nama_kecamatan": "INDRA MAKMUR"
    },
    {
      "id_kecamatan": "1105170",
      "id_kabupaten": "1105",
      "nama_kecamatan": "PANTE BIDARI"
    },
    {
      "id_kecamatan": "1105180",
      "id_kabupaten": "1105",
      "nama_kecamatan": "SIMPANG ULIM"
    },
    {
      "id_kecamatan": "1105181",
      "id_kabupaten": "1105",
      "nama_kecamatan": "MADAT"
    },
    {
      "id_kecamatan": "1106010",
      "id_kabupaten": "1106",
      "nama_kecamatan": "LINGE"
    },
    {
      "id_kecamatan": "1106011",
      "id_kabupaten": "1106",
      "nama_kecamatan": "ATU LINTANG"
    },
    {
      "id_kecamatan": "1106012",
      "id_kabupaten": "1106",
      "nama_kecamatan": "JAGONG JEGET"
    },
    {
      "id_kecamatan": "1106020",
      "id_kabupaten": "1106",
      "nama_kecamatan": "BINTANG"
    },
    {
      "id_kecamatan": "1106031",
      "id_kabupaten": "1106",
      "nama_kecamatan": "LUT TAWAR"
    },
    {
      "id_kecamatan": "1106032",
      "id_kabupaten": "1106",
      "nama_kecamatan": "KEBAYAKAN"
    },
    {
      "id_kecamatan": "1106040",
      "id_kabupaten": "1106",
      "nama_kecamatan": "PEGASING"
    },
    {
      "id_kecamatan": "1106041",
      "id_kabupaten": "1106",
      "nama_kecamatan": "BIES"
    },
    {
      "id_kecamatan": "1106050",
      "id_kabupaten": "1106",
      "nama_kecamatan": "BEBESEN"
    },
    {
      "id_kecamatan": "1106051",
      "id_kabupaten": "1106",
      "nama_kecamatan": "KUTE PANANG"
    },
    {
      "id_kecamatan": "1106060",
      "id_kabupaten": "1106",
      "nama_kecamatan": "SILIH NARA"
    },
    {
      "id_kecamatan": "1106061",
      "id_kabupaten": "1106",
      "nama_kecamatan": "KETOL"
    },
    {
      "id_kecamatan": "1106062",
      "id_kabupaten": "1106",
      "nama_kecamatan": "CELALA"
    },
    {
      "id_kecamatan": "1106063",
      "id_kabupaten": "1106",
      "nama_kecamatan": "RUSIP ANTARA"
    },
    {
      "id_kecamatan": "1107050",
      "id_kabupaten": "1107",
      "nama_kecamatan": "JOHAN PAHLAWAN"
    },
    {
      "id_kecamatan": "1107060",
      "id_kabupaten": "1107",
      "nama_kecamatan": "SAMATIGA"
    },
    {
      "id_kecamatan": "1107061",
      "id_kabupaten": "1107",
      "nama_kecamatan": "BUBON"
    },
    {
      "id_kecamatan": "1107062",
      "id_kabupaten": "1107",
      "nama_kecamatan": "ARONGAN LAMBALEK"
    },
    {
      "id_kecamatan": "1107070",
      "id_kabupaten": "1107",
      "nama_kecamatan": "WOYLA"
    },
    {
      "id_kecamatan": "1107071",
      "id_kabupaten": "1107",
      "nama_kecamatan": "WOYLA BARAT"
    },
    {
      "id_kecamatan": "1107072",
      "id_kabupaten": "1107",
      "nama_kecamatan": "WOYLA TIMUR"
    },
    {
      "id_kecamatan": "1107080",
      "id_kabupaten": "1107",
      "nama_kecamatan": "KAWAY XVI"
    },
    {
      "id_kecamatan": "1107081",
      "id_kabupaten": "1107",
      "nama_kecamatan": "MEUREUBO"
    },
    {
      "id_kecamatan": "1107082",
      "id_kabupaten": "1107",
      "nama_kecamatan": "PANTAI CEUREMEN"
    },
    {
      "id_kecamatan": "1107083",
      "id_kabupaten": "1107",
      "nama_kecamatan": "PANTON REU"
    },
    {
      "id_kecamatan": "1107090",
      "id_kabupaten": "1107",
      "nama_kecamatan": "SUNGAI MAS"
    },
    {
      "id_kecamatan": "1108010",
      "id_kabupaten": "1108",
      "nama_kecamatan": "LHOONG"
    },
    {
      "id_kecamatan": "1108020",
      "id_kabupaten": "1108",
      "nama_kecamatan": "LHOKNGA"
    },
    {
      "id_kecamatan": "1108021",
      "id_kabupaten": "1108",
      "nama_kecamatan": "LEUPUNG"
    },
    {
      "id_kecamatan": "1108030",
      "id_kabupaten": "1108",
      "nama_kecamatan": "INDRAPURI"
    },
    {
      "id_kecamatan": "1108031",
      "id_kabupaten": "1108",
      "nama_kecamatan": "KUTA COT GLIE"
    },
    {
      "id_kecamatan": "1108040",
      "id_kabupaten": "1108",
      "nama_kecamatan": "SEULIMEUM"
    },
    {
      "id_kecamatan": "1108041",
      "id_kabupaten": "1108",
      "nama_kecamatan": "KOTA JANTHO"
    },
    {
      "id_kecamatan": "1108042",
      "id_kabupaten": "1108",
      "nama_kecamatan": "LEMBAH SEULAWAH"
    },
    {
      "id_kecamatan": "1108050",
      "id_kabupaten": "1108",
      "nama_kecamatan": "MESJID RAYA"
    },
    {
      "id_kecamatan": "1108060",
      "id_kabupaten": "1108",
      "nama_kecamatan": "DARUSSALAM"
    },
    {
      "id_kecamatan": "1108061",
      "id_kabupaten": "1108",
      "nama_kecamatan": "BAITUSSALAM"
    },
    {
      "id_kecamatan": "1108070",
      "id_kabupaten": "1108",
      "nama_kecamatan": "KUTA BARO"
    },
    {
      "id_kecamatan": "1108080",
      "id_kabupaten": "1108",
      "nama_kecamatan": "MONTASIK"
    },
    {
      "id_kecamatan": "1108081",
      "id_kabupaten": "1108",
      "nama_kecamatan": "BLANG BINTANG"
    },
    {
      "id_kecamatan": "1108090",
      "id_kabupaten": "1108",
      "nama_kecamatan": "INGIN JAYA"
    },
    {
      "id_kecamatan": "1108091",
      "id_kabupaten": "1108",
      "nama_kecamatan": "KRUENG BARONA JAYA"
    },
    {
      "id_kecamatan": "1108100",
      "id_kabupaten": "1108",
      "nama_kecamatan": "SUKA MAKMUR"
    },
    {
      "id_kecamatan": "1108101",
      "id_kabupaten": "1108",
      "nama_kecamatan": "KUTA MALAKA"
    },
    {
      "id_kecamatan": "1108102",
      "id_kabupaten": "1108",
      "nama_kecamatan": "SIMPANG TIGA"
    },
    {
      "id_kecamatan": "1108110",
      "id_kabupaten": "1108",
      "nama_kecamatan": "DARUL IMARAH"
    },
    {
      "id_kecamatan": "1108111",
      "id_kabupaten": "1108",
      "nama_kecamatan": "DARUL KAMAL"
    },
    {
      "id_kecamatan": "1108120",
      "id_kabupaten": "1108",
      "nama_kecamatan": "PEUKAN BADA"
    },
    {
      "id_kecamatan": "1108130",
      "id_kabupaten": "1108",
      "nama_kecamatan": "PULO ACEH"
    },
    {
      "id_kecamatan": "1109010",
      "id_kabupaten": "1109",
      "nama_kecamatan": "GEUMPANG"
    },
    {
      "id_kecamatan": "1109011",
      "id_kabupaten": "1109",
      "nama_kecamatan": "MANE"
    },
    {
      "id_kecamatan": "1109070",
      "id_kabupaten": "1109",
      "nama_kecamatan": "GLUMPANG TIGA"
    },
    {
      "id_kecamatan": "1109071",
      "id_kabupaten": "1109",
      "nama_kecamatan": "GLUMPANG BARO"
    },
    {
      "id_kecamatan": "1109080",
      "id_kabupaten": "1109",
      "nama_kecamatan": "MUTIARA"
    },
    {
      "id_kecamatan": "1109081",
      "id_kabupaten": "1109",
      "nama_kecamatan": "MUTIARA TIMUR"
    },
    {
      "id_kecamatan": "1109090",
      "id_kabupaten": "1109",
      "nama_kecamatan": "TIRO/TRUSEB"
    },
    {
      "id_kecamatan": "1109100",
      "id_kabupaten": "1109",
      "nama_kecamatan": "TANGSE"
    },
    {
      "id_kecamatan": "1109111",
      "id_kabupaten": "1109",
      "nama_kecamatan": "KEUMALA"
    },
    {
      "id_kecamatan": "1109112",
      "id_kabupaten": "1109",
      "nama_kecamatan": "TITEUE"
    },
    {
      "id_kecamatan": "1109120",
      "id_kabupaten": "1109",
      "nama_kecamatan": "SAKTI"
    },
    {
      "id_kecamatan": "1109130",
      "id_kabupaten": "1109",
      "nama_kecamatan": "MILA"
    },
    {
      "id_kecamatan": "1109140",
      "id_kabupaten": "1109",
      "nama_kecamatan": "PADANG TIJI"
    },
    {
      "id_kecamatan": "1109150",
      "id_kabupaten": "1109",
      "nama_kecamatan": "DELIMA"
    },
    {
      "id_kecamatan": "1109151",
      "id_kabupaten": "1109",
      "nama_kecamatan": "GRONG GRONG"
    },
    {
      "id_kecamatan": "1109160",
      "id_kabupaten": "1109",
      "nama_kecamatan": "INDRAJAYA"
    },
    {
      "id_kecamatan": "1109170",
      "id_kabupaten": "1109",
      "nama_kecamatan": "PEUKAN BARO"
    },
    {
      "id_kecamatan": "1109180",
      "id_kabupaten": "1109",
      "nama_kecamatan": "KEMBANG TANJONG"
    },
    {
      "id_kecamatan": "1109190",
      "id_kabupaten": "1109",
      "nama_kecamatan": "SIMPANG TIGA"
    },
    {
      "id_kecamatan": "1109200",
      "id_kabupaten": "1109",
      "nama_kecamatan": "KOTA SIGLI"
    },
    {
      "id_kecamatan": "1109210",
      "id_kabupaten": "1109",
      "nama_kecamatan": "PIDIE"
    },
    {
      "id_kecamatan": "1109220",
      "id_kabupaten": "1109",
      "nama_kecamatan": "BATEE"
    },
    {
      "id_kecamatan": "1109230",
      "id_kabupaten": "1109",
      "nama_kecamatan": "MUARA TIGA"
    },
    {
      "id_kecamatan": "1110010",
      "id_kabupaten": "1110",
      "nama_kecamatan": "SAMALANGA"
    },
    {
      "id_kecamatan": "1110011",
      "id_kabupaten": "1110",
      "nama_kecamatan": "SIMPANG MAMPLAM"
    },
    {
      "id_kecamatan": "1110020",
      "id_kabupaten": "1110",
      "nama_kecamatan": "PANDRAH"
    },
    {
      "id_kecamatan": "1110030",
      "id_kabupaten": "1110",
      "nama_kecamatan": "JEUNIEB"
    },
    {
      "id_kecamatan": "1110031",
      "id_kabupaten": "1110",
      "nama_kecamatan": "PEULIMBANG"
    },
    {
      "id_kecamatan": "1110040",
      "id_kabupaten": "1110",
      "nama_kecamatan": "PEUDADA"
    },
    {
      "id_kecamatan": "1110050",
      "id_kabupaten": "1110",
      "nama_kecamatan": "JULI"
    },
    {
      "id_kecamatan": "1110060",
      "id_kabupaten": "1110",
      "nama_kecamatan": "JEUMPA"
    },
    {
      "id_kecamatan": "1110061",
      "id_kabupaten": "1110",
      "nama_kecamatan": "KOTA JUANG"
    },
    {
      "id_kecamatan": "1110062",
      "id_kabupaten": "1110",
      "nama_kecamatan": "KUALA"
    },
    {
      "id_kecamatan": "1110070",
      "id_kabupaten": "1110",
      "nama_kecamatan": "JANGKA"
    },
    {
      "id_kecamatan": "1110080",
      "id_kabupaten": "1110",
      "nama_kecamatan": "PEUSANGAN"
    },
    {
      "id_kecamatan": "1110081",
      "id_kabupaten": "1110",
      "nama_kecamatan": "PEUSANGAN SELATAN"
    },
    {
      "id_kecamatan": "1110082",
      "id_kabupaten": "1110",
      "nama_kecamatan": "PEUSANGAN SIBLAH KRUENG"
    },
    {
      "id_kecamatan": "1110090",
      "id_kabupaten": "1110",
      "nama_kecamatan": "MAKMUR"
    },
    {
      "id_kecamatan": "1110100",
      "id_kabupaten": "1110",
      "nama_kecamatan": "GANDA PURA"
    },
    {
      "id_kecamatan": "1110101",
      "id_kabupaten": "1110",
      "nama_kecamatan": "KUTA BLANG"
    },
    {
      "id_kecamatan": "1111010",
      "id_kabupaten": "1111",
      "nama_kecamatan": "SAWANG"
    },
    {
      "id_kecamatan": "1111020",
      "id_kabupaten": "1111",
      "nama_kecamatan": "NISAM"
    },
    {
      "id_kecamatan": "1111021",
      "id_kabupaten": "1111",
      "nama_kecamatan": "NISAM ANTARA"
    },
    {
      "id_kecamatan": "1111022",
      "id_kabupaten": "1111",
      "nama_kecamatan": "BANDA BARO"
    },
    {
      "id_kecamatan": "1111030",
      "id_kabupaten": "1111",
      "nama_kecamatan": "KUTA MAKMUR"
    },
    {
      "id_kecamatan": "1111031",
      "id_kabupaten": "1111",
      "nama_kecamatan": "SIMPANG KERAMAT"
    },
    {
      "id_kecamatan": "1111040",
      "id_kabupaten": "1111",
      "nama_kecamatan": "SYAMTALIRA BAYU"
    },
    {
      "id_kecamatan": "1111041",
      "id_kabupaten": "1111",
      "nama_kecamatan": "GEUREUDONG PASE"
    },
    {
      "id_kecamatan": "1111050",
      "id_kabupaten": "1111",
      "nama_kecamatan": "MEURAH MULIA"
    },
    {
      "id_kecamatan": "1111060",
      "id_kabupaten": "1111",
      "nama_kecamatan": "MATANGKULI"
    },
    {
      "id_kecamatan": "1111061",
      "id_kabupaten": "1111",
      "nama_kecamatan": "PAYA BAKONG"
    },
    {
      "id_kecamatan": "1111062",
      "id_kabupaten": "1111",
      "nama_kecamatan": "PIRAK TIMU"
    },
    {
      "id_kecamatan": "1111070",
      "id_kabupaten": "1111",
      "nama_kecamatan": "COT GIREK"
    },
    {
      "id_kecamatan": "1111080",
      "id_kabupaten": "1111",
      "nama_kecamatan": "TANAH JAMBO AYE"
    },
    {
      "id_kecamatan": "1111081",
      "id_kabupaten": "1111",
      "nama_kecamatan": "LANGKAHAN"
    },
    {
      "id_kecamatan": "1111090",
      "id_kabupaten": "1111",
      "nama_kecamatan": "SEUNUDDON"
    },
    {
      "id_kecamatan": "1111100",
      "id_kabupaten": "1111",
      "nama_kecamatan": "BAKTIYA"
    },
    {
      "id_kecamatan": "1111101",
      "id_kabupaten": "1111",
      "nama_kecamatan": "BAKTIYA BARAT"
    },
    {
      "id_kecamatan": "1111110",
      "id_kabupaten": "1111",
      "nama_kecamatan": "LHOKSUKON"
    },
    {
      "id_kecamatan": "1111120",
      "id_kabupaten": "1111",
      "nama_kecamatan": "TANAH LUAS"
    },
    {
      "id_kecamatan": "1111121",
      "id_kabupaten": "1111",
      "nama_kecamatan": "NIBONG"
    },
    {
      "id_kecamatan": "1111130",
      "id_kabupaten": "1111",
      "nama_kecamatan": "SAMUDERA"
    },
    {
      "id_kecamatan": "1111140",
      "id_kabupaten": "1111",
      "nama_kecamatan": "SYAMTALIRA ARON"
    },
    {
      "id_kecamatan": "1111150",
      "id_kabupaten": "1111",
      "nama_kecamatan": "TANAH PASIR"
    },
    {
      "id_kecamatan": "1111151",
      "id_kabupaten": "1111",
      "nama_kecamatan": "LAPANG"
    },
    {
      "id_kecamatan": "1111160",
      "id_kabupaten": "1111",
      "nama_kecamatan": "MUARA BATU"
    },
    {
      "id_kecamatan": "1111170",
      "id_kabupaten": "1111",
      "nama_kecamatan": "DEWANTARA"
    },
    {
      "id_kecamatan": "1112010",
      "id_kabupaten": "1112",
      "nama_kecamatan": "MANGGENG"
    },
    {
      "id_kecamatan": "1112011",
      "id_kabupaten": "1112",
      "nama_kecamatan": "LEMBAH SABIL"
    },
    {
      "id_kecamatan": "1112020",
      "id_kabupaten": "1112",
      "nama_kecamatan": "TANGAN-TANGAN"
    },
    {
      "id_kecamatan": "1112021",
      "id_kabupaten": "1112",
      "nama_kecamatan": "SETIA"
    },
    {
      "id_kecamatan": "1112030",
      "id_kabupaten": "1112",
      "nama_kecamatan": "BLANG PIDIE"
    },
    {
      "id_kecamatan": "1112031",
      "id_kabupaten": "1112",
      "nama_kecamatan": "JEUMPA"
    },
    {
      "id_kecamatan": "1112040",
      "id_kabupaten": "1112",
      "nama_kecamatan": "SUSOH"
    },
    {
      "id_kecamatan": "1112050",
      "id_kabupaten": "1112",
      "nama_kecamatan": "KUALA BATEE"
    },
    {
      "id_kecamatan": "1112060",
      "id_kabupaten": "1112",
      "nama_kecamatan": "BABAH ROT"
    },
    {
      "id_kecamatan": "1113010",
      "id_kabupaten": "1113",
      "nama_kecamatan": "KUTA PANJANG"
    },
    {
      "id_kecamatan": "1113011",
      "id_kabupaten": "1113",
      "nama_kecamatan": "BLANG JERANGO"
    },
    {
      "id_kecamatan": "1113020",
      "id_kabupaten": "1113",
      "nama_kecamatan": "BLANGKEJEREN"
    },
    {
      "id_kecamatan": "1113021",
      "id_kabupaten": "1113",
      "nama_kecamatan": "PUTRI BETUNG"
    },
    {
      "id_kecamatan": "1113022",
      "id_kabupaten": "1113",
      "nama_kecamatan": "DABUN GELANG"
    },
    {
      "id_kecamatan": "1113023",
      "id_kabupaten": "1113",
      "nama_kecamatan": "BLANG PEGAYON"
    },
    {
      "id_kecamatan": "1113030",
      "id_kabupaten": "1113",
      "nama_kecamatan": "PINING"
    },
    {
      "id_kecamatan": "1113040",
      "id_kabupaten": "1113",
      "nama_kecamatan": "RIKIT GAIB"
    },
    {
      "id_kecamatan": "1113041",
      "id_kabupaten": "1113",
      "nama_kecamatan": "PANTAN CUACA"
    },
    {
      "id_kecamatan": "1113050",
      "id_kabupaten": "1113",
      "nama_kecamatan": "TERANGUN"
    },
    {
      "id_kecamatan": "1113051",
      "id_kabupaten": "1113",
      "nama_kecamatan": "TRIPE JAYA"
    },
    {
      "id_kecamatan": "1114010",
      "id_kabupaten": "1114",
      "nama_kecamatan": "TAMIANG HULU"
    },
    {
      "id_kecamatan": "1114011",
      "id_kabupaten": "1114",
      "nama_kecamatan": "BANDAR PUSAKA"
    },
    {
      "id_kecamatan": "1114020",
      "id_kabupaten": "1114",
      "nama_kecamatan": "KEJURUAN MUDA"
    },
    {
      "id_kecamatan": "1114021",
      "id_kabupaten": "1114",
      "nama_kecamatan": "TENGGULUN"
    },
    {
      "id_kecamatan": "1114030",
      "id_kabupaten": "1114",
      "nama_kecamatan": "RANTAU"
    },
    {
      "id_kecamatan": "1114040",
      "id_kabupaten": "1114",
      "nama_kecamatan": "KOTA KUALA SIMPANG"
    },
    {
      "id_kecamatan": "1114050",
      "id_kabupaten": "1114",
      "nama_kecamatan": "SERUWAY"
    },
    {
      "id_kecamatan": "1114060",
      "id_kabupaten": "1114",
      "nama_kecamatan": "BENDAHARA"
    },
    {
      "id_kecamatan": "1114061",
      "id_kabupaten": "1114",
      "nama_kecamatan": "BANDA MULIA"
    },
    {
      "id_kecamatan": "1114070",
      "id_kabupaten": "1114",
      "nama_kecamatan": "KARANG BARU"
    },
    {
      "id_kecamatan": "1114071",
      "id_kabupaten": "1114",
      "nama_kecamatan": "SEKERAK"
    },
    {
      "id_kecamatan": "1114080",
      "id_kabupaten": "1114",
      "nama_kecamatan": "MANYAK PAYED"
    },
    {
      "id_kecamatan": "1115010",
      "id_kabupaten": "1115",
      "nama_kecamatan": "DARUL MAKMUR"
    },
    {
      "id_kecamatan": "1115011",
      "id_kabupaten": "1115",
      "nama_kecamatan": "TRIPA MAKMUR"
    },
    {
      "id_kecamatan": "1115020",
      "id_kabupaten": "1115",
      "nama_kecamatan": "KUALA"
    },
    {
      "id_kecamatan": "1115021",
      "id_kabupaten": "1115",
      "nama_kecamatan": "KUALA PESISIR"
    },
    {
      "id_kecamatan": "1115022",
      "id_kabupaten": "1115",
      "nama_kecamatan": "TADU RAYA"
    },
    {
      "id_kecamatan": "1115030",
      "id_kabupaten": "1115",
      "nama_kecamatan": "BEUTONG"
    },
    {
      "id_kecamatan": "1115031",
      "id_kabupaten": "1115",
      "nama_kecamatan": "BEUTONG ATEUH BANGGALANG"
    },
    {
      "id_kecamatan": "1115040",
      "id_kabupaten": "1115",
      "nama_kecamatan": "SEUNAGAN"
    },
    {
      "id_kecamatan": "1115041",
      "id_kabupaten": "1115",
      "nama_kecamatan": "SUKA MAKMUE"
    },
    {
      "id_kecamatan": "1115050",
      "id_kabupaten": "1115",
      "nama_kecamatan": "SEUNAGAN TIMUR"
    },
    {
      "id_kecamatan": "1116010",
      "id_kabupaten": "1116",
      "nama_kecamatan": "TEUNOM"
    },
    {
      "id_kecamatan": "1116011",
      "id_kabupaten": "1116",
      "nama_kecamatan": "PASIE RAYA"
    },
    {
      "id_kecamatan": "1116020",
      "id_kabupaten": "1116",
      "nama_kecamatan": "PANGA"
    },
    {
      "id_kecamatan": "1116030",
      "id_kabupaten": "1116",
      "nama_kecamatan": "KRUENG SABEE"
    },
    {
      "id_kecamatan": "1116040",
      "id_kabupaten": "1116",
      "nama_kecamatan": "SETIA BAKTI"
    },
    {
      "id_kecamatan": "1116050",
      "id_kabupaten": "1116",
      "nama_kecamatan": "SAMPOINIET"
    },
    {
      "id_kecamatan": "1116051",
      "id_kabupaten": "1116",
      "nama_kecamatan": "DARUL HIKMAH"
    },
    {
      "id_kecamatan": "1116060",
      "id_kabupaten": "1116",
      "nama_kecamatan": "JAYA"
    },
    {
      "id_kecamatan": "1116061",
      "id_kabupaten": "1116",
      "nama_kecamatan": "INDRA JAYA"
    },
    {
      "id_kecamatan": "1117010",
      "id_kabupaten": "1117",
      "nama_kecamatan": "TIMANG GAJAH"
    },
    {
      "id_kecamatan": "1117011",
      "id_kabupaten": "1117",
      "nama_kecamatan": "GAJAH PUTIH"
    },
    {
      "id_kecamatan": "1117020",
      "id_kabupaten": "1117",
      "nama_kecamatan": "PINTU RIME GAYO"
    },
    {
      "id_kecamatan": "1117030",
      "id_kabupaten": "1117",
      "nama_kecamatan": "BUKIT"
    },
    {
      "id_kecamatan": "1117040",
      "id_kabupaten": "1117",
      "nama_kecamatan": "WIH PESAM"
    },
    {
      "id_kecamatan": "1117050",
      "id_kabupaten": "1117",
      "nama_kecamatan": "BANDAR"
    },
    {
      "id_kecamatan": "1117051",
      "id_kabupaten": "1117",
      "nama_kecamatan": "BENER KELIPAH"
    },
    {
      "id_kecamatan": "1117060",
      "id_kabupaten": "1117",
      "nama_kecamatan": "SYIAH UTAMA"
    },
    {
      "id_kecamatan": "1117061",
      "id_kabupaten": "1117",
      "nama_kecamatan": "MESIDAH"
    },
    {
      "id_kecamatan": "1117070",
      "id_kabupaten": "1117",
      "nama_kecamatan": "PERMATA"
    },
    {
      "id_kecamatan": "1118010",
      "id_kabupaten": "1118",
      "nama_kecamatan": "MEUREUDU"
    },
    {
      "id_kecamatan": "1118020",
      "id_kabupaten": "1118",
      "nama_kecamatan": "MEURAH DUA"
    },
    {
      "id_kecamatan": "1118030",
      "id_kabupaten": "1118",
      "nama_kecamatan": "BANDAR DUA"
    },
    {
      "id_kecamatan": "1118040",
      "id_kabupaten": "1118",
      "nama_kecamatan": "JANGKA BUYA"
    },
    {
      "id_kecamatan": "1118050",
      "id_kabupaten": "1118",
      "nama_kecamatan": "ULIM"
    },
    {
      "id_kecamatan": "1118060",
      "id_kabupaten": "1118",
      "nama_kecamatan": "TRIENGGADENG"
    },
    {
      "id_kecamatan": "1118070",
      "id_kabupaten": "1118",
      "nama_kecamatan": "PANTERAJA"
    },
    {
      "id_kecamatan": "1118080",
      "id_kabupaten": "1118",
      "nama_kecamatan": "BANDAR BARU"
    },
    {
      "id_kecamatan": "1171010",
      "id_kabupaten": "1171",
      "nama_kecamatan": "MEURAXA"
    },
    {
      "id_kecamatan": "1171011",
      "id_kabupaten": "1171",
      "nama_kecamatan": "JAYA BARU"
    },
    {
      "id_kecamatan": "1171012",
      "id_kabupaten": "1171",
      "nama_kecamatan": "BANDA RAYA"
    },
    {
      "id_kecamatan": "1171020",
      "id_kabupaten": "1171",
      "nama_kecamatan": "BAITURRAHMAN"
    },
    {
      "id_kecamatan": "1171021",
      "id_kabupaten": "1171",
      "nama_kecamatan": "LUENG BATA"
    },
    {
      "id_kecamatan": "1171030",
      "id_kabupaten": "1171",
      "nama_kecamatan": "KUTA ALAM"
    },
    {
      "id_kecamatan": "1171031",
      "id_kabupaten": "1171",
      "nama_kecamatan": "KUTA RAJA"
    },
    {
      "id_kecamatan": "1171040",
      "id_kabupaten": "1171",
      "nama_kecamatan": "SYIAH KUALA"
    },
    {
      "id_kecamatan": "1171041",
      "id_kabupaten": "1171",
      "nama_kecamatan": "ULEE KARENG"
    },
    {
      "id_kecamatan": "1172010",
      "id_kabupaten": "1172",
      "nama_kecamatan": "SUKAJAYA"
    },
    {
      "id_kecamatan": "1172020",
      "id_kabupaten": "1172",
      "nama_kecamatan": "SUKAKARYA"
    },
    {
      "id_kecamatan": "1173010",
      "id_kabupaten": "1173",
      "nama_kecamatan": "LANGSA TIMUR"
    },
    {
      "id_kecamatan": "1173011",
      "id_kabupaten": "1173",
      "nama_kecamatan": "LANGSA LAMA"
    },
    {
      "id_kecamatan": "1173020",
      "id_kabupaten": "1173",
      "nama_kecamatan": "LANGSA BARAT"
    },
    {
      "id_kecamatan": "1173021",
      "id_kabupaten": "1173",
      "nama_kecamatan": "LANGSA BARO"
    },
    {
      "id_kecamatan": "1173030",
      "id_kabupaten": "1173",
      "nama_kecamatan": "LANGSA KOTA"
    },
    {
      "id_kecamatan": "1174010",
      "id_kabupaten": "1174",
      "nama_kecamatan": "BLANG MANGAT"
    },
    {
      "id_kecamatan": "1174020",
      "id_kabupaten": "1174",
      "nama_kecamatan": "MUARA DUA"
    },
    {
      "id_kecamatan": "1174021",
      "id_kabupaten": "1174",
      "nama_kecamatan": "MUARA SATU"
    },
    {
      "id_kecamatan": "1174030",
      "id_kabupaten": "1174",
      "nama_kecamatan": "BANDA SAKTI"
    },
    {
      "id_kecamatan": "1175010",
      "id_kabupaten": "1175",
      "nama_kecamatan": "SIMPANG KIRI"
    },
    {
      "id_kecamatan": "1175020",
      "id_kabupaten": "1175",
      "nama_kecamatan": "PENANGGALAN"
    },
    {
      "id_kecamatan": "1175030",
      "id_kabupaten": "1175",
      "nama_kecamatan": "RUNDENG"
    },
    {
      "id_kecamatan": "1175040",
      "id_kabupaten": "1175",
      "nama_kecamatan": "SULTAN DAULAT"
    },
    {
      "id_kecamatan": "1175050",
      "id_kabupaten": "1175",
      "nama_kecamatan": "LONGKIB"
    },
    {
      "id_kecamatan": "1201060",
      "id_kabupaten": "1201",
      "nama_kecamatan": "IDANO GAWO"
    },
    {
      "id_kecamatan": "1201061",
      "id_kabupaten": "1201",
      "nama_kecamatan": "BAWOLATO"
    },
    {
      "id_kecamatan": "1201062",
      "id_kabupaten": "1201",
      "nama_kecamatan": "ULUGAWO"
    },
    {
      "id_kecamatan": "1201070",
      "id_kabupaten": "1201",
      "nama_kecamatan": "GIDO"
    },
    {
      "id_kecamatan": "1201071",
      "id_kabupaten": "1201",
      "nama_kecamatan": "SOGAEADU"
    },
    {
      "id_kecamatan": "1201081",
      "id_kabupaten": "1201",
      "nama_kecamatan": "MA U"
    },
    {
      "id_kecamatan": "1201082",
      "id_kabupaten": "1201",
      "nama_kecamatan": "SOMOLO - MOLO"
    },
    {
      "id_kecamatan": "1201130",
      "id_kabupaten": "1201",
      "nama_kecamatan": "HILIDUHO"
    },
    {
      "id_kecamatan": "1201131",
      "id_kabupaten": "1201",
      "nama_kecamatan": "HILI SERANGKAI"
    },
    {
      "id_kecamatan": "1201132",
      "id_kabupaten": "1201",
      "nama_kecamatan": "BOTOMUZOI"
    },
    {
      "id_kecamatan": "1202010",
      "id_kabupaten": "1202",
      "nama_kecamatan": "BATAHAN"
    },
    {
      "id_kecamatan": "1202011",
      "id_kabupaten": "1202",
      "nama_kecamatan": "SINUNUKAN"
    },
    {
      "id_kecamatan": "1202020",
      "id_kabupaten": "1202",
      "nama_kecamatan": "BATANG NATAL"
    },
    {
      "id_kecamatan": "1202021",
      "id_kabupaten": "1202",
      "nama_kecamatan": "LINGGA BAYU"
    },
    {
      "id_kecamatan": "1202022",
      "id_kabupaten": "1202",
      "nama_kecamatan": "RANTO BAEK"
    },
    {
      "id_kecamatan": "1202030",
      "id_kabupaten": "1202",
      "nama_kecamatan": "KOTANOPAN"
    },
    {
      "id_kecamatan": "1202031",
      "id_kabupaten": "1202",
      "nama_kecamatan": "ULU PUNGKUT"
    },
    {
      "id_kecamatan": "1202032",
      "id_kabupaten": "1202",
      "nama_kecamatan": "TAMBANGAN"
    },
    {
      "id_kecamatan": "1202033",
      "id_kabupaten": "1202",
      "nama_kecamatan": "LEMBAH SORIK MARAPI"
    },
    {
      "id_kecamatan": "1202034",
      "id_kabupaten": "1202",
      "nama_kecamatan": "PUNCAK SORIK MARAPI"
    },
    {
      "id_kecamatan": "1202040",
      "id_kabupaten": "1202",
      "nama_kecamatan": "MUARA SIPONGI"
    },
    {
      "id_kecamatan": "1202041",
      "id_kabupaten": "1202",
      "nama_kecamatan": "PAKANTAN"
    },
    {
      "id_kecamatan": "1202050",
      "id_kabupaten": "1202",
      "nama_kecamatan": "PANYABUNGAN"
    },
    {
      "id_kecamatan": "1202051",
      "id_kabupaten": "1202",
      "nama_kecamatan": "PANYABUNGAN SELATAN"
    },
    {
      "id_kecamatan": "1202052",
      "id_kabupaten": "1202",
      "nama_kecamatan": "PANYABUNGAN BARAT"
    },
    {
      "id_kecamatan": "1202053",
      "id_kabupaten": "1202",
      "nama_kecamatan": "PANYABUNGAN UTARA"
    },
    {
      "id_kecamatan": "1202054",
      "id_kabupaten": "1202",
      "nama_kecamatan": "PANYABUNGAN TIMUR"
    },
    {
      "id_kecamatan": "1202055",
      "id_kabupaten": "1202",
      "nama_kecamatan": "HUTA BARGOT"
    },
    {
      "id_kecamatan": "1202060",
      "id_kabupaten": "1202",
      "nama_kecamatan": "NATAL"
    },
    {
      "id_kecamatan": "1202070",
      "id_kabupaten": "1202",
      "nama_kecamatan": "MUARA BATANG GADIS"
    },
    {
      "id_kecamatan": "1202080",
      "id_kabupaten": "1202",
      "nama_kecamatan": "SIABU"
    },
    {
      "id_kecamatan": "1202081",
      "id_kabupaten": "1202",
      "nama_kecamatan": "BUKIT MALINTANG"
    },
    {
      "id_kecamatan": "1202082",
      "id_kabupaten": "1202",
      "nama_kecamatan": "NAGA JUANG"
    },
    {
      "id_kecamatan": "1203010",
      "id_kabupaten": "1203",
      "nama_kecamatan": "BATANG ANGKOLA"
    },
    {
      "id_kecamatan": "1203011",
      "id_kabupaten": "1203",
      "nama_kecamatan": "SAYUR MATINGGI"
    },
    {
      "id_kecamatan": "1203012",
      "id_kabupaten": "1203",
      "nama_kecamatan": "TANO TOMBANGAN ANGKOLA"
    },
    {
      "id_kecamatan": "1203070",
      "id_kabupaten": "1203",
      "nama_kecamatan": "ANGKOLA TIMUR"
    },
    {
      "id_kecamatan": "1203080",
      "id_kabupaten": "1203",
      "nama_kecamatan": "ANGKOLA SELATAN"
    },
    {
      "id_kecamatan": "1203090",
      "id_kabupaten": "1203",
      "nama_kecamatan": "ANGKOLA  BARAT"
    },
    {
      "id_kecamatan": "1203091",
      "id_kabupaten": "1203",
      "nama_kecamatan": "ANGKOLA SANGKUNUR"
    },
    {
      "id_kecamatan": "1203100",
      "id_kabupaten": "1203",
      "nama_kecamatan": "BATANG TORU"
    },
    {
      "id_kecamatan": "1203101",
      "id_kabupaten": "1203",
      "nama_kecamatan": "MARANCAR"
    },
    {
      "id_kecamatan": "1203102",
      "id_kabupaten": "1203",
      "nama_kecamatan": "MUARA BATANG TORU"
    },
    {
      "id_kecamatan": "1203110",
      "id_kabupaten": "1203",
      "nama_kecamatan": "SIPIROK"
    },
    {
      "id_kecamatan": "1203120",
      "id_kabupaten": "1203",
      "nama_kecamatan": "ARSE"
    },
    {
      "id_kecamatan": "1203160",
      "id_kabupaten": "1203",
      "nama_kecamatan": "SAIPAR DOLOK HOLE"
    },
    {
      "id_kecamatan": "1203161",
      "id_kabupaten": "1203",
      "nama_kecamatan": "AEK BILAH"
    },
    {
      "id_kecamatan": "1204010",
      "id_kabupaten": "1204",
      "nama_kecamatan": "PINANG SORI"
    },
    {
      "id_kecamatan": "1204011",
      "id_kabupaten": "1204",
      "nama_kecamatan": "BADIRI"
    },
    {
      "id_kecamatan": "1204020",
      "id_kabupaten": "1204",
      "nama_kecamatan": "SIBABANGUN"
    },
    {
      "id_kecamatan": "1204021",
      "id_kabupaten": "1204",
      "nama_kecamatan": "LUMUT"
    },
    {
      "id_kecamatan": "1204022",
      "id_kabupaten": "1204",
      "nama_kecamatan": "SUKABANGUN"
    },
    {
      "id_kecamatan": "1204030",
      "id_kabupaten": "1204",
      "nama_kecamatan": "PANDAN"
    },
    {
      "id_kecamatan": "1204031",
      "id_kabupaten": "1204",
      "nama_kecamatan": "TUKKA"
    },
    {
      "id_kecamatan": "1204032",
      "id_kabupaten": "1204",
      "nama_kecamatan": "SARUDIK"
    },
    {
      "id_kecamatan": "1204040",
      "id_kabupaten": "1204",
      "nama_kecamatan": "TAPIAN NAULI"
    },
    {
      "id_kecamatan": "1204041",
      "id_kabupaten": "1204",
      "nama_kecamatan": "SITAHUIS"
    },
    {
      "id_kecamatan": "1204050",
      "id_kabupaten": "1204",
      "nama_kecamatan": "KOLANG"
    },
    {
      "id_kecamatan": "1204060",
      "id_kabupaten": "1204",
      "nama_kecamatan": "SORKAM"
    },
    {
      "id_kecamatan": "1204061",
      "id_kabupaten": "1204",
      "nama_kecamatan": "SORKAM BARAT"
    },
    {
      "id_kecamatan": "1204062",
      "id_kabupaten": "1204",
      "nama_kecamatan": "PASARIBU TOBING"
    },
    {
      "id_kecamatan": "1204070",
      "id_kabupaten": "1204",
      "nama_kecamatan": "BARUS"
    },
    {
      "id_kecamatan": "1204071",
      "id_kabupaten": "1204",
      "nama_kecamatan": "SOSOR GADONG"
    },
    {
      "id_kecamatan": "1204072",
      "id_kabupaten": "1204",
      "nama_kecamatan": "ANDAM DEWI"
    },
    {
      "id_kecamatan": "1204073",
      "id_kabupaten": "1204",
      "nama_kecamatan": "BARUS UTARA"
    },
    {
      "id_kecamatan": "1204080",
      "id_kabupaten": "1204",
      "nama_kecamatan": "MANDUAMAS"
    },
    {
      "id_kecamatan": "1204081",
      "id_kabupaten": "1204",
      "nama_kecamatan": "SIRANDORUNG"
    },
    {
      "id_kecamatan": "1205030",
      "id_kabupaten": "1205",
      "nama_kecamatan": "PARMONANGAN"
    },
    {
      "id_kecamatan": "1205040",
      "id_kabupaten": "1205",
      "nama_kecamatan": "ADIAN KOTING"
    },
    {
      "id_kecamatan": "1205050",
      "id_kabupaten": "1205",
      "nama_kecamatan": "SIPOHOLON"
    },
    {
      "id_kecamatan": "1205060",
      "id_kabupaten": "1205",
      "nama_kecamatan": "TARUTUNG"
    },
    {
      "id_kecamatan": "1205061",
      "id_kabupaten": "1205",
      "nama_kecamatan": "SIATAS BARITA"
    },
    {
      "id_kecamatan": "1205070",
      "id_kabupaten": "1205",
      "nama_kecamatan": "PAHAE JULU"
    },
    {
      "id_kecamatan": "1205080",
      "id_kabupaten": "1205",
      "nama_kecamatan": "PAHAE JAE"
    },
    {
      "id_kecamatan": "1205081",
      "id_kabupaten": "1205",
      "nama_kecamatan": "PURBATUA"
    },
    {
      "id_kecamatan": "1205082",
      "id_kabupaten": "1205",
      "nama_kecamatan": "SIMANGUMBAN"
    },
    {
      "id_kecamatan": "1205090",
      "id_kabupaten": "1205",
      "nama_kecamatan": "PANGARIBUAN"
    },
    {
      "id_kecamatan": "1205100",
      "id_kabupaten": "1205",
      "nama_kecamatan": "GAROGA"
    },
    {
      "id_kecamatan": "1205110",
      "id_kabupaten": "1205",
      "nama_kecamatan": "SIPAHUTAR"
    },
    {
      "id_kecamatan": "1205120",
      "id_kabupaten": "1205",
      "nama_kecamatan": "SIBORONG-BORONG"
    },
    {
      "id_kecamatan": "1205130",
      "id_kabupaten": "1205",
      "nama_kecamatan": "PAGARAN"
    },
    {
      "id_kecamatan": "1205180",
      "id_kabupaten": "1205",
      "nama_kecamatan": "MUARA"
    },
    {
      "id_kecamatan": "1206030",
      "id_kabupaten": "1206",
      "nama_kecamatan": "BALIGE"
    },
    {
      "id_kecamatan": "1206031",
      "id_kabupaten": "1206",
      "nama_kecamatan": "TAMPAHAN"
    },
    {
      "id_kecamatan": "1206040",
      "id_kabupaten": "1206",
      "nama_kecamatan": "LAGUBOTI"
    },
    {
      "id_kecamatan": "1206050",
      "id_kabupaten": "1206",
      "nama_kecamatan": "HABINSARAN"
    },
    {
      "id_kecamatan": "1206051",
      "id_kabupaten": "1206",
      "nama_kecamatan": "BORBOR"
    },
    {
      "id_kecamatan": "1206052",
      "id_kabupaten": "1206",
      "nama_kecamatan": "NASSAU"
    },
    {
      "id_kecamatan": "1206060",
      "id_kabupaten": "1206",
      "nama_kecamatan": "SILAEN"
    },
    {
      "id_kecamatan": "1206061",
      "id_kabupaten": "1206",
      "nama_kecamatan": "SIGUMPAR"
    },
    {
      "id_kecamatan": "1206070",
      "id_kabupaten": "1206",
      "nama_kecamatan": "PORSEA"
    },
    {
      "id_kecamatan": "1206071",
      "id_kabupaten": "1206",
      "nama_kecamatan": "PINTU POHAN MERANTI"
    },
    {
      "id_kecamatan": "1206072",
      "id_kabupaten": "1206",
      "nama_kecamatan": "SIANTAR NARUMONDA"
    },
    {
      "id_kecamatan": "1206073",
      "id_kabupaten": "1206",
      "nama_kecamatan": "PARMAKSIAN"
    },
    {
      "id_kecamatan": "1206080",
      "id_kabupaten": "1206",
      "nama_kecamatan": "LUMBAN JULU"
    },
    {
      "id_kecamatan": "1206081",
      "id_kabupaten": "1206",
      "nama_kecamatan": "ULUAN"
    },
    {
      "id_kecamatan": "1206082",
      "id_kabupaten": "1206",
      "nama_kecamatan": "AJIBATA"
    },
    {
      "id_kecamatan": "1206083",
      "id_kabupaten": "1206",
      "nama_kecamatan": "BONATUA LUNASI"
    },
    {
      "id_kecamatan": "1207050",
      "id_kabupaten": "1207",
      "nama_kecamatan": "BILAH HULU"
    },
    {
      "id_kecamatan": "1207070",
      "id_kabupaten": "1207",
      "nama_kecamatan": "PANGKATAN"
    },
    {
      "id_kecamatan": "1207080",
      "id_kabupaten": "1207",
      "nama_kecamatan": "BILAH BARAT"
    },
    {
      "id_kecamatan": "1207130",
      "id_kabupaten": "1207",
      "nama_kecamatan": "BILAH HILIR"
    },
    {
      "id_kecamatan": "1207140",
      "id_kabupaten": "1207",
      "nama_kecamatan": "PANAI HULU"
    },
    {
      "id_kecamatan": "1207150",
      "id_kabupaten": "1207",
      "nama_kecamatan": "PANAI TENGAH"
    },
    {
      "id_kecamatan": "1207160",
      "id_kabupaten": "1207",
      "nama_kecamatan": "PANAI HILIR"
    },
    {
      "id_kecamatan": "1207210",
      "id_kabupaten": "1207",
      "nama_kecamatan": "RANTAU SELATAN"
    },
    {
      "id_kecamatan": "1207220",
      "id_kabupaten": "1207",
      "nama_kecamatan": "RANTAU UTARA"
    },
    {
      "id_kecamatan": "1208010",
      "id_kabupaten": "1208",
      "nama_kecamatan": "BANDAR PASIR MANDOGE"
    },
    {
      "id_kecamatan": "1208020",
      "id_kabupaten": "1208",
      "nama_kecamatan": "BANDAR PULAU"
    },
    {
      "id_kecamatan": "1208021",
      "id_kabupaten": "1208",
      "nama_kecamatan": "AEK SONGSONGAN"
    },
    {
      "id_kecamatan": "1208022",
      "id_kabupaten": "1208",
      "nama_kecamatan": "RAHUNING"
    },
    {
      "id_kecamatan": "1208030",
      "id_kabupaten": "1208",
      "nama_kecamatan": "PULAU RAKYAT"
    },
    {
      "id_kecamatan": "1208031",
      "id_kabupaten": "1208",
      "nama_kecamatan": "AEK KUASAN"
    },
    {
      "id_kecamatan": "1208032",
      "id_kabupaten": "1208",
      "nama_kecamatan": "AEK LEDONG"
    },
    {
      "id_kecamatan": "1208040",
      "id_kabupaten": "1208",
      "nama_kecamatan": "SEI KEPAYANG"
    },
    {
      "id_kecamatan": "1208041",
      "id_kabupaten": "1208",
      "nama_kecamatan": "SEI KEPAYANG BARAT"
    },
    {
      "id_kecamatan": "1208042",
      "id_kabupaten": "1208",
      "nama_kecamatan": "SEI KEPAYANG TIMUR"
    },
    {
      "id_kecamatan": "1208050",
      "id_kabupaten": "1208",
      "nama_kecamatan": "TANJUNG BALAI"
    },
    {
      "id_kecamatan": "1208060",
      "id_kabupaten": "1208",
      "nama_kecamatan": "SIMPANG EMPAT"
    },
    {
      "id_kecamatan": "1208061",
      "id_kabupaten": "1208",
      "nama_kecamatan": "TELUK DALAM"
    },
    {
      "id_kecamatan": "1208070",
      "id_kabupaten": "1208",
      "nama_kecamatan": "AIR BATU"
    },
    {
      "id_kecamatan": "1208071",
      "id_kabupaten": "1208",
      "nama_kecamatan": "SEI DADAP"
    },
    {
      "id_kecamatan": "1208080",
      "id_kabupaten": "1208",
      "nama_kecamatan": "BUNTU PANE"
    },
    {
      "id_kecamatan": "1208081",
      "id_kabupaten": "1208",
      "nama_kecamatan": "TINGGI RAJA"
    },
    {
      "id_kecamatan": "1208082",
      "id_kabupaten": "1208",
      "nama_kecamatan": "SETIA JANJI"
    },
    {
      "id_kecamatan": "1208090",
      "id_kabupaten": "1208",
      "nama_kecamatan": "MERANTI"
    },
    {
      "id_kecamatan": "1208091",
      "id_kabupaten": "1208",
      "nama_kecamatan": "PULO BANDRING"
    },
    {
      "id_kecamatan": "1208092",
      "id_kabupaten": "1208",
      "nama_kecamatan": "RAWANG PANCA ARGA"
    },
    {
      "id_kecamatan": "1208100",
      "id_kabupaten": "1208",
      "nama_kecamatan": "AIR JOMAN"
    },
    {
      "id_kecamatan": "1208101",
      "id_kabupaten": "1208",
      "nama_kecamatan": "SILAU LAUT"
    },
    {
      "id_kecamatan": "1208160",
      "id_kabupaten": "1208",
      "nama_kecamatan": "KISARAN BARAT"
    },
    {
      "id_kecamatan": "1208170",
      "id_kabupaten": "1208",
      "nama_kecamatan": "KISARAN TIMUR"
    },
    {
      "id_kecamatan": "1209010",
      "id_kabupaten": "1209",
      "nama_kecamatan": "SILIMAKUTA"
    },
    {
      "id_kecamatan": "1209011",
      "id_kabupaten": "1209",
      "nama_kecamatan": "PEMATANG SILIMAHUTA"
    },
    {
      "id_kecamatan": "1209020",
      "id_kabupaten": "1209",
      "nama_kecamatan": "PURBA"
    },
    {
      "id_kecamatan": "1209021",
      "id_kabupaten": "1209",
      "nama_kecamatan": "HARANGGAOL HORISON"
    },
    {
      "id_kecamatan": "1209030",
      "id_kabupaten": "1209",
      "nama_kecamatan": "DOLOK PARDAMEAN"
    },
    {
      "id_kecamatan": "1209040",
      "id_kabupaten": "1209",
      "nama_kecamatan": "SIDAMANIK"
    },
    {
      "id_kecamatan": "1209041",
      "id_kabupaten": "1209",
      "nama_kecamatan": "PEMATANG SIDAMANIK"
    },
    {
      "id_kecamatan": "1209050",
      "id_kabupaten": "1209",
      "nama_kecamatan": "GIRSANG SIPANGAN BOLON"
    },
    {
      "id_kecamatan": "1209060",
      "id_kabupaten": "1209",
      "nama_kecamatan": "TANAH JAWA"
    },
    {
      "id_kecamatan": "1209061",
      "id_kabupaten": "1209",
      "nama_kecamatan": "HATONDUHAN"
    },
    {
      "id_kecamatan": "1209070",
      "id_kabupaten": "1209",
      "nama_kecamatan": "DOLOK PANRIBUAN"
    },
    {
      "id_kecamatan": "1209080",
      "id_kabupaten": "1209",
      "nama_kecamatan": "JORLANG HATARAN"
    },
    {
      "id_kecamatan": "1209090",
      "id_kabupaten": "1209",
      "nama_kecamatan": "PANEI"
    },
    {
      "id_kecamatan": "1209091",
      "id_kabupaten": "1209",
      "nama_kecamatan": "PANOMBEAN PANEI"
    },
    {
      "id_kecamatan": "1209100",
      "id_kabupaten": "1209",
      "nama_kecamatan": "RAYA"
    },
    {
      "id_kecamatan": "1209110",
      "id_kabupaten": "1209",
      "nama_kecamatan": "DOLOK SILAU"
    },
    {
      "id_kecamatan": "1209120",
      "id_kabupaten": "1209",
      "nama_kecamatan": "SILAU KAHEAN"
    },
    {
      "id_kecamatan": "1209130",
      "id_kabupaten": "1209",
      "nama_kecamatan": "RAYA KAHEAN"
    },
    {
      "id_kecamatan": "1209140",
      "id_kabupaten": "1209",
      "nama_kecamatan": "TAPIAN DOLOK"
    },
    {
      "id_kecamatan": "1209150",
      "id_kabupaten": "1209",
      "nama_kecamatan": "DOLOK BATU NANGGAR"
    },
    {
      "id_kecamatan": "1209160",
      "id_kabupaten": "1209",
      "nama_kecamatan": "SIANTAR"
    },
    {
      "id_kecamatan": "1209161",
      "id_kabupaten": "1209",
      "nama_kecamatan": "GUNUNG MALELA"
    },
    {
      "id_kecamatan": "1209162",
      "id_kabupaten": "1209",
      "nama_kecamatan": "GUNUNG MALIGAS"
    },
    {
      "id_kecamatan": "1209170",
      "id_kabupaten": "1209",
      "nama_kecamatan": "HUTABAYU RAJA"
    },
    {
      "id_kecamatan": "1209171",
      "id_kabupaten": "1209",
      "nama_kecamatan": "JAWA MARAJA BAH JAMBI"
    },
    {
      "id_kecamatan": "1209180",
      "id_kabupaten": "1209",
      "nama_kecamatan": "PEMATANG BANDAR"
    },
    {
      "id_kecamatan": "1209181",
      "id_kabupaten": "1209",
      "nama_kecamatan": "BANDAR HULUAN"
    },
    {
      "id_kecamatan": "1209190",
      "id_kabupaten": "1209",
      "nama_kecamatan": "BANDAR"
    },
    {
      "id_kecamatan": "1209191",
      "id_kabupaten": "1209",
      "nama_kecamatan": "BANDAR MASILAM"
    },
    {
      "id_kecamatan": "1209200",
      "id_kabupaten": "1209",
      "nama_kecamatan": "BOSAR MALIGAS"
    },
    {
      "id_kecamatan": "1209210",
      "id_kabupaten": "1209",
      "nama_kecamatan": "UJUNG PADANG"
    },
    {
      "id_kecamatan": "1210030",
      "id_kabupaten": "1210",
      "nama_kecamatan": "SIDIKALANG"
    },
    {
      "id_kecamatan": "1210031",
      "id_kabupaten": "1210",
      "nama_kecamatan": "BERAMPU"
    },
    {
      "id_kecamatan": "1210032",
      "id_kabupaten": "1210",
      "nama_kecamatan": "SITINJO"
    },
    {
      "id_kecamatan": "1210040",
      "id_kabupaten": "1210",
      "nama_kecamatan": "PARBULUAN"
    },
    {
      "id_kecamatan": "1210050",
      "id_kabupaten": "1210",
      "nama_kecamatan": "SUMBUL"
    },
    {
      "id_kecamatan": "1210051",
      "id_kabupaten": "1210",
      "nama_kecamatan": "SILAHI SABUNGAN"
    },
    {
      "id_kecamatan": "1210060",
      "id_kabupaten": "1210",
      "nama_kecamatan": "SILIMA PUNGGA-PUNGGA"
    },
    {
      "id_kecamatan": "1210061",
      "id_kabupaten": "1210",
      "nama_kecamatan": "LAE PARIRA"
    },
    {
      "id_kecamatan": "1210070",
      "id_kabupaten": "1210",
      "nama_kecamatan": "SIEMPAT NEMPU"
    },
    {
      "id_kecamatan": "1210080",
      "id_kabupaten": "1210",
      "nama_kecamatan": "SIEMPAT NEMPU HULU"
    },
    {
      "id_kecamatan": "1210090",
      "id_kabupaten": "1210",
      "nama_kecamatan": "SIEMPAT NEMPU HILIR"
    },
    {
      "id_kecamatan": "1210100",
      "id_kabupaten": "1210",
      "nama_kecamatan": "TIGA LINGGA"
    },
    {
      "id_kecamatan": "1210101",
      "id_kabupaten": "1210",
      "nama_kecamatan": "GUNUNG SITEMBER"
    },
    {
      "id_kecamatan": "1210110",
      "id_kabupaten": "1210",
      "nama_kecamatan": "PEGAGAN HILIR"
    },
    {
      "id_kecamatan": "1210120",
      "id_kabupaten": "1210",
      "nama_kecamatan": "TANAH PINEM"
    },
    {
      "id_kecamatan": "1211010",
      "id_kabupaten": "1211",
      "nama_kecamatan": "MARDINGDING"
    },
    {
      "id_kecamatan": "1211020",
      "id_kabupaten": "1211",
      "nama_kecamatan": "LAUBALENG"
    },
    {
      "id_kecamatan": "1211030",
      "id_kabupaten": "1211",
      "nama_kecamatan": "TIGA BINANGA"
    },
    {
      "id_kecamatan": "1211040",
      "id_kabupaten": "1211",
      "nama_kecamatan": "JUHAR"
    },
    {
      "id_kecamatan": "1211050",
      "id_kabupaten": "1211",
      "nama_kecamatan": "MUNTE"
    },
    {
      "id_kecamatan": "1211060",
      "id_kabupaten": "1211",
      "nama_kecamatan": "KUTA BULUH"
    },
    {
      "id_kecamatan": "1211070",
      "id_kabupaten": "1211",
      "nama_kecamatan": "PAYUNG"
    },
    {
      "id_kecamatan": "1211071",
      "id_kabupaten": "1211",
      "nama_kecamatan": "TIGANDERKET"
    },
    {
      "id_kecamatan": "1211080",
      "id_kabupaten": "1211",
      "nama_kecamatan": "SIMPANG EMPAT"
    },
    {
      "id_kecamatan": "1211081",
      "id_kabupaten": "1211",
      "nama_kecamatan": "NAMAN TERAN"
    },
    {
      "id_kecamatan": "1211082",
      "id_kabupaten": "1211",
      "nama_kecamatan": "MERDEKA"
    },
    {
      "id_kecamatan": "1211090",
      "id_kabupaten": "1211",
      "nama_kecamatan": "KABANJAHE"
    },
    {
      "id_kecamatan": "1211100",
      "id_kabupaten": "1211",
      "nama_kecamatan": "BERASTAGI"
    },
    {
      "id_kecamatan": "1211110",
      "id_kabupaten": "1211",
      "nama_kecamatan": "TIGAPANAH"
    },
    {
      "id_kecamatan": "1211111",
      "id_kabupaten": "1211",
      "nama_kecamatan": "DOLAT RAYAT"
    },
    {
      "id_kecamatan": "1211120",
      "id_kabupaten": "1211",
      "nama_kecamatan": "MEREK"
    },
    {
      "id_kecamatan": "1211130",
      "id_kabupaten": "1211",
      "nama_kecamatan": "BARUSJAHE"
    },
    {
      "id_kecamatan": "1212010",
      "id_kabupaten": "1212",
      "nama_kecamatan": "GUNUNG MERIAH"
    },
    {
      "id_kecamatan": "1212020",
      "id_kabupaten": "1212",
      "nama_kecamatan": "SINEMBAH TANJUNG MUDA HULU"
    },
    {
      "id_kecamatan": "1212030",
      "id_kabupaten": "1212",
      "nama_kecamatan": "SIBOLANGIT"
    },
    {
      "id_kecamatan": "1212040",
      "id_kabupaten": "1212",
      "nama_kecamatan": "KUTALIMBARU"
    },
    {
      "id_kecamatan": "1212050",
      "id_kabupaten": "1212",
      "nama_kecamatan": "PANCUR BATU"
    },
    {
      "id_kecamatan": "1212060",
      "id_kabupaten": "1212",
      "nama_kecamatan": "NAMO RAMBE"
    },
    {
      "id_kecamatan": "1212070",
      "id_kabupaten": "1212",
      "nama_kecamatan": "BIRU-BIRU"
    },
    {
      "id_kecamatan": "1212080",
      "id_kabupaten": "1212",
      "nama_kecamatan": "SINEMBAH TANJUNG MUDA HILIR"
    },
    {
      "id_kecamatan": "1212090",
      "id_kabupaten": "1212",
      "nama_kecamatan": "BANGUN PURBA"
    },
    {
      "id_kecamatan": "1212190",
      "id_kabupaten": "1212",
      "nama_kecamatan": "GALANG"
    },
    {
      "id_kecamatan": "1212200",
      "id_kabupaten": "1212",
      "nama_kecamatan": "TANJUNG MORAWA"
    },
    {
      "id_kecamatan": "1212210",
      "id_kabupaten": "1212",
      "nama_kecamatan": "PATUMBAK"
    },
    {
      "id_kecamatan": "1212220",
      "id_kabupaten": "1212",
      "nama_kecamatan": "DELI TUA"
    },
    {
      "id_kecamatan": "1212230",
      "id_kabupaten": "1212",
      "nama_kecamatan": "SUNGGAL"
    },
    {
      "id_kecamatan": "1212240",
      "id_kabupaten": "1212",
      "nama_kecamatan": "HAMPARAN PERAK"
    },
    {
      "id_kecamatan": "1212250",
      "id_kabupaten": "1212",
      "nama_kecamatan": "LABUHAN DELI"
    },
    {
      "id_kecamatan": "1212260",
      "id_kabupaten": "1212",
      "nama_kecamatan": "PERCUT SEI TUAN"
    },
    {
      "id_kecamatan": "1212270",
      "id_kabupaten": "1212",
      "nama_kecamatan": "BATANG KUIS"
    },
    {
      "id_kecamatan": "1212280",
      "id_kabupaten": "1212",
      "nama_kecamatan": "PANTAI LABU"
    },
    {
      "id_kecamatan": "1212290",
      "id_kabupaten": "1212",
      "nama_kecamatan": "BERINGIN"
    },
    {
      "id_kecamatan": "1212300",
      "id_kabupaten": "1212",
      "nama_kecamatan": "LUBUK PAKAM"
    },
    {
      "id_kecamatan": "1212310",
      "id_kabupaten": "1212",
      "nama_kecamatan": "PAGAR MERBAU"
    },
    {
      "id_kecamatan": "1213010",
      "id_kabupaten": "1213",
      "nama_kecamatan": "BOHOROK"
    },
    {
      "id_kecamatan": "1213011",
      "id_kabupaten": "1213",
      "nama_kecamatan": "SIRAPIT"
    },
    {
      "id_kecamatan": "1213020",
      "id_kabupaten": "1213",
      "nama_kecamatan": "SALAPIAN"
    },
    {
      "id_kecamatan": "1213021",
      "id_kabupaten": "1213",
      "nama_kecamatan": "KUTAMBARU"
    },
    {
      "id_kecamatan": "1213030",
      "id_kabupaten": "1213",
      "nama_kecamatan": "SEI BINGAI"
    },
    {
      "id_kecamatan": "1213040",
      "id_kabupaten": "1213",
      "nama_kecamatan": "KUALA"
    },
    {
      "id_kecamatan": "1213050",
      "id_kabupaten": "1213",
      "nama_kecamatan": "SELESAI"
    },
    {
      "id_kecamatan": "1213060",
      "id_kabupaten": "1213",
      "nama_kecamatan": "BINJAI"
    },
    {
      "id_kecamatan": "1213070",
      "id_kabupaten": "1213",
      "nama_kecamatan": "STABAT"
    },
    {
      "id_kecamatan": "1213080",
      "id_kabupaten": "1213",
      "nama_kecamatan": "WAMPU"
    },
    {
      "id_kecamatan": "1213090",
      "id_kabupaten": "1213",
      "nama_kecamatan": "BATANG SERANGAN"
    },
    {
      "id_kecamatan": "1213100",
      "id_kabupaten": "1213",
      "nama_kecamatan": "SAWIT SEBERANG"
    },
    {
      "id_kecamatan": "1213110",
      "id_kabupaten": "1213",
      "nama_kecamatan": "PADANG TUALANG"
    },
    {
      "id_kecamatan": "1213120",
      "id_kabupaten": "1213",
      "nama_kecamatan": "HINAI"
    },
    {
      "id_kecamatan": "1213130",
      "id_kabupaten": "1213",
      "nama_kecamatan": "SECANGGANG"
    },
    {
      "id_kecamatan": "1213140",
      "id_kabupaten": "1213",
      "nama_kecamatan": "TANJUNG PURA"
    },
    {
      "id_kecamatan": "1213150",
      "id_kabupaten": "1213",
      "nama_kecamatan": "GEBANG"
    },
    {
      "id_kecamatan": "1213160",
      "id_kabupaten": "1213",
      "nama_kecamatan": "BABALAN"
    },
    {
      "id_kecamatan": "1213170",
      "id_kabupaten": "1213",
      "nama_kecamatan": "SEI LEPAN"
    },
    {
      "id_kecamatan": "1213180",
      "id_kabupaten": "1213",
      "nama_kecamatan": "BRANDAN BARAT"
    },
    {
      "id_kecamatan": "1213190",
      "id_kabupaten": "1213",
      "nama_kecamatan": "BESITANG"
    },
    {
      "id_kecamatan": "1213200",
      "id_kabupaten": "1213",
      "nama_kecamatan": "PANGKALAN SUSU"
    },
    {
      "id_kecamatan": "1213201",
      "id_kabupaten": "1213",
      "nama_kecamatan": "PEMATANG JAYA"
    },
    {
      "id_kecamatan": "1214010",
      "id_kabupaten": "1214",
      "nama_kecamatan": "HIBALA"
    },
    {
      "id_kecamatan": "1214011",
      "id_kabupaten": "1214",
      "nama_kecamatan": "TANAH MASA"
    },
    {
      "id_kecamatan": "1214020",
      "id_kabupaten": "1214",
      "nama_kecamatan": "PULAU-PULAU BATU"
    },
    {
      "id_kecamatan": "1214021",
      "id_kabupaten": "1214",
      "nama_kecamatan": "PULAU-PULAU BATU TIMUR"
    },
    {
      "id_kecamatan": "1214022",
      "id_kabupaten": "1214",
      "nama_kecamatan": "SIMUK"
    },
    {
      "id_kecamatan": "1214023",
      "id_kabupaten": "1214",
      "nama_kecamatan": "PULAU-PULAU BATU BARAT"
    },
    {
      "id_kecamatan": "1214024",
      "id_kabupaten": "1214",
      "nama_kecamatan": "PULAU-PULAU BATU UTARA"
    },
    {
      "id_kecamatan": "1214030",
      "id_kabupaten": "1214",
      "nama_kecamatan": "TELUK DALAM"
    },
    {
      "id_kecamatan": "1214031",
      "id_kabupaten": "1214",
      "nama_kecamatan": "FANAYAMA"
    },
    {
      "id_kecamatan": "1214032",
      "id_kabupaten": "1214",
      "nama_kecamatan": "TOMA"
    },
    {
      "id_kecamatan": "1214033",
      "id_kabupaten": "1214",
      "nama_kecamatan": "MANIAMOLO"
    },
    {
      "id_kecamatan": "1214034",
      "id_kabupaten": "1214",
      "nama_kecamatan": "MAZINO"
    },
    {
      "id_kecamatan": "1214035",
      "id_kabupaten": "1214",
      "nama_kecamatan": "LUAHAGUNDRE MANIAMOLO"
    },
    {
      "id_kecamatan": "1214036",
      "id_kabupaten": "1214",
      "nama_kecamatan": "ONOLALU"
    },
    {
      "id_kecamatan": "1214040",
      "id_kabupaten": "1214",
      "nama_kecamatan": "AMANDRAYA"
    },
    {
      "id_kecamatan": "1214041",
      "id_kabupaten": "1214",
      "nama_kecamatan": "ARAMO"
    },
    {
      "id_kecamatan": "1214042",
      "id_kabupaten": "1214",
      "nama_kecamatan": "ULUSUSUA"
    },
    {
      "id_kecamatan": "1214050",
      "id_kabupaten": "1214",
      "nama_kecamatan": "LAHUSA"
    },
    {
      "id_kecamatan": "1214051",
      "id_kabupaten": "1214",
      "nama_kecamatan": "SIDUAORI"
    },
    {
      "id_kecamatan": "1214052",
      "id_kabupaten": "1214",
      "nama_kecamatan": "SOMAMBAWA"
    },
    {
      "id_kecamatan": "1214060",
      "id_kabupaten": "1214",
      "nama_kecamatan": "GOMO"
    },
    {
      "id_kecamatan": "1214061",
      "id_kabupaten": "1214",
      "nama_kecamatan": "SUSUA"
    },
    {
      "id_kecamatan": "1214062",
      "id_kabupaten": "1214",
      "nama_kecamatan": "MAZO"
    },
    {
      "id_kecamatan": "1214063",
      "id_kabupaten": "1214",
      "nama_kecamatan": "UMBUNASI"
    },
    {
      "id_kecamatan": "1214064",
      "id_kabupaten": "1214",
      "nama_kecamatan": "IDANOTAE"
    },
    {
      "id_kecamatan": "1214065",
      "id_kabupaten": "1214",
      "nama_kecamatan": "ULUIDANOTAE"
    },
    {
      "id_kecamatan": "1214066",
      "id_kabupaten": "1214",
      "nama_kecamatan": "BORONADU"
    },
    {
      "id_kecamatan": "1214070",
      "id_kabupaten": "1214",
      "nama_kecamatan": "LOLOMATUA"
    },
    {
      "id_kecamatan": "1214071",
      "id_kabupaten": "1214",
      "nama_kecamatan": "ULUNOYO"
    },
    {
      "id_kecamatan": "1214072",
      "id_kabupaten": "1214",
      "nama_kecamatan": "HURUNA"
    },
    {
      "id_kecamatan": "1214080",
      "id_kabupaten": "1214",
      "nama_kecamatan": "LOLOWA'U"
    },
    {
      "id_kecamatan": "1214081",
      "id_kabupaten": "1214",
      "nama_kecamatan": "HILIMEGAI"
    },
    {
      "id_kecamatan": "1214082",
      "id_kabupaten": "1214",
      "nama_kecamatan": "OOU"
    },
    {
      "id_kecamatan": "1214083",
      "id_kabupaten": "1214",
      "nama_kecamatan": "ONOHAZUMBA"
    },
    {
      "id_kecamatan": "1214084",
      "id_kabupaten": "1214",
      "nama_kecamatan": "HILISALAWAAHE"
    },
    {
      "id_kecamatan": "1215010",
      "id_kabupaten": "1215",
      "nama_kecamatan": "PAKKAT"
    },
    {
      "id_kecamatan": "1215020",
      "id_kabupaten": "1215",
      "nama_kecamatan": "ONAN GANJANG"
    },
    {
      "id_kecamatan": "1215030",
      "id_kabupaten": "1215",
      "nama_kecamatan": "SIJAMA POLANG"
    },
    {
      "id_kecamatan": "1215040",
      "id_kabupaten": "1215",
      "nama_kecamatan": "DOLOK SANGGUL"
    },
    {
      "id_kecamatan": "1215050",
      "id_kabupaten": "1215",
      "nama_kecamatan": "LINTONG NIHUTA"
    },
    {
      "id_kecamatan": "1215060",
      "id_kabupaten": "1215",
      "nama_kecamatan": "PARANGINAN"
    },
    {
      "id_kecamatan": "1215070",
      "id_kabupaten": "1215",
      "nama_kecamatan": "BAKTI RAJA"
    },
    {
      "id_kecamatan": "1215080",
      "id_kabupaten": "1215",
      "nama_kecamatan": "POLLUNG"
    },
    {
      "id_kecamatan": "1215090",
      "id_kabupaten": "1215",
      "nama_kecamatan": "PARLILITAN"
    },
    {
      "id_kecamatan": "1215100",
      "id_kabupaten": "1215",
      "nama_kecamatan": "TARA BINTANG"
    },
    {
      "id_kecamatan": "1216010",
      "id_kabupaten": "1216",
      "nama_kecamatan": "SALAK"
    },
    {
      "id_kecamatan": "1216011",
      "id_kabupaten": "1216",
      "nama_kecamatan": "SITELLU TALI URANG JEHE"
    },
    {
      "id_kecamatan": "1216012",
      "id_kabupaten": "1216",
      "nama_kecamatan": "PAGINDAR"
    },
    {
      "id_kecamatan": "1216013",
      "id_kabupaten": "1216",
      "nama_kecamatan": "SITELLU TALI URANG JULU"
    },
    {
      "id_kecamatan": "1216014",
      "id_kabupaten": "1216",
      "nama_kecamatan": "PERGETTENG-GETTENG SENGKUT"
    },
    {
      "id_kecamatan": "1216020",
      "id_kabupaten": "1216",
      "nama_kecamatan": "KERAJAAN"
    },
    {
      "id_kecamatan": "1216021",
      "id_kabupaten": "1216",
      "nama_kecamatan": "TINADA"
    },
    {
      "id_kecamatan": "1216022",
      "id_kabupaten": "1216",
      "nama_kecamatan": "SIEMPAT RUBE"
    },
    {
      "id_kecamatan": "1217010",
      "id_kabupaten": "1217",
      "nama_kecamatan": "SIANJUR MULA MULA"
    },
    {
      "id_kecamatan": "1217020",
      "id_kabupaten": "1217",
      "nama_kecamatan": "HARIAN"
    },
    {
      "id_kecamatan": "1217030",
      "id_kabupaten": "1217",
      "nama_kecamatan": "SITIO-TIO"
    },
    {
      "id_kecamatan": "1217040",
      "id_kabupaten": "1217",
      "nama_kecamatan": "ONAN RUNGGU"
    },
    {
      "id_kecamatan": "1217050",
      "id_kabupaten": "1217",
      "nama_kecamatan": "NAINGGOLAN"
    },
    {
      "id_kecamatan": "1217060",
      "id_kabupaten": "1217",
      "nama_kecamatan": "PALIPI"
    },
    {
      "id_kecamatan": "1217070",
      "id_kabupaten": "1217",
      "nama_kecamatan": "RONGGUR NIHUTA"
    },
    {
      "id_kecamatan": "1217080",
      "id_kabupaten": "1217",
      "nama_kecamatan": "PANGURURAN"
    },
    {
      "id_kecamatan": "1217090",
      "id_kabupaten": "1217",
      "nama_kecamatan": "SIMANINDO"
    },
    {
      "id_kecamatan": "1218010",
      "id_kabupaten": "1218",
      "nama_kecamatan": "KOTARIH"
    },
    {
      "id_kecamatan": "1218011",
      "id_kabupaten": "1218",
      "nama_kecamatan": "SILINDA"
    },
    {
      "id_kecamatan": "1218012",
      "id_kabupaten": "1218",
      "nama_kecamatan": "BINTANG BAYU"
    },
    {
      "id_kecamatan": "1218020",
      "id_kabupaten": "1218",
      "nama_kecamatan": "DOLOK MASIHUL"
    },
    {
      "id_kecamatan": "1218021",
      "id_kabupaten": "1218",
      "nama_kecamatan": "SERBAJADI"
    },
    {
      "id_kecamatan": "1218030",
      "id_kabupaten": "1218",
      "nama_kecamatan": "SIPISPIS"
    },
    {
      "id_kecamatan": "1218040",
      "id_kabupaten": "1218",
      "nama_kecamatan": "DOLOK MERAWAN"
    },
    {
      "id_kecamatan": "1218050",
      "id_kabupaten": "1218",
      "nama_kecamatan": "TEBINGTINGGI"
    },
    {
      "id_kecamatan": "1218051",
      "id_kabupaten": "1218",
      "nama_kecamatan": "TEBING SYAHBANDAR"
    },
    {
      "id_kecamatan": "1218060",
      "id_kabupaten": "1218",
      "nama_kecamatan": "BANDAR KHALIPAH"
    },
    {
      "id_kecamatan": "1218070",
      "id_kabupaten": "1218",
      "nama_kecamatan": "TANJUNG BERINGIN"
    },
    {
      "id_kecamatan": "1218080",
      "id_kabupaten": "1218",
      "nama_kecamatan": "SEI RAMPAH"
    },
    {
      "id_kecamatan": "1218081",
      "id_kabupaten": "1218",
      "nama_kecamatan": "SEI BAMBAN"
    },
    {
      "id_kecamatan": "1218090",
      "id_kabupaten": "1218",
      "nama_kecamatan": "TELUK MENGKUDU"
    },
    {
      "id_kecamatan": "1218100",
      "id_kabupaten": "1218",
      "nama_kecamatan": "PERBAUNGAN"
    },
    {
      "id_kecamatan": "1218101",
      "id_kabupaten": "1218",
      "nama_kecamatan": "PEGAJAHAN"
    },
    {
      "id_kecamatan": "1218110",
      "id_kabupaten": "1218",
      "nama_kecamatan": "PANTAI CERMIN"
    },
    {
      "id_kecamatan": "1219010",
      "id_kabupaten": "1219",
      "nama_kecamatan": "SEI BALAI"
    },
    {
      "id_kecamatan": "1219020",
      "id_kabupaten": "1219",
      "nama_kecamatan": "TANJUNG TIRAM"
    },
    {
      "id_kecamatan": "1219030",
      "id_kabupaten": "1219",
      "nama_kecamatan": "TALAWI"
    },
    {
      "id_kecamatan": "1219040",
      "id_kabupaten": "1219",
      "nama_kecamatan": "LIMAPULUH"
    },
    {
      "id_kecamatan": "1219050",
      "id_kabupaten": "1219",
      "nama_kecamatan": "AIR PUTIH"
    },
    {
      "id_kecamatan": "1219060",
      "id_kabupaten": "1219",
      "nama_kecamatan": "SEI SUKA"
    },
    {
      "id_kecamatan": "1219070",
      "id_kabupaten": "1219",
      "nama_kecamatan": "MEDANG DERAS"
    },
    {
      "id_kecamatan": "1220010",
      "id_kabupaten": "1220",
      "nama_kecamatan": "BATANG ONANG"
    },
    {
      "id_kecamatan": "1220020",
      "id_kabupaten": "1220",
      "nama_kecamatan": "PADANG BOLAK JULU"
    },
    {
      "id_kecamatan": "1220030",
      "id_kabupaten": "1220",
      "nama_kecamatan": "PORTIBI"
    },
    {
      "id_kecamatan": "1220040",
      "id_kabupaten": "1220",
      "nama_kecamatan": "PADANG BOLAK"
    },
    {
      "id_kecamatan": "1220050",
      "id_kabupaten": "1220",
      "nama_kecamatan": "SIMANGAMBAT"
    },
    {
      "id_kecamatan": "1220060",
      "id_kabupaten": "1220",
      "nama_kecamatan": "HALONGONAN"
    },
    {
      "id_kecamatan": "1220070",
      "id_kabupaten": "1220",
      "nama_kecamatan": "DOLOK"
    },
    {
      "id_kecamatan": "1220080",
      "id_kabupaten": "1220",
      "nama_kecamatan": "DOLOK SIGOMPULON"
    },
    {
      "id_kecamatan": "1220090",
      "id_kabupaten": "1220",
      "nama_kecamatan": "HULU SIHAPAS"
    },
    {
      "id_kecamatan": "1221010",
      "id_kabupaten": "1221",
      "nama_kecamatan": "SOSOPAN"
    },
    {
      "id_kecamatan": "1221020",
      "id_kabupaten": "1221",
      "nama_kecamatan": "ULU BARUMUN"
    },
    {
      "id_kecamatan": "1221030",
      "id_kabupaten": "1221",
      "nama_kecamatan": "BARUMUN"
    },
    {
      "id_kecamatan": "1221031",
      "id_kabupaten": "1221",
      "nama_kecamatan": "BARUMUN SELATAN"
    },
    {
      "id_kecamatan": "1221040",
      "id_kabupaten": "1221",
      "nama_kecamatan": "LUBUK BARUMUN"
    },
    {
      "id_kecamatan": "1221050",
      "id_kabupaten": "1221",
      "nama_kecamatan": "SOSA"
    },
    {
      "id_kecamatan": "1221060",
      "id_kabupaten": "1221",
      "nama_kecamatan": "BATANG LUBU SUTAM"
    },
    {
      "id_kecamatan": "1221070",
      "id_kabupaten": "1221",
      "nama_kecamatan": "HUTA RAJA TINGGI"
    },
    {
      "id_kecamatan": "1221080",
      "id_kabupaten": "1221",
      "nama_kecamatan": "HURISTAK"
    },
    {
      "id_kecamatan": "1221090",
      "id_kabupaten": "1221",
      "nama_kecamatan": "BARUMUN TENGAH"
    },
    {
      "id_kecamatan": "1221091",
      "id_kabupaten": "1221",
      "nama_kecamatan": "AEK NABARA BARUMUN"
    },
    {
      "id_kecamatan": "1221092",
      "id_kabupaten": "1221",
      "nama_kecamatan": "SIHAPAS BARUMUN"
    },
    {
      "id_kecamatan": "1222010",
      "id_kabupaten": "1222",
      "nama_kecamatan": "SUNGAI KANAN"
    },
    {
      "id_kecamatan": "1222020",
      "id_kabupaten": "1222",
      "nama_kecamatan": "TORGAMBA"
    },
    {
      "id_kecamatan": "1222030",
      "id_kabupaten": "1222",
      "nama_kecamatan": "KOTA PINANG"
    },
    {
      "id_kecamatan": "1222040",
      "id_kabupaten": "1222",
      "nama_kecamatan": "SILANGKITANG"
    },
    {
      "id_kecamatan": "1222050",
      "id_kabupaten": "1222",
      "nama_kecamatan": "KAMPUNG RAKYAT"
    },
    {
      "id_kecamatan": "1223010",
      "id_kabupaten": "1223",
      "nama_kecamatan": "NA IX-X"
    },
    {
      "id_kecamatan": "1223020",
      "id_kabupaten": "1223",
      "nama_kecamatan": "MARBAU"
    },
    {
      "id_kecamatan": "1223030",
      "id_kabupaten": "1223",
      "nama_kecamatan": "AEK KUO"
    },
    {
      "id_kecamatan": "1223040",
      "id_kabupaten": "1223",
      "nama_kecamatan": "AEK NATAS"
    },
    {
      "id_kecamatan": "1223050",
      "id_kabupaten": "1223",
      "nama_kecamatan": "KUALUH SELATAN"
    },
    {
      "id_kecamatan": "1223060",
      "id_kabupaten": "1223",
      "nama_kecamatan": "KUALUH HILIR"
    },
    {
      "id_kecamatan": "1223070",
      "id_kabupaten": "1223",
      "nama_kecamatan": "KUALUH HULU"
    },
    {
      "id_kecamatan": "1223080",
      "id_kabupaten": "1223",
      "nama_kecamatan": "KUALUH LEIDONG"
    },
    {
      "id_kecamatan": "1224010",
      "id_kabupaten": "1224",
      "nama_kecamatan": "TUGALA OYO"
    },
    {
      "id_kecamatan": "1224020",
      "id_kabupaten": "1224",
      "nama_kecamatan": "ALASA"
    },
    {
      "id_kecamatan": "1224030",
      "id_kabupaten": "1224",
      "nama_kecamatan": "ALASA TALU MUZOI"
    },
    {
      "id_kecamatan": "1224040",
      "id_kabupaten": "1224",
      "nama_kecamatan": "NAMOHALU ESIWA"
    },
    {
      "id_kecamatan": "1224050",
      "id_kabupaten": "1224",
      "nama_kecamatan": "SITOLU ORI"
    },
    {
      "id_kecamatan": "1224060",
      "id_kabupaten": "1224",
      "nama_kecamatan": "TUHEMBERUA"
    },
    {
      "id_kecamatan": "1224070",
      "id_kabupaten": "1224",
      "nama_kecamatan": "SAWO"
    },
    {
      "id_kecamatan": "1224080",
      "id_kabupaten": "1224",
      "nama_kecamatan": "LOTU"
    },
    {
      "id_kecamatan": "1224090",
      "id_kabupaten": "1224",
      "nama_kecamatan": "LAHEWA TIMUR"
    },
    {
      "id_kecamatan": "1224100",
      "id_kabupaten": "1224",
      "nama_kecamatan": "AFULU"
    },
    {
      "id_kecamatan": "1224110",
      "id_kabupaten": "1224",
      "nama_kecamatan": "LAHEWA"
    },
    {
      "id_kecamatan": "1225010",
      "id_kabupaten": "1225",
      "nama_kecamatan": "SIROMBU"
    },
    {
      "id_kecamatan": "1225020",
      "id_kabupaten": "1225",
      "nama_kecamatan": "LAHOMI"
    },
    {
      "id_kecamatan": "1225030",
      "id_kabupaten": "1225",
      "nama_kecamatan": "ULU MORO O"
    },
    {
      "id_kecamatan": "1225040",
      "id_kabupaten": "1225",
      "nama_kecamatan": "LOLOFITU MOI"
    },
    {
      "id_kecamatan": "1225050",
      "id_kabupaten": "1225",
      "nama_kecamatan": "MANDREHE UTARA"
    },
    {
      "id_kecamatan": "1225060",
      "id_kabupaten": "1225",
      "nama_kecamatan": "MANDREHE"
    },
    {
      "id_kecamatan": "1225070",
      "id_kabupaten": "1225",
      "nama_kecamatan": "MANDREHE BARAT"
    },
    {
      "id_kecamatan": "1225080",
      "id_kabupaten": "1225",
      "nama_kecamatan": "MORO O"
    },
    {
      "id_kecamatan": "1271010",
      "id_kabupaten": "1271",
      "nama_kecamatan": "SIBOLGA UTARA"
    },
    {
      "id_kecamatan": "1271020",
      "id_kabupaten": "1271",
      "nama_kecamatan": "SIBOLGA KOTA"
    },
    {
      "id_kecamatan": "1271030",
      "id_kabupaten": "1271",
      "nama_kecamatan": "SIBOLGA SELATAN"
    },
    {
      "id_kecamatan": "1271031",
      "id_kabupaten": "1271",
      "nama_kecamatan": "SIBOLGA SAMBAS"
    },
    {
      "id_kecamatan": "1272010",
      "id_kabupaten": "1272",
      "nama_kecamatan": "DATUK BANDAR"
    },
    {
      "id_kecamatan": "1272011",
      "id_kabupaten": "1272",
      "nama_kecamatan": "DATUK BANDAR TIMUR"
    },
    {
      "id_kecamatan": "1272020",
      "id_kabupaten": "1272",
      "nama_kecamatan": "TANJUNG BALAI SELATAN"
    },
    {
      "id_kecamatan": "1272030",
      "id_kabupaten": "1272",
      "nama_kecamatan": "TANJUNG BALAI UTARA"
    },
    {
      "id_kecamatan": "1272040",
      "id_kabupaten": "1272",
      "nama_kecamatan": "SEI TUALANG RASO"
    },
    {
      "id_kecamatan": "1272050",
      "id_kabupaten": "1272",
      "nama_kecamatan": "TELUK NIBUNG"
    },
    {
      "id_kecamatan": "1273010",
      "id_kabupaten": "1273",
      "nama_kecamatan": "SIANTAR MARIHAT"
    },
    {
      "id_kecamatan": "1273011",
      "id_kabupaten": "1273",
      "nama_kecamatan": "SIANTAR MARIMBUN"
    },
    {
      "id_kecamatan": "1273020",
      "id_kabupaten": "1273",
      "nama_kecamatan": "SIANTAR SELATAN"
    },
    {
      "id_kecamatan": "1273030",
      "id_kabupaten": "1273",
      "nama_kecamatan": "SIANTAR BARAT"
    },
    {
      "id_kecamatan": "1273040",
      "id_kabupaten": "1273",
      "nama_kecamatan": "SIANTAR UTARA"
    },
    {
      "id_kecamatan": "1273050",
      "id_kabupaten": "1273",
      "nama_kecamatan": "SIANTAR TIMUR"
    },
    {
      "id_kecamatan": "1273060",
      "id_kabupaten": "1273",
      "nama_kecamatan": "SIANTAR MARTOBA"
    },
    {
      "id_kecamatan": "1273061",
      "id_kabupaten": "1273",
      "nama_kecamatan": "SIANTAR SITALASARI"
    },
    {
      "id_kecamatan": "1274010",
      "id_kabupaten": "1274",
      "nama_kecamatan": "PADANG HULU"
    },
    {
      "id_kecamatan": "1274011",
      "id_kabupaten": "1274",
      "nama_kecamatan": "TEBING TINGGI KOTA"
    },
    {
      "id_kecamatan": "1274020",
      "id_kabupaten": "1274",
      "nama_kecamatan": "RAMBUTAN"
    },
    {
      "id_kecamatan": "1274021",
      "id_kabupaten": "1274",
      "nama_kecamatan": "BAJENIS"
    },
    {
      "id_kecamatan": "1274030",
      "id_kabupaten": "1274",
      "nama_kecamatan": "PADANG HILIR"
    },
    {
      "id_kecamatan": "1275010",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN TUNTUNGAN"
    },
    {
      "id_kecamatan": "1275020",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN JOHOR"
    },
    {
      "id_kecamatan": "1275030",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN AMPLAS"
    },
    {
      "id_kecamatan": "1275040",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN DENAI"
    },
    {
      "id_kecamatan": "1275050",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN AREA"
    },
    {
      "id_kecamatan": "1275060",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN KOTA"
    },
    {
      "id_kecamatan": "1275070",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN MAIMUN"
    },
    {
      "id_kecamatan": "1275080",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN POLONIA"
    },
    {
      "id_kecamatan": "1275090",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN BARU"
    },
    {
      "id_kecamatan": "1275100",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN SELAYANG"
    },
    {
      "id_kecamatan": "1275110",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN SUNGGAL"
    },
    {
      "id_kecamatan": "1275120",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN HELVETIA"
    },
    {
      "id_kecamatan": "1275130",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN PETISAH"
    },
    {
      "id_kecamatan": "1275140",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN BARAT"
    },
    {
      "id_kecamatan": "1275150",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN TIMUR"
    },
    {
      "id_kecamatan": "1275160",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN PERJUANGAN"
    },
    {
      "id_kecamatan": "1275170",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN TEMBUNG"
    },
    {
      "id_kecamatan": "1275180",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN DELI"
    },
    {
      "id_kecamatan": "1275190",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN LABUHAN"
    },
    {
      "id_kecamatan": "1275200",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN MARELAN"
    },
    {
      "id_kecamatan": "1275210",
      "id_kabupaten": "1275",
      "nama_kecamatan": "MEDAN BELAWAN"
    },
    {
      "id_kecamatan": "1276010",
      "id_kabupaten": "1276",
      "nama_kecamatan": "BINJAI SELATAN"
    },
    {
      "id_kecamatan": "1276020",
      "id_kabupaten": "1276",
      "nama_kecamatan": "BINJAI KOTA"
    },
    {
      "id_kecamatan": "1276030",
      "id_kabupaten": "1276",
      "nama_kecamatan": "BINJAI TIMUR"
    },
    {
      "id_kecamatan": "1276040",
      "id_kabupaten": "1276",
      "nama_kecamatan": "BINJAI UTARA"
    },
    {
      "id_kecamatan": "1276050",
      "id_kabupaten": "1276",
      "nama_kecamatan": "BINJAI BARAT"
    },
    {
      "id_kecamatan": "1277010",
      "id_kabupaten": "1277",
      "nama_kecamatan": "PADANGSIDIMPUAN TENGGARA"
    },
    {
      "id_kecamatan": "1277020",
      "id_kabupaten": "1277",
      "nama_kecamatan": "PADANGSIDIMPUAN SELATAN"
    },
    {
      "id_kecamatan": "1277030",
      "id_kabupaten": "1277",
      "nama_kecamatan": "PADANGSIDIMPUAN BATUNADUA"
    },
    {
      "id_kecamatan": "1277040",
      "id_kabupaten": "1277",
      "nama_kecamatan": "PADANGSIDIMPUAN UTARA"
    },
    {
      "id_kecamatan": "1277050",
      "id_kabupaten": "1277",
      "nama_kecamatan": "PADANGSIDIMPUAN HUTAIMBARU"
    },
    {
      "id_kecamatan": "1277051",
      "id_kabupaten": "1277",
      "nama_kecamatan": "PADANGSIDIMPUAN ANGKOLA JULU"
    },
    {
      "id_kecamatan": "1278010",
      "id_kabupaten": "1278",
      "nama_kecamatan": "GUNUNGSITOLI IDANOI"
    },
    {
      "id_kecamatan": "1278020",
      "id_kabupaten": "1278",
      "nama_kecamatan": "GUNUNGSITOLI SELATAN"
    },
    {
      "id_kecamatan": "1278030",
      "id_kabupaten": "1278",
      "nama_kecamatan": "GUNUNGSITOLI BARAT"
    },
    {
      "id_kecamatan": "1278040",
      "id_kabupaten": "1278",
      "nama_kecamatan": "GUNUNG SITOLI"
    },
    {
      "id_kecamatan": "1278050",
      "id_kabupaten": "1278",
      "nama_kecamatan": "GUNUNGSITOLI ALO OA"
    },
    {
      "id_kecamatan": "1278060",
      "id_kabupaten": "1278",
      "nama_kecamatan": "GUNUNGSITOLI UTARA"
    },
    {
      "id_kecamatan": "1301011",
      "id_kabupaten": "1301",
      "nama_kecamatan": "PAGAI SELATAN"
    },
    {
      "id_kecamatan": "1301012",
      "id_kabupaten": "1301",
      "nama_kecamatan": "SIKAKAP"
    },
    {
      "id_kecamatan": "1301013",
      "id_kabupaten": "1301",
      "nama_kecamatan": "PAGAI UTARA"
    },
    {
      "id_kecamatan": "1301021",
      "id_kabupaten": "1301",
      "nama_kecamatan": "SIPORA SELATAN"
    },
    {
      "id_kecamatan": "1301022",
      "id_kabupaten": "1301",
      "nama_kecamatan": "SIPORA UTARA"
    },
    {
      "id_kecamatan": "1301030",
      "id_kabupaten": "1301",
      "nama_kecamatan": "SIBERUT SELATAN"
    },
    {
      "id_kecamatan": "1301031",
      "id_kabupaten": "1301",
      "nama_kecamatan": "SEBERUT BARAT DAYA"
    },
    {
      "id_kecamatan": "1301032",
      "id_kabupaten": "1301",
      "nama_kecamatan": "SIBERUT TENGAH"
    },
    {
      "id_kecamatan": "1301040",
      "id_kabupaten": "1301",
      "nama_kecamatan": "SIBERUT UTARA"
    },
    {
      "id_kecamatan": "1301041",
      "id_kabupaten": "1301",
      "nama_kecamatan": "SIBERUT BARAT"
    },
    {
      "id_kecamatan": "1302011",
      "id_kabupaten": "1302",
      "nama_kecamatan": "SILAUT"
    },
    {
      "id_kecamatan": "1302012",
      "id_kabupaten": "1302",
      "nama_kecamatan": "LUNANG"
    },
    {
      "id_kecamatan": "1302020",
      "id_kabupaten": "1302",
      "nama_kecamatan": "BASA AMPEK BALAI TAPAN"
    },
    {
      "id_kecamatan": "1302021",
      "id_kabupaten": "1302",
      "nama_kecamatan": "RANAH AMPEK HULU TAPAN"
    },
    {
      "id_kecamatan": "1302030",
      "id_kabupaten": "1302",
      "nama_kecamatan": "PANCUNG SOAL"
    },
    {
      "id_kecamatan": "1302031",
      "id_kabupaten": "1302",
      "nama_kecamatan": "AIRPURA"
    },
    {
      "id_kecamatan": "1302040",
      "id_kabupaten": "1302",
      "nama_kecamatan": "LINGGO SARI BAGANTI"
    },
    {
      "id_kecamatan": "1302050",
      "id_kabupaten": "1302",
      "nama_kecamatan": "RANAH PESISIR"
    },
    {
      "id_kecamatan": "1302060",
      "id_kabupaten": "1302",
      "nama_kecamatan": "LENGAYANG"
    },
    {
      "id_kecamatan": "1302070",
      "id_kabupaten": "1302",
      "nama_kecamatan": "SUTERA"
    },
    {
      "id_kecamatan": "1302080",
      "id_kabupaten": "1302",
      "nama_kecamatan": "BATANG KAPAS"
    },
    {
      "id_kecamatan": "1302090",
      "id_kabupaten": "1302",
      "nama_kecamatan": "IV JURAI"
    },
    {
      "id_kecamatan": "1302100",
      "id_kabupaten": "1302",
      "nama_kecamatan": "BAYANG"
    },
    {
      "id_kecamatan": "1302101",
      "id_kabupaten": "1302",
      "nama_kecamatan": "IV  NAGARI BAYANG UTARA"
    },
    {
      "id_kecamatan": "1302110",
      "id_kabupaten": "1302",
      "nama_kecamatan": "KOTO XI TARUSAN"
    },
    {
      "id_kecamatan": "1303040",
      "id_kabupaten": "1303",
      "nama_kecamatan": "PANTAI CERMIN"
    },
    {
      "id_kecamatan": "1303050",
      "id_kabupaten": "1303",
      "nama_kecamatan": "LEMBAH GUMANTI"
    },
    {
      "id_kecamatan": "1303051",
      "id_kabupaten": "1303",
      "nama_kecamatan": "HILIRAN GUMANTI"
    },
    {
      "id_kecamatan": "1303060",
      "id_kabupaten": "1303",
      "nama_kecamatan": "PAYUNG SEKAKI"
    },
    {
      "id_kecamatan": "1303061",
      "id_kabupaten": "1303",
      "nama_kecamatan": "TIGO LURAH"
    },
    {
      "id_kecamatan": "1303070",
      "id_kabupaten": "1303",
      "nama_kecamatan": "LEMBANG JAYA"
    },
    {
      "id_kecamatan": "1303071",
      "id_kabupaten": "1303",
      "nama_kecamatan": "DANAU KEMBAR"
    },
    {
      "id_kecamatan": "1303080",
      "id_kabupaten": "1303",
      "nama_kecamatan": "GUNUNG TALANG"
    },
    {
      "id_kecamatan": "1303090",
      "id_kabupaten": "1303",
      "nama_kecamatan": "BUKIT SUNDI"
    },
    {
      "id_kecamatan": "1303100",
      "id_kabupaten": "1303",
      "nama_kecamatan": "IX KOTO SUNGAI LASI"
    },
    {
      "id_kecamatan": "1303110",
      "id_kabupaten": "1303",
      "nama_kecamatan": "KUBUNG"
    },
    {
      "id_kecamatan": "1303120",
      "id_kabupaten": "1303",
      "nama_kecamatan": "X KOTO DIATAS"
    },
    {
      "id_kecamatan": "1303130",
      "id_kabupaten": "1303",
      "nama_kecamatan": "X KOTO SINGKARAK"
    },
    {
      "id_kecamatan": "1303140",
      "id_kabupaten": "1303",
      "nama_kecamatan": "JUNJUNG SIRIH"
    },
    {
      "id_kecamatan": "1304050",
      "id_kabupaten": "1304",
      "nama_kecamatan": "KAMANG BARU"
    },
    {
      "id_kecamatan": "1304060",
      "id_kabupaten": "1304",
      "nama_kecamatan": "TANJUNG GADANG"
    },
    {
      "id_kecamatan": "1304070",
      "id_kabupaten": "1304",
      "nama_kecamatan": "SIJUNJUNG"
    },
    {
      "id_kecamatan": "1304071",
      "id_kabupaten": "1304",
      "nama_kecamatan": "LUBUK TAROK"
    },
    {
      "id_kecamatan": "1304080",
      "id_kabupaten": "1304",
      "nama_kecamatan": "IV NAGARI"
    },
    {
      "id_kecamatan": "1304090",
      "id_kabupaten": "1304",
      "nama_kecamatan": "KUPITAN"
    },
    {
      "id_kecamatan": "1304100",
      "id_kabupaten": "1304",
      "nama_kecamatan": "KOTO TUJUH"
    },
    {
      "id_kecamatan": "1304110",
      "id_kabupaten": "1304",
      "nama_kecamatan": "SUMPUR KUDUS"
    },
    {
      "id_kecamatan": "1305010",
      "id_kabupaten": "1305",
      "nama_kecamatan": "SEPULUH KOTO"
    },
    {
      "id_kecamatan": "1305020",
      "id_kabupaten": "1305",
      "nama_kecamatan": "BATIPUH"
    },
    {
      "id_kecamatan": "1305021",
      "id_kabupaten": "1305",
      "nama_kecamatan": "BATIPUH SELATAN"
    },
    {
      "id_kecamatan": "1305030",
      "id_kabupaten": "1305",
      "nama_kecamatan": "PARIANGAN"
    },
    {
      "id_kecamatan": "1305040",
      "id_kabupaten": "1305",
      "nama_kecamatan": "RAMBATAN"
    },
    {
      "id_kecamatan": "1305050",
      "id_kabupaten": "1305",
      "nama_kecamatan": "LIMA KAUM"
    },
    {
      "id_kecamatan": "1305060",
      "id_kabupaten": "1305",
      "nama_kecamatan": "TANJUNG EMAS"
    },
    {
      "id_kecamatan": "1305070",
      "id_kabupaten": "1305",
      "nama_kecamatan": "PADANG GANTING"
    },
    {
      "id_kecamatan": "1305080",
      "id_kabupaten": "1305",
      "nama_kecamatan": "LINTAU BUO"
    },
    {
      "id_kecamatan": "1305081",
      "id_kabupaten": "1305",
      "nama_kecamatan": "LINTAU BUO UTARA"
    },
    {
      "id_kecamatan": "1305090",
      "id_kabupaten": "1305",
      "nama_kecamatan": "SUNGAYANG"
    },
    {
      "id_kecamatan": "1305100",
      "id_kabupaten": "1305",
      "nama_kecamatan": "SUNGAI TARAB"
    },
    {
      "id_kecamatan": "1305110",
      "id_kabupaten": "1305",
      "nama_kecamatan": "SALIMPAUNG"
    },
    {
      "id_kecamatan": "1305111",
      "id_kabupaten": "1305",
      "nama_kecamatan": "TANJUNG BARU"
    },
    {
      "id_kecamatan": "1306010",
      "id_kabupaten": "1306",
      "nama_kecamatan": "BATANG ANAI"
    },
    {
      "id_kecamatan": "1306020",
      "id_kabupaten": "1306",
      "nama_kecamatan": "LUBUK ALUNG"
    },
    {
      "id_kecamatan": "1306021",
      "id_kabupaten": "1306",
      "nama_kecamatan": "SINTUK TOBOH GADANG"
    },
    {
      "id_kecamatan": "1306030",
      "id_kabupaten": "1306",
      "nama_kecamatan": "ULAKAN TAPAKIS"
    },
    {
      "id_kecamatan": "1306040",
      "id_kabupaten": "1306",
      "nama_kecamatan": "NAN SABARIS"
    },
    {
      "id_kecamatan": "1306050",
      "id_kabupaten": "1306",
      "nama_kecamatan": "2 X 11 ENAM LINGKUNG"
    },
    {
      "id_kecamatan": "1306051",
      "id_kabupaten": "1306",
      "nama_kecamatan": "ENAM LINGKUNG"
    },
    {
      "id_kecamatan": "1306052",
      "id_kabupaten": "1306",
      "nama_kecamatan": "2 X 11 KAYU TANAM"
    },
    {
      "id_kecamatan": "1306060",
      "id_kabupaten": "1306",
      "nama_kecamatan": "VII KOTO SUNGAI SARIAK"
    },
    {
      "id_kecamatan": "1306061",
      "id_kabupaten": "1306",
      "nama_kecamatan": "PATAMUAN"
    },
    {
      "id_kecamatan": "1306062",
      "id_kabupaten": "1306",
      "nama_kecamatan": "PADANG SAGO"
    },
    {
      "id_kecamatan": "1306070",
      "id_kabupaten": "1306",
      "nama_kecamatan": "V KOTO KP DALAM"
    },
    {
      "id_kecamatan": "1306071",
      "id_kabupaten": "1306",
      "nama_kecamatan": "V KOTO TIMUR"
    },
    {
      "id_kecamatan": "1306080",
      "id_kabupaten": "1306",
      "nama_kecamatan": "SUNGAI LIMAU"
    },
    {
      "id_kecamatan": "1306081",
      "id_kabupaten": "1306",
      "nama_kecamatan": "BATANG GASAN"
    },
    {
      "id_kecamatan": "1306090",
      "id_kabupaten": "1306",
      "nama_kecamatan": "SUNGAI GERINGGING"
    },
    {
      "id_kecamatan": "1306100",
      "id_kabupaten": "1306",
      "nama_kecamatan": "IV KOTO AUR MALINTANG"
    },
    {
      "id_kecamatan": "1307010",
      "id_kabupaten": "1307",
      "nama_kecamatan": "TANJUNG MUTIARA"
    },
    {
      "id_kecamatan": "1307020",
      "id_kabupaten": "1307",
      "nama_kecamatan": "LUBUK BASUNG"
    },
    {
      "id_kecamatan": "1307021",
      "id_kabupaten": "1307",
      "nama_kecamatan": "AMPEK NAGARI"
    },
    {
      "id_kecamatan": "1307030",
      "id_kabupaten": "1307",
      "nama_kecamatan": "TANJUNG RAYA"
    },
    {
      "id_kecamatan": "1307040",
      "id_kabupaten": "1307",
      "nama_kecamatan": "MATUR"
    },
    {
      "id_kecamatan": "1307050",
      "id_kabupaten": "1307",
      "nama_kecamatan": "IV KOTO"
    },
    {
      "id_kecamatan": "1307051",
      "id_kabupaten": "1307",
      "nama_kecamatan": "MALALAK"
    },
    {
      "id_kecamatan": "1307061",
      "id_kabupaten": "1307",
      "nama_kecamatan": "BANUHAMPU"
    },
    {
      "id_kecamatan": "1307062",
      "id_kabupaten": "1307",
      "nama_kecamatan": "SUNGAI PUA"
    },
    {
      "id_kecamatan": "1307070",
      "id_kabupaten": "1307",
      "nama_kecamatan": "AMPEK ANGKEK"
    },
    {
      "id_kecamatan": "1307071",
      "id_kabupaten": "1307",
      "nama_kecamatan": "CANDUANG"
    },
    {
      "id_kecamatan": "1307080",
      "id_kabupaten": "1307",
      "nama_kecamatan": "BASO"
    },
    {
      "id_kecamatan": "1307090",
      "id_kabupaten": "1307",
      "nama_kecamatan": "TILATANG KAMANG"
    },
    {
      "id_kecamatan": "1307091",
      "id_kabupaten": "1307",
      "nama_kecamatan": "KAMANG MAGEK"
    },
    {
      "id_kecamatan": "1307100",
      "id_kabupaten": "1307",
      "nama_kecamatan": "PALEMBAYAN"
    },
    {
      "id_kecamatan": "1307110",
      "id_kabupaten": "1307",
      "nama_kecamatan": "PALUPUH"
    },
    {
      "id_kecamatan": "1308010",
      "id_kabupaten": "1308",
      "nama_kecamatan": "PAYAKUMBUH"
    },
    {
      "id_kecamatan": "1308011",
      "id_kabupaten": "1308",
      "nama_kecamatan": "AKABILURU"
    },
    {
      "id_kecamatan": "1308020",
      "id_kabupaten": "1308",
      "nama_kecamatan": "LUAK"
    },
    {
      "id_kecamatan": "1308021",
      "id_kabupaten": "1308",
      "nama_kecamatan": "LAREH SAGO HALABAN"
    },
    {
      "id_kecamatan": "1308022",
      "id_kabupaten": "1308",
      "nama_kecamatan": "SITUJUAH LIMO NAGARI"
    },
    {
      "id_kecamatan": "1308030",
      "id_kabupaten": "1308",
      "nama_kecamatan": "HARAU"
    },
    {
      "id_kecamatan": "1308040",
      "id_kabupaten": "1308",
      "nama_kecamatan": "GUGUAK"
    },
    {
      "id_kecamatan": "1308041",
      "id_kabupaten": "1308",
      "nama_kecamatan": "MUNGKA"
    },
    {
      "id_kecamatan": "1308050",
      "id_kabupaten": "1308",
      "nama_kecamatan": "SULIKI"
    },
    {
      "id_kecamatan": "1308051",
      "id_kabupaten": "1308",
      "nama_kecamatan": "BUKIK BARISAN"
    },
    {
      "id_kecamatan": "1308060",
      "id_kabupaten": "1308",
      "nama_kecamatan": "GUNUANG OMEH"
    },
    {
      "id_kecamatan": "1308070",
      "id_kabupaten": "1308",
      "nama_kecamatan": "KAPUR IX"
    },
    {
      "id_kecamatan": "1308080",
      "id_kabupaten": "1308",
      "nama_kecamatan": "PANGKALAN KOTO BARU"
    },
    {
      "id_kecamatan": "1309070",
      "id_kabupaten": "1309",
      "nama_kecamatan": "BONJOL"
    },
    {
      "id_kecamatan": "1309071",
      "id_kabupaten": "1309",
      "nama_kecamatan": "TIGO NAGARI"
    },
    {
      "id_kecamatan": "1309072",
      "id_kabupaten": "1309",
      "nama_kecamatan": "SIMPANG ALAHAN MATI"
    },
    {
      "id_kecamatan": "1309080",
      "id_kabupaten": "1309",
      "nama_kecamatan": "LUBUK SIKAPING"
    },
    {
      "id_kecamatan": "1309100",
      "id_kabupaten": "1309",
      "nama_kecamatan": "DUA KOTO"
    },
    {
      "id_kecamatan": "1309110",
      "id_kabupaten": "1309",
      "nama_kecamatan": "PANTI"
    },
    {
      "id_kecamatan": "1309111",
      "id_kabupaten": "1309",
      "nama_kecamatan": "PADANG GELUGUR"
    },
    {
      "id_kecamatan": "1309121",
      "id_kabupaten": "1309",
      "nama_kecamatan": "RAO"
    },
    {
      "id_kecamatan": "1309122",
      "id_kabupaten": "1309",
      "nama_kecamatan": "MAPAT TUNGGUL"
    },
    {
      "id_kecamatan": "1309123",
      "id_kabupaten": "1309",
      "nama_kecamatan": "MAPAT TUNGGUL SELATAN"
    },
    {
      "id_kecamatan": "1309124",
      "id_kabupaten": "1309",
      "nama_kecamatan": "RAO SELATAN"
    },
    {
      "id_kecamatan": "1309125",
      "id_kabupaten": "1309",
      "nama_kecamatan": "RAO UTARA"
    },
    {
      "id_kecamatan": "1310010",
      "id_kabupaten": "1310",
      "nama_kecamatan": "SANGIR"
    },
    {
      "id_kecamatan": "1310020",
      "id_kabupaten": "1310",
      "nama_kecamatan": "SANGIR JUJUAN"
    },
    {
      "id_kecamatan": "1310021",
      "id_kabupaten": "1310",
      "nama_kecamatan": "SANGIR BALAI JANGGO"
    },
    {
      "id_kecamatan": "1310030",
      "id_kabupaten": "1310",
      "nama_kecamatan": "SANGIR BATANG HARI"
    },
    {
      "id_kecamatan": "1310040",
      "id_kabupaten": "1310",
      "nama_kecamatan": "SUNGAI PAGU"
    },
    {
      "id_kecamatan": "1310041",
      "id_kabupaten": "1310",
      "nama_kecamatan": "PAUAH DUO"
    },
    {
      "id_kecamatan": "1310050",
      "id_kabupaten": "1310",
      "nama_kecamatan": "KOTO PARIK GADANG DIATEH"
    },
    {
      "id_kecamatan": "1311010",
      "id_kabupaten": "1311",
      "nama_kecamatan": "SUNGAI RUMBAI"
    },
    {
      "id_kecamatan": "1311011",
      "id_kabupaten": "1311",
      "nama_kecamatan": "KOTO BESAR"
    },
    {
      "id_kecamatan": "1311012",
      "id_kabupaten": "1311",
      "nama_kecamatan": "ASAM JUJUHAN"
    },
    {
      "id_kecamatan": "1311020",
      "id_kabupaten": "1311",
      "nama_kecamatan": "KOTO BARU"
    },
    {
      "id_kecamatan": "1311021",
      "id_kabupaten": "1311",
      "nama_kecamatan": "KOTO SALAK"
    },
    {
      "id_kecamatan": "1311022",
      "id_kabupaten": "1311",
      "nama_kecamatan": "TIUMANG"
    },
    {
      "id_kecamatan": "1311023",
      "id_kabupaten": "1311",
      "nama_kecamatan": "PADANG LAWEH"
    },
    {
      "id_kecamatan": "1311030",
      "id_kabupaten": "1311",
      "nama_kecamatan": "SITIUNG"
    },
    {
      "id_kecamatan": "1311031",
      "id_kabupaten": "1311",
      "nama_kecamatan": "TIMPEH"
    },
    {
      "id_kecamatan": "1311040",
      "id_kabupaten": "1311",
      "nama_kecamatan": "PULAU PUNJUNG"
    },
    {
      "id_kecamatan": "1311041",
      "id_kabupaten": "1311",
      "nama_kecamatan": "IX KOTO"
    },
    {
      "id_kecamatan": "1312010",
      "id_kabupaten": "1312",
      "nama_kecamatan": "SUNGAI BEREMAS"
    },
    {
      "id_kecamatan": "1312020",
      "id_kabupaten": "1312",
      "nama_kecamatan": "RANAH BATAHAN"
    },
    {
      "id_kecamatan": "1312030",
      "id_kabupaten": "1312",
      "nama_kecamatan": "KOTO BALINGKA"
    },
    {
      "id_kecamatan": "1312040",
      "id_kabupaten": "1312",
      "nama_kecamatan": "SUNGAI AUR"
    },
    {
      "id_kecamatan": "1312050",
      "id_kabupaten": "1312",
      "nama_kecamatan": "LEMBAH MALINTANG"
    },
    {
      "id_kecamatan": "1312060",
      "id_kabupaten": "1312",
      "nama_kecamatan": "GUNUNG TULEH"
    },
    {
      "id_kecamatan": "1312070",
      "id_kabupaten": "1312",
      "nama_kecamatan": "TALAMAU"
    },
    {
      "id_kecamatan": "1312080",
      "id_kabupaten": "1312",
      "nama_kecamatan": "PASAMAN"
    },
    {
      "id_kecamatan": "1312090",
      "id_kabupaten": "1312",
      "nama_kecamatan": "LUHAK NAN DUO"
    },
    {
      "id_kecamatan": "1312100",
      "id_kabupaten": "1312",
      "nama_kecamatan": "SASAK RANAH PASISIE"
    },
    {
      "id_kecamatan": "1312110",
      "id_kabupaten": "1312",
      "nama_kecamatan": "KINALI"
    },
    {
      "id_kecamatan": "1371010",
      "id_kabupaten": "1371",
      "nama_kecamatan": "BUNGUS TELUK KABUNG"
    },
    {
      "id_kecamatan": "1371020",
      "id_kabupaten": "1371",
      "nama_kecamatan": "LUBUK KILANGAN"
    },
    {
      "id_kecamatan": "1371030",
      "id_kabupaten": "1371",
      "nama_kecamatan": "LUBUK BEGALUNG"
    },
    {
      "id_kecamatan": "1371040",
      "id_kabupaten": "1371",
      "nama_kecamatan": "PADANG SELATAN"
    },
    {
      "id_kecamatan": "1371050",
      "id_kabupaten": "1371",
      "nama_kecamatan": "PADANG TIMUR"
    },
    {
      "id_kecamatan": "1371060",
      "id_kabupaten": "1371",
      "nama_kecamatan": "PADANG BARAT"
    },
    {
      "id_kecamatan": "1371070",
      "id_kabupaten": "1371",
      "nama_kecamatan": "PADANG UTARA"
    },
    {
      "id_kecamatan": "1371080",
      "id_kabupaten": "1371",
      "nama_kecamatan": "NANGGALO"
    },
    {
      "id_kecamatan": "1371090",
      "id_kabupaten": "1371",
      "nama_kecamatan": "KURANJI"
    },
    {
      "id_kecamatan": "1371100",
      "id_kabupaten": "1371",
      "nama_kecamatan": "PAUH"
    },
    {
      "id_kecamatan": "1371110",
      "id_kabupaten": "1371",
      "nama_kecamatan": "KOTO TANGAH"
    },
    {
      "id_kecamatan": "1372010",
      "id_kabupaten": "1372",
      "nama_kecamatan": "LUBUK SIKARAH"
    },
    {
      "id_kecamatan": "1372020",
      "id_kabupaten": "1372",
      "nama_kecamatan": "TANJUNG HARAPAN"
    },
    {
      "id_kecamatan": "1373010",
      "id_kabupaten": "1373",
      "nama_kecamatan": "SILUNGKANG"
    },
    {
      "id_kecamatan": "1373020",
      "id_kabupaten": "1373",
      "nama_kecamatan": "LEMBAH SEGAR"
    },
    {
      "id_kecamatan": "1373030",
      "id_kabupaten": "1373",
      "nama_kecamatan": "BARANGIN"
    },
    {
      "id_kecamatan": "1373040",
      "id_kabupaten": "1373",
      "nama_kecamatan": "TALAWI"
    },
    {
      "id_kecamatan": "1374010",
      "id_kabupaten": "1374",
      "nama_kecamatan": "PADANG PANJANG BARAT"
    },
    {
      "id_kecamatan": "1374020",
      "id_kabupaten": "1374",
      "nama_kecamatan": "PADANG PANJANG TIMUR"
    },
    {
      "id_kecamatan": "1375010",
      "id_kabupaten": "1375",
      "nama_kecamatan": "GUGUK PANJANG"
    },
    {
      "id_kecamatan": "1375020",
      "id_kabupaten": "1375",
      "nama_kecamatan": "MANDIANGIN KOTO SELAYAN"
    },
    {
      "id_kecamatan": "1375030",
      "id_kabupaten": "1375",
      "nama_kecamatan": "AUR BIRUGO TIGO BALEH"
    },
    {
      "id_kecamatan": "1376010",
      "id_kabupaten": "1376",
      "nama_kecamatan": "PAYAKUMBUH BARAT"
    },
    {
      "id_kecamatan": "1376011",
      "id_kabupaten": "1376",
      "nama_kecamatan": "PAYAKUMBUH SELATAN"
    },
    {
      "id_kecamatan": "1376020",
      "id_kabupaten": "1376",
      "nama_kecamatan": "PAYAKUMBUH TIMUR"
    },
    {
      "id_kecamatan": "1376030",
      "id_kabupaten": "1376",
      "nama_kecamatan": "PAYAKUMBUH UTARA"
    },
    {
      "id_kecamatan": "1376031",
      "id_kabupaten": "1376",
      "nama_kecamatan": "LAMPOSI TIGO NAGORI"
    },
    {
      "id_kecamatan": "1377010",
      "id_kabupaten": "1377",
      "nama_kecamatan": "PARIAMAN SELATAN"
    },
    {
      "id_kecamatan": "1377020",
      "id_kabupaten": "1377",
      "nama_kecamatan": "PARIAMAN TENGAH"
    },
    {
      "id_kecamatan": "1377021",
      "id_kabupaten": "1377",
      "nama_kecamatan": "PARIAMAN TIMUR"
    },
    {
      "id_kecamatan": "1377030",
      "id_kabupaten": "1377",
      "nama_kecamatan": "PARIAMAN UTARA"
    },
    {
      "id_kecamatan": "1401010",
      "id_kabupaten": "1401",
      "nama_kecamatan": "KUANTAN MUDIK"
    },
    {
      "id_kecamatan": "1401011",
      "id_kabupaten": "1401",
      "nama_kecamatan": "HULU KUANTAN"
    },
    {
      "id_kecamatan": "1401012",
      "id_kabupaten": "1401",
      "nama_kecamatan": "GUNUNG TOAR"
    },
    {
      "id_kecamatan": "1401013",
      "id_kabupaten": "1401",
      "nama_kecamatan": "PUCUK RANTAU"
    },
    {
      "id_kecamatan": "1401020",
      "id_kabupaten": "1401",
      "nama_kecamatan": "SINGINGI"
    },
    {
      "id_kecamatan": "1401021",
      "id_kabupaten": "1401",
      "nama_kecamatan": "SINGINGI HILIR"
    },
    {
      "id_kecamatan": "1401030",
      "id_kabupaten": "1401",
      "nama_kecamatan": "KUANTAN TENGAH"
    },
    {
      "id_kecamatan": "1401031",
      "id_kabupaten": "1401",
      "nama_kecamatan": "SENTAJO RAYA"
    },
    {
      "id_kecamatan": "1401040",
      "id_kabupaten": "1401",
      "nama_kecamatan": "BENAI"
    },
    {
      "id_kecamatan": "1401050",
      "id_kabupaten": "1401",
      "nama_kecamatan": "KUANTAN HILIR"
    },
    {
      "id_kecamatan": "1401051",
      "id_kabupaten": "1401",
      "nama_kecamatan": "PANGEAN"
    },
    {
      "id_kecamatan": "1401052",
      "id_kabupaten": "1401",
      "nama_kecamatan": "LOGAS TANAH DARAT"
    },
    {
      "id_kecamatan": "1401053",
      "id_kabupaten": "1401",
      "nama_kecamatan": "KUANTAN HILIR SEBERANG"
    },
    {
      "id_kecamatan": "1401060",
      "id_kabupaten": "1401",
      "nama_kecamatan": "CERENTI"
    },
    {
      "id_kecamatan": "1401061",
      "id_kabupaten": "1401",
      "nama_kecamatan": "INUMAN"
    },
    {
      "id_kecamatan": "1402010",
      "id_kabupaten": "1402",
      "nama_kecamatan": "PERANAP"
    },
    {
      "id_kecamatan": "1402011",
      "id_kabupaten": "1402",
      "nama_kecamatan": "BATANG PERANAP"
    },
    {
      "id_kecamatan": "1402020",
      "id_kabupaten": "1402",
      "nama_kecamatan": "SEBERIDA"
    },
    {
      "id_kecamatan": "1402021",
      "id_kabupaten": "1402",
      "nama_kecamatan": "BATANG CENAKU"
    },
    {
      "id_kecamatan": "1402022",
      "id_kabupaten": "1402",
      "nama_kecamatan": "BATANG GANSAL"
    },
    {
      "id_kecamatan": "1402030",
      "id_kabupaten": "1402",
      "nama_kecamatan": "KELAYANG"
    },
    {
      "id_kecamatan": "1402031",
      "id_kabupaten": "1402",
      "nama_kecamatan": "RAKIT KULIM"
    },
    {
      "id_kecamatan": "1402040",
      "id_kabupaten": "1402",
      "nama_kecamatan": "PASIR PENYU"
    },
    {
      "id_kecamatan": "1402041",
      "id_kabupaten": "1402",
      "nama_kecamatan": "LIRIK"
    },
    {
      "id_kecamatan": "1402042",
      "id_kabupaten": "1402",
      "nama_kecamatan": "SUNGAI LALA"
    },
    {
      "id_kecamatan": "1402043",
      "id_kabupaten": "1402",
      "nama_kecamatan": "LUBUK BATU JAYA"
    },
    {
      "id_kecamatan": "1402050",
      "id_kabupaten": "1402",
      "nama_kecamatan": "RENGAT BARAT"
    },
    {
      "id_kecamatan": "1402060",
      "id_kabupaten": "1402",
      "nama_kecamatan": "RENGAT"
    },
    {
      "id_kecamatan": "1402061",
      "id_kabupaten": "1402",
      "nama_kecamatan": "KUALA CENAKU"
    },
    {
      "id_kecamatan": "1403010",
      "id_kabupaten": "1403",
      "nama_kecamatan": "KERITANG"
    },
    {
      "id_kecamatan": "1403011",
      "id_kabupaten": "1403",
      "nama_kecamatan": "KEMUNING"
    },
    {
      "id_kecamatan": "1403020",
      "id_kabupaten": "1403",
      "nama_kecamatan": "RETEH"
    },
    {
      "id_kecamatan": "1403021",
      "id_kabupaten": "1403",
      "nama_kecamatan": "SUNGAI BATANG"
    },
    {
      "id_kecamatan": "1403030",
      "id_kabupaten": "1403",
      "nama_kecamatan": "ENOK"
    },
    {
      "id_kecamatan": "1403040",
      "id_kabupaten": "1403",
      "nama_kecamatan": "TANAH MERAH"
    },
    {
      "id_kecamatan": "1403050",
      "id_kabupaten": "1403",
      "nama_kecamatan": "KUALA INDRAGIRI"
    },
    {
      "id_kecamatan": "1403051",
      "id_kabupaten": "1403",
      "nama_kecamatan": "CONCONG"
    },
    {
      "id_kecamatan": "1403060",
      "id_kabupaten": "1403",
      "nama_kecamatan": "TEMBILAHAN"
    },
    {
      "id_kecamatan": "1403061",
      "id_kabupaten": "1403",
      "nama_kecamatan": "TEMBILAHAN HULU"
    },
    {
      "id_kecamatan": "1403070",
      "id_kabupaten": "1403",
      "nama_kecamatan": "TEMPULING"
    },
    {
      "id_kecamatan": "1403071",
      "id_kabupaten": "1403",
      "nama_kecamatan": "KEMPAS"
    },
    {
      "id_kecamatan": "1403080",
      "id_kabupaten": "1403",
      "nama_kecamatan": "BATANG TUAKA"
    },
    {
      "id_kecamatan": "1403090",
      "id_kabupaten": "1403",
      "nama_kecamatan": "GAUNG ANAK SERKA"
    },
    {
      "id_kecamatan": "1403100",
      "id_kabupaten": "1403",
      "nama_kecamatan": "GAUNG"
    },
    {
      "id_kecamatan": "1403110",
      "id_kabupaten": "1403",
      "nama_kecamatan": "MANDAH"
    },
    {
      "id_kecamatan": "1403120",
      "id_kabupaten": "1403",
      "nama_kecamatan": "KATEMAN"
    },
    {
      "id_kecamatan": "1403121",
      "id_kabupaten": "1403",
      "nama_kecamatan": "PELANGIRAN"
    },
    {
      "id_kecamatan": "1403122",
      "id_kabupaten": "1403",
      "nama_kecamatan": "TELUK BELENGKONG"
    },
    {
      "id_kecamatan": "1403123",
      "id_kabupaten": "1403",
      "nama_kecamatan": "PULAU BURUNG"
    },
    {
      "id_kecamatan": "1404010",
      "id_kabupaten": "1404",
      "nama_kecamatan": "LANGGAM"
    },
    {
      "id_kecamatan": "1404011",
      "id_kabupaten": "1404",
      "nama_kecamatan": "PANGKALAN KERINCI"
    },
    {
      "id_kecamatan": "1404012",
      "id_kabupaten": "1404",
      "nama_kecamatan": "BANDAR SEIKIJANG"
    },
    {
      "id_kecamatan": "1404020",
      "id_kabupaten": "1404",
      "nama_kecamatan": "PANGKALAN KURAS"
    },
    {
      "id_kecamatan": "1404021",
      "id_kabupaten": "1404",
      "nama_kecamatan": "UKUI"
    },
    {
      "id_kecamatan": "1404022",
      "id_kabupaten": "1404",
      "nama_kecamatan": "PANGKALAN LESUNG"
    },
    {
      "id_kecamatan": "1404030",
      "id_kabupaten": "1404",
      "nama_kecamatan": "BUNUT"
    },
    {
      "id_kecamatan": "1404031",
      "id_kabupaten": "1404",
      "nama_kecamatan": "PELALAWAN"
    },
    {
      "id_kecamatan": "1404032",
      "id_kabupaten": "1404",
      "nama_kecamatan": "BANDAR PETALANGAN"
    },
    {
      "id_kecamatan": "1404040",
      "id_kabupaten": "1404",
      "nama_kecamatan": "KUALA KAMPAR"
    },
    {
      "id_kecamatan": "1404041",
      "id_kabupaten": "1404",
      "nama_kecamatan": "KERUMUTAN"
    },
    {
      "id_kecamatan": "1404042",
      "id_kabupaten": "1404",
      "nama_kecamatan": "TELUK MERANTI"
    },
    {
      "id_kecamatan": "1405010",
      "id_kabupaten": "1405",
      "nama_kecamatan": "MINAS"
    },
    {
      "id_kecamatan": "1405011",
      "id_kabupaten": "1405",
      "nama_kecamatan": "SUNGAI MANDAU"
    },
    {
      "id_kecamatan": "1405012",
      "id_kabupaten": "1405",
      "nama_kecamatan": "KANDIS"
    },
    {
      "id_kecamatan": "1405020",
      "id_kabupaten": "1405",
      "nama_kecamatan": "SIAK"
    },
    {
      "id_kecamatan": "1405021",
      "id_kabupaten": "1405",
      "nama_kecamatan": "KERINCI KANAN"
    },
    {
      "id_kecamatan": "1405022",
      "id_kabupaten": "1405",
      "nama_kecamatan": "TUALANG"
    },
    {
      "id_kecamatan": "1405023",
      "id_kabupaten": "1405",
      "nama_kecamatan": "DAYUN"
    },
    {
      "id_kecamatan": "1405024",
      "id_kabupaten": "1405",
      "nama_kecamatan": "LUBUK DALAM"
    },
    {
      "id_kecamatan": "1405025",
      "id_kabupaten": "1405",
      "nama_kecamatan": "KOTO GASIB"
    },
    {
      "id_kecamatan": "1405026",
      "id_kabupaten": "1405",
      "nama_kecamatan": "MEMPURA"
    },
    {
      "id_kecamatan": "1405030",
      "id_kabupaten": "1405",
      "nama_kecamatan": "SUNGAI APIT"
    },
    {
      "id_kecamatan": "1405031",
      "id_kabupaten": "1405",
      "nama_kecamatan": "BUNGA RAYA"
    },
    {
      "id_kecamatan": "1405032",
      "id_kabupaten": "1405",
      "nama_kecamatan": "SABAK AUH"
    },
    {
      "id_kecamatan": "1405033",
      "id_kabupaten": "1405",
      "nama_kecamatan": "PUSAKO"
    },
    {
      "id_kecamatan": "1406010",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KAMPAR KIRI"
    },
    {
      "id_kecamatan": "1406011",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KAMPAR KIRI HULU"
    },
    {
      "id_kecamatan": "1406012",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KAMPAR KIRI HILIR"
    },
    {
      "id_kecamatan": "1406013",
      "id_kabupaten": "1406",
      "nama_kecamatan": "GUNUNG SAHILAN"
    },
    {
      "id_kecamatan": "1406014",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KAMPAR KIRI TENGAH"
    },
    {
      "id_kecamatan": "1406020",
      "id_kabupaten": "1406",
      "nama_kecamatan": "XIII KOTO KAMPAR"
    },
    {
      "id_kecamatan": "1406021",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KOTO KAMPAR HULU"
    },
    {
      "id_kecamatan": "1406030",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KUOK"
    },
    {
      "id_kecamatan": "1406031",
      "id_kabupaten": "1406",
      "nama_kecamatan": "SALO"
    },
    {
      "id_kecamatan": "1406040",
      "id_kabupaten": "1406",
      "nama_kecamatan": "TAPUNG"
    },
    {
      "id_kecamatan": "1406041",
      "id_kabupaten": "1406",
      "nama_kecamatan": "TAPUNG HULU"
    },
    {
      "id_kecamatan": "1406042",
      "id_kabupaten": "1406",
      "nama_kecamatan": "TAPUNG HILIR"
    },
    {
      "id_kecamatan": "1406050",
      "id_kabupaten": "1406",
      "nama_kecamatan": "BANGKINANG KOTA"
    },
    {
      "id_kecamatan": "1406051",
      "id_kabupaten": "1406",
      "nama_kecamatan": "BANGKINANG"
    },
    {
      "id_kecamatan": "1406060",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KAMPAR"
    },
    {
      "id_kecamatan": "1406061",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KAMPAR TIMUR"
    },
    {
      "id_kecamatan": "1406062",
      "id_kabupaten": "1406",
      "nama_kecamatan": "RUMBIO JAYA"
    },
    {
      "id_kecamatan": "1406063",
      "id_kabupaten": "1406",
      "nama_kecamatan": "KAMPAR UTARA"
    },
    {
      "id_kecamatan": "1406070",
      "id_kabupaten": "1406",
      "nama_kecamatan": "TAMBANG"
    },
    {
      "id_kecamatan": "1406080",
      "id_kabupaten": "1406",
      "nama_kecamatan": "SIAK HULU"
    },
    {
      "id_kecamatan": "1406081",
      "id_kabupaten": "1406",
      "nama_kecamatan": "PERHENTIAN RAJA"
    },
    {
      "id_kecamatan": "1407010",
      "id_kabupaten": "1407",
      "nama_kecamatan": "ROKAN IV KOTO"
    },
    {
      "id_kecamatan": "1407011",
      "id_kabupaten": "1407",
      "nama_kecamatan": "PENDALIAN IV KOTO"
    },
    {
      "id_kecamatan": "1407020",
      "id_kabupaten": "1407",
      "nama_kecamatan": "TANDUN"
    },
    {
      "id_kecamatan": "1407021",
      "id_kabupaten": "1407",
      "nama_kecamatan": "KABUN"
    },
    {
      "id_kecamatan": "1407022",
      "id_kabupaten": "1407",
      "nama_kecamatan": "UJUNG BATU"
    },
    {
      "id_kecamatan": "1407030",
      "id_kabupaten": "1407",
      "nama_kecamatan": "RAMBAH SAMO"
    },
    {
      "id_kecamatan": "1407040",
      "id_kabupaten": "1407",
      "nama_kecamatan": "RAMBAH"
    },
    {
      "id_kecamatan": "1407041",
      "id_kabupaten": "1407",
      "nama_kecamatan": "RAMBAH HILIR"
    },
    {
      "id_kecamatan": "1407042",
      "id_kabupaten": "1407",
      "nama_kecamatan": "BANGUN PURBA"
    },
    {
      "id_kecamatan": "1407050",
      "id_kabupaten": "1407",
      "nama_kecamatan": "TAMBUSAI"
    },
    {
      "id_kecamatan": "1407051",
      "id_kabupaten": "1407",
      "nama_kecamatan": "TAMBUSAI UTARA"
    },
    {
      "id_kecamatan": "1407060",
      "id_kabupaten": "1407",
      "nama_kecamatan": "KEPENUHAN"
    },
    {
      "id_kecamatan": "1407061",
      "id_kabupaten": "1407",
      "nama_kecamatan": "KEPENUHAN HULU"
    },
    {
      "id_kecamatan": "1407070",
      "id_kabupaten": "1407",
      "nama_kecamatan": "KUNTO DARUSSALAM"
    },
    {
      "id_kecamatan": "1407071",
      "id_kabupaten": "1407",
      "nama_kecamatan": "PAGARAN TAPAH DARUSSALAM"
    },
    {
      "id_kecamatan": "1407072",
      "id_kabupaten": "1407",
      "nama_kecamatan": "BONAI DARUSSALAM"
    },
    {
      "id_kecamatan": "1408010",
      "id_kabupaten": "1408",
      "nama_kecamatan": "MANDAU"
    },
    {
      "id_kecamatan": "1408011",
      "id_kabupaten": "1408",
      "nama_kecamatan": "PINGGIR"
    },
    {
      "id_kecamatan": "1408020",
      "id_kabupaten": "1408",
      "nama_kecamatan": "BUKIT BATU"
    },
    {
      "id_kecamatan": "1408021",
      "id_kabupaten": "1408",
      "nama_kecamatan": "SIAK KECIL"
    },
    {
      "id_kecamatan": "1408030",
      "id_kabupaten": "1408",
      "nama_kecamatan": "RUPAT"
    },
    {
      "id_kecamatan": "1408031",
      "id_kabupaten": "1408",
      "nama_kecamatan": "RUPAT UTARA"
    },
    {
      "id_kecamatan": "1408040",
      "id_kabupaten": "1408",
      "nama_kecamatan": "BENGKALIS"
    },
    {
      "id_kecamatan": "1408050",
      "id_kabupaten": "1408",
      "nama_kecamatan": "BANTAN"
    },
    {
      "id_kecamatan": "1409010",
      "id_kabupaten": "1409",
      "nama_kecamatan": "TANAH PUTIH"
    },
    {
      "id_kecamatan": "1409011",
      "id_kabupaten": "1409",
      "nama_kecamatan": "PUJUD"
    },
    {
      "id_kecamatan": "1409012",
      "id_kabupaten": "1409",
      "nama_kecamatan": "TANAH PUTIH TANJUNG MELAWAN"
    },
    {
      "id_kecamatan": "1409013",
      "id_kabupaten": "1409",
      "nama_kecamatan": "RANTAU KOPAR"
    },
    {
      "id_kecamatan": "1409014",
      "id_kabupaten": "1409",
      "nama_kecamatan": "TANJUNG MEDAN"
    },
    {
      "id_kecamatan": "1409020",
      "id_kabupaten": "1409",
      "nama_kecamatan": "BAGAN SINEMBAH"
    },
    {
      "id_kecamatan": "1409021",
      "id_kabupaten": "1409",
      "nama_kecamatan": "SIMPANG KANAN"
    },
    {
      "id_kecamatan": "1409022",
      "id_kabupaten": "1409",
      "nama_kecamatan": "BAGAN SINEMBAH RAYA"
    },
    {
      "id_kecamatan": "1409023",
      "id_kabupaten": "1409",
      "nama_kecamatan": "BALAI JAYA"
    },
    {
      "id_kecamatan": "1409030",
      "id_kabupaten": "1409",
      "nama_kecamatan": "KUBU"
    },
    {
      "id_kecamatan": "1409031",
      "id_kabupaten": "1409",
      "nama_kecamatan": "PASIR LIMAU KAPAS"
    },
    {
      "id_kecamatan": "1409032",
      "id_kabupaten": "1409",
      "nama_kecamatan": "KUBU BABUSSALAM"
    },
    {
      "id_kecamatan": "1409040",
      "id_kabupaten": "1409",
      "nama_kecamatan": "BANGKO"
    },
    {
      "id_kecamatan": "1409041",
      "id_kabupaten": "1409",
      "nama_kecamatan": "SINABOI"
    },
    {
      "id_kecamatan": "1409042",
      "id_kabupaten": "1409",
      "nama_kecamatan": "BATU HAMPAR"
    },
    {
      "id_kecamatan": "1409043",
      "id_kabupaten": "1409",
      "nama_kecamatan": "PEKAITAN"
    },
    {
      "id_kecamatan": "1409050",
      "id_kabupaten": "1409",
      "nama_kecamatan": "RIMBA MELINTANG"
    },
    {
      "id_kecamatan": "1409051",
      "id_kabupaten": "1409",
      "nama_kecamatan": "BANGKO PUSAKO"
    },
    {
      "id_kecamatan": "1410010",
      "id_kabupaten": "1410",
      "nama_kecamatan": "TEBING TINGGI BARAT"
    },
    {
      "id_kecamatan": "1410020",
      "id_kabupaten": "1410",
      "nama_kecamatan": "TEBING TINGGI"
    },
    {
      "id_kecamatan": "1410021",
      "id_kabupaten": "1410",
      "nama_kecamatan": "TEBING TINGGI TIMUR"
    },
    {
      "id_kecamatan": "1410030",
      "id_kabupaten": "1410",
      "nama_kecamatan": "RANGSANG"
    },
    {
      "id_kecamatan": "1410031",
      "id_kabupaten": "1410",
      "nama_kecamatan": "RANGSANG PESISIR"
    },
    {
      "id_kecamatan": "1410040",
      "id_kabupaten": "1410",
      "nama_kecamatan": "RANGSANG BARAT"
    },
    {
      "id_kecamatan": "1410050",
      "id_kabupaten": "1410",
      "nama_kecamatan": "MERBAU"
    },
    {
      "id_kecamatan": "1410051",
      "id_kabupaten": "1410",
      "nama_kecamatan": "PULAU MERBAU"
    },
    {
      "id_kecamatan": "1410052",
      "id_kabupaten": "1410",
      "nama_kecamatan": "PUTRI PUYU"
    },
    {
      "id_kecamatan": "1471010",
      "id_kabupaten": "1471",
      "nama_kecamatan": "TAMPAN"
    },
    {
      "id_kecamatan": "1471011",
      "id_kabupaten": "1471",
      "nama_kecamatan": "PAYUNG SEKAKI"
    },
    {
      "id_kecamatan": "1471020",
      "id_kabupaten": "1471",
      "nama_kecamatan": "BUKIT RAYA"
    },
    {
      "id_kecamatan": "1471021",
      "id_kabupaten": "1471",
      "nama_kecamatan": "MARPOYAN DAMAI"
    },
    {
      "id_kecamatan": "1471022",
      "id_kabupaten": "1471",
      "nama_kecamatan": "TENAYAN RAYA"
    },
    {
      "id_kecamatan": "1471030",
      "id_kabupaten": "1471",
      "nama_kecamatan": "LIMAPULUH"
    },
    {
      "id_kecamatan": "1471040",
      "id_kabupaten": "1471",
      "nama_kecamatan": "SAIL"
    },
    {
      "id_kecamatan": "1471050",
      "id_kabupaten": "1471",
      "nama_kecamatan": "PEKANBARU KOTA"
    },
    {
      "id_kecamatan": "1471060",
      "id_kabupaten": "1471",
      "nama_kecamatan": "SUKAJADI"
    },
    {
      "id_kecamatan": "1471070",
      "id_kabupaten": "1471",
      "nama_kecamatan": "SENAPELAN"
    },
    {
      "id_kecamatan": "1471080",
      "id_kabupaten": "1471",
      "nama_kecamatan": "RUMBAI"
    },
    {
      "id_kecamatan": "1471081",
      "id_kabupaten": "1471",
      "nama_kecamatan": "RUMBAI PESISIR"
    },
    {
      "id_kecamatan": "1473010",
      "id_kabupaten": "1473",
      "nama_kecamatan": "BUKIT KAPUR"
    },
    {
      "id_kecamatan": "1473011",
      "id_kabupaten": "1473",
      "nama_kecamatan": "MEDANG KAMPAI"
    },
    {
      "id_kecamatan": "1473012",
      "id_kabupaten": "1473",
      "nama_kecamatan": "SUNGAI SEMBILAN"
    },
    {
      "id_kecamatan": "1473020",
      "id_kabupaten": "1473",
      "nama_kecamatan": "DUMAI BARAT"
    },
    {
      "id_kecamatan": "1473021",
      "id_kabupaten": "1473",
      "nama_kecamatan": "DUMAI SELATAN"
    },
    {
      "id_kecamatan": "1473030",
      "id_kabupaten": "1473",
      "nama_kecamatan": "DUMAI TIMUR"
    },
    {
      "id_kecamatan": "1473031",
      "id_kabupaten": "1473",
      "nama_kecamatan": "DUMAI KOTA"
    },
    {
      "id_kecamatan": "1501010",
      "id_kabupaten": "1501",
      "nama_kecamatan": "GUNUNG RAYA"
    },
    {
      "id_kecamatan": "1501011",
      "id_kabupaten": "1501",
      "nama_kecamatan": "BUKIT KERMAN"
    },
    {
      "id_kecamatan": "1501020",
      "id_kabupaten": "1501",
      "nama_kecamatan": "BATANG MERANGIN"
    },
    {
      "id_kecamatan": "1501030",
      "id_kabupaten": "1501",
      "nama_kecamatan": "KELILING DANAU"
    },
    {
      "id_kecamatan": "1501040",
      "id_kabupaten": "1501",
      "nama_kecamatan": "DANAU KERINCI"
    },
    {
      "id_kecamatan": "1501050",
      "id_kabupaten": "1501",
      "nama_kecamatan": "SITINJAU LAUT"
    },
    {
      "id_kecamatan": "1501070",
      "id_kabupaten": "1501",
      "nama_kecamatan": "AIR HANGAT"
    },
    {
      "id_kecamatan": "1501071",
      "id_kabupaten": "1501",
      "nama_kecamatan": "AIR HANGAT TIMUR"
    },
    {
      "id_kecamatan": "1501072",
      "id_kabupaten": "1501",
      "nama_kecamatan": "DEPATI VII"
    },
    {
      "id_kecamatan": "1501073",
      "id_kabupaten": "1501",
      "nama_kecamatan": "AIR HANGAT BARAT"
    },
    {
      "id_kecamatan": "1501080",
      "id_kabupaten": "1501",
      "nama_kecamatan": "GUNUNG KERINCI"
    },
    {
      "id_kecamatan": "1501081",
      "id_kabupaten": "1501",
      "nama_kecamatan": "SIULAK"
    },
    {
      "id_kecamatan": "1501082",
      "id_kabupaten": "1501",
      "nama_kecamatan": "SIULAK MUKAI"
    },
    {
      "id_kecamatan": "1501090",
      "id_kabupaten": "1501",
      "nama_kecamatan": "KAYU ARO"
    },
    {
      "id_kecamatan": "1501091",
      "id_kabupaten": "1501",
      "nama_kecamatan": "GUNUNG TUJUH"
    },
    {
      "id_kecamatan": "1501092",
      "id_kabupaten": "1501",
      "nama_kecamatan": "KAYU ARO BARAT"
    },
    {
      "id_kecamatan": "1502010",
      "id_kabupaten": "1502",
      "nama_kecamatan": "JANGKAT"
    },
    {
      "id_kecamatan": "1502011",
      "id_kabupaten": "1502",
      "nama_kecamatan": "SUNGAI TENANG"
    },
    {
      "id_kecamatan": "1502020",
      "id_kabupaten": "1502",
      "nama_kecamatan": "MUARA SIAU"
    },
    {
      "id_kecamatan": "1502021",
      "id_kabupaten": "1502",
      "nama_kecamatan": "LEMBAH MASURAI"
    },
    {
      "id_kecamatan": "1502022",
      "id_kabupaten": "1502",
      "nama_kecamatan": "TIANG PUMPUNG"
    },
    {
      "id_kecamatan": "1502030",
      "id_kabupaten": "1502",
      "nama_kecamatan": "PAMENANG"
    },
    {
      "id_kecamatan": "1502031",
      "id_kabupaten": "1502",
      "nama_kecamatan": "PAMENANG BARAT"
    },
    {
      "id_kecamatan": "1502032",
      "id_kabupaten": "1502",
      "nama_kecamatan": "RENAH PAMENANG"
    },
    {
      "id_kecamatan": "1502033",
      "id_kabupaten": "1502",
      "nama_kecamatan": "PAMENANG SELATAN"
    },
    {
      "id_kecamatan": "1502040",
      "id_kabupaten": "1502",
      "nama_kecamatan": "BANGKO"
    },
    {
      "id_kecamatan": "1502041",
      "id_kabupaten": "1502",
      "nama_kecamatan": "BANGKO BARAT"
    },
    {
      "id_kecamatan": "1502042",
      "id_kabupaten": "1502",
      "nama_kecamatan": "NALO TANTAN"
    },
    {
      "id_kecamatan": "1502043",
      "id_kabupaten": "1502",
      "nama_kecamatan": "BATANG MASUMAI"
    },
    {
      "id_kecamatan": "1502050",
      "id_kabupaten": "1502",
      "nama_kecamatan": "SUNGAI MANAU"
    },
    {
      "id_kecamatan": "1502051",
      "id_kabupaten": "1502",
      "nama_kecamatan": "RENAH PEMBARAP"
    },
    {
      "id_kecamatan": "1502052",
      "id_kabupaten": "1502",
      "nama_kecamatan": "PANGKALAN JAMBU"
    },
    {
      "id_kecamatan": "1502060",
      "id_kabupaten": "1502",
      "nama_kecamatan": "TABIR"
    },
    {
      "id_kecamatan": "1502061",
      "id_kabupaten": "1502",
      "nama_kecamatan": "TABIR ULU"
    },
    {
      "id_kecamatan": "1502062",
      "id_kabupaten": "1502",
      "nama_kecamatan": "TABIR SELATAN"
    },
    {
      "id_kecamatan": "1502063",
      "id_kabupaten": "1502",
      "nama_kecamatan": "TABIR ILIR"
    },
    {
      "id_kecamatan": "1502064",
      "id_kabupaten": "1502",
      "nama_kecamatan": "TABIR TIMUR"
    },
    {
      "id_kecamatan": "1502065",
      "id_kabupaten": "1502",
      "nama_kecamatan": "TABIR LINTAS"
    },
    {
      "id_kecamatan": "1502066",
      "id_kabupaten": "1502",
      "nama_kecamatan": "MARGO TABIR"
    },
    {
      "id_kecamatan": "1502067",
      "id_kabupaten": "1502",
      "nama_kecamatan": "TABIR BARAT"
    },
    {
      "id_kecamatan": "1503010",
      "id_kabupaten": "1503",
      "nama_kecamatan": "BATANG ASAI"
    },
    {
      "id_kecamatan": "1503020",
      "id_kabupaten": "1503",
      "nama_kecamatan": "LIMUN"
    },
    {
      "id_kecamatan": "1503021",
      "id_kabupaten": "1503",
      "nama_kecamatan": "CERMIN NAN GEDANG"
    },
    {
      "id_kecamatan": "1503030",
      "id_kabupaten": "1503",
      "nama_kecamatan": "PELAWAN"
    },
    {
      "id_kecamatan": "1503031",
      "id_kabupaten": "1503",
      "nama_kecamatan": "SINGKUT"
    },
    {
      "id_kecamatan": "1503040",
      "id_kabupaten": "1503",
      "nama_kecamatan": "SAROLANGUN"
    },
    {
      "id_kecamatan": "1503041",
      "id_kabupaten": "1503",
      "nama_kecamatan": "BATHIN VIII"
    },
    {
      "id_kecamatan": "1503050",
      "id_kabupaten": "1503",
      "nama_kecamatan": "PAUH"
    },
    {
      "id_kecamatan": "1503051",
      "id_kabupaten": "1503",
      "nama_kecamatan": "AIR HITAM"
    },
    {
      "id_kecamatan": "1503060",
      "id_kabupaten": "1503",
      "nama_kecamatan": "MANDIANGIN"
    },
    {
      "id_kecamatan": "1504010",
      "id_kabupaten": "1504",
      "nama_kecamatan": "MERSAM"
    },
    {
      "id_kecamatan": "1504011",
      "id_kabupaten": "1504",
      "nama_kecamatan": "MARO SEBO ULU"
    },
    {
      "id_kecamatan": "1504020",
      "id_kabupaten": "1504",
      "nama_kecamatan": "BATIN XXIV"
    },
    {
      "id_kecamatan": "1504030",
      "id_kabupaten": "1504",
      "nama_kecamatan": "MUARA TEMBESI"
    },
    {
      "id_kecamatan": "1504040",
      "id_kabupaten": "1504",
      "nama_kecamatan": "MUARA BULIAN"
    },
    {
      "id_kecamatan": "1504041",
      "id_kabupaten": "1504",
      "nama_kecamatan": "BAJUBANG"
    },
    {
      "id_kecamatan": "1504042",
      "id_kabupaten": "1504",
      "nama_kecamatan": "MARO SEBO ILIR"
    },
    {
      "id_kecamatan": "1504050",
      "id_kabupaten": "1504",
      "nama_kecamatan": "PEMAYUNG"
    },
    {
      "id_kecamatan": "1505010",
      "id_kabupaten": "1505",
      "nama_kecamatan": "MESTONG"
    },
    {
      "id_kecamatan": "1505011",
      "id_kabupaten": "1505",
      "nama_kecamatan": "SUNGAI BAHAR"
    },
    {
      "id_kecamatan": "1505012",
      "id_kabupaten": "1505",
      "nama_kecamatan": "BAHAR SELATAN"
    },
    {
      "id_kecamatan": "1505013",
      "id_kabupaten": "1505",
      "nama_kecamatan": "BAHAR UTARA"
    },
    {
      "id_kecamatan": "1505020",
      "id_kabupaten": "1505",
      "nama_kecamatan": "KUMPEH ULU"
    },
    {
      "id_kecamatan": "1505021",
      "id_kabupaten": "1505",
      "nama_kecamatan": "SUNGAI GELAM"
    },
    {
      "id_kecamatan": "1505030",
      "id_kabupaten": "1505",
      "nama_kecamatan": "KUMPEH"
    },
    {
      "id_kecamatan": "1505040",
      "id_kabupaten": "1505",
      "nama_kecamatan": "MARO SEBO"
    },
    {
      "id_kecamatan": "1505041",
      "id_kabupaten": "1505",
      "nama_kecamatan": "TAMAN RAJO"
    },
    {
      "id_kecamatan": "1505050",
      "id_kabupaten": "1505",
      "nama_kecamatan": "JAMBI LUAR KOTA"
    },
    {
      "id_kecamatan": "1505060",
      "id_kabupaten": "1505",
      "nama_kecamatan": "SEKERNAN"
    },
    {
      "id_kecamatan": "1506010",
      "id_kabupaten": "1506",
      "nama_kecamatan": "MENDAHARA"
    },
    {
      "id_kecamatan": "1506011",
      "id_kabupaten": "1506",
      "nama_kecamatan": "MENDAHARA ULU"
    },
    {
      "id_kecamatan": "1506012",
      "id_kabupaten": "1506",
      "nama_kecamatan": "GERAGAI"
    },
    {
      "id_kecamatan": "1506020",
      "id_kabupaten": "1506",
      "nama_kecamatan": "DENDANG"
    },
    {
      "id_kecamatan": "1506031",
      "id_kabupaten": "1506",
      "nama_kecamatan": "MUARA SABAK BARAT"
    },
    {
      "id_kecamatan": "1506032",
      "id_kabupaten": "1506",
      "nama_kecamatan": "MUARA SABAK TIMUR"
    },
    {
      "id_kecamatan": "1506033",
      "id_kabupaten": "1506",
      "nama_kecamatan": "KUALA JAMBI"
    },
    {
      "id_kecamatan": "1506040",
      "id_kabupaten": "1506",
      "nama_kecamatan": "RANTAU RASAU"
    },
    {
      "id_kecamatan": "1506041",
      "id_kabupaten": "1506",
      "nama_kecamatan": "BERBAK"
    },
    {
      "id_kecamatan": "1506050",
      "id_kabupaten": "1506",
      "nama_kecamatan": "NIPAH PANJANG"
    },
    {
      "id_kecamatan": "1506060",
      "id_kabupaten": "1506",
      "nama_kecamatan": "SADU"
    },
    {
      "id_kecamatan": "1507010",
      "id_kabupaten": "1507",
      "nama_kecamatan": "TUNGKAL ULU"
    },
    {
      "id_kecamatan": "1507011",
      "id_kabupaten": "1507",
      "nama_kecamatan": "MERLUNG"
    },
    {
      "id_kecamatan": "1507012",
      "id_kabupaten": "1507",
      "nama_kecamatan": "BATANG ASAM"
    },
    {
      "id_kecamatan": "1507013",
      "id_kabupaten": "1507",
      "nama_kecamatan": "TEBING TINGGI"
    },
    {
      "id_kecamatan": "1507014",
      "id_kabupaten": "1507",
      "nama_kecamatan": "RENAH MENDALUH"
    },
    {
      "id_kecamatan": "1507015",
      "id_kabupaten": "1507",
      "nama_kecamatan": "MUARA PAPALIK"
    },
    {
      "id_kecamatan": "1507020",
      "id_kabupaten": "1507",
      "nama_kecamatan": "PENGABUAN"
    },
    {
      "id_kecamatan": "1507021",
      "id_kabupaten": "1507",
      "nama_kecamatan": "SENYERANG"
    },
    {
      "id_kecamatan": "1507030",
      "id_kabupaten": "1507",
      "nama_kecamatan": "TUNGKAL ILIR"
    },
    {
      "id_kecamatan": "1507031",
      "id_kabupaten": "1507",
      "nama_kecamatan": "BRAM ITAM"
    },
    {
      "id_kecamatan": "1507032",
      "id_kabupaten": "1507",
      "nama_kecamatan": "SEBERANG KOTA"
    },
    {
      "id_kecamatan": "1507040",
      "id_kabupaten": "1507",
      "nama_kecamatan": "BETARA"
    },
    {
      "id_kecamatan": "1507041",
      "id_kabupaten": "1507",
      "nama_kecamatan": "KUALA BETARA"
    },
    {
      "id_kecamatan": "1508010",
      "id_kabupaten": "1508",
      "nama_kecamatan": "TEBO ILIR"
    },
    {
      "id_kecamatan": "1508011",
      "id_kabupaten": "1508",
      "nama_kecamatan": "MUARA TABIR"
    },
    {
      "id_kecamatan": "1508020",
      "id_kabupaten": "1508",
      "nama_kecamatan": "TEBO TENGAH"
    },
    {
      "id_kecamatan": "1508021",
      "id_kabupaten": "1508",
      "nama_kecamatan": "SUMAY"
    },
    {
      "id_kecamatan": "1508022",
      "id_kabupaten": "1508",
      "nama_kecamatan": "TENGAH ILIR"
    },
    {
      "id_kecamatan": "1508030",
      "id_kabupaten": "1508",
      "nama_kecamatan": "RIMBO BUJANG"
    },
    {
      "id_kecamatan": "1508031",
      "id_kabupaten": "1508",
      "nama_kecamatan": "RIMBO ULU"
    },
    {
      "id_kecamatan": "1508032",
      "id_kabupaten": "1508",
      "nama_kecamatan": "RIMBO ILIR"
    },
    {
      "id_kecamatan": "1508040",
      "id_kabupaten": "1508",
      "nama_kecamatan": "TEBO ULU"
    },
    {
      "id_kecamatan": "1508041",
      "id_kabupaten": "1508",
      "nama_kecamatan": "VII KOTO"
    },
    {
      "id_kecamatan": "1508042",
      "id_kabupaten": "1508",
      "nama_kecamatan": "SERAI SERUMPUN"
    },
    {
      "id_kecamatan": "1508043",
      "id_kabupaten": "1508",
      "nama_kecamatan": "VII KOTO ILIR"
    },
    {
      "id_kecamatan": "1509010",
      "id_kabupaten": "1509",
      "nama_kecamatan": "PELEPAT"
    },
    {
      "id_kecamatan": "1509011",
      "id_kabupaten": "1509",
      "nama_kecamatan": "PELEPAT ILIR"
    },
    {
      "id_kecamatan": "1509021",
      "id_kabupaten": "1509",
      "nama_kecamatan": "BATHIN II BABEKO"
    },
    {
      "id_kecamatan": "1509022",
      "id_kabupaten": "1509",
      "nama_kecamatan": "RIMBO TENGAH"
    },
    {
      "id_kecamatan": "1509023",
      "id_kabupaten": "1509",
      "nama_kecamatan": "BUNGO DANI"
    },
    {
      "id_kecamatan": "1509024",
      "id_kabupaten": "1509",
      "nama_kecamatan": "PASAR MUARA BUNGO"
    },
    {
      "id_kecamatan": "1509025",
      "id_kabupaten": "1509",
      "nama_kecamatan": "BATHIN III"
    },
    {
      "id_kecamatan": "1509030",
      "id_kabupaten": "1509",
      "nama_kecamatan": "RANTAU PANDAN"
    },
    {
      "id_kecamatan": "1509031",
      "id_kabupaten": "1509",
      "nama_kecamatan": "MUKO-MUKO BATHIN VII"
    },
    {
      "id_kecamatan": "1509032",
      "id_kabupaten": "1509",
      "nama_kecamatan": "BATHIN III ULU"
    },
    {
      "id_kecamatan": "1509040",
      "id_kabupaten": "1509",
      "nama_kecamatan": "TANAH SEPENGGAL"
    },
    {
      "id_kecamatan": "1509041",
      "id_kabupaten": "1509",
      "nama_kecamatan": "TANAH SEPENGGAL LINTAS"
    },
    {
      "id_kecamatan": "1509050",
      "id_kabupaten": "1509",
      "nama_kecamatan": "TANAH TUMBUH"
    },
    {
      "id_kecamatan": "1509051",
      "id_kabupaten": "1509",
      "nama_kecamatan": "LIMBUR LUBUK MENGKUANG"
    },
    {
      "id_kecamatan": "1509052",
      "id_kabupaten": "1509",
      "nama_kecamatan": "BATHIN II PELAYANG"
    },
    {
      "id_kecamatan": "1509060",
      "id_kabupaten": "1509",
      "nama_kecamatan": "JUJUHAN"
    },
    {
      "id_kecamatan": "1509061",
      "id_kabupaten": "1509",
      "nama_kecamatan": "JUJUHAN ILIR"
    },
    {
      "id_kecamatan": "1571010",
      "id_kabupaten": "1571",
      "nama_kecamatan": "KOTA BARU"
    },
    {
      "id_kecamatan": "1571020",
      "id_kabupaten": "1571",
      "nama_kecamatan": "JAMBI SELATAN"
    },
    {
      "id_kecamatan": "1571030",
      "id_kabupaten": "1571",
      "nama_kecamatan": "JELUTUNG"
    },
    {
      "id_kecamatan": "1571040",
      "id_kabupaten": "1571",
      "nama_kecamatan": "PASAR JAMBI"
    },
    {
      "id_kecamatan": "1571050",
      "id_kabupaten": "1571",
      "nama_kecamatan": "TELANAIPURA"
    },
    {
      "id_kecamatan": "1571060",
      "id_kabupaten": "1571",
      "nama_kecamatan": "DANAU TELUK"
    },
    {
      "id_kecamatan": "1571070",
      "id_kabupaten": "1571",
      "nama_kecamatan": "PELAYANGAN"
    },
    {
      "id_kecamatan": "1571080",
      "id_kabupaten": "1571",
      "nama_kecamatan": "JAMBI TIMUR"
    },
    {
      "id_kecamatan": "1572010",
      "id_kabupaten": "1572",
      "nama_kecamatan": "TANAH KAMPUNG"
    },
    {
      "id_kecamatan": "1572020",
      "id_kabupaten": "1572",
      "nama_kecamatan": "KUMUN DEBAI"
    },
    {
      "id_kecamatan": "1572030",
      "id_kabupaten": "1572",
      "nama_kecamatan": "SUNGAI PENUH"
    },
    {
      "id_kecamatan": "1572031",
      "id_kabupaten": "1572",
      "nama_kecamatan": "PONDOK TINGGGI"
    },
    {
      "id_kecamatan": "1572032",
      "id_kabupaten": "1572",
      "nama_kecamatan": "SUNGAI BUNGKAL"
    },
    {
      "id_kecamatan": "1572040",
      "id_kabupaten": "1572",
      "nama_kecamatan": "HAMPARAN RAWANG"
    },
    {
      "id_kecamatan": "1572050",
      "id_kabupaten": "1572",
      "nama_kecamatan": "PESISIR BUKIT"
    },
    {
      "id_kecamatan": "1572051",
      "id_kabupaten": "1572",
      "nama_kecamatan": "KOTO BARU"
    },
    {
      "id_kecamatan": "1601052",
      "id_kabupaten": "1601",
      "nama_kecamatan": "LENGKITI"
    },
    {
      "id_kecamatan": "1601070",
      "id_kabupaten": "1601",
      "nama_kecamatan": "SOSOH BUAY RAYAP"
    },
    {
      "id_kecamatan": "1601080",
      "id_kabupaten": "1601",
      "nama_kecamatan": "PENGANDONAN"
    },
    {
      "id_kecamatan": "1601081",
      "id_kabupaten": "1601",
      "nama_kecamatan": "SEMIDANG AJI"
    },
    {
      "id_kecamatan": "1601082",
      "id_kabupaten": "1601",
      "nama_kecamatan": "ULU OGAN"
    },
    {
      "id_kecamatan": "1601083",
      "id_kabupaten": "1601",
      "nama_kecamatan": "MUARA JAYA"
    },
    {
      "id_kecamatan": "1601090",
      "id_kabupaten": "1601",
      "nama_kecamatan": "PENINJAUAN"
    },
    {
      "id_kecamatan": "1601091",
      "id_kabupaten": "1601",
      "nama_kecamatan": "LUBUK BATANG"
    },
    {
      "id_kecamatan": "1601092",
      "id_kabupaten": "1601",
      "nama_kecamatan": "SINAR PENINJAUAN"
    },
    {
      "id_kecamatan": "1601130",
      "id_kabupaten": "1601",
      "nama_kecamatan": "BATU RAJA TIMUR"
    },
    {
      "id_kecamatan": "1601131",
      "id_kabupaten": "1601",
      "nama_kecamatan": "LUBUK RAJA"
    },
    {
      "id_kecamatan": "1601140",
      "id_kabupaten": "1601",
      "nama_kecamatan": "BATU RAJA BARAT"
    },
    {
      "id_kecamatan": "1602010",
      "id_kabupaten": "1602",
      "nama_kecamatan": "LEMPUING"
    },
    {
      "id_kecamatan": "1602011",
      "id_kabupaten": "1602",
      "nama_kecamatan": "LEMPUING JAYA"
    },
    {
      "id_kecamatan": "1602020",
      "id_kabupaten": "1602",
      "nama_kecamatan": "MESUJI"
    },
    {
      "id_kecamatan": "1602021",
      "id_kabupaten": "1602",
      "nama_kecamatan": "SUNGAI MENANG"
    },
    {
      "id_kecamatan": "1602022",
      "id_kabupaten": "1602",
      "nama_kecamatan": "MESUJI MAKMUR"
    },
    {
      "id_kecamatan": "1602023",
      "id_kabupaten": "1602",
      "nama_kecamatan": "MESUJI RAYA"
    },
    {
      "id_kecamatan": "1602030",
      "id_kabupaten": "1602",
      "nama_kecamatan": "TULUNG SELAPAN"
    },
    {
      "id_kecamatan": "1602031",
      "id_kabupaten": "1602",
      "nama_kecamatan": "CENGAL"
    },
    {
      "id_kecamatan": "1602040",
      "id_kabupaten": "1602",
      "nama_kecamatan": "PEDAMARAN"
    },
    {
      "id_kecamatan": "1602041",
      "id_kabupaten": "1602",
      "nama_kecamatan": "PEDAMARAN TIMUR"
    },
    {
      "id_kecamatan": "1602050",
      "id_kabupaten": "1602",
      "nama_kecamatan": "TANJUNG LUBUK"
    },
    {
      "id_kecamatan": "1602051",
      "id_kabupaten": "1602",
      "nama_kecamatan": "TELUK GELAM"
    },
    {
      "id_kecamatan": "1602060",
      "id_kabupaten": "1602",
      "nama_kecamatan": "KOTA KAYU AGUNG"
    },
    {
      "id_kecamatan": "1602120",
      "id_kabupaten": "1602",
      "nama_kecamatan": "SIRAH PULAU PADANG"
    },
    {
      "id_kecamatan": "1602121",
      "id_kabupaten": "1602",
      "nama_kecamatan": "JEJAWI"
    },
    {
      "id_kecamatan": "1602130",
      "id_kabupaten": "1602",
      "nama_kecamatan": "PAMPANGAN"
    },
    {
      "id_kecamatan": "1602131",
      "id_kabupaten": "1602",
      "nama_kecamatan": "PANGKALAN LAPAM"
    },
    {
      "id_kecamatan": "1602140",
      "id_kabupaten": "1602",
      "nama_kecamatan": "AIR SUGIHAN"
    },
    {
      "id_kecamatan": "1603010",
      "id_kabupaten": "1603",
      "nama_kecamatan": "SEMENDO DARAT LAUT"
    },
    {
      "id_kecamatan": "1603011",
      "id_kabupaten": "1603",
      "nama_kecamatan": "SEMENDO DARAT ULU"
    },
    {
      "id_kecamatan": "1603012",
      "id_kabupaten": "1603",
      "nama_kecamatan": "SEMENDO DARAT TENGAH"
    },
    {
      "id_kecamatan": "1603020",
      "id_kabupaten": "1603",
      "nama_kecamatan": "TANJUNG AGUNG"
    },
    {
      "id_kecamatan": "1603031",
      "id_kabupaten": "1603",
      "nama_kecamatan": "RAMBANG"
    },
    {
      "id_kecamatan": "1603032",
      "id_kabupaten": "1603",
      "nama_kecamatan": "LUBAI"
    },
    {
      "id_kecamatan": "1603033",
      "id_kabupaten": "1603",
      "nama_kecamatan": "LUBAI ULU"
    },
    {
      "id_kecamatan": "1603040",
      "id_kabupaten": "1603",
      "nama_kecamatan": "LAWANG KIDUL"
    },
    {
      "id_kecamatan": "1603050",
      "id_kabupaten": "1603",
      "nama_kecamatan": "MUARA ENIM"
    },
    {
      "id_kecamatan": "1603051",
      "id_kabupaten": "1603",
      "nama_kecamatan": "UJAN MAS"
    },
    {
      "id_kecamatan": "1603060",
      "id_kabupaten": "1603",
      "nama_kecamatan": "GUNUNG MEGANG"
    },
    {
      "id_kecamatan": "1603061",
      "id_kabupaten": "1603",
      "nama_kecamatan": "BENAKAT"
    },
    {
      "id_kecamatan": "1603062",
      "id_kabupaten": "1603",
      "nama_kecamatan": "BELIMBING"
    },
    {
      "id_kecamatan": "1603070",
      "id_kabupaten": "1603",
      "nama_kecamatan": "RAMBANG DANGKU"
    },
    {
      "id_kecamatan": "1603090",
      "id_kabupaten": "1603",
      "nama_kecamatan": "GELUMBANG"
    },
    {
      "id_kecamatan": "1603091",
      "id_kabupaten": "1603",
      "nama_kecamatan": "LEMBAK"
    },
    {
      "id_kecamatan": "1603092",
      "id_kabupaten": "1603",
      "nama_kecamatan": "SUNGAI ROTAN"
    },
    {
      "id_kecamatan": "1603093",
      "id_kabupaten": "1603",
      "nama_kecamatan": "MUARA BELIDA"
    },
    {
      "id_kecamatan": "1603094",
      "id_kabupaten": "1603",
      "nama_kecamatan": "KELEKAR"
    },
    {
      "id_kecamatan": "1603095",
      "id_kabupaten": "1603",
      "nama_kecamatan": "BELIDA DARAT"
    },
    {
      "id_kecamatan": "1604011",
      "id_kabupaten": "1604",
      "nama_kecamatan": "TANJUNG SAKTI PUMI"
    },
    {
      "id_kecamatan": "1604012",
      "id_kabupaten": "1604",
      "nama_kecamatan": "TANJUNG SAKTI PUMU"
    },
    {
      "id_kecamatan": "1604040",
      "id_kabupaten": "1604",
      "nama_kecamatan": "KOTA AGUNG"
    },
    {
      "id_kecamatan": "1604041",
      "id_kabupaten": "1604",
      "nama_kecamatan": "MULAK ULU"
    },
    {
      "id_kecamatan": "1604042",
      "id_kabupaten": "1604",
      "nama_kecamatan": "TANJUNG TEBAT"
    },
    {
      "id_kecamatan": "1604050",
      "id_kabupaten": "1604",
      "nama_kecamatan": "PULAU PINANG"
    },
    {
      "id_kecamatan": "1604051",
      "id_kabupaten": "1604",
      "nama_kecamatan": "PAGAR GUNUNG"
    },
    {
      "id_kecamatan": "1604052",
      "id_kabupaten": "1604",
      "nama_kecamatan": "GUMAY ULU"
    },
    {
      "id_kecamatan": "1604060",
      "id_kabupaten": "1604",
      "nama_kecamatan": "JARAI"
    },
    {
      "id_kecamatan": "1604061",
      "id_kabupaten": "1604",
      "nama_kecamatan": "PAJAR BULAN"
    },
    {
      "id_kecamatan": "1604062",
      "id_kabupaten": "1604",
      "nama_kecamatan": "MUARA PAYANG"
    },
    {
      "id_kecamatan": "1604063",
      "id_kabupaten": "1604",
      "nama_kecamatan": "SUKAMERINDU"
    },
    {
      "id_kecamatan": "1604111",
      "id_kabupaten": "1604",
      "nama_kecamatan": "KIKIM BARAT"
    },
    {
      "id_kecamatan": "1604112",
      "id_kabupaten": "1604",
      "nama_kecamatan": "KIKIM TIMUR"
    },
    {
      "id_kecamatan": "1604113",
      "id_kabupaten": "1604",
      "nama_kecamatan": "KIKIM SELATAN"
    },
    {
      "id_kecamatan": "1604114",
      "id_kabupaten": "1604",
      "nama_kecamatan": "KIKIM TENGAH"
    },
    {
      "id_kecamatan": "1604120",
      "id_kabupaten": "1604",
      "nama_kecamatan": "LAHAT"
    },
    {
      "id_kecamatan": "1604121",
      "id_kabupaten": "1604",
      "nama_kecamatan": "GUMAY TALANG"
    },
    {
      "id_kecamatan": "1604122",
      "id_kabupaten": "1604",
      "nama_kecamatan": "PSEKSU"
    },
    {
      "id_kecamatan": "1604131",
      "id_kabupaten": "1604",
      "nama_kecamatan": "MERAPI BARAT"
    },
    {
      "id_kecamatan": "1604132",
      "id_kabupaten": "1604",
      "nama_kecamatan": "MERAPI TIMUR"
    },
    {
      "id_kecamatan": "1604133",
      "id_kabupaten": "1604",
      "nama_kecamatan": "MERAPI SELATAN"
    },
    {
      "id_kecamatan": "1605030",
      "id_kabupaten": "1605",
      "nama_kecamatan": "SUKU TENGAH LAKITAN ULU"
    },
    {
      "id_kecamatan": "1605031",
      "id_kabupaten": "1605",
      "nama_kecamatan": "SELANGIT"
    },
    {
      "id_kecamatan": "1605032",
      "id_kabupaten": "1605",
      "nama_kecamatan": "SUMBER HARTA"
    },
    {
      "id_kecamatan": "1605040",
      "id_kabupaten": "1605",
      "nama_kecamatan": "TUGUMULYO"
    },
    {
      "id_kecamatan": "1605041",
      "id_kabupaten": "1605",
      "nama_kecamatan": "PURWODADI"
    },
    {
      "id_kecamatan": "1605050",
      "id_kabupaten": "1605",
      "nama_kecamatan": "MUARA BELITI"
    },
    {
      "id_kecamatan": "1605051",
      "id_kabupaten": "1605",
      "nama_kecamatan": "TIANG PUMPUNG KEPUNGUT"
    },
    {
      "id_kecamatan": "1605060",
      "id_kabupaten": "1605",
      "nama_kecamatan": "JAYALOKA"
    },
    {
      "id_kecamatan": "1605061",
      "id_kabupaten": "1605",
      "nama_kecamatan": "SUKA KARYA"
    },
    {
      "id_kecamatan": "1605070",
      "id_kabupaten": "1605",
      "nama_kecamatan": "MUARA KELINGI"
    },
    {
      "id_kecamatan": "1605071",
      "id_kabupaten": "1605",
      "nama_kecamatan": "BULANG TENGAH SUKU ULU"
    },
    {
      "id_kecamatan": "1605072",
      "id_kabupaten": "1605",
      "nama_kecamatan": "TUAH NEGERI"
    },
    {
      "id_kecamatan": "1605080",
      "id_kabupaten": "1605",
      "nama_kecamatan": "MUARA LAKITAN"
    },
    {
      "id_kecamatan": "1605090",
      "id_kabupaten": "1605",
      "nama_kecamatan": "MEGANG SAKTI"
    },
    {
      "id_kecamatan": "1606010",
      "id_kabupaten": "1606",
      "nama_kecamatan": "SANGA DESA"
    },
    {
      "id_kecamatan": "1606020",
      "id_kabupaten": "1606",
      "nama_kecamatan": "BABAT TOMAN"
    },
    {
      "id_kecamatan": "1606021",
      "id_kabupaten": "1606",
      "nama_kecamatan": "BATANGHARI LEKO"
    },
    {
      "id_kecamatan": "1606022",
      "id_kabupaten": "1606",
      "nama_kecamatan": "PLAKAT TINGGI"
    },
    {
      "id_kecamatan": "1606023",
      "id_kabupaten": "1606",
      "nama_kecamatan": "LAWANG WETAN"
    },
    {
      "id_kecamatan": "1606030",
      "id_kabupaten": "1606",
      "nama_kecamatan": "SUNGAI KERUH"
    },
    {
      "id_kecamatan": "1606040",
      "id_kabupaten": "1606",
      "nama_kecamatan": "SEKAYU"
    },
    {
      "id_kecamatan": "1606041",
      "id_kabupaten": "1606",
      "nama_kecamatan": "LAIS"
    },
    {
      "id_kecamatan": "1606090",
      "id_kabupaten": "1606",
      "nama_kecamatan": "SUNGAI LILIN"
    },
    {
      "id_kecamatan": "1606091",
      "id_kabupaten": "1606",
      "nama_kecamatan": "KELUANG"
    },
    {
      "id_kecamatan": "1606092",
      "id_kabupaten": "1606",
      "nama_kecamatan": "BABAT SUPAT"
    },
    {
      "id_kecamatan": "1606100",
      "id_kabupaten": "1606",
      "nama_kecamatan": "BAYUNG LENCIR"
    },
    {
      "id_kecamatan": "1606101",
      "id_kabupaten": "1606",
      "nama_kecamatan": "LALAN"
    },
    {
      "id_kecamatan": "1606102",
      "id_kabupaten": "1606",
      "nama_kecamatan": "TUNGKAL JAYA"
    },
    {
      "id_kecamatan": "1607010",
      "id_kabupaten": "1607",
      "nama_kecamatan": "RANTAU BAYUR"
    },
    {
      "id_kecamatan": "1607020",
      "id_kabupaten": "1607",
      "nama_kecamatan": "BETUNG"
    },
    {
      "id_kecamatan": "1607021",
      "id_kabupaten": "1607",
      "nama_kecamatan": "SUAK TAPEH"
    },
    {
      "id_kecamatan": "1607030",
      "id_kabupaten": "1607",
      "nama_kecamatan": "PULAU RIMAU"
    },
    {
      "id_kecamatan": "1607031",
      "id_kabupaten": "1607",
      "nama_kecamatan": "TUNGKAL ILIR"
    },
    {
      "id_kecamatan": "1607040",
      "id_kabupaten": "1607",
      "nama_kecamatan": "BANYUASIN III"
    },
    {
      "id_kecamatan": "1607041",
      "id_kabupaten": "1607",
      "nama_kecamatan": "SEMBAWA"
    },
    {
      "id_kecamatan": "1607050",
      "id_kabupaten": "1607",
      "nama_kecamatan": "TALANG KELAPA"
    },
    {
      "id_kecamatan": "1607051",
      "id_kabupaten": "1607",
      "nama_kecamatan": "TANJUNG LAGO"
    },
    {
      "id_kecamatan": "1607060",
      "id_kabupaten": "1607",
      "nama_kecamatan": "BANYUASIN I"
    },
    {
      "id_kecamatan": "1607061",
      "id_kabupaten": "1607",
      "nama_kecamatan": "AIR KUMBANG"
    },
    {
      "id_kecamatan": "1607070",
      "id_kabupaten": "1607",
      "nama_kecamatan": "RAMBUTAN"
    },
    {
      "id_kecamatan": "1607080",
      "id_kabupaten": "1607",
      "nama_kecamatan": "MUARA PADANG"
    },
    {
      "id_kecamatan": "1607081",
      "id_kabupaten": "1607",
      "nama_kecamatan": "MUARA SUGIHAN"
    },
    {
      "id_kecamatan": "1607090",
      "id_kabupaten": "1607",
      "nama_kecamatan": "MAKARTI JAYA"
    },
    {
      "id_kecamatan": "1607091",
      "id_kabupaten": "1607",
      "nama_kecamatan": "AIR SALEH"
    },
    {
      "id_kecamatan": "1607100",
      "id_kabupaten": "1607",
      "nama_kecamatan": "BANYUASIN II"
    },
    {
      "id_kecamatan": "1607110",
      "id_kabupaten": "1607",
      "nama_kecamatan": "MUARA TELANG"
    },
    {
      "id_kecamatan": "1607111",
      "id_kabupaten": "1607",
      "nama_kecamatan": "SUMBER MARGA TELANG"
    },
    {
      "id_kecamatan": "1608010",
      "id_kabupaten": "1608",
      "nama_kecamatan": "MEKAKAU ILIR"
    },
    {
      "id_kecamatan": "1608020",
      "id_kabupaten": "1608",
      "nama_kecamatan": "BANDING AGUNG"
    },
    {
      "id_kecamatan": "1608021",
      "id_kabupaten": "1608",
      "nama_kecamatan": "WARKUK RANAU SELATAN"
    },
    {
      "id_kecamatan": "1608022",
      "id_kabupaten": "1608",
      "nama_kecamatan": "BUAY PEMATANG RIBU RANAU TENGAH"
    },
    {
      "id_kecamatan": "1608030",
      "id_kabupaten": "1608",
      "nama_kecamatan": "BUAY PEMACA"
    },
    {
      "id_kecamatan": "1608040",
      "id_kabupaten": "1608",
      "nama_kecamatan": "SIMPANG"
    },
    {
      "id_kecamatan": "1608041",
      "id_kabupaten": "1608",
      "nama_kecamatan": "BUANA PEMACA"
    },
    {
      "id_kecamatan": "1608050",
      "id_kabupaten": "1608",
      "nama_kecamatan": "MUARADUA"
    },
    {
      "id_kecamatan": "1608051",
      "id_kabupaten": "1608",
      "nama_kecamatan": "BUAY RAWAN"
    },
    {
      "id_kecamatan": "1608060",
      "id_kabupaten": "1608",
      "nama_kecamatan": "BUAY SANDANG AJI"
    },
    {
      "id_kecamatan": "1608061",
      "id_kabupaten": "1608",
      "nama_kecamatan": "TIGA DIHAJI"
    },
    {
      "id_kecamatan": "1608070",
      "id_kabupaten": "1608",
      "nama_kecamatan": "BUAY RUNJUNG"
    },
    {
      "id_kecamatan": "1608071",
      "id_kabupaten": "1608",
      "nama_kecamatan": "RUNJUNG AGUNG"
    },
    {
      "id_kecamatan": "1608080",
      "id_kabupaten": "1608",
      "nama_kecamatan": "KISAM TINGGI"
    },
    {
      "id_kecamatan": "1608090",
      "id_kabupaten": "1608",
      "nama_kecamatan": "MUARADUA KISAM"
    },
    {
      "id_kecamatan": "1608091",
      "id_kabupaten": "1608",
      "nama_kecamatan": "KISAM ILIR"
    },
    {
      "id_kecamatan": "1608100",
      "id_kabupaten": "1608",
      "nama_kecamatan": "PULAU BERINGIN"
    },
    {
      "id_kecamatan": "1608101",
      "id_kabupaten": "1608",
      "nama_kecamatan": "SINDANG DANAU"
    },
    {
      "id_kecamatan": "1608102",
      "id_kabupaten": "1608",
      "nama_kecamatan": "SUNGAI ARE"
    },
    {
      "id_kecamatan": "1609010",
      "id_kabupaten": "1609",
      "nama_kecamatan": "MARTAPURA"
    },
    {
      "id_kecamatan": "1609011",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BUNGA MAYANG"
    },
    {
      "id_kecamatan": "1609012",
      "id_kabupaten": "1609",
      "nama_kecamatan": "JAYA PURA"
    },
    {
      "id_kecamatan": "1609020",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BUAY PEMUKA PELIUNG"
    },
    {
      "id_kecamatan": "1609030",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BUAY MADANG"
    },
    {
      "id_kecamatan": "1609031",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BUAY MADANG TIMUR"
    },
    {
      "id_kecamatan": "1609032",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BUAY PEMUKA BANGSA RAJA"
    },
    {
      "id_kecamatan": "1609040",
      "id_kabupaten": "1609",
      "nama_kecamatan": "MADANG SUKU II"
    },
    {
      "id_kecamatan": "1609041",
      "id_kabupaten": "1609",
      "nama_kecamatan": "MADANG SUKU III"
    },
    {
      "id_kecamatan": "1609050",
      "id_kabupaten": "1609",
      "nama_kecamatan": "MADANG SUKU I"
    },
    {
      "id_kecamatan": "1609051",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BELITANG MADANG RAYA"
    },
    {
      "id_kecamatan": "1609060",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BELITANG"
    },
    {
      "id_kecamatan": "1609061",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BELITANG JAYA"
    },
    {
      "id_kecamatan": "1609070",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BELITANG III"
    },
    {
      "id_kecamatan": "1609080",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BELITANG II"
    },
    {
      "id_kecamatan": "1609081",
      "id_kabupaten": "1609",
      "nama_kecamatan": "BELITANG MULYA"
    },
    {
      "id_kecamatan": "1609090",
      "id_kabupaten": "1609",
      "nama_kecamatan": "SEMENDAWAI SUKU III"
    },
    {
      "id_kecamatan": "1609091",
      "id_kabupaten": "1609",
      "nama_kecamatan": "SEMENDAWAI TIMUR"
    },
    {
      "id_kecamatan": "1609100",
      "id_kabupaten": "1609",
      "nama_kecamatan": "CEMPAKA"
    },
    {
      "id_kecamatan": "1609101",
      "id_kabupaten": "1609",
      "nama_kecamatan": "SEMENDAWAI BARAT"
    },
    {
      "id_kecamatan": "1610010",
      "id_kabupaten": "1610",
      "nama_kecamatan": "MUARA KUANG"
    },
    {
      "id_kecamatan": "1610011",
      "id_kabupaten": "1610",
      "nama_kecamatan": "RAMBANG KUANG"
    },
    {
      "id_kecamatan": "1610012",
      "id_kabupaten": "1610",
      "nama_kecamatan": "LUBUK KELIAT"
    },
    {
      "id_kecamatan": "1610020",
      "id_kabupaten": "1610",
      "nama_kecamatan": "TANJUNG BATU"
    },
    {
      "id_kecamatan": "1610021",
      "id_kabupaten": "1610",
      "nama_kecamatan": "PAYARAMAN"
    },
    {
      "id_kecamatan": "1610030",
      "id_kabupaten": "1610",
      "nama_kecamatan": "RANTAU ALAI"
    },
    {
      "id_kecamatan": "1610031",
      "id_kabupaten": "1610",
      "nama_kecamatan": "KANDIS"
    },
    {
      "id_kecamatan": "1610040",
      "id_kabupaten": "1610",
      "nama_kecamatan": "TANJUNG RAJA"
    },
    {
      "id_kecamatan": "1610041",
      "id_kabupaten": "1610",
      "nama_kecamatan": "RANTAU PANJANG"
    },
    {
      "id_kecamatan": "1610042",
      "id_kabupaten": "1610",
      "nama_kecamatan": "SUNGAI PINANG"
    },
    {
      "id_kecamatan": "1610050",
      "id_kabupaten": "1610",
      "nama_kecamatan": "PEMULUTAN"
    },
    {
      "id_kecamatan": "1610051",
      "id_kabupaten": "1610",
      "nama_kecamatan": "PEMULUTAN SELATAN"
    },
    {
      "id_kecamatan": "1610052",
      "id_kabupaten": "1610",
      "nama_kecamatan": "PEMULUTAN BARAT"
    },
    {
      "id_kecamatan": "1610060",
      "id_kabupaten": "1610",
      "nama_kecamatan": "INDRALAYA"
    },
    {
      "id_kecamatan": "1610061",
      "id_kabupaten": "1610",
      "nama_kecamatan": "INDRALAYA UTARA"
    },
    {
      "id_kecamatan": "1610062",
      "id_kabupaten": "1610",
      "nama_kecamatan": "INDRALAYA SELATAN"
    },
    {
      "id_kecamatan": "1611010",
      "id_kabupaten": "1611",
      "nama_kecamatan": "MUARA PINANG"
    },
    {
      "id_kecamatan": "1611020",
      "id_kabupaten": "1611",
      "nama_kecamatan": "LINTANG KANAN"
    },
    {
      "id_kecamatan": "1611030",
      "id_kabupaten": "1611",
      "nama_kecamatan": "PENDOPO"
    },
    {
      "id_kecamatan": "1611031",
      "id_kabupaten": "1611",
      "nama_kecamatan": "PENDOPO BARAT"
    },
    {
      "id_kecamatan": "1611040",
      "id_kabupaten": "1611",
      "nama_kecamatan": "PASEMAH AIR KERUH"
    },
    {
      "id_kecamatan": "1611050",
      "id_kabupaten": "1611",
      "nama_kecamatan": "ULU MUSI"
    },
    {
      "id_kecamatan": "1611051",
      "id_kabupaten": "1611",
      "nama_kecamatan": "SIKAP DALAM"
    },
    {
      "id_kecamatan": "1611060",
      "id_kabupaten": "1611",
      "nama_kecamatan": "TALANG PADANG"
    },
    {
      "id_kecamatan": "1611070",
      "id_kabupaten": "1611",
      "nama_kecamatan": "TEBING TINGGI"
    },
    {
      "id_kecamatan": "1611071",
      "id_kabupaten": "1611",
      "nama_kecamatan": "SALING"
    },
    {
      "id_kecamatan": "1612010",
      "id_kabupaten": "1612",
      "nama_kecamatan": "TALANG UBI"
    },
    {
      "id_kecamatan": "1612020",
      "id_kabupaten": "1612",
      "nama_kecamatan": "TANAH ABANG"
    },
    {
      "id_kecamatan": "1612030",
      "id_kabupaten": "1612",
      "nama_kecamatan": "ABAB"
    },
    {
      "id_kecamatan": "1612040",
      "id_kabupaten": "1612",
      "nama_kecamatan": "PENUKAL"
    },
    {
      "id_kecamatan": "1612050",
      "id_kabupaten": "1612",
      "nama_kecamatan": "PENUKAL UTARA"
    },
    {
      "id_kecamatan": "1613010",
      "id_kabupaten": "1613",
      "nama_kecamatan": "ULU RAWAS"
    },
    {
      "id_kecamatan": "1613020",
      "id_kabupaten": "1613",
      "nama_kecamatan": "KARANG JAYA"
    },
    {
      "id_kecamatan": "1613030",
      "id_kabupaten": "1613",
      "nama_kecamatan": "RAWAS ULU"
    },
    {
      "id_kecamatan": "1613040",
      "id_kabupaten": "1613",
      "nama_kecamatan": "RUPIT"
    },
    {
      "id_kecamatan": "1613050",
      "id_kabupaten": "1613",
      "nama_kecamatan": "KARANG DAPO"
    },
    {
      "id_kecamatan": "1613060",
      "id_kabupaten": "1613",
      "nama_kecamatan": "RAWAS ILIR"
    },
    {
      "id_kecamatan": "1613070",
      "id_kabupaten": "1613",
      "nama_kecamatan": "NIBUNG"
    },
    {
      "id_kecamatan": "1671010",
      "id_kabupaten": "1671",
      "nama_kecamatan": "ILIR BARAT II"
    },
    {
      "id_kecamatan": "1671011",
      "id_kabupaten": "1671",
      "nama_kecamatan": "GANDUS"
    },
    {
      "id_kecamatan": "1671020",
      "id_kabupaten": "1671",
      "nama_kecamatan": "SEBERANG ULU I"
    },
    {
      "id_kecamatan": "1671021",
      "id_kabupaten": "1671",
      "nama_kecamatan": "KERTAPATI"
    },
    {
      "id_kecamatan": "1671030",
      "id_kabupaten": "1671",
      "nama_kecamatan": "SEBERANG ULU II"
    },
    {
      "id_kecamatan": "1671031",
      "id_kabupaten": "1671",
      "nama_kecamatan": "PLAJU"
    },
    {
      "id_kecamatan": "1671040",
      "id_kabupaten": "1671",
      "nama_kecamatan": "ILIR BARAT I"
    },
    {
      "id_kecamatan": "1671041",
      "id_kabupaten": "1671",
      "nama_kecamatan": "BUKIT KECIL"
    },
    {
      "id_kecamatan": "1671050",
      "id_kabupaten": "1671",
      "nama_kecamatan": "ILIR TIMUR I"
    },
    {
      "id_kecamatan": "1671051",
      "id_kabupaten": "1671",
      "nama_kecamatan": "KEMUNING"
    },
    {
      "id_kecamatan": "1671060",
      "id_kabupaten": "1671",
      "nama_kecamatan": "ILIR TIMUR II"
    },
    {
      "id_kecamatan": "1671061",
      "id_kabupaten": "1671",
      "nama_kecamatan": "KALIDONI"
    },
    {
      "id_kecamatan": "1671070",
      "id_kabupaten": "1671",
      "nama_kecamatan": "SAKO"
    },
    {
      "id_kecamatan": "1671071",
      "id_kabupaten": "1671",
      "nama_kecamatan": "SEMATANG BORANG"
    },
    {
      "id_kecamatan": "1671080",
      "id_kabupaten": "1671",
      "nama_kecamatan": "SUKARAMI"
    },
    {
      "id_kecamatan": "1671081",
      "id_kabupaten": "1671",
      "nama_kecamatan": "ALANG ALANG LEBAR"
    },
    {
      "id_kecamatan": "1672010",
      "id_kabupaten": "1672",
      "nama_kecamatan": "RAMBANG KAPAK TENGAH"
    },
    {
      "id_kecamatan": "1672020",
      "id_kabupaten": "1672",
      "nama_kecamatan": "PRABUMULIH TIMUR"
    },
    {
      "id_kecamatan": "1672021",
      "id_kabupaten": "1672",
      "nama_kecamatan": "PRABUMULIH SELATAN"
    },
    {
      "id_kecamatan": "1672030",
      "id_kabupaten": "1672",
      "nama_kecamatan": "PRABUMULIH BARAT"
    },
    {
      "id_kecamatan": "1672031",
      "id_kabupaten": "1672",
      "nama_kecamatan": "PRABUMULIH UTARA"
    },
    {
      "id_kecamatan": "1672040",
      "id_kabupaten": "1672",
      "nama_kecamatan": "CAMBAI"
    },
    {
      "id_kecamatan": "1673010",
      "id_kabupaten": "1673",
      "nama_kecamatan": "DEMPO SELATAN"
    },
    {
      "id_kecamatan": "1673011",
      "id_kabupaten": "1673",
      "nama_kecamatan": "DEMPO TENGAH"
    },
    {
      "id_kecamatan": "1673020",
      "id_kabupaten": "1673",
      "nama_kecamatan": "DEMPO UTARA"
    },
    {
      "id_kecamatan": "1673030",
      "id_kabupaten": "1673",
      "nama_kecamatan": "PAGAR ALAM SELATAN"
    },
    {
      "id_kecamatan": "1673040",
      "id_kabupaten": "1673",
      "nama_kecamatan": "PAGAR ALAM UTARA"
    },
    {
      "id_kecamatan": "1674011",
      "id_kabupaten": "1674",
      "nama_kecamatan": "LUBUK LINGGAU BARAT I"
    },
    {
      "id_kecamatan": "1674012",
      "id_kabupaten": "1674",
      "nama_kecamatan": "LUBUK LINGGAU BARAT II"
    },
    {
      "id_kecamatan": "1674021",
      "id_kabupaten": "1674",
      "nama_kecamatan": "LUBUK LINGGAU SELATAN I"
    },
    {
      "id_kecamatan": "1674022",
      "id_kabupaten": "1674",
      "nama_kecamatan": "LUBUK LINGGAU SELATAN II"
    },
    {
      "id_kecamatan": "1674031",
      "id_kabupaten": "1674",
      "nama_kecamatan": "LUBUK LINGGAU TIMUR I"
    },
    {
      "id_kecamatan": "1674032",
      "id_kabupaten": "1674",
      "nama_kecamatan": "LUBUK LINGGAU TIMUR II"
    },
    {
      "id_kecamatan": "1674041",
      "id_kabupaten": "1674",
      "nama_kecamatan": "LUBUK LINGGAU UTARA I"
    },
    {
      "id_kecamatan": "1674042",
      "id_kabupaten": "1674",
      "nama_kecamatan": "LUBUK LINGGAU UTARA II"
    },
    {
      "id_kecamatan": "1701040",
      "id_kabupaten": "1701",
      "nama_kecamatan": "MANNA"
    },
    {
      "id_kecamatan": "1701041",
      "id_kabupaten": "1701",
      "nama_kecamatan": "KOTA MANNA"
    },
    {
      "id_kecamatan": "1701042",
      "id_kabupaten": "1701",
      "nama_kecamatan": "KEDURANG"
    },
    {
      "id_kecamatan": "1701043",
      "id_kabupaten": "1701",
      "nama_kecamatan": "BUNGA MAS"
    },
    {
      "id_kecamatan": "1701044",
      "id_kabupaten": "1701",
      "nama_kecamatan": "PASAR MANNA"
    },
    {
      "id_kecamatan": "1701045",
      "id_kabupaten": "1701",
      "nama_kecamatan": "KEDURANG ILIR"
    },
    {
      "id_kecamatan": "1701050",
      "id_kabupaten": "1701",
      "nama_kecamatan": "SEGINIM"
    },
    {
      "id_kecamatan": "1701051",
      "id_kabupaten": "1701",
      "nama_kecamatan": "AIR NIPIS"
    },
    {
      "id_kecamatan": "1701060",
      "id_kabupaten": "1701",
      "nama_kecamatan": "PINO"
    },
    {
      "id_kecamatan": "1701061",
      "id_kabupaten": "1701",
      "nama_kecamatan": "PINORAYA"
    },
    {
      "id_kecamatan": "1701062",
      "id_kabupaten": "1701",
      "nama_kecamatan": "ULU MANNA"
    },
    {
      "id_kecamatan": "1702020",
      "id_kabupaten": "1702",
      "nama_kecamatan": "KOTA PADANG"
    },
    {
      "id_kecamatan": "1702021",
      "id_kabupaten": "1702",
      "nama_kecamatan": "SINDANG BELITI ILIR"
    },
    {
      "id_kecamatan": "1702030",
      "id_kabupaten": "1702",
      "nama_kecamatan": "PADANG ULAK TANDING"
    },
    {
      "id_kecamatan": "1702031",
      "id_kabupaten": "1702",
      "nama_kecamatan": "SINDANG KELINGI"
    },
    {
      "id_kecamatan": "1702032",
      "id_kabupaten": "1702",
      "nama_kecamatan": "BINDU RIANG"
    },
    {
      "id_kecamatan": "1702033",
      "id_kabupaten": "1702",
      "nama_kecamatan": "SINDANG BELITI ULU"
    },
    {
      "id_kecamatan": "1702034",
      "id_kabupaten": "1702",
      "nama_kecamatan": "SINDANG DATARAN"
    },
    {
      "id_kecamatan": "1702040",
      "id_kabupaten": "1702",
      "nama_kecamatan": "CURUP"
    },
    {
      "id_kecamatan": "1702041",
      "id_kabupaten": "1702",
      "nama_kecamatan": "BERMANI ULU"
    },
    {
      "id_kecamatan": "1702042",
      "id_kabupaten": "1702",
      "nama_kecamatan": "SELUPU REJANG"
    },
    {
      "id_kecamatan": "1702043",
      "id_kabupaten": "1702",
      "nama_kecamatan": "CURUP SELATAN"
    },
    {
      "id_kecamatan": "1702044",
      "id_kabupaten": "1702",
      "nama_kecamatan": "CURUP TENGAH"
    },
    {
      "id_kecamatan": "1702045",
      "id_kabupaten": "1702",
      "nama_kecamatan": "BERMANI ULU RAYA"
    },
    {
      "id_kecamatan": "1702046",
      "id_kabupaten": "1702",
      "nama_kecamatan": "CURUP UTARA"
    },
    {
      "id_kecamatan": "1702047",
      "id_kabupaten": "1702",
      "nama_kecamatan": "CURUP TIMUR"
    },
    {
      "id_kecamatan": "1703010",
      "id_kabupaten": "1703",
      "nama_kecamatan": "ENGGANO"
    },
    {
      "id_kecamatan": "1703050",
      "id_kabupaten": "1703",
      "nama_kecamatan": "KERKAP"
    },
    {
      "id_kecamatan": "1703051",
      "id_kabupaten": "1703",
      "nama_kecamatan": "AIR NAPAL"
    },
    {
      "id_kecamatan": "1703052",
      "id_kabupaten": "1703",
      "nama_kecamatan": "AIR BESI"
    },
    {
      "id_kecamatan": "1703053",
      "id_kabupaten": "1703",
      "nama_kecamatan": "HULU PALIK"
    },
    {
      "id_kecamatan": "1703054",
      "id_kabupaten": "1703",
      "nama_kecamatan": "TANJUNG AGUNG PALIK"
    },
    {
      "id_kecamatan": "1703060",
      "id_kabupaten": "1703",
      "nama_kecamatan": "ARGA MAKMUR"
    },
    {
      "id_kecamatan": "1703061",
      "id_kabupaten": "1703",
      "nama_kecamatan": "ARMA JAYA"
    },
    {
      "id_kecamatan": "1703070",
      "id_kabupaten": "1703",
      "nama_kecamatan": "LAIS"
    },
    {
      "id_kecamatan": "1703071",
      "id_kabupaten": "1703",
      "nama_kecamatan": "BATIK NAU"
    },
    {
      "id_kecamatan": "1703072",
      "id_kabupaten": "1703",
      "nama_kecamatan": "GIRI MULYA"
    },
    {
      "id_kecamatan": "1703073",
      "id_kabupaten": "1703",
      "nama_kecamatan": "AIR PADANG"
    },
    {
      "id_kecamatan": "1703080",
      "id_kabupaten": "1703",
      "nama_kecamatan": "PADANG JAYA"
    },
    {
      "id_kecamatan": "1703090",
      "id_kabupaten": "1703",
      "nama_kecamatan": "KETAHUN"
    },
    {
      "id_kecamatan": "1703091",
      "id_kabupaten": "1703",
      "nama_kecamatan": "NAPAL PUTIH"
    },
    {
      "id_kecamatan": "1703092",
      "id_kabupaten": "1703",
      "nama_kecamatan": "ULOK KUPAI"
    },
    {
      "id_kecamatan": "1703100",
      "id_kabupaten": "1703",
      "nama_kecamatan": "PUTRI HIJAU"
    },
    {
      "id_kecamatan": "1704010",
      "id_kabupaten": "1704",
      "nama_kecamatan": "NASAL"
    },
    {
      "id_kecamatan": "1704020",
      "id_kabupaten": "1704",
      "nama_kecamatan": "MAJE"
    },
    {
      "id_kecamatan": "1704030",
      "id_kabupaten": "1704",
      "nama_kecamatan": "KAUR SELATAN"
    },
    {
      "id_kecamatan": "1704031",
      "id_kabupaten": "1704",
      "nama_kecamatan": "TETAP"
    },
    {
      "id_kecamatan": "1704040",
      "id_kabupaten": "1704",
      "nama_kecamatan": "KAUR TENGAH"
    },
    {
      "id_kecamatan": "1704041",
      "id_kabupaten": "1704",
      "nama_kecamatan": "LUAS"
    },
    {
      "id_kecamatan": "1704042",
      "id_kabupaten": "1704",
      "nama_kecamatan": "MUARA SAHUNG"
    },
    {
      "id_kecamatan": "1704050",
      "id_kabupaten": "1704",
      "nama_kecamatan": "KINAL"
    },
    {
      "id_kecamatan": "1704051",
      "id_kabupaten": "1704",
      "nama_kecamatan": "SEMIDANG GUMAY"
    },
    {
      "id_kecamatan": "1704060",
      "id_kabupaten": "1704",
      "nama_kecamatan": "TANJUNG KEMUNING"
    },
    {
      "id_kecamatan": "1704061",
      "id_kabupaten": "1704",
      "nama_kecamatan": "KELAM TENGAH"
    },
    {
      "id_kecamatan": "1704070",
      "id_kabupaten": "1704",
      "nama_kecamatan": "KAUR UTARA"
    },
    {
      "id_kecamatan": "1704071",
      "id_kabupaten": "1704",
      "nama_kecamatan": "PADANG GUCI HILIR"
    },
    {
      "id_kecamatan": "1704072",
      "id_kabupaten": "1704",
      "nama_kecamatan": "LUNGKANG KULE"
    },
    {
      "id_kecamatan": "1704073",
      "id_kabupaten": "1704",
      "nama_kecamatan": "PADANG GUCI HULU"
    },
    {
      "id_kecamatan": "1705010",
      "id_kabupaten": "1705",
      "nama_kecamatan": "SEMIDANG ALAS MARAS"
    },
    {
      "id_kecamatan": "1705020",
      "id_kabupaten": "1705",
      "nama_kecamatan": "SEMIDANG ALAS"
    },
    {
      "id_kecamatan": "1705030",
      "id_kabupaten": "1705",
      "nama_kecamatan": "TALO"
    },
    {
      "id_kecamatan": "1705031",
      "id_kabupaten": "1705",
      "nama_kecamatan": "ILIR TALO"
    },
    {
      "id_kecamatan": "1705032",
      "id_kabupaten": "1705",
      "nama_kecamatan": "TALO KECIL"
    },
    {
      "id_kecamatan": "1705033",
      "id_kabupaten": "1705",
      "nama_kecamatan": "ULU TALO"
    },
    {
      "id_kecamatan": "1705040",
      "id_kabupaten": "1705",
      "nama_kecamatan": "SELUMA"
    },
    {
      "id_kecamatan": "1705041",
      "id_kabupaten": "1705",
      "nama_kecamatan": "SELUMA SELATAN"
    },
    {
      "id_kecamatan": "1705042",
      "id_kabupaten": "1705",
      "nama_kecamatan": "SELUMA BARAT"
    },
    {
      "id_kecamatan": "1705043",
      "id_kabupaten": "1705",
      "nama_kecamatan": "SELUMA TIMUR"
    },
    {
      "id_kecamatan": "1705044",
      "id_kabupaten": "1705",
      "nama_kecamatan": "SELUMA UTARA"
    },
    {
      "id_kecamatan": "1705050",
      "id_kabupaten": "1705",
      "nama_kecamatan": "SUKARAJA"
    },
    {
      "id_kecamatan": "1705051",
      "id_kabupaten": "1705",
      "nama_kecamatan": "AIR PERIUKAN"
    },
    {
      "id_kecamatan": "1705052",
      "id_kabupaten": "1705",
      "nama_kecamatan": "LUBUK SANDI"
    },
    {
      "id_kecamatan": "1706010",
      "id_kabupaten": "1706",
      "nama_kecamatan": "IPUH"
    },
    {
      "id_kecamatan": "1706011",
      "id_kabupaten": "1706",
      "nama_kecamatan": "AIR RAMI"
    },
    {
      "id_kecamatan": "1706012",
      "id_kabupaten": "1706",
      "nama_kecamatan": "MALIN DEMAN"
    },
    {
      "id_kecamatan": "1706020",
      "id_kabupaten": "1706",
      "nama_kecamatan": "PONDOK SUGUH"
    },
    {
      "id_kecamatan": "1706021",
      "id_kabupaten": "1706",
      "nama_kecamatan": "SUNGAI RUMBAI"
    },
    {
      "id_kecamatan": "1706022",
      "id_kabupaten": "1706",
      "nama_kecamatan": "TERAMANG JAYA"
    },
    {
      "id_kecamatan": "1706030",
      "id_kabupaten": "1706",
      "nama_kecamatan": "TERAS TERUNJAM"
    },
    {
      "id_kecamatan": "1706031",
      "id_kabupaten": "1706",
      "nama_kecamatan": "PENARIK"
    },
    {
      "id_kecamatan": "1706032",
      "id_kabupaten": "1706",
      "nama_kecamatan": "SELAGAN RAYA"
    },
    {
      "id_kecamatan": "1706040",
      "id_kabupaten": "1706",
      "nama_kecamatan": "KOTA MUKOMUKO"
    },
    {
      "id_kecamatan": "1706041",
      "id_kabupaten": "1706",
      "nama_kecamatan": "AIR DIKIT"
    },
    {
      "id_kecamatan": "1706042",
      "id_kabupaten": "1706",
      "nama_kecamatan": "XIV KOTO"
    },
    {
      "id_kecamatan": "1706050",
      "id_kabupaten": "1706",
      "nama_kecamatan": "LUBUK PINANG"
    },
    {
      "id_kecamatan": "1706051",
      "id_kabupaten": "1706",
      "nama_kecamatan": "AIR MANJUNTO"
    },
    {
      "id_kecamatan": "1706052",
      "id_kabupaten": "1706",
      "nama_kecamatan": "V KOTO"
    },
    {
      "id_kecamatan": "1707010",
      "id_kabupaten": "1707",
      "nama_kecamatan": "RIMBO PENGADANG"
    },
    {
      "id_kecamatan": "1707011",
      "id_kabupaten": "1707",
      "nama_kecamatan": "TOPOS"
    },
    {
      "id_kecamatan": "1707020",
      "id_kabupaten": "1707",
      "nama_kecamatan": "LEBONG SELATAN"
    },
    {
      "id_kecamatan": "1707021",
      "id_kabupaten": "1707",
      "nama_kecamatan": "BINGIN KUNING"
    },
    {
      "id_kecamatan": "1707030",
      "id_kabupaten": "1707",
      "nama_kecamatan": "LEBONG TENGAH"
    },
    {
      "id_kecamatan": "1707031",
      "id_kabupaten": "1707",
      "nama_kecamatan": "LEBONG SAKTI"
    },
    {
      "id_kecamatan": "1707040",
      "id_kabupaten": "1707",
      "nama_kecamatan": "LEBONG ATAS"
    },
    {
      "id_kecamatan": "1707041",
      "id_kabupaten": "1707",
      "nama_kecamatan": "PADANG BANO"
    },
    {
      "id_kecamatan": "1707042",
      "id_kabupaten": "1707",
      "nama_kecamatan": "PELABAI"
    },
    {
      "id_kecamatan": "1707050",
      "id_kabupaten": "1707",
      "nama_kecamatan": "LEBONG UTARA"
    },
    {
      "id_kecamatan": "1707051",
      "id_kabupaten": "1707",
      "nama_kecamatan": "AMEN"
    },
    {
      "id_kecamatan": "1707052",
      "id_kabupaten": "1707",
      "nama_kecamatan": "URAM JAYA"
    },
    {
      "id_kecamatan": "1707053",
      "id_kabupaten": "1707",
      "nama_kecamatan": "PINANG BELAPIS"
    },
    {
      "id_kecamatan": "1708010",
      "id_kabupaten": "1708",
      "nama_kecamatan": "MUARA KEMUMU"
    },
    {
      "id_kecamatan": "1708020",
      "id_kabupaten": "1708",
      "nama_kecamatan": "BERMANI ILIR"
    },
    {
      "id_kecamatan": "1708030",
      "id_kabupaten": "1708",
      "nama_kecamatan": "SEBERANG MUSI"
    },
    {
      "id_kecamatan": "1708040",
      "id_kabupaten": "1708",
      "nama_kecamatan": "TEBAT KARAI"
    },
    {
      "id_kecamatan": "1708050",
      "id_kabupaten": "1708",
      "nama_kecamatan": "KEPAHIANG"
    },
    {
      "id_kecamatan": "1708060",
      "id_kabupaten": "1708",
      "nama_kecamatan": "KABA WETAN"
    },
    {
      "id_kecamatan": "1708070",
      "id_kabupaten": "1708",
      "nama_kecamatan": "UJAN MAS"
    },
    {
      "id_kecamatan": "1708080",
      "id_kabupaten": "1708",
      "nama_kecamatan": "MERIGI"
    },
    {
      "id_kecamatan": "1709010",
      "id_kabupaten": "1709",
      "nama_kecamatan": "TALANG EMPAT"
    },
    {
      "id_kecamatan": "1709020",
      "id_kabupaten": "1709",
      "nama_kecamatan": "KARANG TINGGI"
    },
    {
      "id_kecamatan": "1709030",
      "id_kabupaten": "1709",
      "nama_kecamatan": "TABA PENANJUNG"
    },
    {
      "id_kecamatan": "1709031",
      "id_kabupaten": "1709",
      "nama_kecamatan": "MERIGI KELINDANG"
    },
    {
      "id_kecamatan": "1709040",
      "id_kabupaten": "1709",
      "nama_kecamatan": "PAGAR JATI"
    },
    {
      "id_kecamatan": "1709041",
      "id_kabupaten": "1709",
      "nama_kecamatan": "MERIGI SAKTI"
    },
    {
      "id_kecamatan": "1709050",
      "id_kabupaten": "1709",
      "nama_kecamatan": "PONDOK KELAPA"
    },
    {
      "id_kecamatan": "1709051",
      "id_kabupaten": "1709",
      "nama_kecamatan": "PONDOK KUBANG"
    },
    {
      "id_kecamatan": "1709060",
      "id_kabupaten": "1709",
      "nama_kecamatan": "PEMATANG TIGA"
    },
    {
      "id_kecamatan": "1709061",
      "id_kabupaten": "1709",
      "nama_kecamatan": "BANG HAJI"
    },
    {
      "id_kecamatan": "1771010",
      "id_kabupaten": "1771",
      "nama_kecamatan": "SELEBAR"
    },
    {
      "id_kecamatan": "1771011",
      "id_kabupaten": "1771",
      "nama_kecamatan": "KAMPUNG MELAYU"
    },
    {
      "id_kecamatan": "1771020",
      "id_kabupaten": "1771",
      "nama_kecamatan": "GADING CEMPAKA"
    },
    {
      "id_kecamatan": "1771021",
      "id_kabupaten": "1771",
      "nama_kecamatan": "RATU AGUNG"
    },
    {
      "id_kecamatan": "1771022",
      "id_kabupaten": "1771",
      "nama_kecamatan": "RATU SAMBAN"
    },
    {
      "id_kecamatan": "1771023",
      "id_kabupaten": "1771",
      "nama_kecamatan": "SINGARAN PATI"
    },
    {
      "id_kecamatan": "1771030",
      "id_kabupaten": "1771",
      "nama_kecamatan": "TELUK SEGARA"
    },
    {
      "id_kecamatan": "1771031",
      "id_kabupaten": "1771",
      "nama_kecamatan": "SUNGAI SERUT"
    },
    {
      "id_kecamatan": "1771040",
      "id_kabupaten": "1771",
      "nama_kecamatan": "MUARA BANGKA HULU"
    },
    {
      "id_kecamatan": "1801040",
      "id_kabupaten": "1801",
      "nama_kecamatan": "BALIK BUKIT"
    },
    {
      "id_kecamatan": "1801041",
      "id_kabupaten": "1801",
      "nama_kecamatan": "SUKAU"
    },
    {
      "id_kecamatan": "1801042",
      "id_kabupaten": "1801",
      "nama_kecamatan": "LUMBOK SEMINUNG"
    },
    {
      "id_kecamatan": "1801050",
      "id_kabupaten": "1801",
      "nama_kecamatan": "BELALAU"
    },
    {
      "id_kecamatan": "1801051",
      "id_kabupaten": "1801",
      "nama_kecamatan": "SEKINCAU"
    },
    {
      "id_kecamatan": "1801052",
      "id_kabupaten": "1801",
      "nama_kecamatan": "SUOH"
    },
    {
      "id_kecamatan": "1801053",
      "id_kabupaten": "1801",
      "nama_kecamatan": "BATU BRAK"
    },
    {
      "id_kecamatan": "1801054",
      "id_kabupaten": "1801",
      "nama_kecamatan": "PAGAR DEWA"
    },
    {
      "id_kecamatan": "1801055",
      "id_kabupaten": "1801",
      "nama_kecamatan": "BATU KETULIS"
    },
    {
      "id_kecamatan": "1801056",
      "id_kabupaten": "1801",
      "nama_kecamatan": "BANDAR NEGERI SUOH"
    },
    {
      "id_kecamatan": "1801060",
      "id_kabupaten": "1801",
      "nama_kecamatan": "SUMBER JAYA"
    },
    {
      "id_kecamatan": "1801061",
      "id_kabupaten": "1801",
      "nama_kecamatan": "WAY TENONG"
    },
    {
      "id_kecamatan": "1801062",
      "id_kabupaten": "1801",
      "nama_kecamatan": "GEDUNG SURIAN"
    },
    {
      "id_kecamatan": "1801063",
      "id_kabupaten": "1801",
      "nama_kecamatan": "KEBUN TEBU"
    },
    {
      "id_kecamatan": "1801064",
      "id_kabupaten": "1801",
      "nama_kecamatan": "AIR HITAM"
    },
    {
      "id_kecamatan": "1802010",
      "id_kabupaten": "1802",
      "nama_kecamatan": "WONOSOBO"
    },
    {
      "id_kecamatan": "1802011",
      "id_kabupaten": "1802",
      "nama_kecamatan": "SEMAKA"
    },
    {
      "id_kecamatan": "1802012",
      "id_kabupaten": "1802",
      "nama_kecamatan": "BANDAR NEGERI SEMUONG"
    },
    {
      "id_kecamatan": "1802020",
      "id_kabupaten": "1802",
      "nama_kecamatan": "KOTA AGUNG"
    },
    {
      "id_kecamatan": "1802021",
      "id_kabupaten": "1802",
      "nama_kecamatan": "PEMATANG SAWA"
    },
    {
      "id_kecamatan": "1802022",
      "id_kabupaten": "1802",
      "nama_kecamatan": "KOTA AGUNG TIMUR"
    },
    {
      "id_kecamatan": "1802023",
      "id_kabupaten": "1802",
      "nama_kecamatan": "KOTA AGUNG BARAT"
    },
    {
      "id_kecamatan": "1802030",
      "id_kabupaten": "1802",
      "nama_kecamatan": "PULAU PANGGUNG"
    },
    {
      "id_kecamatan": "1802031",
      "id_kabupaten": "1802",
      "nama_kecamatan": "ULUBELU"
    },
    {
      "id_kecamatan": "1802032",
      "id_kabupaten": "1802",
      "nama_kecamatan": "AIR NANINGAN"
    },
    {
      "id_kecamatan": "1802040",
      "id_kabupaten": "1802",
      "nama_kecamatan": "TALANG PADANG"
    },
    {
      "id_kecamatan": "1802041",
      "id_kabupaten": "1802",
      "nama_kecamatan": "SUMBEREJO"
    },
    {
      "id_kecamatan": "1802042",
      "id_kabupaten": "1802",
      "nama_kecamatan": "GISTING"
    },
    {
      "id_kecamatan": "1802043",
      "id_kabupaten": "1802",
      "nama_kecamatan": "GUNUNG ALIP"
    },
    {
      "id_kecamatan": "1802050",
      "id_kabupaten": "1802",
      "nama_kecamatan": "PUGUNG"
    },
    {
      "id_kecamatan": "1802101",
      "id_kabupaten": "1802",
      "nama_kecamatan": "BULOK"
    },
    {
      "id_kecamatan": "1802110",
      "id_kabupaten": "1802",
      "nama_kecamatan": "CUKUH BALAK"
    },
    {
      "id_kecamatan": "1802111",
      "id_kabupaten": "1802",
      "nama_kecamatan": "KELUMBAYAN"
    },
    {
      "id_kecamatan": "1802112",
      "id_kabupaten": "1802",
      "nama_kecamatan": "LIMAU"
    },
    {
      "id_kecamatan": "1802113",
      "id_kabupaten": "1802",
      "nama_kecamatan": "KELUMBAYAN BARAT"
    },
    {
      "id_kecamatan": "1803060",
      "id_kabupaten": "1803",
      "nama_kecamatan": "NATAR"
    },
    {
      "id_kecamatan": "1803070",
      "id_kabupaten": "1803",
      "nama_kecamatan": "JATI AGUNG"
    },
    {
      "id_kecamatan": "1803080",
      "id_kabupaten": "1803",
      "nama_kecamatan": "TANJUNG BINTANG"
    },
    {
      "id_kecamatan": "1803081",
      "id_kabupaten": "1803",
      "nama_kecamatan": "TANJUNG SARI"
    },
    {
      "id_kecamatan": "1803090",
      "id_kabupaten": "1803",
      "nama_kecamatan": "KATIBUNG"
    },
    {
      "id_kecamatan": "1803091",
      "id_kabupaten": "1803",
      "nama_kecamatan": "MERBAU MATARAM"
    },
    {
      "id_kecamatan": "1803092",
      "id_kabupaten": "1803",
      "nama_kecamatan": "WAY SULAN"
    },
    {
      "id_kecamatan": "1803100",
      "id_kabupaten": "1803",
      "nama_kecamatan": "SIDOMULYO"
    },
    {
      "id_kecamatan": "1803101",
      "id_kabupaten": "1803",
      "nama_kecamatan": "CANDIPURO"
    },
    {
      "id_kecamatan": "1803102",
      "id_kabupaten": "1803",
      "nama_kecamatan": "WAY PANJI"
    },
    {
      "id_kecamatan": "1803110",
      "id_kabupaten": "1803",
      "nama_kecamatan": "KALIANDA"
    },
    {
      "id_kecamatan": "1803111",
      "id_kabupaten": "1803",
      "nama_kecamatan": "RAJABASA"
    },
    {
      "id_kecamatan": "1803120",
      "id_kabupaten": "1803",
      "nama_kecamatan": "PALAS"
    },
    {
      "id_kecamatan": "1803121",
      "id_kabupaten": "1803",
      "nama_kecamatan": "SRAGI"
    },
    {
      "id_kecamatan": "1803130",
      "id_kabupaten": "1803",
      "nama_kecamatan": "PENENGAHAN"
    },
    {
      "id_kecamatan": "1803131",
      "id_kabupaten": "1803",
      "nama_kecamatan": "KETAPANG"
    },
    {
      "id_kecamatan": "1803132",
      "id_kabupaten": "1803",
      "nama_kecamatan": "BAKAUHENI"
    },
    {
      "id_kecamatan": "1804010",
      "id_kabupaten": "1804",
      "nama_kecamatan": "METRO KIBANG"
    },
    {
      "id_kecamatan": "1804020",
      "id_kabupaten": "1804",
      "nama_kecamatan": "BATANGHARI"
    },
    {
      "id_kecamatan": "1804030",
      "id_kabupaten": "1804",
      "nama_kecamatan": "SEKAMPUNG"
    },
    {
      "id_kecamatan": "1804040",
      "id_kabupaten": "1804",
      "nama_kecamatan": "MARGATIGA"
    },
    {
      "id_kecamatan": "1804050",
      "id_kabupaten": "1804",
      "nama_kecamatan": "SEKAMPUNG UDIK"
    },
    {
      "id_kecamatan": "1804060",
      "id_kabupaten": "1804",
      "nama_kecamatan": "JABUNG"
    },
    {
      "id_kecamatan": "1804061",
      "id_kabupaten": "1804",
      "nama_kecamatan": "PASIR SAKTI"
    },
    {
      "id_kecamatan": "1804062",
      "id_kabupaten": "1804",
      "nama_kecamatan": "WAWAY KARYA"
    },
    {
      "id_kecamatan": "1804063",
      "id_kabupaten": "1804",
      "nama_kecamatan": "MARGA SEKAMPUNG"
    },
    {
      "id_kecamatan": "1804070",
      "id_kabupaten": "1804",
      "nama_kecamatan": "LABUHAN MARINGGAI"
    },
    {
      "id_kecamatan": "1804071",
      "id_kabupaten": "1804",
      "nama_kecamatan": "MATARAM BARU"
    },
    {
      "id_kecamatan": "1804072",
      "id_kabupaten": "1804",
      "nama_kecamatan": "BANDAR SRIBAWONO"
    },
    {
      "id_kecamatan": "1804073",
      "id_kabupaten": "1804",
      "nama_kecamatan": "MELINTING"
    },
    {
      "id_kecamatan": "1804074",
      "id_kabupaten": "1804",
      "nama_kecamatan": "GUNUNG PELINDUNG"
    },
    {
      "id_kecamatan": "1804080",
      "id_kabupaten": "1804",
      "nama_kecamatan": "WAY JEPARA"
    },
    {
      "id_kecamatan": "1804081",
      "id_kabupaten": "1804",
      "nama_kecamatan": "BRAJA SLEBAH"
    },
    {
      "id_kecamatan": "1804082",
      "id_kabupaten": "1804",
      "nama_kecamatan": "LABUHAN RATU"
    },
    {
      "id_kecamatan": "1804090",
      "id_kabupaten": "1804",
      "nama_kecamatan": "SUKADANA"
    },
    {
      "id_kecamatan": "1804091",
      "id_kabupaten": "1804",
      "nama_kecamatan": "BUMI AGUNG"
    },
    {
      "id_kecamatan": "1804092",
      "id_kabupaten": "1804",
      "nama_kecamatan": "BATANGHARI NUBAN"
    },
    {
      "id_kecamatan": "1804100",
      "id_kabupaten": "1804",
      "nama_kecamatan": "PEKALONGAN"
    },
    {
      "id_kecamatan": "1804110",
      "id_kabupaten": "1804",
      "nama_kecamatan": "RAMAN UTARA"
    },
    {
      "id_kecamatan": "1804120",
      "id_kabupaten": "1804",
      "nama_kecamatan": "PURBOLINGGO"
    },
    {
      "id_kecamatan": "1804121",
      "id_kabupaten": "1804",
      "nama_kecamatan": "WAY BUNGUR"
    },
    {
      "id_kecamatan": "1805010",
      "id_kabupaten": "1805",
      "nama_kecamatan": "PADANG RATU"
    },
    {
      "id_kecamatan": "1805011",
      "id_kabupaten": "1805",
      "nama_kecamatan": "SELAGAI LINGGA"
    },
    {
      "id_kecamatan": "1805012",
      "id_kabupaten": "1805",
      "nama_kecamatan": "PUBIAN"
    },
    {
      "id_kecamatan": "1805013",
      "id_kabupaten": "1805",
      "nama_kecamatan": "ANAK TUHA"
    },
    {
      "id_kecamatan": "1805014",
      "id_kabupaten": "1805",
      "nama_kecamatan": "ANAK RATU AJI"
    },
    {
      "id_kecamatan": "1805020",
      "id_kabupaten": "1805",
      "nama_kecamatan": "KALIREJO"
    },
    {
      "id_kecamatan": "1805021",
      "id_kabupaten": "1805",
      "nama_kecamatan": "SENDANG AGUNG"
    },
    {
      "id_kecamatan": "1805030",
      "id_kabupaten": "1805",
      "nama_kecamatan": "BANGUNREJO"
    },
    {
      "id_kecamatan": "1805040",
      "id_kabupaten": "1805",
      "nama_kecamatan": "GUNUNG SUGIH"
    },
    {
      "id_kecamatan": "1805041",
      "id_kabupaten": "1805",
      "nama_kecamatan": "BEKRI"
    },
    {
      "id_kecamatan": "1805042",
      "id_kabupaten": "1805",
      "nama_kecamatan": "BUMI RATU NUBAN"
    },
    {
      "id_kecamatan": "1805050",
      "id_kabupaten": "1805",
      "nama_kecamatan": "TRIMURJO"
    },
    {
      "id_kecamatan": "1805060",
      "id_kabupaten": "1805",
      "nama_kecamatan": "PUNGGUR"
    },
    {
      "id_kecamatan": "1805061",
      "id_kabupaten": "1805",
      "nama_kecamatan": "KOTA GAJAH"
    },
    {
      "id_kecamatan": "1805070",
      "id_kabupaten": "1805",
      "nama_kecamatan": "SEPUTIH RAMAN"
    },
    {
      "id_kecamatan": "1805080",
      "id_kabupaten": "1805",
      "nama_kecamatan": "TERBANGGI BESAR"
    },
    {
      "id_kecamatan": "1805081",
      "id_kabupaten": "1805",
      "nama_kecamatan": "SEPUTIH AGUNG"
    },
    {
      "id_kecamatan": "1805082",
      "id_kabupaten": "1805",
      "nama_kecamatan": "WAY PENGUBUAN"
    },
    {
      "id_kecamatan": "1805090",
      "id_kabupaten": "1805",
      "nama_kecamatan": "TERUSAN NUNYAI"
    },
    {
      "id_kecamatan": "1805100",
      "id_kabupaten": "1805",
      "nama_kecamatan": "SEPUTIH MATARAM"
    },
    {
      "id_kecamatan": "1805101",
      "id_kabupaten": "1805",
      "nama_kecamatan": "BANDAR MATARAM"
    },
    {
      "id_kecamatan": "1805110",
      "id_kabupaten": "1805",
      "nama_kecamatan": "SEPUTIH BANYAK"
    },
    {
      "id_kecamatan": "1805111",
      "id_kabupaten": "1805",
      "nama_kecamatan": "WAY SEPUTIH"
    },
    {
      "id_kecamatan": "1805120",
      "id_kabupaten": "1805",
      "nama_kecamatan": "RUMBIA"
    },
    {
      "id_kecamatan": "1805121",
      "id_kabupaten": "1805",
      "nama_kecamatan": "BUMI NABUNG"
    },
    {
      "id_kecamatan": "1805122",
      "id_kabupaten": "1805",
      "nama_kecamatan": "PUTRA RUMBIA"
    },
    {
      "id_kecamatan": "1805130",
      "id_kabupaten": "1805",
      "nama_kecamatan": "SEPUTIH SURABAYA"
    },
    {
      "id_kecamatan": "1805131",
      "id_kabupaten": "1805",
      "nama_kecamatan": "BANDAR SURABAYA"
    },
    {
      "id_kecamatan": "1806010",
      "id_kabupaten": "1806",
      "nama_kecamatan": "BUKIT KEMUNING"
    },
    {
      "id_kecamatan": "1806011",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG TINGGI"
    },
    {
      "id_kecamatan": "1806020",
      "id_kabupaten": "1806",
      "nama_kecamatan": "TANJUNG RAJA"
    },
    {
      "id_kecamatan": "1806030",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG BARAT"
    },
    {
      "id_kecamatan": "1806031",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG TENGAH"
    },
    {
      "id_kecamatan": "1806032",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG  KUNANG"
    },
    {
      "id_kecamatan": "1806033",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG PEKURUN"
    },
    {
      "id_kecamatan": "1806040",
      "id_kabupaten": "1806",
      "nama_kecamatan": "KOTABUMI"
    },
    {
      "id_kecamatan": "1806041",
      "id_kabupaten": "1806",
      "nama_kecamatan": "KOTABUMI UTARA"
    },
    {
      "id_kecamatan": "1806042",
      "id_kabupaten": "1806",
      "nama_kecamatan": "KOTABUMI SELATAN"
    },
    {
      "id_kecamatan": "1806050",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG SELATAN"
    },
    {
      "id_kecamatan": "1806051",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG SEMULI"
    },
    {
      "id_kecamatan": "1806052",
      "id_kabupaten": "1806",
      "nama_kecamatan": "BLAMBANGAN PAGAR"
    },
    {
      "id_kecamatan": "1806060",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG TIMUR"
    },
    {
      "id_kecamatan": "1806061",
      "id_kabupaten": "1806",
      "nama_kecamatan": "ABUNG SURAKARTA"
    },
    {
      "id_kecamatan": "1806070",
      "id_kabupaten": "1806",
      "nama_kecamatan": "SUNGKAI SELATAN"
    },
    {
      "id_kecamatan": "1806071",
      "id_kabupaten": "1806",
      "nama_kecamatan": "MUARA SUNGKAI"
    },
    {
      "id_kecamatan": "1806072",
      "id_kabupaten": "1806",
      "nama_kecamatan": "BUNGA MAYANG"
    },
    {
      "id_kecamatan": "1806073",
      "id_kabupaten": "1806",
      "nama_kecamatan": "SUNGKAI  BARAT"
    },
    {
      "id_kecamatan": "1806074",
      "id_kabupaten": "1806",
      "nama_kecamatan": "SUNGKAI JAYA"
    },
    {
      "id_kecamatan": "1806080",
      "id_kabupaten": "1806",
      "nama_kecamatan": "SUNGKAI UTARA"
    },
    {
      "id_kecamatan": "1806081",
      "id_kabupaten": "1806",
      "nama_kecamatan": "HULUSUNGKAI"
    },
    {
      "id_kecamatan": "1806082",
      "id_kabupaten": "1806",
      "nama_kecamatan": "SUNGKAI TENGAH"
    },
    {
      "id_kecamatan": "1807010",
      "id_kabupaten": "1807",
      "nama_kecamatan": "BANJIT"
    },
    {
      "id_kecamatan": "1807020",
      "id_kabupaten": "1807",
      "nama_kecamatan": "BARADATU"
    },
    {
      "id_kecamatan": "1807021",
      "id_kabupaten": "1807",
      "nama_kecamatan": "GUNUNG LABUHAN"
    },
    {
      "id_kecamatan": "1807030",
      "id_kabupaten": "1807",
      "nama_kecamatan": "KASUI"
    },
    {
      "id_kecamatan": "1807031",
      "id_kabupaten": "1807",
      "nama_kecamatan": "REBANG TANGKAS"
    },
    {
      "id_kecamatan": "1807040",
      "id_kabupaten": "1807",
      "nama_kecamatan": "BLAMBANGAN UMPU"
    },
    {
      "id_kecamatan": "1807041",
      "id_kabupaten": "1807",
      "nama_kecamatan": "WAY TUBA"
    },
    {
      "id_kecamatan": "1807042",
      "id_kabupaten": "1807",
      "nama_kecamatan": "NEGERI AGUNG"
    },
    {
      "id_kecamatan": "1807050",
      "id_kabupaten": "1807",
      "nama_kecamatan": "BAHUGA"
    },
    {
      "id_kecamatan": "1807051",
      "id_kabupaten": "1807",
      "nama_kecamatan": "BUAY  BAHUGA"
    },
    {
      "id_kecamatan": "1807052",
      "id_kabupaten": "1807",
      "nama_kecamatan": "BUMI AGUNG"
    },
    {
      "id_kecamatan": "1807060",
      "id_kabupaten": "1807",
      "nama_kecamatan": "PAKUAN RATU"
    },
    {
      "id_kecamatan": "1807061",
      "id_kabupaten": "1807",
      "nama_kecamatan": "NEGARA BATIN"
    },
    {
      "id_kecamatan": "1807062",
      "id_kabupaten": "1807",
      "nama_kecamatan": "NEGERI BESAR"
    },
    {
      "id_kecamatan": "1808030",
      "id_kabupaten": "1808",
      "nama_kecamatan": "BANJAR AGUNG"
    },
    {
      "id_kecamatan": "1808031",
      "id_kabupaten": "1808",
      "nama_kecamatan": "BANJAR MARGO"
    },
    {
      "id_kecamatan": "1808032",
      "id_kabupaten": "1808",
      "nama_kecamatan": "BANJAR BARU"
    },
    {
      "id_kecamatan": "1808040",
      "id_kabupaten": "1808",
      "nama_kecamatan": "GEDUNG AJI"
    },
    {
      "id_kecamatan": "1808041",
      "id_kabupaten": "1808",
      "nama_kecamatan": "PENAWAR AJI"
    },
    {
      "id_kecamatan": "1808042",
      "id_kabupaten": "1808",
      "nama_kecamatan": "MERAKSA AJI"
    },
    {
      "id_kecamatan": "1808050",
      "id_kabupaten": "1808",
      "nama_kecamatan": "MENGGALA"
    },
    {
      "id_kecamatan": "1808051",
      "id_kabupaten": "1808",
      "nama_kecamatan": "PENAWAR TAMA"
    },
    {
      "id_kecamatan": "1808052",
      "id_kabupaten": "1808",
      "nama_kecamatan": "RAWAJITU SELATAN"
    },
    {
      "id_kecamatan": "1808053",
      "id_kabupaten": "1808",
      "nama_kecamatan": "GEDUNG MENENG"
    },
    {
      "id_kecamatan": "1808054",
      "id_kabupaten": "1808",
      "nama_kecamatan": "RAWAJITU TIMUR"
    },
    {
      "id_kecamatan": "1808055",
      "id_kabupaten": "1808",
      "nama_kecamatan": "RAWA PITU"
    },
    {
      "id_kecamatan": "1808056",
      "id_kabupaten": "1808",
      "nama_kecamatan": "GEDUNG AJI BARU"
    },
    {
      "id_kecamatan": "1808057",
      "id_kabupaten": "1808",
      "nama_kecamatan": "DENTE TELADAS"
    },
    {
      "id_kecamatan": "1808058",
      "id_kabupaten": "1808",
      "nama_kecamatan": "MENGGALA TIMUR"
    },
    {
      "id_kecamatan": "1809010",
      "id_kabupaten": "1809",
      "nama_kecamatan": "PUNDUH PIDADA"
    },
    {
      "id_kecamatan": "1809011",
      "id_kabupaten": "1809",
      "nama_kecamatan": "MARGA PUNDUH"
    },
    {
      "id_kecamatan": "1809020",
      "id_kabupaten": "1809",
      "nama_kecamatan": "PADANG CERMIN"
    },
    {
      "id_kecamatan": "1809021",
      "id_kabupaten": "1809",
      "nama_kecamatan": "TELUK PANDAN"
    },
    {
      "id_kecamatan": "1809022",
      "id_kabupaten": "1809",
      "nama_kecamatan": "WAY RATAI"
    },
    {
      "id_kecamatan": "1809030",
      "id_kabupaten": "1809",
      "nama_kecamatan": "KEDONDONG"
    },
    {
      "id_kecamatan": "1809031",
      "id_kabupaten": "1809",
      "nama_kecamatan": "WAY KHILAU"
    },
    {
      "id_kecamatan": "1809040",
      "id_kabupaten": "1809",
      "nama_kecamatan": "WAY LIMA"
    },
    {
      "id_kecamatan": "1809050",
      "id_kabupaten": "1809",
      "nama_kecamatan": "GEDUNG TATAAN"
    },
    {
      "id_kecamatan": "1809060",
      "id_kabupaten": "1809",
      "nama_kecamatan": "NEGERI KATON"
    },
    {
      "id_kecamatan": "1809070",
      "id_kabupaten": "1809",
      "nama_kecamatan": "TEGINENENG"
    },
    {
      "id_kecamatan": "1810010",
      "id_kabupaten": "1810",
      "nama_kecamatan": "PARDASUKA"
    },
    {
      "id_kecamatan": "1810020",
      "id_kabupaten": "1810",
      "nama_kecamatan": "AMBARAWA"
    },
    {
      "id_kecamatan": "1810030",
      "id_kabupaten": "1810",
      "nama_kecamatan": "PAGELARAN"
    },
    {
      "id_kecamatan": "1810031",
      "id_kabupaten": "1810",
      "nama_kecamatan": "PAGELARAN UTARA"
    },
    {
      "id_kecamatan": "1810040",
      "id_kabupaten": "1810",
      "nama_kecamatan": "PRINGSEWU"
    },
    {
      "id_kecamatan": "1810050",
      "id_kabupaten": "1810",
      "nama_kecamatan": "GADING REJO"
    },
    {
      "id_kecamatan": "1810060",
      "id_kabupaten": "1810",
      "nama_kecamatan": "SUKOHARJO"
    },
    {
      "id_kecamatan": "1810070",
      "id_kabupaten": "1810",
      "nama_kecamatan": "BANYUMAS"
    },
    {
      "id_kecamatan": "1810080",
      "id_kabupaten": "1810",
      "nama_kecamatan": "ADI LUWIH"
    },
    {
      "id_kecamatan": "1811010",
      "id_kabupaten": "1811",
      "nama_kecamatan": "WAY SERDANG"
    },
    {
      "id_kecamatan": "1811020",
      "id_kabupaten": "1811",
      "nama_kecamatan": "SIMPANG PEMATANG"
    },
    {
      "id_kecamatan": "1811030",
      "id_kabupaten": "1811",
      "nama_kecamatan": "PANCA JAYA"
    },
    {
      "id_kecamatan": "1811040",
      "id_kabupaten": "1811",
      "nama_kecamatan": "TANJUNG RAYA"
    },
    {
      "id_kecamatan": "1811050",
      "id_kabupaten": "1811",
      "nama_kecamatan": "MESUJI"
    },
    {
      "id_kecamatan": "1811060",
      "id_kabupaten": "1811",
      "nama_kecamatan": "MESUJI TIMUR"
    },
    {
      "id_kecamatan": "1811070",
      "id_kabupaten": "1811",
      "nama_kecamatan": "RAWAJITU UTARA"
    },
    {
      "id_kecamatan": "1812010",
      "id_kabupaten": "1812",
      "nama_kecamatan": "TULANG BAWANG UDIK"
    },
    {
      "id_kecamatan": "1812020",
      "id_kabupaten": "1812",
      "nama_kecamatan": "TUMI JAJAR"
    },
    {
      "id_kecamatan": "1812030",
      "id_kabupaten": "1812",
      "nama_kecamatan": "TULANG BAWANG TENGAH"
    },
    {
      "id_kecamatan": "1812040",
      "id_kabupaten": "1812",
      "nama_kecamatan": "PAGAR DEWA"
    },
    {
      "id_kecamatan": "1812050",
      "id_kabupaten": "1812",
      "nama_kecamatan": "LAMBU KIBANG"
    },
    {
      "id_kecamatan": "1812060",
      "id_kabupaten": "1812",
      "nama_kecamatan": "GUNUNG TERANG"
    },
    {
      "id_kecamatan": "1812070",
      "id_kabupaten": "1812",
      "nama_kecamatan": "GUNUNG AGUNG"
    },
    {
      "id_kecamatan": "1812080",
      "id_kabupaten": "1812",
      "nama_kecamatan": "WAY KENANGA"
    },
    {
      "id_kecamatan": "1813010",
      "id_kabupaten": "1813",
      "nama_kecamatan": "LEMONG"
    },
    {
      "id_kecamatan": "1813020",
      "id_kabupaten": "1813",
      "nama_kecamatan": "PESISIR UTARA"
    },
    {
      "id_kecamatan": "1813030",
      "id_kabupaten": "1813",
      "nama_kecamatan": "PULAU PISANG"
    },
    {
      "id_kecamatan": "1813040",
      "id_kabupaten": "1813",
      "nama_kecamatan": "KARYA PENGGAWA"
    },
    {
      "id_kecamatan": "1813050",
      "id_kabupaten": "1813",
      "nama_kecamatan": "WAY KRUI"
    },
    {
      "id_kecamatan": "1813060",
      "id_kabupaten": "1813",
      "nama_kecamatan": "PESISIR TENGAH"
    },
    {
      "id_kecamatan": "1813070",
      "id_kabupaten": "1813",
      "nama_kecamatan": "KRUI SELATAN"
    },
    {
      "id_kecamatan": "1813080",
      "id_kabupaten": "1813",
      "nama_kecamatan": "PESISIR SELATAN"
    },
    {
      "id_kecamatan": "1813090",
      "id_kabupaten": "1813",
      "nama_kecamatan": "NGAMBUR"
    },
    {
      "id_kecamatan": "1813100",
      "id_kabupaten": "1813",
      "nama_kecamatan": "BENGKUNAT"
    },
    {
      "id_kecamatan": "1813110",
      "id_kabupaten": "1813",
      "nama_kecamatan": "BENGKUNAT BELIMBING"
    },
    {
      "id_kecamatan": "1871010",
      "id_kabupaten": "1871",
      "nama_kecamatan": "TELUK BETUNG BARAT"
    },
    {
      "id_kecamatan": "1871011",
      "id_kabupaten": "1871",
      "nama_kecamatan": "TELUKBETUNG TIMUR"
    },
    {
      "id_kecamatan": "1871020",
      "id_kabupaten": "1871",
      "nama_kecamatan": "TELUK BETUNG SELATAN"
    },
    {
      "id_kecamatan": "1871021",
      "id_kabupaten": "1871",
      "nama_kecamatan": "BUMI WARAS"
    },
    {
      "id_kecamatan": "1871030",
      "id_kabupaten": "1871",
      "nama_kecamatan": "PANJANG"
    },
    {
      "id_kecamatan": "1871040",
      "id_kabupaten": "1871",
      "nama_kecamatan": "TANJUNG KARANG TIMUR"
    },
    {
      "id_kecamatan": "1871041",
      "id_kabupaten": "1871",
      "nama_kecamatan": "KEDAMAIAN"
    },
    {
      "id_kecamatan": "1871050",
      "id_kabupaten": "1871",
      "nama_kecamatan": "TELUK BETUNG UTARA"
    },
    {
      "id_kecamatan": "1871060",
      "id_kabupaten": "1871",
      "nama_kecamatan": "TANJUNG KARANG PUSAT"
    },
    {
      "id_kecamatan": "1871061",
      "id_kabupaten": "1871",
      "nama_kecamatan": "ENGGAL"
    },
    {
      "id_kecamatan": "1871070",
      "id_kabupaten": "1871",
      "nama_kecamatan": "TANJUNG KARANG BARAT"
    },
    {
      "id_kecamatan": "1871071",
      "id_kabupaten": "1871",
      "nama_kecamatan": "KEMILING"
    },
    {
      "id_kecamatan": "1871072",
      "id_kabupaten": "1871",
      "nama_kecamatan": "LANGKAPURA"
    },
    {
      "id_kecamatan": "1871080",
      "id_kabupaten": "1871",
      "nama_kecamatan": "KEDATON"
    },
    {
      "id_kecamatan": "1871081",
      "id_kabupaten": "1871",
      "nama_kecamatan": "RAJABASA"
    },
    {
      "id_kecamatan": "1871082",
      "id_kabupaten": "1871",
      "nama_kecamatan": "TANJUNG SENANG"
    },
    {
      "id_kecamatan": "1871083",
      "id_kabupaten": "1871",
      "nama_kecamatan": "LABUHAN RATU"
    },
    {
      "id_kecamatan": "1871090",
      "id_kabupaten": "1871",
      "nama_kecamatan": "SUKARAME"
    },
    {
      "id_kecamatan": "1871091",
      "id_kabupaten": "1871",
      "nama_kecamatan": "SUKABUMI"
    },
    {
      "id_kecamatan": "1871092",
      "id_kabupaten": "1871",
      "nama_kecamatan": "WAY HALIM"
    },
    {
      "id_kecamatan": "1872011",
      "id_kabupaten": "1872",
      "nama_kecamatan": "METRO SELATAN"
    },
    {
      "id_kecamatan": "1872012",
      "id_kabupaten": "1872",
      "nama_kecamatan": "METRO BARAT"
    },
    {
      "id_kecamatan": "1872021",
      "id_kabupaten": "1872",
      "nama_kecamatan": "METRO TIMUR"
    },
    {
      "id_kecamatan": "1872022",
      "id_kabupaten": "1872",
      "nama_kecamatan": "METRO PUSAT"
    },
    {
      "id_kecamatan": "1872023",
      "id_kabupaten": "1872",
      "nama_kecamatan": "METRO UTARA"
    },
    {
      "id_kecamatan": "1901070",
      "id_kabupaten": "1901",
      "nama_kecamatan": "MENDO BARAT"
    },
    {
      "id_kecamatan": "1901080",
      "id_kabupaten": "1901",
      "nama_kecamatan": "MERAWANG"
    },
    {
      "id_kecamatan": "1901081",
      "id_kabupaten": "1901",
      "nama_kecamatan": "PUDING BESAR"
    },
    {
      "id_kecamatan": "1901090",
      "id_kabupaten": "1901",
      "nama_kecamatan": "SUNGAI LIAT"
    },
    {
      "id_kecamatan": "1901091",
      "id_kabupaten": "1901",
      "nama_kecamatan": "PEMALI"
    },
    {
      "id_kecamatan": "1901092",
      "id_kabupaten": "1901",
      "nama_kecamatan": "BAKAM"
    },
    {
      "id_kecamatan": "1901130",
      "id_kabupaten": "1901",
      "nama_kecamatan": "BELINYU"
    },
    {
      "id_kecamatan": "1901131",
      "id_kabupaten": "1901",
      "nama_kecamatan": "RIAU SILIP"
    },
    {
      "id_kecamatan": "1902010",
      "id_kabupaten": "1902",
      "nama_kecamatan": "MEMBALONG"
    },
    {
      "id_kecamatan": "1902060",
      "id_kabupaten": "1902",
      "nama_kecamatan": "TANJUNG PANDAN"
    },
    {
      "id_kecamatan": "1902061",
      "id_kabupaten": "1902",
      "nama_kecamatan": "BADAU"
    },
    {
      "id_kecamatan": "1902062",
      "id_kabupaten": "1902",
      "nama_kecamatan": "SIJUK"
    },
    {
      "id_kecamatan": "1902063",
      "id_kabupaten": "1902",
      "nama_kecamatan": "SELAT NASIK"
    },
    {
      "id_kecamatan": "1903010",
      "id_kabupaten": "1903",
      "nama_kecamatan": "KELAPA"
    },
    {
      "id_kecamatan": "1903020",
      "id_kabupaten": "1903",
      "nama_kecamatan": "TEMPILANG"
    },
    {
      "id_kecamatan": "1903030",
      "id_kabupaten": "1903",
      "nama_kecamatan": "MENTOK"
    },
    {
      "id_kecamatan": "1903040",
      "id_kabupaten": "1903",
      "nama_kecamatan": "SIMPANG TERITIP"
    },
    {
      "id_kecamatan": "1903050",
      "id_kabupaten": "1903",
      "nama_kecamatan": "JEBUS"
    },
    {
      "id_kecamatan": "1903051",
      "id_kabupaten": "1903",
      "nama_kecamatan": "PARITTIGA"
    },
    {
      "id_kecamatan": "1904010",
      "id_kabupaten": "1904",
      "nama_kecamatan": "KOBA"
    },
    {
      "id_kecamatan": "1904011",
      "id_kabupaten": "1904",
      "nama_kecamatan": "LUBUK BESAR"
    },
    {
      "id_kecamatan": "1904020",
      "id_kabupaten": "1904",
      "nama_kecamatan": "PANGKALAN BARU"
    },
    {
      "id_kecamatan": "1904021",
      "id_kabupaten": "1904",
      "nama_kecamatan": "NAMANG"
    },
    {
      "id_kecamatan": "1904030",
      "id_kabupaten": "1904",
      "nama_kecamatan": "SUNGAI SELAN"
    },
    {
      "id_kecamatan": "1904040",
      "id_kabupaten": "1904",
      "nama_kecamatan": "SIMPANG KATIS"
    },
    {
      "id_kecamatan": "1905010",
      "id_kabupaten": "1905",
      "nama_kecamatan": "PAYUNG"
    },
    {
      "id_kecamatan": "1905011",
      "id_kabupaten": "1905",
      "nama_kecamatan": "PULAU BESAR"
    },
    {
      "id_kecamatan": "1905020",
      "id_kabupaten": "1905",
      "nama_kecamatan": "SIMPANG RIMBA"
    },
    {
      "id_kecamatan": "1905030",
      "id_kabupaten": "1905",
      "nama_kecamatan": "TOBOALI"
    },
    {
      "id_kecamatan": "1905031",
      "id_kabupaten": "1905",
      "nama_kecamatan": "TUKAK SADAI"
    },
    {
      "id_kecamatan": "1905040",
      "id_kabupaten": "1905",
      "nama_kecamatan": "AIR GEGAS"
    },
    {
      "id_kecamatan": "1905050",
      "id_kabupaten": "1905",
      "nama_kecamatan": "LEPAR PONGOK"
    },
    {
      "id_kecamatan": "1905051",
      "id_kabupaten": "1905",
      "nama_kecamatan": "KEPULAUAN PONGOK"
    },
    {
      "id_kecamatan": "1906010",
      "id_kabupaten": "1906",
      "nama_kecamatan": "DENDANG"
    },
    {
      "id_kecamatan": "1906011",
      "id_kabupaten": "1906",
      "nama_kecamatan": "SIMPANG PESAK"
    },
    {
      "id_kecamatan": "1906020",
      "id_kabupaten": "1906",
      "nama_kecamatan": "GANTUNG"
    },
    {
      "id_kecamatan": "1906021",
      "id_kabupaten": "1906",
      "nama_kecamatan": "SIMPANG RENGGIANG"
    },
    {
      "id_kecamatan": "1906030",
      "id_kabupaten": "1906",
      "nama_kecamatan": "MANGGAR"
    },
    {
      "id_kecamatan": "1906031",
      "id_kabupaten": "1906",
      "nama_kecamatan": "DAMAR"
    },
    {
      "id_kecamatan": "1906040",
      "id_kabupaten": "1906",
      "nama_kecamatan": "KELAPA KAMPIT"
    },
    {
      "id_kecamatan": "1971010",
      "id_kabupaten": "1971",
      "nama_kecamatan": "RANGKUI"
    },
    {
      "id_kecamatan": "1971020",
      "id_kabupaten": "1971",
      "nama_kecamatan": "BUKIT INTAN"
    },
    {
      "id_kecamatan": "1971021",
      "id_kabupaten": "1971",
      "nama_kecamatan": "GIRIMAYA"
    },
    {
      "id_kecamatan": "1971030",
      "id_kabupaten": "1971",
      "nama_kecamatan": "PANGKAL BALAM"
    },
    {
      "id_kecamatan": "1971031",
      "id_kabupaten": "1971",
      "nama_kecamatan": "GABEK"
    },
    {
      "id_kecamatan": "1971040",
      "id_kabupaten": "1971",
      "nama_kecamatan": "TAMAN SARI"
    },
    {
      "id_kecamatan": "1971041",
      "id_kabupaten": "1971",
      "nama_kecamatan": "GERUNGGANG"
    },
    {
      "id_kecamatan": "2101010",
      "id_kabupaten": "2101",
      "nama_kecamatan": "MORO"
    },
    {
      "id_kecamatan": "2101011",
      "id_kabupaten": "2101",
      "nama_kecamatan": "DURAI"
    },
    {
      "id_kecamatan": "2101020",
      "id_kabupaten": "2101",
      "nama_kecamatan": "KUNDUR"
    },
    {
      "id_kecamatan": "2101021",
      "id_kabupaten": "2101",
      "nama_kecamatan": "KUNDUR UTARA"
    },
    {
      "id_kecamatan": "2101022",
      "id_kabupaten": "2101",
      "nama_kecamatan": "KUNDUR BARAT"
    },
    {
      "id_kecamatan": "2101023",
      "id_kabupaten": "2101",
      "nama_kecamatan": "UNGAR"
    },
    {
      "id_kecamatan": "2101024",
      "id_kabupaten": "2101",
      "nama_kecamatan": "BELAT"
    },
    {
      "id_kecamatan": "2101030",
      "id_kabupaten": "2101",
      "nama_kecamatan": "KARIMUN"
    },
    {
      "id_kecamatan": "2101031",
      "id_kabupaten": "2101",
      "nama_kecamatan": "BURU"
    },
    {
      "id_kecamatan": "2101032",
      "id_kabupaten": "2101",
      "nama_kecamatan": "MERAL"
    },
    {
      "id_kecamatan": "2101033",
      "id_kabupaten": "2101",
      "nama_kecamatan": "TEBING"
    },
    {
      "id_kecamatan": "2101034",
      "id_kabupaten": "2101",
      "nama_kecamatan": "MERAL BARAT"
    },
    {
      "id_kecamatan": "2102040",
      "id_kabupaten": "2102",
      "nama_kecamatan": "TELUK BINTAN"
    },
    {
      "id_kecamatan": "2102050",
      "id_kabupaten": "2102",
      "nama_kecamatan": "BINTAN UTARA"
    },
    {
      "id_kecamatan": "2102051",
      "id_kabupaten": "2102",
      "nama_kecamatan": "TELUK SEBONG"
    },
    {
      "id_kecamatan": "2102052",
      "id_kabupaten": "2102",
      "nama_kecamatan": "SERI KUALA LOBAM"
    },
    {
      "id_kecamatan": "2102060",
      "id_kabupaten": "2102",
      "nama_kecamatan": "BINTAN TIMUR"
    },
    {
      "id_kecamatan": "2102061",
      "id_kabupaten": "2102",
      "nama_kecamatan": "GUNUNG KIJANG"
    },
    {
      "id_kecamatan": "2102062",
      "id_kabupaten": "2102",
      "nama_kecamatan": "MANTANG"
    },
    {
      "id_kecamatan": "2102063",
      "id_kabupaten": "2102",
      "nama_kecamatan": "BINTAN PESISIR"
    },
    {
      "id_kecamatan": "2102064",
      "id_kabupaten": "2102",
      "nama_kecamatan": "TOAPAYA"
    },
    {
      "id_kecamatan": "2102070",
      "id_kabupaten": "2102",
      "nama_kecamatan": "TAMBELAN"
    },
    {
      "id_kecamatan": "2103030",
      "id_kabupaten": "2103",
      "nama_kecamatan": "MIDAI"
    },
    {
      "id_kecamatan": "2103040",
      "id_kabupaten": "2103",
      "nama_kecamatan": "BUNGURAN BARAT"
    },
    {
      "id_kecamatan": "2103041",
      "id_kabupaten": "2103",
      "nama_kecamatan": "BUNGURAN UTARA"
    },
    {
      "id_kecamatan": "2103042",
      "id_kabupaten": "2103",
      "nama_kecamatan": "PULAU LAUT"
    },
    {
      "id_kecamatan": "2103043",
      "id_kabupaten": "2103",
      "nama_kecamatan": "PULAU TIGA"
    },
    {
      "id_kecamatan": "2103050",
      "id_kabupaten": "2103",
      "nama_kecamatan": "BUNGURAN TIMUR"
    },
    {
      "id_kecamatan": "2103051",
      "id_kabupaten": "2103",
      "nama_kecamatan": "BUNGURAN TIMUR LAUT"
    },
    {
      "id_kecamatan": "2103052",
      "id_kabupaten": "2103",
      "nama_kecamatan": "BUNGURAN TENGAH"
    },
    {
      "id_kecamatan": "2103053",
      "id_kabupaten": "2103",
      "nama_kecamatan": "BUNGURAN SELATAN"
    },
    {
      "id_kecamatan": "2103060",
      "id_kabupaten": "2103",
      "nama_kecamatan": "SERASAN"
    },
    {
      "id_kecamatan": "2103061",
      "id_kabupaten": "2103",
      "nama_kecamatan": "SUBI"
    },
    {
      "id_kecamatan": "2103062",
      "id_kabupaten": "2103",
      "nama_kecamatan": "SERASAN TIMUR"
    },
    {
      "id_kecamatan": "2104010",
      "id_kabupaten": "2104",
      "nama_kecamatan": "SINGKEP BARAT"
    },
    {
      "id_kecamatan": "2104020",
      "id_kabupaten": "2104",
      "nama_kecamatan": "SINGKEP"
    },
    {
      "id_kecamatan": "2104021",
      "id_kabupaten": "2104",
      "nama_kecamatan": "SINGKEP SELATAN"
    },
    {
      "id_kecamatan": "2104022",
      "id_kabupaten": "2104",
      "nama_kecamatan": "SINGKEP PESISIR"
    },
    {
      "id_kecamatan": "2104030",
      "id_kabupaten": "2104",
      "nama_kecamatan": "LINGGA"
    },
    {
      "id_kecamatan": "2104031",
      "id_kabupaten": "2104",
      "nama_kecamatan": "SELAYAR"
    },
    {
      "id_kecamatan": "2104032",
      "id_kabupaten": "2104",
      "nama_kecamatan": "LINGGA TIMUR"
    },
    {
      "id_kecamatan": "2104040",
      "id_kabupaten": "2104",
      "nama_kecamatan": "LINGGA UTARA"
    },
    {
      "id_kecamatan": "2104050",
      "id_kabupaten": "2104",
      "nama_kecamatan": "SENAYANG"
    },
    {
      "id_kecamatan": "2105010",
      "id_kabupaten": "2105",
      "nama_kecamatan": "JEMAJA"
    },
    {
      "id_kecamatan": "2105020",
      "id_kabupaten": "2105",
      "nama_kecamatan": "JEMAJA TIMUR"
    },
    {
      "id_kecamatan": "2105030",
      "id_kabupaten": "2105",
      "nama_kecamatan": "SIANTAN SELATAN"
    },
    {
      "id_kecamatan": "2105040",
      "id_kabupaten": "2105",
      "nama_kecamatan": "SIANTAN"
    },
    {
      "id_kecamatan": "2105050",
      "id_kabupaten": "2105",
      "nama_kecamatan": "SIANTAN TIMUR"
    },
    {
      "id_kecamatan": "2105060",
      "id_kabupaten": "2105",
      "nama_kecamatan": "SIANTAN TENGAH"
    },
    {
      "id_kecamatan": "2105070",
      "id_kabupaten": "2105",
      "nama_kecamatan": "PALMATAK"
    },
    {
      "id_kecamatan": "2171010",
      "id_kabupaten": "2171",
      "nama_kecamatan": "BELAKANG PADANG"
    },
    {
      "id_kecamatan": "2171020",
      "id_kabupaten": "2171",
      "nama_kecamatan": "BULANG"
    },
    {
      "id_kecamatan": "2171030",
      "id_kabupaten": "2171",
      "nama_kecamatan": "GALANG"
    },
    {
      "id_kecamatan": "2171040",
      "id_kabupaten": "2171",
      "nama_kecamatan": "SEI BEDUK"
    },
    {
      "id_kecamatan": "2171041",
      "id_kabupaten": "2171",
      "nama_kecamatan": "SAGULUNG"
    },
    {
      "id_kecamatan": "2171050",
      "id_kabupaten": "2171",
      "nama_kecamatan": "NONGSA"
    },
    {
      "id_kecamatan": "2171051",
      "id_kabupaten": "2171",
      "nama_kecamatan": "BATAM KOTA"
    },
    {
      "id_kecamatan": "2171060",
      "id_kabupaten": "2171",
      "nama_kecamatan": "SEKUPANG"
    },
    {
      "id_kecamatan": "2171061",
      "id_kabupaten": "2171",
      "nama_kecamatan": "BATU AJI"
    },
    {
      "id_kecamatan": "2171070",
      "id_kabupaten": "2171",
      "nama_kecamatan": "LUBUK BAJA"
    },
    {
      "id_kecamatan": "2171080",
      "id_kabupaten": "2171",
      "nama_kecamatan": "BATU AMPAR"
    },
    {
      "id_kecamatan": "2171081",
      "id_kabupaten": "2171",
      "nama_kecamatan": "BENGKONG"
    },
    {
      "id_kecamatan": "2172010",
      "id_kabupaten": "2172",
      "nama_kecamatan": "BUKIT BESTARI"
    },
    {
      "id_kecamatan": "2172020",
      "id_kabupaten": "2172",
      "nama_kecamatan": "TANJUNGPINANG TIMUR"
    },
    {
      "id_kecamatan": "2172030",
      "id_kabupaten": "2172",
      "nama_kecamatan": "TANJUNGPINANG KOTA"
    },
    {
      "id_kecamatan": "2172040",
      "id_kabupaten": "2172",
      "nama_kecamatan": "TANJUNGPINANG BARAT"
    },
    {
      "id_kecamatan": "3101010",
      "id_kabupaten": "3101",
      "nama_kecamatan": "KEPULAUAN SERIBU SELATAN"
    },
    {
      "id_kecamatan": "3101020",
      "id_kabupaten": "3101",
      "nama_kecamatan": "KEPULAUAN SERIBU UTARA"
    },
    {
      "id_kecamatan": "3171010",
      "id_kabupaten": "3171",
      "nama_kecamatan": "JAGAKARSA"
    },
    {
      "id_kecamatan": "3171020",
      "id_kabupaten": "3171",
      "nama_kecamatan": "PASAR MINGGU"
    },
    {
      "id_kecamatan": "3171030",
      "id_kabupaten": "3171",
      "nama_kecamatan": "CILANDAK"
    },
    {
      "id_kecamatan": "3171040",
      "id_kabupaten": "3171",
      "nama_kecamatan": "PESANGGRAHAN"
    },
    {
      "id_kecamatan": "3171050",
      "id_kabupaten": "3171",
      "nama_kecamatan": "KEBAYORAN LAMA"
    },
    {
      "id_kecamatan": "3171060",
      "id_kabupaten": "3171",
      "nama_kecamatan": "KEBAYORAN BARU"
    },
    {
      "id_kecamatan": "3171070",
      "id_kabupaten": "3171",
      "nama_kecamatan": "MAMPANG PRAPATAN"
    },
    {
      "id_kecamatan": "3171080",
      "id_kabupaten": "3171",
      "nama_kecamatan": "PANCORAN"
    },
    {
      "id_kecamatan": "3171090",
      "id_kabupaten": "3171",
      "nama_kecamatan": "TEBET"
    },
    {
      "id_kecamatan": "3171100",
      "id_kabupaten": "3171",
      "nama_kecamatan": "SETIA BUDI"
    },
    {
      "id_kecamatan": "3172010",
      "id_kabupaten": "3172",
      "nama_kecamatan": "PASAR REBO"
    },
    {
      "id_kecamatan": "3172020",
      "id_kabupaten": "3172",
      "nama_kecamatan": "CIRACAS"
    },
    {
      "id_kecamatan": "3172030",
      "id_kabupaten": "3172",
      "nama_kecamatan": "CIPAYUNG"
    },
    {
      "id_kecamatan": "3172040",
      "id_kabupaten": "3172",
      "nama_kecamatan": "MAKASAR"
    },
    {
      "id_kecamatan": "3172050",
      "id_kabupaten": "3172",
      "nama_kecamatan": "KRAMAT JATI"
    },
    {
      "id_kecamatan": "3172060",
      "id_kabupaten": "3172",
      "nama_kecamatan": "JATINEGARA"
    },
    {
      "id_kecamatan": "3172070",
      "id_kabupaten": "3172",
      "nama_kecamatan": "DUREN SAWIT"
    },
    {
      "id_kecamatan": "3172080",
      "id_kabupaten": "3172",
      "nama_kecamatan": "CAKUNG"
    },
    {
      "id_kecamatan": "3172090",
      "id_kabupaten": "3172",
      "nama_kecamatan": "PULO GADUNG"
    },
    {
      "id_kecamatan": "3172100",
      "id_kabupaten": "3172",
      "nama_kecamatan": "MATRAMAN"
    },
    {
      "id_kecamatan": "3173010",
      "id_kabupaten": "3173",
      "nama_kecamatan": "TANAH ABANG"
    },
    {
      "id_kecamatan": "3173020",
      "id_kabupaten": "3173",
      "nama_kecamatan": "MENTENG"
    },
    {
      "id_kecamatan": "3173030",
      "id_kabupaten": "3173",
      "nama_kecamatan": "SENEN"
    },
    {
      "id_kecamatan": "3173040",
      "id_kabupaten": "3173",
      "nama_kecamatan": "JOHAR BARU"
    },
    {
      "id_kecamatan": "3173050",
      "id_kabupaten": "3173",
      "nama_kecamatan": "CEMPAKA PUTIH"
    },
    {
      "id_kecamatan": "3173060",
      "id_kabupaten": "3173",
      "nama_kecamatan": "KEMAYORAN"
    },
    {
      "id_kecamatan": "3173070",
      "id_kabupaten": "3173",
      "nama_kecamatan": "SAWAH BESAR"
    },
    {
      "id_kecamatan": "3173080",
      "id_kabupaten": "3173",
      "nama_kecamatan": "GAMBIR"
    },
    {
      "id_kecamatan": "3174010",
      "id_kabupaten": "3174",
      "nama_kecamatan": "KEMBANGAN"
    },
    {
      "id_kecamatan": "3174020",
      "id_kabupaten": "3174",
      "nama_kecamatan": "KEBON JERUK"
    },
    {
      "id_kecamatan": "3174030",
      "id_kabupaten": "3174",
      "nama_kecamatan": "PALMERAH"
    },
    {
      "id_kecamatan": "3174040",
      "id_kabupaten": "3174",
      "nama_kecamatan": "GROGOL PETAMBURAN"
    },
    {
      "id_kecamatan": "3174050",
      "id_kabupaten": "3174",
      "nama_kecamatan": "TAMBORA"
    },
    {
      "id_kecamatan": "3174060",
      "id_kabupaten": "3174",
      "nama_kecamatan": "TAMAN SARI"
    },
    {
      "id_kecamatan": "3174070",
      "id_kabupaten": "3174",
      "nama_kecamatan": "CENGKARENG"
    },
    {
      "id_kecamatan": "3174080",
      "id_kabupaten": "3174",
      "nama_kecamatan": "KALI DERES"
    },
    {
      "id_kecamatan": "3175010",
      "id_kabupaten": "3175",
      "nama_kecamatan": "PENJARINGAN"
    },
    {
      "id_kecamatan": "3175020",
      "id_kabupaten": "3175",
      "nama_kecamatan": "PADEMANGAN"
    },
    {
      "id_kecamatan": "3175030",
      "id_kabupaten": "3175",
      "nama_kecamatan": "TANJUNG PRIOK"
    },
    {
      "id_kecamatan": "3175040",
      "id_kabupaten": "3175",
      "nama_kecamatan": "KOJA"
    },
    {
      "id_kecamatan": "3175050",
      "id_kabupaten": "3175",
      "nama_kecamatan": "KELAPA GADING"
    },
    {
      "id_kecamatan": "3175060",
      "id_kabupaten": "3175",
      "nama_kecamatan": "CILINCING"
    },
    {
      "id_kecamatan": "3201010",
      "id_kabupaten": "3201",
      "nama_kecamatan": "NANGGUNG"
    },
    {
      "id_kecamatan": "3201020",
      "id_kabupaten": "3201",
      "nama_kecamatan": "LEUWILIANG"
    },
    {
      "id_kecamatan": "3201021",
      "id_kabupaten": "3201",
      "nama_kecamatan": "LEUWISADENG"
    },
    {
      "id_kecamatan": "3201030",
      "id_kabupaten": "3201",
      "nama_kecamatan": "PAMIJAHAN"
    },
    {
      "id_kecamatan": "3201040",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CIBUNGBULANG"
    },
    {
      "id_kecamatan": "3201050",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CIAMPEA"
    },
    {
      "id_kecamatan": "3201051",
      "id_kabupaten": "3201",
      "nama_kecamatan": "TENJOLAYA"
    },
    {
      "id_kecamatan": "3201060",
      "id_kabupaten": "3201",
      "nama_kecamatan": "DRAMAGA"
    },
    {
      "id_kecamatan": "3201070",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CIOMAS"
    },
    {
      "id_kecamatan": "3201071",
      "id_kabupaten": "3201",
      "nama_kecamatan": "TAMANSARI"
    },
    {
      "id_kecamatan": "3201080",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CIJERUK"
    },
    {
      "id_kecamatan": "3201081",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CIGOMBONG"
    },
    {
      "id_kecamatan": "3201090",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CARINGIN"
    },
    {
      "id_kecamatan": "3201100",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CIAWI"
    },
    {
      "id_kecamatan": "3201110",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CISARUA"
    },
    {
      "id_kecamatan": "3201120",
      "id_kabupaten": "3201",
      "nama_kecamatan": "MEGAMENDUNG"
    },
    {
      "id_kecamatan": "3201130",
      "id_kabupaten": "3201",
      "nama_kecamatan": "SUKARAJA"
    },
    {
      "id_kecamatan": "3201140",
      "id_kabupaten": "3201",
      "nama_kecamatan": "BABAKAN MADANG"
    },
    {
      "id_kecamatan": "3201150",
      "id_kabupaten": "3201",
      "nama_kecamatan": "SUKAMAKMUR"
    },
    {
      "id_kecamatan": "3201160",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CARIU"
    },
    {
      "id_kecamatan": "3201161",
      "id_kabupaten": "3201",
      "nama_kecamatan": "TANJUNGSARI"
    },
    {
      "id_kecamatan": "3201170",
      "id_kabupaten": "3201",
      "nama_kecamatan": "JONGGOL"
    },
    {
      "id_kecamatan": "3201180",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CILEUNGSI"
    },
    {
      "id_kecamatan": "3201181",
      "id_kabupaten": "3201",
      "nama_kecamatan": "KELAPA NUNGGAL"
    },
    {
      "id_kecamatan": "3201190",
      "id_kabupaten": "3201",
      "nama_kecamatan": "GUNUNG PUTRI"
    },
    {
      "id_kecamatan": "3201200",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CITEUREUP"
    },
    {
      "id_kecamatan": "3201210",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CIBINONG"
    },
    {
      "id_kecamatan": "3201220",
      "id_kabupaten": "3201",
      "nama_kecamatan": "BOJONG GEDE"
    },
    {
      "id_kecamatan": "3201221",
      "id_kabupaten": "3201",
      "nama_kecamatan": "TAJUR HALANG"
    },
    {
      "id_kecamatan": "3201230",
      "id_kabupaten": "3201",
      "nama_kecamatan": "KEMANG"
    },
    {
      "id_kecamatan": "3201231",
      "id_kabupaten": "3201",
      "nama_kecamatan": "RANCA BUNGUR"
    },
    {
      "id_kecamatan": "3201240",
      "id_kabupaten": "3201",
      "nama_kecamatan": "PARUNG"
    },
    {
      "id_kecamatan": "3201241",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CISEENG"
    },
    {
      "id_kecamatan": "3201250",
      "id_kabupaten": "3201",
      "nama_kecamatan": "GUNUNG SINDUR"
    },
    {
      "id_kecamatan": "3201260",
      "id_kabupaten": "3201",
      "nama_kecamatan": "RUMPIN"
    },
    {
      "id_kecamatan": "3201270",
      "id_kabupaten": "3201",
      "nama_kecamatan": "CIGUDEG"
    },
    {
      "id_kecamatan": "3201271",
      "id_kabupaten": "3201",
      "nama_kecamatan": "SUKAJAYA"
    },
    {
      "id_kecamatan": "3201280",
      "id_kabupaten": "3201",
      "nama_kecamatan": "JASINGA"
    },
    {
      "id_kecamatan": "3201290",
      "id_kabupaten": "3201",
      "nama_kecamatan": "TENJO"
    },
    {
      "id_kecamatan": "3201300",
      "id_kabupaten": "3201",
      "nama_kecamatan": "PARUNG PANJANG"
    },
    {
      "id_kecamatan": "3202010",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIEMAS"
    },
    {
      "id_kecamatan": "3202020",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIRACAP"
    },
    {
      "id_kecamatan": "3202021",
      "id_kabupaten": "3202",
      "nama_kecamatan": "WALURAN"
    },
    {
      "id_kecamatan": "3202030",
      "id_kabupaten": "3202",
      "nama_kecamatan": "SURADE"
    },
    {
      "id_kecamatan": "3202031",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIBITUNG"
    },
    {
      "id_kecamatan": "3202040",
      "id_kabupaten": "3202",
      "nama_kecamatan": "JAMPANG KULON"
    },
    {
      "id_kecamatan": "3202041",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIMANGGU"
    },
    {
      "id_kecamatan": "3202050",
      "id_kabupaten": "3202",
      "nama_kecamatan": "KALI BUNDER"
    },
    {
      "id_kecamatan": "3202060",
      "id_kabupaten": "3202",
      "nama_kecamatan": "TEGAL BULEUD"
    },
    {
      "id_kecamatan": "3202070",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIDOLOG"
    },
    {
      "id_kecamatan": "3202080",
      "id_kabupaten": "3202",
      "nama_kecamatan": "SAGARANTEN"
    },
    {
      "id_kecamatan": "3202081",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIDADAP"
    },
    {
      "id_kecamatan": "3202082",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CURUGKEMBAR"
    },
    {
      "id_kecamatan": "3202090",
      "id_kabupaten": "3202",
      "nama_kecamatan": "PABUARAN"
    },
    {
      "id_kecamatan": "3202100",
      "id_kabupaten": "3202",
      "nama_kecamatan": "LENGKONG"
    },
    {
      "id_kecamatan": "3202110",
      "id_kabupaten": "3202",
      "nama_kecamatan": "PALABUHANRATU"
    },
    {
      "id_kecamatan": "3202111",
      "id_kabupaten": "3202",
      "nama_kecamatan": "SIMPENAN"
    },
    {
      "id_kecamatan": "3202120",
      "id_kabupaten": "3202",
      "nama_kecamatan": "WARUNG KIARA"
    },
    {
      "id_kecamatan": "3202121",
      "id_kabupaten": "3202",
      "nama_kecamatan": "BANTARGADUNG"
    },
    {
      "id_kecamatan": "3202130",
      "id_kabupaten": "3202",
      "nama_kecamatan": "JAMPANG TENGAH"
    },
    {
      "id_kecamatan": "3202131",
      "id_kabupaten": "3202",
      "nama_kecamatan": "PURABAYA"
    },
    {
      "id_kecamatan": "3202140",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIKEMBAR"
    },
    {
      "id_kecamatan": "3202150",
      "id_kabupaten": "3202",
      "nama_kecamatan": "NYALINDUNG"
    },
    {
      "id_kecamatan": "3202160",
      "id_kabupaten": "3202",
      "nama_kecamatan": "GEGER BITUNG"
    },
    {
      "id_kecamatan": "3202170",
      "id_kabupaten": "3202",
      "nama_kecamatan": "SUKARAJA"
    },
    {
      "id_kecamatan": "3202171",
      "id_kabupaten": "3202",
      "nama_kecamatan": "KEBONPEDES"
    },
    {
      "id_kecamatan": "3202172",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIREUNGHAS"
    },
    {
      "id_kecamatan": "3202173",
      "id_kabupaten": "3202",
      "nama_kecamatan": "SUKALARANG"
    },
    {
      "id_kecamatan": "3202180",
      "id_kabupaten": "3202",
      "nama_kecamatan": "SUKABUMI"
    },
    {
      "id_kecamatan": "3202190",
      "id_kabupaten": "3202",
      "nama_kecamatan": "KADUDAMPIT"
    },
    {
      "id_kecamatan": "3202200",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CISAAT"
    },
    {
      "id_kecamatan": "3202201",
      "id_kabupaten": "3202",
      "nama_kecamatan": "GUNUNGGURUH"
    },
    {
      "id_kecamatan": "3202210",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIBADAK"
    },
    {
      "id_kecamatan": "3202211",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CICANTAYAN"
    },
    {
      "id_kecamatan": "3202212",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CARINGIN"
    },
    {
      "id_kecamatan": "3202220",
      "id_kabupaten": "3202",
      "nama_kecamatan": "NAGRAK"
    },
    {
      "id_kecamatan": "3202221",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIAMBAR"
    },
    {
      "id_kecamatan": "3202230",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CICURUG"
    },
    {
      "id_kecamatan": "3202240",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIDAHU"
    },
    {
      "id_kecamatan": "3202250",
      "id_kabupaten": "3202",
      "nama_kecamatan": "PARAKAN SALAK"
    },
    {
      "id_kecamatan": "3202260",
      "id_kabupaten": "3202",
      "nama_kecamatan": "PARUNG KUDA"
    },
    {
      "id_kecamatan": "3202261",
      "id_kabupaten": "3202",
      "nama_kecamatan": "BOJONG GENTENG"
    },
    {
      "id_kecamatan": "3202270",
      "id_kabupaten": "3202",
      "nama_kecamatan": "KALAPA NUNGGAL"
    },
    {
      "id_kecamatan": "3202280",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIKIDANG"
    },
    {
      "id_kecamatan": "3202290",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CISOLOK"
    },
    {
      "id_kecamatan": "3202291",
      "id_kabupaten": "3202",
      "nama_kecamatan": "CIKAKAK"
    },
    {
      "id_kecamatan": "3202300",
      "id_kabupaten": "3202",
      "nama_kecamatan": "KABANDUNGAN"
    },
    {
      "id_kecamatan": "3203010",
      "id_kabupaten": "3203",
      "nama_kecamatan": "AGRABINTA"
    },
    {
      "id_kecamatan": "3203011",
      "id_kabupaten": "3203",
      "nama_kecamatan": "LELES"
    },
    {
      "id_kecamatan": "3203020",
      "id_kabupaten": "3203",
      "nama_kecamatan": "SINDANGBARANG"
    },
    {
      "id_kecamatan": "3203030",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIDAUN"
    },
    {
      "id_kecamatan": "3203040",
      "id_kabupaten": "3203",
      "nama_kecamatan": "NARINGGUL"
    },
    {
      "id_kecamatan": "3203050",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIBINONG"
    },
    {
      "id_kecamatan": "3203051",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIKADU"
    },
    {
      "id_kecamatan": "3203060",
      "id_kabupaten": "3203",
      "nama_kecamatan": "TANGGEUNG"
    },
    {
      "id_kecamatan": "3203061",
      "id_kabupaten": "3203",
      "nama_kecamatan": "PASIRKUDA"
    },
    {
      "id_kecamatan": "3203070",
      "id_kabupaten": "3203",
      "nama_kecamatan": "KADUPANDAK"
    },
    {
      "id_kecamatan": "3203071",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIJATI"
    },
    {
      "id_kecamatan": "3203080",
      "id_kabupaten": "3203",
      "nama_kecamatan": "TAKOKAK"
    },
    {
      "id_kecamatan": "3203090",
      "id_kabupaten": "3203",
      "nama_kecamatan": "SUKANAGARA"
    },
    {
      "id_kecamatan": "3203100",
      "id_kabupaten": "3203",
      "nama_kecamatan": "PAGELARAN"
    },
    {
      "id_kecamatan": "3203110",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CAMPAKA"
    },
    {
      "id_kecamatan": "3203111",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CAMPAKA MULYA"
    },
    {
      "id_kecamatan": "3203120",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIBEBER"
    },
    {
      "id_kecamatan": "3203130",
      "id_kabupaten": "3203",
      "nama_kecamatan": "WARUNGKONDANG"
    },
    {
      "id_kecamatan": "3203131",
      "id_kabupaten": "3203",
      "nama_kecamatan": "GEKBRONG"
    },
    {
      "id_kecamatan": "3203140",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CILAKU"
    },
    {
      "id_kecamatan": "3203150",
      "id_kabupaten": "3203",
      "nama_kecamatan": "SUKALUYU"
    },
    {
      "id_kecamatan": "3203160",
      "id_kabupaten": "3203",
      "nama_kecamatan": "BOJONGPICUNG"
    },
    {
      "id_kecamatan": "3203161",
      "id_kabupaten": "3203",
      "nama_kecamatan": "HAURWANGI"
    },
    {
      "id_kecamatan": "3203170",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIRANJANG"
    },
    {
      "id_kecamatan": "3203180",
      "id_kabupaten": "3203",
      "nama_kecamatan": "MANDE"
    },
    {
      "id_kecamatan": "3203190",
      "id_kabupaten": "3203",
      "nama_kecamatan": "KARANGTENGAH"
    },
    {
      "id_kecamatan": "3203200",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIANJUR"
    },
    {
      "id_kecamatan": "3203210",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CUGENANG"
    },
    {
      "id_kecamatan": "3203220",
      "id_kabupaten": "3203",
      "nama_kecamatan": "PACET"
    },
    {
      "id_kecamatan": "3203221",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIPANAS"
    },
    {
      "id_kecamatan": "3203230",
      "id_kabupaten": "3203",
      "nama_kecamatan": "SUKARESMI"
    },
    {
      "id_kecamatan": "3203240",
      "id_kabupaten": "3203",
      "nama_kecamatan": "CIKALONGKULON"
    },
    {
      "id_kecamatan": "3204010",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CIWIDEY"
    },
    {
      "id_kecamatan": "3204011",
      "id_kabupaten": "3204",
      "nama_kecamatan": "RANCABALI"
    },
    {
      "id_kecamatan": "3204020",
      "id_kabupaten": "3204",
      "nama_kecamatan": "PASIRJAMBU"
    },
    {
      "id_kecamatan": "3204030",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CIMAUNG"
    },
    {
      "id_kecamatan": "3204040",
      "id_kabupaten": "3204",
      "nama_kecamatan": "PANGALENGAN"
    },
    {
      "id_kecamatan": "3204050",
      "id_kabupaten": "3204",
      "nama_kecamatan": "KERTASARI"
    },
    {
      "id_kecamatan": "3204060",
      "id_kabupaten": "3204",
      "nama_kecamatan": "PACET"
    },
    {
      "id_kecamatan": "3204070",
      "id_kabupaten": "3204",
      "nama_kecamatan": "IBUN"
    },
    {
      "id_kecamatan": "3204080",
      "id_kabupaten": "3204",
      "nama_kecamatan": "PASEH"
    },
    {
      "id_kecamatan": "3204090",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CIKANCUNG"
    },
    {
      "id_kecamatan": "3204100",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CICALENGKA"
    },
    {
      "id_kecamatan": "3204101",
      "id_kabupaten": "3204",
      "nama_kecamatan": "NAGREG"
    },
    {
      "id_kecamatan": "3204110",
      "id_kabupaten": "3204",
      "nama_kecamatan": "RANCAEKEK"
    },
    {
      "id_kecamatan": "3204120",
      "id_kabupaten": "3204",
      "nama_kecamatan": "MAJALAYA"
    },
    {
      "id_kecamatan": "3204121",
      "id_kabupaten": "3204",
      "nama_kecamatan": "SOLOKAN JERUK"
    },
    {
      "id_kecamatan": "3204130",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CIPARAY"
    },
    {
      "id_kecamatan": "3204140",
      "id_kabupaten": "3204",
      "nama_kecamatan": "BALEENDAH"
    },
    {
      "id_kecamatan": "3204150",
      "id_kabupaten": "3204",
      "nama_kecamatan": "ARJASARI"
    },
    {
      "id_kecamatan": "3204160",
      "id_kabupaten": "3204",
      "nama_kecamatan": "BANJARAN"
    },
    {
      "id_kecamatan": "3204161",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CANGKUANG"
    },
    {
      "id_kecamatan": "3204170",
      "id_kabupaten": "3204",
      "nama_kecamatan": "PAMEUNGPEUK"
    },
    {
      "id_kecamatan": "3204180",
      "id_kabupaten": "3204",
      "nama_kecamatan": "KATAPANG"
    },
    {
      "id_kecamatan": "3204190",
      "id_kabupaten": "3204",
      "nama_kecamatan": "SOREANG"
    },
    {
      "id_kecamatan": "3204191",
      "id_kabupaten": "3204",
      "nama_kecamatan": "KUTAWARINGIN"
    },
    {
      "id_kecamatan": "3204250",
      "id_kabupaten": "3204",
      "nama_kecamatan": "MARGAASIH"
    },
    {
      "id_kecamatan": "3204260",
      "id_kabupaten": "3204",
      "nama_kecamatan": "MARGAHAYU"
    },
    {
      "id_kecamatan": "3204270",
      "id_kabupaten": "3204",
      "nama_kecamatan": "DAYEUHKOLOT"
    },
    {
      "id_kecamatan": "3204280",
      "id_kabupaten": "3204",
      "nama_kecamatan": "BOJONGSOANG"
    },
    {
      "id_kecamatan": "3204290",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CILEUNYI"
    },
    {
      "id_kecamatan": "3204300",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CILENGKRANG"
    },
    {
      "id_kecamatan": "3204310",
      "id_kabupaten": "3204",
      "nama_kecamatan": "CIMENYAN"
    },
    {
      "id_kecamatan": "3205010",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CISEWU"
    },
    {
      "id_kecamatan": "3205011",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CARINGIN"
    },
    {
      "id_kecamatan": "3205020",
      "id_kabupaten": "3205",
      "nama_kecamatan": "TALEGONG"
    },
    {
      "id_kecamatan": "3205030",
      "id_kabupaten": "3205",
      "nama_kecamatan": "BUNGBULANG"
    },
    {
      "id_kecamatan": "3205031",
      "id_kabupaten": "3205",
      "nama_kecamatan": "MEKARMUKTI"
    },
    {
      "id_kecamatan": "3205040",
      "id_kabupaten": "3205",
      "nama_kecamatan": "PAMULIHAN"
    },
    {
      "id_kecamatan": "3205050",
      "id_kabupaten": "3205",
      "nama_kecamatan": "PAKENJENG"
    },
    {
      "id_kecamatan": "3205060",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CIKELET"
    },
    {
      "id_kecamatan": "3205070",
      "id_kabupaten": "3205",
      "nama_kecamatan": "PAMEUNGPEUK"
    },
    {
      "id_kecamatan": "3205080",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CIBALONG"
    },
    {
      "id_kecamatan": "3205090",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CISOMPET"
    },
    {
      "id_kecamatan": "3205100",
      "id_kabupaten": "3205",
      "nama_kecamatan": "PEUNDEUY"
    },
    {
      "id_kecamatan": "3205110",
      "id_kabupaten": "3205",
      "nama_kecamatan": "SINGAJAYA"
    },
    {
      "id_kecamatan": "3205111",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CIHURIP"
    },
    {
      "id_kecamatan": "3205120",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CIKAJANG"
    },
    {
      "id_kecamatan": "3205130",
      "id_kabupaten": "3205",
      "nama_kecamatan": "BANJARWANGI"
    },
    {
      "id_kecamatan": "3205140",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CILAWU"
    },
    {
      "id_kecamatan": "3205150",
      "id_kabupaten": "3205",
      "nama_kecamatan": "BAYONGBONG"
    },
    {
      "id_kecamatan": "3205151",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CIGEDUG"
    },
    {
      "id_kecamatan": "3205160",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CISURUPAN"
    },
    {
      "id_kecamatan": "3205161",
      "id_kabupaten": "3205",
      "nama_kecamatan": "SUKARESMI"
    },
    {
      "id_kecamatan": "3205170",
      "id_kabupaten": "3205",
      "nama_kecamatan": "SAMARANG"
    },
    {
      "id_kecamatan": "3205171",
      "id_kabupaten": "3205",
      "nama_kecamatan": "PASIRWANGI"
    },
    {
      "id_kecamatan": "3205181",
      "id_kabupaten": "3205",
      "nama_kecamatan": "TAROGONG KIDUL"
    },
    {
      "id_kecamatan": "3205182",
      "id_kabupaten": "3205",
      "nama_kecamatan": "TAROGONG KALER"
    },
    {
      "id_kecamatan": "3205190",
      "id_kabupaten": "3205",
      "nama_kecamatan": "GARUT KOTA"
    },
    {
      "id_kecamatan": "3205200",
      "id_kabupaten": "3205",
      "nama_kecamatan": "KARANGPAWITAN"
    },
    {
      "id_kecamatan": "3205210",
      "id_kabupaten": "3205",
      "nama_kecamatan": "WANARAJA"
    },
    {
      "id_kecamatan": "3205211",
      "id_kabupaten": "3205",
      "nama_kecamatan": "SUCINARAJA"
    },
    {
      "id_kecamatan": "3205212",
      "id_kabupaten": "3205",
      "nama_kecamatan": "PANGATIKAN"
    },
    {
      "id_kecamatan": "3205220",
      "id_kabupaten": "3205",
      "nama_kecamatan": "SUKAWENING"
    },
    {
      "id_kecamatan": "3205221",
      "id_kabupaten": "3205",
      "nama_kecamatan": "KARANGTENGAH"
    },
    {
      "id_kecamatan": "3205230",
      "id_kabupaten": "3205",
      "nama_kecamatan": "BANYURESMI"
    },
    {
      "id_kecamatan": "3205240",
      "id_kabupaten": "3205",
      "nama_kecamatan": "LELES"
    },
    {
      "id_kecamatan": "3205250",
      "id_kabupaten": "3205",
      "nama_kecamatan": "LEUWIGOONG"
    },
    {
      "id_kecamatan": "3205260",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CIBATU"
    },
    {
      "id_kecamatan": "3205261",
      "id_kabupaten": "3205",
      "nama_kecamatan": "KERSAMANAH"
    },
    {
      "id_kecamatan": "3205270",
      "id_kabupaten": "3205",
      "nama_kecamatan": "CIBIUK"
    },
    {
      "id_kecamatan": "3205280",
      "id_kabupaten": "3205",
      "nama_kecamatan": "KADUNGORA"
    },
    {
      "id_kecamatan": "3205290",
      "id_kabupaten": "3205",
      "nama_kecamatan": "BLUBUR LIMBANGAN"
    },
    {
      "id_kecamatan": "3205300",
      "id_kabupaten": "3205",
      "nama_kecamatan": "SELAAWI"
    },
    {
      "id_kecamatan": "3205310",
      "id_kabupaten": "3205",
      "nama_kecamatan": "MALANGBONG"
    },
    {
      "id_kecamatan": "3206010",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CIPATUJAH"
    },
    {
      "id_kecamatan": "3206020",
      "id_kabupaten": "3206",
      "nama_kecamatan": "KARANGNUNGGAL"
    },
    {
      "id_kecamatan": "3206030",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CIKALONG"
    },
    {
      "id_kecamatan": "3206040",
      "id_kabupaten": "3206",
      "nama_kecamatan": "PANCATENGAH"
    },
    {
      "id_kecamatan": "3206050",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CIKATOMAS"
    },
    {
      "id_kecamatan": "3206060",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CIBALONG"
    },
    {
      "id_kecamatan": "3206061",
      "id_kabupaten": "3206",
      "nama_kecamatan": "PARUNGPONTENG"
    },
    {
      "id_kecamatan": "3206070",
      "id_kabupaten": "3206",
      "nama_kecamatan": "BANTARKALONG"
    },
    {
      "id_kecamatan": "3206071",
      "id_kabupaten": "3206",
      "nama_kecamatan": "BOJONGASIH"
    },
    {
      "id_kecamatan": "3206072",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CULAMEGA"
    },
    {
      "id_kecamatan": "3206080",
      "id_kabupaten": "3206",
      "nama_kecamatan": "BOJONGGAMBIR"
    },
    {
      "id_kecamatan": "3206090",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SODONGHILIR"
    },
    {
      "id_kecamatan": "3206100",
      "id_kabupaten": "3206",
      "nama_kecamatan": "TARAJU"
    },
    {
      "id_kecamatan": "3206110",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SALAWU"
    },
    {
      "id_kecamatan": "3206111",
      "id_kabupaten": "3206",
      "nama_kecamatan": "PUSPAHIANG"
    },
    {
      "id_kecamatan": "3206120",
      "id_kabupaten": "3206",
      "nama_kecamatan": "TANJUNGJAYA"
    },
    {
      "id_kecamatan": "3206130",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SUKARAJA"
    },
    {
      "id_kecamatan": "3206140",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SALOPA"
    },
    {
      "id_kecamatan": "3206141",
      "id_kabupaten": "3206",
      "nama_kecamatan": "JATIWARAS"
    },
    {
      "id_kecamatan": "3206150",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CINEAM"
    },
    {
      "id_kecamatan": "3206151",
      "id_kabupaten": "3206",
      "nama_kecamatan": "KARANGJAYA"
    },
    {
      "id_kecamatan": "3206160",
      "id_kabupaten": "3206",
      "nama_kecamatan": "MANONJAYA"
    },
    {
      "id_kecamatan": "3206161",
      "id_kabupaten": "3206",
      "nama_kecamatan": "GUNUNGTANJUNG"
    },
    {
      "id_kecamatan": "3206190",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SINGAPARNA"
    },
    {
      "id_kecamatan": "3206191",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SUKARAME"
    },
    {
      "id_kecamatan": "3206192",
      "id_kabupaten": "3206",
      "nama_kecamatan": "MANGUNREJA"
    },
    {
      "id_kecamatan": "3206200",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CIGALONTANG"
    },
    {
      "id_kecamatan": "3206210",
      "id_kabupaten": "3206",
      "nama_kecamatan": "LEUWISARI"
    },
    {
      "id_kecamatan": "3206211",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SARIWANGI"
    },
    {
      "id_kecamatan": "3206212",
      "id_kabupaten": "3206",
      "nama_kecamatan": "PADAKEMBANG"
    },
    {
      "id_kecamatan": "3206221",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SUKARATU"
    },
    {
      "id_kecamatan": "3206230",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CISAYONG"
    },
    {
      "id_kecamatan": "3206231",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SUKAHENING"
    },
    {
      "id_kecamatan": "3206240",
      "id_kabupaten": "3206",
      "nama_kecamatan": "RAJAPOLAH"
    },
    {
      "id_kecamatan": "3206250",
      "id_kabupaten": "3206",
      "nama_kecamatan": "JAMANIS"
    },
    {
      "id_kecamatan": "3206260",
      "id_kabupaten": "3206",
      "nama_kecamatan": "CIAWI"
    },
    {
      "id_kecamatan": "3206261",
      "id_kabupaten": "3206",
      "nama_kecamatan": "KADIPATEN"
    },
    {
      "id_kecamatan": "3206270",
      "id_kabupaten": "3206",
      "nama_kecamatan": "PAGERAGEUNG"
    },
    {
      "id_kecamatan": "3206271",
      "id_kabupaten": "3206",
      "nama_kecamatan": "SUKARESIK"
    },
    {
      "id_kecamatan": "3207100",
      "id_kabupaten": "3207",
      "nama_kecamatan": "BANJARSARI"
    },
    {
      "id_kecamatan": "3207110",
      "id_kabupaten": "3207",
      "nama_kecamatan": "LAKBOK"
    },
    {
      "id_kecamatan": "3207111",
      "id_kabupaten": "3207",
      "nama_kecamatan": "PURWADADI"
    },
    {
      "id_kecamatan": "3207120",
      "id_kabupaten": "3207",
      "nama_kecamatan": "PAMARICAN"
    },
    {
      "id_kecamatan": "3207130",
      "id_kabupaten": "3207",
      "nama_kecamatan": "CIDOLOG"
    },
    {
      "id_kecamatan": "3207140",
      "id_kabupaten": "3207",
      "nama_kecamatan": "CIMARAGAS"
    },
    {
      "id_kecamatan": "3207150",
      "id_kabupaten": "3207",
      "nama_kecamatan": "CIJEUNGJING"
    },
    {
      "id_kecamatan": "3207160",
      "id_kabupaten": "3207",
      "nama_kecamatan": "CISAGA"
    },
    {
      "id_kecamatan": "3207170",
      "id_kabupaten": "3207",
      "nama_kecamatan": "TAMBAKSARI"
    },
    {
      "id_kecamatan": "3207180",
      "id_kabupaten": "3207",
      "nama_kecamatan": "RANCAH"
    },
    {
      "id_kecamatan": "3207190",
      "id_kabupaten": "3207",
      "nama_kecamatan": "RAJADESA"
    },
    {
      "id_kecamatan": "3207200",
      "id_kabupaten": "3207",
      "nama_kecamatan": "SUKADANA"
    },
    {
      "id_kecamatan": "3207210",
      "id_kabupaten": "3207",
      "nama_kecamatan": "CIAMIS"
    },
    {
      "id_kecamatan": "3207211",
      "id_kabupaten": "3207",
      "nama_kecamatan": "BAREGBEG"
    },
    {
      "id_kecamatan": "3207220",
      "id_kabupaten": "3207",
      "nama_kecamatan": "CIKONENG"
    },
    {
      "id_kecamatan": "3207221",
      "id_kabupaten": "3207",
      "nama_kecamatan": "SINDANGKASIH"
    },
    {
      "id_kecamatan": "3207230",
      "id_kabupaten": "3207",
      "nama_kecamatan": "CIHAURBEUTI"
    },
    {
      "id_kecamatan": "3207240",
      "id_kabupaten": "3207",
      "nama_kecamatan": "SADANANYA"
    },
    {
      "id_kecamatan": "3207250",
      "id_kabupaten": "3207",
      "nama_kecamatan": "CIPAKU"
    },
    {
      "id_kecamatan": "3207260",
      "id_kabupaten": "3207",
      "nama_kecamatan": "JATINAGARA"
    },
    {
      "id_kecamatan": "3207270",
      "id_kabupaten": "3207",
      "nama_kecamatan": "PANAWANGAN"
    },
    {
      "id_kecamatan": "3207280",
      "id_kabupaten": "3207",
      "nama_kecamatan": "KAWALI"
    },
    {
      "id_kecamatan": "3207281",
      "id_kabupaten": "3207",
      "nama_kecamatan": "LUMBUNG"
    },
    {
      "id_kecamatan": "3207290",
      "id_kabupaten": "3207",
      "nama_kecamatan": "PANJALU"
    },
    {
      "id_kecamatan": "3207291",
      "id_kabupaten": "3207",
      "nama_kecamatan": "SUKAMANTRI"
    },
    {
      "id_kecamatan": "3207300",
      "id_kabupaten": "3207",
      "nama_kecamatan": "PANUMBANGAN"
    },
    {
      "id_kecamatan": "3208010",
      "id_kabupaten": "3208",
      "nama_kecamatan": "DARMA"
    },
    {
      "id_kecamatan": "3208020",
      "id_kabupaten": "3208",
      "nama_kecamatan": "KADUGEDE"
    },
    {
      "id_kecamatan": "3208021",
      "id_kabupaten": "3208",
      "nama_kecamatan": "NUSAHERANG"
    },
    {
      "id_kecamatan": "3208030",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CINIRU"
    },
    {
      "id_kecamatan": "3208031",
      "id_kabupaten": "3208",
      "nama_kecamatan": "HANTARA"
    },
    {
      "id_kecamatan": "3208040",
      "id_kabupaten": "3208",
      "nama_kecamatan": "SELAJAMBE"
    },
    {
      "id_kecamatan": "3208050",
      "id_kabupaten": "3208",
      "nama_kecamatan": "SUBANG"
    },
    {
      "id_kecamatan": "3208051",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CILEBAK"
    },
    {
      "id_kecamatan": "3208060",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIWARU"
    },
    {
      "id_kecamatan": "3208061",
      "id_kabupaten": "3208",
      "nama_kecamatan": "KARANGKANCANA"
    },
    {
      "id_kecamatan": "3208070",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIBINGBIN"
    },
    {
      "id_kecamatan": "3208071",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIBEUREUM"
    },
    {
      "id_kecamatan": "3208080",
      "id_kabupaten": "3208",
      "nama_kecamatan": "LURAGUNG"
    },
    {
      "id_kecamatan": "3208081",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIMAHI"
    },
    {
      "id_kecamatan": "3208090",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIDAHU"
    },
    {
      "id_kecamatan": "3208091",
      "id_kabupaten": "3208",
      "nama_kecamatan": "KALIMANGGIS"
    },
    {
      "id_kecamatan": "3208100",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIAWIGEBANG"
    },
    {
      "id_kecamatan": "3208101",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIPICUNG"
    },
    {
      "id_kecamatan": "3208110",
      "id_kabupaten": "3208",
      "nama_kecamatan": "LEBAKWANGI"
    },
    {
      "id_kecamatan": "3208111",
      "id_kabupaten": "3208",
      "nama_kecamatan": "MALEBER"
    },
    {
      "id_kecamatan": "3208120",
      "id_kabupaten": "3208",
      "nama_kecamatan": "GARAWANGI"
    },
    {
      "id_kecamatan": "3208121",
      "id_kabupaten": "3208",
      "nama_kecamatan": "SINDANGAGUNG"
    },
    {
      "id_kecamatan": "3208130",
      "id_kabupaten": "3208",
      "nama_kecamatan": "KUNINGAN"
    },
    {
      "id_kecamatan": "3208140",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIGUGUR"
    },
    {
      "id_kecamatan": "3208150",
      "id_kabupaten": "3208",
      "nama_kecamatan": "KRAMATMULYA"
    },
    {
      "id_kecamatan": "3208160",
      "id_kabupaten": "3208",
      "nama_kecamatan": "JALAKSANA"
    },
    {
      "id_kecamatan": "3208161",
      "id_kabupaten": "3208",
      "nama_kecamatan": "JAPARA"
    },
    {
      "id_kecamatan": "3208170",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CILIMUS"
    },
    {
      "id_kecamatan": "3208171",
      "id_kabupaten": "3208",
      "nama_kecamatan": "CIGANDAMEKAR"
    },
    {
      "id_kecamatan": "3208180",
      "id_kabupaten": "3208",
      "nama_kecamatan": "MANDIRANCAN"
    },
    {
      "id_kecamatan": "3208181",
      "id_kabupaten": "3208",
      "nama_kecamatan": "PANCALANG"
    },
    {
      "id_kecamatan": "3208190",
      "id_kabupaten": "3208",
      "nama_kecamatan": "PASAWAHAN"
    },
    {
      "id_kecamatan": "3209010",
      "id_kabupaten": "3209",
      "nama_kecamatan": "WALED"
    },
    {
      "id_kecamatan": "3209011",
      "id_kabupaten": "3209",
      "nama_kecamatan": "PASALEMAN"
    },
    {
      "id_kecamatan": "3209020",
      "id_kabupaten": "3209",
      "nama_kecamatan": "CILEDUG"
    },
    {
      "id_kecamatan": "3209021",
      "id_kabupaten": "3209",
      "nama_kecamatan": "PABUARAN"
    },
    {
      "id_kecamatan": "3209030",
      "id_kabupaten": "3209",
      "nama_kecamatan": "LOSARI"
    },
    {
      "id_kecamatan": "3209031",
      "id_kabupaten": "3209",
      "nama_kecamatan": "PABEDILAN"
    },
    {
      "id_kecamatan": "3209040",
      "id_kabupaten": "3209",
      "nama_kecamatan": "BABAKAN"
    },
    {
      "id_kecamatan": "3209041",
      "id_kabupaten": "3209",
      "nama_kecamatan": "GEBANG"
    },
    {
      "id_kecamatan": "3209050",
      "id_kabupaten": "3209",
      "nama_kecamatan": "KARANGSEMBUNG"
    },
    {
      "id_kecamatan": "3209051",
      "id_kabupaten": "3209",
      "nama_kecamatan": "KARANGWARENG"
    },
    {
      "id_kecamatan": "3209060",
      "id_kabupaten": "3209",
      "nama_kecamatan": "LEMAHABANG"
    },
    {
      "id_kecamatan": "3209061",
      "id_kabupaten": "3209",
      "nama_kecamatan": "SUSUKANLEBAK"
    },
    {
      "id_kecamatan": "3209070",
      "id_kabupaten": "3209",
      "nama_kecamatan": "SEDONG"
    },
    {
      "id_kecamatan": "3209080",
      "id_kabupaten": "3209",
      "nama_kecamatan": "ASTANAJAPURA"
    },
    {
      "id_kecamatan": "3209081",
      "id_kabupaten": "3209",
      "nama_kecamatan": "PANGENAN"
    },
    {
      "id_kecamatan": "3209090",
      "id_kabupaten": "3209",
      "nama_kecamatan": "MUNDU"
    },
    {
      "id_kecamatan": "3209100",
      "id_kabupaten": "3209",
      "nama_kecamatan": "BEBER"
    },
    {
      "id_kecamatan": "3209101",
      "id_kabupaten": "3209",
      "nama_kecamatan": "GREGED"
    },
    {
      "id_kecamatan": "3209111",
      "id_kabupaten": "3209",
      "nama_kecamatan": "TALUN"
    },
    {
      "id_kecamatan": "3209120",
      "id_kabupaten": "3209",
      "nama_kecamatan": "SUMBER"
    },
    {
      "id_kecamatan": "3209121",
      "id_kabupaten": "3209",
      "nama_kecamatan": "DUKUPUNTANG"
    },
    {
      "id_kecamatan": "3209130",
      "id_kabupaten": "3209",
      "nama_kecamatan": "PALIMANAN"
    },
    {
      "id_kecamatan": "3209140",
      "id_kabupaten": "3209",
      "nama_kecamatan": "PLUMBON"
    },
    {
      "id_kecamatan": "3209141",
      "id_kabupaten": "3209",
      "nama_kecamatan": "DEPOK"
    },
    {
      "id_kecamatan": "3209150",
      "id_kabupaten": "3209",
      "nama_kecamatan": "WERU"
    },
    {
      "id_kecamatan": "3209151",
      "id_kabupaten": "3209",
      "nama_kecamatan": "PLERED"
    },
    {
      "id_kecamatan": "3209161",
      "id_kabupaten": "3209",
      "nama_kecamatan": "TENGAH TANI"
    },
    {
      "id_kecamatan": "3209162",
      "id_kabupaten": "3209",
      "nama_kecamatan": "KEDAWUNG"
    },
    {
      "id_kecamatan": "3209171",
      "id_kabupaten": "3209",
      "nama_kecamatan": "GUNUNGJATI"
    },
    {
      "id_kecamatan": "3209180",
      "id_kabupaten": "3209",
      "nama_kecamatan": "KAPETAKAN"
    },
    {
      "id_kecamatan": "3209181",
      "id_kabupaten": "3209",
      "nama_kecamatan": "SURANENGGALA"
    },
    {
      "id_kecamatan": "3209190",
      "id_kabupaten": "3209",
      "nama_kecamatan": "KLANGENAN"
    },
    {
      "id_kecamatan": "3209191",
      "id_kabupaten": "3209",
      "nama_kecamatan": "JAMBLANG"
    },
    {
      "id_kecamatan": "3209200",
      "id_kabupaten": "3209",
      "nama_kecamatan": "ARJAWINANGUN"
    },
    {
      "id_kecamatan": "3209201",
      "id_kabupaten": "3209",
      "nama_kecamatan": "PANGURAGAN"
    },
    {
      "id_kecamatan": "3209210",
      "id_kabupaten": "3209",
      "nama_kecamatan": "CIWARINGIN"
    },
    {
      "id_kecamatan": "3209211",
      "id_kabupaten": "3209",
      "nama_kecamatan": "GEMPOL"
    },
    {
      "id_kecamatan": "3209220",
      "id_kabupaten": "3209",
      "nama_kecamatan": "SUSUKAN"
    },
    {
      "id_kecamatan": "3209230",
      "id_kabupaten": "3209",
      "nama_kecamatan": "GEGESIK"
    },
    {
      "id_kecamatan": "3209231",
      "id_kabupaten": "3209",
      "nama_kecamatan": "KALIWEDI"
    },
    {
      "id_kecamatan": "3210010",
      "id_kabupaten": "3210",
      "nama_kecamatan": "LEMAHSUGIH"
    },
    {
      "id_kecamatan": "3210020",
      "id_kabupaten": "3210",
      "nama_kecamatan": "BANTARUJEG"
    },
    {
      "id_kecamatan": "3210021",
      "id_kabupaten": "3210",
      "nama_kecamatan": "MALAUSMA"
    },
    {
      "id_kecamatan": "3210030",
      "id_kabupaten": "3210",
      "nama_kecamatan": "CIKIJING"
    },
    {
      "id_kecamatan": "3210031",
      "id_kabupaten": "3210",
      "nama_kecamatan": "CINGAMBUL"
    },
    {
      "id_kecamatan": "3210040",
      "id_kabupaten": "3210",
      "nama_kecamatan": "TALAGA"
    },
    {
      "id_kecamatan": "3210041",
      "id_kabupaten": "3210",
      "nama_kecamatan": "BANJARAN"
    },
    {
      "id_kecamatan": "3210050",
      "id_kabupaten": "3210",
      "nama_kecamatan": "ARGAPURA"
    },
    {
      "id_kecamatan": "3210060",
      "id_kabupaten": "3210",
      "nama_kecamatan": "MAJA"
    },
    {
      "id_kecamatan": "3210070",
      "id_kabupaten": "3210",
      "nama_kecamatan": "MAJALENGKA"
    },
    {
      "id_kecamatan": "3210080",
      "id_kabupaten": "3210",
      "nama_kecamatan": "CIGASONG"
    },
    {
      "id_kecamatan": "3210090",
      "id_kabupaten": "3210",
      "nama_kecamatan": "SUKAHAJI"
    },
    {
      "id_kecamatan": "3210091",
      "id_kabupaten": "3210",
      "nama_kecamatan": "SINDANG"
    },
    {
      "id_kecamatan": "3210100",
      "id_kabupaten": "3210",
      "nama_kecamatan": "RAJAGALUH"
    },
    {
      "id_kecamatan": "3210110",
      "id_kabupaten": "3210",
      "nama_kecamatan": "SINDANGWANGI"
    },
    {
      "id_kecamatan": "3210120",
      "id_kabupaten": "3210",
      "nama_kecamatan": "LEUWIMUNDING"
    },
    {
      "id_kecamatan": "3210130",
      "id_kabupaten": "3210",
      "nama_kecamatan": "PALASAH"
    },
    {
      "id_kecamatan": "3210140",
      "id_kabupaten": "3210",
      "nama_kecamatan": "JATIWANGI"
    },
    {
      "id_kecamatan": "3210150",
      "id_kabupaten": "3210",
      "nama_kecamatan": "DAWUAN"
    },
    {
      "id_kecamatan": "3210151",
      "id_kabupaten": "3210",
      "nama_kecamatan": "KASOKANDEL"
    },
    {
      "id_kecamatan": "3210160",
      "id_kabupaten": "3210",
      "nama_kecamatan": "PANYINGKIRAN"
    },
    {
      "id_kecamatan": "3210170",
      "id_kabupaten": "3210",
      "nama_kecamatan": "KADIPATEN"
    },
    {
      "id_kecamatan": "3210180",
      "id_kabupaten": "3210",
      "nama_kecamatan": "KERTAJATI"
    },
    {
      "id_kecamatan": "3210190",
      "id_kabupaten": "3210",
      "nama_kecamatan": "JATITUJUH"
    },
    {
      "id_kecamatan": "3210200",
      "id_kabupaten": "3210",
      "nama_kecamatan": "LIGUNG"
    },
    {
      "id_kecamatan": "3210210",
      "id_kabupaten": "3210",
      "nama_kecamatan": "SUMBERJAYA"
    },
    {
      "id_kecamatan": "3211010",
      "id_kabupaten": "3211",
      "nama_kecamatan": "JATINANGOR"
    },
    {
      "id_kecamatan": "3211020",
      "id_kabupaten": "3211",
      "nama_kecamatan": "CIMANGGUNG"
    },
    {
      "id_kecamatan": "3211030",
      "id_kabupaten": "3211",
      "nama_kecamatan": "TANJUNGSARI"
    },
    {
      "id_kecamatan": "3211031",
      "id_kabupaten": "3211",
      "nama_kecamatan": "SUKASARI"
    },
    {
      "id_kecamatan": "3211032",
      "id_kabupaten": "3211",
      "nama_kecamatan": "PAMULIHAN"
    },
    {
      "id_kecamatan": "3211040",
      "id_kabupaten": "3211",
      "nama_kecamatan": "RANCAKALONG"
    },
    {
      "id_kecamatan": "3211050",
      "id_kabupaten": "3211",
      "nama_kecamatan": "SUMEDANG SELATAN"
    },
    {
      "id_kecamatan": "3211060",
      "id_kabupaten": "3211",
      "nama_kecamatan": "SUMEDANG UTARA"
    },
    {
      "id_kecamatan": "3211061",
      "id_kabupaten": "3211",
      "nama_kecamatan": "GANEAS"
    },
    {
      "id_kecamatan": "3211070",
      "id_kabupaten": "3211",
      "nama_kecamatan": "SITURAJA"
    },
    {
      "id_kecamatan": "3211071",
      "id_kabupaten": "3211",
      "nama_kecamatan": "CISITU"
    },
    {
      "id_kecamatan": "3211080",
      "id_kabupaten": "3211",
      "nama_kecamatan": "DARMARAJA"
    },
    {
      "id_kecamatan": "3211090",
      "id_kabupaten": "3211",
      "nama_kecamatan": "CIBUGEL"
    },
    {
      "id_kecamatan": "3211100",
      "id_kabupaten": "3211",
      "nama_kecamatan": "WADO"
    },
    {
      "id_kecamatan": "3211101",
      "id_kabupaten": "3211",
      "nama_kecamatan": "JATINUNGGAL"
    },
    {
      "id_kecamatan": "3211111",
      "id_kabupaten": "3211",
      "nama_kecamatan": "JATIGEDE"
    },
    {
      "id_kecamatan": "3211120",
      "id_kabupaten": "3211",
      "nama_kecamatan": "TOMO"
    },
    {
      "id_kecamatan": "3211130",
      "id_kabupaten": "3211",
      "nama_kecamatan": "UJUNG JAYA"
    },
    {
      "id_kecamatan": "3211140",
      "id_kabupaten": "3211",
      "nama_kecamatan": "CONGGEANG"
    },
    {
      "id_kecamatan": "3211150",
      "id_kabupaten": "3211",
      "nama_kecamatan": "PASEH"
    },
    {
      "id_kecamatan": "3211160",
      "id_kabupaten": "3211",
      "nama_kecamatan": "CIMALAKA"
    },
    {
      "id_kecamatan": "3211161",
      "id_kabupaten": "3211",
      "nama_kecamatan": "CISARUA"
    },
    {
      "id_kecamatan": "3211170",
      "id_kabupaten": "3211",
      "nama_kecamatan": "TANJUNGKERTA"
    },
    {
      "id_kecamatan": "3211171",
      "id_kabupaten": "3211",
      "nama_kecamatan": "TANJUNGMEDAR"
    },
    {
      "id_kecamatan": "3211180",
      "id_kabupaten": "3211",
      "nama_kecamatan": "BUAHDUA"
    },
    {
      "id_kecamatan": "3211181",
      "id_kabupaten": "3211",
      "nama_kecamatan": "SURIAN"
    },
    {
      "id_kecamatan": "3212010",
      "id_kabupaten": "3212",
      "nama_kecamatan": "HAURGEULIS"
    },
    {
      "id_kecamatan": "3212011",
      "id_kabupaten": "3212",
      "nama_kecamatan": "GANTAR"
    },
    {
      "id_kecamatan": "3212020",
      "id_kabupaten": "3212",
      "nama_kecamatan": "KROYA"
    },
    {
      "id_kecamatan": "3212030",
      "id_kabupaten": "3212",
      "nama_kecamatan": "GABUSWETAN"
    },
    {
      "id_kecamatan": "3212040",
      "id_kabupaten": "3212",
      "nama_kecamatan": "CIKEDUNG"
    },
    {
      "id_kecamatan": "3212041",
      "id_kabupaten": "3212",
      "nama_kecamatan": "TERISI"
    },
    {
      "id_kecamatan": "3212050",
      "id_kabupaten": "3212",
      "nama_kecamatan": "LELEA"
    },
    {
      "id_kecamatan": "3212060",
      "id_kabupaten": "3212",
      "nama_kecamatan": "BANGODUA"
    },
    {
      "id_kecamatan": "3212061",
      "id_kabupaten": "3212",
      "nama_kecamatan": "TUKDANA"
    },
    {
      "id_kecamatan": "3212070",
      "id_kabupaten": "3212",
      "nama_kecamatan": "WIDASARI"
    },
    {
      "id_kecamatan": "3212080",
      "id_kabupaten": "3212",
      "nama_kecamatan": "KERTASEMAYA"
    },
    {
      "id_kecamatan": "3212081",
      "id_kabupaten": "3212",
      "nama_kecamatan": "SUKAGUMIWANG"
    },
    {
      "id_kecamatan": "3212090",
      "id_kabupaten": "3212",
      "nama_kecamatan": "KRANGKENG"
    },
    {
      "id_kecamatan": "3212100",
      "id_kabupaten": "3212",
      "nama_kecamatan": "KARANGAMPEL"
    },
    {
      "id_kecamatan": "3212101",
      "id_kabupaten": "3212",
      "nama_kecamatan": "KEDOKAN BUNDER"
    },
    {
      "id_kecamatan": "3212110",
      "id_kabupaten": "3212",
      "nama_kecamatan": "JUNTINYUAT"
    },
    {
      "id_kecamatan": "3212120",
      "id_kabupaten": "3212",
      "nama_kecamatan": "SLIYEG"
    },
    {
      "id_kecamatan": "3212130",
      "id_kabupaten": "3212",
      "nama_kecamatan": "JATIBARANG"
    },
    {
      "id_kecamatan": "3212140",
      "id_kabupaten": "3212",
      "nama_kecamatan": "BALONGAN"
    },
    {
      "id_kecamatan": "3212150",
      "id_kabupaten": "3212",
      "nama_kecamatan": "INDRAMAYU"
    },
    {
      "id_kecamatan": "3212160",
      "id_kabupaten": "3212",
      "nama_kecamatan": "SINDANG"
    },
    {
      "id_kecamatan": "3212161",
      "id_kabupaten": "3212",
      "nama_kecamatan": "CANTIGI"
    },
    {
      "id_kecamatan": "3212162",
      "id_kabupaten": "3212",
      "nama_kecamatan": "PASEKAN"
    },
    {
      "id_kecamatan": "3212170",
      "id_kabupaten": "3212",
      "nama_kecamatan": "LOHBENER"
    },
    {
      "id_kecamatan": "3212171",
      "id_kabupaten": "3212",
      "nama_kecamatan": "ARAHAN"
    },
    {
      "id_kecamatan": "3212180",
      "id_kabupaten": "3212",
      "nama_kecamatan": "LOSARANG"
    },
    {
      "id_kecamatan": "3212190",
      "id_kabupaten": "3212",
      "nama_kecamatan": "KANDANGHAUR"
    },
    {
      "id_kecamatan": "3212200",
      "id_kabupaten": "3212",
      "nama_kecamatan": "BONGAS"
    },
    {
      "id_kecamatan": "3212210",
      "id_kabupaten": "3212",
      "nama_kecamatan": "ANJATAN"
    },
    {
      "id_kecamatan": "3212220",
      "id_kabupaten": "3212",
      "nama_kecamatan": "SUKRA"
    },
    {
      "id_kecamatan": "3212221",
      "id_kabupaten": "3212",
      "nama_kecamatan": "PATROL"
    },
    {
      "id_kecamatan": "3213010",
      "id_kabupaten": "3213",
      "nama_kecamatan": "SAGALAHERANG"
    },
    {
      "id_kecamatan": "3213011",
      "id_kabupaten": "3213",
      "nama_kecamatan": "SERANGPANJANG"
    },
    {
      "id_kecamatan": "3213020",
      "id_kabupaten": "3213",
      "nama_kecamatan": "JALANCAGAK"
    },
    {
      "id_kecamatan": "3213021",
      "id_kabupaten": "3213",
      "nama_kecamatan": "CIATER"
    },
    {
      "id_kecamatan": "3213030",
      "id_kabupaten": "3213",
      "nama_kecamatan": "CISALAK"
    },
    {
      "id_kecamatan": "3213031",
      "id_kabupaten": "3213",
      "nama_kecamatan": "KASOMALANG"
    },
    {
      "id_kecamatan": "3213040",
      "id_kabupaten": "3213",
      "nama_kecamatan": "TANJUNGSIANG"
    },
    {
      "id_kecamatan": "3213050",
      "id_kabupaten": "3213",
      "nama_kecamatan": "CIJAMBE"
    },
    {
      "id_kecamatan": "3213060",
      "id_kabupaten": "3213",
      "nama_kecamatan": "CIBOGO"
    },
    {
      "id_kecamatan": "3213070",
      "id_kabupaten": "3213",
      "nama_kecamatan": "SUBANG"
    },
    {
      "id_kecamatan": "3213080",
      "id_kabupaten": "3213",
      "nama_kecamatan": "KALIJATI"
    },
    {
      "id_kecamatan": "3213081",
      "id_kabupaten": "3213",
      "nama_kecamatan": "DAWUAN"
    },
    {
      "id_kecamatan": "3213090",
      "id_kabupaten": "3213",
      "nama_kecamatan": "CIPEUNDEUY"
    },
    {
      "id_kecamatan": "3213100",
      "id_kabupaten": "3213",
      "nama_kecamatan": "PABUARAN"
    },
    {
      "id_kecamatan": "3213110",
      "id_kabupaten": "3213",
      "nama_kecamatan": "PATOKBEUSI"
    },
    {
      "id_kecamatan": "3213120",
      "id_kabupaten": "3213",
      "nama_kecamatan": "PURWADADI"
    },
    {
      "id_kecamatan": "3213130",
      "id_kabupaten": "3213",
      "nama_kecamatan": "CIKAUM"
    },
    {
      "id_kecamatan": "3213140",
      "id_kabupaten": "3213",
      "nama_kecamatan": "PAGADEN"
    },
    {
      "id_kecamatan": "3213141",
      "id_kabupaten": "3213",
      "nama_kecamatan": "PAGADEN BARAT"
    },
    {
      "id_kecamatan": "3213150",
      "id_kabupaten": "3213",
      "nama_kecamatan": "CIPUNAGARA"
    },
    {
      "id_kecamatan": "3213160",
      "id_kabupaten": "3213",
      "nama_kecamatan": "COMPRENG"
    },
    {
      "id_kecamatan": "3213170",
      "id_kabupaten": "3213",
      "nama_kecamatan": "BINONG"
    },
    {
      "id_kecamatan": "3213171",
      "id_kabupaten": "3213",
      "nama_kecamatan": "TAMBAKDAHAN"
    },
    {
      "id_kecamatan": "3213180",
      "id_kabupaten": "3213",
      "nama_kecamatan": "CIASEM"
    },
    {
      "id_kecamatan": "3213190",
      "id_kabupaten": "3213",
      "nama_kecamatan": "PAMANUKAN"
    },
    {
      "id_kecamatan": "3213191",
      "id_kabupaten": "3213",
      "nama_kecamatan": "SUKASARI"
    },
    {
      "id_kecamatan": "3213200",
      "id_kabupaten": "3213",
      "nama_kecamatan": "PUSAKANAGARA"
    },
    {
      "id_kecamatan": "3213201",
      "id_kabupaten": "3213",
      "nama_kecamatan": "PUSAKAJAYA"
    },
    {
      "id_kecamatan": "3213210",
      "id_kabupaten": "3213",
      "nama_kecamatan": "LEGONKULON"
    },
    {
      "id_kecamatan": "3213220",
      "id_kabupaten": "3213",
      "nama_kecamatan": "BLANAKAN"
    },
    {
      "id_kecamatan": "3214010",
      "id_kabupaten": "3214",
      "nama_kecamatan": "JATILUHUR"
    },
    {
      "id_kecamatan": "3214011",
      "id_kabupaten": "3214",
      "nama_kecamatan": "SUKASARI"
    },
    {
      "id_kecamatan": "3214020",
      "id_kabupaten": "3214",
      "nama_kecamatan": "MANIIS"
    },
    {
      "id_kecamatan": "3214030",
      "id_kabupaten": "3214",
      "nama_kecamatan": "TEGAL WARU"
    },
    {
      "id_kecamatan": "3214040",
      "id_kabupaten": "3214",
      "nama_kecamatan": "PLERED"
    },
    {
      "id_kecamatan": "3214050",
      "id_kabupaten": "3214",
      "nama_kecamatan": "SUKATANI"
    },
    {
      "id_kecamatan": "3214060",
      "id_kabupaten": "3214",
      "nama_kecamatan": "DARANGDAN"
    },
    {
      "id_kecamatan": "3214070",
      "id_kabupaten": "3214",
      "nama_kecamatan": "BOJONG"
    },
    {
      "id_kecamatan": "3214080",
      "id_kabupaten": "3214",
      "nama_kecamatan": "WANAYASA"
    },
    {
      "id_kecamatan": "3214081",
      "id_kabupaten": "3214",
      "nama_kecamatan": "KIARAPEDES"
    },
    {
      "id_kecamatan": "3214090",
      "id_kabupaten": "3214",
      "nama_kecamatan": "PASAWAHAN"
    },
    {
      "id_kecamatan": "3214091",
      "id_kabupaten": "3214",
      "nama_kecamatan": "PONDOK SALAM"
    },
    {
      "id_kecamatan": "3214100",
      "id_kabupaten": "3214",
      "nama_kecamatan": "PURWAKARTA"
    },
    {
      "id_kecamatan": "3214101",
      "id_kabupaten": "3214",
      "nama_kecamatan": "BABAKANCIKAO"
    },
    {
      "id_kecamatan": "3214110",
      "id_kabupaten": "3214",
      "nama_kecamatan": "CAMPAKA"
    },
    {
      "id_kecamatan": "3214111",
      "id_kabupaten": "3214",
      "nama_kecamatan": "CIBATU"
    },
    {
      "id_kecamatan": "3214112",
      "id_kabupaten": "3214",
      "nama_kecamatan": "BUNGURSARI"
    },
    {
      "id_kecamatan": "3215010",
      "id_kabupaten": "3215",
      "nama_kecamatan": "PANGKALAN"
    },
    {
      "id_kecamatan": "3215011",
      "id_kabupaten": "3215",
      "nama_kecamatan": "TEGALWARU"
    },
    {
      "id_kecamatan": "3215020",
      "id_kabupaten": "3215",
      "nama_kecamatan": "CIAMPEL"
    },
    {
      "id_kecamatan": "3215031",
      "id_kabupaten": "3215",
      "nama_kecamatan": "TELUKJAMBE TIMUR"
    },
    {
      "id_kecamatan": "3215032",
      "id_kabupaten": "3215",
      "nama_kecamatan": "TELUKJAMBE BARAT"
    },
    {
      "id_kecamatan": "3215040",
      "id_kabupaten": "3215",
      "nama_kecamatan": "KLARI"
    },
    {
      "id_kecamatan": "3215050",
      "id_kabupaten": "3215",
      "nama_kecamatan": "CIKAMPEK"
    },
    {
      "id_kecamatan": "3215051",
      "id_kabupaten": "3215",
      "nama_kecamatan": "PURWASARI"
    },
    {
      "id_kecamatan": "3215060",
      "id_kabupaten": "3215",
      "nama_kecamatan": "TIRTAMULYA"
    },
    {
      "id_kecamatan": "3215070",
      "id_kabupaten": "3215",
      "nama_kecamatan": "JATISARI"
    },
    {
      "id_kecamatan": "3215071",
      "id_kabupaten": "3215",
      "nama_kecamatan": "BANYUSARI"
    },
    {
      "id_kecamatan": "3215072",
      "id_kabupaten": "3215",
      "nama_kecamatan": "KOTABARU"
    },
    {
      "id_kecamatan": "3215081",
      "id_kabupaten": "3215",
      "nama_kecamatan": "CILAMAYA WETAN"
    },
    {
      "id_kecamatan": "3215082",
      "id_kabupaten": "3215",
      "nama_kecamatan": "CILAMAYA KULON"
    },
    {
      "id_kecamatan": "3215090",
      "id_kabupaten": "3215",
      "nama_kecamatan": "LEMAHABANG"
    },
    {
      "id_kecamatan": "3215100",
      "id_kabupaten": "3215",
      "nama_kecamatan": "TALAGASARI"
    },
    {
      "id_kecamatan": "3215111",
      "id_kabupaten": "3215",
      "nama_kecamatan": "MAJALAYA"
    },
    {
      "id_kecamatan": "3215112",
      "id_kabupaten": "3215",
      "nama_kecamatan": "KARAWANG TIMUR"
    },
    {
      "id_kecamatan": "3215113",
      "id_kabupaten": "3215",
      "nama_kecamatan": "KARAWANG BARAT"
    },
    {
      "id_kecamatan": "3215120",
      "id_kabupaten": "3215",
      "nama_kecamatan": "RAWAMERTA"
    },
    {
      "id_kecamatan": "3215130",
      "id_kabupaten": "3215",
      "nama_kecamatan": "TEMPURAN"
    },
    {
      "id_kecamatan": "3215140",
      "id_kabupaten": "3215",
      "nama_kecamatan": "KUTAWALUYA"
    },
    {
      "id_kecamatan": "3215150",
      "id_kabupaten": "3215",
      "nama_kecamatan": "RENGASDENGKLOK"
    },
    {
      "id_kecamatan": "3215151",
      "id_kabupaten": "3215",
      "nama_kecamatan": "JAYAKERTA"
    },
    {
      "id_kecamatan": "3215160",
      "id_kabupaten": "3215",
      "nama_kecamatan": "PEDES"
    },
    {
      "id_kecamatan": "3215161",
      "id_kabupaten": "3215",
      "nama_kecamatan": "CILEBAR"
    },
    {
      "id_kecamatan": "3215170",
      "id_kabupaten": "3215",
      "nama_kecamatan": "CIBUAYA"
    },
    {
      "id_kecamatan": "3215180",
      "id_kabupaten": "3215",
      "nama_kecamatan": "TIRTAJAYA"
    },
    {
      "id_kecamatan": "3215190",
      "id_kabupaten": "3215",
      "nama_kecamatan": "BATUJAYA"
    },
    {
      "id_kecamatan": "3215200",
      "id_kabupaten": "3215",
      "nama_kecamatan": "PAKISJAYA"
    },
    {
      "id_kecamatan": "3216010",
      "id_kabupaten": "3216",
      "nama_kecamatan": "SETU"
    },
    {
      "id_kecamatan": "3216021",
      "id_kabupaten": "3216",
      "nama_kecamatan": "SERANG BARU"
    },
    {
      "id_kecamatan": "3216022",
      "id_kabupaten": "3216",
      "nama_kecamatan": "CIKARANG PUSAT"
    },
    {
      "id_kecamatan": "3216023",
      "id_kabupaten": "3216",
      "nama_kecamatan": "CIKARANG SELATAN"
    },
    {
      "id_kecamatan": "3216030",
      "id_kabupaten": "3216",
      "nama_kecamatan": "CIBARUSAH"
    },
    {
      "id_kecamatan": "3216031",
      "id_kabupaten": "3216",
      "nama_kecamatan": "BOJONGMANGU"
    },
    {
      "id_kecamatan": "3216041",
      "id_kabupaten": "3216",
      "nama_kecamatan": "CIKARANG TIMUR"
    },
    {
      "id_kecamatan": "3216050",
      "id_kabupaten": "3216",
      "nama_kecamatan": "KEDUNGWARINGIN"
    },
    {
      "id_kecamatan": "3216061",
      "id_kabupaten": "3216",
      "nama_kecamatan": "CIKARANG UTARA"
    },
    {
      "id_kecamatan": "3216062",
      "id_kabupaten": "3216",
      "nama_kecamatan": "KARANGBAHAGIA"
    },
    {
      "id_kecamatan": "3216070",
      "id_kabupaten": "3216",
      "nama_kecamatan": "CIBITUNG"
    },
    {
      "id_kecamatan": "3216071",
      "id_kabupaten": "3216",
      "nama_kecamatan": "CIKARANG BARAT"
    },
    {
      "id_kecamatan": "3216081",
      "id_kabupaten": "3216",
      "nama_kecamatan": "TAMBUN SELATAN"
    },
    {
      "id_kecamatan": "3216082",
      "id_kabupaten": "3216",
      "nama_kecamatan": "TAMBUN UTARA"
    },
    {
      "id_kecamatan": "3216090",
      "id_kabupaten": "3216",
      "nama_kecamatan": "BABELAN"
    },
    {
      "id_kecamatan": "3216100",
      "id_kabupaten": "3216",
      "nama_kecamatan": "TARUMAJAYA"
    },
    {
      "id_kecamatan": "3216110",
      "id_kabupaten": "3216",
      "nama_kecamatan": "TAMBELANG"
    },
    {
      "id_kecamatan": "3216111",
      "id_kabupaten": "3216",
      "nama_kecamatan": "SUKAWANGI"
    },
    {
      "id_kecamatan": "3216120",
      "id_kabupaten": "3216",
      "nama_kecamatan": "SUKATANI"
    },
    {
      "id_kecamatan": "3216121",
      "id_kabupaten": "3216",
      "nama_kecamatan": "SUKAKARYA"
    },
    {
      "id_kecamatan": "3216130",
      "id_kabupaten": "3216",
      "nama_kecamatan": "PEBAYURAN"
    },
    {
      "id_kecamatan": "3216140",
      "id_kabupaten": "3216",
      "nama_kecamatan": "CABANGBUNGIN"
    },
    {
      "id_kecamatan": "3216150",
      "id_kabupaten": "3216",
      "nama_kecamatan": "MUARA GEMBONG"
    },
    {
      "id_kecamatan": "3217010",
      "id_kabupaten": "3217",
      "nama_kecamatan": "RONGGA"
    },
    {
      "id_kecamatan": "3217020",
      "id_kabupaten": "3217",
      "nama_kecamatan": "GUNUNGHALU"
    },
    {
      "id_kecamatan": "3217030",
      "id_kabupaten": "3217",
      "nama_kecamatan": "SINDANGKERTA"
    },
    {
      "id_kecamatan": "3217040",
      "id_kabupaten": "3217",
      "nama_kecamatan": "CILILIN"
    },
    {
      "id_kecamatan": "3217050",
      "id_kabupaten": "3217",
      "nama_kecamatan": "CIHAMPELAS"
    },
    {
      "id_kecamatan": "3217060",
      "id_kabupaten": "3217",
      "nama_kecamatan": "CIPONGKOR"
    },
    {
      "id_kecamatan": "3217070",
      "id_kabupaten": "3217",
      "nama_kecamatan": "BATUJAJAR"
    },
    {
      "id_kecamatan": "3217071",
      "id_kabupaten": "3217",
      "nama_kecamatan": "SAGULING"
    },
    {
      "id_kecamatan": "3217080",
      "id_kabupaten": "3217",
      "nama_kecamatan": "CIPATAT"
    },
    {
      "id_kecamatan": "3217090",
      "id_kabupaten": "3217",
      "nama_kecamatan": "PADALARANG"
    },
    {
      "id_kecamatan": "3217100",
      "id_kabupaten": "3217",
      "nama_kecamatan": "NGAMPRAH"
    },
    {
      "id_kecamatan": "3217110",
      "id_kabupaten": "3217",
      "nama_kecamatan": "PARONGPONG"
    },
    {
      "id_kecamatan": "3217120",
      "id_kabupaten": "3217",
      "nama_kecamatan": "LEMBANG"
    },
    {
      "id_kecamatan": "3217130",
      "id_kabupaten": "3217",
      "nama_kecamatan": "CISARUA"
    },
    {
      "id_kecamatan": "3217140",
      "id_kabupaten": "3217",
      "nama_kecamatan": "CIKALONG WETAN"
    },
    {
      "id_kecamatan": "3217150",
      "id_kabupaten": "3217",
      "nama_kecamatan": "CIPEUNDEUY"
    },
    {
      "id_kecamatan": "3218010",
      "id_kabupaten": "3218",
      "nama_kecamatan": "CIMERAK"
    },
    {
      "id_kecamatan": "3218020",
      "id_kabupaten": "3218",
      "nama_kecamatan": "CIJULANG"
    },
    {
      "id_kecamatan": "3218030",
      "id_kabupaten": "3218",
      "nama_kecamatan": "CIGUGUR"
    },
    {
      "id_kecamatan": "3218040",
      "id_kabupaten": "3218",
      "nama_kecamatan": "LANGKAPLANCAR"
    },
    {
      "id_kecamatan": "3218050",
      "id_kabupaten": "3218",
      "nama_kecamatan": "PARIGI"
    },
    {
      "id_kecamatan": "3218060",
      "id_kabupaten": "3218",
      "nama_kecamatan": "SIDAMULIH"
    },
    {
      "id_kecamatan": "3218070",
      "id_kabupaten": "3218",
      "nama_kecamatan": "PANGANDARAN"
    },
    {
      "id_kecamatan": "3218080",
      "id_kabupaten": "3218",
      "nama_kecamatan": "KALIPUCANG"
    },
    {
      "id_kecamatan": "3218090",
      "id_kabupaten": "3218",
      "nama_kecamatan": "PADAHERANG"
    },
    {
      "id_kecamatan": "3218100",
      "id_kabupaten": "3218",
      "nama_kecamatan": "MANGUNJAYA"
    },
    {
      "id_kecamatan": "3271010",
      "id_kabupaten": "3271",
      "nama_kecamatan": "BOGOR SELATAN"
    },
    {
      "id_kecamatan": "3271020",
      "id_kabupaten": "3271",
      "nama_kecamatan": "BOGOR TIMUR"
    },
    {
      "id_kecamatan": "3271030",
      "id_kabupaten": "3271",
      "nama_kecamatan": "BOGOR UTARA"
    },
    {
      "id_kecamatan": "3271040",
      "id_kabupaten": "3271",
      "nama_kecamatan": "BOGOR TENGAH"
    },
    {
      "id_kecamatan": "3271050",
      "id_kabupaten": "3271",
      "nama_kecamatan": "BOGOR BARAT"
    },
    {
      "id_kecamatan": "3271060",
      "id_kabupaten": "3271",
      "nama_kecamatan": "TANAH SEREAL"
    },
    {
      "id_kecamatan": "3272010",
      "id_kabupaten": "3272",
      "nama_kecamatan": "BAROS"
    },
    {
      "id_kecamatan": "3272011",
      "id_kabupaten": "3272",
      "nama_kecamatan": "LEMBURSITU"
    },
    {
      "id_kecamatan": "3272012",
      "id_kabupaten": "3272",
      "nama_kecamatan": "CIBEUREUM"
    },
    {
      "id_kecamatan": "3272020",
      "id_kabupaten": "3272",
      "nama_kecamatan": "CITAMIANG"
    },
    {
      "id_kecamatan": "3272030",
      "id_kabupaten": "3272",
      "nama_kecamatan": "WARUDOYONG"
    },
    {
      "id_kecamatan": "3272040",
      "id_kabupaten": "3272",
      "nama_kecamatan": "GUNUNG PUYUH"
    },
    {
      "id_kecamatan": "3272050",
      "id_kabupaten": "3272",
      "nama_kecamatan": "CIKOLE"
    },
    {
      "id_kecamatan": "3273010",
      "id_kabupaten": "3273",
      "nama_kecamatan": "BANDUNG KULON"
    },
    {
      "id_kecamatan": "3273020",
      "id_kabupaten": "3273",
      "nama_kecamatan": "BABAKAN CIPARAY"
    },
    {
      "id_kecamatan": "3273030",
      "id_kabupaten": "3273",
      "nama_kecamatan": "BOJONGLOA KALER"
    },
    {
      "id_kecamatan": "3273040",
      "id_kabupaten": "3273",
      "nama_kecamatan": "BOJONGLOA KIDUL"
    },
    {
      "id_kecamatan": "3273050",
      "id_kabupaten": "3273",
      "nama_kecamatan": "ASTANAANYAR"
    },
    {
      "id_kecamatan": "3273060",
      "id_kabupaten": "3273",
      "nama_kecamatan": "REGOL"
    },
    {
      "id_kecamatan": "3273070",
      "id_kabupaten": "3273",
      "nama_kecamatan": "LENGKONG"
    },
    {
      "id_kecamatan": "3273080",
      "id_kabupaten": "3273",
      "nama_kecamatan": "BANDUNG KIDUL"
    },
    {
      "id_kecamatan": "3273090",
      "id_kabupaten": "3273",
      "nama_kecamatan": "BUAHBATU"
    },
    {
      "id_kecamatan": "3273100",
      "id_kabupaten": "3273",
      "nama_kecamatan": "RANCASARI"
    },
    {
      "id_kecamatan": "3273101",
      "id_kabupaten": "3273",
      "nama_kecamatan": "GEDEBAGE"
    },
    {
      "id_kecamatan": "3273110",
      "id_kabupaten": "3273",
      "nama_kecamatan": "CIBIRU"
    },
    {
      "id_kecamatan": "3273111",
      "id_kabupaten": "3273",
      "nama_kecamatan": "PANYILEUKAN"
    },
    {
      "id_kecamatan": "3273120",
      "id_kabupaten": "3273",
      "nama_kecamatan": "UJUNG BERUNG"
    },
    {
      "id_kecamatan": "3273121",
      "id_kabupaten": "3273",
      "nama_kecamatan": "CINAMBO"
    },
    {
      "id_kecamatan": "3273130",
      "id_kabupaten": "3273",
      "nama_kecamatan": "ARCAMANIK"
    },
    {
      "id_kecamatan": "3273141",
      "id_kabupaten": "3273",
      "nama_kecamatan": "ANTAPANI"
    },
    {
      "id_kecamatan": "3273142",
      "id_kabupaten": "3273",
      "nama_kecamatan": "MANDALAJATI"
    },
    {
      "id_kecamatan": "3273150",
      "id_kabupaten": "3273",
      "nama_kecamatan": "KIARACONDONG"
    },
    {
      "id_kecamatan": "3273160",
      "id_kabupaten": "3273",
      "nama_kecamatan": "BATUNUNGGAL"
    },
    {
      "id_kecamatan": "3273170",
      "id_kabupaten": "3273",
      "nama_kecamatan": "SUMUR BANDUNG"
    },
    {
      "id_kecamatan": "3273180",
      "id_kabupaten": "3273",
      "nama_kecamatan": "ANDIR"
    },
    {
      "id_kecamatan": "3273190",
      "id_kabupaten": "3273",
      "nama_kecamatan": "CICENDO"
    },
    {
      "id_kecamatan": "3273200",
      "id_kabupaten": "3273",
      "nama_kecamatan": "BANDUNG WETAN"
    },
    {
      "id_kecamatan": "3273210",
      "id_kabupaten": "3273",
      "nama_kecamatan": "CIBEUNYING KIDUL"
    },
    {
      "id_kecamatan": "3273220",
      "id_kabupaten": "3273",
      "nama_kecamatan": "CIBEUNYING KALER"
    },
    {
      "id_kecamatan": "3273230",
      "id_kabupaten": "3273",
      "nama_kecamatan": "COBLONG"
    },
    {
      "id_kecamatan": "3273240",
      "id_kabupaten": "3273",
      "nama_kecamatan": "SUKAJADI"
    },
    {
      "id_kecamatan": "3273250",
      "id_kabupaten": "3273",
      "nama_kecamatan": "SUKASARI"
    },
    {
      "id_kecamatan": "3273260",
      "id_kabupaten": "3273",
      "nama_kecamatan": "CIDADAP"
    },
    {
      "id_kecamatan": "3274010",
      "id_kabupaten": "3274",
      "nama_kecamatan": "HARJAMUKTI"
    },
    {
      "id_kecamatan": "3274020",
      "id_kabupaten": "3274",
      "nama_kecamatan": "LEMAHWUNGKUK"
    },
    {
      "id_kecamatan": "3274030",
      "id_kabupaten": "3274",
      "nama_kecamatan": "PEKALIPAN"
    },
    {
      "id_kecamatan": "3274040",
      "id_kabupaten": "3274",
      "nama_kecamatan": "KESAMBI"
    },
    {
      "id_kecamatan": "3274050",
      "id_kabupaten": "3274",
      "nama_kecamatan": "KEJAKSAN"
    },
    {
      "id_kecamatan": "3275010",
      "id_kabupaten": "3275",
      "nama_kecamatan": "PONDOKGEDE"
    },
    {
      "id_kecamatan": "3275011",
      "id_kabupaten": "3275",
      "nama_kecamatan": "JATISAMPURNA"
    },
    {
      "id_kecamatan": "3275012",
      "id_kabupaten": "3275",
      "nama_kecamatan": "PONDOKMELATI"
    },
    {
      "id_kecamatan": "3275020",
      "id_kabupaten": "3275",
      "nama_kecamatan": "JATIASIH"
    },
    {
      "id_kecamatan": "3275030",
      "id_kabupaten": "3275",
      "nama_kecamatan": "BANTARGEBANG"
    },
    {
      "id_kecamatan": "3275031",
      "id_kabupaten": "3275",
      "nama_kecamatan": "MUSTIKAJAYA"
    },
    {
      "id_kecamatan": "3275040",
      "id_kabupaten": "3275",
      "nama_kecamatan": "BEKASI TIMUR"
    },
    {
      "id_kecamatan": "3275041",
      "id_kabupaten": "3275",
      "nama_kecamatan": "RAWALUMBU"
    },
    {
      "id_kecamatan": "3275050",
      "id_kabupaten": "3275",
      "nama_kecamatan": "BEKASI SELATAN"
    },
    {
      "id_kecamatan": "3275060",
      "id_kabupaten": "3275",
      "nama_kecamatan": "BEKASI BARAT"
    },
    {
      "id_kecamatan": "3275061",
      "id_kabupaten": "3275",
      "nama_kecamatan": "MEDAN SATRIA"
    },
    {
      "id_kecamatan": "3275070",
      "id_kabupaten": "3275",
      "nama_kecamatan": "BEKASI UTARA"
    },
    {
      "id_kecamatan": "3276010",
      "id_kabupaten": "3276",
      "nama_kecamatan": "SAWANGAN"
    },
    {
      "id_kecamatan": "3276011",
      "id_kabupaten": "3276",
      "nama_kecamatan": "BOJONGSARI"
    },
    {
      "id_kecamatan": "3276020",
      "id_kabupaten": "3276",
      "nama_kecamatan": "PANCORAN MAS"
    },
    {
      "id_kecamatan": "3276021",
      "id_kabupaten": "3276",
      "nama_kecamatan": "CIPAYUNG"
    },
    {
      "id_kecamatan": "3276030",
      "id_kabupaten": "3276",
      "nama_kecamatan": "SUKMA JAYA"
    },
    {
      "id_kecamatan": "3276031",
      "id_kabupaten": "3276",
      "nama_kecamatan": "CILODONG"
    },
    {
      "id_kecamatan": "3276040",
      "id_kabupaten": "3276",
      "nama_kecamatan": "CIMANGGIS"
    },
    {
      "id_kecamatan": "3276041",
      "id_kabupaten": "3276",
      "nama_kecamatan": "TAPOS"
    },
    {
      "id_kecamatan": "3276050",
      "id_kabupaten": "3276",
      "nama_kecamatan": "BEJI"
    },
    {
      "id_kecamatan": "3276060",
      "id_kabupaten": "3276",
      "nama_kecamatan": "LIMO"
    },
    {
      "id_kecamatan": "3276061",
      "id_kabupaten": "3276",
      "nama_kecamatan": "CINERE"
    },
    {
      "id_kecamatan": "3277010",
      "id_kabupaten": "3277",
      "nama_kecamatan": "CIMAHI SELATAN"
    },
    {
      "id_kecamatan": "3277020",
      "id_kabupaten": "3277",
      "nama_kecamatan": "CIMAHI TENGAH"
    },
    {
      "id_kecamatan": "3277030",
      "id_kabupaten": "3277",
      "nama_kecamatan": "CIMAHI UTARA"
    },
    {
      "id_kecamatan": "3278010",
      "id_kabupaten": "3278",
      "nama_kecamatan": "KAWALU"
    },
    {
      "id_kecamatan": "3278020",
      "id_kabupaten": "3278",
      "nama_kecamatan": "TAMANSARI"
    },
    {
      "id_kecamatan": "3278030",
      "id_kabupaten": "3278",
      "nama_kecamatan": "CIBEUREUM"
    },
    {
      "id_kecamatan": "3278031",
      "id_kabupaten": "3278",
      "nama_kecamatan": "PURBARATU"
    },
    {
      "id_kecamatan": "3278040",
      "id_kabupaten": "3278",
      "nama_kecamatan": "TAWANG"
    },
    {
      "id_kecamatan": "3278050",
      "id_kabupaten": "3278",
      "nama_kecamatan": "CIHIDEUNG"
    },
    {
      "id_kecamatan": "3278060",
      "id_kabupaten": "3278",
      "nama_kecamatan": "MANGKUBUMI"
    },
    {
      "id_kecamatan": "3278070",
      "id_kabupaten": "3278",
      "nama_kecamatan": "INDIHIANG"
    },
    {
      "id_kecamatan": "3278071",
      "id_kabupaten": "3278",
      "nama_kecamatan": "BUNGURSARI"
    },
    {
      "id_kecamatan": "3278080",
      "id_kabupaten": "3278",
      "nama_kecamatan": "CIPEDES"
    },
    {
      "id_kecamatan": "3279010",
      "id_kabupaten": "3279",
      "nama_kecamatan": "BANJAR"
    },
    {
      "id_kecamatan": "3279020",
      "id_kabupaten": "3279",
      "nama_kecamatan": "PURWAHARJA"
    },
    {
      "id_kecamatan": "3279030",
      "id_kabupaten": "3279",
      "nama_kecamatan": "PATARUMAN"
    },
    {
      "id_kecamatan": "3279040",
      "id_kabupaten": "3279",
      "nama_kecamatan": "LANGENSARI"
    },
    {
      "id_kecamatan": "3301010",
      "id_kabupaten": "3301",
      "nama_kecamatan": "DAYEUHLUHUR"
    },
    {
      "id_kecamatan": "3301020",
      "id_kabupaten": "3301",
      "nama_kecamatan": "WANAREJA"
    },
    {
      "id_kecamatan": "3301030",
      "id_kabupaten": "3301",
      "nama_kecamatan": "MAJENANG"
    },
    {
      "id_kecamatan": "3301040",
      "id_kabupaten": "3301",
      "nama_kecamatan": "CIMANGGU"
    },
    {
      "id_kecamatan": "3301050",
      "id_kabupaten": "3301",
      "nama_kecamatan": "KARANGPUCUNG"
    },
    {
      "id_kecamatan": "3301060",
      "id_kabupaten": "3301",
      "nama_kecamatan": "CIPARI"
    },
    {
      "id_kecamatan": "3301070",
      "id_kabupaten": "3301",
      "nama_kecamatan": "SIDAREJA"
    },
    {
      "id_kecamatan": "3301080",
      "id_kabupaten": "3301",
      "nama_kecamatan": "KEDUNGREJA"
    },
    {
      "id_kecamatan": "3301090",
      "id_kabupaten": "3301",
      "nama_kecamatan": "PATIMUAN"
    },
    {
      "id_kecamatan": "3301100",
      "id_kabupaten": "3301",
      "nama_kecamatan": "GANDRUNGMANGU"
    },
    {
      "id_kecamatan": "3301110",
      "id_kabupaten": "3301",
      "nama_kecamatan": "BANTARSARI"
    },
    {
      "id_kecamatan": "3301120",
      "id_kabupaten": "3301",
      "nama_kecamatan": "KAWUNGANTEN"
    },
    {
      "id_kecamatan": "3301121",
      "id_kabupaten": "3301",
      "nama_kecamatan": "KAMPUNG LAUT"
    },
    {
      "id_kecamatan": "3301130",
      "id_kabupaten": "3301",
      "nama_kecamatan": "JERUKLEGI"
    },
    {
      "id_kecamatan": "3301140",
      "id_kabupaten": "3301",
      "nama_kecamatan": "KESUGIHAN"
    },
    {
      "id_kecamatan": "3301150",
      "id_kabupaten": "3301",
      "nama_kecamatan": "ADIPALA"
    },
    {
      "id_kecamatan": "3301160",
      "id_kabupaten": "3301",
      "nama_kecamatan": "MAOS"
    },
    {
      "id_kecamatan": "3301170",
      "id_kabupaten": "3301",
      "nama_kecamatan": "SAMPANG"
    },
    {
      "id_kecamatan": "3301180",
      "id_kabupaten": "3301",
      "nama_kecamatan": "KROYA"
    },
    {
      "id_kecamatan": "3301190",
      "id_kabupaten": "3301",
      "nama_kecamatan": "BINANGUN"
    },
    {
      "id_kecamatan": "3301200",
      "id_kabupaten": "3301",
      "nama_kecamatan": "NUSAWUNGU"
    },
    {
      "id_kecamatan": "3301710",
      "id_kabupaten": "3301",
      "nama_kecamatan": "CILACAP SELATAN"
    },
    {
      "id_kecamatan": "3301720",
      "id_kabupaten": "3301",
      "nama_kecamatan": "CILACAP TENGAH"
    },
    {
      "id_kecamatan": "3301730",
      "id_kabupaten": "3301",
      "nama_kecamatan": "CILACAP UTARA"
    },
    {
      "id_kecamatan": "3302010",
      "id_kabupaten": "3302",
      "nama_kecamatan": "LUMBIR"
    },
    {
      "id_kecamatan": "3302020",
      "id_kabupaten": "3302",
      "nama_kecamatan": "WANGON"
    },
    {
      "id_kecamatan": "3302030",
      "id_kabupaten": "3302",
      "nama_kecamatan": "JATILAWANG"
    },
    {
      "id_kecamatan": "3302040",
      "id_kabupaten": "3302",
      "nama_kecamatan": "RAWALO"
    },
    {
      "id_kecamatan": "3302050",
      "id_kabupaten": "3302",
      "nama_kecamatan": "KEBASEN"
    },
    {
      "id_kecamatan": "3302060",
      "id_kabupaten": "3302",
      "nama_kecamatan": "KEMRANJEN"
    },
    {
      "id_kecamatan": "3302070",
      "id_kabupaten": "3302",
      "nama_kecamatan": "SUMPIUH"
    },
    {
      "id_kecamatan": "3302080",
      "id_kabupaten": "3302",
      "nama_kecamatan": "TAMBAK"
    },
    {
      "id_kecamatan": "3302090",
      "id_kabupaten": "3302",
      "nama_kecamatan": "SOMAGEDE"
    },
    {
      "id_kecamatan": "3302100",
      "id_kabupaten": "3302",
      "nama_kecamatan": "KALIBAGOR"
    },
    {
      "id_kecamatan": "3302110",
      "id_kabupaten": "3302",
      "nama_kecamatan": "BANYUMAS"
    },
    {
      "id_kecamatan": "3302120",
      "id_kabupaten": "3302",
      "nama_kecamatan": "PATIKRAJA"
    },
    {
      "id_kecamatan": "3302130",
      "id_kabupaten": "3302",
      "nama_kecamatan": "PURWOJATI"
    },
    {
      "id_kecamatan": "3302140",
      "id_kabupaten": "3302",
      "nama_kecamatan": "AJIBARANG"
    },
    {
      "id_kecamatan": "3302150",
      "id_kabupaten": "3302",
      "nama_kecamatan": "GUMELAR"
    },
    {
      "id_kecamatan": "3302160",
      "id_kabupaten": "3302",
      "nama_kecamatan": "PEKUNCEN"
    },
    {
      "id_kecamatan": "3302170",
      "id_kabupaten": "3302",
      "nama_kecamatan": "CILONGOK"
    },
    {
      "id_kecamatan": "3302180",
      "id_kabupaten": "3302",
      "nama_kecamatan": "KARANGLEWAS"
    },
    {
      "id_kecamatan": "3302190",
      "id_kabupaten": "3302",
      "nama_kecamatan": "KEDUNG BANTENG"
    },
    {
      "id_kecamatan": "3302200",
      "id_kabupaten": "3302",
      "nama_kecamatan": "BATURRADEN"
    },
    {
      "id_kecamatan": "3302210",
      "id_kabupaten": "3302",
      "nama_kecamatan": "SUMBANG"
    },
    {
      "id_kecamatan": "3302220",
      "id_kabupaten": "3302",
      "nama_kecamatan": "KEMBARAN"
    },
    {
      "id_kecamatan": "3302230",
      "id_kabupaten": "3302",
      "nama_kecamatan": "SOKARAJA"
    },
    {
      "id_kecamatan": "3302710",
      "id_kabupaten": "3302",
      "nama_kecamatan": "PURWOKERTO SELATAN"
    },
    {
      "id_kecamatan": "3302720",
      "id_kabupaten": "3302",
      "nama_kecamatan": "PURWOKERTO BARAT"
    },
    {
      "id_kecamatan": "3302730",
      "id_kabupaten": "3302",
      "nama_kecamatan": "PURWOKERTO TIMUR"
    },
    {
      "id_kecamatan": "3302740",
      "id_kabupaten": "3302",
      "nama_kecamatan": "PURWOKERTO UTARA"
    },
    {
      "id_kecamatan": "3303010",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KEMANGKON"
    },
    {
      "id_kecamatan": "3303020",
      "id_kabupaten": "3303",
      "nama_kecamatan": "BUKATEJA"
    },
    {
      "id_kecamatan": "3303030",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KEJOBONG"
    },
    {
      "id_kecamatan": "3303040",
      "id_kabupaten": "3303",
      "nama_kecamatan": "PENGADEGAN"
    },
    {
      "id_kecamatan": "3303050",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KALIGONDANG"
    },
    {
      "id_kecamatan": "3303060",
      "id_kabupaten": "3303",
      "nama_kecamatan": "PURBALINGGA"
    },
    {
      "id_kecamatan": "3303070",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KALIMANAH"
    },
    {
      "id_kecamatan": "3303080",
      "id_kabupaten": "3303",
      "nama_kecamatan": "PADAMARA"
    },
    {
      "id_kecamatan": "3303090",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KUTASARI"
    },
    {
      "id_kecamatan": "3303100",
      "id_kabupaten": "3303",
      "nama_kecamatan": "BOJONGSARI"
    },
    {
      "id_kecamatan": "3303110",
      "id_kabupaten": "3303",
      "nama_kecamatan": "MREBET"
    },
    {
      "id_kecamatan": "3303120",
      "id_kabupaten": "3303",
      "nama_kecamatan": "BOBOTSARI"
    },
    {
      "id_kecamatan": "3303130",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KARANGREJA"
    },
    {
      "id_kecamatan": "3303131",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KARANGJAMBU"
    },
    {
      "id_kecamatan": "3303140",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KARANGANYAR"
    },
    {
      "id_kecamatan": "3303141",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KERTANEGARA"
    },
    {
      "id_kecamatan": "3303150",
      "id_kabupaten": "3303",
      "nama_kecamatan": "KARANGMONCOL"
    },
    {
      "id_kecamatan": "3303160",
      "id_kabupaten": "3303",
      "nama_kecamatan": "REMBANG"
    },
    {
      "id_kecamatan": "3304010",
      "id_kabupaten": "3304",
      "nama_kecamatan": "SUSUKAN"
    },
    {
      "id_kecamatan": "3304020",
      "id_kabupaten": "3304",
      "nama_kecamatan": "PURWAREJA KLAMPOK"
    },
    {
      "id_kecamatan": "3304030",
      "id_kabupaten": "3304",
      "nama_kecamatan": "MANDIRAJA"
    },
    {
      "id_kecamatan": "3304040",
      "id_kabupaten": "3304",
      "nama_kecamatan": "PURWANEGARA"
    },
    {
      "id_kecamatan": "3304050",
      "id_kabupaten": "3304",
      "nama_kecamatan": "BAWANG"
    },
    {
      "id_kecamatan": "3304060",
      "id_kabupaten": "3304",
      "nama_kecamatan": "BANJARNEGARA"
    },
    {
      "id_kecamatan": "3304061",
      "id_kabupaten": "3304",
      "nama_kecamatan": "PAGEDONGAN"
    },
    {
      "id_kecamatan": "3304070",
      "id_kabupaten": "3304",
      "nama_kecamatan": "SIGALUH"
    },
    {
      "id_kecamatan": "3304080",
      "id_kabupaten": "3304",
      "nama_kecamatan": "MADUKARA"
    },
    {
      "id_kecamatan": "3304090",
      "id_kabupaten": "3304",
      "nama_kecamatan": "BANJARMANGU"
    },
    {
      "id_kecamatan": "3304100",
      "id_kabupaten": "3304",
      "nama_kecamatan": "WANADADI"
    },
    {
      "id_kecamatan": "3304110",
      "id_kabupaten": "3304",
      "nama_kecamatan": "RAKIT"
    },
    {
      "id_kecamatan": "3304120",
      "id_kabupaten": "3304",
      "nama_kecamatan": "PUNGGELAN"
    },
    {
      "id_kecamatan": "3304130",
      "id_kabupaten": "3304",
      "nama_kecamatan": "KARANGKOBAR"
    },
    {
      "id_kecamatan": "3304140",
      "id_kabupaten": "3304",
      "nama_kecamatan": "PAGENTAN"
    },
    {
      "id_kecamatan": "3304150",
      "id_kabupaten": "3304",
      "nama_kecamatan": "PEJAWARAN"
    },
    {
      "id_kecamatan": "3304160",
      "id_kabupaten": "3304",
      "nama_kecamatan": "BATUR"
    },
    {
      "id_kecamatan": "3304170",
      "id_kabupaten": "3304",
      "nama_kecamatan": "WANAYASA"
    },
    {
      "id_kecamatan": "3304180",
      "id_kabupaten": "3304",
      "nama_kecamatan": "KALIBENING"
    },
    {
      "id_kecamatan": "3304181",
      "id_kabupaten": "3304",
      "nama_kecamatan": "PANDANARUM"
    },
    {
      "id_kecamatan": "3305010",
      "id_kabupaten": "3305",
      "nama_kecamatan": "AYAH"
    },
    {
      "id_kecamatan": "3305020",
      "id_kabupaten": "3305",
      "nama_kecamatan": "BUAYAN"
    },
    {
      "id_kecamatan": "3305030",
      "id_kabupaten": "3305",
      "nama_kecamatan": "PURING"
    },
    {
      "id_kecamatan": "3305040",
      "id_kabupaten": "3305",
      "nama_kecamatan": "PETANAHAN"
    },
    {
      "id_kecamatan": "3305050",
      "id_kabupaten": "3305",
      "nama_kecamatan": "KLIRONG"
    },
    {
      "id_kecamatan": "3305060",
      "id_kabupaten": "3305",
      "nama_kecamatan": "BULUSPESANTREN"
    },
    {
      "id_kecamatan": "3305070",
      "id_kabupaten": "3305",
      "nama_kecamatan": "AMBAL"
    },
    {
      "id_kecamatan": "3305080",
      "id_kabupaten": "3305",
      "nama_kecamatan": "MIRIT"
    },
    {
      "id_kecamatan": "3305081",
      "id_kabupaten": "3305",
      "nama_kecamatan": "BONOROWO"
    },
    {
      "id_kecamatan": "3305090",
      "id_kabupaten": "3305",
      "nama_kecamatan": "PREMBUN"
    },
    {
      "id_kecamatan": "3305091",
      "id_kabupaten": "3305",
      "nama_kecamatan": "PADURESO"
    },
    {
      "id_kecamatan": "3305100",
      "id_kabupaten": "3305",
      "nama_kecamatan": "KUTOWINANGUN"
    },
    {
      "id_kecamatan": "3305110",
      "id_kabupaten": "3305",
      "nama_kecamatan": "ALIAN"
    },
    {
      "id_kecamatan": "3305111",
      "id_kabupaten": "3305",
      "nama_kecamatan": "PONCOWARNO"
    },
    {
      "id_kecamatan": "3305120",
      "id_kabupaten": "3305",
      "nama_kecamatan": "KEBUMEN"
    },
    {
      "id_kecamatan": "3305130",
      "id_kabupaten": "3305",
      "nama_kecamatan": "PEJAGOAN"
    },
    {
      "id_kecamatan": "3305140",
      "id_kabupaten": "3305",
      "nama_kecamatan": "SRUWENG"
    },
    {
      "id_kecamatan": "3305150",
      "id_kabupaten": "3305",
      "nama_kecamatan": "ADIMULYO"
    },
    {
      "id_kecamatan": "3305160",
      "id_kabupaten": "3305",
      "nama_kecamatan": "KUWARASAN"
    },
    {
      "id_kecamatan": "3305170",
      "id_kabupaten": "3305",
      "nama_kecamatan": "ROWOKELE"
    },
    {
      "id_kecamatan": "3305180",
      "id_kabupaten": "3305",
      "nama_kecamatan": "SEMPOR"
    },
    {
      "id_kecamatan": "3305190",
      "id_kabupaten": "3305",
      "nama_kecamatan": "GOMBONG"
    },
    {
      "id_kecamatan": "3305200",
      "id_kabupaten": "3305",
      "nama_kecamatan": "KARANGANYAR"
    },
    {
      "id_kecamatan": "3305210",
      "id_kabupaten": "3305",
      "nama_kecamatan": "KARANGGAYAM"
    },
    {
      "id_kecamatan": "3305220",
      "id_kabupaten": "3305",
      "nama_kecamatan": "SADANG"
    },
    {
      "id_kecamatan": "3305221",
      "id_kabupaten": "3305",
      "nama_kecamatan": "KARANGSAMBUNG"
    },
    {
      "id_kecamatan": "3306010",
      "id_kabupaten": "3306",
      "nama_kecamatan": "GRABAG"
    },
    {
      "id_kecamatan": "3306020",
      "id_kabupaten": "3306",
      "nama_kecamatan": "NGOMBOL"
    },
    {
      "id_kecamatan": "3306030",
      "id_kabupaten": "3306",
      "nama_kecamatan": "PURWODADI"
    },
    {
      "id_kecamatan": "3306040",
      "id_kabupaten": "3306",
      "nama_kecamatan": "BAGELEN"
    },
    {
      "id_kecamatan": "3306050",
      "id_kabupaten": "3306",
      "nama_kecamatan": "KALIGESING"
    },
    {
      "id_kecamatan": "3306060",
      "id_kabupaten": "3306",
      "nama_kecamatan": "PURWOREJO"
    },
    {
      "id_kecamatan": "3306070",
      "id_kabupaten": "3306",
      "nama_kecamatan": "BANYU URIP"
    },
    {
      "id_kecamatan": "3306080",
      "id_kabupaten": "3306",
      "nama_kecamatan": "BAYAN"
    },
    {
      "id_kecamatan": "3306090",
      "id_kabupaten": "3306",
      "nama_kecamatan": "KUTOARJO"
    },
    {
      "id_kecamatan": "3306100",
      "id_kabupaten": "3306",
      "nama_kecamatan": "BUTUH"
    },
    {
      "id_kecamatan": "3306110",
      "id_kabupaten": "3306",
      "nama_kecamatan": "PITURUH"
    },
    {
      "id_kecamatan": "3306120",
      "id_kabupaten": "3306",
      "nama_kecamatan": "KEMIRI"
    },
    {
      "id_kecamatan": "3306130",
      "id_kabupaten": "3306",
      "nama_kecamatan": "BRUNO"
    },
    {
      "id_kecamatan": "3306140",
      "id_kabupaten": "3306",
      "nama_kecamatan": "GEBANG"
    },
    {
      "id_kecamatan": "3306150",
      "id_kabupaten": "3306",
      "nama_kecamatan": "LOANO"
    },
    {
      "id_kecamatan": "3306160",
      "id_kabupaten": "3306",
      "nama_kecamatan": "BENER"
    },
    {
      "id_kecamatan": "3307010",
      "id_kabupaten": "3307",
      "nama_kecamatan": "WADASLINTANG"
    },
    {
      "id_kecamatan": "3307020",
      "id_kabupaten": "3307",
      "nama_kecamatan": "KEPIL"
    },
    {
      "id_kecamatan": "3307030",
      "id_kabupaten": "3307",
      "nama_kecamatan": "SAPURAN"
    },
    {
      "id_kecamatan": "3307031",
      "id_kabupaten": "3307",
      "nama_kecamatan": "KALIBAWANG"
    },
    {
      "id_kecamatan": "3307040",
      "id_kabupaten": "3307",
      "nama_kecamatan": "KALIWIRO"
    },
    {
      "id_kecamatan": "3307050",
      "id_kabupaten": "3307",
      "nama_kecamatan": "LEKSONO"
    },
    {
      "id_kecamatan": "3307051",
      "id_kabupaten": "3307",
      "nama_kecamatan": "SUKOHARJO"
    },
    {
      "id_kecamatan": "3307060",
      "id_kabupaten": "3307",
      "nama_kecamatan": "SELOMERTO"
    },
    {
      "id_kecamatan": "3307070",
      "id_kabupaten": "3307",
      "nama_kecamatan": "KALIKAJAR"
    },
    {
      "id_kecamatan": "3307080",
      "id_kabupaten": "3307",
      "nama_kecamatan": "KERTEK"
    },
    {
      "id_kecamatan": "3307090",
      "id_kabupaten": "3307",
      "nama_kecamatan": "WONOSOBO"
    },
    {
      "id_kecamatan": "3307100",
      "id_kabupaten": "3307",
      "nama_kecamatan": "WATUMALANG"
    },
    {
      "id_kecamatan": "3307110",
      "id_kabupaten": "3307",
      "nama_kecamatan": "MOJOTENGAH"
    },
    {
      "id_kecamatan": "3307120",
      "id_kabupaten": "3307",
      "nama_kecamatan": "GARUNG"
    },
    {
      "id_kecamatan": "3307130",
      "id_kabupaten": "3307",
      "nama_kecamatan": "KEJAJAR"
    },
    {
      "id_kecamatan": "3308010",
      "id_kabupaten": "3308",
      "nama_kecamatan": "SALAMAN"
    },
    {
      "id_kecamatan": "3308020",
      "id_kabupaten": "3308",
      "nama_kecamatan": "BOROBUDUR"
    },
    {
      "id_kecamatan": "3308030",
      "id_kabupaten": "3308",
      "nama_kecamatan": "NGLUWAR"
    },
    {
      "id_kecamatan": "3308040",
      "id_kabupaten": "3308",
      "nama_kecamatan": "SALAM"
    },
    {
      "id_kecamatan": "3308050",
      "id_kabupaten": "3308",
      "nama_kecamatan": "SRUMBUNG"
    },
    {
      "id_kecamatan": "3308060",
      "id_kabupaten": "3308",
      "nama_kecamatan": "DUKUN"
    },
    {
      "id_kecamatan": "3308070",
      "id_kabupaten": "3308",
      "nama_kecamatan": "MUNTILAN"
    },
    {
      "id_kecamatan": "3308080",
      "id_kabupaten": "3308",
      "nama_kecamatan": "MUNGKID"
    },
    {
      "id_kecamatan": "3308090",
      "id_kabupaten": "3308",
      "nama_kecamatan": "SAWANGAN"
    },
    {
      "id_kecamatan": "3308100",
      "id_kabupaten": "3308",
      "nama_kecamatan": "CANDIMULYO"
    },
    {
      "id_kecamatan": "3308110",
      "id_kabupaten": "3308",
      "nama_kecamatan": "MERTOYUDAN"
    },
    {
      "id_kecamatan": "3308120",
      "id_kabupaten": "3308",
      "nama_kecamatan": "TEMPURAN"
    },
    {
      "id_kecamatan": "3308130",
      "id_kabupaten": "3308",
      "nama_kecamatan": "KAJORAN"
    },
    {
      "id_kecamatan": "3308140",
      "id_kabupaten": "3308",
      "nama_kecamatan": "KALIANGKRIK"
    },
    {
      "id_kecamatan": "3308150",
      "id_kabupaten": "3308",
      "nama_kecamatan": "BANDONGAN"
    },
    {
      "id_kecamatan": "3308160",
      "id_kabupaten": "3308",
      "nama_kecamatan": "WINDUSARI"
    },
    {
      "id_kecamatan": "3308170",
      "id_kabupaten": "3308",
      "nama_kecamatan": "SECANG"
    },
    {
      "id_kecamatan": "3308180",
      "id_kabupaten": "3308",
      "nama_kecamatan": "TEGALREJO"
    },
    {
      "id_kecamatan": "3308190",
      "id_kabupaten": "3308",
      "nama_kecamatan": "PAKIS"
    },
    {
      "id_kecamatan": "3308200",
      "id_kabupaten": "3308",
      "nama_kecamatan": "GRABAG"
    },
    {
      "id_kecamatan": "3308210",
      "id_kabupaten": "3308",
      "nama_kecamatan": "NGABLAK"
    },
    {
      "id_kecamatan": "3309010",
      "id_kabupaten": "3309",
      "nama_kecamatan": "SELO"
    },
    {
      "id_kecamatan": "3309020",
      "id_kabupaten": "3309",
      "nama_kecamatan": "AMPEL"
    },
    {
      "id_kecamatan": "3309030",
      "id_kabupaten": "3309",
      "nama_kecamatan": "CEPOGO"
    },
    {
      "id_kecamatan": "3309040",
      "id_kabupaten": "3309",
      "nama_kecamatan": "MUSUK"
    },
    {
      "id_kecamatan": "3309050",
      "id_kabupaten": "3309",
      "nama_kecamatan": "BOYOLALI"
    },
    {
      "id_kecamatan": "3309060",
      "id_kabupaten": "3309",
      "nama_kecamatan": "MOJOSONGO"
    },
    {
      "id_kecamatan": "3309070",
      "id_kabupaten": "3309",
      "nama_kecamatan": "TERAS"
    },
    {
      "id_kecamatan": "3309080",
      "id_kabupaten": "3309",
      "nama_kecamatan": "SAWIT"
    },
    {
      "id_kecamatan": "3309090",
      "id_kabupaten": "3309",
      "nama_kecamatan": "BANYUDONO"
    },
    {
      "id_kecamatan": "3309100",
      "id_kabupaten": "3309",
      "nama_kecamatan": "SAMBI"
    },
    {
      "id_kecamatan": "3309110",
      "id_kabupaten": "3309",
      "nama_kecamatan": "NGEMPLAK"
    },
    {
      "id_kecamatan": "3309120",
      "id_kabupaten": "3309",
      "nama_kecamatan": "NOGOSARI"
    },
    {
      "id_kecamatan": "3309130",
      "id_kabupaten": "3309",
      "nama_kecamatan": "SIMO"
    },
    {
      "id_kecamatan": "3309140",
      "id_kabupaten": "3309",
      "nama_kecamatan": "KARANGGEDE"
    },
    {
      "id_kecamatan": "3309150",
      "id_kabupaten": "3309",
      "nama_kecamatan": "KLEGO"
    },
    {
      "id_kecamatan": "3309160",
      "id_kabupaten": "3309",
      "nama_kecamatan": "ANDONG"
    },
    {
      "id_kecamatan": "3309170",
      "id_kabupaten": "3309",
      "nama_kecamatan": "KEMUSU"
    },
    {
      "id_kecamatan": "3309180",
      "id_kabupaten": "3309",
      "nama_kecamatan": "WONOSEGORO"
    },
    {
      "id_kecamatan": "3309190",
      "id_kabupaten": "3309",
      "nama_kecamatan": "JUWANGI"
    },
    {
      "id_kecamatan": "3310010",
      "id_kabupaten": "3310",
      "nama_kecamatan": "PRAMBANAN"
    },
    {
      "id_kecamatan": "3310020",
      "id_kabupaten": "3310",
      "nama_kecamatan": "GANTIWARNO"
    },
    {
      "id_kecamatan": "3310030",
      "id_kabupaten": "3310",
      "nama_kecamatan": "WEDI"
    },
    {
      "id_kecamatan": "3310040",
      "id_kabupaten": "3310",
      "nama_kecamatan": "BAYAT"
    },
    {
      "id_kecamatan": "3310050",
      "id_kabupaten": "3310",
      "nama_kecamatan": "CAWAS"
    },
    {
      "id_kecamatan": "3310060",
      "id_kabupaten": "3310",
      "nama_kecamatan": "TRUCUK"
    },
    {
      "id_kecamatan": "3310070",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KALIKOTES"
    },
    {
      "id_kecamatan": "3310080",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KEBONARUM"
    },
    {
      "id_kecamatan": "3310090",
      "id_kabupaten": "3310",
      "nama_kecamatan": "JOGONALAN"
    },
    {
      "id_kecamatan": "3310100",
      "id_kabupaten": "3310",
      "nama_kecamatan": "MANISRENGGO"
    },
    {
      "id_kecamatan": "3310110",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KARANGNONGKO"
    },
    {
      "id_kecamatan": "3310120",
      "id_kabupaten": "3310",
      "nama_kecamatan": "NGAWEN"
    },
    {
      "id_kecamatan": "3310130",
      "id_kabupaten": "3310",
      "nama_kecamatan": "CEPER"
    },
    {
      "id_kecamatan": "3310140",
      "id_kabupaten": "3310",
      "nama_kecamatan": "PEDAN"
    },
    {
      "id_kecamatan": "3310150",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KARANGDOWO"
    },
    {
      "id_kecamatan": "3310160",
      "id_kabupaten": "3310",
      "nama_kecamatan": "JUWIRING"
    },
    {
      "id_kecamatan": "3310170",
      "id_kabupaten": "3310",
      "nama_kecamatan": "WONOSARI"
    },
    {
      "id_kecamatan": "3310180",
      "id_kabupaten": "3310",
      "nama_kecamatan": "DELANGGU"
    },
    {
      "id_kecamatan": "3310190",
      "id_kabupaten": "3310",
      "nama_kecamatan": "POLANHARJO"
    },
    {
      "id_kecamatan": "3310200",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KARANGANOM"
    },
    {
      "id_kecamatan": "3310210",
      "id_kabupaten": "3310",
      "nama_kecamatan": "TULUNG"
    },
    {
      "id_kecamatan": "3310220",
      "id_kabupaten": "3310",
      "nama_kecamatan": "JATINOM"
    },
    {
      "id_kecamatan": "3310230",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KEMALANG"
    },
    {
      "id_kecamatan": "3310710",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KLATEN SELATAN"
    },
    {
      "id_kecamatan": "3310720",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KLATEN TENGAH"
    },
    {
      "id_kecamatan": "3310730",
      "id_kabupaten": "3310",
      "nama_kecamatan": "KLATEN UTARA"
    },
    {
      "id_kecamatan": "3311010",
      "id_kabupaten": "3311",
      "nama_kecamatan": "WERU"
    },
    {
      "id_kecamatan": "3311020",
      "id_kabupaten": "3311",
      "nama_kecamatan": "BULU"
    },
    {
      "id_kecamatan": "3311030",
      "id_kabupaten": "3311",
      "nama_kecamatan": "TAWANGSARI"
    },
    {
      "id_kecamatan": "3311040",
      "id_kabupaten": "3311",
      "nama_kecamatan": "SUKOHARJO"
    },
    {
      "id_kecamatan": "3311050",
      "id_kabupaten": "3311",
      "nama_kecamatan": "NGUTER"
    },
    {
      "id_kecamatan": "3311060",
      "id_kabupaten": "3311",
      "nama_kecamatan": "BENDOSARI"
    },
    {
      "id_kecamatan": "3311070",
      "id_kabupaten": "3311",
      "nama_kecamatan": "POLOKARTO"
    },
    {
      "id_kecamatan": "3311080",
      "id_kabupaten": "3311",
      "nama_kecamatan": "MOJOLABAN"
    },
    {
      "id_kecamatan": "3311090",
      "id_kabupaten": "3311",
      "nama_kecamatan": "GROGOL"
    },
    {
      "id_kecamatan": "3311100",
      "id_kabupaten": "3311",
      "nama_kecamatan": "BAKI"
    },
    {
      "id_kecamatan": "3311110",
      "id_kabupaten": "3311",
      "nama_kecamatan": "GATAK"
    },
    {
      "id_kecamatan": "3311120",
      "id_kabupaten": "3311",
      "nama_kecamatan": "KARTASURA"
    },
    {
      "id_kecamatan": "3312010",
      "id_kabupaten": "3312",
      "nama_kecamatan": "PRACIMANTORO"
    },
    {
      "id_kecamatan": "3312020",
      "id_kabupaten": "3312",
      "nama_kecamatan": "PARANGGUPITO"
    },
    {
      "id_kecamatan": "3312030",
      "id_kabupaten": "3312",
      "nama_kecamatan": "GIRITONTRO"
    },
    {
      "id_kecamatan": "3312040",
      "id_kabupaten": "3312",
      "nama_kecamatan": "GIRIWOYO"
    },
    {
      "id_kecamatan": "3312050",
      "id_kabupaten": "3312",
      "nama_kecamatan": "BATUWARNO"
    },
    {
      "id_kecamatan": "3312060",
      "id_kabupaten": "3312",
      "nama_kecamatan": "KARANGTENGAH"
    },
    {
      "id_kecamatan": "3312070",
      "id_kabupaten": "3312",
      "nama_kecamatan": "TIRTOMOYO"
    },
    {
      "id_kecamatan": "3312080",
      "id_kabupaten": "3312",
      "nama_kecamatan": "NGUNTORONADI"
    },
    {
      "id_kecamatan": "3312090",
      "id_kabupaten": "3312",
      "nama_kecamatan": "BATURETNO"
    },
    {
      "id_kecamatan": "3312100",
      "id_kabupaten": "3312",
      "nama_kecamatan": "EROMOKO"
    },
    {
      "id_kecamatan": "3312110",
      "id_kabupaten": "3312",
      "nama_kecamatan": "WURYANTORO"
    },
    {
      "id_kecamatan": "3312120",
      "id_kabupaten": "3312",
      "nama_kecamatan": "MANYARAN"
    },
    {
      "id_kecamatan": "3312130",
      "id_kabupaten": "3312",
      "nama_kecamatan": "SELOGIRI"
    },
    {
      "id_kecamatan": "3312140",
      "id_kabupaten": "3312",
      "nama_kecamatan": "WONOGIRI"
    },
    {
      "id_kecamatan": "3312150",
      "id_kabupaten": "3312",
      "nama_kecamatan": "NGADIROJO"
    },
    {
      "id_kecamatan": "3312160",
      "id_kabupaten": "3312",
      "nama_kecamatan": "SIDOHARJO"
    },
    {
      "id_kecamatan": "3312170",
      "id_kabupaten": "3312",
      "nama_kecamatan": "JATIROTO"
    },
    {
      "id_kecamatan": "3312180",
      "id_kabupaten": "3312",
      "nama_kecamatan": "KISMANTORO"
    },
    {
      "id_kecamatan": "3312190",
      "id_kabupaten": "3312",
      "nama_kecamatan": "PURWANTORO"
    },
    {
      "id_kecamatan": "3312200",
      "id_kabupaten": "3312",
      "nama_kecamatan": "BULUKERTO"
    },
    {
      "id_kecamatan": "3312201",
      "id_kabupaten": "3312",
      "nama_kecamatan": "PUHPELEM"
    },
    {
      "id_kecamatan": "3312210",
      "id_kabupaten": "3312",
      "nama_kecamatan": "SLOGOHIMO"
    },
    {
      "id_kecamatan": "3312220",
      "id_kabupaten": "3312",
      "nama_kecamatan": "JATISRONO"
    },
    {
      "id_kecamatan": "3312230",
      "id_kabupaten": "3312",
      "nama_kecamatan": "JATIPURNO"
    },
    {
      "id_kecamatan": "3312240",
      "id_kabupaten": "3312",
      "nama_kecamatan": "GIRIMARTO"
    },
    {
      "id_kecamatan": "3313010",
      "id_kabupaten": "3313",
      "nama_kecamatan": "JATIPURO"
    },
    {
      "id_kecamatan": "3313020",
      "id_kabupaten": "3313",
      "nama_kecamatan": "JATIYOSO"
    },
    {
      "id_kecamatan": "3313030",
      "id_kabupaten": "3313",
      "nama_kecamatan": "JUMAPOLO"
    },
    {
      "id_kecamatan": "3313040",
      "id_kabupaten": "3313",
      "nama_kecamatan": "JUMANTONO"
    },
    {
      "id_kecamatan": "3313050",
      "id_kabupaten": "3313",
      "nama_kecamatan": "MATESIH"
    },
    {
      "id_kecamatan": "3313060",
      "id_kabupaten": "3313",
      "nama_kecamatan": "TAWANGMANGU"
    },
    {
      "id_kecamatan": "3313070",
      "id_kabupaten": "3313",
      "nama_kecamatan": "NGARGOYOSO"
    },
    {
      "id_kecamatan": "3313080",
      "id_kabupaten": "3313",
      "nama_kecamatan": "KARANGPANDAN"
    },
    {
      "id_kecamatan": "3313090",
      "id_kabupaten": "3313",
      "nama_kecamatan": "KARANGANYAR"
    },
    {
      "id_kecamatan": "3313100",
      "id_kabupaten": "3313",
      "nama_kecamatan": "TASIKMADU"
    },
    {
      "id_kecamatan": "3313110",
      "id_kabupaten": "3313",
      "nama_kecamatan": "JATEN"
    },
    {
      "id_kecamatan": "3313120",
      "id_kabupaten": "3313",
      "nama_kecamatan": "COLOMADU"
    },
    {
      "id_kecamatan": "3313130",
      "id_kabupaten": "3313",
      "nama_kecamatan": "GONDANGREJO"
    },
    {
      "id_kecamatan": "3313140",
      "id_kabupaten": "3313",
      "nama_kecamatan": "KEBAKKRAMAT"
    },
    {
      "id_kecamatan": "3313150",
      "id_kabupaten": "3313",
      "nama_kecamatan": "MOJOGEDANG"
    },
    {
      "id_kecamatan": "3313160",
      "id_kabupaten": "3313",
      "nama_kecamatan": "KERJO"
    },
    {
      "id_kecamatan": "3313170",
      "id_kabupaten": "3313",
      "nama_kecamatan": "JENAWI"
    },
    {
      "id_kecamatan": "3314010",
      "id_kabupaten": "3314",
      "nama_kecamatan": "KALIJAMBE"
    },
    {
      "id_kecamatan": "3314020",
      "id_kabupaten": "3314",
      "nama_kecamatan": "PLUPUH"
    },
    {
      "id_kecamatan": "3314030",
      "id_kabupaten": "3314",
      "nama_kecamatan": "MASARAN"
    },
    {
      "id_kecamatan": "3314040",
      "id_kabupaten": "3314",
      "nama_kecamatan": "KEDAWUNG"
    },
    {
      "id_kecamatan": "3314050",
      "id_kabupaten": "3314",
      "nama_kecamatan": "SAMBIREJO"
    },
    {
      "id_kecamatan": "3314060",
      "id_kabupaten": "3314",
      "nama_kecamatan": "GONDANG"
    },
    {
      "id_kecamatan": "3314070",
      "id_kabupaten": "3314",
      "nama_kecamatan": "SAMBUNG MACAN"
    },
    {
      "id_kecamatan": "3314080",
      "id_kabupaten": "3314",
      "nama_kecamatan": "NGRAMPAL"
    },
    {
      "id_kecamatan": "3314090",
      "id_kabupaten": "3314",
      "nama_kecamatan": "KARANGMALANG"
    },
    {
      "id_kecamatan": "3314100",
      "id_kabupaten": "3314",
      "nama_kecamatan": "SRAGEN"
    },
    {
      "id_kecamatan": "3314110",
      "id_kabupaten": "3314",
      "nama_kecamatan": "SIDOHARJO"
    },
    {
      "id_kecamatan": "3314120",
      "id_kabupaten": "3314",
      "nama_kecamatan": "TANON"
    },
    {
      "id_kecamatan": "3314130",
      "id_kabupaten": "3314",
      "nama_kecamatan": "GEMOLONG"
    },
    {
      "id_kecamatan": "3314140",
      "id_kabupaten": "3314",
      "nama_kecamatan": "MIRI"
    },
    {
      "id_kecamatan": "3314150",
      "id_kabupaten": "3314",
      "nama_kecamatan": "SUMBERLAWANG"
    },
    {
      "id_kecamatan": "3314160",
      "id_kabupaten": "3314",
      "nama_kecamatan": "MONDOKAN"
    },
    {
      "id_kecamatan": "3314170",
      "id_kabupaten": "3314",
      "nama_kecamatan": "SUKODONO"
    },
    {
      "id_kecamatan": "3314180",
      "id_kabupaten": "3314",
      "nama_kecamatan": "GESI"
    },
    {
      "id_kecamatan": "3314190",
      "id_kabupaten": "3314",
      "nama_kecamatan": "TANGEN"
    },
    {
      "id_kecamatan": "3314200",
      "id_kabupaten": "3314",
      "nama_kecamatan": "JENAR"
    },
    {
      "id_kecamatan": "3315010",
      "id_kabupaten": "3315",
      "nama_kecamatan": "KEDUNGJATI"
    },
    {
      "id_kecamatan": "3315020",
      "id_kabupaten": "3315",
      "nama_kecamatan": "KARANGRAYUNG"
    },
    {
      "id_kecamatan": "3315030",
      "id_kabupaten": "3315",
      "nama_kecamatan": "PENAWANGAN"
    },
    {
      "id_kecamatan": "3315040",
      "id_kabupaten": "3315",
      "nama_kecamatan": "TOROH"
    },
    {
      "id_kecamatan": "3315050",
      "id_kabupaten": "3315",
      "nama_kecamatan": "GEYER"
    },
    {
      "id_kecamatan": "3315060",
      "id_kabupaten": "3315",
      "nama_kecamatan": "PULOKULON"
    },
    {
      "id_kecamatan": "3315070",
      "id_kabupaten": "3315",
      "nama_kecamatan": "KRADENAN"
    },
    {
      "id_kecamatan": "3315080",
      "id_kabupaten": "3315",
      "nama_kecamatan": "GABUS"
    },
    {
      "id_kecamatan": "3315090",
      "id_kabupaten": "3315",
      "nama_kecamatan": "NGARINGAN"
    },
    {
      "id_kecamatan": "3315100",
      "id_kabupaten": "3315",
      "nama_kecamatan": "WIROSARI"
    },
    {
      "id_kecamatan": "3315110",
      "id_kabupaten": "3315",
      "nama_kecamatan": "TAWANGHARJO"
    },
    {
      "id_kecamatan": "3315120",
      "id_kabupaten": "3315",
      "nama_kecamatan": "GROBOGAN"
    },
    {
      "id_kecamatan": "3315130",
      "id_kabupaten": "3315",
      "nama_kecamatan": "PURWODADI"
    },
    {
      "id_kecamatan": "3315140",
      "id_kabupaten": "3315",
      "nama_kecamatan": "BRATI"
    },
    {
      "id_kecamatan": "3315150",
      "id_kabupaten": "3315",
      "nama_kecamatan": "KLAMBU"
    },
    {
      "id_kecamatan": "3315160",
      "id_kabupaten": "3315",
      "nama_kecamatan": "GODONG"
    },
    {
      "id_kecamatan": "3315170",
      "id_kabupaten": "3315",
      "nama_kecamatan": "GUBUG"
    },
    {
      "id_kecamatan": "3315180",
      "id_kabupaten": "3315",
      "nama_kecamatan": "TEGOWANU"
    },
    {
      "id_kecamatan": "3315190",
      "id_kabupaten": "3315",
      "nama_kecamatan": "TANGGUNGHARJO"
    },
    {
      "id_kecamatan": "3316010",
      "id_kabupaten": "3316",
      "nama_kecamatan": "JATI"
    },
    {
      "id_kecamatan": "3316020",
      "id_kabupaten": "3316",
      "nama_kecamatan": "RANDUBLATUNG"
    },
    {
      "id_kecamatan": "3316030",
      "id_kabupaten": "3316",
      "nama_kecamatan": "KRADENAN"
    },
    {
      "id_kecamatan": "3316040",
      "id_kabupaten": "3316",
      "nama_kecamatan": "KEDUNGTUBAN"
    },
    {
      "id_kecamatan": "3316050",
      "id_kabupaten": "3316",
      "nama_kecamatan": "CEPU"
    },
    {
      "id_kecamatan": "3316060",
      "id_kabupaten": "3316",
      "nama_kecamatan": "SAMBONG"
    },
    {
      "id_kecamatan": "3316070",
      "id_kabupaten": "3316",
      "nama_kecamatan": "JIKEN"
    },
    {
      "id_kecamatan": "3316080",
      "id_kabupaten": "3316",
      "nama_kecamatan": "BOGOREJO"
    },
    {
      "id_kecamatan": "3316090",
      "id_kabupaten": "3316",
      "nama_kecamatan": "JEPON"
    },
    {
      "id_kecamatan": "3316100",
      "id_kabupaten": "3316",
      "nama_kecamatan": "KOTA BLORA"
    },
    {
      "id_kecamatan": "3316110",
      "id_kabupaten": "3316",
      "nama_kecamatan": "BANJAREJO"
    },
    {
      "id_kecamatan": "3316120",
      "id_kabupaten": "3316",
      "nama_kecamatan": "TUNJUNGAN"
    },
    {
      "id_kecamatan": "3316130",
      "id_kabupaten": "3316",
      "nama_kecamatan": "JAPAH"
    },
    {
      "id_kecamatan": "3316140",
      "id_kabupaten": "3316",
      "nama_kecamatan": "NGAWEN"
    },
    {
      "id_kecamatan": "3316150",
      "id_kabupaten": "3316",
      "nama_kecamatan": "KUNDURAN"
    },
    {
      "id_kecamatan": "3316160",
      "id_kabupaten": "3316",
      "nama_kecamatan": "TODANAN"
    },
    {
      "id_kecamatan": "3317010",
      "id_kabupaten": "3317",
      "nama_kecamatan": "SUMBER"
    },
    {
      "id_kecamatan": "3317020",
      "id_kabupaten": "3317",
      "nama_kecamatan": "BULU"
    },
    {
      "id_kecamatan": "3317030",
      "id_kabupaten": "3317",
      "nama_kecamatan": "GUNEM"
    },
    {
      "id_kecamatan": "3317040",
      "id_kabupaten": "3317",
      "nama_kecamatan": "SALE"
    },
    {
      "id_kecamatan": "3317050",
      "id_kabupaten": "3317",
      "nama_kecamatan": "SARANG"
    },
    {
      "id_kecamatan": "3317060",
      "id_kabupaten": "3317",
      "nama_kecamatan": "SEDAN"
    },
    {
      "id_kecamatan": "3317070",
      "id_kabupaten": "3317",
      "nama_kecamatan": "PAMOTAN"
    },
    {
      "id_kecamatan": "3317080",
      "id_kabupaten": "3317",
      "nama_kecamatan": "SULANG"
    },
    {
      "id_kecamatan": "3317090",
      "id_kabupaten": "3317",
      "nama_kecamatan": "KALIORI"
    },
    {
      "id_kecamatan": "3317100",
      "id_kabupaten": "3317",
      "nama_kecamatan": "REMBANG"
    },
    {
      "id_kecamatan": "3317110",
      "id_kabupaten": "3317",
      "nama_kecamatan": "PANCUR"
    },
    {
      "id_kecamatan": "3317120",
      "id_kabupaten": "3317",
      "nama_kecamatan": "KRAGAN"
    },
    {
      "id_kecamatan": "3317130",
      "id_kabupaten": "3317",
      "nama_kecamatan": "SLUKE"
    },
    {
      "id_kecamatan": "3317140",
      "id_kabupaten": "3317",
      "nama_kecamatan": "LASEM"
    },
    {
      "id_kecamatan": "3318010",
      "id_kabupaten": "3318",
      "nama_kecamatan": "SUKOLILO"
    },
    {
      "id_kecamatan": "3318020",
      "id_kabupaten": "3318",
      "nama_kecamatan": "KAYEN"
    },
    {
      "id_kecamatan": "3318030",
      "id_kabupaten": "3318",
      "nama_kecamatan": "TAMBAKROMO"
    },
    {
      "id_kecamatan": "3318040",
      "id_kabupaten": "3318",
      "nama_kecamatan": "WINONG"
    },
    {
      "id_kecamatan": "3318050",
      "id_kabupaten": "3318",
      "nama_kecamatan": "PUCAKWANGI"
    },
    {
      "id_kecamatan": "3318060",
      "id_kabupaten": "3318",
      "nama_kecamatan": "JAKEN"
    },
    {
      "id_kecamatan": "3318070",
      "id_kabupaten": "3318",
      "nama_kecamatan": "BATANGAN"
    },
    {
      "id_kecamatan": "3318080",
      "id_kabupaten": "3318",
      "nama_kecamatan": "JUWANA"
    },
    {
      "id_kecamatan": "3318090",
      "id_kabupaten": "3318",
      "nama_kecamatan": "JAKENAN"
    },
    {
      "id_kecamatan": "3318100",
      "id_kabupaten": "3318",
      "nama_kecamatan": "PATI"
    },
    {
      "id_kecamatan": "3318110",
      "id_kabupaten": "3318",
      "nama_kecamatan": "GABUS"
    },
    {
      "id_kecamatan": "3318120",
      "id_kabupaten": "3318",
      "nama_kecamatan": "MARGOREJO"
    },
    {
      "id_kecamatan": "3318130",
      "id_kabupaten": "3318",
      "nama_kecamatan": "GEMBONG"
    },
    {
      "id_kecamatan": "3318140",
      "id_kabupaten": "3318",
      "nama_kecamatan": "TLOGOWUNGU"
    },
    {
      "id_kecamatan": "3318150",
      "id_kabupaten": "3318",
      "nama_kecamatan": "WEDARIJAKSA"
    },
    {
      "id_kecamatan": "3318160",
      "id_kabupaten": "3318",
      "nama_kecamatan": "TRANGKIL"
    },
    {
      "id_kecamatan": "3318170",
      "id_kabupaten": "3318",
      "nama_kecamatan": "MARGOYOSO"
    },
    {
      "id_kecamatan": "3318180",
      "id_kabupaten": "3318",
      "nama_kecamatan": "GUNUNG WUNGKAL"
    },
    {
      "id_kecamatan": "3318190",
      "id_kabupaten": "3318",
      "nama_kecamatan": "CLUWAK"
    },
    {
      "id_kecamatan": "3318200",
      "id_kabupaten": "3318",
      "nama_kecamatan": "TAYU"
    },
    {
      "id_kecamatan": "3318210",
      "id_kabupaten": "3318",
      "nama_kecamatan": "DUKUHSETI"
    },
    {
      "id_kecamatan": "3319010",
      "id_kabupaten": "3319",
      "nama_kecamatan": "KALIWUNGU"
    },
    {
      "id_kecamatan": "3319020",
      "id_kabupaten": "3319",
      "nama_kecamatan": "KOTA KUDUS"
    },
    {
      "id_kecamatan": "3319030",
      "id_kabupaten": "3319",
      "nama_kecamatan": "JATI"
    },
    {
      "id_kecamatan": "3319040",
      "id_kabupaten": "3319",
      "nama_kecamatan": "UNDAAN"
    },
    {
      "id_kecamatan": "3319050",
      "id_kabupaten": "3319",
      "nama_kecamatan": "MEJOBO"
    },
    {
      "id_kecamatan": "3319060",
      "id_kabupaten": "3319",
      "nama_kecamatan": "JEKULO"
    },
    {
      "id_kecamatan": "3319070",
      "id_kabupaten": "3319",
      "nama_kecamatan": "BAE"
    },
    {
      "id_kecamatan": "3319080",
      "id_kabupaten": "3319",
      "nama_kecamatan": "GEBOG"
    },
    {
      "id_kecamatan": "3319090",
      "id_kabupaten": "3319",
      "nama_kecamatan": "DAWE"
    },
    {
      "id_kecamatan": "3320010",
      "id_kabupaten": "3320",
      "nama_kecamatan": "KEDUNG"
    },
    {
      "id_kecamatan": "3320020",
      "id_kabupaten": "3320",
      "nama_kecamatan": "PECANGAAN"
    },
    {
      "id_kecamatan": "3320021",
      "id_kabupaten": "3320",
      "nama_kecamatan": "KALINYAMATAN"
    },
    {
      "id_kecamatan": "3320030",
      "id_kabupaten": "3320",
      "nama_kecamatan": "WELAHAN"
    },
    {
      "id_kecamatan": "3320040",
      "id_kabupaten": "3320",
      "nama_kecamatan": "MAYONG"
    },
    {
      "id_kecamatan": "3320050",
      "id_kabupaten": "3320",
      "nama_kecamatan": "NALUMSARI"
    },
    {
      "id_kecamatan": "3320060",
      "id_kabupaten": "3320",
      "nama_kecamatan": "BATEALIT"
    },
    {
      "id_kecamatan": "3320070",
      "id_kabupaten": "3320",
      "nama_kecamatan": "TAHUNAN"
    },
    {
      "id_kecamatan": "3320080",
      "id_kabupaten": "3320",
      "nama_kecamatan": "JEPARA"
    },
    {
      "id_kecamatan": "3320090",
      "id_kabupaten": "3320",
      "nama_kecamatan": "MLONGGO"
    },
    {
      "id_kecamatan": "3320091",
      "id_kabupaten": "3320",
      "nama_kecamatan": "PAKIS AJI"
    },
    {
      "id_kecamatan": "3320100",
      "id_kabupaten": "3320",
      "nama_kecamatan": "BANGSRI"
    },
    {
      "id_kecamatan": "3320101",
      "id_kabupaten": "3320",
      "nama_kecamatan": "KEMBANG"
    },
    {
      "id_kecamatan": "3320110",
      "id_kabupaten": "3320",
      "nama_kecamatan": "KELING"
    },
    {
      "id_kecamatan": "3320111",
      "id_kabupaten": "3320",
      "nama_kecamatan": "DONOROJO"
    },
    {
      "id_kecamatan": "3320120",
      "id_kabupaten": "3320",
      "nama_kecamatan": "KARIMUNJAWA"
    },
    {
      "id_kecamatan": "3321010",
      "id_kabupaten": "3321",
      "nama_kecamatan": "MRANGGEN"
    },
    {
      "id_kecamatan": "3321020",
      "id_kabupaten": "3321",
      "nama_kecamatan": "KARANGAWEN"
    },
    {
      "id_kecamatan": "3321030",
      "id_kabupaten": "3321",
      "nama_kecamatan": "GUNTUR"
    },
    {
      "id_kecamatan": "3321040",
      "id_kabupaten": "3321",
      "nama_kecamatan": "SAYUNG"
    },
    {
      "id_kecamatan": "3321050",
      "id_kabupaten": "3321",
      "nama_kecamatan": "KARANG TENGAH"
    },
    {
      "id_kecamatan": "3321060",
      "id_kabupaten": "3321",
      "nama_kecamatan": "BONANG"
    },
    {
      "id_kecamatan": "3321070",
      "id_kabupaten": "3321",
      "nama_kecamatan": "DEMAK"
    },
    {
      "id_kecamatan": "3321080",
      "id_kabupaten": "3321",
      "nama_kecamatan": "WONOSALAM"
    },
    {
      "id_kecamatan": "3321090",
      "id_kabupaten": "3321",
      "nama_kecamatan": "DEMPET"
    },
    {
      "id_kecamatan": "3321091",
      "id_kabupaten": "3321",
      "nama_kecamatan": "KEBONAGUNG"
    },
    {
      "id_kecamatan": "3321100",
      "id_kabupaten": "3321",
      "nama_kecamatan": "GAJAH"
    },
    {
      "id_kecamatan": "3321110",
      "id_kabupaten": "3321",
      "nama_kecamatan": "KARANGANYAR"
    },
    {
      "id_kecamatan": "3321120",
      "id_kabupaten": "3321",
      "nama_kecamatan": "MIJEN"
    },
    {
      "id_kecamatan": "3321130",
      "id_kabupaten": "3321",
      "nama_kecamatan": "WEDUNG"
    },
    {
      "id_kecamatan": "3322010",
      "id_kabupaten": "3322",
      "nama_kecamatan": "GETASAN"
    },
    {
      "id_kecamatan": "3322020",
      "id_kabupaten": "3322",
      "nama_kecamatan": "TENGARAN"
    },
    {
      "id_kecamatan": "3322030",
      "id_kabupaten": "3322",
      "nama_kecamatan": "SUSUKAN"
    },
    {
      "id_kecamatan": "3322031",
      "id_kabupaten": "3322",
      "nama_kecamatan": "KALIWUNGU"
    },
    {
      "id_kecamatan": "3322040",
      "id_kabupaten": "3322",
      "nama_kecamatan": "SURUH"
    },
    {
      "id_kecamatan": "3322050",
      "id_kabupaten": "3322",
      "nama_kecamatan": "PABELAN"
    },
    {
      "id_kecamatan": "3322060",
      "id_kabupaten": "3322",
      "nama_kecamatan": "TUNTANG"
    },
    {
      "id_kecamatan": "3322070",
      "id_kabupaten": "3322",
      "nama_kecamatan": "BANYUBIRU"
    },
    {
      "id_kecamatan": "3322080",
      "id_kabupaten": "3322",
      "nama_kecamatan": "JAMBU"
    },
    {
      "id_kecamatan": "3322090",
      "id_kabupaten": "3322",
      "nama_kecamatan": "SUMOWONO"
    },
    {
      "id_kecamatan": "3322100",
      "id_kabupaten": "3322",
      "nama_kecamatan": "AMBARAWA"
    },
    {
      "id_kecamatan": "3322101",
      "id_kabupaten": "3322",
      "nama_kecamatan": "BANDUNGAN"
    },
    {
      "id_kecamatan": "3322110",
      "id_kabupaten": "3322",
      "nama_kecamatan": "BAWEN"
    },
    {
      "id_kecamatan": "3322120",
      "id_kabupaten": "3322",
      "nama_kecamatan": "BRINGIN"
    },
    {
      "id_kecamatan": "3322121",
      "id_kabupaten": "3322",
      "nama_kecamatan": "BANCAK"
    },
    {
      "id_kecamatan": "3322130",
      "id_kabupaten": "3322",
      "nama_kecamatan": "PRINGAPUS"
    },
    {
      "id_kecamatan": "3322140",
      "id_kabupaten": "3322",
      "nama_kecamatan": "BERGAS"
    },
    {
      "id_kecamatan": "3322151",
      "id_kabupaten": "3322",
      "nama_kecamatan": "UNGARAN BARAT"
    },
    {
      "id_kecamatan": "3322152",
      "id_kabupaten": "3322",
      "nama_kecamatan": "UNGARAN TIMUR"
    },
    {
      "id_kecamatan": "3323010",
      "id_kabupaten": "3323",
      "nama_kecamatan": "PARAKAN"
    },
    {
      "id_kecamatan": "3323011",
      "id_kabupaten": "3323",
      "nama_kecamatan": "KLEDUNG"
    },
    {
      "id_kecamatan": "3323012",
      "id_kabupaten": "3323",
      "nama_kecamatan": "BANSARI"
    },
    {
      "id_kecamatan": "3323020",
      "id_kabupaten": "3323",
      "nama_kecamatan": "BULU"
    },
    {
      "id_kecamatan": "3323030",
      "id_kabupaten": "3323",
      "nama_kecamatan": "TEMANGGUNG"
    },
    {
      "id_kecamatan": "3323031",
      "id_kabupaten": "3323",
      "nama_kecamatan": "TLOGOMULYO"
    },
    {
      "id_kecamatan": "3323040",
      "id_kabupaten": "3323",
      "nama_kecamatan": "TEMBARAK"
    },
    {
      "id_kecamatan": "3323041",
      "id_kabupaten": "3323",
      "nama_kecamatan": "SELOPAMPANG"
    },
    {
      "id_kecamatan": "3323050",
      "id_kabupaten": "3323",
      "nama_kecamatan": "KRANGGAN"
    },
    {
      "id_kecamatan": "3323060",
      "id_kabupaten": "3323",
      "nama_kecamatan": "PRINGSURAT"
    },
    {
      "id_kecamatan": "3323070",
      "id_kabupaten": "3323",
      "nama_kecamatan": "KALORAN"
    },
    {
      "id_kecamatan": "3323080",
      "id_kabupaten": "3323",
      "nama_kecamatan": "KANDANGAN"
    },
    {
      "id_kecamatan": "3323090",
      "id_kabupaten": "3323",
      "nama_kecamatan": "KEDU"
    },
    {
      "id_kecamatan": "3323100",
      "id_kabupaten": "3323",
      "nama_kecamatan": "NGADIREJO"
    },
    {
      "id_kecamatan": "3323110",
      "id_kabupaten": "3323",
      "nama_kecamatan": "JUMO"
    },
    {
      "id_kecamatan": "3323111",
      "id_kabupaten": "3323",
      "nama_kecamatan": "GEMAWANG"
    },
    {
      "id_kecamatan": "3323120",
      "id_kabupaten": "3323",
      "nama_kecamatan": "CANDIROTO"
    },
    {
      "id_kecamatan": "3323121",
      "id_kabupaten": "3323",
      "nama_kecamatan": "BEJEN"
    },
    {
      "id_kecamatan": "3323130",
      "id_kabupaten": "3323",
      "nama_kecamatan": "TRETEP"
    },
    {
      "id_kecamatan": "3323131",
      "id_kabupaten": "3323",
      "nama_kecamatan": "WONOBOYO"
    },
    {
      "id_kecamatan": "3324010",
      "id_kabupaten": "3324",
      "nama_kecamatan": "PLANTUNGAN"
    },
    {
      "id_kecamatan": "3324020",
      "id_kabupaten": "3324",
      "nama_kecamatan": "SUKOREJO"
    },
    {
      "id_kecamatan": "3324030",
      "id_kabupaten": "3324",
      "nama_kecamatan": "PAGERRUYUNG"
    },
    {
      "id_kecamatan": "3324040",
      "id_kabupaten": "3324",
      "nama_kecamatan": "PATEAN"
    },
    {
      "id_kecamatan": "3324050",
      "id_kabupaten": "3324",
      "nama_kecamatan": "SINGOROJO"
    },
    {
      "id_kecamatan": "3324060",
      "id_kabupaten": "3324",
      "nama_kecamatan": "LIMBANGAN"
    },
    {
      "id_kecamatan": "3324070",
      "id_kabupaten": "3324",
      "nama_kecamatan": "BOJA"
    },
    {
      "id_kecamatan": "3324080",
      "id_kabupaten": "3324",
      "nama_kecamatan": "KALIWUNGU"
    },
    {
      "id_kecamatan": "3324081",
      "id_kabupaten": "3324",
      "nama_kecamatan": "KALIWUNGU SELATAN"
    },
    {
      "id_kecamatan": "3324090",
      "id_kabupaten": "3324",
      "nama_kecamatan": "BRANGSONG"
    },
    {
      "id_kecamatan": "3324100",
      "id_kabupaten": "3324",
      "nama_kecamatan": "PEGANDON"
    },
    {
      "id_kecamatan": "3324101",
      "id_kabupaten": "3324",
      "nama_kecamatan": "NGAMPEL"
    },
    {
      "id_kecamatan": "3324110",
      "id_kabupaten": "3324",
      "nama_kecamatan": "GEMUH"
    },
    {
      "id_kecamatan": "3324111",
      "id_kabupaten": "3324",
      "nama_kecamatan": "RINGINARUM"
    },
    {
      "id_kecamatan": "3324120",
      "id_kabupaten": "3324",
      "nama_kecamatan": "WELERI"
    },
    {
      "id_kecamatan": "3324130",
      "id_kabupaten": "3324",
      "nama_kecamatan": "ROWOSARI"
    },
    {
      "id_kecamatan": "3324140",
      "id_kabupaten": "3324",
      "nama_kecamatan": "KANGKUNG"
    },
    {
      "id_kecamatan": "3324150",
      "id_kabupaten": "3324",
      "nama_kecamatan": "CEPIRING"
    },
    {
      "id_kecamatan": "3324160",
      "id_kabupaten": "3324",
      "nama_kecamatan": "PATEBON"
    },
    {
      "id_kecamatan": "3324170",
      "id_kabupaten": "3324",
      "nama_kecamatan": "KOTA KENDAL"
    },
    {
      "id_kecamatan": "3325010",
      "id_kabupaten": "3325",
      "nama_kecamatan": "WONOTUNGGAL"
    },
    {
      "id_kecamatan": "3325020",
      "id_kabupaten": "3325",
      "nama_kecamatan": "BANDAR"
    },
    {
      "id_kecamatan": "3325030",
      "id_kabupaten": "3325",
      "nama_kecamatan": "BLADO"
    },
    {
      "id_kecamatan": "3325040",
      "id_kabupaten": "3325",
      "nama_kecamatan": "REBAN"
    },
    {
      "id_kecamatan": "3325050",
      "id_kabupaten": "3325",
      "nama_kecamatan": "BAWANG"
    },
    {
      "id_kecamatan": "3325060",
      "id_kabupaten": "3325",
      "nama_kecamatan": "TERSONO"
    },
    {
      "id_kecamatan": "3325070",
      "id_kabupaten": "3325",
      "nama_kecamatan": "GRINGSING"
    },
    {
      "id_kecamatan": "3325080",
      "id_kabupaten": "3325",
      "nama_kecamatan": "LIMPUNG"
    },
    {
      "id_kecamatan": "3325081",
      "id_kabupaten": "3325",
      "nama_kecamatan": "BANYUPUTIH"
    },
    {
      "id_kecamatan": "3325090",
      "id_kabupaten": "3325",
      "nama_kecamatan": "SUBAH"
    },
    {
      "id_kecamatan": "3325091",
      "id_kabupaten": "3325",
      "nama_kecamatan": "PECALUNGAN"
    },
    {
      "id_kecamatan": "3325100",
      "id_kabupaten": "3325",
      "nama_kecamatan": "TULIS"
    },
    {
      "id_kecamatan": "3325101",
      "id_kabupaten": "3325",
      "nama_kecamatan": "KANDEMAN"
    },
    {
      "id_kecamatan": "3325110",
      "id_kabupaten": "3325",
      "nama_kecamatan": "BATANG"
    },
    {
      "id_kecamatan": "3325120",
      "id_kabupaten": "3325",
      "nama_kecamatan": "WARUNG ASEM"
    },
    {
      "id_kecamatan": "3326010",
      "id_kabupaten": "3326",
      "nama_kecamatan": "KANDANGSERANG"
    },
    {
      "id_kecamatan": "3326020",
      "id_kabupaten": "3326",
      "nama_kecamatan": "PANINGGARAN"
    },
    {
      "id_kecamatan": "3326030",
      "id_kabupaten": "3326",
      "nama_kecamatan": "LEBAKBARANG"
    },
    {
      "id_kecamatan": "3326040",
      "id_kabupaten": "3326",
      "nama_kecamatan": "PETUNGKRIONO"
    },
    {
      "id_kecamatan": "3326050",
      "id_kabupaten": "3326",
      "nama_kecamatan": "TALUN"
    },
    {
      "id_kecamatan": "3326060",
      "id_kabupaten": "3326",
      "nama_kecamatan": "DORO"
    },
    {
      "id_kecamatan": "3326070",
      "id_kabupaten": "3326",
      "nama_kecamatan": "KARANGANYAR"
    },
    {
      "id_kecamatan": "3326080",
      "id_kabupaten": "3326",
      "nama_kecamatan": "KAJEN"
    },
    {
      "id_kecamatan": "3326090",
      "id_kabupaten": "3326",
      "nama_kecamatan": "KESESI"
    },
    {
      "id_kecamatan": "3326100",
      "id_kabupaten": "3326",
      "nama_kecamatan": "SRAGI"
    },
    {
      "id_kecamatan": "3326101",
      "id_kabupaten": "3326",
      "nama_kecamatan": "SIWALAN"
    },
    {
      "id_kecamatan": "3326110",
      "id_kabupaten": "3326",
      "nama_kecamatan": "BOJONG"
    },
    {
      "id_kecamatan": "3326120",
      "id_kabupaten": "3326",
      "nama_kecamatan": "WONOPRINGGO"
    },
    {
      "id_kecamatan": "3326130",
      "id_kabupaten": "3326",
      "nama_kecamatan": "KEDUNGWUNI"
    },
    {
      "id_kecamatan": "3326131",
      "id_kabupaten": "3326",
      "nama_kecamatan": "KARANGDADAP"
    },
    {
      "id_kecamatan": "3326140",
      "id_kabupaten": "3326",
      "nama_kecamatan": "BUARAN"
    },
    {
      "id_kecamatan": "3326150",
      "id_kabupaten": "3326",
      "nama_kecamatan": "TIRTO"
    },
    {
      "id_kecamatan": "3326160",
      "id_kabupaten": "3326",
      "nama_kecamatan": "WIRADESA"
    },
    {
      "id_kecamatan": "3326161",
      "id_kabupaten": "3326",
      "nama_kecamatan": "WONOKERTO"
    },
    {
      "id_kecamatan": "3327010",
      "id_kabupaten": "3327",
      "nama_kecamatan": "MOGA"
    },
    {
      "id_kecamatan": "3327011",
      "id_kabupaten": "3327",
      "nama_kecamatan": "WARUNGPRING"
    },
    {
      "id_kecamatan": "3327020",
      "id_kabupaten": "3327",
      "nama_kecamatan": "PULOSARI"
    },
    {
      "id_kecamatan": "3327030",
      "id_kabupaten": "3327",
      "nama_kecamatan": "BELIK"
    },
    {
      "id_kecamatan": "3327040",
      "id_kabupaten": "3327",
      "nama_kecamatan": "WATUKUMPUL"
    },
    {
      "id_kecamatan": "3327050",
      "id_kabupaten": "3327",
      "nama_kecamatan": "BODEH"
    },
    {
      "id_kecamatan": "3327060",
      "id_kabupaten": "3327",
      "nama_kecamatan": "BANTARBOLANG"
    },
    {
      "id_kecamatan": "3327070",
      "id_kabupaten": "3327",
      "nama_kecamatan": "RANDUDONGKAL"
    },
    {
      "id_kecamatan": "3327080",
      "id_kabupaten": "3327",
      "nama_kecamatan": "PEMALANG"
    },
    {
      "id_kecamatan": "3327090",
      "id_kabupaten": "3327",
      "nama_kecamatan": "TAMAN"
    },
    {
      "id_kecamatan": "3327100",
      "id_kabupaten": "3327",
      "nama_kecamatan": "PETARUKAN"
    },
    {
      "id_kecamatan": "3327110",
      "id_kabupaten": "3327",
      "nama_kecamatan": "AMPELGADING"
    },
    {
      "id_kecamatan": "3327120",
      "id_kabupaten": "3327",
      "nama_kecamatan": "COMAL"
    },
    {
      "id_kecamatan": "3327130",
      "id_kabupaten": "3327",
      "nama_kecamatan": "ULUJAMI"
    },
    {
      "id_kecamatan": "3328010",
      "id_kabupaten": "3328",
      "nama_kecamatan": "MARGASARI"
    },
    {
      "id_kecamatan": "3328020",
      "id_kabupaten": "3328",
      "nama_kecamatan": "BUMIJAWA"
    },
    {
      "id_kecamatan": "3328030",
      "id_kabupaten": "3328",
      "nama_kecamatan": "BOJONG"
    },
    {
      "id_kecamatan": "3328040",
      "id_kabupaten": "3328",
      "nama_kecamatan": "BALAPULANG"
    },
    {
      "id_kecamatan": "3328050",
      "id_kabupaten": "3328",
      "nama_kecamatan": "PAGERBARANG"
    },
    {
      "id_kecamatan": "3328060",
      "id_kabupaten": "3328",
      "nama_kecamatan": "LEBAKSIU"
    },
    {
      "id_kecamatan": "3328070",
      "id_kabupaten": "3328",
      "nama_kecamatan": "JATINEGARA"
    },
    {
      "id_kecamatan": "3328080",
      "id_kabupaten": "3328",
      "nama_kecamatan": "KEDUNG BANTENG"
    },
    {
      "id_kecamatan": "3328090",
      "id_kabupaten": "3328",
      "nama_kecamatan": "PANGKAH"
    },
    {
      "id_kecamatan": "3328100",
      "id_kabupaten": "3328",
      "nama_kecamatan": "SLAWI"
    },
    {
      "id_kecamatan": "3328110",
      "id_kabupaten": "3328",
      "nama_kecamatan": "DUKUHWARU"
    },
    {
      "id_kecamatan": "3328120",
      "id_kabupaten": "3328",
      "nama_kecamatan": "ADIWERNA"
    },
    {
      "id_kecamatan": "3328130",
      "id_kabupaten": "3328",
      "nama_kecamatan": "DUKUHTURI"
    },
    {
      "id_kecamatan": "3328140",
      "id_kabupaten": "3328",
      "nama_kecamatan": "TALANG"
    },
    {
      "id_kecamatan": "3328150",
      "id_kabupaten": "3328",
      "nama_kecamatan": "TARUB"
    },
    {
      "id_kecamatan": "3328160",
      "id_kabupaten": "3328",
      "nama_kecamatan": "KRAMAT"
    },
    {
      "id_kecamatan": "3328170",
      "id_kabupaten": "3328",
      "nama_kecamatan": "SURADADI"
    },
    {
      "id_kecamatan": "3328180",
      "id_kabupaten": "3328",
      "nama_kecamatan": "WARUREJA"
    },
    {
      "id_kecamatan": "3329010",
      "id_kabupaten": "3329",
      "nama_kecamatan": "SALEM"
    },
    {
      "id_kecamatan": "3329020",
      "id_kabupaten": "3329",
      "nama_kecamatan": "BANTARKAWUNG"
    },
    {
      "id_kecamatan": "3329030",
      "id_kabupaten": "3329",
      "nama_kecamatan": "BUMIAYU"
    },
    {
      "id_kecamatan": "3329040",
      "id_kabupaten": "3329",
      "nama_kecamatan": "PAGUYANGAN"
    },
    {
      "id_kecamatan": "3329050",
      "id_kabupaten": "3329",
      "nama_kecamatan": "SIRAMPOG"
    },
    {
      "id_kecamatan": "3329060",
      "id_kabupaten": "3329",
      "nama_kecamatan": "TONJONG"
    },
    {
      "id_kecamatan": "3329070",
      "id_kabupaten": "3329",
      "nama_kecamatan": "LARANGAN"
    },
    {
      "id_kecamatan": "3329080",
      "id_kabupaten": "3329",
      "nama_kecamatan": "KETANGGUNGAN"
    },
    {
      "id_kecamatan": "3329090",
      "id_kabupaten": "3329",
      "nama_kecamatan": "BANJARHARJO"
    },
    {
      "id_kecamatan": "3329100",
      "id_kabupaten": "3329",
      "nama_kecamatan": "LOSARI"
    },
    {
      "id_kecamatan": "3329110",
      "id_kabupaten": "3329",
      "nama_kecamatan": "TANJUNG"
    },
    {
      "id_kecamatan": "3329120",
      "id_kabupaten": "3329",
      "nama_kecamatan": "KERSANA"
    },
    {
      "id_kecamatan": "3329130",
      "id_kabupaten": "3329",
      "nama_kecamatan": "BULAKAMBA"
    },
    {
      "id_kecamatan": "3329140",
      "id_kabupaten": "3329",
      "nama_kecamatan": "WANASARI"
    },
    {
      "id_kecamatan": "3329150",
      "id_kabupaten": "3329",
      "nama_kecamatan": "SONGGOM"
    },
    {
      "id_kecamatan": "3329160",
      "id_kabupaten": "3329",
      "nama_kecamatan": "JATIBARANG"
    },
    {
      "id_kecamatan": "3329170",
      "id_kabupaten": "3329",
      "nama_kecamatan": "BREBES"
    },
    {
      "id_kecamatan": "3371010",
      "id_kabupaten": "3371",
      "nama_kecamatan": "MAGELANG SELATAN"
    },
    {
      "id_kecamatan": "3371011",
      "id_kabupaten": "3371",
      "nama_kecamatan": "MAGELANG TENGAH"
    },
    {
      "id_kecamatan": "3371020",
      "id_kabupaten": "3371",
      "nama_kecamatan": "MAGELANG UTARA"
    },
    {
      "id_kecamatan": "3372010",
      "id_kabupaten": "3372",
      "nama_kecamatan": "LAWEYAN"
    },
    {
      "id_kecamatan": "3372020",
      "id_kabupaten": "3372",
      "nama_kecamatan": "SERENGAN"
    },
    {
      "id_kecamatan": "3372030",
      "id_kabupaten": "3372",
      "nama_kecamatan": "PASAR KLIWON"
    },
    {
      "id_kecamatan": "3372040",
      "id_kabupaten": "3372",
      "nama_kecamatan": "JEBRES"
    },
    {
      "id_kecamatan": "3372050",
      "id_kabupaten": "3372",
      "nama_kecamatan": "BANJARSARI"
    },
    {
      "id_kecamatan": "3373010",
      "id_kabupaten": "3373",
      "nama_kecamatan": "ARGOMULYO"
    },
    {
      "id_kecamatan": "3373020",
      "id_kabupaten": "3373",
      "nama_kecamatan": "TINGKIR"
    },
    {
      "id_kecamatan": "3373030",
      "id_kabupaten": "3373",
      "nama_kecamatan": "SIDOMUKTI"
    },
    {
      "id_kecamatan": "3373040",
      "id_kabupaten": "3373",
      "nama_kecamatan": "SIDOREJO"
    },
    {
      "id_kecamatan": "3374010",
      "id_kabupaten": "3374",
      "nama_kecamatan": "MIJEN"
    },
    {
      "id_kecamatan": "3374020",
      "id_kabupaten": "3374",
      "nama_kecamatan": "GUNUNG PATI"
    },
    {
      "id_kecamatan": "3374030",
      "id_kabupaten": "3374",
      "nama_kecamatan": "BANYUMANIK"
    },
    {
      "id_kecamatan": "3374040",
      "id_kabupaten": "3374",
      "nama_kecamatan": "GAJAH MUNGKUR"
    },
    {
      "id_kecamatan": "3374050",
      "id_kabupaten": "3374",
      "nama_kecamatan": "SEMARANG SELATAN"
    },
    {
      "id_kecamatan": "3374060",
      "id_kabupaten": "3374",
      "nama_kecamatan": "CANDISARI"
    },
    {
      "id_kecamatan": "3374070",
      "id_kabupaten": "3374",
      "nama_kecamatan": "TEMBALANG"
    },
    {
      "id_kecamatan": "3374080",
      "id_kabupaten": "3374",
      "nama_kecamatan": "PEDURUNGAN"
    },
    {
      "id_kecamatan": "3374090",
      "id_kabupaten": "3374",
      "nama_kecamatan": "GENUK"
    },
    {
      "id_kecamatan": "3374100",
      "id_kabupaten": "3374",
      "nama_kecamatan": "GAYAMSARI"
    },
    {
      "id_kecamatan": "3374110",
      "id_kabupaten": "3374",
      "nama_kecamatan": "SEMARANG TIMUR"
    },
    {
      "id_kecamatan": "3374120",
      "id_kabupaten": "3374",
      "nama_kecamatan": "SEMARANG UTARA"
    },
    {
      "id_kecamatan": "3374130",
      "id_kabupaten": "3374",
      "nama_kecamatan": "SEMARANG TENGAH"
    },
    {
      "id_kecamatan": "3374140",
      "id_kabupaten": "3374",
      "nama_kecamatan": "SEMARANG BARAT"
    },
    {
      "id_kecamatan": "3374150",
      "id_kabupaten": "3374",
      "nama_kecamatan": "TUGU"
    },
    {
      "id_kecamatan": "3374160",
      "id_kabupaten": "3374",
      "nama_kecamatan": "NGALIYAN"
    },
    {
      "id_kecamatan": "3375010",
      "id_kabupaten": "3375",
      "nama_kecamatan": "PEKALONGAN BARAT"
    },
    {
      "id_kecamatan": "3375020",
      "id_kabupaten": "3375",
      "nama_kecamatan": "PEKALONGAN TIMUR"
    },
    {
      "id_kecamatan": "3375030",
      "id_kabupaten": "3375",
      "nama_kecamatan": "PEKALONGAN SELATAN"
    },
    {
      "id_kecamatan": "3375040",
      "id_kabupaten": "3375",
      "nama_kecamatan": "PEKALONGAN UTARA"
    },
    {
      "id_kecamatan": "3376010",
      "id_kabupaten": "3376",
      "nama_kecamatan": "TEGAL SELATAN"
    },
    {
      "id_kecamatan": "3376020",
      "id_kabupaten": "3376",
      "nama_kecamatan": "TEGAL TIMUR"
    },
    {
      "id_kecamatan": "3376030",
      "id_kabupaten": "3376",
      "nama_kecamatan": "TEGAL BARAT"
    },
    {
      "id_kecamatan": "3376040",
      "id_kabupaten": "3376",
      "nama_kecamatan": "MARGADANA"
    },
    {
      "id_kecamatan": "3401010",
      "id_kabupaten": "3401",
      "nama_kecamatan": "TEMON"
    },
    {
      "id_kecamatan": "3401020",
      "id_kabupaten": "3401",
      "nama_kecamatan": "WATES"
    },
    {
      "id_kecamatan": "3401030",
      "id_kabupaten": "3401",
      "nama_kecamatan": "PANJATAN"
    },
    {
      "id_kecamatan": "3401040",
      "id_kabupaten": "3401",
      "nama_kecamatan": "GALUR"
    },
    {
      "id_kecamatan": "3401050",
      "id_kabupaten": "3401",
      "nama_kecamatan": "LENDAH"
    },
    {
      "id_kecamatan": "3401060",
      "id_kabupaten": "3401",
      "nama_kecamatan": "SENTOLO"
    },
    {
      "id_kecamatan": "3401070",
      "id_kabupaten": "3401",
      "nama_kecamatan": "PENGASIH"
    },
    {
      "id_kecamatan": "3401080",
      "id_kabupaten": "3401",
      "nama_kecamatan": "KOKAP"
    },
    {
      "id_kecamatan": "3401090",
      "id_kabupaten": "3401",
      "nama_kecamatan": "GIRIMULYO"
    },
    {
      "id_kecamatan": "3401100",
      "id_kabupaten": "3401",
      "nama_kecamatan": "NANGGULAN"
    },
    {
      "id_kecamatan": "3401110",
      "id_kabupaten": "3401",
      "nama_kecamatan": "KALIBAWANG"
    },
    {
      "id_kecamatan": "3401120",
      "id_kabupaten": "3401",
      "nama_kecamatan": "SAMIGALUH"
    },
    {
      "id_kecamatan": "3402010",
      "id_kabupaten": "3402",
      "nama_kecamatan": "SRANDAKAN"
    },
    {
      "id_kecamatan": "3402020",
      "id_kabupaten": "3402",
      "nama_kecamatan": "SANDEN"
    },
    {
      "id_kecamatan": "3402030",
      "id_kabupaten": "3402",
      "nama_kecamatan": "KRETEK"
    },
    {
      "id_kecamatan": "3402040",
      "id_kabupaten": "3402",
      "nama_kecamatan": "PUNDONG"
    },
    {
      "id_kecamatan": "3402050",
      "id_kabupaten": "3402",
      "nama_kecamatan": "BAMBANG LIPURO"
    },
    {
      "id_kecamatan": "3402060",
      "id_kabupaten": "3402",
      "nama_kecamatan": "PANDAK"
    },
    {
      "id_kecamatan": "3402070",
      "id_kabupaten": "3402",
      "nama_kecamatan": "BANTUL"
    },
    {
      "id_kecamatan": "3402080",
      "id_kabupaten": "3402",
      "nama_kecamatan": "JETIS"
    },
    {
      "id_kecamatan": "3402090",
      "id_kabupaten": "3402",
      "nama_kecamatan": "IMOGIRI"
    },
    {
      "id_kecamatan": "3402100",
      "id_kabupaten": "3402",
      "nama_kecamatan": "DLINGO"
    },
    {
      "id_kecamatan": "3402110",
      "id_kabupaten": "3402",
      "nama_kecamatan": "PLERET"
    },
    {
      "id_kecamatan": "3402120",
      "id_kabupaten": "3402",
      "nama_kecamatan": "PIYUNGAN"
    },
    {
      "id_kecamatan": "3402130",
      "id_kabupaten": "3402",
      "nama_kecamatan": "BANGUNTAPAN"
    },
    {
      "id_kecamatan": "3402140",
      "id_kabupaten": "3402",
      "nama_kecamatan": "SEWON"
    },
    {
      "id_kecamatan": "3402150",
      "id_kabupaten": "3402",
      "nama_kecamatan": "KASIHAN"
    },
    {
      "id_kecamatan": "3402160",
      "id_kabupaten": "3402",
      "nama_kecamatan": "PAJANGAN"
    },
    {
      "id_kecamatan": "3402170",
      "id_kabupaten": "3402",
      "nama_kecamatan": "SEDAYU"
    },
    {
      "id_kecamatan": "3403010",
      "id_kabupaten": "3403",
      "nama_kecamatan": "PANGGANG"
    },
    {
      "id_kecamatan": "3403011",
      "id_kabupaten": "3403",
      "nama_kecamatan": "PURWOSARI"
    },
    {
      "id_kecamatan": "3403020",
      "id_kabupaten": "3403",
      "nama_kecamatan": "PALIYAN"
    },
    {
      "id_kecamatan": "3403030",
      "id_kabupaten": "3403",
      "nama_kecamatan": "SAPTO SARI"
    },
    {
      "id_kecamatan": "3403040",
      "id_kabupaten": "3403",
      "nama_kecamatan": "TEPUS"
    },
    {
      "id_kecamatan": "3403041",
      "id_kabupaten": "3403",
      "nama_kecamatan": "TANJUNGSARI"
    },
    {
      "id_kecamatan": "3403050",
      "id_kabupaten": "3403",
      "nama_kecamatan": "RONGKOP"
    },
    {
      "id_kecamatan": "3403051",
      "id_kabupaten": "3403",
      "nama_kecamatan": "GIRISUBO"
    },
    {
      "id_kecamatan": "3403060",
      "id_kabupaten": "3403",
      "nama_kecamatan": "SEMANU"
    },
    {
      "id_kecamatan": "3403070",
      "id_kabupaten": "3403",
      "nama_kecamatan": "PONJONG"
    },
    {
      "id_kecamatan": "3403080",
      "id_kabupaten": "3403",
      "nama_kecamatan": "KARANGMOJO"
    },
    {
      "id_kecamatan": "3403090",
      "id_kabupaten": "3403",
      "nama_kecamatan": "WONOSARI"
    },
    {
      "id_kecamatan": "3403100",
      "id_kabupaten": "3403",
      "nama_kecamatan": "PLAYEN"
    },
    {
      "id_kecamatan": "3403110",
      "id_kabupaten": "3403",
      "nama_kecamatan": "PATUK"
    },
    {
      "id_kecamatan": "3403120",
      "id_kabupaten": "3403",
      "nama_kecamatan": "GEDANG SARI"
    },
    {
      "id_kecamatan": "3403130",
      "id_kabupaten": "3403",
      "nama_kecamatan": "NGLIPAR"
    },
    {
      "id_kecamatan": "3403140",
      "id_kabupaten": "3403",
      "nama_kecamatan": "NGAWEN"
    },
    {
      "id_kecamatan": "3403150",
      "id_kabupaten": "3403",
      "nama_kecamatan": "SEMIN"
    },
    {
      "id_kecamatan": "3404010",
      "id_kabupaten": "3404",
      "nama_kecamatan": "MOYUDAN"
    },
    {
      "id_kecamatan": "3404020",
      "id_kabupaten": "3404",
      "nama_kecamatan": "MINGGIR"
    },
    {
      "id_kecamatan": "3404030",
      "id_kabupaten": "3404",
      "nama_kecamatan": "SEYEGAN"
    },
    {
      "id_kecamatan": "3404040",
      "id_kabupaten": "3404",
      "nama_kecamatan": "GODEAN"
    },
    {
      "id_kecamatan": "3404050",
      "id_kabupaten": "3404",
      "nama_kecamatan": "GAMPING"
    },
    {
      "id_kecamatan": "3404060",
      "id_kabupaten": "3404",
      "nama_kecamatan": "MLATI"
    },
    {
      "id_kecamatan": "3404070",
      "id_kabupaten": "3404",
      "nama_kecamatan": "DEPOK"
    },
    {
      "id_kecamatan": "3404080",
      "id_kabupaten": "3404",
      "nama_kecamatan": "BERBAH"
    },
    {
      "id_kecamatan": "3404090",
      "id_kabupaten": "3404",
      "nama_kecamatan": "PRAMBANAN"
    },
    {
      "id_kecamatan": "3404100",
      "id_kabupaten": "3404",
      "nama_kecamatan": "KALASAN"
    },
    {
      "id_kecamatan": "3404110",
      "id_kabupaten": "3404",
      "nama_kecamatan": "NGEMPLAK"
    },
    {
      "id_kecamatan": "3404120",
      "id_kabupaten": "3404",
      "nama_kecamatan": "NGAGLIK"
    },
    {
      "id_kecamatan": "3404130",
      "id_kabupaten": "3404",
      "nama_kecamatan": "SLEMAN"
    },
    {
      "id_kecamatan": "3404140",
      "id_kabupaten": "3404",
      "nama_kecamatan": "TEMPEL"
    },
    {
      "id_kecamatan": "3404150",
      "id_kabupaten": "3404",
      "nama_kecamatan": "TURI"
    },
    {
      "id_kecamatan": "3404160",
      "id_kabupaten": "3404",
      "nama_kecamatan": "PAKEM"
    },
    {
      "id_kecamatan": "3404170",
      "id_kabupaten": "3404",
      "nama_kecamatan": "CANGKRINGAN"
    },
    {
      "id_kecamatan": "3471010",
      "id_kabupaten": "3471",
      "nama_kecamatan": "MANTRIJERON"
    },
    {
      "id_kecamatan": "3471020",
      "id_kabupaten": "3471",
      "nama_kecamatan": "KRATON"
    },
    {
      "id_kecamatan": "3471030",
      "id_kabupaten": "3471",
      "nama_kecamatan": "MERGANGSAN"
    },
    {
      "id_kecamatan": "3471040",
      "id_kabupaten": "3471",
      "nama_kecamatan": "UMBULHARJO"
    },
    {
      "id_kecamatan": "3471050",
      "id_kabupaten": "3471",
      "nama_kecamatan": "KOTAGEDE"
    },
    {
      "id_kecamatan": "3471060",
      "id_kabupaten": "3471",
      "nama_kecamatan": "GONDOKUSUMAN"
    },
    {
      "id_kecamatan": "3471070",
      "id_kabupaten": "3471",
      "nama_kecamatan": "DANUREJAN"
    },
    {
      "id_kecamatan": "3471080",
      "id_kabupaten": "3471",
      "nama_kecamatan": "PAKUALAMAN"
    },
    {
      "id_kecamatan": "3471090",
      "id_kabupaten": "3471",
      "nama_kecamatan": "GONDOMANAN"
    },
    {
      "id_kecamatan": "3471100",
      "id_kabupaten": "3471",
      "nama_kecamatan": "NGAMPILAN"
    },
    {
      "id_kecamatan": "3471110",
      "id_kabupaten": "3471",
      "nama_kecamatan": "WIROBRAJAN"
    },
    {
      "id_kecamatan": "3471120",
      "id_kabupaten": "3471",
      "nama_kecamatan": "GEDONG TENGEN"
    },
    {
      "id_kecamatan": "3471130",
      "id_kabupaten": "3471",
      "nama_kecamatan": "JETIS"
    },
    {
      "id_kecamatan": "3471140",
      "id_kabupaten": "3471",
      "nama_kecamatan": "TEGALREJO"
    },
    {
      "id_kecamatan": "3501010",
      "id_kabupaten": "3501",
      "nama_kecamatan": "DONOROJO"
    },
    {
      "id_kecamatan": "3501020",
      "id_kabupaten": "3501",
      "nama_kecamatan": "PUNUNG"
    },
    {
      "id_kecamatan": "3501030",
      "id_kabupaten": "3501",
      "nama_kecamatan": "PRINGKUKU"
    },
    {
      "id_kecamatan": "3501040",
      "id_kabupaten": "3501",
      "nama_kecamatan": "PACITAN"
    },
    {
      "id_kecamatan": "3501050",
      "id_kabupaten": "3501",
      "nama_kecamatan": "KEBONAGUNG"
    },
    {
      "id_kecamatan": "3501060",
      "id_kabupaten": "3501",
      "nama_kecamatan": "ARJOSARI"
    },
    {
      "id_kecamatan": "3501070",
      "id_kabupaten": "3501",
      "nama_kecamatan": "NAWANGAN"
    },
    {
      "id_kecamatan": "3501080",
      "id_kabupaten": "3501",
      "nama_kecamatan": "BANDAR"
    },
    {
      "id_kecamatan": "3501090",
      "id_kabupaten": "3501",
      "nama_kecamatan": "TEGALOMBO"
    },
    {
      "id_kecamatan": "3501100",
      "id_kabupaten": "3501",
      "nama_kecamatan": "TULAKAN"
    },
    {
      "id_kecamatan": "3501110",
      "id_kabupaten": "3501",
      "nama_kecamatan": "NGADIROJO"
    },
    {
      "id_kecamatan": "3501120",
      "id_kabupaten": "3501",
      "nama_kecamatan": "SUDIMORO"
    },
    {
      "id_kecamatan": "3502010",
      "id_kabupaten": "3502",
      "nama_kecamatan": "NGRAYUN"
    },
    {
      "id_kecamatan": "3502020",
      "id_kabupaten": "3502",
      "nama_kecamatan": "SLAHUNG"
    },
    {
      "id_kecamatan": "3502030",
      "id_kabupaten": "3502",
      "nama_kecamatan": "BUNGKAL"
    },
    {
      "id_kecamatan": "3502040",
      "id_kabupaten": "3502",
      "nama_kecamatan": "SAMBIT"
    },
    {
      "id_kecamatan": "3502050",
      "id_kabupaten": "3502",
      "nama_kecamatan": "SAWOO"
    },
    {
      "id_kecamatan": "3502060",
      "id_kabupaten": "3502",
      "nama_kecamatan": "SOOKO"
    },
    {
      "id_kecamatan": "3502061",
      "id_kabupaten": "3502",
      "nama_kecamatan": "PUDAK"
    },
    {
      "id_kecamatan": "3502070",
      "id_kabupaten": "3502",
      "nama_kecamatan": "PULUNG"
    },
    {
      "id_kecamatan": "3502080",
      "id_kabupaten": "3502",
      "nama_kecamatan": "MLARAK"
    },
    {
      "id_kecamatan": "3502090",
      "id_kabupaten": "3502",
      "nama_kecamatan": "SIMAN"
    },
    {
      "id_kecamatan": "3502100",
      "id_kabupaten": "3502",
      "nama_kecamatan": "JETIS"
    },
    {
      "id_kecamatan": "3502110",
      "id_kabupaten": "3502",
      "nama_kecamatan": "BALONG"
    },
    {
      "id_kecamatan": "3502120",
      "id_kabupaten": "3502",
      "nama_kecamatan": "KAUMAN"
    },
    {
      "id_kecamatan": "3502130",
      "id_kabupaten": "3502",
      "nama_kecamatan": "JAMBON"
    },
    {
      "id_kecamatan": "3502140",
      "id_kabupaten": "3502",
      "nama_kecamatan": "BADEGAN"
    },
    {
      "id_kecamatan": "3502150",
      "id_kabupaten": "3502",
      "nama_kecamatan": "SAMPUNG"
    },
    {
      "id_kecamatan": "3502160",
      "id_kabupaten": "3502",
      "nama_kecamatan": "SUKOREJO"
    },
    {
      "id_kecamatan": "3502170",
      "id_kabupaten": "3502",
      "nama_kecamatan": "PONOROGO"
    },
    {
      "id_kecamatan": "3502180",
      "id_kabupaten": "3502",
      "nama_kecamatan": "BABADAN"
    },
    {
      "id_kecamatan": "3502190",
      "id_kabupaten": "3502",
      "nama_kecamatan": "JENANGAN"
    },
    {
      "id_kecamatan": "3502200",
      "id_kabupaten": "3502",
      "nama_kecamatan": "NGEBEL"
    },
    {
      "id_kecamatan": "3503010",
      "id_kabupaten": "3503",
      "nama_kecamatan": "PANGGUL"
    },
    {
      "id_kecamatan": "3503020",
      "id_kabupaten": "3503",
      "nama_kecamatan": "MUNJUNGAN"
    },
    {
      "id_kecamatan": "3503030",
      "id_kabupaten": "3503",
      "nama_kecamatan": "WATULIMO"
    },
    {
      "id_kecamatan": "3503040",
      "id_kabupaten": "3503",
      "nama_kecamatan": "KAMPAK"
    },
    {
      "id_kecamatan": "3503050",
      "id_kabupaten": "3503",
      "nama_kecamatan": "DONGKO"
    },
    {
      "id_kecamatan": "3503060",
      "id_kabupaten": "3503",
      "nama_kecamatan": "PULE"
    },
    {
      "id_kecamatan": "3503070",
      "id_kabupaten": "3503",
      "nama_kecamatan": "KARANGAN"
    },
    {
      "id_kecamatan": "3503071",
      "id_kabupaten": "3503",
      "nama_kecamatan": "SURUH"
    },
    {
      "id_kecamatan": "3503080",
      "id_kabupaten": "3503",
      "nama_kecamatan": "GANDUSARI"
    },
    {
      "id_kecamatan": "3503090",
      "id_kabupaten": "3503",
      "nama_kecamatan": "DURENAN"
    },
    {
      "id_kecamatan": "3503100",
      "id_kabupaten": "3503",
      "nama_kecamatan": "POGALAN"
    },
    {
      "id_kecamatan": "3503110",
      "id_kabupaten": "3503",
      "nama_kecamatan": "TRENGGALEK"
    },
    {
      "id_kecamatan": "3503120",
      "id_kabupaten": "3503",
      "nama_kecamatan": "TUGU"
    },
    {
      "id_kecamatan": "3503130",
      "id_kabupaten": "3503",
      "nama_kecamatan": "BENDUNGAN"
    },
    {
      "id_kecamatan": "3504010",
      "id_kabupaten": "3504",
      "nama_kecamatan": "BESUKI"
    },
    {
      "id_kecamatan": "3504020",
      "id_kabupaten": "3504",
      "nama_kecamatan": "BANDUNG"
    },
    {
      "id_kecamatan": "3504030",
      "id_kabupaten": "3504",
      "nama_kecamatan": "PAKEL"
    },
    {
      "id_kecamatan": "3504040",
      "id_kabupaten": "3504",
      "nama_kecamatan": "CAMPUR DARAT"
    },
    {
      "id_kecamatan": "3504050",
      "id_kabupaten": "3504",
      "nama_kecamatan": "TANGGUNG GUNUNG"
    },
    {
      "id_kecamatan": "3504060",
      "id_kabupaten": "3504",
      "nama_kecamatan": "KALIDAWIR"
    },
    {
      "id_kecamatan": "3504070",
      "id_kabupaten": "3504",
      "nama_kecamatan": "PUCANG LABAN"
    },
    {
      "id_kecamatan": "3504080",
      "id_kabupaten": "3504",
      "nama_kecamatan": "REJOTANGAN"
    },
    {
      "id_kecamatan": "3504090",
      "id_kabupaten": "3504",
      "nama_kecamatan": "NGUNUT"
    },
    {
      "id_kecamatan": "3504100",
      "id_kabupaten": "3504",
      "nama_kecamatan": "SUMBERGEMPOL"
    },
    {
      "id_kecamatan": "3504110",
      "id_kabupaten": "3504",
      "nama_kecamatan": "BOYOLANGU"
    },
    {
      "id_kecamatan": "3504120",
      "id_kabupaten": "3504",
      "nama_kecamatan": "TULUNGAGUNG"
    },
    {
      "id_kecamatan": "3504130",
      "id_kabupaten": "3504",
      "nama_kecamatan": "KEDUNGWARU"
    },
    {
      "id_kecamatan": "3504140",
      "id_kabupaten": "3504",
      "nama_kecamatan": "NGANTRU"
    },
    {
      "id_kecamatan": "3504150",
      "id_kabupaten": "3504",
      "nama_kecamatan": "KARANGREJO"
    },
    {
      "id_kecamatan": "3504160",
      "id_kabupaten": "3504",
      "nama_kecamatan": "KAUMAN"
    },
    {
      "id_kecamatan": "3504170",
      "id_kabupaten": "3504",
      "nama_kecamatan": "GONDANG"
    },
    {
      "id_kecamatan": "3504180",
      "id_kabupaten": "3504",
      "nama_kecamatan": "PAGER WOJO"
    },
    {
      "id_kecamatan": "3504190",
      "id_kabupaten": "3504",
      "nama_kecamatan": "SENDANG"
    },
    {
      "id_kecamatan": "3505010",
      "id_kabupaten": "3505",
      "nama_kecamatan": "BAKUNG"
    },
    {
      "id_kecamatan": "3505020",
      "id_kabupaten": "3505",
      "nama_kecamatan": "WONOTIRTO"
    },
    {
      "id_kecamatan": "3505030",
      "id_kabupaten": "3505",
      "nama_kecamatan": "PANGGUNGREJO"
    },
    {
      "id_kecamatan": "3505040",
      "id_kabupaten": "3505",
      "nama_kecamatan": "WATES"
    },
    {
      "id_kecamatan": "3505050",
      "id_kabupaten": "3505",
      "nama_kecamatan": "BINANGUN"
    },
    {
      "id_kecamatan": "3505060",
      "id_kabupaten": "3505",
      "nama_kecamatan": "SUTOJAYAN"
    },
    {
      "id_kecamatan": "3505070",
      "id_kabupaten": "3505",
      "nama_kecamatan": "KADEMANGAN"
    },
    {
      "id_kecamatan": "3505080",
      "id_kabupaten": "3505",
      "nama_kecamatan": "KANIGORO"
    },
    {
      "id_kecamatan": "3505090",
      "id_kabupaten": "3505",
      "nama_kecamatan": "TALUN"
    },
    {
      "id_kecamatan": "3505100",
      "id_kabupaten": "3505",
      "nama_kecamatan": "SELOPURO"
    },
    {
      "id_kecamatan": "3505110",
      "id_kabupaten": "3505",
      "nama_kecamatan": "KESAMBEN"
    },
    {
      "id_kecamatan": "3505120",
      "id_kabupaten": "3505",
      "nama_kecamatan": "SELOREJO"
    },
    {
      "id_kecamatan": "3505130",
      "id_kabupaten": "3505",
      "nama_kecamatan": "DOKO"
    },
    {
      "id_kecamatan": "3505140",
      "id_kabupaten": "3505",
      "nama_kecamatan": "WLINGI"
    },
    {
      "id_kecamatan": "3505150",
      "id_kabupaten": "3505",
      "nama_kecamatan": "GANDUSARI"
    },
    {
      "id_kecamatan": "3505160",
      "id_kabupaten": "3505",
      "nama_kecamatan": "GARUM"
    },
    {
      "id_kecamatan": "3505170",
      "id_kabupaten": "3505",
      "nama_kecamatan": "NGLEGOK"
    },
    {
      "id_kecamatan": "3505180",
      "id_kabupaten": "3505",
      "nama_kecamatan": "SANANKULON"
    },
    {
      "id_kecamatan": "3505190",
      "id_kabupaten": "3505",
      "nama_kecamatan": "PONGGOK"
    },
    {
      "id_kecamatan": "3505200",
      "id_kabupaten": "3505",
      "nama_kecamatan": "SRENGAT"
    },
    {
      "id_kecamatan": "3505210",
      "id_kabupaten": "3505",
      "nama_kecamatan": "WONODADI"
    },
    {
      "id_kecamatan": "3505220",
      "id_kabupaten": "3505",
      "nama_kecamatan": "UDANAWU"
    },
    {
      "id_kecamatan": "3506010",
      "id_kabupaten": "3506",
      "nama_kecamatan": "MOJO"
    },
    {
      "id_kecamatan": "3506020",
      "id_kabupaten": "3506",
      "nama_kecamatan": "SEMEN"
    },
    {
      "id_kecamatan": "3506030",
      "id_kabupaten": "3506",
      "nama_kecamatan": "NGADILUWIH"
    },
    {
      "id_kecamatan": "3506040",
      "id_kabupaten": "3506",
      "nama_kecamatan": "KRAS"
    },
    {
      "id_kecamatan": "3506050",
      "id_kabupaten": "3506",
      "nama_kecamatan": "RINGINREJO"
    },
    {
      "id_kecamatan": "3506060",
      "id_kabupaten": "3506",
      "nama_kecamatan": "KANDAT"
    },
    {
      "id_kecamatan": "3506070",
      "id_kabupaten": "3506",
      "nama_kecamatan": "WATES"
    },
    {
      "id_kecamatan": "3506080",
      "id_kabupaten": "3506",
      "nama_kecamatan": "NGANCAR"
    },
    {
      "id_kecamatan": "3506090",
      "id_kabupaten": "3506",
      "nama_kecamatan": "PLOSOKLATEN"
    },
    {
      "id_kecamatan": "3506100",
      "id_kabupaten": "3506",
      "nama_kecamatan": "GURAH"
    },
    {
      "id_kecamatan": "3506110",
      "id_kabupaten": "3506",
      "nama_kecamatan": "PUNCU"
    },
    {
      "id_kecamatan": "3506120",
      "id_kabupaten": "3506",
      "nama_kecamatan": "KEPUNG"
    },
    {
      "id_kecamatan": "3506130",
      "id_kabupaten": "3506",
      "nama_kecamatan": "KANDANGAN"
    },
    {
      "id_kecamatan": "3506140",
      "id_kabupaten": "3506",
      "nama_kecamatan": "PARE"
    },
    {
      "id_kecamatan": "3506141",
      "id_kabupaten": "3506",
      "nama_kecamatan": "BADAS"
    },
    {
      "id_kecamatan": "3506150",
      "id_kabupaten": "3506",
      "nama_kecamatan": "KUNJANG"
    },
    {
      "id_kecamatan": "3506160",
      "id_kabupaten": "3506",
      "nama_kecamatan": "PLEMAHAN"
    },
    {
      "id_kecamatan": "3506170",
      "id_kabupaten": "3506",
      "nama_kecamatan": "PURWOASRI"
    },
    {
      "id_kecamatan": "3506180",
      "id_kabupaten": "3506",
      "nama_kecamatan": "PAPAR"
    },
    {
      "id_kecamatan": "3506190",
      "id_kabupaten": "3506",
      "nama_kecamatan": "PAGU"
    },
    {
      "id_kecamatan": "3506191",
      "id_kabupaten": "3506",
      "nama_kecamatan": "KAYEN KIDUL"
    },
    {
      "id_kecamatan": "3506200",
      "id_kabupaten": "3506",
      "nama_kecamatan": "GAMPENGREJO"
    },
    {
      "id_kecamatan": "3506201",
      "id_kabupaten": "3506",
      "nama_kecamatan": "NGASEM"
    },
    {
      "id_kecamatan": "3506210",
      "id_kabupaten": "3506",
      "nama_kecamatan": "BANYAKAN"
    },
    {
      "id_kecamatan": "3506220",
      "id_kabupaten": "3506",
      "nama_kecamatan": "GROGOL"
    },
    {
      "id_kecamatan": "3506230",
      "id_kabupaten": "3506",
      "nama_kecamatan": "TAROKAN"
    },
    {
      "id_kecamatan": "3507010",
      "id_kabupaten": "3507",
      "nama_kecamatan": "DONOMULYO"
    },
    {
      "id_kecamatan": "3507020",
      "id_kabupaten": "3507",
      "nama_kecamatan": "KALIPARE"
    },
    {
      "id_kecamatan": "3507030",
      "id_kabupaten": "3507",
      "nama_kecamatan": "PAGAK"
    },
    {
      "id_kecamatan": "3507040",
      "id_kabupaten": "3507",
      "nama_kecamatan": "BANTUR"
    },
    {
      "id_kecamatan": "3507050",
      "id_kabupaten": "3507",
      "nama_kecamatan": "GEDANGAN"
    },
    {
      "id_kecamatan": "3507060",
      "id_kabupaten": "3507",
      "nama_kecamatan": "SUMBERMANJING"
    },
    {
      "id_kecamatan": "3507070",
      "id_kabupaten": "3507",
      "nama_kecamatan": "DAMPIT"
    },
    {
      "id_kecamatan": "3507080",
      "id_kabupaten": "3507",
      "nama_kecamatan": "TIRTO YUDO"
    },
    {
      "id_kecamatan": "3507090",
      "id_kabupaten": "3507",
      "nama_kecamatan": "AMPELGADING"
    },
    {
      "id_kecamatan": "3507100",
      "id_kabupaten": "3507",
      "nama_kecamatan": "PONCOKUSUMO"
    },
    {
      "id_kecamatan": "3507110",
      "id_kabupaten": "3507",
      "nama_kecamatan": "WAJAK"
    },
    {
      "id_kecamatan": "3507120",
      "id_kabupaten": "3507",
      "nama_kecamatan": "TUREN"
    },
    {
      "id_kecamatan": "3507130",
      "id_kabupaten": "3507",
      "nama_kecamatan": "BULULAWANG"
    },
    {
      "id_kecamatan": "3507140",
      "id_kabupaten": "3507",
      "nama_kecamatan": "GONDANGLEGI"
    },
    {
      "id_kecamatan": "3507150",
      "id_kabupaten": "3507",
      "nama_kecamatan": "PAGELARAN"
    },
    {
      "id_kecamatan": "3507160",
      "id_kabupaten": "3507",
      "nama_kecamatan": "KEPANJEN"
    },
    {
      "id_kecamatan": "3507170",
      "id_kabupaten": "3507",
      "nama_kecamatan": "SUMBER PUCUNG"
    },
    {
      "id_kecamatan": "3507180",
      "id_kabupaten": "3507",
      "nama_kecamatan": "KROMENGAN"
    },
    {
      "id_kecamatan": "3507190",
      "id_kabupaten": "3507",
      "nama_kecamatan": "NGAJUM"
    },
    {
      "id_kecamatan": "3507200",
      "id_kabupaten": "3507",
      "nama_kecamatan": "WONOSARI"
    },
    {
      "id_kecamatan": "3507210",
      "id_kabupaten": "3507",
      "nama_kecamatan": "WAGIR"
    },
    {
      "id_kecamatan": "3507220",
      "id_kabupaten": "3507",
      "nama_kecamatan": "PAKISAJI"
    },
    {
      "id_kecamatan": "3507230",
      "id_kabupaten": "3507",
      "nama_kecamatan": "TAJINAN"
    },
    {
      "id_kecamatan": "3507240",
      "id_kabupaten": "3507",
      "nama_kecamatan": "TUMPANG"
    },
    {
      "id_kecamatan": "3507250",
      "id_kabupaten": "3507",
      "nama_kecamatan": "PAKIS"
    },
    {
      "id_kecamatan": "3507260",
      "id_kabupaten": "3507",
      "nama_kecamatan": "JABUNG"
    },
    {
      "id_kecamatan": "3507270",
      "id_kabupaten": "3507",
      "nama_kecamatan": "LAWANG"
    },
    {
      "id_kecamatan": "3507280",
      "id_kabupaten": "3507",
      "nama_kecamatan": "SINGOSARI"
    },
    {
      "id_kecamatan": "3507290",
      "id_kabupaten": "3507",
      "nama_kecamatan": "KARANGPLOSO"
    },
    {
      "id_kecamatan": "3507300",
      "id_kabupaten": "3507",
      "nama_kecamatan": "DAU"
    },
    {
      "id_kecamatan": "3507310",
      "id_kabupaten": "3507",
      "nama_kecamatan": "PUJON"
    },
    {
      "id_kecamatan": "3507320",
      "id_kabupaten": "3507",
      "nama_kecamatan": "NGANTANG"
    },
    {
      "id_kecamatan": "3507330",
      "id_kabupaten": "3507",
      "nama_kecamatan": "KASEMBON"
    },
    {
      "id_kecamatan": "3508010",
      "id_kabupaten": "3508",
      "nama_kecamatan": "TEMPURSARI"
    },
    {
      "id_kecamatan": "3508020",
      "id_kabupaten": "3508",
      "nama_kecamatan": "PRONOJIWO"
    },
    {
      "id_kecamatan": "3508030",
      "id_kabupaten": "3508",
      "nama_kecamatan": "CANDIPURO"
    },
    {
      "id_kecamatan": "3508040",
      "id_kabupaten": "3508",
      "nama_kecamatan": "PASIRIAN"
    },
    {
      "id_kecamatan": "3508050",
      "id_kabupaten": "3508",
      "nama_kecamatan": "TEMPEH"
    },
    {
      "id_kecamatan": "3508060",
      "id_kabupaten": "3508",
      "nama_kecamatan": "LUMAJANG"
    },
    {
      "id_kecamatan": "3508061",
      "id_kabupaten": "3508",
      "nama_kecamatan": "SUMBERSUKO"
    },
    {
      "id_kecamatan": "3508070",
      "id_kabupaten": "3508",
      "nama_kecamatan": "TEKUNG"
    },
    {
      "id_kecamatan": "3508080",
      "id_kabupaten": "3508",
      "nama_kecamatan": "KUNIR"
    },
    {
      "id_kecamatan": "3508090",
      "id_kabupaten": "3508",
      "nama_kecamatan": "YOSOWILANGUN"
    },
    {
      "id_kecamatan": "3508100",
      "id_kabupaten": "3508",
      "nama_kecamatan": "ROWOKANGKUNG"
    },
    {
      "id_kecamatan": "3508110",
      "id_kabupaten": "3508",
      "nama_kecamatan": "JATIROTO"
    },
    {
      "id_kecamatan": "3508120",
      "id_kabupaten": "3508",
      "nama_kecamatan": "RANDUAGUNG"
    },
    {
      "id_kecamatan": "3508130",
      "id_kabupaten": "3508",
      "nama_kecamatan": "SUKODONO"
    },
    {
      "id_kecamatan": "3508140",
      "id_kabupaten": "3508",
      "nama_kecamatan": "PADANG"
    },
    {
      "id_kecamatan": "3508150",
      "id_kabupaten": "3508",
      "nama_kecamatan": "PASRUJAMBE"
    },
    {
      "id_kecamatan": "3508160",
      "id_kabupaten": "3508",
      "nama_kecamatan": "SENDURO"
    },
    {
      "id_kecamatan": "3508170",
      "id_kabupaten": "3508",
      "nama_kecamatan": "GUCIALIT"
    },
    {
      "id_kecamatan": "3508180",
      "id_kabupaten": "3508",
      "nama_kecamatan": "KEDUNGJAJANG"
    },
    {
      "id_kecamatan": "3508190",
      "id_kabupaten": "3508",
      "nama_kecamatan": "KLAKAH"
    },
    {
      "id_kecamatan": "3508200",
      "id_kabupaten": "3508",
      "nama_kecamatan": "RANUYOSO"
    },
    {
      "id_kecamatan": "3509010",
      "id_kabupaten": "3509",
      "nama_kecamatan": "KENCONG"
    },
    {
      "id_kecamatan": "3509020",
      "id_kabupaten": "3509",
      "nama_kecamatan": "GUMUK MAS"
    },
    {
      "id_kecamatan": "3509030",
      "id_kabupaten": "3509",
      "nama_kecamatan": "PUGER"
    },
    {
      "id_kecamatan": "3509040",
      "id_kabupaten": "3509",
      "nama_kecamatan": "WULUHAN"
    },
    {
      "id_kecamatan": "3509050",
      "id_kabupaten": "3509",
      "nama_kecamatan": "AMBULU"
    },
    {
      "id_kecamatan": "3509060",
      "id_kabupaten": "3509",
      "nama_kecamatan": "TEMPUREJO"
    },
    {
      "id_kecamatan": "3509070",
      "id_kabupaten": "3509",
      "nama_kecamatan": "SILO"
    },
    {
      "id_kecamatan": "3509080",
      "id_kabupaten": "3509",
      "nama_kecamatan": "MAYANG"
    },
    {
      "id_kecamatan": "3509090",
      "id_kabupaten": "3509",
      "nama_kecamatan": "MUMBULSARI"
    },
    {
      "id_kecamatan": "3509100",
      "id_kabupaten": "3509",
      "nama_kecamatan": "JENGGAWAH"
    },
    {
      "id_kecamatan": "3509110",
      "id_kabupaten": "3509",
      "nama_kecamatan": "AJUNG"
    },
    {
      "id_kecamatan": "3509120",
      "id_kabupaten": "3509",
      "nama_kecamatan": "RAMBIPUJI"
    },
    {
      "id_kecamatan": "3509130",
      "id_kabupaten": "3509",
      "nama_kecamatan": "BALUNG"
    },
    {
      "id_kecamatan": "3509140",
      "id_kabupaten": "3509",
      "nama_kecamatan": "UMBULSARI"
    },
    {
      "id_kecamatan": "3509150",
      "id_kabupaten": "3509",
      "nama_kecamatan": "SEMBORO"
    },
    {
      "id_kecamatan": "3509160",
      "id_kabupaten": "3509",
      "nama_kecamatan": "JOMBANG"
    },
    {
      "id_kecamatan": "3509170",
      "id_kabupaten": "3509",
      "nama_kecamatan": "SUMBER BARU"
    },
    {
      "id_kecamatan": "3509180",
      "id_kabupaten": "3509",
      "nama_kecamatan": "TANGGUL"
    },
    {
      "id_kecamatan": "3509190",
      "id_kabupaten": "3509",
      "nama_kecamatan": "BANGSALSARI"
    },
    {
      "id_kecamatan": "3509200",
      "id_kabupaten": "3509",
      "nama_kecamatan": "PANTI"
    },
    {
      "id_kecamatan": "3509210",
      "id_kabupaten": "3509",
      "nama_kecamatan": "SUKORAMBI"
    },
    {
      "id_kecamatan": "3509220",
      "id_kabupaten": "3509",
      "nama_kecamatan": "ARJASA"
    },
    {
      "id_kecamatan": "3509230",
      "id_kabupaten": "3509",
      "nama_kecamatan": "PAKUSARI"
    },
    {
      "id_kecamatan": "3509240",
      "id_kabupaten": "3509",
      "nama_kecamatan": "KALISAT"
    },
    {
      "id_kecamatan": "3509250",
      "id_kabupaten": "3509",
      "nama_kecamatan": "LEDOKOMBO"
    },
    {
      "id_kecamatan": "3509260",
      "id_kabupaten": "3509",
      "nama_kecamatan": "SUMBERJAMBE"
    },
    {
      "id_kecamatan": "3509270",
      "id_kabupaten": "3509",
      "nama_kecamatan": "SUKOWONO"
    },
    {
      "id_kecamatan": "3509280",
      "id_kabupaten": "3509",
      "nama_kecamatan": "JELBUK"
    },
    {
      "id_kecamatan": "3509710",
      "id_kabupaten": "3509",
      "nama_kecamatan": "KALIWATES"
    },
    {
      "id_kecamatan": "3509720",
      "id_kabupaten": "3509",
      "nama_kecamatan": "SUMBERSARI"
    },
    {
      "id_kecamatan": "3509730",
      "id_kabupaten": "3509",
      "nama_kecamatan": "PATRANG"
    },
    {
      "id_kecamatan": "3510010",
      "id_kabupaten": "3510",
      "nama_kecamatan": "PESANGGARAN"
    },
    {
      "id_kecamatan": "3510011",
      "id_kabupaten": "3510",
      "nama_kecamatan": "SILIRAGUNG"
    },
    {
      "id_kecamatan": "3510020",
      "id_kabupaten": "3510",
      "nama_kecamatan": "BANGOREJO"
    },
    {
      "id_kecamatan": "3510030",
      "id_kabupaten": "3510",
      "nama_kecamatan": "PURWOHARJO"
    },
    {
      "id_kecamatan": "3510040",
      "id_kabupaten": "3510",
      "nama_kecamatan": "TEGALDLIMO"
    },
    {
      "id_kecamatan": "3510050",
      "id_kabupaten": "3510",
      "nama_kecamatan": "MUNCAR"
    },
    {
      "id_kecamatan": "3510060",
      "id_kabupaten": "3510",
      "nama_kecamatan": "CLURING"
    },
    {
      "id_kecamatan": "3510070",
      "id_kabupaten": "3510",
      "nama_kecamatan": "GAMBIRAN"
    },
    {
      "id_kecamatan": "3510071",
      "id_kabupaten": "3510",
      "nama_kecamatan": "TEGALSARI"
    },
    {
      "id_kecamatan": "3510080",
      "id_kabupaten": "3510",
      "nama_kecamatan": "GLENMORE"
    },
    {
      "id_kecamatan": "3510090",
      "id_kabupaten": "3510",
      "nama_kecamatan": "KALIBARU"
    },
    {
      "id_kecamatan": "3510100",
      "id_kabupaten": "3510",
      "nama_kecamatan": "GENTENG"
    },
    {
      "id_kecamatan": "3510110",
      "id_kabupaten": "3510",
      "nama_kecamatan": "SRONO"
    },
    {
      "id_kecamatan": "3510120",
      "id_kabupaten": "3510",
      "nama_kecamatan": "ROGOJAMPI"
    },
    {
      "id_kecamatan": "3510130",
      "id_kabupaten": "3510",
      "nama_kecamatan": "KABAT"
    },
    {
      "id_kecamatan": "3510140",
      "id_kabupaten": "3510",
      "nama_kecamatan": "SINGOJURUH"
    },
    {
      "id_kecamatan": "3510150",
      "id_kabupaten": "3510",
      "nama_kecamatan": "SEMPU"
    },
    {
      "id_kecamatan": "3510160",
      "id_kabupaten": "3510",
      "nama_kecamatan": "SONGGON"
    },
    {
      "id_kecamatan": "3510170",
      "id_kabupaten": "3510",
      "nama_kecamatan": "GLAGAH"
    },
    {
      "id_kecamatan": "3510171",
      "id_kabupaten": "3510",
      "nama_kecamatan": "LICIN"
    },
    {
      "id_kecamatan": "3510180",
      "id_kabupaten": "3510",
      "nama_kecamatan": "BANYUWANGI"
    },
    {
      "id_kecamatan": "3510190",
      "id_kabupaten": "3510",
      "nama_kecamatan": "GIRI"
    },
    {
      "id_kecamatan": "3510200",
      "id_kabupaten": "3510",
      "nama_kecamatan": "KALIPURO"
    },
    {
      "id_kecamatan": "3510210",
      "id_kabupaten": "3510",
      "nama_kecamatan": "WONGSOREJO"
    },
    {
      "id_kecamatan": "3511010",
      "id_kabupaten": "3511",
      "nama_kecamatan": "MAESAN"
    },
    {
      "id_kecamatan": "3511020",
      "id_kabupaten": "3511",
      "nama_kecamatan": "GRUJUGAN"
    },
    {
      "id_kecamatan": "3511030",
      "id_kabupaten": "3511",
      "nama_kecamatan": "TAMANAN"
    },
    {
      "id_kecamatan": "3511031",
      "id_kabupaten": "3511",
      "nama_kecamatan": "JAMBESARI DARUS SHOLAH"
    },
    {
      "id_kecamatan": "3511040",
      "id_kabupaten": "3511",
      "nama_kecamatan": "PUJER"
    },
    {
      "id_kecamatan": "3511050",
      "id_kabupaten": "3511",
      "nama_kecamatan": "TLOGOSARI"
    },
    {
      "id_kecamatan": "3511060",
      "id_kabupaten": "3511",
      "nama_kecamatan": "SUKOSARI"
    },
    {
      "id_kecamatan": "3511061",
      "id_kabupaten": "3511",
      "nama_kecamatan": "SUMBER WRINGIN"
    },
    {
      "id_kecamatan": "3511070",
      "id_kabupaten": "3511",
      "nama_kecamatan": "TAPEN"
    },
    {
      "id_kecamatan": "3511080",
      "id_kabupaten": "3511",
      "nama_kecamatan": "WONOSARI"
    },
    {
      "id_kecamatan": "3511090",
      "id_kabupaten": "3511",
      "nama_kecamatan": "TENGGARANG"
    },
    {
      "id_kecamatan": "3511100",
      "id_kabupaten": "3511",
      "nama_kecamatan": "BONDOWOSO"
    },
    {
      "id_kecamatan": "3511110",
      "id_kabupaten": "3511",
      "nama_kecamatan": "CURAH DAMI"
    },
    {
      "id_kecamatan": "3511111",
      "id_kabupaten": "3511",
      "nama_kecamatan": "BINAKAL"
    },
    {
      "id_kecamatan": "3511120",
      "id_kabupaten": "3511",
      "nama_kecamatan": "PAKEM"
    },
    {
      "id_kecamatan": "3511130",
      "id_kabupaten": "3511",
      "nama_kecamatan": "WRINGIN"
    },
    {
      "id_kecamatan": "3511140",
      "id_kabupaten": "3511",
      "nama_kecamatan": "TEGALAMPEL"
    },
    {
      "id_kecamatan": "3511141",
      "id_kabupaten": "3511",
      "nama_kecamatan": "TAMAN KROCOK"
    },
    {
      "id_kecamatan": "3511150",
      "id_kabupaten": "3511",
      "nama_kecamatan": "KLABANG"
    },
    {
      "id_kecamatan": "3511151",
      "id_kabupaten": "3511",
      "nama_kecamatan": "SEMPOL"
    },
    {
      "id_kecamatan": "3511152",
      "id_kabupaten": "3511",
      "nama_kecamatan": "BOTOLINGGO"
    },
    {
      "id_kecamatan": "3511160",
      "id_kabupaten": "3511",
      "nama_kecamatan": "PRAJEKAN"
    },
    {
      "id_kecamatan": "3511170",
      "id_kabupaten": "3511",
      "nama_kecamatan": "CERMEE"
    },
    {
      "id_kecamatan": "3512010",
      "id_kabupaten": "3512",
      "nama_kecamatan": "SUMBERMALANG"
    },
    {
      "id_kecamatan": "3512020",
      "id_kabupaten": "3512",
      "nama_kecamatan": "JATIBANTENG"
    },
    {
      "id_kecamatan": "3512030",
      "id_kabupaten": "3512",
      "nama_kecamatan": "BANYUGLUGUR"
    },
    {
      "id_kecamatan": "3512040",
      "id_kabupaten": "3512",
      "nama_kecamatan": "BESUKI"
    },
    {
      "id_kecamatan": "3512050",
      "id_kabupaten": "3512",
      "nama_kecamatan": "SUBOH"
    },
    {
      "id_kecamatan": "3512060",
      "id_kabupaten": "3512",
      "nama_kecamatan": "MLANDINGAN"
    },
    {
      "id_kecamatan": "3512070",
      "id_kabupaten": "3512",
      "nama_kecamatan": "BUNGATAN"
    },
    {
      "id_kecamatan": "3512080",
      "id_kabupaten": "3512",
      "nama_kecamatan": "KENDIT"
    },
    {
      "id_kecamatan": "3512090",
      "id_kabupaten": "3512",
      "nama_kecamatan": "PANARUKAN"
    },
    {
      "id_kecamatan": "3512100",
      "id_kabupaten": "3512",
      "nama_kecamatan": "SITUBONDO"
    },
    {
      "id_kecamatan": "3512110",
      "id_kabupaten": "3512",
      "nama_kecamatan": "MANGARAN"
    },
    {
      "id_kecamatan": "3512120",
      "id_kabupaten": "3512",
      "nama_kecamatan": "PANJI"
    },
    {
      "id_kecamatan": "3512130",
      "id_kabupaten": "3512",
      "nama_kecamatan": "KAPONGAN"
    },
    {
      "id_kecamatan": "3512140",
      "id_kabupaten": "3512",
      "nama_kecamatan": "ARJASA"
    },
    {
      "id_kecamatan": "3512150",
      "id_kabupaten": "3512",
      "nama_kecamatan": "JANGKAR"
    },
    {
      "id_kecamatan": "3512160",
      "id_kabupaten": "3512",
      "nama_kecamatan": "ASEMBAGUS"
    },
    {
      "id_kecamatan": "3512170",
      "id_kabupaten": "3512",
      "nama_kecamatan": "BANYUPUTIH"
    },
    {
      "id_kecamatan": "3513010",
      "id_kabupaten": "3513",
      "nama_kecamatan": "SUKAPURA"
    },
    {
      "id_kecamatan": "3513020",
      "id_kabupaten": "3513",
      "nama_kecamatan": "SUMBER"
    },
    {
      "id_kecamatan": "3513030",
      "id_kabupaten": "3513",
      "nama_kecamatan": "KURIPAN"
    },
    {
      "id_kecamatan": "3513040",
      "id_kabupaten": "3513",
      "nama_kecamatan": "BANTARAN"
    },
    {
      "id_kecamatan": "3513050",
      "id_kabupaten": "3513",
      "nama_kecamatan": "LECES"
    },
    {
      "id_kecamatan": "3513060",
      "id_kabupaten": "3513",
      "nama_kecamatan": "TEGALSIWALAN"
    },
    {
      "id_kecamatan": "3513070",
      "id_kabupaten": "3513",
      "nama_kecamatan": "BANYUANYAR"
    },
    {
      "id_kecamatan": "3513080",
      "id_kabupaten": "3513",
      "nama_kecamatan": "TIRIS"
    },
    {
      "id_kecamatan": "3513090",
      "id_kabupaten": "3513",
      "nama_kecamatan": "KRUCIL"
    },
    {
      "id_kecamatan": "3513100",
      "id_kabupaten": "3513",
      "nama_kecamatan": "GADING"
    },
    {
      "id_kecamatan": "3513110",
      "id_kabupaten": "3513",
      "nama_kecamatan": "PAKUNIRAN"
    },
    {
      "id_kecamatan": "3513120",
      "id_kabupaten": "3513",
      "nama_kecamatan": "KOTAANYAR"
    },
    {
      "id_kecamatan": "3513130",
      "id_kabupaten": "3513",
      "nama_kecamatan": "PAITON"
    },
    {
      "id_kecamatan": "3513140",
      "id_kabupaten": "3513",
      "nama_kecamatan": "BESUK"
    },
    {
      "id_kecamatan": "3513150",
      "id_kabupaten": "3513",
      "nama_kecamatan": "KRAKSAAN"
    },
    {
      "id_kecamatan": "3513160",
      "id_kabupaten": "3513",
      "nama_kecamatan": "KREJENGAN"
    },
    {
      "id_kecamatan": "3513170",
      "id_kabupaten": "3513",
      "nama_kecamatan": "PAJARAKAN"
    },
    {
      "id_kecamatan": "3513180",
      "id_kabupaten": "3513",
      "nama_kecamatan": "MARON"
    },
    {
      "id_kecamatan": "3513190",
      "id_kabupaten": "3513",
      "nama_kecamatan": "GENDING"
    },
    {
      "id_kecamatan": "3513200",
      "id_kabupaten": "3513",
      "nama_kecamatan": "DRINGU"
    },
    {
      "id_kecamatan": "3513210",
      "id_kabupaten": "3513",
      "nama_kecamatan": "WONOMERTO"
    },
    {
      "id_kecamatan": "3513220",
      "id_kabupaten": "3513",
      "nama_kecamatan": "LUMBANG"
    },
    {
      "id_kecamatan": "3513230",
      "id_kabupaten": "3513",
      "nama_kecamatan": "TONGAS"
    },
    {
      "id_kecamatan": "3513240",
      "id_kabupaten": "3513",
      "nama_kecamatan": "SUMBERASIH"
    },
    {
      "id_kecamatan": "3514010",
      "id_kabupaten": "3514",
      "nama_kecamatan": "PURWODADI"
    },
    {
      "id_kecamatan": "3514020",
      "id_kabupaten": "3514",
      "nama_kecamatan": "TUTUR"
    },
    {
      "id_kecamatan": "3514030",
      "id_kabupaten": "3514",
      "nama_kecamatan": "PUSPO"
    },
    {
      "id_kecamatan": "3514040",
      "id_kabupaten": "3514",
      "nama_kecamatan": "TOSARI"
    },
    {
      "id_kecamatan": "3514050",
      "id_kabupaten": "3514",
      "nama_kecamatan": "LUMBANG"
    },
    {
      "id_kecamatan": "3514060",
      "id_kabupaten": "3514",
      "nama_kecamatan": "PASREPAN"
    },
    {
      "id_kecamatan": "3514070",
      "id_kabupaten": "3514",
      "nama_kecamatan": "KEJAYAN"
    },
    {
      "id_kecamatan": "3514080",
      "id_kabupaten": "3514",
      "nama_kecamatan": "WONOREJO"
    },
    {
      "id_kecamatan": "3514090",
      "id_kabupaten": "3514",
      "nama_kecamatan": "PURWOSARI"
    },
    {
      "id_kecamatan": "3514100",
      "id_kabupaten": "3514",
      "nama_kecamatan": "PRIGEN"
    },
    {
      "id_kecamatan": "3514110",
      "id_kabupaten": "3514",
      "nama_kecamatan": "SUKOREJO"
    },
    {
      "id_kecamatan": "3514120",
      "id_kabupaten": "3514",
      "nama_kecamatan": "PANDAAN"
    },
    {
      "id_kecamatan": "3514130",
      "id_kabupaten": "3514",
      "nama_kecamatan": "GEMPOL"
    },
    {
      "id_kecamatan": "3514140",
      "id_kabupaten": "3514",
      "nama_kecamatan": "BEJI"
    },
    {
      "id_kecamatan": "3514150",
      "id_kabupaten": "3514",
      "nama_kecamatan": "BANGIL"
    },
    {
      "id_kecamatan": "3514160",
      "id_kabupaten": "3514",
      "nama_kecamatan": "REMBANG"
    },
    {
      "id_kecamatan": "3514170",
      "id_kabupaten": "3514",
      "nama_kecamatan": "KRATON"
    },
    {
      "id_kecamatan": "3514180",
      "id_kabupaten": "3514",
      "nama_kecamatan": "POHJENTREK"
    },
    {
      "id_kecamatan": "3514190",
      "id_kabupaten": "3514",
      "nama_kecamatan": "GONDANG WETAN"
    },
    {
      "id_kecamatan": "3514200",
      "id_kabupaten": "3514",
      "nama_kecamatan": "REJOSO"
    },
    {
      "id_kecamatan": "3514210",
      "id_kabupaten": "3514",
      "nama_kecamatan": "WINONGAN"
    },
    {
      "id_kecamatan": "3514220",
      "id_kabupaten": "3514",
      "nama_kecamatan": "GRATI"
    },
    {
      "id_kecamatan": "3514230",
      "id_kabupaten": "3514",
      "nama_kecamatan": "LEKOK"
    },
    {
      "id_kecamatan": "3514240",
      "id_kabupaten": "3514",
      "nama_kecamatan": "NGULING"
    },
    {
      "id_kecamatan": "3515010",
      "id_kabupaten": "3515",
      "nama_kecamatan": "TARIK"
    },
    {
      "id_kecamatan": "3515020",
      "id_kabupaten": "3515",
      "nama_kecamatan": "PRAMBON"
    },
    {
      "id_kecamatan": "3515030",
      "id_kabupaten": "3515",
      "nama_kecamatan": "KREMBUNG"
    },
    {
      "id_kecamatan": "3515040",
      "id_kabupaten": "3515",
      "nama_kecamatan": "PORONG"
    },
    {
      "id_kecamatan": "3515050",
      "id_kabupaten": "3515",
      "nama_kecamatan": "JABON"
    },
    {
      "id_kecamatan": "3515060",
      "id_kabupaten": "3515",
      "nama_kecamatan": "TANGGULANGIN"
    },
    {
      "id_kecamatan": "3515070",
      "id_kabupaten": "3515",
      "nama_kecamatan": "CANDI"
    },
    {
      "id_kecamatan": "3515080",
      "id_kabupaten": "3515",
      "nama_kecamatan": "TULANGAN"
    },
    {
      "id_kecamatan": "3515090",
      "id_kabupaten": "3515",
      "nama_kecamatan": "WONOAYU"
    },
    {
      "id_kecamatan": "3515100",
      "id_kabupaten": "3515",
      "nama_kecamatan": "SUKODONO"
    },
    {
      "id_kecamatan": "3515110",
      "id_kabupaten": "3515",
      "nama_kecamatan": "SIDOARJO"
    },
    {
      "id_kecamatan": "3515120",
      "id_kabupaten": "3515",
      "nama_kecamatan": "BUDURAN"
    },
    {
      "id_kecamatan": "3515130",
      "id_kabupaten": "3515",
      "nama_kecamatan": "SEDATI"
    },
    {
      "id_kecamatan": "3515140",
      "id_kabupaten": "3515",
      "nama_kecamatan": "WARU"
    },
    {
      "id_kecamatan": "3515150",
      "id_kabupaten": "3515",
      "nama_kecamatan": "GEDANGAN"
    },
    {
      "id_kecamatan": "3515160",
      "id_kabupaten": "3515",
      "nama_kecamatan": "TAMAN"
    },
    {
      "id_kecamatan": "3515170",
      "id_kabupaten": "3515",
      "nama_kecamatan": "KRIAN"
    },
    {
      "id_kecamatan": "3515180",
      "id_kabupaten": "3515",
      "nama_kecamatan": "BALONG BENDO"
    },
    {
      "id_kecamatan": "3516010",
      "id_kabupaten": "3516",
      "nama_kecamatan": "JATIREJO"
    },
    {
      "id_kecamatan": "3516020",
      "id_kabupaten": "3516",
      "nama_kecamatan": "GONDANG"
    },
    {
      "id_kecamatan": "3516030",
      "id_kabupaten": "3516",
      "nama_kecamatan": "PACET"
    },
    {
      "id_kecamatan": "3516040",
      "id_kabupaten": "3516",
      "nama_kecamatan": "TRAWAS"
    },
    {
      "id_kecamatan": "3516050",
      "id_kabupaten": "3516",
      "nama_kecamatan": "NGORO"
    },
    {
      "id_kecamatan": "3516060",
      "id_kabupaten": "3516",
      "nama_kecamatan": "PUNGGING"
    },
    {
      "id_kecamatan": "3516070",
      "id_kabupaten": "3516",
      "nama_kecamatan": "KUTOREJO"
    },
    {
      "id_kecamatan": "3516080",
      "id_kabupaten": "3516",
      "nama_kecamatan": "MOJOSARI"
    },
    {
      "id_kecamatan": "3516090",
      "id_kabupaten": "3516",
      "nama_kecamatan": "BANGSAL"
    },
    {
      "id_kecamatan": "3516091",
      "id_kabupaten": "3516",
      "nama_kecamatan": "MOJOANYAR"
    },
    {
      "id_kecamatan": "3516100",
      "id_kabupaten": "3516",
      "nama_kecamatan": "DLANGGU"
    },
    {
      "id_kecamatan": "3516110",
      "id_kabupaten": "3516",
      "nama_kecamatan": "PURI"
    },
    {
      "id_kecamatan": "3516120",
      "id_kabupaten": "3516",
      "nama_kecamatan": "TROWULAN"
    },
    {
      "id_kecamatan": "3516130",
      "id_kabupaten": "3516",
      "nama_kecamatan": "SOOKO"
    },
    {
      "id_kecamatan": "3516140",
      "id_kabupaten": "3516",
      "nama_kecamatan": "GEDEK"
    },
    {
      "id_kecamatan": "3516150",
      "id_kabupaten": "3516",
      "nama_kecamatan": "KEMLAGI"
    },
    {
      "id_kecamatan": "3516160",
      "id_kabupaten": "3516",
      "nama_kecamatan": "JETIS"
    },
    {
      "id_kecamatan": "3516170",
      "id_kabupaten": "3516",
      "nama_kecamatan": "DAWAR BLANDONG"
    },
    {
      "id_kecamatan": "3517010",
      "id_kabupaten": "3517",
      "nama_kecamatan": "BANDAR KEDUNG MULYO"
    },
    {
      "id_kecamatan": "3517020",
      "id_kabupaten": "3517",
      "nama_kecamatan": "PERAK"
    },
    {
      "id_kecamatan": "3517030",
      "id_kabupaten": "3517",
      "nama_kecamatan": "GUDO"
    },
    {
      "id_kecamatan": "3517040",
      "id_kabupaten": "3517",
      "nama_kecamatan": "DIWEK"
    },
    {
      "id_kecamatan": "3517050",
      "id_kabupaten": "3517",
      "nama_kecamatan": "NGORO"
    },
    {
      "id_kecamatan": "3517060",
      "id_kabupaten": "3517",
      "nama_kecamatan": "MOJOWARNO"
    },
    {
      "id_kecamatan": "3517070",
      "id_kabupaten": "3517",
      "nama_kecamatan": "BARENG"
    },
    {
      "id_kecamatan": "3517080",
      "id_kabupaten": "3517",
      "nama_kecamatan": "WONOSALAM"
    },
    {
      "id_kecamatan": "3517090",
      "id_kabupaten": "3517",
      "nama_kecamatan": "MOJOAGUNG"
    },
    {
      "id_kecamatan": "3517100",
      "id_kabupaten": "3517",
      "nama_kecamatan": "SUMOBITO"
    },
    {
      "id_kecamatan": "3517110",
      "id_kabupaten": "3517",
      "nama_kecamatan": "JOGO ROTO"
    },
    {
      "id_kecamatan": "3517120",
      "id_kabupaten": "3517",
      "nama_kecamatan": "PETERONGAN"
    },
    {
      "id_kecamatan": "3517130",
      "id_kabupaten": "3517",
      "nama_kecamatan": "JOMBANG"
    },
    {
      "id_kecamatan": "3517140",
      "id_kabupaten": "3517",
      "nama_kecamatan": "MEGALUH"
    },
    {
      "id_kecamatan": "3517150",
      "id_kabupaten": "3517",
      "nama_kecamatan": "TEMBELANG"
    },
    {
      "id_kecamatan": "3517160",
      "id_kabupaten": "3517",
      "nama_kecamatan": "KESAMBEN"
    },
    {
      "id_kecamatan": "3517170",
      "id_kabupaten": "3517",
      "nama_kecamatan": "KUDU"
    },
    {
      "id_kecamatan": "3517171",
      "id_kabupaten": "3517",
      "nama_kecamatan": "NGUSIKAN"
    },
    {
      "id_kecamatan": "3517180",
      "id_kabupaten": "3517",
      "nama_kecamatan": "PLOSO"
    },
    {
      "id_kecamatan": "3517190",
      "id_kabupaten": "3517",
      "nama_kecamatan": "KABUH"
    },
    {
      "id_kecamatan": "3517200",
      "id_kabupaten": "3517",
      "nama_kecamatan": "PLANDAAN"
    },
    {
      "id_kecamatan": "3518010",
      "id_kabupaten": "3518",
      "nama_kecamatan": "SAWAHAN"
    },
    {
      "id_kecamatan": "3518020",
      "id_kabupaten": "3518",
      "nama_kecamatan": "NGETOS"
    },
    {
      "id_kecamatan": "3518030",
      "id_kabupaten": "3518",
      "nama_kecamatan": "BERBEK"
    },
    {
      "id_kecamatan": "3518040",
      "id_kabupaten": "3518",
      "nama_kecamatan": "LOCERET"
    },
    {
      "id_kecamatan": "3518050",
      "id_kabupaten": "3518",
      "nama_kecamatan": "PACE"
    },
    {
      "id_kecamatan": "3518060",
      "id_kabupaten": "3518",
      "nama_kecamatan": "TANJUNGANOM"
    },
    {
      "id_kecamatan": "3518070",
      "id_kabupaten": "3518",
      "nama_kecamatan": "PRAMBON"
    },
    {
      "id_kecamatan": "3518080",
      "id_kabupaten": "3518",
      "nama_kecamatan": "NGRONGGOT"
    },
    {
      "id_kecamatan": "3518090",
      "id_kabupaten": "3518",
      "nama_kecamatan": "KERTOSONO"
    },
    {
      "id_kecamatan": "3518100",
      "id_kabupaten": "3518",
      "nama_kecamatan": "PATIANROWO"
    },
    {
      "id_kecamatan": "3518110",
      "id_kabupaten": "3518",
      "nama_kecamatan": "BARON"
    },
    {
      "id_kecamatan": "3518120",
      "id_kabupaten": "3518",
      "nama_kecamatan": "GONDANG"
    },
    {
      "id_kecamatan": "3518130",
      "id_kabupaten": "3518",
      "nama_kecamatan": "SUKOMORO"
    },
    {
      "id_kecamatan": "3518140",
      "id_kabupaten": "3518",
      "nama_kecamatan": "NGANJUK"
    },
    {
      "id_kecamatan": "3518150",
      "id_kabupaten": "3518",
      "nama_kecamatan": "BAGOR"
    },
    {
      "id_kecamatan": "3518160",
      "id_kabupaten": "3518",
      "nama_kecamatan": "WILANGAN"
    },
    {
      "id_kecamatan": "3518170",
      "id_kabupaten": "3518",
      "nama_kecamatan": "REJOSO"
    },
    {
      "id_kecamatan": "3518180",
      "id_kabupaten": "3518",
      "nama_kecamatan": "NGLUYU"
    },
    {
      "id_kecamatan": "3518190",
      "id_kabupaten": "3518",
      "nama_kecamatan": "LENGKONG"
    },
    {
      "id_kecamatan": "3518200",
      "id_kabupaten": "3518",
      "nama_kecamatan": "JATIKALEN"
    },
    {
      "id_kecamatan": "3519010",
      "id_kabupaten": "3519",
      "nama_kecamatan": "KEBONSARI"
    },
    {
      "id_kecamatan": "3519020",
      "id_kabupaten": "3519",
      "nama_kecamatan": "GEGER"
    },
    {
      "id_kecamatan": "3519030",
      "id_kabupaten": "3519",
      "nama_kecamatan": "DOLOPO"
    },
    {
      "id_kecamatan": "3519040",
      "id_kabupaten": "3519",
      "nama_kecamatan": "DAGANGAN"
    },
    {
      "id_kecamatan": "3519050",
      "id_kabupaten": "3519",
      "nama_kecamatan": "WUNGU"
    },
    {
      "id_kecamatan": "3519060",
      "id_kabupaten": "3519",
      "nama_kecamatan": "KARE"
    },
    {
      "id_kecamatan": "3519070",
      "id_kabupaten": "3519",
      "nama_kecamatan": "GEMARANG"
    },
    {
      "id_kecamatan": "3519080",
      "id_kabupaten": "3519",
      "nama_kecamatan": "SARADAN"
    },
    {
      "id_kecamatan": "3519090",
      "id_kabupaten": "3519",
      "nama_kecamatan": "PILANGKENCENG"
    },
    {
      "id_kecamatan": "3519100",
      "id_kabupaten": "3519",
      "nama_kecamatan": "MEJAYAN"
    },
    {
      "id_kecamatan": "3519110",
      "id_kabupaten": "3519",
      "nama_kecamatan": "WONOASRI"
    },
    {
      "id_kecamatan": "3519120",
      "id_kabupaten": "3519",
      "nama_kecamatan": "BALEREJO"
    },
    {
      "id_kecamatan": "3519130",
      "id_kabupaten": "3519",
      "nama_kecamatan": "MADIUN"
    },
    {
      "id_kecamatan": "3519140",
      "id_kabupaten": "3519",
      "nama_kecamatan": "SAWAHAN"
    },
    {
      "id_kecamatan": "3519150",
      "id_kabupaten": "3519",
      "nama_kecamatan": "JIWAN"
    },
    {
      "id_kecamatan": "3520010",
      "id_kabupaten": "3520",
      "nama_kecamatan": "PONCOL"
    },
    {
      "id_kecamatan": "3520020",
      "id_kabupaten": "3520",
      "nama_kecamatan": "PARANG"
    },
    {
      "id_kecamatan": "3520030",
      "id_kabupaten": "3520",
      "nama_kecamatan": "LEMBEYAN"
    },
    {
      "id_kecamatan": "3520040",
      "id_kabupaten": "3520",
      "nama_kecamatan": "TAKERAN"
    },
    {
      "id_kecamatan": "3520041",
      "id_kabupaten": "3520",
      "nama_kecamatan": "NGUNTORONADI"
    },
    {
      "id_kecamatan": "3520050",
      "id_kabupaten": "3520",
      "nama_kecamatan": "KAWEDANAN"
    },
    {
      "id_kecamatan": "3520060",
      "id_kabupaten": "3520",
      "nama_kecamatan": "MAGETAN"
    },
    {
      "id_kecamatan": "3520061",
      "id_kabupaten": "3520",
      "nama_kecamatan": "NGARIBOYO"
    },
    {
      "id_kecamatan": "3520070",
      "id_kabupaten": "3520",
      "nama_kecamatan": "PLAOSAN"
    },
    {
      "id_kecamatan": "3520071",
      "id_kabupaten": "3520",
      "nama_kecamatan": "SIDOREJO"
    },
    {
      "id_kecamatan": "3520080",
      "id_kabupaten": "3520",
      "nama_kecamatan": "PANEKAN"
    },
    {
      "id_kecamatan": "3520090",
      "id_kabupaten": "3520",
      "nama_kecamatan": "SUKOMORO"
    },
    {
      "id_kecamatan": "3520100",
      "id_kabupaten": "3520",
      "nama_kecamatan": "BENDO"
    },
    {
      "id_kecamatan": "3520110",
      "id_kabupaten": "3520",
      "nama_kecamatan": "MAOSPATI"
    },
    {
      "id_kecamatan": "3520120",
      "id_kabupaten": "3520",
      "nama_kecamatan": "KARANGREJO"
    },
    {
      "id_kecamatan": "3520121",
      "id_kabupaten": "3520",
      "nama_kecamatan": "KARAS"
    },
    {
      "id_kecamatan": "3520130",
      "id_kabupaten": "3520",
      "nama_kecamatan": "BARAT"
    },
    {
      "id_kecamatan": "3520131",
      "id_kabupaten": "3520",
      "nama_kecamatan": "KARTOHARJO"
    },
    {
      "id_kecamatan": "3521010",
      "id_kabupaten": "3521",
      "nama_kecamatan": "SINE"
    },
    {
      "id_kecamatan": "3521020",
      "id_kabupaten": "3521",
      "nama_kecamatan": "NGRAMBE"
    },
    {
      "id_kecamatan": "3521030",
      "id_kabupaten": "3521",
      "nama_kecamatan": "JOGOROGO"
    },
    {
      "id_kecamatan": "3521040",
      "id_kabupaten": "3521",
      "nama_kecamatan": "KENDAL"
    },
    {
      "id_kecamatan": "3521050",
      "id_kabupaten": "3521",
      "nama_kecamatan": "GENENG"
    },
    {
      "id_kecamatan": "3521051",
      "id_kabupaten": "3521",
      "nama_kecamatan": "GERIH"
    },
    {
      "id_kecamatan": "3521060",
      "id_kabupaten": "3521",
      "nama_kecamatan": "KWADUNGAN"
    },
    {
      "id_kecamatan": "3521070",
      "id_kabupaten": "3521",
      "nama_kecamatan": "PANGKUR"
    },
    {
      "id_kecamatan": "3521080",
      "id_kabupaten": "3521",
      "nama_kecamatan": "KARANGJATI"
    },
    {
      "id_kecamatan": "3521090",
      "id_kabupaten": "3521",
      "nama_kecamatan": "BRINGIN"
    },
    {
      "id_kecamatan": "3521100",
      "id_kabupaten": "3521",
      "nama_kecamatan": "PADAS"
    },
    {
      "id_kecamatan": "3521101",
      "id_kabupaten": "3521",
      "nama_kecamatan": "KASREMAN"
    },
    {
      "id_kecamatan": "3521110",
      "id_kabupaten": "3521",
      "nama_kecamatan": "NGAWI"
    },
    {
      "id_kecamatan": "3521120",
      "id_kabupaten": "3521",
      "nama_kecamatan": "PARON"
    },
    {
      "id_kecamatan": "3521130",
      "id_kabupaten": "3521",
      "nama_kecamatan": "KEDUNGGALAR"
    },
    {
      "id_kecamatan": "3521140",
      "id_kabupaten": "3521",
      "nama_kecamatan": "PITU"
    },
    {
      "id_kecamatan": "3521150",
      "id_kabupaten": "3521",
      "nama_kecamatan": "WIDODAREN"
    },
    {
      "id_kecamatan": "3521160",
      "id_kabupaten": "3521",
      "nama_kecamatan": "MANTINGAN"
    },
    {
      "id_kecamatan": "3521170",
      "id_kabupaten": "3521",
      "nama_kecamatan": "KARANGANYAR"
    },
    {
      "id_kecamatan": "3522010",
      "id_kabupaten": "3522",
      "nama_kecamatan": "MARGOMULYO"
    },
    {
      "id_kecamatan": "3522020",
      "id_kabupaten": "3522",
      "nama_kecamatan": "NGRAHO"
    },
    {
      "id_kecamatan": "3522030",
      "id_kabupaten": "3522",
      "nama_kecamatan": "TAMBAKREJO"
    },
    {
      "id_kecamatan": "3522040",
      "id_kabupaten": "3522",
      "nama_kecamatan": "NGAMBON"
    },
    {
      "id_kecamatan": "3522041",
      "id_kabupaten": "3522",
      "nama_kecamatan": "SEKAR"
    },
    {
      "id_kecamatan": "3522050",
      "id_kabupaten": "3522",
      "nama_kecamatan": "BUBULAN"
    },
    {
      "id_kecamatan": "3522051",
      "id_kabupaten": "3522",
      "nama_kecamatan": "GONDANG"
    },
    {
      "id_kecamatan": "3522060",
      "id_kabupaten": "3522",
      "nama_kecamatan": "TEMAYANG"
    },
    {
      "id_kecamatan": "3522070",
      "id_kabupaten": "3522",
      "nama_kecamatan": "SUGIHWARAS"
    },
    {
      "id_kecamatan": "3522080",
      "id_kabupaten": "3522",
      "nama_kecamatan": "KEDUNGADEM"
    },
    {
      "id_kecamatan": "3522090",
      "id_kabupaten": "3522",
      "nama_kecamatan": "KEPOH BARU"
    },
    {
      "id_kecamatan": "3522100",
      "id_kabupaten": "3522",
      "nama_kecamatan": "BAURENO"
    },
    {
      "id_kecamatan": "3522110",
      "id_kabupaten": "3522",
      "nama_kecamatan": "KANOR"
    },
    {
      "id_kecamatan": "3522120",
      "id_kabupaten": "3522",
      "nama_kecamatan": "SUMBEREJO"
    },
    {
      "id_kecamatan": "3522130",
      "id_kabupaten": "3522",
      "nama_kecamatan": "BALEN"
    },
    {
      "id_kecamatan": "3522140",
      "id_kabupaten": "3522",
      "nama_kecamatan": "SUKOSEWU"
    },
    {
      "id_kecamatan": "3522150",
      "id_kabupaten": "3522",
      "nama_kecamatan": "KAPAS"
    },
    {
      "id_kecamatan": "3522160",
      "id_kabupaten": "3522",
      "nama_kecamatan": "BOJONEGORO"
    },
    {
      "id_kecamatan": "3522170",
      "id_kabupaten": "3522",
      "nama_kecamatan": "TRUCUK"
    },
    {
      "id_kecamatan": "3522180",
      "id_kabupaten": "3522",
      "nama_kecamatan": "DANDER"
    },
    {
      "id_kecamatan": "3522190",
      "id_kabupaten": "3522",
      "nama_kecamatan": "NGASEM"
    },
    {
      "id_kecamatan": "3522191",
      "id_kabupaten": "3522",
      "nama_kecamatan": "GAYAM"
    },
    {
      "id_kecamatan": "3522200",
      "id_kabupaten": "3522",
      "nama_kecamatan": "KALITIDU"
    },
    {
      "id_kecamatan": "3522210",
      "id_kabupaten": "3522",
      "nama_kecamatan": "MALO"
    },
    {
      "id_kecamatan": "3522220",
      "id_kabupaten": "3522",
      "nama_kecamatan": "PURWOSARI"
    },
    {
      "id_kecamatan": "3522230",
      "id_kabupaten": "3522",
      "nama_kecamatan": "PADANGAN"
    },
    {
      "id_kecamatan": "3522240",
      "id_kabupaten": "3522",
      "nama_kecamatan": "KASIMAN"
    },
    {
      "id_kecamatan": "3522241",
      "id_kabupaten": "3522",
      "nama_kecamatan": "KEDEWAN"
    },
    {
      "id_kecamatan": "3523010",
      "id_kabupaten": "3523",
      "nama_kecamatan": "KENDURUAN"
    },
    {
      "id_kecamatan": "3523020",
      "id_kabupaten": "3523",
      "nama_kecamatan": "BANGILAN"
    },
    {
      "id_kecamatan": "3523030",
      "id_kabupaten": "3523",
      "nama_kecamatan": "SENORI"
    },
    {
      "id_kecamatan": "3523040",
      "id_kabupaten": "3523",
      "nama_kecamatan": "SINGGAHAN"
    },
    {
      "id_kecamatan": "3523050",
      "id_kabupaten": "3523",
      "nama_kecamatan": "MONTONG"
    },
    {
      "id_kecamatan": "3523060",
      "id_kabupaten": "3523",
      "nama_kecamatan": "PARENGAN"
    },
    {
      "id_kecamatan": "3523070",
      "id_kabupaten": "3523",
      "nama_kecamatan": "SOKO"
    },
    {
      "id_kecamatan": "3523080",
      "id_kabupaten": "3523",
      "nama_kecamatan": "RENGEL"
    },
    {
      "id_kecamatan": "3523081",
      "id_kabupaten": "3523",
      "nama_kecamatan": "GRABAGAN"
    },
    {
      "id_kecamatan": "3523090",
      "id_kabupaten": "3523",
      "nama_kecamatan": "PLUMPANG"
    },
    {
      "id_kecamatan": "3523100",
      "id_kabupaten": "3523",
      "nama_kecamatan": "WIDANG"
    },
    {
      "id_kecamatan": "3523110",
      "id_kabupaten": "3523",
      "nama_kecamatan": "PALANG"
    },
    {
      "id_kecamatan": "3523120",
      "id_kabupaten": "3523",
      "nama_kecamatan": "SEMANDING"
    },
    {
      "id_kecamatan": "3523130",
      "id_kabupaten": "3523",
      "nama_kecamatan": "TUBAN"
    },
    {
      "id_kecamatan": "3523140",
      "id_kabupaten": "3523",
      "nama_kecamatan": "JENU"
    },
    {
      "id_kecamatan": "3523150",
      "id_kabupaten": "3523",
      "nama_kecamatan": "MERAKURAK"
    },
    {
      "id_kecamatan": "3523160",
      "id_kabupaten": "3523",
      "nama_kecamatan": "KEREK"
    },
    {
      "id_kecamatan": "3523170",
      "id_kabupaten": "3523",
      "nama_kecamatan": "TAMBAKBOYO"
    },
    {
      "id_kecamatan": "3523180",
      "id_kabupaten": "3523",
      "nama_kecamatan": "JATIROGO"
    },
    {
      "id_kecamatan": "3523190",
      "id_kabupaten": "3523",
      "nama_kecamatan": "BANCAR"
    },
    {
      "id_kecamatan": "3524010",
      "id_kabupaten": "3524",
      "nama_kecamatan": "SUKORAME"
    },
    {
      "id_kecamatan": "3524020",
      "id_kabupaten": "3524",
      "nama_kecamatan": "BLULUK"
    },
    {
      "id_kecamatan": "3524030",
      "id_kabupaten": "3524",
      "nama_kecamatan": "NGIMBANG"
    },
    {
      "id_kecamatan": "3524040",
      "id_kabupaten": "3524",
      "nama_kecamatan": "SAMBENG"
    },
    {
      "id_kecamatan": "3524050",
      "id_kabupaten": "3524",
      "nama_kecamatan": "MANTUP"
    },
    {
      "id_kecamatan": "3524060",
      "id_kabupaten": "3524",
      "nama_kecamatan": "KEMBANGBAHU"
    },
    {
      "id_kecamatan": "3524070",
      "id_kabupaten": "3524",
      "nama_kecamatan": "SUGIO"
    },
    {
      "id_kecamatan": "3524080",
      "id_kabupaten": "3524",
      "nama_kecamatan": "KEDUNGPRING"
    },
    {
      "id_kecamatan": "3524090",
      "id_kabupaten": "3524",
      "nama_kecamatan": "MODO"
    },
    {
      "id_kecamatan": "3524100",
      "id_kabupaten": "3524",
      "nama_kecamatan": "BABAT"
    },
    {
      "id_kecamatan": "3524110",
      "id_kabupaten": "3524",
      "nama_kecamatan": "PUCUK"
    },
    {
      "id_kecamatan": "3524120",
      "id_kabupaten": "3524",
      "nama_kecamatan": "SUKODADI"
    },
    {
      "id_kecamatan": "3524130",
      "id_kabupaten": "3524",
      "nama_kecamatan": "LAMONGAN"
    },
    {
      "id_kecamatan": "3524140",
      "id_kabupaten": "3524",
      "nama_kecamatan": "TIKUNG"
    },
    {
      "id_kecamatan": "3524141",
      "id_kabupaten": "3524",
      "nama_kecamatan": "SARIREJO"
    },
    {
      "id_kecamatan": "3524150",
      "id_kabupaten": "3524",
      "nama_kecamatan": "DEKET"
    },
    {
      "id_kecamatan": "3524160",
      "id_kabupaten": "3524",
      "nama_kecamatan": "GLAGAH"
    },
    {
      "id_kecamatan": "3524170",
      "id_kabupaten": "3524",
      "nama_kecamatan": "KARANGBINANGUN"
    },
    {
      "id_kecamatan": "3524180",
      "id_kabupaten": "3524",
      "nama_kecamatan": "TURI"
    },
    {
      "id_kecamatan": "3524190",
      "id_kabupaten": "3524",
      "nama_kecamatan": "KALITENGAH"
    },
    {
      "id_kecamatan": "3524200",
      "id_kabupaten": "3524",
      "nama_kecamatan": "KARANG GENENG"
    },
    {
      "id_kecamatan": "3524210",
      "id_kabupaten": "3524",
      "nama_kecamatan": "SEKARAN"
    },
    {
      "id_kecamatan": "3524220",
      "id_kabupaten": "3524",
      "nama_kecamatan": "MADURAN"
    },
    {
      "id_kecamatan": "3524230",
      "id_kabupaten": "3524",
      "nama_kecamatan": "LAREN"
    },
    {
      "id_kecamatan": "3524240",
      "id_kabupaten": "3524",
      "nama_kecamatan": "SOLOKURO"
    },
    {
      "id_kecamatan": "3524250",
      "id_kabupaten": "3524",
      "nama_kecamatan": "PACIRAN"
    },
    {
      "id_kecamatan": "3524260",
      "id_kabupaten": "3524",
      "nama_kecamatan": "BRONDONG"
    },
    {
      "id_kecamatan": "3525010",
      "id_kabupaten": "3525",
      "nama_kecamatan": "WRINGINANOM"
    },
    {
      "id_kecamatan": "3525020",
      "id_kabupaten": "3525",
      "nama_kecamatan": "DRIYOREJO"
    },
    {
      "id_kecamatan": "3525030",
      "id_kabupaten": "3525",
      "nama_kecamatan": "KEDAMEAN"
    },
    {
      "id_kecamatan": "3525040",
      "id_kabupaten": "3525",
      "nama_kecamatan": "MENGANTI"
    },
    {
      "id_kecamatan": "3525050",
      "id_kabupaten": "3525",
      "nama_kecamatan": "CERME"
    },
    {
      "id_kecamatan": "3525060",
      "id_kabupaten": "3525",
      "nama_kecamatan": "BENJENG"
    },
    {
      "id_kecamatan": "3525070",
      "id_kabupaten": "3525",
      "nama_kecamatan": "BALONGPANGGANG"
    },
    {
      "id_kecamatan": "3525080",
      "id_kabupaten": "3525",
      "nama_kecamatan": "DUDUKSAMPEYAN"
    },
    {
      "id_kecamatan": "3525090",
      "id_kabupaten": "3525",
      "nama_kecamatan": "KEBOMAS"
    },
    {
      "id_kecamatan": "3525100",
      "id_kabupaten": "3525",
      "nama_kecamatan": "GRESIK"
    },
    {
      "id_kecamatan": "3525110",
      "id_kabupaten": "3525",
      "nama_kecamatan": "MANYAR"
    },
    {
      "id_kecamatan": "3525120",
      "id_kabupaten": "3525",
      "nama_kecamatan": "BUNGAH"
    },
    {
      "id_kecamatan": "3525130",
      "id_kabupaten": "3525",
      "nama_kecamatan": "SIDAYU"
    },
    {
      "id_kecamatan": "3525140",
      "id_kabupaten": "3525",
      "nama_kecamatan": "DUKUN"
    },
    {
      "id_kecamatan": "3525150",
      "id_kabupaten": "3525",
      "nama_kecamatan": "PANCENG"
    },
    {
      "id_kecamatan": "3525160",
      "id_kabupaten": "3525",
      "nama_kecamatan": "UJUNGPANGKAH"
    },
    {
      "id_kecamatan": "3525170",
      "id_kabupaten": "3525",
      "nama_kecamatan": "SANGKAPURA"
    },
    {
      "id_kecamatan": "3525180",
      "id_kabupaten": "3525",
      "nama_kecamatan": "TAMBAK"
    },
    {
      "id_kecamatan": "3526010",
      "id_kabupaten": "3526",
      "nama_kecamatan": "KAMAL"
    },
    {
      "id_kecamatan": "3526020",
      "id_kabupaten": "3526",
      "nama_kecamatan": "LABANG"
    },
    {
      "id_kecamatan": "3526030",
      "id_kabupaten": "3526",
      "nama_kecamatan": "KWANYAR"
    },
    {
      "id_kecamatan": "3526040",
      "id_kabupaten": "3526",
      "nama_kecamatan": "MODUNG"
    },
    {
      "id_kecamatan": "3526050",
      "id_kabupaten": "3526",
      "nama_kecamatan": "BLEGA"
    },
    {
      "id_kecamatan": "3526060",
      "id_kabupaten": "3526",
      "nama_kecamatan": "KONANG"
    },
    {
      "id_kecamatan": "3526070",
      "id_kabupaten": "3526",
      "nama_kecamatan": "GALIS"
    },
    {
      "id_kecamatan": "3526080",
      "id_kabupaten": "3526",
      "nama_kecamatan": "TANAH MERAH"
    },
    {
      "id_kecamatan": "3526090",
      "id_kabupaten": "3526",
      "nama_kecamatan": "TRAGAH"
    },
    {
      "id_kecamatan": "3526100",
      "id_kabupaten": "3526",
      "nama_kecamatan": "SOCAH"
    },
    {
      "id_kecamatan": "3526110",
      "id_kabupaten": "3526",
      "nama_kecamatan": "BANGKALAN"
    },
    {
      "id_kecamatan": "3526120",
      "id_kabupaten": "3526",
      "nama_kecamatan": "BURNEH"
    },
    {
      "id_kecamatan": "3526130",
      "id_kabupaten": "3526",
      "nama_kecamatan": "AROSBAYA"
    },
    {
      "id_kecamatan": "3526140",
      "id_kabupaten": "3526",
      "nama_kecamatan": "GEGER"
    },
    {
      "id_kecamatan": "3526150",
      "id_kabupaten": "3526",
      "nama_kecamatan": "KOKOP"
    },
    {
      "id_kecamatan": "3526160",
      "id_kabupaten": "3526",
      "nama_kecamatan": "TANJUNGBUMI"
    },
    {
      "id_kecamatan": "3526170",
      "id_kabupaten": "3526",
      "nama_kecamatan": "SEPULU"
    },
    {
      "id_kecamatan": "3526180",
      "id_kabupaten": "3526",
      "nama_kecamatan": "KLAMPIS"
    },
    {
      "id_kecamatan": "3527010",
      "id_kabupaten": "3527",
      "nama_kecamatan": "SRESEH"
    },
    {
      "id_kecamatan": "3527020",
      "id_kabupaten": "3527",
      "nama_kecamatan": "TORJUN"
    },
    {
      "id_kecamatan": "3527021",
      "id_kabupaten": "3527",
      "nama_kecamatan": "PANGARENGAN"
    },
    {
      "id_kecamatan": "3527030",
      "id_kabupaten": "3527",
      "nama_kecamatan": "SAMPANG"
    },
    {
      "id_kecamatan": "3527040",
      "id_kabupaten": "3527",
      "nama_kecamatan": "CAMPLONG"
    },
    {
      "id_kecamatan": "3527050",
      "id_kabupaten": "3527",
      "nama_kecamatan": "OMBEN"
    },
    {
      "id_kecamatan": "3527060",
      "id_kabupaten": "3527",
      "nama_kecamatan": "KEDUNGDUNG"
    },
    {
      "id_kecamatan": "3527070",
      "id_kabupaten": "3527",
      "nama_kecamatan": "JRENGIK"
    },
    {
      "id_kecamatan": "3527080",
      "id_kabupaten": "3527",
      "nama_kecamatan": "TAMBELANGAN"
    },
    {
      "id_kecamatan": "3527090",
      "id_kabupaten": "3527",
      "nama_kecamatan": "BANYUATES"
    },
    {
      "id_kecamatan": "3527100",
      "id_kabupaten": "3527",
      "nama_kecamatan": "ROBATAL"
    },
    {
      "id_kecamatan": "3527101",
      "id_kabupaten": "3527",
      "nama_kecamatan": "KARANG PENANG"
    },
    {
      "id_kecamatan": "3527110",
      "id_kabupaten": "3527",
      "nama_kecamatan": "KETAPANG"
    },
    {
      "id_kecamatan": "3527120",
      "id_kabupaten": "3527",
      "nama_kecamatan": "SOKOBANAH"
    },
    {
      "id_kecamatan": "3528010",
      "id_kabupaten": "3528",
      "nama_kecamatan": "TLANAKAN"
    },
    {
      "id_kecamatan": "3528020",
      "id_kabupaten": "3528",
      "nama_kecamatan": "PADEMAWU"
    },
    {
      "id_kecamatan": "3528030",
      "id_kabupaten": "3528",
      "nama_kecamatan": "GALIS"
    },
    {
      "id_kecamatan": "3528040",
      "id_kabupaten": "3528",
      "nama_kecamatan": "LARANGAN"
    },
    {
      "id_kecamatan": "3528050",
      "id_kabupaten": "3528",
      "nama_kecamatan": "PAMEKASAN"
    },
    {
      "id_kecamatan": "3528060",
      "id_kabupaten": "3528",
      "nama_kecamatan": "PROPPO"
    },
    {
      "id_kecamatan": "3528070",
      "id_kabupaten": "3528",
      "nama_kecamatan": "PALENGAAN"
    },
    {
      "id_kecamatan": "3528080",
      "id_kabupaten": "3528",
      "nama_kecamatan": "PEGANTENAN"
    },
    {
      "id_kecamatan": "3528090",
      "id_kabupaten": "3528",
      "nama_kecamatan": "KADUR"
    },
    {
      "id_kecamatan": "3528100",
      "id_kabupaten": "3528",
      "nama_kecamatan": "PAKONG"
    },
    {
      "id_kecamatan": "3528110",
      "id_kabupaten": "3528",
      "nama_kecamatan": "WARU"
    },
    {
      "id_kecamatan": "3528120",
      "id_kabupaten": "3528",
      "nama_kecamatan": "BATU MARMAR"
    },
    {
      "id_kecamatan": "3528130",
      "id_kabupaten": "3528",
      "nama_kecamatan": "PASEAN"
    },
    {
      "id_kecamatan": "3529010",
      "id_kabupaten": "3529",
      "nama_kecamatan": "PRAGAAN"
    },
    {
      "id_kecamatan": "3529020",
      "id_kabupaten": "3529",
      "nama_kecamatan": "BLUTO"
    },
    {
      "id_kecamatan": "3529030",
      "id_kabupaten": "3529",
      "nama_kecamatan": "SARONGGI"
    },
    {
      "id_kecamatan": "3529040",
      "id_kabupaten": "3529",
      "nama_kecamatan": "GILIGENTENG"
    },
    {
      "id_kecamatan": "3529050",
      "id_kabupaten": "3529",
      "nama_kecamatan": "TALANGO"
    },
    {
      "id_kecamatan": "3529060",
      "id_kabupaten": "3529",
      "nama_kecamatan": "KALIANGET"
    },
    {
      "id_kecamatan": "3529070",
      "id_kabupaten": "3529",
      "nama_kecamatan": "KOTA SUMENEP"
    },
    {
      "id_kecamatan": "3529071",
      "id_kabupaten": "3529",
      "nama_kecamatan": "BATUAN"
    },
    {
      "id_kecamatan": "3529080",
      "id_kabupaten": "3529",
      "nama_kecamatan": "LENTENG"
    },
    {
      "id_kecamatan": "3529090",
      "id_kabupaten": "3529",
      "nama_kecamatan": "GANDING"
    },
    {
      "id_kecamatan": "3529100",
      "id_kabupaten": "3529",
      "nama_kecamatan": "GULUK GULUK"
    },
    {
      "id_kecamatan": "3529110",
      "id_kabupaten": "3529",
      "nama_kecamatan": "PASONGSONGAN"
    },
    {
      "id_kecamatan": "3529120",
      "id_kabupaten": "3529",
      "nama_kecamatan": "AMBUNTEN"
    },
    {
      "id_kecamatan": "3529130",
      "id_kabupaten": "3529",
      "nama_kecamatan": "RUBARU"
    },
    {
      "id_kecamatan": "3529140",
      "id_kabupaten": "3529",
      "nama_kecamatan": "DASUK"
    },
    {
      "id_kecamatan": "3529150",
      "id_kabupaten": "3529",
      "nama_kecamatan": "MANDING"
    },
    {
      "id_kecamatan": "3529160",
      "id_kabupaten": "3529",
      "nama_kecamatan": "BATUPUTIH"
    },
    {
      "id_kecamatan": "3529170",
      "id_kabupaten": "3529",
      "nama_kecamatan": "GAPURA"
    },
    {
      "id_kecamatan": "3529180",
      "id_kabupaten": "3529",
      "nama_kecamatan": "BATANG BATANG"
    },
    {
      "id_kecamatan": "3529190",
      "id_kabupaten": "3529",
      "nama_kecamatan": "DUNGKEK"
    },
    {
      "id_kecamatan": "3529200",
      "id_kabupaten": "3529",
      "nama_kecamatan": "NONGGUNONG"
    },
    {
      "id_kecamatan": "3529210",
      "id_kabupaten": "3529",
      "nama_kecamatan": "GAYAM"
    },
    {
      "id_kecamatan": "3529220",
      "id_kabupaten": "3529",
      "nama_kecamatan": "RAAS"
    },
    {
      "id_kecamatan": "3529230",
      "id_kabupaten": "3529",
      "nama_kecamatan": "SAPEKEN"
    },
    {
      "id_kecamatan": "3529240",
      "id_kabupaten": "3529",
      "nama_kecamatan": "ARJASA"
    },
    {
      "id_kecamatan": "3529241",
      "id_kabupaten": "3529",
      "nama_kecamatan": "KANGAYAN"
    },
    {
      "id_kecamatan": "3529250",
      "id_kabupaten": "3529",
      "nama_kecamatan": "MASALEMBU"
    },
    {
      "id_kecamatan": "3571010",
      "id_kabupaten": "3571",
      "nama_kecamatan": "MOJOROTO"
    },
    {
      "id_kecamatan": "3571020",
      "id_kabupaten": "3571",
      "nama_kecamatan": "KOTA KEDIRI"
    },
    {
      "id_kecamatan": "3571030",
      "id_kabupaten": "3571",
      "nama_kecamatan": "PESANTREN"
    },
    {
      "id_kecamatan": "3572010",
      "id_kabupaten": "3572",
      "nama_kecamatan": "SUKOREJO"
    },
    {
      "id_kecamatan": "3572020",
      "id_kabupaten": "3572",
      "nama_kecamatan": "KEPANJENKIDUL"
    },
    {
      "id_kecamatan": "3572030",
      "id_kabupaten": "3572",
      "nama_kecamatan": "SANANWETAN"
    },
    {
      "id_kecamatan": "3573010",
      "id_kabupaten": "3573",
      "nama_kecamatan": "KEDUNGKANDANG"
    },
    {
      "id_kecamatan": "3573020",
      "id_kabupaten": "3573",
      "nama_kecamatan": "SUKUN"
    },
    {
      "id_kecamatan": "3573030",
      "id_kabupaten": "3573",
      "nama_kecamatan": "KLOJEN"
    },
    {
      "id_kecamatan": "3573040",
      "id_kabupaten": "3573",
      "nama_kecamatan": "BLIMBING"
    },
    {
      "id_kecamatan": "3573050",
      "id_kabupaten": "3573",
      "nama_kecamatan": "LOWOKWARU"
    },
    {
      "id_kecamatan": "3574010",
      "id_kabupaten": "3574",
      "nama_kecamatan": "KADEMANGAN"
    },
    {
      "id_kecamatan": "3574011",
      "id_kabupaten": "3574",
      "nama_kecamatan": "KEDOPOK"
    },
    {
      "id_kecamatan": "3574020",
      "id_kabupaten": "3574",
      "nama_kecamatan": "WONOASIH"
    },
    {
      "id_kecamatan": "3574030",
      "id_kabupaten": "3574",
      "nama_kecamatan": "MAYANGAN"
    },
    {
      "id_kecamatan": "3574031",
      "id_kabupaten": "3574",
      "nama_kecamatan": "KANIGARAN"
    },
    {
      "id_kecamatan": "3575010",
      "id_kabupaten": "3575",
      "nama_kecamatan": "GADINGREJO"
    },
    {
      "id_kecamatan": "3575020",
      "id_kabupaten": "3575",
      "nama_kecamatan": "PURWOREJO"
    },
    {
      "id_kecamatan": "3575030",
      "id_kabupaten": "3575",
      "nama_kecamatan": "BUGULKIDUL"
    },
    {
      "id_kecamatan": "3575031",
      "id_kabupaten": "3575",
      "nama_kecamatan": "PANGGUNGREJO"
    },
    {
      "id_kecamatan": "3576010",
      "id_kabupaten": "3576",
      "nama_kecamatan": "PRAJURIT KULON"
    },
    {
      "id_kecamatan": "3576020",
      "id_kabupaten": "3576",
      "nama_kecamatan": "MAGERSARI"
    },
    {
      "id_kecamatan": "3577010",
      "id_kabupaten": "3577",
      "nama_kecamatan": "MANGU HARJO"
    },
    {
      "id_kecamatan": "3577020",
      "id_kabupaten": "3577",
      "nama_kecamatan": "TAMAN"
    },
    {
      "id_kecamatan": "3577030",
      "id_kabupaten": "3577",
      "nama_kecamatan": "KARTOHARJO"
    },
    {
      "id_kecamatan": "3578010",
      "id_kabupaten": "3578",
      "nama_kecamatan": "KARANG PILANG"
    },
    {
      "id_kecamatan": "3578020",
      "id_kabupaten": "3578",
      "nama_kecamatan": "JAMBANGAN"
    },
    {
      "id_kecamatan": "3578030",
      "id_kabupaten": "3578",
      "nama_kecamatan": "GAYUNGAN"
    },
    {
      "id_kecamatan": "3578040",
      "id_kabupaten": "3578",
      "nama_kecamatan": "WONOCOLO"
    },
    {
      "id_kecamatan": "3578050",
      "id_kabupaten": "3578",
      "nama_kecamatan": "TENGGILIS MEJOYO"
    },
    {
      "id_kecamatan": "3578060",
      "id_kabupaten": "3578",
      "nama_kecamatan": "GUNUNG ANYAR"
    },
    {
      "id_kecamatan": "3578070",
      "id_kabupaten": "3578",
      "nama_kecamatan": "RUNGKUT"
    },
    {
      "id_kecamatan": "3578080",
      "id_kabupaten": "3578",
      "nama_kecamatan": "SUKOLILO"
    },
    {
      "id_kecamatan": "3578090",
      "id_kabupaten": "3578",
      "nama_kecamatan": "MULYOREJO"
    },
    {
      "id_kecamatan": "3578100",
      "id_kabupaten": "3578",
      "nama_kecamatan": "GUBENG"
    },
    {
      "id_kecamatan": "3578110",
      "id_kabupaten": "3578",
      "nama_kecamatan": "WONOKROMO"
    },
    {
      "id_kecamatan": "3578120",
      "id_kabupaten": "3578",
      "nama_kecamatan": "DUKUH PAKIS"
    },
    {
      "id_kecamatan": "3578130",
      "id_kabupaten": "3578",
      "nama_kecamatan": "WIYUNG"
    },
    {
      "id_kecamatan": "3578140",
      "id_kabupaten": "3578",
      "nama_kecamatan": "LAKARSANTRI"
    },
    {
      "id_kecamatan": "3578141",
      "id_kabupaten": "3578",
      "nama_kecamatan": "SAMBIKEREP"
    },
    {
      "id_kecamatan": "3578150",
      "id_kabupaten": "3578",
      "nama_kecamatan": "TANDES"
    },
    {
      "id_kecamatan": "3578160",
      "id_kabupaten": "3578",
      "nama_kecamatan": "SUKO MANUNGGAL"
    },
    {
      "id_kecamatan": "3578170",
      "id_kabupaten": "3578",
      "nama_kecamatan": "SAWAHAN"
    },
    {
      "id_kecamatan": "3578180",
      "id_kabupaten": "3578",
      "nama_kecamatan": "TEGALSARI"
    },
    {
      "id_kecamatan": "3578190",
      "id_kabupaten": "3578",
      "nama_kecamatan": "GENTENG"
    },
    {
      "id_kecamatan": "3578200",
      "id_kabupaten": "3578",
      "nama_kecamatan": "TAMBAKSARI"
    },
    {
      "id_kecamatan": "3578210",
      "id_kabupaten": "3578",
      "nama_kecamatan": "KENJERAN"
    },
    {
      "id_kecamatan": "3578211",
      "id_kabupaten": "3578",
      "nama_kecamatan": "BULAK"
    },
    {
      "id_kecamatan": "3578220",
      "id_kabupaten": "3578",
      "nama_kecamatan": "SIMOKERTO"
    },
    {
      "id_kecamatan": "3578230",
      "id_kabupaten": "3578",
      "nama_kecamatan": "SEMAMPIR"
    },
    {
      "id_kecamatan": "3578240",
      "id_kabupaten": "3578",
      "nama_kecamatan": "PABEAN CANTIAN"
    },
    {
      "id_kecamatan": "3578250",
      "id_kabupaten": "3578",
      "nama_kecamatan": "BUBUTAN"
    },
    {
      "id_kecamatan": "3578260",
      "id_kabupaten": "3578",
      "nama_kecamatan": "KREMBANGAN"
    },
    {
      "id_kecamatan": "3578270",
      "id_kabupaten": "3578",
      "nama_kecamatan": "ASEMROWO"
    },
    {
      "id_kecamatan": "3578280",
      "id_kabupaten": "3578",
      "nama_kecamatan": "BENOWO"
    },
    {
      "id_kecamatan": "3578281",
      "id_kabupaten": "3578",
      "nama_kecamatan": "PAKAL"
    },
    {
      "id_kecamatan": "3579010",
      "id_kabupaten": "3579",
      "nama_kecamatan": "BATU"
    },
    {
      "id_kecamatan": "3579020",
      "id_kabupaten": "3579",
      "nama_kecamatan": "JUNREJO"
    },
    {
      "id_kecamatan": "3579030",
      "id_kabupaten": "3579",
      "nama_kecamatan": "BUMIAJI"
    },
    {
      "id_kecamatan": "3601010",
      "id_kabupaten": "3601",
      "nama_kecamatan": "SUMUR"
    },
    {
      "id_kecamatan": "3601020",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CIMANGGU"
    },
    {
      "id_kecamatan": "3601030",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CIBALIUNG"
    },
    {
      "id_kecamatan": "3601031",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CIBITUNG"
    },
    {
      "id_kecamatan": "3601040",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CIKEUSIK"
    },
    {
      "id_kecamatan": "3601050",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CIGEULIS"
    },
    {
      "id_kecamatan": "3601060",
      "id_kabupaten": "3601",
      "nama_kecamatan": "PANIMBANG"
    },
    {
      "id_kecamatan": "3601061",
      "id_kabupaten": "3601",
      "nama_kecamatan": "SOBANG"
    },
    {
      "id_kecamatan": "3601070",
      "id_kabupaten": "3601",
      "nama_kecamatan": "MUNJUL"
    },
    {
      "id_kecamatan": "3601071",
      "id_kabupaten": "3601",
      "nama_kecamatan": "ANGSANA"
    },
    {
      "id_kecamatan": "3601072",
      "id_kabupaten": "3601",
      "nama_kecamatan": "SINDANGRESMI"
    },
    {
      "id_kecamatan": "3601080",
      "id_kabupaten": "3601",
      "nama_kecamatan": "PICUNG"
    },
    {
      "id_kecamatan": "3601090",
      "id_kabupaten": "3601",
      "nama_kecamatan": "BOJONG"
    },
    {
      "id_kecamatan": "3601100",
      "id_kabupaten": "3601",
      "nama_kecamatan": "SAKETI"
    },
    {
      "id_kecamatan": "3601101",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CISATA"
    },
    {
      "id_kecamatan": "3601110",
      "id_kabupaten": "3601",
      "nama_kecamatan": "PAGELARAN"
    },
    {
      "id_kecamatan": "3601111",
      "id_kabupaten": "3601",
      "nama_kecamatan": "PATIA"
    },
    {
      "id_kecamatan": "3601112",
      "id_kabupaten": "3601",
      "nama_kecamatan": "SUKARESMI"
    },
    {
      "id_kecamatan": "3601120",
      "id_kabupaten": "3601",
      "nama_kecamatan": "LABUAN"
    },
    {
      "id_kecamatan": "3601121",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CARITA"
    },
    {
      "id_kecamatan": "3601130",
      "id_kabupaten": "3601",
      "nama_kecamatan": "JIPUT"
    },
    {
      "id_kecamatan": "3601131",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CIKEDAL"
    },
    {
      "id_kecamatan": "3601140",
      "id_kabupaten": "3601",
      "nama_kecamatan": "MENES"
    },
    {
      "id_kecamatan": "3601141",
      "id_kabupaten": "3601",
      "nama_kecamatan": "PULOSARI"
    },
    {
      "id_kecamatan": "3601150",
      "id_kabupaten": "3601",
      "nama_kecamatan": "MANDALAWANGI"
    },
    {
      "id_kecamatan": "3601160",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CIMANUK"
    },
    {
      "id_kecamatan": "3601161",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CIPEUCANG"
    },
    {
      "id_kecamatan": "3601170",
      "id_kabupaten": "3601",
      "nama_kecamatan": "BANJAR"
    },
    {
      "id_kecamatan": "3601171",
      "id_kabupaten": "3601",
      "nama_kecamatan": "KADUHEJO"
    },
    {
      "id_kecamatan": "3601172",
      "id_kabupaten": "3601",
      "nama_kecamatan": "MEKARJAYA"
    },
    {
      "id_kecamatan": "3601180",
      "id_kabupaten": "3601",
      "nama_kecamatan": "PANDEGLANG"
    },
    {
      "id_kecamatan": "3601181",
      "id_kabupaten": "3601",
      "nama_kecamatan": "MAJASARI"
    },
    {
      "id_kecamatan": "3601190",
      "id_kabupaten": "3601",
      "nama_kecamatan": "CADASARI"
    },
    {
      "id_kecamatan": "3601191",
      "id_kabupaten": "3601",
      "nama_kecamatan": "KARANGTANJUNG"
    },
    {
      "id_kecamatan": "3601192",
      "id_kabupaten": "3601",
      "nama_kecamatan": "KORONCONG"
    },
    {
      "id_kecamatan": "3602010",
      "id_kabupaten": "3602",
      "nama_kecamatan": "MALINGPING"
    },
    {
      "id_kecamatan": "3602011",
      "id_kabupaten": "3602",
      "nama_kecamatan": "WANASALAM"
    },
    {
      "id_kecamatan": "3602020",
      "id_kabupaten": "3602",
      "nama_kecamatan": "PANGGARANGAN"
    },
    {
      "id_kecamatan": "3602021",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIHARA"
    },
    {
      "id_kecamatan": "3602030",
      "id_kabupaten": "3602",
      "nama_kecamatan": "BAYAH"
    },
    {
      "id_kecamatan": "3602031",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CILOGRANG"
    },
    {
      "id_kecamatan": "3602040",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIBEBER"
    },
    {
      "id_kecamatan": "3602050",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIJAKU"
    },
    {
      "id_kecamatan": "3602051",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIGEMBLONG"
    },
    {
      "id_kecamatan": "3602060",
      "id_kabupaten": "3602",
      "nama_kecamatan": "BANJARSARI"
    },
    {
      "id_kecamatan": "3602070",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CILELES"
    },
    {
      "id_kecamatan": "3602080",
      "id_kabupaten": "3602",
      "nama_kecamatan": "GUNUNG KENCANA"
    },
    {
      "id_kecamatan": "3602090",
      "id_kabupaten": "3602",
      "nama_kecamatan": "BOJONGMANIK"
    },
    {
      "id_kecamatan": "3602091",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIRINTEN"
    },
    {
      "id_kecamatan": "3602100",
      "id_kabupaten": "3602",
      "nama_kecamatan": "LEUWIDAMAR"
    },
    {
      "id_kecamatan": "3602110",
      "id_kabupaten": "3602",
      "nama_kecamatan": "MUNCANG"
    },
    {
      "id_kecamatan": "3602111",
      "id_kabupaten": "3602",
      "nama_kecamatan": "SOBANG"
    },
    {
      "id_kecamatan": "3602120",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIPANAS"
    },
    {
      "id_kecamatan": "3602121",
      "id_kabupaten": "3602",
      "nama_kecamatan": "LEBAKGEDONG"
    },
    {
      "id_kecamatan": "3602130",
      "id_kabupaten": "3602",
      "nama_kecamatan": "SAJIRA"
    },
    {
      "id_kecamatan": "3602140",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIMARGA"
    },
    {
      "id_kecamatan": "3602150",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIKULUR"
    },
    {
      "id_kecamatan": "3602160",
      "id_kabupaten": "3602",
      "nama_kecamatan": "WARUNGGUNUNG"
    },
    {
      "id_kecamatan": "3602170",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CIBADAK"
    },
    {
      "id_kecamatan": "3602180",
      "id_kabupaten": "3602",
      "nama_kecamatan": "RANGKASBITUNG"
    },
    {
      "id_kecamatan": "3602181",
      "id_kabupaten": "3602",
      "nama_kecamatan": "KALANGANYAR"
    },
    {
      "id_kecamatan": "3602190",
      "id_kabupaten": "3602",
      "nama_kecamatan": "MAJA"
    },
    {
      "id_kecamatan": "3602191",
      "id_kabupaten": "3602",
      "nama_kecamatan": "CURUGBITUNG"
    },
    {
      "id_kecamatan": "3603010",
      "id_kabupaten": "3603",
      "nama_kecamatan": "CISOKA"
    },
    {
      "id_kecamatan": "3603011",
      "id_kabupaten": "3603",
      "nama_kecamatan": "SOLEAR"
    },
    {
      "id_kecamatan": "3603020",
      "id_kabupaten": "3603",
      "nama_kecamatan": "TIGARAKSA"
    },
    {
      "id_kecamatan": "3603021",
      "id_kabupaten": "3603",
      "nama_kecamatan": "JAMBE"
    },
    {
      "id_kecamatan": "3603030",
      "id_kabupaten": "3603",
      "nama_kecamatan": "CIKUPA"
    },
    {
      "id_kecamatan": "3603040",
      "id_kabupaten": "3603",
      "nama_kecamatan": "PANONGAN"
    },
    {
      "id_kecamatan": "3603050",
      "id_kabupaten": "3603",
      "nama_kecamatan": "CURUG"
    },
    {
      "id_kecamatan": "3603051",
      "id_kabupaten": "3603",
      "nama_kecamatan": "KELAPA DUA"
    },
    {
      "id_kecamatan": "3603060",
      "id_kabupaten": "3603",
      "nama_kecamatan": "LEGOK"
    },
    {
      "id_kecamatan": "3603070",
      "id_kabupaten": "3603",
      "nama_kecamatan": "PAGEDANGAN"
    },
    {
      "id_kecamatan": "3603081",
      "id_kabupaten": "3603",
      "nama_kecamatan": "CISAUK"
    },
    {
      "id_kecamatan": "3603120",
      "id_kabupaten": "3603",
      "nama_kecamatan": "PASARKEMIS"
    },
    {
      "id_kecamatan": "3603121",
      "id_kabupaten": "3603",
      "nama_kecamatan": "SINDANG JAYA"
    },
    {
      "id_kecamatan": "3603130",
      "id_kabupaten": "3603",
      "nama_kecamatan": "BALARAJA"
    },
    {
      "id_kecamatan": "3603131",
      "id_kabupaten": "3603",
      "nama_kecamatan": "JAYANTI"
    },
    {
      "id_kecamatan": "3603132",
      "id_kabupaten": "3603",
      "nama_kecamatan": "SUKAMULYA"
    },
    {
      "id_kecamatan": "3603140",
      "id_kabupaten": "3603",
      "nama_kecamatan": "KRESEK"
    },
    {
      "id_kecamatan": "3603141",
      "id_kabupaten": "3603",
      "nama_kecamatan": "GUNUNG KALER"
    },
    {
      "id_kecamatan": "3603150",
      "id_kabupaten": "3603",
      "nama_kecamatan": "KRONJO"
    },
    {
      "id_kecamatan": "3603151",
      "id_kabupaten": "3603",
      "nama_kecamatan": "MEKAR BARU"
    },
    {
      "id_kecamatan": "3603160",
      "id_kabupaten": "3603",
      "nama_kecamatan": "MAUK"
    },
    {
      "id_kecamatan": "3603161",
      "id_kabupaten": "3603",
      "nama_kecamatan": "KEMIRI"
    },
    {
      "id_kecamatan": "3603162",
      "id_kabupaten": "3603",
      "nama_kecamatan": "SUKADIRI"
    },
    {
      "id_kecamatan": "3603170",
      "id_kabupaten": "3603",
      "nama_kecamatan": "RAJEG"
    },
    {
      "id_kecamatan": "3603180",
      "id_kabupaten": "3603",
      "nama_kecamatan": "SEPATAN"
    },
    {
      "id_kecamatan": "3603181",
      "id_kabupaten": "3603",
      "nama_kecamatan": "SEPATAN TIMUR"
    },
    {
      "id_kecamatan": "3603190",
      "id_kabupaten": "3603",
      "nama_kecamatan": "PAKUHAJI"
    },
    {
      "id_kecamatan": "3603200",
      "id_kabupaten": "3603",
      "nama_kecamatan": "TELUKNAGA"
    },
    {
      "id_kecamatan": "3603210",
      "id_kabupaten": "3603",
      "nama_kecamatan": "KOSAMBI"
    },
    {
      "id_kecamatan": "3604010",
      "id_kabupaten": "3604",
      "nama_kecamatan": "CINANGKA"
    },
    {
      "id_kecamatan": "3604020",
      "id_kabupaten": "3604",
      "nama_kecamatan": "PADARINCANG"
    },
    {
      "id_kecamatan": "3604030",
      "id_kabupaten": "3604",
      "nama_kecamatan": "CIOMAS"
    },
    {
      "id_kecamatan": "3604040",
      "id_kabupaten": "3604",
      "nama_kecamatan": "PABUARAN"
    },
    {
      "id_kecamatan": "3604041",
      "id_kabupaten": "3604",
      "nama_kecamatan": "GUNUNG SARI"
    },
    {
      "id_kecamatan": "3604050",
      "id_kabupaten": "3604",
      "nama_kecamatan": "BAROS"
    },
    {
      "id_kecamatan": "3604060",
      "id_kabupaten": "3604",
      "nama_kecamatan": "PETIR"
    },
    {
      "id_kecamatan": "3604061",
      "id_kabupaten": "3604",
      "nama_kecamatan": "TUNJUNG TEJA"
    },
    {
      "id_kecamatan": "3604080",
      "id_kabupaten": "3604",
      "nama_kecamatan": "CIKEUSAL"
    },
    {
      "id_kecamatan": "3604090",
      "id_kabupaten": "3604",
      "nama_kecamatan": "PAMARAYAN"
    },
    {
      "id_kecamatan": "3604091",
      "id_kabupaten": "3604",
      "nama_kecamatan": "BANDUNG"
    },
    {
      "id_kecamatan": "3604100",
      "id_kabupaten": "3604",
      "nama_kecamatan": "JAWILAN"
    },
    {
      "id_kecamatan": "3604110",
      "id_kabupaten": "3604",
      "nama_kecamatan": "KOPO"
    },
    {
      "id_kecamatan": "3604120",
      "id_kabupaten": "3604",
      "nama_kecamatan": "CIKANDE"
    },
    {
      "id_kecamatan": "3604121",
      "id_kabupaten": "3604",
      "nama_kecamatan": "KIBIN"
    },
    {
      "id_kecamatan": "3604130",
      "id_kabupaten": "3604",
      "nama_kecamatan": "KRAGILAN"
    },
    {
      "id_kecamatan": "3604180",
      "id_kabupaten": "3604",
      "nama_kecamatan": "WARINGINKURUNG"
    },
    {
      "id_kecamatan": "3604190",
      "id_kabupaten": "3604",
      "nama_kecamatan": "MANCAK"
    },
    {
      "id_kecamatan": "3604200",
      "id_kabupaten": "3604",
      "nama_kecamatan": "ANYAR"
    },
    {
      "id_kecamatan": "3604210",
      "id_kabupaten": "3604",
      "nama_kecamatan": "BOJONEGARA"
    },
    {
      "id_kecamatan": "3604211",
      "id_kabupaten": "3604",
      "nama_kecamatan": "PULO AMPEL"
    },
    {
      "id_kecamatan": "3604220",
      "id_kabupaten": "3604",
      "nama_kecamatan": "KRAMATWATU"
    },
    {
      "id_kecamatan": "3604240",
      "id_kabupaten": "3604",
      "nama_kecamatan": "CIRUAS"
    },
    {
      "id_kecamatan": "3604250",
      "id_kabupaten": "3604",
      "nama_kecamatan": "PONTANG"
    },
    {
      "id_kecamatan": "3604251",
      "id_kabupaten": "3604",
      "nama_kecamatan": "LEBAK WANGI"
    },
    {
      "id_kecamatan": "3604260",
      "id_kabupaten": "3604",
      "nama_kecamatan": "CARENANG"
    },
    {
      "id_kecamatan": "3604261",
      "id_kabupaten": "3604",
      "nama_kecamatan": "BINUANG"
    },
    {
      "id_kecamatan": "3604270",
      "id_kabupaten": "3604",
      "nama_kecamatan": "TIRTAYASA"
    },
    {
      "id_kecamatan": "3604271",
      "id_kabupaten": "3604",
      "nama_kecamatan": "TANARA"
    },
    {
      "id_kecamatan": "3671010",
      "id_kabupaten": "3671",
      "nama_kecamatan": "CILEDUG"
    },
    {
      "id_kecamatan": "3671011",
      "id_kabupaten": "3671",
      "nama_kecamatan": "LARANGAN"
    },
    {
      "id_kecamatan": "3671012",
      "id_kabupaten": "3671",
      "nama_kecamatan": "KARANG TENGAH"
    },
    {
      "id_kecamatan": "3671020",
      "id_kabupaten": "3671",
      "nama_kecamatan": "CIPONDOH"
    },
    {
      "id_kecamatan": "3671021",
      "id_kabupaten": "3671",
      "nama_kecamatan": "PINANG"
    },
    {
      "id_kecamatan": "3671030",
      "id_kabupaten": "3671",
      "nama_kecamatan": "TANGERANG"
    },
    {
      "id_kecamatan": "3671031",
      "id_kabupaten": "3671",
      "nama_kecamatan": "KARAWACI"
    },
    {
      "id_kecamatan": "3671040",
      "id_kabupaten": "3671",
      "nama_kecamatan": "JATI UWUNG"
    },
    {
      "id_kecamatan": "3671041",
      "id_kabupaten": "3671",
      "nama_kecamatan": "CIBODAS"
    },
    {
      "id_kecamatan": "3671042",
      "id_kabupaten": "3671",
      "nama_kecamatan": "PERIUK"
    },
    {
      "id_kecamatan": "3671050",
      "id_kabupaten": "3671",
      "nama_kecamatan": "BATUCEPER"
    },
    {
      "id_kecamatan": "3671051",
      "id_kabupaten": "3671",
      "nama_kecamatan": "NEGLASARI"
    },
    {
      "id_kecamatan": "3671060",
      "id_kabupaten": "3671",
      "nama_kecamatan": "BENDA"
    },
    {
      "id_kecamatan": "3672010",
      "id_kabupaten": "3672",
      "nama_kecamatan": "CIWANDAN"
    },
    {
      "id_kecamatan": "3672011",
      "id_kabupaten": "3672",
      "nama_kecamatan": "CITANGKIL"
    },
    {
      "id_kecamatan": "3672020",
      "id_kabupaten": "3672",
      "nama_kecamatan": "PULOMERAK"
    },
    {
      "id_kecamatan": "3672021",
      "id_kabupaten": "3672",
      "nama_kecamatan": "PURWAKARTA"
    },
    {
      "id_kecamatan": "3672022",
      "id_kabupaten": "3672",
      "nama_kecamatan": "GROGOL"
    },
    {
      "id_kecamatan": "3672030",
      "id_kabupaten": "3672",
      "nama_kecamatan": "CILEGON"
    },
    {
      "id_kecamatan": "3672031",
      "id_kabupaten": "3672",
      "nama_kecamatan": "JOMBANG"
    },
    {
      "id_kecamatan": "3672040",
      "id_kabupaten": "3672",
      "nama_kecamatan": "CIBEBER"
    },
    {
      "id_kecamatan": "3673010",
      "id_kabupaten": "3673",
      "nama_kecamatan": "CURUG"
    },
    {
      "id_kecamatan": "3673020",
      "id_kabupaten": "3673",
      "nama_kecamatan": "WALANTAKA"
    },
    {
      "id_kecamatan": "3673030",
      "id_kabupaten": "3673",
      "nama_kecamatan": "CIPOCOK JAYA"
    },
    {
      "id_kecamatan": "3673040",
      "id_kabupaten": "3673",
      "nama_kecamatan": "SERANG"
    },
    {
      "id_kecamatan": "3673050",
      "id_kabupaten": "3673",
      "nama_kecamatan": "TAKTAKAN"
    },
    {
      "id_kecamatan": "3673060",
      "id_kabupaten": "3673",
      "nama_kecamatan": "KASEMEN"
    },
    {
      "id_kecamatan": "3674010",
      "id_kabupaten": "3674",
      "nama_kecamatan": "SETU"
    },
    {
      "id_kecamatan": "3674020",
      "id_kabupaten": "3674",
      "nama_kecamatan": "SERPONG"
    },
    {
      "id_kecamatan": "3674030",
      "id_kabupaten": "3674",
      "nama_kecamatan": "PAMULANG"
    },
    {
      "id_kecamatan": "3674040",
      "id_kabupaten": "3674",
      "nama_kecamatan": "CIPUTAT"
    },
    {
      "id_kecamatan": "3674050",
      "id_kabupaten": "3674",
      "nama_kecamatan": "CIPUTAT TIMUR"
    },
    {
      "id_kecamatan": "3674060",
      "id_kabupaten": "3674",
      "nama_kecamatan": "PONDOK AREN"
    },
    {
      "id_kecamatan": "3674070",
      "id_kabupaten": "3674",
      "nama_kecamatan": "SERPONG UTARA"
    },
    {
      "id_kecamatan": "5101010",
      "id_kabupaten": "5101",
      "nama_kecamatan": "MELAYA"
    },
    {
      "id_kecamatan": "5101020",
      "id_kabupaten": "5101",
      "nama_kecamatan": "NEGARA"
    },
    {
      "id_kecamatan": "5101021",
      "id_kabupaten": "5101",
      "nama_kecamatan": "JEMBRANA"
    },
    {
      "id_kecamatan": "5101030",
      "id_kabupaten": "5101",
      "nama_kecamatan": "MENDOYO"
    },
    {
      "id_kecamatan": "5101040",
      "id_kabupaten": "5101",
      "nama_kecamatan": "PEKUTATAN"
    },
    {
      "id_kecamatan": "5102010",
      "id_kabupaten": "5102",
      "nama_kecamatan": "SELEMADEG"
    },
    {
      "id_kecamatan": "5102011",
      "id_kabupaten": "5102",
      "nama_kecamatan": "SELEMADEG TIMUR"
    },
    {
      "id_kecamatan": "5102012",
      "id_kabupaten": "5102",
      "nama_kecamatan": "SELEMADEG BARAT"
    },
    {
      "id_kecamatan": "5102020",
      "id_kabupaten": "5102",
      "nama_kecamatan": "KERAMBITAN"
    },
    {
      "id_kecamatan": "5102030",
      "id_kabupaten": "5102",
      "nama_kecamatan": "TABANAN"
    },
    {
      "id_kecamatan": "5102040",
      "id_kabupaten": "5102",
      "nama_kecamatan": "KEDIRI"
    },
    {
      "id_kecamatan": "5102050",
      "id_kabupaten": "5102",
      "nama_kecamatan": "MARGA"
    },
    {
      "id_kecamatan": "5102060",
      "id_kabupaten": "5102",
      "nama_kecamatan": "BATURITI"
    },
    {
      "id_kecamatan": "5102070",
      "id_kabupaten": "5102",
      "nama_kecamatan": "PENEBEL"
    },
    {
      "id_kecamatan": "5102080",
      "id_kabupaten": "5102",
      "nama_kecamatan": "PUPUAN"
    },
    {
      "id_kecamatan": "5103010",
      "id_kabupaten": "5103",
      "nama_kecamatan": "KUTA SELATAN"
    },
    {
      "id_kecamatan": "5103020",
      "id_kabupaten": "5103",
      "nama_kecamatan": "KUTA"
    },
    {
      "id_kecamatan": "5103030",
      "id_kabupaten": "5103",
      "nama_kecamatan": "KUTA UTARA"
    },
    {
      "id_kecamatan": "5103040",
      "id_kabupaten": "5103",
      "nama_kecamatan": "MENGWI"
    },
    {
      "id_kecamatan": "5103050",
      "id_kabupaten": "5103",
      "nama_kecamatan": "ABIANSEMAL"
    },
    {
      "id_kecamatan": "5103060",
      "id_kabupaten": "5103",
      "nama_kecamatan": "PETANG"
    },
    {
      "id_kecamatan": "5104010",
      "id_kabupaten": "5104",
      "nama_kecamatan": "SUKAWATI"
    },
    {
      "id_kecamatan": "5104020",
      "id_kabupaten": "5104",
      "nama_kecamatan": "BLAHBATUH"
    },
    {
      "id_kecamatan": "5104030",
      "id_kabupaten": "5104",
      "nama_kecamatan": "GIANYAR"
    },
    {
      "id_kecamatan": "5104040",
      "id_kabupaten": "5104",
      "nama_kecamatan": "TAMPAKSIRING"
    },
    {
      "id_kecamatan": "5104050",
      "id_kabupaten": "5104",
      "nama_kecamatan": "UBUD"
    },
    {
      "id_kecamatan": "5104060",
      "id_kabupaten": "5104",
      "nama_kecamatan": "TEGALLALANG"
    },
    {
      "id_kecamatan": "5104070",
      "id_kabupaten": "5104",
      "nama_kecamatan": "PAYANGAN"
    },
    {
      "id_kecamatan": "5105010",
      "id_kabupaten": "5105",
      "nama_kecamatan": "NUSAPENIDA"
    },
    {
      "id_kecamatan": "5105020",
      "id_kabupaten": "5105",
      "nama_kecamatan": "BANJARANGKAN"
    },
    {
      "id_kecamatan": "5105030",
      "id_kabupaten": "5105",
      "nama_kecamatan": "KLUNGKUNG"
    },
    {
      "id_kecamatan": "5105040",
      "id_kabupaten": "5105",
      "nama_kecamatan": "DAWAN"
    },
    {
      "id_kecamatan": "5106010",
      "id_kabupaten": "5106",
      "nama_kecamatan": "SUSUT"
    },
    {
      "id_kecamatan": "5106020",
      "id_kabupaten": "5106",
      "nama_kecamatan": "BANGLI"
    },
    {
      "id_kecamatan": "5106030",
      "id_kabupaten": "5106",
      "nama_kecamatan": "TEMBUKU"
    },
    {
      "id_kecamatan": "5106040",
      "id_kabupaten": "5106",
      "nama_kecamatan": "KINTAMANI"
    },
    {
      "id_kecamatan": "5107010",
      "id_kabupaten": "5107",
      "nama_kecamatan": "RENDANG"
    },
    {
      "id_kecamatan": "5107020",
      "id_kabupaten": "5107",
      "nama_kecamatan": "SIDEMEN"
    },
    {
      "id_kecamatan": "5107030",
      "id_kabupaten": "5107",
      "nama_kecamatan": "MANGGIS"
    },
    {
      "id_kecamatan": "5107040",
      "id_kabupaten": "5107",
      "nama_kecamatan": "KARANGASEM"
    },
    {
      "id_kecamatan": "5107050",
      "id_kabupaten": "5107",
      "nama_kecamatan": "ABANG"
    },
    {
      "id_kecamatan": "5107060",
      "id_kabupaten": "5107",
      "nama_kecamatan": "BEBANDEM"
    },
    {
      "id_kecamatan": "5107070",
      "id_kabupaten": "5107",
      "nama_kecamatan": "SELAT"
    },
    {
      "id_kecamatan": "5107080",
      "id_kabupaten": "5107",
      "nama_kecamatan": "KUBU"
    },
    {
      "id_kecamatan": "5108010",
      "id_kabupaten": "5108",
      "nama_kecamatan": "GEROKGAK"
    },
    {
      "id_kecamatan": "5108020",
      "id_kabupaten": "5108",
      "nama_kecamatan": "SERIRIT"
    },
    {
      "id_kecamatan": "5108030",
      "id_kabupaten": "5108",
      "nama_kecamatan": "BUSUNGBIU"
    },
    {
      "id_kecamatan": "5108040",
      "id_kabupaten": "5108",
      "nama_kecamatan": "BANJAR"
    },
    {
      "id_kecamatan": "5108050",
      "id_kabupaten": "5108",
      "nama_kecamatan": "SUKASADA"
    },
    {
      "id_kecamatan": "5108060",
      "id_kabupaten": "5108",
      "nama_kecamatan": "BULELENG"
    },
    {
      "id_kecamatan": "5108070",
      "id_kabupaten": "5108",
      "nama_kecamatan": "SAWAN"
    },
    {
      "id_kecamatan": "5108080",
      "id_kabupaten": "5108",
      "nama_kecamatan": "KUBUTAMBAHAN"
    },
    {
      "id_kecamatan": "5108090",
      "id_kabupaten": "5108",
      "nama_kecamatan": "TEJAKULA"
    },
    {
      "id_kecamatan": "5171010",
      "id_kabupaten": "5171",
      "nama_kecamatan": "DENPASAR SELATAN"
    },
    {
      "id_kecamatan": "5171020",
      "id_kabupaten": "5171",
      "nama_kecamatan": "DENPASAR TIMUR"
    },
    {
      "id_kecamatan": "5171030",
      "id_kabupaten": "5171",
      "nama_kecamatan": "DENPASAR BARAT"
    },
    {
      "id_kecamatan": "5171031",
      "id_kabupaten": "5171",
      "nama_kecamatan": "DENPASAR UTARA"
    },
    {
      "id_kecamatan": "5201010",
      "id_kabupaten": "5201",
      "nama_kecamatan": "SEKOTONG"
    },
    {
      "id_kecamatan": "5201011",
      "id_kabupaten": "5201",
      "nama_kecamatan": "LEMBAR"
    },
    {
      "id_kecamatan": "5201020",
      "id_kabupaten": "5201",
      "nama_kecamatan": "GERUNG"
    },
    {
      "id_kecamatan": "5201030",
      "id_kabupaten": "5201",
      "nama_kecamatan": "LABU API"
    },
    {
      "id_kecamatan": "5201040",
      "id_kabupaten": "5201",
      "nama_kecamatan": "KEDIRI"
    },
    {
      "id_kecamatan": "5201041",
      "id_kabupaten": "5201",
      "nama_kecamatan": "KURIPAN"
    },
    {
      "id_kecamatan": "5201050",
      "id_kabupaten": "5201",
      "nama_kecamatan": "NARMADA"
    },
    {
      "id_kecamatan": "5201051",
      "id_kabupaten": "5201",
      "nama_kecamatan": "LINGSAR"
    },
    {
      "id_kecamatan": "5201060",
      "id_kabupaten": "5201",
      "nama_kecamatan": "GUNUNG SARI"
    },
    {
      "id_kecamatan": "5201061",
      "id_kabupaten": "5201",
      "nama_kecamatan": "BATU LAYAR"
    },
    {
      "id_kecamatan": "5202010",
      "id_kabupaten": "5202",
      "nama_kecamatan": "PRAYA BARAT"
    },
    {
      "id_kecamatan": "5202011",
      "id_kabupaten": "5202",
      "nama_kecamatan": "PRAYA BARAT DAYA"
    },
    {
      "id_kecamatan": "5202020",
      "id_kabupaten": "5202",
      "nama_kecamatan": "PUJUT"
    },
    {
      "id_kecamatan": "5202030",
      "id_kabupaten": "5202",
      "nama_kecamatan": "PRAYA TIMUR"
    },
    {
      "id_kecamatan": "5202040",
      "id_kabupaten": "5202",
      "nama_kecamatan": "JANAPRIA"
    },
    {
      "id_kecamatan": "5202050",
      "id_kabupaten": "5202",
      "nama_kecamatan": "KOPANG"
    },
    {
      "id_kecamatan": "5202060",
      "id_kabupaten": "5202",
      "nama_kecamatan": "PRAYA"
    },
    {
      "id_kecamatan": "5202061",
      "id_kabupaten": "5202",
      "nama_kecamatan": "PRAYA TENGAH"
    },
    {
      "id_kecamatan": "5202070",
      "id_kabupaten": "5202",
      "nama_kecamatan": "JONGGAT"
    },
    {
      "id_kecamatan": "5202080",
      "id_kabupaten": "5202",
      "nama_kecamatan": "PRINGGARATA"
    },
    {
      "id_kecamatan": "5202090",
      "id_kabupaten": "5202",
      "nama_kecamatan": "BATUKLIANG"
    },
    {
      "id_kecamatan": "5202091",
      "id_kabupaten": "5202",
      "nama_kecamatan": "BATUKLIANG UTARA"
    },
    {
      "id_kecamatan": "5203010",
      "id_kabupaten": "5203",
      "nama_kecamatan": "KERUAK"
    },
    {
      "id_kecamatan": "5203011",
      "id_kabupaten": "5203",
      "nama_kecamatan": "JEROWARU"
    },
    {
      "id_kecamatan": "5203020",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SAKRA"
    },
    {
      "id_kecamatan": "5203021",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SAKRA BARAT"
    },
    {
      "id_kecamatan": "5203022",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SAKRA TIMUR"
    },
    {
      "id_kecamatan": "5203030",
      "id_kabupaten": "5203",
      "nama_kecamatan": "TERARA"
    },
    {
      "id_kecamatan": "5203031",
      "id_kabupaten": "5203",
      "nama_kecamatan": "MONTONG GADING"
    },
    {
      "id_kecamatan": "5203040",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SIKUR"
    },
    {
      "id_kecamatan": "5203050",
      "id_kabupaten": "5203",
      "nama_kecamatan": "MASBAGIK"
    },
    {
      "id_kecamatan": "5203051",
      "id_kabupaten": "5203",
      "nama_kecamatan": "PRINGGASELA"
    },
    {
      "id_kecamatan": "5203060",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SUKAMULIA"
    },
    {
      "id_kecamatan": "5203061",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SURALAGA"
    },
    {
      "id_kecamatan": "5203070",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SELONG"
    },
    {
      "id_kecamatan": "5203071",
      "id_kabupaten": "5203",
      "nama_kecamatan": "LABUHAN HAJI"
    },
    {
      "id_kecamatan": "5203080",
      "id_kabupaten": "5203",
      "nama_kecamatan": "PRINGGABAYA"
    },
    {
      "id_kecamatan": "5203081",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SUELA"
    },
    {
      "id_kecamatan": "5203090",
      "id_kabupaten": "5203",
      "nama_kecamatan": "AIKMEL"
    },
    {
      "id_kecamatan": "5203091",
      "id_kabupaten": "5203",
      "nama_kecamatan": "WANASABA"
    },
    {
      "id_kecamatan": "5203092",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SEMBALUN"
    },
    {
      "id_kecamatan": "5203100",
      "id_kabupaten": "5203",
      "nama_kecamatan": "SAMBELIA"
    },
    {
      "id_kecamatan": "5204020",
      "id_kabupaten": "5204",
      "nama_kecamatan": "LUNYUK"
    },
    {
      "id_kecamatan": "5204021",
      "id_kabupaten": "5204",
      "nama_kecamatan": "ORONG TELU"
    },
    {
      "id_kecamatan": "5204050",
      "id_kabupaten": "5204",
      "nama_kecamatan": "ALAS"
    },
    {
      "id_kecamatan": "5204051",
      "id_kabupaten": "5204",
      "nama_kecamatan": "ALAS BARAT"
    },
    {
      "id_kecamatan": "5204052",
      "id_kabupaten": "5204",
      "nama_kecamatan": "BUER"
    },
    {
      "id_kecamatan": "5204061",
      "id_kabupaten": "5204",
      "nama_kecamatan": "UTAN"
    },
    {
      "id_kecamatan": "5204062",
      "id_kabupaten": "5204",
      "nama_kecamatan": "RHEE"
    },
    {
      "id_kecamatan": "5204070",
      "id_kabupaten": "5204",
      "nama_kecamatan": "BATULANTEH"
    },
    {
      "id_kecamatan": "5204080",
      "id_kabupaten": "5204",
      "nama_kecamatan": "SUMBAWA"
    },
    {
      "id_kecamatan": "5204081",
      "id_kabupaten": "5204",
      "nama_kecamatan": "LABUHAN BADAS"
    },
    {
      "id_kecamatan": "5204082",
      "id_kabupaten": "5204",
      "nama_kecamatan": "UNTER IWES"
    },
    {
      "id_kecamatan": "5204090",
      "id_kabupaten": "5204",
      "nama_kecamatan": "MOYOHILIR"
    },
    {
      "id_kecamatan": "5204091",
      "id_kabupaten": "5204",
      "nama_kecamatan": "MOYO UTARA"
    },
    {
      "id_kecamatan": "5204100",
      "id_kabupaten": "5204",
      "nama_kecamatan": "MOYOHULU"
    },
    {
      "id_kecamatan": "5204110",
      "id_kabupaten": "5204",
      "nama_kecamatan": "ROPANG"
    },
    {
      "id_kecamatan": "5204111",
      "id_kabupaten": "5204",
      "nama_kecamatan": "LENANGGUAR"
    },
    {
      "id_kecamatan": "5204112",
      "id_kabupaten": "5204",
      "nama_kecamatan": "LANTUNG"
    },
    {
      "id_kecamatan": "5204121",
      "id_kabupaten": "5204",
      "nama_kecamatan": "LAPE"
    },
    {
      "id_kecamatan": "5204122",
      "id_kabupaten": "5204",
      "nama_kecamatan": "LOPOK"
    },
    {
      "id_kecamatan": "5204130",
      "id_kabupaten": "5204",
      "nama_kecamatan": "PLAMPANG"
    },
    {
      "id_kecamatan": "5204131",
      "id_kabupaten": "5204",
      "nama_kecamatan": "LABANGKA"
    },
    {
      "id_kecamatan": "5204132",
      "id_kabupaten": "5204",
      "nama_kecamatan": "MARONGE"
    },
    {
      "id_kecamatan": "5204140",
      "id_kabupaten": "5204",
      "nama_kecamatan": "EMPANG"
    },
    {
      "id_kecamatan": "5204141",
      "id_kabupaten": "5204",
      "nama_kecamatan": "TARANO"
    },
    {
      "id_kecamatan": "5205010",
      "id_kabupaten": "5205",
      "nama_kecamatan": "HU'U"
    },
    {
      "id_kecamatan": "5205011",
      "id_kabupaten": "5205",
      "nama_kecamatan": "PAJO"
    },
    {
      "id_kecamatan": "5205020",
      "id_kabupaten": "5205",
      "nama_kecamatan": "DOMPU"
    },
    {
      "id_kecamatan": "5205030",
      "id_kabupaten": "5205",
      "nama_kecamatan": "WOJA"
    },
    {
      "id_kecamatan": "5205040",
      "id_kabupaten": "5205",
      "nama_kecamatan": "KILO"
    },
    {
      "id_kecamatan": "5205050",
      "id_kabupaten": "5205",
      "nama_kecamatan": "KEMPO"
    },
    {
      "id_kecamatan": "5205051",
      "id_kabupaten": "5205",
      "nama_kecamatan": "MANGGALEWA"
    },
    {
      "id_kecamatan": "5205060",
      "id_kabupaten": "5205",
      "nama_kecamatan": "PEKAT"
    },
    {
      "id_kecamatan": "5206010",
      "id_kabupaten": "5206",
      "nama_kecamatan": "MONTA"
    },
    {
      "id_kecamatan": "5206011",
      "id_kabupaten": "5206",
      "nama_kecamatan": "PARADO"
    },
    {
      "id_kecamatan": "5206020",
      "id_kabupaten": "5206",
      "nama_kecamatan": "BOLO"
    },
    {
      "id_kecamatan": "5206021",
      "id_kabupaten": "5206",
      "nama_kecamatan": "MADA PANGGA"
    },
    {
      "id_kecamatan": "5206030",
      "id_kabupaten": "5206",
      "nama_kecamatan": "WOHA"
    },
    {
      "id_kecamatan": "5206040",
      "id_kabupaten": "5206",
      "nama_kecamatan": "BELO"
    },
    {
      "id_kecamatan": "5206041",
      "id_kabupaten": "5206",
      "nama_kecamatan": "PALIBELO"
    },
    {
      "id_kecamatan": "5206050",
      "id_kabupaten": "5206",
      "nama_kecamatan": "WAWO"
    },
    {
      "id_kecamatan": "5206051",
      "id_kabupaten": "5206",
      "nama_kecamatan": "LANGGUDU"
    },
    {
      "id_kecamatan": "5206052",
      "id_kabupaten": "5206",
      "nama_kecamatan": "LAMBITU"
    },
    {
      "id_kecamatan": "5206060",
      "id_kabupaten": "5206",
      "nama_kecamatan": "SAPE"
    },
    {
      "id_kecamatan": "5206061",
      "id_kabupaten": "5206",
      "nama_kecamatan": "LAMBU"
    },
    {
      "id_kecamatan": "5206070",
      "id_kabupaten": "5206",
      "nama_kecamatan": "WERA"
    },
    {
      "id_kecamatan": "5206071",
      "id_kabupaten": "5206",
      "nama_kecamatan": "AMBALAWI"
    },
    {
      "id_kecamatan": "5206080",
      "id_kabupaten": "5206",
      "nama_kecamatan": "DONGGO"
    },
    {
      "id_kecamatan": "5206081",
      "id_kabupaten": "5206",
      "nama_kecamatan": "SOROMANDI"
    },
    {
      "id_kecamatan": "5206090",
      "id_kabupaten": "5206",
      "nama_kecamatan": "SANGGAR"
    },
    {
      "id_kecamatan": "5206091",
      "id_kabupaten": "5206",
      "nama_kecamatan": "TAMBORA"
    },
    {
      "id_kecamatan": "5207010",
      "id_kabupaten": "5207",
      "nama_kecamatan": "SEKONGKANG"
    },
    {
      "id_kecamatan": "5207020",
      "id_kabupaten": "5207",
      "nama_kecamatan": "JEREWEH"
    },
    {
      "id_kecamatan": "5207021",
      "id_kabupaten": "5207",
      "nama_kecamatan": "MALUK"
    },
    {
      "id_kecamatan": "5207030",
      "id_kabupaten": "5207",
      "nama_kecamatan": "TALIWANG"
    },
    {
      "id_kecamatan": "5207031",
      "id_kabupaten": "5207",
      "nama_kecamatan": "BRANG ENE"
    },
    {
      "id_kecamatan": "5207040",
      "id_kabupaten": "5207",
      "nama_kecamatan": "BRANG REA"
    },
    {
      "id_kecamatan": "5207050",
      "id_kabupaten": "5207",
      "nama_kecamatan": "SETELUK"
    },
    {
      "id_kecamatan": "5207051",
      "id_kabupaten": "5207",
      "nama_kecamatan": "POTO TANO"
    },
    {
      "id_kecamatan": "5208010",
      "id_kabupaten": "5208",
      "nama_kecamatan": "PEMENANG"
    },
    {
      "id_kecamatan": "5208020",
      "id_kabupaten": "5208",
      "nama_kecamatan": "TANJUNG"
    },
    {
      "id_kecamatan": "5208030",
      "id_kabupaten": "5208",
      "nama_kecamatan": "GANGGA"
    },
    {
      "id_kecamatan": "5208040",
      "id_kabupaten": "5208",
      "nama_kecamatan": "KAYANGAN"
    },
    {
      "id_kecamatan": "5208050",
      "id_kabupaten": "5208",
      "nama_kecamatan": "BAYAN"
    },
    {
      "id_kecamatan": "5271010",
      "id_kabupaten": "5271",
      "nama_kecamatan": "AMPENAN"
    },
    {
      "id_kecamatan": "5271011",
      "id_kabupaten": "5271",
      "nama_kecamatan": "SEKARBELA"
    },
    {
      "id_kecamatan": "5271020",
      "id_kabupaten": "5271",
      "nama_kecamatan": "MATARAM"
    },
    {
      "id_kecamatan": "5271021",
      "id_kabupaten": "5271",
      "nama_kecamatan": "SELAPARANG"
    },
    {
      "id_kecamatan": "5271030",
      "id_kabupaten": "5271",
      "nama_kecamatan": "CAKRANEGARA"
    },
    {
      "id_kecamatan": "5271031",
      "id_kabupaten": "5271",
      "nama_kecamatan": "SANDUBAYA"
    },
    {
      "id_kecamatan": "5272010",
      "id_kabupaten": "5272",
      "nama_kecamatan": "RASANAE BARAT"
    },
    {
      "id_kecamatan": "5272011",
      "id_kabupaten": "5272",
      "nama_kecamatan": "MPUNDA"
    },
    {
      "id_kecamatan": "5272020",
      "id_kabupaten": "5272",
      "nama_kecamatan": "RASANAE TIMUR"
    },
    {
      "id_kecamatan": "5272021",
      "id_kabupaten": "5272",
      "nama_kecamatan": "RABA"
    },
    {
      "id_kecamatan": "5272030",
      "id_kabupaten": "5272",
      "nama_kecamatan": "ASAKOTA"
    },
    {
      "id_kecamatan": "5301021",
      "id_kabupaten": "5301",
      "nama_kecamatan": "LAMBOYA"
    },
    {
      "id_kecamatan": "5301022",
      "id_kabupaten": "5301",
      "nama_kecamatan": "WANOKAKA"
    },
    {
      "id_kecamatan": "5301023",
      "id_kabupaten": "5301",
      "nama_kecamatan": "LABOYA BARAT"
    },
    {
      "id_kecamatan": "5301050",
      "id_kabupaten": "5301",
      "nama_kecamatan": "LOLI"
    },
    {
      "id_kecamatan": "5301060",
      "id_kabupaten": "5301",
      "nama_kecamatan": "KOTA WAIKABUBAK"
    },
    {
      "id_kecamatan": "5301072",
      "id_kabupaten": "5301",
      "nama_kecamatan": "TANA RIGHU"
    },
    {
      "id_kecamatan": "5302010",
      "id_kabupaten": "5302",
      "nama_kecamatan": "LEWA"
    },
    {
      "id_kecamatan": "5302011",
      "id_kabupaten": "5302",
      "nama_kecamatan": "NGGAHA ORIANGU"
    },
    {
      "id_kecamatan": "5302012",
      "id_kabupaten": "5302",
      "nama_kecamatan": "LEWA TIDAHU"
    },
    {
      "id_kecamatan": "5302013",
      "id_kabupaten": "5302",
      "nama_kecamatan": "KATALA HAMU LINGU"
    },
    {
      "id_kecamatan": "5302020",
      "id_kabupaten": "5302",
      "nama_kecamatan": "TABUNDUNG"
    },
    {
      "id_kecamatan": "5302021",
      "id_kabupaten": "5302",
      "nama_kecamatan": "PINUPAHAR"
    },
    {
      "id_kecamatan": "5302030",
      "id_kabupaten": "5302",
      "nama_kecamatan": "PABERIWAI"
    },
    {
      "id_kecamatan": "5302031",
      "id_kabupaten": "5302",
      "nama_kecamatan": "KARERA"
    },
    {
      "id_kecamatan": "5302032",
      "id_kabupaten": "5302",
      "nama_kecamatan": "MATAWAI LA PAWU"
    },
    {
      "id_kecamatan": "5302033",
      "id_kabupaten": "5302",
      "nama_kecamatan": "KAHAUNGU ETI"
    },
    {
      "id_kecamatan": "5302034",
      "id_kabupaten": "5302",
      "nama_kecamatan": "MAHU"
    },
    {
      "id_kecamatan": "5302035",
      "id_kabupaten": "5302",
      "nama_kecamatan": "NGADU NGALA"
    },
    {
      "id_kecamatan": "5302040",
      "id_kabupaten": "5302",
      "nama_kecamatan": "PAHUNGA LODU"
    },
    {
      "id_kecamatan": "5302041",
      "id_kabupaten": "5302",
      "nama_kecamatan": "WULA WAIJELU"
    },
    {
      "id_kecamatan": "5302051",
      "id_kabupaten": "5302",
      "nama_kecamatan": "RINDI"
    },
    {
      "id_kecamatan": "5302052",
      "id_kabupaten": "5302",
      "nama_kecamatan": "UMALULU"
    },
    {
      "id_kecamatan": "5302060",
      "id_kabupaten": "5302",
      "nama_kecamatan": "PANDAWAI"
    },
    {
      "id_kecamatan": "5302061",
      "id_kabupaten": "5302",
      "nama_kecamatan": "KAMBATA MAPAMBUHANG"
    },
    {
      "id_kecamatan": "5302070",
      "id_kabupaten": "5302",
      "nama_kecamatan": "KOTA WAINGAPU"
    },
    {
      "id_kecamatan": "5302071",
      "id_kabupaten": "5302",
      "nama_kecamatan": "KAMBERA"
    },
    {
      "id_kecamatan": "5302080",
      "id_kabupaten": "5302",
      "nama_kecamatan": "HAHARU"
    },
    {
      "id_kecamatan": "5302081",
      "id_kabupaten": "5302",
      "nama_kecamatan": "KANATANG"
    },
    {
      "id_kecamatan": "5303100",
      "id_kabupaten": "5303",
      "nama_kecamatan": "SEMAU"
    },
    {
      "id_kecamatan": "5303101",
      "id_kabupaten": "5303",
      "nama_kecamatan": "SEMAU SELATAN"
    },
    {
      "id_kecamatan": "5303110",
      "id_kabupaten": "5303",
      "nama_kecamatan": "KUPANG BARAT"
    },
    {
      "id_kecamatan": "5303111",
      "id_kabupaten": "5303",
      "nama_kecamatan": "NEKAMESE"
    },
    {
      "id_kecamatan": "5303120",
      "id_kabupaten": "5303",
      "nama_kecamatan": "KUPANG TENGAH"
    },
    {
      "id_kecamatan": "5303121",
      "id_kabupaten": "5303",
      "nama_kecamatan": "TAEBENU"
    },
    {
      "id_kecamatan": "5303130",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMARASI"
    },
    {
      "id_kecamatan": "5303131",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMARASI BARAT"
    },
    {
      "id_kecamatan": "5303132",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMARASI SELATAN"
    },
    {
      "id_kecamatan": "5303133",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMARASI TIMUR"
    },
    {
      "id_kecamatan": "5303140",
      "id_kabupaten": "5303",
      "nama_kecamatan": "KUPANG TIMUR"
    },
    {
      "id_kecamatan": "5303141",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMABI OEFETO TIMUR"
    },
    {
      "id_kecamatan": "5303142",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMABI OEFETO"
    },
    {
      "id_kecamatan": "5303150",
      "id_kabupaten": "5303",
      "nama_kecamatan": "SULAMU"
    },
    {
      "id_kecamatan": "5303160",
      "id_kabupaten": "5303",
      "nama_kecamatan": "FATULEU"
    },
    {
      "id_kecamatan": "5303161",
      "id_kabupaten": "5303",
      "nama_kecamatan": "FATULEU TENGAH"
    },
    {
      "id_kecamatan": "5303162",
      "id_kabupaten": "5303",
      "nama_kecamatan": "FATULEU BARAT"
    },
    {
      "id_kecamatan": "5303170",
      "id_kabupaten": "5303",
      "nama_kecamatan": "TAKARI"
    },
    {
      "id_kecamatan": "5303180",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMFOANG SELATAN"
    },
    {
      "id_kecamatan": "5303181",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMFOANG BARAT DAYA"
    },
    {
      "id_kecamatan": "5303182",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMFOANG TENGAH"
    },
    {
      "id_kecamatan": "5303190",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMFOANG UTARA"
    },
    {
      "id_kecamatan": "5303191",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMFOANG BARAT LAUT"
    },
    {
      "id_kecamatan": "5303192",
      "id_kabupaten": "5303",
      "nama_kecamatan": "AMFOANG TIMUR"
    },
    {
      "id_kecamatan": "5304010",
      "id_kabupaten": "5304",
      "nama_kecamatan": "MOLLO UTARA"
    },
    {
      "id_kecamatan": "5304011",
      "id_kabupaten": "5304",
      "nama_kecamatan": "FATUMNASI"
    },
    {
      "id_kecamatan": "5304012",
      "id_kabupaten": "5304",
      "nama_kecamatan": "TOBU"
    },
    {
      "id_kecamatan": "5304013",
      "id_kabupaten": "5304",
      "nama_kecamatan": "NUNBENA"
    },
    {
      "id_kecamatan": "5304020",
      "id_kabupaten": "5304",
      "nama_kecamatan": "MOLLO SELATAN"
    },
    {
      "id_kecamatan": "5304021",
      "id_kabupaten": "5304",
      "nama_kecamatan": "POLEN"
    },
    {
      "id_kecamatan": "5304022",
      "id_kabupaten": "5304",
      "nama_kecamatan": "MOLLO BARAT"
    },
    {
      "id_kecamatan": "5304023",
      "id_kabupaten": "5304",
      "nama_kecamatan": "MOLLO TENGAH"
    },
    {
      "id_kecamatan": "5304030",
      "id_kabupaten": "5304",
      "nama_kecamatan": "KOTA SOE"
    },
    {
      "id_kecamatan": "5304040",
      "id_kabupaten": "5304",
      "nama_kecamatan": "AMANUBAN BARAT"
    },
    {
      "id_kecamatan": "5304041",
      "id_kabupaten": "5304",
      "nama_kecamatan": "BATU PUTIH"
    },
    {
      "id_kecamatan": "5304042",
      "id_kabupaten": "5304",
      "nama_kecamatan": "KUATNANA"
    },
    {
      "id_kecamatan": "5304050",
      "id_kabupaten": "5304",
      "nama_kecamatan": "AMANUBAN SELATAN"
    },
    {
      "id_kecamatan": "5304051",
      "id_kabupaten": "5304",
      "nama_kecamatan": "NOEBEBA"
    },
    {
      "id_kecamatan": "5304060",
      "id_kabupaten": "5304",
      "nama_kecamatan": "KUAN FATU"
    },
    {
      "id_kecamatan": "5304061",
      "id_kabupaten": "5304",
      "nama_kecamatan": "KUALIN"
    },
    {
      "id_kecamatan": "5304070",
      "id_kabupaten": "5304",
      "nama_kecamatan": "AMANUBAN TENGAH"
    },
    {
      "id_kecamatan": "5304071",
      "id_kabupaten": "5304",
      "nama_kecamatan": "KOLBANO"
    },
    {
      "id_kecamatan": "5304072",
      "id_kabupaten": "5304",
      "nama_kecamatan": "OENINO"
    },
    {
      "id_kecamatan": "5304080",
      "id_kabupaten": "5304",
      "nama_kecamatan": "AMANUBAN TIMUR"
    },
    {
      "id_kecamatan": "5304081",
      "id_kabupaten": "5304",
      "nama_kecamatan": "FAUTMOLO"
    },
    {
      "id_kecamatan": "5304082",
      "id_kabupaten": "5304",
      "nama_kecamatan": "FATUKOPA"
    },
    {
      "id_kecamatan": "5304090",
      "id_kabupaten": "5304",
      "nama_kecamatan": "KIE"
    },
    {
      "id_kecamatan": "5304091",
      "id_kabupaten": "5304",
      "nama_kecamatan": "KOT'OLIN"
    },
    {
      "id_kecamatan": "5304100",
      "id_kabupaten": "5304",
      "nama_kecamatan": "AMANATUN SELATAN"
    },
    {
      "id_kecamatan": "5304101",
      "id_kabupaten": "5304",
      "nama_kecamatan": "BOKING"
    },
    {
      "id_kecamatan": "5304102",
      "id_kabupaten": "5304",
      "nama_kecamatan": "NUNKOLO"
    },
    {
      "id_kecamatan": "5304103",
      "id_kabupaten": "5304",
      "nama_kecamatan": "NOEBANA"
    },
    {
      "id_kecamatan": "5304104",
      "id_kabupaten": "5304",
      "nama_kecamatan": "SANTIAN"
    },
    {
      "id_kecamatan": "5304110",
      "id_kabupaten": "5304",
      "nama_kecamatan": "AMANATUN UTARA"
    },
    {
      "id_kecamatan": "5304111",
      "id_kabupaten": "5304",
      "nama_kecamatan": "TOIANAS"
    },
    {
      "id_kecamatan": "5304112",
      "id_kabupaten": "5304",
      "nama_kecamatan": "KOKBAUN"
    },
    {
      "id_kecamatan": "5305010",
      "id_kabupaten": "5305",
      "nama_kecamatan": "MIOMAFFO BARAT"
    },
    {
      "id_kecamatan": "5305011",
      "id_kabupaten": "5305",
      "nama_kecamatan": "MIOMAFFO TENGAH"
    },
    {
      "id_kecamatan": "5305012",
      "id_kabupaten": "5305",
      "nama_kecamatan": "MUSI"
    },
    {
      "id_kecamatan": "5305013",
      "id_kabupaten": "5305",
      "nama_kecamatan": "MUTIS"
    },
    {
      "id_kecamatan": "5305020",
      "id_kabupaten": "5305",
      "nama_kecamatan": "MIOMAFFO TIMUR"
    },
    {
      "id_kecamatan": "5305021",
      "id_kabupaten": "5305",
      "nama_kecamatan": "NOEMUTI"
    },
    {
      "id_kecamatan": "5305022",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIKOMI SELATAN"
    },
    {
      "id_kecamatan": "5305023",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIKOMI TENGAH"
    },
    {
      "id_kecamatan": "5305024",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIKOMI NILULAT"
    },
    {
      "id_kecamatan": "5305025",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIKOMI UTARA"
    },
    {
      "id_kecamatan": "5305026",
      "id_kabupaten": "5305",
      "nama_kecamatan": "NAIBENU"
    },
    {
      "id_kecamatan": "5305027",
      "id_kabupaten": "5305",
      "nama_kecamatan": "NOEMUTI TIMUR"
    },
    {
      "id_kecamatan": "5305030",
      "id_kabupaten": "5305",
      "nama_kecamatan": "KOTA KEFAMENANU"
    },
    {
      "id_kecamatan": "5305040",
      "id_kabupaten": "5305",
      "nama_kecamatan": "INSANA"
    },
    {
      "id_kecamatan": "5305041",
      "id_kabupaten": "5305",
      "nama_kecamatan": "INSANA UTARA"
    },
    {
      "id_kecamatan": "5305042",
      "id_kabupaten": "5305",
      "nama_kecamatan": "INSANA BARAT"
    },
    {
      "id_kecamatan": "5305043",
      "id_kabupaten": "5305",
      "nama_kecamatan": "INSANA TENGAH"
    },
    {
      "id_kecamatan": "5305044",
      "id_kabupaten": "5305",
      "nama_kecamatan": "INSANA FAFINESU"
    },
    {
      "id_kecamatan": "5305050",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIBOKI SELATAN"
    },
    {
      "id_kecamatan": "5305051",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIBOKI TANPAH"
    },
    {
      "id_kecamatan": "5305052",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIBOKI MOENLEU"
    },
    {
      "id_kecamatan": "5305060",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIBOKI UTARA"
    },
    {
      "id_kecamatan": "5305061",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIBOKI ANLEU"
    },
    {
      "id_kecamatan": "5305062",
      "id_kabupaten": "5305",
      "nama_kecamatan": "BIBOKI FEOTLEU"
    },
    {
      "id_kecamatan": "5306032",
      "id_kabupaten": "5306",
      "nama_kecamatan": "RAI MANUK"
    },
    {
      "id_kecamatan": "5306050",
      "id_kabupaten": "5306",
      "nama_kecamatan": "TASIFETO BARAT"
    },
    {
      "id_kecamatan": "5306051",
      "id_kabupaten": "5306",
      "nama_kecamatan": "KAKULUK MESAK"
    },
    {
      "id_kecamatan": "5306052",
      "id_kabupaten": "5306",
      "nama_kecamatan": "NANAET DUBESI"
    },
    {
      "id_kecamatan": "5306060",
      "id_kabupaten": "5306",
      "nama_kecamatan": "ATAMBUA"
    },
    {
      "id_kecamatan": "5306061",
      "id_kabupaten": "5306",
      "nama_kecamatan": "ATAMBUA BARAT"
    },
    {
      "id_kecamatan": "5306062",
      "id_kabupaten": "5306",
      "nama_kecamatan": "ATAMBUA SELATAN"
    },
    {
      "id_kecamatan": "5306070",
      "id_kabupaten": "5306",
      "nama_kecamatan": "TASIFETO TIMUR"
    },
    {
      "id_kecamatan": "5306071",
      "id_kabupaten": "5306",
      "nama_kecamatan": "RAIHAT"
    },
    {
      "id_kecamatan": "5306072",
      "id_kabupaten": "5306",
      "nama_kecamatan": "LASIOLAT"
    },
    {
      "id_kecamatan": "5306080",
      "id_kabupaten": "5306",
      "nama_kecamatan": "LAMAKNEN"
    },
    {
      "id_kecamatan": "5306081",
      "id_kabupaten": "5306",
      "nama_kecamatan": "LAMAKNEN SELATAN"
    },
    {
      "id_kecamatan": "5307010",
      "id_kabupaten": "5307",
      "nama_kecamatan": "PANTAR"
    },
    {
      "id_kecamatan": "5307011",
      "id_kabupaten": "5307",
      "nama_kecamatan": "PANTAR BARAT"
    },
    {
      "id_kecamatan": "5307012",
      "id_kabupaten": "5307",
      "nama_kecamatan": "PANTAR TIMUR"
    },
    {
      "id_kecamatan": "5307013",
      "id_kabupaten": "5307",
      "nama_kecamatan": "PANTAR BARAT LAUT"
    },
    {
      "id_kecamatan": "5307014",
      "id_kabupaten": "5307",
      "nama_kecamatan": "PANTAR TENGAH"
    },
    {
      "id_kecamatan": "5307020",
      "id_kabupaten": "5307",
      "nama_kecamatan": "ALOR BARAT DAYA"
    },
    {
      "id_kecamatan": "5307021",
      "id_kabupaten": "5307",
      "nama_kecamatan": "MATARU"
    },
    {
      "id_kecamatan": "5307030",
      "id_kabupaten": "5307",
      "nama_kecamatan": "ALOR SELATAN"
    },
    {
      "id_kecamatan": "5307040",
      "id_kabupaten": "5307",
      "nama_kecamatan": "ALOR TIMUR"
    },
    {
      "id_kecamatan": "5307041",
      "id_kabupaten": "5307",
      "nama_kecamatan": "ALOR TIMUR LAUT"
    },
    {
      "id_kecamatan": "5307042",
      "id_kabupaten": "5307",
      "nama_kecamatan": "PUREMAN"
    },
    {
      "id_kecamatan": "5307050",
      "id_kabupaten": "5307",
      "nama_kecamatan": "TELUK MUTIARA"
    },
    {
      "id_kecamatan": "5307051",
      "id_kabupaten": "5307",
      "nama_kecamatan": "KABOLA"
    },
    {
      "id_kecamatan": "5307060",
      "id_kabupaten": "5307",
      "nama_kecamatan": "ALOR BARAT LAUT"
    },
    {
      "id_kecamatan": "5307061",
      "id_kabupaten": "5307",
      "nama_kecamatan": "ALOR TENGAH UTARA"
    },
    {
      "id_kecamatan": "5307062",
      "id_kabupaten": "5307",
      "nama_kecamatan": "PULAU PURA"
    },
    {
      "id_kecamatan": "5307063",
      "id_kabupaten": "5307",
      "nama_kecamatan": "LEMBUR"
    },
    {
      "id_kecamatan": "5308010",
      "id_kabupaten": "5308",
      "nama_kecamatan": "NAGAWUTUNG"
    },
    {
      "id_kecamatan": "5308011",
      "id_kabupaten": "5308",
      "nama_kecamatan": "WULANDONI"
    },
    {
      "id_kecamatan": "5308020",
      "id_kabupaten": "5308",
      "nama_kecamatan": "ATADEI"
    },
    {
      "id_kecamatan": "5308030",
      "id_kabupaten": "5308",
      "nama_kecamatan": "ILE APE"
    },
    {
      "id_kecamatan": "5308031",
      "id_kabupaten": "5308",
      "nama_kecamatan": "ILE APE TIMUR"
    },
    {
      "id_kecamatan": "5308040",
      "id_kabupaten": "5308",
      "nama_kecamatan": "LEBATUKAN"
    },
    {
      "id_kecamatan": "5308050",
      "id_kabupaten": "5308",
      "nama_kecamatan": "NUBATUKAN"
    },
    {
      "id_kecamatan": "5308060",
      "id_kabupaten": "5308",
      "nama_kecamatan": "OMESURI"
    },
    {
      "id_kecamatan": "5308070",
      "id_kabupaten": "5308",
      "nama_kecamatan": "BUYASARI"
    },
    {
      "id_kecamatan": "5309010",
      "id_kabupaten": "5309",
      "nama_kecamatan": "WULANGGITANG"
    },
    {
      "id_kecamatan": "5309011",
      "id_kabupaten": "5309",
      "nama_kecamatan": "TITEHENA"
    },
    {
      "id_kecamatan": "5309012",
      "id_kabupaten": "5309",
      "nama_kecamatan": "ILEBURA"
    },
    {
      "id_kecamatan": "5309020",
      "id_kabupaten": "5309",
      "nama_kecamatan": "TANJUNG BUNGA"
    },
    {
      "id_kecamatan": "5309021",
      "id_kabupaten": "5309",
      "nama_kecamatan": "LEWO LEMA"
    },
    {
      "id_kecamatan": "5309030",
      "id_kabupaten": "5309",
      "nama_kecamatan": "LARANTUKA"
    },
    {
      "id_kecamatan": "5309031",
      "id_kabupaten": "5309",
      "nama_kecamatan": "ILE MANDIRI"
    },
    {
      "id_kecamatan": "5309032",
      "id_kabupaten": "5309",
      "nama_kecamatan": "DEMON PAGONG"
    },
    {
      "id_kecamatan": "5309040",
      "id_kabupaten": "5309",
      "nama_kecamatan": "SOLOR BARAT"
    },
    {
      "id_kecamatan": "5309041",
      "id_kabupaten": "5309",
      "nama_kecamatan": "SOLOR SELATAN"
    },
    {
      "id_kecamatan": "5309050",
      "id_kabupaten": "5309",
      "nama_kecamatan": "SOLOR TIMUR"
    },
    {
      "id_kecamatan": "5309060",
      "id_kabupaten": "5309",
      "nama_kecamatan": "ADONARA BARAT"
    },
    {
      "id_kecamatan": "5309061",
      "id_kabupaten": "5309",
      "nama_kecamatan": "WOTAN ULU MADO"
    },
    {
      "id_kecamatan": "5309062",
      "id_kabupaten": "5309",
      "nama_kecamatan": "ADONARA TENGAH"
    },
    {
      "id_kecamatan": "5309070",
      "id_kabupaten": "5309",
      "nama_kecamatan": "ADONARA TIMUR"
    },
    {
      "id_kecamatan": "5309071",
      "id_kabupaten": "5309",
      "nama_kecamatan": "ILE BOLENG"
    },
    {
      "id_kecamatan": "5309072",
      "id_kabupaten": "5309",
      "nama_kecamatan": "WITIHAMA"
    },
    {
      "id_kecamatan": "5309073",
      "id_kabupaten": "5309",
      "nama_kecamatan": "KELUBAGOLIT"
    },
    {
      "id_kecamatan": "5309074",
      "id_kabupaten": "5309",
      "nama_kecamatan": "ADONARA"
    },
    {
      "id_kecamatan": "5310010",
      "id_kabupaten": "5310",
      "nama_kecamatan": "PAGA"
    },
    {
      "id_kecamatan": "5310011",
      "id_kabupaten": "5310",
      "nama_kecamatan": "MEGO"
    },
    {
      "id_kecamatan": "5310012",
      "id_kabupaten": "5310",
      "nama_kecamatan": "TANA WAWO"
    },
    {
      "id_kecamatan": "5310020",
      "id_kabupaten": "5310",
      "nama_kecamatan": "LELA"
    },
    {
      "id_kecamatan": "5310030",
      "id_kabupaten": "5310",
      "nama_kecamatan": "BOLA"
    },
    {
      "id_kecamatan": "5310031",
      "id_kabupaten": "5310",
      "nama_kecamatan": "DORENG"
    },
    {
      "id_kecamatan": "5310032",
      "id_kabupaten": "5310",
      "nama_kecamatan": "MAPITARA"
    },
    {
      "id_kecamatan": "5310040",
      "id_kabupaten": "5310",
      "nama_kecamatan": "TALIBURA"
    },
    {
      "id_kecamatan": "5310041",
      "id_kabupaten": "5310",
      "nama_kecamatan": "WAIGETE"
    },
    {
      "id_kecamatan": "5310042",
      "id_kabupaten": "5310",
      "nama_kecamatan": "WAIBLAMA"
    },
    {
      "id_kecamatan": "5310050",
      "id_kabupaten": "5310",
      "nama_kecamatan": "KEWAPANTE"
    },
    {
      "id_kecamatan": "5310051",
      "id_kabupaten": "5310",
      "nama_kecamatan": "HEWOKLOANG"
    },
    {
      "id_kecamatan": "5310052",
      "id_kabupaten": "5310",
      "nama_kecamatan": "KANGAE"
    },
    {
      "id_kecamatan": "5310061",
      "id_kabupaten": "5310",
      "nama_kecamatan": "PALUE"
    },
    {
      "id_kecamatan": "5310062",
      "id_kabupaten": "5310",
      "nama_kecamatan": "KOTING"
    },
    {
      "id_kecamatan": "5310063",
      "id_kabupaten": "5310",
      "nama_kecamatan": "NELLE"
    },
    {
      "id_kecamatan": "5310070",
      "id_kabupaten": "5310",
      "nama_kecamatan": "NITA"
    },
    {
      "id_kecamatan": "5310071",
      "id_kabupaten": "5310",
      "nama_kecamatan": "MAGEPANDA"
    },
    {
      "id_kecamatan": "5310080",
      "id_kabupaten": "5310",
      "nama_kecamatan": "ALOK"
    },
    {
      "id_kecamatan": "5310081",
      "id_kabupaten": "5310",
      "nama_kecamatan": "ALOK BARAT"
    },
    {
      "id_kecamatan": "5310082",
      "id_kabupaten": "5310",
      "nama_kecamatan": "ALOK TIMUR"
    },
    {
      "id_kecamatan": "5311010",
      "id_kabupaten": "5311",
      "nama_kecamatan": "NANGAPANDA"
    },
    {
      "id_kecamatan": "5311011",
      "id_kabupaten": "5311",
      "nama_kecamatan": "PULAU ENDE"
    },
    {
      "id_kecamatan": "5311012",
      "id_kabupaten": "5311",
      "nama_kecamatan": "MAUKARO"
    },
    {
      "id_kecamatan": "5311020",
      "id_kabupaten": "5311",
      "nama_kecamatan": "ENDE"
    },
    {
      "id_kecamatan": "5311030",
      "id_kabupaten": "5311",
      "nama_kecamatan": "ENDE SELATAN"
    },
    {
      "id_kecamatan": "5311031",
      "id_kabupaten": "5311",
      "nama_kecamatan": "ENDE TIMUR"
    },
    {
      "id_kecamatan": "5311032",
      "id_kabupaten": "5311",
      "nama_kecamatan": "ENDE TENGAH"
    },
    {
      "id_kecamatan": "5311033",
      "id_kabupaten": "5311",
      "nama_kecamatan": "ENDE UTARA"
    },
    {
      "id_kecamatan": "5311040",
      "id_kabupaten": "5311",
      "nama_kecamatan": "NDONA"
    },
    {
      "id_kecamatan": "5311041",
      "id_kabupaten": "5311",
      "nama_kecamatan": "NDONA TIMUR"
    },
    {
      "id_kecamatan": "5311050",
      "id_kabupaten": "5311",
      "nama_kecamatan": "WOLOWARU"
    },
    {
      "id_kecamatan": "5311051",
      "id_kabupaten": "5311",
      "nama_kecamatan": "WOLOJITA"
    },
    {
      "id_kecamatan": "5311052",
      "id_kabupaten": "5311",
      "nama_kecamatan": "LIO TIMUR"
    },
    {
      "id_kecamatan": "5311053",
      "id_kabupaten": "5311",
      "nama_kecamatan": "KELIMUTU"
    },
    {
      "id_kecamatan": "5311054",
      "id_kabupaten": "5311",
      "nama_kecamatan": "NDORI"
    },
    {
      "id_kecamatan": "5311060",
      "id_kabupaten": "5311",
      "nama_kecamatan": "MAUROLE"
    },
    {
      "id_kecamatan": "5311061",
      "id_kabupaten": "5311",
      "nama_kecamatan": "KOTABARU"
    },
    {
      "id_kecamatan": "5311062",
      "id_kabupaten": "5311",
      "nama_kecamatan": "DETUKELI"
    },
    {
      "id_kecamatan": "5311063",
      "id_kabupaten": "5311",
      "nama_kecamatan": "LEPEMBUSU KELISOKE"
    },
    {
      "id_kecamatan": "5311070",
      "id_kabupaten": "5311",
      "nama_kecamatan": "DETUSOKO"
    },
    {
      "id_kecamatan": "5311071",
      "id_kabupaten": "5311",
      "nama_kecamatan": "WEWARIA"
    },
    {
      "id_kecamatan": "5312010",
      "id_kabupaten": "5312",
      "nama_kecamatan": "AIMERE"
    },
    {
      "id_kecamatan": "5312011",
      "id_kabupaten": "5312",
      "nama_kecamatan": "JEREBUU"
    },
    {
      "id_kecamatan": "5312012",
      "id_kabupaten": "5312",
      "nama_kecamatan": "INERIE"
    },
    {
      "id_kecamatan": "5312020",
      "id_kabupaten": "5312",
      "nama_kecamatan": "BAJAWA"
    },
    {
      "id_kecamatan": "5312030",
      "id_kabupaten": "5312",
      "nama_kecamatan": "GOLEWA"
    },
    {
      "id_kecamatan": "5312031",
      "id_kabupaten": "5312",
      "nama_kecamatan": "GOLEWA SELATAN"
    },
    {
      "id_kecamatan": "5312032",
      "id_kabupaten": "5312",
      "nama_kecamatan": "GOLEWA BARAT"
    },
    {
      "id_kecamatan": "5312070",
      "id_kabupaten": "5312",
      "nama_kecamatan": "BAJAWA UTARA"
    },
    {
      "id_kecamatan": "5312071",
      "id_kabupaten": "5312",
      "nama_kecamatan": "SOA"
    },
    {
      "id_kecamatan": "5312080",
      "id_kabupaten": "5312",
      "nama_kecamatan": "RIUNG"
    },
    {
      "id_kecamatan": "5312081",
      "id_kabupaten": "5312",
      "nama_kecamatan": "RIUNG BARAT"
    },
    {
      "id_kecamatan": "5312082",
      "id_kabupaten": "5312",
      "nama_kecamatan": "WOLOMEZE"
    },
    {
      "id_kecamatan": "5313040",
      "id_kabupaten": "5313",
      "nama_kecamatan": "SATAR MESE"
    },
    {
      "id_kecamatan": "5313041",
      "id_kabupaten": "5313",
      "nama_kecamatan": "SATAR MESE BARAT"
    },
    {
      "id_kecamatan": "5313110",
      "id_kabupaten": "5313",
      "nama_kecamatan": "LANGKE REMBONG"
    },
    {
      "id_kecamatan": "5313120",
      "id_kabupaten": "5313",
      "nama_kecamatan": "RUTENG"
    },
    {
      "id_kecamatan": "5313121",
      "id_kabupaten": "5313",
      "nama_kecamatan": "WAE RII"
    },
    {
      "id_kecamatan": "5313122",
      "id_kabupaten": "5313",
      "nama_kecamatan": "LELAK"
    },
    {
      "id_kecamatan": "5313123",
      "id_kabupaten": "5313",
      "nama_kecamatan": "RAHONG UTARA"
    },
    {
      "id_kecamatan": "5313130",
      "id_kabupaten": "5313",
      "nama_kecamatan": "CIBAL"
    },
    {
      "id_kecamatan": "5313131",
      "id_kabupaten": "5313",
      "nama_kecamatan": "CIBAL BARAT"
    },
    {
      "id_kecamatan": "5313140",
      "id_kabupaten": "5313",
      "nama_kecamatan": "REOK"
    },
    {
      "id_kecamatan": "5313141",
      "id_kabupaten": "5313",
      "nama_kecamatan": "REOK BARAT"
    },
    {
      "id_kecamatan": "5314010",
      "id_kabupaten": "5314",
      "nama_kecamatan": "ROTE BARAT DAYA"
    },
    {
      "id_kecamatan": "5314020",
      "id_kabupaten": "5314",
      "nama_kecamatan": "ROTE BARAT LAUT"
    },
    {
      "id_kecamatan": "5314030",
      "id_kabupaten": "5314",
      "nama_kecamatan": "LOBALAIN"
    },
    {
      "id_kecamatan": "5314040",
      "id_kabupaten": "5314",
      "nama_kecamatan": "ROTE TENGAH"
    },
    {
      "id_kecamatan": "5314041",
      "id_kabupaten": "5314",
      "nama_kecamatan": "ROTE SELATAN"
    },
    {
      "id_kecamatan": "5314050",
      "id_kabupaten": "5314",
      "nama_kecamatan": "PANTAI BARU"
    },
    {
      "id_kecamatan": "5314060",
      "id_kabupaten": "5314",
      "nama_kecamatan": "ROTE TIMUR"
    },
    {
      "id_kecamatan": "5314061",
      "id_kabupaten": "5314",
      "nama_kecamatan": "LANDU LEKO"
    },
    {
      "id_kecamatan": "5314070",
      "id_kabupaten": "5314",
      "nama_kecamatan": "ROTE BARAT"
    },
    {
      "id_kecamatan": "5314071",
      "id_kabupaten": "5314",
      "nama_kecamatan": "NDAO NUSE"
    },
    {
      "id_kecamatan": "5315010",
      "id_kabupaten": "5315",
      "nama_kecamatan": "KOMODO"
    },
    {
      "id_kecamatan": "5315011",
      "id_kabupaten": "5315",
      "nama_kecamatan": "BOLENG"
    },
    {
      "id_kecamatan": "5315020",
      "id_kabupaten": "5315",
      "nama_kecamatan": "SANO NGGOANG"
    },
    {
      "id_kecamatan": "5315021",
      "id_kabupaten": "5315",
      "nama_kecamatan": "MBELILING"
    },
    {
      "id_kecamatan": "5315030",
      "id_kabupaten": "5315",
      "nama_kecamatan": "LEMBOR"
    },
    {
      "id_kecamatan": "5315031",
      "id_kabupaten": "5315",
      "nama_kecamatan": "WELAK"
    },
    {
      "id_kecamatan": "5315032",
      "id_kabupaten": "5315",
      "nama_kecamatan": "LEMBOR SELATAN"
    },
    {
      "id_kecamatan": "5315040",
      "id_kabupaten": "5315",
      "nama_kecamatan": "KUWUS"
    },
    {
      "id_kecamatan": "5315041",
      "id_kabupaten": "5315",
      "nama_kecamatan": "NDOSO"
    },
    {
      "id_kecamatan": "5315050",
      "id_kabupaten": "5315",
      "nama_kecamatan": "MACANG PACAR"
    },
    {
      "id_kecamatan": "5316010",
      "id_kabupaten": "5316",
      "nama_kecamatan": "KATIKUTANA"
    },
    {
      "id_kecamatan": "5316011",
      "id_kabupaten": "5316",
      "nama_kecamatan": "KATIKUTANA SELATAN"
    },
    {
      "id_kecamatan": "5316020",
      "id_kabupaten": "5316",
      "nama_kecamatan": "UMBU RATU NGGAY BARAT"
    },
    {
      "id_kecamatan": "5316030",
      "id_kabupaten": "5316",
      "nama_kecamatan": "UMBU RATU NGGAY"
    },
    {
      "id_kecamatan": "5316040",
      "id_kabupaten": "5316",
      "nama_kecamatan": "MAMBORO"
    },
    {
      "id_kecamatan": "5317010",
      "id_kabupaten": "5317",
      "nama_kecamatan": "KODI BANGEDO"
    },
    {
      "id_kecamatan": "5317011",
      "id_kabupaten": "5317",
      "nama_kecamatan": "KODI BALAGHAR"
    },
    {
      "id_kecamatan": "5317020",
      "id_kabupaten": "5317",
      "nama_kecamatan": "KODI"
    },
    {
      "id_kecamatan": "5317030",
      "id_kabupaten": "5317",
      "nama_kecamatan": "KODI UTARA"
    },
    {
      "id_kecamatan": "5317040",
      "id_kabupaten": "5317",
      "nama_kecamatan": "WEWEWA SELATAN"
    },
    {
      "id_kecamatan": "5317050",
      "id_kabupaten": "5317",
      "nama_kecamatan": "WEWEWA BARAT"
    },
    {
      "id_kecamatan": "5317060",
      "id_kabupaten": "5317",
      "nama_kecamatan": "WEWEWA TIMUR"
    },
    {
      "id_kecamatan": "5317061",
      "id_kabupaten": "5317",
      "nama_kecamatan": "WEWEWA TENGAH"
    },
    {
      "id_kecamatan": "5317070",
      "id_kabupaten": "5317",
      "nama_kecamatan": "WEWEWA UTARA"
    },
    {
      "id_kecamatan": "5317080",
      "id_kabupaten": "5317",
      "nama_kecamatan": "LOURA"
    },
    {
      "id_kecamatan": "5317081",
      "id_kabupaten": "5317",
      "nama_kecamatan": "KOTA TAMBOLAKA"
    },
    {
      "id_kecamatan": "5318010",
      "id_kabupaten": "5318",
      "nama_kecamatan": "MAUPONGGO"
    },
    {
      "id_kecamatan": "5318020",
      "id_kabupaten": "5318",
      "nama_kecamatan": "KEO TENGAH"
    },
    {
      "id_kecamatan": "5318030",
      "id_kabupaten": "5318",
      "nama_kecamatan": "NANGARORO"
    },
    {
      "id_kecamatan": "5318040",
      "id_kabupaten": "5318",
      "nama_kecamatan": "BOAWAE"
    },
    {
      "id_kecamatan": "5318050",
      "id_kabupaten": "5318",
      "nama_kecamatan": "AESESA SELATAN"
    },
    {
      "id_kecamatan": "5318060",
      "id_kabupaten": "5318",
      "nama_kecamatan": "AESESA"
    },
    {
      "id_kecamatan": "5318070",
      "id_kabupaten": "5318",
      "nama_kecamatan": "WOLOWAE"
    },
    {
      "id_kecamatan": "5319010",
      "id_kabupaten": "5319",
      "nama_kecamatan": "BORONG"
    },
    {
      "id_kecamatan": "5319011",
      "id_kabupaten": "5319",
      "nama_kecamatan": "RANA MESE"
    },
    {
      "id_kecamatan": "5319020",
      "id_kabupaten": "5319",
      "nama_kecamatan": "KOTA KOMBA"
    },
    {
      "id_kecamatan": "5319030",
      "id_kabupaten": "5319",
      "nama_kecamatan": "ELAR"
    },
    {
      "id_kecamatan": "5319031",
      "id_kabupaten": "5319",
      "nama_kecamatan": "ELAR SELATAN"
    },
    {
      "id_kecamatan": "5319040",
      "id_kabupaten": "5319",
      "nama_kecamatan": "SAMBI RAMPAS"
    },
    {
      "id_kecamatan": "5319050",
      "id_kabupaten": "5319",
      "nama_kecamatan": "POCO RANAKA"
    },
    {
      "id_kecamatan": "5319051",
      "id_kabupaten": "5319",
      "nama_kecamatan": "POCO RANAKA TIMUR"
    },
    {
      "id_kecamatan": "5319060",
      "id_kabupaten": "5319",
      "nama_kecamatan": "LAMBA LEDA"
    },
    {
      "id_kecamatan": "5320010",
      "id_kabupaten": "5320",
      "nama_kecamatan": "RAIJUA"
    },
    {
      "id_kecamatan": "5320020",
      "id_kabupaten": "5320",
      "nama_kecamatan": "HAWU MEHARA"
    },
    {
      "id_kecamatan": "5320030",
      "id_kabupaten": "5320",
      "nama_kecamatan": "SABU LIAE"
    },
    {
      "id_kecamatan": "5320040",
      "id_kabupaten": "5320",
      "nama_kecamatan": "SABU BARAT"
    },
    {
      "id_kecamatan": "5320050",
      "id_kabupaten": "5320",
      "nama_kecamatan": "SABU TENGAH"
    },
    {
      "id_kecamatan": "5320060",
      "id_kabupaten": "5320",
      "nama_kecamatan": "SABU TIMUR"
    },
    {
      "id_kecamatan": "5321010",
      "id_kabupaten": "5321",
      "nama_kecamatan": "WEWIKU"
    },
    {
      "id_kecamatan": "5321020",
      "id_kabupaten": "5321",
      "nama_kecamatan": "MALAKA BARAT"
    },
    {
      "id_kecamatan": "5321030",
      "id_kabupaten": "5321",
      "nama_kecamatan": "WELIMAN"
    },
    {
      "id_kecamatan": "5321040",
      "id_kabupaten": "5321",
      "nama_kecamatan": "RINHAT"
    },
    {
      "id_kecamatan": "5321050",
      "id_kabupaten": "5321",
      "nama_kecamatan": "IO KUFEU"
    },
    {
      "id_kecamatan": "5321060",
      "id_kabupaten": "5321",
      "nama_kecamatan": "SASITA MEAN"
    },
    {
      "id_kecamatan": "5321070",
      "id_kabupaten": "5321",
      "nama_kecamatan": "MALAKA TENGAH"
    },
    {
      "id_kecamatan": "5321080",
      "id_kabupaten": "5321",
      "nama_kecamatan": "BOTIN LEOBELE"
    },
    {
      "id_kecamatan": "5321090",
      "id_kabupaten": "5321",
      "nama_kecamatan": "LAEN MANEN"
    },
    {
      "id_kecamatan": "5321100",
      "id_kabupaten": "5321",
      "nama_kecamatan": "MALAKA TIMUR"
    },
    {
      "id_kecamatan": "5321110",
      "id_kabupaten": "5321",
      "nama_kecamatan": "KOBALIMA"
    },
    {
      "id_kecamatan": "5321120",
      "id_kabupaten": "5321",
      "nama_kecamatan": "KOBALIMA TIMUR"
    },
    {
      "id_kecamatan": "5371010",
      "id_kabupaten": "5371",
      "nama_kecamatan": "ALAK"
    },
    {
      "id_kecamatan": "5371020",
      "id_kabupaten": "5371",
      "nama_kecamatan": "MAULAFA"
    },
    {
      "id_kecamatan": "5371030",
      "id_kabupaten": "5371",
      "nama_kecamatan": "OEBOBO"
    },
    {
      "id_kecamatan": "5371031",
      "id_kabupaten": "5371",
      "nama_kecamatan": "KOTA RAJA"
    },
    {
      "id_kecamatan": "5371040",
      "id_kabupaten": "5371",
      "nama_kecamatan": "KELAPA LIMA"
    },
    {
      "id_kecamatan": "5371041",
      "id_kabupaten": "5371",
      "nama_kecamatan": "KOTA LAMA"
    },
    {
      "id_kecamatan": "6101010",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SELAKAU"
    },
    {
      "id_kecamatan": "6101011",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SELAKAU TIMUR"
    },
    {
      "id_kecamatan": "6101020",
      "id_kabupaten": "6101",
      "nama_kecamatan": "PEMANGKAT"
    },
    {
      "id_kecamatan": "6101021",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SEMPARUK"
    },
    {
      "id_kecamatan": "6101022",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SALATIGA"
    },
    {
      "id_kecamatan": "6101030",
      "id_kabupaten": "6101",
      "nama_kecamatan": "TEBAS"
    },
    {
      "id_kecamatan": "6101031",
      "id_kabupaten": "6101",
      "nama_kecamatan": "TEKARANG"
    },
    {
      "id_kecamatan": "6101040",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SAMBAS"
    },
    {
      "id_kecamatan": "6101041",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SUBAH"
    },
    {
      "id_kecamatan": "6101042",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SEBAWI"
    },
    {
      "id_kecamatan": "6101043",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SAJAD"
    },
    {
      "id_kecamatan": "6101050",
      "id_kabupaten": "6101",
      "nama_kecamatan": "JAWAI"
    },
    {
      "id_kecamatan": "6101051",
      "id_kabupaten": "6101",
      "nama_kecamatan": "JAWAI SELATAN"
    },
    {
      "id_kecamatan": "6101060",
      "id_kabupaten": "6101",
      "nama_kecamatan": "TELUK KERAMAT"
    },
    {
      "id_kecamatan": "6101061",
      "id_kabupaten": "6101",
      "nama_kecamatan": "GALING"
    },
    {
      "id_kecamatan": "6101062",
      "id_kabupaten": "6101",
      "nama_kecamatan": "TANGARAN"
    },
    {
      "id_kecamatan": "6101070",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SEJANGKUNG"
    },
    {
      "id_kecamatan": "6101080",
      "id_kabupaten": "6101",
      "nama_kecamatan": "SAJINGAN BESAR"
    },
    {
      "id_kecamatan": "6101090",
      "id_kabupaten": "6101",
      "nama_kecamatan": "PALOH"
    },
    {
      "id_kecamatan": "6102010",
      "id_kabupaten": "6102",
      "nama_kecamatan": "SUNGAI RAYA"
    },
    {
      "id_kecamatan": "6102011",
      "id_kabupaten": "6102",
      "nama_kecamatan": "CAPKALA"
    },
    {
      "id_kecamatan": "6102012",
      "id_kabupaten": "6102",
      "nama_kecamatan": "SUNGAI RAYA KEPULAUAN"
    },
    {
      "id_kecamatan": "6102030",
      "id_kabupaten": "6102",
      "nama_kecamatan": "SAMALANTAN"
    },
    {
      "id_kecamatan": "6102031",
      "id_kabupaten": "6102",
      "nama_kecamatan": "MONTERADO"
    },
    {
      "id_kecamatan": "6102032",
      "id_kabupaten": "6102",
      "nama_kecamatan": "LEMBAH BAWANG"
    },
    {
      "id_kecamatan": "6102040",
      "id_kabupaten": "6102",
      "nama_kecamatan": "BENGKAYANG"
    },
    {
      "id_kecamatan": "6102041",
      "id_kabupaten": "6102",
      "nama_kecamatan": "TERIAK"
    },
    {
      "id_kecamatan": "6102042",
      "id_kabupaten": "6102",
      "nama_kecamatan": "SUNGAI BETUNG"
    },
    {
      "id_kecamatan": "6102050",
      "id_kabupaten": "6102",
      "nama_kecamatan": "LEDO"
    },
    {
      "id_kecamatan": "6102051",
      "id_kabupaten": "6102",
      "nama_kecamatan": "SUTI SEMARANG"
    },
    {
      "id_kecamatan": "6102052",
      "id_kabupaten": "6102",
      "nama_kecamatan": "LUMAR"
    },
    {
      "id_kecamatan": "6102060",
      "id_kabupaten": "6102",
      "nama_kecamatan": "SANGGAU LEDO"
    },
    {
      "id_kecamatan": "6102061",
      "id_kabupaten": "6102",
      "nama_kecamatan": "TUJUHBELAS"
    },
    {
      "id_kecamatan": "6102070",
      "id_kabupaten": "6102",
      "nama_kecamatan": "SELUAS"
    },
    {
      "id_kecamatan": "6102080",
      "id_kabupaten": "6102",
      "nama_kecamatan": "JAGOI BABANG"
    },
    {
      "id_kecamatan": "6102081",
      "id_kabupaten": "6102",
      "nama_kecamatan": "SIDING"
    },
    {
      "id_kecamatan": "6103020",
      "id_kabupaten": "6103",
      "nama_kecamatan": "SEBANGKI"
    },
    {
      "id_kecamatan": "6103030",
      "id_kabupaten": "6103",
      "nama_kecamatan": "NGABANG"
    },
    {
      "id_kecamatan": "6103031",
      "id_kabupaten": "6103",
      "nama_kecamatan": "JELIMPO"
    },
    {
      "id_kecamatan": "6103040",
      "id_kabupaten": "6103",
      "nama_kecamatan": "SENGAH TEMILA"
    },
    {
      "id_kecamatan": "6103050",
      "id_kabupaten": "6103",
      "nama_kecamatan": "MANDOR"
    },
    {
      "id_kecamatan": "6103060",
      "id_kabupaten": "6103",
      "nama_kecamatan": "MENJALIN"
    },
    {
      "id_kecamatan": "6103070",
      "id_kabupaten": "6103",
      "nama_kecamatan": "MEMPAWAH HULU"
    },
    {
      "id_kecamatan": "6103071",
      "id_kabupaten": "6103",
      "nama_kecamatan": "SOMPAK"
    },
    {
      "id_kecamatan": "6103080",
      "id_kabupaten": "6103",
      "nama_kecamatan": "MENYUKE"
    },
    {
      "id_kecamatan": "6103081",
      "id_kabupaten": "6103",
      "nama_kecamatan": "BANYUKE HULU"
    },
    {
      "id_kecamatan": "6103090",
      "id_kabupaten": "6103",
      "nama_kecamatan": "MERANTI"
    },
    {
      "id_kecamatan": "6103100",
      "id_kabupaten": "6103",
      "nama_kecamatan": "KUALA BEHE"
    },
    {
      "id_kecamatan": "6103110",
      "id_kabupaten": "6103",
      "nama_kecamatan": "AIR BESAR"
    },
    {
      "id_kecamatan": "6104080",
      "id_kabupaten": "6104",
      "nama_kecamatan": "SIANTAN"
    },
    {
      "id_kecamatan": "6104081",
      "id_kabupaten": "6104",
      "nama_kecamatan": "SEGEDONG"
    },
    {
      "id_kecamatan": "6104090",
      "id_kabupaten": "6104",
      "nama_kecamatan": "SUNGAI PINYUH"
    },
    {
      "id_kecamatan": "6104091",
      "id_kabupaten": "6104",
      "nama_kecamatan": "ANJONGAN"
    },
    {
      "id_kecamatan": "6104100",
      "id_kabupaten": "6104",
      "nama_kecamatan": "MEMPAWAH HILIR"
    },
    {
      "id_kecamatan": "6104101",
      "id_kabupaten": "6104",
      "nama_kecamatan": "MEMPAWAH TIMUR"
    },
    {
      "id_kecamatan": "6104110",
      "id_kabupaten": "6104",
      "nama_kecamatan": "SUNGAI KUNYIT"
    },
    {
      "id_kecamatan": "6104120",
      "id_kabupaten": "6104",
      "nama_kecamatan": "TOHO"
    },
    {
      "id_kecamatan": "6104121",
      "id_kabupaten": "6104",
      "nama_kecamatan": "SADANIANG"
    },
    {
      "id_kecamatan": "6105010",
      "id_kabupaten": "6105",
      "nama_kecamatan": "TOBA"
    },
    {
      "id_kecamatan": "6105020",
      "id_kabupaten": "6105",
      "nama_kecamatan": "MELIAU"
    },
    {
      "id_kecamatan": "6105060",
      "id_kabupaten": "6105",
      "nama_kecamatan": "KAPUAS"
    },
    {
      "id_kecamatan": "6105070",
      "id_kabupaten": "6105",
      "nama_kecamatan": "MUKOK"
    },
    {
      "id_kecamatan": "6105120",
      "id_kabupaten": "6105",
      "nama_kecamatan": "JANGKANG"
    },
    {
      "id_kecamatan": "6105130",
      "id_kabupaten": "6105",
      "nama_kecamatan": "BONTI"
    },
    {
      "id_kecamatan": "6105140",
      "id_kabupaten": "6105",
      "nama_kecamatan": "PARINDU"
    },
    {
      "id_kecamatan": "6105150",
      "id_kabupaten": "6105",
      "nama_kecamatan": "TAYAN HILIR"
    },
    {
      "id_kecamatan": "6105160",
      "id_kabupaten": "6105",
      "nama_kecamatan": "BALAI"
    },
    {
      "id_kecamatan": "6105170",
      "id_kabupaten": "6105",
      "nama_kecamatan": "TAYAN HULU"
    },
    {
      "id_kecamatan": "6105180",
      "id_kabupaten": "6105",
      "nama_kecamatan": "KEMBAYAN"
    },
    {
      "id_kecamatan": "6105190",
      "id_kabupaten": "6105",
      "nama_kecamatan": "BEDUWAI"
    },
    {
      "id_kecamatan": "6105200",
      "id_kabupaten": "6105",
      "nama_kecamatan": "NOYAN"
    },
    {
      "id_kecamatan": "6105210",
      "id_kabupaten": "6105",
      "nama_kecamatan": "SEKAYAM"
    },
    {
      "id_kecamatan": "6105220",
      "id_kabupaten": "6105",
      "nama_kecamatan": "ENTIKONG"
    },
    {
      "id_kecamatan": "6106010",
      "id_kabupaten": "6106",
      "nama_kecamatan": "KENDAWANGAN"
    },
    {
      "id_kecamatan": "6106020",
      "id_kabupaten": "6106",
      "nama_kecamatan": "MANIS MATA"
    },
    {
      "id_kecamatan": "6106030",
      "id_kabupaten": "6106",
      "nama_kecamatan": "MARAU"
    },
    {
      "id_kecamatan": "6106031",
      "id_kabupaten": "6106",
      "nama_kecamatan": "SINGKUP"
    },
    {
      "id_kecamatan": "6106032",
      "id_kabupaten": "6106",
      "nama_kecamatan": "AIR UPAS"
    },
    {
      "id_kecamatan": "6106040",
      "id_kabupaten": "6106",
      "nama_kecamatan": "JELAI HULU"
    },
    {
      "id_kecamatan": "6106050",
      "id_kabupaten": "6106",
      "nama_kecamatan": "TUMBANG TITI"
    },
    {
      "id_kecamatan": "6106051",
      "id_kabupaten": "6106",
      "nama_kecamatan": "PEMAHAN"
    },
    {
      "id_kecamatan": "6106052",
      "id_kabupaten": "6106",
      "nama_kecamatan": "SUNGAI MELAYU RAYAK"
    },
    {
      "id_kecamatan": "6106060",
      "id_kabupaten": "6106",
      "nama_kecamatan": "MATAN HILIR SELATAN"
    },
    {
      "id_kecamatan": "6106061",
      "id_kabupaten": "6106",
      "nama_kecamatan": "BENUA KAYONG"
    },
    {
      "id_kecamatan": "6106070",
      "id_kabupaten": "6106",
      "nama_kecamatan": "MATAN HILIR UTARA"
    },
    {
      "id_kecamatan": "6106071",
      "id_kabupaten": "6106",
      "nama_kecamatan": "DELTA PAWAN"
    },
    {
      "id_kecamatan": "6106072",
      "id_kabupaten": "6106",
      "nama_kecamatan": "MUARA PAWAN"
    },
    {
      "id_kecamatan": "6106090",
      "id_kabupaten": "6106",
      "nama_kecamatan": "NANGA TAYAP"
    },
    {
      "id_kecamatan": "6106100",
      "id_kabupaten": "6106",
      "nama_kecamatan": "SANDAI"
    },
    {
      "id_kecamatan": "6106101",
      "id_kabupaten": "6106",
      "nama_kecamatan": "HULU SUNGAI"
    },
    {
      "id_kecamatan": "6106110",
      "id_kabupaten": "6106",
      "nama_kecamatan": "SUNGAI LAUR"
    },
    {
      "id_kecamatan": "6106120",
      "id_kabupaten": "6106",
      "nama_kecamatan": "SIMPANG HULU"
    },
    {
      "id_kecamatan": "6106121",
      "id_kabupaten": "6106",
      "nama_kecamatan": "SIMPANG DUA"
    },
    {
      "id_kecamatan": "6107060",
      "id_kabupaten": "6107",
      "nama_kecamatan": "SERAWAI"
    },
    {
      "id_kecamatan": "6107070",
      "id_kabupaten": "6107",
      "nama_kecamatan": "AMBALAU"
    },
    {
      "id_kecamatan": "6107080",
      "id_kabupaten": "6107",
      "nama_kecamatan": "KAYAN HULU"
    },
    {
      "id_kecamatan": "6107110",
      "id_kabupaten": "6107",
      "nama_kecamatan": "SEPAUK"
    },
    {
      "id_kecamatan": "6107120",
      "id_kabupaten": "6107",
      "nama_kecamatan": "TEMPUNAK"
    },
    {
      "id_kecamatan": "6107130",
      "id_kabupaten": "6107",
      "nama_kecamatan": "SUNGAI TEBELIAN"
    },
    {
      "id_kecamatan": "6107140",
      "id_kabupaten": "6107",
      "nama_kecamatan": "SINTANG"
    },
    {
      "id_kecamatan": "6107150",
      "id_kabupaten": "6107",
      "nama_kecamatan": "DEDAI"
    },
    {
      "id_kecamatan": "6107160",
      "id_kabupaten": "6107",
      "nama_kecamatan": "KAYAN HILIR"
    },
    {
      "id_kecamatan": "6107170",
      "id_kabupaten": "6107",
      "nama_kecamatan": "KELAM PERMAI"
    },
    {
      "id_kecamatan": "6107180",
      "id_kabupaten": "6107",
      "nama_kecamatan": "BINJAI HULU"
    },
    {
      "id_kecamatan": "6107190",
      "id_kabupaten": "6107",
      "nama_kecamatan": "KETUNGAU HILIR"
    },
    {
      "id_kecamatan": "6107200",
      "id_kabupaten": "6107",
      "nama_kecamatan": "KETUNGAU TENGAH"
    },
    {
      "id_kecamatan": "6107210",
      "id_kabupaten": "6107",
      "nama_kecamatan": "KETUNGAU HULU"
    },
    {
      "id_kecamatan": "6108010",
      "id_kabupaten": "6108",
      "nama_kecamatan": "SILAT HILIR"
    },
    {
      "id_kecamatan": "6108020",
      "id_kabupaten": "6108",
      "nama_kecamatan": "SILAT HULU"
    },
    {
      "id_kecamatan": "6108030",
      "id_kabupaten": "6108",
      "nama_kecamatan": "HULU GURUNG"
    },
    {
      "id_kecamatan": "6108040",
      "id_kabupaten": "6108",
      "nama_kecamatan": "BUNUT HULU"
    },
    {
      "id_kecamatan": "6108050",
      "id_kabupaten": "6108",
      "nama_kecamatan": "MENTEBAH"
    },
    {
      "id_kecamatan": "6108060",
      "id_kabupaten": "6108",
      "nama_kecamatan": "BIKA"
    },
    {
      "id_kecamatan": "6108070",
      "id_kabupaten": "6108",
      "nama_kecamatan": "KALIS"
    },
    {
      "id_kecamatan": "6108080",
      "id_kabupaten": "6108",
      "nama_kecamatan": "PUTUSSIBAU SELATAN"
    },
    {
      "id_kecamatan": "6108090",
      "id_kabupaten": "6108",
      "nama_kecamatan": "EMBALOH HILIR"
    },
    {
      "id_kecamatan": "6108100",
      "id_kabupaten": "6108",
      "nama_kecamatan": "BUNUT HILIR"
    },
    {
      "id_kecamatan": "6108110",
      "id_kabupaten": "6108",
      "nama_kecamatan": "BOYAN TANJUNG"
    },
    {
      "id_kecamatan": "6108120",
      "id_kabupaten": "6108",
      "nama_kecamatan": "PENGKADAN"
    },
    {
      "id_kecamatan": "6108130",
      "id_kabupaten": "6108",
      "nama_kecamatan": "JONGKONG"
    },
    {
      "id_kecamatan": "6108140",
      "id_kabupaten": "6108",
      "nama_kecamatan": "SELIMBAU"
    },
    {
      "id_kecamatan": "6108150",
      "id_kabupaten": "6108",
      "nama_kecamatan": "SUHAID"
    },
    {
      "id_kecamatan": "6108160",
      "id_kabupaten": "6108",
      "nama_kecamatan": "SEBERUANG"
    },
    {
      "id_kecamatan": "6108170",
      "id_kabupaten": "6108",
      "nama_kecamatan": "SEMITAU"
    },
    {
      "id_kecamatan": "6108180",
      "id_kabupaten": "6108",
      "nama_kecamatan": "EMPANANG"
    },
    {
      "id_kecamatan": "6108190",
      "id_kabupaten": "6108",
      "nama_kecamatan": "PURING KENCANA"
    },
    {
      "id_kecamatan": "6108200",
      "id_kabupaten": "6108",
      "nama_kecamatan": "BADAU"
    },
    {
      "id_kecamatan": "6108210",
      "id_kabupaten": "6108",
      "nama_kecamatan": "BATANG LUPAR"
    },
    {
      "id_kecamatan": "6108220",
      "id_kabupaten": "6108",
      "nama_kecamatan": "EMBALOH HULU"
    },
    {
      "id_kecamatan": "6108230",
      "id_kabupaten": "6108",
      "nama_kecamatan": "PUTUSSIBAU UTARA"
    },
    {
      "id_kecamatan": "6109010",
      "id_kabupaten": "6109",
      "nama_kecamatan": "NANGA MAHAP"
    },
    {
      "id_kecamatan": "6109020",
      "id_kabupaten": "6109",
      "nama_kecamatan": "NANGA TAMAN"
    },
    {
      "id_kecamatan": "6109030",
      "id_kabupaten": "6109",
      "nama_kecamatan": "SEKADAU HULU"
    },
    {
      "id_kecamatan": "6109040",
      "id_kabupaten": "6109",
      "nama_kecamatan": "SEKADAU HILIR"
    },
    {
      "id_kecamatan": "6109050",
      "id_kabupaten": "6109",
      "nama_kecamatan": "BELITANG HILIR"
    },
    {
      "id_kecamatan": "6109060",
      "id_kabupaten": "6109",
      "nama_kecamatan": "BELITANG"
    },
    {
      "id_kecamatan": "6109070",
      "id_kabupaten": "6109",
      "nama_kecamatan": "BELITANG HULU"
    },
    {
      "id_kecamatan": "6110010",
      "id_kabupaten": "6110",
      "nama_kecamatan": "SOKAN"
    },
    {
      "id_kecamatan": "6110020",
      "id_kabupaten": "6110",
      "nama_kecamatan": "TANAH PINOH"
    },
    {
      "id_kecamatan": "6110021",
      "id_kabupaten": "6110",
      "nama_kecamatan": "TANAH PINOH BARAT"
    },
    {
      "id_kecamatan": "6110030",
      "id_kabupaten": "6110",
      "nama_kecamatan": "SAYAN"
    },
    {
      "id_kecamatan": "6110040",
      "id_kabupaten": "6110",
      "nama_kecamatan": "BELIMBING"
    },
    {
      "id_kecamatan": "6110041",
      "id_kabupaten": "6110",
      "nama_kecamatan": "BELIMBING HULU"
    },
    {
      "id_kecamatan": "6110050",
      "id_kabupaten": "6110",
      "nama_kecamatan": "NANGA PINOH"
    },
    {
      "id_kecamatan": "6110051",
      "id_kabupaten": "6110",
      "nama_kecamatan": "PINOH SELATAN"
    },
    {
      "id_kecamatan": "6110052",
      "id_kabupaten": "6110",
      "nama_kecamatan": "PINOH UTARA"
    },
    {
      "id_kecamatan": "6110060",
      "id_kabupaten": "6110",
      "nama_kecamatan": "ELLA HILIR"
    },
    {
      "id_kecamatan": "6110070",
      "id_kabupaten": "6110",
      "nama_kecamatan": "MENUKUNG"
    },
    {
      "id_kecamatan": "6111010",
      "id_kabupaten": "6111",
      "nama_kecamatan": "PULAU MAYA"
    },
    {
      "id_kecamatan": "6111011",
      "id_kabupaten": "6111",
      "nama_kecamatan": "KEPULAUAN KARIMATA"
    },
    {
      "id_kecamatan": "6111020",
      "id_kabupaten": "6111",
      "nama_kecamatan": "SUKADANA"
    },
    {
      "id_kecamatan": "6111030",
      "id_kabupaten": "6111",
      "nama_kecamatan": "SIMPANG HILIR"
    },
    {
      "id_kecamatan": "6111040",
      "id_kabupaten": "6111",
      "nama_kecamatan": "TELUK BATANG"
    },
    {
      "id_kecamatan": "6111050",
      "id_kabupaten": "6111",
      "nama_kecamatan": "SEPONTI"
    },
    {
      "id_kecamatan": "6112010",
      "id_kabupaten": "6112",
      "nama_kecamatan": "BATU AMPAR"
    },
    {
      "id_kecamatan": "6112020",
      "id_kabupaten": "6112",
      "nama_kecamatan": "TERENTANG"
    },
    {
      "id_kecamatan": "6112030",
      "id_kabupaten": "6112",
      "nama_kecamatan": "KUBU"
    },
    {
      "id_kecamatan": "6112040",
      "id_kabupaten": "6112",
      "nama_kecamatan": "TELOK PA'KEDAI"
    },
    {
      "id_kecamatan": "6112050",
      "id_kabupaten": "6112",
      "nama_kecamatan": "SUNGAI KAKAP"
    },
    {
      "id_kecamatan": "6112060",
      "id_kabupaten": "6112",
      "nama_kecamatan": "RASAU JAYA"
    },
    {
      "id_kecamatan": "6112070",
      "id_kabupaten": "6112",
      "nama_kecamatan": "SUNGAI RAYA"
    },
    {
      "id_kecamatan": "6112080",
      "id_kabupaten": "6112",
      "nama_kecamatan": "SUNGAI AMBAWANG"
    },
    {
      "id_kecamatan": "6112090",
      "id_kabupaten": "6112",
      "nama_kecamatan": "KUALA MANDOR-B"
    },
    {
      "id_kecamatan": "6171010",
      "id_kabupaten": "6171",
      "nama_kecamatan": "PONTIANAK SELATAN"
    },
    {
      "id_kecamatan": "6171011",
      "id_kabupaten": "6171",
      "nama_kecamatan": "PONTIANAK TENGGARA"
    },
    {
      "id_kecamatan": "6171020",
      "id_kabupaten": "6171",
      "nama_kecamatan": "PONTIANAK TIMUR"
    },
    {
      "id_kecamatan": "6171030",
      "id_kabupaten": "6171",
      "nama_kecamatan": "PONTIANAK BARAT"
    },
    {
      "id_kecamatan": "6171031",
      "id_kabupaten": "6171",
      "nama_kecamatan": "PONTIANAK KOTA"
    },
    {
      "id_kecamatan": "6171040",
      "id_kabupaten": "6171",
      "nama_kecamatan": "PONTIANAK UTARA"
    },
    {
      "id_kecamatan": "6172010",
      "id_kabupaten": "6172",
      "nama_kecamatan": "SINGKAWANG SELATAN"
    },
    {
      "id_kecamatan": "6172020",
      "id_kabupaten": "6172",
      "nama_kecamatan": "SINGKAWANG TIMUR"
    },
    {
      "id_kecamatan": "6172030",
      "id_kabupaten": "6172",
      "nama_kecamatan": "SINGKAWANG UTARA"
    },
    {
      "id_kecamatan": "6172040",
      "id_kabupaten": "6172",
      "nama_kecamatan": "SINGKAWANG BARAT"
    },
    {
      "id_kecamatan": "6172050",
      "id_kabupaten": "6172",
      "nama_kecamatan": "SINGKAWANG TENGAH"
    },
    {
      "id_kecamatan": "6201040",
      "id_kabupaten": "6201",
      "nama_kecamatan": "KOTAWARINGIN LAMA"
    },
    {
      "id_kecamatan": "6201050",
      "id_kabupaten": "6201",
      "nama_kecamatan": "ARUT SELATAN"
    },
    {
      "id_kecamatan": "6201060",
      "id_kabupaten": "6201",
      "nama_kecamatan": "KUMAI"
    },
    {
      "id_kecamatan": "6201061",
      "id_kabupaten": "6201",
      "nama_kecamatan": "PANGKALAN BANTENG"
    },
    {
      "id_kecamatan": "6201062",
      "id_kabupaten": "6201",
      "nama_kecamatan": "PANGKALAN LADA"
    },
    {
      "id_kecamatan": "6201070",
      "id_kabupaten": "6201",
      "nama_kecamatan": "ARUT UTARA"
    },
    {
      "id_kecamatan": "6202020",
      "id_kabupaten": "6202",
      "nama_kecamatan": "MENTAYA HILIR SELATAN"
    },
    {
      "id_kecamatan": "6202021",
      "id_kabupaten": "6202",
      "nama_kecamatan": "TELUK SAMPIT"
    },
    {
      "id_kecamatan": "6202050",
      "id_kabupaten": "6202",
      "nama_kecamatan": "PULAU HANAUT"
    },
    {
      "id_kecamatan": "6202060",
      "id_kabupaten": "6202",
      "nama_kecamatan": "MENTAWA BARU/KETAPANG"
    },
    {
      "id_kecamatan": "6202061",
      "id_kabupaten": "6202",
      "nama_kecamatan": "SERANAU"
    },
    {
      "id_kecamatan": "6202070",
      "id_kabupaten": "6202",
      "nama_kecamatan": "MENTAYA HILIR UTARA"
    },
    {
      "id_kecamatan": "6202110",
      "id_kabupaten": "6202",
      "nama_kecamatan": "KOTA BESI"
    },
    {
      "id_kecamatan": "6202111",
      "id_kabupaten": "6202",
      "nama_kecamatan": "TELAWANG"
    },
    {
      "id_kecamatan": "6202120",
      "id_kabupaten": "6202",
      "nama_kecamatan": "BAAMANG"
    },
    {
      "id_kecamatan": "6202190",
      "id_kabupaten": "6202",
      "nama_kecamatan": "CEMPAGA"
    },
    {
      "id_kecamatan": "6202191",
      "id_kabupaten": "6202",
      "nama_kecamatan": "CEMPAGA HULU"
    },
    {
      "id_kecamatan": "6202200",
      "id_kabupaten": "6202",
      "nama_kecamatan": "PARENGGEAN"
    },
    {
      "id_kecamatan": "6202201",
      "id_kabupaten": "6202",
      "nama_kecamatan": "TUALAN HULU"
    },
    {
      "id_kecamatan": "6202210",
      "id_kabupaten": "6202",
      "nama_kecamatan": "MENTAYA HULU"
    },
    {
      "id_kecamatan": "6202211",
      "id_kabupaten": "6202",
      "nama_kecamatan": "BUKIT SANTUAI"
    },
    {
      "id_kecamatan": "6202230",
      "id_kabupaten": "6202",
      "nama_kecamatan": "ANTANG KALANG"
    },
    {
      "id_kecamatan": "6202231",
      "id_kabupaten": "6202",
      "nama_kecamatan": "TELAGA ANTANG"
    },
    {
      "id_kecamatan": "6203020",
      "id_kabupaten": "6203",
      "nama_kecamatan": "KAPUAS KUALA"
    },
    {
      "id_kecamatan": "6203021",
      "id_kabupaten": "6203",
      "nama_kecamatan": "TAMBAN CATUR"
    },
    {
      "id_kecamatan": "6203030",
      "id_kabupaten": "6203",
      "nama_kecamatan": "KAPUAS TIMUR"
    },
    {
      "id_kecamatan": "6203040",
      "id_kabupaten": "6203",
      "nama_kecamatan": "SELAT"
    },
    {
      "id_kecamatan": "6203041",
      "id_kabupaten": "6203",
      "nama_kecamatan": "BATAGUH"
    },
    {
      "id_kecamatan": "6203070",
      "id_kabupaten": "6203",
      "nama_kecamatan": "BASARANG"
    },
    {
      "id_kecamatan": "6203080",
      "id_kabupaten": "6203",
      "nama_kecamatan": "KAPUAS HILIR"
    },
    {
      "id_kecamatan": "6203090",
      "id_kabupaten": "6203",
      "nama_kecamatan": "PULAU PETAK"
    },
    {
      "id_kecamatan": "6203100",
      "id_kabupaten": "6203",
      "nama_kecamatan": "KAPUAS MURUNG"
    },
    {
      "id_kecamatan": "6203101",
      "id_kabupaten": "6203",
      "nama_kecamatan": "DADAHUP"
    },
    {
      "id_kecamatan": "6203110",
      "id_kabupaten": "6203",
      "nama_kecamatan": "KAPUAS BARAT"
    },
    {
      "id_kecamatan": "6203150",
      "id_kabupaten": "6203",
      "nama_kecamatan": "MANTANGAI"
    },
    {
      "id_kecamatan": "6203160",
      "id_kabupaten": "6203",
      "nama_kecamatan": "TIMPAH"
    },
    {
      "id_kecamatan": "6203170",
      "id_kabupaten": "6203",
      "nama_kecamatan": "KAPUAS TENGAH"
    },
    {
      "id_kecamatan": "6203171",
      "id_kabupaten": "6203",
      "nama_kecamatan": "PASAK TALAWANG"
    },
    {
      "id_kecamatan": "6203180",
      "id_kabupaten": "6203",
      "nama_kecamatan": "KAPUAS HULU"
    },
    {
      "id_kecamatan": "6203181",
      "id_kabupaten": "6203",
      "nama_kecamatan": "MANDAU TALAWANG"
    },
    {
      "id_kecamatan": "6204010",
      "id_kabupaten": "6204",
      "nama_kecamatan": "JENAMAS"
    },
    {
      "id_kecamatan": "6204020",
      "id_kabupaten": "6204",
      "nama_kecamatan": "DUSUN HILIR"
    },
    {
      "id_kecamatan": "6204030",
      "id_kabupaten": "6204",
      "nama_kecamatan": "KARAU KUALA"
    },
    {
      "id_kecamatan": "6204040",
      "id_kabupaten": "6204",
      "nama_kecamatan": "DUSUN SELATAN"
    },
    {
      "id_kecamatan": "6204050",
      "id_kabupaten": "6204",
      "nama_kecamatan": "DUSUN UTARA"
    },
    {
      "id_kecamatan": "6204060",
      "id_kabupaten": "6204",
      "nama_kecamatan": "GUNUNG BINTANG AWAI"
    },
    {
      "id_kecamatan": "6205010",
      "id_kabupaten": "6205",
      "nama_kecamatan": "MONTALLAT"
    },
    {
      "id_kecamatan": "6205020",
      "id_kabupaten": "6205",
      "nama_kecamatan": "GUNUNG TIMANG"
    },
    {
      "id_kecamatan": "6205030",
      "id_kabupaten": "6205",
      "nama_kecamatan": "GUNUNG PUREI"
    },
    {
      "id_kecamatan": "6205040",
      "id_kabupaten": "6205",
      "nama_kecamatan": "TEWEH TIMUR"
    },
    {
      "id_kecamatan": "6205050",
      "id_kabupaten": "6205",
      "nama_kecamatan": "TEWEH TENGAH"
    },
    {
      "id_kecamatan": "6205051",
      "id_kabupaten": "6205",
      "nama_kecamatan": "TEWEH  BARU"
    },
    {
      "id_kecamatan": "6205052",
      "id_kabupaten": "6205",
      "nama_kecamatan": "TEWEH SELATAN"
    },
    {
      "id_kecamatan": "6205060",
      "id_kabupaten": "6205",
      "nama_kecamatan": "LAHEI"
    },
    {
      "id_kecamatan": "6205061",
      "id_kabupaten": "6205",
      "nama_kecamatan": "LAHEI BARAT"
    },
    {
      "id_kecamatan": "6206010",
      "id_kabupaten": "6206",
      "nama_kecamatan": "JELAI"
    },
    {
      "id_kecamatan": "6206011",
      "id_kabupaten": "6206",
      "nama_kecamatan": "PANTAI LUNCI"
    },
    {
      "id_kecamatan": "6206020",
      "id_kabupaten": "6206",
      "nama_kecamatan": "SUKAMARA"
    },
    {
      "id_kecamatan": "6206030",
      "id_kabupaten": "6206",
      "nama_kecamatan": "BALAI RIAM"
    },
    {
      "id_kecamatan": "6206031",
      "id_kabupaten": "6206",
      "nama_kecamatan": "PERMATA KECUBUNG"
    },
    {
      "id_kecamatan": "6207010",
      "id_kabupaten": "6207",
      "nama_kecamatan": "BULIK"
    },
    {
      "id_kecamatan": "6207011",
      "id_kabupaten": "6207",
      "nama_kecamatan": "SEMATU JAYA"
    },
    {
      "id_kecamatan": "6207012",
      "id_kabupaten": "6207",
      "nama_kecamatan": "MENTHOBI RAYA"
    },
    {
      "id_kecamatan": "6207013",
      "id_kabupaten": "6207",
      "nama_kecamatan": "BULIK TIMUR"
    },
    {
      "id_kecamatan": "6207020",
      "id_kabupaten": "6207",
      "nama_kecamatan": "LAMANDAU"
    },
    {
      "id_kecamatan": "6207021",
      "id_kabupaten": "6207",
      "nama_kecamatan": "BELANTIKAN RAYA"
    },
    {
      "id_kecamatan": "6207030",
      "id_kabupaten": "6207",
      "nama_kecamatan": "DELANG"
    },
    {
      "id_kecamatan": "6207031",
      "id_kabupaten": "6207",
      "nama_kecamatan": "BATANGKAWA"
    },
    {
      "id_kecamatan": "6208010",
      "id_kabupaten": "6208",
      "nama_kecamatan": "SERUYAN HILIR"
    },
    {
      "id_kecamatan": "6208011",
      "id_kabupaten": "6208",
      "nama_kecamatan": "SERUYAN HILIR TIMUR"
    },
    {
      "id_kecamatan": "6208020",
      "id_kabupaten": "6208",
      "nama_kecamatan": "DANAU SEMBULUH"
    },
    {
      "id_kecamatan": "6208021",
      "id_kabupaten": "6208",
      "nama_kecamatan": "SERUYAN RAYA"
    },
    {
      "id_kecamatan": "6208030",
      "id_kabupaten": "6208",
      "nama_kecamatan": "HANAU"
    },
    {
      "id_kecamatan": "6208031",
      "id_kabupaten": "6208",
      "nama_kecamatan": "DANAU SELULUK"
    },
    {
      "id_kecamatan": "6208040",
      "id_kabupaten": "6208",
      "nama_kecamatan": "SERUYAN TENGAH"
    },
    {
      "id_kecamatan": "6208041",
      "id_kabupaten": "6208",
      "nama_kecamatan": "BATU AMPAR"
    },
    {
      "id_kecamatan": "6208050",
      "id_kabupaten": "6208",
      "nama_kecamatan": "SERUYAN HULU"
    },
    {
      "id_kecamatan": "6208051",
      "id_kabupaten": "6208",
      "nama_kecamatan": "SULING TAMBUN"
    },
    {
      "id_kecamatan": "6209010",
      "id_kabupaten": "6209",
      "nama_kecamatan": "KATINGAN KUALA"
    },
    {
      "id_kecamatan": "6209020",
      "id_kabupaten": "6209",
      "nama_kecamatan": "MENDAWAI"
    },
    {
      "id_kecamatan": "6209030",
      "id_kabupaten": "6209",
      "nama_kecamatan": "KAMIPANG"
    },
    {
      "id_kecamatan": "6209040",
      "id_kabupaten": "6209",
      "nama_kecamatan": "TASIK PAYAWAN"
    },
    {
      "id_kecamatan": "6209050",
      "id_kabupaten": "6209",
      "nama_kecamatan": "KATINGAN HILIR"
    },
    {
      "id_kecamatan": "6209060",
      "id_kabupaten": "6209",
      "nama_kecamatan": "TEWANG SANGALANG GARING"
    },
    {
      "id_kecamatan": "6209070",
      "id_kabupaten": "6209",
      "nama_kecamatan": "PULAU MALAN"
    },
    {
      "id_kecamatan": "6209080",
      "id_kabupaten": "6209",
      "nama_kecamatan": "KATINGAN TENGAH"
    },
    {
      "id_kecamatan": "6209090",
      "id_kabupaten": "6209",
      "nama_kecamatan": "SANAMAN MANTIKEI"
    },
    {
      "id_kecamatan": "6209091",
      "id_kabupaten": "6209",
      "nama_kecamatan": "PETAK MALAI"
    },
    {
      "id_kecamatan": "6209100",
      "id_kabupaten": "6209",
      "nama_kecamatan": "MARIKIT"
    },
    {
      "id_kecamatan": "6209110",
      "id_kabupaten": "6209",
      "nama_kecamatan": "KATINGAN HULU"
    },
    {
      "id_kecamatan": "6209111",
      "id_kabupaten": "6209",
      "nama_kecamatan": "BUKIT RAYA"
    },
    {
      "id_kecamatan": "6210010",
      "id_kabupaten": "6210",
      "nama_kecamatan": "KAHAYAN KUALA"
    },
    {
      "id_kecamatan": "6210011",
      "id_kabupaten": "6210",
      "nama_kecamatan": "SEBANGAU KUALA"
    },
    {
      "id_kecamatan": "6210020",
      "id_kabupaten": "6210",
      "nama_kecamatan": "PANDIH BATU"
    },
    {
      "id_kecamatan": "6210030",
      "id_kabupaten": "6210",
      "nama_kecamatan": "MALIKU"
    },
    {
      "id_kecamatan": "6210040",
      "id_kabupaten": "6210",
      "nama_kecamatan": "KAHAYAN HILIR"
    },
    {
      "id_kecamatan": "6210041",
      "id_kabupaten": "6210",
      "nama_kecamatan": "JABIREN RAYA"
    },
    {
      "id_kecamatan": "6210050",
      "id_kabupaten": "6210",
      "nama_kecamatan": "KAHAYAN TENGAH"
    },
    {
      "id_kecamatan": "6210060",
      "id_kabupaten": "6210",
      "nama_kecamatan": "BANAMA TINGANG"
    },
    {
      "id_kecamatan": "6211010",
      "id_kabupaten": "6211",
      "nama_kecamatan": "MANUHING"
    },
    {
      "id_kecamatan": "6211011",
      "id_kabupaten": "6211",
      "nama_kecamatan": "MANUHING RAYA"
    },
    {
      "id_kecamatan": "6211020",
      "id_kabupaten": "6211",
      "nama_kecamatan": "RUNGAN"
    },
    {
      "id_kecamatan": "6211021",
      "id_kabupaten": "6211",
      "nama_kecamatan": "RUNGAN HULU"
    },
    {
      "id_kecamatan": "6211022",
      "id_kabupaten": "6211",
      "nama_kecamatan": "RUNGAN BARAT"
    },
    {
      "id_kecamatan": "6211030",
      "id_kabupaten": "6211",
      "nama_kecamatan": "SEPANG"
    },
    {
      "id_kecamatan": "6211031",
      "id_kabupaten": "6211",
      "nama_kecamatan": "MIHING RAYA"
    },
    {
      "id_kecamatan": "6211040",
      "id_kabupaten": "6211",
      "nama_kecamatan": "KURUN"
    },
    {
      "id_kecamatan": "6211050",
      "id_kabupaten": "6211",
      "nama_kecamatan": "TEWAH"
    },
    {
      "id_kecamatan": "6211060",
      "id_kabupaten": "6211",
      "nama_kecamatan": "KAHAYAN HULU UTARA"
    },
    {
      "id_kecamatan": "6211061",
      "id_kabupaten": "6211",
      "nama_kecamatan": "DAMANG BATU"
    },
    {
      "id_kecamatan": "6211062",
      "id_kabupaten": "6211",
      "nama_kecamatan": "MIRI MANASA"
    },
    {
      "id_kecamatan": "6212010",
      "id_kabupaten": "6212",
      "nama_kecamatan": "BENUA LIMA"
    },
    {
      "id_kecamatan": "6212020",
      "id_kabupaten": "6212",
      "nama_kecamatan": "DUSUN TIMUR"
    },
    {
      "id_kecamatan": "6212021",
      "id_kabupaten": "6212",
      "nama_kecamatan": "PAJU EPAT"
    },
    {
      "id_kecamatan": "6212030",
      "id_kabupaten": "6212",
      "nama_kecamatan": "AWANG"
    },
    {
      "id_kecamatan": "6212040",
      "id_kabupaten": "6212",
      "nama_kecamatan": "PATANGKEP TUTUI"
    },
    {
      "id_kecamatan": "6212050",
      "id_kabupaten": "6212",
      "nama_kecamatan": "DUSUN TENGAH"
    },
    {
      "id_kecamatan": "6212051",
      "id_kabupaten": "6212",
      "nama_kecamatan": "RAREN BATUAH"
    },
    {
      "id_kecamatan": "6212052",
      "id_kabupaten": "6212",
      "nama_kecamatan": "PAKU"
    },
    {
      "id_kecamatan": "6212053",
      "id_kabupaten": "6212",
      "nama_kecamatan": "KARUSEN JANANG"
    },
    {
      "id_kecamatan": "6212060",
      "id_kabupaten": "6212",
      "nama_kecamatan": "PEMATANG KARAU"
    },
    {
      "id_kecamatan": "6213010",
      "id_kabupaten": "6213",
      "nama_kecamatan": "PERMATA INTAN"
    },
    {
      "id_kecamatan": "6213011",
      "id_kabupaten": "6213",
      "nama_kecamatan": "SUNGAI BABUAT"
    },
    {
      "id_kecamatan": "6213020",
      "id_kabupaten": "6213",
      "nama_kecamatan": "MURUNG"
    },
    {
      "id_kecamatan": "6213030",
      "id_kabupaten": "6213",
      "nama_kecamatan": "LAUNG TUHUP"
    },
    {
      "id_kecamatan": "6213031",
      "id_kabupaten": "6213",
      "nama_kecamatan": "BARITO TUHUP RAYA"
    },
    {
      "id_kecamatan": "6213040",
      "id_kabupaten": "6213",
      "nama_kecamatan": "TANAH SIANG"
    },
    {
      "id_kecamatan": "6213041",
      "id_kabupaten": "6213",
      "nama_kecamatan": "TANAH SIANG SELATAN"
    },
    {
      "id_kecamatan": "6213050",
      "id_kabupaten": "6213",
      "nama_kecamatan": "SUMBER BARITO"
    },
    {
      "id_kecamatan": "6213051",
      "id_kabupaten": "6213",
      "nama_kecamatan": "SERIBU RIAM"
    },
    {
      "id_kecamatan": "6213052",
      "id_kabupaten": "6213",
      "nama_kecamatan": "UUT MURUNG"
    },
    {
      "id_kecamatan": "6271010",
      "id_kabupaten": "6271",
      "nama_kecamatan": "PAHANDUT"
    },
    {
      "id_kecamatan": "6271011",
      "id_kabupaten": "6271",
      "nama_kecamatan": "SABANGAU"
    },
    {
      "id_kecamatan": "6271012",
      "id_kabupaten": "6271",
      "nama_kecamatan": "JEKAN RAYA"
    },
    {
      "id_kecamatan": "6271020",
      "id_kabupaten": "6271",
      "nama_kecamatan": "BUKIT BATU"
    },
    {
      "id_kecamatan": "6271021",
      "id_kabupaten": "6271",
      "nama_kecamatan": "RAKUMPIT"
    },
    {
      "id_kecamatan": "6301010",
      "id_kabupaten": "6301",
      "nama_kecamatan": "PANYIPATAN"
    },
    {
      "id_kecamatan": "6301020",
      "id_kabupaten": "6301",
      "nama_kecamatan": "TAKISUNG"
    },
    {
      "id_kecamatan": "6301030",
      "id_kabupaten": "6301",
      "nama_kecamatan": "KURAU"
    },
    {
      "id_kecamatan": "6301031",
      "id_kabupaten": "6301",
      "nama_kecamatan": "BUMI MAKMUR"
    },
    {
      "id_kecamatan": "6301040",
      "id_kabupaten": "6301",
      "nama_kecamatan": "BATI - BATI"
    },
    {
      "id_kecamatan": "6301050",
      "id_kabupaten": "6301",
      "nama_kecamatan": "TAMBANG ULANG"
    },
    {
      "id_kecamatan": "6301060",
      "id_kabupaten": "6301",
      "nama_kecamatan": "PELAIHARI"
    },
    {
      "id_kecamatan": "6301061",
      "id_kabupaten": "6301",
      "nama_kecamatan": "BAJUIN"
    },
    {
      "id_kecamatan": "6301070",
      "id_kabupaten": "6301",
      "nama_kecamatan": "BATU AMPAR"
    },
    {
      "id_kecamatan": "6301080",
      "id_kabupaten": "6301",
      "nama_kecamatan": "JORONG"
    },
    {
      "id_kecamatan": "6301090",
      "id_kabupaten": "6301",
      "nama_kecamatan": "KINTAP"
    },
    {
      "id_kecamatan": "6302010",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU SEMBILAN"
    },
    {
      "id_kecamatan": "6302020",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU LAUT BARAT"
    },
    {
      "id_kecamatan": "6302021",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU LAUT TANJUNG SELAYAR"
    },
    {
      "id_kecamatan": "6302030",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU LAUT SELATAN"
    },
    {
      "id_kecamatan": "6302031",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU LAUT KEPULAUAN"
    },
    {
      "id_kecamatan": "6302040",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU LAUT TIMUR"
    },
    {
      "id_kecamatan": "6302050",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU SEBUKU"
    },
    {
      "id_kecamatan": "6302060",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU LAUT UTARA"
    },
    {
      "id_kecamatan": "6302061",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PULAU LAUT TENGAH"
    },
    {
      "id_kecamatan": "6302120",
      "id_kabupaten": "6302",
      "nama_kecamatan": "KELUMPANG SELATAN"
    },
    {
      "id_kecamatan": "6302121",
      "id_kabupaten": "6302",
      "nama_kecamatan": "KELUMPANG HILIR"
    },
    {
      "id_kecamatan": "6302130",
      "id_kabupaten": "6302",
      "nama_kecamatan": "KELUMPANG HULU"
    },
    {
      "id_kecamatan": "6302140",
      "id_kabupaten": "6302",
      "nama_kecamatan": "HAMPANG"
    },
    {
      "id_kecamatan": "6302150",
      "id_kabupaten": "6302",
      "nama_kecamatan": "SUNGAI DURIAN"
    },
    {
      "id_kecamatan": "6302160",
      "id_kabupaten": "6302",
      "nama_kecamatan": "KELUMPANG TENGAH"
    },
    {
      "id_kecamatan": "6302161",
      "id_kabupaten": "6302",
      "nama_kecamatan": "KELUMPANG BARAT"
    },
    {
      "id_kecamatan": "6302170",
      "id_kabupaten": "6302",
      "nama_kecamatan": "KELUMPANG UTARA"
    },
    {
      "id_kecamatan": "6302180",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PAMUKAN SELATAN"
    },
    {
      "id_kecamatan": "6302190",
      "id_kabupaten": "6302",
      "nama_kecamatan": "SAMPANAHAN"
    },
    {
      "id_kecamatan": "6302200",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PAMUKAN UTARA"
    },
    {
      "id_kecamatan": "6302201",
      "id_kabupaten": "6302",
      "nama_kecamatan": "PAMUKAN BARAT"
    },
    {
      "id_kecamatan": "6303010",
      "id_kabupaten": "6303",
      "nama_kecamatan": "ALUH - ALUH"
    },
    {
      "id_kecamatan": "6303011",
      "id_kabupaten": "6303",
      "nama_kecamatan": "BERUNTUNG BARU"
    },
    {
      "id_kecamatan": "6303020",
      "id_kabupaten": "6303",
      "nama_kecamatan": "GAMBUT"
    },
    {
      "id_kecamatan": "6303030",
      "id_kabupaten": "6303",
      "nama_kecamatan": "KERTAK HANYAR"
    },
    {
      "id_kecamatan": "6303031",
      "id_kabupaten": "6303",
      "nama_kecamatan": "TATAH MAKMUR"
    },
    {
      "id_kecamatan": "6303040",
      "id_kabupaten": "6303",
      "nama_kecamatan": "SUNGAI TABUK"
    },
    {
      "id_kecamatan": "6303050",
      "id_kabupaten": "6303",
      "nama_kecamatan": "MARTAPURA"
    },
    {
      "id_kecamatan": "6303051",
      "id_kabupaten": "6303",
      "nama_kecamatan": "MARTAPURA TIMUR"
    },
    {
      "id_kecamatan": "6303052",
      "id_kabupaten": "6303",
      "nama_kecamatan": "MARTAPURA BARAT"
    },
    {
      "id_kecamatan": "6303060",
      "id_kabupaten": "6303",
      "nama_kecamatan": "ASTAMBUL"
    },
    {
      "id_kecamatan": "6303070",
      "id_kabupaten": "6303",
      "nama_kecamatan": "KARANG INTAN"
    },
    {
      "id_kecamatan": "6303080",
      "id_kabupaten": "6303",
      "nama_kecamatan": "ARANIO"
    },
    {
      "id_kecamatan": "6303090",
      "id_kabupaten": "6303",
      "nama_kecamatan": "SUNGAI PINANG"
    },
    {
      "id_kecamatan": "6303091",
      "id_kabupaten": "6303",
      "nama_kecamatan": "PARAMASAN"
    },
    {
      "id_kecamatan": "6303100",
      "id_kabupaten": "6303",
      "nama_kecamatan": "PENGARON"
    },
    {
      "id_kecamatan": "6303101",
      "id_kabupaten": "6303",
      "nama_kecamatan": "SAMBUNG MAKMUR"
    },
    {
      "id_kecamatan": "6303110",
      "id_kabupaten": "6303",
      "nama_kecamatan": "MATARAMAN"
    },
    {
      "id_kecamatan": "6303120",
      "id_kabupaten": "6303",
      "nama_kecamatan": "SIMPANG EMPAT"
    },
    {
      "id_kecamatan": "6303121",
      "id_kabupaten": "6303",
      "nama_kecamatan": "TELAGA BAUNTUNG"
    },
    {
      "id_kecamatan": "6304010",
      "id_kabupaten": "6304",
      "nama_kecamatan": "TABUNGANEN"
    },
    {
      "id_kecamatan": "6304020",
      "id_kabupaten": "6304",
      "nama_kecamatan": "TAMBAN"
    },
    {
      "id_kecamatan": "6304030",
      "id_kabupaten": "6304",
      "nama_kecamatan": "MEKAR SARI"
    },
    {
      "id_kecamatan": "6304040",
      "id_kabupaten": "6304",
      "nama_kecamatan": "ANJIR PASAR"
    },
    {
      "id_kecamatan": "6304050",
      "id_kabupaten": "6304",
      "nama_kecamatan": "ANJIR MUARA"
    },
    {
      "id_kecamatan": "6304060",
      "id_kabupaten": "6304",
      "nama_kecamatan": "ALALAK"
    },
    {
      "id_kecamatan": "6304070",
      "id_kabupaten": "6304",
      "nama_kecamatan": "MANDASTANA"
    },
    {
      "id_kecamatan": "6304071",
      "id_kabupaten": "6304",
      "nama_kecamatan": "JEJANGKIT"
    },
    {
      "id_kecamatan": "6304080",
      "id_kabupaten": "6304",
      "nama_kecamatan": "BELAWANG"
    },
    {
      "id_kecamatan": "6304090",
      "id_kabupaten": "6304",
      "nama_kecamatan": "WANARAYA"
    },
    {
      "id_kecamatan": "6304100",
      "id_kabupaten": "6304",
      "nama_kecamatan": "BARAMBAI"
    },
    {
      "id_kecamatan": "6304110",
      "id_kabupaten": "6304",
      "nama_kecamatan": "RANTAU BADAUH"
    },
    {
      "id_kecamatan": "6304120",
      "id_kabupaten": "6304",
      "nama_kecamatan": "CERBON"
    },
    {
      "id_kecamatan": "6304130",
      "id_kabupaten": "6304",
      "nama_kecamatan": "BAKUMPAI"
    },
    {
      "id_kecamatan": "6304140",
      "id_kabupaten": "6304",
      "nama_kecamatan": "MARABAHAN"
    },
    {
      "id_kecamatan": "6304150",
      "id_kabupaten": "6304",
      "nama_kecamatan": "TABUKAN"
    },
    {
      "id_kecamatan": "6304160",
      "id_kabupaten": "6304",
      "nama_kecamatan": "KURIPAN"
    },
    {
      "id_kecamatan": "6305010",
      "id_kabupaten": "6305",
      "nama_kecamatan": "BINUANG"
    },
    {
      "id_kecamatan": "6305011",
      "id_kabupaten": "6305",
      "nama_kecamatan": "HATUNGUN"
    },
    {
      "id_kecamatan": "6305020",
      "id_kabupaten": "6305",
      "nama_kecamatan": "TAPIN SELATAN"
    },
    {
      "id_kecamatan": "6305021",
      "id_kabupaten": "6305",
      "nama_kecamatan": "SALAM BABARIS"
    },
    {
      "id_kecamatan": "6305030",
      "id_kabupaten": "6305",
      "nama_kecamatan": "TAPIN TENGAH"
    },
    {
      "id_kecamatan": "6305040",
      "id_kabupaten": "6305",
      "nama_kecamatan": "BUNGUR"
    },
    {
      "id_kecamatan": "6305050",
      "id_kabupaten": "6305",
      "nama_kecamatan": "PIANI"
    },
    {
      "id_kecamatan": "6305060",
      "id_kabupaten": "6305",
      "nama_kecamatan": "LOKPAIKAT"
    },
    {
      "id_kecamatan": "6305070",
      "id_kabupaten": "6305",
      "nama_kecamatan": "TAPIN UTARA"
    },
    {
      "id_kecamatan": "6305080",
      "id_kabupaten": "6305",
      "nama_kecamatan": "BAKARANGAN"
    },
    {
      "id_kecamatan": "6305090",
      "id_kabupaten": "6305",
      "nama_kecamatan": "CANDI LARAS SELATAN"
    },
    {
      "id_kecamatan": "6305100",
      "id_kabupaten": "6305",
      "nama_kecamatan": "CANDI LARAS UTARA"
    },
    {
      "id_kecamatan": "6306010",
      "id_kabupaten": "6306",
      "nama_kecamatan": "PADANG BATUNG"
    },
    {
      "id_kecamatan": "6306020",
      "id_kabupaten": "6306",
      "nama_kecamatan": "LOKSADO"
    },
    {
      "id_kecamatan": "6306030",
      "id_kabupaten": "6306",
      "nama_kecamatan": "TELAGA LANGSAT"
    },
    {
      "id_kecamatan": "6306040",
      "id_kabupaten": "6306",
      "nama_kecamatan": "ANGKINANG"
    },
    {
      "id_kecamatan": "6306050",
      "id_kabupaten": "6306",
      "nama_kecamatan": "KANDANGAN"
    },
    {
      "id_kecamatan": "6306060",
      "id_kabupaten": "6306",
      "nama_kecamatan": "SUNGAI RAYA"
    },
    {
      "id_kecamatan": "6306070",
      "id_kabupaten": "6306",
      "nama_kecamatan": "SIMPUR"
    },
    {
      "id_kecamatan": "6306080",
      "id_kabupaten": "6306",
      "nama_kecamatan": "KALUMPANG"
    },
    {
      "id_kecamatan": "6306090",
      "id_kabupaten": "6306",
      "nama_kecamatan": "DAHA SELATAN"
    },
    {
      "id_kecamatan": "6306091",
      "id_kabupaten": "6306",
      "nama_kecamatan": "DAHA BARAT"
    },
    {
      "id_kecamatan": "6306100",
      "id_kabupaten": "6306",
      "nama_kecamatan": "DAHA UTARA"
    },
    {
      "id_kecamatan": "6307010",
      "id_kabupaten": "6307",
      "nama_kecamatan": "HARUYAN"
    },
    {
      "id_kecamatan": "6307020",
      "id_kabupaten": "6307",
      "nama_kecamatan": "BATU BENAWA"
    },
    {
      "id_kecamatan": "6307030",
      "id_kabupaten": "6307",
      "nama_kecamatan": "HANTAKAN"
    },
    {
      "id_kecamatan": "6307040",
      "id_kabupaten": "6307",
      "nama_kecamatan": "BATANG ALAI SELATAN"
    },
    {
      "id_kecamatan": "6307041",
      "id_kabupaten": "6307",
      "nama_kecamatan": "BATANG ALAI TIMUR"
    },
    {
      "id_kecamatan": "6307050",
      "id_kabupaten": "6307",
      "nama_kecamatan": "BARABAI"
    },
    {
      "id_kecamatan": "6307060",
      "id_kabupaten": "6307",
      "nama_kecamatan": "LABUAN AMAS SELATAN"
    },
    {
      "id_kecamatan": "6307070",
      "id_kabupaten": "6307",
      "nama_kecamatan": "LABUAN AMAS UTARA"
    },
    {
      "id_kecamatan": "6307080",
      "id_kabupaten": "6307",
      "nama_kecamatan": "PANDAWAN"
    },
    {
      "id_kecamatan": "6307090",
      "id_kabupaten": "6307",
      "nama_kecamatan": "BATANG ALAI UTARA"
    },
    {
      "id_kecamatan": "6307091",
      "id_kabupaten": "6307",
      "nama_kecamatan": "LIMPASU"
    },
    {
      "id_kecamatan": "6308010",
      "id_kabupaten": "6308",
      "nama_kecamatan": "DANAU PANGGANG"
    },
    {
      "id_kecamatan": "6308011",
      "id_kabupaten": "6308",
      "nama_kecamatan": "PAMINGGIR"
    },
    {
      "id_kecamatan": "6308020",
      "id_kabupaten": "6308",
      "nama_kecamatan": "BABIRIK"
    },
    {
      "id_kecamatan": "6308030",
      "id_kabupaten": "6308",
      "nama_kecamatan": "SUNGAI PANDAN"
    },
    {
      "id_kecamatan": "6308031",
      "id_kabupaten": "6308",
      "nama_kecamatan": "SUNGAI TABUKAN"
    },
    {
      "id_kecamatan": "6308040",
      "id_kabupaten": "6308",
      "nama_kecamatan": "AMUNTAI SELATAN"
    },
    {
      "id_kecamatan": "6308050",
      "id_kabupaten": "6308",
      "nama_kecamatan": "AMUNTAI TENGAH"
    },
    {
      "id_kecamatan": "6308060",
      "id_kabupaten": "6308",
      "nama_kecamatan": "BANJANG"
    },
    {
      "id_kecamatan": "6308070",
      "id_kabupaten": "6308",
      "nama_kecamatan": "AMUNTAI UTARA"
    },
    {
      "id_kecamatan": "6308071",
      "id_kabupaten": "6308",
      "nama_kecamatan": "HAUR GADING"
    },
    {
      "id_kecamatan": "6309010",
      "id_kabupaten": "6309",
      "nama_kecamatan": "BANUA LAWAS"
    },
    {
      "id_kecamatan": "6309020",
      "id_kabupaten": "6309",
      "nama_kecamatan": "PUGAAN"
    },
    {
      "id_kecamatan": "6309030",
      "id_kabupaten": "6309",
      "nama_kecamatan": "KELUA"
    },
    {
      "id_kecamatan": "6309040",
      "id_kabupaten": "6309",
      "nama_kecamatan": "MUARA HARUS"
    },
    {
      "id_kecamatan": "6309050",
      "id_kabupaten": "6309",
      "nama_kecamatan": "TANTA"
    },
    {
      "id_kecamatan": "6309060",
      "id_kabupaten": "6309",
      "nama_kecamatan": "TANJUNG"
    },
    {
      "id_kecamatan": "6309070",
      "id_kabupaten": "6309",
      "nama_kecamatan": "MURUNG PUDAK"
    },
    {
      "id_kecamatan": "6309080",
      "id_kabupaten": "6309",
      "nama_kecamatan": "HARUAI"
    },
    {
      "id_kecamatan": "6309081",
      "id_kabupaten": "6309",
      "nama_kecamatan": "BINTANG ARA"
    },
    {
      "id_kecamatan": "6309090",
      "id_kabupaten": "6309",
      "nama_kecamatan": "UPAU"
    },
    {
      "id_kecamatan": "6309100",
      "id_kabupaten": "6309",
      "nama_kecamatan": "MUARA UYA"
    },
    {
      "id_kecamatan": "6309110",
      "id_kabupaten": "6309",
      "nama_kecamatan": "JARO"
    },
    {
      "id_kecamatan": "6310010",
      "id_kabupaten": "6310",
      "nama_kecamatan": "KUSAN HILIR"
    },
    {
      "id_kecamatan": "6310020",
      "id_kabupaten": "6310",
      "nama_kecamatan": "SUNGAI LOBAN"
    },
    {
      "id_kecamatan": "6310030",
      "id_kabupaten": "6310",
      "nama_kecamatan": "SATUI"
    },
    {
      "id_kecamatan": "6310031",
      "id_kabupaten": "6310",
      "nama_kecamatan": "ANGSANA"
    },
    {
      "id_kecamatan": "6310040",
      "id_kabupaten": "6310",
      "nama_kecamatan": "KUSAN HULU"
    },
    {
      "id_kecamatan": "6310041",
      "id_kabupaten": "6310",
      "nama_kecamatan": "KURANJI"
    },
    {
      "id_kecamatan": "6310050",
      "id_kabupaten": "6310",
      "nama_kecamatan": "BATU LICIN"
    },
    {
      "id_kecamatan": "6310051",
      "id_kabupaten": "6310",
      "nama_kecamatan": "KARANG BINTANG"
    },
    {
      "id_kecamatan": "6310052",
      "id_kabupaten": "6310",
      "nama_kecamatan": "SIMPANG EMPAT"
    },
    {
      "id_kecamatan": "6310053",
      "id_kabupaten": "6310",
      "nama_kecamatan": "MANTEWE"
    },
    {
      "id_kecamatan": "6311010",
      "id_kabupaten": "6311",
      "nama_kecamatan": "LAMPIHONG"
    },
    {
      "id_kecamatan": "6311020",
      "id_kabupaten": "6311",
      "nama_kecamatan": "BATU MANDI"
    },
    {
      "id_kecamatan": "6311030",
      "id_kabupaten": "6311",
      "nama_kecamatan": "AWAYAN"
    },
    {
      "id_kecamatan": "6311031",
      "id_kabupaten": "6311",
      "nama_kecamatan": "TEBING TINGGI"
    },
    {
      "id_kecamatan": "6311040",
      "id_kabupaten": "6311",
      "nama_kecamatan": "PARINGIN"
    },
    {
      "id_kecamatan": "6311041",
      "id_kabupaten": "6311",
      "nama_kecamatan": "PARINGIN SELATAN"
    },
    {
      "id_kecamatan": "6311050",
      "id_kabupaten": "6311",
      "nama_kecamatan": "JUAI"
    },
    {
      "id_kecamatan": "6311060",
      "id_kabupaten": "6311",
      "nama_kecamatan": "HALONG"
    },
    {
      "id_kecamatan": "6371010",
      "id_kabupaten": "6371",
      "nama_kecamatan": "BANJARMASIN SELATAN"
    },
    {
      "id_kecamatan": "6371020",
      "id_kabupaten": "6371",
      "nama_kecamatan": "BANJARMASIN TIMUR"
    },
    {
      "id_kecamatan": "6371030",
      "id_kabupaten": "6371",
      "nama_kecamatan": "BANJARMASIN BARAT"
    },
    {
      "id_kecamatan": "6371031",
      "id_kabupaten": "6371",
      "nama_kecamatan": "BANJARMASIN TENGAH"
    },
    {
      "id_kecamatan": "6371040",
      "id_kabupaten": "6371",
      "nama_kecamatan": "BANJARMASIN UTARA"
    },
    {
      "id_kecamatan": "6372010",
      "id_kabupaten": "6372",
      "nama_kecamatan": "LANDASAN ULIN"
    },
    {
      "id_kecamatan": "6372011",
      "id_kabupaten": "6372",
      "nama_kecamatan": "LIANG ANGGANG"
    },
    {
      "id_kecamatan": "6372020",
      "id_kabupaten": "6372",
      "nama_kecamatan": "CEMPAKA"
    },
    {
      "id_kecamatan": "6372031",
      "id_kabupaten": "6372",
      "nama_kecamatan": "BANJAR BARU UTARA"
    },
    {
      "id_kecamatan": "6372032",
      "id_kabupaten": "6372",
      "nama_kecamatan": "BANJAR BARU SELATAN"
    },
    {
      "id_kecamatan": "6401010",
      "id_kabupaten": "6401",
      "nama_kecamatan": "BATU SOPANG"
    },
    {
      "id_kecamatan": "6401011",
      "id_kabupaten": "6401",
      "nama_kecamatan": "MUARA SAMU"
    },
    {
      "id_kecamatan": "6401021",
      "id_kabupaten": "6401",
      "nama_kecamatan": "BATU ENGAU"
    },
    {
      "id_kecamatan": "6401022",
      "id_kabupaten": "6401",
      "nama_kecamatan": "TANJUNG HARAPAN"
    },
    {
      "id_kecamatan": "6401030",
      "id_kabupaten": "6401",
      "nama_kecamatan": "PASIR BELENGKONG"
    },
    {
      "id_kecamatan": "6401040",
      "id_kabupaten": "6401",
      "nama_kecamatan": "TANAH GROGOT"
    },
    {
      "id_kecamatan": "6401050",
      "id_kabupaten": "6401",
      "nama_kecamatan": "KUARO"
    },
    {
      "id_kecamatan": "6401060",
      "id_kabupaten": "6401",
      "nama_kecamatan": "LONG IKIS"
    },
    {
      "id_kecamatan": "6401070",
      "id_kabupaten": "6401",
      "nama_kecamatan": "MUARA KOMAM"
    },
    {
      "id_kecamatan": "6401080",
      "id_kabupaten": "6401",
      "nama_kecamatan": "LONG KALI"
    },
    {
      "id_kecamatan": "6402010",
      "id_kabupaten": "6402",
      "nama_kecamatan": "BONGAN"
    },
    {
      "id_kecamatan": "6402020",
      "id_kabupaten": "6402",
      "nama_kecamatan": "JEMPANG"
    },
    {
      "id_kecamatan": "6402030",
      "id_kabupaten": "6402",
      "nama_kecamatan": "PENYINGGAHAN"
    },
    {
      "id_kecamatan": "6402040",
      "id_kabupaten": "6402",
      "nama_kecamatan": "MUARA PAHU"
    },
    {
      "id_kecamatan": "6402041",
      "id_kabupaten": "6402",
      "nama_kecamatan": "SILUQ NGURAI"
    },
    {
      "id_kecamatan": "6402050",
      "id_kabupaten": "6402",
      "nama_kecamatan": "MUARA LAWA"
    },
    {
      "id_kecamatan": "6402051",
      "id_kabupaten": "6402",
      "nama_kecamatan": "BENTIAN BESAR"
    },
    {
      "id_kecamatan": "6402060",
      "id_kabupaten": "6402",
      "nama_kecamatan": "DAMAI"
    },
    {
      "id_kecamatan": "6402061",
      "id_kabupaten": "6402",
      "nama_kecamatan": "NYUATAN"
    },
    {
      "id_kecamatan": "6402070",
      "id_kabupaten": "6402",
      "nama_kecamatan": "BARONG TONGKOK"
    },
    {
      "id_kecamatan": "6402071",
      "id_kabupaten": "6402",
      "nama_kecamatan": "LINGGANG BIGUNG"
    },
    {
      "id_kecamatan": "6402080",
      "id_kabupaten": "6402",
      "nama_kecamatan": "MELAK"
    },
    {
      "id_kecamatan": "6402081",
      "id_kabupaten": "6402",
      "nama_kecamatan": "SEKOLAQ DARAT"
    },
    {
      "id_kecamatan": "6402082",
      "id_kabupaten": "6402",
      "nama_kecamatan": "MANOR BULATN"
    },
    {
      "id_kecamatan": "6402090",
      "id_kabupaten": "6402",
      "nama_kecamatan": "LONG IRAM"
    },
    {
      "id_kecamatan": "6402091",
      "id_kabupaten": "6402",
      "nama_kecamatan": "TERING"
    },
    {
      "id_kecamatan": "6403010",
      "id_kabupaten": "6403",
      "nama_kecamatan": "SEMBOJA"
    },
    {
      "id_kecamatan": "6403020",
      "id_kabupaten": "6403",
      "nama_kecamatan": "MUARA JAWA"
    },
    {
      "id_kecamatan": "6403030",
      "id_kabupaten": "6403",
      "nama_kecamatan": "SANGA-SANGA"
    },
    {
      "id_kecamatan": "6403040",
      "id_kabupaten": "6403",
      "nama_kecamatan": "LOA JANAN"
    },
    {
      "id_kecamatan": "6403050",
      "id_kabupaten": "6403",
      "nama_kecamatan": "LOA KULU"
    },
    {
      "id_kecamatan": "6403060",
      "id_kabupaten": "6403",
      "nama_kecamatan": "MUARA MUNTAI"
    },
    {
      "id_kecamatan": "6403070",
      "id_kabupaten": "6403",
      "nama_kecamatan": "MUARA WIS"
    },
    {
      "id_kecamatan": "6403080",
      "id_kabupaten": "6403",
      "nama_kecamatan": "KOTABANGUN"
    },
    {
      "id_kecamatan": "6403090",
      "id_kabupaten": "6403",
      "nama_kecamatan": "TENGGARONG"
    },
    {
      "id_kecamatan": "6403100",
      "id_kabupaten": "6403",
      "nama_kecamatan": "SEBULU"
    },
    {
      "id_kecamatan": "6403110",
      "id_kabupaten": "6403",
      "nama_kecamatan": "TENGGARONG SEBERANG"
    },
    {
      "id_kecamatan": "6403120",
      "id_kabupaten": "6403",
      "nama_kecamatan": "ANGGANA"
    },
    {
      "id_kecamatan": "6403130",
      "id_kabupaten": "6403",
      "nama_kecamatan": "MUARA BADAK"
    },
    {
      "id_kecamatan": "6403140",
      "id_kabupaten": "6403",
      "nama_kecamatan": "MARANG KAYU"
    },
    {
      "id_kecamatan": "6403150",
      "id_kabupaten": "6403",
      "nama_kecamatan": "MUARA KAMAN"
    },
    {
      "id_kecamatan": "6403160",
      "id_kabupaten": "6403",
      "nama_kecamatan": "KENOHAN"
    },
    {
      "id_kecamatan": "6403170",
      "id_kabupaten": "6403",
      "nama_kecamatan": "KEMBANG JANGGUT"
    },
    {
      "id_kecamatan": "6403180",
      "id_kabupaten": "6403",
      "nama_kecamatan": "TABANG"
    },
    {
      "id_kecamatan": "6404010",
      "id_kabupaten": "6404",
      "nama_kecamatan": "MUARA ANCALONG"
    },
    {
      "id_kecamatan": "6404011",
      "id_kabupaten": "6404",
      "nama_kecamatan": "BUSANG"
    },
    {
      "id_kecamatan": "6404012",
      "id_kabupaten": "6404",
      "nama_kecamatan": "LONG MESANGAT"
    },
    {
      "id_kecamatan": "6404020",
      "id_kabupaten": "6404",
      "nama_kecamatan": "MUARA WAHAU"
    },
    {
      "id_kecamatan": "6404021",
      "id_kabupaten": "6404",
      "nama_kecamatan": "TELEN"
    },
    {
      "id_kecamatan": "6404022",
      "id_kabupaten": "6404",
      "nama_kecamatan": "KONGBENG"
    },
    {
      "id_kecamatan": "6404030",
      "id_kabupaten": "6404",
      "nama_kecamatan": "MUARA BENGKAL"
    },
    {
      "id_kecamatan": "6404031",
      "id_kabupaten": "6404",
      "nama_kecamatan": "BATU AMPAR"
    },
    {
      "id_kecamatan": "6404040",
      "id_kabupaten": "6404",
      "nama_kecamatan": "SANGATTA UTARA"
    },
    {
      "id_kecamatan": "6404041",
      "id_kabupaten": "6404",
      "nama_kecamatan": "BENGALON"
    },
    {
      "id_kecamatan": "6404042",
      "id_kabupaten": "6404",
      "nama_kecamatan": "TELUK PANDAN"
    },
    {
      "id_kecamatan": "6404043",
      "id_kabupaten": "6404",
      "nama_kecamatan": "SANGATTA SELATAN"
    },
    {
      "id_kecamatan": "6404044",
      "id_kabupaten": "6404",
      "nama_kecamatan": "RANTAU PULUNG"
    },
    {
      "id_kecamatan": "6404050",
      "id_kabupaten": "6404",
      "nama_kecamatan": "SANGKULIRANG"
    },
    {
      "id_kecamatan": "6404051",
      "id_kabupaten": "6404",
      "nama_kecamatan": "KALIORANG"
    },
    {
      "id_kecamatan": "6404052",
      "id_kabupaten": "6404",
      "nama_kecamatan": "SANDARAN"
    },
    {
      "id_kecamatan": "6404053",
      "id_kabupaten": "6404",
      "nama_kecamatan": "KAUBUN"
    },
    {
      "id_kecamatan": "6404054",
      "id_kabupaten": "6404",
      "nama_kecamatan": "KARANGAN"
    },
    {
      "id_kecamatan": "6405010",
      "id_kabupaten": "6405",
      "nama_kecamatan": "KELAY"
    },
    {
      "id_kecamatan": "6405020",
      "id_kabupaten": "6405",
      "nama_kecamatan": "TALISAYAN"
    },
    {
      "id_kecamatan": "6405021",
      "id_kabupaten": "6405",
      "nama_kecamatan": "TABALAR"
    },
    {
      "id_kecamatan": "6405030",
      "id_kabupaten": "6405",
      "nama_kecamatan": "BIDUK BIDUK"
    },
    {
      "id_kecamatan": "6405040",
      "id_kabupaten": "6405",
      "nama_kecamatan": "PULAU DERAWAN"
    },
    {
      "id_kecamatan": "6405041",
      "id_kabupaten": "6405",
      "nama_kecamatan": "MARATUA"
    },
    {
      "id_kecamatan": "6405050",
      "id_kabupaten": "6405",
      "nama_kecamatan": "SAMBALIUNG"
    },
    {
      "id_kecamatan": "6405060",
      "id_kabupaten": "6405",
      "nama_kecamatan": "TANJUNG REDEB"
    },
    {
      "id_kecamatan": "6405070",
      "id_kabupaten": "6405",
      "nama_kecamatan": "GUNUNG TABUR"
    },
    {
      "id_kecamatan": "6405080",
      "id_kabupaten": "6405",
      "nama_kecamatan": "SEGAH"
    },
    {
      "id_kecamatan": "6405090",
      "id_kabupaten": "6405",
      "nama_kecamatan": "TELUK BAYUR"
    },
    {
      "id_kecamatan": "6405100",
      "id_kabupaten": "6405",
      "nama_kecamatan": "BATU PUTIH"
    },
    {
      "id_kecamatan": "6405110",
      "id_kabupaten": "6405",
      "nama_kecamatan": "BIATAN"
    },
    {
      "id_kecamatan": "6409010",
      "id_kabupaten": "6409",
      "nama_kecamatan": "BABULU"
    },
    {
      "id_kecamatan": "6409020",
      "id_kabupaten": "6409",
      "nama_kecamatan": "WARU"
    },
    {
      "id_kecamatan": "6409030",
      "id_kabupaten": "6409",
      "nama_kecamatan": "PENAJAM"
    },
    {
      "id_kecamatan": "6409040",
      "id_kabupaten": "6409",
      "nama_kecamatan": "SEPAKU"
    },
    {
      "id_kecamatan": "6411010",
      "id_kabupaten": "6411",
      "nama_kecamatan": "LAHAM"
    },
    {
      "id_kecamatan": "6411020",
      "id_kabupaten": "6411",
      "nama_kecamatan": "LONG HUBUNG"
    },
    {
      "id_kecamatan": "6411030",
      "id_kabupaten": "6411",
      "nama_kecamatan": "LONG BAGUN"
    },
    {
      "id_kecamatan": "6411040",
      "id_kabupaten": "6411",
      "nama_kecamatan": "LONG PAHANGAI"
    },
    {
      "id_kecamatan": "6411050",
      "id_kabupaten": "6411",
      "nama_kecamatan": "LONG APARI"
    },
    {
      "id_kecamatan": "6471010",
      "id_kabupaten": "6471",
      "nama_kecamatan": "BALIKPAPAN SELATAN"
    },
    {
      "id_kecamatan": "6471011",
      "id_kabupaten": "6471",
      "nama_kecamatan": "BALIKPAPAN KOTA"
    },
    {
      "id_kecamatan": "6471020",
      "id_kabupaten": "6471",
      "nama_kecamatan": "BALIKPAPAN TIMUR"
    },
    {
      "id_kecamatan": "6471030",
      "id_kabupaten": "6471",
      "nama_kecamatan": "BALIKPAPAN UTARA"
    },
    {
      "id_kecamatan": "6471040",
      "id_kabupaten": "6471",
      "nama_kecamatan": "BALIKPAPAN TENGAH"
    },
    {
      "id_kecamatan": "6471050",
      "id_kabupaten": "6471",
      "nama_kecamatan": "BALIKPAPAN BARAT"
    },
    {
      "id_kecamatan": "6472010",
      "id_kabupaten": "6472",
      "nama_kecamatan": "PALARAN"
    },
    {
      "id_kecamatan": "6472020",
      "id_kabupaten": "6472",
      "nama_kecamatan": "SAMARINDA ILIR"
    },
    {
      "id_kecamatan": "6472021",
      "id_kabupaten": "6472",
      "nama_kecamatan": "SAMARINDA KOTA"
    },
    {
      "id_kecamatan": "6472022",
      "id_kabupaten": "6472",
      "nama_kecamatan": "SAMBUTAN"
    },
    {
      "id_kecamatan": "6472030",
      "id_kabupaten": "6472",
      "nama_kecamatan": "SAMARINDA SEBERANG"
    },
    {
      "id_kecamatan": "6472031",
      "id_kabupaten": "6472",
      "nama_kecamatan": "LOA JANAN ILIR"
    },
    {
      "id_kecamatan": "6472040",
      "id_kabupaten": "6472",
      "nama_kecamatan": "SUNGAI KUNJANG"
    },
    {
      "id_kecamatan": "6472050",
      "id_kabupaten": "6472",
      "nama_kecamatan": "SAMARINDA ULU"
    },
    {
      "id_kecamatan": "6472060",
      "id_kabupaten": "6472",
      "nama_kecamatan": "SAMARINDA UTARA"
    },
    {
      "id_kecamatan": "6472061",
      "id_kabupaten": "6472",
      "nama_kecamatan": "SUNGAI PINANG"
    },
    {
      "id_kecamatan": "6474010",
      "id_kabupaten": "6474",
      "nama_kecamatan": "BONTANG SELATAN"
    },
    {
      "id_kecamatan": "6474020",
      "id_kabupaten": "6474",
      "nama_kecamatan": "BONTANG UTARA"
    },
    {
      "id_kecamatan": "6474030",
      "id_kabupaten": "6474",
      "nama_kecamatan": "BONTANG BARAT"
    },
    {
      "id_kecamatan": "6501010",
      "id_kabupaten": "6501",
      "nama_kecamatan": "SUNGAI BOH"
    },
    {
      "id_kecamatan": "6501020",
      "id_kabupaten": "6501",
      "nama_kecamatan": "KAYAN SELATAN"
    },
    {
      "id_kecamatan": "6501030",
      "id_kabupaten": "6501",
      "nama_kecamatan": "KAYAN HULU"
    },
    {
      "id_kecamatan": "6501040",
      "id_kabupaten": "6501",
      "nama_kecamatan": "KAYAN HILIR"
    },
    {
      "id_kecamatan": "6501050",
      "id_kabupaten": "6501",
      "nama_kecamatan": "PUJUNGAN"
    },
    {
      "id_kecamatan": "6501060",
      "id_kabupaten": "6501",
      "nama_kecamatan": "BAHAU HULU"
    },
    {
      "id_kecamatan": "6501070",
      "id_kabupaten": "6501",
      "nama_kecamatan": "SUNGAI TUBU"
    },
    {
      "id_kecamatan": "6501080",
      "id_kabupaten": "6501",
      "nama_kecamatan": "MALINAU SELATAN HULU"
    },
    {
      "id_kecamatan": "6501090",
      "id_kabupaten": "6501",
      "nama_kecamatan": "MALINAU SELATAN"
    },
    {
      "id_kecamatan": "6501100",
      "id_kabupaten": "6501",
      "nama_kecamatan": "MALINAU SELATAN HILIR"
    },
    {
      "id_kecamatan": "6501110",
      "id_kabupaten": "6501",
      "nama_kecamatan": "MENTARANG"
    },
    {
      "id_kecamatan": "6501120",
      "id_kabupaten": "6501",
      "nama_kecamatan": "MENTARANG HULU"
    },
    {
      "id_kecamatan": "6501130",
      "id_kabupaten": "6501",
      "nama_kecamatan": "MALINAU UTARA"
    },
    {
      "id_kecamatan": "6501140",
      "id_kabupaten": "6501",
      "nama_kecamatan": "MALINAU BARAT"
    },
    {
      "id_kecamatan": "6501150",
      "id_kabupaten": "6501",
      "nama_kecamatan": "MALINAU KOTA"
    },
    {
      "id_kecamatan": "6502010",
      "id_kabupaten": "6502",
      "nama_kecamatan": "PESO"
    },
    {
      "id_kecamatan": "6502020",
      "id_kabupaten": "6502",
      "nama_kecamatan": "PESO HILIR"
    },
    {
      "id_kecamatan": "6502030",
      "id_kabupaten": "6502",
      "nama_kecamatan": "TANJUNG PALAS BARAT"
    },
    {
      "id_kecamatan": "6502040",
      "id_kabupaten": "6502",
      "nama_kecamatan": "TANJUNG PALAS"
    },
    {
      "id_kecamatan": "6502050",
      "id_kabupaten": "6502",
      "nama_kecamatan": "TANJUNG SELOR"
    },
    {
      "id_kecamatan": "6502060",
      "id_kabupaten": "6502",
      "nama_kecamatan": "TANJUNG PALAS TIMUR"
    },
    {
      "id_kecamatan": "6502070",
      "id_kabupaten": "6502",
      "nama_kecamatan": "TANJUNG PALAS TENGAH"
    },
    {
      "id_kecamatan": "6502080",
      "id_kabupaten": "6502",
      "nama_kecamatan": "TANJUNG PALAS UTARA"
    },
    {
      "id_kecamatan": "6502090",
      "id_kabupaten": "6502",
      "nama_kecamatan": "SEKATAK"
    },
    {
      "id_kecamatan": "6502100",
      "id_kabupaten": "6502",
      "nama_kecamatan": "BUNYU"
    },
    {
      "id_kecamatan": "6503010",
      "id_kabupaten": "6503",
      "nama_kecamatan": "MURUK RIAN"
    },
    {
      "id_kecamatan": "6503020",
      "id_kabupaten": "6503",
      "nama_kecamatan": "SESAYAP"
    },
    {
      "id_kecamatan": "6503030",
      "id_kabupaten": "6503",
      "nama_kecamatan": "BETAYAU"
    },
    {
      "id_kecamatan": "6503040",
      "id_kabupaten": "6503",
      "nama_kecamatan": "SESAYAP HILIR"
    },
    {
      "id_kecamatan": "6503050",
      "id_kabupaten": "6503",
      "nama_kecamatan": "TANA LIA"
    },
    {
      "id_kecamatan": "6504010",
      "id_kabupaten": "6504",
      "nama_kecamatan": "KRAYAN SELATAN"
    },
    {
      "id_kecamatan": "6504020",
      "id_kabupaten": "6504",
      "nama_kecamatan": "KRAYAN"
    },
    {
      "id_kecamatan": "6504030",
      "id_kabupaten": "6504",
      "nama_kecamatan": "LUMBIS OGONG"
    },
    {
      "id_kecamatan": "6504040",
      "id_kabupaten": "6504",
      "nama_kecamatan": "LUMBIS"
    },
    {
      "id_kecamatan": "6504050",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEMBAKUNG ATULAI"
    },
    {
      "id_kecamatan": "6504060",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEMBAKUNG"
    },
    {
      "id_kecamatan": "6504070",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEBUKU"
    },
    {
      "id_kecamatan": "6504080",
      "id_kabupaten": "6504",
      "nama_kecamatan": "TULIN ONSOI"
    },
    {
      "id_kecamatan": "6504090",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEI MENGGARIS"
    },
    {
      "id_kecamatan": "6504100",
      "id_kabupaten": "6504",
      "nama_kecamatan": "NUNUKAN"
    },
    {
      "id_kecamatan": "6504110",
      "id_kabupaten": "6504",
      "nama_kecamatan": "NUNUKAN SELATAN"
    },
    {
      "id_kecamatan": "6504120",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEBATIK BARAT"
    },
    {
      "id_kecamatan": "6504130",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEBATIK"
    },
    {
      "id_kecamatan": "6504140",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEBATIK TIMUR"
    },
    {
      "id_kecamatan": "6504150",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEBATIK TENGAH"
    },
    {
      "id_kecamatan": "6504160",
      "id_kabupaten": "6504",
      "nama_kecamatan": "SEBATIK UTARA"
    },
    {
      "id_kecamatan": "6571010",
      "id_kabupaten": "6571",
      "nama_kecamatan": "TARAKAN TIMUR"
    },
    {
      "id_kecamatan": "6571020",
      "id_kabupaten": "6571",
      "nama_kecamatan": "TARAKAN TENGAH"
    },
    {
      "id_kecamatan": "6571030",
      "id_kabupaten": "6571",
      "nama_kecamatan": "TARAKAN BARAT"
    },
    {
      "id_kecamatan": "6571040",
      "id_kabupaten": "6571",
      "nama_kecamatan": "TARAKAN UTARA"
    },
    {
      "id_kecamatan": "7101021",
      "id_kabupaten": "7101",
      "nama_kecamatan": "DUMOGA BARAT"
    },
    {
      "id_kecamatan": "7101022",
      "id_kabupaten": "7101",
      "nama_kecamatan": "DUMOGA UTARA"
    },
    {
      "id_kecamatan": "7101023",
      "id_kabupaten": "7101",
      "nama_kecamatan": "DUMOGA TIMUR"
    },
    {
      "id_kecamatan": "7101024",
      "id_kabupaten": "7101",
      "nama_kecamatan": "DUMOGA TENGAH"
    },
    {
      "id_kecamatan": "7101025",
      "id_kabupaten": "7101",
      "nama_kecamatan": "DUMOGA TENGGARA"
    },
    {
      "id_kecamatan": "7101026",
      "id_kabupaten": "7101",
      "nama_kecamatan": "DUMOGA"
    },
    {
      "id_kecamatan": "7101060",
      "id_kabupaten": "7101",
      "nama_kecamatan": "LOLAYAN"
    },
    {
      "id_kecamatan": "7101081",
      "id_kabupaten": "7101",
      "nama_kecamatan": "PASSI BARAT"
    },
    {
      "id_kecamatan": "7101082",
      "id_kabupaten": "7101",
      "nama_kecamatan": "PASSI TIMUR"
    },
    {
      "id_kecamatan": "7101083",
      "id_kabupaten": "7101",
      "nama_kecamatan": "BILALANG"
    },
    {
      "id_kecamatan": "7101090",
      "id_kabupaten": "7101",
      "nama_kecamatan": "POIGAR"
    },
    {
      "id_kecamatan": "7101100",
      "id_kabupaten": "7101",
      "nama_kecamatan": "BOLAANG"
    },
    {
      "id_kecamatan": "7101101",
      "id_kabupaten": "7101",
      "nama_kecamatan": "BOLAANG TIMUR"
    },
    {
      "id_kecamatan": "7101110",
      "id_kabupaten": "7101",
      "nama_kecamatan": "LOLAK"
    },
    {
      "id_kecamatan": "7101120",
      "id_kabupaten": "7101",
      "nama_kecamatan": "SANGTOMBOLANG"
    },
    {
      "id_kecamatan": "7102091",
      "id_kabupaten": "7102",
      "nama_kecamatan": "LANGOWAN TIMUR"
    },
    {
      "id_kecamatan": "7102092",
      "id_kabupaten": "7102",
      "nama_kecamatan": "LANGOWAN BARAT"
    },
    {
      "id_kecamatan": "7102093",
      "id_kabupaten": "7102",
      "nama_kecamatan": "LANGOWAN SELATAN"
    },
    {
      "id_kecamatan": "7102094",
      "id_kabupaten": "7102",
      "nama_kecamatan": "LANGOWAN UTARA"
    },
    {
      "id_kecamatan": "7102110",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TOMPASO"
    },
    {
      "id_kecamatan": "7102111",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TOMPASO BARAT"
    },
    {
      "id_kecamatan": "7102120",
      "id_kabupaten": "7102",
      "nama_kecamatan": "KAWANGKOAN"
    },
    {
      "id_kecamatan": "7102121",
      "id_kabupaten": "7102",
      "nama_kecamatan": "KAWANGKOAN BARAT"
    },
    {
      "id_kecamatan": "7102122",
      "id_kabupaten": "7102",
      "nama_kecamatan": "KAWANGKOAN UTARA"
    },
    {
      "id_kecamatan": "7102130",
      "id_kabupaten": "7102",
      "nama_kecamatan": "SONDER"
    },
    {
      "id_kecamatan": "7102160",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TOMBARIRI"
    },
    {
      "id_kecamatan": "7102161",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TOMBARIRI TIMUR"
    },
    {
      "id_kecamatan": "7102170",
      "id_kabupaten": "7102",
      "nama_kecamatan": "PINELENG"
    },
    {
      "id_kecamatan": "7102171",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TOMBULU"
    },
    {
      "id_kecamatan": "7102172",
      "id_kabupaten": "7102",
      "nama_kecamatan": "MANDOLANG"
    },
    {
      "id_kecamatan": "7102190",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TONDANO BARAT"
    },
    {
      "id_kecamatan": "7102191",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TONDANO SELATAN"
    },
    {
      "id_kecamatan": "7102200",
      "id_kabupaten": "7102",
      "nama_kecamatan": "REMBOKEN"
    },
    {
      "id_kecamatan": "7102210",
      "id_kabupaten": "7102",
      "nama_kecamatan": "KAKAS"
    },
    {
      "id_kecamatan": "7102211",
      "id_kabupaten": "7102",
      "nama_kecamatan": "KAKAS BARAT"
    },
    {
      "id_kecamatan": "7102220",
      "id_kabupaten": "7102",
      "nama_kecamatan": "LEMBEAN TIMUR"
    },
    {
      "id_kecamatan": "7102230",
      "id_kabupaten": "7102",
      "nama_kecamatan": "ERIS"
    },
    {
      "id_kecamatan": "7102240",
      "id_kabupaten": "7102",
      "nama_kecamatan": "KOMBI"
    },
    {
      "id_kecamatan": "7102250",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TONDANO TIMUR"
    },
    {
      "id_kecamatan": "7102251",
      "id_kabupaten": "7102",
      "nama_kecamatan": "TONDANO UTARA"
    },
    {
      "id_kecamatan": "7103040",
      "id_kabupaten": "7103",
      "nama_kecamatan": "MANGANITU SELATAN"
    },
    {
      "id_kecamatan": "7103041",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TATOARENG"
    },
    {
      "id_kecamatan": "7103050",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TAMAKO"
    },
    {
      "id_kecamatan": "7103060",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TABUKAN SELATAN"
    },
    {
      "id_kecamatan": "7103061",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TABUKAN SELATAN TENGAH"
    },
    {
      "id_kecamatan": "7103062",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TABUKAN SELATAN TENGGARA"
    },
    {
      "id_kecamatan": "7103070",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TABUKAN TENGAH"
    },
    {
      "id_kecamatan": "7103080",
      "id_kabupaten": "7103",
      "nama_kecamatan": "MANGANITU"
    },
    {
      "id_kecamatan": "7103090",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TAHUNA"
    },
    {
      "id_kecamatan": "7103091",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TAHUNA TIMUR"
    },
    {
      "id_kecamatan": "7103092",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TAHUNA BARAT"
    },
    {
      "id_kecamatan": "7103100",
      "id_kabupaten": "7103",
      "nama_kecamatan": "TABUKAN UTARA"
    },
    {
      "id_kecamatan": "7103101",
      "id_kabupaten": "7103",
      "nama_kecamatan": "NUSA TABUKAN"
    },
    {
      "id_kecamatan": "7103102",
      "id_kabupaten": "7103",
      "nama_kecamatan": "KEPULAUAN MARORE"
    },
    {
      "id_kecamatan": "7103110",
      "id_kabupaten": "7103",
      "nama_kecamatan": "KENDAHE"
    },
    {
      "id_kecamatan": "7104010",
      "id_kabupaten": "7104",
      "nama_kecamatan": "KABARUAN"
    },
    {
      "id_kecamatan": "7104011",
      "id_kabupaten": "7104",
      "nama_kecamatan": "DAMAU"
    },
    {
      "id_kecamatan": "7104020",
      "id_kabupaten": "7104",
      "nama_kecamatan": "LIRUNG"
    },
    {
      "id_kecamatan": "7104021",
      "id_kabupaten": "7104",
      "nama_kecamatan": "SALIBABU"
    },
    {
      "id_kecamatan": "7104022",
      "id_kabupaten": "7104",
      "nama_kecamatan": "KALONGAN"
    },
    {
      "id_kecamatan": "7104023",
      "id_kabupaten": "7104",
      "nama_kecamatan": "MORONGE"
    },
    {
      "id_kecamatan": "7104030",
      "id_kabupaten": "7104",
      "nama_kecamatan": "MELONGUANE"
    },
    {
      "id_kecamatan": "7104031",
      "id_kabupaten": "7104",
      "nama_kecamatan": "MELONGUANE TIMUR"
    },
    {
      "id_kecamatan": "7104040",
      "id_kabupaten": "7104",
      "nama_kecamatan": "BEO"
    },
    {
      "id_kecamatan": "7104041",
      "id_kabupaten": "7104",
      "nama_kecamatan": "BEO UTARA"
    },
    {
      "id_kecamatan": "7104042",
      "id_kabupaten": "7104",
      "nama_kecamatan": "BEO SELATAN"
    },
    {
      "id_kecamatan": "7104050",
      "id_kabupaten": "7104",
      "nama_kecamatan": "RAINIS"
    },
    {
      "id_kecamatan": "7104051",
      "id_kabupaten": "7104",
      "nama_kecamatan": "TAMPA NA'MMA"
    },
    {
      "id_kecamatan": "7104052",
      "id_kabupaten": "7104",
      "nama_kecamatan": "PULUTAN"
    },
    {
      "id_kecamatan": "7104060",
      "id_kabupaten": "7104",
      "nama_kecamatan": "ESSANG"
    },
    {
      "id_kecamatan": "7104061",
      "id_kabupaten": "7104",
      "nama_kecamatan": "ESSANG SELATAN"
    },
    {
      "id_kecamatan": "7104070",
      "id_kabupaten": "7104",
      "nama_kecamatan": "GEMEH"
    },
    {
      "id_kecamatan": "7104080",
      "id_kabupaten": "7104",
      "nama_kecamatan": "NANUSA"
    },
    {
      "id_kecamatan": "7104081",
      "id_kabupaten": "7104",
      "nama_kecamatan": "MIANGAS"
    },
    {
      "id_kecamatan": "7105010",
      "id_kabupaten": "7105",
      "nama_kecamatan": "MODOINDING"
    },
    {
      "id_kecamatan": "7105020",
      "id_kabupaten": "7105",
      "nama_kecamatan": "TOMPASO BARU"
    },
    {
      "id_kecamatan": "7105021",
      "id_kabupaten": "7105",
      "nama_kecamatan": "MAESAAN"
    },
    {
      "id_kecamatan": "7105070",
      "id_kabupaten": "7105",
      "nama_kecamatan": "RANOYAPO"
    },
    {
      "id_kecamatan": "7105080",
      "id_kabupaten": "7105",
      "nama_kecamatan": "MOTOLING"
    },
    {
      "id_kecamatan": "7105081",
      "id_kabupaten": "7105",
      "nama_kecamatan": "KUMELEMBUAI"
    },
    {
      "id_kecamatan": "7105082",
      "id_kabupaten": "7105",
      "nama_kecamatan": "MOTOLING BARAT"
    },
    {
      "id_kecamatan": "7105083",
      "id_kabupaten": "7105",
      "nama_kecamatan": "MOTOLING TIMUR"
    },
    {
      "id_kecamatan": "7105090",
      "id_kabupaten": "7105",
      "nama_kecamatan": "SINONSAYANG"
    },
    {
      "id_kecamatan": "7105100",
      "id_kabupaten": "7105",
      "nama_kecamatan": "TENGA"
    },
    {
      "id_kecamatan": "7105111",
      "id_kabupaten": "7105",
      "nama_kecamatan": "AMURANG"
    },
    {
      "id_kecamatan": "7105112",
      "id_kabupaten": "7105",
      "nama_kecamatan": "AMURANG BARAT"
    },
    {
      "id_kecamatan": "7105113",
      "id_kabupaten": "7105",
      "nama_kecamatan": "AMURANG TIMUR"
    },
    {
      "id_kecamatan": "7105120",
      "id_kabupaten": "7105",
      "nama_kecamatan": "TARERAN"
    },
    {
      "id_kecamatan": "7105121",
      "id_kabupaten": "7105",
      "nama_kecamatan": "SULTA"
    },
    {
      "id_kecamatan": "7105130",
      "id_kabupaten": "7105",
      "nama_kecamatan": "TUMPAAN"
    },
    {
      "id_kecamatan": "7105131",
      "id_kabupaten": "7105",
      "nama_kecamatan": "TATAPAAN"
    },
    {
      "id_kecamatan": "7106010",
      "id_kabupaten": "7106",
      "nama_kecamatan": "KEMA"
    },
    {
      "id_kecamatan": "7106020",
      "id_kabupaten": "7106",
      "nama_kecamatan": "KAUDITAN"
    },
    {
      "id_kecamatan": "7106030",
      "id_kabupaten": "7106",
      "nama_kecamatan": "AIRMADIDI"
    },
    {
      "id_kecamatan": "7106040",
      "id_kabupaten": "7106",
      "nama_kecamatan": "KALAWAT"
    },
    {
      "id_kecamatan": "7106050",
      "id_kabupaten": "7106",
      "nama_kecamatan": "DIMEMBE"
    },
    {
      "id_kecamatan": "7106051",
      "id_kabupaten": "7106",
      "nama_kecamatan": "TALAWAAN"
    },
    {
      "id_kecamatan": "7106060",
      "id_kabupaten": "7106",
      "nama_kecamatan": "WORI"
    },
    {
      "id_kecamatan": "7106070",
      "id_kabupaten": "7106",
      "nama_kecamatan": "LIKUPANG BARAT"
    },
    {
      "id_kecamatan": "7106080",
      "id_kabupaten": "7106",
      "nama_kecamatan": "LIKUPANG TIMUR"
    },
    {
      "id_kecamatan": "7106081",
      "id_kabupaten": "7106",
      "nama_kecamatan": "LIKUPANG SELATAN"
    },
    {
      "id_kecamatan": "7107010",
      "id_kabupaten": "7107",
      "nama_kecamatan": "SANGKUB"
    },
    {
      "id_kecamatan": "7107020",
      "id_kabupaten": "7107",
      "nama_kecamatan": "BINTAUNA"
    },
    {
      "id_kecamatan": "7107030",
      "id_kabupaten": "7107",
      "nama_kecamatan": "BOLANG ITANG TIMUR"
    },
    {
      "id_kecamatan": "7107040",
      "id_kabupaten": "7107",
      "nama_kecamatan": "BOLANG ITANG BARAT"
    },
    {
      "id_kecamatan": "7107050",
      "id_kabupaten": "7107",
      "nama_kecamatan": "KAIDIPANG"
    },
    {
      "id_kecamatan": "7107060",
      "id_kabupaten": "7107",
      "nama_kecamatan": "PINOGALUMAN"
    },
    {
      "id_kecamatan": "7108010",
      "id_kabupaten": "7108",
      "nama_kecamatan": "BIARO"
    },
    {
      "id_kecamatan": "7108020",
      "id_kabupaten": "7108",
      "nama_kecamatan": "TAGULANDANG SELATAN"
    },
    {
      "id_kecamatan": "7108030",
      "id_kabupaten": "7108",
      "nama_kecamatan": "TAGULANDANG"
    },
    {
      "id_kecamatan": "7108040",
      "id_kabupaten": "7108",
      "nama_kecamatan": "TAGULANDANG UTARA"
    },
    {
      "id_kecamatan": "7108050",
      "id_kabupaten": "7108",
      "nama_kecamatan": "SIAU BARAT SELATAN"
    },
    {
      "id_kecamatan": "7108060",
      "id_kabupaten": "7108",
      "nama_kecamatan": "SIAU TIMUR SELATAN"
    },
    {
      "id_kecamatan": "7108070",
      "id_kabupaten": "7108",
      "nama_kecamatan": "SIAU BARAT"
    },
    {
      "id_kecamatan": "7108080",
      "id_kabupaten": "7108",
      "nama_kecamatan": "SIAU TENGAH"
    },
    {
      "id_kecamatan": "7108090",
      "id_kabupaten": "7108",
      "nama_kecamatan": "SIAU TIMUR"
    },
    {
      "id_kecamatan": "7108100",
      "id_kabupaten": "7108",
      "nama_kecamatan": "SIAU BARAT UTARA"
    },
    {
      "id_kecamatan": "7109010",
      "id_kabupaten": "7109",
      "nama_kecamatan": "RATATOTOK"
    },
    {
      "id_kecamatan": "7109020",
      "id_kabupaten": "7109",
      "nama_kecamatan": "PUSOMAEN"
    },
    {
      "id_kecamatan": "7109030",
      "id_kabupaten": "7109",
      "nama_kecamatan": "BELANG"
    },
    {
      "id_kecamatan": "7109040",
      "id_kabupaten": "7109",
      "nama_kecamatan": "RATAHAN"
    },
    {
      "id_kecamatan": "7109041",
      "id_kabupaten": "7109",
      "nama_kecamatan": "PASAN"
    },
    {
      "id_kecamatan": "7109042",
      "id_kabupaten": "7109",
      "nama_kecamatan": "RATAHAN TIMUR"
    },
    {
      "id_kecamatan": "7109050",
      "id_kabupaten": "7109",
      "nama_kecamatan": "TOMBATU"
    },
    {
      "id_kecamatan": "7109051",
      "id_kabupaten": "7109",
      "nama_kecamatan": "TOMBATU TIMUR"
    },
    {
      "id_kecamatan": "7109052",
      "id_kabupaten": "7109",
      "nama_kecamatan": "TOMBATU UTARA"
    },
    {
      "id_kecamatan": "7109060",
      "id_kabupaten": "7109",
      "nama_kecamatan": "TOULUAAN"
    },
    {
      "id_kecamatan": "7109061",
      "id_kabupaten": "7109",
      "nama_kecamatan": "TOULUAAN SELATAN"
    },
    {
      "id_kecamatan": "7109062",
      "id_kabupaten": "7109",
      "nama_kecamatan": "SILIAN RAYA"
    },
    {
      "id_kecamatan": "7110010",
      "id_kabupaten": "7110",
      "nama_kecamatan": "POSIGADAN"
    },
    {
      "id_kecamatan": "7110020",
      "id_kabupaten": "7110",
      "nama_kecamatan": "BOLANG UKI"
    },
    {
      "id_kecamatan": "7110030",
      "id_kabupaten": "7110",
      "nama_kecamatan": "PINOLOSIAN"
    },
    {
      "id_kecamatan": "7110040",
      "id_kabupaten": "7110",
      "nama_kecamatan": "PINOLOSIAN TENGAH"
    },
    {
      "id_kecamatan": "7110050",
      "id_kabupaten": "7110",
      "nama_kecamatan": "PINOLOSIAN TIMUR"
    },
    {
      "id_kecamatan": "7111010",
      "id_kabupaten": "7111",
      "nama_kecamatan": "NUANGAN"
    },
    {
      "id_kecamatan": "7111020",
      "id_kabupaten": "7111",
      "nama_kecamatan": "TUTUYAN"
    },
    {
      "id_kecamatan": "7111030",
      "id_kabupaten": "7111",
      "nama_kecamatan": "KOTABUNAN"
    },
    {
      "id_kecamatan": "7111040",
      "id_kabupaten": "7111",
      "nama_kecamatan": "MODAYAG"
    },
    {
      "id_kecamatan": "7111050",
      "id_kabupaten": "7111",
      "nama_kecamatan": "MODAYAG BARAT"
    },
    {
      "id_kecamatan": "7171010",
      "id_kabupaten": "7171",
      "nama_kecamatan": "MALALAYANG"
    },
    {
      "id_kecamatan": "7171020",
      "id_kabupaten": "7171",
      "nama_kecamatan": "SARIO"
    },
    {
      "id_kecamatan": "7171021",
      "id_kabupaten": "7171",
      "nama_kecamatan": "WANEA"
    },
    {
      "id_kecamatan": "7171030",
      "id_kabupaten": "7171",
      "nama_kecamatan": "WENANG"
    },
    {
      "id_kecamatan": "7171031",
      "id_kabupaten": "7171",
      "nama_kecamatan": "TIKALA"
    },
    {
      "id_kecamatan": "7171032",
      "id_kabupaten": "7171",
      "nama_kecamatan": "PAAL DUA"
    },
    {
      "id_kecamatan": "7171040",
      "id_kabupaten": "7171",
      "nama_kecamatan": "MAPANGET"
    },
    {
      "id_kecamatan": "7171051",
      "id_kabupaten": "7171",
      "nama_kecamatan": "SINGKIL"
    },
    {
      "id_kecamatan": "7171052",
      "id_kabupaten": "7171",
      "nama_kecamatan": "TUMINTING"
    },
    {
      "id_kecamatan": "7171053",
      "id_kabupaten": "7171",
      "nama_kecamatan": "BUNAKEN"
    },
    {
      "id_kecamatan": "7171054",
      "id_kabupaten": "7171",
      "nama_kecamatan": "BUNAKEN KEPULAUAN"
    },
    {
      "id_kecamatan": "7172010",
      "id_kabupaten": "7172",
      "nama_kecamatan": "MADIDIR"
    },
    {
      "id_kecamatan": "7172011",
      "id_kabupaten": "7172",
      "nama_kecamatan": "MATUARI"
    },
    {
      "id_kecamatan": "7172012",
      "id_kabupaten": "7172",
      "nama_kecamatan": "GIRIAN"
    },
    {
      "id_kecamatan": "7172021",
      "id_kabupaten": "7172",
      "nama_kecamatan": "LEMBEH SELATAN"
    },
    {
      "id_kecamatan": "7172022",
      "id_kabupaten": "7172",
      "nama_kecamatan": "LEMBEH UTARA"
    },
    {
      "id_kecamatan": "7172030",
      "id_kabupaten": "7172",
      "nama_kecamatan": "AERTEMBAGA"
    },
    {
      "id_kecamatan": "7172031",
      "id_kabupaten": "7172",
      "nama_kecamatan": "MAESA"
    },
    {
      "id_kecamatan": "7172040",
      "id_kabupaten": "7172",
      "nama_kecamatan": "RANOWULU"
    },
    {
      "id_kecamatan": "7173010",
      "id_kabupaten": "7173",
      "nama_kecamatan": "TOMOHON SELATAN"
    },
    {
      "id_kecamatan": "7173020",
      "id_kabupaten": "7173",
      "nama_kecamatan": "TOMOHON TENGAH"
    },
    {
      "id_kecamatan": "7173021",
      "id_kabupaten": "7173",
      "nama_kecamatan": "TOMOHON TIMUR"
    },
    {
      "id_kecamatan": "7173022",
      "id_kabupaten": "7173",
      "nama_kecamatan": "TOMOHON BARAT"
    },
    {
      "id_kecamatan": "7173030",
      "id_kabupaten": "7173",
      "nama_kecamatan": "TOMOHON UTARA"
    },
    {
      "id_kecamatan": "7174010",
      "id_kabupaten": "7174",
      "nama_kecamatan": "KOTAMOBAGU SELATAN"
    },
    {
      "id_kecamatan": "7174020",
      "id_kabupaten": "7174",
      "nama_kecamatan": "KOTAMOBAGU TIMUR"
    },
    {
      "id_kecamatan": "7174030",
      "id_kabupaten": "7174",
      "nama_kecamatan": "KOTAMOBAGU BARAT"
    },
    {
      "id_kecamatan": "7174040",
      "id_kabupaten": "7174",
      "nama_kecamatan": "KOTAMOBAGU UTARA"
    },
    {
      "id_kecamatan": "7201030",
      "id_kabupaten": "7201",
      "nama_kecamatan": "TOTIKUM"
    },
    {
      "id_kecamatan": "7201031",
      "id_kabupaten": "7201",
      "nama_kecamatan": "TOTIKUM SELATAN"
    },
    {
      "id_kecamatan": "7201040",
      "id_kabupaten": "7201",
      "nama_kecamatan": "TINANGKUNG"
    },
    {
      "id_kecamatan": "7201041",
      "id_kabupaten": "7201",
      "nama_kecamatan": "TINANGKUNG SELATAN"
    },
    {
      "id_kecamatan": "7201042",
      "id_kabupaten": "7201",
      "nama_kecamatan": "TINANGKUNG UTARA"
    },
    {
      "id_kecamatan": "7201050",
      "id_kabupaten": "7201",
      "nama_kecamatan": "LIANG"
    },
    {
      "id_kecamatan": "7201051",
      "id_kabupaten": "7201",
      "nama_kecamatan": "PELING TENGAH"
    },
    {
      "id_kecamatan": "7201060",
      "id_kabupaten": "7201",
      "nama_kecamatan": "BULAGI"
    },
    {
      "id_kecamatan": "7201061",
      "id_kabupaten": "7201",
      "nama_kecamatan": "BULAGI SELATAN"
    },
    {
      "id_kecamatan": "7201062",
      "id_kabupaten": "7201",
      "nama_kecamatan": "BULAGI UTARA"
    },
    {
      "id_kecamatan": "7201070",
      "id_kabupaten": "7201",
      "nama_kecamatan": "BUKO"
    },
    {
      "id_kecamatan": "7201071",
      "id_kabupaten": "7201",
      "nama_kecamatan": "BUKO SELATAN"
    },
    {
      "id_kecamatan": "7202010",
      "id_kabupaten": "7202",
      "nama_kecamatan": "TOILI"
    },
    {
      "id_kecamatan": "7202011",
      "id_kabupaten": "7202",
      "nama_kecamatan": "TOILI BARAT"
    },
    {
      "id_kecamatan": "7202012",
      "id_kabupaten": "7202",
      "nama_kecamatan": "MOILONG"
    },
    {
      "id_kecamatan": "7202020",
      "id_kabupaten": "7202",
      "nama_kecamatan": "BATUI"
    },
    {
      "id_kecamatan": "7202021",
      "id_kabupaten": "7202",
      "nama_kecamatan": "BATUI SELATAN"
    },
    {
      "id_kecamatan": "7202030",
      "id_kabupaten": "7202",
      "nama_kecamatan": "BUNTA"
    },
    {
      "id_kecamatan": "7202031",
      "id_kabupaten": "7202",
      "nama_kecamatan": "NUHON"
    },
    {
      "id_kecamatan": "7202032",
      "id_kabupaten": "7202",
      "nama_kecamatan": "SIMPANG RAYA"
    },
    {
      "id_kecamatan": "7202040",
      "id_kabupaten": "7202",
      "nama_kecamatan": "KINTOM"
    },
    {
      "id_kecamatan": "7202050",
      "id_kabupaten": "7202",
      "nama_kecamatan": "LUWUK"
    },
    {
      "id_kecamatan": "7202051",
      "id_kabupaten": "7202",
      "nama_kecamatan": "LUWUK TIMUR"
    },
    {
      "id_kecamatan": "7202052",
      "id_kabupaten": "7202",
      "nama_kecamatan": "LUWUK UTARA"
    },
    {
      "id_kecamatan": "7202053",
      "id_kabupaten": "7202",
      "nama_kecamatan": "LUWUK SELATAN"
    },
    {
      "id_kecamatan": "7202054",
      "id_kabupaten": "7202",
      "nama_kecamatan": "NAMBO"
    },
    {
      "id_kecamatan": "7202060",
      "id_kabupaten": "7202",
      "nama_kecamatan": "PAGIMANA"
    },
    {
      "id_kecamatan": "7202061",
      "id_kabupaten": "7202",
      "nama_kecamatan": "BUALEMO"
    },
    {
      "id_kecamatan": "7202062",
      "id_kabupaten": "7202",
      "nama_kecamatan": "LOBU"
    },
    {
      "id_kecamatan": "7202070",
      "id_kabupaten": "7202",
      "nama_kecamatan": "LAMALA"
    },
    {
      "id_kecamatan": "7202071",
      "id_kabupaten": "7202",
      "nama_kecamatan": "MASAMA"
    },
    {
      "id_kecamatan": "7202072",
      "id_kabupaten": "7202",
      "nama_kecamatan": "MANTOH"
    },
    {
      "id_kecamatan": "7202080",
      "id_kabupaten": "7202",
      "nama_kecamatan": "BALANTAK"
    },
    {
      "id_kecamatan": "7202081",
      "id_kabupaten": "7202",
      "nama_kecamatan": "BALANTAK SELATAN"
    },
    {
      "id_kecamatan": "7202082",
      "id_kabupaten": "7202",
      "nama_kecamatan": "BALANTAK UTARA"
    },
    {
      "id_kecamatan": "7203010",
      "id_kabupaten": "7203",
      "nama_kecamatan": "MENUI KEPULAUAN"
    },
    {
      "id_kecamatan": "7203020",
      "id_kabupaten": "7203",
      "nama_kecamatan": "BUNGKU SELATAN"
    },
    {
      "id_kecamatan": "7203021",
      "id_kabupaten": "7203",
      "nama_kecamatan": "BAHODOPI"
    },
    {
      "id_kecamatan": "7203022",
      "id_kabupaten": "7203",
      "nama_kecamatan": "BUNGKU PESISIR"
    },
    {
      "id_kecamatan": "7203030",
      "id_kabupaten": "7203",
      "nama_kecamatan": "BUNGKU TENGAH"
    },
    {
      "id_kecamatan": "7203031",
      "id_kabupaten": "7203",
      "nama_kecamatan": "BUNGKU TIMUR"
    },
    {
      "id_kecamatan": "7203040",
      "id_kabupaten": "7203",
      "nama_kecamatan": "BUNGKU BARAT"
    },
    {
      "id_kecamatan": "7203041",
      "id_kabupaten": "7203",
      "nama_kecamatan": "BUMI RAYA"
    },
    {
      "id_kecamatan": "7203042",
      "id_kabupaten": "7203",
      "nama_kecamatan": "WITA PONDA"
    },
    {
      "id_kecamatan": "7204010",
      "id_kabupaten": "7204",
      "nama_kecamatan": "PAMONA SELATAN"
    },
    {
      "id_kecamatan": "7204011",
      "id_kabupaten": "7204",
      "nama_kecamatan": "PAMONA BARAT"
    },
    {
      "id_kecamatan": "7204012",
      "id_kabupaten": "7204",
      "nama_kecamatan": "PAMONA TENGGARA"
    },
    {
      "id_kecamatan": "7204020",
      "id_kabupaten": "7204",
      "nama_kecamatan": "LORE SELATAN"
    },
    {
      "id_kecamatan": "7204021",
      "id_kabupaten": "7204",
      "nama_kecamatan": "LORE BARAT"
    },
    {
      "id_kecamatan": "7204030",
      "id_kabupaten": "7204",
      "nama_kecamatan": "PAMONA PUSALEMBA"
    },
    {
      "id_kecamatan": "7204031",
      "id_kabupaten": "7204",
      "nama_kecamatan": "PAMONA TIMUR"
    },
    {
      "id_kecamatan": "7204032",
      "id_kabupaten": "7204",
      "nama_kecamatan": "PAMONA UTARA"
    },
    {
      "id_kecamatan": "7204040",
      "id_kabupaten": "7204",
      "nama_kecamatan": "LORE UTARA"
    },
    {
      "id_kecamatan": "7204041",
      "id_kabupaten": "7204",
      "nama_kecamatan": "LORE TENGAH"
    },
    {
      "id_kecamatan": "7204042",
      "id_kabupaten": "7204",
      "nama_kecamatan": "LORE TIMUR"
    },
    {
      "id_kecamatan": "7204043",
      "id_kabupaten": "7204",
      "nama_kecamatan": "LORE PEORE"
    },
    {
      "id_kecamatan": "7204050",
      "id_kabupaten": "7204",
      "nama_kecamatan": "POSO PESISIR"
    },
    {
      "id_kecamatan": "7204051",
      "id_kabupaten": "7204",
      "nama_kecamatan": "POSO PESISIR SELATAN"
    },
    {
      "id_kecamatan": "7204052",
      "id_kabupaten": "7204",
      "nama_kecamatan": "POSO PESISIR UTARA"
    },
    {
      "id_kecamatan": "7204060",
      "id_kabupaten": "7204",
      "nama_kecamatan": "LAGE"
    },
    {
      "id_kecamatan": "7204070",
      "id_kabupaten": "7204",
      "nama_kecamatan": "POSO KOTA"
    },
    {
      "id_kecamatan": "7204071",
      "id_kabupaten": "7204",
      "nama_kecamatan": "POSO KOTA UTARA"
    },
    {
      "id_kecamatan": "7204072",
      "id_kabupaten": "7204",
      "nama_kecamatan": "POSO KOTA SELATAN"
    },
    {
      "id_kecamatan": "7205041",
      "id_kabupaten": "7205",
      "nama_kecamatan": "RIO PAKAVA"
    },
    {
      "id_kecamatan": "7205051",
      "id_kabupaten": "7205",
      "nama_kecamatan": "PINEMBANI"
    },
    {
      "id_kecamatan": "7205080",
      "id_kabupaten": "7205",
      "nama_kecamatan": "BANAWA"
    },
    {
      "id_kecamatan": "7205081",
      "id_kabupaten": "7205",
      "nama_kecamatan": "BANAWA SELATAN"
    },
    {
      "id_kecamatan": "7205082",
      "id_kabupaten": "7205",
      "nama_kecamatan": "BANAWA TENGAH"
    },
    {
      "id_kecamatan": "7205090",
      "id_kabupaten": "7205",
      "nama_kecamatan": "LABUAN"
    },
    {
      "id_kecamatan": "7205091",
      "id_kabupaten": "7205",
      "nama_kecamatan": "TANANTOVEA"
    },
    {
      "id_kecamatan": "7205100",
      "id_kabupaten": "7205",
      "nama_kecamatan": "SINDUE"
    },
    {
      "id_kecamatan": "7205101",
      "id_kabupaten": "7205",
      "nama_kecamatan": "SINDUE TOMBUSABORA"
    },
    {
      "id_kecamatan": "7205102",
      "id_kabupaten": "7205",
      "nama_kecamatan": "SINDUE TOBATA"
    },
    {
      "id_kecamatan": "7205120",
      "id_kabupaten": "7205",
      "nama_kecamatan": "SIRENJA"
    },
    {
      "id_kecamatan": "7205130",
      "id_kabupaten": "7205",
      "nama_kecamatan": "BALAESANG"
    },
    {
      "id_kecamatan": "7205131",
      "id_kabupaten": "7205",
      "nama_kecamatan": "BALAESANG TANJUNG"
    },
    {
      "id_kecamatan": "7205140",
      "id_kabupaten": "7205",
      "nama_kecamatan": "DAMPELAS"
    },
    {
      "id_kecamatan": "7205160",
      "id_kabupaten": "7205",
      "nama_kecamatan": "SOJOL"
    },
    {
      "id_kecamatan": "7205161",
      "id_kabupaten": "7205",
      "nama_kecamatan": "SOJOL UTARA"
    },
    {
      "id_kecamatan": "7206010",
      "id_kabupaten": "7206",
      "nama_kecamatan": "DAMPAL SELATAN"
    },
    {
      "id_kecamatan": "7206020",
      "id_kabupaten": "7206",
      "nama_kecamatan": "DAMPAL UTARA"
    },
    {
      "id_kecamatan": "7206030",
      "id_kabupaten": "7206",
      "nama_kecamatan": "DONDO"
    },
    {
      "id_kecamatan": "7206031",
      "id_kabupaten": "7206",
      "nama_kecamatan": "OGODEIDE"
    },
    {
      "id_kecamatan": "7206032",
      "id_kabupaten": "7206",
      "nama_kecamatan": "BASIDONDO"
    },
    {
      "id_kecamatan": "7206040",
      "id_kabupaten": "7206",
      "nama_kecamatan": "BAOLAN"
    },
    {
      "id_kecamatan": "7206041",
      "id_kabupaten": "7206",
      "nama_kecamatan": "LAMPASIO"
    },
    {
      "id_kecamatan": "7206050",
      "id_kabupaten": "7206",
      "nama_kecamatan": "GALANG"
    },
    {
      "id_kecamatan": "7206060",
      "id_kabupaten": "7206",
      "nama_kecamatan": "TOLITOLI UTARA"
    },
    {
      "id_kecamatan": "7206061",
      "id_kabupaten": "7206",
      "nama_kecamatan": "DAKO PAMEAN"
    },
    {
      "id_kecamatan": "7207010",
      "id_kabupaten": "7207",
      "nama_kecamatan": "LAKEA"
    },
    {
      "id_kecamatan": "7207011",
      "id_kabupaten": "7207",
      "nama_kecamatan": "BIAU"
    },
    {
      "id_kecamatan": "7207012",
      "id_kabupaten": "7207",
      "nama_kecamatan": "KARAMAT"
    },
    {
      "id_kecamatan": "7207020",
      "id_kabupaten": "7207",
      "nama_kecamatan": "MOMUNU"
    },
    {
      "id_kecamatan": "7207021",
      "id_kabupaten": "7207",
      "nama_kecamatan": "TILOAN"
    },
    {
      "id_kecamatan": "7207030",
      "id_kabupaten": "7207",
      "nama_kecamatan": "BOKAT"
    },
    {
      "id_kecamatan": "7207031",
      "id_kabupaten": "7207",
      "nama_kecamatan": "BUKAL"
    },
    {
      "id_kecamatan": "7207040",
      "id_kabupaten": "7207",
      "nama_kecamatan": "BUNOBOGU"
    },
    {
      "id_kecamatan": "7207041",
      "id_kabupaten": "7207",
      "nama_kecamatan": "GADUNG"
    },
    {
      "id_kecamatan": "7207050",
      "id_kabupaten": "7207",
      "nama_kecamatan": "PALELEH"
    },
    {
      "id_kecamatan": "7207051",
      "id_kabupaten": "7207",
      "nama_kecamatan": "PALELEH BARAT"
    },
    {
      "id_kecamatan": "7208010",
      "id_kabupaten": "7208",
      "nama_kecamatan": "SAUSU"
    },
    {
      "id_kecamatan": "7208011",
      "id_kabupaten": "7208",
      "nama_kecamatan": "TORUE"
    },
    {
      "id_kecamatan": "7208012",
      "id_kabupaten": "7208",
      "nama_kecamatan": "BALINGGI"
    },
    {
      "id_kecamatan": "7208020",
      "id_kabupaten": "7208",
      "nama_kecamatan": "PARIGI"
    },
    {
      "id_kecamatan": "7208021",
      "id_kabupaten": "7208",
      "nama_kecamatan": "PARIGI SELATAN"
    },
    {
      "id_kecamatan": "7208022",
      "id_kabupaten": "7208",
      "nama_kecamatan": "PARIGI BARAT"
    },
    {
      "id_kecamatan": "7208023",
      "id_kabupaten": "7208",
      "nama_kecamatan": "PARIGI UTARA"
    },
    {
      "id_kecamatan": "7208024",
      "id_kabupaten": "7208",
      "nama_kecamatan": "PARIGI TENGAH"
    },
    {
      "id_kecamatan": "7208030",
      "id_kabupaten": "7208",
      "nama_kecamatan": "AMPIBABO"
    },
    {
      "id_kecamatan": "7208031",
      "id_kabupaten": "7208",
      "nama_kecamatan": "KASIMBAR"
    },
    {
      "id_kecamatan": "7208032",
      "id_kabupaten": "7208",
      "nama_kecamatan": "TORIBULU"
    },
    {
      "id_kecamatan": "7208033",
      "id_kabupaten": "7208",
      "nama_kecamatan": "SINIU"
    },
    {
      "id_kecamatan": "7208040",
      "id_kabupaten": "7208",
      "nama_kecamatan": "TINOMBO"
    },
    {
      "id_kecamatan": "7208041",
      "id_kabupaten": "7208",
      "nama_kecamatan": "TINOMBO SELATAN"
    },
    {
      "id_kecamatan": "7208042",
      "id_kabupaten": "7208",
      "nama_kecamatan": "SIDOAN"
    },
    {
      "id_kecamatan": "7208050",
      "id_kabupaten": "7208",
      "nama_kecamatan": "TOMINI"
    },
    {
      "id_kecamatan": "7208051",
      "id_kabupaten": "7208",
      "nama_kecamatan": "MEPANGA"
    },
    {
      "id_kecamatan": "7208052",
      "id_kabupaten": "7208",
      "nama_kecamatan": "PALASA"
    },
    {
      "id_kecamatan": "7208060",
      "id_kabupaten": "7208",
      "nama_kecamatan": "MOUTONG"
    },
    {
      "id_kecamatan": "7208061",
      "id_kabupaten": "7208",
      "nama_kecamatan": "BOLANO LAMBUNU"
    },
    {
      "id_kecamatan": "7208062",
      "id_kabupaten": "7208",
      "nama_kecamatan": "TAOPA"
    },
    {
      "id_kecamatan": "7208063",
      "id_kabupaten": "7208",
      "nama_kecamatan": "BOLANO"
    },
    {
      "id_kecamatan": "7208064",
      "id_kabupaten": "7208",
      "nama_kecamatan": "ONGKA MALINO"
    },
    {
      "id_kecamatan": "7209010",
      "id_kabupaten": "7209",
      "nama_kecamatan": "TOJO BARAT"
    },
    {
      "id_kecamatan": "7209020",
      "id_kabupaten": "7209",
      "nama_kecamatan": "TOJO"
    },
    {
      "id_kecamatan": "7209030",
      "id_kabupaten": "7209",
      "nama_kecamatan": "ULUBONGKA"
    },
    {
      "id_kecamatan": "7209040",
      "id_kabupaten": "7209",
      "nama_kecamatan": "AMPANA TETE"
    },
    {
      "id_kecamatan": "7209050",
      "id_kabupaten": "7209",
      "nama_kecamatan": "AMPANA KOTA"
    },
    {
      "id_kecamatan": "7209051",
      "id_kabupaten": "7209",
      "nama_kecamatan": "RATOLINDO"
    },
    {
      "id_kecamatan": "7209060",
      "id_kabupaten": "7209",
      "nama_kecamatan": "UNA - UNA"
    },
    {
      "id_kecamatan": "7209061",
      "id_kabupaten": "7209",
      "nama_kecamatan": "BATUDAKA"
    },
    {
      "id_kecamatan": "7209070",
      "id_kabupaten": "7209",
      "nama_kecamatan": "TOGEAN"
    },
    {
      "id_kecamatan": "7209080",
      "id_kabupaten": "7209",
      "nama_kecamatan": "WALEA KEPULAUAN"
    },
    {
      "id_kecamatan": "7209081",
      "id_kabupaten": "7209",
      "nama_kecamatan": "WALEA BESAR"
    },
    {
      "id_kecamatan": "7209082",
      "id_kabupaten": "7209",
      "nama_kecamatan": "TALATAKO"
    },
    {
      "id_kecamatan": "7210010",
      "id_kabupaten": "7210",
      "nama_kecamatan": "PIPIKORO"
    },
    {
      "id_kecamatan": "7210020",
      "id_kabupaten": "7210",
      "nama_kecamatan": "KULAWI SELATAN"
    },
    {
      "id_kecamatan": "7210030",
      "id_kabupaten": "7210",
      "nama_kecamatan": "KULAWI"
    },
    {
      "id_kecamatan": "7210040",
      "id_kabupaten": "7210",
      "nama_kecamatan": "LINDU"
    },
    {
      "id_kecamatan": "7210050",
      "id_kabupaten": "7210",
      "nama_kecamatan": "NOKILALAKI"
    },
    {
      "id_kecamatan": "7210060",
      "id_kabupaten": "7210",
      "nama_kecamatan": "PALOLO"
    },
    {
      "id_kecamatan": "7210070",
      "id_kabupaten": "7210",
      "nama_kecamatan": "GUMBASA"
    },
    {
      "id_kecamatan": "7210080",
      "id_kabupaten": "7210",
      "nama_kecamatan": "DOLO SELATAN"
    },
    {
      "id_kecamatan": "7210090",
      "id_kabupaten": "7210",
      "nama_kecamatan": "DOLO BARAT"
    },
    {
      "id_kecamatan": "7210100",
      "id_kabupaten": "7210",
      "nama_kecamatan": "TANAMBULAVA"
    },
    {
      "id_kecamatan": "7210110",
      "id_kabupaten": "7210",
      "nama_kecamatan": "DOLO"
    },
    {
      "id_kecamatan": "7210120",
      "id_kabupaten": "7210",
      "nama_kecamatan": "SIGI BIROMARU"
    },
    {
      "id_kecamatan": "7210130",
      "id_kabupaten": "7210",
      "nama_kecamatan": "MARAWOLA"
    },
    {
      "id_kecamatan": "7210140",
      "id_kabupaten": "7210",
      "nama_kecamatan": "MARAWOLA BARAT"
    },
    {
      "id_kecamatan": "7210150",
      "id_kabupaten": "7210",
      "nama_kecamatan": "KINOVARO"
    },
    {
      "id_kecamatan": "7211010",
      "id_kabupaten": "7211",
      "nama_kecamatan": "BANGKURUNG"
    },
    {
      "id_kecamatan": "7211020",
      "id_kabupaten": "7211",
      "nama_kecamatan": "LABOBO"
    },
    {
      "id_kecamatan": "7211030",
      "id_kabupaten": "7211",
      "nama_kecamatan": "BANGGAI UTARA"
    },
    {
      "id_kecamatan": "7211040",
      "id_kabupaten": "7211",
      "nama_kecamatan": "BANGGAI"
    },
    {
      "id_kecamatan": "7211050",
      "id_kabupaten": "7211",
      "nama_kecamatan": "BANGGAI TENGAH"
    },
    {
      "id_kecamatan": "7211060",
      "id_kabupaten": "7211",
      "nama_kecamatan": "BANGGAI SELATAN"
    },
    {
      "id_kecamatan": "7211070",
      "id_kabupaten": "7211",
      "nama_kecamatan": "BOKAN KEPULAUAN"
    },
    {
      "id_kecamatan": "7212010",
      "id_kabupaten": "7212",
      "nama_kecamatan": "MORI ATAS"
    },
    {
      "id_kecamatan": "7212020",
      "id_kabupaten": "7212",
      "nama_kecamatan": "LEMBO"
    },
    {
      "id_kecamatan": "7212030",
      "id_kabupaten": "7212",
      "nama_kecamatan": "LEMBO RAYA"
    },
    {
      "id_kecamatan": "7212040",
      "id_kabupaten": "7212",
      "nama_kecamatan": "PETASIA TIMUR"
    },
    {
      "id_kecamatan": "7212050",
      "id_kabupaten": "7212",
      "nama_kecamatan": "PETASIA"
    },
    {
      "id_kecamatan": "7212060",
      "id_kabupaten": "7212",
      "nama_kecamatan": "PETASIA BARAT"
    },
    {
      "id_kecamatan": "7212070",
      "id_kabupaten": "7212",
      "nama_kecamatan": "MORI UTARA"
    },
    {
      "id_kecamatan": "7212080",
      "id_kabupaten": "7212",
      "nama_kecamatan": "SOYO JAYA"
    },
    {
      "id_kecamatan": "7212090",
      "id_kabupaten": "7212",
      "nama_kecamatan": "BUNGKU UTARA"
    },
    {
      "id_kecamatan": "7212100",
      "id_kabupaten": "7212",
      "nama_kecamatan": "MAMOSALATO"
    },
    {
      "id_kecamatan": "7271010",
      "id_kabupaten": "7271",
      "nama_kecamatan": "PALU BARAT"
    },
    {
      "id_kecamatan": "7271011",
      "id_kabupaten": "7271",
      "nama_kecamatan": "TATANGA"
    },
    {
      "id_kecamatan": "7271012",
      "id_kabupaten": "7271",
      "nama_kecamatan": "ULUJADI"
    },
    {
      "id_kecamatan": "7271020",
      "id_kabupaten": "7271",
      "nama_kecamatan": "PALU SELATAN"
    },
    {
      "id_kecamatan": "7271030",
      "id_kabupaten": "7271",
      "nama_kecamatan": "PALU TIMUR"
    },
    {
      "id_kecamatan": "7271031",
      "id_kabupaten": "7271",
      "nama_kecamatan": "MANTIKULORE"
    },
    {
      "id_kecamatan": "7271040",
      "id_kabupaten": "7271",
      "nama_kecamatan": "PALU UTARA"
    },
    {
      "id_kecamatan": "7271041",
      "id_kabupaten": "7271",
      "nama_kecamatan": "TAWAELI"
    },
    {
      "id_kecamatan": "7301010",
      "id_kabupaten": "7301",
      "nama_kecamatan": "PASIMARANNU"
    },
    {
      "id_kecamatan": "7301011",
      "id_kabupaten": "7301",
      "nama_kecamatan": "PASILAMBENA"
    },
    {
      "id_kecamatan": "7301020",
      "id_kabupaten": "7301",
      "nama_kecamatan": "PASIMASSUNGGU"
    },
    {
      "id_kecamatan": "7301021",
      "id_kabupaten": "7301",
      "nama_kecamatan": "TAKABONERATE"
    },
    {
      "id_kecamatan": "7301022",
      "id_kabupaten": "7301",
      "nama_kecamatan": "PASIMASSUNGGU TIMUR"
    },
    {
      "id_kecamatan": "7301030",
      "id_kabupaten": "7301",
      "nama_kecamatan": "BONTOSIKUYU"
    },
    {
      "id_kecamatan": "7301040",
      "id_kabupaten": "7301",
      "nama_kecamatan": "BONTOHARU"
    },
    {
      "id_kecamatan": "7301041",
      "id_kabupaten": "7301",
      "nama_kecamatan": "BENTENG"
    },
    {
      "id_kecamatan": "7301042",
      "id_kabupaten": "7301",
      "nama_kecamatan": "BONTOMANAI"
    },
    {
      "id_kecamatan": "7301050",
      "id_kabupaten": "7301",
      "nama_kecamatan": "BONTOMATENE"
    },
    {
      "id_kecamatan": "7301051",
      "id_kabupaten": "7301",
      "nama_kecamatan": "BUKI"
    },
    {
      "id_kecamatan": "7302010",
      "id_kabupaten": "7302",
      "nama_kecamatan": "GANTARANG"
    },
    {
      "id_kecamatan": "7302020",
      "id_kabupaten": "7302",
      "nama_kecamatan": "UJUNG BULU"
    },
    {
      "id_kecamatan": "7302021",
      "id_kabupaten": "7302",
      "nama_kecamatan": "UJUNG LOE"
    },
    {
      "id_kecamatan": "7302030",
      "id_kabupaten": "7302",
      "nama_kecamatan": "BONTO BAHARI"
    },
    {
      "id_kecamatan": "7302040",
      "id_kabupaten": "7302",
      "nama_kecamatan": "BONTOTIRO"
    },
    {
      "id_kecamatan": "7302050",
      "id_kabupaten": "7302",
      "nama_kecamatan": "HERO LANGE-LANGE"
    },
    {
      "id_kecamatan": "7302060",
      "id_kabupaten": "7302",
      "nama_kecamatan": "KAJANG"
    },
    {
      "id_kecamatan": "7302070",
      "id_kabupaten": "7302",
      "nama_kecamatan": "BULUKUMPA"
    },
    {
      "id_kecamatan": "7302080",
      "id_kabupaten": "7302",
      "nama_kecamatan": "RILAU ALE"
    },
    {
      "id_kecamatan": "7302090",
      "id_kabupaten": "7302",
      "nama_kecamatan": "KINDANG"
    },
    {
      "id_kecamatan": "7303010",
      "id_kabupaten": "7303",
      "nama_kecamatan": "BISSAPPU"
    },
    {
      "id_kecamatan": "7303011",
      "id_kabupaten": "7303",
      "nama_kecamatan": "ULUERE"
    },
    {
      "id_kecamatan": "7303012",
      "id_kabupaten": "7303",
      "nama_kecamatan": "SINOA"
    },
    {
      "id_kecamatan": "7303020",
      "id_kabupaten": "7303",
      "nama_kecamatan": "BANTAENG"
    },
    {
      "id_kecamatan": "7303021",
      "id_kabupaten": "7303",
      "nama_kecamatan": "EREMERASA"
    },
    {
      "id_kecamatan": "7303030",
      "id_kabupaten": "7303",
      "nama_kecamatan": "TOMPOBULU"
    },
    {
      "id_kecamatan": "7303031",
      "id_kabupaten": "7303",
      "nama_kecamatan": "PA'JUKUKANG"
    },
    {
      "id_kecamatan": "7303032",
      "id_kabupaten": "7303",
      "nama_kecamatan": "GANTARANGKEKE"
    },
    {
      "id_kecamatan": "7304010",
      "id_kabupaten": "7304",
      "nama_kecamatan": "BANGKALA"
    },
    {
      "id_kecamatan": "7304011",
      "id_kabupaten": "7304",
      "nama_kecamatan": "BANGKALA BARAT"
    },
    {
      "id_kecamatan": "7304020",
      "id_kabupaten": "7304",
      "nama_kecamatan": "TAMALATEA"
    },
    {
      "id_kecamatan": "7304021",
      "id_kabupaten": "7304",
      "nama_kecamatan": "BONTORAMBA"
    },
    {
      "id_kecamatan": "7304030",
      "id_kabupaten": "7304",
      "nama_kecamatan": "BINAMU"
    },
    {
      "id_kecamatan": "7304031",
      "id_kabupaten": "7304",
      "nama_kecamatan": "TURATEA"
    },
    {
      "id_kecamatan": "7304040",
      "id_kabupaten": "7304",
      "nama_kecamatan": "BATANG"
    },
    {
      "id_kecamatan": "7304041",
      "id_kabupaten": "7304",
      "nama_kecamatan": "ARUNGKEKE"
    },
    {
      "id_kecamatan": "7304042",
      "id_kabupaten": "7304",
      "nama_kecamatan": "TAROWANG"
    },
    {
      "id_kecamatan": "7304050",
      "id_kabupaten": "7304",
      "nama_kecamatan": "KELARA"
    },
    {
      "id_kecamatan": "7304051",
      "id_kabupaten": "7304",
      "nama_kecamatan": "RUMBIA"
    },
    {
      "id_kecamatan": "7305010",
      "id_kabupaten": "7305",
      "nama_kecamatan": "MANGARA BOMBANG"
    },
    {
      "id_kecamatan": "7305020",
      "id_kabupaten": "7305",
      "nama_kecamatan": "MAPPAKASUNGGU"
    },
    {
      "id_kecamatan": "7305021",
      "id_kabupaten": "7305",
      "nama_kecamatan": "SANROBONE"
    },
    {
      "id_kecamatan": "7305030",
      "id_kabupaten": "7305",
      "nama_kecamatan": "POLOMBANGKENG SELATAN"
    },
    {
      "id_kecamatan": "7305031",
      "id_kabupaten": "7305",
      "nama_kecamatan": "PATTALLASSANG"
    },
    {
      "id_kecamatan": "7305040",
      "id_kabupaten": "7305",
      "nama_kecamatan": "POLOMBANGKENG UTARA"
    },
    {
      "id_kecamatan": "7305050",
      "id_kabupaten": "7305",
      "nama_kecamatan": "GALESONG SELATAN"
    },
    {
      "id_kecamatan": "7305051",
      "id_kabupaten": "7305",
      "nama_kecamatan": "GALESONG"
    },
    {
      "id_kecamatan": "7305060",
      "id_kabupaten": "7305",
      "nama_kecamatan": "GALESONG UTARA"
    },
    {
      "id_kecamatan": "7306010",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BONTONOMPO"
    },
    {
      "id_kecamatan": "7306011",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BONTONOMPO SELATAN"
    },
    {
      "id_kecamatan": "7306020",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BAJENG"
    },
    {
      "id_kecamatan": "7306021",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BAJENG BARAT"
    },
    {
      "id_kecamatan": "7306030",
      "id_kabupaten": "7306",
      "nama_kecamatan": "PALLANGGA"
    },
    {
      "id_kecamatan": "7306031",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BAROMBONG"
    },
    {
      "id_kecamatan": "7306040",
      "id_kabupaten": "7306",
      "nama_kecamatan": "SOMBA OPU"
    },
    {
      "id_kecamatan": "7306050",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BONTOMARANNU"
    },
    {
      "id_kecamatan": "7306051",
      "id_kabupaten": "7306",
      "nama_kecamatan": "PATTALLASSANG"
    },
    {
      "id_kecamatan": "7306060",
      "id_kabupaten": "7306",
      "nama_kecamatan": "PARANGLOE"
    },
    {
      "id_kecamatan": "7306061",
      "id_kabupaten": "7306",
      "nama_kecamatan": "MANUJU"
    },
    {
      "id_kecamatan": "7306070",
      "id_kabupaten": "7306",
      "nama_kecamatan": "TINGGIMONCONG"
    },
    {
      "id_kecamatan": "7306071",
      "id_kabupaten": "7306",
      "nama_kecamatan": "TOMBOLO PAO"
    },
    {
      "id_kecamatan": "7306072",
      "id_kabupaten": "7306",
      "nama_kecamatan": "PARIGI"
    },
    {
      "id_kecamatan": "7306080",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BUNGAYA"
    },
    {
      "id_kecamatan": "7306081",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BONTOLEMPANGAN"
    },
    {
      "id_kecamatan": "7306090",
      "id_kabupaten": "7306",
      "nama_kecamatan": "TOMPOBULU"
    },
    {
      "id_kecamatan": "7306091",
      "id_kabupaten": "7306",
      "nama_kecamatan": "BIRINGBULU"
    },
    {
      "id_kecamatan": "7307010",
      "id_kabupaten": "7307",
      "nama_kecamatan": "SINJAI BARAT"
    },
    {
      "id_kecamatan": "7307020",
      "id_kabupaten": "7307",
      "nama_kecamatan": "SINJAI BORONG"
    },
    {
      "id_kecamatan": "7307030",
      "id_kabupaten": "7307",
      "nama_kecamatan": "SINJAI SELATAN"
    },
    {
      "id_kecamatan": "7307040",
      "id_kabupaten": "7307",
      "nama_kecamatan": "TELLU LIMPOE"
    },
    {
      "id_kecamatan": "7307050",
      "id_kabupaten": "7307",
      "nama_kecamatan": "SINJAI TIMUR"
    },
    {
      "id_kecamatan": "7307060",
      "id_kabupaten": "7307",
      "nama_kecamatan": "SINJAI TENGAH"
    },
    {
      "id_kecamatan": "7307070",
      "id_kabupaten": "7307",
      "nama_kecamatan": "SINJAI UTARA"
    },
    {
      "id_kecamatan": "7307080",
      "id_kabupaten": "7307",
      "nama_kecamatan": "BULUPODDO"
    },
    {
      "id_kecamatan": "7307090",
      "id_kabupaten": "7307",
      "nama_kecamatan": "PULAU SEMBILAN"
    },
    {
      "id_kecamatan": "7308010",
      "id_kabupaten": "7308",
      "nama_kecamatan": "MANDAI"
    },
    {
      "id_kecamatan": "7308011",
      "id_kabupaten": "7308",
      "nama_kecamatan": "MONCONGLOE"
    },
    {
      "id_kecamatan": "7308020",
      "id_kabupaten": "7308",
      "nama_kecamatan": "MAROS BARU"
    },
    {
      "id_kecamatan": "7308021",
      "id_kabupaten": "7308",
      "nama_kecamatan": "MARUSU"
    },
    {
      "id_kecamatan": "7308022",
      "id_kabupaten": "7308",
      "nama_kecamatan": "TURIKALE"
    },
    {
      "id_kecamatan": "7308023",
      "id_kabupaten": "7308",
      "nama_kecamatan": "LAU"
    },
    {
      "id_kecamatan": "7308030",
      "id_kabupaten": "7308",
      "nama_kecamatan": "BONTOA"
    },
    {
      "id_kecamatan": "7308040",
      "id_kabupaten": "7308",
      "nama_kecamatan": "BANTIMURUNG"
    },
    {
      "id_kecamatan": "7308041",
      "id_kabupaten": "7308",
      "nama_kecamatan": "SIMBANG"
    },
    {
      "id_kecamatan": "7308050",
      "id_kabupaten": "7308",
      "nama_kecamatan": "TANRALILI"
    },
    {
      "id_kecamatan": "7308051",
      "id_kabupaten": "7308",
      "nama_kecamatan": "TOMPU BULU"
    },
    {
      "id_kecamatan": "7308060",
      "id_kabupaten": "7308",
      "nama_kecamatan": "CAMBA"
    },
    {
      "id_kecamatan": "7308061",
      "id_kabupaten": "7308",
      "nama_kecamatan": "CENRANA"
    },
    {
      "id_kecamatan": "7308070",
      "id_kabupaten": "7308",
      "nama_kecamatan": "MALLAWA"
    },
    {
      "id_kecamatan": "7309010",
      "id_kabupaten": "7309",
      "nama_kecamatan": "LIUKANG TANGAYA"
    },
    {
      "id_kecamatan": "7309020",
      "id_kabupaten": "7309",
      "nama_kecamatan": "LIUKANG KALMAS"
    },
    {
      "id_kecamatan": "7309030",
      "id_kabupaten": "7309",
      "nama_kecamatan": "LIUKANG TUPABBIRING"
    },
    {
      "id_kecamatan": "7309031",
      "id_kabupaten": "7309",
      "nama_kecamatan": "LIUKANG TUPABBIRING UTARA"
    },
    {
      "id_kecamatan": "7309040",
      "id_kabupaten": "7309",
      "nama_kecamatan": "PANGKAJENE"
    },
    {
      "id_kecamatan": "7309041",
      "id_kabupaten": "7309",
      "nama_kecamatan": "MINASATENE"
    },
    {
      "id_kecamatan": "7309050",
      "id_kabupaten": "7309",
      "nama_kecamatan": "BALOCCI"
    },
    {
      "id_kecamatan": "7309051",
      "id_kabupaten": "7309",
      "nama_kecamatan": "TONDONG TALLASA"
    },
    {
      "id_kecamatan": "7309060",
      "id_kabupaten": "7309",
      "nama_kecamatan": "BUNGORO"
    },
    {
      "id_kecamatan": "7309070",
      "id_kabupaten": "7309",
      "nama_kecamatan": "LABAKKANG"
    },
    {
      "id_kecamatan": "7309080",
      "id_kabupaten": "7309",
      "nama_kecamatan": "MA'RANG"
    },
    {
      "id_kecamatan": "7309091",
      "id_kabupaten": "7309",
      "nama_kecamatan": "SEGERI"
    },
    {
      "id_kecamatan": "7309092",
      "id_kabupaten": "7309",
      "nama_kecamatan": "MANDALLE"
    },
    {
      "id_kecamatan": "7310010",
      "id_kabupaten": "7310",
      "nama_kecamatan": "TANETE RIAJA"
    },
    {
      "id_kecamatan": "7310011",
      "id_kabupaten": "7310",
      "nama_kecamatan": "PUJANANTING"
    },
    {
      "id_kecamatan": "7310020",
      "id_kabupaten": "7310",
      "nama_kecamatan": "TANETE RILAU"
    },
    {
      "id_kecamatan": "7310030",
      "id_kabupaten": "7310",
      "nama_kecamatan": "BARRU"
    },
    {
      "id_kecamatan": "7310040",
      "id_kabupaten": "7310",
      "nama_kecamatan": "SOPPENG RIAJA"
    },
    {
      "id_kecamatan": "7310041",
      "id_kabupaten": "7310",
      "nama_kecamatan": "BALUSU"
    },
    {
      "id_kecamatan": "7310050",
      "id_kabupaten": "7310",
      "nama_kecamatan": "MALLUSETASI"
    },
    {
      "id_kecamatan": "7311010",
      "id_kabupaten": "7311",
      "nama_kecamatan": "BONTOCANI"
    },
    {
      "id_kecamatan": "7311020",
      "id_kabupaten": "7311",
      "nama_kecamatan": "KAHU"
    },
    {
      "id_kecamatan": "7311030",
      "id_kabupaten": "7311",
      "nama_kecamatan": "KAJUARA"
    },
    {
      "id_kecamatan": "7311040",
      "id_kabupaten": "7311",
      "nama_kecamatan": "SALOMEKKO"
    },
    {
      "id_kecamatan": "7311050",
      "id_kabupaten": "7311",
      "nama_kecamatan": "TONRA"
    },
    {
      "id_kecamatan": "7311060",
      "id_kabupaten": "7311",
      "nama_kecamatan": "PATIMPENG"
    },
    {
      "id_kecamatan": "7311070",
      "id_kabupaten": "7311",
      "nama_kecamatan": "LIBURENG"
    },
    {
      "id_kecamatan": "7311080",
      "id_kabupaten": "7311",
      "nama_kecamatan": "MARE"
    },
    {
      "id_kecamatan": "7311090",
      "id_kabupaten": "7311",
      "nama_kecamatan": "SIBULUE"
    },
    {
      "id_kecamatan": "7311100",
      "id_kabupaten": "7311",
      "nama_kecamatan": "CINA"
    },
    {
      "id_kecamatan": "7311110",
      "id_kabupaten": "7311",
      "nama_kecamatan": "BAREBBO"
    },
    {
      "id_kecamatan": "7311120",
      "id_kabupaten": "7311",
      "nama_kecamatan": "PONRE"
    },
    {
      "id_kecamatan": "7311130",
      "id_kabupaten": "7311",
      "nama_kecamatan": "LAPPARIAJA"
    },
    {
      "id_kecamatan": "7311140",
      "id_kabupaten": "7311",
      "nama_kecamatan": "LAMURU"
    },
    {
      "id_kecamatan": "7311141",
      "id_kabupaten": "7311",
      "nama_kecamatan": "TELLU LIMPOE"
    },
    {
      "id_kecamatan": "7311150",
      "id_kabupaten": "7311",
      "nama_kecamatan": "BENGO"
    },
    {
      "id_kecamatan": "7311160",
      "id_kabupaten": "7311",
      "nama_kecamatan": "ULAWENG"
    },
    {
      "id_kecamatan": "7311170",
      "id_kabupaten": "7311",
      "nama_kecamatan": "PALAKKA"
    },
    {
      "id_kecamatan": "7311180",
      "id_kabupaten": "7311",
      "nama_kecamatan": "AWANGPONE"
    },
    {
      "id_kecamatan": "7311190",
      "id_kabupaten": "7311",
      "nama_kecamatan": "TELLU SIATTINGE"
    },
    {
      "id_kecamatan": "7311200",
      "id_kabupaten": "7311",
      "nama_kecamatan": "AMALI"
    },
    {
      "id_kecamatan": "7311210",
      "id_kabupaten": "7311",
      "nama_kecamatan": "AJANGALE"
    },
    {
      "id_kecamatan": "7311220",
      "id_kabupaten": "7311",
      "nama_kecamatan": "DUA BOCCOE"
    },
    {
      "id_kecamatan": "7311230",
      "id_kabupaten": "7311",
      "nama_kecamatan": "CENRANA"
    },
    {
      "id_kecamatan": "7311710",
      "id_kabupaten": "7311",
      "nama_kecamatan": "TANETE RIATTANG BARAT"
    },
    {
      "id_kecamatan": "7311720",
      "id_kabupaten": "7311",
      "nama_kecamatan": "TANETE RIATTANG"
    },
    {
      "id_kecamatan": "7311730",
      "id_kabupaten": "7311",
      "nama_kecamatan": "TANETE RIATTANG TIMUR"
    },
    {
      "id_kecamatan": "7312010",
      "id_kabupaten": "7312",
      "nama_kecamatan": "MARIO RIWAWO"
    },
    {
      "id_kecamatan": "7312020",
      "id_kabupaten": "7312",
      "nama_kecamatan": "LALABATA"
    },
    {
      "id_kecamatan": "7312030",
      "id_kabupaten": "7312",
      "nama_kecamatan": "LILI RIAJA"
    },
    {
      "id_kecamatan": "7312031",
      "id_kabupaten": "7312",
      "nama_kecamatan": "GANRA"
    },
    {
      "id_kecamatan": "7312032",
      "id_kabupaten": "7312",
      "nama_kecamatan": "CITTA"
    },
    {
      "id_kecamatan": "7312040",
      "id_kabupaten": "7312",
      "nama_kecamatan": "LILI RILAU"
    },
    {
      "id_kecamatan": "7312050",
      "id_kabupaten": "7312",
      "nama_kecamatan": "DONRI DONRI"
    },
    {
      "id_kecamatan": "7312060",
      "id_kabupaten": "7312",
      "nama_kecamatan": "MARIO RIAWA"
    },
    {
      "id_kecamatan": "7313010",
      "id_kabupaten": "7313",
      "nama_kecamatan": "SABBANG PARU"
    },
    {
      "id_kecamatan": "7313020",
      "id_kabupaten": "7313",
      "nama_kecamatan": "TEMPE"
    },
    {
      "id_kecamatan": "7313030",
      "id_kabupaten": "7313",
      "nama_kecamatan": "PAMMANA"
    },
    {
      "id_kecamatan": "7313040",
      "id_kabupaten": "7313",
      "nama_kecamatan": "BOLA"
    },
    {
      "id_kecamatan": "7313050",
      "id_kabupaten": "7313",
      "nama_kecamatan": "TAKKALALLA"
    },
    {
      "id_kecamatan": "7313060",
      "id_kabupaten": "7313",
      "nama_kecamatan": "SAJOANGING"
    },
    {
      "id_kecamatan": "7313061",
      "id_kabupaten": "7313",
      "nama_kecamatan": "PENRANG"
    },
    {
      "id_kecamatan": "7313070",
      "id_kabupaten": "7313",
      "nama_kecamatan": "MAJAULENG"
    },
    {
      "id_kecamatan": "7313080",
      "id_kabupaten": "7313",
      "nama_kecamatan": "TANA SITOLO"
    },
    {
      "id_kecamatan": "7313090",
      "id_kabupaten": "7313",
      "nama_kecamatan": "BELAWA"
    },
    {
      "id_kecamatan": "7313100",
      "id_kabupaten": "7313",
      "nama_kecamatan": "MANIANG PAJO"
    },
    {
      "id_kecamatan": "7313101",
      "id_kabupaten": "7313",
      "nama_kecamatan": "GILIRENG"
    },
    {
      "id_kecamatan": "7313110",
      "id_kabupaten": "7313",
      "nama_kecamatan": "KEERA"
    },
    {
      "id_kecamatan": "7313120",
      "id_kabupaten": "7313",
      "nama_kecamatan": "PITUMPANUA"
    },
    {
      "id_kecamatan": "7314010",
      "id_kabupaten": "7314",
      "nama_kecamatan": "PANCA LAUTANG"
    },
    {
      "id_kecamatan": "7314020",
      "id_kabupaten": "7314",
      "nama_kecamatan": "TELLULIMPO E"
    },
    {
      "id_kecamatan": "7314030",
      "id_kabupaten": "7314",
      "nama_kecamatan": "WATANG PULU"
    },
    {
      "id_kecamatan": "7314040",
      "id_kabupaten": "7314",
      "nama_kecamatan": "BARANTI"
    },
    {
      "id_kecamatan": "7314050",
      "id_kabupaten": "7314",
      "nama_kecamatan": "PANCA RIJANG"
    },
    {
      "id_kecamatan": "7314051",
      "id_kabupaten": "7314",
      "nama_kecamatan": "KULO"
    },
    {
      "id_kecamatan": "7314060",
      "id_kabupaten": "7314",
      "nama_kecamatan": "MARITENGNGAE"
    },
    {
      "id_kecamatan": "7314061",
      "id_kabupaten": "7314",
      "nama_kecamatan": "WATANG SIDENRENG"
    },
    {
      "id_kecamatan": "7314070",
      "id_kabupaten": "7314",
      "nama_kecamatan": "PITU RIAWA"
    },
    {
      "id_kecamatan": "7314080",
      "id_kabupaten": "7314",
      "nama_kecamatan": "DUAPITUE"
    },
    {
      "id_kecamatan": "7314081",
      "id_kabupaten": "7314",
      "nama_kecamatan": "PITU RIASE"
    },
    {
      "id_kecamatan": "7315010",
      "id_kabupaten": "7315",
      "nama_kecamatan": "SUPPA"
    },
    {
      "id_kecamatan": "7315020",
      "id_kabupaten": "7315",
      "nama_kecamatan": "MATTIROSOMPE"
    },
    {
      "id_kecamatan": "7315021",
      "id_kabupaten": "7315",
      "nama_kecamatan": "LANRISANG"
    },
    {
      "id_kecamatan": "7315030",
      "id_kabupaten": "7315",
      "nama_kecamatan": "MATTIRO BULU"
    },
    {
      "id_kecamatan": "7315040",
      "id_kabupaten": "7315",
      "nama_kecamatan": "WATANG SAWITTO"
    },
    {
      "id_kecamatan": "7315041",
      "id_kabupaten": "7315",
      "nama_kecamatan": "PALETEANG"
    },
    {
      "id_kecamatan": "7315042",
      "id_kabupaten": "7315",
      "nama_kecamatan": "TIROANG"
    },
    {
      "id_kecamatan": "7315050",
      "id_kabupaten": "7315",
      "nama_kecamatan": "PATAMPANUA"
    },
    {
      "id_kecamatan": "7315060",
      "id_kabupaten": "7315",
      "nama_kecamatan": "CEMPA"
    },
    {
      "id_kecamatan": "7315070",
      "id_kabupaten": "7315",
      "nama_kecamatan": "DUAMPANUA"
    },
    {
      "id_kecamatan": "7315071",
      "id_kabupaten": "7315",
      "nama_kecamatan": "BATULAPPA"
    },
    {
      "id_kecamatan": "7315080",
      "id_kabupaten": "7315",
      "nama_kecamatan": "LEMBANG"
    },
    {
      "id_kecamatan": "7316010",
      "id_kabupaten": "7316",
      "nama_kecamatan": "MAIWA"
    },
    {
      "id_kecamatan": "7316011",
      "id_kabupaten": "7316",
      "nama_kecamatan": "BUNGIN"
    },
    {
      "id_kecamatan": "7316020",
      "id_kabupaten": "7316",
      "nama_kecamatan": "ENREKANG"
    },
    {
      "id_kecamatan": "7316021",
      "id_kabupaten": "7316",
      "nama_kecamatan": "CENDANA"
    },
    {
      "id_kecamatan": "7316030",
      "id_kabupaten": "7316",
      "nama_kecamatan": "BARAKA"
    },
    {
      "id_kecamatan": "7316031",
      "id_kabupaten": "7316",
      "nama_kecamatan": "BUNTU BATU"
    },
    {
      "id_kecamatan": "7316040",
      "id_kabupaten": "7316",
      "nama_kecamatan": "ANGGERAJA"
    },
    {
      "id_kecamatan": "7316041",
      "id_kabupaten": "7316",
      "nama_kecamatan": "MALUA"
    },
    {
      "id_kecamatan": "7316050",
      "id_kabupaten": "7316",
      "nama_kecamatan": "ALLA"
    },
    {
      "id_kecamatan": "7316051",
      "id_kabupaten": "7316",
      "nama_kecamatan": "CURIO"
    },
    {
      "id_kecamatan": "7316052",
      "id_kabupaten": "7316",
      "nama_kecamatan": "MASALLE"
    },
    {
      "id_kecamatan": "7316053",
      "id_kabupaten": "7316",
      "nama_kecamatan": "BAROKO"
    },
    {
      "id_kecamatan": "7317010",
      "id_kabupaten": "7317",
      "nama_kecamatan": "LAROMPONG"
    },
    {
      "id_kecamatan": "7317011",
      "id_kabupaten": "7317",
      "nama_kecamatan": "LAROMPONG SELATAN"
    },
    {
      "id_kecamatan": "7317020",
      "id_kabupaten": "7317",
      "nama_kecamatan": "SULI"
    },
    {
      "id_kecamatan": "7317021",
      "id_kabupaten": "7317",
      "nama_kecamatan": "SULI BARAT"
    },
    {
      "id_kecamatan": "7317030",
      "id_kabupaten": "7317",
      "nama_kecamatan": "BELOPA"
    },
    {
      "id_kecamatan": "7317031",
      "id_kabupaten": "7317",
      "nama_kecamatan": "KAMANRE"
    },
    {
      "id_kecamatan": "7317032",
      "id_kabupaten": "7317",
      "nama_kecamatan": "BELOPA UTARA"
    },
    {
      "id_kecamatan": "7317040",
      "id_kabupaten": "7317",
      "nama_kecamatan": "BAJO"
    },
    {
      "id_kecamatan": "7317041",
      "id_kabupaten": "7317",
      "nama_kecamatan": "BAJO BARAT"
    },
    {
      "id_kecamatan": "7317050",
      "id_kabupaten": "7317",
      "nama_kecamatan": "BASSESANGTEMPE"
    },
    {
      "id_kecamatan": "7317051",
      "id_kabupaten": "7317",
      "nama_kecamatan": "LATIMOJONG"
    },
    {
      "id_kecamatan": "7317052",
      "id_kabupaten": "7317",
      "nama_kecamatan": "BASSESANGTEMPE UTARA"
    },
    {
      "id_kecamatan": "7317060",
      "id_kabupaten": "7317",
      "nama_kecamatan": "BUPON"
    },
    {
      "id_kecamatan": "7317061",
      "id_kabupaten": "7317",
      "nama_kecamatan": "PONRANG"
    },
    {
      "id_kecamatan": "7317062",
      "id_kabupaten": "7317",
      "nama_kecamatan": "PONRANG SELATAN"
    },
    {
      "id_kecamatan": "7317070",
      "id_kabupaten": "7317",
      "nama_kecamatan": "BUA"
    },
    {
      "id_kecamatan": "7317080",
      "id_kabupaten": "7317",
      "nama_kecamatan": "WALENRANG"
    },
    {
      "id_kecamatan": "7317081",
      "id_kabupaten": "7317",
      "nama_kecamatan": "WALENRANG TIMUR"
    },
    {
      "id_kecamatan": "7317090",
      "id_kabupaten": "7317",
      "nama_kecamatan": "LAMASI"
    },
    {
      "id_kecamatan": "7317091",
      "id_kabupaten": "7317",
      "nama_kecamatan": "WALENRANG UTARA"
    },
    {
      "id_kecamatan": "7317092",
      "id_kabupaten": "7317",
      "nama_kecamatan": "WALENRANG BARAT"
    },
    {
      "id_kecamatan": "7317093",
      "id_kabupaten": "7317",
      "nama_kecamatan": "LAMASI TIMUR"
    },
    {
      "id_kecamatan": "7318010",
      "id_kabupaten": "7318",
      "nama_kecamatan": "BONGGAKARADENG"
    },
    {
      "id_kecamatan": "7318011",
      "id_kabupaten": "7318",
      "nama_kecamatan": "SIMBUANG"
    },
    {
      "id_kecamatan": "7318012",
      "id_kabupaten": "7318",
      "nama_kecamatan": "RANO"
    },
    {
      "id_kecamatan": "7318013",
      "id_kabupaten": "7318",
      "nama_kecamatan": "MAPPAK"
    },
    {
      "id_kecamatan": "7318020",
      "id_kabupaten": "7318",
      "nama_kecamatan": "MENGKENDEK"
    },
    {
      "id_kecamatan": "7318021",
      "id_kabupaten": "7318",
      "nama_kecamatan": "GANDANG BATU SILANAN"
    },
    {
      "id_kecamatan": "7318030",
      "id_kabupaten": "7318",
      "nama_kecamatan": "SANGALLA"
    },
    {
      "id_kecamatan": "7318031",
      "id_kabupaten": "7318",
      "nama_kecamatan": "SANGALA SELATAN"
    },
    {
      "id_kecamatan": "7318032",
      "id_kabupaten": "7318",
      "nama_kecamatan": "SANGALLA UTARA"
    },
    {
      "id_kecamatan": "7318040",
      "id_kabupaten": "7318",
      "nama_kecamatan": "MAKALE"
    },
    {
      "id_kecamatan": "7318041",
      "id_kabupaten": "7318",
      "nama_kecamatan": "MAKALE SELATAN"
    },
    {
      "id_kecamatan": "7318042",
      "id_kabupaten": "7318",
      "nama_kecamatan": "MAKALE UTARA"
    },
    {
      "id_kecamatan": "7318050",
      "id_kabupaten": "7318",
      "nama_kecamatan": "SALUPUTTI"
    },
    {
      "id_kecamatan": "7318051",
      "id_kabupaten": "7318",
      "nama_kecamatan": "BITTUANG"
    },
    {
      "id_kecamatan": "7318052",
      "id_kabupaten": "7318",
      "nama_kecamatan": "REMBON"
    },
    {
      "id_kecamatan": "7318053",
      "id_kabupaten": "7318",
      "nama_kecamatan": "MASANDA"
    },
    {
      "id_kecamatan": "7318054",
      "id_kabupaten": "7318",
      "nama_kecamatan": "MALIMBONG BALEPE"
    },
    {
      "id_kecamatan": "7318061",
      "id_kabupaten": "7318",
      "nama_kecamatan": "RANTETAYO"
    },
    {
      "id_kecamatan": "7318067",
      "id_kabupaten": "7318",
      "nama_kecamatan": "KURRA"
    },
    {
      "id_kecamatan": "7322010",
      "id_kabupaten": "7322",
      "nama_kecamatan": "SABBANG"
    },
    {
      "id_kecamatan": "7322020",
      "id_kabupaten": "7322",
      "nama_kecamatan": "BAEBUNTA"
    },
    {
      "id_kecamatan": "7322030",
      "id_kabupaten": "7322",
      "nama_kecamatan": "MALANGKE"
    },
    {
      "id_kecamatan": "7322031",
      "id_kabupaten": "7322",
      "nama_kecamatan": "MALANGKE BARAT"
    },
    {
      "id_kecamatan": "7322040",
      "id_kabupaten": "7322",
      "nama_kecamatan": "SUKAMAJU"
    },
    {
      "id_kecamatan": "7322050",
      "id_kabupaten": "7322",
      "nama_kecamatan": "BONE-BONE"
    },
    {
      "id_kecamatan": "7322051",
      "id_kabupaten": "7322",
      "nama_kecamatan": "TANA LILI"
    },
    {
      "id_kecamatan": "7322120",
      "id_kabupaten": "7322",
      "nama_kecamatan": "MASAMBA"
    },
    {
      "id_kecamatan": "7322121",
      "id_kabupaten": "7322",
      "nama_kecamatan": "MAPPEDECENG"
    },
    {
      "id_kecamatan": "7322122",
      "id_kabupaten": "7322",
      "nama_kecamatan": "RAMPI"
    },
    {
      "id_kecamatan": "7322130",
      "id_kabupaten": "7322",
      "nama_kecamatan": "LIMBONG"
    },
    {
      "id_kecamatan": "7322131",
      "id_kabupaten": "7322",
      "nama_kecamatan": "SEKO"
    },
    {
      "id_kecamatan": "7325010",
      "id_kabupaten": "7325",
      "nama_kecamatan": "BURAU"
    },
    {
      "id_kecamatan": "7325020",
      "id_kabupaten": "7325",
      "nama_kecamatan": "WOTU"
    },
    {
      "id_kecamatan": "7325030",
      "id_kabupaten": "7325",
      "nama_kecamatan": "TOMONI"
    },
    {
      "id_kecamatan": "7325031",
      "id_kabupaten": "7325",
      "nama_kecamatan": "TOMONI TIMUR"
    },
    {
      "id_kecamatan": "7325040",
      "id_kabupaten": "7325",
      "nama_kecamatan": "ANGKONA"
    },
    {
      "id_kecamatan": "7325050",
      "id_kabupaten": "7325",
      "nama_kecamatan": "MALILI"
    },
    {
      "id_kecamatan": "7325060",
      "id_kabupaten": "7325",
      "nama_kecamatan": "TOWUTI"
    },
    {
      "id_kecamatan": "7325070",
      "id_kabupaten": "7325",
      "nama_kecamatan": "NUHA"
    },
    {
      "id_kecamatan": "7325071",
      "id_kabupaten": "7325",
      "nama_kecamatan": "WASUPONDA"
    },
    {
      "id_kecamatan": "7325080",
      "id_kabupaten": "7325",
      "nama_kecamatan": "MANGKUTANA"
    },
    {
      "id_kecamatan": "7325081",
      "id_kabupaten": "7325",
      "nama_kecamatan": "KALAENA"
    },
    {
      "id_kecamatan": "7326010",
      "id_kabupaten": "7326",
      "nama_kecamatan": "SOPAI"
    },
    {
      "id_kecamatan": "7326020",
      "id_kabupaten": "7326",
      "nama_kecamatan": "KESU"
    },
    {
      "id_kecamatan": "7326030",
      "id_kabupaten": "7326",
      "nama_kecamatan": "SANGGALANGI"
    },
    {
      "id_kecamatan": "7326040",
      "id_kabupaten": "7326",
      "nama_kecamatan": "BUNTAO"
    },
    {
      "id_kecamatan": "7326050",
      "id_kabupaten": "7326",
      "nama_kecamatan": "RANTEBUA"
    },
    {
      "id_kecamatan": "7326060",
      "id_kabupaten": "7326",
      "nama_kecamatan": "NANGGALA"
    },
    {
      "id_kecamatan": "7326070",
      "id_kabupaten": "7326",
      "nama_kecamatan": "TONDON"
    },
    {
      "id_kecamatan": "7326080",
      "id_kabupaten": "7326",
      "nama_kecamatan": "TALLUNGLIPU"
    },
    {
      "id_kecamatan": "7326090",
      "id_kabupaten": "7326",
      "nama_kecamatan": "RANTEPAO"
    },
    {
      "id_kecamatan": "7326100",
      "id_kabupaten": "7326",
      "nama_kecamatan": "TIKALA"
    },
    {
      "id_kecamatan": "7326110",
      "id_kabupaten": "7326",
      "nama_kecamatan": "SESEAN"
    },
    {
      "id_kecamatan": "7326120",
      "id_kabupaten": "7326",
      "nama_kecamatan": "BALUSU"
    },
    {
      "id_kecamatan": "7326130",
      "id_kabupaten": "7326",
      "nama_kecamatan": "SA'DAN"
    },
    {
      "id_kecamatan": "7326140",
      "id_kabupaten": "7326",
      "nama_kecamatan": "BENGKELEKILA"
    },
    {
      "id_kecamatan": "7326150",
      "id_kabupaten": "7326",
      "nama_kecamatan": "SESEAN SULOARA"
    },
    {
      "id_kecamatan": "7326160",
      "id_kabupaten": "7326",
      "nama_kecamatan": "KAPALA PITU"
    },
    {
      "id_kecamatan": "7326170",
      "id_kabupaten": "7326",
      "nama_kecamatan": "DENDE PIONGAN NAPO"
    },
    {
      "id_kecamatan": "7326180",
      "id_kabupaten": "7326",
      "nama_kecamatan": "AWAN RANTE KARUA"
    },
    {
      "id_kecamatan": "7326190",
      "id_kabupaten": "7326",
      "nama_kecamatan": "RINDINGALO"
    },
    {
      "id_kecamatan": "7326200",
      "id_kabupaten": "7326",
      "nama_kecamatan": "BUNTU PEPASAN"
    },
    {
      "id_kecamatan": "7326210",
      "id_kabupaten": "7326",
      "nama_kecamatan": "BARUPPU"
    },
    {
      "id_kecamatan": "7371010",
      "id_kabupaten": "7371",
      "nama_kecamatan": "MARISO"
    },
    {
      "id_kecamatan": "7371020",
      "id_kabupaten": "7371",
      "nama_kecamatan": "MAMAJANG"
    },
    {
      "id_kecamatan": "7371030",
      "id_kabupaten": "7371",
      "nama_kecamatan": "TAMALATE"
    },
    {
      "id_kecamatan": "7371031",
      "id_kabupaten": "7371",
      "nama_kecamatan": "RAPPOCINI"
    },
    {
      "id_kecamatan": "7371040",
      "id_kabupaten": "7371",
      "nama_kecamatan": "MAKASSAR"
    },
    {
      "id_kecamatan": "7371050",
      "id_kabupaten": "7371",
      "nama_kecamatan": "UJUNG PANDANG"
    },
    {
      "id_kecamatan": "7371060",
      "id_kabupaten": "7371",
      "nama_kecamatan": "WAJO"
    },
    {
      "id_kecamatan": "7371070",
      "id_kabupaten": "7371",
      "nama_kecamatan": "BONTOALA"
    },
    {
      "id_kecamatan": "7371080",
      "id_kabupaten": "7371",
      "nama_kecamatan": "UJUNG TANAH"
    },
    {
      "id_kecamatan": "7371090",
      "id_kabupaten": "7371",
      "nama_kecamatan": "TALLO"
    },
    {
      "id_kecamatan": "7371100",
      "id_kabupaten": "7371",
      "nama_kecamatan": "PANAKKUKANG"
    },
    {
      "id_kecamatan": "7371101",
      "id_kabupaten": "7371",
      "nama_kecamatan": "MANGGALA"
    },
    {
      "id_kecamatan": "7371110",
      "id_kabupaten": "7371",
      "nama_kecamatan": "BIRING KANAYA"
    },
    {
      "id_kecamatan": "7371111",
      "id_kabupaten": "7371",
      "nama_kecamatan": "TAMALANREA"
    },
    {
      "id_kecamatan": "7372010",
      "id_kabupaten": "7372",
      "nama_kecamatan": "BACUKIKI"
    },
    {
      "id_kecamatan": "7372011",
      "id_kabupaten": "7372",
      "nama_kecamatan": "BACUKIKI BARAT"
    },
    {
      "id_kecamatan": "7372020",
      "id_kabupaten": "7372",
      "nama_kecamatan": "UJUNG"
    },
    {
      "id_kecamatan": "7372030",
      "id_kabupaten": "7372",
      "nama_kecamatan": "SOREANG"
    },
    {
      "id_kecamatan": "7373010",
      "id_kabupaten": "7373",
      "nama_kecamatan": "WARA SELATAN"
    },
    {
      "id_kecamatan": "7373011",
      "id_kabupaten": "7373",
      "nama_kecamatan": "SENDANA"
    },
    {
      "id_kecamatan": "7373020",
      "id_kabupaten": "7373",
      "nama_kecamatan": "WARA"
    },
    {
      "id_kecamatan": "7373021",
      "id_kabupaten": "7373",
      "nama_kecamatan": "WARA TIMUR"
    },
    {
      "id_kecamatan": "7373022",
      "id_kabupaten": "7373",
      "nama_kecamatan": "MUNGKAJANG"
    },
    {
      "id_kecamatan": "7373030",
      "id_kabupaten": "7373",
      "nama_kecamatan": "WARA UTARA"
    },
    {
      "id_kecamatan": "7373031",
      "id_kabupaten": "7373",
      "nama_kecamatan": "BARA"
    },
    {
      "id_kecamatan": "7373040",
      "id_kabupaten": "7373",
      "nama_kecamatan": "TELLUWANUA"
    },
    {
      "id_kecamatan": "7373041",
      "id_kabupaten": "7373",
      "nama_kecamatan": "WARA BARAT"
    },
    {
      "id_kecamatan": "7401050",
      "id_kabupaten": "7401",
      "nama_kecamatan": "LASALIMU"
    },
    {
      "id_kecamatan": "7401051",
      "id_kabupaten": "7401",
      "nama_kecamatan": "LASALIMU SELATAN"
    },
    {
      "id_kecamatan": "7401052",
      "id_kabupaten": "7401",
      "nama_kecamatan": "SIONTAPINA"
    },
    {
      "id_kecamatan": "7401060",
      "id_kabupaten": "7401",
      "nama_kecamatan": "PASAR WAJO"
    },
    {
      "id_kecamatan": "7401061",
      "id_kabupaten": "7401",
      "nama_kecamatan": "WOLOWA"
    },
    {
      "id_kecamatan": "7401062",
      "id_kabupaten": "7401",
      "nama_kecamatan": "WABULA"
    },
    {
      "id_kecamatan": "7401110",
      "id_kabupaten": "7401",
      "nama_kecamatan": "KAPONTORI"
    },
    {
      "id_kecamatan": "7402010",
      "id_kabupaten": "7402",
      "nama_kecamatan": "TONGKUNO"
    },
    {
      "id_kecamatan": "7402011",
      "id_kabupaten": "7402",
      "nama_kecamatan": "TONGKUNO SELATAN"
    },
    {
      "id_kecamatan": "7402020",
      "id_kabupaten": "7402",
      "nama_kecamatan": "PARIGI"
    },
    {
      "id_kecamatan": "7402021",
      "id_kabupaten": "7402",
      "nama_kecamatan": "BONE"
    },
    {
      "id_kecamatan": "7402022",
      "id_kabupaten": "7402",
      "nama_kecamatan": "MAROBO"
    },
    {
      "id_kecamatan": "7402030",
      "id_kabupaten": "7402",
      "nama_kecamatan": "KABAWO"
    },
    {
      "id_kecamatan": "7402031",
      "id_kabupaten": "7402",
      "nama_kecamatan": "KABANGKA"
    },
    {
      "id_kecamatan": "7402032",
      "id_kabupaten": "7402",
      "nama_kecamatan": "KONTUKOWUNA"
    },
    {
      "id_kecamatan": "7402061",
      "id_kabupaten": "7402",
      "nama_kecamatan": "KONTUNAGA"
    },
    {
      "id_kecamatan": "7402062",
      "id_kabupaten": "7402",
      "nama_kecamatan": "WATOPUTE"
    },
    {
      "id_kecamatan": "7402070",
      "id_kabupaten": "7402",
      "nama_kecamatan": "KATOBU"
    },
    {
      "id_kecamatan": "7402071",
      "id_kabupaten": "7402",
      "nama_kecamatan": "LOHIA"
    },
    {
      "id_kecamatan": "7402072",
      "id_kabupaten": "7402",
      "nama_kecamatan": "DURUKA"
    },
    {
      "id_kecamatan": "7402073",
      "id_kabupaten": "7402",
      "nama_kecamatan": "BATALAIWORU"
    },
    {
      "id_kecamatan": "7402080",
      "id_kabupaten": "7402",
      "nama_kecamatan": "NAPABALANO"
    },
    {
      "id_kecamatan": "7402081",
      "id_kabupaten": "7402",
      "nama_kecamatan": "LASALEPA"
    },
    {
      "id_kecamatan": "7402083",
      "id_kabupaten": "7402",
      "nama_kecamatan": "TOWEA"
    },
    {
      "id_kecamatan": "7402090",
      "id_kabupaten": "7402",
      "nama_kecamatan": "WAKORUMBA SELATAN"
    },
    {
      "id_kecamatan": "7402091",
      "id_kabupaten": "7402",
      "nama_kecamatan": "PASIR PUTIH"
    },
    {
      "id_kecamatan": "7402092",
      "id_kabupaten": "7402",
      "nama_kecamatan": "PASI KOLAGA"
    },
    {
      "id_kecamatan": "7402111",
      "id_kabupaten": "7402",
      "nama_kecamatan": "MALIGANO"
    },
    {
      "id_kecamatan": "7402112",
      "id_kabupaten": "7402",
      "nama_kecamatan": "BATUKARA"
    },
    {
      "id_kecamatan": "7403090",
      "id_kabupaten": "7403",
      "nama_kecamatan": "SOROPIA"
    },
    {
      "id_kecamatan": "7403091",
      "id_kabupaten": "7403",
      "nama_kecamatan": "LALONGGASUMEETO"
    },
    {
      "id_kecamatan": "7403100",
      "id_kabupaten": "7403",
      "nama_kecamatan": "SAMPARA"
    },
    {
      "id_kecamatan": "7403101",
      "id_kabupaten": "7403",
      "nama_kecamatan": "BONDOALA"
    },
    {
      "id_kecamatan": "7403102",
      "id_kabupaten": "7403",
      "nama_kecamatan": "BESULUTU"
    },
    {
      "id_kecamatan": "7403103",
      "id_kabupaten": "7403",
      "nama_kecamatan": "KAPOIALA"
    },
    {
      "id_kecamatan": "7403104",
      "id_kabupaten": "7403",
      "nama_kecamatan": "ANGGALOMOARE"
    },
    {
      "id_kecamatan": "7403105",
      "id_kabupaten": "7403",
      "nama_kecamatan": "MOROSI"
    },
    {
      "id_kecamatan": "7403130",
      "id_kabupaten": "7403",
      "nama_kecamatan": "LAMBUYA"
    },
    {
      "id_kecamatan": "7403131",
      "id_kabupaten": "7403",
      "nama_kecamatan": "UEPAI"
    },
    {
      "id_kecamatan": "7403132",
      "id_kabupaten": "7403",
      "nama_kecamatan": "PURIALA"
    },
    {
      "id_kecamatan": "7403133",
      "id_kabupaten": "7403",
      "nama_kecamatan": "ONEMBUTE"
    },
    {
      "id_kecamatan": "7403140",
      "id_kabupaten": "7403",
      "nama_kecamatan": "PONDIDAHA"
    },
    {
      "id_kecamatan": "7403141",
      "id_kabupaten": "7403",
      "nama_kecamatan": "WONGGEDUKU"
    },
    {
      "id_kecamatan": "7403142",
      "id_kabupaten": "7403",
      "nama_kecamatan": "AMONGGEDO"
    },
    {
      "id_kecamatan": "7403143",
      "id_kabupaten": "7403",
      "nama_kecamatan": "WONGGEDUKU BARAT"
    },
    {
      "id_kecamatan": "7403150",
      "id_kabupaten": "7403",
      "nama_kecamatan": "WAWOTOBI"
    },
    {
      "id_kecamatan": "7403151",
      "id_kabupaten": "7403",
      "nama_kecamatan": "MELUHU"
    },
    {
      "id_kecamatan": "7403152",
      "id_kabupaten": "7403",
      "nama_kecamatan": "KONAWE"
    },
    {
      "id_kecamatan": "7403170",
      "id_kabupaten": "7403",
      "nama_kecamatan": "UNAAHA"
    },
    {
      "id_kecamatan": "7403171",
      "id_kabupaten": "7403",
      "nama_kecamatan": "ANGGABERI"
    },
    {
      "id_kecamatan": "7403180",
      "id_kabupaten": "7403",
      "nama_kecamatan": "ABUKI"
    },
    {
      "id_kecamatan": "7403181",
      "id_kabupaten": "7403",
      "nama_kecamatan": "LATOMA"
    },
    {
      "id_kecamatan": "7403182",
      "id_kabupaten": "7403",
      "nama_kecamatan": "TONGAUNA"
    },
    {
      "id_kecamatan": "7403183",
      "id_kabupaten": "7403",
      "nama_kecamatan": "ASINUA"
    },
    {
      "id_kecamatan": "7403184",
      "id_kabupaten": "7403",
      "nama_kecamatan": "PADANGGUNI"
    },
    {
      "id_kecamatan": "7403193",
      "id_kabupaten": "7403",
      "nama_kecamatan": "ROUTA"
    },
    {
      "id_kecamatan": "7404010",
      "id_kabupaten": "7404",
      "nama_kecamatan": "WATUBANGGA"
    },
    {
      "id_kecamatan": "7404011",
      "id_kabupaten": "7404",
      "nama_kecamatan": "TANGGETADA"
    },
    {
      "id_kecamatan": "7404012",
      "id_kabupaten": "7404",
      "nama_kecamatan": "TOARI"
    },
    {
      "id_kecamatan": "7404013",
      "id_kabupaten": "7404",
      "nama_kecamatan": "POLINGGONA"
    },
    {
      "id_kecamatan": "7404020",
      "id_kabupaten": "7404",
      "nama_kecamatan": "POMALAA"
    },
    {
      "id_kecamatan": "7404030",
      "id_kabupaten": "7404",
      "nama_kecamatan": "WUNDULAKO"
    },
    {
      "id_kecamatan": "7404031",
      "id_kabupaten": "7404",
      "nama_kecamatan": "BAULA"
    },
    {
      "id_kecamatan": "7404060",
      "id_kabupaten": "7404",
      "nama_kecamatan": "KOLAKA"
    },
    {
      "id_kecamatan": "7404061",
      "id_kabupaten": "7404",
      "nama_kecamatan": "LATAMBAGA"
    },
    {
      "id_kecamatan": "7404070",
      "id_kabupaten": "7404",
      "nama_kecamatan": "WOLO"
    },
    {
      "id_kecamatan": "7404071",
      "id_kabupaten": "7404",
      "nama_kecamatan": "SAMATURU"
    },
    {
      "id_kecamatan": "7404072",
      "id_kabupaten": "7404",
      "nama_kecamatan": "IWOIMENDAA"
    },
    {
      "id_kecamatan": "7405010",
      "id_kabupaten": "7405",
      "nama_kecamatan": "TINANGGEA"
    },
    {
      "id_kecamatan": "7405011",
      "id_kabupaten": "7405",
      "nama_kecamatan": "LALEMBUU"
    },
    {
      "id_kecamatan": "7405020",
      "id_kabupaten": "7405",
      "nama_kecamatan": "ANDOOLO"
    },
    {
      "id_kecamatan": "7405021",
      "id_kabupaten": "7405",
      "nama_kecamatan": "BUKE"
    },
    {
      "id_kecamatan": "7405022",
      "id_kabupaten": "7405",
      "nama_kecamatan": "ANDOOLO BARAT"
    },
    {
      "id_kecamatan": "7405030",
      "id_kabupaten": "7405",
      "nama_kecamatan": "PALANGGA"
    },
    {
      "id_kecamatan": "7405031",
      "id_kabupaten": "7405",
      "nama_kecamatan": "PALANGGA SELATAN"
    },
    {
      "id_kecamatan": "7405032",
      "id_kabupaten": "7405",
      "nama_kecamatan": "BAITO"
    },
    {
      "id_kecamatan": "7405040",
      "id_kabupaten": "7405",
      "nama_kecamatan": "LAINEA"
    },
    {
      "id_kecamatan": "7405041",
      "id_kabupaten": "7405",
      "nama_kecamatan": "LAEYA"
    },
    {
      "id_kecamatan": "7405050",
      "id_kabupaten": "7405",
      "nama_kecamatan": "KOLONO"
    },
    {
      "id_kecamatan": "7405051",
      "id_kabupaten": "7405",
      "nama_kecamatan": "KOLONO TIMUR"
    },
    {
      "id_kecamatan": "7405060",
      "id_kabupaten": "7405",
      "nama_kecamatan": "LAONTI"
    },
    {
      "id_kecamatan": "7405070",
      "id_kabupaten": "7405",
      "nama_kecamatan": "MORAMO"
    },
    {
      "id_kecamatan": "7405071",
      "id_kabupaten": "7405",
      "nama_kecamatan": "MORAMO UTARA"
    },
    {
      "id_kecamatan": "7405080",
      "id_kabupaten": "7405",
      "nama_kecamatan": "KONDA"
    },
    {
      "id_kecamatan": "7405081",
      "id_kabupaten": "7405",
      "nama_kecamatan": "WOLASI"
    },
    {
      "id_kecamatan": "7405090",
      "id_kabupaten": "7405",
      "nama_kecamatan": "RANOMEETO"
    },
    {
      "id_kecamatan": "7405091",
      "id_kabupaten": "7405",
      "nama_kecamatan": "RANOMEETO BARAT"
    },
    {
      "id_kecamatan": "7405100",
      "id_kabupaten": "7405",
      "nama_kecamatan": "LANDONO"
    },
    {
      "id_kecamatan": "7405101",
      "id_kabupaten": "7405",
      "nama_kecamatan": "MOWILA"
    },
    {
      "id_kecamatan": "7405102",
      "id_kabupaten": "7405",
      "nama_kecamatan": "SABULAKOA"
    },
    {
      "id_kecamatan": "7405110",
      "id_kabupaten": "7405",
      "nama_kecamatan": "ANGATA"
    },
    {
      "id_kecamatan": "7405111",
      "id_kabupaten": "7405",
      "nama_kecamatan": "BENUA"
    },
    {
      "id_kecamatan": "7405112",
      "id_kabupaten": "7405",
      "nama_kecamatan": "BASALA"
    },
    {
      "id_kecamatan": "7406010",
      "id_kabupaten": "7406",
      "nama_kecamatan": "KABAENA"
    },
    {
      "id_kecamatan": "7406011",
      "id_kabupaten": "7406",
      "nama_kecamatan": "KABAENA UTARA"
    },
    {
      "id_kecamatan": "7406012",
      "id_kabupaten": "7406",
      "nama_kecamatan": "KABAENA SELATAN"
    },
    {
      "id_kecamatan": "7406013",
      "id_kabupaten": "7406",
      "nama_kecamatan": "KABAENA BARAT"
    },
    {
      "id_kecamatan": "7406020",
      "id_kabupaten": "7406",
      "nama_kecamatan": "KABAENA TIMUR"
    },
    {
      "id_kecamatan": "7406021",
      "id_kabupaten": "7406",
      "nama_kecamatan": "KABAENA TENGAH"
    },
    {
      "id_kecamatan": "7406030",
      "id_kabupaten": "7406",
      "nama_kecamatan": "RUMBIA"
    },
    {
      "id_kecamatan": "7406031",
      "id_kabupaten": "7406",
      "nama_kecamatan": "MATA OLEO"
    },
    {
      "id_kecamatan": "7406032",
      "id_kabupaten": "7406",
      "nama_kecamatan": "KEP. MASALOKA RAYA"
    },
    {
      "id_kecamatan": "7406033",
      "id_kabupaten": "7406",
      "nama_kecamatan": "RUMBIA TENGAH"
    },
    {
      "id_kecamatan": "7406040",
      "id_kabupaten": "7406",
      "nama_kecamatan": "RAROWATU"
    },
    {
      "id_kecamatan": "7406041",
      "id_kabupaten": "7406",
      "nama_kecamatan": "RAROWATU UTARA"
    },
    {
      "id_kecamatan": "7406042",
      "id_kabupaten": "7406",
      "nama_kecamatan": "MATA USU"
    },
    {
      "id_kecamatan": "7406043",
      "id_kabupaten": "7406",
      "nama_kecamatan": "LANTARI JAYA"
    },
    {
      "id_kecamatan": "7406050",
      "id_kabupaten": "7406",
      "nama_kecamatan": "POLEANG TIMUR"
    },
    {
      "id_kecamatan": "7406051",
      "id_kabupaten": "7406",
      "nama_kecamatan": "POLEANG UTARA"
    },
    {
      "id_kecamatan": "7406052",
      "id_kabupaten": "7406",
      "nama_kecamatan": "POLEANG SELATAN"
    },
    {
      "id_kecamatan": "7406053",
      "id_kabupaten": "7406",
      "nama_kecamatan": "POLEANG TENGGARA"
    },
    {
      "id_kecamatan": "7406060",
      "id_kabupaten": "7406",
      "nama_kecamatan": "POLEANG"
    },
    {
      "id_kecamatan": "7406061",
      "id_kabupaten": "7406",
      "nama_kecamatan": "POLEANG BARAT"
    },
    {
      "id_kecamatan": "7406062",
      "id_kabupaten": "7406",
      "nama_kecamatan": "TONTONUNU"
    },
    {
      "id_kecamatan": "7406063",
      "id_kabupaten": "7406",
      "nama_kecamatan": "POLEANG TENGAH"
    },
    {
      "id_kecamatan": "7407010",
      "id_kabupaten": "7407",
      "nama_kecamatan": "BINONGKO"
    },
    {
      "id_kecamatan": "7407011",
      "id_kabupaten": "7407",
      "nama_kecamatan": "TOGO BINONGKO"
    },
    {
      "id_kecamatan": "7407020",
      "id_kabupaten": "7407",
      "nama_kecamatan": "TOMIA"
    },
    {
      "id_kecamatan": "7407021",
      "id_kabupaten": "7407",
      "nama_kecamatan": "TOMIA TIMUR"
    },
    {
      "id_kecamatan": "7407030",
      "id_kabupaten": "7407",
      "nama_kecamatan": "KALEDUPA"
    },
    {
      "id_kecamatan": "7407031",
      "id_kabupaten": "7407",
      "nama_kecamatan": "KALEDUPA SELATAN"
    },
    {
      "id_kecamatan": "7407040",
      "id_kabupaten": "7407",
      "nama_kecamatan": "WANGI-WANGI"
    },
    {
      "id_kecamatan": "7407050",
      "id_kabupaten": "7407",
      "nama_kecamatan": "WANGI-WANGI SELATAN"
    },
    {
      "id_kecamatan": "7408010",
      "id_kabupaten": "7408",
      "nama_kecamatan": "RANTEANGIN"
    },
    {
      "id_kecamatan": "7408011",
      "id_kabupaten": "7408",
      "nama_kecamatan": "LAMBAI"
    },
    {
      "id_kecamatan": "7408012",
      "id_kabupaten": "7408",
      "nama_kecamatan": "WAWO"
    },
    {
      "id_kecamatan": "7408020",
      "id_kabupaten": "7408",
      "nama_kecamatan": "LASUSUA"
    },
    {
      "id_kecamatan": "7408021",
      "id_kabupaten": "7408",
      "nama_kecamatan": "KATOI"
    },
    {
      "id_kecamatan": "7408030",
      "id_kabupaten": "7408",
      "nama_kecamatan": "KODEOHA"
    },
    {
      "id_kecamatan": "7408031",
      "id_kabupaten": "7408",
      "nama_kecamatan": "TIWU"
    },
    {
      "id_kecamatan": "7408040",
      "id_kabupaten": "7408",
      "nama_kecamatan": "NGAPA"
    },
    {
      "id_kecamatan": "7408041",
      "id_kabupaten": "7408",
      "nama_kecamatan": "WATUNOHU"
    },
    {
      "id_kecamatan": "7408050",
      "id_kabupaten": "7408",
      "nama_kecamatan": "PAKUE"
    },
    {
      "id_kecamatan": "7408051",
      "id_kabupaten": "7408",
      "nama_kecamatan": "PAKUE UTARA"
    },
    {
      "id_kecamatan": "7408052",
      "id_kabupaten": "7408",
      "nama_kecamatan": "PAKUE TENGAH"
    },
    {
      "id_kecamatan": "7408060",
      "id_kabupaten": "7408",
      "nama_kecamatan": "BATU PUTIH"
    },
    {
      "id_kecamatan": "7408061",
      "id_kabupaten": "7408",
      "nama_kecamatan": "POREHU"
    },
    {
      "id_kecamatan": "7408062",
      "id_kabupaten": "7408",
      "nama_kecamatan": "TOLALA"
    },
    {
      "id_kecamatan": "7409100",
      "id_kabupaten": "7409",
      "nama_kecamatan": "BONEGUNU"
    },
    {
      "id_kecamatan": "7409101",
      "id_kabupaten": "7409",
      "nama_kecamatan": "KAMBOWA"
    },
    {
      "id_kecamatan": "7409110",
      "id_kabupaten": "7409",
      "nama_kecamatan": "WAKORUMBA"
    },
    {
      "id_kecamatan": "7409120",
      "id_kabupaten": "7409",
      "nama_kecamatan": "KULISUSU"
    },
    {
      "id_kecamatan": "7409121",
      "id_kabupaten": "7409",
      "nama_kecamatan": "KULISUSU BARAT"
    },
    {
      "id_kecamatan": "7409122",
      "id_kabupaten": "7409",
      "nama_kecamatan": "KULISUSU UTARA"
    },
    {
      "id_kecamatan": "7410010",
      "id_kabupaten": "7410",
      "nama_kecamatan": "SAWA"
    },
    {
      "id_kecamatan": "7410011",
      "id_kabupaten": "7410",
      "nama_kecamatan": "MOTUI"
    },
    {
      "id_kecamatan": "7410020",
      "id_kabupaten": "7410",
      "nama_kecamatan": "LEMBO"
    },
    {
      "id_kecamatan": "7410030",
      "id_kabupaten": "7410",
      "nama_kecamatan": "LASOLO"
    },
    {
      "id_kecamatan": "7410040",
      "id_kabupaten": "7410",
      "nama_kecamatan": "MOLAWE"
    },
    {
      "id_kecamatan": "7410050",
      "id_kabupaten": "7410",
      "nama_kecamatan": "ASERA"
    },
    {
      "id_kecamatan": "7410051",
      "id_kabupaten": "7410",
      "nama_kecamatan": "ANDOWIA"
    },
    {
      "id_kecamatan": "7410052",
      "id_kabupaten": "7410",
      "nama_kecamatan": "OHEO"
    },
    {
      "id_kecamatan": "7410060",
      "id_kabupaten": "7410",
      "nama_kecamatan": "LANGGIKIMA"
    },
    {
      "id_kecamatan": "7410070",
      "id_kabupaten": "7410",
      "nama_kecamatan": "WIWIRANO"
    },
    {
      "id_kecamatan": "7411010",
      "id_kabupaten": "7411",
      "nama_kecamatan": "AERE"
    },
    {
      "id_kecamatan": "7411020",
      "id_kabupaten": "7411",
      "nama_kecamatan": "LAMBANDIA"
    },
    {
      "id_kecamatan": "7411030",
      "id_kabupaten": "7411",
      "nama_kecamatan": "POLI-POLIA"
    },
    {
      "id_kecamatan": "7411040",
      "id_kabupaten": "7411",
      "nama_kecamatan": "DANGIA"
    },
    {
      "id_kecamatan": "7411050",
      "id_kabupaten": "7411",
      "nama_kecamatan": "LADONGI"
    },
    {
      "id_kecamatan": "7411060",
      "id_kabupaten": "7411",
      "nama_kecamatan": "LOEA"
    },
    {
      "id_kecamatan": "7411070",
      "id_kabupaten": "7411",
      "nama_kecamatan": "TIRAWUTA"
    },
    {
      "id_kecamatan": "7411080",
      "id_kabupaten": "7411",
      "nama_kecamatan": "LALOLAE"
    },
    {
      "id_kecamatan": "7411090",
      "id_kabupaten": "7411",
      "nama_kecamatan": "MOWEWE"
    },
    {
      "id_kecamatan": "7411100",
      "id_kabupaten": "7411",
      "nama_kecamatan": "TINONDO"
    },
    {
      "id_kecamatan": "7411110",
      "id_kabupaten": "7411",
      "nama_kecamatan": "ULUIWOI"
    },
    {
      "id_kecamatan": "7411120",
      "id_kabupaten": "7411",
      "nama_kecamatan": "UEESI"
    },
    {
      "id_kecamatan": "7412010",
      "id_kabupaten": "7412",
      "nama_kecamatan": "WAWONII TENGGARA"
    },
    {
      "id_kecamatan": "7412020",
      "id_kabupaten": "7412",
      "nama_kecamatan": "WAWONII TIMUR"
    },
    {
      "id_kecamatan": "7412030",
      "id_kabupaten": "7412",
      "nama_kecamatan": "WAWONII TIMUR LAUT"
    },
    {
      "id_kecamatan": "7412040",
      "id_kabupaten": "7412",
      "nama_kecamatan": "WAWONII UTARA"
    },
    {
      "id_kecamatan": "7412050",
      "id_kabupaten": "7412",
      "nama_kecamatan": "WAWONII SELATAN"
    },
    {
      "id_kecamatan": "7412060",
      "id_kabupaten": "7412",
      "nama_kecamatan": "WAWONII TENGAH"
    },
    {
      "id_kecamatan": "7412070",
      "id_kabupaten": "7412",
      "nama_kecamatan": "WAWONII BARAT"
    },
    {
      "id_kecamatan": "7413001",
      "id_kabupaten": "7413",
      "nama_kecamatan": "TIWORO KEPULAUAN"
    },
    {
      "id_kecamatan": "7413002",
      "id_kabupaten": "7413",
      "nama_kecamatan": "MAGINTI"
    },
    {
      "id_kecamatan": "7413003",
      "id_kabupaten": "7413",
      "nama_kecamatan": "TIWORO TENGAH"
    },
    {
      "id_kecamatan": "7413004",
      "id_kabupaten": "7413",
      "nama_kecamatan": "TIWORO SELATAN"
    },
    {
      "id_kecamatan": "7413005",
      "id_kabupaten": "7413",
      "nama_kecamatan": "TIWORO UTARA"
    },
    {
      "id_kecamatan": "7413006",
      "id_kabupaten": "7413",
      "nama_kecamatan": "LAWA"
    },
    {
      "id_kecamatan": "7413007",
      "id_kabupaten": "7413",
      "nama_kecamatan": "SAWERIGADI"
    },
    {
      "id_kecamatan": "7413008",
      "id_kabupaten": "7413",
      "nama_kecamatan": "BARANGKA"
    },
    {
      "id_kecamatan": "7413009",
      "id_kabupaten": "7413",
      "nama_kecamatan": "WA DAGA"
    },
    {
      "id_kecamatan": "7413010",
      "id_kabupaten": "7413",
      "nama_kecamatan": "KUSAMBI"
    },
    {
      "id_kecamatan": "7413011",
      "id_kabupaten": "7413",
      "nama_kecamatan": "NAPANO KUSAMBI"
    },
    {
      "id_kecamatan": "7414010",
      "id_kabupaten": "7414",
      "nama_kecamatan": "TALAGA RAYA"
    },
    {
      "id_kecamatan": "7414020",
      "id_kabupaten": "7414",
      "nama_kecamatan": "MAWASANGKA"
    },
    {
      "id_kecamatan": "7414030",
      "id_kabupaten": "7414",
      "nama_kecamatan": "MAWASANGKA TENGAH"
    },
    {
      "id_kecamatan": "7414040",
      "id_kabupaten": "7414",
      "nama_kecamatan": "MAWASANGKA TIMUR"
    },
    {
      "id_kecamatan": "7414050",
      "id_kabupaten": "7414",
      "nama_kecamatan": "LAKUDO"
    },
    {
      "id_kecamatan": "7414060",
      "id_kabupaten": "7414",
      "nama_kecamatan": "GU"
    },
    {
      "id_kecamatan": "7414070",
      "id_kabupaten": "7414",
      "nama_kecamatan": "SANGIA WAMBULU"
    },
    {
      "id_kecamatan": "7415010",
      "id_kabupaten": "7415",
      "nama_kecamatan": "BATU ATAS"
    },
    {
      "id_kecamatan": "7415020",
      "id_kabupaten": "7415",
      "nama_kecamatan": "LAPANDEWA"
    },
    {
      "id_kecamatan": "7415030",
      "id_kabupaten": "7415",
      "nama_kecamatan": "SAMPOLAWA"
    },
    {
      "id_kecamatan": "7415040",
      "id_kabupaten": "7415",
      "nama_kecamatan": "BATAUGA"
    },
    {
      "id_kecamatan": "7415050",
      "id_kabupaten": "7415",
      "nama_kecamatan": "SIOMPU BARAT"
    },
    {
      "id_kecamatan": "7415060",
      "id_kabupaten": "7415",
      "nama_kecamatan": "SIOMPU"
    },
    {
      "id_kecamatan": "7415070",
      "id_kabupaten": "7415",
      "nama_kecamatan": "KADATUA"
    },
    {
      "id_kecamatan": "7471010",
      "id_kabupaten": "7471",
      "nama_kecamatan": "MANDONGA"
    },
    {
      "id_kecamatan": "7471011",
      "id_kabupaten": "7471",
      "nama_kecamatan": "BARUGA"
    },
    {
      "id_kecamatan": "7471012",
      "id_kabupaten": "7471",
      "nama_kecamatan": "PUUWATU"
    },
    {
      "id_kecamatan": "7471013",
      "id_kabupaten": "7471",
      "nama_kecamatan": "KADIA"
    },
    {
      "id_kecamatan": "7471014",
      "id_kabupaten": "7471",
      "nama_kecamatan": "WUA-WUA"
    },
    {
      "id_kecamatan": "7471020",
      "id_kabupaten": "7471",
      "nama_kecamatan": "POASIA"
    },
    {
      "id_kecamatan": "7471021",
      "id_kabupaten": "7471",
      "nama_kecamatan": "ABELI"
    },
    {
      "id_kecamatan": "7471022",
      "id_kabupaten": "7471",
      "nama_kecamatan": "KAMBU"
    },
    {
      "id_kecamatan": "7471030",
      "id_kabupaten": "7471",
      "nama_kecamatan": "KENDARI"
    },
    {
      "id_kecamatan": "7471031",
      "id_kabupaten": "7471",
      "nama_kecamatan": "KENDARI BARAT"
    },
    {
      "id_kecamatan": "7472010",
      "id_kabupaten": "7472",
      "nama_kecamatan": "BETOAMBARI"
    },
    {
      "id_kecamatan": "7472011",
      "id_kabupaten": "7472",
      "nama_kecamatan": "MURHUM"
    },
    {
      "id_kecamatan": "7472012",
      "id_kabupaten": "7472",
      "nama_kecamatan": "BATUPOARO"
    },
    {
      "id_kecamatan": "7472020",
      "id_kabupaten": "7472",
      "nama_kecamatan": "WOLIO"
    },
    {
      "id_kecamatan": "7472021",
      "id_kabupaten": "7472",
      "nama_kecamatan": "KOKALUKUNA"
    },
    {
      "id_kecamatan": "7472030",
      "id_kabupaten": "7472",
      "nama_kecamatan": "SORAWOLIO"
    },
    {
      "id_kecamatan": "7472040",
      "id_kabupaten": "7472",
      "nama_kecamatan": "BUNGI"
    },
    {
      "id_kecamatan": "7472041",
      "id_kabupaten": "7472",
      "nama_kecamatan": "LEA-LEA"
    },
    {
      "id_kecamatan": "7501031",
      "id_kabupaten": "7501",
      "nama_kecamatan": "MANANGGU"
    },
    {
      "id_kecamatan": "7501040",
      "id_kabupaten": "7501",
      "nama_kecamatan": "TILAMUTA"
    },
    {
      "id_kecamatan": "7501041",
      "id_kabupaten": "7501",
      "nama_kecamatan": "DULUPI"
    },
    {
      "id_kecamatan": "7501042",
      "id_kabupaten": "7501",
      "nama_kecamatan": "BOTUMOITO"
    },
    {
      "id_kecamatan": "7501050",
      "id_kabupaten": "7501",
      "nama_kecamatan": "PAGUYAMAN"
    },
    {
      "id_kecamatan": "7501051",
      "id_kabupaten": "7501",
      "nama_kecamatan": "WONOSARI"
    },
    {
      "id_kecamatan": "7501052",
      "id_kabupaten": "7501",
      "nama_kecamatan": "PAGUYAMAN PANTAI"
    },
    {
      "id_kecamatan": "7502010",
      "id_kabupaten": "7502",
      "nama_kecamatan": "BATUDAA PANTAI"
    },
    {
      "id_kecamatan": "7502011",
      "id_kabupaten": "7502",
      "nama_kecamatan": "BILUHU"
    },
    {
      "id_kecamatan": "7502020",
      "id_kabupaten": "7502",
      "nama_kecamatan": "BATUDAA"
    },
    {
      "id_kecamatan": "7502021",
      "id_kabupaten": "7502",
      "nama_kecamatan": "BONGOMEME"
    },
    {
      "id_kecamatan": "7502022",
      "id_kabupaten": "7502",
      "nama_kecamatan": "TABONGO"
    },
    {
      "id_kecamatan": "7502023",
      "id_kabupaten": "7502",
      "nama_kecamatan": "DUNGALIYO"
    },
    {
      "id_kecamatan": "7502030",
      "id_kabupaten": "7502",
      "nama_kecamatan": "TIBAWA"
    },
    {
      "id_kecamatan": "7502031",
      "id_kabupaten": "7502",
      "nama_kecamatan": "PULUBALA"
    },
    {
      "id_kecamatan": "7502040",
      "id_kabupaten": "7502",
      "nama_kecamatan": "BOLIYOHUTO"
    },
    {
      "id_kecamatan": "7502041",
      "id_kabupaten": "7502",
      "nama_kecamatan": "MOOTILANGO"
    },
    {
      "id_kecamatan": "7502042",
      "id_kabupaten": "7502",
      "nama_kecamatan": "TOLANGOHULA"
    },
    {
      "id_kecamatan": "7502043",
      "id_kabupaten": "7502",
      "nama_kecamatan": "ASPARAGA"
    },
    {
      "id_kecamatan": "7502044",
      "id_kabupaten": "7502",
      "nama_kecamatan": "BILATO"
    },
    {
      "id_kecamatan": "7502070",
      "id_kabupaten": "7502",
      "nama_kecamatan": "LIMBOTO"
    },
    {
      "id_kecamatan": "7502071",
      "id_kabupaten": "7502",
      "nama_kecamatan": "LIMBOTO BARAT"
    },
    {
      "id_kecamatan": "7502080",
      "id_kabupaten": "7502",
      "nama_kecamatan": "TELAGA"
    },
    {
      "id_kecamatan": "7502081",
      "id_kabupaten": "7502",
      "nama_kecamatan": "TELAGA BIRU"
    },
    {
      "id_kecamatan": "7502082",
      "id_kabupaten": "7502",
      "nama_kecamatan": "TILANGO"
    },
    {
      "id_kecamatan": "7502083",
      "id_kabupaten": "7502",
      "nama_kecamatan": "TELAGA JAYA"
    },
    {
      "id_kecamatan": "7503010",
      "id_kabupaten": "7503",
      "nama_kecamatan": "POPAYATO"
    },
    {
      "id_kecamatan": "7503011",
      "id_kabupaten": "7503",
      "nama_kecamatan": "POPAYATO BARAT"
    },
    {
      "id_kecamatan": "7503012",
      "id_kabupaten": "7503",
      "nama_kecamatan": "POPAYATO TIMUR"
    },
    {
      "id_kecamatan": "7503020",
      "id_kabupaten": "7503",
      "nama_kecamatan": "LEMITO"
    },
    {
      "id_kecamatan": "7503021",
      "id_kabupaten": "7503",
      "nama_kecamatan": "WANGGARASI"
    },
    {
      "id_kecamatan": "7503030",
      "id_kabupaten": "7503",
      "nama_kecamatan": "MARISA"
    },
    {
      "id_kecamatan": "7503031",
      "id_kabupaten": "7503",
      "nama_kecamatan": "PATILANGGIO"
    },
    {
      "id_kecamatan": "7503032",
      "id_kabupaten": "7503",
      "nama_kecamatan": "BUNTULIA"
    },
    {
      "id_kecamatan": "7503033",
      "id_kabupaten": "7503",
      "nama_kecamatan": "DUHIADAA"
    },
    {
      "id_kecamatan": "7503040",
      "id_kabupaten": "7503",
      "nama_kecamatan": "RANDANGAN"
    },
    {
      "id_kecamatan": "7503041",
      "id_kabupaten": "7503",
      "nama_kecamatan": "TALUDITI"
    },
    {
      "id_kecamatan": "7503050",
      "id_kabupaten": "7503",
      "nama_kecamatan": "PAGUAT"
    },
    {
      "id_kecamatan": "7503051",
      "id_kabupaten": "7503",
      "nama_kecamatan": "DENGILO"
    },
    {
      "id_kecamatan": "7504010",
      "id_kabupaten": "7504",
      "nama_kecamatan": "TAPA"
    },
    {
      "id_kecamatan": "7504011",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BULANGO UTARA"
    },
    {
      "id_kecamatan": "7504012",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BULANGO SELATAN"
    },
    {
      "id_kecamatan": "7504013",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BULANGO TIMUR"
    },
    {
      "id_kecamatan": "7504014",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BULANGO ULU"
    },
    {
      "id_kecamatan": "7504020",
      "id_kabupaten": "7504",
      "nama_kecamatan": "KABILA"
    },
    {
      "id_kecamatan": "7504021",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BOTU PINGGE"
    },
    {
      "id_kecamatan": "7504022",
      "id_kabupaten": "7504",
      "nama_kecamatan": "TILONGKABILA"
    },
    {
      "id_kecamatan": "7504030",
      "id_kabupaten": "7504",
      "nama_kecamatan": "SUWAWA"
    },
    {
      "id_kecamatan": "7504031",
      "id_kabupaten": "7504",
      "nama_kecamatan": "SUWAWA SELATAN"
    },
    {
      "id_kecamatan": "7504032",
      "id_kabupaten": "7504",
      "nama_kecamatan": "SUWAWA TIMUR"
    },
    {
      "id_kecamatan": "7504033",
      "id_kabupaten": "7504",
      "nama_kecamatan": "SUWAWA TENGAH"
    },
    {
      "id_kecamatan": "7504034",
      "id_kabupaten": "7504",
      "nama_kecamatan": "PINOGU"
    },
    {
      "id_kecamatan": "7504040",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BONEPANTAI"
    },
    {
      "id_kecamatan": "7504041",
      "id_kabupaten": "7504",
      "nama_kecamatan": "KABILA BONE"
    },
    {
      "id_kecamatan": "7504042",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BONE RAYA"
    },
    {
      "id_kecamatan": "7504043",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BONE"
    },
    {
      "id_kecamatan": "7504044",
      "id_kabupaten": "7504",
      "nama_kecamatan": "BULAWA"
    },
    {
      "id_kecamatan": "7505010",
      "id_kabupaten": "7505",
      "nama_kecamatan": "ATINGGOLA"
    },
    {
      "id_kecamatan": "7505011",
      "id_kabupaten": "7505",
      "nama_kecamatan": "GENTUMA RAYA"
    },
    {
      "id_kecamatan": "7505020",
      "id_kabupaten": "7505",
      "nama_kecamatan": "KWANDANG"
    },
    {
      "id_kecamatan": "7505021",
      "id_kabupaten": "7505",
      "nama_kecamatan": "TOMILITO"
    },
    {
      "id_kecamatan": "7505022",
      "id_kabupaten": "7505",
      "nama_kecamatan": "PONELO KEPULAUAN"
    },
    {
      "id_kecamatan": "7505030",
      "id_kabupaten": "7505",
      "nama_kecamatan": "ANGGREK"
    },
    {
      "id_kecamatan": "7505031",
      "id_kabupaten": "7505",
      "nama_kecamatan": "MONANO"
    },
    {
      "id_kecamatan": "7505040",
      "id_kabupaten": "7505",
      "nama_kecamatan": "SUMALATA"
    },
    {
      "id_kecamatan": "7505041",
      "id_kabupaten": "7505",
      "nama_kecamatan": "SUMALATA TIMUR"
    },
    {
      "id_kecamatan": "7505050",
      "id_kabupaten": "7505",
      "nama_kecamatan": "TOLINGGULA"
    },
    {
      "id_kecamatan": "7505051",
      "id_kabupaten": "7505",
      "nama_kecamatan": "BIAU"
    },
    {
      "id_kecamatan": "7571010",
      "id_kabupaten": "7571",
      "nama_kecamatan": "KOTA BARAT"
    },
    {
      "id_kecamatan": "7571011",
      "id_kabupaten": "7571",
      "nama_kecamatan": "DUNGINGI"
    },
    {
      "id_kecamatan": "7571020",
      "id_kabupaten": "7571",
      "nama_kecamatan": "KOTA SELATAN"
    },
    {
      "id_kecamatan": "7571021",
      "id_kabupaten": "7571",
      "nama_kecamatan": "KOTA TIMUR"
    },
    {
      "id_kecamatan": "7571022",
      "id_kabupaten": "7571",
      "nama_kecamatan": "HULONTHALANGI"
    },
    {
      "id_kecamatan": "7571023",
      "id_kabupaten": "7571",
      "nama_kecamatan": "DUMBO RAYA"
    },
    {
      "id_kecamatan": "7571030",
      "id_kabupaten": "7571",
      "nama_kecamatan": "KOTA UTARA"
    },
    {
      "id_kecamatan": "7571031",
      "id_kabupaten": "7571",
      "nama_kecamatan": "KOTA TENGAH"
    },
    {
      "id_kecamatan": "7571032",
      "id_kabupaten": "7571",
      "nama_kecamatan": "SIPATANA"
    },
    {
      "id_kecamatan": "7601010",
      "id_kabupaten": "7601",
      "nama_kecamatan": "BANGGAE"
    },
    {
      "id_kecamatan": "7601011",
      "id_kabupaten": "7601",
      "nama_kecamatan": "BANGGAE TIMUR"
    },
    {
      "id_kecamatan": "7601020",
      "id_kabupaten": "7601",
      "nama_kecamatan": "PAMBOANG"
    },
    {
      "id_kecamatan": "7601030",
      "id_kabupaten": "7601",
      "nama_kecamatan": "SENDANA"
    },
    {
      "id_kecamatan": "7601031",
      "id_kabupaten": "7601",
      "nama_kecamatan": "TAMMERODO"
    },
    {
      "id_kecamatan": "7601033",
      "id_kabupaten": "7601",
      "nama_kecamatan": "TUBO SENDANA"
    },
    {
      "id_kecamatan": "7601040",
      "id_kabupaten": "7601",
      "nama_kecamatan": "MALUNDA"
    },
    {
      "id_kecamatan": "7601041",
      "id_kabupaten": "7601",
      "nama_kecamatan": "ULUMANDA"
    },
    {
      "id_kecamatan": "7602010",
      "id_kabupaten": "7602",
      "nama_kecamatan": "TINAMBUNG"
    },
    {
      "id_kecamatan": "7602011",
      "id_kabupaten": "7602",
      "nama_kecamatan": "BALANIPA"
    },
    {
      "id_kecamatan": "7602012",
      "id_kabupaten": "7602",
      "nama_kecamatan": "LIMBORO"
    },
    {
      "id_kecamatan": "7602020",
      "id_kabupaten": "7602",
      "nama_kecamatan": "TUBBI TARAMANU"
    },
    {
      "id_kecamatan": "7602021",
      "id_kabupaten": "7602",
      "nama_kecamatan": "ALU"
    },
    {
      "id_kecamatan": "7602030",
      "id_kabupaten": "7602",
      "nama_kecamatan": "CAMPALAGIAN"
    },
    {
      "id_kecamatan": "7602031",
      "id_kabupaten": "7602",
      "nama_kecamatan": "LUYO"
    },
    {
      "id_kecamatan": "7602040",
      "id_kabupaten": "7602",
      "nama_kecamatan": "WONOMULYO"
    },
    {
      "id_kecamatan": "7602041",
      "id_kabupaten": "7602",
      "nama_kecamatan": "MAPILLI"
    },
    {
      "id_kecamatan": "7602042",
      "id_kabupaten": "7602",
      "nama_kecamatan": "TAPANGO"
    },
    {
      "id_kecamatan": "7602043",
      "id_kabupaten": "7602",
      "nama_kecamatan": "MATAKALI"
    },
    {
      "id_kecamatan": "7602044",
      "id_kabupaten": "7602",
      "nama_kecamatan": "B U L O"
    },
    {
      "id_kecamatan": "7602050",
      "id_kabupaten": "7602",
      "nama_kecamatan": "POLEWALI"
    },
    {
      "id_kecamatan": "7602051",
      "id_kabupaten": "7602",
      "nama_kecamatan": "BINUANG"
    },
    {
      "id_kecamatan": "7602052",
      "id_kabupaten": "7602",
      "nama_kecamatan": "ANREAPI"
    },
    {
      "id_kecamatan": "7602061",
      "id_kabupaten": "7602",
      "nama_kecamatan": "MATANGNGA"
    },
    {
      "id_kecamatan": "7603010",
      "id_kabupaten": "7603",
      "nama_kecamatan": "SUMARORONG"
    },
    {
      "id_kecamatan": "7603020",
      "id_kabupaten": "7603",
      "nama_kecamatan": "MESSAWA"
    },
    {
      "id_kecamatan": "7603030",
      "id_kabupaten": "7603",
      "nama_kecamatan": "PANA"
    },
    {
      "id_kecamatan": "7603031",
      "id_kabupaten": "7603",
      "nama_kecamatan": "NOSU"
    },
    {
      "id_kecamatan": "7603040",
      "id_kabupaten": "7603",
      "nama_kecamatan": "TABANG"
    },
    {
      "id_kecamatan": "7603050",
      "id_kabupaten": "7603",
      "nama_kecamatan": "MAMASA"
    },
    {
      "id_kecamatan": "7603060",
      "id_kabupaten": "7603",
      "nama_kecamatan": "TANDUK KALUA"
    },
    {
      "id_kecamatan": "7603061",
      "id_kabupaten": "7603",
      "nama_kecamatan": "BALLA"
    },
    {
      "id_kecamatan": "7603070",
      "id_kabupaten": "7603",
      "nama_kecamatan": "SESENAPADANG"
    },
    {
      "id_kecamatan": "7603071",
      "id_kabupaten": "7603",
      "nama_kecamatan": "TAWALIAN"
    },
    {
      "id_kecamatan": "7603080",
      "id_kabupaten": "7603",
      "nama_kecamatan": "MAMBI"
    },
    {
      "id_kecamatan": "7603081",
      "id_kabupaten": "7603",
      "nama_kecamatan": "BAMBANG"
    },
    {
      "id_kecamatan": "7603082",
      "id_kabupaten": "7603",
      "nama_kecamatan": "RANTEBULAHAN TIMUR"
    },
    {
      "id_kecamatan": "7603083",
      "id_kabupaten": "7603",
      "nama_kecamatan": "MEHALAAN"
    },
    {
      "id_kecamatan": "7603090",
      "id_kabupaten": "7603",
      "nama_kecamatan": "ARALLE"
    },
    {
      "id_kecamatan": "7603091",
      "id_kabupaten": "7603",
      "nama_kecamatan": "BUNTU MALANGKA"
    },
    {
      "id_kecamatan": "7603100",
      "id_kabupaten": "7603",
      "nama_kecamatan": "TABULAHAN"
    },
    {
      "id_kecamatan": "7604010",
      "id_kabupaten": "7604",
      "nama_kecamatan": "TAPALANG"
    },
    {
      "id_kecamatan": "7604011",
      "id_kabupaten": "7604",
      "nama_kecamatan": "TAPALANG BARAT"
    },
    {
      "id_kecamatan": "7604020",
      "id_kabupaten": "7604",
      "nama_kecamatan": "MAMUJU"
    },
    {
      "id_kecamatan": "7604022",
      "id_kabupaten": "7604",
      "nama_kecamatan": "SIMBORO"
    },
    {
      "id_kecamatan": "7604023",
      "id_kabupaten": "7604",
      "nama_kecamatan": "BALABALAKANG"
    },
    {
      "id_kecamatan": "7604030",
      "id_kabupaten": "7604",
      "nama_kecamatan": "KALUKKU"
    },
    {
      "id_kecamatan": "7604031",
      "id_kabupaten": "7604",
      "nama_kecamatan": "PAPALANG"
    },
    {
      "id_kecamatan": "7604032",
      "id_kabupaten": "7604",
      "nama_kecamatan": "SAMPAGA"
    },
    {
      "id_kecamatan": "7604033",
      "id_kabupaten": "7604",
      "nama_kecamatan": "TOMMO"
    },
    {
      "id_kecamatan": "7604040",
      "id_kabupaten": "7604",
      "nama_kecamatan": "KALUMPANG"
    },
    {
      "id_kecamatan": "7604041",
      "id_kabupaten": "7604",
      "nama_kecamatan": "BONEHAU"
    },
    {
      "id_kecamatan": "7605010",
      "id_kabupaten": "7605",
      "nama_kecamatan": "SARUDU"
    },
    {
      "id_kecamatan": "7605011",
      "id_kabupaten": "7605",
      "nama_kecamatan": "DAPURANG"
    },
    {
      "id_kecamatan": "7605012",
      "id_kabupaten": "7605",
      "nama_kecamatan": "DURIPOKU"
    },
    {
      "id_kecamatan": "7605020",
      "id_kabupaten": "7605",
      "nama_kecamatan": "BARAS"
    },
    {
      "id_kecamatan": "7605021",
      "id_kabupaten": "7605",
      "nama_kecamatan": "BULU TABA"
    },
    {
      "id_kecamatan": "7605022",
      "id_kabupaten": "7605",
      "nama_kecamatan": "LARIANG"
    },
    {
      "id_kecamatan": "7605030",
      "id_kabupaten": "7605",
      "nama_kecamatan": "PASANGKAYU"
    },
    {
      "id_kecamatan": "7605031",
      "id_kabupaten": "7605",
      "nama_kecamatan": "TIKKE RAYA"
    },
    {
      "id_kecamatan": "7605032",
      "id_kabupaten": "7605",
      "nama_kecamatan": "PEDONGGA"
    },
    {
      "id_kecamatan": "7605040",
      "id_kabupaten": "7605",
      "nama_kecamatan": "BAMBALAMOTU"
    },
    {
      "id_kecamatan": "7605041",
      "id_kabupaten": "7605",
      "nama_kecamatan": "BAMBAIRA"
    },
    {
      "id_kecamatan": "7605042",
      "id_kabupaten": "7605",
      "nama_kecamatan": "SARJO"
    },
    {
      "id_kecamatan": "7606010",
      "id_kabupaten": "7606",
      "nama_kecamatan": "PANGALE"
    },
    {
      "id_kecamatan": "7606020",
      "id_kabupaten": "7606",
      "nama_kecamatan": "BUDONG-BUDONG"
    },
    {
      "id_kecamatan": "7606030",
      "id_kabupaten": "7606",
      "nama_kecamatan": "TOBADAK"
    },
    {
      "id_kecamatan": "7606040",
      "id_kabupaten": "7606",
      "nama_kecamatan": "TOPOYO"
    },
    {
      "id_kecamatan": "7606050",
      "id_kabupaten": "7606",
      "nama_kecamatan": "KAROSSA"
    },
    {
      "id_kecamatan": "8101040",
      "id_kabupaten": "8101",
      "nama_kecamatan": "TANIMBAR SELATAN"
    },
    {
      "id_kecamatan": "8101041",
      "id_kabupaten": "8101",
      "nama_kecamatan": "WER TAMRIAN"
    },
    {
      "id_kecamatan": "8101042",
      "id_kabupaten": "8101",
      "nama_kecamatan": "WER MAKTIAN"
    },
    {
      "id_kecamatan": "8101043",
      "id_kabupaten": "8101",
      "nama_kecamatan": "SELARU"
    },
    {
      "id_kecamatan": "8101050",
      "id_kabupaten": "8101",
      "nama_kecamatan": "TANIMBAR UTARA"
    },
    {
      "id_kecamatan": "8101051",
      "id_kabupaten": "8101",
      "nama_kecamatan": "YARU"
    },
    {
      "id_kecamatan": "8101052",
      "id_kabupaten": "8101",
      "nama_kecamatan": "WUAR LABOBAR"
    },
    {
      "id_kecamatan": "8101053",
      "id_kabupaten": "8101",
      "nama_kecamatan": "NIRUNMAS"
    },
    {
      "id_kecamatan": "8101054",
      "id_kabupaten": "8101",
      "nama_kecamatan": "KORMOMOLIN"
    },
    {
      "id_kecamatan": "8101055",
      "id_kabupaten": "8101",
      "nama_kecamatan": "MOLU MARU"
    },
    {
      "id_kecamatan": "8102010",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI KECIL"
    },
    {
      "id_kecamatan": "8102012",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI KECIL BARAT"
    },
    {
      "id_kecamatan": "8102013",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI KECIL TIMUR"
    },
    {
      "id_kecamatan": "8102014",
      "id_kabupaten": "8102",
      "nama_kecamatan": "HOAT SORBAY"
    },
    {
      "id_kecamatan": "8102015",
      "id_kabupaten": "8102",
      "nama_kecamatan": "MANYEUW"
    },
    {
      "id_kecamatan": "8102016",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI KECIL TIMUR SELATAN"
    },
    {
      "id_kecamatan": "8102020",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI BESAR"
    },
    {
      "id_kecamatan": "8102021",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI BESAR UTARA TIMUR"
    },
    {
      "id_kecamatan": "8102022",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI BESAR SELATAN"
    },
    {
      "id_kecamatan": "8102023",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI BESAR UTARA BARAT"
    },
    {
      "id_kecamatan": "8102024",
      "id_kabupaten": "8102",
      "nama_kecamatan": "KEI BESAR SELATAN BARAT"
    },
    {
      "id_kecamatan": "8103010",
      "id_kabupaten": "8103",
      "nama_kecamatan": "BANDA"
    },
    {
      "id_kecamatan": "8103040",
      "id_kabupaten": "8103",
      "nama_kecamatan": "TEHORU"
    },
    {
      "id_kecamatan": "8103041",
      "id_kabupaten": "8103",
      "nama_kecamatan": "TELUTIH"
    },
    {
      "id_kecamatan": "8103050",
      "id_kabupaten": "8103",
      "nama_kecamatan": "AMAHAI"
    },
    {
      "id_kecamatan": "8103051",
      "id_kabupaten": "8103",
      "nama_kecamatan": "KOTA MASOHI"
    },
    {
      "id_kecamatan": "8103052",
      "id_kabupaten": "8103",
      "nama_kecamatan": "TELUK ELPAPUTIH"
    },
    {
      "id_kecamatan": "8103060",
      "id_kabupaten": "8103",
      "nama_kecamatan": "TEON NILA SERUA"
    },
    {
      "id_kecamatan": "8103080",
      "id_kabupaten": "8103",
      "nama_kecamatan": "SAPARUA"
    },
    {
      "id_kecamatan": "8103081",
      "id_kabupaten": "8103",
      "nama_kecamatan": "NUSALAUT"
    },
    {
      "id_kecamatan": "8103082",
      "id_kabupaten": "8103",
      "nama_kecamatan": "SAPARUA TIMUR"
    },
    {
      "id_kecamatan": "8103090",
      "id_kabupaten": "8103",
      "nama_kecamatan": "P. HARUKU"
    },
    {
      "id_kecamatan": "8103100",
      "id_kabupaten": "8103",
      "nama_kecamatan": "SALAHUTU"
    },
    {
      "id_kecamatan": "8103110",
      "id_kabupaten": "8103",
      "nama_kecamatan": "LEIHITU"
    },
    {
      "id_kecamatan": "8103111",
      "id_kabupaten": "8103",
      "nama_kecamatan": "LEIHITU BARAT"
    },
    {
      "id_kecamatan": "8103140",
      "id_kabupaten": "8103",
      "nama_kecamatan": "SERAM UTARA"
    },
    {
      "id_kecamatan": "8103141",
      "id_kabupaten": "8103",
      "nama_kecamatan": "SERAM UTARA BARAT"
    },
    {
      "id_kecamatan": "8103142",
      "id_kabupaten": "8103",
      "nama_kecamatan": "SERAM UTARA TIMUR KOBI"
    },
    {
      "id_kecamatan": "8103143",
      "id_kabupaten": "8103",
      "nama_kecamatan": "SERAM UTARA TIMUR SETI"
    },
    {
      "id_kecamatan": "8104020",
      "id_kabupaten": "8104",
      "nama_kecamatan": "NAMLEA"
    },
    {
      "id_kecamatan": "8104021",
      "id_kabupaten": "8104",
      "nama_kecamatan": "WAEAPO"
    },
    {
      "id_kecamatan": "8104022",
      "id_kabupaten": "8104",
      "nama_kecamatan": "WAPLAU"
    },
    {
      "id_kecamatan": "8104023",
      "id_kabupaten": "8104",
      "nama_kecamatan": "BATA BUAL"
    },
    {
      "id_kecamatan": "8104024",
      "id_kabupaten": "8104",
      "nama_kecamatan": "TELUK KAIELY"
    },
    {
      "id_kecamatan": "8104025",
      "id_kabupaten": "8104",
      "nama_kecamatan": "WAELATA"
    },
    {
      "id_kecamatan": "8104026",
      "id_kabupaten": "8104",
      "nama_kecamatan": "LOLONG GUBA"
    },
    {
      "id_kecamatan": "8104027",
      "id_kabupaten": "8104",
      "nama_kecamatan": "LILIALY"
    },
    {
      "id_kecamatan": "8104030",
      "id_kabupaten": "8104",
      "nama_kecamatan": "AIR BUAYA"
    },
    {
      "id_kecamatan": "8104031",
      "id_kabupaten": "8104",
      "nama_kecamatan": "FENA LEISELA"
    },
    {
      "id_kecamatan": "8105010",
      "id_kabupaten": "8105",
      "nama_kecamatan": "ARU SELATAN"
    },
    {
      "id_kecamatan": "8105011",
      "id_kabupaten": "8105",
      "nama_kecamatan": "ARU SELATAN TIMUR"
    },
    {
      "id_kecamatan": "8105012",
      "id_kabupaten": "8105",
      "nama_kecamatan": "ARU SELATAN UTARA"
    },
    {
      "id_kecamatan": "8105020",
      "id_kabupaten": "8105",
      "nama_kecamatan": "ARU TENGAH"
    },
    {
      "id_kecamatan": "8105021",
      "id_kabupaten": "8105",
      "nama_kecamatan": "ARU TENGAH TIMUR"
    },
    {
      "id_kecamatan": "8105022",
      "id_kabupaten": "8105",
      "nama_kecamatan": "ARU TENGAH SELATAN"
    },
    {
      "id_kecamatan": "8105030",
      "id_kabupaten": "8105",
      "nama_kecamatan": "PULAU-PULAU ARU"
    },
    {
      "id_kecamatan": "8105031",
      "id_kabupaten": "8105",
      "nama_kecamatan": "ARU UTARA"
    },
    {
      "id_kecamatan": "8105032",
      "id_kabupaten": "8105",
      "nama_kecamatan": "ARU UTARA TIMUR BATULEY"
    },
    {
      "id_kecamatan": "8105033",
      "id_kabupaten": "8105",
      "nama_kecamatan": "SIR-SIR"
    },
    {
      "id_kecamatan": "8106010",
      "id_kabupaten": "8106",
      "nama_kecamatan": "HUAMUAL BELAKANG"
    },
    {
      "id_kecamatan": "8106011",
      "id_kabupaten": "8106",
      "nama_kecamatan": "KEPULAUAN MANIPA"
    },
    {
      "id_kecamatan": "8106020",
      "id_kabupaten": "8106",
      "nama_kecamatan": "SERAM BARAT"
    },
    {
      "id_kecamatan": "8106021",
      "id_kabupaten": "8106",
      "nama_kecamatan": "HUAMUAL"
    },
    {
      "id_kecamatan": "8106030",
      "id_kabupaten": "8106",
      "nama_kecamatan": "KAIRATU"
    },
    {
      "id_kecamatan": "8106031",
      "id_kabupaten": "8106",
      "nama_kecamatan": "KAIRATU BARAT"
    },
    {
      "id_kecamatan": "8106032",
      "id_kabupaten": "8106",
      "nama_kecamatan": "INAMOSOL"
    },
    {
      "id_kecamatan": "8106033",
      "id_kabupaten": "8106",
      "nama_kecamatan": "AMALATU"
    },
    {
      "id_kecamatan": "8106034",
      "id_kabupaten": "8106",
      "nama_kecamatan": "ELPAPUTIH"
    },
    {
      "id_kecamatan": "8106040",
      "id_kabupaten": "8106",
      "nama_kecamatan": "TANIWEL"
    },
    {
      "id_kecamatan": "8106041",
      "id_kabupaten": "8106",
      "nama_kecamatan": "TANIWEL TIMUR"
    },
    {
      "id_kecamatan": "8107010",
      "id_kabupaten": "8107",
      "nama_kecamatan": "PULAU GOROM"
    },
    {
      "id_kecamatan": "8107011",
      "id_kabupaten": "8107",
      "nama_kecamatan": "WAKATE"
    },
    {
      "id_kecamatan": "8107012",
      "id_kabupaten": "8107",
      "nama_kecamatan": "TEOR"
    },
    {
      "id_kecamatan": "8107013",
      "id_kabupaten": "8107",
      "nama_kecamatan": "GOROM TIMUR"
    },
    {
      "id_kecamatan": "8107014",
      "id_kabupaten": "8107",
      "nama_kecamatan": "PULAU PANJANG"
    },
    {
      "id_kecamatan": "8107020",
      "id_kabupaten": "8107",
      "nama_kecamatan": "SERAM TIMUR"
    },
    {
      "id_kecamatan": "8107021",
      "id_kabupaten": "8107",
      "nama_kecamatan": "TUTUK TOLU"
    },
    {
      "id_kecamatan": "8107022",
      "id_kabupaten": "8107",
      "nama_kecamatan": "KILMURY"
    },
    {
      "id_kecamatan": "8107023",
      "id_kabupaten": "8107",
      "nama_kecamatan": "LIAN VITU"
    },
    {
      "id_kecamatan": "8107024",
      "id_kabupaten": "8107",
      "nama_kecamatan": "KIAN DARAT"
    },
    {
      "id_kecamatan": "8107030",
      "id_kabupaten": "8107",
      "nama_kecamatan": "WERINAMA"
    },
    {
      "id_kecamatan": "8107031",
      "id_kabupaten": "8107",
      "nama_kecamatan": "SIWALALAT"
    },
    {
      "id_kecamatan": "8107040",
      "id_kabupaten": "8107",
      "nama_kecamatan": "BULA"
    },
    {
      "id_kecamatan": "8107041",
      "id_kabupaten": "8107",
      "nama_kecamatan": "BULA BARAT"
    },
    {
      "id_kecamatan": "8107042",
      "id_kabupaten": "8107",
      "nama_kecamatan": "TELUK WARU"
    },
    {
      "id_kecamatan": "8108010",
      "id_kabupaten": "8108",
      "nama_kecamatan": "WETAR"
    },
    {
      "id_kecamatan": "8108011",
      "id_kabupaten": "8108",
      "nama_kecamatan": "WETAR BARAT"
    },
    {
      "id_kecamatan": "8108012",
      "id_kabupaten": "8108",
      "nama_kecamatan": "WETAR UTARA"
    },
    {
      "id_kecamatan": "8108013",
      "id_kabupaten": "8108",
      "nama_kecamatan": "WETAR TIMUR"
    },
    {
      "id_kecamatan": "8108020",
      "id_kabupaten": "8108",
      "nama_kecamatan": "PP. TERSELATAN"
    },
    {
      "id_kecamatan": "8108021",
      "id_kabupaten": "8108",
      "nama_kecamatan": "KISAR UTARA"
    },
    {
      "id_kecamatan": "8108022",
      "id_kabupaten": "8108",
      "nama_kecamatan": "KEPULAUAN ROMANG"
    },
    {
      "id_kecamatan": "8108030",
      "id_kabupaten": "8108",
      "nama_kecamatan": "LETTI"
    },
    {
      "id_kecamatan": "8108041",
      "id_kabupaten": "8108",
      "nama_kecamatan": "MOA"
    },
    {
      "id_kecamatan": "8108042",
      "id_kabupaten": "8108",
      "nama_kecamatan": "LAKOR"
    },
    {
      "id_kecamatan": "8108050",
      "id_kabupaten": "8108",
      "nama_kecamatan": "DAMER"
    },
    {
      "id_kecamatan": "8108060",
      "id_kabupaten": "8108",
      "nama_kecamatan": "MDONA HIERA"
    },
    {
      "id_kecamatan": "8108070",
      "id_kabupaten": "8108",
      "nama_kecamatan": "PP. BABAR"
    },
    {
      "id_kecamatan": "8108071",
      "id_kabupaten": "8108",
      "nama_kecamatan": "PULAU WETANG"
    },
    {
      "id_kecamatan": "8108080",
      "id_kabupaten": "8108",
      "nama_kecamatan": "BABAR TIMUR"
    },
    {
      "id_kecamatan": "8108081",
      "id_kabupaten": "8108",
      "nama_kecamatan": "PULAU MASELA"
    },
    {
      "id_kecamatan": "8108082",
      "id_kabupaten": "8108",
      "nama_kecamatan": "DAWELOR DAWERA"
    },
    {
      "id_kecamatan": "8109010",
      "id_kabupaten": "8109",
      "nama_kecamatan": "KEPALA MADAN"
    },
    {
      "id_kecamatan": "8109020",
      "id_kabupaten": "8109",
      "nama_kecamatan": "LEKSULA"
    },
    {
      "id_kecamatan": "8109021",
      "id_kabupaten": "8109",
      "nama_kecamatan": "FENA FAFAN"
    },
    {
      "id_kecamatan": "8109030",
      "id_kabupaten": "8109",
      "nama_kecamatan": "NAMROLE"
    },
    {
      "id_kecamatan": "8109040",
      "id_kabupaten": "8109",
      "nama_kecamatan": "WAISAMA"
    },
    {
      "id_kecamatan": "8109050",
      "id_kabupaten": "8109",
      "nama_kecamatan": "AMBALAU"
    },
    {
      "id_kecamatan": "8171010",
      "id_kabupaten": "8171",
      "nama_kecamatan": "NUSANIWE"
    },
    {
      "id_kecamatan": "8171020",
      "id_kabupaten": "8171",
      "nama_kecamatan": "SIRIMAU"
    },
    {
      "id_kecamatan": "8171021",
      "id_kabupaten": "8171",
      "nama_kecamatan": "LEITIMUR SELATAN"
    },
    {
      "id_kecamatan": "8171030",
      "id_kabupaten": "8171",
      "nama_kecamatan": "TELUK AMBON BAGUALA"
    },
    {
      "id_kecamatan": "8171031",
      "id_kabupaten": "8171",
      "nama_kecamatan": "TELUK AMBON"
    },
    {
      "id_kecamatan": "8172010",
      "id_kabupaten": "8172",
      "nama_kecamatan": "PP. KUR"
    },
    {
      "id_kecamatan": "8172011",
      "id_kabupaten": "8172",
      "nama_kecamatan": "KUR SELATAN"
    },
    {
      "id_kecamatan": "8172020",
      "id_kabupaten": "8172",
      "nama_kecamatan": "TAYANDO TAM"
    },
    {
      "id_kecamatan": "8172030",
      "id_kabupaten": "8172",
      "nama_kecamatan": "PULAU DULLAH UTARA"
    },
    {
      "id_kecamatan": "8172040",
      "id_kabupaten": "8172",
      "nama_kecamatan": "PULAU DULLAH SELATAN"
    },
    {
      "id_kecamatan": "8201090",
      "id_kabupaten": "8201",
      "nama_kecamatan": "JAILOLO"
    },
    {
      "id_kecamatan": "8201091",
      "id_kabupaten": "8201",
      "nama_kecamatan": "JAILOLO SELATAN"
    },
    {
      "id_kecamatan": "8201100",
      "id_kabupaten": "8201",
      "nama_kecamatan": "SAHU"
    },
    {
      "id_kecamatan": "8201101",
      "id_kabupaten": "8201",
      "nama_kecamatan": "SAHU TIMUR"
    },
    {
      "id_kecamatan": "8201130",
      "id_kabupaten": "8201",
      "nama_kecamatan": "IBU"
    },
    {
      "id_kecamatan": "8201131",
      "id_kabupaten": "8201",
      "nama_kecamatan": "IBU SELATAN"
    },
    {
      "id_kecamatan": "8201132",
      "id_kabupaten": "8201",
      "nama_kecamatan": "TABARU"
    },
    {
      "id_kecamatan": "8201140",
      "id_kabupaten": "8201",
      "nama_kecamatan": "LOLODA"
    },
    {
      "id_kecamatan": "8202030",
      "id_kabupaten": "8202",
      "nama_kecamatan": "WEDA"
    },
    {
      "id_kecamatan": "8202031",
      "id_kabupaten": "8202",
      "nama_kecamatan": "WEDA SELATAN"
    },
    {
      "id_kecamatan": "8202032",
      "id_kabupaten": "8202",
      "nama_kecamatan": "WEDA UTARA"
    },
    {
      "id_kecamatan": "8202033",
      "id_kabupaten": "8202",
      "nama_kecamatan": "WEDA TENGAH"
    },
    {
      "id_kecamatan": "8202034",
      "id_kabupaten": "8202",
      "nama_kecamatan": "WEDA TIMUR"
    },
    {
      "id_kecamatan": "8202041",
      "id_kabupaten": "8202",
      "nama_kecamatan": "PULAU GEBE"
    },
    {
      "id_kecamatan": "8202042",
      "id_kabupaten": "8202",
      "nama_kecamatan": "PATANI"
    },
    {
      "id_kecamatan": "8202043",
      "id_kabupaten": "8202",
      "nama_kecamatan": "PATANI UTARA"
    },
    {
      "id_kecamatan": "8202044",
      "id_kabupaten": "8202",
      "nama_kecamatan": "PATANI BARAT"
    },
    {
      "id_kecamatan": "8202045",
      "id_kabupaten": "8202",
      "nama_kecamatan": "PATANI TIMUR"
    },
    {
      "id_kecamatan": "8203010",
      "id_kabupaten": "8203",
      "nama_kecamatan": "SULA BESI BARAT"
    },
    {
      "id_kecamatan": "8203011",
      "id_kabupaten": "8203",
      "nama_kecamatan": "SULABESI SELATAN"
    },
    {
      "id_kecamatan": "8203020",
      "id_kabupaten": "8203",
      "nama_kecamatan": "SANANA"
    },
    {
      "id_kecamatan": "8203021",
      "id_kabupaten": "8203",
      "nama_kecamatan": "SULA BESI TENGAH"
    },
    {
      "id_kecamatan": "8203022",
      "id_kabupaten": "8203",
      "nama_kecamatan": "SULABESI TIMUR"
    },
    {
      "id_kecamatan": "8203023",
      "id_kabupaten": "8203",
      "nama_kecamatan": "SANANA UTARA"
    },
    {
      "id_kecamatan": "8203030",
      "id_kabupaten": "8203",
      "nama_kecamatan": "MANGOLI TIMUR"
    },
    {
      "id_kecamatan": "8203031",
      "id_kabupaten": "8203",
      "nama_kecamatan": "MANGOLI TENGAH"
    },
    {
      "id_kecamatan": "8203032",
      "id_kabupaten": "8203",
      "nama_kecamatan": "MANGOLI UTARA TIMUR"
    },
    {
      "id_kecamatan": "8203040",
      "id_kabupaten": "8203",
      "nama_kecamatan": "MANGOLI BARAT"
    },
    {
      "id_kecamatan": "8203041",
      "id_kabupaten": "8203",
      "nama_kecamatan": "MANGOLI UTARA"
    },
    {
      "id_kecamatan": "8203042",
      "id_kabupaten": "8203",
      "nama_kecamatan": "MANGOLI SELATAN"
    },
    {
      "id_kecamatan": "8204010",
      "id_kabupaten": "8204",
      "nama_kecamatan": "OBI SELATAN"
    },
    {
      "id_kecamatan": "8204020",
      "id_kabupaten": "8204",
      "nama_kecamatan": "OBI"
    },
    {
      "id_kecamatan": "8204021",
      "id_kabupaten": "8204",
      "nama_kecamatan": "OBI BARAT"
    },
    {
      "id_kecamatan": "8204022",
      "id_kabupaten": "8204",
      "nama_kecamatan": "OBI TIMUR"
    },
    {
      "id_kecamatan": "8204023",
      "id_kabupaten": "8204",
      "nama_kecamatan": "OBI UTARA"
    },
    {
      "id_kecamatan": "8204030",
      "id_kabupaten": "8204",
      "nama_kecamatan": "BACAN"
    },
    {
      "id_kecamatan": "8204031",
      "id_kabupaten": "8204",
      "nama_kecamatan": "MANDIOLI SELATAN"
    },
    {
      "id_kecamatan": "8204032",
      "id_kabupaten": "8204",
      "nama_kecamatan": "MANDIOLI UTARA"
    },
    {
      "id_kecamatan": "8204033",
      "id_kabupaten": "8204",
      "nama_kecamatan": "BACAN SELATAN"
    },
    {
      "id_kecamatan": "8204034",
      "id_kabupaten": "8204",
      "nama_kecamatan": "BATANG LOMANG"
    },
    {
      "id_kecamatan": "8204040",
      "id_kabupaten": "8204",
      "nama_kecamatan": "BACAN TIMUR"
    },
    {
      "id_kecamatan": "8204041",
      "id_kabupaten": "8204",
      "nama_kecamatan": "BACAN TIMUR SELATAN"
    },
    {
      "id_kecamatan": "8204042",
      "id_kabupaten": "8204",
      "nama_kecamatan": "BACAN TIMUR TENGAH"
    },
    {
      "id_kecamatan": "8204050",
      "id_kabupaten": "8204",
      "nama_kecamatan": "BACAN BARAT"
    },
    {
      "id_kecamatan": "8204051",
      "id_kabupaten": "8204",
      "nama_kecamatan": "KASIRUTA BARAT"
    },
    {
      "id_kecamatan": "8204052",
      "id_kabupaten": "8204",
      "nama_kecamatan": "KASIRUTA TIMUR"
    },
    {
      "id_kecamatan": "8204053",
      "id_kabupaten": "8204",
      "nama_kecamatan": "BACAN BARAT UTARA"
    },
    {
      "id_kecamatan": "8204060",
      "id_kabupaten": "8204",
      "nama_kecamatan": "KAYOA"
    },
    {
      "id_kecamatan": "8204061",
      "id_kabupaten": "8204",
      "nama_kecamatan": "KAYOA BARAT"
    },
    {
      "id_kecamatan": "8204062",
      "id_kabupaten": "8204",
      "nama_kecamatan": "KAYOA SELATAN"
    },
    {
      "id_kecamatan": "8204063",
      "id_kabupaten": "8204",
      "nama_kecamatan": "KAYOA UTARA"
    },
    {
      "id_kecamatan": "8204070",
      "id_kabupaten": "8204",
      "nama_kecamatan": "PULAU MAKIAN"
    },
    {
      "id_kecamatan": "8204071",
      "id_kabupaten": "8204",
      "nama_kecamatan": "MAKIAN BARAT"
    },
    {
      "id_kecamatan": "8204080",
      "id_kabupaten": "8204",
      "nama_kecamatan": "GANE BARAT"
    },
    {
      "id_kecamatan": "8204081",
      "id_kabupaten": "8204",
      "nama_kecamatan": "GANE BARAT SELATAN"
    },
    {
      "id_kecamatan": "8204082",
      "id_kabupaten": "8204",
      "nama_kecamatan": "GANE BARAT UTARA"
    },
    {
      "id_kecamatan": "8204083",
      "id_kabupaten": "8204",
      "nama_kecamatan": "KEPULAUAN JORONGA"
    },
    {
      "id_kecamatan": "8204090",
      "id_kabupaten": "8204",
      "nama_kecamatan": "GANE TIMUR"
    },
    {
      "id_kecamatan": "8204091",
      "id_kabupaten": "8204",
      "nama_kecamatan": "GANE TIMUR TENGAH"
    },
    {
      "id_kecamatan": "8204092",
      "id_kabupaten": "8204",
      "nama_kecamatan": "GANE TIMUR SELATAN"
    },
    {
      "id_kecamatan": "8205010",
      "id_kabupaten": "8205",
      "nama_kecamatan": "MALIFUT"
    },
    {
      "id_kecamatan": "8205011",
      "id_kabupaten": "8205",
      "nama_kecamatan": "KAO TELUK"
    },
    {
      "id_kecamatan": "8205020",
      "id_kabupaten": "8205",
      "nama_kecamatan": "KAO"
    },
    {
      "id_kecamatan": "8205021",
      "id_kabupaten": "8205",
      "nama_kecamatan": "KAO BARAT"
    },
    {
      "id_kecamatan": "8205022",
      "id_kabupaten": "8205",
      "nama_kecamatan": "KAO UTARA"
    },
    {
      "id_kecamatan": "8205030",
      "id_kabupaten": "8205",
      "nama_kecamatan": "TOBELO SELATAN"
    },
    {
      "id_kecamatan": "8205031",
      "id_kabupaten": "8205",
      "nama_kecamatan": "TOBELO BARAT"
    },
    {
      "id_kecamatan": "8205032",
      "id_kabupaten": "8205",
      "nama_kecamatan": "TOBELO TIMUR"
    },
    {
      "id_kecamatan": "8205040",
      "id_kabupaten": "8205",
      "nama_kecamatan": "TOBELO"
    },
    {
      "id_kecamatan": "8205041",
      "id_kabupaten": "8205",
      "nama_kecamatan": "TOBELO TENGAH"
    },
    {
      "id_kecamatan": "8205042",
      "id_kabupaten": "8205",
      "nama_kecamatan": "TOBELO UTARA"
    },
    {
      "id_kecamatan": "8205050",
      "id_kabupaten": "8205",
      "nama_kecamatan": "GALELA"
    },
    {
      "id_kecamatan": "8205051",
      "id_kabupaten": "8205",
      "nama_kecamatan": "GALELA SELATAN"
    },
    {
      "id_kecamatan": "8205052",
      "id_kabupaten": "8205",
      "nama_kecamatan": "GALELA BARAT"
    },
    {
      "id_kecamatan": "8205053",
      "id_kabupaten": "8205",
      "nama_kecamatan": "GALELA UTARA"
    },
    {
      "id_kecamatan": "8205060",
      "id_kabupaten": "8205",
      "nama_kecamatan": "LOLODA UTARA"
    },
    {
      "id_kecamatan": "8205061",
      "id_kabupaten": "8205",
      "nama_kecamatan": "LOLODA KEPULAUAN"
    },
    {
      "id_kecamatan": "8206010",
      "id_kabupaten": "8206",
      "nama_kecamatan": "MABA SELATAN"
    },
    {
      "id_kecamatan": "8206011",
      "id_kabupaten": "8206",
      "nama_kecamatan": "KOTA MABA"
    },
    {
      "id_kecamatan": "8206020",
      "id_kabupaten": "8206",
      "nama_kecamatan": "WASILE SELATAN"
    },
    {
      "id_kecamatan": "8206030",
      "id_kabupaten": "8206",
      "nama_kecamatan": "WASILE"
    },
    {
      "id_kecamatan": "8206031",
      "id_kabupaten": "8206",
      "nama_kecamatan": "WASILE TIMUR"
    },
    {
      "id_kecamatan": "8206032",
      "id_kabupaten": "8206",
      "nama_kecamatan": "WASILE TENGAH"
    },
    {
      "id_kecamatan": "8206033",
      "id_kabupaten": "8206",
      "nama_kecamatan": "WASILE UTARA"
    },
    {
      "id_kecamatan": "8206040",
      "id_kabupaten": "8206",
      "nama_kecamatan": "MABA"
    },
    {
      "id_kecamatan": "8206041",
      "id_kabupaten": "8206",
      "nama_kecamatan": "MABA TENGAH"
    },
    {
      "id_kecamatan": "8206042",
      "id_kabupaten": "8206",
      "nama_kecamatan": "MABA UTARA"
    },
    {
      "id_kecamatan": "8207010",
      "id_kabupaten": "8207",
      "nama_kecamatan": "MOROTAI SELATAN"
    },
    {
      "id_kecamatan": "8207020",
      "id_kabupaten": "8207",
      "nama_kecamatan": "MOROTAI TIMUR"
    },
    {
      "id_kecamatan": "8207030",
      "id_kabupaten": "8207",
      "nama_kecamatan": "MOROTAI SELATAN BARAT"
    },
    {
      "id_kecamatan": "8207040",
      "id_kabupaten": "8207",
      "nama_kecamatan": "MOROTAI JAYA"
    },
    {
      "id_kecamatan": "8207050",
      "id_kabupaten": "8207",
      "nama_kecamatan": "MOROTAI UTARA"
    },
    {
      "id_kecamatan": "8208010",
      "id_kabupaten": "8208",
      "nama_kecamatan": "TALIABU BARAT"
    },
    {
      "id_kecamatan": "8208020",
      "id_kabupaten": "8208",
      "nama_kecamatan": "TALIABU SELATAN"
    },
    {
      "id_kecamatan": "8208030",
      "id_kabupaten": "8208",
      "nama_kecamatan": "TABONA"
    },
    {
      "id_kecamatan": "8208040",
      "id_kabupaten": "8208",
      "nama_kecamatan": "TALIABU TIMUR SELATAN"
    },
    {
      "id_kecamatan": "8208050",
      "id_kabupaten": "8208",
      "nama_kecamatan": "TALIABU TIMUR"
    },
    {
      "id_kecamatan": "8208060",
      "id_kabupaten": "8208",
      "nama_kecamatan": "TALIABU UTARA"
    },
    {
      "id_kecamatan": "8208070",
      "id_kabupaten": "8208",
      "nama_kecamatan": "LEDE"
    },
    {
      "id_kecamatan": "8208080",
      "id_kabupaten": "8208",
      "nama_kecamatan": "TALIABU BARAT LAUT"
    },
    {
      "id_kecamatan": "8271010",
      "id_kabupaten": "8271",
      "nama_kecamatan": "PULAU TERNATE"
    },
    {
      "id_kecamatan": "8271011",
      "id_kabupaten": "8271",
      "nama_kecamatan": "MOTI"
    },
    {
      "id_kecamatan": "8271012",
      "id_kabupaten": "8271",
      "nama_kecamatan": "PULAU BATANG DUA"
    },
    {
      "id_kecamatan": "8271013",
      "id_kabupaten": "8271",
      "nama_kecamatan": "PULAU HIRI"
    },
    {
      "id_kecamatan": "8271020",
      "id_kabupaten": "8271",
      "nama_kecamatan": "TERNATE SELATAN"
    },
    {
      "id_kecamatan": "8271021",
      "id_kabupaten": "8271",
      "nama_kecamatan": "TERNATE TENGAH"
    },
    {
      "id_kecamatan": "8271030",
      "id_kabupaten": "8271",
      "nama_kecamatan": "TERNATE UTARA"
    },
    {
      "id_kecamatan": "8272010",
      "id_kabupaten": "8272",
      "nama_kecamatan": "TIDORE SELATAN"
    },
    {
      "id_kecamatan": "8272020",
      "id_kabupaten": "8272",
      "nama_kecamatan": "TIDORE UTARA"
    },
    {
      "id_kecamatan": "8272030",
      "id_kabupaten": "8272",
      "nama_kecamatan": "TIDORE"
    },
    {
      "id_kecamatan": "8272031",
      "id_kabupaten": "8272",
      "nama_kecamatan": "TIDORE TIMUR"
    },
    {
      "id_kecamatan": "8272040",
      "id_kabupaten": "8272",
      "nama_kecamatan": "OBA"
    },
    {
      "id_kecamatan": "8272041",
      "id_kabupaten": "8272",
      "nama_kecamatan": "OBA SELATAN"
    },
    {
      "id_kecamatan": "8272050",
      "id_kabupaten": "8272",
      "nama_kecamatan": "OBA UTARA"
    },
    {
      "id_kecamatan": "8272051",
      "id_kabupaten": "8272",
      "nama_kecamatan": "OBA TENGAH"
    },
    {
      "id_kecamatan": "9101050",
      "id_kabupaten": "9101",
      "nama_kecamatan": "FAKFAK TIMUR"
    },
    {
      "id_kecamatan": "9101051",
      "id_kabupaten": "9101",
      "nama_kecamatan": "KARAS"
    },
    {
      "id_kecamatan": "9101060",
      "id_kabupaten": "9101",
      "nama_kecamatan": "FAKFAK"
    },
    {
      "id_kecamatan": "9101061",
      "id_kabupaten": "9101",
      "nama_kecamatan": "FAKFAK TENGAH"
    },
    {
      "id_kecamatan": "9101070",
      "id_kabupaten": "9101",
      "nama_kecamatan": "FAKFAK BARAT"
    },
    {
      "id_kecamatan": "9101080",
      "id_kabupaten": "9101",
      "nama_kecamatan": "KOKAS"
    },
    {
      "id_kecamatan": "9101081",
      "id_kabupaten": "9101",
      "nama_kecamatan": "TELUK PATIPI"
    },
    {
      "id_kecamatan": "9101082",
      "id_kabupaten": "9101",
      "nama_kecamatan": "KRAMONGMONGGA"
    },
    {
      "id_kecamatan": "9101083",
      "id_kabupaten": "9101",
      "nama_kecamatan": "BOMBERAY"
    },
    {
      "id_kecamatan": "9102010",
      "id_kabupaten": "9102",
      "nama_kecamatan": "BURUWAY"
    },
    {
      "id_kecamatan": "9102020",
      "id_kabupaten": "9102",
      "nama_kecamatan": "TELUK ARGUNI"
    },
    {
      "id_kecamatan": "9102021",
      "id_kabupaten": "9102",
      "nama_kecamatan": "TELUK ARGUNI BAWAH"
    },
    {
      "id_kecamatan": "9102030",
      "id_kabupaten": "9102",
      "nama_kecamatan": "KAIMANA"
    },
    {
      "id_kecamatan": "9102031",
      "id_kabupaten": "9102",
      "nama_kecamatan": "KAMBRAU"
    },
    {
      "id_kecamatan": "9102040",
      "id_kabupaten": "9102",
      "nama_kecamatan": "TELUK ETNA"
    },
    {
      "id_kecamatan": "9102041",
      "id_kabupaten": "9102",
      "nama_kecamatan": "YAMOR"
    },
    {
      "id_kecamatan": "9103010",
      "id_kabupaten": "9103",
      "nama_kecamatan": "NAIKERE"
    },
    {
      "id_kecamatan": "9103020",
      "id_kabupaten": "9103",
      "nama_kecamatan": "WONDIBOY"
    },
    {
      "id_kecamatan": "9103021",
      "id_kabupaten": "9103",
      "nama_kecamatan": "RASIEY"
    },
    {
      "id_kecamatan": "9103022",
      "id_kabupaten": "9103",
      "nama_kecamatan": "KURI WAMESA"
    },
    {
      "id_kecamatan": "9103030",
      "id_kabupaten": "9103",
      "nama_kecamatan": "WASIOR"
    },
    {
      "id_kecamatan": "9103040",
      "id_kabupaten": "9103",
      "nama_kecamatan": "DUAIRI"
    },
    {
      "id_kecamatan": "9103041",
      "id_kabupaten": "9103",
      "nama_kecamatan": "ROON"
    },
    {
      "id_kecamatan": "9103050",
      "id_kabupaten": "9103",
      "nama_kecamatan": "WINDESI"
    },
    {
      "id_kecamatan": "9103051",
      "id_kabupaten": "9103",
      "nama_kecamatan": "NIKIWAR"
    },
    {
      "id_kecamatan": "9103060",
      "id_kabupaten": "9103",
      "nama_kecamatan": "WAMESA"
    },
    {
      "id_kecamatan": "9103061",
      "id_kabupaten": "9103",
      "nama_kecamatan": "ROSWAR"
    },
    {
      "id_kecamatan": "9103070",
      "id_kabupaten": "9103",
      "nama_kecamatan": "RUMBERPON"
    },
    {
      "id_kecamatan": "9103071",
      "id_kabupaten": "9103",
      "nama_kecamatan": "SOUG JAYA"
    },
    {
      "id_kecamatan": "9104010",
      "id_kabupaten": "9104",
      "nama_kecamatan": "FAFURWAR"
    },
    {
      "id_kecamatan": "9104020",
      "id_kabupaten": "9104",
      "nama_kecamatan": "BABO"
    },
    {
      "id_kecamatan": "9104021",
      "id_kabupaten": "9104",
      "nama_kecamatan": "SUMURI"
    },
    {
      "id_kecamatan": "9104022",
      "id_kabupaten": "9104",
      "nama_kecamatan": "AROBA"
    },
    {
      "id_kecamatan": "9104023",
      "id_kabupaten": "9104",
      "nama_kecamatan": "KAITARO"
    },
    {
      "id_kecamatan": "9104030",
      "id_kabupaten": "9104",
      "nama_kecamatan": "KURI"
    },
    {
      "id_kecamatan": "9104040",
      "id_kabupaten": "9104",
      "nama_kecamatan": "WAMESA"
    },
    {
      "id_kecamatan": "9104050",
      "id_kabupaten": "9104",
      "nama_kecamatan": "BINTUNI"
    },
    {
      "id_kecamatan": "9104051",
      "id_kabupaten": "9104",
      "nama_kecamatan": "MANIMERI"
    },
    {
      "id_kecamatan": "9104052",
      "id_kabupaten": "9104",
      "nama_kecamatan": "TUHIBA"
    },
    {
      "id_kecamatan": "9104053",
      "id_kabupaten": "9104",
      "nama_kecamatan": "DATARAN BEIMES"
    },
    {
      "id_kecamatan": "9104060",
      "id_kabupaten": "9104",
      "nama_kecamatan": "TEMBUNI"
    },
    {
      "id_kecamatan": "9104070",
      "id_kabupaten": "9104",
      "nama_kecamatan": "ARANDAY"
    },
    {
      "id_kecamatan": "9104071",
      "id_kabupaten": "9104",
      "nama_kecamatan": "KAMUNDAN"
    },
    {
      "id_kecamatan": "9104072",
      "id_kabupaten": "9104",
      "nama_kecamatan": "TOMU"
    },
    {
      "id_kecamatan": "9104073",
      "id_kabupaten": "9104",
      "nama_kecamatan": "WERIAGAR"
    },
    {
      "id_kecamatan": "9104080",
      "id_kabupaten": "9104",
      "nama_kecamatan": "MOSKONA SELATAN"
    },
    {
      "id_kecamatan": "9104081",
      "id_kabupaten": "9104",
      "nama_kecamatan": "MEYADO"
    },
    {
      "id_kecamatan": "9104082",
      "id_kabupaten": "9104",
      "nama_kecamatan": "MOSKONA BARAT"
    },
    {
      "id_kecamatan": "9104090",
      "id_kabupaten": "9104",
      "nama_kecamatan": "MERDEY"
    },
    {
      "id_kecamatan": "9104091",
      "id_kabupaten": "9104",
      "nama_kecamatan": "BISCOOP"
    },
    {
      "id_kecamatan": "9104092",
      "id_kabupaten": "9104",
      "nama_kecamatan": "MASYETA"
    },
    {
      "id_kecamatan": "9104100",
      "id_kabupaten": "9104",
      "nama_kecamatan": "MOSKONA UTARA"
    },
    {
      "id_kecamatan": "9104101",
      "id_kabupaten": "9104",
      "nama_kecamatan": "MOSKONA TIMUR"
    },
    {
      "id_kecamatan": "9105110",
      "id_kabupaten": "9105",
      "nama_kecamatan": "WARMARE"
    },
    {
      "id_kecamatan": "9105120",
      "id_kabupaten": "9105",
      "nama_kecamatan": "PRAFI"
    },
    {
      "id_kecamatan": "9105141",
      "id_kabupaten": "9105",
      "nama_kecamatan": "MANOKWARI BARAT"
    },
    {
      "id_kecamatan": "9105142",
      "id_kabupaten": "9105",
      "nama_kecamatan": "MANOKWARI TIMUR"
    },
    {
      "id_kecamatan": "9105143",
      "id_kabupaten": "9105",
      "nama_kecamatan": "MANOKWARI UTARA"
    },
    {
      "id_kecamatan": "9105144",
      "id_kabupaten": "9105",
      "nama_kecamatan": "MANOKWARI SELATAN"
    },
    {
      "id_kecamatan": "9105146",
      "id_kabupaten": "9105",
      "nama_kecamatan": "TANAH RUBU"
    },
    {
      "id_kecamatan": "9105170",
      "id_kabupaten": "9105",
      "nama_kecamatan": "MASNI"
    },
    {
      "id_kecamatan": "9105171",
      "id_kabupaten": "9105",
      "nama_kecamatan": "SIDEY"
    },
    {
      "id_kecamatan": "9106010",
      "id_kabupaten": "9106",
      "nama_kecamatan": "INANWATAN"
    },
    {
      "id_kecamatan": "9106011",
      "id_kabupaten": "9106",
      "nama_kecamatan": "METEMANI"
    },
    {
      "id_kecamatan": "9106020",
      "id_kabupaten": "9106",
      "nama_kecamatan": "KOKODA"
    },
    {
      "id_kecamatan": "9106021",
      "id_kabupaten": "9106",
      "nama_kecamatan": "KAIS"
    },
    {
      "id_kecamatan": "9106022",
      "id_kabupaten": "9106",
      "nama_kecamatan": "KOKODA UTARA"
    },
    {
      "id_kecamatan": "9106023",
      "id_kabupaten": "9106",
      "nama_kecamatan": "KAIS DARAT"
    },
    {
      "id_kecamatan": "9106060",
      "id_kabupaten": "9106",
      "nama_kecamatan": "MOSWAREN"
    },
    {
      "id_kecamatan": "9106070",
      "id_kabupaten": "9106",
      "nama_kecamatan": "TEMINABUAN"
    },
    {
      "id_kecamatan": "9106071",
      "id_kabupaten": "9106",
      "nama_kecamatan": "SEREMUK"
    },
    {
      "id_kecamatan": "9106072",
      "id_kabupaten": "9106",
      "nama_kecamatan": "WAYER"
    },
    {
      "id_kecamatan": "9106073",
      "id_kabupaten": "9106",
      "nama_kecamatan": "KONDA"
    },
    {
      "id_kecamatan": "9106074",
      "id_kabupaten": "9106",
      "nama_kecamatan": "SAIFI"
    },
    {
      "id_kecamatan": "9106080",
      "id_kabupaten": "9106",
      "nama_kecamatan": "SAWIAT"
    },
    {
      "id_kecamatan": "9106081",
      "id_kabupaten": "9106",
      "nama_kecamatan": "FOKOUR"
    },
    {
      "id_kecamatan": "9106082",
      "id_kabupaten": "9106",
      "nama_kecamatan": "SALKMA"
    },
    {
      "id_kecamatan": "9107060",
      "id_kabupaten": "9107",
      "nama_kecamatan": "MORAID"
    },
    {
      "id_kecamatan": "9107061",
      "id_kabupaten": "9107",
      "nama_kecamatan": "KLASO"
    },
    {
      "id_kecamatan": "9107100",
      "id_kabupaten": "9107",
      "nama_kecamatan": "MAKBON"
    },
    {
      "id_kecamatan": "9107101",
      "id_kabupaten": "9107",
      "nama_kecamatan": "KLAYILI"
    },
    {
      "id_kecamatan": "9107110",
      "id_kabupaten": "9107",
      "nama_kecamatan": "BERAUR"
    },
    {
      "id_kecamatan": "9107111",
      "id_kabupaten": "9107",
      "nama_kecamatan": "KLAMONO"
    },
    {
      "id_kecamatan": "9107112",
      "id_kabupaten": "9107",
      "nama_kecamatan": "KLABOT"
    },
    {
      "id_kecamatan": "9107113",
      "id_kabupaten": "9107",
      "nama_kecamatan": "KLAWAK"
    },
    {
      "id_kecamatan": "9107120",
      "id_kabupaten": "9107",
      "nama_kecamatan": "SALAWATI"
    },
    {
      "id_kecamatan": "9107121",
      "id_kabupaten": "9107",
      "nama_kecamatan": "MAYAMUK"
    },
    {
      "id_kecamatan": "9107122",
      "id_kabupaten": "9107",
      "nama_kecamatan": "SALAWATI TIMUR"
    },
    {
      "id_kecamatan": "9107130",
      "id_kabupaten": "9107",
      "nama_kecamatan": "SEGET"
    },
    {
      "id_kecamatan": "9107131",
      "id_kabupaten": "9107",
      "nama_kecamatan": "SEGUN"
    },
    {
      "id_kecamatan": "9107132",
      "id_kabupaten": "9107",
      "nama_kecamatan": "SALAWATI SELATAN"
    },
    {
      "id_kecamatan": "9107170",
      "id_kabupaten": "9107",
      "nama_kecamatan": "AIMAS"
    },
    {
      "id_kecamatan": "9107171",
      "id_kabupaten": "9107",
      "nama_kecamatan": "MARIAT"
    },
    {
      "id_kecamatan": "9107172",
      "id_kabupaten": "9107",
      "nama_kecamatan": "SORONG"
    },
    {
      "id_kecamatan": "9107180",
      "id_kabupaten": "9107",
      "nama_kecamatan": "SAYOSA"
    },
    {
      "id_kecamatan": "9107181",
      "id_kabupaten": "9107",
      "nama_kecamatan": "MAUDUS"
    },
    {
      "id_kecamatan": "9108011",
      "id_kabupaten": "9108",
      "nama_kecamatan": "MISOOL SELATAN"
    },
    {
      "id_kecamatan": "9108012",
      "id_kabupaten": "9108",
      "nama_kecamatan": "MISOOL BARAT"
    },
    {
      "id_kecamatan": "9108020",
      "id_kabupaten": "9108",
      "nama_kecamatan": "MISOOL"
    },
    {
      "id_kecamatan": "9108021",
      "id_kabupaten": "9108",
      "nama_kecamatan": "KOFIAU"
    },
    {
      "id_kecamatan": "9108022",
      "id_kabupaten": "9108",
      "nama_kecamatan": "MISOOL TIMUR"
    },
    {
      "id_kecamatan": "9108023",
      "id_kabupaten": "9108",
      "nama_kecamatan": "KEPULAUAN SEMBILAN"
    },
    {
      "id_kecamatan": "9108031",
      "id_kabupaten": "9108",
      "nama_kecamatan": "SALAWATI UTARA"
    },
    {
      "id_kecamatan": "9108033",
      "id_kabupaten": "9108",
      "nama_kecamatan": "SALAWATI TENGAH"
    },
    {
      "id_kecamatan": "9108034",
      "id_kabupaten": "9108",
      "nama_kecamatan": "SALAWATI BARAT"
    },
    {
      "id_kecamatan": "9108035",
      "id_kabupaten": "9108",
      "nama_kecamatan": "BATANTA SELATAN"
    },
    {
      "id_kecamatan": "9108036",
      "id_kabupaten": "9108",
      "nama_kecamatan": "BATANTA UTARA"
    },
    {
      "id_kecamatan": "9108040",
      "id_kabupaten": "9108",
      "nama_kecamatan": "WAIGEO SELATAN"
    },
    {
      "id_kecamatan": "9108041",
      "id_kabupaten": "9108",
      "nama_kecamatan": "TELUK MAYALIBIT"
    },
    {
      "id_kecamatan": "9108042",
      "id_kabupaten": "9108",
      "nama_kecamatan": "MEOS MANSAR"
    },
    {
      "id_kecamatan": "9108043",
      "id_kabupaten": "9108",
      "nama_kecamatan": "KOTA WAISAI"
    },
    {
      "id_kecamatan": "9108044",
      "id_kabupaten": "9108",
      "nama_kecamatan": "TIPLOL MAYALIBIT"
    },
    {
      "id_kecamatan": "9108050",
      "id_kabupaten": "9108",
      "nama_kecamatan": "WAIGEO BARAT"
    },
    {
      "id_kecamatan": "9108051",
      "id_kabupaten": "9108",
      "nama_kecamatan": "WAIGEO BARAT KEPULAUAN"
    },
    {
      "id_kecamatan": "9108060",
      "id_kabupaten": "9108",
      "nama_kecamatan": "WAIGEO UTARA"
    },
    {
      "id_kecamatan": "9108061",
      "id_kabupaten": "9108",
      "nama_kecamatan": "WARWARBOMI"
    },
    {
      "id_kecamatan": "9108062",
      "id_kabupaten": "9108",
      "nama_kecamatan": "SUPNIN"
    },
    {
      "id_kecamatan": "9108070",
      "id_kabupaten": "9108",
      "nama_kecamatan": "KEPULAUAN AYAU"
    },
    {
      "id_kecamatan": "9108071",
      "id_kabupaten": "9108",
      "nama_kecamatan": "AYAU"
    },
    {
      "id_kecamatan": "9108080",
      "id_kabupaten": "9108",
      "nama_kecamatan": "WAIGEO TIMUR"
    },
    {
      "id_kecamatan": "9109010",
      "id_kabupaten": "9109",
      "nama_kecamatan": "FEF"
    },
    {
      "id_kecamatan": "9109011",
      "id_kabupaten": "9109",
      "nama_kecamatan": "SYUJAK"
    },
    {
      "id_kecamatan": "9109020",
      "id_kabupaten": "9109",
      "nama_kecamatan": "MIYAH"
    },
    {
      "id_kecamatan": "9109030",
      "id_kabupaten": "9109",
      "nama_kecamatan": "ABUN"
    },
    {
      "id_kecamatan": "9109040",
      "id_kabupaten": "9109",
      "nama_kecamatan": "KWOOR"
    },
    {
      "id_kecamatan": "9109050",
      "id_kabupaten": "9109",
      "nama_kecamatan": "SAUSAPOR"
    },
    {
      "id_kecamatan": "9109060",
      "id_kabupaten": "9109",
      "nama_kecamatan": "YEMBUN"
    },
    {
      "id_kecamatan": "9109070",
      "id_kabupaten": "9109",
      "nama_kecamatan": "KEBAR"
    },
    {
      "id_kecamatan": "9109080",
      "id_kabupaten": "9109",
      "nama_kecamatan": "SENOPI"
    },
    {
      "id_kecamatan": "9109090",
      "id_kabupaten": "9109",
      "nama_kecamatan": "AMBERBAKEN"
    },
    {
      "id_kecamatan": "9109100",
      "id_kabupaten": "9109",
      "nama_kecamatan": "MUBARNI / ARFU"
    },
    {
      "id_kecamatan": "9110010",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AITINYO BARAT/ATHABU"
    },
    {
      "id_kecamatan": "9110011",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU SELATAN JAYA"
    },
    {
      "id_kecamatan": "9110020",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AITINYO"
    },
    {
      "id_kecamatan": "9110021",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AITINYO TENGAH"
    },
    {
      "id_kecamatan": "9110030",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AIFAT SELATAN"
    },
    {
      "id_kecamatan": "9110031",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AIFAT TIMUR SELATAN"
    },
    {
      "id_kecamatan": "9110040",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AIFAT"
    },
    {
      "id_kecamatan": "9110050",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AITINYO UTARA"
    },
    {
      "id_kecamatan": "9110051",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AITINYO RAYA"
    },
    {
      "id_kecamatan": "9110060",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU TIMUR"
    },
    {
      "id_kecamatan": "9110061",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU TIMUR SELATAN"
    },
    {
      "id_kecamatan": "9110070",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU"
    },
    {
      "id_kecamatan": "9110071",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU SELATAN"
    },
    {
      "id_kecamatan": "9110072",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU JAYA"
    },
    {
      "id_kecamatan": "9110073",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU TENGAH"
    },
    {
      "id_kecamatan": "9110074",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU BARAT"
    },
    {
      "id_kecamatan": "9110080",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU UTARA"
    },
    {
      "id_kecamatan": "9110081",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AYAMARU UTARA TIMUR"
    },
    {
      "id_kecamatan": "9110090",
      "id_kabupaten": "9110",
      "nama_kecamatan": "MARE"
    },
    {
      "id_kecamatan": "9110091",
      "id_kabupaten": "9110",
      "nama_kecamatan": "MARE SELATAN"
    },
    {
      "id_kecamatan": "9110100",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AIFAT UTARA"
    },
    {
      "id_kecamatan": "9110110",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AIFAT TIMUR"
    },
    {
      "id_kecamatan": "9110111",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AIFAT TIMUR TENGAH"
    },
    {
      "id_kecamatan": "9110112",
      "id_kabupaten": "9110",
      "nama_kecamatan": "AIFAT TIMUR JAUH"
    },
    {
      "id_kecamatan": "9111010",
      "id_kabupaten": "9111",
      "nama_kecamatan": "TAHOSTA"
    },
    {
      "id_kecamatan": "9111020",
      "id_kabupaten": "9111",
      "nama_kecamatan": "DATARAN ISIM"
    },
    {
      "id_kecamatan": "9111030",
      "id_kabupaten": "9111",
      "nama_kecamatan": "NENEI"
    },
    {
      "id_kecamatan": "9111040",
      "id_kabupaten": "9111",
      "nama_kecamatan": "MOMI WAREN"
    },
    {
      "id_kecamatan": "9111050",
      "id_kabupaten": "9111",
      "nama_kecamatan": "RANSIKI"
    },
    {
      "id_kecamatan": "9111060",
      "id_kabupaten": "9111",
      "nama_kecamatan": "ORANSBARI"
    },
    {
      "id_kecamatan": "9112010",
      "id_kabupaten": "9112",
      "nama_kecamatan": "DIDOHU"
    },
    {
      "id_kecamatan": "9112020",
      "id_kabupaten": "9112",
      "nama_kecamatan": "SURUREY"
    },
    {
      "id_kecamatan": "9112030",
      "id_kabupaten": "9112",
      "nama_kecamatan": "ANGGI GIDA"
    },
    {
      "id_kecamatan": "9112040",
      "id_kabupaten": "9112",
      "nama_kecamatan": "MEMBEY"
    },
    {
      "id_kecamatan": "9112050",
      "id_kabupaten": "9112",
      "nama_kecamatan": "ANGGI"
    },
    {
      "id_kecamatan": "9112060",
      "id_kabupaten": "9112",
      "nama_kecamatan": "TAIGE"
    },
    {
      "id_kecamatan": "9112070",
      "id_kabupaten": "9112",
      "nama_kecamatan": "HINGK"
    },
    {
      "id_kecamatan": "9112080",
      "id_kabupaten": "9112",
      "nama_kecamatan": "MENYAMBOUW"
    },
    {
      "id_kecamatan": "9112090",
      "id_kabupaten": "9112",
      "nama_kecamatan": "CATUBOUW"
    },
    {
      "id_kecamatan": "9112100",
      "id_kabupaten": "9112",
      "nama_kecamatan": "TESTEGA"
    },
    {
      "id_kecamatan": "9171010",
      "id_kabupaten": "9171",
      "nama_kecamatan": "SORONG BARAT"
    },
    {
      "id_kecamatan": "9171011",
      "id_kabupaten": "9171",
      "nama_kecamatan": "SORONG KEPULAUAN"
    },
    {
      "id_kecamatan": "9171012",
      "id_kabupaten": "9171",
      "nama_kecamatan": "MALADOMES"
    },
    {
      "id_kecamatan": "9171020",
      "id_kabupaten": "9171",
      "nama_kecamatan": "SORONG TIMUR"
    },
    {
      "id_kecamatan": "9171021",
      "id_kabupaten": "9171",
      "nama_kecamatan": "SORONG UTARA"
    },
    {
      "id_kecamatan": "9171022",
      "id_kabupaten": "9171",
      "nama_kecamatan": "SORONG"
    },
    {
      "id_kecamatan": "9171023",
      "id_kabupaten": "9171",
      "nama_kecamatan": "SORONG MANOI"
    },
    {
      "id_kecamatan": "9171024",
      "id_kabupaten": "9171",
      "nama_kecamatan": "KLAURUNG"
    },
    {
      "id_kecamatan": "9171025",
      "id_kabupaten": "9171",
      "nama_kecamatan": "MALAIMSIMSA"
    },
    {
      "id_kecamatan": "9171026",
      "id_kabupaten": "9171",
      "nama_kecamatan": "SORONG KOTA"
    },
    {
      "id_kecamatan": "9401010",
      "id_kabupaten": "9401",
      "nama_kecamatan": "KIMAAM"
    },
    {
      "id_kecamatan": "9401011",
      "id_kabupaten": "9401",
      "nama_kecamatan": "WAAN"
    },
    {
      "id_kecamatan": "9401012",
      "id_kabupaten": "9401",
      "nama_kecamatan": "TABONJI"
    },
    {
      "id_kecamatan": "9401013",
      "id_kabupaten": "9401",
      "nama_kecamatan": "ILWAYAB"
    },
    {
      "id_kecamatan": "9401020",
      "id_kabupaten": "9401",
      "nama_kecamatan": "OKABA"
    },
    {
      "id_kecamatan": "9401021",
      "id_kabupaten": "9401",
      "nama_kecamatan": "TUBANG"
    },
    {
      "id_kecamatan": "9401022",
      "id_kabupaten": "9401",
      "nama_kecamatan": "NGGUTI"
    },
    {
      "id_kecamatan": "9401023",
      "id_kabupaten": "9401",
      "nama_kecamatan": "KAPTEL"
    },
    {
      "id_kecamatan": "9401030",
      "id_kabupaten": "9401",
      "nama_kecamatan": "KURIK"
    },
    {
      "id_kecamatan": "9401031",
      "id_kabupaten": "9401",
      "nama_kecamatan": "MALIND"
    },
    {
      "id_kecamatan": "9401032",
      "id_kabupaten": "9401",
      "nama_kecamatan": "ANIMHA"
    },
    {
      "id_kecamatan": "9401040",
      "id_kabupaten": "9401",
      "nama_kecamatan": "MERAUKE"
    },
    {
      "id_kecamatan": "9401041",
      "id_kabupaten": "9401",
      "nama_kecamatan": "SEMANGGA"
    },
    {
      "id_kecamatan": "9401042",
      "id_kabupaten": "9401",
      "nama_kecamatan": "TANAH MIRING"
    },
    {
      "id_kecamatan": "9401043",
      "id_kabupaten": "9401",
      "nama_kecamatan": "JAGEBOB"
    },
    {
      "id_kecamatan": "9401044",
      "id_kabupaten": "9401",
      "nama_kecamatan": "SOTA"
    },
    {
      "id_kecamatan": "9401045",
      "id_kabupaten": "9401",
      "nama_kecamatan": "NAUKENJERAI"
    },
    {
      "id_kecamatan": "9401050",
      "id_kabupaten": "9401",
      "nama_kecamatan": "MUTING"
    },
    {
      "id_kecamatan": "9401051",
      "id_kabupaten": "9401",
      "nama_kecamatan": "ELIGOBEL"
    },
    {
      "id_kecamatan": "9401052",
      "id_kabupaten": "9401",
      "nama_kecamatan": "ULILIN"
    },
    {
      "id_kecamatan": "9402110",
      "id_kabupaten": "9402",
      "nama_kecamatan": "WAMENA"
    },
    {
      "id_kecamatan": "9402111",
      "id_kabupaten": "9402",
      "nama_kecamatan": "ASOLOKOBAL"
    },
    {
      "id_kecamatan": "9402112",
      "id_kabupaten": "9402",
      "nama_kecamatan": "WALELAGAMA"
    },
    {
      "id_kecamatan": "9402113",
      "id_kabupaten": "9402",
      "nama_kecamatan": "TRIKORA"
    },
    {
      "id_kecamatan": "9402114",
      "id_kabupaten": "9402",
      "nama_kecamatan": "NAPUA"
    },
    {
      "id_kecamatan": "9402115",
      "id_kabupaten": "9402",
      "nama_kecamatan": "WALAIK"
    },
    {
      "id_kecamatan": "9402116",
      "id_kabupaten": "9402",
      "nama_kecamatan": "WOUMA"
    },
    {
      "id_kecamatan": "9402117",
      "id_kabupaten": "9402",
      "nama_kecamatan": "WALESI"
    },
    {
      "id_kecamatan": "9402118",
      "id_kabupaten": "9402",
      "nama_kecamatan": "ASOTIPO"
    },
    {
      "id_kecamatan": "9402119",
      "id_kabupaten": "9402",
      "nama_kecamatan": "MAIMA"
    },
    {
      "id_kecamatan": "9402120",
      "id_kabupaten": "9402",
      "nama_kecamatan": "HUBIKOSI"
    },
    {
      "id_kecamatan": "9402121",
      "id_kabupaten": "9402",
      "nama_kecamatan": "PELEBAGA"
    },
    {
      "id_kecamatan": "9402122",
      "id_kabupaten": "9402",
      "nama_kecamatan": "IBELE"
    },
    {
      "id_kecamatan": "9402123",
      "id_kabupaten": "9402",
      "nama_kecamatan": "TAILAREK"
    },
    {
      "id_kecamatan": "9402124",
      "id_kabupaten": "9402",
      "nama_kecamatan": "HUBIKIAK"
    },
    {
      "id_kecamatan": "9402180",
      "id_kabupaten": "9402",
      "nama_kecamatan": "ASOLOGAIMA"
    },
    {
      "id_kecamatan": "9402181",
      "id_kabupaten": "9402",
      "nama_kecamatan": "MUSATFAK"
    },
    {
      "id_kecamatan": "9402182",
      "id_kabupaten": "9402",
      "nama_kecamatan": "SILO KARNO DOGA"
    },
    {
      "id_kecamatan": "9402183",
      "id_kabupaten": "9402",
      "nama_kecamatan": "PYRAMID"
    },
    {
      "id_kecamatan": "9402184",
      "id_kabupaten": "9402",
      "nama_kecamatan": "MULIAMA"
    },
    {
      "id_kecamatan": "9402190",
      "id_kabupaten": "9402",
      "nama_kecamatan": "KURULU"
    },
    {
      "id_kecamatan": "9402191",
      "id_kabupaten": "9402",
      "nama_kecamatan": "USILIMO"
    },
    {
      "id_kecamatan": "9402192",
      "id_kabupaten": "9402",
      "nama_kecamatan": "WITA WAYA"
    },
    {
      "id_kecamatan": "9402193",
      "id_kabupaten": "9402",
      "nama_kecamatan": "LIBAREK"
    },
    {
      "id_kecamatan": "9402194",
      "id_kabupaten": "9402",
      "nama_kecamatan": "WADANGKU"
    },
    {
      "id_kecamatan": "9402195",
      "id_kabupaten": "9402",
      "nama_kecamatan": "PISUGI"
    },
    {
      "id_kecamatan": "9402220",
      "id_kabupaten": "9402",
      "nama_kecamatan": "BOLAKME"
    },
    {
      "id_kecamatan": "9402221",
      "id_kabupaten": "9402",
      "nama_kecamatan": "WOLLO"
    },
    {
      "id_kecamatan": "9402222",
      "id_kabupaten": "9402",
      "nama_kecamatan": "YALENGGA"
    },
    {
      "id_kecamatan": "9402223",
      "id_kabupaten": "9402",
      "nama_kecamatan": "TAGIME"
    },
    {
      "id_kecamatan": "9402224",
      "id_kabupaten": "9402",
      "nama_kecamatan": "MOLAGALOME"
    },
    {
      "id_kecamatan": "9402225",
      "id_kabupaten": "9402",
      "nama_kecamatan": "TAGINERI"
    },
    {
      "id_kecamatan": "9402226",
      "id_kabupaten": "9402",
      "nama_kecamatan": "BUGI"
    },
    {
      "id_kecamatan": "9402227",
      "id_kabupaten": "9402",
      "nama_kecamatan": "BPIRI"
    },
    {
      "id_kecamatan": "9402228",
      "id_kabupaten": "9402",
      "nama_kecamatan": "KORAGI"
    },
    {
      "id_kecamatan": "9402611",
      "id_kabupaten": "9402",
      "nama_kecamatan": "ITLAY HASIGE"
    },
    {
      "id_kecamatan": "9402612",
      "id_kabupaten": "9402",
      "nama_kecamatan": "SIEPKOSI"
    },
    {
      "id_kecamatan": "9403080",
      "id_kabupaten": "9403",
      "nama_kecamatan": "KAUREH"
    },
    {
      "id_kecamatan": "9403081",
      "id_kabupaten": "9403",
      "nama_kecamatan": "AIRU"
    },
    {
      "id_kecamatan": "9403082",
      "id_kabupaten": "9403",
      "nama_kecamatan": "YAPSI"
    },
    {
      "id_kecamatan": "9403140",
      "id_kabupaten": "9403",
      "nama_kecamatan": "KEMTUK"
    },
    {
      "id_kecamatan": "9403150",
      "id_kabupaten": "9403",
      "nama_kecamatan": "KEMTUK GRESI"
    },
    {
      "id_kecamatan": "9403151",
      "id_kabupaten": "9403",
      "nama_kecamatan": "GRESI SELATAN"
    },
    {
      "id_kecamatan": "9403160",
      "id_kabupaten": "9403",
      "nama_kecamatan": "NIMBORAN"
    },
    {
      "id_kecamatan": "9403161",
      "id_kabupaten": "9403",
      "nama_kecamatan": "NIMBORAN TIMUR / NAMBLONG"
    },
    {
      "id_kecamatan": "9403170",
      "id_kabupaten": "9403",
      "nama_kecamatan": "NIMBOKRANG"
    },
    {
      "id_kecamatan": "9403180",
      "id_kabupaten": "9403",
      "nama_kecamatan": "UNURUM GUAY"
    },
    {
      "id_kecamatan": "9403200",
      "id_kabupaten": "9403",
      "nama_kecamatan": "DEMTA"
    },
    {
      "id_kecamatan": "9403201",
      "id_kabupaten": "9403",
      "nama_kecamatan": "YOKARI"
    },
    {
      "id_kecamatan": "9403210",
      "id_kabupaten": "9403",
      "nama_kecamatan": "DEPAPRE"
    },
    {
      "id_kecamatan": "9403211",
      "id_kabupaten": "9403",
      "nama_kecamatan": "RAVENIRARA"
    },
    {
      "id_kecamatan": "9403220",
      "id_kabupaten": "9403",
      "nama_kecamatan": "SENTANI BARAT"
    },
    {
      "id_kecamatan": "9403221",
      "id_kabupaten": "9403",
      "nama_kecamatan": "WAIBU"
    },
    {
      "id_kecamatan": "9403230",
      "id_kabupaten": "9403",
      "nama_kecamatan": "SENTANI"
    },
    {
      "id_kecamatan": "9403231",
      "id_kabupaten": "9403",
      "nama_kecamatan": "EBUNGFAU"
    },
    {
      "id_kecamatan": "9403240",
      "id_kabupaten": "9403",
      "nama_kecamatan": "SENTANI TIMUR"
    },
    {
      "id_kecamatan": "9404050",
      "id_kabupaten": "9404",
      "nama_kecamatan": "UWAPA"
    },
    {
      "id_kecamatan": "9404051",
      "id_kabupaten": "9404",
      "nama_kecamatan": "MENOU"
    },
    {
      "id_kecamatan": "9404052",
      "id_kabupaten": "9404",
      "nama_kecamatan": "DIPA"
    },
    {
      "id_kecamatan": "9404060",
      "id_kabupaten": "9404",
      "nama_kecamatan": "YAUR"
    },
    {
      "id_kecamatan": "9404061",
      "id_kabupaten": "9404",
      "nama_kecamatan": "TELUK UMAR"
    },
    {
      "id_kecamatan": "9404070",
      "id_kabupaten": "9404",
      "nama_kecamatan": "WANGGAR"
    },
    {
      "id_kecamatan": "9404071",
      "id_kabupaten": "9404",
      "nama_kecamatan": "NABIRE BARAT"
    },
    {
      "id_kecamatan": "9404080",
      "id_kabupaten": "9404",
      "nama_kecamatan": "NABIRE"
    },
    {
      "id_kecamatan": "9404081",
      "id_kabupaten": "9404",
      "nama_kecamatan": "TELUK KIMI"
    },
    {
      "id_kecamatan": "9404090",
      "id_kabupaten": "9404",
      "nama_kecamatan": "NAPAN"
    },
    {
      "id_kecamatan": "9404091",
      "id_kabupaten": "9404",
      "nama_kecamatan": "MAKIMI"
    },
    {
      "id_kecamatan": "9404092",
      "id_kabupaten": "9404",
      "nama_kecamatan": "WAPOGA"
    },
    {
      "id_kecamatan": "9404093",
      "id_kabupaten": "9404",
      "nama_kecamatan": "KEPULAUAN MOORA"
    },
    {
      "id_kecamatan": "9404100",
      "id_kabupaten": "9404",
      "nama_kecamatan": "SIRIWO"
    },
    {
      "id_kecamatan": "9404110",
      "id_kabupaten": "9404",
      "nama_kecamatan": "YARO"
    },
    {
      "id_kecamatan": "9408040",
      "id_kabupaten": "9408",
      "nama_kecamatan": "YAPEN TIMUR"
    },
    {
      "id_kecamatan": "9408041",
      "id_kabupaten": "9408",
      "nama_kecamatan": "PANTURA YAPEN"
    },
    {
      "id_kecamatan": "9408042",
      "id_kabupaten": "9408",
      "nama_kecamatan": "TELUK AMPIMOI"
    },
    {
      "id_kecamatan": "9408043",
      "id_kabupaten": "9408",
      "nama_kecamatan": "RAIMBAWI"
    },
    {
      "id_kecamatan": "9408044",
      "id_kabupaten": "9408",
      "nama_kecamatan": "PULAU KURUDU"
    },
    {
      "id_kecamatan": "9408050",
      "id_kabupaten": "9408",
      "nama_kecamatan": "ANGKAISERA"
    },
    {
      "id_kecamatan": "9408051",
      "id_kabupaten": "9408",
      "nama_kecamatan": "KEP. AMBAI"
    },
    {
      "id_kecamatan": "9408060",
      "id_kabupaten": "9408",
      "nama_kecamatan": "YAPEN SELATAN"
    },
    {
      "id_kecamatan": "9408061",
      "id_kabupaten": "9408",
      "nama_kecamatan": "KOSIWO"
    },
    {
      "id_kecamatan": "9408070",
      "id_kabupaten": "9408",
      "nama_kecamatan": "YAPEN BARAT"
    },
    {
      "id_kecamatan": "9408071",
      "id_kabupaten": "9408",
      "nama_kecamatan": "WONAWA"
    },
    {
      "id_kecamatan": "9408072",
      "id_kabupaten": "9408",
      "nama_kecamatan": "PULAU YERUI"
    },
    {
      "id_kecamatan": "9408080",
      "id_kabupaten": "9408",
      "nama_kecamatan": "POOM"
    },
    {
      "id_kecamatan": "9408081",
      "id_kabupaten": "9408",
      "nama_kecamatan": "WINDESI"
    },
    {
      "id_kecamatan": "9409010",
      "id_kabupaten": "9409",
      "nama_kecamatan": "NUMFOR BARAT"
    },
    {
      "id_kecamatan": "9409011",
      "id_kabupaten": "9409",
      "nama_kecamatan": "ORKERI"
    },
    {
      "id_kecamatan": "9409020",
      "id_kabupaten": "9409",
      "nama_kecamatan": "NUMFOR TIMUR"
    },
    {
      "id_kecamatan": "9409021",
      "id_kabupaten": "9409",
      "nama_kecamatan": "BRUYADORI"
    },
    {
      "id_kecamatan": "9409022",
      "id_kabupaten": "9409",
      "nama_kecamatan": "POIRU"
    },
    {
      "id_kecamatan": "9409030",
      "id_kabupaten": "9409",
      "nama_kecamatan": "PADAIDO"
    },
    {
      "id_kecamatan": "9409031",
      "id_kabupaten": "9409",
      "nama_kecamatan": "AIMANDO PADAIDO"
    },
    {
      "id_kecamatan": "9409040",
      "id_kabupaten": "9409",
      "nama_kecamatan": "BIAK TIMUR"
    },
    {
      "id_kecamatan": "9409041",
      "id_kabupaten": "9409",
      "nama_kecamatan": "ORIDEK"
    },
    {
      "id_kecamatan": "9409050",
      "id_kabupaten": "9409",
      "nama_kecamatan": "BIAK KOTA"
    },
    {
      "id_kecamatan": "9409060",
      "id_kabupaten": "9409",
      "nama_kecamatan": "SAMOFA"
    },
    {
      "id_kecamatan": "9409070",
      "id_kabupaten": "9409",
      "nama_kecamatan": "YENDIDORI"
    },
    {
      "id_kecamatan": "9409080",
      "id_kabupaten": "9409",
      "nama_kecamatan": "BIAK UTARA"
    },
    {
      "id_kecamatan": "9409081",
      "id_kabupaten": "9409",
      "nama_kecamatan": "ANDEY"
    },
    {
      "id_kecamatan": "9409090",
      "id_kabupaten": "9409",
      "nama_kecamatan": "WARSA"
    },
    {
      "id_kecamatan": "9409091",
      "id_kabupaten": "9409",
      "nama_kecamatan": "YAWOSI"
    },
    {
      "id_kecamatan": "9409092",
      "id_kabupaten": "9409",
      "nama_kecamatan": "BONDIFUAR"
    },
    {
      "id_kecamatan": "9409100",
      "id_kabupaten": "9409",
      "nama_kecamatan": "BIAK BARAT"
    },
    {
      "id_kecamatan": "9409101",
      "id_kabupaten": "9409",
      "nama_kecamatan": "SWANDIWE"
    },
    {
      "id_kecamatan": "9410030",
      "id_kabupaten": "9410",
      "nama_kecamatan": "PANIAI TIMUR"
    },
    {
      "id_kecamatan": "9410031",
      "id_kabupaten": "9410",
      "nama_kecamatan": "YATAMO"
    },
    {
      "id_kecamatan": "9410032",
      "id_kabupaten": "9410",
      "nama_kecamatan": "KEBO"
    },
    {
      "id_kecamatan": "9410040",
      "id_kabupaten": "9410",
      "nama_kecamatan": "BIBIDA"
    },
    {
      "id_kecamatan": "9410041",
      "id_kabupaten": "9410",
      "nama_kecamatan": "DUMADAMA"
    },
    {
      "id_kecamatan": "9410070",
      "id_kabupaten": "9410",
      "nama_kecamatan": "ARADIDE"
    },
    {
      "id_kecamatan": "9410071",
      "id_kabupaten": "9410",
      "nama_kecamatan": "EKADIDE"
    },
    {
      "id_kecamatan": "9410080",
      "id_kabupaten": "9410",
      "nama_kecamatan": "PANIAI BARAT"
    },
    {
      "id_kecamatan": "9410081",
      "id_kabupaten": "9410",
      "nama_kecamatan": "SIRIWO"
    },
    {
      "id_kecamatan": "9410090",
      "id_kabupaten": "9410",
      "nama_kecamatan": "BOGOBAIDA"
    },
    {
      "id_kecamatan": "9411040",
      "id_kabupaten": "9411",
      "nama_kecamatan": "FAWI"
    },
    {
      "id_kecamatan": "9411041",
      "id_kabupaten": "9411",
      "nama_kecamatan": "DAGAI"
    },
    {
      "id_kecamatan": "9411042",
      "id_kabupaten": "9411",
      "nama_kecamatan": "KIYAGE"
    },
    {
      "id_kecamatan": "9411050",
      "id_kabupaten": "9411",
      "nama_kecamatan": "MULIA"
    },
    {
      "id_kecamatan": "9411053",
      "id_kabupaten": "9411",
      "nama_kecamatan": "YAMBI"
    },
    {
      "id_kecamatan": "9411054",
      "id_kabupaten": "9411",
      "nama_kecamatan": "ILAMBURAWI"
    },
    {
      "id_kecamatan": "9411055",
      "id_kabupaten": "9411",
      "nama_kecamatan": "MUARA"
    },
    {
      "id_kecamatan": "9411056",
      "id_kabupaten": "9411",
      "nama_kecamatan": "PAGALEME"
    },
    {
      "id_kecamatan": "9411057",
      "id_kabupaten": "9411",
      "nama_kecamatan": "GURAGE"
    },
    {
      "id_kecamatan": "9411058",
      "id_kabupaten": "9411",
      "nama_kecamatan": "IRIMULI"
    },
    {
      "id_kecamatan": "9411060",
      "id_kabupaten": "9411",
      "nama_kecamatan": "ILU"
    },
    {
      "id_kecamatan": "9411061",
      "id_kabupaten": "9411",
      "nama_kecamatan": "TORERE"
    },
    {
      "id_kecamatan": "9411063",
      "id_kabupaten": "9411",
      "nama_kecamatan": "YAMONERI"
    },
    {
      "id_kecamatan": "9411064",
      "id_kabupaten": "9411",
      "nama_kecamatan": "WAEGI"
    },
    {
      "id_kecamatan": "9411065",
      "id_kabupaten": "9411",
      "nama_kecamatan": "NUME"
    },
    {
      "id_kecamatan": "9411066",
      "id_kabupaten": "9411",
      "nama_kecamatan": "NIOGA"
    },
    {
      "id_kecamatan": "9411067",
      "id_kabupaten": "9411",
      "nama_kecamatan": "GUBUME"
    },
    {
      "id_kecamatan": "9411068",
      "id_kabupaten": "9411",
      "nama_kecamatan": "TAGANOMBAK"
    },
    {
      "id_kecamatan": "9411070",
      "id_kabupaten": "9411",
      "nama_kecamatan": "TINGGINAMBUT"
    },
    {
      "id_kecamatan": "9411071",
      "id_kabupaten": "9411",
      "nama_kecamatan": "KALOME"
    },
    {
      "id_kecamatan": "9411072",
      "id_kabupaten": "9411",
      "nama_kecamatan": "WANWI"
    },
    {
      "id_kecamatan": "9411080",
      "id_kabupaten": "9411",
      "nama_kecamatan": "MEWOLUK"
    },
    {
      "id_kecamatan": "9411081",
      "id_kabupaten": "9411",
      "nama_kecamatan": "LUMO"
    },
    {
      "id_kecamatan": "9411082",
      "id_kabupaten": "9411",
      "nama_kecamatan": "MOLANIKIME"
    },
    {
      "id_kecamatan": "9411090",
      "id_kabupaten": "9411",
      "nama_kecamatan": "YAMO"
    },
    {
      "id_kecamatan": "9411091",
      "id_kabupaten": "9411",
      "nama_kecamatan": "DOKOME"
    },
    {
      "id_kecamatan": "9412010",
      "id_kabupaten": "9412",
      "nama_kecamatan": "MIMIKA BARAT"
    },
    {
      "id_kecamatan": "9412011",
      "id_kabupaten": "9412",
      "nama_kecamatan": "MIMIKA BARAT JAUH"
    },
    {
      "id_kecamatan": "9412012",
      "id_kabupaten": "9412",
      "nama_kecamatan": "MIMIKA BARAT TENGAH"
    },
    {
      "id_kecamatan": "9412013",
      "id_kabupaten": "9412",
      "nama_kecamatan": "AMAR"
    },
    {
      "id_kecamatan": "9412020",
      "id_kabupaten": "9412",
      "nama_kecamatan": "MIMIKA TIMUR"
    },
    {
      "id_kecamatan": "9412021",
      "id_kabupaten": "9412",
      "nama_kecamatan": "MIMIKA TENGAH"
    },
    {
      "id_kecamatan": "9412022",
      "id_kabupaten": "9412",
      "nama_kecamatan": "MIMIKA TIMUR JAUH"
    },
    {
      "id_kecamatan": "9412030",
      "id_kabupaten": "9412",
      "nama_kecamatan": "MIMIKA BARU"
    },
    {
      "id_kecamatan": "9412031",
      "id_kabupaten": "9412",
      "nama_kecamatan": "KUALA KENCANA"
    },
    {
      "id_kecamatan": "9412032",
      "id_kabupaten": "9412",
      "nama_kecamatan": "TEMBAGAPURA"
    },
    {
      "id_kecamatan": "9412033",
      "id_kabupaten": "9412",
      "nama_kecamatan": "WANIA"
    },
    {
      "id_kecamatan": "9412034",
      "id_kabupaten": "9412",
      "nama_kecamatan": "IWAKA"
    },
    {
      "id_kecamatan": "9412035",
      "id_kabupaten": "9412",
      "nama_kecamatan": "KWAMKI NARAMA"
    },
    {
      "id_kecamatan": "9412040",
      "id_kabupaten": "9412",
      "nama_kecamatan": "AGIMUGA"
    },
    {
      "id_kecamatan": "9412041",
      "id_kabupaten": "9412",
      "nama_kecamatan": "JILA"
    },
    {
      "id_kecamatan": "9412042",
      "id_kabupaten": "9412",
      "nama_kecamatan": "JITA"
    },
    {
      "id_kecamatan": "9412043",
      "id_kabupaten": "9412",
      "nama_kecamatan": "ALAMA"
    },
    {
      "id_kecamatan": "9412044",
      "id_kabupaten": "9412",
      "nama_kecamatan": "HOYA"
    },
    {
      "id_kecamatan": "9413010",
      "id_kabupaten": "9413",
      "nama_kecamatan": "JAIR"
    },
    {
      "id_kecamatan": "9413011",
      "id_kabupaten": "9413",
      "nama_kecamatan": "SUBUR"
    },
    {
      "id_kecamatan": "9413013",
      "id_kabupaten": "9413",
      "nama_kecamatan": "KIA"
    },
    {
      "id_kecamatan": "9413020",
      "id_kabupaten": "9413",
      "nama_kecamatan": "MINDIPTANA"
    },
    {
      "id_kecamatan": "9413021",
      "id_kabupaten": "9413",
      "nama_kecamatan": "INIYANDIT"
    },
    {
      "id_kecamatan": "9413022",
      "id_kabupaten": "9413",
      "nama_kecamatan": "KOMBUT"
    },
    {
      "id_kecamatan": "9413023",
      "id_kabupaten": "9413",
      "nama_kecamatan": "SESNUK"
    },
    {
      "id_kecamatan": "9413030",
      "id_kabupaten": "9413",
      "nama_kecamatan": "MANDOBO"
    },
    {
      "id_kecamatan": "9413031",
      "id_kabupaten": "9413",
      "nama_kecamatan": "FOFI"
    },
    {
      "id_kecamatan": "9413032",
      "id_kabupaten": "9413",
      "nama_kecamatan": "ARIMOP"
    },
    {
      "id_kecamatan": "9413040",
      "id_kabupaten": "9413",
      "nama_kecamatan": "KOUH"
    },
    {
      "id_kecamatan": "9413041",
      "id_kabupaten": "9413",
      "nama_kecamatan": "BOMAKIA"
    },
    {
      "id_kecamatan": "9413042",
      "id_kabupaten": "9413",
      "nama_kecamatan": "FIRIWAGE"
    },
    {
      "id_kecamatan": "9413043",
      "id_kabupaten": "9413",
      "nama_kecamatan": "MANGGELUM"
    },
    {
      "id_kecamatan": "9413044",
      "id_kabupaten": "9413",
      "nama_kecamatan": "YANIRUMA"
    },
    {
      "id_kecamatan": "9413045",
      "id_kabupaten": "9413",
      "nama_kecamatan": "KAWAGIT"
    },
    {
      "id_kecamatan": "9413046",
      "id_kabupaten": "9413",
      "nama_kecamatan": "KOMBAY"
    },
    {
      "id_kecamatan": "9413050",
      "id_kabupaten": "9413",
      "nama_kecamatan": "WAROPKO"
    },
    {
      "id_kecamatan": "9413051",
      "id_kabupaten": "9413",
      "nama_kecamatan": "AMBATKWI"
    },
    {
      "id_kecamatan": "9413052",
      "id_kabupaten": "9413",
      "nama_kecamatan": "NINATI"
    },
    {
      "id_kecamatan": "9414010",
      "id_kabupaten": "9414",
      "nama_kecamatan": "NAMBIOMAN BAPAI"
    },
    {
      "id_kecamatan": "9414011",
      "id_kabupaten": "9414",
      "nama_kecamatan": "MINYAMUR"
    },
    {
      "id_kecamatan": "9414020",
      "id_kabupaten": "9414",
      "nama_kecamatan": "EDERA"
    },
    {
      "id_kecamatan": "9414021",
      "id_kabupaten": "9414",
      "nama_kecamatan": "VENAHA"
    },
    {
      "id_kecamatan": "9414022",
      "id_kabupaten": "9414",
      "nama_kecamatan": "SYAHCAME"
    },
    {
      "id_kecamatan": "9414023",
      "id_kabupaten": "9414",
      "nama_kecamatan": "BAMGI"
    },
    {
      "id_kecamatan": "9414024",
      "id_kabupaten": "9414",
      "nama_kecamatan": "YAKOMI"
    },
    {
      "id_kecamatan": "9414030",
      "id_kabupaten": "9414",
      "nama_kecamatan": "OBAA"
    },
    {
      "id_kecamatan": "9414031",
      "id_kabupaten": "9414",
      "nama_kecamatan": "PASSUE"
    },
    {
      "id_kecamatan": "9414040",
      "id_kabupaten": "9414",
      "nama_kecamatan": "HAJU"
    },
    {
      "id_kecamatan": "9414050",
      "id_kabupaten": "9414",
      "nama_kecamatan": "ASSUE"
    },
    {
      "id_kecamatan": "9414060",
      "id_kabupaten": "9414",
      "nama_kecamatan": "CITAKMITAK"
    },
    {
      "id_kecamatan": "9414061",
      "id_kabupaten": "9414",
      "nama_kecamatan": "KAIBAR"
    },
    {
      "id_kecamatan": "9414062",
      "id_kabupaten": "9414",
      "nama_kecamatan": "PASSUE BAWAH"
    },
    {
      "id_kecamatan": "9414063",
      "id_kabupaten": "9414",
      "nama_kecamatan": "TI-ZAIN"
    },
    {
      "id_kecamatan": "9415010",
      "id_kabupaten": "9415",
      "nama_kecamatan": "PANTAI KASUARI"
    },
    {
      "id_kecamatan": "9415011",
      "id_kabupaten": "9415",
      "nama_kecamatan": "KOPAY"
    },
    {
      "id_kecamatan": "9415012",
      "id_kabupaten": "9415",
      "nama_kecamatan": "DER KOUMUR"
    },
    {
      "id_kecamatan": "9415013",
      "id_kabupaten": "9415",
      "nama_kecamatan": "SAFAN"
    },
    {
      "id_kecamatan": "9415020",
      "id_kabupaten": "9415",
      "nama_kecamatan": "FAYIT"
    },
    {
      "id_kecamatan": "9415030",
      "id_kabupaten": "9415",
      "nama_kecamatan": "ATSY"
    },
    {
      "id_kecamatan": "9415031",
      "id_kabupaten": "9415",
      "nama_kecamatan": "SIRETS"
    },
    {
      "id_kecamatan": "9415032",
      "id_kabupaten": "9415",
      "nama_kecamatan": "AYIP"
    },
    {
      "id_kecamatan": "9415033",
      "id_kabupaten": "9415",
      "nama_kecamatan": "BECTBAMU"
    },
    {
      "id_kecamatan": "9415040",
      "id_kabupaten": "9415",
      "nama_kecamatan": "SUATOR"
    },
    {
      "id_kecamatan": "9415041",
      "id_kabupaten": "9415",
      "nama_kecamatan": "KOLF BRAZA"
    },
    {
      "id_kecamatan": "9415050",
      "id_kabupaten": "9415",
      "nama_kecamatan": "AKAT"
    },
    {
      "id_kecamatan": "9415051",
      "id_kabupaten": "9415",
      "nama_kecamatan": "JETSY"
    },
    {
      "id_kecamatan": "9415060",
      "id_kabupaten": "9415",
      "nama_kecamatan": "AGATS"
    },
    {
      "id_kecamatan": "9415070",
      "id_kabupaten": "9415",
      "nama_kecamatan": "SAWA ERMA"
    },
    {
      "id_kecamatan": "9415071",
      "id_kabupaten": "9415",
      "nama_kecamatan": "SURU-SURU"
    },
    {
      "id_kecamatan": "9415072",
      "id_kabupaten": "9415",
      "nama_kecamatan": "UNIR SIRAU"
    },
    {
      "id_kecamatan": "9415073",
      "id_kabupaten": "9415",
      "nama_kecamatan": "JOERAT"
    },
    {
      "id_kecamatan": "9415074",
      "id_kabupaten": "9415",
      "nama_kecamatan": "PULAU TIGA"
    },
    {
      "id_kecamatan": "9416010",
      "id_kabupaten": "9416",
      "nama_kecamatan": "KURIMA"
    },
    {
      "id_kecamatan": "9416011",
      "id_kabupaten": "9416",
      "nama_kecamatan": "MUSAIK"
    },
    {
      "id_kecamatan": "9416013",
      "id_kabupaten": "9416",
      "nama_kecamatan": "DEKAI"
    },
    {
      "id_kecamatan": "9416014",
      "id_kabupaten": "9416",
      "nama_kecamatan": "OBIO"
    },
    {
      "id_kecamatan": "9416015",
      "id_kabupaten": "9416",
      "nama_kecamatan": "PASEMA"
    },
    {
      "id_kecamatan": "9416016",
      "id_kabupaten": "9416",
      "nama_kecamatan": "AMUMA"
    },
    {
      "id_kecamatan": "9416017",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SURU-SURU"
    },
    {
      "id_kecamatan": "9416018",
      "id_kabupaten": "9416",
      "nama_kecamatan": "WUSAMA"
    },
    {
      "id_kecamatan": "9416019",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SILIMO"
    },
    {
      "id_kecamatan": "9416020",
      "id_kabupaten": "9416",
      "nama_kecamatan": "NINIA"
    },
    {
      "id_kecamatan": "9416021",
      "id_kabupaten": "9416",
      "nama_kecamatan": "HOLUWON"
    },
    {
      "id_kecamatan": "9416022",
      "id_kabupaten": "9416",
      "nama_kecamatan": "LOLAT"
    },
    {
      "id_kecamatan": "9416023",
      "id_kabupaten": "9416",
      "nama_kecamatan": "LANGDA"
    },
    {
      "id_kecamatan": "9416024",
      "id_kabupaten": "9416",
      "nama_kecamatan": "BOMELA"
    },
    {
      "id_kecamatan": "9416025",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SUNTAMON"
    },
    {
      "id_kecamatan": "9416026",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SOBAHAM"
    },
    {
      "id_kecamatan": "9416027",
      "id_kabupaten": "9416",
      "nama_kecamatan": "KORUPUN"
    },
    {
      "id_kecamatan": "9416028",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SELA"
    },
    {
      "id_kecamatan": "9416029",
      "id_kabupaten": "9416",
      "nama_kecamatan": "KWELAMDUA"
    },
    {
      "id_kecamatan": "9416030",
      "id_kabupaten": "9416",
      "nama_kecamatan": "ANGGRUK"
    },
    {
      "id_kecamatan": "9416031",
      "id_kabupaten": "9416",
      "nama_kecamatan": "PANGGEMA"
    },
    {
      "id_kecamatan": "9416032",
      "id_kabupaten": "9416",
      "nama_kecamatan": "WALMA"
    },
    {
      "id_kecamatan": "9416033",
      "id_kabupaten": "9416",
      "nama_kecamatan": "KOSAREK"
    },
    {
      "id_kecamatan": "9416034",
      "id_kabupaten": "9416",
      "nama_kecamatan": "UBAHAK"
    },
    {
      "id_kecamatan": "9416035",
      "id_kabupaten": "9416",
      "nama_kecamatan": "NALCA"
    },
    {
      "id_kecamatan": "9416036",
      "id_kabupaten": "9416",
      "nama_kecamatan": "PULDAMA"
    },
    {
      "id_kecamatan": "9416037",
      "id_kabupaten": "9416",
      "nama_kecamatan": "NIPSAN"
    },
    {
      "id_kecamatan": "9416041",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SAMENAGE"
    },
    {
      "id_kecamatan": "9416042",
      "id_kabupaten": "9416",
      "nama_kecamatan": "TANGMA"
    },
    {
      "id_kecamatan": "9416043",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SOBA"
    },
    {
      "id_kecamatan": "9416044",
      "id_kabupaten": "9416",
      "nama_kecamatan": "MUGI"
    },
    {
      "id_kecamatan": "9416045",
      "id_kabupaten": "9416",
      "nama_kecamatan": "YOGOSEM"
    },
    {
      "id_kecamatan": "9416046",
      "id_kabupaten": "9416",
      "nama_kecamatan": "KAYO"
    },
    {
      "id_kecamatan": "9416047",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SUMO"
    },
    {
      "id_kecamatan": "9416048",
      "id_kabupaten": "9416",
      "nama_kecamatan": "HOGIO"
    },
    {
      "id_kecamatan": "9416049",
      "id_kabupaten": "9416",
      "nama_kecamatan": "UKHA"
    },
    {
      "id_kecamatan": "9416051",
      "id_kabupaten": "9416",
      "nama_kecamatan": "WERIMA"
    },
    {
      "id_kecamatan": "9416052",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SOLOIKMA"
    },
    {
      "id_kecamatan": "9416053",
      "id_kabupaten": "9416",
      "nama_kecamatan": "SERADALA"
    },
    {
      "id_kecamatan": "9416054",
      "id_kabupaten": "9416",
      "nama_kecamatan": "KABIANGGAMA"
    },
    {
      "id_kecamatan": "9416055",
      "id_kabupaten": "9416",
      "nama_kecamatan": "KWIKMA"
    },
    {
      "id_kecamatan": "9416056",
      "id_kabupaten": "9416",
      "nama_kecamatan": "HILIPUK"
    },
    {
      "id_kecamatan": "9416057",
      "id_kabupaten": "9416",
      "nama_kecamatan": "YAHULIAMBUT"
    },
    {
      "id_kecamatan": "9416058",
      "id_kabupaten": "9416",
      "nama_kecamatan": "HEREAPINI"
    },
    {
      "id_kecamatan": "9416059",
      "id_kabupaten": "9416",
      "nama_kecamatan": "UBALIHI"
    },
    {
      "id_kecamatan": "9416061",
      "id_kabupaten": "9416",
      "nama_kecamatan": "TALAMBO"
    },
    {
      "id_kecamatan": "9416062",
      "id_kabupaten": "9416",
      "nama_kecamatan": "PRONGGOLI"
    },
    {
      "id_kecamatan": "9416063",
      "id_kabupaten": "9416",
      "nama_kecamatan": "ENDOMEN"
    },
    {
      "id_kecamatan": "9416065",
      "id_kabupaten": "9416",
      "nama_kecamatan": "KONA"
    },
    {
      "id_kecamatan": "9416066",
      "id_kabupaten": "9416",
      "nama_kecamatan": "DURAM"
    },
    {
      "id_kecamatan": "9416067",
      "id_kabupaten": "9416",
      "nama_kecamatan": "DIRWEMNA"
    },
    {
      "id_kecamatan": "9417010",
      "id_kabupaten": "9417",
      "nama_kecamatan": "IWUR"
    },
    {
      "id_kecamatan": "9417011",
      "id_kabupaten": "9417",
      "nama_kecamatan": "KAWOR"
    },
    {
      "id_kecamatan": "9417012",
      "id_kabupaten": "9417",
      "nama_kecamatan": "TARUP"
    },
    {
      "id_kecamatan": "9417013",
      "id_kabupaten": "9417",
      "nama_kecamatan": "AWINBON"
    },
    {
      "id_kecamatan": "9417020",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKSIBIL"
    },
    {
      "id_kecamatan": "9417021",
      "id_kabupaten": "9417",
      "nama_kecamatan": "PEPERA"
    },
    {
      "id_kecamatan": "9417022",
      "id_kabupaten": "9417",
      "nama_kecamatan": "ALEMSOM"
    },
    {
      "id_kecamatan": "9417023",
      "id_kabupaten": "9417",
      "nama_kecamatan": "SERAMBAKON"
    },
    {
      "id_kecamatan": "9417024",
      "id_kabupaten": "9417",
      "nama_kecamatan": "KOLOMDOL"
    },
    {
      "id_kecamatan": "9417025",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKSOP"
    },
    {
      "id_kecamatan": "9417026",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OK BAPE"
    },
    {
      "id_kecamatan": "9417027",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OK AON"
    },
    {
      "id_kecamatan": "9417030",
      "id_kabupaten": "9417",
      "nama_kecamatan": "BORME"
    },
    {
      "id_kecamatan": "9417031",
      "id_kabupaten": "9417",
      "nama_kecamatan": "BIME"
    },
    {
      "id_kecamatan": "9417032",
      "id_kabupaten": "9417",
      "nama_kecamatan": "EPUMEK"
    },
    {
      "id_kecamatan": "9417033",
      "id_kabupaten": "9417",
      "nama_kecamatan": "WEIME"
    },
    {
      "id_kecamatan": "9417034",
      "id_kabupaten": "9417",
      "nama_kecamatan": "PAMEK"
    },
    {
      "id_kecamatan": "9417035",
      "id_kabupaten": "9417",
      "nama_kecamatan": "NONGME"
    },
    {
      "id_kecamatan": "9417036",
      "id_kabupaten": "9417",
      "nama_kecamatan": "BATANI"
    },
    {
      "id_kecamatan": "9417040",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKBI"
    },
    {
      "id_kecamatan": "9417041",
      "id_kabupaten": "9417",
      "nama_kecamatan": "ABOY"
    },
    {
      "id_kecamatan": "9417042",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKBAB"
    },
    {
      "id_kecamatan": "9417043",
      "id_kabupaten": "9417",
      "nama_kecamatan": "TEIRAPLU"
    },
    {
      "id_kecamatan": "9417044",
      "id_kabupaten": "9417",
      "nama_kecamatan": "YEFTA"
    },
    {
      "id_kecamatan": "9417050",
      "id_kabupaten": "9417",
      "nama_kecamatan": "KIWIROK"
    },
    {
      "id_kecamatan": "9417051",
      "id_kabupaten": "9417",
      "nama_kecamatan": "KIWIROK TIMUR"
    },
    {
      "id_kecamatan": "9417052",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKSEBANG"
    },
    {
      "id_kecamatan": "9417053",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKHIKA"
    },
    {
      "id_kecamatan": "9417054",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKLIP"
    },
    {
      "id_kecamatan": "9417055",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKSAMOL"
    },
    {
      "id_kecamatan": "9417056",
      "id_kabupaten": "9417",
      "nama_kecamatan": "OKBEMTA"
    },
    {
      "id_kecamatan": "9417060",
      "id_kabupaten": "9417",
      "nama_kecamatan": "BATOM"
    },
    {
      "id_kecamatan": "9417061",
      "id_kabupaten": "9417",
      "nama_kecamatan": "MURKIM"
    },
    {
      "id_kecamatan": "9417062",
      "id_kabupaten": "9417",
      "nama_kecamatan": "MOFINOP"
    },
    {
      "id_kecamatan": "9418010",
      "id_kabupaten": "9418",
      "nama_kecamatan": "KANGGIME"
    },
    {
      "id_kecamatan": "9418011",
      "id_kabupaten": "9418",
      "nama_kecamatan": "WONIKI"
    },
    {
      "id_kecamatan": "9418012",
      "id_kabupaten": "9418",
      "nama_kecamatan": "NABUNAGE"
    },
    {
      "id_kecamatan": "9418013",
      "id_kabupaten": "9418",
      "nama_kecamatan": "GILUBANDU"
    },
    {
      "id_kecamatan": "9418014",
      "id_kabupaten": "9418",
      "nama_kecamatan": "WAKUO"
    },
    {
      "id_kecamatan": "9418015",
      "id_kabupaten": "9418",
      "nama_kecamatan": "AWEKU"
    },
    {
      "id_kecamatan": "9418016",
      "id_kabupaten": "9418",
      "nama_kecamatan": "BOGONUK"
    },
    {
      "id_kecamatan": "9418020",
      "id_kabupaten": "9418",
      "nama_kecamatan": "KARUBAGA"
    },
    {
      "id_kecamatan": "9418021",
      "id_kabupaten": "9418",
      "nama_kecamatan": "GOYAGE"
    },
    {
      "id_kecamatan": "9418022",
      "id_kabupaten": "9418",
      "nama_kecamatan": "WUNIN"
    },
    {
      "id_kecamatan": "9418023",
      "id_kabupaten": "9418",
      "nama_kecamatan": "KONDAGA"
    },
    {
      "id_kecamatan": "9418024",
      "id_kabupaten": "9418",
      "nama_kecamatan": "NELAWI"
    },
    {
      "id_kecamatan": "9418025",
      "id_kabupaten": "9418",
      "nama_kecamatan": "KUARI"
    },
    {
      "id_kecamatan": "9418026",
      "id_kabupaten": "9418",
      "nama_kecamatan": "LIANOGOMA"
    },
    {
      "id_kecamatan": "9418027",
      "id_kabupaten": "9418",
      "nama_kecamatan": "BIUK"
    },
    {
      "id_kecamatan": "9418030",
      "id_kabupaten": "9418",
      "nama_kecamatan": "BOKONDINI"
    },
    {
      "id_kecamatan": "9418031",
      "id_kabupaten": "9418",
      "nama_kecamatan": "BOKONERI"
    },
    {
      "id_kecamatan": "9418032",
      "id_kabupaten": "9418",
      "nama_kecamatan": "BEWANI"
    },
    {
      "id_kecamatan": "9418040",
      "id_kabupaten": "9418",
      "nama_kecamatan": "KEMBU"
    },
    {
      "id_kecamatan": "9418041",
      "id_kabupaten": "9418",
      "nama_kecamatan": "WINA"
    },
    {
      "id_kecamatan": "9418042",
      "id_kabupaten": "9418",
      "nama_kecamatan": "UMAGI"
    },
    {
      "id_kecamatan": "9418043",
      "id_kabupaten": "9418",
      "nama_kecamatan": "PANAGA"
    },
    {
      "id_kecamatan": "9418044",
      "id_kabupaten": "9418",
      "nama_kecamatan": "POGANERI"
    },
    {
      "id_kecamatan": "9418045",
      "id_kabupaten": "9418",
      "nama_kecamatan": "KAMBONERI"
    },
    {
      "id_kecamatan": "9418046",
      "id_kabupaten": "9418",
      "nama_kecamatan": "AIR GARAM"
    },
    {
      "id_kecamatan": "9418047",
      "id_kabupaten": "9418",
      "nama_kecamatan": "DOW"
    },
    {
      "id_kecamatan": "9418048",
      "id_kabupaten": "9418",
      "nama_kecamatan": "WARI / TAIYEVE"
    },
    {
      "id_kecamatan": "9418049",
      "id_kabupaten": "9418",
      "nama_kecamatan": "EGIAM"
    },
    {
      "id_kecamatan": "9418051",
      "id_kabupaten": "9418",
      "nama_kecamatan": "NUNGGAWI"
    },
    {
      "id_kecamatan": "9418060",
      "id_kabupaten": "9418",
      "nama_kecamatan": "KUBU"
    },
    {
      "id_kecamatan": "9418061",
      "id_kabupaten": "9418",
      "nama_kecamatan": "ANAWI"
    },
    {
      "id_kecamatan": "9418062",
      "id_kabupaten": "9418",
      "nama_kecamatan": "WUGI"
    },
    {
      "id_kecamatan": "9418070",
      "id_kabupaten": "9418",
      "nama_kecamatan": "GEYA"
    },
    {
      "id_kecamatan": "9418071",
      "id_kabupaten": "9418",
      "nama_kecamatan": "WENAM"
    },
    {
      "id_kecamatan": "9418080",
      "id_kabupaten": "9418",
      "nama_kecamatan": "NUMBA"
    },
    {
      "id_kecamatan": "9418081",
      "id_kabupaten": "9418",
      "nama_kecamatan": "KAI"
    },
    {
      "id_kecamatan": "9418090",
      "id_kabupaten": "9418",
      "nama_kecamatan": "DUNDU"
    },
    {
      "id_kecamatan": "9418100",
      "id_kabupaten": "9418",
      "nama_kecamatan": "GUNDAGI"
    },
    {
      "id_kecamatan": "9418110",
      "id_kabupaten": "9418",
      "nama_kecamatan": "TIMORI"
    },
    {
      "id_kecamatan": "9418121",
      "id_kabupaten": "9418",
      "nama_kecamatan": "YUNERI"
    },
    {
      "id_kecamatan": "9418125",
      "id_kabupaten": "9418",
      "nama_kecamatan": "TAGIME"
    },
    {
      "id_kecamatan": "9418126",
      "id_kabupaten": "9418",
      "nama_kecamatan": "DANIME"
    },
    {
      "id_kecamatan": "9418127",
      "id_kabupaten": "9418",
      "nama_kecamatan": "YUKO"
    },
    {
      "id_kecamatan": "9418541",
      "id_kabupaten": "9418",
      "nama_kecamatan": "TELENGGEME"
    },
    {
      "id_kecamatan": "9418542",
      "id_kabupaten": "9418",
      "nama_kecamatan": "GIKA"
    },
    {
      "id_kecamatan": "9418543",
      "id_kabupaten": "9418",
      "nama_kecamatan": "TAGINERI"
    },
    {
      "id_kecamatan": "9419021",
      "id_kabupaten": "9419",
      "nama_kecamatan": "PANTAI TIMUR BAGIAN BARAT"
    },
    {
      "id_kecamatan": "9419022",
      "id_kabupaten": "9419",
      "nama_kecamatan": "PANTAI TIMUR"
    },
    {
      "id_kecamatan": "9419024",
      "id_kabupaten": "9419",
      "nama_kecamatan": "SUNGAI BIRI"
    },
    {
      "id_kecamatan": "9419031",
      "id_kabupaten": "9419",
      "nama_kecamatan": "BONGGO"
    },
    {
      "id_kecamatan": "9419032",
      "id_kabupaten": "9419",
      "nama_kecamatan": "BONGGO TIMUR"
    },
    {
      "id_kecamatan": "9419033",
      "id_kabupaten": "9419",
      "nama_kecamatan": "BONGGO BARAT"
    },
    {
      "id_kecamatan": "9419040",
      "id_kabupaten": "9419",
      "nama_kecamatan": "TOR ATAS"
    },
    {
      "id_kecamatan": "9419041",
      "id_kabupaten": "9419",
      "nama_kecamatan": "ISMARI"
    },
    {
      "id_kecamatan": "9419050",
      "id_kabupaten": "9419",
      "nama_kecamatan": "SARMI"
    },
    {
      "id_kecamatan": "9419051",
      "id_kabupaten": "9419",
      "nama_kecamatan": "SARMI TIMUR"
    },
    {
      "id_kecamatan": "9419052",
      "id_kabupaten": "9419",
      "nama_kecamatan": "SARMI SELATAN"
    },
    {
      "id_kecamatan": "9419053",
      "id_kabupaten": "9419",
      "nama_kecamatan": "SOBEY"
    },
    {
      "id_kecamatan": "9419054",
      "id_kabupaten": "9419",
      "nama_kecamatan": "MUARA TOR"
    },
    {
      "id_kecamatan": "9419055",
      "id_kabupaten": "9419",
      "nama_kecamatan": "VERKAM"
    },
    {
      "id_kecamatan": "9419060",
      "id_kabupaten": "9419",
      "nama_kecamatan": "PANTAI BARAT"
    },
    {
      "id_kecamatan": "9419061",
      "id_kabupaten": "9419",
      "nama_kecamatan": "APAWER HULU"
    },
    {
      "id_kecamatan": "9419062",
      "id_kabupaten": "9419",
      "nama_kecamatan": "APAWER HILIR"
    },
    {
      "id_kecamatan": "9419063",
      "id_kabupaten": "9419",
      "nama_kecamatan": "APAWER TENGAH"
    },
    {
      "id_kecamatan": "9420010",
      "id_kabupaten": "9420",
      "nama_kecamatan": "WEB"
    },
    {
      "id_kecamatan": "9420011",
      "id_kabupaten": "9420",
      "nama_kecamatan": "TOWE"
    },
    {
      "id_kecamatan": "9420020",
      "id_kabupaten": "9420",
      "nama_kecamatan": "SENGGI"
    },
    {
      "id_kecamatan": "9420030",
      "id_kabupaten": "9420",
      "nama_kecamatan": "WARIS"
    },
    {
      "id_kecamatan": "9420040",
      "id_kabupaten": "9420",
      "nama_kecamatan": "ARSO"
    },
    {
      "id_kecamatan": "9420041",
      "id_kabupaten": "9420",
      "nama_kecamatan": "ARSO TIMUR"
    },
    {
      "id_kecamatan": "9420050",
      "id_kabupaten": "9420",
      "nama_kecamatan": "SKANTO"
    },
    {
      "id_kecamatan": "9426010",
      "id_kabupaten": "9426",
      "nama_kecamatan": "WAROPEN BAWAH"
    },
    {
      "id_kecamatan": "9426011",
      "id_kabupaten": "9426",
      "nama_kecamatan": "INGGERUS"
    },
    {
      "id_kecamatan": "9426012",
      "id_kabupaten": "9426",
      "nama_kecamatan": "UREI FAISEI"
    },
    {
      "id_kecamatan": "9426013",
      "id_kabupaten": "9426",
      "nama_kecamatan": "OUDATE"
    },
    {
      "id_kecamatan": "9426014",
      "id_kabupaten": "9426",
      "nama_kecamatan": "WAPOGA"
    },
    {
      "id_kecamatan": "9426020",
      "id_kabupaten": "9426",
      "nama_kecamatan": "MASIREI"
    },
    {
      "id_kecamatan": "9426021",
      "id_kabupaten": "9426",
      "nama_kecamatan": "RISEI SAYATI"
    },
    {
      "id_kecamatan": "9426022",
      "id_kabupaten": "9426",
      "nama_kecamatan": "DEMBA"
    },
    {
      "id_kecamatan": "9426030",
      "id_kabupaten": "9426",
      "nama_kecamatan": "WALANI"
    },
    {
      "id_kecamatan": "9426040",
      "id_kabupaten": "9426",
      "nama_kecamatan": "KIRIHI"
    },
    {
      "id_kecamatan": "9427010",
      "id_kabupaten": "9427",
      "nama_kecamatan": "SUPIORI SELATAN"
    },
    {
      "id_kecamatan": "9427011",
      "id_kabupaten": "9427",
      "nama_kecamatan": "KEPULAUAN ARURI"
    },
    {
      "id_kecamatan": "9427020",
      "id_kabupaten": "9427",
      "nama_kecamatan": "SUPIORI UTARA"
    },
    {
      "id_kecamatan": "9427021",
      "id_kabupaten": "9427",
      "nama_kecamatan": "SUPIORI BARAT"
    },
    {
      "id_kecamatan": "9427030",
      "id_kabupaten": "9427",
      "nama_kecamatan": "SUPIORI TIMUR"
    },
    {
      "id_kecamatan": "9428030",
      "id_kabupaten": "9428",
      "nama_kecamatan": "WAROPEN ATAS"
    },
    {
      "id_kecamatan": "9428031",
      "id_kabupaten": "9428",
      "nama_kecamatan": "BENUKI"
    },
    {
      "id_kecamatan": "9428032",
      "id_kabupaten": "9428",
      "nama_kecamatan": "SAWAI"
    },
    {
      "id_kecamatan": "9428040",
      "id_kabupaten": "9428",
      "nama_kecamatan": "MAMBERAMO ILIR"
    },
    {
      "id_kecamatan": "9428050",
      "id_kabupaten": "9428",
      "nama_kecamatan": "MAMBERAMO TENGAH"
    },
    {
      "id_kecamatan": "9428051",
      "id_kabupaten": "9428",
      "nama_kecamatan": "IWASO"
    },
    {
      "id_kecamatan": "9428060",
      "id_kabupaten": "9428",
      "nama_kecamatan": "MAMBERAMO TENGAH TIMUR"
    },
    {
      "id_kecamatan": "9428070",
      "id_kabupaten": "9428",
      "nama_kecamatan": "ROFAER"
    },
    {
      "id_kecamatan": "9428080",
      "id_kabupaten": "9428",
      "nama_kecamatan": "MAMBERAMO ULU"
    },
    {
      "id_kecamatan": "9429010",
      "id_kabupaten": "9429",
      "nama_kecamatan": "WOSAK"
    },
    {
      "id_kecamatan": "9429020",
      "id_kabupaten": "9429",
      "nama_kecamatan": "KENYAM"
    },
    {
      "id_kecamatan": "9429030",
      "id_kabupaten": "9429",
      "nama_kecamatan": "GESELMA"
    },
    {
      "id_kecamatan": "9429040",
      "id_kabupaten": "9429",
      "nama_kecamatan": "MAPENDUMA"
    },
    {
      "id_kecamatan": "9429050",
      "id_kabupaten": "9429",
      "nama_kecamatan": "MUGI"
    },
    {
      "id_kecamatan": "9429060",
      "id_kabupaten": "9429",
      "nama_kecamatan": "YIGI"
    },
    {
      "id_kecamatan": "9429070",
      "id_kabupaten": "9429",
      "nama_kecamatan": "MBUWA"
    },
    {
      "id_kecamatan": "9429080",
      "id_kabupaten": "9429",
      "nama_kecamatan": "GEAREK"
    },
    {
      "id_kecamatan": "9430010",
      "id_kabupaten": "9430",
      "nama_kecamatan": "MAKKI"
    },
    {
      "id_kecamatan": "9430020",
      "id_kabupaten": "9430",
      "nama_kecamatan": "PIRIME"
    },
    {
      "id_kecamatan": "9430030",
      "id_kabupaten": "9430",
      "nama_kecamatan": "TIOM"
    },
    {
      "id_kecamatan": "9430040",
      "id_kabupaten": "9430",
      "nama_kecamatan": "BALINGGA"
    },
    {
      "id_kecamatan": "9430050",
      "id_kabupaten": "9430",
      "nama_kecamatan": "KUYAWAGE"
    },
    {
      "id_kecamatan": "9430060",
      "id_kabupaten": "9430",
      "nama_kecamatan": "MALAGAINERI"
    },
    {
      "id_kecamatan": "9430070",
      "id_kabupaten": "9430",
      "nama_kecamatan": "TIOMNERI"
    },
    {
      "id_kecamatan": "9430080",
      "id_kabupaten": "9430",
      "nama_kecamatan": "DIMBA"
    },
    {
      "id_kecamatan": "9430090",
      "id_kabupaten": "9430",
      "nama_kecamatan": "GAMELIA"
    },
    {
      "id_kecamatan": "9430100",
      "id_kabupaten": "9430",
      "nama_kecamatan": "POGA"
    },
    {
      "id_kecamatan": "9431010",
      "id_kabupaten": "9431",
      "nama_kecamatan": "KOBAKMA"
    },
    {
      "id_kecamatan": "9431020",
      "id_kabupaten": "9431",
      "nama_kecamatan": "ILUGWA"
    },
    {
      "id_kecamatan": "9431030",
      "id_kabupaten": "9431",
      "nama_kecamatan": "KELILA"
    },
    {
      "id_kecamatan": "9431040",
      "id_kabupaten": "9431",
      "nama_kecamatan": "ERAGAYAM"
    },
    {
      "id_kecamatan": "9431050",
      "id_kabupaten": "9431",
      "nama_kecamatan": "MEGAMBILIS"
    },
    {
      "id_kecamatan": "9432010",
      "id_kabupaten": "9432",
      "nama_kecamatan": "WELAREK"
    },
    {
      "id_kecamatan": "9432020",
      "id_kabupaten": "9432",
      "nama_kecamatan": "APALAPSILI"
    },
    {
      "id_kecamatan": "9432030",
      "id_kabupaten": "9432",
      "nama_kecamatan": "ABENAHO"
    },
    {
      "id_kecamatan": "9432040",
      "id_kabupaten": "9432",
      "nama_kecamatan": "ELELIM"
    },
    {
      "id_kecamatan": "9432050",
      "id_kabupaten": "9432",
      "nama_kecamatan": "BENAWA"
    },
    {
      "id_kecamatan": "9433010",
      "id_kabupaten": "9433",
      "nama_kecamatan": "AGADUGUME"
    },
    {
      "id_kecamatan": "9433020",
      "id_kabupaten": "9433",
      "nama_kecamatan": "GOME"
    },
    {
      "id_kecamatan": "9433030",
      "id_kabupaten": "9433",
      "nama_kecamatan": "ILAGA"
    },
    {
      "id_kecamatan": "9433040",
      "id_kabupaten": "9433",
      "nama_kecamatan": "SINAK"
    },
    {
      "id_kecamatan": "9433050",
      "id_kabupaten": "9433",
      "nama_kecamatan": "POGOMA"
    },
    {
      "id_kecamatan": "9433060",
      "id_kabupaten": "9433",
      "nama_kecamatan": "WANGBE"
    },
    {
      "id_kecamatan": "9433070",
      "id_kabupaten": "9433",
      "nama_kecamatan": "BEOGA"
    },
    {
      "id_kecamatan": "9433080",
      "id_kabupaten": "9433",
      "nama_kecamatan": "DOUFO"
    },
    {
      "id_kecamatan": "9434010",
      "id_kabupaten": "9434",
      "nama_kecamatan": "SUKIKAI SELATAN"
    },
    {
      "id_kecamatan": "9434020",
      "id_kabupaten": "9434",
      "nama_kecamatan": "PIYAIYE"
    },
    {
      "id_kecamatan": "9434030",
      "id_kabupaten": "9434",
      "nama_kecamatan": "MAPIA BARAT"
    },
    {
      "id_kecamatan": "9434040",
      "id_kabupaten": "9434",
      "nama_kecamatan": "MAPIA TENGAH"
    },
    {
      "id_kecamatan": "9434050",
      "id_kabupaten": "9434",
      "nama_kecamatan": "MAPIA"
    },
    {
      "id_kecamatan": "9434060",
      "id_kabupaten": "9434",
      "nama_kecamatan": "DOGIYAI"
    },
    {
      "id_kecamatan": "9434070",
      "id_kabupaten": "9434",
      "nama_kecamatan": "KAMU SELATAN"
    },
    {
      "id_kecamatan": "9434080",
      "id_kabupaten": "9434",
      "nama_kecamatan": "KAMU"
    },
    {
      "id_kecamatan": "9434090",
      "id_kabupaten": "9434",
      "nama_kecamatan": "KAMU TIMUR"
    },
    {
      "id_kecamatan": "9434100",
      "id_kabupaten": "9434",
      "nama_kecamatan": "KAMU UTARA"
    },
    {
      "id_kecamatan": "9435010",
      "id_kabupaten": "9435",
      "nama_kecamatan": "HOMEYO"
    },
    {
      "id_kecamatan": "9435020",
      "id_kabupaten": "9435",
      "nama_kecamatan": "SUGAPA"
    },
    {
      "id_kecamatan": "9435030",
      "id_kabupaten": "9435",
      "nama_kecamatan": "HITADIPA"
    },
    {
      "id_kecamatan": "9435040",
      "id_kabupaten": "9435",
      "nama_kecamatan": "AGISIGA"
    },
    {
      "id_kecamatan": "9435050",
      "id_kabupaten": "9435",
      "nama_kecamatan": "BIANDOGA"
    },
    {
      "id_kecamatan": "9435060",
      "id_kabupaten": "9435",
      "nama_kecamatan": "WANDAI"
    },
    {
      "id_kecamatan": "9436010",
      "id_kabupaten": "9436",
      "nama_kecamatan": "KAPIRAYA"
    },
    {
      "id_kecamatan": "9436020",
      "id_kabupaten": "9436",
      "nama_kecamatan": "TIGI BARAT"
    },
    {
      "id_kecamatan": "9436030",
      "id_kabupaten": "9436",
      "nama_kecamatan": "TIGI"
    },
    {
      "id_kecamatan": "9436040",
      "id_kabupaten": "9436",
      "nama_kecamatan": "TIGI TIMUR"
    },
    {
      "id_kecamatan": "9436050",
      "id_kabupaten": "9436",
      "nama_kecamatan": "BOWOBADO"
    },
    {
      "id_kecamatan": "9471010",
      "id_kabupaten": "9471",
      "nama_kecamatan": "MUARA TAMI"
    },
    {
      "id_kecamatan": "9471020",
      "id_kabupaten": "9471",
      "nama_kecamatan": "ABEPURA"
    },
    {
      "id_kecamatan": "9471021",
      "id_kabupaten": "9471",
      "nama_kecamatan": "HERAM"
    },
    {
      "id_kecamatan": "9471030",
      "id_kabupaten": "9471",
      "nama_kecamatan": "JAYAPURA SELATAN"
    },
    {
      "id_kecamatan": "9471040",
      "id_kabupaten": "9471",
      "nama_kecamatan": "JAYAPURA UTARA"
    }
  ],
  "tbl_provinsi": [
    {
      "id_provinsi": "11",
      "nama_provinsi": "ACEH"
    },
    {
      "id_provinsi": "12",
      "nama_provinsi": "SUMATERA UTARA"
    },
    {
      "id_provinsi": "13",
      "nama_provinsi": "SUMATERA BARAT"
    },
    {
      "id_provinsi": "14",
      "nama_provinsi": "RIAU"
    },
    {
      "id_provinsi": "15",
      "nama_provinsi": "JAMBI"
    },
    {
      "id_provinsi": "16",
      "nama_provinsi": "SUMATERA SELATAN"
    },
    {
      "id_provinsi": "17",
      "nama_provinsi": "BENGKULU"
    },
    {
      "id_provinsi": "18",
      "nama_provinsi": "LAMPUNG"
    },
    {
      "id_provinsi": "19",
      "nama_provinsi": "KEPULAUAN BANGKA BELITUNG"
    },
    {
      "id_provinsi": "21",
      "nama_provinsi": "KEPULAUAN RIAU"
    },
    {
      "id_provinsi": "31",
      "nama_provinsi": "DKI JAKARTA"
    },
    {
      "id_provinsi": "32",
      "nama_provinsi": "JAWA BARAT"
    },
    {
      "id_provinsi": "33",
      "nama_provinsi": "JAWA TENGAH"
    },
    {
      "id_provinsi": "34",
      "nama_provinsi": "DI YOGYAKARTA"
    },
    {
      "id_provinsi": "35",
      "nama_provinsi": "JAWA TIMUR"
    },
    {
      "id_provinsi": "36",
      "nama_provinsi": "BANTEN"
    },
    {
      "id_provinsi": "51",
      "nama_provinsi": "BALI"
    },
    {
      "id_provinsi": "52",
      "nama_provinsi": "NUSA TENGGARA BARAT"
    },
    {
      "id_provinsi": "53",
      "nama_provinsi": "NUSA TENGGARA TIMUR"
    },
    {
      "id_provinsi": "61",
      "nama_provinsi": "KALIMANTAN BARAT"
    },
    {
      "id_provinsi": "62",
      "nama_provinsi": "KALIMANTAN TENGAH"
    },
    {
      "id_provinsi": "63",
      "nama_provinsi": "KALIMANTAN SELATAN"
    },
    {
      "id_provinsi": "64",
      "nama_provinsi": "KALIMANTAN TIMUR"
    },
    {
      "id_provinsi": "65",
      "nama_provinsi": "KALIMANTAN UTARA"
    },
    {
      "id_provinsi": "71",
      "nama_provinsi": "SULAWESI UTARA"
    },
    {
      "id_provinsi": "72",
      "nama_provinsi": "SULAWESI TENGAH"
    },
    {
      "id_provinsi": "73",
      "nama_provinsi": "SULAWESI SELATAN"
    },
    {
      "id_provinsi": "74",
      "nama_provinsi": "SULAWESI TENGGARA"
    },
    {
      "id_provinsi": "75",
      "nama_provinsi": "GORONTALO"
    },
    {
      "id_provinsi": "76",
      "nama_provinsi": "SULAWESI BARAT"
    },
    {
      "id_provinsi": "81",
      "nama_provinsi": "MALUKU"
    },
    {
      "id_provinsi": "82",
      "nama_provinsi": "MALUKU UTARA"
    },
    {
      "id_provinsi": "91",
      "nama_provinsi": "PAPUA BARAT"
    },
    {
      "id_provinsi": "94",
      "nama_provinsi": "PAPUA"
    }
  ],
  "tbl_sekolah": [
    {
      "id_sekolah": 5,
      "id_jenjang": 2,
      "nama_sekolah": "SD N BENDA 01",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.220835232739012,109.03538525104524",
      "foto": "1782713271_9a2b6b265d3dcefccef6.jpg",
      "alamat": "Jalan Raya Benda, Desa Benda, Kecamatan Sirampog, Kabupaten Brebes, Jawa Tengah",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329050,
      "id_wilayah": 20
    },
    {
      "id_sekolah": 6,
      "id_jenjang": 2,
      "nama_sekolah": "SD NEGERI BUMIAYU 01",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.256505341428376,109.0076780319214",
      "foto": "1782713362_8074abfbaa42ba209ce8.jpg",
      "alamat": "Jl. KH. Ali Machnuri No.15, Karangturi, Bumiayu, Kabupaten Brebes, Jawa Tengah",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 7,
      "id_jenjang": 4,
      "nama_sekolah": "SMA Negeri 1 Bumiayu",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.251567006565779,109.00544643402101",
      "foto": "1782795050_9098cf6cebc1efa86366.jpg",
      "alamat": "Jalan P. Diponegoro No. 02, Bumiayu, Taloksari, Dukuhturi, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 8,
      "id_jenjang": 3,
      "nama_sekolah": "SMP NEGERI 1 PAGUYANGAN",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.298904672103336,109.03651714324953",
      "foto": "1782795189_02afff509c8aeff86f64.jpg",
      "alamat": "Winduaji, Kec. Paguyangan, Kabupaten Brebes, Jawa Tengah 52276",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329040,
      "id_wilayah": 23
    },
    {
      "id_sekolah": 9,
      "id_jenjang": 1,
      "nama_sekolah": "TKIT Arrohman Jatisawit Bumiayu",
      "akreditasi": "B",
      "status": "Swasta",
      "coordinat": "-7.249268108066661,109.00561809539796",
      "foto": "1782795308_1a632a8b74011a2fcac1.jpg",
      "alamat": "Komplek Candi Sari, Jalan Rumono, Krajan I, RT.03/RW.02, Karanggrung Barat, Jatisawit, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 10,
      "id_jenjang": 2,
      "nama_sekolah": "SD Negeri Kalierang 04",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.2561751156270775,109.00992829953792",
      "foto": "1783513975_5358a64646eca0278a96.jpg",
      "alamat": "P2V6+F2M, Jl. Komp. Lap. Pendawa, Pongkuron, Kalierang, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 11,
      "id_jenjang": 3,
      "nama_sekolah": "SMP N 1 Bumiayu",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.254134036893625,109.00961148952479",
      "foto": "1783514357_a0f7db9b0791f258964b.jpg",
      "alamat": "Jl. K.H. Ahmad Dahlan No.15, Krajan Dua, Kalierang, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 12,
      "id_jenjang": 3,
      "nama_sekolah": "SMP N 2 Bumiayu",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.271620672741855,108.98579349683158",
      "foto": "1783515013_8d7f45bc9b5f77d0dc7c.jpg",
      "alamat": "Jl. Raya Pruwatan No.41, Karangjatisekolahan, Laren, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 13,
      "id_jenjang": 4,
      "nama_sekolah": "SMA N 1 Bantarkawung",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.2330066731879965,108.93231390447151",
      "foto": "1783516352_61a9ddfd0beda4fc3008.jpg",
      "alamat": "Jalan Raya Bantarkawung No. 15, Cilakar, Desa Pangebatan, Kecamatan Bantarkawung, Kabupaten Brebes, Jawa Tengah",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329020,
      "id_wilayah": 24
    },
    {
      "id_sekolah": 14,
      "id_jenjang": 4,
      "nama_sekolah": "SMA N 1 Salem",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.1673223031611935,108.80183233323922",
      "foto": "1783516932_1558e209c72ca6a23826.jpg",
      "alamat": "Jl. Raya Salem - Bentar, RT 04 / RW 06, Dusun Cigareng, Desa Salem, Kecamatan Salem, Kabupaten Brebes, Jawa Tengah 52275",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329010,
      "id_wilayah": 25
    },
    {
      "id_sekolah": 15,
      "id_jenjang": 4,
      "nama_sekolah": "SMK N 1 Tonjong",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.157044438670362,108.98950621073466",
      "foto": "1783517333_3962cbbc06d7cdde4dd5.jpg",
      "alamat": "Jl. Raya Kutamendala, Kecamatan Tonjong, Kabupaten Brebes, Jawa Tengah 52271",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329060,
      "id_wilayah": 21
    },
    {
      "id_sekolah": 16,
      "id_jenjang": 2,
      "nama_sekolah": "SD Negeri Tonjong 04",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.184119805123628,109.02077539585437",
      "foto": "1783861926_5e727cbaf8b9196bc27f.jpg",
      "alamat": "Jl. Pejagan - Bumiayu, Krajan, Tonjong, Kec. Tonjong, Kabupaten Brebes, Jawa Tengah 52271",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329060,
      "id_wilayah": 21
    },
    {
      "id_sekolah": 17,
      "id_jenjang": 3,
      "nama_sekolah": "SMP N 1 Sirampog",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.205972660060358,109.05436428109486",
      "foto": "1783868697_cc0f04f72ac872f868f3.jpg",
      "alamat": "Jalan Raya Gunung Kembang, Desa Manggis, Kecamatan Sirampog, Kabupaten Brebes, Jawa Tengah",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329050,
      "id_wilayah": 20
    },
    {
      "id_sekolah": 18,
      "id_jenjang": 4,
      "nama_sekolah": "SMA Islam T.Huda Bumiayu",
      "akreditasi": "A",
      "status": "Swasta",
      "coordinat": "-7.254239875174798,109.01173065308508",
      "foto": "1783868893_e1fbc0b411c73601be8c.jpg",
      "alamat": "SMA Islam Ta'alumul Huda Bumiayu, Jl. K.H. Ahmad Dahlan, Krajan Dua, Kalierang, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329170,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 19,
      "id_jenjang": 4,
      "nama_sekolah": "SMK Muhamadiyah Bumiayu",
      "akreditasi": "A",
      "status": "Swasta",
      "coordinat": "-7.2562182785557665,109.01617040882877",
      "foto": "1783869060_17524fa2ee8a38db5345.jpg",
      "alamat": "Jl. Pagenjahan Kalierang, Pagenjahan, Kalierang, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 20,
      "id_jenjang": 2,
      "nama_sekolah": "SD Negeri 1 Linggapura",
      "akreditasi": "A",
      "status": "Negeri",
      "coordinat": "-7.18478509265349,109.02560372057272",
      "foto": "1783875421_d96c7517e49abc34ce28.jpg",
      "alamat": "Linggapura, Kec. Tonjong, Kabupaten Brebes, Jawa Tengah 52271",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329060,
      "id_wilayah": 21
    },
    {
      "id_sekolah": 21,
      "id_jenjang": 4,
      "nama_sekolah": "SMK Ma'arif NU Paguyangan",
      "akreditasi": "A",
      "status": "Swasta",
      "coordinat": "-7.322393386141436,109.05842135691329",
      "foto": "1783875791_6e7c03a95a6ff47ff711.jpg",
      "alamat": "JL. Raya Windu Aji Paguyangan, 52276, Dukuhbenda, Paguyangan, Kec. Paguyangan, Kabupaten Brebes, Jawa Tengah 52276",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329170,
      "id_wilayah": 23
    },
    {
      "id_sekolah": 22,
      "id_jenjang": 1,
      "nama_sekolah": "Tk.Pertiwi Bantarkawung",
      "akreditasi": "C",
      "status": "Swasta",
      "coordinat": "-7.213137262477408,108.91869967945408",
      "foto": "1783999606_df0384cfb348671d7560.jpg",
      "alamat": "Bantarkawung, Kec. Bantarkawung, Kabupaten Brebes, Jawa Tengah",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329020,
      "id_wilayah": 24
    },
    {
      "id_sekolah": 23,
      "id_jenjang": 1,
      "nama_sekolah": "TK BAYANGKARI",
      "akreditasi": "B",
      "status": "Swasta",
      "coordinat": "-7.2555921201553835,109.00810960146917",
      "foto": "1784300817_f6b745cd1ba83b87a988.jpg",
      "alamat": "Krajan Dua, Kalierang, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    },
    {
      "id_sekolah": 24,
      "id_jenjang": 1,
      "nama_sekolah": "TK Putra 1 Bumiayu",
      "akreditasi": "A",
      "status": "Swasta",
      "coordinat": "-7.255134474072504,109.0078203275751",
      "foto": "1784301232_a8068beaab4bddf004d1.jpg",
      "alamat": "Krajan Dua, Kalierang, Kec. Bumiayu, Kabupaten Brebes, Jawa Tengah 52273",
      "id_provinsi": 33,
      "id_kabupaten": 3329,
      "id_kecamatan": 3329030,
      "id_wilayah": 22
    }
  ],
  "tbl_setting": [
    {
      "id": 1,
      "nama_web": "WEB GIS SEKOLAH",
      "coordinat_wilayah": "-7.231908895819837, 108.97783649554387",
      "zoom_view": 11
    }
  ],
  "tbl_user": [
    {
      "id_user": 3,
      "nama_user": "Admin",
      "email": "admin@gmail.com",
      "foto": "default.png"
    },
    {
      "id_user": 5,
      "nama_user": "yuris",
      "email": "yurishakam@gmail.com",
      "foto": "default.png"
    }
  ],
  "tbl_wilayah": [
    {
      "id_wilayah": 20,
      "nama_wilayah": "Kecamatan Sirampog",
      "geojson": "{\r\n  \"type\": \"FeatureCollection\",\r\n  \"features\": [{\r\n      \"type\": \"Feature\",\r\n      \"properties\": {},\r\n      \"geometry\": {\r\n        \"coordinates\": [\r\n          [\r\n            [\r\n              109.01843990124149,\r\n              -7.214188996704976\r\n            ],\r\n            [\r\n              109.02057318509401,\r\n              -7.217396839654285\r\n            ],\r\n            [\r\n              109.02037300284138,\r\n              -7.218904117923614\r\n            ],\r\n            [\r\n              109.03518354694341,\r\n              -7.230186430395378\r\n            ],\r\n            [\r\n              109.04704980806906,\r\n              -7.2291687651292875\r\n            ],\r\n            [\r\n              109.05169156227726,\r\n              -7.220242311562174\r\n            ],\r\n            [\r\n              109.05898797346413,\r\n              -7.2275890221040555\r\n            ],\r\n            [\r\n              109.06165655461922,\r\n              -7.227262696161844\r\n            ],\r\n            [\r\n              109.06103923549449,\r\n              -7.2293111293716805\r\n            ],\r\n            [\r\n              109.0695939176826,\r\n              -7.233203765020534\r\n            ],\r\n            [\r\n              109.07468836621814,\r\n              -7.233185546562382\r\n            ],\r\n            [\r\n              109.07904757969038,\r\n              -7.238063504833306\r\n            ],\r\n            [\r\n              109.08306779487424,\r\n              -7.2356696285406485\r\n            ],\r\n            [\r\n              109.0828664304571,\r\n              -7.232840017601802\r\n            ],\r\n            [\r\n              109.089883865008,\r\n              -7.229345181279541\r\n            ],\r\n            [\r\n              109.09704881475028,\r\n              -7.232636114731406\r\n            ],\r\n            [\r\n              109.10569846837973,\r\n              -7.232844023994701\r\n            ],\r\n            [\r\n              109.11123994403067,\r\n              -7.2360526883702505\r\n            ],\r\n            [\r\n              109.1304054187056,\r\n              -7.251300046839191\r\n            ],\r\n            [\r\n              109.13957306170147,\r\n              -7.267695908040693\r\n            ],\r\n            [\r\n              109.14662290090774,\r\n              -7.2665294223029235\r\n            ],\r\n            [\r\n              109.15824641815831,\r\n              -7.267688748006691\r\n            ],\r\n            [\r\n              109.16420657502691,\r\n              -7.271948529385519\r\n            ],\r\n            [\r\n              109.16718665346121,\r\n              -7.2696622423808215\r\n            ],\r\n            [\r\n              109.16214716998482,\r\n              -7.262336432808327\r\n            ],\r\n            [\r\n              109.1660115810921,\r\n              -7.255599473117286\r\n            ],\r\n            [\r\n              109.16521214158718,\r\n              -7.24868190634767\r\n            ],\r\n            [\r\n              109.17494897733775,\r\n              -7.250155430018779\r\n            ],\r\n            [\r\n              109.17471496383149,\r\n              -7.239671929379725\r\n            ],\r\n            [\r\n              109.16845436286701,\r\n              -7.239495530657209\r\n            ],\r\n            [\r\n              109.15696479177484,\r\n              -7.244225161609151\r\n            ],\r\n            [\r\n              109.15649787807672,\r\n              -7.246462879800106\r\n            ],\r\n            [\r\n              109.14945402064336,\r\n              -7.245950604143317\r\n            ],\r\n            [\r\n              109.13784895535065,\r\n              -7.237081312556448\r\n            ],\r\n            [\r\n              109.13781895301622,\r\n              -7.234983924053353\r\n            ],\r\n            [\r\n              109.13554172256957,\r\n              -7.232334467444197\r\n            ],\r\n            [\r\n              109.13326449212292,\r\n              -7.232334923130466\r\n            ],\r\n            [\r\n              109.12524660512827,\r\n              -7.22550040580137\r\n            ],\r\n            [\r\n              109.11866022416541,\r\n              -7.219995802815177\r\n            ],\r\n            [\r\n              109.11458233738813,\r\n              -7.213661034602339\r\n            ],\r\n            [\r\n              109.10268067188952,\r\n              -7.210216867960156\r\n            ],\r\n            [\r\n              109.09858178499081,\r\n              -7.208235021352749\r\n            ],\r\n            [\r\n              109.09791920644017,\r\n              -7.20882286169028\r\n            ],\r\n            [\r\n              109.09685868389789,\r\n              -7.207637457936187\r\n            ],\r\n            [\r\n              109.08018822253376,\r\n              -7.2091331384754795\r\n            ],\r\n            [\r\n              109.08129534865446,\r\n              -7.19831579413345\r\n            ],\r\n            [\r\n              109.06436623517868,\r\n              -7.191992951642959\r\n            ],\r\n            [\r\n              109.06295547938322,\r\n              -7.192393934710623\r\n            ],\r\n            [\r\n              109.05686228560268,\r\n              -7.188885985525005\r\n            ],\r\n            [\r\n              109.0503368803254,\r\n              -7.190366952369445\r\n            ],\r\n            [\r\n              109.0474983652091,\r\n              -7.1943440243098\r\n            ],\r\n            [\r\n              109.03754786951566,\r\n              -7.1984292117567605\r\n            ],\r\n            [\r\n              109.03439201785056,\r\n              -7.204789208632036\r\n            ],\r\n            [\r\n              109.0359652666022,\r\n              -7.206212269599405\r\n            ],\r\n            [\r\n              109.03287496638382,\r\n              -7.211708433939478\r\n            ],\r\n            [\r\n              109.0265280409493,\r\n              -7.210151812520493\r\n            ],\r\n            [\r\n              109.02373091863876,\r\n              -7.211910431055344\r\n            ],\r\n            [\r\n              109.01976467315836,\r\n              -7.210488952992051\r\n            ],\r\n            [\r\n              109.01843990124149,\r\n              -7.214188996704976\r\n            ]\r\n          ]\r\n        ],\r\n        \"type\": \"Polygon\"\r\n      }\r\n    }]\r\n}",
      "warna": "#0CFF00"
    },
    {
      "id_wilayah": 21,
      "nama_wilayah": "Kecamatan Tonjong",
      "geojson": "{\r\n  \"type\": \"FeatureCollection\",\r\n  \"features\": [{\r\n      \"type\": \"Feature\",\r\n      \"properties\": {},\r\n      \"geometry\": {\r\n        \"coordinates\": [\r\n          [\r\n            [\r\n              108.98318940317671,\r\n              -7.188452736942736\r\n            ],\r\n            [\r\n              108.98292238911273,\r\n              -7.189769359493141\r\n            ],\r\n            [\r\n              108.98955446444103,\r\n              -7.200333614155284\r\n            ],\r\n            [\r\n              108.98332702755943,\r\n              -7.216406128609265\r\n            ],\r\n            [\r\n              108.97687278637926,\r\n              -7.220250273869482\r\n            ],\r\n            [\r\n              108.98443274540813,\r\n              -7.2223497364871605\r\n            ],\r\n            [\r\n              108.99572124419711,\r\n              -7.223915737833465\r\n            ],\r\n            [\r\n              108.99987889875496,\r\n              -7.215269058709623\r\n            ],\r\n            [\r\n              109.00953848468066,\r\n              -7.217755079285382\r\n            ],\r\n            [\r\n              109.01483797637991,\r\n              -7.2212304548747\r\n            ],\r\n            [\r\n              109.01768094226588,\r\n              -7.220574633168269\r\n            ],\r\n            [\r\n              109.01985523376248,\r\n              -7.218672104548048\r\n            ],\r\n            [\r\n              109.0199853146907,\r\n              -7.217492788031322\r\n            ],\r\n            [\r\n              109.017617852797,\r\n              -7.213883704363852\r\n            ],\r\n            [\r\n              109.01940536878323,\r\n              -7.209617448411663\r\n            ],\r\n            [\r\n              109.02369852345959,\r\n              -7.2113303668273545\r\n            ],\r\n            [\r\n              109.02674766948888,\r\n              -7.209423094666192\r\n            ],\r\n            [\r\n              109.03272963570788,\r\n              -7.211003431694294\r\n            ],\r\n            [\r\n              109.03538838518995,\r\n              -7.206258363389381\r\n            ],\r\n            [\r\n              109.03373001113096,\r\n              -7.204807031554083\r\n            ],\r\n            [\r\n              109.0374084847993,\r\n              -7.197804336804353\r\n            ],\r\n            [\r\n              109.04729680936993,\r\n              -7.193819080473006\r\n            ],\r\n            [\r\n              109.05047321706695,\r\n              -7.18949414247534\r\n            ],\r\n            [\r\n              109.05781233052022,\r\n              -7.18536084192111\r\n            ],\r\n            [\r\n              109.05853538369928,\r\n              -7.186739044768942\r\n            ],\r\n            [\r\n              109.05834173987813,\r\n              -7.184179875316175\r\n            ],\r\n            [\r\n              109.06904120166081,\r\n              -7.167853334608807\r\n            ],\r\n            [\r\n              109.07167747413234,\r\n              -7.165502042071708\r\n            ],\r\n            [\r\n              109.0716122998034,\r\n              -7.157741532771226\r\n            ],\r\n            [\r\n              109.07013747327773,\r\n              -7.151858023043729\r\n            ],\r\n            [\r\n              109.07333274026263,\r\n              -7.135005645224908\r\n            ],\r\n            [\r\n              109.0649485586672,\r\n              -7.141340881354466\r\n            ],\r\n            [\r\n              109.06271361388963,\r\n              -7.1473462839502275\r\n            ],\r\n            [\r\n              109.04789916538687,\r\n              -7.145846235662162\r\n            ],\r\n            [\r\n              109.0416420136732,\r\n              -7.155306586038762\r\n            ],\r\n            [\r\n              109.04575606699638,\r\n              -7.158385950899486\r\n            ],\r\n            [\r\n              109.0443274041038,\r\n              -7.164761919980336\r\n            ],\r\n            [\r\n              109.03383556853271,\r\n              -7.165590867078308\r\n            ],\r\n            [\r\n              109.02761257988618,\r\n              -7.160357434801327\r\n            ],\r\n            [\r\n              109.01891863807424,\r\n              -7.153889319158111\r\n            ],\r\n            [\r\n              109.0103293675457,\r\n              -7.154677922338223\r\n            ],\r\n            [\r\n              109.0010576599534,\r\n              -7.152180808799912\r\n            ],\r\n            [\r\n              108.98811130633993,\r\n              -7.141599098105274\r\n            ],\r\n            [\r\n              108.97627865139413,\r\n              -7.142842395863909\r\n            ],\r\n            [\r\n              108.97218640676277,\r\n              -7.14803357309421\r\n            ],\r\n            [\r\n              108.96925648483398,\r\n              -7.1482807599530815\r\n            ],\r\n            [\r\n              108.9688797728752,\r\n              -7.15343657566909\r\n            ],\r\n            [\r\n              108.97298332028055,\r\n              -7.155282667456859\r\n            ],\r\n            [\r\n              108.98067593774852,\r\n              -7.17764174151371\r\n            ],\r\n            [\r\n              108.98601132683041,\r\n              -7.188897394273525\r\n            ],\r\n            [\r\n              108.98318940317671,\r\n              -7.188452736942736\r\n            ]\r\n          ]\r\n        ],\r\n        \"type\": \"Polygon\"\r\n      }\r\n    }]\r\n}",
      "warna": "#FF1010"
    },
    {
      "id_wilayah": 22,
      "nama_wilayah": "Kecamatan Bumiayu",
      "geojson": "{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"coordinates\":[[[109.0147146710757,-7.221961098363565],[109.00902275766072,-7.218354468205135],[109.00000539290892,-7.216338576956005],[108.9959178410482,-7.2245843537607755],[108.98438814406722,-7.222986764704217],[108.97528730402223,-7.220535521182512],[108.9827514906288,-7.215179669959269],[108.98855585036893,-7.199945312115474],[108.98159114960339,-7.188840176202447],[108.96254106887426,-7.178114599888772],[108.93092895300259,-7.185152006470261],[108.94259906293155,-7.1926039475194585],[108.92634937847123,-7.198405574524514],[108.92468034592639,-7.212866475985095],[108.96616187634464,-7.285798287541354],[108.96180285514288,-7.286400204333248],[108.961192131568,-7.2915183958223935],[108.9844394318639,-7.300367124534446],[108.99838232932706,-7.302963554950139],[109.00511715520474,-7.3007564890537395],[109.0070927141258,-7.304880453115075],[109.00875565486598,-7.298694895243358],[109.01240317921236,-7.295904075536043],[109.00750908116328,-7.288768513608147],[109.00968917988797,-7.284119429701647],[109.00727057228897,-7.277059736646933],[109.01396859513568,-7.269474366044733],[109.01699491865344,-7.268989228219311],[109.02167979628484,-7.2748330946633075],[109.02844778514077,-7.280829963242226],[109.04181335192527,-7.284597474369434],[109.04942719436184,-7.2760518468164435],[109.04676555270743,-7.273815228945352],[109.05020876210398,-7.2729421194021455],[109.0512803568671,-7.263708323473978],[109.0532918282554,-7.253157692573097],[109.04380380330991,-7.24838189566546],[109.04707486318335,-7.246334975685258],[109.0452725972782,-7.242018189298221],[109.05499073626305,-7.240238967583991],[109.06292632805525,-7.238689075974094],[109.05929006758942,-7.234137801534473],[109.06098442280143,-7.227800867333386],[109.05898480240859,-7.228090893296184],[109.0517922281245,-7.2208138378742035],[109.04729219389498,-7.229573584729891],[109.03515636902443,-7.230681794314165],[109.01993898679757,-7.219079822804716],[109.01785698091857,-7.221154571966167],[109.0147146710757,-7.221961098363565]]],\"type\":\"Polygon\"}}]}",
      "warna": "#0018FF"
    },
    {
      "id_wilayah": 23,
      "nama_wilayah": "Kecamatan Paguyangan",
      "geojson": "{\r\n      \"type\": \"Feature\",\r\n      \"properties\": {},\r\n      \"geometry\": {\r\n        \"coordinates\": [\r\n          [\r\n            [\r\n              109.06851332648966,\r\n              -7.337485611225034\r\n            ],\r\n            [\r\n              109.08080080968881,\r\n              -7.312566411238038\r\n            ],\r\n            [\r\n              109.10882256430045,\r\n              -7.310013018272997\r\n            ],\r\n            [\r\n              109.10899959791413,\r\n              -7.300668696425291\r\n            ],\r\n            [\r\n              109.12182816114506,\r\n              -7.301404294617683\r\n            ],\r\n            [\r\n              109.10344891457322,\r\n              -7.2909160187834345\r\n            ],\r\n            [\r\n              109.13360062847875,\r\n              -7.2924498961863975\r\n            ],\r\n            [\r\n              109.11693850979606,\r\n              -7.284798890768371\r\n            ],\r\n            [\r\n              109.12414078555548,\r\n              -7.2808837613710295\r\n            ],\r\n            [\r\n              109.12741536322204,\r\n              -7.284860688002254\r\n            ],\r\n            [\r\n              109.13220697681999,\r\n              -7.278541933228766\r\n            ],\r\n            [\r\n              109.14049715067193,\r\n              -7.284288911782127\r\n            ],\r\n            [\r\n              109.15150114328299,\r\n              -7.293886517665598\r\n            ],\r\n            [\r\n              109.1305990376888,\r\n              -7.252726367333892\r\n            ],\r\n            [\r\n              109.11104836600896,\r\n              -7.2370839674175755\r\n            ],\r\n            [\r\n              109.10504193663121,\r\n              -7.233842052151431\r\n            ],\r\n            [\r\n              109.09643612301005,\r\n              -7.233630677116082\r\n            ],\r\n            [\r\n              109.08981455592465,\r\n              -7.230143747461113\r\n            ],\r\n            [\r\n              109.08396979499821,\r\n              -7.233314193125111\r\n            ],\r\n            [\r\n              109.08412086234563,\r\n              -7.236415775117393\r\n            ],\r\n            [\r\n              109.07798892420504,\r\n              -7.239437373147254\r\n            ],\r\n            [\r\n              109.07372406179616,\r\n              -7.234730838117599\r\n            ],\r\n            [\r\n              109.06830843653518,\r\n              -7.234547837985204\r\n            ],\r\n            [\r\n              109.06174913817995,\r\n              -7.2309978294737505\r\n            ],\r\n            [\r\n              109.06071990936061,\r\n              -7.233039656756361\r\n            ],\r\n            [\r\n              109.06470320084196,\r\n              -7.238724972676209\r\n            ],\r\n            [\r\n              109.04688228947282,\r\n              -7.242546169779629\r\n            ],\r\n            [\r\n              109.04910798974419,\r\n              -7.246298305638675\r\n            ],\r\n            [\r\n              109.04593787106171,\r\n              -7.248042959421213\r\n            ],\r\n            [\r\n              109.05468967415061,\r\n              -7.2523692632506\r\n            ],\r\n            [\r\n              109.05183919983847,\r\n              -7.264013219447776\r\n            ],\r\n            [\r\n              109.0506109736308,\r\n              -7.273822275266056\r\n            ],\r\n            [\r\n              109.04787308725986,\r\n              -7.274055331352258\r\n            ],\r\n            [\r\n              109.05049189704698,\r\n              -7.275900006048758\r\n            ],\r\n            [\r\n              109.04178896034131,\r\n              -7.285381065640436\r\n            ],\r\n            [\r\n              109.02761467538193,\r\n              -7.281407603777396\r\n            ],\r\n            [\r\n              109.02057868176797,\r\n              -7.274974471167212\r\n            ],\r\n            [\r\n              109.01667025257052,\r\n              -7.270018163083392\r\n            ],\r\n            [\r\n              109.01433794196225,\r\n              -7.269918672737035\r\n            ],\r\n            [\r\n              109.00794825354598,\r\n              -7.277369466414257\r\n            ],\r\n            [\r\n              109.01074817503331,\r\n              -7.284613553286519\r\n            ],\r\n            [\r\n              109.00817738147117,\r\n              -7.288820401209392\r\n            ],\r\n            [\r\n              109.01340283590332,\r\n              -7.296480875550756\r\n            ],\r\n            [\r\n              109.00917691929311,\r\n              -7.299087879883402\r\n            ],\r\n            [\r\n              109.0072472547742,\r\n              -7.306096652784078\r\n            ],\r\n            [\r\n              109.00473329393395,\r\n              -7.301489603749047\r\n            ],\r\n            [\r\n              108.99853091370926,\r\n              -7.303707947800504\r\n            ],\r\n            [\r\n              108.9837567519549,\r\n              -7.300985304686051\r\n            ],\r\n            [\r\n              108.96115779598307,\r\n              -7.292343352827686\r\n            ],\r\n            [\r\n              108.96536886209316,\r\n              -7.312900346920912\r\n            ],\r\n            [\r\n              108.95936454547973,\r\n              -7.319038322446048\r\n            ],\r\n            [\r\n              108.95962455577143,\r\n              -7.323238899484593\r\n            ],\r\n            [\r\n              109.0036973575294,\r\n              -7.325974998096726\r\n            ],\r\n            [\r\n              109.00718730057832,\r\n              -7.321978143244394\r\n            ],\r\n            [\r\n              109.00709053635774,\r\n              -7.317577772354838\r\n            ],\r\n            [\r\n              109.01056650384066,\r\n              -7.316811350499577\r\n            ],\r\n            [\r\n              109.01191696947433,\r\n              -7.323867206232492\r\n            ],\r\n            [\r\n              109.01931631876448,\r\n              -7.3271434156851285\r\n            ],\r\n            [\r\n              109.01309844024871,\r\n              -7.3383363917493085\r\n            ],\r\n            [\r\n              109.01004301210133,\r\n              -7.339958239030594\r\n            ],\r\n            [\r\n              109.0160794542893,\r\n              -7.343959920760213\r\n            ],\r\n            [\r\n              109.02539985111594,\r\n              -7.347485408050076\r\n            ],\r\n            [\r\n              109.0465676400018,\r\n              -7.3361905951001205\r\n            ],\r\n            [\r\n              109.05982078502956,\r\n              -7.3380053857282945\r\n            ],\r\n            [\r\n              109.06851332648966,\r\n              -7.337485611225034\r\n            ]\r\n          ]\r\n        ],\r\n        \"type\": \"Polygon\"\r\n      }\r\n    }",
      "warna": "#F5F50C"
    },
    {
      "id_wilayah": 24,
      "nama_wilayah": "Kecamatan BantarKawung",
      "geojson": "{\r\n  \"type\": \"FeatureCollection\",\r\n  \"features\": [{\r\n      \"type\": \"Feature\",\r\n      \"properties\": {},\r\n      \"geometry\": {\r\n        \"coordinates\": [\r\n          [\r\n            [\r\n              108.93024785344403,\r\n              -7.18497413906735\r\n            ],\r\n            [\r\n              108.96291249980857,\r\n              -7.177302467835588\r\n            ],\r\n            [\r\n              108.98253285639743,\r\n              -7.187414984730253\r\n            ],\r\n            [\r\n              108.98462076250303,\r\n              -7.187556170253558\r\n            ],\r\n            [\r\n              108.97944550769398,\r\n              -7.177489136424356\r\n            ],\r\n            [\r\n              108.97177621343559,\r\n              -7.156431115476096\r\n            ],\r\n            [\r\n              108.96750333956436,\r\n              -7.154473364017065\r\n            ],\r\n            [\r\n              108.96786688604345,\r\n              -7.1473230763908475\r\n            ],\r\n            [\r\n              108.96950779729218,\r\n              -7.146833897207216\r\n            ],\r\n            [\r\n              108.96655471098404,\r\n              -7.143085830456229\r\n            ],\r\n            [\r\n              108.96511203869687,\r\n              -7.129039521917292\r\n            ],\r\n            [\r\n              108.97042318006231,\r\n              -7.123859622359987\r\n            ],\r\n            [\r\n              108.96777269530315,\r\n              -7.102182565514994\r\n            ],\r\n            [\r\n              108.97049782424597,\r\n              -7.089814302167213\r\n            ],\r\n            [\r\n              108.95967408807337,\r\n              -7.0854743348923535\r\n            ],\r\n            [\r\n              108.95767438151955,\r\n              -7.073436331999204\r\n            ],\r\n            [\r\n              108.9640813911384,\r\n              -7.06741540827403\r\n            ],\r\n            [\r\n              108.95732639275184,\r\n              -7.058068722499755\r\n            ],\r\n            [\r\n              108.96070905995253,\r\n              -7.05337615380472\r\n            ],\r\n            [\r\n              108.94383899413236,\r\n              -7.056420982635842\r\n            ],\r\n            [\r\n              108.94179762608337,\r\n              -7.073805548596013\r\n            ],\r\n            [\r\n              108.93505272869373,\r\n              -7.072169497242882\r\n            ],\r\n            [\r\n              108.92392293286002,\r\n              -7.0789262877999874\r\n            ],\r\n            [\r\n              108.92722152635758,\r\n              -7.103901101722826\r\n            ],\r\n            [\r\n              108.91317192580829,\r\n              -7.100609108755421\r\n            ],\r\n            [\r\n              108.90784802963759,\r\n              -7.107158312624364\r\n            ],\r\n            [\r\n              108.89075141706928,\r\n              -7.107488317029436\r\n            ],\r\n            [\r\n              108.88440738620045,\r\n              -7.1154916754056785\r\n            ],\r\n            [\r\n              108.8605332343476,\r\n              -7.106976178334008\r\n            ],\r\n            [\r\n              108.86088863116896,\r\n              -7.128461862769697\r\n            ],\r\n            [\r\n              108.87100475607781,\r\n              -7.1407029817060135\r\n            ],\r\n            [\r\n              108.88169354435541,\r\n              -7.1330406641771305\r\n            ],\r\n            [\r\n              108.88444475462137,\r\n              -7.160360039067271\r\n            ],\r\n            [\r\n              108.87860061363313,\r\n              -7.163382898594904\r\n            ],\r\n            [\r\n              108.88622246895926,\r\n              -7.177217613426933\r\n            ],\r\n            [\r\n              108.87201747042286,\r\n              -7.171715052033434\r\n            ],\r\n            [\r\n              108.8527627970854,\r\n              -7.204579656612296\r\n            ],\r\n            [\r\n              108.82813778668003,\r\n              -7.207864957126972\r\n            ],\r\n            [\r\n              108.8252018441753,\r\n              -7.22082524476869\r\n            ],\r\n            [\r\n              108.80620884644554,\r\n              -7.220750863115498\r\n            ],\r\n            [\r\n              108.81994512521709,\r\n              -7.23928123473857\r\n            ],\r\n            [\r\n              108.80895765056738,\r\n              -7.253822836240815\r\n            ],\r\n            [\r\n              108.80783952082851,\r\n              -7.260817651999076\r\n            ],\r\n            [\r\n              108.8220871991033,\r\n              -7.268425223787943\r\n            ],\r\n            [\r\n              108.84324348926646,\r\n              -7.2809692295707436\r\n            ],\r\n            [\r\n              108.8532599755921,\r\n              -7.273689526507042\r\n            ],\r\n            [\r\n              108.86394883000719,\r\n              -7.2785543647342905\r\n            ],\r\n            [\r\n              108.8780854187948,\r\n              -7.273876528902548\r\n            ],\r\n            [\r\n              108.87681934080115,\r\n              -7.283741889121117\r\n            ],\r\n            [\r\n              108.88174695343264,\r\n              -7.285349761608515\r\n            ],\r\n            [\r\n              108.8797871720908,\r\n              -7.293227579061309\r\n            ],\r\n            [\r\n              108.88632120965269,\r\n              -7.295404116601276\r\n            ],\r\n            [\r\n              108.94910204874168,\r\n              -7.300766984370981\r\n            ],\r\n            [\r\n              108.95207101779607,\r\n              -7.302825729480219\r\n            ],\r\n            [\r\n              108.95224708724578,\r\n              -7.296780014294683\r\n            ],\r\n            [\r\n              108.96060268574831,\r\n              -7.2916720176287555\r\n            ],\r\n            [\r\n              108.96128597355522,\r\n              -7.286087229760113\r\n            ],\r\n            [\r\n              108.96545666702019,\r\n              -7.28553083141685\r\n            ],\r\n            [\r\n              108.92402890733285,\r\n              -7.2132828234849455\r\n            ],\r\n            [\r\n              108.9254128785995,\r\n              -7.198236518894646\r\n            ],\r\n            [\r\n              108.94133884170026,\r\n              -7.192391670986424\r\n            ],\r\n            [\r\n              108.93024785344403,\r\n              -7.18497413906735\r\n            ]\r\n          ]\r\n        ],\r\n        \"type\": \"Polygon\"\r\n      }\r\n    }]\r\n}",
      "warna": "#F100DA"
    },
    {
      "id_wilayah": 25,
      "nama_wilayah": "Kecamatan Salem",
      "geojson": "{\r\n  \"type\": \"FeatureCollection\",\r\n  \"features\": [{\r\n      \"type\": \"Feature\",\r\n      \"properties\": {},\r\n      \"geometry\": {\r\n        \"coordinates\": [\r\n          [\r\n            [\r\n              108.82702854184231,\r\n              -7.206581814728963\r\n            ],\r\n            [\r\n              108.83144403001279,\r\n              -7.2058364477473305\r\n            ],\r\n            [\r\n              108.85207138579824,\r\n              -7.203039141597429\r\n            ],\r\n            [\r\n              108.86193986895961,\r\n              -7.186696615861763\r\n            ],\r\n            [\r\n              108.87210514860755,\r\n              -7.169175647409489\r\n            ],\r\n            [\r\n              108.88427380453732,\r\n              -7.1750651324438905\r\n            ],\r\n            [\r\n              108.87648289677571,\r\n              -7.162034439136555\r\n            ],\r\n            [\r\n              108.88293822034905,\r\n              -7.159016119354348\r\n            ],\r\n            [\r\n              108.88115744143417,\r\n              -7.135383211737107\r\n            ],\r\n            [\r\n              108.87047276793777,\r\n              -7.142377517095113\r\n            ],\r\n            [\r\n              108.85963969619257,\r\n              -7.129714174491738\r\n            ],\r\n            [\r\n              108.81704940043795,\r\n              -7.139432606947466\r\n            ],\r\n            [\r\n              108.8065131251816,\r\n              -7.145911440125971\r\n            ],\r\n            [\r\n              108.80028039897309,\r\n              -7.146205931387954\r\n            ],\r\n            [\r\n              108.79226689384944,\r\n              -7.13472063999798\r\n            ],\r\n            [\r\n              108.78544060066662,\r\n              -7.131749412925913\r\n            ],\r\n            [\r\n              108.7741623341941,\r\n              -7.1293934047944845\r\n            ],\r\n            [\r\n              108.77119436933515,\r\n              -7.118496709624651\r\n            ],\r\n            [\r\n              108.75932250989001,\r\n              -7.118791218304452\r\n            ],\r\n            [\r\n              108.7477474469323,\r\n              -7.111428444618369\r\n            ],\r\n            [\r\n              108.73914034883597,\r\n              -7.115846123003507\r\n            ],\r\n            [\r\n              108.72815887885105,\r\n              -7.113784545046556\r\n            ],\r\n            [\r\n              108.72222294912848,\r\n              -7.118791218304452\r\n            ],\r\n            [\r\n              108.72341013507389,\r\n              -7.125270361408511\r\n            ],\r\n            [\r\n              108.7168805415601,\r\n              -7.126153863067444\r\n            ],\r\n            [\r\n              108.71213179778056,\r\n              -7.137639369454476\r\n            ],\r\n            [\r\n              108.69788556644914,\r\n              -7.1503025423013895\r\n            ],\r\n            [\r\n              108.69284002618446,\r\n              -7.152363955831859\r\n            ],\r\n            [\r\n              108.6958079910458,\r\n              -7.155308816157088\r\n            ],\r\n            [\r\n              108.69316400257702,\r\n              -7.159458609945034\r\n            ],\r\n            [\r\n              108.69971903178816,\r\n              -7.167123533068633\r\n            ],\r\n            [\r\n              108.7074357404266,\r\n              -7.1627063498641945\r\n            ],\r\n            [\r\n              108.71426205960478,\r\n              -7.170068298084416\r\n            ],\r\n            [\r\n              108.72197876824322,\r\n              -7.182436103149925\r\n            ],\r\n            [\r\n              108.72316595418869,\r\n              -7.193625732147652\r\n            ],\r\n            [\r\n              108.74156733632685,\r\n              -7.198042615061681\r\n            ],\r\n            [\r\n              108.74809685901982,\r\n              -7.194509112168902\r\n            ],\r\n            [\r\n              108.74898724847776,\r\n              -7.1862641651352135\r\n            ],\r\n            [\r\n              108.75492317820033,\r\n              -7.194803571794338\r\n            ],\r\n            [\r\n              108.77302776385096,\r\n              -7.1992204432437035\r\n            ],\r\n            [\r\n              108.79053875653125,\r\n              -7.211881902942295\r\n            ],\r\n            [\r\n              108.80152022651617,\r\n              -7.205698443562909\r\n            ],\r\n            [\r\n              108.81042412110003,\r\n              -7.204520632208258\r\n            ],\r\n            [\r\n              108.82168620509236,\r\n              -7.218948624916592\r\n            ],\r\n            [\r\n              108.82465416995376,\r\n              -7.218654180981545\r\n            ],\r\n            [\r\n              108.82702854184231,\r\n              -7.206581814728963\r\n            ]\r\n          ]\r\n        ],\r\n        \"type\": \"Polygon\"\r\n      }\r\n    }]\r\n}",
      "warna": "#00F1E5"
    }
  ]
}
GIS_SEED_DATA;

    /**
     * The user password hashes are read from the local SQL dump at runtime,
     * rather than stored in this source file.
     */
    public function run(): void
    {
        if ($this->db->getPlatform() !== 'Postgre') {
            throw new RuntimeException('GisSekolahSeeder requires a PostgreSQL connection.');
        }

        $data = json_decode(self::DATA, true, 512, JSON_THROW_ON_ERROR);
        $userPasswords = $this->loadUserPasswords();

        foreach ($data['tbl_user'] as &$user) {
            $userId = (string) $user['id_user'];

            if (! array_key_exists($userId, $userPasswords)) {
                throw new RuntimeException('The SQL dump does not contain a password for every seeded user.');
            }

            $user['password'] = $userPasswords[$userId];
        }
        unset($user);

        $primaryKeys = [
            'tbl_jenjang'   => 'id_jenjang',
            'tbl_kabupaten' => 'id_kabupaten',
            'tbl_kecamatan' => 'id_kecamatan',
            'tbl_provinsi'  => 'id_provinsi',
            'tbl_sekolah'   => 'id_sekolah',
            'tbl_setting'   => 'id',
            'tbl_user'      => 'id_user',
            'tbl_wilayah'   => 'id_wilayah',
        ];
        $identityColumns = [
            'tbl_jenjang' => 'id_jenjang',
            'tbl_sekolah' => 'id_sekolah',
            'tbl_setting' => 'id',
            'tbl_user'    => 'id_user',
            'tbl_wilayah' => 'id_wilayah',
        ];

        if (! $this->db->transBegin()) {
            throw new RuntimeException('Could not start the database transaction for GIS school data.');
        }

        try {
            foreach ($data as $table => $rows) {
                $result = $this->db->table($table)
                    ->onConstraint($primaryKeys[$table])
                    ->upsertBatch($rows, true, 250);

                if ($result === false) {
                    throw new RuntimeException('Could not seed table ' . $table . '.');
                }
            }

            foreach ($identityColumns as $table => $column) {
                $quotedTable  = $this->db->protectIdentifiers($table);
                $quotedColumn = $this->db->protectIdentifiers($column);
                $result       = $this->db->query(
                    'SELECT setval(pg_get_serial_sequence(?, ?), COALESCE(MAX(' . $quotedColumn . '), 1), MAX('
                    . $quotedColumn . ') IS NOT NULL) FROM ' . $quotedTable,
                    [$table, $column],
                );

                if ($result === false) {
                    throw new RuntimeException('Could not synchronize the identity sequence for ' . $table . '.');
                }
            }

            if (! $this->db->transStatus()) {
                throw new RuntimeException('Seeding GIS school data failed; the transaction was rolled back.');
            }

            if (! $this->db->transCommit()) {
                throw new RuntimeException('Could not commit the GIS school data transaction.');
            }
        } catch (Throwable $exception) {
            $this->db->transRollback();

            throw $exception;
        }
    }

    /**
     * Load user hashes from a local dump so credentials are not embedded in source control.
     *
     * Set GIS_SEED_DUMP_PATH to the path of db_gis_sekolah.sql before running this seeder.
     *
     * @return array<string, string|null>
     */
    private function loadUserPasswords(): array
    {
        $dumpPath = env('GIS_SEED_DUMP_PATH');

        if (! is_string($dumpPath) || trim($dumpPath) === '') {
            throw new RuntimeException('Set GIS_SEED_DUMP_PATH to the local db_gis_sekolah.sql file before seeding.');
        }

        if (! is_file($dumpPath) || ! is_readable($dumpPath)) {
            throw new RuntimeException('The SQL dump configured in GIS_SEED_DUMP_PATH is not readable.');
        }

        $sql = file_get_contents($dumpPath);

        if ($sql === false) {
            throw new RuntimeException('Could not read the SQL dump configured in GIS_SEED_DUMP_PATH.');
        }

        $pattern = '/INSERT INTO `tbl_user` \((.*?)\) VALUES/s';
        preg_match_all($pattern, $sql, $matches, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);

        if ($matches === []) {
            throw new RuntimeException('No tbl_user data was found in the configured SQL dump.');
        }

        $passwords = [];

        foreach ($matches as $match) {
            preg_match_all('/`([^`]+)`/', $match[1][0], $columnMatches);
            $columns   = $columnMatches[1];
            $bodyStart = $match[0][1] + strlen($match[0][0]);
            $bodyEnd   = $this->findStatementEnd($sql, $bodyStart);
            $rows      = $this->parseInsertRows(substr($sql, $bodyStart, $bodyEnd - $bodyStart));

            foreach ($rows as $row) {
                if (count($row) !== count($columns)) {
                    throw new RuntimeException('A tbl_user row has a different number of values than columns.');
                }

                $record = array_combine($columns, $row);

                if (! isset($record['id_user']) || ! array_key_exists('password', $record)) {
                    throw new RuntimeException('The tbl_user insert is missing its id_user or password column.');
                }

                $passwords[(string) $record['id_user']] = $record['password'];
            }
        }

        return $passwords;
    }

    private function findStatementEnd(string $sql, int $offset): int
    {
        $inString = false;
        $escaped  = false;
        $length   = strlen($sql);

        for ($index = $offset; $index < $length; $index++) {
            $character = $sql[$index];

            if ($inString) {
                if ($escaped) {
                    $escaped = false;
                } elseif ($character === '\\') {
                    $escaped = true;
                } elseif ($character === "'") {
                    if ($index + 1 < $length && $sql[$index + 1] === "'") {
                        $index++;
                    } else {
                        $inString = false;
                    }
                }
            } elseif ($character === "'") {
                $inString = true;
            } elseif ($character === ';') {
                return $index;
            }
        }

        throw new RuntimeException('An INSERT statement in the SQL dump is not terminated.');
    }

    /**
     * @return list<list<int|float|string|null>>
     */
    private function parseInsertRows(string $values): array
    {
        $rows   = [];
        $length = strlen($values);
        $index  = 0;

        while ($index < $length) {
            while ($index < $length && (ctype_space($values[$index]) || $values[$index] === ',')) {
                $index++;
            }

            if ($index >= $length) {
                break;
            }

            if ($values[$index] !== '(') {
                throw new RuntimeException('Unexpected data in a tbl_user INSERT statement.');
            }

            $index++;
            $row = [];

            while (true) {
                while ($index < $length && ctype_space($values[$index])) {
                    $index++;
                }

                if ($index >= $length) {
                    throw new RuntimeException('A tbl_user row in the SQL dump is incomplete.');
                }

                if ($values[$index] === "'") {
                    $index++;
                    $value   = '';
                    $inString = true;

                    while ($index < $length && $inString) {
                        $character = $values[$index++];

                        if ($character === '\\') {
                            if ($index >= $length) {
                                throw new RuntimeException('A string escape in tbl_user data is incomplete.');
                            }

                            $escapedCharacter = $values[$index++];
                            $value           .= match ($escapedCharacter) {
                                '0'     => "\0",
                                'b'     => "\x08",
                                'n'     => "\n",
                                'r'     => "\r",
                                't'     => "\t",
                                'Z'     => "\x1a",
                                default => $escapedCharacter,
                            };
                        } elseif ($character === "'") {
                            if ($index < $length && $values[$index] === "'") {
                                $value .= "'";
                                $index++;
                            } else {
                                $inString = false;
                            }
                        } else {
                            $value .= $character;
                        }
                    }

                    if ($inString) {
                        throw new RuntimeException('A quoted tbl_user value in the SQL dump is incomplete.');
                    }
                } else {
                    $start = $index;

                    while ($index < $length && $values[$index] !== ',' && $values[$index] !== ')') {
                        $index++;
                    }

                    $token = trim(substr($values, $start, $index - $start));

                    if (strcasecmp($token, 'NULL') === 0) {
                        $value = null;
                    } elseif (preg_match('/^-?\d+$/', $token)) {
                        $value = (int) $token;
                    } elseif (is_numeric($token)) {
                        $value = (float) $token;
                    } else {
                        throw new RuntimeException('An unsupported value was found in a tbl_user INSERT statement.');
                    }
                }

                $row[] = $value;

                while ($index < $length && ctype_space($values[$index])) {
                    $index++;
                }

                if ($index < $length && $values[$index] === ',') {
                    $index++;

                    continue;
                }

                if ($index < $length && $values[$index] === ')') {
                    $index++;

                    break;
                }

                throw new RuntimeException('Unexpected separator in a tbl_user row.');
            }

            $rows[] = $row;
        }

        return $rows;
    }
}
