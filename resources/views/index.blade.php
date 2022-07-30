<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Example</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
        <div id="nav">
          <router-link to="/">Home</router-link>
          <router-link to="/about">About</router-link>
          <router-link to="/Err404">Err404</router-link>
          <router-link to="/user">ユーザー一覧</router-link>
        </div>
        <router-view/>
        </div>
    </div>
<script src="{{ mix('js/app.js') }}"></script> 
</body>
</html>