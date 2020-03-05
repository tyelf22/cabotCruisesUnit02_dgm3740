<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabot Cruises: <?php echo $title; ?></title>
    <link rel="stylesheet" href="./slick/slick.css">
    <link rel="stylesheet" href="./slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!-- header -->
        <header>
            <h1>Cabot<br><span>Cruises</span></h1>
            <img src="./images/newcabotCruisesLogo1x.png" srcset="./images/newcabotCruisesLogo1x.png 1x, ./images/newcabotCruisesLogo2x.png 2x, ./images/newcabotCruisesLogo3x.png 3x" alt="Cabot cruises logo">
            <a href="tel:555-555-5555">555-555-5555</a>
        </header>
        <!-- nav -->
        <nav class="clearfix">
            <button id="hamburgerBtn">&#9776;</button>
            <ul id="primaryNav" class="closed">
                <li id="homeNav" class="btn active"><a href="index.php">Home</a></li>
                <li id="cruisesNav" class="btn"><a href="cruises.php">Cruises</a></li>
                <li id="agentsNav" class="btn"><a href="agents.php">Agents</a>
                    <ul>
                        <li><a href="#">View Agents</a></li>
                        <li><a href="#">Contact Agents</a></li>
                    </ul>
                </li>
                <li id="bookNav" class="btn"><a href="book.php">Book</a></li>
            </ul>
            <form action="#">
                <input type="search" placeholder="Search..." name="search">
                <button id="search" type="submit"><i class="fa fa-search"></i></button>
            </form>

        </nav>