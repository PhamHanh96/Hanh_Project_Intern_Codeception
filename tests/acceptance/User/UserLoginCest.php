<?php
use Step\Acceptance\User\UserLoginStep as UserLoginStep;
use Step\Acceptance\User\RegisterStep as RegisterStep;
class UserLoginCest
{
    public function __construct()
    {
        $this->faker                     = Faker\Factory::create();
        $this->randomUsername           = $this->faker->bothify('???????????');
        $this->randomEmail              = $this->faker->bothify('???????????@gmail.com');
        $this->randomPhoneNumber        = $this->faker->bothify('01#########');
        $this->randomIdCustomer         = random_int(100000000,999999999);
        $this->randomAddress            = $this->faker->address;
        $this->randomPassword           = '123';
        $this->randomConfirmPassword    = '123';e
    }

    /**
     * @param AcceptanceTester $I
     * @param $scenario
     */
    public function testRegister(AcceptanceTester $I, $scenario)
    {
        $I = new RegisterStep($scenario);
        $I->wantTo('Create new Account!');
        $I->register($this->randomUsername, $this->randomEmail, $this->randomPhoneNumber, $this->randomIdCustomer, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);
    }

    /**
     * @param UserLoginStep $I
     */
    public function Login(UserLoginStep $I)
    {
        $I->Login($this->randomEmail, $this->randomPassword);
    }
}
