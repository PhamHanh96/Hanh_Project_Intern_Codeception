<?php
use Step\Acceptance\User\UserLoginStep as UserLoginStep;
use Step\Acceptance\User\UserBookTicketStep as UserBookTicketStep;
use Step\Acceptance\User\RegisterStep as RegisterStep;
class UserBookTicketCest
{
    /**
     * UserBookTicketCest constructor.
     */
    public function __construct()
    {
        $this->faker                    = Faker\Factory::create();
        $this->email                    = 'hanhhana041096@gmail.com';
        $this->pass                     = '123';
        $this->randomNumberOfTickets    = rand(1,10);
        $this->randomUsername           = $this->faker->bothify('???????????');
        $this->randomEmail              = $this->faker->bothify('???????????@gmail.com');
        $this->randomPhoneNumber        = $this->faker->bothify('01#########');
        $this->randomIdCustomer         = random_int(100000000,999999999);
        $this->randomAddress            = $this->faker->address;
        $this->randomPassword           = '123';
        $this->randomConfirmPassword    = '123';
    }
    /**
     * @param RegisterStep $I
     */
    public function register(RegisterStep $I)
    {
		$I->wantTo('Register new account');
        $I->register($this->randomUsername, $this->randomEmail, $this->randomPhoneNumber, $this->randomIdCustomer, $this->randomAddress, $this->randomPassword, $this->randomConfirmPassword);
    }
	/**
	 * @param AcceptanceTester $I
	 * @param $scenario
	 */
    public function UserBookTicket(AcceptanceTester $I, $scenario)
    {
        $I = new UserLoginStep($scenario);
        $I->Login($this->randomEmail, $this->randomPassword);
        $I = new UserBookTicketStep($scenario);
        $I->wantTo('Book tickets');
        $I->BookTicketAndCheckCart('NHATRANG-SAIGON', $this->randomNumberOfTickets);
    }
}
