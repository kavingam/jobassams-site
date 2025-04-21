<div id="spinner" class="spinner-container">
    <div id="spinner-content" class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<nav class="navbar container">
    <div class="navbar-brand ms-3">
        <p class="web-logo" onclick="homePage()">Jobassams.Com</p>
    </div>
    <div class="ms-auto me-2 d-block d-lg-none" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="search-bar bi bi-search"></i></div>
    <div class="navbar-toggler border border-0" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <div class="navbar-menu" id="navbarMenu">
        <a href="latest-career.php" class="<?= ($current_page == 'latest-career') ? 'active' : ''; ?>">Current Released Career</a>
        <a href="exam-result.php" class="<?= ($current_page == 'exam-result') ? 'active' : ''; ?>">Exam Result</a>
        <a href="admit-card.php" class="<?= ($current_page == 'admit-card') ? 'active' : ''; ?>">Admit Card</a>
        <a href="scholarship.php" class="<?= ($current_page == 'scholarship') ? 'active' : ''; ?>">Scholarship</a>
        <a href="questions-paper.php" class="border-0 <?= ($current_page == 'questions-paper') ? 'active' : ''; ?>">Questions Paper</a>
    </div>
    <div class="me-5 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="search-bar bi bi-search"></i></div>
</nav>

<div class="modal fade p-4" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog mx-auto" style="margin-top: 100px;"> <!-- mx-auto centers it horizontally -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title kt-4" id="searchModalLabel">Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="input-group">
            <input type="text" class="form-control kt-1" placeholder="What are you looking for?" aria-label="Search" autofocus>
            <button class="btn btn-outline-secondary" type="btn"><i class="bi bi-search"></i></button>
          </div>

          <div class="list-group mt-2 kt-1">
            <a href="https://www.jobassams.com/latest-career" target="_blank" class="list-group-item list-group-item-action">
              Latest Career- Assams
            </a>
            <a href="https://www.jobassams.com/latest-career" target="_blank" class="list-group-item list-group-item-action">
              Govt Jobs- Assams
            </a>
            <a href="https://www.jobassams.com/admit-card" target="_blank" class="list-group-item list-group-item-action">
              Admit card 2025
            </a>
            <a href="https://www.jobassams.com/latest-career" target="_blank" class="list-group-item list-group-item-action">
              SI (sub inspector) assams
            </a>
          </div>
        </form>
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