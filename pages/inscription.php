
<?php
require_once('../db/db.php');
  $errors = [];
  if(isset($_POST['submit'])){
     $email = htmlspecialchars(trim($_POST['email']));
     $pseudo = htmlspecialchars(trim($_POST['pseudo']));
     $password = htmlspecialchars(trim($_POST['password']));
     $repeatpassword = htmlspecialchars(trim($_POST['repeatPassword']));
     $dateNaissance = htmlspecialchars(trim($_POST['dateNaissance']));
     $photoProfil = isset($_FILES['photoProfil']) ? $_FILES['photoProfil']: null;
     $description = htmlspecialchars(trim($_POST['description']));
     $sexe = htmlspecialchars(trim($_POST['sexe']));
     $patternEmail = '/^[\w\-\.]+[@]{1,1}[gmail|outlook|hotmail|yahoo]{1,7}[\.]{1,1}[com|fr|org]{2,3}$/i';
     $patternPassword = '/^[A-Z]{1,1}[\w]{4,}[\W]{1,1}[0-9]{4,}$/';
     if(!empty($email) && 
        !empty($pseudo) && 
        !empty($password) && 
        !empty($repeatpassword) && 
        !empty($dateNaissance) &&
        !empty($sexe)
        ){
         if(mb_strlen($pseudo) > 2){
          preg_match($patternEmail, $email, $matchEmail);
          if(!empty($matchEmail)){
           preg_match($patternPassword, $password, $matchPassword);
           if(!empty($matchPassword)){
            if($password === $repeatpassword){
              $query = $db->prepare("INSERT INTO users(email, pseudo, sexe, password, date_naissance) VALUES(:email, :pseudo, :sexe, :password, :date_naissance)"); //INSERT INTO users(email, pseudo, sexe, password, date_naissance) VALUES(:email, :pseudo, :sexe, :password, :date_naissance)
              $query->execute([
                ':email' => $email,
                ':pseudo' => $pseudo,
                ':sexe' => $sexe,
                ':password' => $password,
                ':date_naissance' => $dateNaissance
              ]);
            }else{
              $errors[] = "Les mdp ne sont pas identique";
            }
           }else{
             $errors[] = "Le mdp doit être d'une longueur de 11 caractère minimum et doit contenir une majuscule, au maxium un caractère spéciale et au minimum 4 chiffres";
           }
          }else{
            $errors[] = "Le format de l'email est incorrecte veuillez respecter la formalisation d'un email";
          }        
         }else{
           $errors[] = "Le pseudo doit être supérieur à 2 caractère";
         }
     }else{
       $errors[] = "Les champs suivants sont requis: email, pseudo, password repeatpassword dataNaissance";
     }
     var_dump($errors);
  }
?>
<?php include_once('../templates/header.php'); ?>

<div class="container">
    <form method="POST" id="inscription" class="form" enctype="multipart/form-data">
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
        <button name="submit" class="submit">S'inscrire</button>
    </form>
</div>

<?php include_once('../templates/footer.php'); ?>