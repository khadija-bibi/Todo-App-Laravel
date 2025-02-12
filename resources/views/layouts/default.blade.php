<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "To Do App")</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield("style")
  </head>
  <body class="d-flex flex-column h-100" >
    @include("include.header")
      @yield("content")
    @include("include.footer")
    <script></script>
  </body>
</html>
