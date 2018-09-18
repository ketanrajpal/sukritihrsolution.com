<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="../css/default.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/jquery.queryloader2.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>
<script src="../js/jquery.quovolver.min.js"></script>
<script>
   
  $(function(){
 var shrinkHeader = 10;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('#header-two-outer').addClass('background');
        }
        else {
            $('#header-two-outer').removeClass('background');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});  </script>