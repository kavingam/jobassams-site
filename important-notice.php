<?php include "views/header.php"; ?>
<div class="container-fluid mx-1 my-1">
    <div class="row gy-0 bg-darkx text-white">
        <div class="col-sm-12 col-md-12 col-lg-12 text-dark">
            <div class="container bg-light mx-auto w-auto p-3 text-dark">
                <div class="row g-0x align-items-start justify-content-center">
                    <div class="col-12">
                        <div class="container border d-flex justify-content-center align-items-start mt-2 p-2">
                            <div class="ms-2 me-auto mt-1 kt-5"><i class="wp-btn bi bi-whatsapp"></i> Join Us
                                Whatsapp</div>
                            <span><a href="/follow/whatsapp.php?whatsapp=https://whatsapp.com/channel/0029Vb4Ka0fGZNCshW3zJ12L"
                                    target="_blank" type="button" class="wp-btn join-btn text-decoration-none">Join
                                    Now</a></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="container border d-flex justify-content-center align-items-start my-2 p-2">
                            <div class="ms-2 me-auto mt-1 kt-5"><i class="tel-btn bi bi-telegram"></i> Join Us
                                Telegram Channel</div>
                            <span><a href="/follow/telegram.php?telegram=https://t.me/+2hAmyK2zILwwNzJl"
                                    class="tel-btn join-btn text-decoration-none" target="_blank" type="button">Join
                                    Now</a></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="container bg-linear-4 text-white g-0">
                            <p class="ms-2 fw-bold my-2">Important Notice</p>

                            <ul class="list-group list-group-flush border-secondary bg-light" id="cardList">
                            </ul>

                        </div>
                        <ul class="pagination" id="pagination-card"></ul>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="container g-0 my-2 d-none d-sm-block">
                            <div class="row justify-content-center d-flex g-0 align-items-start border border-primary">
                                <div class="col-9"><input type="text" class="form-control rounded-0"
                                        placeholder="search"></div>
                                <div class="col-3"><button class="btn w-100 btn-primary rounded-0" type="submit"><i
                                            class="bi bi-search"></i></button></div>
                            </div>
                        </div>
                        <div class="container g-0 bg-linear text-white">
                            <p class="ms-2 fw-bold text-center my-2">Important Links</p>
                            <table class="table table-bordered border border-secondary">
                                <tbody id="dataBody">
                                </tbody>
                            </table>
                        </div>

                        <div class="container g-0 mt-3 bg-linear-5 text-white">
                            <p class="ms-2 fw-bold text-center my-2">Tools Box</p>
                            <table class="table table-bordered border border-secondary">
                                <tbody id="toolBox">
                                </tbody>
                            </table>

                        </div>
                        <div class="container g-0 my-2 d-block d-sm-none">
                            <div class="row justify-content-center d-flex g-0 align-items-start border border-primary">
                                <div class="col-9"><input type="text" class="form-control rounded-0"
                                        placeholder="search"></div>
                                <div class="col-3"><button class="btn w-100 btn-primary rounded-0" type="submit"><i
                                            class="bi bi-search"></i></button></div>
                            </div>
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
    function loadContent(page = 1) {
        $.ajax({
            url: "blogs/fetch_admit_data.php",
            type: "GET",
            data: { page: page },
            dataType: "json",
            success: function (response) {
                $("#cardList").empty();
                $("#pagination-card").empty();

                if (response.error) {
                    alert("Error: " + response.error);
                    return;
                }

                // Append fetched data
                $.each(response.data, function (index, item) {
                    $("#cardList").append(`
                        <li class="list-group-item border-bottomx border-secondaryx mb-2 borderx shadowx">
                            <a href="details.php?id=${item.hash_key}" class="kt-4 text-decoration-none">
                                ${item.title}
                            </a>
                        </li>
                    `);
                });

                // Pagination Controls
                if (response.totalPages > 1) {
                    let paginationHtml = `<li class="page-item ${response.currentPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" data-page="${response.currentPage - 1}">Previous</a>
                    </li>`;

                    for (let i = 1; i <= response.totalPages; i++) {
                        let activeClass = (i === response.currentPage) ? "active" : "";
                        paginationHtml += `<li class="page-item ${activeClass}">
                            <a class="page-link" href="#" data-page="${i}">${i}</a>
                        </li>`;
                    }

                    paginationHtml += `<li class="page-item ${response.currentPage === response.totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" data-page="${response.currentPage + 1}">Next</a>
                    </li>`;

                    $("#pagination-card").html(paginationHtml);
                }
            },
            error: function () {
                alert("Failed to load data.");
            }
        });
    }

    loadContent();

    $(document).on("click", ".page-link", function (e) {
        e.preventDefault();
        let page = $(this).data("page");
        if (page) {
            loadContent(page);
        }
    });
});
</script>
<?php include "views/footer.php"; ?>