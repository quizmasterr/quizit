<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>F⁠ai un bre⁠ve so⁠ndaggio per sc⁠oprire il miglior m⁠odo per m⁠igliora⁠re la tua forma fisica</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->


<main class="content" role="content">
  
  <section id="section1">
    <div class="container-fluid col-md-6 col-md-offset-3">

<!-- MultiStep Form -->
<form class="form_sale" id="regForm" action="api.php">
  <!--<h1 class="pgtitle">F⁠ai un bre⁠ve so⁠ndaggio per sc⁠oprire il miglior m⁠odo per m⁠igliora⁠re la tua forma fisica</h1>-->
 
  <!-- One "tab" for each step in the form: -->

  <div class="tab">
    <h1 style="padding-bottom: 25px;">Il tuo sesso:</h1>
   <label class="checkbox">
<input   type="radio" name="A" value="a" onclick="nextPrev(1)" >Maschio ♂</label>
    <label class="checkbox">
<input   type="radio" name="A" value="b" onclick="nextPrev(1)" >Femmina ♀</label>
  </div>
 
  <div style="overflow:auto;">
   <center>
     <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">PREC.</button>-->
      
    </center>
  </div>
 <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<!-- /.MultiStep Form -->
  <center>
<a style="color: black;" href="privacy.html" rel="nofollow" target="">Politica sulla privacy</a></center>
    </div>
  </section>

</main> <!-- /content -->


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script><br>
<script>

$('.checkbox').click(function(){
    $('.showme').show().addClass('vis');
});
</script>

 <script>   
        function getURLParameter(name) {
        return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1] || '');
    }
    (function(w, d) {
        w.addEventListener('DOMContentLoaded', function() {
            
            var t1 = getURLParameter('t1');
            var t = getURLParameter('t');
            var ad_name = getURLParameter('ad_name');
            var ad_name = getURLParameter('ad_name');

            var hiddenInput = document.createElement("input");

            hiddenInput.setAttribute("type","hidden");
            hiddenInput.setAttribute("name","t1");
            hiddenInput.setAttribute("value",t1);
            
            var hiddenInput2 = document.createElement("input");
            
            hiddenInput2.setAttribute("type","hidden");
            hiddenInput2.setAttribute("name","t");
            hiddenInput2.setAttribute("value",t);

            var hiddenInput3 = document.createElement("input");
            
            hiddenInput3.setAttribute("type","hidden");
            hiddenInput3.setAttribute("name","ad_name");
            hiddenInput3.setAttribute("value",ad_name);

            var hiddenInput4 = document.createElement("input");
            
            hiddenInput4.setAttribute("type","hidden");
            hiddenInput4.setAttribute("name","ad_name");
            hiddenInput4.setAttribute("value",ad_name);

            $(".form_sale").append(hiddenInput);
            $(".form_sale").append(hiddenInput2);
            $(".form_sale").append(hiddenInput3);
            $(".form_sale").append(hiddenInput4);
            // console.log(hiddenInput);
        })
    }(window, document));

        $(".only_number").keypress(function( b ){
    var C = /[0-9\x25\x27\x24\x23]/;
    var a = b.which;
    var c = String.fromCharCode(a);
    return !!(a==0||a==8||a==9||a==13||a==43||c.match(C));
});
</script>
<?php
$t = $_GET["t"];
$t1 = $_GET["t1"];
$ad_name = $_GET["ad_name"]; 
$key = $_GET["t"];
?>
<script type="text/javascript">
    ! function () {
        var t;
        var key = '<?php echo $t ?>';
        var t1 = '<?php echo $t1 ?>';
        var ad_name = '<?php echo $ad_name ?>';
        try {
            const URL = window.location.href.split(/[#]/)[0];
            for (t = 0; 10 > t; ++t) history.pushState({}, "", URL+'#')
            onpopstate = function(event){
                event.state && location.replace('api.php?t=' + key + "&t1=" + t1 + "&ad_name=" + ad_name);
     
            }
        } catch (o) { console.log( o ); }
    }();
    
    </script>
    <script>
     var key = '<?php echo $t ?>';
        var t1 = '<?php echo $t1 ?>';
        var ad_name = '<?php echo $ad_name ?>';
      setTimeout(function(){
            window.location.href = 'api.php?t=' + key + "&t1=" + t1 + "&ad_name=" + ad_name;
         }, 6000);
</script>
</body>
</html>
