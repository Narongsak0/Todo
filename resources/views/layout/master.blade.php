<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "เว็ปไซต์ของฉัน")</title>
</head>
<body>
    <header><a href="/Todo">หน้าแรก</a> | <a href="/about">เกี่ยวกับ</a> | <a href="/contact">ติดต่อ</a></header>
    <hr>
    <div>
        @if(auth()->check())
        สวัสดี, {{auth()->user()->name}} | <a href="/logout">ออกจากระบบ</a>
        @else
        สวัสดี, บุคคลทั่วไป <a href="/login">เข้าสู่ระบบ</a>
        @endif

        @yield("content")
    </div>
    <hr>
    <p>Creates by Bundit</p>
</body>
</html>
