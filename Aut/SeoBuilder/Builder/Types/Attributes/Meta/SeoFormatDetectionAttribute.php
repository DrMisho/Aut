<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/JctJ7xYCruFs9QFfbrXTbcjoAZ9Q99vpxmvFlninHQ2FSRbRAJ3Va0ylntb1wPVVvnKFtXCQGMnkFKqhs5Zy4AinbM9iQ7ubpbkNJLb4u8YE5MTLfiWsQ5YCcmg2HjtF0rbKmVRa6Rjml+wd6ViHDRS8jesBJYpWfTy2mDEVTFX4b4U1IuIj9td+cQiFfOs7SgAAALgCAAC1Pst5YHoSYWYgry0OjVDbo1uEHGFnz3yIe8WPwDk4D6JNm1x56hS1lxTMzZLwZFVEYiEbKWxDlGqVZLH8zAFLg0hFQhTisPrWqFuioAYg04n/kEBkswA5BSJNo9xsxXJUW1amTf8NZ70EeZMo2M9byfDIVjCZHPNC6lzZcFE5pzttZnqFadQpuETxfgbFkbDaRD/+Dro85En3ZTTFH8wu+wMiN19Rc1TRmwrn3TeHbqoXMfjYxyEC47VHu0ndqZhPkCR86hOtTquSGtB5KgQVB1KPfAZ0pWBl5fWozDq8J7O0AuoW7DYsp6/69oxUCbDt5LqUSy6h76i3hLTftGK+/KFjnajFsS+GC0wdSDL8OwnDh2dQg+Feur8I8qAH+RUYROIr148YFLrv1anHs7/ZKa66HknKrwWQaFg+FELV9o+dANczAxit+wvUFLPeyF06YjP8puI/am02d3NrStiLWyzDCSfPc1f+L/P6PrHRVga5wxXHRRcXNDNL8cSDDVQzQBaocrj37B5JSgY1EWMy3qwDiRt+FDU8KuFyRYw2lFdUSHQdkhmOVi4Eoo9YWskSN0Hiy+8DA+AT8eUeVERX+MTnmXalZfccJ4phiFNtclV03b/oj50wDIDfYqvAIEiNxtzt76DRIbm/pETZUy7oKTHbspo7LW3BDrocs0WrM3ptNSCTomK1bC672zqe2yeIyraTwTEnNuYyIQrPi/FILNLftRlX/jGa7tGxaWOhkuKpBvH8nj8uPN75MrskJuvu6Qd0mvMnwUf68M0QLahLp6fPiYEzGgpA6AHnkwx2KvqAozoeTt/wNxXwQjNyRyRknMoyn6hRpeiBc8Gg0QgjJwskg6GtiiRLR8+qKiLSbEM/Un1mazpB3Kyz+xQGIGPh3w+uuXNrahuJ8xkgJTYTBAyeDtgfzq4AAAAA');
