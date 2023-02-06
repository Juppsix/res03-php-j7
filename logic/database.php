<?php 
 $host= "db.3wa.io";
        $port = 3306;
        $dbname = "julienpostec_phpj7";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
        $user = "julienpostec";
        $password = "6e2ff913f30f66dac7b26c1ce4af9d2a"





function loadUser(string $email) : User {
    $db = new PDO(
    $connexionString,
    $user,
    $password);
    $query = $db->prepare('SELECT * FROM users WHERE email = :email');
    $parameters = [
    'email' => $email
    ];
    $query->execute($parameters);
    $userData= $query->fetch(PDO::FETCH_ASSOC);
    var_dump($userData);
    return new User("pipoudou", "pipoup", "poupi@pipou.com", "pilipoupou");
    /*$user = new User(string $firstName, string $lastName, string $email)*/
}
}



function saveUser(User $user) : User {
    $db = new PDO(
        $connexionString,
        $user,
        $password
    );
    $query = $db->prepare('INSERT INTO users VALUES (null, :value1, :value2, :value3, :value4)');
    $parameters = [
    'value1' => $user->getFirstName(),
    'value2' => $user->getLastName(),
    'value3' => $user->getEmail(),
    'value4' => $user->getPassword()
    ];
    $query->execute($parameters);
    
    $query = $db->prepare('SELECT * FROM `users` WHERE email=:value');
    $parameters = ['value' => $user->getEmail()];
    $query->execute($parameters);
    $loadUser = $query->fetch(PDO::FETCH_ASSOC);
    var_dump ($loadUser);
}
}
?>