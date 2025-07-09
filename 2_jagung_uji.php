<?php

// JAGUNG
echo "<br/><br/> JAGUNG <br/><br/>";

//--------- 1. Temperatur -----------

$n1_temp_jagung = $_POST['n1_temp'];

if ($n1_temp_jagung >= 21 && $n1_temp_jagung <= 26){
	$s1_temp_jagung = "S1";
	$u1_temp_jagung = "Kondisi terbaik";
} else if($n1_temp_jagung >= 27 && $n1_temp_jagung <= 29){
	$s1_temp_jagung = "S2";
	$u1_temp_jagung = "Tidak dapat dilakukan";
} else if($n1_temp_jagung > 19 && $n1_temp_jagung < 21){
	$s1_temp_jagung = "S2";
	$u1_temp_jagung = "Tidak dapat dilakukan";
} else if($n1_temp_jagung >= 30 && $n1_temp_jagung <= 33){
	$s1_temp_jagung = "S3";
	$u1_temp_jagung = "Tidak dapat dilakukan";
} else if($n1_temp_jagung >= 18 && $n1_temp_jagung <= 19){
	$s1_temp_jagung = "S3";
	$u1_temp_jagung = "Tidak dapat dilakukan";
} else if($n1_temp_jagung >= 34 && $n1_temp_jagung <= 18){
	$s1_temp_jagung = "N";
	$u1_temp_jagung = "Tidak dapat dilakukan";
} else{
	$s1_temp_jagung = "F";
	$u1_temp_jagung = "Periksa kembali inputan Anda";
}

echo "1. Temperatur : $n1_temp_jagung (C)<br/>";
echo "Status : $s1_temp_jagung <br/>";
echo "Usaha Perbaikan : $u1_temp_jagung <br/>";

//--------- 2. Jumlah Bulan Basah -----------

$n2_bulanBasah_jagung = $_POST['n2_bulanBasah'];

if ($n2_bulanBasah_jagung >= 3 && $n2_bulanBasah_jagung <= 5){
	$s2_bulanBasah_jagung = "S1";
	$u2_bulanBasah_jagung = "Kondisi terbaik";
} else if($n2_bulanBasah_jagung < 3){
	$s2_bulanBasah_jagung = "S2";
	$u2_bulanBasah_jagung = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah_jagung >= 6 && $n2_bulanBasah_jagung <= 7){
	$s2_bulanBasah_jagung = "S2";
	$u2_bulanBasah_jagung = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah_jagung > 7 && $n2_bulanBasah_jagung < 9){
	$s2_bulanBasah_jagung = "S3";
	$u2_bulanBasah_jagung = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah_jagung > 8){
	$s2_bulanBasah_jagung = "N";
	$u2_bulanBasah_jagung = "Periksa kembali inputan Anda";
} else{
	$s2_bulanBasah_jagung = "F";
	$u2_bulanBasah = "Periksa kembali inputan Anda";
}

echo "2. Ketersediaan Air : $n2_bulanBasah_jagung (bulan) <br/>";
echo "Status : $s2_bulanBasah_jagung <br/>";
echo "Usaha Perbaikan : $u2_bulanBasah_jagung <br/>";

//--------- 3. Drainase -----------

$n3_drainase_jagung = $_POST['n3_drainase'];

if ($n3_drainase_jagung == "baik"){
	$s3_drainase_jagung = "S1";
	$u3_drainase_jagung = "Kondisi terbaik";
} else if($n3_drainase_jagung == "agak_baik"){
	$s3_drainase_jagung = "S1";
	$u3_drainase_jagung = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_jagung == "agak_cepat"){
	$s3_drainase_jagung = "S2";
	$u3_drainase_jagung = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_jagung == "agak_terhambat"){
	$s3_drainase_jagung = "S2";
	$u3_drainase_jagung = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_jagung == "terhambat"){
	$s3_drainase_jagung = "S3";
	$u3_drainase_jagung = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_jagung == "sangat_terhambat"){
	$s3_drainase_jagung = "N";
	$u3_drainase_jagung = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_jagung == "cepat"){
	$s3_drainase_jagung = "N";
	$u3_drainase_jagung = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else{
	$s3_drainase_jagung = "F";
	$u3_drainase_jagung = "Periksa kembali inputan Anda";
}

echo "3. Drainase : $n3_drainase_jagung <br/>";
echo "Status : $s3_drainase_jagung <br/>";
echo "Usaha Perbaikan : $u3_drainase_jagung <br/>";

//--------- 4. Tekstur -----------

$n4_tekstur_jagung = $_POST['n4_tekstur'];

if ($n4_tekstur_jagung == "halus"){
	$s4_tekstur_jagung = "S1";
	$u4_tekstur_jagung = "Kondisi terbaik";
} else if($n4_tekstur_jagung == "agak_halus"){
	$s4_tekstur_jagung = "S1";
	$u4_tekstur_jagung = "Kondisi terbaik";
} else if($n4_tekstur_jagung == "sedang"){
	$s4_tekstur_jagung = "S1";
	$u4_tekstur_jagung = "Tidak dapat dilakukan";
} else if($n4_tekstur_jagung == "agak_kasar"){
	$s4_tekstur_jagung = "S3";
	$u4_tekstur_jagung = "Tidak dapat dilakukan";
} else if($n4_tekstur_jagung == "kasar"){
	$s4_tekstur_jagung = "N";
	$u4_tekstur_jagung = "Tidak dapat dilakukan";
} else{
	$s4_tekstur_jagung = "F";
	$u4_tekstur_jagung = "Periksa kembali inputan Anda";
}

echo "4. Tekstur : $n4_tekstur_jagung <br/>";
echo "Status : $s4_tekstur_jagung <br/>";
echo "Usaha Perbaikan : $u4_tekstur_jagung <br/>";

//--------- 5. Bahan Kasar (%) -----------

$n5_bahanKasar_jagung = $_POST['n5_bahanKasar'];

if ($n5_bahanKasar_jagung < 15){
	$s5_bahanKasar_jagung = "S1";
	$u5_bahanKasar_jagung = "Kondisi terbaik";
} else if($n5_bahanKasar_jagung >= 15 && $n5_bahanKasar_jagung <= 34){
	$s5_bahanKasar_jagung = "S2";
	$u5_bahanKasar_jagung = "Tidak dapat dilakukan";
} else if($n5_bahanKasar_jagung >= 35 && $n5_bahanKasar_jagung <= 55){
	$s5_bahanKasar_jagung = "S3";
	$u5_bahanKasar_jagung = "Tidak dapat dilakukan";
} else if($n5_bahanKasar_jagung >= 56){
	$s5_bahanKasar_jagung = "N";
	$u5_bahanKasar_jagung = "Tidak dapat dilakukan";
} else{
	$s5_bahanKasar_jagung = "F";
	$u5_bahanKasar_jagung = "Periksa kembali inputan Anda";
}

echo "5. Bahan Kasar : $n5_bahanKasar_jagung (%) <br/>";
echo "Status : $s5_bahanKasar_jagung <br/>";
echo "Usaha Perbaikan : $u5_bahanKasar_jagung <br/>";

//--------- 6. Kedalaman Tanah (cm) -----------

$n6_kedalamanTanah_jagung = $_POST['n6_kedalamanTanah'];

if ($n6_kedalamanTanah_jagung > 60){
	$s6_kedalamanTanah_jagung = "S1";
	$u6_kedalamanTanah_jagung = "Kondisi terbaik";
} else if($n6_kedalamanTanah_jagung >= 41 && $n6_kedalamanTanah_jagung <= 60){
	$s6_kedalamanTanah_jagung = "S2";
	$u6_kedalamanTanah_jagung = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah_jagung >= 25 && $n6_kedalamanTanah_jagung <= 40){
	$s6_kedalamanTanah_jagung = "S3";
	$u6_kedalamanTanah_jagung = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah_jagung <= 24){
	$s6_kedalamanTanah_jagung = "N";
	$u6_kedalamanTanah_jagung = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else{
	$s6_kedalamanTanah_jagung = "F";
	$u6_kedalamanTanah_jagung = "Periksa kembali inputan Anda";
}

echo "6. Kedalaman Tanah : $n6_kedalamanTanah_jagung (cm) <br/>";
echo "Status : $s6_kedalamanTanah_jagung <br/>";
echo "Usaha Perbaikan : $u6_kedalamanTanah_jagung <br/>";

//--------- 7. Ketebalan Gambut (cm) -----------

$n7_ketebalanGambut_jagung = $_POST['n7_ketebalanGambut'];

if ($n7_ketebalanGambut_jagung <= 49){
	$s7_ketebalanGambut_jagung = "S1";
	$u7_ketebalanGambut_jagung = "Kondisi terbaik";
} else if($n7_ketebalanGambut_jagung >= 50 && $n7_ketebalanGambut_jagung <= 99){
	$s7_ketebalanGambut_jagung = "S2";
	$u7_ketebalanGambut_jagung = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else if($n7_ketebalanGambut_jagung >= 100 && $n7_ketebalanGambut_jagung <= 150){
	$s7_ketebalanGambut_jagung = "S3";
	$u7_ketebalanGambut_jagung = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else if($n7_ketebalanGambut_jagung >= 151){
	$s7_ketebalanGambut_jagung = "N";
	$u7_ketebalanGambut_jagung = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else{
	$s7_ketebalanGambut_jagung = "F";
	$u7_ketebalanGambut_jagung = "Periksa kembali inputan Anda";
}

echo "7. Ketebalan Gambut : $n7_ketebalanGambut_jagung (cm) <br/>";
echo "Status : $s7_ketebalanGambut_jagung <br/>";
echo "Usaha Perbaikan : $u7_ketebalanGambut_jagung <br/>";

//--------- 8. Kematangan Gambut -----------

$n8_kematanganGambut_jagung = $_POST['n8_kematanganGambut'];

if ($n8_kematanganGambut_jagung == "saprik"){
	$s8_kematanganGambut_jagung = "S1";
	$u8_kematanganGambut_jagung = "Kondisi terbaik";
} else if($n8_kematanganGambut_jagung == "saprik-hemik"){
	$s8_kematanganGambut_jagung = "S2";
	$u8_kematanganGambut_jagung = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else if($n8_kematanganGambut_jagung == "hemik"){
	$s8_kematanganGambut_jagung = "S3";
	$u8_kematanganGambut_jagung = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else if($n8_kematanganGambut_jagung == "fibrik"){
	$s8_kematanganGambut_jagung = "N";
	$u8_kematanganGambut_jagung = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else{
	$s8_kematanganGambut_jagung = "F";
	$u8_kematanganGambut_jagung= "Periksa kembali inputan Anda";
}

echo "8. Kematangan Gambut : $n8_kematanganGambut_jagung <br/>";
echo "Status : $s8_kematanganGambut_jagung <br/>";
echo "Usaha Perbaikan : $u8_kematanganGambut_jagung <br/>";

//--------- 9. KTK liat (cmol) -----------

$n9_ktkLiat_jagung = $_POST['n9_ktkLiat'];

if ($n9_ktkLiat_jagung >= 17){
	$s9_ktkLiat_jagung = "S1";
	$u9_ktkLiat_jagung = "Kondisi terbaik";
} else if($n9_ktkLiat_jagung >= 5 && $n9_ktkLiat_jagung <= 16){
	$s9_ktkLiat_jagung = "S2";
	$u9_ktkLiat_jagung = "Pengapuran atau penambahan bahan organik";
} else if($n9_ktkLiat_jagung <= 4){
	$s9_ktkLiat_jagung = "S3";
	$u9_ktkLiat_jagung = "Pengapuran atau penambahan bahan organik";
} else{
	$s9_ktkLiat_jagung = "F";
	$u9_ktkLiat_jagung = "Periksa kembali inputan Anda";
}

echo "9. Retensi Hara - KTK Liat : $n9_ktkLiat_jagung (cmol) <br/>";
echo "Status : $s9_ktkLiat_jagung <br/>";
echo "Usaha Perbaikan : $u9_ktkLiat_jagung <br/>";

//--------- 10. Kejenuhan Basa (%) -----------

$n10_kejenuhanBasa_jagung = $_POST['n10_kejenuhanBasa'];

if ($n10_kejenuhanBasa_jagung >= 51){
	$s10_kejenuhanBasa_jagung = "S1";
	$u10_kejenuhanBasa_jagung = "Kondisi terbaik";
} else if($n10_kejenuhanBasa_jagung >= 35 && $n10_kejenuhanBasa_jagung <= 50){
	$s10_kejenuhanBasa_jagung = "S2";
	$u10_kejenuhanBasa_jagung = "Pengapuran atau penambahan bahan organik";
} else if($n10_kejenuhanBasa_jagung <= 34){
	$s10_kejenuhanBasa_jagung = "S3";
	$u10_kejenuhanBasa_jagung = "Pengapuran atau penambahan bahan organik";
} else{
	$s10_kejenuhanBasa_jagung = "F";
	$u10_kejenuhanBasa_jagung = "Periksa kembali inputan Anda";
}

echo "10. Retensi Hara - Kejenuhan Basa : $n10_kejenuhanBasa_jagung (%) <br/>";
echo "Status : $s10_kejenuhanBasa_jagung <br/>";
echo "Usaha Perbaikan : $u10_kejenuhanBasa_jagung <br/>";

//--------- 11. phH2o -----------

$n11_phH2o_jagung = $_POST['n11_phH2o'];

if ($n11_phH2o_jagung >= 5.6 && $n11_phH2o_jagung <= 6.9){
	$s11_phH2o_jagung = "S1";
	$u11_phH2o_jagung = "Kondisi terbaik";
} else if($n11_phH2o_jagung >= 5.1 && $n11_phH2o_jagung <= 5.5){
	$s11_phH2o_jagung = "S2";
	$u11_phH2o_jagung = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o_jagung >= 7 && $n11_phH2o_jagung <= 8){
	$s11_phH2o_jagung = "S2";
	$u11_phH2o_jagung = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o_jagung < 5 && $n11_phH2o_jagung > 8){
	$s11_phH2o_jagung = "S3";
	$u11_phH2o_jagung = "Pengapuran atau penambahan bahan organik";
} else{
	$s11_phH2o_jagung = "F";
	$u11_phH2o_jagung = "Periksa kembali inputan Anda";
}

echo "11. Retensi Hara - PH H2O : $n11_phH2o_jagung <br/>";
echo "Status : $s11_phH2o_jagung <br/>";
echo "Usaha Perbaikan : $u11_phH2o_jagung <br/>";

//--------- 12. C-Organik (%) -----------

$n12_cOrganik_jagung = $_POST['n12_cOrganik'];

if ($n12_cOrganik_jagung > 1.2){
	$s12_cOrganik_jagung = "S1";
	$u12_cOrganik_jagung = "Kondisi terbaik";
} else if($n12_cOrganik_jagung >= 0.8 && $n12_cOrganik_jagung <= 1.2){
	$s12_cOrganik_jagung = "S2";
	$u12_cOrganik_jagung = "Pengapuran atau penambahan bahan organik";
} else if($n12_cOrganik_jagung < 0.8){
	$s12_cOrganik_jagung = "S3";
	$u12_cOrganik_jagung = "Pengapuran atau penambahan bahan organik";
} else{
	$s12_cOrganik_jagung = "F";
	$u12_cOrganik_jagung = "Periksa kembali inputan Anda";
}

echo "12. Retensi Hara - C-Organik : $n12_cOrganik_jagung (%) <br/>";
echo "Status : $s12_cOrganik_jagung <br/>";
echo "Usaha Perbaikan : $u12_cOrganik_jagung <br/>";

//--------- 13. Hara Tersedia - Ntotal (na) -----------

$n13_nTotal_jagung = $_POST['n13_nTotal'];

if ($n13_nTotal_jagung == "sedang"){
	$s13_nTotal_jagung = "S1";
	$u13_nTotal_jagung = "Kondisi terbaik";
} else if($n13_nTotal_jagung == "rendah"){
	$s13_nTotal_jagung = "S2";
	$u13_nTotal_jagung = "Pemupukan N";
} else if($n13_nTotal_jagung == "sangat_rendah"){
	$s13_nTotal_jagung = "S3";
	$u13_nTotal_jagung = "Pemupukan N";
} else{
	$s13_nTotal_jagung = "F";
	$u13_nTotal_jagung = "Periksa kembali inputan Anda";
}

echo "13. Hara N Total : $n13_nTotal_jagung <br/>";
echo "Status : $s13_nTotal_jagung <br/>";
echo "Usaha Perbaikan : $u13_nTotal_jagung <br/>";

//--------- 14. Hara Tersedia - PTersedia (na) -----------

$n14_pTersedia_jagung = $_POST['n14_pTersedia'];

if ($n14_pTersedia_jagung == "tinggi"){
	$s14_pTersedia_jagung = "S1";
	$u14_pTersedia_jagung = "Kondisi terbaik";
} else if($n14_pTersedia_jagung == "sedang"){
	$s14_pTersedia_jagung = "S1";
	$u14_pTersedia_jagung = "Pemupukan P";
} else if($n14_pTersedia_jagung == "rendah"){
	$s14_pTersedia_jagung = "S2";
	$u14_pTersedia_jagung = "Pemupukan P";
} else if($n14_pTersedia_jagung == "sangat_rendah"){
	$s14_pTersedia_jagung = "S3";
	$u14_pTersedia_jagung = "Pemupukan P";
} else{
	$s14_pTersedia_jagung = "F";
	$u14_pTersedia_jagung = "Periksa kembali inputan Anda";
}

echo "14. Hara P Tersedia : $n14_pTersedia_jagung <br/>";
echo "Status : $s14_pTersedia_jagung <br/>";
echo "Usaha Perbaikan : $u14_pTersedia_jagung <br/>";

//--------- 15. Hara Tersedia - KTersedia (na) -----------

$n15_kTersedia_jagung = $_POST['n15_kTersedia'];

if ($n15_kTersedia_jagung == "sedang"){
	$s15_kTersedia_jagung = "S1";
	$u15_kTersedia_jagung = "Kondisi terbaik";
} else if($n15_kTersedia_jagung == "rendah"){
	$s15_kTersedia_jagung = "S2";
	$u15_kTersedia_jagung = "Pemupukan K";
} else if($n15_kTersedia_jagung == "sangat_rendah"){
	$s15_kTersedia_jagung = "S3";
	$u15_kTersedia_jagung = "Pemupukan K";
} else{
	$s15_kTersedia_jagung = "F";
	$u15_kTersedia_jagung = "Periksa kembali inputan Anda";
}

echo "15. Hara K Tersedia  : $n15_kTersedia_jagung <br/>";
echo "Status : $s15_kTersedia_jagung <br/>";
echo "Usaha Perbaikan : $u15_kTersedia_jagung <br/>";

//--------- 16. Salinitas (dS/m) -----------

$n16_salinitas_jagung = $_POST['n16_salinitas'];

if ($n16_salinitas_jagung < 4){
	$s16_salinitas_jagung = "S1";
	$u16_salinitas_jagung = "Kondisi terbaik";
} else if($n16_salinitas_jagung >= 4 && $n16_salinitas_jagung <= 6){
	$s16_salinitas_jagung = "S2";
	$u16_salinitas_jagung = "Reklamasi";
} else if($n16_salinitas_jagung >= 7 && $n16_salinitas_jagung <= 8){
	$s16_salinitas_jagung = "S3";
	$u16_salinitas_jagung = "Reklamasi";
} else if($n16_salinitas_jagung > 8){
	$s16_salinitas_jagung = "N";
	$u16_salinitas_jagung = "Reklamasi";
} else{
	$s16_salinitas_jagung = "F";
	$u16_salinitas_jagung = "Periksa kembali inputan Anda";
}

echo "16. Toksisitas - Salinitas : $n16_salinitas_jagung (dS/m) <br/>";
echo "Status : $s16_salinitas_jagung <br/>";
echo "Usaha Perbaikan : $u16_salinitas_jagung <br/>";

//--------- 17. Alkalinitas/ESP (%) -----------

$n17_alkalinitas_jagung = $_POST['n17_alkalinitas'];

if ($n17_alkalinitas_jagung < 15){
	$s17_alkalinitas_jagung = "S1";
	$u17_alkalinitas_jagung = "Kondisi terbaik";
} else if($n17_alkalinitas_jagung >= 15 && $n17_alkalinitas_jagung <= 19){
	$s17_alkalinitas_jagung = "S2";
	$u17_alkalinitas_jagung = "Reklamasi";
} else if($n17_alkalinitas_jagung >= 20 && $n17_alkalinitas_jagung <= 25){
	$s17_alkalinitas_jagung = "S3";
	$u17_alkalinitas_jagung = "Reklamasi";
} else if($n17_alkalinitas_jagung > 25){
	$s17_alkalinitas_jagung = "N";
	$u17_alkalinitas_jagung = "Reklamasi";
} else{
	$s17_alkalinitas_jagung = "F";
	$u17_alkalinitas_jagung = "Periksa kembali inputan Anda";
}

echo "17. Sodisitas - Alkalinitas/ESP : $n17_alkalinitas_jagung (%) <br/>";
echo "Status : $s17_alkalinitas_jagung <br/>";
echo "Usaha Perbaikan : $u17_alkalinitas_jagung <br/>";

//--------- 18. Bahaya Sulfidik (xs) - Kedalaman Sulfidik (cm) -----------

$n18_sulfidik_jagung = $_POST['n18_sulfidik'];

if ($n18_sulfidik_jagung > 100){
	$s18_sulfidik_jagung = "S1";
	$u18_sulfidik_jagung = "Kondisi terbaik";
} else if($n18_sulfidik_jagung >= 76 && $n18_sulfidik_jagung <= 100){
	$s18_sulfidik_jagung = "S2";
	$u18_sulfidik_jagung = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else if($n18_sulfidik_jagung >= 40 && $n18_sulfidik_jagung <= 75){
	$s18_sulfidik_jagung = "S3";
	$u18_sulfidik_jagung = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else if($n18_sulfidik_jagung < 40){
	$s18_sulfidik_jagung = "N";
	$u18_sulfidik_jagung = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else{
	$s18_sulfidik_jagung = "F";
	$u18_sulfidik_jagung = "Periksa kembali inputan Anda";
}

echo "18. Bahaya Sulfidik (xs) - Kedalaman Sulfidik : $n18_sulfidik_jagung (cm) <br/>";
echo "Status : $s18_sulfidik_jagung <br/>";
echo "Usaha Perbaikan : $u18_sulfidik_jagung <br/>";

//--------- 19. Bahaya Erosi - Lereng (%) -----------

$n19_lereng_jagung = $_POST['n19_lereng'];

if ($n19_lereng_jagung < 8){
	$s19_lereng_jagung = "S1";
	$u19_lereng_jagung = "Kondisi terbaik";
} else if($n19_lereng_jagung >= 8 && $n19_lereng_jagung <= 14){
	$s19_lereng_jagung = "S2";
	$u19_lereng_jagung = "Pengurangan kemiringan";
} else if($n19_lereng_jagung >= 15 && $n19_lereng_jagung <= 25){
	$s19_lereng_jagung = "S3";
	$u19_lereng_jagung = "Pengurangan kemiringan";
} else if($n19_lereng_jagung > 25){
	$s19_lereng_jagung = "N";
	$u19_lereng_jagung = "Pengurangan kemiringan";
} else{
	$s19_lereng_jagung = "F";
	$u19_lereng_jagung = "Periksa kembali inputan Anda";
}

echo "19. Lereng : $n19_lereng_jagung (%) <br/>";
echo "Status : $s19_lereng_jagung <br/>";
echo "Usaha Perbaikan : $u19_lereng_jagung <br/>";

//--------- 20. Bahaya Erosi -----------

$n20_bahayaErosi_jagung = $_POST['n20_bahayaErosi'];

if ($n20_bahayaErosi_jagung == "tidak_ada"){
	$s20_bahayaErosi_jagung = "S1";
	$u20_bahayaErosi_jagung = "Kondisi terbaik";
} else if($n20_bahayaErosi_jagung == "sangat_ringan"){
	$s20_bahayaErosi_jagung = "S2";
	$u20_bahayaErosi_jagung = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi_jagung == "ringan"){
	$s20_bahayaErosi_jagung = "S3";
	$u20_bahayaErosi_jagung = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi_jagung == "sedang"){
	$s20_bahayaErosi_jagung = "S3";
	$u20_bahayaErosi_jagung = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi_jagung == "berat"){
	$s20_bahayaErosi_jagung = "N";
	$u20_bahayaErosi_jagung = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi_jagung == "sangat_berat"){
	$s20_bahayaErosi_jagung = "N";
	$u20_bahayaErosi_jagung = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else{
	$s20_bahayaErosi_jagung = "F";
	$u20_bahayaErosi_jagung = "Periksa kembali inputan Anda";
}

echo "20. Bahaya Erosi : $n20_bahayaErosi_jagung <br/>";
echo "Status : $s20_bahayaErosi_jagung <br/>";
echo "Usaha Perbaikan : $u20_bahayaErosi_jagung <br/>";

//--------- 21. Bahaya Banjir - tinggi (cm) -----------

$n21_tinggi_jagung = $_POST['n21_tinggi'];

if ($n21_tinggi_jagung > 24 && $n21_tinggi_jagung < 26){
	$s21_tinggi_jagung = "S3";
	$u21_tinggi_jagung = "Kondisi terbaik";
} else if($n21_tinggi_jagung > 25){
	$s21_tinggi_jagung = "N";
	$u21_tinggi_jagung = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
} else{
	$s21_tinggi_jagung = "F";
	$u21_tinggi_jagung = "Periksa kembali inputan Anda";
}

echo "21. Bahaya Banjir - tinggi : $n21_tinggi_jagung (cm) <br/>";
echo "Status : $s21_tinggi_jagung <br/>";
echo "Usaha Perbaikan : $u21_tinggi_jagung <br/>";

//--------- 22. Bahaya Banjir - lama (hari) -----------

$n22_lama_jagung = $_POST['n22_lama'];

if ($n22_lama_jagung < 7){
	$s22_lama_jagung = "S3";
	$u22_lama_jagung = "Kondisi terbaik";
} else if($n22_lama_jagung >= 7){
	$s22_lama_jagung = "N";
	$u22_lama_jagung = "Pembuatan jalur/drainase keluar air";
} else{
	$s22_lama_jagung = "F";
	$u22_lama_jagung = "Periksa kembali inputan Anda";
}

echo "22. Bahaya Banjir - lama : $n22_lama_jagung (hari) <br/>";
echo "Status : $s22_lama_jagung <br/>";
echo "Usaha Perbaikan : $u22_lama_jagung <br/>";

//--------- 23. Penyiapan Lahan - Batuan di Permukaan (%) -----------

$n23_batuanPermukaan_jagung = $_POST['n23_batuanPermukaan'];

if ($n23_batuanPermukaan_jagung < 5){
	$s23_batuanPermukaan_jagung = "S1";
	$u23_batuanPermukaan_jagung = "Kondisi terbaik";
} else if($n23_batuanPermukaan_jagung >= 5 && $n23_batuanPermukaan_jagung <= 14){
	$s23_batuanPermukaan_jagung = "S2";
	$u23_batuanPermukaan_jagung = "Tidak dapat dilakukan";
} else if($n23_batuanPermukaan_jagung >= 15 && $n23_batuanPermukaan_jagung <= 40){
	$s23_batuanPermukaan_jagung = "S3";
	$u23_batuanPermukaan_jagung = "Tidak dapat dilakukan";
} else if($n23_batuanPermukaan_jagung > 40){
	$s23_batuanPermukaan_jagung = "N";
	$u23_batuanPermukaan_jagung = "Tidak dapat dilakukan";
} else{
	$s23_batuanPermukaan_jagung = "F";
	$u23_batuanPermukaan_jagung = "Periksa kembali inputan Anda";
}

echo "23. Penyiapan Lahan - Batuan di Permukaan : $n23_batuanPermukaan_jagung (%) <br/>";
echo "Status : $s23_batuanPermukaan_jagung <br/>";
echo "Usaha Perbaikan : $u23_batuanPermukaan_jagung <br/>";

//--------- 24. Penyiapan Lahan - Singkapan Batuan (%) -----------

$n24_singkapanBatuan_jagung = $_POST['n24_singkapanBatuan'];

if ($n24_singkapanBatuan_jagung < 5){
	$s24_singkapanBatuan_jagung = "S1";
	$u24_singkapanBatuan_jagung = "Kondisi terbaik";
} else if($n24_singkapanBatuan_jagung >= 5 && $n24_singkapanBatuan_jagung <= 14){
	$s24_singkapanBatuan_jagung = "S2";
	$u24_singkapanBatuan_jagung = "Tidak dapat dilakukan";
} else if($n24_singkapanBatuan_jagung >= 15 && $n24_singkapanBatuan_jagung <= 25){
	$s24_singkapanBatuan_jagung = "S3";
	$u24_singkapanBatuan_jagung = "Tidak dapat dilakukan";
} else if($n24_singkapanBatuan_jagung > 25){
	$s24_singkapanBatuan_jagung = "N";
	$u24_singkapanBatuan_jagung = "Tidak dapat dilakukan";
} else{
	$s24_singkapanBatuan_jagung = "F";
	$u24_singkapanBatuan_jagung = "Periksa kembali inputan Anda";
}

echo "24. Penyiapan Lahan - Singkapan Batuan : $n24_singkapanBatuan_jagung (%) <br/>";
echo "Status : $s24_singkapanBatuan_jagung <br/>";
echo "Usaha Perbaikan : $u24_singkapanBatuan_jagung <br/>";

?>