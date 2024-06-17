// your-script.js

document.addEventListener('DOMContentLoaded', function() {
  // Get all input elements with the data-mask attribute
  var maskedInputs = document.querySelectorAll('[data-mask]');

  // Loop through each input and apply the mask
  maskedInputs.forEach(function(input) {
    var maskValue = input.getAttribute('data-mask');

    input.addEventListener('input', function() {
      // Apply the mask to the input value
      applyMask(input, maskValue);
    });

    // Initialize the mask on page load
    applyMask(input, maskValue);
  });

  // Function to apply the mask
  function applyMask(input, mask) {
    var value = input.value.replace(/\D/g, '');
    var maskedValue = '';

    for (var i = 0, j = 0; i < mask.length && j < value.length; i++) {
      if (mask[i] === '0') {
        maskedValue += value[j];
        j++;
      } else {
        maskedValue += mask[i];
      }
    }

    // Update the input value with the masked value
    input.value = maskedValue;
  }
});
