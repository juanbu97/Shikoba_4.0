 #!/bin/sh
 cd /var/www/html/back
 mysqldump -hlocalhost -uroot -piesgc_0829  shikoba > copiashikoba_$(date +%d%m%y).sql
