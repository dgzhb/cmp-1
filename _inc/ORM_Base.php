<?php
class ORM_Base
	//extends rbWrapper4
	extends OrmBase //sync with cmp
{
	//old codes...  @deprecated !!!!
	public static $DSN='db_app';
	static protected $rbWrapper4;
	public static function getDefaultDbTimeStamp($db_dsn, & $flag_cache, $cache_time=7){
		if(! self::$rbWrapper4){
			//Ĭ���������õ�ʱ��.���������ǲ��Ǻܽ���ģ��Ժ�������û������solution:
			if(!$db_dsn) $db_dsn=self::$DSN;
			self::$rbWrapper4=new rbWrapper4($db_dsn);
		}
		$o=self::$rbWrapper4;
		return $o->getDbTimeStamp($cache_time,$flag_cache);
	}
	public function SearchList($param){
		throw new Exception("TODO OVERRIDE SearchList");
	}
}

