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
	static function symlink ( string $target, string $link):bool {
        $args=func_get_args();
        $ret=call_user_func_array('symlink',$args);
        if(false===$ret){
            throw new RuntimeException('symlink() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
	static function stat ( string $filename):array {
        $args=func_get_args();
        $ret=call_user_func_array('stat',$args);
        if(false===$ret){
            throw new RuntimeException('stat() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function set_file_buffer ( /*resource*/ $stream, int $buffer):int {
        $args=func_get_args();
        $ret=call_user_func_array('set_file_buffer',$args);
        if(0!==$ret){
            throw new RuntimeException('set_file_buffer() failed. return int(0) means success, but it returned'.self::_return_var_dump($ret).'. last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function stream_set_write_buffer ( /*resource*/ $stream, int $buffer):int {
        $args=func_get_args();
        $ret=call_user_func_array('stream_set_write_buffer',$args);
        if(0!==$ret){
            throw new RuntimeException('stream_set_write_buffer() failed. return int(0) means success, but it returned'.self::_return_var_dump($ret).'. last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function rmdir ( string $dirname, /*resource*/ $context = null):bool {
        $args=func_get_args();
        $ret=call_user_func_array('rmdir',$args);
        if(false===$ret){
            throw new RuntimeException('rmdir() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function rewind ( /*resource*/ $handle):bool {
        $args=func_get_args();
        $ret=call_user_func_array('rewind',$args);
        if(false===$ret){
            throw new RuntimeException('rewind() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function rename ( string $oldname, string $newname, /*resource*/ $context = null):bool {
        $args=func_get_args();
        $ret=call_user_func_array('rename',$args);
        if(false===$ret){
            throw new RuntimeException('rename() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function realpath ( string $path):string {
        $args=func_get_args();
        $ret=call_user_func_array('realpath',$args);
        if(false===$ret){
            throw new RuntimeException('realpath() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function realpath_cache_size ( /*void*/ ):int {
        $args=func_get_args();
        $ret=call_user_func_array('realpath_cache_size',$args);
		//
        return $ret;
    }
    static function realpath_cache_get ( /*void*/ ):array {
        $args=func_get_args();
        $ret=call_user_func_array('realpath_cache_get',$args);
		//
        return $ret;
    }
    static function readlink ( string $path):string {
        $args=func_get_args();
        $ret=call_user_func_array('readlink',$args);
        if(false===$ret){
            throw new RuntimeException('readlink() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function readfile ( string $filename, bool $use_include_path = false, /*resource*/ $context = null):int {
        $args=func_get_args();
        $ret=call_user_func_array('readfile',$args);
        if(false===$ret){
            throw new RuntimeException('readfile() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function popen ( string $command, string $mode)/*:resource*/ {
        $args=func_get_args();
        $ret=call_user_func_array('popen',$args);
        if(false===$ret){
            throw new RuntimeException('popen() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function pclose ( /*resource*/ $handle):int {
        $args=func_get_args();
        $ret=call_user_func_array('pclose',$args);
        if(-1===$ret){
            throw new RuntimeException('pclose() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function pathinfo ( string $path, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME)/*:mixed*/ {
        $args=func_get_args();
        $ret=call_user_func_array('pathinfo',$args);
        if(false===$ret){
            throw new RuntimeException('pathinfo() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function parse_ini_string ( string $ini, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL):array {
        $args=func_get_args();
        $ret=call_user_func_array('parse_ini_string',$args);
        if(false===$ret){
            throw new RuntimeException('parse_ini_string() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function parse_ini_file ( string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL):array {
        $args=func_get_args();
        $ret=call_user_func_array('parse_ini_file',$args);
        if(false===$ret){
            throw new RuntimeException('parse_ini_file() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function move_uploaded_file ( string $filename, string $destination):bool {
        $args=func_get_args();
        $ret=call_user_func_array('move_uploaded_file',$args);
        if(false===$ret){
            throw new RuntimeException('move_uploaded_file() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function mkdir ( string $pathname, int $mode = 0777, bool $recursive = false, /*resource*/ $context = null):bool {
        $args=func_get_args();
        $ret=call_user_func_array('mkdir',$args);
        if(false===$ret){
            throw new RuntimeException('mkdir() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function lstat ( string $filename):array {
        $args=func_get_args();
        $ret=call_user_func_array('lstat',$args);
		//As of writing, its actually undocumented that this function can return false, but
		//according to comments, it returns false on failure. ill believe the comments.
        if(false===$ret){
            throw new RuntimeException('lstat() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function linkinfo ( string $path):int {
        $args=func_get_args();
        $ret=call_user_func_array('linkinfo',$args);
        if(false===$ret || 0===$ret){
			//according to docs, can also return int(0) for fails.. and according to comments, can return -1 if the link dont exist..
            throw new RuntimeException('linkinfo() failed. returned '.self::_return_var_dump($ret).'. last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function link ( string $target, string $link):bool {
        $args=func_get_args();
        $ret=call_user_func_array('link',$args);
        if(false===$ret){
            throw new RuntimeException('link() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function lchown ( string $filename, /*mixed*/ $user):bool {
        $args=func_get_args();
        $ret=call_user_func_array('lchown',$args);
        if(false===$ret){
            throw new RuntimeException('lchown() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function lchgrp ( string $filename, /*mixed*/ $group):bool {
        $args=func_get_args();
        $ret=call_user_func_array('lchgrp',$args);
        if(false===$ret){
            throw new RuntimeException('lchgrp() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function glob ( string $pattern, int $flags = 0):array {
        $args=func_get_args();
        $ret=call_user_func_array('glob',$args);
        if(false===$ret){
            throw new RuntimeException('glob() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fwrite ( /*resource*/ $handle, string $string, int $length = null):int {
        $args=func_get_args();
        $ret=call_user_func_array('fwrite',$args);
		$min=min(strlen($string),$length);
        if(false===$ret){
            throw new RuntimeException('fwrite() failed. returned false.   last error: '.self::_return_var_dump(error_get_last()));
        }
		if($min!==$ret){
            throw new RuntimeException('fwrite() failed. tried to write '.self::_return_var_dump($min).' bytes, but could only write '.self::_return_var_dump($ret).' bytes. full harddisk maybe?  last error: '.self::_return_var_dump(error_get_last()));
		}
        return $ret;
    }
    static function ftruncate ( /*resource*/ $handle, int $size):bool {
        $args=func_get_args();
        $ret=call_user_func_array('ftruncate',$args);
        if(false===$ret){
            throw new RuntimeException('ftruncate() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function ftell ( /*resource*/ $handle):int {
        $args=func_get_args();
        $ret=call_user_func_array('ftell',$args);
        if(false===$ret){
            throw new RuntimeException('ftell() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fstat ( /*resource*/ $handle):array {
        $args=func_get_args();
        $ret=call_user_func_array('fstat',$args);
		//
        return $ret;
    }
    static function fseek ( /*resource*/ $handle, int $offset, int $whence = SEEK_SET):int {
        $args=func_get_args();
        $ret=call_user_func_array('fseek',$args);
        if(-1===$ret){
            throw new RuntimeException('fseek() failed. returned -1. last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fscanf ( /*resource*/ $handle, string $format,... /*mixed &$... = null)/*:mixed*/ {
        $args=func_get_args();
        $ret=call_user_func_array('fscanf',$args);
        if(false===$ret){
            throw new RuntimeException('fscanf() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fread ( /*resource*/ $handle, int $length):string {
        $args=func_get_args();
        $ret=call_user_func_array('fread',$args);
        if(false===$ret){
            throw new RuntimeException('fread() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fwrite ( /*resource*/ $handle, string $string, int $length = null):int {
        $args=func_get_args();
        $ret=call_user_func_array('fwrite',$args);
		$min=min(strlen($string),$length);
        if(false===$ret){
            throw new RuntimeException('fwrite() failed. returned false. last error: '.self::_return_var_dump(error_get_last()));
        }
		if($min!==$ret){
			throw new RuntimeException('fwrite() failed. tried to write '.self::_return_var_dump($min).' bytes, but could only write '.self::_return_var_dump($ret).' bytes!');
		}
        return $ret;
    }
    static function fputs ( /*resource*/ $handle, string $string, int $length = null):int {
        $args=func_get_args();
        $ret=call_user_func_array('fputs',$args);
		$min=min(strlen($string),$length);
        if(false===$ret){
            throw new RuntimeException('fputs() failed. returned false. last error: '.self::_return_var_dump(error_get_last()));
        }
		if($min!==$ret){
			throw new RuntimeException('fputs() failed. tried to write '.self::_return_var_dump($min).' bytes, but could only write '.self::_return_var_dump($ret).' bytes!');
		}
        return $ret;
    }
    static function fputcsv ( /*resource*/ $handle, array $fields, string $delimiter = ",", string $enclosure = '"', string $escape_char = "\\"):int {
        $args=func_get_args();
        $ret=call_user_func_array('fputcsv',$args);
        if(false===$ret){
            throw new RuntimeException('fputcsv() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fpassthru ( /*resource*/ $handle):int {
        $args=func_get_args();
        $ret=call_user_func_array('fpassthru',$args);
        if(false===$ret){
            throw new RuntimeException('fpassthru() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fopen ( string $filename, string $mode, bool $use_include_path = false, /*resource*/ $context = null)/*:resource*/ {
        $args=func_get_args();
        $ret=call_user_func_array('fopen',$args);
        if(false===$ret){
            throw new RuntimeException('fopen() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fnmatch ( string $pattern, string $string, int $flags = 0):bool {
        $args=func_get_args();
        $ret=call_user_func_array('fnmatch',$args);
        return $ret;
    }
    static function flock ( /*resource*/ $handle, int $operation, int &$wouldblock = null):bool {
        $args=func_get_args();
        $ret=call_user_func_array('flock',$args);
        if(false===$ret){
            throw new RuntimeException('flock() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function filetype ( string $filename):string {
        $args=func_get_args();
        $ret=call_user_func_array('filetype',$args);
        if(false===$ret){
            throw new RuntimeException('filetype() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function filesize ( string $filename):int {
        $args=func_get_args();
        $ret=call_user_func_array('filesize',$args);
        if(false===$ret){
            throw new RuntimeException('filesize() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fileperms ( string $filename):int {
        $args=func_get_args();
        $ret=call_user_func_array('fileperms',$args);
        if(false===$ret){//It is not documented to return false on error, but testing shows it's the case.
            throw new RuntimeException('fileperms() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
    static function fileowner ( string $filename):int {
        $args=func_get_args();
        $ret=call_user_func_array('fileowner',$args);
        if(false===$ret){
            throw new RuntimeException('fileowner() failed.   last error: '.self::_return_var_dump(error_get_last()));
        }
        return $ret;
    }
 
}