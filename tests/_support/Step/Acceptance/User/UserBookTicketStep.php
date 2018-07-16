<?php
namespace Step\Acceptance\User;
use Page\User\UserBookTicketPage as UserBookTicketPage;

class UserBookTicketStep extends \AcceptanceTester
{
    /**
     * @param $codeRoute
     * @param $numberOfTickets
     * @param $codeSchedule
     */
    public function BookTickets($codeRoute, $numberOfTickets)
    {
        $I = $this;
        $I->wantTo('I want to book tickets!');
        $I->amOnPage(UserBookTicketPage::$URL1);
        $I->click(UserBookTicketPage::$buttonSchedule);
        $I->fillField(UserBookTicketPage::$searchFile, $codeRoute);
        $I->click(UserBookTicketPage::$buttonSearch);
        $I->click(UserBookTicketPage::$buttonBuyTicket);
        $I->fillField(UserBookTicketPage::$numberOfTickets, $numberOfTickets);
        $I->click(UserBookTicketPage::$buttonSubmit);
        $I->see(UserBookTicketPage::$messageSaveSuccess);
        $I->wait(1);
    }
    public function CheckCart()
    {
        $I=$this;
        $I->wantTo('I want to check my cart');
        $I->amOnPage(UserBookTicketPage::$URL1);
        $I->click(UserBookTicketPage::$iconCart);
        $I->wait('1');
    }

}