<?php
class MySQL 
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'intranet';
    
    protected $connection;
  
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->connection;
    }
    public function getData($query)
    {        
        $result = $this->connection->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }
    public function execute($query) 
    {
        $result = $this->connection->query($query);
        
        if ($result == false) {
            return false;
        } else {
            return true;
        }        
    }
    
    public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->connection->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    public function check_empty($data)
    {
        $msg = "";
        foreach ($data as $a => $b) {
            if (empty(trim($b))) {
                $msg .= "le champ de $a est vide <br />";
            }
        } 
        return $msg;
    }
   
    public function is_email_valid($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {    
            return true;  
        }
        return false;
    
    }
    
//admin
    public function isAdminExist($username)
    {        
        return $this->connection->query("SELECT * from admin where email='".$username."'")->num_rows > 0;
    }

    public function isLoginCorrect($email,$password)
    {        
        return $this->connection->query("SELECT * from admin where email='$email' && `password`='$password'")->num_rows > 0;
    }
    public function getAdminId($email)
    {        
        return $this->connection->query("SELECT id FROM admin WHERE email = '".$email."'")->fetch_row()[0];
    }

//ens

        public function isEnsExist($username)
    {        
        return $this->connection->query("SELECT * from enseignant where email_en='".$username."'")->num_rows > 0;
    }

    public function isLoginEnsCorrect($email,$password)
    {        
        return $this->connection->query("SELECT * from enseignant where email_en='$email' && `password_en`='$password'")->num_rows > 0;
    }
    public function getEnsId($email)
    {        
        return $this->connection->query("SELECT id_en FROM enseignant WHERE email_en = '".$email."'")->fetch_row()[0];
    }

//etudiant

        public function isEtudiantExist($username)
    {        
        return $this->connection->query("SELECT * from etudiant where cin='".$username."'")->num_rows > 0;
    }

    public function isLoginEtudiantCorrect($email,$password)
    {        
        return $this->connection->query("SELECT * from etudiant where cin='$email' && `pass_et`='$password'")->num_rows > 0;
    }
    public function getEtudiantId($email)
    {        
        return $this->connection->query("SELECT cin FROM etudiant WHERE cin = '".$email."'")->fetch_row()[0];
    }

    public function is_cin_valid($email)
    {
        if (filter_var($email, FILTER_VALIDATE_INT)) {    
            return true;  
        }
        return false;
    
    }
    
















}
?>