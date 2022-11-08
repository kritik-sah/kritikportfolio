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
    
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3">Give a shot <span class="text-bordered">to your thoughts</span></h1>
                <p class="text-dark mb-4">We can help you to create a dream website for your amazing business. Mike drop ;p</p>
                <a href="https://wa.link/xpwssg" target="_blank" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Contact us</a>
            </div>
            <!-- <div class="col-lg-6 px-auto text-center">
                <img class="img-fluid mt-5 mt-lg-0 youtube-link" youtubeid="XADd2rJz31E" src="./img/service-header.png" alt="">
            </div> -->
        </div>
    </div>
    <!-- Header End -->
    

    <?php include './templates/experties.php'; ?>



    <?php include './templates/skills.php'; ?>
    <?php include './templates/projects.php'; ?>

    
    <?php include './footer.php'; ?>



    <script>

        $("#header-menu .navbar-nav .nav-link").removeClass('active');
        $("#header-menu .navbar-nav .nav-item.dropdown .nav-link.dropdown-toggle.services").addClass('active');
		$(".youtube-link").grtyoutube();
    </script>


</body>

</html>