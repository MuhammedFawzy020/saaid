@extends('frontend_v2.layout.app')
@section('title')
    الرئيسية
@endsection
@section('keywords')
    <meta name="keywords"
        content="استقدام,عمالة منزلية,سائق,سائقين,مساند,مكتب استقدام,استقدام سائق خاص,استقدام عماله منزليه,مكتب استقدام الرياض,مكتب استقدام جدة,مكتب استقدام عماله منزلية,مكتب استقدام سائق,خدمات الاستقدام,روافد للاستقدام,مواقع مكاتب الاستقدام,مساند مكاتب استقدام,مساند للاستقدام,استقدام عاملة منزلية,استقدام الرياض,منصة مساند,ارخص مكتب استقدام,افضل مكتب استقدام,تقديم شغالات,استقدام عامل منزلي,اقرب مكتب استقدام من موقعي,اسعار تقديم الخادمات,شروط استقدام سائق خاص,شروط استقدام عامل منزلي,شروط الاستقدام,مكاتب الاستقدام المعتمدة,مكاتب الاستقدام المعتمدة من وزارة العمل,مكتب استقدام سائق خاص,مكاتب استقدام من الفلبين بالرياض,اسعار استقدام العاملات المنزلية,أفضل مكتب استقدام في الرياض,مكتب استقدام شمال الرياض,استقدام خادمة سيرلانكية,مكتب استقدام كينيا الرياض,مكاتب استقدام فلبينيات بالرياض">
@endsection

@section('content')
    <canvas id="pupples" style="width:100%"></canvas>
    @include('frontend_v2.pages.home.sections.sectionOne')
    @include('frontend_v2.pages.home.sections.sectionTwo')
    @include('frontend_v2.pages.home.sections.sectionFour')
    @include('frontend_v2.pages.home.sections.sectionThree')
   
   
  
    @include('frontend_v2.pages.home.sections.sectionFive')
    @include('frontend_v2.pages.home.sections.sectionSeven')
    @include('frontend_v2.pages.home.sections.sectionNine')
    @include('frontend_v2.pages.home.sections.sectionSix')
    
    @include('frontend_v2.pages.home.sections.sectionEight')
    
    @include('frontend_v2.pages.home.sections.sectionTen')
@endsection

@section('js')
    <script>
        var w = window.innerWidth,
            h = window.innerHeight,
            canvas = document.getElementById('pupples'),
            ctx = canvas.getContext('2d'),
            rate = 60,
            arc = 100,
            time,
            count,
            size = 7,
            speed = 5,
            parts = new Array,
            colors = ['#EC9A2E', '#019B8F', '#004C63', '5B79AF'];
        var mouse = {
            x: 0,
            y: 0
        };

        canvas.setAttribute('width', w);
        canvas.setAttribute('height', h);

        function create() {
            time = 0;
            count = 0;

            for (var i = 0; i < arc; i++) {
                parts[i] = {
                    x: Math.ceil(Math.random() * w),
                    y: Math.ceil(Math.random() * h),
                    toX: Math.random() * 5 - 1,
                    toY: Math.random() * 2 - 1,
                    c: colors[Math.floor(Math.random() * colors.length)],
                    size: Math.random() * size
                }
            }
        }

        function particles() {
            ctx.clearRect(0, 0, w, h);
            canvas.addEventListener('mousemove', MouseMove, false);
            for (var i = 0; i < arc; i++) {
                var li = parts[i];
                var distanceFactor = DistanceBetween(mouse, parts[i]);
                var distanceFactor = Math.max(Math.min(15 - (distanceFactor / 10), 10), 1);
                ctx.beginPath();
                ctx.arc(li.x, li.y, li.size * distanceFactor, 0, Math.PI * 2, false);
                ctx.fillStyle = li.c;
                ctx.strokeStyle = li.c;
                if (i % 2 == 0)
                    ctx.stroke();
                else
                    ctx.fill();

                li.x = li.x + li.toX * (time * 0.05);
                li.y = li.y + li.toY * (time * 0.05);

                if (li.x > w) {
                    li.x = 0;
                }
                if (li.y > h) {
                    li.y = 0;
                }
                if (li.x < 0) {
                    li.x = w;
                }
                if (li.y < 0) {
                    li.y = h;
                }


            }
            if (time < speed) {
                time++;
            }
            setTimeout(particles, 1000 / rate);
        }

        function MouseMove(e) {
            mouse.x = e.layerX;
            mouse.y = e.layerY;

            //context.fillRect(e.layerX, e.layerY, 5, 5);
            //Draw( e.layerX, e.layerY );
        }

        function DistanceBetween(p1, p2) {
            var dx = p2.x - p1.x;
            var dy = p2.y - p1.y;
            return Math.sqrt(dx * dx + dy * dy);
        }
        create();
        particles();
    </script>
@endsection
