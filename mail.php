<?php
// function _mail($from, $to, $name, $phone){
// $from = "webtechcoursework@1gb.ru";
// $to = "dreamlifter88@yandex.ru";
// $sitename = "webtechcoursework.ru";
// $name = trim($_GET["name"]);
// $phone = trim($_GET["phone"]);
// $pagetitle = "Новая заявка с сайта \"$sitename\"";
// $message = "Имя: $name \nТелефон: $phone;
// mail($from, $to $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from");
// }

// function _mail ($from, $to, $message)
// {	
// 	$from = "webtechcoursework@1gb.ru";
// 	$to = "dreamlifter88@yandex.ru";
// 	$name = trim($_GET["name"]);
// 	$phone = trim($_GET["phone"]);
// 	$message =  $name \n $phone;
// 	mail($to, $message, 
// 	"From: $from
// 	Reply-To: $from
// 	Content-Type: text/plain; charset=utf-8
// 	Content-Transfer-Encoding: 8bit"
// );
// }

// _mail ('webtechcoursework@1gb.ru', 'dreamlifter88@yandex.ru', $message);

function _mail ($from, $to, $name, $phone)
{
$from = "webtechcoursework@1gb.ru";
$to = "dreamlifter88@yandex.ru";
$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
mail($to, $name, $phone, 
"From: $from
Reply-To: $from
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: 8bit"
);
}

_mail ('webtechcoursework@1gb.ru', 'dreamlifter88@yandex.ru', "Name "+$name, "Phone "+$phone);


?>



