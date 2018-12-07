<?php
use Step\Acceptance\Admin\ScheduleStep as ScheduleStep;
use Page\Admin\SchedulePage as SchedulePage;

class ScheduleCest
{
    /**
     * @param ScheduleStep $I
     * @throws Exception
     */
    public function themLoTrinhVoiDuLieuDung(ScheduleStep $I)
    {
        $I->wantTo('Thêm lộ trình với dữ liệu đúng');
        $I->addScheduleDataTrue(SchedulePage::$usernameTrue, SchedulePage::$passwordTrue, SchedulePage::$maTuyenDuong, SchedulePage::$bangSoXe, SchedulePage::$ngay, SchedulePage::$gio);
    }

    /**
     * @param ScheduleStep $I
     */
    public function timKiemLoTrinhDung(ScheduleStep $I)
    {
        $I->wantTo('Tìm kiếm lộ trình với dữ liệu đúng');
        $I->searchSchedule(SchedulePage::$usernameTrue, SchedulePage::$passwordTrue, SchedulePage::$maLoTrinh);
    }

    /**
     * @param ScheduleStep $I
     * @throws Exception
     */
    public function suaLoTrinhDuLieuDung(ScheduleStep $I)
    {
        $I->wantTo('Sửa lộ trình với dữ liệu đúng');
        $I->editSchedule(SchedulePage::$usernameTrue, SchedulePage::$passwordTrue,SchedulePage::$maLoTrinh, SchedulePage::$maTuyenDuongSua, SchedulePage::$bangSoXeSua, SchedulePage::$ngaySua, SchedulePage::$gioSua);
    }

    /**
     * @param ScheduleStep $I
     * @throws Exception
     */
    public function xoaLoTrinhCancel(ScheduleStep $I)
    {
        $I->wantTo('Xóa lộ trình với Cancel');
        $I->deleteScheduleCancel(SchedulePage::$usernameTrue, SchedulePage::$passwordTrue,SchedulePage::$maLoTrinh);
    }

    /**
     * @param ScheduleStep $I
     * @throws Exception
     */
    public function xoaLoTrinhOK(ScheduleStep $I)
    {
        $I->wantTo('Xóa lộ trình với OK');
        $I->deleteScheduleOK(SchedulePage::$usernameTrue, SchedulePage::$passwordTrue,SchedulePage::$maLoTrinh);
    }
}
