<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>林建成(J109212105)的樂透明牌</title>
  </head>
  <body>
      <script language="JavaScript" type="text/javascript">
        function ShowTime()
        {
            var NowDate = new Date();
            var d = NowDate.getDay();
            var dayNames = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");
            document.getElementById('showbox').innerHTML = '目前時間：' + NowDate.toLocaleString() + '（' + dayNames[d] + '）';
            setTimeout('ShowTime()', 1000);
        }
    </script>
    <body onload="ShowTime()">
    <form id="form1" runat="server">
        <div style="font-family:sans-serif;border:1px #ccc solid;padding:0px;" id = "showbox"></div>
    </form>
    </body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">J109212105</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      @if (Route::has('login'))    
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">首頁</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://104.es/">何老師課程教材</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/laravel/">Laravel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://getbootstrap.com/">Bootstrap</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/">GitHub</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.heroku.com/">Heroku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lotto">樂透</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="/logout">登出</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">登入</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="/register" tabindex="-1" aria-disabled="true">註冊</a>
        </li>
        @endif
        @endif
        @endif
      </ul>
    </div>
  </div>
</nav>
@if (Route::has('login'))
    @auth
    <h4><font face="標楷體">用戶名 ： <span class="badge bg-secondary"><font color="yellow"><?php $username = Auth::user()->name; echo $username;?></font></span></font></h4>
    @else
    <h4><font face="標楷體">用戶名 ：</h4>
    @endif
    @endif
<h2><font face="標楷體" color="blue">今日你的幸運數字如下：</font></h2>
<hr color="blue">
<h3>特別號：{{ $lucky_number }}</h3>
<ul>
@foreach ($numbers as $number)
<li>{{ $number }}</li>
@endforeach
</ul>
</hr>
</body>
</html>