<?php

/**
 * get css class/es from html string
 */

$htmlstring = "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Login - Free Bulma template</title>
    <link rel=\"stylesheet\" href=\"/css/bulma/process/modified/bulma-modified.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
</head>

<body>
    <section class=\"hero is-success is-fullheight\">
        <div class=\"hero-body\">
            <div class=\"container has-text-centered\">
                <div class=\"column is-4 is-offset-4\">
                    <h3 class=\"title has-text-grey\">Login</h3>
                    <p class=\"subtitle has-text-grey\">Please login to proceed.</p>
                    <div class=\"box\">
                        <figure class=\"avatar\">
                            <img src=\"https://placehold.it/128x128\">
                        </figure>
                        <form>
                            <div class=\"field\">
                                <div class=\"control\">
                                    <input class=\"input is-large\" type=\"email\" placeholder=\"Your Email\" autofocus=\"\">
                                </div>
                            </div>

                            <div class=\"field\">
                                <div class=\"control\">
                                    <input class=\"input is-large\" type=\"password\" placeholder=\"Your Password\">
                                </div>
                            </div>
                            <div class=\"field\">
                                <label class=\"checkbox\">
                  <input type=\"checkbox\">
                  Remember me
                </label>
                            </div>
                            <button class=\"button is-block is-info is-large is-fullwidth\">Login</button>
                        </form>
                    </div>
                    <p class=\"has-text-grey\">
                        <a href=\"../\">Sign Up</a> &nbsp;·&nbsp;
                        <a href=\"../\">Forgot Password</a> &nbsp;·&nbsp;
                        <a href=\"../\">Need Help?</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script async type=\"text/javascript\" src=\"../js/bulma.js\"></script>
</body>

</html>
";


$htmlstring = trim(str_replace(["\n","\r","\t"], '',trim($htmlstring)));
$htmlstring = trim(str_replace("  ", '',trim($htmlstring)));

preg_match_all("'class=\"(.*?)\"'si",$htmlstring, $data); 

var_dump($data);