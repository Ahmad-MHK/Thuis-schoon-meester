
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="./header.css">
        <link rel="stylesheet" href="/Main.css">

    </head>

    <div id="header">
    <div class="logo">
        <a href="/">
            <!-- <img src="/2.jpg" alt="ThuisImage" class="logo-img"> -->
            Thuis schoon meester
        </a>
    </div>
    <nav>
        <!-- <form class="search" action="search.php">
        <input name="q" placeholder="Search..." type="search"> -->
        </form>
        <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="">About</a>
            <ul class="mega-dropdown">
            <li class="row">
                <ul class="mega-col">
                <li><a href="#">About</a></li>
                <!-- <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li> -->
                </ul>
                <ul class="mega-col">
                <!-- <li><a href="#">Help</a></li> -->
                <li><a href="/contact">Contact</a></li>
                <!-- <li><a href="#">Services</a></li> -->
                </ul>
                <ul class="mega-col">
                <li><a href="#">Pricing</a></li>
                <!-- <li><a href="#">404 Error</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">Author Page</a></li> -->
                </ul>
                <ul class="mega-col">
                <li><a href="#">Help</a></li>
                <!-- <li><a href="#">Right Column</a></li>
                <li><a href="#">Left Column</a></li>
                <li><a href="#">Maintenance</a></li> -->
                </ul>
            </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="/contact">Contact</a>
        </li>
        {{-- <li>
            <a href="">Portfolio</a>
        </li> --}}
        <!-- <li>
            <a href="">Team</a>
        </li> -->
        </ul>
    </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Toggle mobile menu
        $('#header').prepend('<div id="menu-icon"><span class="first"></span><span class="second"></span><span class="third"></span></div>');

        $("#menu-icon").on("click", function(){
            $("nav").slideToggle();
            $(this).toggleClass("active");
        });
    </script>
