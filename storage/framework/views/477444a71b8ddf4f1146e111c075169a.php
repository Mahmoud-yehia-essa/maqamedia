<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>قريباً — المقام ميديا</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --orange: #ED7032;
      --blue: #1E88E5;
      --dark: #0f172a;
      --muted: #64748b;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Cairo', sans-serif;
      background: linear-gradient(135deg, var(--orange), var(--blue));
      color: #fff;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }
    .overlay {
      background: rgba(0,0,0,0.5);
      border-radius: 24px;
      padding: 40px;
      max-width: 760px;
      width: 100%;
      text-align: center;
      box-shadow: 0 12px 32px rgba(0,0,0,0.25);
    }
    .logo {
      width: 400px;
      height: 200px;
      margin: 0 auto 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 2%;
      background: #fff;
    }
    .logo img {  fill: var(--orange); }

    h1 {
      font-size: 32px;
      font-weight: 800;
      margin-bottom: 16px;
      line-height: 1.5;
    }
    h1 span.orange { color: var(--orange); }
    h1 span.blue { color: var(--blue); }

    p.lead {
      font-size: 18px;
      color: #e2e8f0;
      margin-bottom: 32px;
    }

    .badges {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .badges img {
      height: 60px;
      width: auto;
      transition: transform 0.3s ease;
    }
    .badges img:hover { transform: scale(1.05); }

    footer {
      margin-top: 32px;
      font-size: 14px;
      color: #cbd5e1;
    }
    footer strong { color: #fff; }
  </style>
</head>
<body>
  <div class="overlay">

    <div class="logo">
<img src="<?php echo e(asset('backend/assets/images/logo-icon-maqam.png')); ?>" width="270" alt="">

      <!-- شعار مؤقت -->
      
    </div>
    <h1>قريباً موقع شركة <span class="orange">المقام</span> <span class="blue">ميديا</span><br>للدعاية والتسويق</h1>
    <p class="lead">نحن نعمل حالياً على إطلاق الموقع الرسمي والتطبيقات الخاصة بنا على المتاجر.</p>

    <div class="badges">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
      <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
    </div>

    <footer>
    </footer>
  </div>
</body>
</html>
<?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/soon.blade.php ENDPATH**/ ?>