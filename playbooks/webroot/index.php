<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LAMP STACK</title>
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        LAMP STACK [DEV]
                    </h1>
                    <h2 class="subtitle">
                        Your local development environment
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Environment</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    $servername = "mysql"; 
                                    $username = "{{ db_user }}";    
                                    $password = "{{ db_password }}"; 
                                    $dbname = "mydatabase"; 

                                    // Create connection
                                    $link = mysqli_connect($servername, $username, $password, $dbname);

                                    // Check connection
                                    if (!$link) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }
                                    echo "Connected successfully<br>";
                                    echo "MySQL Server Version: " . mysqli_get_server_info($link);
                                    mysqli_close($link);
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Quick Links</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="/phpinfo.php">phpinfo()</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
