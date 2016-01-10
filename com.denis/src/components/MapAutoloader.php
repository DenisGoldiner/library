<?php


class MapAutoloader{
	protected $classesMap = array();
	
	public function registerClass($className, $absolutePath){
		$result = false;
		if(file_exists($absolutePath)){
			$this->classesMap[$className] = $absolutePath;
			$result = true;
		}
		return $result;
	}
	
	public function autoload($class){
		$result = false;
		if(!empty($this->classesMap[$class])){
			require_once $this->classesMap[$class];
			$result = true;
		}
		return $result;
	}
}