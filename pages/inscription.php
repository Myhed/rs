
<?php

    // var_dump($_SERVER);
?>
<?php include_once('../templates/header.php'); ?>

<div class="container">
    <form action="#" method="POST" id="inscription" class="form" enctype="multipart/form-data">
        <label for="email">email</label>
        <input type="email" name="email">
        <label for="pseudo">pseudo</label>
        <input type="text" name="pseudo">
        <label for="password">mot de passe</label>
        <input type="password" name="password">
        <label for="password">Répétez mot de passe</label>
        <input type="password" name="repeatPassword">
        <label for="dateNaissance">date de naissance</label>
        <input type="date" name="dateNaissance">
        <label for="sexe">sexe</label>
        <select name="sexe">
            <option value="m">Homme</option>
            <option value="f">Femme</option>
            <option value="o">other</option>
        </select>
        <label for="photoProfil">photo de profil</label>
        <input type="file" name="photoProfil">
        <label for="description">description</label>
        <textarea name="description" cols="30" rows="10"></textarea>
        <button type="submit" class="submit">S'inscrire</button>
    </form>
</div>

<?php include_once('../templates/footer.php'); ?>