<?php

use PHPUnit\Framework\TestCase;

class processTest extends TestCase{
    public function testUrlLength(){
        require_once './app/Model/process.php'; 
        $urlString = generateRandomString(5);
       $this->assertEquals(5,strlen($urlString));
    }


    public function testUrlValidity(){
        require_once './app/Model/process.php'; 
        $urlString = generateRandomString(5);
        $ValidCharacters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $ver = true;

        for($i=0; $i<5; $i++){

            $flag = false;
            for($j=0; $j<strlen($ValidCharacters); $j++){
                if($urlString{$i}==$ValidCharacters{$j}){
                    $flag = true;
                }
            }

            if($flag != true){
                $ver = false;
            }
        }

       $this->assertTrue($ver);
    }




}

?>