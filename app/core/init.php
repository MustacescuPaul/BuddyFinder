<?
if(isset($_SESSION['loggedIn'])){
	
	$isLogged = true;

	// Grabing his settings
	$name = $_SESSION['loggedUser'];
	$query = $conn->prepare("SELECT id,email,level,fname,lname,address,country,avatar,cover,description,emailing,support FROM `bf_users` WHERE email=:email");
	$query->execute(array(':email' => $name));
	$userSettings = $query->fetch(PDO::FETCH_OBJ);

}



#
# Initing other events 
#

$content = new HTMLGenerator;