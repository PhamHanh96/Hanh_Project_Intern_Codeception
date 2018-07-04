<?php
namespace Page\Admin;

class RoutePage
{
    public static $url = '/Admin/ADTuyenDuong';

    public static $buttonNew = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/div[2]/div[2]/div/div[1]/div/div/a'];


//    public static $editButton = ['class' => 'fa fa-fw fa-edit'];
//
//    public static $deleteButton = ['class' => 'btn btn-danger'];
//
//    public static $detailTuyenDuongButton = ['class' => 'btn btn-primary'];

    public static $codeRoute = ['id' => 'MS_TUYEN'];

    public static $whereStart = ['id' => 'BENDI'];

    public static $whereTo = ['id' => 'BENDEN'];

    public static $length = ['id' => 'QUANGDUONG'];

    public static $time = ['id' => 'THOIGIAN'];

    public static $price = ['id' => 'GIAVE'];

    public static $buttonAddNew = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/div[2]/div/div/form/div/div[7]/div/input'];

    public static $messageSaveSuccess = 'Thêm thành công tuyến đường';

    public static $messageSaveSuccess1 = 'Cập nhật thành công tuyến đường';

    //public static $messageSaveSuccess2 = 'Chi tiết';

//    public static $quayLaiButton = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/div[3]/a'];
//
//    public static $capNhatButton = ['xpath' => './/*[@id=\'page-wrapper\']/div/div/div[2]/div/div/form/div/div[7]/div/input'];

    public static $buttonSearch = ['xpath' => './/*[@id=\'dataTables-example_filter\']/label/input'];

    public static $iconEdit = ['class' => 'btn-default'];

    public static $iconDelete = ['class' => 'btn-danger'];

    public static $iconView = ['class' => 'btn-success'];

}
