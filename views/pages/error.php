<!-- <title>PNC-NK/Goma | Erreur 404</title>
<a href="<?= URL ?>">
    <h1>PNC-NK/Goma</h1>
</a>-->


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CMS - Error page</title>
    <!-- INCONS -->
    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="views/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="views/admin/assets/css/main.css" rel="stylesheet" />
</head>

<body class="bg-silver-100">
    <div class="content">
        <h1 class="m-t-20">404</h1>
        <p class="error-title"><?= "$errorMessage" ?></p>
        <p class="m-b-20">Sorry, the page you were looking for could not found. Please check the URL and try your luck
            again.
            <a class="color-green" href="<?= URL ?>">Go to homepage</a>
        </p>
        <h2>CMS</h3>
    </div>
    <style>
    .content {
        max-width: 450px;
        margin: 0 auto;
        text-align: center;
    }

    .content h1 {
        font-size: 160px
    }

    .error-title {
        font-size: 22px;
        font-weight: 500;
        margin-top: 30px
    }
    </style>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="views/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="views/admin/assets/js/app.js" type="text/javascript"></script>
</body>

</html>