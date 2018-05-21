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
    for(var i = 0; i <ca.length; i++) {
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
				validatelogin();
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

			//********************************************************************************


			function homepage() {
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

			homepage();


			/********************************************************************/

			function aboutpage() {
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
				xhttp.open("GET", "about.php", true);
				xhttp.send();
			}
			//****************************************************************************************************	



			function collectionpage() {
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
				xhttp.open("GET", "collection.php", true);
				xhttp.send();
			}

			//****************************************************************************************************	


			function newaddpage() {
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
				xhttp.open("GET", "newadd.php", true);
				xhttp.send();
			}

			//****************************************************************************************************	

			function popularpage() {
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
				xhttp.open("GET", "popular.php", true);
				xhttp.send();
			}

			//****************************************************************************************************	


			function getinvolvedpage() {
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
				xhttp.open("GET", "involved.php", true);
				xhttp.send();
			}

			//****************************************************************************************************	





			//****************************************************************************************************	

			function registerpage() {
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
				xhttp.open("GET", "register.php", true);
				xhttp.send();
			}





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





			function loginpage() {
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
				xhttp.open("GET", "login.php", true);
				xhttp.send();


			}
			//**************************************************************************************************



			//script of dashboard 

			function summarypage() {
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
				xhttp.open("GET", "summary.php", true);
				xhttp.send();


			}

			//****************************************************************************************************	

			function deletepage() {
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
				xhttp.open("GET", "delete.php", true);
				xhttp.send();
			}




			//****************************************************************************************************	

			function changepassword() {

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
				xhttp.open("GET", "changepassword.php", true);
				xhttp.send();

			}



			function assignedbook() {
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
				xhttp.open("GET", "assignbooklogin.php", true);
				xhttp.send();


			}

			//****************************************************************************************************	


			function reservebookpage() {
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
				xhttp.open("GET", "reservebook.php", true);
				xhttp.send();


			}


			//**************************************************************************************************



			function forgotpasswordpage() {
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
				xhttp.open("GET", "forgotpassword.php", true);
				xhttp.send();


			}


			//**************************************************************************************************


			function getinvolvedpage2() {
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
				xhttp.open("GET", "involved.php", true);
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
