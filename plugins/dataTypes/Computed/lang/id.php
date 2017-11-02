<?php

$L = array();

$L["DATA_TYPE"] = array(
    "NAME" => "Komputasi",
    "DESC" => "Memungkinkan Anda mengakses secara terprogram nilai dan metadata yang dihasilkan dari bidang lain di baris dan menampilkan apa pun yang Anda inginkan."
);

$L["see_help_dialog"] = "&nbsp;Lihat laman bantuan.";
$L["help_para1"] = "The <b>Komputasi</b> Tipe Data memberi Anda akses ke metadata tentang bidang di baris untuk memungkinkan Anda menghasilkan keluaran apa pun yang Anda inginkan berdasarkan informasi itu. Jika Anda hanya perlu akses pada nilai string dari field lain <i>terbuat</i> (c.o. apa yang anda lihat dikeluaran), lihat <b>Komposit</b>. Tipe field ini memberikan anda lebih banyak akses pada setiap field.";
$L["help_para2"] = "<b>{\$ROW1}</b>, <b>{\$ROW2}</b> lain-lain. Mengandung semua yang tersedia pada baris. Perubahan konten berdasarkan Tipe Data baris dan apa yang telah dihasilkan, namun tingkat tinggi mengandung properti berikut:";
$L["help_prop1"] = "<b>{\$ROW1.OPTIONS}</b> - Apapun pilihan yang dimasukkan dalam antarmuka / panggilan API untuk baris";
$L["help_prop2"] = "<b>{\$ROW1.COL_METADATA}</b> - setiap metadata tambahan dikembalikan untuk Tipe Data";
$L["help_prop3"] = "<b>{\$ROW1.DATA}</b> - konten acak yang sebenarnya dihasilkan untuk field ini (selalu dalam sebuah \"properti untuk memperlihatkan\") ditambah informasi lainnya tentang konten yang dihasilkan.";
$L["help_prop4"] = "<b>{\$ROW1.DEBUG}</b> - serialisasi JSON yang praktis dari segala hal yang ada di barisan, sehingga Anda dapat melihat apa saja yang tersedia. Jalankan saja melalui formatter JSON.";
$L["example"] = "Contoh";
$L["example1"] = "<b>{\$ROW1.RANDOM_DATA.gender}</b> - akan mengluarkan gender (\"male\", \"female\" or \"unknown\") dari konten yang dibuat dari sebuah <b>Nama</b> field Tipe Data (harap ganti \"1\" dengan nomor baris yang benar!). Jika anda terbiasa menggunakan sebagai placeholder string <b>FemaleName</b> variabel ini akan kembali \"female\" setiap saat. Jika anda memasukkan \"Name\", tnilai yang dikembalikan akan tergantung pada string yang dihasilkan. Jika Anda memasukkan string placeholder dengan banyak format, itu akan kembali \"unknown\" jika berisi kedua genders, atau tidak ada gemder (misalnya nama keluarga tanpa nama depan).";
