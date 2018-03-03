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
        <div class="col-lg-4">Footer 1</div>
        <div class="col-lg-4">footer 2</div>
        <div class="col-lg-4">footer 3</div>
    </div>
    <div class="row footer_line">
        <div class="col-lg-12">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aut, consequatur eum, nostrum iusto quos voluptatem doloremque cupiditate necessitatibus debitis doloribus numquam quidem dolore sit illum. A quae amet suscipit.</p>
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