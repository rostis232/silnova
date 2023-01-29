<?php
$xxx =$_POST["xxx"];

$name=$_POST["name"];
$email=$_POST["email"];
$mess=$_POST["mess"];  
if (isset ($name))
{
$name = substr($name,0,20); //Не может быть более 20 символов
if (empty($name))
{
echo "<center><b>Не указано имя.<p>";
echo "<a href=cont.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else 
{
$name = "не указано";
}
if (isset ($email))
{
$email = substr($email,0,20); //Не может быть более 20 символов
if (empty($email))
{
echo "<center><b>Не указан e-mail.<p>";
echo "<a href=cont.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else 
{
$email = "не указано";
}
if (isset ($mess))
{
$mess = substr($mess,0,1000); //Не может быть более 1000 символов
if (empty($mess))
{
echo "<center><b>Нет текста вопроса.<p>";
echo "<a href=cont.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else 
{
$mess = "не указано";
}
$i = "не указано";
if ($name == $i AND $email == $i AND $mess == $i)
{
echo "Ошибка ! Скрипту не были переданы параметры !";
exit;
}
$to = "a@silnova.pp.ua";  /*МЕНЯЕШЬ НА СВОЙ АДРЕСС!*/
$subject = "вопрос от посетителя сайта";
$message = "Имя:$name::::::::::Электронный адрес:$email::::::::::Сообщение:$mess:::::::::IP-адрес:$REMOTE_ADDR";
mail ($to,$subject,$message) or print "Не могу отправить письмо.";
echo "<center><b>Спасибо за отправку вашего сообщения<br><a href=index.htm>Нажмите</a>, чтобы вернуться на Главную страницу сайта";
exit;
?>