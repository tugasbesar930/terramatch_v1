<html>
	<body>

	<?php echo "Selamat Datang Pengguna Terramatch v1 <br/>"; ?>
	<?php echo "Silahkan lengkapi data penilaian berikut :<br/><br/>"; ?>

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
		4. Tekstur:<br>
			<input type="radio" name="n4_tekstur" value="halus">halus <br>
			<input type="radio" name="n4_tekstur" value="agak_halus">agak_halus <br>
			<input type="radio" name="n4_tekstur" value="sedang">sedang <br>
			<input type="radio" name="n4_tekstur" value="agak_kasar">agak_kasar <br>
			<input type="radio" name="n4_tekstur" value="kasar">kasar <br>
		5. Bahan Kasar: <input type="text" name="n5_bahanKasar" placeholder="Isikan bahan kasar (%)" required> %<br>
		6. Kedalaman Tanah: <input type="text" name="n6_kedalamanTanah" placeholder="Isikan kedalaman tanah (cm)" required> cm<br>
		7. Ketebalan Gambut: <input type="text" name="n7_ketebalanGambut" placeholder="Isikan ketebalan gambut (cm)" required> cm<br>
		8. Kematangan Gambut:<br>
			<input type="radio" name="n8_kematanganGambut" value="saprik">saprik <br>
			<input type="radio" name="n8_kematanganGambut" value="saprik-hemik">saprik-hemik <br>
			<input type="radio" name="n8_kematanganGambut" value="hemik">hemik <br>
			<input type="radio" name="n8_kematanganGambut" value="fibrik">fibrik <br>
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
		19. Bahaya Erosi - Lereng : <input type="text" name="n19_lereng" placeholder="Isikan Bahaya Erosi - Lereng" required> %<br>
		20. Bahaya Erosi:<br>
			<input type="radio" name="n20_bahayaErosi" value="tidak_ada">tidak_ada <br>
			<input type="radio" name="n20_bahayaErosi" value="sangat_ringan">sangat_ringan <br>
			<input type="radio" name="n20_bahayaErosi" value="ringan">ringan <br>
			<input type="radio" name="n20_bahayaErosi" value="sedang-berat">sedang-berat <br>
		21. Bahaya Banjir - tinggi : <input type="text" name="n21_tinggi" placeholder="Isikan tinggi" required> cm<br>
		22. Bahaya Banjir - lama : <input type="text" name="n22_lama" placeholder="Isikan lama" required> hari<br>
		23. Penyiapan Lahan - Batuan di Permukaan : <input type="text" name="n23_batuanPermukaan" placeholder="Isikan batuan di permukaan" required> %<br>
		24. Bahaya Erosi - Lereng : <input type="text" name="n24_singkapanBatuan" placeholder="Isikan singkapan batuan" required> %<br>

		<br><br>
		<button type="submit">Proses</button>
	</form>

	</body>
</html>