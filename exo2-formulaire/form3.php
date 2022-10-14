<!-- Exercice 4

- Créer un formulaire demandant la saisie d’un prix HT et d’un taux de TVA. 


- Le script PHP affiche le montant de la TVA et le prix TTC 
dans deux zones de texte sur la même page que le formulaire.


- Le formulaire maintient les données saisies même après validation du formulaire  -->



<h2>Prix HT et Taux de TVA</h2>


<form method="post" action="form3.php">

    <label for="prix">Prix HT : </label>
    <input type="number" name="prix" value="<?php if (isset($_POST['prix'])){echo $_POST['prix'];} ?>" />   

    <label for="prix">Taux de TVA : </label>
    <input type="number" name="tva" value="<?php if (isset($_POST['tva'])){echo $_POST['tva'];} ?>" />   

    <input type="submit" value="envoyer" />

</form> 





<div class="card">

    <table>
        
        <h1>Rappel de vos informations</h1>

        <p><b>Prix HT : </b> <?php echo $_POST['prix']; ?> </p>
        <p><b>Taux de TVA : </b> <?php echo $_POST['tva']; ?>  </p>
            
    </table>

</div>

