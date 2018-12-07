<?php
namespace Step\Acceptance\User;
use Page\User\UserBookTicketPage as UserBookTicketPage;

class UserBookTicketStep extends \AcceptanceTester
{
    /**
     * @param $codeRoute
     * @param $numberOfTickets
     */
    public function BookTicketAndCheckCart($codeRoute, $numberOfTickets)
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
        //$I->see('Bạn không được chọn nhiều hơn số ghế. Mời bạn nhập lại!');
        $I->see(UserBookTicketPage::$messageSaveSuccess);
        $I->click(UserBookTicketPage::$iconCart);
    }
}