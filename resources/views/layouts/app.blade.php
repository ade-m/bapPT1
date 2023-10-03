<html>
    <head>
        <title>SIAK - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            th {
                border: 1px solid black;
                padding: 8px;
                font-weight: bold;
                text-align: center
            }
            td {
                border: 1px solid black;
                padding: 8px;
                text-align: center
            }
            .bold-font {
                font-weight: bold;
            }
        </style>
        <style>
              body {
                    margin: 0;
                    padding: 0;
                }
            
                nav a {
                    color: #fff;
                    text-decoration: none;
                    padding: 10px;
                    display: inline-block;
                }
            
                nav a:hover {
                    background-color: red;
                }
            
                .fixed-header,
                .fixed-footer {
                    width: 100%;
                    position: fixed;
                    background: #333;
                    padding: 5px;
                    color: #fff;
                }
            
                .fixed-header {
                    top: 0;
                }
            
                .fixed-footer {
                    bottom: 0;
                    text-align: center;
                }
            
            
                .content {
                    width: 100%;
                    padding-top: 60px;
                    padding-bottom: 50px;
                }
            
                .content p {
                    line-height: 100px;
                    padding: 10px;
                }
            
        </style>
    </head>
    <body>
        <div class="fixed-header">
            <a href="/">Home</a>
            <a href="/profil">Profil</a>
            <a href="/mahasiswa">Mahasiswa</a>
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="fixed-footer">
            Copyright &copy; 2021
        </div>
    </body>
</html>