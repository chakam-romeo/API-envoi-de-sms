<?php

            include_once('NufiSMSAPI.php');

        
                $url = 'http://nufisms.com/api/v1/';
                $var['api_key'] = "57f12cfcc646a54dc1eb6153fa44fb32848dcb7d14";
                $var['token'] = "4d9abb326af5c5d217b9f3742b9f1dd5";
                $var['type_sms'] = 1;
                $var['exp_sms'] = "romeo";
                $var['dest_sms'] = "655010604";
                $var['code_phone'] = "CM";
                $var['sms'] = "test rewrite sms";


           $sms = new NufiSMSAPI();
          
            $res = $sms->send_sms($var,$url);
           echo $res;
            die();
       
  