<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAEAIAADtLH/HZ3I5X5HWIj6NfIS2aXKIU5OZ5CdavYuVhvHcdX466w9588ZZjVR9k+xWEApXbuKXSD9Gzt7E6WwDzVM1N6BcRWJQaea2FbGZcBTzuDx5zZMZ4tdK+/ciAhc3pVs2F7E2PkLYwvJ9wDO9U03t7g79s9xEmctVAsDzbYZNbFOLOg0jYdu0o9duS4z45WjgwUD2xja0Jsa7fhhvtHyyIje06fK64+9g4Yd+MScgjR7tGPRx1IDr/wbknqClM6E7PwrFGd//ErZkRG7UiqENcLt3NCmD5uOPwsMF5uRqyDTCP7Ue8xUZZrTgpyq041/60YMzjy6CZCnapFZ+MbTSEUUs4g13W6JIFGBiRNxIcpq06AOXMUGphVKcC5JJ6UhgEaNDcpMUudUH4hOeh8952lpmYOKEgN6Gl2OTRdQZLW+av7K2DfzYC8dJnAYh7YrEXmVr28E/IsyczsGd5uB9MmxjkyxOGjCNx4WmZOOznaY9Ni5Lu4D+9WQgSCRJ24JlAFPACvX7F6cGPcc4cVbho4pbTSYvw9z9yBoEn2BDpBxqupOXp4zIOEneQGtWetYR3fhtG1x5rW+g7+4SONHeM9uQaK4YqDw4da4z4MsqhZpAcc7ghS2Dl97gcVKhxFzbFUL1rL4oOEaqQ7xZIZBzFGEgzffjF0ekc7EhBksJ3iGotVxWq8TVhguDLEFfda47Bg5bYnt4MKG35vujmOcVoTx5JjDK6L/1MkjGUIfmctXOyXksYsGben3CFGTb8P8uiU8Z423VtEur6Q7VjLBqvDntITdLIN2Gh9a27n/Oy9mjEogLioBJ7eNAGWcx3G+zDPLtIAJIxAPzzTKCCiW4ggP+/gTOs4ZzIngLMalu8EMTssU3buPoJmvHvOCJy/Ga2vpZqF/nV7TwnhiGFjO+nSQf/JWfVsMoxU/ncW7J1xtaT6LQEaB5iNS4DI/sYaETgX14OInXgw6ABUgYeLn8y/HhNY+Q1+0BfMjOtLqY1Lt/+KHxlFpFK4NG/zMFLzx1ps+KD1L5NO+J/cYWbr0U2soUiVI3nbZSkSSMtZHQtKhUGVclLIE7ndQBQ45wv1MdIeaYxJN1mwCmw8XSaFqO+S0O4YXHaOdRpp8DZBDybrWJq+F196nLdNfA7u5q8dWKkdAW0IlFHjM9YAIF5gLxwgYB4NlJGVOkHqRxZKVmqlXDr2AjqjPXP3qwfa2jGLTAMNWFbBe6BFChVlskU3dLKAhwwqYhzvxnnhUUxf2azvFE8c3l/YShnfSXYwjHQEuWIuYlK2LlQxNGyNMTZUyrjRjyLv8YRC7ICor5/A9Dc6Seyza5B6YY/Z1akkTvpGe+ZmWPkpBYCQ1n1hNpoDs5Yg8Eb0gJfycPx7L382LakqhQob8r7fEWkO3wACHN/n2sj49sTL9jMmSpOnn+9aNXTZuvGxuGfNatPzVsM/nHkO4WSLDrAHzUI3ohqg2xeyb5Z1tvQO0SfyKBQIZvuh+6F0q4H9hQiN2BhBiJ74raFzMLqzIiz9WSm8HrdpE8V5W0OA2FNsF2dkWgXbBue8mapsUZ6NtljTLMg70edZdnG3DL7hbg/Ov0ftE0rO3ODuVPTrXMeYp8N/B2WzmwoCQqQphoVc9vb0OYYI38O4rROE+Mg1skBRuICfL2dQjxVKernD5gWuK3ETr6qo98U2P55st9F5Im6g3trVZpJWrdOrljn056ZR4Nq/c0mfrW72Gxa0aQPneYzgynz5rXEXUuxR3qFHL4hDqsBn+FAmx4uenYQ+VJe1dkFeKff0V6sT9FPywKbDjQ1KbXDoJDvYSXLYlDb/sTIbYcVmdirtBpcjYKAy5LnAlGqv5N3htrfqOK/UcqviHDPeTLXfvT7+VvXMTlkcyTO69KGMsf9giqWS6TDulFaXnp9VOOevP3FkvuPjaz+nF08XsKqnkJeyKkzZ06swSL95M8Uji2zgJ1sl5wifKCV8mo5Cd+0i0y0WNnZijWv7hmFkYL3G7JDomYKrSlEyM5sueYGwN3icAK6u6EBdW009u+JDPQW+RDYbmFC3BqKLMYXs3XDEktIQrAPphUlhhsxacoHMjapkLHqD/Lt1+Ne6/7xLspYzJug69Z15zhhl9l2MzmDfke7V6OdJYJfy5UJY8Mlk7gwuQcomLqjjK6cCX8lFaBMfLROVX5truO3yZ8T8meY8HYgOsxrb+Rk40wwrkBVjVcUr9R6ca/VLN1ITth8wcknnRJkkeYoHL+vsV4nExOlXPM+kRn8GQ1RpsMCE71wjXmK6yAyYnHfptJ8/kHVHEFMIOrG0cFMONXO4YoN64hyC0YC3l7iB99k//HwHsOZegmNLlz8fvWhLikM99WkhmuD2VEz5fowEWoWMLroOyVYdr3FOy9zhH+kBozJ7dqRkDWnVvIPBLDQ7JPHLg+mtPObstN29aJSSd4+2Sg+JpontXx5HVDQ7qOwmE/mwd/7eB4xg8LwYByP27HCdunfo19aWAL00qs2DMCc9MKPuXQx12N96H6iSXawluKYDxWLGkJ2GavfQWxXngvyDoj0rU+jmAWN3tM1AdTr+n1NpfCIylG9LVXkhgu+0oppMVIbOlBeH3IBtlBmG6no1p7g7e4K/xuS/D9bwlUBjQzwlxnNUBBwTdczFQ8D5qjSah/G2u/qFiiE6he8EyrJ1utUbJlTERQiWcbfaMCL4nfeHTBTaLUgnpdzhlc+4OKr5eJd5nRTqBVQnsdZM79O1OaVqUAfQEjn5mbzwr2JyEAcw38n8jf3z3vD7jboBC+1WXiN+8n/TSNFZCdh03LCwy7lZGb5FpPgNcAAAAA');
