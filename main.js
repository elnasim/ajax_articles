$(document).ready(function () {

  $('.nav a').on('click', function () {
    var page = $(this).attr('data-page');
    $.ajax({
      type: 'GET',
      url: 'data_take.php',
      data: {'page': page},

      success: function (data) {
        if (data !== '') {
          var obj = $.parseJSON(data);
          $('.section-head').html(obj.title);
          $('.section-content').html(obj.text);
        } else {
          $('.section-head').html('');
          $('.section-content').html('');
        }
      },
      error: function () {
        alert('problem')
      }
    });

  });


});