<?php
use Step\Acceptance\User\UserLoginStep as UserLoginStep;
//use Step\Acceptance\User\RegisterStep as RegisterStep;
use Step\Acceptance\User\UserBookTicketStep as UserBookTicketStep;

class UserBookTicketCest
{
    public function __construct()
    {
        $this->faker                    = Faker\Factory::create();
        $this->email                    = 'hanhhana041096@gmail.com';
        $this->pass                     = '123';

    }

    public function _before(UserLoginStep $I)
    {
        $I->wantTo('Login Website');
        $I->Login($this->email, $this->pass);

    }

    public function UserBookTicket(UserBookTicketStep $I)
    {
        $I->BookTickets('CodeRoute83', '3');
        $I->CheckCart();
    }

}
