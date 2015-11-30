<?php 

class panier {
	public function cree(){
		if(!isset($_SESSION))
		{
			session_start();
		}
		if (!isset($_SESSION['panier']))
		{	
	$_SESSION['panier']	= array();
		}
	}

	public function add($product_id){
		$_SESSION['panier'][$product_id];
	}
}
?>