
<?php


if (isset($_FILES['zip']) AND $_FILES['zip']['error'] == 0) {


            $infosfichier = pathinfo($_FILES['zip']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = 'zip';

            if ($extension_upload, $extensions_autorisees) {

                move_uploaded_file($_FILES['zip']['tmp_name'],
                'uploads/' . basename($_FILES['zip']['name']));

                echo "L'envoi a bien été effectué !";

            } else {

                echo "echec";
            }
    }

?>