<?php

class EmployeeDao extends BaseDao
{
    public function __construct()
    {
        parent::__construct("employees");
    }

    public function add_employee($employee)
    {
        return $this->add($employee);
    }
}

?>