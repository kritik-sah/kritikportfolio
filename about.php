<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kritik Sah - Freelancer website developer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Freelancer, Web developer,website Developer" name="keywords">
    <meta content="Hello i'm Kritik Sah a digital entrepreneur good with tech and helping people to take their business online" name="description">

    <?php include './head.php'; ?>
</head>

<body>

    <?php include './header.php'; ?>
    

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">About</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="./">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">About</h6>
        </div>
    </div>
    <!-- Page Header Start -->



    <?php include './templates/about.php'; ?>
   
  
   <?php include './templates/experties.php'; ?>
   
   <?php include './templates/skills.php'; ?>


   <?php include './templates/testimonial.php'; ?>



    
    <?php include './footer.php'; ?>



    <script>
        var typed = new Typed('.typed', {
            strings: ['a Web Developer', 'a Graphic Designer','a Youtuber', 'Kritik Sah'],
            stringsElement:null,
            typeSpeed: 50,
        });

        $("#header-menu .navbar-nav .nav-link").removeClass('active');
        $("#header-menu .navbar-nav .nav-link.about").addClass('active');
		
    </script>


</body>

</html>