<?php
namespace Step\Acceptance\Admin;
use Page\Admin\EmployeePage as EmployeePage;

class EmployeeStep extends \AcceptanceTester
{
    /**
     * @param $email
     * @param $username
     * @param $position
     * @param $phoneNumber
     * @param $idEmployee
     * @param $address
     * @param $password
     * @param $comfirmPassword
     * @throws \Exception
     */
    public function addEmployee($email, $username, $phoneNumber, $idEmployee, $address, $password, $confirmPassword )
    {
        $I = $this;
        $I->wantTo('Creat new Employee');
        $I->amOnPage(EmployeePage::$URL);
        $I->click(EmployeePage::$buttonNew);
        $I->fillField(EmployeePage::$email, $email);
        $I->fillField(EmployeePage::$username, $username);
        $I->fillField(EmployeePage::$phoneNumber, $phoneNumber);
        $I->fillField(EmployeePage::$idEmployee, $idEmployee);
        $I->fillField(EmployeePage::$address, $address);
        $I->fillField(EmployeePage::$password, $password);
        $I->fillField(EmployeePage::$confirmPassword, $confirmPassword);
        $I->click(EmployeePage::$buttonAddNew);
        $I->wait(1);
        $I->see(EmployeePage::$messageSaveSuccess);
    }
    /**
     * @param $email
     */
    public function searchEmployee($email)
    {
        $I = $this;
        $I->wantTo('Search Employee!');
        $I->fillField(EmployeePage::$buttonSearch, $email);
    }
    /**
     * @param $email
     * @param $username
     * @param $phonenumber
     * @param $idEmployee
     * @param $address
     * @param $password
     * @param $confirmPassword
     */
    public function ediInformation($email, $username, $phonenumber, $idEmployee, $address, $password, $confirmPassword)
    {
        $I = $this;
        $I->wantTo('Search Employee!');
        $I->amOnPage(EmployeePage::$URL);
        $I->searchEmployee($email);
        $I->click(EmployeePage::$iconEdit);
        $I->fillField(EmployeePage::$username, $username);
        $I->fillField(EmployeePage::$phoneNumber, $phonenumber);
        $I->fillField(EmployeePage::$idEmployee, $idEmployee);
        $I->fillField(EmployeePage::$address, $address);
        $I->fillField(EmployeePage::$password, $password);
        $I->fillField(EmployeePage::$confirmPassword, $confirmPassword);
        $I->click(EmployeePage::$buttonAddNew);
        $I->wait(1);
        $I->see(EmployeePage::$messageSaveSuccess1);
    }
    /**
     * @param $email
     * @throws \Exception
     */
    public function deleteEmployee($email)
    {
        $I = $this;
        $I->wantTo('Delete Employee!');
        $I->amOnPage(EmployeePage::$URL);
        $I->searchEmployee($email);
        $I->click(EmployeePage::$iconDelete);
        $I->wantTo('Test with delete employee but then cancel');
        $I->waitForElementVisible(EmployeePage::$buttonCancle,30);
        $I->click(EmployeePage::$buttonCancle);
        $I->wait('1');
        $I->click(EmployeePage::$iconDelete);
        $I->waitForElementVisible(EmployeePage::$buttonContinue,30);
        $I->wantTo('Test with delete employee then accept');
        $I->click(EmployeePage::$buttonContinue);
        $I->wait(1);
        $I->acceptPopup();
    }
}