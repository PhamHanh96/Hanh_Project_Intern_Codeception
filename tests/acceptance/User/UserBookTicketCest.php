<?php
use Step\Acceptance\User\UserLoginStep as UserLoginStep;
//use Step\Acceptance\User\RegisterStep as RegisterStep;
use Step\Acceptance\User\UserBookTicketStep as UserBookTicketStep;

class UserBookTicketCest
{

    public function _before(UserLoginStep $I)
    {
        $I->wantTo('Login Website');
        $I->Login('hanhhana041096@gmail.com', '123');

    }

    public function UserBookTicket(UserBookTicketStep $I)
    {
        $I->BookTickets('CodeRoute83', '3');
        $I->CheckCart();
    }

}
