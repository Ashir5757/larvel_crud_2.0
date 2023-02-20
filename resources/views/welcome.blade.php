<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Curved Sidebar Menu</title>
    </head>
    <body>
        <nav class="nav">
            <div class="conatiner">
            <ul class="nav__list">
                <a href="#" class="nav__link active-link">
                    <i class="ri-dashboard-3-line"></i>

                    <span class="nav__name">Home</span>
                </a>

                <a href="#" class="nav__link">
                    <i class="ri-account-box-line"></i>

                    <span class="nav__name">Account</span>
                </a>

                <a href="#" class="nav__link">
                    <i class="ri-rocket-line"></i>

                    <span class="nav__name">Investments</span>
                </a>

                <a href="#" class="nav__link">
                    <i class="ri-file-list-3-line"></i>

                    <span class="nav__name">Files</span>
                </a>

                <a href="#" class="nav__link">
                    <i class="ri-settings-5-line"></i>

                    <span class="nav__name">Settings</span>
                </a>
            </ul>
            <!-- shapes -->
            <div class="nav__circle-1"></div>
            <div class="nav__circle-2"></div>

            <div class="nav__square-1"></div>
            <div class="nav__square-2"></div>
        </nav>

            @yield('content')

        </div>



        <script src="main.js"></script>
    </body>
</html>

