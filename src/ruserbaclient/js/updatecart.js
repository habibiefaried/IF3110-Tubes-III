function updateCart(id,stok,idBarang,harga,nama)
{
	var valueBarang = document.getElementById("quantity_"+id).value;
	if (valueBarang > stok) alert("Stok yang tersisa tinggal "+stok+" barang");
	else
	{
		var str = idBarang+"-"+valueBarang+"-"+harga+"-"+nama+"-"+stok;
		setCookie(id,str);
		alert("Berhasil diganti");
		window.location.href = "cart.php";
	}
}
