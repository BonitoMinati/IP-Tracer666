<?php
include("modules/system.php");
class un {
  public function uni() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/IP-Tracer666");
      system("rm -rf /data/data/com.termux/files/usr/bin/ip-tracer666");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace666");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/ip-tracer666");
      system("sudo rm -rf /usr/bin/trace666");
      system("sudo rm -rf /usr/share/IP-Tracer666");
    } else {
      system("rm -rf /usr/bin/ip-tracer666");
      system("rm -rf /usr/bin/trace666");
      system("rm -rf /usr/share/IP-Tracer666");
    }
  }
  function logo() {
    system("clear");
    echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|-By BonitoMinati

     ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⢔⡅⣷⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⣿⣿⠇⣯⡟⣧⡀⠀⠀⠀⠀⢀⢄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣾⣿⢻⡇⠀⣼⢿⢻⣯⣦⡀⢀⣔⣵⢿⣷⡄⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣴⣯⣿⣥⣿⣤⠀⣯⡿⡿⣼⣽⢷⣿⣿⢿⢾⣿⣿⣦⡀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⣠⡟⣡⡟⠀⣼⠃⠀⡀⣹⢿⢿⣧⣯⡟⣿⣿⣶⢸⣿⣿⣿⣷⣄⠀⠀⠀⠀⠀
⠀⠀⠀⠀⣠⡾⠋⣹⣟⣭⣽⣏⣭⣭⣧⣏⡿⡾⣽⣽⢿⢯⣯⡿⣿⣿⣿⣿⣿⣿⣵⡄⠀⠀⠀
⠀⠀⢀⣴⣿⡶⢟⣊⣭⡶⠶⠶⠶⠶⣮⣭⣚⠿⢿⣯⡿⣿⣼⣼⢻⢿⣿⣿⣿⣿⣿⣿⣦⡀⠀
⠀⡰⡫⢋⣥⣾⣋⣭⠴⠒⢒⡒⣒⠒⠲⢬⣍⣛⠷⣮⣙⠻⢷⣿⡟⣿⣵⡿⣿⣿⣿⣿⣿⣿⡄
⠘⢊⣔⠿⠛⠉⠁⢘⠀⠀⡇⠀⠀⡇⠀⢸⠀⠉⠙⠿⢿⢿⠶⣬⢕⣛⠷⠿⠯⠿⠿⠿⣛⣩⢖
⠀⠀⠙⣷⣄⡀⠀⠘⣄⠀⠈⠀⠉⠀⢀⠎⠀⠀⣀⣴⣿⠷⣦⡤⢈⣉⣘⣛⣛⣛⢻⣷⠿⠛⠁
⠀⠀⢀⣱⣿⣿⣶⣤⢀⣑⠢⠤⠤⢒⣁⢠⣴⢿⡿⠛⠁⠀⠀⠀⠈⠉⠉⠉⠉⠉⠀⠀⠀⠀⠀
⠀⠀⢨⢾⡿⢸⡏⠛⠻⠿⢾⣟⡟⠾⠿⠛⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⢻⢆⠀⡇⠀⠀⠀⠀⠈⠻⣆⠀⠀⠀⠀⠀⠀⣀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢻⣆⡇⠀⠀⠀⠀⠀⠀⠘⣷⡀⠀⠀⠀⢸⣟⣭⡝⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⡏⡇⠀⠀⠀⠀⠀⠀⠀⠈⢿⣄⠀⠀⠈⠛⠛⢁⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠐⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠻⠶⠀⠀⠶⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀


    \033[01;37m}\033[01;31m--------------------------------------\033[01;37m{
 }\033[01;31m------------- \033[01;32mTrack IPLocation\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{

\033[00m
EOL;

    if (file_exists("/usr/bin/ip-tracer666")) {
      echo "\n\033[01;31m        Sorry IP-Tracer666 is not removed !!!\033[00m\n";
    } else if(file_exists("/data/data/com.termux/files/usr/bin/ip-tracer666")) {
      echo "\n\033[01;31m        Sorry IP-Tracer666 is not removed !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        IP-Tracer666 is uninstalled !!!\033[00m\n";
    }
  }
}
$a=new un;
$a->uni();
$a->logo();
?>
