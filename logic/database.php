<?php 
 $host= "db.3wa.io";
        $port = 3306;
        $dbname = "julienpostec_phpj7";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
        $user = "julienpostec";
        $password = "6e2ff913f30f66dac7b26c1ce4af9d2a"; 





function loadUser(string $email) : User {

    $host= "db.3wa.io";
        $port = 3306;
        $dbname = "julienpostec_phpj7";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
        $username = "julienpostec";
        $password = "6e2ff913f30f66dac7b26c1ce4af9d2a"; 
        
    $db = new PDO(
    $connexionString,
    $username,
    $password);
    $query = $db->prepare('SELECT * FROM users WHERE email = :email');
    $parameters = [
    'email' => $email
    ];
    $query->execute($parameters);
    $userData= $query->fetch(PDO::FETCH_ASSOC);
    echo "\$userData dans loadUser";
    var_dump($userData); // les infos de la db elles sont là dans $userData
    $user = new User($userData["first_name"], $userData["last_name"], $userData["email"], $userData["password"]);
    return $user; // attention ça c'est un user "en dur" ça ne retourne rien de la base de données
    /*$user = new User(string $firstName, string $lastName, string $email)*/
}




function saveUser(User $user) : User {
  // faire un insert
  // récupérer mon user fraichement inséré
  // retourner mon $user
  $host= "db.3wa.io";
        $port = 3306;
        $dbname = "julienpostec_phpj7";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
        $username = "julienpostec";
        $password = "6e2ff913f30f66dac7b26c1ce4af9d2a"; 
        
  $db = new PDO(
      $connexionString,
      $username,
      $password);
     $query = $db->prepare('INSERT INTO users VALUES (null, :firstName, :lastName, :email, :password)');
      $parameters = [
          'firstName' => $user->getfirst_name(),
          'lastName' => $user->getlast_name(),
          'email' => $user->getemail(),
          'password'=> $user->getpassword()
          ];
          $query->execute($parameters);
          // je le récupère depuis la db comme ça il a son id
    $userWithId = loadUser($user->getemail());
    return $userWithId;
}
?>