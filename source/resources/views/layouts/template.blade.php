<!doctype html>
<html lang="en">
    @include('includes.head')
<body>

    @include('includes.header')

    @include('includes.slider')

   @yield('content')

    @include('includes.footer')

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        !function(a,b,c,d,e,f){a[d]=a[d]||function(){(a[d].p=a[d].p||[]).push(arguments[0])},e=b.createElement("script"),e.async=1,
        e.type="text/javascript",e.id="com-o2bionics-webchat-script",e.src=c,f=b.getElementsByTagName("script")[0],f.parentNode.insertBefore(e,f)}(window,document,
        "https://c.chat.o2bionics.com//bootchat.js","O2WebChat");
        O2WebChat({ cid: 2 });
    </script>
</body>
</html>
