<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Terramatch</title>
	</head>	

	<body>

		<?php echo "Selamat Datang Pengguna Terramatch v1"; ?><br/><br/>
		<?php echo "Anda dapat mempelajari pedoman pengisian Terramatch pada link berikut :"; ?><br/><br/>
		<a href="halaman_tujuan.php">Klik di sini</a>;<br/><br/>
		<?php echo "Silahkan lengkapi data penilaian berikut :"; ?><br/><br/>

		<form action="hasil_evaluasi.php" method="POST">
			1. Temperature: <input type="text" name="n1_temp" placeholder="Isikan temperature (C)" required> celcius<br>
			2. Bulan Basah: <input type="text" name="n2_bulanBasah" placeholder="Isikan bulan basah (bulan)" required> bulan<br>
			3. Drainase:<br>
				<input type="radio" name="n3_drainase" value="terhambat">terhambat <br>
				<input type="radio" name="n3_drainase" value="agak_terhambat">agak_terhambat <br>
				<input type="radio" name="n3_drainase" value="agak_baik">agak_baik <br>
				<input type="radio" name="n3_drainase" value="sangat_terhambat">sangat_terhambat <br>
				<input type="radio" name="n3_drainase" value="baik">baik <br>
				<input type="radio" name="n3_drainase" value="agak_cepat">agak_cepat <br>
				<input type="radio" name="n3_drainase" value="cepat"> cepat <br>
			4. Tekstur:<br>
				<input type="radio" name="n4_tekstur" value="halus">halus <br>
				<input type="radio" name="n4_tekstur" value="agak_halus">agak_halus <br>
				<input type="radio" name="n4_tekstur" value="sedang">sedang <br>
				<input type="radio" name="n4_tekstur" value="agak_kasar">agak_kasar <br>
				<input type="radio" name="n4_tekstur" value="kasar">kasar <br>
			5. Bahan Kasar: <br>
				<input type="radio" name="n5_bahanKasar" value="<3"> <3 <br>
				<input type="radio" name="n5_bahanKasar" value="<15"> <15 <br>
				<input type="radio" name="n5_bahanKasar" value="3-14"> 3-14 <br>
				<input type="radio" name="n5_bahanKasar" value="15-34"> 15-34 <br>
				<input type="radio" name="n5_bahanKasar" value="15-35"> 15-35 <br>
				<input type="radio" name="n5_bahanKasar" value="35-55"> 35-55 <br>
				<input type="radio" name="n5_bahanKasar" value=">35"> >35 <br>
				<input type="radio" name="n5_bahanKasar" value=">55"> >55 <br>
			6. Kedalaman Tanah: <br>
				<input type="radio" name="n6_kedalamanTanah" value=">60"> >60 <br>
				<input type="radio" name="n6_kedalamanTanah" value=">50"> >50 <br>
				<input type="radio" name="n6_kedalamanTanah" value="41-60"> 41-60 <br>
				<input type="radio" name="n6_kedalamanTanah" value="41-50"> 41-50 <br>
				<input type="radio" name="n6_kedalamanTanah" value="31-50"> 31-50 <br>
				<input type="radio" name="n6_kedalamanTanah" value="25-40"> 25-40 <br>
				<input type="radio" name="n6_kedalamanTanah" value="20-30"> 20-30 <br>
				<input type="radio" name="n6_kedalamanTanah" value="<25"> <25 <br>
				<input type="radio" name="n6_kedalamanTanah" value="<20"> <20 <br>
			7. Ketebalan Gambut: <br>
				<input type="radio" name="n7_ketebalanGambut" value="<50"> <50<br>
				<input type="radio" name="n7_ketebalanGambut" value="50-99"> 50-99<br>
				<input type="radio" name="n7_ketebalanGambut" value="100-150"> 100-150<br>
				<input type="radio" name="n7_ketebalanGambut" value=">150"> >150<br>
				<input type="radio" name="n7_ketebalanGambut" value="Tidak_Ada_Data"> Tidak_Ada_Data<br>
			8. Kematangan Gambut:<br>
				<input type="radio" name="n8_kematanganGambut" value="saprik">saprik <br>
				<input type="radio" name="n8_kematanganGambut" value="saprik-hemik">saprik-hemik <br>
				<input type="radio" name="n8_kematanganGambut" value="hemik">hemik <br>
				<input type="radio" name="n8_kematanganGambut" value="fibrik">fibrik <br>
				<input type="radio" name="n8_kematanganGambut" value="-"> Tidak Ada Data <br>
			9. KTK Liat: <input type="text" name="n9_ktkLiat" placeholder="Isikan KTK Liat (cmol)" required> cmol<br>
			10. Kejenuhan Basa: <input type="text" name="n10_kejenuhanBasa" placeholder="Isikan kejenuhan basa (%)" required> %<br>
			11. PH H2O: <input type="text" name="n11_phH2o" placeholder="Isikan PH H2O" required> <br>
			12. C-Organik: <input type="text" name="n12_cOrganik" placeholder="Isikan C-Organik" required> %<br>
			13. Hara Tersedia - N total:<br>
				<input type="radio" name="n13_nTotal" value="sedang">sedang <br>
				<input type="radio" name="n13_nTotal" value="rendah">rendah <br>
				<input type="radio" name="n13_nTotal" value="sangat_rendah">sangat_rendah <br>
			14. Hara Tersedia - P Tersedia:<br>
				<input type="radio" name="n14_pTersedia" value="tinggi">tinggi <br>
				<input type="radio" name="n14_pTersedia" value="sedang">sedang <br>
				<input type="radio" name="n14_pTersedia" value="rendah">rendah <br>
				<input type="radio" name="n14_pTersedia" value="sangat_rendah">sangat_rendah <br>
			15. Hara Tersedia - K Tersedia:<br>
				<input type="radio" name="n15_kTersedia" value="sedang">sedang <br>
				<input type="radio" name="n15_kTersedia" value="rendah">rendah <br>
				<input type="radio" name="n15_kTersedia" value="sangat_rendah">sangat_rendah <br>
			16. Salinitas : <input type="text" name="n16_salinitas" placeholder="Isikan salinitas" required> dS/m<br>
			17. Alkalinitas/ESP : <input type="text" name="n17_alkalinitas" placeholder="Isikan alkalinitas/ESP" required> %<br>
			18. Kedalaman Sulfidik : <input type="text" name="n18_sulfidik" placeholder="Isikan kedalaman sulfidik" required> cm<br>
			19. Bahaya Erosi - Lereng : <br>
				<input type="radio" name="n19_lereng" value="<3"> <3 <br>
				<input type="radio" name="n19_lereng" value="3-4"> 3-4 <br>
				<input type="radio" name="n19_lereng" value="3-7"> 3-7 <br>
				<input type="radio" name="n19_lereng" value="<8"> <8 <br>
				<input type="radio" name="n19_lereng" value="5-8"> 5-8 <br>
				<input type="radio" name="n19_lereng" value=">8"> >8 <br>
				<input type="radio" name="n19_lereng" value="8-14"> 8-14 <br>
				<input type="radio" name="n19_lereng" value="8-15"> 8-15 <br>
				<input type="radio" name="n19_lereng" value=">15"> >15 <br>
				<input type="radio" name="n19_lereng" value="15-25"> 15-25 <br>
				<input type="radio" name="n19_lereng" value=">25"> >25 <br>
			20. Bahaya Erosi:<br>
				<input type="radio" name="n20_bahayaErosi" value="tidak_ada">tidak_ada <br>
				<input type="radio" name="n20_bahayaErosi" value="sangat_ringan">sangat_ringan <br>
				<input type="radio" name="n20_bahayaErosi" value="ringan">ringan <br>
				<input type="radio" name="n20_bahayaErosi" value="sedang">sedang <br>
				<input type="radio" name="n20_bahayaErosi" value="berat">berat <br>
				<input type="radio" name="n20_bahayaErosi" value="sangat_berat">sangat_berat <br>
			21. Bahaya Banjir - tinggi : <br>
				<input type="radio" name="n21_tinggi" value="<=25"> <25 <br>
				<input type="radio" name="n21_tinggi" value="25"> 25 <br>
				<input type="radio" name="n21_tinggi" value=">25"> >25 <br>
				<input type="radio" name="n21_tinggi" value="26-49"> 26-49 <br>
				<input type="radio" name="n21_tinggi" value="50-75"> 50-75 <br>
				<input type="radio" name="n21_tinggi" value=">75"> >75 <br>
			22. Bahaya Banjir - lama : <br>
				<input type="radio" name="n22_lama" value="<1"> <1 <br>
				<input type="radio" name="n22_lama" value="1-6"> 1-6 <br>
				<input type="radio" name="n22_lama" value="7-14"> 7-14 <br>
				<input type="radio" name="n22_lama" value="<=7"> <=7 <br>
				<input type="radio" name="n22_lama" value=">=7"> >=7 <br>
				<input type="radio" name="n22_lama" value=">14"> >14 <br>	
			23. Penyiapan Lahan - Batuan di Permukaan : <br>
				<input type="radio" name="n23_batuanPermukaan" value="<5"> <5 <br>
				<input type="radio" name="n23_batuanPermukaan" value="5-14"> 5-14 <br>
				<input type="radio" name="n23_batuanPermukaan" value="15-40"> 15-40 <br>
				<input type="radio" name="n23_batuanPermukaan" value=">40"> >40 <br>
			24. Bahaya Erosi - Lereng : <br>
				<input type="radio" name="n24_singkapanBatuan" value="<5"> <5 <br>
				<input type="radio" name="n24_singkapanBatuan" value="5-14"> 5-14 <br>
				<input type="radio" name="n24_singkapanBatuan" value="15-25"> 15-25 <br>
				<input type="radio" name="n24_singkapanBatuan" value=">25"> >25 <br>

			<br><br>
			<button type="submit">Proses</button>
		</form>

		</body>
	</html>
