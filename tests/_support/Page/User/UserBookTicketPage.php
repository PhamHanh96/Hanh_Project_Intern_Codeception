<?php
namespace Page\User;

class UserBookTicketPage
{
    public static $URL1 = '/';

    public static $buttonSchedule = ['xpath' => './/*[@id=\'br-cover-content\']/div[2]/nav/div/ul/li[1]/a'];

    public static $searchFile = ['xpath' => '//input[contains(@class, \'pull-right\')]'];

    public static $buttonSearch = ['xpath' => '//button[contains(@class, \' btn-default\')]'];

    public static $buttonBuyTicket = ['xpath' => '//a[contains(@class, \' futa-book-ticket\')]'];

    public static $numberOfTickets = ['id' => 'soluong'];

    public static $buttonSubmit = ['xpath' => '//button[contains(@class, \' pull-right\')]'];

    public static $messageSaveSuccess = 'Them Don hang thanh cong';

    public static $iconCart = ['xpath' => '//a[contains(@href, \'/HoaDon\')]'];

}
