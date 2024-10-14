<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title>Nissa - News</title>

		<!--- Favicon brand atau logo--->
		<link rel="icon" href="../assets/img/brand/logo-nisa.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">
		<link href="../assets/css/card.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">


		<!-- mengatur jalannya pembuka atau penutup konten -->
		<script>
			function toggleContent(cardNumber) {
			var moreContent = document.getElementById("moreContent" + cardNumber);
			var readMoreBtn = document.getElementById("readMoreBtn" + cardNumber);
      
			if (moreContent.style.display === "none") {
				moreContent.style.display = "block"; // Tampilkan konten
				readMoreBtn.innerHTML = "Tutup"; // Ubah teks tombol
			} else {
				moreContent.style.display = "none"; // Sembunyikan konten
				readMoreBtn.innerHTML = "Baca selengkapnya"; // Ubah kembali teks tombol
			}
		    }
	    </script>


	</head>