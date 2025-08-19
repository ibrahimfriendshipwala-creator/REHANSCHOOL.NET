<?php /* curriculum.php */ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Curriculum — RehanSchool Clone</title>
  <style>
    body{font-family:Inter,Arial;margin:0;background:#f5f7fb;color:#0b1220}
    .container{max-width:1000px;margin:0 auto;padding:28px}
    header{padding:14px 0}
    .back{cursor:pointer;color:#0f62fe}
    .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:18px}
    .course{background:#fff;padding:16px;border-radius:12px;box-shadow:0 10px 30px rgba(2,6,23,0.04)}
    @media (max-width:900px){.grid{grid-template-columns:repeat(2,1fr)}}
    @media (max-width:520px){.grid{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="back" onclick="jsRedirect('index.php')">← Back to Home</div>
      <h1>Curriculum Overview</h1>
      <p style="color:#6b7280">Our curriculum blends AI, coding, design, and entrepreneurship with soft skills and real projects.</p>
    </header>

    <section class="grid">
      <div class="course"><h3>AI Fundamentals</h3><p style="color:#6b7280">Basics of machine learning, model thinking and project-based labs.</p></div>
      <div class="course"><h3>Web Development</h3><p style="color:#6b7280">HTML, CSS, JS and fullstack projects to build real websites and clones.</p></div>
      <div class="course"><h3>Product & Startup Lab</h3><p style="color:#6b7280">Idea validation, MVPs, pitching and growth fundamentals.</p></div>
      <div class="course"><h3>Design Thinking</h3><p style="color:#6b7280">User-centered design, prototyping and usability testing.</p></div>
      <div class="course"><h3>Soft Skills</h3><p style="color:#6b7280">Communication, leadership and collaboration exercises.</p></div>
      <div class="course"><h3>Capstone Project</h3><p style="color:#6b7280">Build a product, deploy it and present to mentors.</p></div>
    </section>
  </div>

  <script>
    function jsRedirect(path){ window.location.href = path; }
  </script>
</body>
</html>
