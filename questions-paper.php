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
                                <i class="bi bi-whatsapp fs-5 mx-2 me-2"></i>
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
                                <i class="bi bi-telegram fs-5 mx-2 me-2"></i>
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
                               Home / Questions Paper
                            </div>
                            <span><button type="button" class="me-2 border-0" id="copyBtn"><i
                                        class="bi bi-copy"></i></button></span>
                            <span><button type="button" class="me-2 border-0" id="shareBtn"><i
                                        class="bi bi-share-fill"></i></button></span>
                        </div>
                    </div>     
                    <div class="col-12 col-lg-8">
                        <div class="container bg-linear-4 text-white g-0">
                            <p class="ms-2 fw-bold my-2">Questions Paper</p>

                            <div class="row g-0 bg-light text-dark">
                                <div class="col-6 col-lg-4 p-2">
                                    <!-- <div class="container border border-secondary p-3"> -->
                                        <!-- <p class="text-start kt-1">GATE 2025</p> -->
                                    <!-- </div> -->
                                </div>
                            </div>

                        </div>
                        <ul class="pagination" id="pagination"></ul>
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
<?php include "views/footer.php"; ?>