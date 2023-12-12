<?php

// Get the terms and conditions from the database.
$termsAndConditions = getTermsAndConditions();

// Display the terms and conditions.
echo '<div class="terms-and-conditions">';
echo '<h2>Terms and Conditions</h2>';
echo '<img src="terms-and-conditions.png" alt="Terms and Conditions">';
echo '<p>' . $termsAndConditions . '</p>';
echo '</div>';

function getTermsAndConditions() {
  // TODO: Implement this function to get the terms and conditions from the database.
  return 'This is the terms and conditions of the claim form.';

<style></style>


}




