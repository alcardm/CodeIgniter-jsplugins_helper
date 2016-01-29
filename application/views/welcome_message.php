<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CodeIgniter - JavaScript Plugins Helper</title>
        
        <?php echo plugin_css('bootstrap'); ?>
        
        <?php echo plugin_css(); ?>
        
        <?php echo plugin_css('sweetalert'); ?>
        
        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 15px 0 15px;
            }

            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }
        </style>
    </head>
    <body>

        <div id="container">
            <h1>CodeIgniter - JavaScript Plugins Helper</h1>

            <div id="body">
                <p>A simple helper to load .js and .css files.</p>
                
                <p>Copy the files on default locations.</p>
                <p>Set you javascript plugins urls at:</p>
                <code>application/config/jsplugins.php</code>
                
                <p>Load the helper on the controller: </p>
                <code>$this->load->helper('jsplugins');</code>

                <p>Use <em>plugin_js</em> to link .js files </p>
                <code>echo plugin_js('jquery');</code>

                <p>and <em>plugin_css</em> to link .css files </p>
                <code>echo plugin_css('bootstrap')</code>
                
                <p>Also you can check this message and controller. No futher information, it just a helper.</p>
            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
        
        <?php echo plugin_js('jquery'); ?>

        <?php echo plugin_js('bootstrap'); ?>

        <?php echo plugin_js('icheck'); ?>
        
        <?php echo plugin_js('sweetalert'); ?>

    <script>
        swal('Cool!');
    </script>
    </body>
</html>