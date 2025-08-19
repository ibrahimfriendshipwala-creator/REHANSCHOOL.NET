<?php /* facilitators.php */ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Facilitators — RehanSchool Clone</title>
  <style>
    body{font-family:Inter,Arial;margin:0;background:#f5f7fb;color:#0b1220}
    .container{max-width:1000px;margin:0 auto;padding:28px}
    .team{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .member{background:#fff;padding:18px;border-radius:12px;text-align:center}
    .avatar{width:86px;height:86px;border-radius:999px;background:linear-gradient(180deg,#e6f0ff,#fff);display:inline-flex;align-items:center;justify-content:center;font-weight:700;color:var(--accent)}
    @media (max-width:900px){.team{grid-template-columns:repeat(2,1fr)}}
    @media (max-width:520px){.team{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <div class="container">
    <div style="margin-bottom:14px"><a href="index.php">← Home</a></div>
    <h1>Meet Our Facilitators</h1>
    <p style="color:#6b7280">Experienced mentors and practitioners who guide students through projects and real-world challenges.</p>

    <section class="team">
      <div class="member"><div class="avatar">AR</div><h3>Rehan Ahmed</h3><p style="color:#6b7280">Founder & Lead Mentor — AI & Startups</p><p><a href="#">Twitter</a> • <a href="#">LinkedIn</a></p></div>
      <div class="member"><div class="avatar">AM</div><h3>Amina Mir</h3><p style="color:#6b7280">Design Lead</p><p><a href="#">Behance</a> • <a href="#">LinkedIn</a></p></div>
      <div class="member"><div class="avatar">SM</div><h3>Said Malik</h3><p style="color:#6b7280">Fullstack Instructor</p><p><a href="#">GitHub</a> • <a href="#">LinkedIn</a></p></div>
    </section>
  </div>
</body>
</html>

