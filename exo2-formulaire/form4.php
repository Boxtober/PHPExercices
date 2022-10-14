<!-- Exercice 5

- Créer un formulaire n’effectuant que le transfert de fichiers ZIP 
    et d’une taille limitée à 1 Mo. 
- Le script affiche le nom du fichier ainsi que la taille du fichier 
    transféré et un texte confirmant la réception.  -->


<h1> Formulaire d'envoi de fichier :<h1 />

<form action="submit_form4.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />

    <input type="file" name="zip" /><br /><br />

    <input type="submit" value="Envoyer le fichier" />

</form>