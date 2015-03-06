<?php
  function vimeoVideos() {
    $vimeo = simplexml_load_file('http://vimeo.com/digital8productions/videos/rss');
    $v = 0;

    foreach ($vimeo->channel->item as $video):
      $vimeo_title=$video->title;
      $date=$video->pubDate;
      // Mon, 08 Dec 2014 15:53:41 
      $dd = ltrim(substr($date, 5, 2), '0');
      $mm = substr($date, 8, 3);
      $yy = substr($date, 12, 4);

      $vimeo_date = $mm . ". " . $dd . ", " . $yy;
      $link=$video->link;
      $vimeo_id = explode('http://vimeo.com/', $link);

      if($v==4) break;

    $video_list = "              <li>\n";
    $video_list .= '                <div class="video">' . "\n";
    $video_list .= '                  <iframe src="//player.vimeo.com/video/' . $vimeo_id[1] . '?title=0&amp;byline=0&amp;portrait=0" width="500" height="281"></iframe>' . "\n";
    $video_list .= "                </div><!-- .video -->\n";
    $video_list .= '                <div class="video-info">' . "\n";
    $video_list .= '                  <h4>' . $vimeo_title . "</h4>\n";
    $video_list .= '                  <p class="video-date">' . $vimeo_date . "</p>\n";
    $video_list .= '                  <p class="video-link"><a href="' . $link . '">View on Vimeo</a></p>' . "\n";
    $video_list .= "                </div><!-- .video-info -->\n";
    $video_list .= "              </li>\n";
    echo $video_list;

    $v++;
    endforeach;
  };

  function instagramPhotos() {
    // Instagram Parameters
    $userid = "1073653000";
    $accessToken = "541336691.d80f275.a9423f4c60864701a03e1e0fb2797bf9";
    $i = 0;

    // Get Instagram Data
    function fetchData($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      $result = curl_exec($ch);
      curl_close($ch); 
      return $result;
    }

    // Parse Instagram Data
    $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
    $result = json_decode($result);

    // Loop Instagram Data
    foreach ($result->data as $post):
      if($i==10) break;

      $photo_list = "              <li>\n";
      $photo_list .= '                <a href="' . $post->link . '" target="_blank">' . "\n";
      $photo_list .= '                  <div class="img-container img-instagram">' . "\n";
      $photo_list .= '                    <img src="' . $post->images->standard_resolution->url . '" alt="Instagram photo by @' . $post->caption->from->username . '">' . "\n";
      $photo_list .= "                  </div><!-- .img-instagram -->\n";
      $photo_list .= '                  <div class="info">' . "\n";
      $photo_list .= '                    <p><span></span>' . $post->likes->count . "</p>\n";
      $photo_list .= '                  </div><!-- .info -->' . "\n";
      $photo_list .= '                </a>' . "\n";
      $photo_list .= "              </li>\n";
      echo $photo_list;

      $i++;
    endforeach;
  };
?>