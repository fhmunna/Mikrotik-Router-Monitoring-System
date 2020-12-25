<?php
	class Router{
		private $host = '103.122.90.18';
		private $community = 'public2';
		public function __construct($host,$community){
			$this->host = $host; $this->community = $community;
		}

		public function getHost(){
			return $this->host;
		}

		public function getCommunity(){
			return $this->community;
		}
	}
?>