<?php
session_start();
$username = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <style>
		.green-text {
			color: green;
		}
		.blue-text {
			color: blue;
		}
		.red-text {
				color: red;
}

		h2 {
			font-family: Lobster, Monospace;
}
        body  {
            background-color: #00ccff;
}
</style>
	<body onload="loads();">
     
      <h2> Cookies: </h2>
      

<!-- ======================================================================================================== -->

      <script>		
        var username = "<?php echo $username ?>";
        var number2 = 990;
        var multi = 1;
        var multia = 0;
        var ovensb = 0;
        var autos = 0;          // multiple of autoclickers
        var grannys = 0;
        var store = 0;
        var fact = 0;
        var mall = 0;
        var count = 0;
        var drill = 0;
        var rocket = 0;
        var plant = 0;
        var ss = 0;
        var sm = 1;
//===============================================================================================================
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
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
        
<!-- ======================================================================================================== -->        
        
        function loads(){
			loadEverything();
			settimer();
		}
        
        
        
        
        function saveEverything()
        {
            setCookie(username + ".Number",number2,730);
            setCookie(username + ".Autos",autos,730);
            setCookie(username + ".Grannys",grannys,730);
            setCookie(username + ".Store",store,730);
            setCookie(username + ".Factory",fact,730);
            setCookie(username + ".Mall",mall,730);
            setCookie(username + ".O",ovensb,730);
            setCookie(username + ".C",count,730);
            setCookie(username + ".D",drill,730);
            setCookie(username + ".R",rocket,730);
            setCookie(username + ".P",plant,730);
            setCookie(username + ".S",ss,730);
            setCookie(username + ".M",multi,730);
            setCookie(username + ".sm",sm,730);
        }

<!-- ======================================================================================================== -->
        
        function loadEverything(){
            var elem = document.getElementById("username");
                elem.innerHTML = username;
            number2 = 1 * getCookie(username + ".Number");
            autos = 1 * getCookie(username + ".Autos");
            grannys = 1 * getCookie(username + ".Grannys");
            store = 1 * getCookie(username + ".Store");
            fact = 1 * getCookie(username + ".Factory");
            mall = 1 * getCookie(username + ".Mall");
            ovensb = 1 * getCookie(username + ".O");
            count = 1 * getCookie(username + ".C");
            drill = 1 * getCookie(username + ".D");
            rocket = 1 * getCookie(username + ".R");
            plant = 1 * getCookie(username + ".P");
            ss = 1 * getCookie(username + ".S");
            multi = 1 * getCookie(username + ".M");
            sm = 1 * getCookie(username + ".sm");
            updatepage();
        }
        
<!-- ======================================================================================================== -->        
        
        function resetEverything()
        {
            number2 = 0;
            autos = 0;
            store = 0;
            fact = 0;
            mall = 0;
            count = 0;
            drill = 0;
            rocket = 0;
            plant = 0;
			grannys = 0;
            ss = 0;
            multi = 1;
            ovensb = 0;
            sm = 1;
            saveEverything();
            updatepage();
        }
//===============================================================================================================
         function autoup(){
            number2 = number2 + autos;
            updatepage();
         }
         timerAutoClick = setInterval(autoup,1000);
         function grannyup(){
            number2 = number2 + (grannys * 2);
            updatepage();
         }
         timerAutoClick = setInterval(grannyup,1000);
         function storeup(){
            number2 = number2 + (store * 4);
            updatepage();
         }
         timerAutoClick = setInterval(storeup,1000);
         function factup(){
            number2 = number2 + (fact * 6);
            updatepage();
         }
         timerAutoClick = setInterval(factup,1000);
         function mallup(){
            number2 = number2 + (mall * 10 * sm);
            updatepage();
         }
         timerAutoClick = setInterval(mallup,1000);
         function countup(){
            number2 = number2 + (count * 15);
            updatepage();
         }
         timerAutoClick = setInterval(countup,1000);
         function drillup(){
            number2 = number2 + (drill * 20);
            updatepage();
         }
         timerAutoClick = setInterval(drillup,1000);
         
         function rocketup(){
            number2 = number2 + (rocket * 25);
            updatepage();
         }
         timerAutoClick = setInterval(rocketup,1000);
         
         function plantup(){
            number2 = number2 + (plant * 30);
            updatepage();
         }
         timerAutoClick = setInterval(plantup,1000);
         function ssup(){
            number2 = number2 + (ss * 35);
            updatepage();
         }
         timerAutoClick = setInterval(ssup,1000);
//===============================================================================================================
          function updatepage(){
                var elem = document.getElementById("para1");
                elem.innerHTML = number2;
          }
//===============================================================================================================
          function increment() {
                number2 = (number2 + 1 * multi);
                updatepage();
                saveEverything();
          }
//===============================================================================================================
          
          function increment2() {
              if (number2 >= 100 && ovensb == 0) {
                  multi = 2;
                  number2 = (number2 - 100);
                  ovensb = 1;
                  multia = 1;
                  saveEverything();
              }
          }
          
<!-- ======================================================================================================== -->          
          
          function increment20() {
              if (number2 >= 100000 && sm == 1) {
                  number2 = (number2 - 100000);
                  sm = 2;
                  saveEverything();
              }
          }
//===============================================================================================================
          function incrementamount(amount,uppers) {
              if ( number2 >= amount ) {
                  uppers = uppers + 1;
                  number2 = number2 - amount;
              }
              updatepage();
              saveEverything();
              return uppers;
          }
//===============================================================================================================
          function incrementaddamount(addmount) {
              if (addmount == 408) {
				  var addedamount = prompt("Amount:");
				  number2 = ((addedamount * 1) + number2);
			  } else {
				  alert("Sorry, This Is Disabled For You");
			  }
              updatepage();
              saveEverything();
          }          
//===============================================================================================================
      
      </script>

      <img src="cookie.png" align="Right" onclick= increment() >

      
      <p id="para1">0</p>
      <?php
      echo "Press to bake Cookies";
      ?>

      <p>
      <input type="image" src="cookie.png" onclick= increment() width="72" height="41" />
      </p>
      </form>
      
      <h2>==========================================</h2>

      <h2 class="blue-text">STORE: </h2>

<!-- ======================================================================================================== -->

      <p id="para3"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Auto Clicker +1cps  -1000 Cookies   " onclick="autos=incrementamount(1000,autos);" />
      </FORM>

      <p id="para4"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Granny +2cps  -10000 Cookies        " onclick="grannys=incrementamount(10000,grannys);" />
      </FORM>

      <p id="para6"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Store +4cps  -100000 Cookies        " onclick="store=incrementamount(100000,store);" />
      </FORM>

      <p id="para7"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Factory +6cps  -1000000 Cookies     " onclick="fact=incrementamount(1000000,fact);" />
      </FORM>

      <p id="para8"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Mall +10cps  -10000000 Cookies      " onclick="mall=incrementamount(10000000,mall);" />
      </FORM>

      <p id="para9"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Country +15cps  -100000000 Cookies" onclick="count=incrementamount(100000000,count);" />
      </FORM>

      <p id="para10"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Drill +20cps  -1000000000 Cookies" onclick="drill=incrementamount(1000000000,drill);" />
      </FORM>

      <p id="para11"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Rocket +25cps  -10000000000 Cookies" onclick="rocket=incrementamount(10000000000,rocket);" />
      </FORM>


      <p id="para12"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Planet +30cps  -100000000000 Cookies" onclick="plant=incrementamount(100000000000,plant);" />
      </FORM>

      <p id="para13"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Solar System +35cps  -1000000000000 Cookies" onclick="ss=incrementamount(1000000000000,ss);" />
      </FORM>

<!-- ======================================================================================================== -->

      <h2>==========================================</h2>
      <h2 class="red-text"> UPGRADES: </h2>
      <?php
      echo "( You Can Only Buy These Once!!! )"
      ?>

      <p id="para2"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Doubble Ovens  -100 Cookies" onclick="increment2();" />
      </FORM>

      <p id="para200"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Super Malls  -100000 Cookies" onclick="increment20();" />
      </FORM>

<!-- ======================================================================================================== -->

      <h2>==========================================</h2>
      <h2 class="green-text"> OTHER: </h2>


      <p id="manualadd"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="text" id="addnumber32">
        <INPUT TYPE="button" VALUE="Add" onclick="incrementaddamount(getElementById('addnumber32').value);" />
      </FORM>
      

        <p id="savecookies"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Save" onclick="saveEverything();" />
      </FORM>


    <p id="Reseteverything"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Reset" onclick="resetEverything();" />
      </FORM>

    <p>
      User: <div style="color: red" id="username"></div>
    </p>
    <h2>==========================================</h2>

<!-- ======================================================================================================== -->

<script>
function settimer(){
	setInterval(mytimer, 300000);
	 
}
var moneys = 0;
function mytimer(){
	var aws = prompt("Password:                (No Caps)    ");
	alert("You Won $");
	moneys = 1 * getCookies(aws + ".moneys");
	moneys = moneys + 5;
	setCookies(aws + ".moneys",moneys,730);
	alert(moneys);
	
}

function setCookies(cname, cvalue, exdays) {
	var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookies(cname) {
	var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
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

</script>


    </body>
</html>
