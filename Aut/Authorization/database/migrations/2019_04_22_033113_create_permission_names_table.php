<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAKgEAAAJr+L5f1qYwN8rwZZtjK1xBzwZ5b2WvYk0/0TB7lKl5T/RHqqEDb9SatrioQjLUDEqWzPVbce+WbJENoCOIzB7jjkMtuPSDToJSZdzHJpIVPPjMqEdQmluEeOHBdRGxKvdixG1T2Pf0OzKPJzJrv6jLRaID6xmUnN58c1h57z3ZaUAOdZb7BRW3tSgUX3Lp8NGuOdD5FUsYeKofBnQxytOc+j2w0XMFJQ1Paa2pE9zeEWd9ACt9x3tPfH1VjO7f0q5Iw9DeWxX2iYPuFYi76EzffOOFQmvLv4gQ6CTolxVoip3OnN6ka7Lb8Rf+2Fn6CnJUWqJ6oHvFhiRXnO6mQpY7yHqNOdJV612nctGVzikKfpQs+NRYv30k8CUTF53GkEZyTykwKYLN3LxEwtfsJ5iPaoBZZJ/Z2Tly0+AlleOfiIHcz6k9DeRPBNZWViBFCrZTD7OdEjEYOpFictkARKvMpj4P3hSGYAcu/PWsZBzA/dYpgD6ysTejardry++2pyA+w5MKapSCrBlOwQA0QaBEUaZ1Rpc0Fswp++KCcRDV2YBUcSfwH7GNq9JrvbeYa7BS4ntLjQmKo1sq6EBZL2CrjJlYKZu3p9ME/TgdnmuEbRkLIQKSD87ga1KSbW8Gbt2RIHCjAo+RvPEBMkXRZfWvS6My+n3BUVrPfehEGKkd/tgbQ667n/VcvwS2B1f1R0F1MAGrILkqH6vp9IuTpQ7Zy/0aFjEnu2Owh8h57fVM8R5CrAh8/S7EuAaIMB2LGVBEcSjcfQWfpanownBhnIWmbZB2Rfg/QT14deMWzyW4xBozLJ7FIofNtmejtkyJfTjSDc/AMUZbe1jKPlUeix/Fov131ciGw5qg1O2p1U5m4q+Iv/Et4dZC911xCyU7P/gT8WU0+O/o8nRoO4BiHZysehQm9r4G/WQ/b0+5bZ8nOhhlXuOEktM0AfKSVFIXI30+p6AKB7V4DWDyWP/Q8YEbRFb0XACZgBb7dR4YvDrP4/BdVPv29Dc8+7jxbpOkAdX1N1JImErp+gsYTwJYEfnf9WCt66Iv2PRNoAR6ql/EPZFzRvZaehzmsl90syUdCZMa2nOGboLGYohlIfe8Em6oJh2LkrOJvYZh0qSXovdzAZKa/pZnYEMU+kDZMdnIGKJIwv9GBBvfirD1+msDsj82RkWO+UNqpt6IvzffYdLCZIsciSmgEmOfKeNCNE7ROjveEY3t5HVoIVo7/q+6tiuX4j0uux5lJa0mXuEHi1JjWM6vYUH7SsolSEChseKetKHc1POmeQXwUCADqhQrW04Jj3HJSeL6ls5ItvikjVVcvEDHnwGYIfe0OoxjpyJ1qV8G/nC6UM7529bbZtbeYxjV9hRdgX3sQPsoOLJK8udhIYCcdpUbALv90cuH8Vplf2LBA6i3ymYHrBlV/MvdtoSHwgSEH3BK5Cb1yTfehAV965cdlHiWfc1DMSnCgHhadp6nRb53bsQK+r1FLPy/j0xfjNxLAAwt7gH021O4nLq218p4MqGCNygSTQApHvW3CG40tZgMhavUmJAoXnTUPRW1r7TQcdkQ1B0gXo6FuncAGqP/h/QWvfhAAAAAA==');
