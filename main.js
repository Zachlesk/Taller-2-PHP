$(document).ready(function() {
  $('.options').click(function() {
    $.ajax({
      url: 'main.php',
      method: 'POST',
      data: { event: 'click' },
      success: function(response) {
        document.write(response);

      }
    });
  });
});
 