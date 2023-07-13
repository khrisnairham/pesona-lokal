$('#modalBtn').on('click', function () {
  $('#inputModal').modal('show');
});

$('#close').on('click', function () {
  window.location.href = 'profile.html';
});

$('#close2').on('click', function () {
  window.location.href = 'profileSett.html';
});
$('#close3').on('click', function () {
  window.location.href = 'profileSett.html';
});
$('#close4').on('click', function () {
  window.location.href = 'profile.html';
});
$('#close5').on('click', function () {
  window.location.href = 'home-admin.php';
});
// $('#modalBtn').on('shown.bs.modal', function () {
//   $('#inputModal').trigger('focus')
// });

$('#modalBtnChange').on('click', function () {
  $('#inputModalChange').modal('show');
});
$('#modalBtnChange2').on('click', function () {
  $('#inputModalChange2').modal('show');
});
$('#modalBtnChange3').on('click', function () {
  $('#inputModalChange3').modal('show');
});

$(document).ready(function (e) {
  // Initializing our modal.
  $('#myModal').modal({
    backdrop: 'static',
    keyboard: false,
    show: false,
  });
  $('#myModall').modal({
    backdrop: 'static',
    keyboard: false,
    show: false,
  });

  $(document).on('click', '.modalButton', function () {
    var ClickedButton = $(this).data('name');

    // You can make an ajax call here if you want.
    // Get the data and append it to a modal body.

    $('.modal-body').html('<p>' + ClickedButton + '</p> <p>Some text in the modal.</p> ');
    $('#myModal').modal('show');
    $('#myModall').modal('show');
  });
});
