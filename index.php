<?php

	$dirname = "animu/sword art online/";
$images = glob($dirname."*.mkv");
foreach($images as $image) {
echo '<object classid="Video" width="320" height="260" codebase="http://go.divx.com/plugin/DivXBrowserPlugin.cab">

 <param name="custommode" value="none" />

  <param name="autoPlay" value="false" />
  <param name="src" value="http://tagl.is/u/krissibt/tv/'.$image.'" />

<embed type="video/divx" src="http://tagl.is/u/krissibt/tv/'.$image.'" custommode="none" width="320" height="260" autoPlay="false"  pluginspage="http://go.divx.com/plugin/download/">
</embed>
</object>
<br />
';
}
 
 ?>
