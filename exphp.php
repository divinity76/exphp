<?php 
declare(strict_types=1);

class ex{
	private static function _return_var_dump(/*...*/){
		$args=func_get_args();
		ob_start();
		call_user_func_array('var_dump',$args);
		return ob_get_clean();
	}
    static function unlink ( string $filename, /*resource*/ $context = null):bool {
    
        $ret=call_user_func_array('unlink',func_get_args());
        if(false===$ret){
            throw new RuntimeException('unlink() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function umask ( int $mask = null):int {
        $ret=call_user_func_array('umask',func_get_args());
        if($mask!==null && $ret!==($mask & 0777)){
            throw new RuntimeException('umask() failed. tried to set umask to ( '.self::_return_var_dump(error_get_last($mask)).' & 0777) , but just managed to set it to '.self::_return_var_dump(error_get_last($ret)).'.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function touch ( string $filename, int $time = null /* = time() */ , int $atime = null):bool {
        $args=func_get_args();
        $ret=call_user_func_array('touch',$args);
        if(false===$ret){
            throw new RuntimeException('touch() failed.  last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function tmpfile ( /*void*/ )/*:resource*/ {
        $args=func_get_args();
        $ret=call_user_func_array('tmpfile',$args);
        if(false===$ret){
            throw new RuntimeException('tmpfile() failed. last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function tempnam ( string $dir, string $prefix):string {    
        $args=func_get_args();
        $ret=call_user_func_array('tempnam',$args);
        if(false===$ret){
            throw new RuntimeException('tempnam() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }

}