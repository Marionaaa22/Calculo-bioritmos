<!doctype html>
<html lang="en">
    <head>
        <title>Biorritmes</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <style>
        .btn-custom {
            background-color: #6FA58B;
            padding: 15px 32px;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
        }

        .btn-custom:hover {
            background-color: #FFFFFF; 
            color: #6FA58B;
            border-color: #6FA58B;
            
        }
    </style>
    </head>
    <body>
        <header>
            <div>
                <h1>Biorritmes Web</h1>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <div>
                <p>Mariona-Bioritmes</p>
            </div>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script>
            document.getElementById('enviar').addEventListener('click', function() {
                const container = document.querySelector('.bg-dark');
                container.style.display = 'visible';
                const bioContent = document.getElementById('form');
                bioContent.style.display = 'block';
                bioContent.classList.add('fade-in');
                bioContent.scrollIntoView({ behavior: 'smooth' });
            });
        </script>
    </body>
</html>
