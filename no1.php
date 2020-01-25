<?php

// Data diri
{
$data->name = "budi santoso";
$data->age = 21;
$data->address = "Jl. P. diponegoro 32 Kutoarjo";
$data->hobbies = "Membaca webnovel";
$data->is_married = false ;
$data->list_school = ["sd n bandung", "smp n 12 purworejo","smk n 6 purworejo","politeknik sawunggalih aji"];
$data->skills = ["beginer-html","beginer-css","beginer-javascript","beginer-php"];
$data->interest_in_coding = true;

}

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam anggota.json
file_put_contents('biodata.json', $jsonfile);

// pesan
if (file_put_contents("biodata.json", $jsonfile)){
    echo "File Biodata .JSON sukses dibuat...";
} else {
    echo "Oops! Terjadi error saat membuat file JSON...";
}