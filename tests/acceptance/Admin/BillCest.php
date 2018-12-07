<?php
use Step\Acceptance\Admin\BillStep as BillStep;
use Page\Admin\BillPage as BillPage;
class BillCest
{
    /**
     * @param BillStep $I
     * @throws Exception
     */
    public function timKiemVoiDuLieuDung(BillStep $I)
    {
        $I->wantTo('Tìm kiếm với dữ liệu đúng');
        $I->searchBillWithDataTrue(BillPage::$usernameTrue, BillPage::$passwordTrue, BillPage::$codeBill);
    }

    /**
     * @param BillStep $I
     * @throws Exception
     */
    public function timKiemVoiDuLieuSai(BillStep $I)
    {
        $I->wantTo('Tìm kiếm với dữ liệu sai');
        $I->searchBillWithDataTrue(BillPage::$usernameTrue, BillPage::$passwordTrue, BillPage::$codeBillWrong);
    }

    /**
    * @param BillStep $I
    * @throws Exception
    */
    public function duyetDonHangVoiCancel(BillStep $I)
    {
        $I->wantTo('Duyệt đơn hàng với Cancel');
        $I->checkBillWithCancel(BillPage::$usernameTrue, BillPage::$passwordTrue, BillPage::$codeBill);

    }

    /**
     * @param BillStep $I
     * @throws Exception
     */
    public function duyetDonHangVoiOK(BillStep $I)
    {
        $I->wantTo('Duyệt đơn hàng với OK');
        $I->checkBillWithOK(BillPage::$usernameTrue, BillPage::$passwordTrue, BillPage::$codeBill);

    }
}
