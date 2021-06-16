
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SI Akademik - @yield('title')</title>
        <link href="vendor/sbadmin/bootstrap/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        <script src="vendor/sbadmin/bootstrap/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
        <script src="vendor/sbadmin/bootstrap/https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="vendor/sbadmin/bootstrap/https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="vendor/sbadmin/bootstrap/js/scripts.js"></script>
    </body>
</html>
