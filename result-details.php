<?php include "views/header.php"; ?>
<div class="container-fluid mx-1 my-1">
    <div class="row gy-0 bg-darkx text-white">
        <div class="col-sm-12 col-md-12 col-lg-12 text-dark">
            <div class="container bg-light mx-auto w-auto p-3 text-dark">
                <div class="row g-0x align-items-start justify-content-center">

                  <div class="col-12 mb-3">
                        <div class="cardx whatsapp-card">
                            <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-whatsapp fs-4 mx-2 me-2"></i>
                                <span class="fw-bold">Join Us on WhatsApp</span>
                            </div>
                            <a href="/follow/whatsapp.php?whatsapp=https://whatsapp.com/channel/0029Vb4Ka0fGZNCshW3zJ12L"
                                target="_blank"
                                class="btn" style="background-color:#25D366; color:#fff;">
                                Join Now
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="cardx telegram-card">
                            <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-telegram fs-4 mx-2 me-2"></i>
                                <span class="fw-bold">Join Us on Telegram</span>
                            </div>
                            <a href="/follow/telegram.php?telegram=https://t.me/+2hAmyK2zILwwNzJl"
                                target="_blank"
                                class="btn" style="background-color: #0088cc;color:#fff;">
                                Join Now
                            </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="container border d-flex justify-content-center align-items-start my-2 p-2">
                            <div class="ms-2 me-auto mt-1 kt-5">
                               Home / Exam Result / Details 
                            </div>
                            <span><button type="button" class="me-2 border-0" id="copyBtn"><i
                                        class="bi bi-copy"></i></button></span>
                            <span><button type="button" class="me-2 border-0" id="shareBtn"><i
                                        class="bi bi-share-fill"></i></button></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="container bg-linear-4 text-white g-0">
                            <p class="ms-2 fw-bold my-2 shadow-lg">Career Details</p>
                        </div>
                        <div class="container text-white g-0">
                            <div class="container g-0 text-center">
                                <!-- <img src="src/blogs/views/admit-card-6.png" alt="Admit Card" class="img-fluid"> -->
                            </div>
                            <div class="text-dark" id="content"></div>
                        </div>
                        <div class="container bg-linear-4 text-white g-0">
                            <p class="ms-2 fw-bold my-2 shadow-lg">Frequently asked questions (FAQs) </p>
                            <div class="accordion kt-1" id="faqAccordion">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">

                        <div class="container g-0 bg-linear-4 text-white">
                            <p class="ms-2 fw-bold text-center my-2">Important Links</p>
                            <table class="table">
                                <tbody id="dataBody" class="kt-4">
                                </tbody>
                            </table>
                        </div>

                        <div class="container g-0 mt-3 bg-linear-4 text-white">
                            <p class="ms-2 fw-bold text-center my-2">Tools Box</p>
                            <table class="table">
                                <tbody id="toolBox" class="kt-4">
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-12 col-lg-12">

                    <div class="container my-5">
                    <h4 class="mb-3">Leave a Comment</h4>
                    <form id="formComment" novalidate>
                        <div class="row gy-2">
                        <div class="col-md-6">
                            <div class="input-group">
                            <input type="text" id="inputName" class="form-control rounded-0" placeholder="Username">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-person-circle"></i></span>
                            </div>
                            <!-- <div class="invalid-feedback d-block" id="errorName" style="display: none;">Username is required.</div> -->
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                            <input type="text" id="inputEmail" class="form-control rounded-0" placeholder="Email Address">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-envelope"></i></span>
                            </div>
                            <!-- <div class="invalid-feedback d-block" id="errorEmail" style="display: none;">Email is required.</div> -->
                        </div>

                        <div class="col-12">
                            <textarea id="inputMessage" rows="6" class="form-control rounded-0" placeholder="Write a comment"></textarea>
                            <!-- <div class="invalid-feedback d-block" id="errorMessage" style="display: none;">Comment cannot be empty.</div> -->
                        </div>

                        <div class="col-12">
                            <button type="button" class="btn" id="btnSubmitComment" style="background-color:#25D366;color: #fff;">Submit</button>
                        </div>
                        </div>
                    </form>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shareModalLabel">Share This Page</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Share this page on:</p>
                <div class="row g-2">
                    <div class="col-6">
                        <a href="#" id="whatsappShare" target="_blank" class="btn btn-success w-100 text-nowrap">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" id="facebookShare" target="_blank" class="btn btn-primary w-100 text-nowrap">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" id="telegramShare" target="_blank"
                            class="btn btn-info w-100 text-nowrap text-white">
                            <i class="bi bi-telegram"></i> Telegram
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" id="twitterShare" target="_blank" class="btn btn-dark w-100 text-nowrap">
                            <i class="bi bi-twitter"></i> Twitter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {
  $("#btnSubmitComment").click(function (e) {
    e.preventDefault();

    let name = $("#inputName").val().trim();
    let email = $("#inputEmail").val().trim();
    let message = $("#inputMessage").val().trim();

    let error = false;

    if (name === "") {
      $("#inputName").addClass("is-invalid");
      $("#errorName").show();
      error = true;
    } else {
      $("#inputName").removeClass("is-invalid");
      $("#errorName").hide();
    }

    if (email === "") {
      $("#inputEmail").addClass("is-invalid");
      $("#errorEmail").show();
      error = true;
    } else {
      $("#inputEmail").removeClass("is-invalid");
      $("#errorEmail").hide();
    }

    if (message === "") {
      $("#inputMessage").addClass("is-invalid");
      $("#errorMessage").show();
      error = true;
    } else {
      $("#inputMessage").removeClass("is-invalid");
      $("#errorMessage").hide();
    }

    if (error) return;

    // Submit via AJAX
    $.ajax({
      url: "store_comment.php",
      type: "POST",
      data: {
        username: name,
        email: email,
        comment: message
      },
      success: function (response) {
        alert(response);
        $("#formComment")[0].reset();
        $(".form-control").removeClass("is-invalid");
        $(".invalid-feedback").hide();
      },
      error: function () {
        alert("Error submitting comment.");
      }
    });
  });
});
</script>

<?php include "views/footer.php"; ?>