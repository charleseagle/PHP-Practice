<?php

setcookie('username','charles',time()+10);

//unset cookie
setcookie('username','charles',time()-10);

?>
