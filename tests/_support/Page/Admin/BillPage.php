<?php
namespace Page\Admin;
/**
 * Class BillPage
 * @package Page\Admin
 */
class BillPage
{
    public static $URL = '/Admin/ADDonHang';

    public static $buttonSearch = ['xpath' => '//input[contains(@class, \' input-sm\')]'];

    public static $iconCheckBill = ['xpath' => '//i[contains(@class, \' fa-check\')]'];

    public static $buttonCancle = ['xpath' => '//button[contains(@class, \'btn-default\')]'];

    public static $buttonContinue = ['xpath' => '//button[contains(@class, \'btn-primary\')]'];

    public static $message = 'Bạn có muốn duyệt đơn hàng này không? ';

    public static $messageSuccess = 'duyệt thành công!';
}
