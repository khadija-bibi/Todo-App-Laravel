<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "To Do App")</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield("style")
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    
      @yield("content")
    <script></script>
  </body>
</html>
