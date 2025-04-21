
function toggleMenu() {
    document.getElementById("navbarMenu").classList.toggle("show");
    document.querySelector(".navbar-toggler").classList.toggle("active");
}

function hideElementById(id) {
    let el = document.getElementById(id);
    if (el) {
        el.style.display = "none";
    }
}

function showElementById(id) {
    let el = document.getElementById(id);
    if (el) {
        el.style.display = "block";
    }
}


document.addEventListener("DOMContentLoaded", function () {
    let toastElement = document.getElementById("customToast");
    if (toastElement) {
        let toast = new bootstrap.Toast(toastElement, {
            autohide: false
        });
        toast.show();
    }

    setTimeout(function () {
        hideElementById("customToast");
    }, 5000);
});


function copyCurrentUrl() {
    navigator.clipboard.writeText(window.location.href).then(() => {
        alert('URL copied to clipboard!');
    }).catch(err => {
        console.error('Error copying text: ', err);
    });
}

document.addEventListener("DOMContentLoaded", function () {
    let copyBtn = document.getElementById('copyBtn');
    if (copyBtn) {
        copyBtn.addEventListener('click', copyCurrentUrl);
    }
});



document.addEventListener("DOMContentLoaded", function () {
    const shareBtn = document.getElementById("shareBtn");
    const pageUrl = window.location.href;

    const whatsappLink = document.getElementById("whatsappShare");
    const facebookLink = document.getElementById("facebookShare");
    const telegramLink = document.getElementById("telegramShare");
    const twitterLink = document.getElementById("twitterShare");

    if (whatsappLink) {
        whatsappLink.href = `https://api.whatsapp.com/send?text=${encodeURIComponent(pageUrl)}`;
    }
    if (facebookLink) {
        facebookLink.href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(pageUrl)}`;
    }
    if (telegramLink) {
        telegramLink.href = `https://t.me/share/url?url=${encodeURIComponent(pageUrl)}`;
    }
    if (twitterLink) {
        twitterLink.href = `https://twitter.com/intent/tweet?url=${encodeURIComponent(pageUrl)}`;
    }

    if (shareBtn) {
        shareBtn.addEventListener("click", function () {
            const shareModalEl = document.getElementById("shareModal");
            if (shareModalEl) {
                const shareModal = new bootstrap.Modal(shareModalEl);
                shareModal.show();
            }
        });
    }
});



$(document).ready(function () {
    function loadContent(page = 1) {
        $.ajax({
            url: "blogs/fetch_data.php",
            type: "GET",
            data: { page: page },
            dataType: "json",
            success: function (response) {
                const $updateList = $("#updateList");
                const $pagination = $("#pagination");

                $updateList.empty();
                $pagination.empty();

                if (response.error) {
                    alert("Error: " + response.error);
                    return;
                }

                $.each(response.data, function (index, item) {
                    $updateList.append(`
                        <li class="list-group-item border-bottomx border-secondaryx mb-2 borderx shadowx">
                            <a href="details.php?id=${item.hash_key}" class="kt-4 text-decoration-none">
                                ${item.title}
                            </a>
                            <div class="d-flex align-items-center gap-2 border-top border-secondary kt-1">
                                <i class="bi bi-newspaper"></i> Jobassams.Com
                                <i class="bi bi-calendar-day ms-2"></i> Published: ${item.published}
                            </div>
                        </li>
                    `);
                });


                if (response.totalPages > 1) {
                    let paginationHtml = "";

                    const currentPage = response.currentPage;
                    const totalPages = response.totalPages;


                    paginationHtml += `
                        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                            <a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a>
                        </li>
                    `;


                    for (let i = 1; i <= totalPages; i++) {
                        paginationHtml += `
                            <li class="page-item ${i === currentPage ? 'active' : ''}">
                                <a class="page-link" href="#" data-page="${i}">${i}</a>
                            </li>
                        `;
                    }

                    paginationHtml += `
                        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                            <a class="page-link" href="#" data-page="${currentPage + 1}">Next</a>
                        </li>
                    `;

                    $pagination.html(paginationHtml);
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
        const page = $(this).data("page");
        if (page) {
            loadContent(page);
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".op-cardx");
    cards.forEach(card => {
        card.addEventListener("click", function () {
            const targetUrl = card.getAttribute("data-url");
            if (targetUrl) {
                window.location.href = targetUrl;
            }
        });
    });
});


$(document).ready(function () {
    function loadCategory(categoryId, containerId, detailPage) {
        $.ajax({
            url: "blogs/fetch_title.php",
            type: "GET",
            data: { category: categoryId },
            dataType: "json",
            success: function (data) {
                $(`#${containerId}`).empty();
                $.each(data, function (index, item) {
                    $(`#${containerId}`).append(
                        `<a href="${detailPage}?id=${item.hash_text_key}" class="list-group-item kt-4 mb-1" data-hash="${item.hash_text_key}">${item.title}</a>`
                    );
                });
            },
            error: function () {
                alert(`Failed to load data for category ${categoryId}.`);
            }
        });
    }

    loadCategory(0, "contentList", "details.php");
    loadCategory(2, "resultList", "result-details.php");
    loadCategory(1, "noticeList", "admit-details.php");

    $("#loadMore").click(function () {
        window.location.href = "latest-career.php";
    });

    $("#latest-admit").click(function () {
        window.location.href = "exam-result.php";
    });

    $("#latest-notice").click(function () {
        window.location.href = "important-notice.php";
    });
});

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var spinner = document.getElementById('spinner');
        var content = document.getElementById('spinner-content');

        if (spinner) {
            spinner.style.display = 'none';
        } else {
            console.warn("Element with ID 'spinner' not found.");
        }

        if (content) {
            content.style.display = 'block';
        } else {
            console.warn("Element with ID 'content' not found.");
        }
    }, 200);
});


function getQueryParam(name) {
    var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

$(document).ready(function () {
    var id = getQueryParam('id');
    if (id) {
        $.ajax({
            url: "blogs/fetch_content.php",
            type: "GET",
            data: { id: id },
            success: function (response) {
                $('#content').html(response);
            },
            error: function () {
                $('#content').html("<p>Error loading content.</p>");
            }
        });
    } else {
        $('#content').html("<p>Invalid request.</p>");
    }
});



$(document).ready(function () {
    function getUrlParameter(name) {
        let params = new URLSearchParams(window.location.search);
        return params.get(name);
    }
    let hashKey = getUrlParameter("id");
    if (!hashKey) {
        $("#faqAccordion").html(`<p class="text-danger">No hash key provided in the URL.</p>`);
        return;
    }
    $.ajax({
        url: "blogs/fetch_faq.php",
        type: "GET",
        data: {
            hash_key: hashKey
        },
        dataType: "json",
        success: function (response) {
            if (response.error) {
                $("#faqAccordion").html(`<p class="text-danger">${response.error}</p>`);
                return;
            }
            let faqHtml = "";
            response.forEach((faq, index) => {
                faqHtml += `
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq${index}">
                            ${faq.t1}
                        </button>
                    </h2>
                    <div id="faq${index}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            ${faq.t2}
                        </div>
                    </div>
                </div>
            `;
            });
            $("#faqAccordion").html(faqHtml);
        },
        error: function () {
            $("#faqAccordion").html('<p class="text-danger">Error loading FAQs.</p>');
        }
    });
});



$(document).ready(function () {
    $(document).ajaxError(function (event, jqxhr, settings, thrownError) {
        console.error(`Error loading ${settings.url}: ${thrownError}`);
        if (settings.context && settings.context.errorContainer) {
            $(settings.context.errorContainer).html("<tr><td colspan='2' class='text-danger'>Failed to load data.</td></tr>");
        }
    });
    function loadContent(url, data, container, errorContainer) {
        $.ajax({
            url: url,
            type: "GET",
            data: data,
            dataType: "html",
            context: { errorContainer: errorContainer },
            success: function (response) {
                $(container).html(response);
            }
        });
    }
    loadContent("blogs/fetch_links.php", { category_id: 0 }, "#dataBody", "#dataBody");
    loadContent("blogs/fetch_tbox.php", { category_id: 1 }, "#toolBox", "#toolBox");
});
