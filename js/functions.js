$(document).ready(function() {
  (function() {
    if ($('.bg-success').length) {
      ga('send', 'event', 'button', 'verzonden', 'contactformulier-verzonden');
    }
  }());
  var d=new Date();
  dag = d.getDay();
  $(".list_openingsuren li:nth-child(7n+" + dag + ")").addClass("today");

  setTimeout(function() { // er staat een timeout op omdat bij het laden .images niet onmiddellijk .is-showing zou krijgen
    $('.images').addClass('is-showing');
  }, 1);


});

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
  $(".list_attachments").html("");
  for (var i = 0; i < this.files.length; i++) {
    el = "<label class='btn btn-secondary'><i class='fas fa-upload'></i>&nbsp;&nbsp;" + this.files[i].name + "</label>";
    $(".list_attachments").append(el);
  }

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
