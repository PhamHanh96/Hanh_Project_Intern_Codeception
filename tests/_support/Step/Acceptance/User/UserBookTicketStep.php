<?php
namespace Step\Acceptance\User;
use Page\User\UserBookTicketPage as UserBookTicketPage;

class UserBookTicketStep extends \AcceptanceTester
{

    /**
     * @param $codeRoute
     * @param $numberOfTickets
     */
    public function BookTickets($codeRoute, $numberOfTickets)
    {
        $I = $this;
        $I->wantTo('I want to book tickets!');
        $I->amOnPage(UserBookTicketPage::$URL1);
        $I->click(UserBookTicketPage::$buttonSchedule);
        $I->fillField(UserBookTicketPage::$searchFile, $codeRoute);
        $I->pauseExecution();
        $I->click(UserBookTicketPage::$buttonSearch);
        $I->pauseExecution();
        $I->click(UserBookTicketPage::$buttonBuyTicket);
        $I->fillField(UserBookTicketPage::$numberOfTickets, $numberOfTickets);
        $I->pauseExecution();
        $I->wait('1');
        $I->click(UserBookTicketPage::$buttonSubmit);

        $I->see(UserBookTicketPage::$messageSaveSuccess);

    }

    public function CheckCart(\AcceptanceTester $I)
    {
        $I->wantTo('I want to check my cart');
        $I->amOnPage(UserBookTicketPage::$URL1);
        $I->click(UserBookTicketPage::$iconCart);
    }

}