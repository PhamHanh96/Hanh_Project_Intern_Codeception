<?php
namespace Page\Admin;
/**
 * Class RoutePage
 * @package Page\Admin
 */
class RoutePage
{
    public static $url = '/Admin/ADTuyenDuong';

    public static $buttonNew = ['xpath' => '//a[contains(@class, \'btn-primary\')]'];

    public static $codeRoute = ['id' => 'MS_TUYEN'];

    public static $whereStart = ['id' => 'BENDI'];

    public static $whereTo = ['id' => 'BENDEN'];

    public static $length = ['id' => 'QUANGDUONG'];

    public static $time = ['id' => 'THOIGIAN'];

    public static $price = ['id' => 'GIAVE'];

    public static $buttonAddNew = ['xpath' => '//input[contains(@class, \' btn-default\')]'];

    public static $messageSaveSuccess = 'Thêm thành công tuyến đường';

    public static $messageSaveSuccess1 = 'Cập nhật thành công tuyến đường';

    public static $messageDelete = 'Bạn có muốn xóa mục này không?';

    public static $messageDeleteSuccess = 'Xóa thành công!';

    public static $buttonSearch = ['xpath' => '//input[contains(@class, \' input-sm\')]'];

    public static $iconEdit = ['xpath' => '//a[contains(@class, \'btn-default\')]'];

    public static $iconDelete = ['xpath' => '//a[contains(@class, \' btn-danger\')]'];

    public static $buttonCancle = ['xpath' => '//button[contains(@class, \'btn-default\')]'];

    public static $buttonContinue = ['xpath' => '//button[contains(@class, \'btn-primary\')]'];
}
