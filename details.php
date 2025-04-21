<?php include 'views/header.php'; ?>
<?php
     $hashHex = $_GET['id'] ?? '';
?>
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
                               Home / Latest Career / Details 
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
                            <div class="text-dark" id="content"></div>
                        </div>
                        <!-- <div class="container bg-linear-4 text-white g-0">
                            <p class="ms-2 fw-bold my-2 shadow-lg">How to Apply</p>
                        </div> -->
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

                    <div id="responseMsg"></div>

                    <form id="formComment" novalidate>
                        <input type="hidden" name="cmt-hash_id" value="<?= htmlspecialchars($hashHex) ?>">
                        <div class="row gy-2">

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="cmt-username" class="form-control rounded-0" placeholder="Username" required>
                                    <span class="input-group-text bg-dark text-white"><i class="bi bi-person-circle"></i></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="email" name="cmt-email" class="form-control rounded-0" placeholder="Email Address" required>
                                    <span class="input-group-text bg-dark text-white"><i class="bi bi-envelope"></i></span>
                                </div>
                            </div>

                            <div class="col-12">
                                <textarea name="cmt-comment" rows="6" class="form-control rounded-0" placeholder="Write a comment" required></textarea>
                            </div>

                            <div class="col-12">
                                <!-- Regular button without type="submit" -->
                                <button class="btn" style="background-color:#25D366;color: #fff;" id="submitCmt">Submit</button>
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


<?php include 'views/footer.php'; ?>