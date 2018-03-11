<!-- footer -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <h1 class='text-center'>Brands</h1>
        </div>
        <div class="col-lg-12">
        <div class="owl-carousel" id="brands">
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        <div><i class="fa fa-html5 fa-4x"></i></div>
        </div>
        </div>
    </div>
</div>
<footer class='container-fluid'> <!-- Black Footer -->
    <div class="row footer">
        <div class="col-lg-6">
            <h3 class='footer_head'>Follow Us</h3>
            <div class='col-lg-12'> 
                <ul class='footer_social_icons'>
                    <li><a href="#"><i class='fa fa-facebook-square fa-2x'></i></a></li>
                    <li><a href="#"><i class='fa fa-twitter-square fa-2x'></i></a></li>
                    <li><a href="#"><i class='fa fa-instagram fa-2x'></i></a></li>
                    <li><a href="#"><i class='fa fa-youtube fa-2x'></i></a></li>
                    <li><a href="#"><i class='fa fa-linkedin fa-2x'></i></a></li>
                    <li><a href="#"><i class='fa fa-google-plus fa-2x'></i></a></li>
                    <li><a href="#"><i class='fa fa-dribbble fa-2x'></i></a></li>
                    <li><a href="#"><i class='fa fa-pinterest fa-2x'></i></a></li>

                </ul>
            </div>
            <div class='col-lg-12 twitter'>
                                      <a class="twitter-timeline"  href="https://twitter.com/SamirEltabbal" data-widget-id="297103761019650049">Tweets by @SamirEltabbal</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
            </div>
        </div>
        <div class="col-lg-6">
            <div class='row'>
                <div class='col-lg-4'>
                    <h3 class='footer_head'>Shop</h3>
                    <ul class='menu_bottom'>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Aliens</a></li>
                        <li><a href="#">Robots</a></li>
                        <li><a href="#">Unspecified</a></li>

                    </ul>
                </div>
                <div class='col-lg-4'>
<h3 class='footer_head'>Shop</h3>
                    <ul class='menu_bottom'>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Aliens</a></li>
                        <li><a href="#">Robots</a></li>
                        <li><a href="#">Unspecified</a></li>

                    </ul>     
                               </div>
                <div class='col-lg-4'>
                    <h3 class='footer_head'>Contact US</h3>
                    <ul class='menu_bottom'>
                        <li>+201009229237</li>
                        <li>+201222365552</li>
                        <li>12 , 6th October St.</li>
                        <li>al Mehalla elkubra</li>
                        <li>Egypt</li>
                        

                    </ul>
                                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p class='text-center copyrights'>&copy; 2018 , All rights reserved to shoppy 
                <br> Made With <i class="fa fa-heart footer_symbol"></i> By <a href="#" class='footer_link'>SmStudio</a>
            </p>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
        $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();
    });
    $('#featured').owlCarousel({
    loop:false,
    margin:10,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
$('#brands').owlCarousel({
    loop:true,
    margin:10,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:9
        }
    }
})
    </script>
  </body>
</html>