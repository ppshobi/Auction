:loop
php -f cron.php
timeout /t 5 /nobreak > NUL
goto loop