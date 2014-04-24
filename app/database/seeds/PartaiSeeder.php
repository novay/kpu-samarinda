<?php

class PartaiSeeder extends Seeder {

	public function run() {
		# Hapus semua isi tabel partai
		DB::table('partai')->delete();

		# Inisialisasi semua yang ingin diisi
		$partai = array(
			array('id' => 1,
				'nama' => 'NasDem',
				'nama_lengkap' => 'Partai Nasional Demokrat',
				'ketua' => 'Surya Paloh',
				'sekjen' => 'Patrice Rio Capella',
				'bendahara' => 'Frankie Turtan',
				'alamat' => 'Jl. RP. Soeroso No. 44, Gondangdia Lama, Jakarta 10350',
				'telp' => '021-3929801',
				'fax' => '021-31927288',
				'lambang' => 'nasdem.png',
				'vote' => 6.39,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 2,
				'nama' => 'PKB',
				'nama_lengkap' => 'Partai Kebangkitan Bangsa',
				'ketua' => 'H. A. Muhaimin Iskandar',
				'sekjen' => 'H. Imam Nahrawi',
				'bendahara' => 'H. Bachrudin Nasori',
				'alamat' => 'Jl. Raden Saleh No. 9, Jakarta Pusat 10430',
				'telp' => '021-3145328',
				'fax' => '021-3145329',
				'lambang' => 'pkb.png',
				'vote' => 9.05,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 3,
				'nama' => 'PKS',
				'nama_lengkap' => 'Partai Keadilan Sejahtera',
				'ketua' => 'Muhammad Anis Matta',
				'sekjen' => 'Muhamad Taufik Ridlo',
				'bendahara' => 'Mahfudz Abdurrahman',
				'alamat' => 'Jl. TB. Simatupang Nomor 82, Pasar Minggu, Jakarta 21520',
				'telp' => '021-78842116',
				'fax' => '021-78846456',
				'lambang' => 'pks.png',
				'vote' => 6.61,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 4,
				'nama' => 'PDIP',
				'nama_lengkap' => 'Partai Demokrasi Indonesia Perjuangan',
				'ketua' => 'Megawati Soekarnoputri',
				'sekjen' => 'Tjahjo Kumolo',
				'bendahara' => 'Olly Dondokambey',
				'alamat' => 'Jl. Lenteng Agung No. 99, Jakarta Selatan 12610',
				'telp' => '021-7806028, 021-7806032',
				'fax' => '021-7814472',
				'lambang' => 'pdip.png',
				'vote' => 19.71,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 5,
				'nama' => 'Golkar',
				'nama_lengkap' => 'Golongan Karya',
				'ketua' => 'H. Aburizal Bakrie',
				'sekjen' => 'Idrus Marham',
				'bendahara' => 'Drs. Setya Novanto',
				'alamat' => 'Jl. Anggrek Nelly Murni, Jakarta 11480',
				'telp' => '021-5302222',
				'fax' => '021-5303380',
				'lambang' => 'golkar.png',
				'vote' => 14.6,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 6,
				'nama' => 'GERINDRA',
				'nama_lengkap' => 'Gerakan Indonesia Raya',
				'ketua' => 'Prof. Dr. Ir. Suhardi, M.Sc.',
				'sekjen' => 'H. Ahmad Muzani, S. Sos',
				'bendahara' => 'Thomas A. Muliatna Djiwandono, MA',
				'alamat' => 'Jalan Harsono RM No. 54 Ragunan, Pasar Minggu,Jakarta Selatan 12550',
				'telp' => '021-7892377, 021-7801396',
				'fax' => '021-7819712',
				'lambang' => 'gerindra.png',
				'vote' => 11.88,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 7,
				'nama' => 'PD',
				'nama_lengkap' => 'Partai Demokrat',
				'ketua' => 'Dr. Susilo Bambang Yudhoyono',
				'sekjen' => 'Edhie Baskoro Yudhoyono, M. Sc',
				'bendahara' => 'Handoyo Mulyadi',
				'alamat' => 'Jl. Kramat Raya No. 146, Jakarta Pusat, Jakarta 10450',
				'telp' => '021-31907999',
				'fax' => '021-31908999',
				'lambang' => 'pd.png',
				'vote' => 9.71,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 8,
				'nama' => 'PAN',
				'nama_lengkap' => 'Partai Amanat Nasional',
				'ketua' => 'M. Hatta Rajasa',
				'sekjen' => 'Taufik Kurniawan',
				'bendahara' => 'Jon Erizal',
				'alamat' => 'Jl. Warung Buncit Raya No. 17, Jakarta Selatan',
				'telp' => '021-7975588',
				'fax' => '021-7975632',
				'lambang' => 'pan.png',
				'vote' => 7.54,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 9,
				'nama' => 'PPP',
				'nama_lengkap' => 'Partai Persatuan Pembangunan',
				'ketua' => 'Drs. H. Suryadharma Ali, M.Si.',
				'sekjen' => 'Ir. H. M. Romahurmuziy, MT',
				'bendahara' => 'Drs. H. Mahmud Yunus',
				'alamat' => 'Jalan Diponegoro No. 60, Jakarta 10310',
				'telp' => '021-31926164, 021-31936338',
				'fax' => '021-3142558',
				'lambang' => 'ppp.png',
				'vote' => 7.02,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 10,
				'nama' => 'HANURA',
				'nama_lengkap' => 'Partai Hati Nurani Rakyat',
				'ketua' => 'H. Wiranto',
				'sekjen' => 'Dossy Iskandar Prasetyo',
				'bendahara' => 'Bambang Sudjagad',
				'alamat' => 'Jalan Imam Bonjol No. 4, Menteng, Jakarta Pusat, 100330',
				'telp' => '021-3100169',
				'fax' => '021-3100174',
				'lambang' => 'hanura.png',
				'vote' => 5.23,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 11,
				'nama' => 'PBB',
				'nama_lengkap' => 'Partai Bulan Bintang',
				'ketua' => 'None',
				'sekjen' => 'None',
				'bendahara' => 'None',
				'alamat' => 'None',
				'telp' => 'None',
				'fax' => 'None',
				'lambang' => '',
				'vote' => 1.38,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array('id' => 12,
				'nama' => 'PKPI',
				'nama_lengkap' => 'PKP Indonesia',
				'ketua' => 'None',
				'sekjen' => 'None',
				'bendahara' => 'None',
				'alamat' => 'None',
				'telp' => 'None',
				'fax' => 'None',
				'lambang' => '',
				'vote' => 0.98,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			)
		);

		# Masukkan kedalam tabel partai
		DB::table('partai')->insert($partai);
	}

}