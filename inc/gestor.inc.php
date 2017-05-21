<?

@session_start();
# CONEXION DB #
require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/lib/core/conn.php";

# CONEXION MONGO #
//include $_SERVER["DOCUMENT_ROOT"]."/inc/lib/core/conn_mongo.lib.php";

# FUNCIONES #
require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/lib/core/functions.php";

# SESSION #//require_once $_SERVER['DOCUMENT_ROOT'] . "/android//inc/lib/core/sess.lib.php";

# VARIABLES #
require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/lib/core/vari.php";
  
//require_once $_SERVER["DOCUMENT_ROOT"]."/inc/lib/core/cdn.lib.php";
//require_once $_SERVER["DOCUMENT_ROOT"]."/inc/lib/core/maxcdn.lib.php";
#GESTIÓN DE PERMISOS#

//require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/lib/core/perms.lib.php";



#CAPTURA#
//require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/lib/core/capt.lib.php";

# POSI #
//require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/lib/posi/" . $hw_seccion . "-" . $hw_accion . ".posi.php";

# EXE #
require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/web/exe/" . $hw_seccion . "-" . $hw_accion . ".exe.php";

# VISTA #
# HEADER #
require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/web/head.php";

# CUERPO #
include $_SERVER['DOCUMENT_ROOT'] . "/inc/web/tpl/" . $hw_seccion . "-" . $hw_accion . ".tpl.php";    


# FOOTER #
require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/web/footer.php"; 
?>
