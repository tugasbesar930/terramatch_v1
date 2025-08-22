<?php

// PADI
echo "PADI <br/><br/>";

//--------- 1. Temperatur -----------

$n1_temp = $_POST['n1_temp'];

if ($n1_temp >= 25 && $n1_temp <= 28){
	$s1_temp = "S1";
	$u1_temp = "Kondisi terbaik";
} else if($n1_temp >= 29 && $n1_temp <= 30){
	$s1_temp = "S2";
	$u1_temp = "Tidak dapat dilakukan";
} else if($n1_temp >= 23 && $n1_temp <= 24){
	$s1_temp = "S2";
	$u1_temp = "Tidak dapat dilakukan";
} else if($n1_temp >= 31 && $n1_temp <= 33){
	$s1_temp = "S3";
	$u1_temp = "Tidak dapat dilakukan";
} else if($n1_temp >= 21 && $n1_temp <= 22){
	$s1_temp = "S3";
	$u1_temp = "Tidak dapat dilakukan";
} else if($n1_temp >= 34 && $n1_temp <= 20){
	$s1_temp = "N";
	$u1_temp = "Tidak dapat dilakukan";
} else{
	$s1_temp = "F";
	$u1_temp = "Periksa kembali inputan Anda";
}

echo "1. Temperatur : $n1_temp (C)<br/>";
echo "Status : $s1_temp <br/>";
echo "Usaha Perbaikan : $u1_temp <br/>";

//--------- 2. Jumlah Bulan Basah -----------

$n2_bulanBasah = $_POST['n2_bulanBasah'];

if ($n2_bulanBasah >= 6 && $n2_bulanBasah <= 8){
	$s2_bulanBasah = "S1";
	$u2_bulanBasah = "Kondisi terbaik";
} else if($n2_bulanBasah >= 4 && $n2_bulanBasah <= 5){
	$s2_bulanBasah = "S2";
	$u2_bulanBasah = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah >= 2 && $n2_bulanBasah <= 3){
	$s2_bulanBasah = "S3";
	$u2_bulanBasah = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah >= 9 && $n2_bulanBasah <= 10){
	$s2_bulanBasah = "S3";
	$u2_bulanBasah = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah >= 11 && $n2_bulanBasah <= 1){
	$s2_bulanBasah = "N";
	$u2_bulanBasah = "Periksa kembali inputan Anda";
} else if($n2_bulanBasah == "-"){
	$s2_bulanBasah = "ND";
	$u2_bulanBasah = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s2_bulanBasah = "F";
	$u2_bulanBasah = "Periksa kembali inputan Anda";
}

echo "2. Ketersediaan Air : $n2_bulanBasah (bulan) <br/>";
echo "Status : $s2_bulanBasah <br/>";
echo "Usaha Perbaikan : $u2_bulanBasah <br/>";

//--------- 3. Drainase -----------

$n3_drainase = $_POST['n3_drainase'];

if ($n3_drainase == "terhambat"){
	$s3_drainase = "S1";
	$u3_drainase = "Kondisi terbaik";
} else if($n3_drainase == "agak_terhambat"){
	$s3_drainase = "S1";
	$u3_drainase = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase == "agak_baik"){
	$s3_drainase = "S2";
	$u3_drainase = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase == "sangat_terhambat"){
	$s3_drainase = "S3";
	$u3_drainase = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase == "baik"){
	$s3_drainase = "S3";
	$u3_drainase = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase == "agak_cepat"){
	$s3_drainase = "S3";
	$u3_drainase = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase == "cepat"){
	$s3_drainase = "N";
	$u3_drainase = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else{
	$s3_drainase = "F";
	$u3_drainase = "Periksa kembali inputan Anda";
}

echo "3. Drainase : $n3_drainase <br/>";
echo "Status : $s3_drainase <br/>";
echo "Usaha Perbaikan : $u3_drainase <br/>";

//--------- 4. Tekstur -----------

$n4_tekstur = $_POST['n4_tekstur'];

if ($n4_tekstur == "halus"){
	$s4_tekstur = "S1";
	$u4_tekstur = "Kondisi terbaik";
} else if($n4_tekstur == "agak_halus"){
	$s4_tekstur = "S1";
	$u4_tekstur = "Kondisi terbaik";
} else if($n4_tekstur == "sedang"){
	$s4_tekstur = "S2";
	$u4_tekstur = "Tidak dapat dilakukan";
} else if($n4_tekstur == "agak_kasar"){
	$s4_tekstur = "S3";
	$u4_tekstur = "Tidak dapat dilakukan";
} else if($n4_tekstur == "kasar"){
	$s4_tekstur = "N";
	$u4_tekstur = "Tidak dapat dilakukan";
} else{
	$s4_tekstur = "F";
	$u4_tekstur = "Periksa kembali inputan Anda";
}

echo "4. Tekstur : $n4_tekstur <br/>";
echo "Status : $s4_tekstur <br/>";
echo "Usaha Perbaikan : $u4_tekstur <br/>";

//--------- 5. Bahan Kasar (%) -----------

$n5_bahanKasar = $_POST['n5_bahanKasar'];

if ($n5_bahanKasar == "<3"){
	$s5_bahanKasar = "S1";
	$u5_bahanKasar = "Kondisi terbaik";
} else if($n5_bahanKasar == "3-14"){
	$s5_bahanKasar = "S2";
	$u5_bahanKasar = "Tidak dapat dilakukan";
} else if($n5_bahanKasar == "<15"){
	$s5_bahanKasar = "S2";
	$u5_bahanKasar = "Tidak dapat dilakukan";
} else if($n5_bahanKasar == "15-35"){
	$s5_bahanKasar = "S3";
	$u5_bahanKasar = "Tidak dapat dilakukan";
} else if($n5_bahanKasar == "15-34"){
	$s5_bahanKasar = "S3";
	$u5_bahanKasar = "Tidak dapat dilakukan";
} else if($n5_bahanKasar == "35-55"){
	$s5_bahanKasar = "N";
	$u5_bahanKasar = "Tidak dapat dilakukan";
} else if($n5_bahanKasar == ">55"){
	$s5_bahanKasar = "N";
	$u5_bahanKasar = "Tidak dapat dilakukan";
} else if ($n5_bahanKasar == ">35"){
	$s5_bahanKasar = "N";
	$u5_bahanKasar = "Tidak dapat dilakukan";
}

echo "5. Bahan Kasar : $n5_bahanKasar (%) <br/>";
echo "Status : $s5_bahanKasar <br/>";
echo "Usaha Perbaikan : $u5_bahanKasar <br/>";

//--------- 6. Kedalaman Tanah (cm) -----------

$n6_kedalamanTanah = $_POST['n6_kedalamanTanah'];

if ($n6_kedalamanTanah == ">50"){
	$s6_kedalamanTanah = "S1";
	$u6_kedalamanTanah = "Kondisi terbaik";
} else if($n6_kedalamanTanah == ">60"){
	$s6_kedalamanTanah = "S1";
	$u6_kedalamanTanah = "Kondisi terbaik";
} else if($n6_kedalamanTanah == "41-50"){
	$s6_kedalamanTanah = "S2";
	$u6_kedalamanTanah = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah == "41-60"){
	$s6_kedalamanTanah = "S2";
	$u6_kedalamanTanah = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah == "31-50"){
	$s6_kedalamanTanah = "S2";
	$u6_kedalamanTanah = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah == "25-40"){
	$s6_kedalamanTanah = "S3";
	$u6_kedalamanTanah = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah == "20-30"){
	$s6_kedalamanTanah = "S3";
	$u6_kedalamanTanah = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah == "<25"){
	$s6_kedalamanTanah = "N";
	$u6_kedalamanTanah = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah == "<20"){
	$s6_kedalamanTanah = "N";
	$u6_kedalamanTanah = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
}

echo "6. Kedalaman Tanah : $n6_kedalamanTanah (cm) <br/>";
echo "Status : $s6_kedalamanTanah <br/>";
echo "Usaha Perbaikan : $u6_kedalamanTanah <br/>";

//--------- 7. Ketebalan Gambut (cm) -----------

$n7_ketebalanGambut = $_POST['n7_ketebalanGambut'];

if ($n7_ketebalanGambut == "<50"){
	$s7_ketebalanGambut = "S1";
	$u7_ketebalanGambut = "Kondisi terbaik";
} else if($n7_ketebalanGambut == "50-99"){
	$s7_ketebalanGambut = "S2";
	$u7_ketebalanGambut = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else if($n7_ketebalanGambut == "100-150"){
	$s7_ketebalanGambut = "S3";
	$u7_ketebalanGambut = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else if($n7_ketebalanGambut == ">150"){
	$s7_ketebalanGambut = "N";
	$u7_ketebalanGambut = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else if($n7_ketebalanGambut == "Tidak_Ada_Data"){
	$s7_ketebalanGambut = "ND";
	$u7_ketebalanGambut = "Tidak ada data, butuh pengukuran lanjutan";
}

echo "7. Ketebalan Gambut : $n7_ketebalanGambut (cm) <br/>";
echo "Status : $s7_ketebalanGambut <br/>";
echo "Usaha Perbaikan : $u7_ketebalanGambut <br/>";

//--------- 8. Kematangan Gambut -----------

$n8_kematanganGambut = $_POST['n8_kematanganGambut'];

if ($n8_kematanganGambut == "saprik"){
	$s8_kematanganGambut = "S1";
	$u8_kematanganGambut = "Kondisi terbaik";
} else if($n8_kematanganGambut == "saprik-hemik"){
	$s8_kematanganGambut = "S2";
	$u8_kematanganGambut = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else if($n8_kematanganGambut == "hemik"){
	$s8_kematanganGambut = "S3";
	$u8_kematanganGambut = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else if($n8_kematanganGambut == "fibrik"){
	$s8_kematanganGambut = "N";
	$u8_kematanganGambut = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else if($n8_kematanganGambut == "-"){
	$s8_kematanganGambut = "ND";
	$u8_kematanganGambut = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s8_kematanganGambut = "F";
	$u8_kematanganGambut = "Periksa kembali inputan Anda";
}

echo "8. Kematangan Gambut : $n8_kematanganGambut <br/>";
echo "Status : $s8_kematanganGambut <br/>";
echo "Usaha Perbaikan : $u8_kematanganGambut <br/>";

//--------- 9. KTK liat (cmol) -----------

$n9_ktkLiat = $_POST['n9_ktkLiat'];

if ($n9_ktkLiat >= 17){
	$s9_ktkLiat = "S1";
	$u9_ktkLiat = "Kondisi terbaik";
} else if($n9_ktkLiat >= 5 && $n9_ktkLiat <= 16){
	$s9_ktkLiat = "S2";
	$u9_ktkLiat = "Pengapuran atau penambahan bahan organik";
} else if($n9_ktkLiat <= 4){
	$s9_ktkLiat = "S3";
	$u9_ktkLiat = "Pengapuran atau penambahan bahan organik";
} else if($n9_ktkLiat == "-"){
	$s9_ktkLiat = "ND";
	$u9_ktkLiat = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s9_ktkLiat = "F";
	$u9_ktkLiat = "Periksa kembali inputan Anda";
}

echo "9. Retensi Hara - KTK Liat : $n9_ktkLiat (cmol) <br/>";
echo "Status : $s9_ktkLiat <br/>";
echo "Usaha Perbaikan : $u9_ktkLiat <br/>";

//--------- 10. Kejenuhan Basa (%) -----------

$n10_kejenuhanBasa = $_POST['n10_kejenuhanBasa'];

if ($n10_kejenuhanBasa >= 51){
	$s10_kejenuhanBasa = "S1";
	$u10_kejenuhanBasa = "Kondisi terbaik";
} else if($n10_kejenuhanBasa >= 35 && $n10_kejenuhanBasa <= 50){
	$s10_kejenuhanBasa = "S2";
	$u10_kejenuhanBasa = "Pengapuran atau penambahan bahan organik";
} else if($n10_kejenuhanBasa <= 34){
	$s10_kejenuhanBasa = "S3";
	$u10_kejenuhanBasa = "Pengapuran atau penambahan bahan organik";
} else if($n10_kejenuhanBasa == "-"){
	$s10_kejenuhanBasa = "ND";
	$u10_kejenuhanBasa = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s10_kejenuhanBasa = "F";
	$u10_kejenuhanBasa = "Periksa kembali inputan Anda";
}

echo "10. Retensi Hara - Kejenuhan Basa : $n10_kejenuhanBasa (%) <br/>";
echo "Status : $s10_kejenuhanBasa <br/>";
echo "Usaha Perbaikan : $u10_kejenuhanBasa <br/>";

//--------- 11. phH2o -----------

$n11_phH2o = $_POST['n11_phH2o'];

if ($n11_phH2o >= 5.6 && $n11_phH2o <= 6.9){
	$s11_phH2o = "S1";
	$u11_phH2o = "Kondisi terbaik";
} else if($n11_phH2o >= 4.5 && $n11_phH2o <= 5.5){
	$s11_phH2o = "S2";
	$u11_phH2o = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o >= 7 && $n11_phH2o <= 8){
	$s11_phH2o = "S2";
	$u11_phH2o = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o < 4.5 && $n11_phH2o > 8){
	$s11_phH2o = "S3";
	$u11_phH2o = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o == "-"){
	$s11_phH2o = "ND";
	$u11_phH2o = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s11_phH2o = "F";
	$u11_phH2o = "Periksa kembali inputan Anda";
}

echo "11. Retensi Hara - PH H2O : $n11_phH2o <br/>";
echo "Status : $s11_phH2o <br/>";
echo "Usaha Perbaikan : $u11_phH2o <br/>";

//--------- 12. C-Organik (%) -----------

$n12_cOrganik = $_POST['n12_cOrganik'];

if ($n12_cOrganik > 1.2){
	$s12_cOrganik = "S1";
	$u12_cOrganik = "Kondisi terbaik";
} else if($n12_cOrganik >= 0.8 && $n12_cOrganik <= 1.2){
	$s12_cOrganik = "S2";
	$u12_cOrganik = "Pengapuran atau penambahan bahan organik";
} else if($n12_cOrganik < 0.8){
	$s12_cOrganik = "S3";
	$u12_cOrganik = "Pengapuran atau penambahan bahan organik";
} else if($n12_cOrganik == "-"){
	$s12_cOrganik = "ND";
	$u12_cOrganik = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s12_cOrganik = "F";
	$u12_cOrganik = "Periksa kembali inputan Anda";
}

echo "12. Retensi Hara - C-Organik : $n12_cOrganik (%) <br/>";
echo "Status : $s12_cOrganik <br/>";
echo "Usaha Perbaikan : $u12_cOrganik <br/>";

//--------- 13. Hara Tersedia - Ntotal (na) -----------

$n13_nTotal = $_POST['n13_nTotal'];

if ($n13_nTotal == "sedang"){
	$s13_nTotal = "S1";
	$u13_nTotal = "Kondisi terbaik";
} else if($n13_nTotal == "rendah"){
	$s13_nTotal = "S2";
	$u13_nTotal = "Pemupukan N";
} else if($n13_nTotal == "sangat_rendah"){
	$s13_nTotal = "S3";
	$u13_nTotal = "Pemupukan N";
} else if($n13_nTotal == "-"){
	$s13_nTotal = "ND";
	$u13_nTotal = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s13_nTotal = "F";
	$u13_nTotal = "Periksa kembali inputan Anda";
}

echo "13. Hara N Total : $n13_nTotal <br/>";
echo "Status : $s13_nTotal <br/>";
echo "Usaha Perbaikan : $u13_nTotal <br/>";

//--------- 14. Hara Tersedia - PTersedia (na) -----------

$n14_pTersedia = $_POST['n14_pTersedia'];

if ($n14_pTersedia == "tinggi"){
	$s14_pTersedia = "S1";
	$u14_pTersedia = "Kondisi terbaik";
} else if($n14_pTersedia == "sedang"){
	$s14_pTersedia = "S2";
	$u14_pTersedia = "Pemupukan P";
} else if($n14_pTersedia == "rendah"){
	$s14_pTersedia = "S3";
	$u14_pTersedia = "Pemupukan P";
} else if($n14_pTersedia == "sangat_rendah"){
	$s14_pTersedia = "S3";
	$u14_pTersedia = "Pemupukan P";
} else if($n14_pTersedia == "-"){
	$s14_pTersedia = "ND";
	$u14_pTersedia = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s14_pTersedia = "F";
	$u14_pTersedia = "Periksa kembali inputan Anda";
}

echo "14. Hara P Tersedia : $n14_pTersedia <br/>";
echo "Status : $s14_pTersedia <br/>";
echo "Usaha Perbaikan : $u14_pTersedia <br/>";

//--------- 15. Hara Tersedia - KTersedia (na) -----------

$n15_kTersedia = $_POST['n15_kTersedia'];

if ($n15_kTersedia == "sedang"){
	$s15_kTersedia = "S1";
	$u15_kTersedia = "Kondisi terbaik";
} else if($n15_kTersedia == "rendah"){
	$s15_kTersedia = "S2";
	$u15_kTersedia = "Pemupukan K";
} else if($n15_kTersedia == "sangat_rendah"){
	$s15_kTersedia = "S3";
	$u15_kTersedia = "Pemupukan K";
} else if($n15_kTersedia == "-"){
	$s15_kTersedia = "ND";
	$u15_kTersedia = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s15_kTersedia = "F";
	$u15_kTersedia = "Periksa kembali inputan Anda";
}

echo "15. Hara K Tersedia  : $n15_kTersedia <br/>";
echo "Status : $s15_kTersedia <br/>";
echo "Usaha Perbaikan : $u15_kTersedia <br/>";

//--------- 16. Salinitas (dS/m) -----------

$n16_salinitas = $_POST['n16_salinitas'];

if ($n16_salinitas <= 1){
	$s16_salinitas = "S1";
	$u16_salinitas = "Kondisi terbaik";
} else if($n16_salinitas >= 2 && $n16_salinitas <= 3){
	$s16_salinitas = "S2";
	$u16_salinitas = "Reklamasi";
} else if($n16_salinitas >= 4 && $n16_salinitas <= 6){
	$s16_salinitas = "S3";
	$u16_salinitas = "Reklamasi";
} else if($n16_salinitas >= 7){
	$s16_salinitas = "N";
	$u16_salinitas = "Reklamasi";
} else if($n16_salinitas == "-"){
	$s16_salinitas = "ND";
	$u16_salinitas = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s16_salinitas = "F";
	$u16_salinitas = "Periksa kembali inputan Anda";
}

echo "16. Toksisitas - Salinitas : $n16_salinitas (dS/m) <br/>";
echo "Status : $s16_salinitas <br/>";
echo "Usaha Perbaikan : $u16_salinitas <br/>";

//--------- 17. Alkalinitas/ESP (%) -----------

$n17_alkalinitas = $_POST['n17_alkalinitas'];

if ($n17_alkalinitas <= 19){
	$s17_alkalinitas = "S1";
	$u17_alkalinitas = "Kondisi terbaik";
} else if($n17_alkalinitas >= 20 && $n17_alkalinitas <= 29){
	$s17_alkalinitas = "S2";
	$u17_alkalinitas = "Reklamasi";
} else if($n17_alkalinitas >= 30 && $n17_alkalinitas <= 40){
	$s17_alkalinitas = "S3";
	$u17_alkalinitas = "Reklamasi";
} else if($n17_alkalinitas >= 41){
	$s17_alkalinitas = "N";
	$u17_alkalinitas = "Reklamasi";
} else if($n17_alkalinitas == "-"){
	$s17_alkalinitas = "ND";
	$u17_alkalinitas = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s17_alkalinitas = "F";
	$u17_alkalinitas = "Periksa kembali inputan Anda";
}

echo "17. Sodisitas - Alkalinitas/ESP : $n17_alkalinitas (%) <br/>";
echo "Status : $s17_alkalinitas <br/>";
echo "Usaha Perbaikan : $u17_alkalinitas <br/>";

//--------- 18. Bahaya Sulfidik (xs) - Kedalaman Sulfidik (cm) -----------

$n18_sulfidik = $_POST['n18_sulfidik'];

if ($n18_sulfidik >= 101){
	$s18_sulfidik = "S1";
	$u18_sulfidik = "Kondisi terbaik";
} else if($n18_sulfidik >= 76 && $n18_sulfidik <= 100){
	$s18_sulfidik = "S2";
	$u18_sulfidik = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else if($n18_sulfidik >= 40 && $n18_sulfidik <= 75){
	$s18_sulfidik = "S3";
	$u18_sulfidik = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else if($n18_sulfidik <= 41){
	$s18_sulfidik = "N";
	$u18_sulfidik = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else{
	$s18_sulfidik = "F";
	$u18_sulfidik = "Periksa kembali inputan Anda";
}

echo "18. Bahaya Sulfidik (xs) - Kedalaman Sulfidik : $n18_sulfidik (cm) <br/>";
echo "Status : $s18_sulfidik <br/>";
echo "Usaha Perbaikan : $u18_sulfidik <br/>";

//--------- 19. Bahaya Erosi - Lereng (%) -----------

$n19_lereng = $_POST['n19_lereng'];

if ($n19_lereng == "<3"){
	$s19_lereng = "S1";
	$u19_lereng = "Kondisi terbaik";
} else if($n19_lereng == "3-4"){
	$s19_lereng = "S2";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == "3-7"){
	$s19_lereng = "S3";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == "5-8"){
	$s19_lereng = "S3";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == "<8"){
	$s19_lereng = "S3";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == "8-14"){
	$s19_lereng = "N";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == "8-15"){
	$s19_lereng = "N";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == "15-25"){
	$s19_lereng = "N";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == ">15"){
	$s19_lereng = "N";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == ">25"){
	$s19_lereng = "N";
	$u19_lereng = "Pengurangan kemiringan";
} else if($n19_lereng == ">8"){
	$s19_lereng = "N";
	$u19_lereng = "Pengurangan kemiringan";
}

echo "19. Lereng : $n19_lereng (%) <br/>";
echo "Status : $s19_lereng <br/>";
echo "Usaha Perbaikan : $u19_lereng <br/>";

//--------- 20. Bahaya Erosi -----------

$n20_bahayaErosi = $_POST['n20_bahayaErosi'];

if ($n20_bahayaErosi == "tidak_ada"){
	$s20_bahayaErosi = "S1";
	$u20_bahayaErosi = "Kondisi terbaik";
} else if($n20_bahayaErosi == "sangat_ringan"){
	$s20_bahayaErosi = "S2";
	$u20_bahayaErosi = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi == "ringan"){
	$s20_bahayaErosi = "S3";
	$u20_bahayaErosi = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi == "sedang"){
	$s20_bahayaErosi = "N";
	$u20_bahayaErosi = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi == "berat"){
	$s20_bahayaErosi = "N";
	$u20_bahayaErosi = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi == "sangat_berat"){
	$s20_bahayaErosi = "N";
	$u20_bahayaErosi = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else{
	$s20_bahayaErosi = "F";
	$u20_bahayaErosi = "Periksa kembali inputan Anda";
}

echo "20. Bahaya Erosi : $n20_bahayaErosi <br/>";
echo "Status : $s20_bahayaErosi <br/>";
echo "Usaha Perbaikan : $u20_bahayaErosi <br/>";

//--------- 21. Bahaya Banjir - tinggi (cm) -----------

$n21_tinggi = $_POST['n21_tinggi'];

if ($n21_tinggi == "25"){
	$s21_tinggi = "S1";
	$u21_tinggi = "Kondisi terbaik";
} else if ($n21_tinggi == "<=25"){
	$s21_tinggi = "S1";
	$u21_tinggi = "Kondisi terbaik";
} else if($n21_tinggi == "26-49"){
	$s21_tinggi = "S2";
	$u21_tinggi = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
} else if($n21_tinggi == ">25"){
	$s21_tinggi = "S2";
	$u21_tinggi = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
} else if($n21_tinggi == "50-75"){
	$s21_tinggi = "S3";
	$u21_tinggi = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
} else if($n21_tinggi == ">75"){
	$s21_tinggi = "N";
	$u21_tinggi = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
}

echo "21. Bahaya Banjir - tinggi : $n21_tinggi (cm) <br/>";
echo "Status : $s21_tinggi <br/>";
echo "Usaha Perbaikan : $u21_tinggi <br/>";

//--------- 22. Bahaya Banjir - lama (hari) -----------

$n22_lama = $_POST['n22_lama'];

if ($n22_lama == "<1"){
	$s22_lama = "S1";
	$u22_lama = "Kondisi terbaik";
} else if($n22_lama == "1-6"){
	$s22_lama = "S2";
	$u22_lama = "Pembuatan jalur/drainase keluar air";
} else if($n22_lama == "7-14"){
	$s22_lama = "S3";
	$u22_lama = "Pembuatan jalur/drainase keluar air";
} else if($n22_lama == "<7"){
	$s22_lama = "S2";
	$u22_lama = "Pembuatan jalur/drainase keluar air";
} else if($n22_lama == ">7"){
	$s22_lama = "S3";
	$u22_lama = "Pembuatan jalur/drainase keluar air";
} else if($n22_lama == ">14"){
	$s22_lama = "N";
	$u22_lama = "Pembuatan jalur/drainase keluar air";
}

echo "22. Bahaya Banjir - lama : $n22_lama (hari) <br/>";
echo "Status : $s22_lama <br/>";
echo "Usaha Perbaikan : $u22_lama <br/>";

//--------- 23. Penyiapan Lahan - Batuan di Permukaan (%) -----------

$n23_batuanPermukaan = $_POST['n23_batuanPermukaan'];

if ($n23_batuanPermukaan == "<5"){
	$s23_batuanPermukaan = "S1";
	$u23_batuanPermukaan = "Kondisi terbaik";
} else if($n23_batuanPermukaan == "5-14"){
	$s23_batuanPermukaan = "S2";
	$u23_batuanPermukaan = "Tidak dapat dilakukan";
} else if($n23_batuanPermukaan == "15-40"){
	$s23_batuanPermukaan = "S3";
	$u23_batuanPermukaan = "Tidak dapat dilakukan";
} else if($n23_batuanPermukaan == ">40"){
	$s23_batuanPermukaan = "N";
	$u23_batuanPermukaan = "Tidak dapat dilakukan";
}

echo "23. Penyiapan Lahan - Batuan di Permukaan : $n23_batuanPermukaan (%) <br/>";
echo "Status : $s23_batuanPermukaan <br/>";
echo "Usaha Perbaikan : $u23_batuanPermukaan <br/>";

//--------- 24. Penyiapan Lahan - Singkapan Batuan (%) -----------

$n24_singkapanBatuan = $_POST['n24_singkapanBatuan'];

if ($n24_singkapanBatuan == "<5"){
	$s24_singkapanBatuan = "S1";
	$u24_singkapanBatuan = "Kondisi terbaik";
} else if($n24_singkapanBatuan == "5-14"){
	$s24_singkapanBatuan = "S2";
	$u24_singkapanBatuan = "Tidak dapat dilakukan";
} else if($n24_singkapanBatuan == "15-25"){
	$s24_singkapanBatuan = "S3";
	$u24_singkapanBatuan = "Tidak dapat dilakukan";
} else if($n24_singkapanBatuan == ">25"){
	$s24_singkapanBatuan = "N";
	$u24_singkapanBatuan = "Tidak dapat dilakukan";
}

echo "24. Penyiapan Lahan - Singkapan Batuan : $n24_singkapanBatuan (%) <br/>";
echo "Status : $s24_singkapanBatuan <br/>";
echo "Usaha Perbaikan : $u24_singkapanBatuan <br/>";

?>
