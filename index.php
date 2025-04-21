<?php
include "views/header.php";?>
<div class="container-fluid mx-1 my-1">
    <div class="row gy-0 bg-darkx text-white">
        <div class="col-sm-12 col-md-12 col-lg-12 text-dark">
            <div class="container bg-light mx-auto w-auto p-3 text-dark">

                <div class="row gy-0 align-items-start justify-content-center">
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
                </div>

                <div class="container my-5">                
                        <div class="row justify-content-center g-3">
                            <?php
                            $items = [
                            ["img" => "recent.png", "text" => "Recent", "url" => "latest-career.php"],
                            ["img" => "result.png", "text" => "Result", "url" => "exam-result.php"],
                            ["img" => "admit.png", "text" => "Admit", "url" => "admit-card.php"],
                            ["img" => "scholarship.png", "text" => "Scholar", "url" => "scholarship.php"],
                            ["img" => "admissions.png", "text" => "Admission", "url" => "admission.php"]
                            ];

                            foreach ($items as $item): ?>
                            <div class="col-4 col-sm-2 col-md-3 col-lg-2">
                                <div class="op-cardx text-center shadow-sm" data-url="<?php echo $item['url']; ?>">
                                <img src="assets/image/icons/<?php echo $item['img']; ?>" alt="<?php echo $item['text']; ?>" class="iconsx mb-2" />
                                <p class="fw-semibold kt-4 text-dark m-0"><?php echo $item['text']; ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>                    
                    </div>            
            
                    

                <div class="row gy-0 align-items-start justify-content-center">

                    <div class="col-12 col-lg-4">
                        <div class="bg-linear-4 p-0 border my-2 shadow text-white">
                            <div class="ms-2 mx-auto text-center p-2 fw-bold">Latest Updates</div>
                            <div class="list-group list-group-flush bg-light" id="contentList"></div>
                            <div class="ms-2 mx-auto kt-5 mb-2 text-center cursor-pointer" id="loadMore">Load More
                                <i class="bi bi-arrow-right-short"></i></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="bg-linear-4 text-white p-0 border my-2 shadow">
                            <div class="ms-2 mx-auto text-center p-2 fw-bold">Exam Results</div>
                            <div class="list-group list-group-flush bg-light" id="resultList">
                            </div>
                            <div class="ms-2 mx-auto kt-5 mb-2 text-center cursor-pointer" id="latest-admit">Load More <i
                                    class="bi bi-arrow-right-short"></i></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="bg-linear-4 text-white p-0 border my-2 shadow">
                            <div class="ms-2 mx-auto text-center p-2 fw-bold">Important Notice</div>
                            <div class="list-group list-group-flush bg-light" id="noticeList">
                            </div>
                            <div class="ms-2 mx-auto kt-5 mb-2 text-center cursor-pointer" id="latest-notice">
                                Load More <i class="bi bi-arrow-right-short"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container p-4 my-2">
                <p class="head-content border shadow"> <i class="bi bi-info-lg logo-5"></i> Never Miss an Update:
                    Career Opportunities, Admission Alerts, and Exam Dates</p>
                <div class="container border shadow">
                    <p class="kt-5">
                    Get the latest job openings, admission notices, result notices, and admit card release— all under one roof! Be the first to get the latest job notices,
internships, campus placement for further advancement of your career. Remain online with live
announcement of admission deadlines, application process and requirements for top-ranked universities
and courses.
                    </p>
                    <p class="kt-5">
                    Never forget the release date of your exam results and receive direct notifications so that you do not miss out. Also, remain exam-ready at all times by downloading your admit card in advance, with all the details at your fingertips. Register now and remain connected and never miss any important information!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "views/footer.php"; ?>