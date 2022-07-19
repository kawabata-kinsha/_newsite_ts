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
	public function getCurrentCategory(){
		$currentCategory = "";
		if(isset($_GET['category'])){
			$currentCategory  = $_GET["category"];
		}
		if(!$currentCategory){
			$currentCategory  = "all";
		}
		return $currentCategory;
	}
	public function getCurrentId(){
		$currentId = "";
		if(isset($_GET['id'])){
			$currentId  = $_GET["id"];
		}
		if(!$currentId){
			$currentId  = "";
		}
		return $currentId;
	}
	public function getAryLength($ary){
		$count = count($ary);
		return $count;
	}
	public function getArticleId(){
		return array_search($this -> getCurrentId(), array_column($this -> getIndexAray(), 'id'));
	}
	public function getCategoryAry($category){
		if($category == "all"){
			return $this -> getIndexAray();
		}else{
			$ary = array_filter($this -> getIndexAray(), function($key) use ($category){
				return $key['category'] == $category;
			});
			return array_merge($ary);
		}
	}
	public function isFirstArticle(){
		if($this -> getArticleId()+1 == count($this -> getIndexAray())){
			return true;
		}else{
			return false;
		}
	}
	public function isLastestArticle(){
		if($this -> getArticleId() == 0){
			return true;
		}else{
			return false;
		}
	}
}


class Pagenation {
	private $ary;
	private $perPage;

	public function __construct($ary, $perPage){
		$this -> ary = $ary;
		$this -> perPage = $perPage;
	}
	public function getNewsLength(){
		$count = count($this -> ary);
		return $count;
	}
	public function getTotalPage(){
		return ceil($this -> getNewsLength($this -> ary) / $this -> perPage);
	}
	public function getRemainderList(){
		return $this -> getNewsLength($this -> ary) % $this -> perPage;
	}
	public function getCurrentPage(){
		$currentPage = "";
		if(isset($_GET['page'])){
			$currentPage  = (int) $_GET["page"];
		}
		if(!$currentPage){
			$currentPage  = 1;
		}
		return $currentPage;
	}
	public function getListStart(){
		return $this -> perPage * ($this -> getCurrentPage() - 1);
	}
	public function getListEnd(){
		if($this -> getCurrentPage() == $this -> getTotalPage()){
			$list_end = $this -> getRemainderList() + $this -> perPage * ($this -> getCurrentPage() - 1);
		}else{
			$list_end = $this -> perPage + $this -> perPage * ($this -> getCurrentPage() - 1);
		}
		return $list_end;
	}
}
