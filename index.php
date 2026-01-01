<?php
$portfolio = require __DIR__ . '/data.php';
$hero = $portfolio['hero'];
$stats = $portfolio['stats'];
$experiences = $portfolio['experiences'];

function esc($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Mozo — Creative Resume Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&family=Manrope:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="inner">
        <nav class="main-nav">
          <ul class="nav-links">
            <li><a href="#hero">Home</a></li>
            <li><a href="#projects">Portfolio</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#pages">Pages</a></li>
          </ul>
          <div class="brand">
            <div class="brand-mark">MO</div>
            <span class="brand-name">Mozo</span>
          </div>
          <ul class="social-links">
            <li><a href="#twitter" aria-label="Twitter">T</a></li>
            <li><a href="#facebook" aria-label="Facebook">F</a></li>
            <li><a href="#instagram" aria-label="Instagram">I</a></li>
            <li><a href="#pinterest" aria-label="Pinterest">P</a></li>
            <li><a href="#dribbble" aria-label="Dribbble">D</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <section id="hero" class="hero">
        <div class="inner hero-grid">
          <div class="hero-text">
            <p class="eyebrow">Creative Resume Theme</p>
            <h1 class="hero-name"><?= $hero['headline']; ?></h1>

            <div class="info-block">
              <p class="muted">Biography</p>
              <p class="body"><?= esc($hero['biography']); ?></p>
            </div>

            <div class="info-block">
              <p class="muted">Contact</p>
              <p class="body">
                <?= esc(implode('<br />', $hero['contact'])); ?>
              </p>
            </div>

            <div class="info-block">
              <p class="muted">Services</p>
              <p class="body">
                <?= esc(implode('<br />', $hero['services'])); ?>
              </p>
            </div>
          </div>

          <div class="hero-portrait">
            <div class="portrait-frame">
              <img
                src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80"
                alt="Portrait of Mozo holding a dog"
              />
              <span class="pin"></span>
            </div>
          </div>

          <div class="hero-stats">
            <div class="stat">
              <span class="muted">Years of experience</span>
              <span class="stat-number"><?= esc($stats['years']); ?></span>
            </div>
            <div class="stat">
              <span class="muted">Satisfaction Clients</span>
              <span class="stat-number"><?= esc($stats['satisfaction']); ?></span>
            </div>
            <div class="stat">
              <span class="muted">Clients Worldwide</span>
              <span class="stat-number"><?= esc($stats['clients']); ?></span>
            </div>
            <div class="stat">
              <span class="muted">Projects Done</span>
              <span class="stat-number"><?= esc($stats['projects']); ?></span>
            </div>
          </div>
        </div>
      </section>

      <section class="brands">
        <div class="inner">
          <div class="brand-logos">
            <img src="https://dummyimage.com/120x40/ededed/555&text=BLB" alt="BLB" />
            <img src="https://dummyimage.com/130x40/ededed/555&text=Landesbibliothek" alt="Landesbibliothek" />
            <img src="https://dummyimage.com/130x40/ededed/555&text=Christopher+Willis" alt="Christopher Willis" />
            <img src="https://dummyimage.com/120x40/ededed/555&text=Serenity+Hotel" alt="Serenity Hotel" />
            <img src="https://dummyimage.com/120x40/ededed/555&text=Artchive" alt="Artchive" />
            <img src="https://dummyimage.com/170x40/ededed/555&text=Creative+Academy" alt="Creative Academy" />
          </div>
        </div>
      </section>

      <section id="skills" class="skills">
        <div class="inner">
          <h2>My Advantage</h2>
          <div class="skill-grid">
            <article class="skill-card">
              <div class="skill-icon">F</div>
              <p class="skill-percent">90%</p>
              <p class="muted">Figma</p>
            </article>
            <article class="skill-card">
              <div class="skill-icon">S</div>
              <p class="skill-percent">95%</p>
              <p class="muted">Sketch</p>
            </article>
            <article class="skill-card">
              <div class="skill-icon">Xd</div>
              <p class="skill-percent">82%</p>
              <p class="muted">Adobe XD</p>
            </article>
            <article class="skill-card">
              <div class="skill-icon">in</div>
              <p class="skill-percent">93%</p>
              <p class="muted">InVision</p>
            </article>
            <article class="skill-card">
              <div class="skill-icon">B</div>
              <p class="skill-percent">76%</p>
              <p class="muted">Bootstrap</p>
            </article>
            <article class="skill-card">
              <div class="skill-icon">5</div>
              <p class="skill-percent">88%</p>
              <p class="muted">HTML5/CSS</p>
            </article>
          </div>
        </div>
      </section>

      <section id="experience" class="experience">
        <div class="inner">
          <h2>Experience</h2>
          <div class="experience-grid">
            <?php foreach ($experiences as $group): ?>
              <div class="experience-column">
                <p class="muted"><?= esc($group['range']); ?></p>
                <?php foreach ($group['roles'] as $role): ?>
                  <div class="experience-item">
                    <h3><?= esc($role['title']); ?></h3>
                    <p class="muted"><?= esc($role['place']); ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="projects" class="projects">
        <div class="inner">
          <h2>My Latest Projects</h2>
          <div class="project-grid">
            <article class="project-card">
              <img src="https://images.unsplash.com/photo-1529429617124-aee5600cb5be?auto=format&fit=crop&w=800&q=80" alt="Liarch Architecture Firm project" />
              <p class="muted tiny-label">UI/UX</p>
              <h3>Liarch Architecture Firm</h3>
            </article>
            <article class="project-card">
              <img src="https://images.unsplash.com/photo-1523475472560-d2df97ec485c?auto=format&fit=crop&w=800&q=80" alt="Taskly Dashboard project" />
              <p class="muted tiny-label">UI/UX</p>
              <h3>Taskly Dashboard</h3>
            </article>
            <article class="project-card">
              <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" alt="Film & Art Festival project" />
              <p class="muted tiny-label">Product</p>
              <h3>Film & Art Festival</h3>
            </article>
          </div>
        </div>
      </section>

      <section class="testimonial">
        <div class="inner">
          <blockquote>
            “Mozo was a real pleasure to work with and we look forward to working with them again.
            Definitely the kind of designer you can trust with a project from start to finish. Great
            services & recommended!”
          </blockquote>
          <div class="testimonial-author">
            <div class="avatar">
              <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=120&q=80" alt="Jurgen Kloop" />
            </div>
            <div>
              <p class="author-name">Jurgen Kloop</p>
              <p class="muted">Product Management at Google Inc</p>
              <div class="dots">
                <span class="active"></span><span></span><span></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="blog" class="gallery">
        <div class="inner">
          <p class="gallery-handle">@mozo</p>
          <div class="gallery-grid">
            <img src="https://images.unsplash.com/photo-1545239351-1141bd82e8a6?auto=format&fit=crop&w=400&q=80" alt="Design tile" />
            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=400&q=80" alt="Black sand" />
            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=400&q=80" alt="Portrait detail" />
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=400&q=80" alt="Logo mark" />
            <img src="https://images.unsplash.com/photo-1523419400524-223d5b35cbf4?auto=format&fit=crop&w=400&q=80" alt="Architecture detail" />
          </div>
        </div>
      </section>

      <section id="pages" class="cta">
        <div class="inner">
          <div class="cta-circle">
            <p class="muted tiny-label">Describe your project</p>
            <h3>Call<br />Mozo</h3>
            <span class="arrow">↗</span>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="inner footer-grid">
        <p class="muted">© 2026 Mozo. All Rights Reserved.</p>
        <a class="muted" href="mailto:hello@mozo.studio">hello@mozo.studio</a>
        <ul class="social-links">
          <li><a href="#twitter-footer" aria-label="Twitter">T</a></li>
          <li><a href="#facebook-footer" aria-label="Facebook">F</a></li>
          <li><a href="#instagram-footer" aria-label="Instagram">I</a></li>
          <li><a href="#pinterest-footer" aria-label="Pinterest">P</a></li>
          <li><a href="#dribbble-footer" aria-label="Dribbble">D</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
