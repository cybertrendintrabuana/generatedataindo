<?php

/**
 * @package Countries
 */

class Country_Indonesia extends CountryPlugin {
	protected $continent   = "asia";
	protected $countryName = "Indonesia";
	protected $countrySlug = "indonesia";
	protected $regionNames = "Indonesia & N";

	protected $extendedData = array(
		"zipFormat" => array(
			"format" => "Xxxxx",
			"replacements" => array(
				"X" => "123456789",
				"x" => "0123456789"
			)
		),
		"phoneFormat" => array(
			"displayFormats" => array(
				"(021) Xxxx-xxxx",
				"08xx-xxxx-xxxx",
				"+62 Xxx xxxx xxxx",
				"1 (AAA) Xxx-xxxx",
				"1-AAA-Xxx-xxxx"
			)
		)
	);

	protected $countryData = array(
		array(
			"regionName" => 'Banten',
			"regionShort" => 'BT',
			"regionSlug" => 'banten',
			"weight" => 2,
			"cities" => array(
				"Kota Tangerang", "Kota Tangerang Selatan", "Kota Cilegon", "Kota Serang", "Kabupaten Tangerang", "Kabupaten Lebak", "Kabupaten Pandeglang",
				"Kabupaten Serang"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"format" => "ZYxxx",
					"replacements" => array(
						"Z" => "3",
						"Y" => "56",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Aceh',
			"regionShort" => 'AC',
			"regionSlug" => 'aceh',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Aceh Barat", "Kabupaten Aceh Barat Daya", "Kabupaten Aceh Besar", "Kabupaten Aceh Jaya", "Kabupaten Aceh Selatan", "Kabupaten Aceh Singkil", "Kabupaten Aceh Tamiang", "Kabupaten Aceh Tengah", "Kabupaten Aceh Tenggara", "Kabupaten Aceh Timur", "Kabupaten Aceh Utara",
				"Kabupaten Bener Meriah", "Kabupaten Bireuen", "Kabupaten Gayo Lues", "Kabupaten Nagan Raya", "Kabupaten Pidie", "Kabupaten Simeulue", "Kota Banda Aceh", "Kota Langsa", "Kota Lhokseumawe", "Kota Sabang", "Kota Subulussalam"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"format" => "ZZYxx",
					"replacements" => array(
						"Z" => "9",
						"Y" => "56789",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Bali',
			"regionShort" => 'BA',
			"regionSlug" => 'bali',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Badung", "Kabupaten Bangli", "Kabupaten Buleleng", "Kabupaten Gianyar", "Kabupaten Jembrana",
				"Kabupaten Karangasem", "Kabupaten Klungkung", "Kabupaten Tabana", "Kota Denpasar"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"format" => "ZYxxx",
					"replacements" => array(
						"Z" => "8",
						"Y" => "56",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Bengkulu',
			"regionShort" => 'BE',
			"regionSlug" => 'bengkulu',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bengkulu Selatan", "Kabupaten Bengkulu Utara", "Kabupaten Kaur", "Kabupaten Kapahiang", "Kabupaten Lebong",
				"Kabupaten Mukomuko", "Kabupaten Rejang Lebong", "Kabupaten Seluma", "Kota Bengkulu"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"format" => "ZYxxx",
					"replacements" => array(
						"Z" => "7",
						"Y" => "12",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Gorontalo',
			"regionShort" => 'GO',
			"regionSlug" => 'gorontalo',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Boalemo", "Kabupaten Bone Bolango", "Kabupaten Gorontalo", "Kabupaten Gorontalo Utara", "Kabupaten Pohuwato", "Kota Gorontalo"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"area" => "ID-GO",
					"format" => "ZYxxx",
					"replacements" => array(
						"Z" => "9",
						"Y" => "0123456",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Jakarta',
			"regionShort" => 'JK',
			"regionSlug" => 'jakarta',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Administrasi Kepulauan Seribu", "Kota Administrasi Jakarta Barat", "Kota Administrasi Jakarta Pusat", "Kota Administrasi Jakarta Selatan", "Kota Administrasi Jakarta Timur", "Kota Administrasi Jakarta Utara"
			)
		),
		array(
			"regionName" => 'Jambi',
			"regionShort" => 'JA',
			"regionSlug" => 'jambi',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Batanghari", "Kabupaten Bungo", "Kabupaten Kerinci", "Kabupaten Merangin", "Kabupaten Muaro Jambi", "Kabupaten Sarolangun",
				"Kabupaten Tanjung Jabung Barat", "Kabupaten Tanjung Jabung Timur", "Kabupaten Tebo", "Kota Jambi", "Kota Sungaipenuh"
			)
		),
		array(
			"regionName" => 'Jawa Barat',
			"regionShort" => 'DE',
			"regionSlug" => 'jawa barat',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bandung", "Kabupaten Bandung Barat", "Kabupaten Bekasi", "Kabupaten Bogor", "Kabupaten Ciamis", "Kabupaten Cianjur", "Kabupaten Cirebon", "Kabupaten Garut", "Kabupaten Indramayu",
				"Kabupaten Karawang", "Kabupaten Kuningan", "Kabupaten Majalangka", "Kabupaten Pangandaran", "Kabupaten Purwakarta", "Kabupaten Subang", "Kabupaten Sukabumi", "Kabupaten Sumedang", "Kabupaten Tasikmalaya", "Kota Bandung",
				"Kota Banjar", "Kota Bekasi", "Kota Bogor", "Kota Cimahi", "Kota Cirebon", "Kota Depok", "Kota Sukabumi", "Kota Tasikmalaya"
			)
		),
		array(
			"regionName" => 'Jawa Tengah',
			"regionShort" => 'JT',
			"regionSlug" => 'jawa tengah',
			"weight" => 2,
			"cities" => array(
				"Kota Magelang", "Kota Pekalongan", "Kota Salatiga", "Kota Semarang", "Kota Surakarta", "Kota Tegal"
			)
		),
		array(
			"regionName" => 'Jawa Timur',
			"regionShort" => 'Jl',
			"regionSlug" => 'jawa timur',
			"weight" => 2,
			"cities" => array(
				"Kota Batu", "Kota Blitar", "Kota Kediri", "Kota Madiun", "Kota Malang", "Kota Mojokerto", "Kota Pasuruan", "Koto Probolinggo", "Kota Surabaya"
			)
		),
		array(
			"regionName" => 'Kalimantan Barat',
			"regionShort" => 'KB',
			"regionSlug" => 'kalimantan barat',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Melawi", "Kabupaten Sekadau", "Kabupaten Sintang", "Kota Pontianak", "Kota Singkawang"
			)
		),
		array(
			"regionName" => 'Kalimantan Selatan',
			"regionShort" => 'KS',
			"regionSlug" => 'kalimantan selatan',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Tanah Bumbu", "Kabupaten Tanah Laut", "Kabupaten Tapin", "Kota Banjarbaru", "Kota Banjarmasin"
			)
		),
		array(
			"regionName" => 'Kalimantan Tengah',
			"regionShort" => 'KT',
			"regionSlug" => 'kalimantan tengah',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Lamandau", "Kabupaten Murung Raya", "Kabupaten Pulang Pisau", "Kabupaten Sukamara", "Kabupaten Seruyan", "Kota Palangka Raya"
			)
		),
		array(
			"regionName" => 'Kalimantan Timur',
			"regionShort" => 'KI',
			"regionSlug" => 'kaliman timur',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Paser", "Kabupaten Panajam Paser Utara", "Kota Balikpapan", "Kota Bontang", "Kota Samarinda"
			)
		),
		array(
			"regionName" => 'Kalimantan Utara',
			"regionShort" => 'KU',
			"regionSlug" => 'kalimantan utara',
			"weight" => 2,
			"cities" => array(
				"Kota Tarakan", "Kabupaten Nunukan", "Kabupaten Bulungan", "Kabupaten Malinau", "Kabupaten Tana Tidung"
			)
		),
		array(
			"regionName" => 'Kepulauan Bangka Belitung',
			"regionShort" => 'BB',
			"regionSlug" => 'kepulauan bangka belitung',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bangka", "Kabupaten Belitung", "Kabupaten Bangka Barat", "Kabupaten Bangka Tengah", "Kabupaten Bangka Selatan", "Kabupaten Bangka Timur", "Kota Pangkal Pinang"
			)
		),
		array(
			"regionName" => 'Kepulauan Riau',
			"regionShort" => 'KR',
			"regionSlug" => 'kepulauan riau',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bintan Kepulauan", "Kabupaten Karimun", "Kabupaten Kepulauan Anambas", "Kabupaten Lingga", "Kabupaten Natuna", "Kota Batam", "Kota Tanjung Pinang"
			)
		),
		array(
			"regionName" => 'Lampung',
			"regionShort" => 'LA',
			"regionSlug" => 'lampung',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Tulang Bawang", "Kabupaten Tulang Bawang Barat", "Kabupaten Way Kanan", "Kota Bandar Lampung", "Kota Metro"
			)
		),
		array(
			"regionName" => 'Maluku',
			"regionShort" => 'MA',
			"regionSlug" => 'maluku',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Maluku Barat Daya", "Kabupaten Maluku Tengah", "Kabupaten Maluku Tenggara", "Kabupaten Maluku Tenggara Barat", "Kota Ambon", "Kota Tual"
			)
		),

	);

	public function install() {
		return CountryPluginHelper::populateDB($this->countryName, $this->countrySlug, $this->countryData);
	}
}
