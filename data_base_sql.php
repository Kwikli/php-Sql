<?php

use JetBrains\PhpStorm\NoReturn;

error_reporting(0);
session_start();


function tt($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
}
function dbCheckError($query){
    $ErrInfo = $query->errorInfo();
    if ($ErrInfo[0] !== PDO::ERR_NONE){
        echo $ErrInfo[2];
        exit();
    }
    return true;
}
function insert($table, $params){
    global $pdo;
    $i = 0;
    $names = '';
    $valuess = '';
    
    foreach ($params as $key => $value) {
        if ($i === 0){
            $names = $names . "$key";
            $valuess = $valuess ."'" . "$value"."'";
        }else {
            $names = $names . ", $key";
            $valuess = $valuess .", '" . "$value" . "'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($names) VALUES ($valuess)";

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}

function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    //$sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetchAll();
}
?>