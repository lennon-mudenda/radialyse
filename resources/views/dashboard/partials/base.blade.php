<!DOCTYPE html>
<html>

<head>
    <title>Admin | @yield('title')</title>
    <style>
    #loader {
        transition: all .3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000
    }

    #loader.fadeOut {
        opacity: 0;
        visibility: hidden
    }

    .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1s infinite ease-in-out;
        animation: sk-scaleout 1s infinite ease-in-out
    }

    @-webkit-keyframes sk-scaleout {
        0% {
            -webkit-transform: scale(0)
        }
        100% {
            -webkit-transform: scale(1);
            opacity: 0
        }
    }

    @keyframes sk-scaleout {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0)
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 0
        }
    }

    </style>
    @yield('styles')
    <link href="/admin_assets/css/style.css" rel="stylesheet">
</head>

<body class="app">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <script type="text/javascript">
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });

    </script>
    <div>
        @include('dashboard.partials.sidebar')
        <div class="page-container">
            @include('dashboard.partials.nav')
            @yield('main')
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2018 Radialyse. All rights reserved.</span>
                <!-- Global site tag (gtag.js) - Google Analytics
                <script async src="/admin_assets/js/js_id_UA-23581568-13.js"></script>
                <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() { dataLayer.push(arguments); }
                gtag('js', new Date());
                gtag('config', 'UA-23581568-13');

                </script>-->
            </footer>
        </div>
    </div>

    @yield('scripts')
    <script type="text/javascript" src="/admin_assets/js/vendor.js">

        addEventListener('touchstart', this.callPassedFuntion, { passive: false });
    </script>
    <script type="text/javascript" src="/admin_assets/js/bundle.js"></script>
    <script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
</body>

</html>
