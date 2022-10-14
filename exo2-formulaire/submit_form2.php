
    <table>
        
        <h1>Rappel de vos informations</h1>

        <p><b>mail : </b> : <?php echo $_POST["mail"]; ?></p>
        <p><b>Un champs cacher 🥸 </b> :</p>

    </table>


<?php

$mail = $_POST["mail"];


if (!empty($mail) && isset($mail)) {

    echo $_SERVER['HTTP_USER_AGENT'];

} else {

    header("Location:form2.html");
  
}


?>