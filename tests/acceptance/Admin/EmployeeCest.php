<?php
use Step\Acceptance\Admin\EmployeeStep as EmployeeStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;
class EmployeeCest
{
    /**
     * EmployeeCest constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->faker                    = Faker\Factory::create();
        $this->username                 = 'nguyentrang0912@gmail.com';
        $this->password                 = '123';
        $this->randomUsername           = $this->faker->bothify('???????????');
        $this->randomEmail              = $this->faker->bothify('???????????@gmail.com');
        $this->randomPhoneNumber        = $this->faker->bothify('01#########');
        $this->randomIdEmployee         = random_int(100000000,999999999);
        $this->randomAddress            = $this->faker->address;
        $this->randomPassword           = '123';
        $this->randomConfirmPassword    = '123';
        $this->randomPosition           = 'GIÁM ĐỐC';
    }
    /**
     * @param AdminLoginStep $I
     */
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }
    /**
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */
    public function addEmployee(AcceptanceTester $I, $scenario)
    {
        $I = new EmployeeStep($scenario);
        $I->wantTo('Add new employee!');
        $I->addEmployee($this->randomEmail, $this->randomUsername, $this->randomPhoneNumber, $this->randomIdEmployee, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword );
    }
    /**
     * @param AcceptanceTester $I
     * @param $scenario
     */
    public function editEmployee(AcceptanceTester $I, $scenario)
    {
        $I = new EmployeeStep($scenario);
        $I->wantTo('Edit this Employee!');
        $I->ediInformation($this->randomEmail, $this->randomUsername, $this->randomPhoneNumber, $this->randomIdEmployee, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);
    }
    /**
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */
    public function deleteEmployee(AcceptanceTester $I, $scenario)
    {
        $I = new EmployeeStep($scenario);
        $I->wantTo('Delete this Employee!');
        $I->deleteEmployee($this->randomEmail);
    }
}
