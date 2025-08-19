<?php /* index.php */ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Rehan School — AI Enabled Education</title>
  <style>
    /* ---------- Global (Internal CSS) ---------- */
    :root{--accent:#0f62fe;--muted:#6b7280;--card:#ffffff;--bg:#f5f7fb}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,system-ui,-apple-system,'Segoe UI',Roboto,'Helvetica Neue',Arial;line-height:1.5;background:var(--bg);color:#0b1220}
    a{color:inherit;text-decoration:none}
    .container{max-width:1100px;margin:0 auto;padding:28px}

    /* ---------- Header ---------- */
    header{background:linear-gradient(90deg, rgba(15,98,254,0.06), rgba(6,182,212,0.03));padding:18px 0;border-bottom:1px solid rgba(11,17,32,0.06)}
    .nav{display:flex;align-items:center;justify-content:space-between}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{cursor:pointer;font-weight:700;color:var(--accent)}
    nav ul{display:flex;gap:18px;list-style:none;margin:0;padding:0}
    nav a{padding:8px 12px;border-radius:8px}
    nav a:hover{background:rgba(15,98,254,0.08)}

    /* ---------- Hero ---------- */
    .hero{display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center;padding:48px 0}
    .hero h1{font-size:34px;margin:0 0 12px}
    .hero p{color:var(--muted);margin:0 0 18px}
    .cta{display:flex;gap:12px}
    .btn{background:var(--accent);color:#fff;padding:12px 18px;border-radius:12px;border:0;cursor:pointer;font-weight:600}
    .btn.secondary{background:transparent;border:1px solid rgba(11,17,32,0.06);color:var(--accent)}

    /* ---------- Cards ---------- */
    .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:18px}
    .card{background:var(--card);padding:16px;border-radius:12px;box-shadow:0 6px 18px rgba(11,17,32,0.04)}
    .big-stats{display:flex;gap:18px;margin-top:18px}
    .stat{flex:1;padding:18px;border-radius:12px;background:linear-gradient(180deg,#fff,#fbfdff);text-align:center}
    .stat h3{margin:0;font-size:22px}
    .stat p{margin:6px 0 0;color:var(--muted)}

    /* ---------- Testimonials & Articles ---------- */
    .grid-2{display:grid;grid-template-columns:1fr 360px;gap:18px;margin-top:22px}
    .testimonials{display:flex;flex-direction:column;gap:12px}
    .test{background:#fff;padding:12px;border-radius:10px}

    /* ---------- Footer ---------- */
    footer{margin-top:40px;padding:22px 0;color:var(--muted);font-size:14px}

    /* ---------- Responsive ---------- */
    @media (max-width:900px){
      .hero{grid-template-columns:1fr;}
      .cards{grid-template-columns:repeat(2,1fr)}
      .grid-2{grid-template-columns:1fr}
    }
    @media (max-width:520px){
      .cards{grid-template-columns:1fr}
      nav ul{display:none}
    }
  </style>
</head>
<body>
  <header>
    <div class="container nav">
      <div class="brand">
        <div class="logo" onclick="jsRedirect('index.php')">RehanSchool<span style="color:var(--muted);font-weight:400">.net</span></div>
        <div style="font-size:13px;color:var(--muted)">AI • Entrepreneurship • Skills</div>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="curriculum.php">Curriculum</a></li>
          <li><a href="facilitators.php">Facilitators</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="hero">
      <div>
        <h1>Learn modern skills. Build real projects. Launch your future.</h1>
        <p>RehanSchool clone — an AI-enabled learning experience that blends technical skills with entrepreneurship and critical thinking.</p>
        <div class="cta">
          <button class="btn" onclick="jsRedirect('curriculum.php')">Explore Curriculum</button>
          <button class="btn secondary" onclick="jsRedirect('contact.php')">Get in Touch</button>
        </div>

        <div class="cards">
          <div class="card">
            <h4>AI-Enabled Education</h4>
            <p style="color:var(--muted)">Adaptive learning paths, mentor feedback and AI project assistants.</p>
          </div>
          <div class="card">
            <h4>Entrepreneurial Focus</h4>
            <p style="color:var(--muted)">Build startups, pitch to mentors, learn business fundamentals.</p>
          </div>
          <div class="card">
            <h4>Holistic Development</h4>
            <p style="color:var(--muted)">Soft skills, public speaking and creative problem solving.</p>
          </div>
        </div>

        <div class="big-stats">
          <div class="stat"><h3>24</h3><p>Team Members</p></div>
          <div class="stat"><h3>1,200+</h3><p>Students</p></div>
          <div class="stat"><h3>6</h3><p>Campuses</p></div>
        </div>
      </div>

      <aside>
        <div style="background:#fff;padding:18px;border-radius:12px;box-shadow:0 6px 18px rgba(11,17,32,0.04)">
          <h3>Latest Article</h3>
          <p style="color:var(--muted);font-size:14px">How AI is reshaping project-based learning — July 2025</p>
          <hr>
          <h4 style="margin:12px 0 6px">Testimonials</h4>
          <div class="testimonials">
            <div class="test"><strong>Ayesha</strong><p style="color:var(--muted);margin:6px 0 0">"Amazing mentors and real projects — learned so much!"</p></div>
            <div class="test"><strong>Ali</strong><p style="color:var(--muted);margin:6px 0 0">"Practical, focused and fun. The startup lab was the highlight."</p></div>
          </div>
        </div>
      </aside>
    </section>

    <section style="margin-top:28px">
      <h3>Why choose us</h3>
      <p style="color:var(--muted)">Project-based learning + AI support + entrepreneurial guidance — built for the 21st century learner.</p>
    </section>

  </main>

  <footer class="container">
    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap">
      <div>© RehanSchool Clone — Built with ❤️</div>
      <div>Address: Karachi, Pakistan • Phone: +92 300 0000000 • Email: info@rehanschool.example</div>
    </div>
  </footer>

  <script>
    function jsRedirect(path){
      // using JS for file redirection as requested
      window.location.href = path;
    }
  </script>
</body>
</html>
