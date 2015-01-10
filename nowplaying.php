<?php 
  echo 'Now Playing:';
  echo exec("python /home/pi/media/plugins/edmrds/rds-song.py -n 2>&1 ");
  echo '<br>';
  echo 'Station ID:';
  echo exec("python /home/pi/media/plugins/edmrds/rds-song.py -l 2>&1 ");
?>
