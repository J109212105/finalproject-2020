<html>
<head>
<style>
  body {
      font-family:'微軟正黑體';
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active" href="/">首頁 <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="/playlist/">播放清單</a>
        <a class="nav-link" href="/lucky/">樂透明牌</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
    </div>
</nav>
<h2>今日你的幸運數字如下：</h2>
<hr>
<h3>特別號：{{ $lucky_number }}</h3>
<ul>
@foreach ($numbers as $number)
<li>{{ $number }}</li>
@endforeach
</ul>
</hr>
</body>
</html>