<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PLACEHOLDER TITLE</title>

     <!--jQuery-->
     <script type="application/javascript" src="libs/js/jquery-3.6.0.min.js" defer></script>

    <!--Bootstrap-->
    <link rel="stylesheet" href="libs/css/bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="libs/js/bootstrap/bootstrap.min.js" defer></script>

    <!--JS and CSS-->
    <script type="application/javascript" src="libs/js/script.js" defer></script>
    <link rel="stylesheet" href="./libs/css/styles.css">

</head>
<body>
    <!--============ HEADER TO BE SPLIT OFF INTO .INCL FILE ============-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PLACEHOLDER LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--============ NAVIGATION TO POPULATE NAVITEMS BY FINDING PROCESSWIRE PAGES WITH MATCHING TEMPLATE ============-->
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!--============ HERO ============-->
        <section class="hero-section">
            <img src="https://i.imgur.com/3F7nRjd.jpeg" alt="Hero Image">
            <div class="hero-text-container">
                <img src="" alt="LOGO">
                <div>PLACEHOLDER TEXT</div>
            </div>
        </section>

        <!--============ INTRO ============-->
        <section>
            INTRO SECTION
        </section>

        <!--============ ABOUT ============-->
        <section>
            ABOUT SECTION
        </section>

        <!--============ SERVICES ============-->
        <section>
            SERVICES SECTION
        </section>

        <!--============ QUOTE ============-->
        <section>
            QUOTE SECTION
        </section>

        <!--============ CONTACT ============-->
        <section>
            CONTACT SECTION
        </section>
    </main>

    <!--============ FOOTER TO BE SPLIT OFF INTO .INCL FILE ============-->
    <footer>
        FOOTER
    </footer>

</body>
</html>