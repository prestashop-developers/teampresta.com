<head>
    <title><?= htmlspecialchars($_SERVER['HTTP_HOST']) ?> - PrestaShop Laravel Wordpress themes - CMS ADDONS and PREMIUM SUPPORT, <?= htmlspecialchars($_SERVER['REQUEST_URI']) ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Premium themes, EXCLUSIVE ADDONS and Web SUPPORT - Prestashop Wordpress Laravel, <?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
    <meta name="keywords"
        content="wordpress themes, prestashop addons, wordpress plugins, wordpress responsive, theme builder, prestashop support, seo, prestashop custom,prestashop agency, prestashop email template; web hosting, prestashop vps, prestashop shared,prestashop premium themes, wordpress exclusive themes, <?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
    <meta name="author" content="<?= htmlspecialchars($_SERVER['HTTP_HOST']) ?>">
    <meta rel="canonical" href="https://<?= htmlspecialchars($_SERVER['HTTP_HOST']) ?><?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
    <link rel="shortcut icon" href="https://www.prestashop.com/images/favicon.ico?v=2" />
    <meta name="msvalidate.01" content="E7265AF0DB2F209D64054FD000956E34" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/css/base.css">
    <link rel="stylesheet" type="text/css" href="/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="/css/modules.css">
    <link rel="stylesheet" type="text/css" href="/css/widgets-styles.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--Plugins styles-->
    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">

    <!--Styles for RTL-->
    <!--<link rel="stylesheet" type="text/css" href="/css/rtl.css">-->

    <!--External fonts-->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <style type="text/css">
        #popup {
            position: fixed;
            margin: 0 auto;
            top: 51%;
            left: 20%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y1ZEJ8R55Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-Y1ZEJ8R55Z');
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            //select the POPUP FRAME and show it
            $("#popup").hide().fadeIn(5000);

            //close the POPUP if the button with id="close" is clicked
            $("#close").on("click", function (e) {
                e.preventDefault();
                $("#popup").fadeOut(1000);
            });
        });
    </script>

    <script>
        function showModal() {
            document.getElementById("pageContent").style.opacity = "0.5";
        }

        function overlay() {
            $("#loader").removeClass("off").addClass("on");
            $("#black_overlay_loader").removeClass("off").addClass("on");
        }
    </script>
</head>