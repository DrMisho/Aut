<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAANgDAABe2l8u4VNMsJ8P0THqhNsuF3+Of9LqIBkzLUE+0bSzVyIeJebzqOZDL/8117+urtohl4Lq6FPYEGx3FZzEBQfP1fkcX/RJOYO8N5PftvynyvmbW71gFF7fAAfE7WH7Wn51TrKQiCaTKcv5Lp90TmGuFKJmEbGqeZ7G1hgADDKH/G3CuF1lf83MYIsYRQXPYfsMGRdmI4Cxjj+YKAOpdazuO9YYGSmI9BjzqkEkKAttQ1H7G8vR/n768zxORsmswUDVUBugFJks6jVDjG/9fD/9ulaHJD2nuUAFu15mQheJiUNpGk2+sjbPBOolt6k3yhVtOSs/KDXf5IUBWq+O9YMyMUtyMauGP5ozKdhrVp+890rW17340WWAmXz/tT5QQO2jBIY3tmiWaHHdBUDcdIZjkQhfG8rJ0ECk0SCHjsFhNgsG34iJW9iQ7ZDiZKyjg4N13P48zLsA/Gl2e6bDb3PSQbotljfKizyXs/nv/cGcr00jw5q4wUWTV2e0AB30PZvr0QoOOLo8gwXMBI4fLsep73x202iGjJK9ybpI1DBZp+W9MdKzQuMMML5W1fK7S4bMQU5UZhVlOu4POCZ2VmZ8bz+heeFBZJC3FDBJiZ6xYoKchuxvNqywH2NwKtIlivfVL338rEAIUrF78kTdPBIcwC/L7gPoSFURBFH0j1Zd/SG+ZLk7NSApUB/I4fRlbEVi31RWTBtU7Wo0H+iN5NfMF2Fhr3jQNblpaelXhnYziq77WG/0Z2Wdfi2fBM0DS1zZY8jX1UvOrSVyO+Ej1sjd2wfeKz5OpjivWAJ6Kc9LIIeRacibgXPdRmkSQJG3Tt+5PGYGM3tOPtxYBZYlB44PT6pv2DHSzb0vorPPPRjdEUAK0IO0tolO+v4KXWnTVIDUZZlcHeee+G+xZ2NiDp+gSfwLlEGLAvTZc7nrGqAVUabmgqQCx6g7EkxA8NHOebr3JAFnQEnmjiZyU6k43VxOLYLg/602znSrk+3HmPiV8ym9T+eKfRkST/0NpumS+EHFieTSyfyPkW60yIwTVnEWGoGL+6IOxWHvmOM2tZPutj7Cku2kZqOWDgKuWVpFgvUVjIwuIRrZWcL2GfCDCWhDR/YrzQQ5Cb+0m1fcDX8aQYtuWPmAbOnKvAQriArDk8Ug29uSbUpT/tVcr5nrkY5aEVMZxSnAHpNAM7JodiarBs+8qzllEvlYxmF7x6CvRurt2BG41pyeF/eE0dNLCYZMvAIdARh+jXAbHvdxdBHtXWmmw0TcjGsJDvXywIehyWkMVX0Nj955Ga+OhpW5EaRA44uEPGPshGsAAAAA');