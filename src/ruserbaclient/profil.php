<?php
    require_once('header.php');
?>
<div onload="RefreshCartandShow()" id="content_frame">
<div class="center">
<div id="profileRefresh" class="register_div">
	<h1 class="header">Loading...</h1>
</div>
<script>
    function refreshGetProfil() {
        var fld = document.getElementById("profileRefresh");
        var xmlHttpGetProfil;
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlHttpGetProfil = new XMLHttpRequest();
        } else {// code for IE6, IE5
            xmlHttpGetProfil = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlHttpGetProfil.onreadystatechange=function() {
            if (xmlHttpGetProfil.readyState==4 && xmlHttpGetProfil.status==200) {
                var data = JSON.parse(xmlHttpGetProfil.responseText);
                fld.innerHTML = "<h1 class=\"header\">Profil</h1>"+
                    "<div class=\"per_form\"><label>Nama Lengkap:</label><p>" + data.nama_lengkap + "</p></div>" +
                    "<div class=\"per_form\"><label>Username:</label><p>" + data.username + "</p></div>" +
                    "<div class=\"per_form\"><label>Email:</label><p>" + data.email + "</p></div>" +
                    "<div class=\"per_form\"><label>Alamat:</label><p>" + data.alamat + "</p></div>" +
                    "<div class=\"per_form\"><label>Provinsi:</label><p>" + data.provinsi + "</p></div>" +
                    "<div class=\"per_form\"><label>Kota:</label><p>" + data.kota + "</p></div>" +
                    "<div class=\"per_form\"><label>Kode Pos:</label><p>" + data.kode_pos + "</p></div>" +
                    "<div class=\"per_form\"><label>Telepon:</label><p>" + data.no_telp + "</p></div>" +
                    "<div class=\"per_form\"><label>Transaksi:</label><p>" + data.transaksi + "</p></div>" +
                    "<a class=\"btn\" href=\"editProfil.php\">Edit Profile</a>";
            }
        }
        xmlHttpGetProfil.open("GET","http://localhost:8080/thelastruserba/profile?username=sonny",true);
		xmlHttpGetProfil.send();
    }
    refreshGetProfil();
</script>
</div>
			</div>
		</div>
		<?php
require_once('footer.php');
?>
