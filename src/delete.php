<?php

include_once "../class/DataInterface.php";
include_once "../class/Database.php";
include_once "../class/Employee.php";
include_once "../class/EmployeeManager.php";

$index = (int)$_GET['index'];

$employeeManager  =  new \Controller\EmployeeManager("../data.json");
$employeeManager->deleteEmployee($index);

header("Location: ../index.php");