<?php
namespace Step\Acceptance\Admin;
use Page\Admin\EmployeePage as EmployeePage;

class EmployeeStep extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     * @param $emailEmployee
     * @param $phoneEmployee
     * @param $identifyCardEmployee
     * @param $addressEmployee
     * @param $passEmployee
     * @param $confirmPassEmployee
     * @throws \Exception
     */
   public function addEmployeeWithDataTrue($user, $pass, $emailEmployee, $name, $phoneEmployee, $identifyCardEmployee, $addressEmployee, $passEmployee, $confirmPassEmployee)
   {
       $I = $this;
       $I->amOnPage(EmployeePage::$urlAdmin);
       $I->fillField(EmployeePage::$username, $user);
       $I->fillField(EmployeePage::$password, $pass);
       $I->click(EmployeePage::$loginButton);
       $I->amOnPage(EmployeePage::$urlEmployee);
       $I->click(EmployeePage::$newButton);
       $I->fillField(EmployeePage::$emailEmployee, $emailEmployee);
       $I->fillField(EmployeePage::$nameEmployee, $name);
       $I->fillField(EmployeePage::$phoneEmployee, $phoneEmployee);
       $I->fillField(EmployeePage::$identifyCardEmployee, $identifyCardEmployee);
       $I->fillField(EmployeePage::$addressEmployee, $addressEmployee);
       $I->fillField(EmployeePage::$passEmployee, $passEmployee);
       $I->fillField(EmployeePage::$confirmPassEmployee, $confirmPassEmployee);
       $I->waitForElement(EmployeePage::$addButton, 30);
       $I->click(EmployeePage::$addButton);
       $I->see(EmployeePage::$messageAddSuccess);
   }

    /**
     * @param $user
     * @param $pass
     * @param $phoneEmployee
     * @param $identifyCardEmployee
     * @param $addressEmployee
     * @param $passEmployee
     * @param $confirmPassEmployee
     * @throws \Exception
     */
    public function addEmployeeWithMissingEmail($user, $pass, $name, $phoneEmployee, $identifyCardEmployee, $addressEmployee, $passEmployee, $confirmPassEmployee)
    {
        $I = $this;
        $I->amOnPage(EmployeePage::$urlAdmin);
        $I->fillField(EmployeePage::$username, $user);
        $I->fillField(EmployeePage::$password, $pass);
        $I->click(EmployeePage::$loginButton);
        $I->amOnPage(EmployeePage::$urlEmployee);
        $I->click(EmployeePage::$newButton);
        $I->fillField(EmployeePage::$nameEmployee, $name);
        $I->fillField(EmployeePage::$phoneEmployee, $phoneEmployee);
        $I->fillField(EmployeePage::$identifyCardEmployee, $identifyCardEmployee);
        $I->fillField(EmployeePage::$addressEmployee, $addressEmployee);
        $I->fillField(EmployeePage::$passEmployee, $passEmployee);
        $I->fillField(EmployeePage::$confirmPassEmployee, $confirmPassEmployee);
        $I->waitForElement(EmployeePage::$addButton, 30);
        $I->click(EmployeePage::$addButton);
        $I->see(EmployeePage::$messageMissingEmail);
    }

    /**
     * @param $user
     * @param $pass
     * @param $emailEmployee
     * @param $phoneEmployee
     * @param $identifyCardEmployee
     * @param $addressEmployee
     * @param $passEmployee
     * @param $confirmPassEmployee
     * @throws \Exception
     */
    public function addEmployeeWithDuplicateEmail($user, $pass, $emailEmployee, $name, $phoneEmployee, $identifyCardEmployee, $addressEmployee, $passEmployee, $confirmPassEmployee)
    {
        $I = $this;
        $I->amOnPage(EmployeePage::$urlAdmin);
        $I->fillField(EmployeePage::$username, $user);
        $I->fillField(EmployeePage::$password, $pass);
        $I->click(EmployeePage::$loginButton);
        $I->amOnPage(EmployeePage::$urlEmployee);
        $I->click(EmployeePage::$newButton);
        $I->fillField(EmployeePage::$emailEmployee, $emailEmployee);
        $I->fillField(EmployeePage::$nameEmployee, $name);
        $I->fillField(EmployeePage::$phoneEmployee, $phoneEmployee);
        $I->fillField(EmployeePage::$identifyCardEmployee, $identifyCardEmployee);
        $I->fillField(EmployeePage::$addressEmployee, $addressEmployee);
        $I->fillField(EmployeePage::$passEmployee, $passEmployee);
        $I->fillField(EmployeePage::$confirmPassEmployee, $confirmPassEmployee);
        $I->waitForElement(EmployeePage::$addButton, 30);
        $I->click(EmployeePage::$addButton);
        $I->see(EmployeePage::$messageDuplicateEmail);
    }

    /**
     * @param $user
     * @param $pass
     * @param $emailFail
     */
    public function searchFail($user, $pass, $emailFail)
    {
        $I = $this;
        $I->amOnPage(EmployeePage::$urlAdmin);
        $I->fillField(EmployeePage::$username, $user);
        $I->fillField(EmployeePage::$password, $pass);
        $I->click(EmployeePage::$loginButton);
        $I->amOnPage(EmployeePage::$urlEmployee);
        $I->fillField(EmployeePage::$searchButton, $emailFail);
        $I->wait(1);
        $I->see(EmployeePage::$messageSearch);
    }

    /**
     * @param $user
     * @param $pass
     * @param $emailTrue
     */
    public function searchTrue($user, $pass, $emailTrue)
    {
        $I = $this;
        $I->amOnPage(EmployeePage::$urlAdmin);
        $I->fillField(EmployeePage::$username, $user);
        $I->fillField(EmployeePage::$password, $pass);
        $I->click(EmployeePage::$loginButton);
        $I->amOnPage(EmployeePage::$urlEmployee);
        $I->fillField(EmployeePage::$searchButton, $emailTrue);
        $I->wait(1);
    }

    /**
     * @param $user
     * @param $pass
     * @param $emailTrue
     * @param $ten
     * @param $sdt
     * @param $cmnd
     * @param $diachi
     * @param $matkhau
     * @param $xacnhanmatkhau
     * @throws \Exception
     */
    public function editEmployeeWithDataTrue($user, $pass, $emailTrue, $ten, $sdt, $cmnd, $diachi, $matkhau, $xacnhanmatkhau)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $emailTrue);
        $I->click(EmployeePage::$editIcon);
        $I->waitForElement(EmployeePage::$nameEmployee, 30);
        $I->fillField(EmployeePage::$nameEmployee, $ten);
        $I->fillField(EmployeePage::$phoneEmployee, $sdt);
        $I->fillField(EmployeePage::$identifyCardEmployee, $cmnd);
        $I->fillField(EmployeePage::$addressEmployee, $diachi);
        $I->fillField(EmployeePage::$passEmployee, $matkhau);
        $I->fillField(EmployeePage::$confirmPassEmployee, $xacnhanmatkhau);
        $I->click(EmployeePage::$updateButton);
        $I->wait(1);
        $I->see(EmployeePage::$messageUpdate);
    }

    /**
     * @param $user
     * @param $pass
     * @param $emailTrue
     * @param $ten
     * @param $cmnd
     * @param $diachi
     * @param $matkhau
     * @param $xacnhanmatkhau
     * @throws \Exception
     */
    public function editEmployeeMisingPhone($user, $pass, $emailTrue, $ten, $sdt, $cmnd, $diachi, $matkhau, $xacnhanmatkhau)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $emailTrue);
        $I->click(EmployeePage::$editIcon);
        $I->waitForElement(EmployeePage::$nameEmployee, 30);
        $I->fillField(EmployeePage::$nameEmployee, $ten);
        $I->fillField(EmployeePage::$phoneEmployee, $sdt);
        $I->fillField(EmployeePage::$identifyCardEmployee, $cmnd);
        $I->fillField(EmployeePage::$addressEmployee, $diachi);
        $I->fillField(EmployeePage::$passEmployee, $matkhau);
        $I->fillField(EmployeePage::$confirmPassEmployee, $xacnhanmatkhau);
        $I->click(EmployeePage::$updateButton);
        $I->wait(1);
        $I->see(EmployeePage::$messageUpdateMissingPhone);
    }

    /**
     * @param $user
     * @param $pass
     * @param $emailTrue
     * @param $ten
     * @param $sdt
     * @param $diachi
     * @param $matkhau
     * @param $xacnhanmatkhau
     * @throws \Exception
     */
    public function editEmployeeMissingIdentifyCard($user, $pass, $emailTrue, $ten, $sdt, $cmnd, $diachi, $matkhau, $xacnhanmatkhau)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $emailTrue);
        $I->click(EmployeePage::$editIcon);
        $I->waitForElement(EmployeePage::$nameEmployee, 30);
        $I->fillField(EmployeePage::$nameEmployee, $ten);
        $I->fillField(EmployeePage::$phoneEmployee, $sdt);
        $I->fillField(EmployeePage::$identifyCardEmployee, $cmnd);
        $I->fillField(EmployeePage::$addressEmployee, $diachi);
        $I->fillField(EmployeePage::$passEmployee, $matkhau);
        $I->fillField(EmployeePage::$confirmPassEmployee, $xacnhanmatkhau);
        $I->click(EmployeePage::$updateButton);
        $I->wait(1);
        $I->see(EmployeePage::$messageUpdateMissingIdentifyCard);
    }

    /**
     * @param $user
     * @param $pass
     * @param $emailDelete
     * @throws \Exception
     */
    public function deleteCancel($user, $pass, $emailDelete)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $emailDelete);
        $I->waitForElement(EmployeePage::$deleteIcon, 30);
        $I->click(EmployeePage::$deleteIcon);
        $I->wait(1);
        $I->click(EmployeePage::$cancelButton);
    }

    /**
     * @param $user
     * @param $pass
     * @param $emailDelete
     * @throws \Exception
     */
    public function deleteOK($user, $pass, $emailDelete)
    {
        $I = $this;
        $I->searchTrue($user, $pass, $emailDelete);
        $I->waitForElement(EmployeePage::$deleteIcon, 30);
        $I->click(EmployeePage::$deleteIcon);
        $I->wait(1);
        $I->click(EmployeePage::$continueButton);
        $I->wait(1);
    }
}