<?php
namespace Page\User;

class UserBookTicketPage
{

    public static $URL1 = '/';

    public static $buttonSchedule = ['xpath' => './/*[@id=\'br-cover-content\']/div[2]/nav/div/ul/li[1]/a'];

    public static $searchFile = ['class' => 'form-control'];

    public static $buttonSearch = ['xpath' => './/*[@id=\'body-content\']/div/form/div/div/button'];

    public static $buttonBuyTicket = ['xpath' => './/*[@id=\'body-content\']/div/div/div[1]/table/tbody/tr/td[7]/a'];

    public static $numberOfTickets = ['id' => 'soluong'];

    public static $buttonSubmit = ['xpath' => './/*[@id=\'body-top\']/div/div/div[1]/div/form/div/div[8]/button'];

    public static $messageSaveSuccess = 'Thêm đơn hàng thành công';

    public static $iconCart = ['xpath' => './/*[@id=\'top-nav\']/div/ul/li[1]/a'];



}
