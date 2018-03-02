<!-- footer -->

<footer class='container-fluid'>
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
    $('.owl-carousel').owlCarousel({
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
    </script>
  </body>
</html>