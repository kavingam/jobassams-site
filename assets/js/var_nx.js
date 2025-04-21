$('#submitCmt').on('click', function (e) {
    e.preventDefault(); // Prevent default button behavior
    // Manually submit the form
    $('#formComment').submit(); // Trigger form submit
});

// Form submission handling
$('#formComment').on('submit', function (e) {
    e.preventDefault(); // Prevent default form submission

    const formData = {
        'cmt-username': $('[name="cmt-username"]').val().trim(),
        'cmt-email': $('[name="cmt-email"]').val().trim(),
        'cmt-comment': $('[name="cmt-comment"]').val().trim(),
        'cmt-hash_id': $('[name="cmt-hash_id"]').val().trim()
    };

    $.ajax({
        url: 'blogs/user_comments.php',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function (res) {
            $('#responseMsg').html(
                `<div class="alert alert-${res.status}">${res.message}</div>`
            );
            if (res.status === 'success') {
                $('#formComment')[0].reset();
            }
        },
        error: function () {
            $('#responseMsg').html(`<div class="alert alert-danger">An error occurred.</div>`);
        }
    });
});
