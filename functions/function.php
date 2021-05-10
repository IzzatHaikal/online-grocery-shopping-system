<?php 

$db=mysqli_connect("localhost","root","","groceries");


function getpro(){
    
    GLOBAL $db;

    $get_product = "select * from product";

    $run_product = mysqli_query($db,$get_product);

    while($row_product=mysqli_fetch_array($run_product)){
        
        $product_id = $row_product['product_id'];
        $product_name = $row_product['product_name'];
        $product_price = $row_product['product_price'];
        $product_img = $row_product['product_img'];
        $product_quantity = $row_product['product_quantity'];
        $product_desc = $row_product['product_desc'];

        echo "
        
        <div class='col'>
            <div class='card shadow-sm sshighlight'>
                <a href='products-closeup.php?product_id=$product_id'>
                    <img src='../admin_area/product_images/$product_img' alt='pise' class='card-img-top'>
                </a>
                <div class='card-body'>
                    <h5 class='card-title'>Pise Gomo</h5>
                    <p class='card-text'>RM $product_price</p>
                    <div class='d-flex flex-sm-column justify-content-around'>
                        <a href='#' class='btn btn-success rounded-pill mb-sm-2'>Add to List</a>
                        <a href='#' class='btn btn-warning rounded-pill'>Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        ";


    }


}
?>

<?php 
$username ="";
$email ="";

session_start();
if(isset($_POST['submit_Register'])){
    register();
}


function register(){
    GLOBAL $db,$username,$email;

    $username = $_POST['username'];
    $email = $_POST['email1'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

        $password = md5($password1);

        if (isset($_POST['user_type'])) {
			$user_type = $_POST['user_type'];
			$query = "INSERT INTO user (username, email, passwordd, user_type ) 
					  VALUES('$username', '$email', '$password','admin' )";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: ../admin_area/admin.php');
		}else{
			$query = "INSERT INTO user (username, email,  passwordd, user_type) 
					  VALUES('$username', '$email', '$password','user')";
			mysqli_query($db, $query);
            
            $get_id = "select * from user where id=(select max(id) from user)";

            $run_id = mysqli_query($db,$get_id);
            
            $row_id=mysqli_fetch_array($run_id);

            $usrname = $row_id['id'];


            $logged_in_user_id = mysqli_insert_id($db);

            $_SESSION['user'] = $usrname; // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
            header('location: ../src/index.php?id='.$usrname);
        }
    
}       

if (isset($_POST['loginbtn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = $_POST['username'];
	$password1 = $_POST['password'];

	

	// attempt login if no errors on form
    $password = md5($password1);

    $query = "SELECT * FROM user WHERE username='$username' AND passwordd='$password' LIMIT 1";
    $results = mysqli_query($db, $query);

    if ($results) { // user found
        // check if user is admin or user
        $logged_in_user = mysqli_fetch_assoc($results);
        echo "$logged_in_user";
        if ($logged_in_user['user_type'] == 'admin') {

            $_SESSION['user'] = $logged_in_user['id'];
            $_SESSION['success']  = "You are now logged in";
            header('location: ../admin_area/admin.php');		  
        }else{
            $_SESSION['user'] = $logged_in_user['id'];
            $_SESSION['success']  = "You are now logged in";

            header('location: ../src/index.php?id='.$logged_in_user['id']);
        }
    }else {
        echo "<script>alert('Wrond email or password')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}


?>




