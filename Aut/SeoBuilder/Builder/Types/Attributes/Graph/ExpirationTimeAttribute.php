<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/O0oT8gx2zhge/LqkNO3PCA6F2geIqz13fK4BXZlutG6azRGNCjLINqjFSiqmDYkXZVck1EjYq++N3FUy0kpZrbkvUZF7zlEgfR1VrFte00vz6a1FmOGoXFCmth103NZForxUrOjwr+n7EkE8eWRhn2ZIR8EfUSRnqygO/FASmV96nDjzcMnbJKDnQPdCx6tjSgAAAIgDAACQPi9WvPj6A2KIIw4zFoIccMB6GTft3UWzoaH0OnfAaZHa5n0kw0XyiIrB5vT7UibISUYE4pVViceY7Dk43hWAbTmw8JMz/OW3jmo+mPEkC7no+0OqE5S9tMl6OLi/Lz1Tnfd2e6wV9GEm0uz9SU+HpYC+aqSchQtSJnt4Z1kkfRAHBx7oYu1ZscscrdAOmspCLaXMPZh0kTGGPPtuPaEGOy6hbp5VBTh4rkz4oE3ZHB3+veHO6bJcVeLIAtAu0lf97px8ueqVIZyU/6+GszGRxcvPGDKC+j1UuBHzUKCQWasuptMolYkwJxxzrr2ajjgRuJvk047r/Z7B/BVNHy5CsEJCRXXKA5+UtqKIgzvAMmM5RgHq74EIVaY0PHAV2yhh54JddIGYWDRgpbQJQabaCW12j7xldoKeTC2gZcxLMYYUyAOMhHJd5D3vgWCofR2AcXbtUVP8dscTb+/kkH8g2Ih3N22germAaapYNjgXQUr+sQgVQ1SR3kN8Y7YHkrRuSMk+Wg2QrZKGgWgrlubVF+ZqFf3mxhcuJ/o2fKvbCGzRon49U0KXrQQK2a/c8KWZ/Ug9xcsyeoEsARsbrmMmzAoz7WVC4CoDE+oiNV8nB6pWHCXaIcAA5CA+PxRZSEs0Hjt6dTLdANqRCHvl7MmGHjYALQCxS924pZ/peWor+X/NINOi2h9HGlD0Hyi/RBLLTx1Rq01d26juQFLB9SYondsiF2LZNHg7rnwyvaQBny2bgHMrWv3kVNHMLEtFJK/tXWIavIpOvd8dV0iXZaSbPqiMZC+QjYesRpdtFteqLH6xXEqb5JAyXa93oshKAgePCz+KSaHyjoQ2uTtBTJPHe7TCIbYQldBL8wDH1SgfACm9EhKFqPlCxocMEJl91ElP3p1gO+quvKUnGCUgnxtTfC4KfcL53CowJqhkx3ZRG675VwRXpeaKNrrmK83aJbtkFA5xeQjr3OTeINUT6AsxCMyXLC7QcA6ou6/nipIMOS62WGztbYTnMwnmWiFBWoq1OLkt1rTYe+82bp8d2/tP92Tdsdz+3p9FRWcsL0nC/8tveAl6P7QGHJFltZ2k5FpZQQ2atleDKJmoxJVH87s/U+NFHXdJOywNfCfhqto2JRmKdf+VZ/OP/2Hk0FLZFEu6v9KSsPLHjWY2ptiqZpAwQ9pFnQcecIV2ZvOLPFCzyRFKclaijQRAAAAAAA==');
