<!DOCTYPE html>

<html class="no-js" lang="$ContentLocale">
  <head>
    <% base_tag %>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    $MetaTags(false)<title>$Title &ndash; $SiteConfig.Title</title>

    <% require themedCSS('production/styles/bundle') %>
    <%require css('http://localhost:8080/production/styles/bundle.css')%>
    <% require themedCSS('/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') %>


  </head>
  <body>

    <% include Header %>
    <% include Layout Layout=$Layout %>
    <% include Footer %>

    <% require themedJavascript('production/js/bundle') %>
    <% require themedJavascript('/node_modules/jquery/dist/jquery.js') %>
    <% require themedJavascript('/node_modules/owl.carousel/dist/owl.carousel.min.js') %>
    <%require javascript('http://localhost:8080/production/js/bundle.js')%>
    <% require themedJavascript('/source/bundles/slides.js') %>

  </body>
</html>
