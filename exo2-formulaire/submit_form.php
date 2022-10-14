

<h1>Message bien reçu !</h1>

<div class="card">

    <table>

        <h5>Rappel de vos informations :</h5>

        <p>First name : <?php echo $_POST["first_name"]; ?></p>
        <p>Last name : <?php echo $_POST["last_name"]; ?></p>
        <p>Address  : <?php echo $_POST["address"]; ?></p>
        <p>City : <?php echo $_POST["city"]; ?></p>
        <p>Post code : <?php echo $_POST["postcode"]; ?></p>

    </table>

</div>





<?php

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$address = $_POST["address"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];


if (!empty($first_name) && !empty($last_name) && !empty($last_name) 
    && !empty($address) && !empty($city) && !empty($postcode)) {


} else {
    

    echo "<script type=\"text/javascript\">alert('Le formulaire est incomplet'); document.location=window.history.back()  </script>";
    // header("Location:form.html");
  // && echo("<script> alert('Merci de remplir tous les champs'); </script>");
}


?>