<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/NZK8jyDtgYSB5f3A60y4osIM9XpGftUotgSOerrIeSyIR1F+W6K1n/ur94FJ4Urt5rvS33OrW9EgdOXTRsk5tGeiMtqKDccx8ZrdmGJkD/DxN8v1Cu57FPOSWXEx6TlByRyEA9V6MJ9gE7tDdMOD5z3Pemtn30HYYqmw6h00Xc4AQi3MeJCe/PrOpt5fAQjbSgAAAOADAAAUaeUxPvqo3Tyd4M4jE1XjZjiB5MufmJRcQxmZP0x3Dib53+g4bFmFLpAUiI+QZRwAMIS+R8RsO6dsR4gcIKN1BchLtmofP0zSsSgQICF4b8O/X2QgO4X3ceVhBI6eRP7wNLVMeVZYg6FG9e/KZK+S8mCHIRQ6r3mgY37rz2z5runWMZpPsL6vjQdMcKy7KpgZvIlAbltdEkYrm8rpJOuUm5ayDVz3z8mBJ/1xezlmt7mCGeIAcplQFkr2CrWH1RfWlrM+6ff2z1tj/+Z2FpZuZ9Hl0MloD5G4mSii/Z0QlcTmbI27xoNCI4M2NMjefqAF2lEqlKq4ntFzEXTDFTH7MDgJCFSdzHgKZcsMTyj598D+N83CuYRY2HU1y98LF+JXCRQgX2hnbBv1tSEk+zub33WA465N+8lSKKXiJZWCm0UleOyNYhlcGWOcKPDQFXH035Vz3Z0Au6aDFq/CEpi6B5pBhoXl4HiePydOMVd0y4DRp/Oavzsbz/Fnwe3grz3woaRplGsBW/e0zjuqa2vjkRAr2tBSdJEDiroI40Kz6CEnbbhKmzLyDZO72x8BROyhwRC8mI0ey+KX8R6GzE2qRGFOLbmUNb+idXDWiS4mXC/QoBaDA+G0TPIYnlTGwDGQc4I9ZGgMzx6FjhjlRiYk2WVEu3VRjs3/gA9AuPywtlnSsamHIjubWWljqM4AGabzeN9rTJ4r5AFiTsxmWrzcug8oWLeX/q6ZWAha/cazqUup8kSYRQSV/INV9Cn58UUpFz1TZ6U766W3b82pMP9RCazk/YGw7Rc8nppLLluADAKVYSmvzM4BHFgte06teEJK5/zc7W0uoM6Dzi5BIQEBItc0AUBg/jcthOhvqkS9j+C/ndfpfd3g3qOcgnYFCcc0gCXTcwOLwPMXLyHDMZ/n8cu2kF8HD6MGj8sS+kj3xxrjgTbBQMux5QcqIs+1dadWLi0x/ylqqvQ4OwKiR9eLnO519F45ajeJ4vJRQ6IQSK7W/bo9Ns/YCBqXbySfeF8vRItnGTlDC39TgX4fTSllZqngYY6arykOBG5By1WMqlbI6WEswYzwp8EtrfkU+caXJOp5TEB804F6qFEMmiQXHGm+HSJ5JNXQUJPAG73OdCLdJfS25d7JUbrC1kJgQPapKiOqvz9/XMb3NjylnjLAZsqZatZQ/bdSY57dq1j17Z8LL0A15tRVHQ59ar0cA+MQuf08uhIsNoLWYKEDz26vK8sOiwqrzuZHPOLGP4xQKz43FkLhS81gksOxC3r02BjdTbdr0qxmnILA+O7FLjAi9dAZ09IsZ2KnND3YwKgmQAAAAAA=');
