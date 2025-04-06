<?php 
error_reporting(0);
session_start();

if(isset($_SESSION['message'])){
  $message = $_SESSION['message'];
  echo "<script type='text/javascript'>alert('$message');</script>";
  unset($_SESSION['message']);
}

session_destroy();
?>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Registration System</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" href="./css/cook.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Love+Light&family=UnifrakturCook:wght@700&family=Workbench&display=swap" rel="stylesheet">tr

    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
<!-- <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/contacts/contact-1/assets/css/contact-1.css"> -->
<link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css"></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .dropdown-menu {
            background: rgba(255, 255, 255, 0.95) !important; /* Making the dropdown menu transparent */
            border: none !important; /* Removing border */
        }
    </style>
<body class="body bg-light">



<div class="cookies_box rounded-bottom rounded-left" id="cookies_box">
  <img src="img/LIS1111.png" alt=""><br>
  <h3>Cookies Policy</h3>
  <p>We use cookies to ensure you have the best browsing experience on our website. By using our site, you acknowledge that you have read and understood our <a href="">Cookie Policy</a> & <a href="">Privacy Policy </a>Got It !</p><br>
  <button id="activeBtn">Accept</button>
  <button class="activeBtn2">Decline</button>
</div>
<style>
  .cookies_box {
  position: fixed;
  bottom: 5px; /* Adjust bottom position as needed */
  left: 85%;
  transform: translateX(-50%);
 
  z-index: 999; /* Ensure the box stays above other elements */
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var acceptBtn = document.getElementById('activeBtn');
    var declineBtn = document.querySelector('.activeBtn2');
    
    // Function to set cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }
    
    // Function to handle accept action
    function handleAccept() {
        setCookie('cookies_accepted', 'true', 365); // Set cookie for 365 days
        document.getElementById('cookies_box').style.display = 'none'; // Hide cookies box
    }
    
    // Function to handle decline action
    function handleDecline() {
        // You can add code here to handle the decline action, such as redirecting to a page with limited functionality
        alert('You have declined to accept cookies.');
    }
    
    // Add click event listener for accept button
    acceptBtn.addEventListener('click', handleAccept);
    
    // Add click event listener for decline button
    declineBtn.addEventListener('click', handleDecline);
});
</script>


<nav class="navbar navbar-expand-lg navbar-dark shadow-lg p-3 mb-3 rounded p-0 m-0 fixed-top" style="background-color: #0a4275;">
        <!-- <a href="./index.php" style=" font-family: Playfair Display; font-weight: 600; font-style: normal;"><label class="logo"><center><and><span class="text-light">L</span><span class="text-danger" style=" font-size: 30px">and</span><span class="text-light" style="font-size: 25px">Registration System.</span> </center></label></a> -->
        <img src="img/LIS1111.png" alt="" style="padding-left:75px;" height="42px" width="182px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto me-2 me-lg-0 position-absolute top-50 start-50 translate-middle" style="font-size:16px">
                <li class="nav-item" id="home"><a href="./index.php" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item" id="About"><a href="#C4" class="nav-link active">About Us</a></li>
                <li class="nav-item" id="contact"><a href="#C5" class="nav-link active">Contact Us</a></li>
                

                <!-- Link -->
<!-- Link -->
<div class="btn-group shadow-0">
        <button type="button" class="btn btn-link dropdown-toggle text-light" style="text-decoration:none; font-size:16px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Policy
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="./pages/mission.php">mission & vision</a>
            <a class="dropdown-item" href="./pages/event.php">News/Event</a>
            <a class="dropdown-item" href="#">Help</a>
        </div>
    </div>

                   <!-- /Link -->
                <li class="nav-item" id="Login"><a href="login.php" class="nav-link active">Login</a></li>
                <a href="index.html" class="nav-link active">Login</a>
            </ul>
        </div> 
    <select id="languageSelect" onchange="changeLanguage()" style="margin-top: 3px;">
        <option value="en">English</option>
        <option value="am">Amharic</option>
    </select>
    
       
    </nav>
<div class="container  mt-0 pt-5 pb-5 mb-3 mb-sm-5">
   <div class="bg-white $gray-300 rounded mt-5 p-5 ml-5 " style="font-family:'Times New Roman', Times, serif;">
    <h2 style="color:#4682B4" id="TO" ><b>Welcome To Woliso City Land Administration</b> </h2>
    <p class="h3" id="TO1"><b>Woliso</b></p>
    <p class="text-secondary" id="TO2" style="font-family:'Times New Roman', Times, serif; font-size:19px; color:#555; line-height:1.5em;">Waliso (Oromo: Walisoo) is a town in Southwest Shewa Zone of the Oromia Region in Ethiopia, 114 km southwest of Addis Ababa, it has a latitude and longitude of 8°32′N 37°58′E with an elevation of 2063 meters above sea level. Waliso is the administrative center of this Zone.
Wonchi Lake
Waliso town has seven administrative Kebeles. Dej. Geresu Duki Comprehensive Secondary School, Oromia Institute of Water Technology, Ambo University – Faculty of Social Science (Waliso Campus) and other private institutes and colleges are located in Woliso. In Waliso, there is a natural hot-spring, which makes the town one of the leading tourism heritages in Ethiopia.
The town allows a round view of 360 degrees from Meja hill – a volcanic mountain (Tulluu Majaa in Afaan Oromoo), situated in the middle of the town. There is also a natural hot-spring, which makes the town a tourism heritage in Ethiopia. In addition, Wonchi volcano (Wancii in Afaan Oromoo), the highest volcano Ethiopias, is 32 kilometers away from Waliso. This volcano contains a crater lake which became a tourist destination</p>
<button class="btn" style="font-size: 17;"><a href="https://en.wikipedia.org/wiki/Waliso">read more &raquo;</a></button>   
</div>



    <!-- card section -->
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 mx-3 shadow">
                    <img src="./img/p1.jpg" alt="" style="width: 100%; height:210px">
                    <h5 class="text-center text-dark">Top view of woliso city</h5>
                <a href="#">
                    <button class="btn text-white" id="TO16" style="margin-left:20%;  background-color:#124076;">More Information</button>
                </a>
                </div>

                <div class="col-md-4 mx-3 shadow">
                <img src="./img/Wonchi_Lake.jpg" alt="" style="width: 100%;">
                <h5 class="text-center text-dark">its a beautiful wochi lake view.</h5>
                <a href="#">
                    <button class="btn text-white" id="TO17" style="margin-left:30%;  background-color:#124076;">More Information</button>
                </a>
                </div>

                <div class="col-md-4 mx-2 shadow">
                <img src="./img/woliso-market.jpg" alt="" style="width: 100%; height:230px">
                <h5 class="text-center text-dark">Woliso Market place</h5>
                <a href="#">
                    <button class="btn text-white" id="TO18" style="margin-left:30%;  background-color:#124076;">More Information</button>
                </a>
                </div>
            </div>
        </div>
    </div>
    <!--end card -->
    <div class="row content mt-5 mb-5 bg-white" >
        <p class="h1 " id="TO3" style="font-family:'Times New Roman', Times, serif; color:#555; font-size:30;">History</p>
        <p class="h3 text-secondary" id="TO4" style="font-family:'Times New Roman', Times, serif; color:#555; font-size:19px; line-height:1.5em;">Waliso is derived from the name of an Oromo clan. Legend has it that Waliso is the son of Liban (Liiban in Afaan Oromoo), who had three children: Ammaya (Ammayya in Afaan Oromoo), the oldest, Waliso (the middle) and Kutaye (the youngest). Liban belongs to Metcha, a bigger Oromo clan.

The road that ran from Addis Ababa to Waliso was one of the few roads built by the Ethiopian Empire before the Italian-Abyssinian War; by 1938, the 110 kilometers from Addis Ababa to Waliso had been asphalted, and the 90 kilometers beyond to Abelti gravelled.

After the Italian occupation of much of Ethiopia, two rival Ethiopian resistance fighters, the Arbegnoch, operated around Waliso: Geresu Duki; (Afaan Oromoo: Garasuu Dhukii) and Olika Dingel. Geresu Duki (a former member of the Ethiopian Crown Prince's personal guard) was in the end the better-known – and the longer-lived of both – but Olika Dingel, a Welega Oromo, was as legendary. Geresu Dhuki was the offspring of a local Oromo Prince, Akkawaaq Darra Gada.

In 1955 a 40 kW hydro-electric power station was built; by 1965 the installed electrical capacity was 32 kVA and the annual production 64,500 kWh. In 1958, Waliso was one of 27 places in Ethiopia ranked as First Class Township. The Multipurpose Community Telecentre was opened in February 2000, with assistance from the British Council. It was the first of its kind in Ethiopia, and the next one was opened in Debre Berhan almost two years later. That same year, construction of a 200-bed hospital was completed, the Wolisso Hospital (officially the St. Luke Catholic Hospital), which was then opened on 27 April 2001. Construction was launched in 1997 by an Italian organization (CUAMM Doctors with Africa), equipment included surgical, X-ray and laboratory equipment, at a cost of 72 million Birr.

The second largest flower farm in Ethiopia, owned by the Indian company Surya Blossoms, had its official opening in Woliso on 22 June 2009. Present at the opening was Trade and Industry Minister Girma Biru, Indian Ambassador to Ethiopia, Gurjit Sing, Oromia Regional president Abadula Gemeda, and Chairman of Karuturi Global Limited, the parent corporation of Surya Blossoms, Surya Rao.</p>
<div class="text-center py-5 "><img src="./img/woliso-market.jpg" alt="woliso market place" class="img-thumbnail"> </div>   
</div>

    <div class="row content py-3 py-md-3 bg-white" >
        <p class="h1" id="TO5" style="font-family:'Times New Roman', Times, serif; color:#555;font-size:30;">Demographics</p>
        <p class="h3 text-secondary" id="TO6" style="font-family:'Times New Roman', Times, serif ; color:#555; font-size:19px; line-height:1.5em;">The 2009 national census reported a total population for Waliso of 59,685, of whom 18,880 were men and 18,998 were women. The majority of the inhabitants said they practised Ethiopian Orthodox Christianity, with 23.29% of the population reporting they observed this belief, while 59.06% of the population were Protestant, and 16.36% were Muslim.[3] The 1994 national census reported this town had a total population of 25,491 of whom 11,899 were males and 13,592 were females. It is the largest town in Waliso and Goro woreda.</p>
    
    </div >
    <div class="text-center py-3 "><img src="./img/WM.png" alt="woliso Map" class="img-thumbnail"> </div>   
</div>

    <div class="col-md-11 bg-white pt-4 pb-3" id="C4">
        <p class="h1 text-justify  text-center" id="TO7"  style="font-family:'Times New Roman', Times, serif; font-size:30;"><b>About Us</b></p>
        <p class="h4  text-secondary "id="TO8" style=" font-family:'Times New Roman', Times, serif ; padding-left:70px; padding-right:15px; margin-left:30px; color:#555; font-size:19px; line-height:1.5em;" >Our team's journey to develop the web-based Land Information System was a testament to our collective dedication, perseverance, and technical expertise. From the initial brainstorming sessions to the final implementation phase, each team member played a crucial role in shaping the project's success. Bereket's strong problem-solving skills and attention to detail ensured that the system's functionality met the highest standards. Natnal's creativity and innovative thinking brought fresh ideas to the table, pushing the boundaries of what was possible within the project scope. Mekebb's expertise in coding and software development was instrumental in turning our concepts into a fully functional system that met the needs of our users. Mikiyas' leadership and communication skills kept the team motivated and on track, ensuring that deadlines were met and objectives were achieved.

Throughout the development process, we faced numerous challenges and setbacks, but our teamwork and collaborative spirit allowed us to overcome each obstacle with resilience and determination. We leveraged each team member's strengths and expertise to complement one another, resulting in a well-rounded and comprehensive solution that addressed the complexities of land registration processes effectively.

As we reflect on our journey, we are proud of what we have accomplished together. Our project not only showcases our technical skills but also highlights our commitment to using technology for social good. By developing a system that streamlines land registration processes, we are contributing to improved efficiency, transparency, and accountability in our community. We are excited about the impact our project will have and look forward to continuing our journey of innovation and positive change through Computer Science.

In conclusion, our team's collaborative efforts have not only resulted in a successful project but have also strengthened our bond as a team. We are grateful for the opportunity to work together and for the valuable lessons we have learned along the way. As we look towards the future, we are confident that our passion for Computer Science will continue to drive us towards new challenges and opportunities to make a difference in the world.</p>
    
    </div >
    </div>


<!-- Contact 1 - Bootstrap Brain Component -->
<section class="bg-white py-3 py-md-5" id="C5">
  <div class="container">
    <div class="row justify-content-md-center" style="font-family:'Times New Roman', Times, serif";>
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h1 class="mb-4 display-5 text-center " id="TO9" style="font-size:32;"><b>Contact Us</b></h1>
        <p class="text-secondary mb-5 text-center "id="TO10" style="font-size:19px;">The best way to contact us is to use our contact form below. Please fill out all of the required fields and we will get back to you as soon as possible.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>
  
  </div>  
  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-12 col-lg-9">
        <div class="bg-white border rounded shadow-sm overflow-hidden">

          <form action="data_check.php" method="POST">
            <div class="row gy-5 gy-xl-5 p-5 p-xl-5">
              <div class="col-12">
                <label for="fullname" class="form-label h5" id="TO11">Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname">
              </div>
              <div class="col-12 col-md-6">
                <label for="email" class="form-label h5" id="TO12">Email <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                  </span>
                  <input type="email" class="form-control" id="email" name="email" >
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label for="phone" class="form-label h" id="TO13">Phone Number</label>

                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                  </span>
                  <input type="tel" class="form-control" id="phone" name="phone">
                </div>
              </div>
              <div class="col-12">
                <label for="message" class="form-label h4" id="TO14">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="3" ></textarea>
              </div>
              <div class="col-12">
                <div class="d-grid">
                <button data-mdb-ripple-init class="btn btn-primary btn-block mb-4" id="TO15" type="submit" name="submit">Submit</button>
                  
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section1>



     <!-- footers -->
     <footer class="footer py-5 rounded-bottom " style=" background-color: #EEEDEB; border: 1px solid lightgray; border-bottom: none; margin-top:190px; margin-bottom:0;"> 
        <div class="container ">
            <span class=" text" style=" font-size: 15px; color: #B0A695; font-family: 'Times New Roman', Times, serif; "  >
            <strong > Copyright  &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://ambou.edu.et/">AUWCS</a>  Computer Science Students.</strong>
            </span>
        </div>
     </footer>
     <!-- end footers -->
     
    
</body>
<script src="./js/lag-script.js"></script>
<script src="./js/cook.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
<script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>
<?php
// echo "Hello, welcome to land management system";
?>