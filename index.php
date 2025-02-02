<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo __("Error Page"); ?></title>
        <link href="view/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                margin: 0;
                padding: 0;
                background: #e7ecf0;
                font-family: Arial, Helvetica, sans-serif;
            }
            * {
                margin: 0;
                padding: 0;
            }
            p {
                font-size: 12px;
                color: #373737;
                font-family: Arial, Helvetica, sans-serif;
                line-height: 18px;
            }
            p a {
                color: #218bdc;
                font-size: 12px;
                text-decoration: none;
            }
            a {
                outline: none;
            }
            .f-left {
                float: left;
            }
            .f-right {
                float: right;
            }
            .clear {
                clear: both;
                overflow: hidden;
            }
            #block_error {
                width: 1000px;
                height: 700px;
                border: 1px solid #cccccc;
                margin: 72px auto 0;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                background: #fff url(https://tutorials.wwbn.net/view/img/transparent1px.png) no-repeat 0 51px;
            }
            #block_error div {
                padding: 10px 40px 0 186px;
            }
            #block_error div h2 {
                color: #218bdc;
                font-size: 24px;
                display: block;
                padding: 0 0 14px 0;
                border-bottom: 1px solid #cccccc;
                margin-bottom: 12px;
                font-weight: normal;
            }
            img {
                max-height: 50px;
                margin: 10px 0 0 5px;
            }
        </style>
    </head>
    <body marginwidth="0" marginheight="0">

        <div id="block_error">
            <img src="view/img/logo.png" class="img img-responsive center-block"/>
            <div>
                <h2><?php echo __("Error. Oops you've encountered an error"); ?></h2>
                <p>
                    <?php echo __("It appears that either something went wrong or the mod rewrite configration is not correct."); ?><br />
                </p>
                <p><b><?php echo __("If you don't use apache, just let .htaccess stay or create a empty file - then this check will pass."); ?></b></p>
                <p><?php echo __("We need to allow Apache to read .htaccess files located under the "); echo getcwd(); echo __(" directory."); ?>

                    <?php echo __("You can do this by editing the Apache configuration file:"); ?></p>

                <p>
                    <?php echo __("Find the section <code>"); echo htmlentities("<directory /var/www/html>"); echo __("</code> and change <b>AllowOverride None</b> to <b>AllowOverride All</b>"); ?>
                </p>
                <p><pre><code>sudo nano /etc/apache2/apache2.conf</code></pre></p>

                <p>
                    <?php echo __("After editing the above file your code should be like this:"); ?>
                </p>
                <p><pre><code><?php echo htmlentities("<Directory /var/www/>
          Options Indexes FollowSymLinks
          AllowOverride All
          Require all granted
  </Directory>"); ?></code></pre></p>

                <p><?php echo __("In order to use mod_rewrite you can type the following command in the terminal:</p>"); ?>
                <p><pre><code>sudo a2enmod rewrite</code></pre></p>

                <p><?php echo __("Restart apache2 after"); ?></p>

                <p><pre><code>sudo /etc/init.d/apache2 restart</code></pre></p>

                <p><?php echo __("or"); ?></p>

                <p><pre><code>sudo service apache2 restart</code></pre></p>

            </div>
        </div>
    </body>
</html>
<?php
function __($text)
{
    return $text;
}

function test(){
    echo "TEST";
    error_log("SOMETHING");
}

test();