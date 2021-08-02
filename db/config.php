<?php
if (!session_start()) {
    session_start();
}
class Access
{
    public $conn;
    public $host = "localhost";
    public $db = "thebigdaddy";
    public $username = "root";
    public $password = "";
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            echo "Error in Connection";
            return $this->conn;
        } else {
            // echo "successful";
        }
    }

    public function adminSignup($username, $email, $password)
    {
        $sql = "INSERT into admins (username,password,email) values('$username', '$password','$email')";
        $save = $this->conn->query($sql);
        if ($save) {
            echo "successfully saved";
        } else {
            echo "something went wrong";
        }
        $this->conn->close();
    }
    public function login($access, $password)
    {
        
        $sql = "SELECT * from users where  username = '$access' or email = '$access' ";
        $verify = $this->conn->query($sql);
         
        if ($verify->num_rows > 0) {
            $user = $verify->fetch_assoc();
            $verifyPass = password_verify($password, $user['password']);
            if($verifyPass){
                $_SESSION['user'] = $user['username'];
                $_SESSION['userId'] = $user['id'];
                $_SESSION['userDetails'] = [
                    'username' =>  $user['username'],
                    'userId' => $user['id'],
                    'userEmail' => $user['email'],
                ];
                $_SESSION['logged'] = true;
                // echo $user['username'];
                // echo $_SESSION['presentUser'];
                // echo "Logged in";            
                header('location:../');
            
                // echo 'logged in';
            }else{
                echo 'incorrect password or login';
            }
            
        } else {
            echo "Not Found";
        }
        $this->conn->close();
    }
    public function signOut()
    {
        session_destroy();
        echo "logged out";
    }
    public function signup($username, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT into users (username,password,email) values('$username', '$hash','$email')";
        $save = $this->conn->query($sql);
        if ($save) {
            // $login($email, $password);
            $_SESSION['logged'];
            $_SESSION['user'] = $username;
            header('location:../clip.php');
            // echo "successfully saved";
        } else {
            echo "something went wrong";
        }
        $this->conn->close();
    }
  

}
