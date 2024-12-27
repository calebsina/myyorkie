$(document).ready(function() {
  $('#contactForm').on('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission
      $.ajax({
          url: 'sendEmail.php', // The PHP file that will handle the email sending
          type: 'POST',
          data: $(this).serialize(), // Serialize the form data
          success: function(response) {
              $('#response').html(response); // Display the response from the PHP script
          },

          error: function() {

              $('#response').html('An error occurred while sending the email.');

          }

      });

  });

});