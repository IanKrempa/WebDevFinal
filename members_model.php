<?php
include_once "credentials_model.php";

    class Members{

        // Connection
        private $conn;
		
        // Table
        private $db_table = "members";

        // Columns
        private $memberID;
        public $firstname;
        public $lastname;
        public $email;
        public $password;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        
        // check for email registered before 
        
        public function registerMember($firstname, $lastname, $email, $password) {
        	
        	$sqlQuery = "INSERT INTO " .
                        $this->db_table .
                        " SET " . " 
                        firstname = :firstname,
                        lastname = :lastname";
                        
            $stmt = $this->conn->prepare($sqlQuery);
            
            $this->firstname = htmlspecialchars(strip_tags($firstname));
            $this->lastname = htmlspecialchars(strip_tags($lastname));
            $this->email = htmlspecialchars(strip_tags($email));
            $this->password = htmlspecialchars(strip_tags($password));
            
            $stmt->bindParam(":firstname", $this->firstname);
            $stmt->bindParam(":lastname", $this->lastname);

     
             if($stmt->execute()){
               $this->Members_memberID = $this->conn->lastInsertId();
               return $this->addMemberCredentials();
            }
            return false;
    
        }
        
        private function addMemberCredentials () {
      
    		$credentialsModel = new Credentials($this->conn);
    		$result = $credentialsModel->addCredential($this->email, $this->password, $this->Members_memberID);
        	
        	return $result;
        }
        
        function getMemberName($memberID) {
           $firstname = "????";
           
           $sqlQuery = "SELECT name FROM " . $this->db_table . " WHERE memberID=:id";
            $stmt = $this->conn->prepare($sqlQuery);
            $this->id = $memberID;
            
            $stmt->bindParam(":memberID", $this->memberID);
            
            $stmt->execute();
            
            
            if ($stmt->rowCount() > 0) {
            	$result = $stmt->fetchAll();
            	// var_dump($result);
            	$firstname = $result[0]["firstname"];
            	
            }
            
            
           return $firstname;
           
        }
        /*
        function updateProfile($photographerID, $name) {
           $result = false;
           
           $sqlQuery = "UPDATE " . $this->db_table . " SET name=:name WHERE photographerID=:id";
            $stmt = $this->conn->prepare($sqlQuery);
            $this->id = $photographerID;
            $this->name = $name;
            
            $stmt->bindParam(":id", $this->id);
            $stmt->bindParam(":name", $this->name);
            
            $stmt->execute();
            
            
            if ($stmt->rowCount() > 0) {
            	$result = true;
            	
            }
            
            
           return $result;
           
        }
        */
      }  
?>
