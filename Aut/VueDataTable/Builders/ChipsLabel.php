<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/p7O2LSMKklNGUJjNSqEK4RpBEixwxd7/ZOo2/Q9aEMSXY8/YGm2PvoWfkHne+wXF8PeYg8F4F2MCqsWaWfltnNQ4242yAiwuNAC+g0eL09kGLqswI54Py+bkSxuVa+WzzH/igyIhLrU7BBpxZEOA3N2fnq509vJzMZdiDRiIO0mR3sTKvVRsOXbYB1pjWNBuSgAAAIgDAADDzMGpNMF9UxHBWR99ooEk6L3nk5VYP9XUoQbt9zcimtrNlHAp+kaguNm5CUP8dp/mfM5xWeQXFAumuCczcAn8icqLNrvwkkzzUrn4ToVAWPABnXddgw6vl0PDBEXwotFsxf2CvD1M2Q3wtlxRN+tHyjWNdJ+emZuFoD116gZq0Tey7gUGoesu2tlqLdS3WIJJlSe2Z/LKbx7nYphrjtNNmtnP62fn4YmeBk6hm81/uFldvOL4xDFlZDSQJhDRY8I9hJR7HCySVYG3MiUUdn6i/WUzjPLxFZPjNzzHds56y6JvRzZHsxw0t96BegMoyvj1r+neZYDEIqKb2DQsPZRnxdxbC/AVzfAMWtTKyHMFWpfbq9BPOBTfTLxPq16qs+DB4xg46J+tce6iqhc7Pj7f8zZG5GZJWFWkmR1NSfi8jL0E1Mxf2wyzlNotQ6Cgn6osC41W15COv/6TH4Y+rnyaO2waJGarJ/OzIqJ8RAsdoD0yWxGR+E5TX0iB2nH4ji1+XLSRkjgP0LdaguxAVdJaOnk2hw1QjsfTNu2XJxEBeWrzG/cy+qaJP9a03NSzYXSwa0POQm32/z5tclyDdnB6GvttVfnmDBJG4U2kTGke6PeLbOy5pqf71lzwxHipT7jEVJcqgtEwFGn2MHTqAwM8E5IeCYdzBf+//IxAKy3ESTnc1PsSaaWYdxoV1ME5Bt7IGPTz6AdVu8o0waf6pvNwaGS8sHAmrlgscrrg3N+/3A6DvWCvTqQ6mbXSWlqUcofpNmPafg0OHNzKdYdoMuQUzzstJ8c7mUO0jnE7215Np78/ClpsRhiC9IjPBmpGfxVpMbIzF0xnWD3oJ7QfpvITyYrPlnKOLWJd/OJUPG767ioudUxZy3dnibZgVHKH9oY5F/43hVcjdkoe3OJYwPXrfTlSKBMDuF3Yb3qyrlN+biLvDwW1qtmWtVn25myojIR/ADVeEV25o4cxbmL7fbDbMFyQyLcJCalwnp3PeF1wqoqtsBGUFKipGc51W52wNyn3V6ceWzCnVZJJtqV2SzIVplBepvayok17VAy8mKksuTXUbACWzFpd0LVw4mGdAwIpmMx8BpsF65CnIu+8yyFcf8H88hkuxrI8iDG0j71FLrxxGQem0y9w5++6fQCm3Q1JkvFhSxyKQJW7Qssua9aAs80SWESifeJFLEQuULvx+3ZA0eoHzvOaAAAAAA==');