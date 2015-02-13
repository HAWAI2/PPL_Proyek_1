// JavaScript Document
	function formPengaduan() {
		// Create an XMLHttpRequest Object	
		var xmlHttpObj;	
		if (window.XMLHttpRequest) {				
			xmlHttpObj = new XMLHttpRequest( );
		} else {			
			try {
				xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					xmlHttpObj = false;
				}
			}
		}		
		// Create a function that will receive data sent from the server
		xmlHttpObj.open("GET", "form_pengaduan.php", true);
		xmlHttpObj.send();
		xmlHttpObj.onreadystatechange = function() {
			if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
				document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
			}
		}
	}
	
	function tambahPengaduan() {
		// Create an XMLHttpRequest Object
		var xmlHttpObj;
		if (window.XMLHttpRequest) {
			xmlHttpObj = new XMLHttpRequest( );
		} else {
			try {
				xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					xmlHttpObj = false;
				}
			}
		}
		
		var id_taman = document.getElementById('inputTaman').value;
		var judul = document.getElementById('inputJudul').value;
		var isi = document.getElementById('inputIsi').value;
		
		// Create a function that will receive data sent from the server
		xmlHttpObj.open("GET", "pengaduan_baru.php?id_taman=" + inputTaman + "&judul=" + inputJudul + "&isi=" + inputIsi, true);
		xmlHttpObj.send(null);
		xmlHttpObj.onreadystatechange = function() {
			if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
				document.getElementById("inner-page").innerHTML=xmlHttpObj.responseText;
			}
		}
	}

	function loadSemuaPengaduan() {
	// Create an XMLHttpRequest Object
		var xmlHttpObj;
		if (window.XMLHttpRequest) {
			xmlHttpObj = new XMLHttpRequest( );
		} else {
			try {
				xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					xmlHttpObj = false;
				}
			}
		}
		
		// Create a function that will receive data sent from the server
		xmlHttpObj.open("GET", "load_semua_pengaduan.php", true);
		xmlHttpObj.send();
		xmlHttpObj.onreadystatechange = function() {
			if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
				document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
			}
		}
	}

	function loadSedangDiproses() {
		// Create an XMLHttpRequest Object
		var xmlHttpObj;
		if (window.XMLHttpRequest) {
			xmlHttpObj = new XMLHttpRequest( );
		} else {
			try {
				xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					xmlHttpObj = false;
				}
			}
		}
		
		// Create a function that will receive data sent from the server
		xmlHttpObj.open("GET", "load_sedang_diproses.php", true);
		xmlHttpObj.send();
		xmlHttpObj.onreadystatechange = function() {
			if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
				document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
			}
		}
	}

	function loadSudahSelesai() {
		// Create an XMLHttpRequest Object
		var xmlHttpObj;
		if (window.XMLHttpRequest) {
			xmlHttpObj = new XMLHttpRequest( );
		} else {
			try {
				xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					xmlHttpObj = false;
				}
			}
		}
		
		// Create a function that will receive data sent from the server
		xmlHttpObj.open("GET", "load_sudah_selesai.php", true);
		xmlHttpObj.send();
		xmlHttpObj.onreadystatechange = function() {
			if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
				document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
			}
		}
	}

	function loadDitolak() {
		// Create an XMLHttpRequest Object
		var xmlHttpObj;
		if (window.XMLHttpRequest) {
			xmlHttpObj = new XMLHttpRequest( );
		} else {
			try {
				xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					xmlHttpObj = false;
				}
			}
		}
		
		// Create a function that will receive data sent from the server
		xmlHttpObj.open("GET", "load_ditolak.php", true);
		xmlHttpObj.send();
		xmlHttpObj.onreadystatechange = function() {
			if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
				document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
			}
		}
	}

	function statistik() {
		// Create an XMLHttpRequest Object
		var xmlHttpObj;
		if (window.XMLHttpRequest) {
			xmlHttpObj = new XMLHttpRequest( );
		} else {
			try {
				xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					xmlHttpObj = false;
				}
			}
		}
		
		// Create a function that will receive data sent from the server
		xmlHttpObj.open("GET", "statistik.php", true);
		xmlHttpObj.send();
		xmlHttpObj.onreadystatechange = function() {
			if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
				document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
			}
		}
	}