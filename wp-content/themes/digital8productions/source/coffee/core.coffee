# CORE COFFEE
# VERSION 0.2
# AUTHOR TONI BAXTER | SOFTWARE DEVELOPER (developer.toni@gmail.com)
# CREATION / UPDATE 12.11.2014 | 17.3.2015

# FILE OPTIONS
'use strict'

window.CORE or= {}
CORE.INIT or= {}

CORE.INIT.foot = () ->
  $("#tweet-foot").twittie
    username: "digital8creates"
    dateFormat: "%B %d, %Y"
    template: "<p>Tweet ({{date}})</p>\n<p>{{screen_name}} <a href=\"{{url}}\" target=\"_blank\">{{tweet}}</a></p>"
    count: 1
    hideReplies: true
    apiPath: location.protocol + "//" + location.host + "/wp-content/themes/digital8productions/api/tweet.php"

$ ->
  tweets = CORE.INIT.foot()