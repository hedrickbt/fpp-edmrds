edmrds
======

Basic RDS support for the EDM transmitter.

To install - modify the /opt/fpp/www/pluginData.inc.php file to add the edmrds section as per below. 

<?php

$plugins = Array(

	Array(
		'shortName'   => 'vastfmt',
		'name'        => 'Vast V-FMT212R',
		'description' => 'Basic RDS/Audio support for the Vast Electronics V-FMT212R USB FM Transmitter',
		'homeUrl'     => 'https://github.com/Materdaddy/fpp-vastfmt',
		'sourceUrl'   => 'https://github.com/Materdaddy/fpp-vastfmt.git',
		'bugUrl'      => 'https://github.com/Materdaddy/fpp-vastfmt/issues',
	),

	Array(
		'shortName'   => 'edmrds',
		'name'        => 'EDM audio',
		'description' => 'Basic RDS support for the EDM',
		'homeUrl'     => 'https://github.com/drlucas/fpp-edmrds',
		'sourceUrl'   => 'https://github.com/drlucas/fpp-edmrds.git',
		'bugUrl'      => 'https://github.com/drlucas/fpp-edmrds/issues',
	),
);

?>

NOTE: There may be other plugins in the file, the above is just an example. 

Once the file is modified, then go to the Plugins option under the Content Setup menu and install the EDM audio plugin. 
The setup will take about 5 minutes to complete, so don't be surprised to see the circle spinning away while it's installing and compiling the pigpio files. 
