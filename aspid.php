<?php
/**
 * Created by PhpStorm.
 * User: pups3s
 * Date: 09.04.17
 * Time: 11:50
 */

include "checker/Checker.php";

function startCheck($path = "./"){
    Checker::startChecking($path);
}

function checkForUpdate(){
    //достаем текущую версию
    //достаем с серва последнюю версию
    //return(currentVersion == lastVersion);
}

function makeUpdate(){
    //получаем новые файлы и затираем старые
}

if($argc == 1){
    //Выполняем проверку на обновления
    //Запускаем проверку на вредонос в текущей директории
    startCheck();
}

if($argc == 2){
    if($argv[1] == "--update"){
        //Выполняем проверку на обновления
        //Выполняем обновление, если требуется
        if(checkForUpdate()){
            makeUpdate();
            echo "Обновлено.";
        }else{
            echo "Обновление не требуется.";
        }
    }
}

if($argc == 3){
    if($argv[1] == "--path"){
        //получили путь к директории
        startCheck($argv[2]);
    }
}