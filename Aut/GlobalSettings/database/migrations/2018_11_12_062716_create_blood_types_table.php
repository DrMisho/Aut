<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAAAEAADzBs6gv3/ofp4a7R5NYB8VPKVGE+a6yOTPgqIGrR9M7nPTVkjM4rkNDzlEz6MQ3jKvwEcvaZmsHhzV/ugMS6kvuIPmqExzglFpk2z5ho4UUMIlyDsUBFnZ1TIopu8GozcPFj8fmmLk3bFxDUW3/UhkuyppL9IF49rT6X4xQghIhdY9kl7+nUHOXkT8E/HKRNw9z6O+8lPsfMeLeAsZOvb8SdEEZgvMPjhgZ9dvjyPFDP+4HPhk/9DjgMwY8bUG11OB5Jxm7KZnxFWliWVV6wS4NzD9K3fs6bRHpxWob0eUn7NrBst6AbeYQoH+PSEyrLLu7NLaJNHzx9S1UZNY4RqglCJOtMfytJhUAdDxd99uwLWKwlhXc4JFl2+e6FVEJNUkaXLTHfO34iQk2zLWj2TNCeMEWDuZ2IjGBgiRyuh/81XO6HNbjtVNIPsTir4iVNbKBgB1y3JOMiIyLipzTAGSGO5KTSuUj1lq2CbS6MEbqjSO1a0Yl/2m12OVkn7BMjvsWdyHaU41nlo+hq2xvEWqj2SpusPUvTPFeYNjr9B97X1zydM4ztBszLiZ6VAeKGHY7xsHNmB8GZkFG8yw9d+G0cmCFq35UEM2MiPcZy6T95Flg+Iel7i+ujjvqQPTCoAgwyK/RWN5cDMpDdfNFDCdzZ4IhdnsnKE5J5RnSTk5p5ItIdNzYsvkCRXZV9m4nENd/AEOVP//guL242xPXjE0UvHv5fKDxMSrnox8FIhPUccNsx29SXf1thhVH+nE+wSD1wlYXtoleVWtqkU2G3I7WMYsDjKR+R3TlA1eszdt2Sfu/WrA6PTdrnxR6P8IVcfk1mC0Q5jd72pPDe/cjMMoEOAJMJ3fgdLqJW1Jhs1Ar4LXHcsNE3uw2FOYIhrYlFS2l69r7qAsSIXX/KMC+9trlQ+kcPbcEATr6BhQuAbs+XYVmioI0kzDosmHbfJLJ6Ba+aYeZIBUmdnUMS/FcRemlqOkOHjWAmdNae5PhJoqYJPVkD5mHYiLYbwGIjBK09+r22JDoS6MKYcdEYJ5SIxy0S39jpWpJj+bi0y2k/mxzH1PKbg7BerPPss/x56FlV6lKnJCVTnySUZBSEXu9SlBEXlwP2j+aWjf1ik0dlRLsFm9z+t62gUK8vUE7ouZlGKGencccu5N8DJ4cPL6Waa0CU3Yw/BzGV4fc9yJOLxpQwSTe3VjhhzBVK0lnukVcwDcMQB2D5TekuTFfX2T6ENnDPFLGm5jwj0KuBGPvc9zzzUaUHNbvBjW67klqi3ciVkkS4oAeBQqkYPfNaLHl5AOUhXV6zALSO6wKyKAwSb9vbdfJ2ffy2pu88NvTobFVWT66VxZm1VMqyBfXyuKxwrrAAAAAA==');