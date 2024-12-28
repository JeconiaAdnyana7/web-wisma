<?php

include 'config.php';
session_start();


// page redirect

$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Wisma Ihsan Soccer</title>

    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">

    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
    </style>

</head>

<body>
  <nav>
    <div class="logo">
      <img class="homelystaylogo" src="./image/logo/homestaylogo.png" alt="logo">
      <p>Wisma Ihsan Soccer</p>
    </div>
    <ul>
      <li><a href="#firstsection">Home</a></li>
      <li><a href="#secondsection">Rooms</a></li>
      <li><a href="#contact">Contact</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="./picture/aa.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./picture/b.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./picture/c.jpg">
        </div>
        <div class="welcomeline">
          <div class="welcome">WELCOME TO</div>
          <div class="hotel-name">WISMA IHSAN SOCCER</div>
        </div>


      <!-- bookbox -->

      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
    <div class="head">
        <h3>RESERVATION</h3>
        <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
    </div>
    <div class="middle">
        <div class="guestinfo">
            <h4>Guest information</h4>
            <input type="text" name="Name" placeholder="Enter Full name">
            <input type="email" name="Email" placeholder="Enter Email">

            <?php
            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
            ?>

            <select name="Country" class="selectinput">
                <option value selected>Select your country</option>
                <?php
                foreach ($countries as $key => $value):
                    echo '<option value="' . $value . '">' . $value . '</option>';
                endforeach;
                ?>
            </select>
            <input type="text" name="Phone" placeholder="Enter Phone">
        </div>

        <div class="line"></div>

        <div class="reservationinfo">
            <h4>Reservation information</h4>
            <select name="RoomType" class="selectinput">
                <option value selected>Type Of Room</option>
                <option value="Standart Room">STANDART ROOM</option>
                <option value="Superior Room">SUPERIOR ROOM</option>
                <option value="Deluxe Room">DELUXE ROOM</option>
            </select>
            <select name="Bed" class="selectinput">
                <option value selected>Bedding Type</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Triple">Triple</option>
                <option value="Quad">Quad</option>
            </select>
            <select name="NoofRoom" class="selectinput">
                <option value selected>No of Room</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <select name="Meal" class="selectinput">
                <option value selected>Meal</option>
                <option value="Room only">Room only</option>
                <option value="Breakfast">Breakfast</option>
                <option value="Half Board">Half Board</option>
                <option value="Full Board">Full Board</option>
            </select>
            <div class="datesection">
                <span>
                    <label for="cin"> Check-In</label>
                    <input name="cin" type="date">
                </span>
                <span>
                    <label for="cin"> Check-Out</label>
                    <input name="cout" type="date">
                </span>
            </div>
        </div>
    </div>
    <div class="footer">
        <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
       
    </div>
</form>


        <!-- ==== room book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);

                    
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                }); 
                        </script>";
                        }
                }
            }
            ?>
          </div>

    </div>
  </section>
    
  <section id="secondsection"> 
  
    <div class="ourroom">
      <h1 class="head"> Rooms </h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Standart Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-broom"></i>
              <i class="fa-solid fa-snowflake"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>

        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Superior Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-utensils"></i>
              <i class="fa-solid fa-broom"></i>
              <i class="fa-solid fa-wind"></i>
              <i class="fa-solid fa-snowflake"></i>
              <i class="fa-solid fa-fire-flame-curved"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>

        <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Deluxe Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-utensils"></i>
              <i class="fa-solid fa-broom"></i>
              <i class="fa-solid fa-wind"></i>
              <i class="fa-solid fa-snowflake"></i>
              <i class="fa-solid fa-fire-flame-curved"></i>
              <i class="fa-solid fa-bath"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
  
      <button class="btn btn-primary roomavailabilitycheck">
  <a href="checkroomavailability.php">Check Room Availability </a>
</button>

    </div>

    
  </section>
 

  <h1 class="head"> Select Your Plan </h1>
		<div class="price-row">
			<div class="price-col">
      <p>Standart Room</p>
				<h3>300K <span>/night</span></h3>
				<ul>
					<li>Wifi Access</li>
					<li>Room Service</li>
					<li>Air Conditioner</li>
				</ul>
				<button onclick="openbookbox()">Book</button>
			</div>
			<div class="price-col">
				<p>Superior Room</p>
				<h3>400K <span>/night</span></h3>
				<ul>
					<li>Wifi Access</li>
					<li>Eat/Drink</li>
					<li>Room Service</li>
          <li>Air Conditioner</li>
          <li>Water Heater</li>
				</ul>
        <button onclick="openbookbox()">Book</button>
			</div>
			<div class="price-col">
				<p>Deluxe Room</p>
				<h3>450K <span>/night</span></h3>
				<ul>
          <li>Wifi Access</li>
					<li>Eat/Drink</li>
					<li>Room Service</li>
          <li>Air Conditioner</li>
          <li>Water Heater</li>
          <li>Bathtub</li>
				</ul>

				<button onclick="openbookbox()">Book</button>
			</div>
		</div>
    <br>

    <section id="contact">
    <h4 class="contactHeader">contact us</h4>
    <div class="contactForm">
        <form action="#">
         <h1 class="sub-heading">Need Support !</h1>
         <p class="para para2">Don’t hesitate to contact us with any request, large or small. There’s always a member of staff ready to help. Rest assured that whatever your need or whim, you can count on service that’s quick, efficient, and always delivered with a smile.</p>
         <input type="text" class="input" placeholder="your name">
         <input type="text" class="input" placeholder="your email">
         <input type="text" class="input" placeholder="your Subject">
         <textarea class="input" cols="30" rows="5" placeholder="Your message..."></textarea>
         <input type="submit" class="input submit" value="Send Message">
        </form>

        <div class="map-container">
            <div class="map">
                <iframe src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;q=Wai%20Mhorock,%20Kec.%20Abepura,%20Kota%20Jayapura,%20Papua%2099225+(Wisma%20Ihsan%20Soccer)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="contactMethod">
        <div class="method">
            <i class="fa-solid fa-location-dot contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Location</h1>
                <p class="para">Jl. Kotaraja grand distrik abepura kota jayapura</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-envelope contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Email</h1>
                <p class="para">acoswis@gmail.com</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-phone contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Phone</h1>
                <p class="para">+62 812-4809-2716</p>
            </article>
        </div>
    </div>
   </section>

    <br>
    <br>
    <br>
  <section id="allright">
    <div class="createdby">
      <h5>© 2025 Wisma Ihsan Soccer. All rights reserved.</h5>
    </div>
  </section>




</body>

<script>

    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>