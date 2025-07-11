<?php
$projects = [
    "kasir" => [
        "title" => "Website E-Commerce",
        "category" => "Web Development",
        "description" => "Website penjualan aplikasi cuaca offline dengan desain klasik dan fokus konversi.",
        "tech" => "HTML5, CSS3, JavaScript",
         "icon" => "🛒", 
        "details" => [
            "overview" => "Landing page e-commerce untuk perusahaan teknologi cuaca bernama Boxcar. Website ini dirancang untuk meningkatkan konversi penjualan aplikasi cuaca berbasis sains yang dapat digunakan secara offline, dengan desain bergaya klasik dan tetap hidup. Dilengkapi dengan sistem reporting yang komprehensif.",
            "features" => [
                "Landing page dengan call-to-action yang menonjol",
                "Halaman informasi produk secara rinci",
                "Halaman toko (shop) untuk pembelian langsung",
                "Halaman kebijakan privasi (privacy policy)",
                "Bagian 'Our Values' yang mencerminkan misi perusahaan",
                "Desain klasik dengan warna dominan putih",
                "Responsif di berbagai perangkat",
                "Navigasi sederhana dan intuitif"
            ],
            "tech_stack" => [
                 "Frontend: HTML5, CSS3, JavaScript",
            "Framework: (Opsional) Bootstrap atau Tailwind untuk responsivitas",
            "Tools: Figma (desain awal), VS Code, Git"
            ],
           "challenges" => "Menerapkan desain old-fashioned tanpa mengorbankan usability dan memastikan konversi tetap optimal",
        "duration" => "9 hari",
        "status" => "Completed"
        ]
    ],
    "boldbeast" => [
    "title" => "Brand Awareness Website",
    "category" => "Web Development",
    "description" => "Landing page promosi untuk produk pastry rendah kalori dengan pendekatan yang ramah dan aman untuk keluarga.",
    "tech" => "HTML5, CSS3, JavaScript",
    "icon" => "🥐",
    "details" => [
        "overview" => "Website untuk perusahaan Bold Beast yang menjual pastry rendah kalori. Dirancang untuk meningkatkan kesadaran merek, menjangkau orang tua sebagai target utama, dan mempromosikan produk berbahan segar.",
        "features" => [
            "Landing page dengan CTA untuk follow media sosial",
            "Halaman About untuk mengenalkan nilai dan proses produksi",
            "Halaman Shop untuk pemesanan langsung",
            "Blog seputar gizi, parenting, dan tips sehat",
            "Desain monokrom dengan warna dominan kuning",
            "Bagian 'Contact Us'",
            "Responsive di mobile dan tablet"
        ],
        "tech_stack" => [
            "Frontend: HTML5, CSS3, JavaScript",
            "CSS Framework: Custom CSS dengan Flexbox/Grid",
            "Tools: VS Code, Git",
            "Design: Figma (wireframe), Canva (assets)"
        ],
        "challenges" => "Menciptakan desain yang menarik untuk target audience orang tua sambil tetap mempertahankan brand image yang fun dan friendly",
        "duration" => "4 hari",
        "status" => "Completed"
        ]
    ]
];

$services = [
    [
        "icon" => "💻",
        "title" => "Web Development",
        "description" => "Membangun website modern dan responsif menggunakan teknologi terkini seperti PHP, JavaScript, dan framework CSS."
    ],
    [
        "icon" => "🎨",
        "title" => "UI/UX Design",
        "description" => "Merancang antarmuka pengguna yang intuitif dan menarik dengan fokus pada pengalaman pengguna yang optimal."
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Azizan Ramadhan - Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <script src="js/darkmode.js"></script> </head>
<body>
  <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
        <div class="logo-icon">A</div>
        Azizan
      </div>
      <ul class="nav-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="about.php">Profile</a></li>
      </ul>
      <a href="#contact" class="contact-btn">Contact Me</a>
      <button id="darkmode-toggle" class="darkmode-btn" title="Toggle dark mode" aria-label="Toggle dark mode">
        🌙
      </button>
    </div>
  </nav>

  <section class="hero" id="home">
    <div class="hero-container">
      <div class="hero-content">
        <div class="hero-badge">👋 Hello There!</div>
        <h1 class="hero-title">I'm <span class="highlight">Azizan Ramadhan</span>.</h1>
        <h2 class="hero-subtitle">Web Developer</h2>
        <p class="hero-location">Based in Jakarta, Indonesia.</p>
        <p class="hero-description">
          Saya adalah mahasiswa Teknik Informatika yang tertarik dalam bidang
          web development dan UI/UX design, siap berkolaborasi dengan berbagai perusahaan dan startup.
        </p>
        <div class="hero-buttons">
          <a href="#projects" class="btn-primary">▶ View My Portfolio</a>
          <a href="about.php" class="btn-secondary">Hire Me</a>
        </div>
      </div>
      
      <div class="hero-image">
        <div class="hero-photo"></div>
        <div class="hero-decorations">
          <div class="decoration-badge badge-1">✨ Creative</div>
          <div class="decoration-badge badge-2">UI/UX Designer</div> 
          <div class="decoration-badge badge-3">Web Developer</div>
        </div>
      </div>
    </div>
  </section>

  <div class="skills-ticker">
    <div class="ticker-content">
      ⭐ Web Development • 🎨 UI/UX Design • 💼 Dashboard Design • 🔗 Wireframe • 
      ⭐ Web Development • 🎨 UI/UX Design • 💼 Dashboard Design • 🔗 Wireframe •
    </div>
  </div>

  <section class="services" id="services">
    <div class="services-container">
      <div class="section-header">
        <p class="section-subtitle">~ Services</p>
        <h2 class="section-title">Services <span class="highlight">I Provide</span></h2>
      </div>
      
      <div class="services-grid">
        <?php foreach ($services as $idx => $service): ?>
        <div class="service-card">
          <span class="service-icon"><?= $service['icon'] ?></span>
          <h3 class="service-title"><?= $service['title'] ?></h3>
          <p class="service-description"><?= $service['description'] ?></p>
          <a href="javascript:void(0)" class="learn-more" onclick="openServiceModal(<?= $idx ?>)">Learn more →</a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div id="service-modal" class="project-modal">
    <div class="project-modal-content" style="max-width:400px">
      <div class="project-modal-header">
        <button class="project-modal-close" onclick="closeServiceModal()">&times;</button>
        <h2 class="project-modal-title" id="service-modal-title"></h2>
      </div>
      <div class="project-modal-body" id="service-modal-body"></div>
    </div>
  </div>

  <section class="about" id="about">
    <div class="about-container">
      <div class="about-image">
        <div class="about-photo"></div>
      </div>
      
      <div class="about-content">
        <p class="section-subtitle">~ ABOUT ME</p>
        <h2>Who is <span class="highlight">Azizan Ramadhan</span>?</h2>
        <p class="profile-intro" style="text-align: justify; text-justify: inter-word; font-weight: bold;">Saya adalah mahasiswa Teknik Informatika yang passionate dalam web development dan UI/UX design. Dengan pengalaman dalam berbagai proyek, saya siap memberikan solusi digital terbaik untuk kebutuhan Anda.</p>
        
        <div class="profile-description text-justify text-bold" style="text-align: justify; text-justify: inter-word; font-weight: bold;">
          <p style="text-align: justify; text-justify: inter-word;">Sebagai mahasiswa semester 6 di Universitas Indraprasta PGRI, saya telah mengembangkan keahlian dalam HTML5, CSS3, JavaScript, PHP, dan MySQL. Aktif dalam UI/UX design menggunakan Figma dan Canva.</p>
          
          <p style="text-align: justify; text-justify: inter-word;">Saat ini mencari kesempatan magang di bidang teknologi untuk mengembangkan skill dan berkontribusi dalam proyek berdampak. Percaya teknologi harus dapat diakses semua orang.</p>
        </div>
        
        <div class="about-actions">
          <a href="about.php" class="btn-primary">🔍 View Full Profile</a>
          <a href="#contact" class="btn-secondary">📞 Contact Me</a>
        </div>
      </div>
    </div>
  </section>

  <section class="services" id="projects">
    <div class="services-container">
      <div class="section-header">
        <p class="section-subtitle">~ Portfolio</p>
        <h2 class="section-title">My <span class="highlight">Projects</span></h2>
      </div>
      <div class="services-grid">
        <?php foreach ($projects as $id => $project): ?>
        <div class="service-card">
          <span class="service-icon"><?= $project['icon'] ?></span>
          <h3 class="service-title"><?= $project['title'] ?></h3>
          <p class="service-description"><?= $project['description'] ?></p>
          <div class="project-tech-list"><?= $project['tech'] ?></div>
          <a href="javascript:void(0)" class="learn-more" onclick="openProjectModal('<?= $id ?>')">Lihat Detail →</a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php foreach ($projects as $id => $project): ?>
    <div id="modal-<?= $id ?>" class="project-modal">
      <div class="project-modal-content">
        <div class="project-modal-header">
          <button class="project-modal-close" onclick="closeProjectModal('<?= $id ?>')">&times;</button>
          <?php if ($id === 'kasir'): ?>
            <h2 class="project-modal-title">
              <img src="foto/manupsia.png" alt="Ikon Aplikasi Kasir" width="32" height="32" style="margin-right: 8px; vertical-align: middle;" />
              <?= $project['title'] ?>
            </h2>
          <?php else: ?>
            <h2 class="project-modal-title"><?= $project['icon'] ?> <?= $project['title'] ?></h2>
          <?php endif; ?>
          <p class="project-modal-subtitle"><?= $project['category'] ?> Project</p>
        </div>
        <div class="project-modal-body">
          <div class="project-images">
            <div class="project-main-image">
              <div class="project-image-frame">
                <?php
                  // Mapping nama file berdasarkan title project
                  $fileMapping = [
                    'kasir' => 'Website E-Commerce', // Perbaiki mapping untuk kasir
                    'boldbeast' => 'Brand-Awareness-Website', // tambahkan jika ada foto spesifik
                    'ui' => 'desain-ui-mobile', 
                    'profil' => 'website-company-profile',
                    'poster' => 'graphic-design'
                  ];
                  // Gunakan $id sebagai kunci langsung untuk $fileMapping, atau fallback ke $id jika tidak ada mapping khusus
                  $fileName = isset($fileMapping[$id]) ? $fileMapping[$id] : $id;
                ?>
                <img src="foto/project1/<?= $fileName ?>-main.png" 
                     alt="<?= $project['title'] ?> - Main View" 
                     style="width: 100%; height: 100%; object-fit: cover; border-radius: 12px;"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                
                <?php if ($id === 'kasir'): ?>
                  <div class="image-placeholder" style="display:none;">
                    <div class="placeholder-icon">
                      <img src="foto/project1.png" 
                           alt="Ikon Aplikasi Kasir" 
                           width="48" 
                           height="48" 
                           style="margin-bottom: 0.5rem; border-radius: 8px;" />
                    </div>
                    <div class="placeholder-category"><?= $project['category'] ?></div>
                  </div>
                <?php elseif ($id === 'boldbeast'): ?>
                  <div class="image-placeholder" style="display:none;">
                    <div class="placeholder-icon">
                      <img src="foto/project2.png" 
                           alt="Ikon Bold Beast" 
                           width="48" 
                           height="48" 
                           style="margin-bottom: 0.5rem; border-radius: 8px;" />
                    </div>
                    <div class="placeholder-category">Brand Awareness Website</div>
                  </div>
                <?php else: ?>
                  <div class="image-placeholder" style="display:none;">
                    <div class="placeholder-icon"><?= $project['icon'] ?></div>
                    <div class="placeholder-text"><?= $project['title'] ?></div>
                    <div class="placeholder-category"><?= $project['category'] ?></div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            
            <?php // Bagian ini tidak memerlukan perubahan kecuali jika ada gambar tambahan yang ingin ditampilkan ?>
            <?php if ($id === 'kasir'): ?>
              
            <?php elseif ($id === 'boldbeast'): ?>
            
            <?php elseif ($id === 'profil'): ?>
              <div class="project-image-grid">
                <div class="project-image-item">
                  <img src="foto/project2.png" alt="Company Profile - Modern Design" 
                       onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="image-placeholder" style="display:none;">
                    <span>🏢</span>
                    <small>Homepage</small>
                  </div>
                </div>
                <div class="project-image-item">
                  <img src="images/projects/profil-about.jpg" alt="About Page" 
                       onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="image-placeholder" style="display:none;">
                    <span>👥</span>
                    <small>About</small>
                  </div>
                </div>
                <div class="project-image-item">
                  <img src="images/projects/profil-services.jpg" alt="Services Page" 
                       onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="image-placeholder" style="display:none;">
                    <span>⚙️</span>
                    <small>Services</small>
                  </div>
                </div>
              </div>
            <?php elseif ($id === 'poster'): ?>
              <div class="project-image-grid">
                <div class="project-image-item">
                  <img src="kasir-app.jpg" alt="Poster Design - Professional Layout" 
                       onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="image-placeholder" style="display:none;">
                    <span>📢</span>
                    <small>Seminar</small>
                  </div>
                </div>
                <div class="project-image-item">
                  <img src="images/projects/poster-festival.jpg" alt="Poster Festival" 
                       onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="image-placeholder" style="display:none;">
                    <span>🎪</span>
                    <small>Festival</small>
                  </div>
                </div>
                <div class="project-image-item">
                  <img src="images/projects/poster-coding.jpg" alt="Poster Coding" 
                       onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="image-placeholder" style="display:none;">
                    <span>💻</span>
                    <small>Coding</small>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>

          <div class="project-overview">
            <h3>📋 Overview</h3>
            <p><?= $project['details']['overview'] ?></p>
          </div>
          <div class="project-meta">
            <div class="project-meta-item">
              <div class="project-meta-label">Durasi</div>
              <div class="project-meta-value"><?= $project['details']['duration'] ?></div>
            </div>
            <div class="project-meta-item">
              <div class="project-meta-label">Status</div>
              <div class="project-meta-value">
                <span class="status-badge"><?= $project['details']['status'] ?></span>
              </div>
            </div>
            <div class="project-meta-item">
              <div class="project-meta-label">Kategori</div>
              <div class="project-meta-value"><?= $project['category'] ?></div>
            </div>
          </div>
          <div class="project-details-grid">
            <div class="project-detail-section">
              <h4>🚀 Fitur Utama</h4>
              <ul>
                <?php foreach ($project['details']['features'] as $feature): ?>
                  <li><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="project-detail-section">
              <h4>⚙️ Tech Stack</h4>
              <ul>
                <?php foreach ($project['details']['tech_stack'] as $tech): ?>
                  <li><?= $tech ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="project-detail-section">
              <h4>💡 Tantangan</h4>
              <p><?= $project['details']['challenges'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <section class="contact" id="contact">
    <div class="contact-container">
      <div class="section-header">
        <p class="section-subtitle">~ Contact</p>
        <h2 class="section-title">Get In <span class="highlight">Touch</span></h2>
      </div>
      
      <div class="contact-grid">
        <div class="contact-card" onclick="window.open('mailto:azizanramadhan40@gmail.com', '_blank')">
          <div class="contact-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
              <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
          </div>
          <h3>Email</h3>
          <p>azizanramadhan40@gmail.com</p>
        </div>
        
        <div class="contact-card" onclick="window.open('https://wa.me/6283151955164', '_blank')">
          <div class="contact-icon whatsapp">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.893 3.488"/>
            </svg>
          </div>
          <h3>WhatsApp</h3>
          <p>+62 831-5195-5164</p>
        </div>
        
        <div class="contact-card" onclick="copyToClipboard('Jakarta, Indonesia')">
          <div class="contact-icon location">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>
          </div>
          <h3>Lokasi</h3>
          <p>Jakarta, Indonesia</p>
        </div>
        
        <div class="contact-card" onclick="window.open('https://linkedin.com/in/azizanramadhan', '_blank')">
          <div class="contact-icon linkedin">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </div>
          <h3>LinkedIn</h3>
          <p>azizanramadhan</p>
        </div>
        
        <div class="contact-card" onclick="window.open('https://github.com/azizanramadhan', '_blank')">
          <div class="contact-icon github">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
            </svg>
          </div>
          <h3>GitHub</h3>
          <p>azizanramadhan</p>
        </div>
      </div>
    </div>
  </section>

  <style>
    /* ...existing code... */

    .project-main-image {
      margin-bottom: 1rem;
      height: auto;
      width: 100%;
      display: flex;
      align-items: stretch;
      justify-content: stretch;
    }

    .project-image-frame {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      box-shadow: 0 8px 32px rgba(0,0,0,0.1);
      aspect-ratio: 16/9;
      width: 100%;
      height: auto;
      min-height: 350px;
      display: flex;
      align-items: stretch;
      justify-content: stretch;
    }

    .project-image-frame img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 0;
      margin: 0;
      padding: 0;
      transition: transform 0.5s cubic-bezier(.4,1.5,.5,1), box-shadow 0.3s;
      will-change: transform;
    }

    .project-image-frame:hover img,
    .project-image-frame:focus-within img {
      transform: scale(1.07) rotate(-1deg);
      box-shadow: 0 8px 32px rgba(0,0,0,0.18);
      z-index: 2;
    }

    /* ...existing code... */
  </style>

  <script>
    // Service details data
    const serviceDetails = [
      {
        title: "Web Development",
        body: `
          <div class="service-detail">
            <h4>🚀 Layanan yang Saya Tawarkan:</h4>
            <ul>
              <li>Website Company Profile</li>
              <li>E-commerce Website</li>
              <li>Web Application Development</li>
              <li>Content Management System (CMS)</li>
              <li>Website Maintenance & Support</li>
            </ul>
            <h4>⚙️ Teknologi yang Dikuasai:</h4>
            <ul>
              <li>Frontend: HTML5, CSS3, JavaScript, Bootstrap</li>
              <li>Backend: PHP, MySQL</li>
              <li>Tools: Git, VS Code, XAMPP</li>
            </ul>
            <h4>💼 Pengalaman:</h4>
            <p>3+ tahun dalam web development dengan berbagai proyek dari aplikasi kasir hingga company profile.</p>
          </div>
        `
      },
      {
        title: "UI/UX Design",
        body: `
          <div class="service-detail">
            <h4>🎨 Layanan Design:</h4>
            <ul>
              <li>User Interface (UI) Design</li>
              <li>User Experience (UX) Research</li>
              <li>Wireframing & Prototyping</li>
              <li>Mobile App Design</li>
              <li>Design System Creation</li>
            </ul>
            <h4>🛠️ Tools yang Digunakan:</h4>
            <ul>
              <li>Figma untuk UI/UX Design</li>
              <li>Adobe Illustrator</li>
              <li>Prototyping Tools</li>
            </ul>
            <h4>🎯 Fokus Saya:</h4>
            <p>Menciptakan design yang tidak hanya indah dipandang, tetapi juga fungsional dan user-friendly.</p>
          </div>
        `
      },
    ];

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (navbar) {
        if (window.scrollY > 50) {
          navbar.style.background = 'var(--navbar-bg)'; // Gunakan variabel CSS
          navbar.style.boxShadow = '0 2px 20px var(--box-shadow-color)'; // Gunakan variabel CSS
        } else {
          navbar.style.background = 'var(--navbar-bg)'; // Gunakan variabel CSS
          navbar.style.boxShadow = 'none';
        }
      }
    });

    // Project modal functions
    function openProjectModal(id) {
      const modal = document.getElementById('modal-' + id);
      if (modal) {
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
      }
    }

    function closeProjectModal(id) {
      const modal = document.getElementById('modal-' + id);
      if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }
    }

    function openServiceModal(idx) {
      const modal = document.getElementById('service-modal');
      document.getElementById('service-modal-title').innerText = serviceDetails[idx].title;
      document.getElementById('service-modal-body').innerHTML = serviceDetails[idx].body;
      modal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }

    function closeServiceModal() {
      document.getElementById('service-modal').style.display = 'none';
      document.body.style.overflow = '';
    }

    // Close modals when clicking outside
    window.addEventListener('click', function(event) {
      const modal = document.getElementById('service-modal');
      if (event.target === modal) {
        closeServiceModal();
      }
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
      if (event.target.classList.contains('project-modal')) {
        event.target.style.display = 'none';
        document.body.style.overflow = '';
      }
    });

    // Animation on scroll
    const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Initialize animations
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.service-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
      });
    });

    // Copy to clipboard function
    function copyToClipboard(text) {
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(text).then(() => {
          showNotification('📋 Lokasi telah disalin!');
        }).catch(() => {
          fallbackCopyToClipboard(text);
        });
      } else {
        fallbackCopyToClipboard(text);
      }
    }

    function fallbackCopyToClipboard(text) {
      const textArea = document.createElement('textarea');
      textArea.value = text;
      document.body.appendChild(textArea);
      textArea.select();
      document.execCommand('copy');
      document.body.removeChild(textArea);
      showNotification('📋 Lokasi telah disalin!');
    }

    function showNotification(message) {
      const notification = document.createElement('div');
      notification.style.cssText = `
        position: fixed; top: 20px; right: 20px; background: var(--primary); color: white;
        padding: 1rem 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 10000; font-weight: 600; transform: translateX(100%); transition: transform 0.3s ease;
      `;
      notification.textContent = message;
      document.body.appendChild(notification);
      
      setTimeout(() => notification.style.transform = 'translateX(0)', 100);
      setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
          if (document.body.contains(notification)) {
            document.body.removeChild(notification);
          }
        }, 300);
      }, 3000);
    }
  </script>
</body>
</html>