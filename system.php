<?php
	class System{
        private static $system;

		public $dbservername;
		private $dbusername;
		private $dbpassword;
		private $dbname;
		private $UNSPECIFIED;
		private $UserEmail;
		private $UserPassword;
		private $UserName;
		private $UserDesignation;
		private $UserRoll;
		private $dbconn;
		public function initialize(){
			$this->dbservername = "localhost";
			$this->dbusername = "root";
			$this->dbpassword = "";
			$this->dbname = "laundryservice";
			$this->UNSPECIFIED = "unspecified";
			$this->UserEmail = $this->UNSPECIFIED;
			$this->UserPassword = $this->UNSPECIFIED;
			$this->UserName = $this->UNSPECIFIED;
		}
        // Constructor and singleton setup
		private final function __construct() {
			if(session_status() == PHP_SESSION_NONE){
			    session_start();
			}
			$this->initialize();
		}
        public static function getSystem(){
            if(!isset(self::$system)){
                self::$system = new System();
            }
            return self::$system;
        }
        // Database connections
		public function connectWithDatabase(){
			$this->dbconn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
			if($this->dbconn->connect_error) {
			    echo "Connection Failed ";
			    die("Connection failed: " . $dbconn->connect_error);
			}
		}
		public function disconnectWithDatabase(){
			$this->dbconn->close();
		}
        public function isOkayLoginCredential($email, $password) {
            $sql = "SELECT * FROM admindetails WHERE admin_email = '$email' and admin_password = '$password'";
            if($this->isDataexists($sql)) return true;
            $sql = "SELECT * FROM customers WHERE customer_email = '$email' and customer_password = '$password'";
            if($this->isDataexists($sql)) return true;
            return false;
        }
        public function isAdminCredential($email, $password) {
            $sql = "SELECT * FROM admindetails WHERE admin_email = '$email' and admin_password = '$password'";
            if($this->isDataexists($sql)) return true;
            return false;
        }
        public function login(){
            
        }
        public function isDataexists($sql){
			$this->connectWithDatabase();
			$result = $this->dbconn->query($sql);
			$this->disconnectWithDatabase();
			if($result->num_rows > 0) return TRUE;
			else return FALSE;
		}
        public function isUserexists($email){
			$sql = "SELECT * FROM customers WHERE customer_email = '$email'";
			if($this->isDataexists($sql)) return true;
			return FALSE;
		}
		public function executeQuery($sql){
			$this->connectWithDatabase();
			$result = $this->dbconn->query($sql);
			$this->disconnectWithDatabase();
			return $result;
		}
		public function executeQueryWithoutReturn($sql){
			$this->connectWithDatabase();
			$this->dbconn->query($sql);
			$this->disconnectWithDatabase();
		}
		public function refreshCurrentPage(){
			header("Refresh:0");
		}
		public function redirectToHomePage(){
			$this->redirectToPage("http://localhost/LaundryService/home");
		}
		public function redirectToAdminHomePage(){
			$this->redirectToPage("http://localhost/LaundryService/admin");
		}
		public function redirectToLoginPage(){
			$this->redirectToPage("http://localhost/LaundryService/login");
		}
		public function redirectToPage($url){
			header("refresh:0; url=$url");
		}
		public function isSessionSet(){
			if(isset($_SESSION["email"]) == FALSE){
				return FALSE;
			}
			return TRUE;
		}
		public function setSessionEmail($email){
			if(!$this->isSessionSet()){
				$_SESSION["email"] = $email;
			}
		}
		public function showAlertMessage($msg){
			echo "<script>alert('$msg');</script>";
		}
		public function addAdmin($name, $email, $password){
			$sql = "INSERT INTO admindetails (admin_name, admin_email, admin_password) VALUES ('$name', '$email', '$password')";
			$this->connectWithDatabase();
			$result = $this->dbconn->query($sql);
			$this->disconnectWithDatabase();
		}
		public function addCustomer($id, $name, $email, $password, $address, $phone){
			$sql = "INSERT INTO customers (customer_id, customer_name, customer_email, customer_password, customer_address, customer_phone) 
			VALUES ($id, '$name', '$email', '$password', '$address', '$phone')";
			$this->connectWithDatabase();
			$result = $this->dbconn->query($sql);
			$this->disconnectWithDatabase();
		}
		public function getCustomerInformation($email){
			$sql = "SELECT * FROM customers WHERE customer_email = '$email'";
			if($this->isDataexists($sql)){
				$result = $this->executeQuery($sql);
				return mysqli_fetch_assoc($result);
			}
			return FALSE;
		}
		public function getAdminInformation($email){
			$sql = "SELECT * FROM admindetails WHERE admin_email = '$email'";
			if($this->isDataexists($sql)){
				$result = $this->executeQuery($sql);
				return mysqli_fetch_assoc($result);
			}
			return FALSE;
		}
		public function getTableContent($table){
			$sql = "SELECT * FROM $table";
			$this->connectWithDatabase();
			$result = $this->dbconn->query($sql);
			$this->disconnectWithDatabase();
			return $result;
		}
		
	}
?>