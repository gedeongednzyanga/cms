<?php
if (!isset($_SESSION['user']) || !isset($_SESSION['compte']))
    echo '<script>window.location="login";</script>';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="views/pages/assets/images/favicon.png" />
    <!-- Styles -->
    <link href="views/admin/assets/repports/css/bootstrap.min.css" rel="stylesheet" />
    <link href="views/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="views/admin/assets/repports/css/cssFacture.css" />

    <title>Facture - <?= $_GET['number'] ?></title>
</head>

<body>
    <div class="my-5 page" size="A4" id="facture">
        <div class="p-5">
            <?php
            $_managerCommande = new ManagerCommande();
            foreach ($_managerCommande->getOneEntCommande($_GET['number']) as $commande) :
            ?>
                <section class="top-content bb d-flex justify-content-between">
                    <div class="logo">
                        <img src="views/admin/assets/repports/images/logo_f.png" alt="" class="img-fluid">
                    </div>
                    <div class="top-left">
                        <div class="graphic-path">
                            <p>Non payée</p>
                        </div>
                        <div class="position-relative">
                            <p>Facture N° : <span><?= $_GET['number'] ?></span></p>
                            <span id="fileName" style="display: none;"><?= 'Facture_' . $_GET['number'] ?></span>
                        </div>
                    </div>
                </section>

                <section class="store-user mt-4">
                    <div class="col-12">
                        <div class="row bb pb-3">
                            <div class="col-8">
                                <p>Supplier :</p>
                                <h2><b>CMS-Sarl</b></h2>
                                <p class="address"> RCCM : CD/GOM/RCCM/16-B-O467, <br> ID NAT : 5-490-N16077H ITPR N°
                                    600/ITPR/02, <br>RDC/Nord-Kivu/Goma </p>
                                <div class="txn mt-2">Ville de Goma/Nord-Kivu</div>
                            </div>
                            <div class="col-4">
                                <p>Client :</p>
                                <h2><?= $commande->getCustomer() ?></h2>
                                <p class="address"> 196 Av Bunia, <br> Quartier Kasika, <br>Commune de Goma </p>
                                <div class="txn mt-2">Ville de Goma/Nord-Kivu</div>
                            </div>
                        </div>

                        <div class="row extra-info pt-2">
                            <div class="col-8">
                                <p>Méthode de Payement : <span>Cash</span></p>
                                <p>Commande N° : <span>#868</span></p>
                            </div>
                            <div class="col-4">
                                <p>Date: <span><?= $commande->getDatecom() ?></span></p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
            <section class="product-area">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Désignation</td>
                            <td>Quantité</td>
                            <td>Prix U.</td>
                            <td>Prix Tot.</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sTotal = 0;
                        $tva = 0;
                        foreach ($_managerCommande->getOneCommande($_GET['number']) as $dtcom) :
                            $sTotal += round($dtcom->getQuantitecom() *  $dtcom->getPrixprod(), 2);
                        ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <!-- <img class="mr-3 img-fluid" src="mobile.jpg" alt="Product 01"> -->
                                        <div class="media-body">
                                            <p class="mt-0 title"><?= $dtcom->getDesignationprod() ?></p>
                                            <!-- Cras sit amet nibh libero, in gravida nulla. -->
                                        </div>
                                    </div>
                                </td>
                                <td><?= $dtcom->getQuantitecom() . '' . $dtcom->getDesignationu() ?></td>
                                <td><?= $dtcom->getPrixprod() ?>$</td>
                                <td><?= round($dtcom->getQuantitecom() *  $dtcom->getPrixprod(), 2)  ?>$</td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </section>

            <section class="balance-info">
                <div class="row">
                    <div class="col-8">
                        <p class="m-0 font-weight-bold"> Note : </p>
                        <p>Les marchandises vendues ne sont ni reprises ni échangées.</p>
                    </div>
                    <div class="col-4">
                        <table class="table border-0 table-hover">
                            <!-- <tr>
                                <td>Sous-Total :</td>
                                <td>800$</td>
                            </tr> -->
                            <!-- <tr>
                                <td>TVA (16%) : </td>
                                <td>25$</td>
                            </tr> -->
                            <!-- <tr>
                                <td>Deliver:</td>
                                <td>10$</td>
                            </tr> -->
                            <tfoot>
                                <tr>
                                    <td>Total à payer :</td>
                                    <td><?= $sTotal ?>$</td>
                                </tr>
                            </tfoot>
                        </table>

                        <!-- Signature -->
                        <div class="col-12" id="sceau">
                            <!-- <img src="signature.png" class="img-fluid" alt=""> -->
                            <p class="text-center m-0"> Sceau de l'entreprise </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Cart BG -->
            <img src="views/admin/assets/repports/images/cart.jpg" class="img-fluid cart-bg" alt="" style="margin-bottom: 5px;">

            <footer>
                <!--<p class="text-center">
                    View THis Invoice Online At - 
                </p> -->
                <div class="social pt-3">
                    <span class="pr-2">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Adresse : ville de Goma, Com. de Goma, Q. Lac Vert, Av. Kabande, </span>
                    </span>
                    <span class="pr-2">
                        <i class="fas fa-envelope"></i>
                        <span>E-mail : balufaustin@gmail.com, </span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook : CMS-SARL, </span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-github"></i>
                        <span>www.cms-sarl.com</span>
                    </span>
                    <a href="" id="print-btn" class="btn btn-primary btn-sm border shadow-none"><i class="fa fa-print"></i> Imprimer</a>
                </div>
            </footer>
        </div>
    </div>

    <script src="views/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="views/admin/assets/js/scripts/html2pdf.bundle.min.js" type="text/javascript"></script>
    <script>
        btn = document.getElementById("print-btn");
        nomFichier = document.getElementById("fileName").innerText;

        btn.addEventListener("click", (e) => {
            e.preventDefault();
            element = document.getElementById('facture');
            html2pdf(element, {
                margin: 0,
                filename: nomFichier + '.pdf',
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            });
        }, false);
    </script>
</body>

</html>