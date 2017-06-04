<?php
	require_once "connect.php";
// кусок дерьма для современного стиля
	function getNews ($limit) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `project` ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		return resultToArray ($result);
	}

	function getArticle ($id) {
        global $mysqli;
        connectDB();
  if ($id)
        $result = $mysqli->query("SELECT * FROM `project` WHERE id = $id");
        closeDB();
        if (!$id)
  	return resultToArray($result);
else 
   return  $result->fetch_assoc(); 
    }

// Конец куска дерьма для современного стиля

// кусок дерьма для Классического стиля
	function getNewsClass ($limit) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `classic` ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		return resultToArray ($result);
	}

	function getArticleClass ($id) {
        global $mysqli;
        connectDB();
  if ($id)
        $result = $mysqli->query("SELECT * FROM `classic` WHERE id = $id");
        closeDB();
        if (!$id)
  	return resultToArray($result);
else 
   return  $result->fetch_assoc(); 
    }

// Конец куска дерьма для Классического стиля
// кусок дерьма для публичного стиля
	function getNewsPublic ($limit) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `public` ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		return resultToArray ($result);
	}

	function getArticlePublic ($id) {
        global $mysqli;
        connectDB();
  if ($id)
        $result = $mysqli->query("SELECT * FROM `public` WHERE id = $id");
        closeDB();
        if (!$id)
  	return resultToArray($result);
else 
   return  $result->fetch_assoc(); 
    }

// Конец куска дерьма для публичного стиля
// кусок дерьма для архитектуры стиля
	function getNewsArchi ($limit) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `archi` ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		return resultToArray ($result);
	}

	function getArticleArchi ($id) {
        global $mysqli;
        connectDB();
  if ($id)
        $result = $mysqli->query("SELECT * FROM `archi` WHERE id = $id");
        closeDB();
        if (!$id)
  	return resultToArray($result);
else 
   return  $result->fetch_assoc(); 
    }

// Конец куска дерьма для архитектуры стиля

	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>