<?php
namespace Page\admin;
/**
 * Class BusPage
 * @package Page\admin
 */
class BusPage
{
    // include url of current page
    public static $URL = '/Admin/ADXeKhach';

    public static $buttonNew = ['xpath' => '//a[contains(@class, \'btn-primary\')]'];

    public static $licensePlates = ['id' => 'MA_BSX'];

    public static $seats = ['id' => 'SOCHO'];

    public static $buttonAddNew = ['xpath' => '//input[contains(@class, \'btn-default\')]'];

    public static $messageSaveSuccess = 'Thêm thành công xe khách';

    public static $messageSaveSuccess1 = 'cập nhật thành công xe khách';

    public static $messageDelete = 'Bạn có muốn xóa mục này không?';

    public static $messageDeleteSuccess = 'Xóa thành công!';

    public static $buttonSearch = ['xpath' => '//input[contains(@class, \' input-sm\')]'];

    public static $iconEdit = ['xpath' => '//a[contains(@class, \'btn-default\')]'];

    public static $iconDelete = ['xpath' => '//a[contains(@class, \' btn-danger\')]'];

    public static $buttonCancel = ['xpath' => '//button[contains(@class, \'btn-default\')]'];

    public static $buttonContinue = ['xpath' => '//button[contains(@class, \'btn-primary\')]'];
}
