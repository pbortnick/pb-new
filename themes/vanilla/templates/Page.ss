<!DOCTYPE html>

<html class="no-js" lang="$ContentLocale">
  <head>
    <% base_tag %>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    $MetaTags(false)<title>$Title &ndash; $SiteConfig.Title</title>

    <% require themedCSS('production/styles/bundle') %>

    <% require themedCSS('/owl.carousel/dist/assets/owl.carousel.min.css') %>
    <% require themedCSS('/node_modules/owl.carousel/dist/assets/owl.theme.default.css') %>


  </head>
  <body>

    <% include Header %>
    <% include Layout Layout=$Layout %>
    <% include Footer %>

    <% require themedJavascript('/node_modules/jquery/dist/jquery.js') %>
    <% require themedJavascript('/source/bundles/owl.carousel.min.js') %>

  </body>
</html>
