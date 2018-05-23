			$(document).ready(function () {
				$('#navlist ul li a').click(function () {
					$('#navlist ul li a').removeClass("active");
					$(this).addClass("active");
				});


			});

			function getCookie(cname) {
				var name = cname + "=";
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for (var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
						return c.substring(name.length, c.length);
					}
				}
				return "";
			}

			function submitLogin() {
				if (validatelogin()) {
					console.log('form submitted post validation');
					var email = $("#email").val();
					var password = $("#password").val();

					$.ajax({
						url: 'checkLogin.php',
						type: 'POST',
						data: {
							email: email,
							password: password
						},
						success: function (response) {
							$("#result").html(response);
							$name = getCookie('name');
							$("#username").text($name);
							//document.getElementById('username').innerHTML = $name;
						}
					});
				}
			}

			//********************************************************************************


			function homePage() {
				var xhttp;
				if (window.XMLHttpRequest) {
					// code for modern browsers
					xhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("result").innerHTML = this.responseText;
					}
				};
				xhttp.open("GET", "home.php", true);
				xhttp.send();
			}

			homePage();


			//****************************************************************************************************	


			function listbook() {

				var xhttp;
				if (window.XMLHttpRequest) {
					// code for modern browsers
					xhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("slider").innerHTML = this.responseText;
					}
				};
				xhttp.open("GET", "listbook.php", true);
				xhttp.send();

			}


			//****************************************************************************************************	





			function associatedPage(fileName) {
				var xhttp;
				if (window.XMLHttpRequest) {
					// code for modern browsers
					xhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {

						document.getElementById("result").innerHTML = this.responseText;
					}
				};
				var formattedFileName = fileName + '.php';
				xhttp.open("GET", formattedFileName, true);
				xhttp.send();


			}
			//**************************************************************************************************



			function associatedChildPage(fileName) {
				var xhttp;
				if (window.XMLHttpRequest) {
					// code for modern browsers
					xhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {

						document.getElementById("childPage").innerHTML = this.responseText;
					}
				};
				var formattedFileName = fileName + '.php';
				xhttp.open("GET", formattedFileName, true);
				xhttp.send();


			}

			//**************************************************************************************************



			function logoutpage() {
				var xhttp;
				if (window.XMLHttpRequest) {
					// code for modern browsers
					xhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
						window.location.href = 'index.php';
					}
				};
				xhttp.open("GET", "logout.php", true);
				xhttp.send();
			}
