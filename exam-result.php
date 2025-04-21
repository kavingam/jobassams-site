<?php
// Include the PDO connection
// include 'blogs/db/pdo_connections.php';
include 'views/header.php';

// Pagination
$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Search Functionality
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// SQL Query with Search
$query = "SELECT title, HEX(hash_key) as hash_key, published 
          FROM title_data 
          WHERE categories = 2";

if (!empty($search)) {
    $query .= " AND title LIKE :search";
}

$query .= " ORDER BY published DESC LIMIT :limit OFFSET :offset";

$stmt = $pdo->prepare($query);

if (!empty($search)) {
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
}

$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Total Rows for Pagination
$totalQuery = "SELECT COUNT(*) FROM title_data WHERE categories = 2";
if (!empty($search)) {
    $totalQuery .= " AND title LIKE :search";
}

$totalStmt = $pdo->prepare($totalQuery);

if (!empty($search)) {
    $totalStmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
}

$totalStmt->execute();
$totalRows = $totalStmt->fetchColumn();
$totalPages = ceil($totalRows / $limit);
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

                    <!-- Breadcrumbs -->
                    <div class="col-12">
                        <div class="container border d-flex justify-content-center align-items-start my-2 p-2">
                            <div class="ms-2 me-auto mt-1 kt-5">Home / Exam Result</div>
                            <span><button type="button" class="me-2 border-0" id="copyBtn"><i class="bi bi-copy"></i></button></span>
                            <span><button type="button" class="me-2 border-0" id="shareBtn"><i class="bi bi-share-fill"></i></button></span>
                        </div>
                    </div>

                    <!-- Exam Results -->
                    <div class="col-12 col-lg-8">
                        <div class="container bg-linear-4 text-white g-0">
                            <p class="ms-2 fw-bold my-2">Exam Result</p>
                            <ul class="list-group list-group-flush border-secondary bg-light">
                                <?php foreach ($data as $item): ?>
                                    <li class="list-group-item border-bottomx border-secondaryx mb-2 borderx shadowx">
                                        <a href="result-details.php?id=<?php echo $item['hash_key']; ?>" class="kt-4 text-decoration-none">
                                            <?php echo htmlspecialchars($item['title']); ?>
                                        </a>
                                        <div class="d-flex align-items-center gap-2 border-top border-secondary kt-1">
                                            <i class="bi bi-newspaper"></i> Jobassams.Com
                                            <i class="bi bi-calendar-day ms-2"></i> Published: <?php echo htmlspecialchars($item['published']); ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Pagination -->
                        <?php if ($totalPages > 1): ?>
                            <ul class="pagination" id="pagination-card">
                                <li class="page-item <?php echo $page == 1 ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a>
                                </li>
                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php endfor; ?>
                                <li class="page-item <?php echo $page == $totalPages ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- Sidebar Search and Links -->
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

<?php include "views/footer.php"; ?>
