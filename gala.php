<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<video width="800" height="540" id="video" controls></video>     
<script>
        if(Hls.isSupported()) {
          var video = document.getElementById('video');
          var hls = new Hls({
              debug: true
          });
          hls.loadSource('https://video-auth6.iol.pt/live_tvi/live_tvi/playlist.m3u8?wmsAuthSign=<?php
$site_url = 'https://services.iol.pt/matrix?userId=';
$ch = curl_init();
$timeout = 5; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL, $site_url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

ob_start();
curl_exec($ch);
curl_close($ch);
$file_contents = ob_get_contents();
ob_end_clean();

echo $file_contents;
?>');
          hls.attachMedia(video);
          hls.on(Hls.Events.MEDIA_ATTACHED, function() {
            video.muted = true;
            video.play();
        });
       }
        else if (video.canPlayType('application/vnd.apple.mpegurl')) {
          video.src = 'httpppps://video-auth6.iol.pt/live_tvi/live_tvi/playlist.m3u8?wmsAuthSign=c2VydmVyX3RpbWU9My80LzIwMjEgNTo0OjU1IFBNJmhhc2hfdmFsdWU9bWlTR3R2dXdreXVMayttclZUZDdMZz09JnZhbGlkbWludXRlcz0xNDQwJmlkPTU0ZmQ4MTE5LWU4MzgtNGE1ZC1iNDlkLWM3M2VjMWEwMGMxZA==';
          video.addEventListener('canplay',function() {
            video.play();
          });
        }
      </script>
