$(document).ready(function () {
  Dropzone.options.dropzoneFrom = {
    autoProcessQueue: false,
    acceptedFiles: ".png, .jpg, .jpeg",
    dictDefaultMessage: " Arrastra y suelta el archivo, o haz click en el area",

    init: function () {
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;
      submitButton.addEventListener("click", function () {
        myDropzone.processQueue();
      });
      this.on("complete", function () {
        console.log("funcion complete");
        if (
          this.getQueuedFiles().length == 0 &&
          this.getUploadingFiles().length == 0
        ) {
          var _this = this;

          setTimeout(function () {
            _this.removeAllFiles();
            console.log("Se eliminaron todos los archivos ");
          }, 3000);
        }
        list_image();
      });
    },
  };

  list_image();

  function list_image() {
    $.ajax({
      url: "ver.php",
      success: function (data) {
        $("#preview").html(data);
        console.log("se activa");
      },
    });
  }

  $(document).on("click", ".eliminar_image", function () {
    var nombre = $(this).attr("id");
    $.ajax({
      url: "Guardar.php",
      method: "POST",
      data: { name: nombre },
      success: function (data) {
        list_image();
      },
    });
  });
});
