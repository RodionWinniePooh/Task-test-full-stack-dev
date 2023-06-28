  // Получаем текущую дату и время
  var currentDate = new Date();

  // Создаем объект даты и времени, которая будет через 24 часа
  var expirationDate = new Date(currentDate.getTime() + 24 * 60 * 60 * 1000);


$(window).on('resize', function() {
  var windowWidth = $(window).width();
  
  // Remove classes based on the window width
  if (windowWidth < 575) { // Below lg breakpoint
    $('#col').removeClass('position-relative');
    $('#container').removeClass('position-absolute top-50 start-50 translate-middle');
  }
      // Remove classes based on the window width
  if (windowWidth > 575) { // Below lg breakpoint
    $('#col').addClass('position-relative');
    $('#container').addClass('position-absolute top-50 start-50 translate-middle');
  }


});


$(document).ready(function () {
  // Если куки не установлены...
  if (document.cookie.indexOf("modalCookie=true") < 0) {
    $("#popupModal").show();

    // Обработчик события для кнопки "I accept"
    $("#myModalAccept").click(function () {
      // Сохранение куки и дальнейшие действия
      var expirationDate = new Date();
      expirationDate.setDate(expirationDate.getDate() + 1); // Устанавливаем срок действия куки на 1 день
      document.cookie = "modalCookie=true; expires=" + expirationDate.toUTCString() + "; path=/";

      // Вывод значения куки в консоль
      console.log("Cookies have been saved! " + document.cookie);

      // Скрытие модального окна
      $("#popupModal").hide();
    });

    // Обработчик события для кнопки "Close"
    $("#myModalClose").click(function () {
      // Скрытие модального окна
      console.log("Close modal");
      $("#popupModal").hide();
    });
  } else {
    // Если куки установлены, скрыть модальное окно
    $("#popupModal").hide();
  }
});