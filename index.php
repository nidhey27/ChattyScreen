
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
 <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-firestore.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAy_G16d1lMIqb7OuxAcdcI-ts9QhpMhRk",
    authDomain: "nidhey-jmesil.firebaseapp.com",
    databaseURL: "https://nidhey-jmesil.firebaseio.com",
    projectId: "nidhey-jmesil",
    storageBucket: "nidhey-jmesil.appspot.com",
    messagingSenderId: "449172935608",
    appId: "1:449172935608:web:b59033897d3ecfd48b754d"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
</head>
<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <?php include 'navbar.php'; ?>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="./assets/img/now-logo.png" alt="">
          <h1 class="h1-seo">Chatty Screen</h1>
          <h3>Powered By - Nyctophiliac Nid</h3>
        </div>
        <h6 class="category category-absolute">Designed by
          <a href="http://invisionapp.com/" target="_blank">
            <img src="./assets/img/invision-white-slim.png" class="invision-logo" />
          </a>. Coded by
          <a href="http://nyctophalicnid.tech/" target="_blank">
            Nyctophiliac Nid.
          </a>.</h6>
      </div>
    </div>
    <div class="main">
      <div  id = "reg_div" class="section section-signup" style="background-color: white">
        <div class="container">
          <center>
          <div id = "signup"  class="row" >
            <div  class="card card-signup" data-background-color="orange">
           
                <div class="card-header text-center">
                  <h3 class="card-title title-up">Register Here</h3>
                  <div id="div_msg"  class="alert alert-success" role="alert" style="border-radius: 12px; display: none ">
                    <div class="container">
                      
                      <strong id="msg">Successfully Registered!</strong> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
              
                <div class="card-body">
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input id = "firstName" type="text" class="form-control" placeholder="First Name...">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons text_caps-small"></i>
                      </span>
                    </div>
                    <input id = "lastName" type="text" placeholder="Last Name..." class="form-control" />
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input id = "email" type="text" class="form-control" placeholder="Email...">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons loader_gear"></i>
                      </span>
                    </div>
                    <input id = "password" type="password" class="form-control" placeholder="Password...">
                  </div>
                  <!-- If you want to add a checkbox to this form, uncomment this code -->
                  <!-- <div class="checkbox">
                <input id="checkboxSignup" type="checkbox">
                  <label for="checkboxSignup">
                  Unchecked
                  </label>
                </div> -->
                </div>
                <div class="card-footer text-center">
                  <a id ="register" href="#pablo" class="btn btn-neutral btn-round btn-lg">Register</a><br />
                  Already Registered...<strong> <a id = "show_login" href ="#login" > Login Here </a></strong>
                </div>

              </form>
            </div>
          </div>
          <center>
         <div id = "login" style="display: none"> <div  class="card card-signup" data-background-color="orange">
              <form class="form" method="" action="">
                <div class="card-header text-center">
                  <h3 class="card-title title-up">Login</h3>
                  
                </div>
                <div class="card-body">
                  
                  
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input id = "emailLogin" type="text" class="form-control" placeholder="Email...">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons loader_gear"></i>
                      </span>
                    </div>
                    <input id = "passwordLogin" type="password" class="form-control" placeholder="Password...">
                  </div>
                  <!-- If you want to add a checkbox to this form, uncomment this code -->
                  <!-- <div class="checkbox">
                <input id="checkboxSignup" type="checkbox">
                  <label for="checkboxSignup">
                  Unchecked
                  </label>
                </div> -->
                </div>
                <div class="card-footer text-center">
                  <a id ="login_button" href="#pablo" class="btn btn-neutral btn-round btn-lg">Login</a><br />
                  Not Yet Registered...<strong> <a id = "show_reg" href ="#reg" > Register Here </a></strong>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      
      <script type="text/javascript">
        $('#register').click(function() {
          var firstName = $("#firstName").val();
          var lastName = $("#lastName").val();
          var email = $("#email").val();
          var password = $("#password").val();
          console.log(firstName, lastName, email, password);
          firebase.auth().createUserWithEmailAndPassword(email, password).then(
          (response)=>{
            firebase.firestore().collection("users").doc(response.user.uid).set({
            firstName: firstName,
            lastName: lastName,
            email: email
          }).then(() => { 
            console.log("done")
          }).catch(function(err){
            console.log(err);
          })
          /*console.log(response.user.uid) ;
          response.user.updateProfile({
            displayName: firstName + " " + lastName
          }).then(() => {
            resolve(response.user);
          }).catch((error) => {
            reject(error);
          })*/
        }).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          console.log(errorCode, errorMessage);
          if(!errorCode){
            document.getElementById('div_msg').style.display = "block";
            $('#div_msg').addClass('alert-success');
            $('#msg').text("Successfully Register...!");
          }else{
            document.getElementById('div_msg').style.display = "block";
            $('#div_msg').addClass('alert-danger');
            $('#msg').text(errorMessage);
          }
          // ...
        });
        });
        $('#login_button').click(function() {
         
          var email = $("#emailLogin").val();
          var password = $("#passwordLogin").val();
          console.log(email, password);
        });
        $('#show_login').click(function () {
            document.getElementById('login').style.display = "block";
            document.getElementById('signup').style.display = "none";
        });
        $('#show_reg').click(function () {
            document.getElementById('login').style.display = "none";
            document.getElementById('signup').style.display = "block";
        });
      </script>
     
      
     
    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <!--  -->
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="" target="_blank">Nyctophiliac Nid</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>