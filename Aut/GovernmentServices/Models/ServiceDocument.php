<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/vIAQPNcs8kzDl6DGTkW0s8I5DpFKwF/Uho1fkr9WXlzFDkhmwZSSpPEIqBuxbY2EBRmNwes5ZY/mTt/aehWICLAgmbqfFSXVxEQfJyFnPtJ9u66YAmT6slc+b0mPNKlJ8UnNcYumjAV1TaxwmRgguw0XSSyd0L1KD7UGsTI5HmGuSPX8wyaUYaPJLdJxHiSfSgAAAMgCAADSpLXj7oN54DRk/qVcR74VSKZ039GVEzeajb3jkH+ToI7gyJA47FB1lB6pnJCdV8U9vllz8dmqcw87wt5OwvlI1c1wvmqFKC6DeKI4UCJZ6qDkNa0xKCvS3Tj+upz4iDMm+rM9Z9DTze0bCIIisTwuUt15o1BU6FXJtkcIeEUz45KP6JD7Y8AZh0Ym1e6bi8+bXGH0/NzWKm2H6G9x7kFTCMR2VE+ccu9IV1Y6lmHLXWytIYv7V39jPIg0t1MoZVfRTUtvM8PLXo3vcUgW2XUYNCbNXNNftH6jisvU1NfjGlreU0z+6AL1blFJyIxDYXyr0KeWI0Pqk640iDAHp97otakAOfRXad9aNq7JYPruGy1ncEwigmiYap+Tcd3FdKchislz1dDwLbreXETgCO/WMCQkshQPOglElGfEeNM6L00SJ3S4R71xm11QZ83Gwr5m9q8aoijCQ87MP+gcCMLHRaEHj5+FEaFtKSTGMjsDiMIXhT66EDyaOUrppGAliq5WySp6PtMbuAlYOnqMKY6NzUQCg5dQGjOiZk85Pw4i/ogY4Gu9ZpzM3seadyuTrCDCmf4SoE/A2xk48MkfOTJPOoHIBK7DEGRYVk33CtL6u2vuZ1iYRKt27ZbaIEYL/6u8o0qpMXR81SxIEsLWeKe1csJyyoj2Uc9Vx/pO/X0OxAXgJQ9o2160LRZuKnWcVKwGKaE/LUCbdsGa4JxOz6W0J24CezWhbJvz97JCEIa3SoQl6U9Elz/NmkJG+g+54buvTsKL6BrFyDcx73M8zlz1KzD1zBfHk/N9/GbwLPiQVgnhYvXhgpiXNomGd9rB7IYbO9qpZlJFCevknoXMpibPo8IRRPcsDWihRbBClvYkITfWo5DCgDLLErQjQBQclAZQbUnyaaEZK+wQiTSMfC4CVhFXyKvwMETTjKU3CgY3736MTrYlRZtFAAAAAA==');