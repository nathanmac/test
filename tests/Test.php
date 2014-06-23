<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 21/06/2014
 * Time: 20:04
 */

namespace tests;


class Test extends \PHPUnit_Framework_TestCase {

    public function testConnection()
    {
        $conn_id = ftp_connect('127.0.0.1') or \PHPUnit_Framework_Assert::fail('failed to connect');

        if (!ftp_login($conn_id, 'anonymous', ''))
            \PHPUnit_Framework_Assert::fail('failed to login');



        echo ftp_pwd($conn_id) . PHP_EOL;

        var_dump(ftp_nlist($conn_id, '.'));

        ftp_chdir($conn_id, '/pub');

        echo ftp_pwd($conn_id) . PHP_EOL;
        ftp_put($conn_id, 'file.txt', 'file.txt', FTP_BINARY);

        var_dump(ftp_nlist($conn_id, '.'));


        ftp_close($conn_id);
    }



}
 