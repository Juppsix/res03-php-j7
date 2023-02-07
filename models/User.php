<?php class User {

private ?int $id;
 private string $first_name;
 private string $last_name;
 private string $email;
 private string $password;
 
   public function __construct(string $first_name, string $last_name, string $email, string $password)
    {
        $this->id = null;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }
   
    
    public function getid() : int
    {
     return $this->id;
    }
    
    public function setid(int $id) : void
    {
    $this->id = $id;
    }
    
    public function getfirst_name() : string
    {
        return $this->first_name;
    }

    
    public function setfirst_name(string $firstName) : void
    {
        $this->first_name = $first_name;
    }
    
    public function getlast_name() : string
    {
       return $this->last_name;
    }
 
  public function setlast_name(string $last_name) : void
    {
        $this->lastName = $last_name;
    }
    
    public function getemail() : string
    {
       return $this->email;
    }
 
  public function setemail(string $email) : void
    {
        $this->email = $email;
    }
    
    public function getpassword() : string
    {
       return $this->password;
    }
 
  public function setpassword(string $password) : void
    {
        $this->password = $password;
    }
    
}


?>