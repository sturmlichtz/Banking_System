
<html>
<title>Helene Bank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    #home_page{
        background-image: url('background.jpg');  
        height: 100%;
        width: 100%;
        max-width: 1500px;
    }
    #login{
    }
</style>
<body>
    <!-- Topbar -->
    <div class="w3-top">         
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <!-- Navbar (sit on top) -->
            <a href="#home" class="w3-bar-item w3-button"><b>HB</b></a>   
            <div class="w3-right">
                <span class="w3-button w3-padding-16 w3-right" onclick="sidebar_open()">
                    <i class="fa fa-bars"></i>
                </span> 
                <div class="w3-clear"></div>
            </div>          
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="#login" class="w3-bar-item w3-button">Login</a>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
        <a href="javascript:void(0)" onclick="sidebar_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
            <i class="fa fa-remove"></i>
        </a>
        <div class="w3-bar-block w3-center">
        <a href="#login" onclick="sidebar_close()" class="w3-bar-item w3-padding w3-button w3-text-grey w3-hover-black w3-hide-large">Login</a>    
        <a href="#" onclick="sidebar_close()" class="w3-bar-item w3-padding w3-button w3-text-grey w3-hover-black">About</a>
        <a href="#" onclick="sidebar_close()" class="w3-bar-item w3-padding w3-button w3-text-grey w3-hover-black">Contact</a>
        </div>
    </nav>

    <!-- !PAGE CONTENT! -->
    <div class="w3-content" id="home_page">
        <div class="w3-display-middle w3-margin-top w3-center" id="homepage_top_screen">
            <h1 class="w3-xxlarge w3-text-white">
                <span class="w3-padding w3-black w3-opacity-min"><b>HB</b></span> 
                <!--Hide on small screens -->
                <span class="w3-hide-small w3-text-black">HELENE</span>
                <span class="w3-hide-small w3-text-black">BANK</span>
            </h1>
        </div>
    </div>

    <!-- Login (Login Section) -->
    <div class="w3-content w3-container w3-padding-64" id="login">
        <p class="w3-center"><em>login</em></p>
        <div class="w3-col m8 w3-panel" >
            <form action="/action_page.php" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                    </div>
                    <div class="w3-half">
                        <button class="w3-button w3-black" type="submit">
                            <i class="fa fa-paper-plane"></i> Login
                        </button>
                    </div>
                </div>
            <input class="w3-input w3-border" type="text" placeholder="Password" required name="Password">
            </form>
            <a href="safe-banking-tips.html" class="w3-text-black">Safe Banking Tips
                <i class="fa fa-university">
                </i>
            </a>
        </div>
    </div>

    <script>
        // Open and close sidebar
        function sidebar_open() {
        document.getElementById("mySidebar").style.width = "100%";
        document.getElementById("mySidebar").style.display = "block";
        }
        function sidebar_close() {
        document.getElementById("mySidebar").style.display = "none";
        }
    </script>
</body>
</html>
