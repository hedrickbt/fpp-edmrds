<html>
<head>
<script type="text/javascript">
$(document).ready(function(){
$("#nowplaying").load('/plugin.php?nopage=1&plugin=edmrds&page=nowplaying.php');
});



</script>
</head>

<div id="rds" class="settings">
<fieldset>
<legend>EDM-LCD-RDS-EP Support Instructions</legend>


<p>Before you use the RDS capabilities of your EDM FM transmitter you must be comfortable 
with soldering and connect the SCL and SDA pins from the RDS chip located within the EDM FM transmitter 
to two pins on the raspberry Pi. Currently the two PINs to use are pin 31 and 30 for SCL and SDA respectively. <br><br>
See http://www.raspberrypi-spy.co.uk/2012/09/raspberry-pi-p5-header/ for more info on where pin 30 and 31 are located.<br>

<br>
Configuration of the RDS settings for the EDM transmitter can be found here: http://www.edmdesign.com/docs/EDM-TX-RDS.pdf.
Information on the RDS chip inside the EDM transmitter can be found here: http://pira.cz/rds/mrds192.pdf
. Once this connection is made than you can read and set the RDS information on the unit.
</p>

<p>When you create your MP3 and OGG files, make sure you tag them with Artist and Title fields. You can upload the MP3s and OGG files through the
File Manager in the Content Setup menu. Once the tags are set, this plug in will automatically update the RDS text when the file is played!</p>

<p>Known Issues:
<ul>
<li>NONE</li>
</ul>


Planned Features:
<ul>
<li>Connection between the EDM and the Pi using the supplied USB to the serial cable
<li>Set the EDM station name
</ul>

<span id="nowplaying">Now Playing:<br>
Station ID:</span>

<p>To report a bug, please file it against the fpp-vastfmt plugin project here:
<a href="https://github.com/drlucas/fpp-edmrds/issues/new" target="_new">fpp-edmrds GitHub Issues</a></p>

</fieldset>
</div>
<br />
