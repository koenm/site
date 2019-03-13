$(document).ready(function() {
  (function() {
    if ($('.bg-success').length) {
      ga('send', 'event', 'button', 'verzonden', 'contactformulier-verzonden');
    }
  }());

  setTimeout(function() { // er staat een timeout op omdat bij het laden .images niet onmiddellijk .is-showing zou krijgen
    $('.images').addClass('is-showing');
  }, 1);


});

// $('.contact-form').on('submit', function(e) {
//   e.preventDefault();
//   var form_data = new FormData(this);
//   var ins = document.getElementById("attachment").files.length;
//   for (var x = 0; x < ins; x++) {
//       form_data.append("files[]", document.getElementById('attachment').files[x]);
//   }
//   $.ajax({
//     url: "contact-submit.php",
//     type: "POST",
//     data: form_data,
//     dataType: "json",
//     contentType: false,
//     cache: false,
//     processData: false,
//     success: function(res) {
//       html = res.message;
//       $(".contact-result").fadeIn();
//       $(".contact-result").addClass(res.class);
//       $(".contact-result").html(res.message + res.error_files);
//       $(".contact-form input, .contact-form textarea").val("");
//     },
//     error: function(e) {
//       $(".contact-result").html(e).fadeIn();
//     }
//   });
//
// });

function OnUploadCheck(file)	{

	var extall = "pdf";
  ext = $(file).val().split('.').pop().toLowerCase();
  if (parseInt(extall.indexOf(ext)) < 0) {
  	alert('We accepteren enkel PDF documenten');
    $(file).val("");
  	return false;
  }
  return true;
}
$("#attachment").on("change", function () {
  if (this.files[0].size > 10000000) {
    alert("Je bestanden mogen niet groter dan 10mb zijn. Anders kan u gewoon een mailtje sturen naar info@alphacopyleuven.be");
    $(this).val("");
  }


  OnUploadCheck(this);
});



$('.contact-form').on('submit', function(e) {
  $("button#submit").attr("disabled", true);
  e.preventDefault();
  $.ajax({
    url: "contact-submit.php",
    type: "POST",
    data: new FormData(this),
    dataType: "json",
    contentType: false,
    cache: false,
    processData: false,
    success: function(res) {
      $(".contact-result").fadeIn();
      $(".contact-result").addClass(res.class);
      result = res.message;
      if (res.error_files.length > 0) {
        result += "<ul>";
        for (var file in res.error_files) {
          result += "<li>" + res.error_files[file] + "</li>";
        }
        result += `
        </ul><br />Bericht niet verstuurd. wanneer het probleem zich blijft voordoen, kan u een mailtje sturen naar info[at]alphacopyleuven.be`;
      }

      $(".contact-result").html(result);
      $(".contact-form input, .contact-form textarea").val("");
      $("button#submit").attr("disabled", false);
    },
    error: function(e) {
      $(".contact-result").html(e).fadeIn();
    }
  });

});

function toggleMenu() {
  $(".nav").toggleClass("nav_on");
}
