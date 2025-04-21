<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Remove Background</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 5.3.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      max-width: 600px;
      margin-top: 50px;
    }
    #result img {
      max-width: 100%;
      height: auto;
      margin-top: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .download-btn {
      display: inline-block;
      margin-top: 15px;
    }
  </style>
</head>
<body>

<div class="container text-center bg-white p-4 rounded shadow">
  <h2 class="mb-4">Remove Background from Image</h2>

  <form id="uploadForm" enctype="multipart/form-data">
    <div class="mb-3">
      <input type="file" class="form-control" name="image" id="image" accept="image/*" required />
    </div>
    <button type="submit" class="btn btn-primary w-100">Upload & Process</button>
  </form>

  <div id="result" class="mt-4"></div>
</div>

<!-- Bootstrap JS (for optional interactive stuff) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.getElementById('uploadForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const fileInput = document.getElementById('image');
    const formData = new FormData();
    formData.append('image', fileInput.files[0]);

    fetch('upload.php', {
      method: 'POST',
      body: formData
    })
    .then(res => {
      if (!res.ok) throw new Error('Server error');
      return res.blob();
    })
    .then(blob => {
      const url = URL.createObjectURL(blob);
      const img = document.createElement('img');
      img.src = url;

      const download = document.createElement('a');
      download.href = url;
      download.download = 'no-bg.png';
      download.textContent = 'Download Image';
      download.className = 'btn btn-success download-btn';

      const result = document.getElementById('result');
      result.innerHTML = '';
      result.appendChild(img);
      result.appendChild(document.createElement('br'));
      result.appendChild(download);
    })
    .catch(err => {
      const result = document.getElementById('result');
      result.innerHTML = `<div class="alert alert-danger">Failed to process image. Try again.</div>`;
      console.error(err);
    });
  });
</script>

</body>
</html>
