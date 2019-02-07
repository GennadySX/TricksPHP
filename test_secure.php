<?

//Для тестирования определенную страницу!!!
//Автор: GennadySX
//07.02.2019;
//Автор ни какой отвественности собой не несет и будьте готовы на всех случи и просмотр стронников
//Скрипт создан для Битрикса

global $USER;
if ($USER->IsAuthorized()) {
	if (!isset($_COOKIE["permission"])) 
	setcookie("permission", "ooo-yeah", time()+84600);
		echo "succes";
	
}

if (strpos($_SERVER["REQUEST_URI"],"/test")!== false) {

if (isset($_GET['fuckUp'])) {
	setcookie("permission", "ooo-yeah", time()+84600);
		echo "succes";
		header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit();
}
	
if (!isset($_COOKIE["permission"])) 
 header("Location: http://".$_SERVER["HTTP_HOST"]);
	exit();

}






















?>