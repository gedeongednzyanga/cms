<?php
if (!isset($_SESSION['user']) || !isset($_SESSION['compte']))
    echo '<script>window.location="login";</script>';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="description" content="Construction Metal Service">
    <title>CMS - Locked Screen</title>
    <!-- INCONS -->
    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="views/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="views/admin/assets/css/main.css" rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="dashboard">CMS-Sarl</a>
        </div>
        <div>
            <div class="text-center m-b-20">
                <img class="img-circle" src="views/admin/assets/img/avatar00.png" width="110px" />
            </div>
            <form class="text-center" id="lock-form" action="javascript:;" method="post">
                <h5 class="font-strong"><?= $_SESSION['user'] ?></h5>
                <p class="font-13">Ce compte n'est pas autorisé à accéder à cette page. Veuillez contacter l'administrateur.</p>
                <div class="form-group">
                    <!-- <input class="form-control" type="password" name="password" placeholder="Entrer le mot de passe"> -->
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block" id="btn-back" type="button"> <i class="fa fa-angle-left m-r-5"></i> Go back to dashboard</button>
                </div>
            </form>
        </div>
    </div>
    <style>
        .brand {
            font-size: 44px;
            text-align: center;
            margin: 40px 0;
        }

        .content {
            max-width: 300px;
            margin: 0 auto;
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
    <!-- PAGE LEVEL PLUGINS -->
    <script src="views/admin/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript">
    </script>
    <!-- CORE SCRIPTS-->
    <script src="views/admin/assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {

            $('#btn-back').click(() => {
                window.location = 'dashboard';
            });

            $('#lock-form').validate({
                errorClass: "help-block",
                rules: {
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
                errorPlacement: function(e, r) {
                    var i = $(r).parents(".input-group, .check-list");
                    i.length ? i.after(e) : r.after(e)
                },
            });
        });
    </script>
</body>

</html>