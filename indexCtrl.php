<?php

/* SI firstname existe ,si il n est pas vide,et que la regex est ok,on crée la variable avec sa concatenation.
  Si firstname exite et la regex n 'est pas ok,on crée un message d erreur.
  SI le champs et vide on crée un autre message d erreur.' */
if (isset($_POST['firstname']))
{
    if (!empty($_POST['firstname']))
    {
        if (preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_POST['firstname']))
        {
            $firstname = ' et votre prénom est : ' . htmlspecialchars($_POST['firstname']);
        }
        else
        {
            $firstnameError1 = 'Veuillez rentrer un prénom valide.';
        }
    }
    else
    {
        $firstnameError2 = 'Veuillez entrer votre prénom.';
    }
}
if (isset($_POST['lastname']))
{
    if (!empty($_POST['lastname']))
    {
        if (preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_POST['lastname']))
        {
            $lastname = ' votre nom est: ' . htmlspecialchars($_POST['lastname']);
        }
        else
        {
            $lastnameError1 = 'Veuillez rentrer un nom valide.';
        }
    }
    else
    {
        $lastnameError2 = 'Veuillez entrer votre nom.';
    }
}
if (isset($_POST['civility']) && !empty($_POST['civility']))
{
    $civility = ' Vous êtes : ' . htmlspecialchars($_POST['civility']);
}
else
{
    $civilityError = 'merci de choisir un genre!';
}
?>
