<?php

// $recepient = "webtechcoursework@1gb.ru";
// $sitename = "webtechcoursework.ru";

// $name = trim($_GET["name"]);
// $phone = trim($_GET["phone"]);

// $pagetitle = "Новая заявка с сайта \"$sitename\"";
// $message = "Имя: $name \nТелефон: $phone;
// mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

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

_mail ('webtechcoursework@1gb.ru', 'dreamlifter88@yandex.ru', $name, $phone);
?>