<?php

// KEDELAI
echo "<br/><br/> KEDELAI <br/><br/>";

//--------- 1. Temperatur -----------

$n1_temp_kedelai = $_POST['n1_temp'];

if ($n1_temp_kedelai >= 23 && $n1_temp_kedelai <= 25){
	$s1_temp_kedelai = "S1";
	$u1_temp_kedelai = "Kondisi terbaik";
} else if($n1_temp_kedelai >= 26 && $n1_temp_kedelai <= 28){
	$s1_temp_kedelai = "S2";
	$u1_temp_kedelai = "Tidak dapat dilakukan";
} else if($n1_temp_kedelai >= 20 && $n1_temp_kedelai <= 22){
	$s1_temp_kedelai = "S2";
	$u1_temp_kedelai = "Tidak dapat dilakukan";
} else if($n1_temp_kedelai >= 29 && $n1_temp_kedelai <= 32){
	$s1_temp_kedelai = "S3";
	$u1_temp_kedelai = "Tidak dapat dilakukan";
} else if($n1_temp_kedelai >= 18 && $n1_temp_kedelai <= 19){
	$s1_temp_kedelai = "S3";
	$u1_temp_kedelai = "Tidak dapat dilakukan";
} else if($n1_temp_kedelai > 32 && $n1_temp_kedelai < 18){
	$s1_temp_kedelai = "N";
	$u1_temp_kedelai = "Tidak dapat dilakukan";
} else{
	$s1_temp_kedelai = "F";
	$u1_temp_kedelai = "Periksa kembali inputan Anda";
}

echo "1. Temperatur : $n1_temp_kedelai (C)<br/>";
echo "Status : $s1_temp_kedelai <br/>";
echo "Usaha Perbaikan : $u1_temp_kedelai <br/>";

//--------- 2. Jumlah Bulan Basah -----------

$n2_bulanBasah_kedelai = $_POST['n2_bulanBasah'];

if ($n2_bulanBasah_kedelai >= 2 && $n2_bulanBasah_kedelai <= 4){
	$s2_bulanBasah_kedelai = "S1";
	$u2_bulanBasah_kedelai = "Kondisi terbaik";
} else if($n2_bulanBasah_kedelai >= 5 && $n2_bulanBasah_kedelai <= 6){
	$s2_bulanBasah_kedelai = "S2";
	$u2_bulanBasah_kedelai = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah_kedelai < 2){
	$s2_bulanBasah_kedelai = "S3";
	$u2_bulanBasah_kedelai = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah_kedelai > 6){
	$s2_bulanBasah_kedelai = "S3";
	$u2_bulanBasah_kedelai = "Perbaikan dan Pengembangan sistem irigasi";
} else if($n2_bulanBasah_kedelai == "-"){
	$s2_bulanBasah_kedelai = "ND";
	$u2_bulanBasah_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s2_bulanBasah_kedelai = "F";
	$u2_bulanBasah_kedelai = "Periksa kembali inputan Anda";
}

echo "2. Ketersediaan Air : $n2_bulanBasah_kedelai (bulan) <br/>";
echo "Status : $s2_bulanBasah_kedelai <br/>";
echo "Usaha Perbaikan : $u2_bulanBasah_kedelai <br/>";

//--------- 3. Drainase -----------

$n3_drainase_kedelai = $_POST['n3_drainase'];

if ($n3_drainase_kedelai == "baik"){
	$s3_drainase_kedelai = "S1";
	$u3_drainase_kedelai = "Kondisi terbaik";
} else if($n3_drainase_kedelai == "agak_baik"){
	$s3_drainase_kedelai = "S1";
	$u3_drainase_kedelai = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_kedelai == "agak_cepat"){
	$s3_drainase_kedelai = "S2";
	$u3_drainase_kedelai = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_kedelai == "agak_terhambat"){
	$s3_drainase_kedelai = "S2";
	$u3_drainase_kedelai = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_kedelai == "terhambat"){
	$s3_drainase_kedelai = "S3";
	$u3_drainase_kedelai = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_kedelai == "sangat_terhambat"){
	$s3_drainase_kedelai = "N";
	$u3_drainase_kedelai = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else if($n3_drainase_kedelai == "cepat"){
	$s3_drainase_kedelai = "N";
	$u3_drainase_kedelai = "Perbaikan sistem drainase, seperti pembuatan saluran drainase";
} else{
	$s3_drainase_kedelai = "F";
	$u3_drainase_kedelai = "Periksa kembali inputan Anda";
}

echo "3. Drainase : $n3_drainase_kedelai <br/>";
echo "Status : $s3_drainase_kedelai <br/>";
echo "Usaha Perbaikan : $u3_drainase_kedelai <br/>";

//--------- 4. Tekstur -----------

$n4_tekstur_kedelai = $_POST['n4_tekstur'];

if ($n4_tekstur_kedelai == "halus"){
	$s4_tekstur_kedelai = "S1";
	$u4_tekstur_kedelai = "Kondisi terbaik";
} else if($n4_tekstur_kedelai == "agak_halus"){
	$s4_tekstur_kedelai = "S1";
	$u4_tekstur_kedelai = "Kondisi terbaik";
} else if($n4_tekstur_kedelai == "halus"){
	$s4_tekstur_kedelai = "S2";
	$u4_tekstur_kedelai = "Tidak dapat dilakukan";
} else if($n4_tekstur_kedelai == "agak_halus"){
	$s4_tekstur_kedelai = "S2";
	$u4_tekstur_kedelai = "Tidak dapat dilakukan";
} else if($n4_tekstur_kedelai == "sedang"){
	$s4_tekstur_kedelai = "S2";
	$u4_tekstur_kedelai = "Tidak dapat dilakukan";
} else if($n4_tekstur_kedelai == "agak_kasar"){
	$s4_tekstur_kedelai = "S3";
	$u4_tekstur_kedelai = "Tidak dapat dilakukan";
} else if($n4_tekstur_kedelai == "kasar"){
	$s4_tekstur_kedelai = "N";
	$u4_tekstur_kedelai = "Tidak dapat dilakukan";
} else{
	$s4_tekstur_kedelai = "F";
	$u4_tekstur_kedelai = "Periksa kembali inputan Anda";
}

echo "4. Tekstur : $n4_tekstur_kedelai <br/>";
echo "Status : $s4_tekstur_kedelai <br/>";
echo "Usaha Perbaikan : $u4_tekstur_kedelai <br/>";

//--------- 5. Bahan Kasar (%) -----------

$n5_bahanKasar_kedelai = $_POST['n5_bahanKasar'];

if ($n5_bahanKasar_kedelai == "<15"){
	$s5_bahanKasar_kedelai = "S1";
	$u5_bahanKasar_kedelai = "Kondisi terbaik";
} else if ($n5_bahanKasar_kedelai == "<3"){
	$s5_bahanKasar_kedelai = "S1";
	$u5_bahanKasar_kedelai = "Kondisi terbaik";
} else if ($n5_bahanKasar_kedelai == "3-14"){
	$s5_bahanKasar_kedelai = "S1";
	$u5_bahanKasar_kedelai = "Kondisi terbaik";
} else if($n5_bahanKasar_kedelai == "15-34"){
	$s5_bahanKasar_kedelai = "S2";
	$u5_bahanKasar_kedelai = "Tidak dapat dilakukan";
} else if($n5_bahanKasar_kedelai == "15-35"){
	$s5_bahanKasar_kedelai = "S2";
	$u5_bahanKasar_kedelai = "Tidak dapat dilakukan";
} else if($n5_bahanKasar_kedelai == ">35"){
	$s5_bahanKasar_kedelai = "S3";
	$u5_bahanKasar_kedelai = "Tidak dapat dilakukan";
} else if($n5_bahanKasar_kedelai == "35-55"){
	$s5_bahanKasar_kedelai = "S3";
	$u5_bahanKasar_kedelai = "Tidak dapat dilakukan";
} else if($n5_bahanKasar_kedelai == ">55"){
	$s5_bahanKasar_kedelai = "N";
	$u5_bahanKasar_kedelai = "Tidak dapat dilakukan";
}

echo "5. Bahan Kasar : $n5_bahanKasar_kedelai (%) <br/>";
echo "Status : $s5_bahanKasar_kedelai <br/>";
echo "Usaha Perbaikan : $u5_bahanKasar_kedelai <br/>";

//--------- 6. Kedalaman Tanah (cm) -----------

$n6_kedalamanTanah_kedelai = $_POST['n6_kedalamanTanah'];

if ($n6_kedalamanTanah_kedelai == ">50"){
	$s6_kedalamanTanah_kedelai = "S1";
	$u6_kedalamanTanah_kedelai = "Kondisi terbaik";
} else if ($n6_kedalamanTanah_kedelai == ">60"){
	$s6_kedalamanTanah_kedelai = "S1";
	$u6_kedalamanTanah_kedelai = "Kondisi terbaik";
} else if($n6_kedalamanTanah_kedelai == "41-60"){
	$s6_kedalamanTanah_kedelai = "S2";
	$u6_kedalamanTanah_kedelai = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah_kedelai == "41-50"){
	$s6_kedalamanTanah_kedelai = "S2";
	$u6_kedalamanTanah_kedelai = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah_kedelai == "31-50"){
	$s6_kedalamanTanah_kedelai = "S2";
	$u6_kedalamanTanah_kedelai = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah_kedelai == "20-30"){
	$s6_kedalamanTanah_kedelai = "S3";
	$u6_kedalamanTanah_kedelai = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah_kedelai == "25-40"){
	$s6_kedalamanTanah_kedelai = "S3";
	$u6_kedalamanTanah_kedelai = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah_kedelai == "<20"){
	$s6_kedalamanTanah_kedelai = "N";
	$u6_kedalamanTanah_kedelai = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
} else if($n6_kedalamanTanah_kedelai == "<25"){
	$s6_kedalamanTanah_kedelai = "N";
	$u6_kedalamanTanah_kedelai = "Umumnya tidak dapat dilakukan, kecuali pada lapisan padas lunak dan tipis dengan membongkarnya waktu pengolahan tanah";
}

echo "6. Kedalaman Tanah : $n6_kedalamanTanah_kedelai (cm) <br/>";
echo "Status : $s6_kedalamanTanah_kedelai <br/>";
echo "Usaha Perbaikan : $u6_kedalamanTanah_kedelai <br/>";

//--------- 7. Ketebalan Gambut (cm) -----------

$n7_ketebalanGambut_kedelai = $_POST['n7_ketebalanGambut'];

if ($n7_ketebalanGambut_kedelai == "<50"){
	$s7_ketebalanGambut_kedelai = "S1";
	$u7_ketebalanGambut_kedelai = "Kondisi terbaik";
} else if($n7_ketebalanGambut_kedelai == "50-99"){
	$s7_ketebalanGambut_kedelai = "S2";
	$u7_ketebalanGambut_kedelai = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else if($n7_ketebalanGambut_kedelai == "100-150"){
	$s7_ketebalanGambut_kedelai = "S3";
	$u7_ketebalanGambut_kedelai = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else if($n7_ketebalanGambut_kedelai == ">150"){
	$s7_ketebalanGambut_kedelai = "N";
	$u7_ketebalanGambut_kedelai = "Dengan teknik pemadatan gambut, teknik penanaman serta pemilihan varietas";
} else if($n7_ketebalanGambut_kedelai == "Tidak_Ada_Data"){
	$s7_ketebalanGambut_kedelai = "ND";
	$u7_ketebalanGambut_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
}

echo "7. Ketebalan Gambut : $n7_ketebalanGambut_kedelai (cm) <br/>";
echo "Status : $s7_ketebalanGambut_kedelai <br/>";
echo "Usaha Perbaikan : $u7_ketebalanGambut_kedelai <br/>";

//--------- 8. Kematangan Gambut -----------

$n8_kematanganGambut_kedelai = $_POST['n8_kematanganGambut'];

if ($n8_kematanganGambut_kedelai == "saprik"){
	$s8_kematanganGambut_kedelai = "S1";
	$u8_kematanganGambut_kedelai = "Kondisi terbaik";
} else if($n8_kematanganGambut_kedelai == "saprik-hemik"){
	$s8_kematanganGambut_kedelai = "S2";
	$u8_kematanganGambut_kedelai = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else if($n8_kematanganGambut_kedelai == "hemik"){
	$s8_kematanganGambut_kedelai = "S3";
	$u8_kematanganGambut_kedelai = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else if($n8_kematanganGambut_kedelai == "fibrik"){
	$s8_kematanganGambut_kedelai = "N";
	$u8_kematanganGambut_kedelai = "Pengaturan sistem drainase untuk mempercepat proses pematangan gambut";
} else if($n8_kematanganGambut_kedelai == "-"){
	$s8_kematanganGambut_kedelai = "ND";
	$u8_kematanganGambut_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s8_kematanganGambut_kedelai = "F";
	$u8_kematanganGambut_kedelai = "Periksa kembali inputan Anda";
}

echo "8. Kematangan Gambut : $n8_kematanganGambut_kedelai <br/>";
echo "Status : $s8_kematanganGambut_kedelai <br/>";
echo "Usaha Perbaikan : $u8_kematanganGambut_kedelai <br/>";

//--------- 9. KTK liat (cmol) -----------

$n9_ktkLiat_kedelai = $_POST['n9_ktkLiat'];

if ($n9_ktkLiat_kedelai > 16){
	$s9_ktkLiat_kedelai = "S1";
	$u9_ktkLiat_kedelai = "Kondisi terbaik";
} else if($n9_ktkLiat_kedelai >= 5 && $n9_ktkLiat_kedelai <= 16){
	$s9_ktkLiat_kedelai = "S2";
	$u9_ktkLiat_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n9_ktkLiat_kedelai < 5){
	$s9_ktkLiat_kedelai = "S3";
	$u9_ktkLiat_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n9_ktkLiat_kedelai == "-"){
	$s9_ktkLiat_kedelai = "ND";
	$u9_ktkLiat_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s9_ktkLiat_kedelai = "F";
	$u9_ktkLiat_kedelai = "Periksa kembali inputan Anda";
}

echo "9. Retensi Hara - KTK Liat : $n9_ktkLiat_kedelai (cmol) <br/>";
echo "Status : $s9_ktkLiat_kedelai <br/>";
echo "Usaha Perbaikan : $u9_ktkLiat_kedelai <br/>";

//--------- 10. Kejenuhan Basa (%) -----------

$n10_kejenuhanBasa_kedelai = $_POST['n10_kejenuhanBasa'];

if ($n10_kejenuhanBasa_kedelai > 35){
	$s10_kejenuhanBasa_kedelai = "S1";
	$u10_kejenuhanBasa_kedelai = "Kondisi terbaik";
} else if($n10_kejenuhanBasa_kedelai >= 20 && $n10_kejenuhanBasa_kedelai <= 35){
	$s10_kejenuhanBasa_kedelai = "S2";
	$u10_kejenuhanBasa_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n10_kejenuhanBasa_kedelai < 20){
	$s10_kejenuhanBasa_kedelai = "S3";
	$u10_kejenuhanBasa_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n10_kejenuhanBasa_kedelai == "-"){
	$s10_kejenuhanBasa_kedelai = "ND";
	$u10_kejenuhanBasa_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s10_kejenuhanBasa_kedelai = "F";
	$u10_kejenuhanBasa_kedelai = "Periksa kembali inputan Anda";
}

echo "10. Retensi Hara - Kejenuhan Basa : $n10_kejenuhanBasa_kedelai (%) <br/>";
echo "Status : $s10_kejenuhanBasa_kedelai <br/>";
echo "Usaha Perbaikan : $u10_kejenuhanBasa_kedelai <br/>";

//--------- 11. phH2o -----------

$n11_phH2o_kedelai = $_POST['n11_phH2o'];

if ($n11_phH2o_kedelai >= 5.6 && $n11_phH2o_kedelai <= 7.4){
	$s11_phH2o_kedelai = "S1";
	$u11_phH2o_kedelai = "Kondisi terbaik";
} else if($n11_phH2o_kedelai >= 5 && $n11_phH2o_kedelai <= 5.5){
	$s11_phH2o_kedelai = "S2";
	$u11_phH2o_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o_kedelai >= 7.5 && $n11_phH2o_kedelai <= 8){
	$s11_phH2o_kedelai = "S2";
	$u11_phH2o_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o_kedelai < 5 ){
	$s11_phH2o_kedelai = "S3";
	$u11_phH2o_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o_kedelai > 8){
	$s11_phH2o_kedelai = "S3";
	$u11_phH2o_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n11_phH2o_kedelai == "-"){
	$s11_phH2o_kedelai = "ND";
	$u11_phH2o_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s11_phH2o_kedelai = "F";
	$u11_phH2o_kedelai = "Periksa kembali inputan Anda";
}

echo "11. Retensi Hara - PH H2O : $n11_phH2o_kedelai <br/>";
echo "Status : $s11_phH2o_kedelai <br/>";
echo "Usaha Perbaikan : $u11_phH2o_kedelai <br/>";

//--------- 12. C-Organik (%) -----------

$n12_cOrganik_kedelai = $_POST['n12_cOrganik'];

if ($n12_cOrganik_kedelai > 1.2){
	$s12_cOrganik_kedelai = "S1";
	$u12_cOrganik_kedelai = "Kondisi terbaik";
} else if($n12_cOrganik_kedelai >= 0.8 && $n12_cOrganik_kedelai <= 1.2){
	$s12_cOrganik_kedelai = "S2";
	$u12_cOrganik_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n12_cOrganik_kedelai < 0.8){
	$s12_cOrganik_kedelai = "S3";
	$u12_cOrganik_kedelai = "Pengapuran atau penambahan bahan organik";
} else if($n12_cOrganik_kedelai == "-"){
	$s12_cOrganik_kedelai = "ND";
	$u12_cOrganik_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s12_cOrganik_kedelai = "F";
	$u12_cOrganik_kedelai = "Periksa kembali inputan Anda";
}

echo "12. Retensi Hara - C-Organik : $n12_cOrganik_kedelai (%) <br/>";
echo "Status : $s12_cOrganik_kedelai <br/>";
echo "Usaha Perbaikan : $u12_cOrganik_kedelai <br/>";

//--------- 13. Hara Tersedia - Ntotal (na) -----------

$n13_nTotal_kedelai = $_POST['n13_nTotal'];

if ($n13_nTotal_kedelai == "sedang"){
	$s13_nTotal_kedelai = "S1";
	$u13_nTotal_kedelai = "Kondisi terbaik";
} else if($n13_nTotal_kedelai == "rendah"){
	$s13_nTotal_kedelai = "S2";
	$u13_nTotal_kedelai = "Pemupukan N";
} else if($n13_nTotal_kedelai == "sangat_rendah"){
	$s13_nTotal_kedelai = "S3";
	$u13_nTotal_kedelai = "Pemupukan N";
} else if($n13_nTotal_kedelai == "-"){
	$s13_nTotal_kedelai = "ND";
	$u13_nTotal_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s13_nTotal_kedelai = "F";
	$u13_nTotal_kedelai = "Periksa kembali inputan Anda";
}

echo "13. Hara N Total : $n13_nTotal_kedelai <br/>";
echo "Status : $s13_nTotal_kedelai <br/>";
echo "Usaha Perbaikan : $u13_nTotal_kedelai <br/>";

//--------- 14. Hara Tersedia - PTersedia (na) -----------

$n14_pTersedia_kedelai = $_POST['n14_pTersedia'];

if ($n14_pTersedia_kedelai == "tinggi"){
	$s14_pTersedia_kedelai = "S1";
	$u14_pTersedia_kedelai = "Kondisi terbaik";
} else if($n14_pTersedia_kedelai == "sedang"){
	$s14_pTersedia_kedelai = "S2";
	$u14_pTersedia_kedelai = "Pemupukan P";
} else if($n14_pTersedia_kedelai == "rendah"){
	$s14_pTersedia_kedelai = "S3";
	$u14_pTersedia_kedelai = "Pemupukan P";
} else if($n14_pTersedia_kedelai == "sangat_rendah"){
	$s14_pTersedia_kedelai = "S3";
	$u14_pTersedia_kedelai = "Pemupukan P";
} else if($n14_pTersedia_kedelai == "-"){
	$s14_pTersedia_kedelai = "ND";
	$u14_pTersedia_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s14_pTersedia_kedelai = "F";
	$u14_pTersedia_kedelai = "Periksa kembali inputan Anda";
}

echo "14. Hara P Tersedia : $n14_pTersedia_kedelai <br/>";
echo "Status : $s14_pTersedia_kedelai <br/>";
echo "Usaha Perbaikan : $u14_pTersedia_kedelai <br/>";

//--------- 15. Hara Tersedia - KTersedia (na) -----------

$n15_kTersedia_kedelai = $_POST['n15_kTersedia'];

if ($n15_kTersedia_kedelai == "tinggi"){
	$s15_kTersedia_kedelai = "S1";
	$u15_kTersedia_kedelai = "Kondisi terbaik";
} else if($n15_kTersedia_kedelai == "sedang"){
	$s15_kTersedia_kedelai = "S2";
	$u15_kTersedia_kedelai = "Pemupukan K";
} else if($n15_kTersedia_kedelai == "rendah"){
	$s15_kTersedia_kedelai = "S3";
	$u15_kTersedia_kedelai = "Pemupukan K";
} else if($n15_kTersedia_kedelai == "sangat_rendah"){
	$s15_kTersedia_kedelai = "S3";
	$u15_kTersedia_kedelai = "Pemupukan K";
} else if($n15_kTersedia_kedelai == "-"){
	$s15_kTersedia_kedelai = "ND";
	$u15_kTersedia_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s15_kTersedia_kedelai = "F";
	$u15_kTersedia_kedelai = "Periksa kembali inputan Anda";
}

echo "15. Hara K Tersedia  : $n15_kTersedia_kedelai <br/>";
echo "Status : $s15_kTersedia_kedelai <br/>";
echo "Usaha Perbaikan : $u15_kTersedia_kedelai <br/>";

//--------- 16. Salinitas (dS/m) -----------

$n16_salinitas_kedelai = $_POST['n16_salinitas'];

if ($n16_salinitas_kedelai < 4){
	$s16_salinitas_kedelai = "S1";
	$u16_salinitas_kedelai = "Kondisi terbaik";
} else if($n16_salinitas_kedelai >= 4 && $n16_salinitas_kedelai <= 6){
	$s16_salinitas_kedelai = "S2";
	$u16_salinitas_kedelai = "Reklamasi";
} else if($n16_salinitas_kedelai >= 7 && $n16_salinitas_kedelai <= 8){
	$s16_salinitas_kedelai = "S3";
	$u16_salinitas_kedelai = "Reklamasi";
} else if($n16_salinitas_kedelai > 8){
	$s16_salinitas_kedelai = "N";
	$u16_salinitas_kedelai = "Reklamasi";
} else if($n16_salinitas_kedelai == "-"){
	$s16_salinitas_kedelai = "ND";
	$u16_salinitas_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s16_salinitas_kedelai = "F";
	$u16_salinitas_kedelai = "Periksa kembali inputan Anda";
}

echo "16. Toksisitas - Salinitas : $n16_salinitas_kedelai (dS/m) <br/>";
echo "Status : $s16_salinitas_kedelai <br/>";
echo "Usaha Perbaikan : $u16_salinitas_kedelai <br/>";

//--------- 17. Alkalinitas/ESP (%) -----------

$n17_alkalinitas_kedelai = $_POST['n17_alkalinitas'];

if ($n17_alkalinitas_kedelai < 15){
	$s17_alkalinitas_kedelai = "S1";
	$u17_alkalinitas_kedelai = "Kondisi terbaik";
} else if($n17_alkalinitas_kedelai >= 15 && $n17_alkalinitas_kedelai <= 19){
	$s17_alkalinitas_kedelai = "S2";
	$u17_alkalinitas_kedelai = "Reklamasi";
} else if($n17_alkalinitas_kedelai >= 20 && $n17_alkalinitas_kedelai <= 25){
	$s17_alkalinitas_kedelai = "S3";
	$u17_alkalinitas_kedelai = "Reklamasi";
} else if($n17_alkalinitas_kedelai > 25){
	$s17_alkalinitas_kedelai = "N";
	$u17_alkalinitas_kedelai = "Reklamasi";
} else if($n17_alkalinitas_kedelai == "-"){
	$s17_alkalinitas_kedelai = "ND";
	$u17_alkalinitas_kedelai = "Tidak ada data, butuh pengukuran lanjutan";
} else{
	$s17_alkalinitas_kedelai = "F";
	$u17_alkalinitas_kedelai = "Periksa kembali inputan Anda";
}

echo "17. Sodisitas - Alkalinitas/ESP : $n17_alkalinitas_kedelai (%) <br/>";
echo "Status : $s17_alkalinitas_kedelai <br/>";
echo "Usaha Perbaikan : $u17_alkalinitas_kedelai <br/>";

//--------- 18. Bahaya Sulfidik (xs) - Kedalaman Sulfidik (cm) -----------

$n18_sulfidik_kedelai = $_POST['n18_sulfidik'];

if ($n18_sulfidik_kedelai > 100){
	$s18_sulfidik_kedelai = "S1";
	$u18_sulfidik_kedelai = "Kondisi terbaik";
} else if($n18_sulfidik_kedelai >= 76 && $n18_sulfidik_kedelai <= 100){
	$s18_sulfidik_kedelai = "S2";
	$u18_sulfidik_kedelai = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else if($n18_sulfidik_kedelai >= 40 && $n18_sulfidik_kedelai <= 75){
	$s18_sulfidik_kedelai = "S3";
	$u18_sulfidik_kedelai = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else if($n18_sulfidik_kedelai < 40){
	$s18_sulfidik_kedelai = "N";
	$u18_sulfidik_kedelai = "Pengaturan sistem tata air tanah, tinggi permukaan air tanah harus diatas lapisan bahan sulfidik";
} else{
	$s18_sulfidik_kedelai = "F";
	$u18_sulfidik_kedelai = "Periksa kembali inputan Anda";
}

echo "18. Bahaya Sulfidik (xs) - Kedalaman Sulfidik : $n18_sulfidik_kedelai (cm) <br/>";
echo "Status : $s18_sulfidik_kedelai <br/>";
echo "Usaha Perbaikan : $u18_sulfidik_kedelai <br/>";

//--------- 19. Bahaya Erosi - Lereng (%) -----------

$n19_lereng_kedelai = $_POST['n19_lereng'];

if ($n19_lereng_kedelai == "<3"){
	$s19_lereng_kedelai = "S1";
	$u19_lereng_kedelai = "Kondisi terbaik";
} else if($n19_lereng_kedelai == "3-7"){
	$s19_lereng_kedelai = "S2";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == "3-4"){
	$s19_lereng_kedelai = "S2";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == "5-8"){
	$s19_lereng_kedelai = "S2";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == "<8"){
	$s19_lereng_kedelai = "S3";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == "8-14"){
	$s19_lereng_kedelai = "S3";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == "8-15"){
	$s19_lereng_kedelai = "S3";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == ">8"){
	$s19_lereng_kedelai = "N";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == "8-15"){
	$s19_lereng_kedelai = "N";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == ">15"){
	$s19_lereng_kedelai = "N";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
} else if($n19_lereng_kedelai == ">25"){
	$s19_lereng_kedelai = "N";
	$u19_lereng_kedelai = "Pengurangan kemiringan";
}

echo "19. Lereng : $n19_lereng_kedelai (%) <br/>";
echo "Status : $s19_lereng_kedelai <br/>";
echo "Usaha Perbaikan : $u19_lereng_kedelai <br/>";

//--------- 20. Bahaya Erosi -----------

$n20_bahayaErosi_kedelai = $_POST['n20_bahayaErosi'];

if ($n20_bahayaErosi_kedelai == "tidak_ada"){
	$s20_bahayaErosi_kedelai = "S1";
	$u20_bahayaErosi_kedelai = "Kondisi terbaik";
} else if($n20_bahayaErosi_kedelai == "sangat_ringan"){
	$s20_bahayaErosi_kedelai = "S2";
	$u20_bahayaErosi_kedelai = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi_kedelai == "ringan"){
	$s20_bahayaErosi_kedelai = "S3";
	$u20_bahayaErosi_kedelai = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi_kedelai == "sedang"){
	$s20_bahayaErosi_kedelai = "S3";
	$u20_bahayaErosi_kedelai = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi_kedelai == "berat"){
	$s20_bahayaErosi_kedelai = "N";
	$u20_bahayaErosi_kedelai = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else if($n20_bahayaErosi_kedelai == "sangat berat"){
	$s20_bahayaErosi_kedelai = "N";
	$u20_bahayaErosi_kedelai = "Usaha pengurangan laju erosi, pembuatan teras, penanaman sejajar kontur, penanaman tanaman penutup tanah";
} else{
	$s20_bahayaErosi_kedelai = "F";
	$u20_bahayaErosi_kedelai = "Periksa kembali inputan Anda";
}

echo "20. Bahaya Erosi : $n20_bahayaErosi_kedelai <br/>";
echo "Status : $s20_bahayaErosi_kedelai <br/>";
echo "Usaha Perbaikan : $u20_bahayaErosi_kedelai <br/>";

//--------- 21. Bahaya Banjir - tinggi (cm) -----------

$n21_tinggi_kedelai = $_POST['n21_tinggi'];

if ($n21_tinggi_jagung == "<=25"){
	$s21_tinggi_kedelai = "S3";
	$u21_tinggi_kedelai = "Kondisi terbaik";
} else if ($n21_tinggi_jagung == "25"){
	$s21_tinggi_kedelai = "S3";
	$u21_tinggi_kedelai = "Kondisi terbaik";
} else if($n21_tinggi_kedelai == "26-49"){
	$s21_tinggi_kedelai = "N";
	$u21_tinggi_kedelai = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
} else if($n21_tinggi_kedelai == "50-75"){
	$s21_tinggi_kedelai = "N";
	$u21_tinggi_kedelai = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
} else if($n21_tinggi_kedelai == ">75"){
	$s21_tinggi_kedelai = "N";
	$u21_tinggi_kedelai = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
} else if($n21_tinggi_kedelai == ">25"){
	$s21_tinggi_kedelai = "N";
	$u21_tinggi_kedelai = "Pembuatan tanggul penahan banjir dan pembuatan saluran drainase untuk mempercepat pembuangan air";
}

echo "21. Bahaya Banjir - tinggi : $n21_tinggi_kedelai (cm) <br/>";
echo "Status : $s21_tinggi_kedelai <br/>";
echo "Usaha Perbaikan : $u21_tinggi_kedelai <br/>";

//--------- 22. Bahaya Banjir - lama (hari) -----------

$n22_lama_kedelai = $_POST['n22_lama'];

if ($n22_lama_kedelai == "<7"){
	$s22_lama_kedelai = "S3";
	$u22_lama_kedelai = "Kondisi terbaik";
} else if ($n22_lama_kedelai == "<1"){
	$s22_lama_kedelai = "S3";
	$u22_lama_kedelai = "Kondisi terbaik";
} else if ($n22_lama_kedelai == "1-6"){
	$s22_lama_kedelai = "S3";
	$u22_lama_kedelai = "Kondisi terbaik";
} else if($n22_lama_kedelai == "7-14"){
	$s22_lama_kedelai = "N";
	$u22_lama_kedelai = "Pembuatan jalur/drainase keluar air";
} else if($n22_lama_kedelai == ">14"){
	$s22_lama_kedelai = "N";
	$u22_lama_kedelai = "Pembuatan jalur/drainase keluar air";
} else if($n22_lama_kedelai == ">=7"){
	$s22_lama_kedelai = "N";
	$u22_lama_kedelai = "Pembuatan jalur/drainase keluar air";
}

echo "22. Bahaya Banjir - lama : $n22_lama_kedelai (hari) <br/>";
echo "Status : $s22_lama_kedelai <br/>";
echo "Usaha Perbaikan : $u22_lama_kedelai <br/>";

//--------- 23. Penyiapan Lahan - Batuan di Permukaan (%) -----------

$n23_batuanPermukaan_kedelai = $_POST['n23_batuanPermukaan'];

if ($n23_batuanPermukaan_kedelai == "<5"){
	$s23_batuanPermukaan_kedelai = "S1";
	$u23_batuanPermukaan_kedelai = "Kondisi terbaik";
} else if($n23_batuanPermukaan_kedelai == "5-14"){
	$s23_batuanPermukaan_kedelai = "S2";
	$u23_batuanPermukaan_kedelai = "Tidak dapat dilakukan";
} else if($n23_batuanPermukaan_kedelai == "15-40"){
	$s23_batuanPermukaan_kedelai = "S3";
	$u23_batuanPermukaan_kedelai = "Tidak dapat dilakukan";
} else if($n23_batuanPermukaan_kedelai == ">40"){
	$s23_batuanPermukaan_kedelai = "N";
	$u23_batuanPermukaan_kedelai = "Tidak dapat dilakukan";
}

echo "23. Penyiapan Lahan - Batuan di Permukaan : $n23_batuanPermukaan_kedelai (%) <br/>";
echo "Status : $s23_batuanPermukaan_kedelai <br/>";
echo "Usaha Perbaikan : $u23_batuanPermukaan_kedelai <br/>";

//--------- 24. Penyiapan Lahan - Singkapan Batuan (%) -----------

$n24_singkapanBatuan_kedelai = $_POST['n24_singkapanBatuan'];

if ($n24_singkapanBatuan_kedelai == "<5"){
	$s24_singkapanBatuan_kedelai = "S1";
	$u24_singkapanBatuan_kedelai = "Kondisi terbaik";
} else if($n24_singkapanBatuan_kedelai == "5-14"){
	$s24_singkapanBatuan_kedelai = "S2";
	$u24_singkapanBatuan_kedelai = "Tidak dapat dilakukan";
} else if($n24_singkapanBatuan_kedelai == "15-25"){
	$s24_singkapanBatuan_kedelai = "S3";
	$u24_singkapanBatuan_kedelai = "Tidak dapat dilakukan";
} else if($n24_singkapanBatuan_kedelai == ">25"){
	$s24_singkapanBatuan_kedelai = "N";
	$u24_singkapanBatuan_kedelai = "Tidak dapat dilakukan";
}

echo "24. Penyiapan Lahan - Singkapan Batuan : $n24_singkapanBatuan_kedelai (%) <br/>";
echo "Status : $s24_singkapanBatuan_kedelai <br/>";
echo "Usaha Perbaikan : $u24_singkapanBatuan_kedelai <br/>";

?>
