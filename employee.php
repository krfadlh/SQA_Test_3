<?php

class Company {
	private $name;

	public function setCompanyName($name){
		$this->name = $name;
    	} 
	public function getCompanyName(){
        		return $this->name;
    	}
}

class Department extends Company {
	private $name;

	public function setDepartmentName($name){
		$this->name = $name;
    	} 
	public function getDepartmentName(){
        	return $this->name;
    	}
}

class Employee extends Department {
	private $name;
	private $title;
	private $salary;
	private $day;
	private $monthySalary;

	public function setEmployeeName($name){
		$this->name = $name;
    	} 
	public function getEmployeeProfile(){
        	return $this->name;
    	}
	public function setEmployeeTitle($title){
		$this->title= $title;
    	} 
	public function getEmployeeTitle(){
        	return $this->title;
    	}
	public function setEmployeeSalary($salary){
		$this->salary= $salary;
    	} 
	public function getEmployeeMontlySalary($day){
        	$monthySalary = $this->title * $this->day;
		return $this-> monthySalary;
    	}
}

$company = new Company ();
$department = new Department ();
$employee = new Employee ();

echo $company->name;
echo $department->name;
echo $employee->name;
echo $employee->title;
echo $employee->monthlySalary;

?>