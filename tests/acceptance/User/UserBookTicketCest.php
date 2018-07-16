<?php
use Step\Acceptance\User\UserLoginStep as UserLoginStep;
use Step\Acceptance\User\UserBookTicketStep as UserBookTicketStep;

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
    }
    /**
     * @param UserLoginStep $I
     */
    public function _before(UserLoginStep $I)
    {
        $I->wantTo('Login Website');
        $I->Login($this->email, $this->pass);
    }
    /**
     * @param UserBookTicketStep $I
     */
    public function UserBookTicket(UserBookTicketStep $I)
    {
        $I->BookTickets('CodeRoute83', '3');
        $I->wait(1);
        $I->CheckCart();
    }
}
