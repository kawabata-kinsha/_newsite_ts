<?php

class IndexAry {
	private $url;
	private $revarse;

	public function __construct($url, $revarse = 'none'){
		$this -> url = $url;
		$this -> revarse = $revarse;
	}

	public function getIndexAray(){
		$json = file_get_contents($this -> url);
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$ary = json_decode($json,true);
		if($this -> revarse == "revarse"){
			return array_reverse($ary);
		}else{
			return $ary;
		}
	}
}


class Pagenation {
	private $ary;
	private $perPage;
	private $query;

	public function __construct($ary, $perPage, $query){
		$this -> ary = $ary;
		$this -> perPage = $perPage;
		$this -> query = $query;
	}
	public function getNewsLength(){
		$count = count($this -> ary);
		return $count;
	}
	public function getTotalPage(){
		return ceil($this -> getNewsLength($this -> ary) / $this -> perPage);
	}
	public function getCurrentPage(){
		$currentPage  = (int) $_GET[$this -> query];
		if(!$currentPage){
			$currentPage  = 1;
		}
		return $currentPage;
	}
	public function getListStart(){
		return 1 + 10 * ($this -> getCurrentPage() - 1);
	}
	public function getListEnd(){
		if($this -> getCurrentPage() == $this -> getTotalPage()){
			$list_end = $this -> getNewsLength() + 1;
		}else{
			$list_end = 1 + 10 * $this -> getCurrentPage();
		}
		return $list_end;
	}
}
