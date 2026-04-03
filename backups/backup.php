<?php
system("mysqldump -u root church_management > backup.sql");

echo "Backup successful";
?>
