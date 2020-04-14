<?php

namespace Controller;
class EmployeeManager extends Database
{
    public function __construct($pathFile)
    {
        parent::__construct($pathFile);
    }

    public function addEmployees($employee){
        $listEmployee = $this->readDataFile();
        $data = [
            'firstName' => $employee->getFirstName(),
            'lastName' => $employee->getLastName(),
            'dateOfBirth' => $employee->getDateOfBirth(),
            'address' => $employee->getAddress(),
            'position' => $employee->getPosition()
        ];
        array_push($listEmployee, $employee);
        $this->saveDataToFile($listEmployee);
    }

    public function deleteEmployee($index){
        $employees = $this->readDataFile();
        if (array_key_exists($index, $employees)) {
            array_splice($employees, $index, 1);
        }
        $this->saveDataToFile($employees);
    }

    public function editEmployee($employee, $index){
        $listEmployee = $this->readDataFile();

        $data = [
            'firstName' => $employee->getFirstName(),
            'lastName' => $employee->getLastName(),
            'dateOfBirth' => $employee->getDateOfBirth(),
            'address' => $employee->getAddress(),
            'position' => $employee->getPosition()
        ];

        $listEmployee[$index] = $data;

        $this->saveDataToFile($listEmployee);
    }

    public function search($keyword){
        $listEmployee = $this->readDataFile();
        $arr = [];
        foreach ($listEmployee as $item) {
            if ($item['firstName'] == $keyword || $item['lastName'] == $keyword || $item['position'] == $keyword) {
                $employee = new Employee(
                    $item['firstName'],
                    $item['lastName'],
                    $item['dateOfBirth'],
                    $item['address'],
                    $item['position']
                );

                array_push($arr, $employee);
            }
        }
        return $arr;
    }
    public function getList(){
        $data = $this->readDataFile();

        $arr = [];
        foreach ($data as $item) {
            $employee = new Employee(
                $item['firstName'],
                $item['lastName'],
                $item['dateOfBirth'],
                $item['address'],
                $item['position']
            );

            array_push($arr, $employee);
        }

        return $arr;
    }

    public function findById($index)
    {
        $data = $this->readDataFile();
        if (array_key_exists($index, $data)) {
            $employee = new Employee(
                $data[$index]['firstName'],
                $data[$index]['lastName'],
                $data[$index]['dateOfBirth'],
                $data[$index]['address'],
                $data[$index]['position']
            );

            return $employee;
        }
    }

//    public function showEmployees(){
////        foreach ($this->employees as $employee)
//
//    }
//
//
//    public function viewInfoEmployee(){
//
//    }
}