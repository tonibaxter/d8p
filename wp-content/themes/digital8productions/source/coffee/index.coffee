# INDEX COFFEE
# VERSION 0.2
# AUTHOR TONI BAXTER | SOFTWARE DEVELOPER (developer.toni@gmail.com)
# CREATION / UPDATE 12.11.2014 | 17.3.2015

# FILE OPTIONS
'use strict'

window.INDEX or= {}
INDEX.INIT or= {}

INDEX.INIT.foot = () ->
  $("#tweet-foot").twittie
    username: "digital8creates"
    dateFormat: "%B %d, %Y"
    template: "<p>Tweet ({{date}})</p>\n<p>{{screen_name}} <a href=\"{{url}}\" target=\"_blank\">{{tweet}}</a></p>"
    count: 1
    hideReplies: true

INDEX.INIT.mobile = () ->
  # // function below will run clear.php?h=michael
  #           $.ajax({
  #               type: "GET",
  #               url: "clear.php" ,
  #               data: { h: "michael" },
  #               success : function() { 

  #                   // here is the code that will run on client side after running clear.php on server

  #                   // function below reloads current page
  #                   location.reload();

  #               }
  #           });

$ ->
  tweets = INDEX.INIT.foot()