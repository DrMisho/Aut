<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/tRepKBBxaXK06s9UJx3tkQ20y0l1aUQmwEacT4/cAYM5XjLcKIY1RhHgB36wYRuykziPlPd8mx20AxwMiM/IaU5c1P6pG6nukyAijDa3C7O+NJGXb/3H+ThOeVsSbphSdKRh9x/MnCu3nMjD0lp2K+3b200dcJR2AOKPwyVCcAn4C28VljpaCCt9zF5j6F/iSgAAACgDAAD8hJ9U5B9xsAf2J+qjrYCCE/uYujUGhVnWEhmkVwoXQZa0mZzC1Hdwj9X8wpQlpV9wMNvNfHGHWVBrSnkqMlIKWxPJJ/wPMB7N/hG5YojXBgJl/S7u8wYL4CCtjs9lbSliKTzRpVeWv9zjJF4lRR4FaxsHB0xHNxSIDXfAAO/6Oh1D6lNPjoiQrVhCfjqzX9K0wOJ/P0iX+79yXblaJVwIYnt9gGPpzLCEw0OX4MuvYvRSh85+KZhya1om73gz9Rxo4hnF3T/pYN/a1u50OGTcd48/b153TILKJ4IDaotaTa2y1WISRRm4Y1bimc8L3icG7PacbdVSDQ3wN4n0HbdnB1S9K7vLZD8k8WmQ0rE6wsRoGIXXjtwZ9fXRUE1m+93BXblU1UYF1S+7swPlEWlBUbMY1kuZdMnlJDXC3kAlV9jXy/5d+rYyuGKQ0inPUK1aZqLITpRkYQVk9DIJTWQpMrLyjHn4A1pFEYKzfTH86mygz7f7XQsAZsrwaUP3M1fyj6Ky9VYR5YSbbtKzh0QyuNJFcj2W0r0ZhCeaelWvzoXa/kvJ9ZBjVd9FddnkHX8m/i3dlKW7eZi8400grNEmnHLw+Slhva+249tj49uuzX8wg9pIjoGQNO07YzD3wWl0tYOPxZLW+wR++s/TPhpRME3YFertNTK6NlPNHlap0NOhknrXXqKy2QrMJK+kThHhQyEHfQjWi1HYR6wVL9Ibpl4V2vxhOyTLivlV67Fyphm+1h222kW64fDMeOrBj3ulrVc5LYAaxPdNFPAT+EI4TUuJWMvlq+5zOA2MYbwCL4wUTcHYmZ5wPuXljiiYDimn9C10oqUAtTUwF+LvXsYmZrIA3Q5IBh5fl3lfufz2OodckoRrF6gkfWu1R2BgZNElqjF6YDDwcMpfhhUUtMVk7PcEdC6ZILO0j3cYubHONYIQGcQGRA7wvsHV2w3B4F7scaTIn68IkXwPgnQJ+Rxnzo8ziokDvW73arLf9DDj4ahXcO1SLLex5yvrDUXzhHNF09hf95BArswuHMdX5D4/tsIVKTCALqzcUrfzjdKJojyjtBcQs43hAAAAAA==');