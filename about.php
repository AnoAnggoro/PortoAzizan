<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Azizan Ramadhan</title>
  <link rel="stylesheet" href="style.css">
  <script src="js/darkmode.js"></script> </head>
<body>
  <nav class="navbar">
    <div class="nav-container">
      <a href="index.php" class="logo">
        <div class="logo-icon">A</div>
        Azizan
      </a>
      <ul class="nav-menu">
        <li><a href="index.php#home">🏠 Home</a></li>
        <li><a href="index.php#services">💼 Services</a></li>
        <li><a href="index.php#about">👤 About</a></li>
        <li><a href="index.php#projects">📁 Projects</a></li>
      </ul>
      <button id="darkmode-toggle" class="darkmode-btn" title="Toggle dark mode" aria-label="Toggle dark mode">
        🌙
      </button>
    </div>
  </nav>

  <header>
    <div class="container">
      <h1>About Azizan Ramadhan</h1>
      <p>Professional Profile & Experience</p>
    </div>
  </header>

  <section>
    <div class="container">
      <div class="quick-info-grid">
        <div class="quick-info-card">
          <span class="quick-info-icon">🎓</span>
          <div class="quick-info-title">Mahasiswa Aktif</div>
          <div class="quick-info-desc">Semester 6 Teknik Informatika</div>
        </div>
        <div class="quick-info-card">
          <span class="quick-info-icon">💼</span>
          <div class="quick-info-title">Siap Magang</div>
          <div class="quick-info-desc">Mencari kesempatan di bidang tech</div>
        </div>
        <div class="quick-info-card">
          <span class="quick-info-icon">🏆</span>
          <div class="quick-info-title">6+ Sertifikat</div>
          <div class="quick-info-desc">Event & Volunteer Experience</div>
        </div>
        <div class="quick-info-card">
          <span class="quick-info-icon">🌟</span>
          <div class="quick-info-title">Leadership</div>
          <div class="quick-info-desc">MC & Event Organizer</div>
        </div>
      </div>

      <div class="nav-buttons">
        <button onclick="showAllSections()" class="active">Tampilkan Semua</button>
        <button onclick="showFullPage('profil-page')">Profil Singkat</button>
        <button onclick="showFullPage('skill-page')">Skill & Tools</button>
        <button onclick="showFullPage('sertifikat-page')">Sertifikat</button>
        <button onclick="showFullPage('organisasi-page')">Pengalaman Organisasi/Volunteer/Kepanitiaan</button>
        <button onclick="showFullPage('karier-page')">Tujuan Karier</button>
      </div>

      <div class="cards-container">
        <div id="profil" class="card" onclick="showFullPage('profil-page')">
          <h2>Profil Singkat</h2>
          <p>Halo! Saya <strong>Azizan Ramadhan</strong>, mahasiswa Teknik Informatika di Universitas Indraprasta PGRI dengan passion yang mendalam terhadap pengembangan web dan desain antarmuka pengguna.</p>
          <div class="achievements">
            <span class="achievement-badge">🎓 Mahasiswa Aktif</span>
            <span class="achievement-badge">💻 Web Developer</span>
            <span class="achievement-badge">🎨 UI/UX Designer</span>
          </div>
        </div>
        <div id="skill" class="card" onclick="showFullPage('skill-page')">
          <h2>Skill & Tools</h2>
          <ul>
            <li><strong>Programming:</strong> HTML5, CSS3, PHP, JavaScript (ES6+)</li>
            <li><strong>Design Tools:</strong> Figma, Canva, Adobe XD</li>
            <li><strong>Development:</strong> GitHub, VS Code, XAMPP, Git</li>
            <li><strong>Frameworks:</strong> Bootstrap, Tailwind CSS</li>
            <li><strong>Database:</strong> MySQL, phpMyAdmin</li>
            <li><strong>Other:</strong> Responsive Design, UI/UX Principles</li>
          </ul>
          <div class="achievements">
            <span class="achievement-badge">⭐ HTML5 Expert</span>
            <span class="achievement-badge">🎨 Figma Pro</span>
          </div>
        </div>
        <div id="sertifikat" class="card" onclick="showFullPage('sertifikat-page')">
          <h2>Sertifikat & Pengalaman</h2>
          <ul>
            <li>Staff Acara - Youth Empowerment Festival 2024</li>
            <li>Panitia - Kuliah Umum Komunita Kemenkeu 2024</li>
            <li>Community Development - Manupsia 2023-2024</li>
            <li>Panitia - Event #UangKita Kemenkeu 2024</li>
            <li>Time Keeper - Growth Hacking Summit 2025</li>
            <li>Logistic Crew - Jakarta Creator Con 2024</li>
          </ul>
          <div class="achievements">
            <span class="achievement-badge">🏆 6 Sertifikat</span>
            <span class="achievement-badge">🎤 Organization</span>
          </div>
        </div>
        <div id="organisasi" class="card" onclick="showFullPage('organisasi-page')">
          <h2>Pengalaman Organisasi/Volunteer/Kepanitiaan</h2>
          <ul>
            <li><strong>Staff Acara</strong> - Youth Empowerment Festival 2024</li>
            <li><strong>Panitia</strong> - Kuliah Umum Komunita</li>
            <li><strong>Community Development</strong> - Manupsia</li>
            <li><strong>Logistic Crew</strong> - Jakarta Creator Con 2024</li>
            <li><strong>Time Keeper</strong> - Growth Hacking Summit 2025</li>
          </ul>
          <div class="achievements">
            <span class="achievement-badge">🎤 Technology Enthusiast</span>
            <span class="achievement-badge">🤝 Team Player</span>
            <span class="achievement-badge">📋 Event Organizer</span>
          </div>
        </div>
        <div id="karier" class="card" onclick="showFullPage('karier-page')">
          <h2>Tujuan Karier</h2>
          <p>Saya bercita-cita untuk berkembang sebagai <strong>Full Stack Web Developer</strong> atau <strong>UI/UX Designer</strong> yang mampu menggabungkan kemampuan teknis dengan kreativitas dalam menciptakan produk digital yang berdampak positif.</p>
          <p>Tujuan jangka pendek saya adalah memperoleh pengalaman magang di perusahaan teknologi, startup, atau digital agency untuk memperdalam pengetahuan praktis dan mengembangkan portfolio yang lebih kuat.</p>
        </div>
      </div>

      <div class="profile-grid">
        <div>
          <div class="profile-image"></div>
          <div style="text-align: center; margin-top: 1rem;">
            <h3 style="color: var(--primary); margin-bottom: 0.5rem;">Azizan Ramadhan</h3>
            <p style="color: var(--text-light);">Mahasiswa Teknik Informatika</p>
          </div>
        </div>
        <div class="profile-info">
          <div class="profile-detail"><strong>Universitas:</strong> Universitas Indraprasta PGRI</div>
          <div class="profile-detail"><strong>Jurusan:</strong> Teknik Informatika</div>
          <div class="profile-detail"><strong>Semester:</strong> 6</div>
          <div class="profile-detail"><strong>Email:</strong> azizanramadhan40@gmail.com</div>
          <div class="profile-detail"><strong>Lokasi:</strong> Jakarta, Indonesia</div>
          <div class="profile-detail"><strong>Status:</strong> Aktif mencari kesempatan magang</div>
        </div>
      </div>

      <div id="profil-page" class="full-page">
        <button class="back-button" onclick="hideFullPage()">← Kembali</button>
        <button class="darkmode-btn" title="Toggle dark mode" aria-label="Toggle dark mode" style="position: fixed; top: 20px; right: 20px; z-index: 10001;">🌙</button>
        <div class="full-page-header">
          <div class="container">
            <h1 class="full-page-title">👤 Profil Lengkap</h1>
            <p class="full-page-subtitle">Informasi Detail & Latar Belakang</p>
          </div>
        </div>
        <div class="full-page-content">
          <div class="container">
            <div class="profile-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 2rem; align-items: start; margin-bottom: 2rem;">
              <div style="text-align: center;">
                <div class="profile-image"></div>
                <div style="margin-top: 1rem;">
                  <h3 style="color: var(--primary); margin-bottom: 0.5rem;">Azizan Ramadhan</h3>
                  <p style="color: var(--text-light);">Mahasiswa Teknik Informatika</p>
                </div>
              </div>
              <div class="profile-info" style="background: var(--card-bg); padding: 1.5rem; border-radius: 12px; box-shadow: var(--shadow); border: 1px solid var(--border-color);">
                <div class="profile-detail" style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">
                  <strong>Universitas:</strong> Universitas Indraprasta PGRI
                </div>
                <div class="profile-detail" style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">
                  <strong>Jurusan:</strong> Teknik Informatika
                </div>
                <div class="profile-detail" style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">
                  <strong>Semester:</strong> 6
                </div>
                <div class="profile-detail" style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">
                  <strong>Email:</strong> azizan.ramadhan@student.unindra.ac.id
                </div>
                <div class="profile-detail" style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">
                  <strong>Lokasi:</strong> Jakarta, Indonesia
                </div>
                <div class="profile-detail" style="padding: 0.75rem 0;">
                  <strong>Status:</strong> Aktif mencari kesempatan magang
                </div>
              </div>
            </div>
            
            <div class="cards-container">
              <div class="card">
                <h2>Tentang Saya</h2>
                <p>Saya adalah mahasiswa Teknik Informatika dengan passion yang mendalam terhadap pengembangan web dan desain antarmuka pengguna. Memiliki pengalaman dalam berbagai proyek web development dan UI/UX design.</p>
                <p>Saya selalu berusaha untuk terus belajar dan mengikuti perkembangan teknologi terbaru, serta aktif dalam berbagai kegiatan organisasi dan komunitas.</p>
              </div>
              
              <div class="card">
                <h2>Minat & Hobi</h2>
                <ul>
                  <li>Web Development & Programming</li>
                  <li>UI/UX Design & Prototyping</li>
                  <li>Graphic Design & Visual Communication</li>
                  <li>Technology Innovation & Trends</li>
                  <li>Event Organizing & Public Speaking</li>
                  <li>Learning New Programming Languages</li>
                </ul>
              </div>
              
              <div class="card">
                <h2>Filosofi Kerja</h2>
                <p>"Coding is not just about solving problems, but creating solutions that make people's lives better."</p>
                <p>Saya percaya bahwa teknologi harus dapat diakses dan bermanfaat bagi semua orang. Setiap line code yang saya tulis adalah upaya untuk menciptakan pengalaman digital yang lebih baik.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="skill-page" class="full-page">
        <button class="back-button" onclick="hideFullPage()">← Kembali</button>
        <button class="darkmode-btn" title="Toggle dark mode" aria-label="Toggle dark mode" style="position: fixed; top: 20px; right: 20px; z-index: 10001;">🌙</button>
        <div class="full-page-header">
          <div class="container">
            <h1 class="full-page-title">🛠️ Skill & Tools</h1>
            <p class="full-page-subtitle">Kemampuan Teknis & Alat Pengembangan</p>
          </div>
        </div>
        <div class="full-page-content">
          <div class="container">
            <div class="skills-hero" style="text-align: center; margin-bottom: 3rem;">
              <h3>Tingkat Keahlian Saya</h3>
              <p>Berikut adalah penilaian jujur terhadap kemampuan teknis saya dalam berbagai teknologi dan tools</p>
            </div>
            
            <div class="skills-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
              <div class="skill-category" style="background: var(--card-bg); padding: 2rem; border-radius: 12px; box-shadow: var(--shadow); border: 1px solid var(--border-color);">
                <h4 style="color: var(--primary); margin-bottom: 1.5rem; font-size: 1.2rem;">💻 Programming Languages</h4>
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #e34f26; border-radius: 6px; color: white; font-weight: bold; font-size: 0.8rem;">HTML</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">HTML5</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Semantic HTML, Accessibility, SEO Optimization</p>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #1572b6; border-radius: 6px; color: white; font-weight: bold; font-size: 0.8rem;">CSS</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">CSS3</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Flexbox, Grid, Animations, Responsive Design</p>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #f7df1e; border-radius: 6px; color: #323330; font-weight: bold; font-size: 0.8rem;">JS</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">JavaScript</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">ES6+, DOM Manipulation, Async/Await, APIs</p>
                </div>
                
                <div class="skill-item">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #777bb4; border-radius: 6px; color: white; font-weight: bold; font-size: 0.8rem;">PHP</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">PHP</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">OOP, MVC Pattern, Database Integration</p>
                </div>
              </div>
              
              <div class="skill-category" style="background: var(--card-bg); padding: 2rem; border-radius: 12px; box-shadow: var(--shadow); border: 1px solid var(--border-color);">
                <h4 style="color: var(--primary); margin-bottom: 1.5rem; font-size: 1.2rem;">🎨 Design & Prototyping</h4>
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: linear-gradient(45deg, #f24e1e, #ff7262, #a259ff, #0acf83, #1abcfe); border-radius: 6px; color: white; font-weight: bold; font-size: 0.7rem;">FIG</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">Figma</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">UI Design, Prototyping, Component Systems</p>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: linear-gradient(45deg, #00c4cc, #7c4dff); border-radius: 6px; color: white; font-weight: bold; font-size: 0.7rem;">CNV</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">Canva</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Graphic Design, Social Media Content, Branding</p>
                </div>

                <div class="skill-item">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #ff61f6; border-radius: 6px; color: white; font-weight: bold; font-size: 0.7rem;">XD</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">Adobe XD</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Wireframing, Prototyping, User Experience Design</p>
                </div>
              </div>

              <div class="skill-category" style="background: var(--card-bg); padding: 2rem; border-radius: 12px; box-shadow: var(--shadow); border: 1px solid var(--border-color);">
                <h4 style="color: var(--primary); margin-bottom: 1.5rem; font-size: 1.2rem;">🛠️ Development Tools</h4>
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #f1502f; border-radius: 6px; color: white; font-weight: bold; font-size: 0.7rem;">GIT</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">Git & GitHub</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Version Control, Collaboration, Repository Management</p>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #007acc; border-radius: 6px; color: white; font-weight: bold; font-size: 0.6rem;">VSC</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">VS Code</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Code Editor, Extensions, Debugging</p>
                </div>
                
                <div class="skill-item">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #fb7a24; border-radius: 6px; color: white; font-weight: bold; font-size: 0.6rem;">XMP</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">XAMPP</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Local Development Server, Apache, MySQL</p>
                </div>
              </div>

              <div class="skill-category" style="background: var(--card-bg); padding: 2rem; border-radius: 12px; box-shadow: var(--shadow); border: 1px solid var(--border-color);">
                <h4 style="color: var(--primary); margin-bottom: 1.5rem; font-size: 1.2rem;">🎯 Frameworks & Libraries</h4>
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #7952b3; border-radius: 6px; color: white; font-weight: bold; font-size: 0.6rem;">BTN</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">Bootstrap</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Responsive Grid System, Components, Utilities</p>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #38bdf8; border-radius: 6px; color: white; font-weight: bold; font-size: 0.6rem;">TWD</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">Tailwind CSS</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Utility-First CSS, Custom Design Systems</p>
                </div>
                
                <div class="skill-item">
                  <div class="skill-info" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                    <div class="skill-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: #00758f; border-radius: 6px; color: white; font-weight: bold; font-size: 0.6rem;">SQL</div>
                    <span class="skill-name" style="font-weight: 600; color: var(--primary); font-size: 1.1rem;">MySQL</span>
                  </div>
                  <p style="font-size: 0.9rem; color: var(--text-light); margin-left: 0;">Database Design, Queries, phpMyAdmin</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="sertifikat-page" class="full-page">
        <button class="back-button" onclick="hideFullPage()">← Kembali</button>
        <button class="darkmode-btn" title="Toggle dark mode" aria-label="Toggle dark mode" style="position: fixed; top: 20px; right: 20px; z-index: 10001;">🌙</button>
        <div class="full-page-header">
          <div class="container">
            <h1 class="full-page-title">🏆 Sertifikat & Pengalaman</h1>
            <p class="full-page-subtitle">Riwayat Kepanitiaan, Volunteer & Event Experience</p>
          </div>
        </div>
        <div class="full-page-content">
          <div class="certificate-stats">
            <div class="certificate-stat">
              <div class="certificate-stat-number">6</div>
              <div class="certificate-stat-label">Total Sertifikat</div>
            </div>
            <div class="certificate-stat">
              <div class="certificate-stat-number">4</div>
              <div class="certificate-stat-label">Event Besar</div>
            </div>
            <div class="certificate-stat">
              <div class="certificate-stat-number">2+</div>
              <div class="certificate-stat-label">Tahun Pengalaman</div>
            </div>
          </div>
          
          <div class="certificate-gallery">
            <div class="certificate-item-new" onclick="openCertificateModal('cert1')">
              <div class="certificate-image">
                <img src="foto/GHS2025.jpg" alt="Growth Hacking Summit Certificate" loading="lazy">
                <div class="certificate-overlay"><span class="view-certificate">🔍 Lihat Detail</span></div>
              </div>
              <div class="certificate-info">
                <div class="certificate-year">2025</div>
                <div class="certificate-title">Certificate of Appreciation</div>
                <div class="certificate-issuer">Growth Hacking Summit / EPIQ / Apiary Academy</div>
                <div class="certificate-role">Role: Time Keeper</div>
              </div>
            </div>
            <div class="certificate-item-new" onclick="openCertificateModal('cert2')">
              <div class="certificate-image">
                <img src="foto/YRI.png" alt="Youth Empowerment Festival Certificate" loading="lazy">
                <div class="certificate-overlay"><span class="view-certificate">🔍 Lihat Detail</span></div>
              </div>
              <div class="certificate-info">
                <div class="certificate-year">2024</div>
                <div class="certificate-title">Staff Acara Certificate</div>
                <div class="certificate-issuer">Youth Ranger Indonesia</div>
                <div class="certificate-role">Role: Master of Ceremony (MC)</div>
              </div>
            </div>
            <div class="certificate-item-new" onclick="openCertificateModal('cert3')">
              <div class="certificate-image">
                <img src="foto/manupsia.png" alt="Manupsia Community Development" loading="lazy">
                <div class="certificate-overlay"><span class="view-certificate">🔍 Lihat Detail</span></div>
              </div>
              <div class="certificate-info">
                <div class="certificate-year">2023-2024</div>
                <div class="certificate-title">Sertifikat Partisipasi</div>
                <div class="certificate-issuer">Manupsia</div>
                <div class="certificate-role">Role: Community Development Volunteer</div>
              </div>
            </div>
            <div class="certificate-item-new" onclick="openCertificateModal('cert4')">
              <div class="certificate-image">
                <img src="foto/komunita1.png" alt="Event UangKita Kemenkeu" loading="lazy">
                <div class="certificate-overlay"><span class="view-certificate">🔍 Lihat Detail</span></div>
              </div>
              <div class="certificate-info">
                <div class="certificate-year">2024</div>
                <div class="certificate-title">Sertifikat Apresiasi - Panitia</div>
                <div class="certificate-issuer">Komunitas #UangKita Kemenkeu</div>
                <div class="certificate-role">Role: Event Committee</div>
              </div>
            </div>
            <div class="certificate-item-new" onclick="openCertificateModal('cert5')">
              <div class="certificate-image">
                <img src="foto/komunita2.jpg" alt="Kuliah Umum Komunita" loading="lazy">
                <div class="certificate-overlay"><span class="view-certificate">🔍 Lihat Detail</span></div>
              </div>
              <div class="certificate-info">
                <div class="certificate-year">2024</div>
                <div class="certificate-title">Sertifikat Apresiasi - Panitia Kuliah Umum</div>
                <div class="certificate-issuer">Kementerian Keuangan RI</div>
                <div class="certificate-role">Role: Panitia</div>
              </div>
            </div>
            <div class="certificate-item-new" onclick="openCertificateModal('cert6')">
              <div class="certificate-image">
                <img src="foto/JCC2024.jpg" alt="Jakarta Creator Con" loading="lazy">
                <div class="certificate-overlay"><span class="view-certificate">🔍 Lihat Detail</span></div>
              </div>
              <div class="certificate-info">
                <div class="certificate-year">2024</div>
                <div class="certificate-title">Certificate of Participation</div>
                <div class="certificate-issuer">Jakarta Creator Con</div>
                <div class="certificate-role">Role: Logistic Crew</div>
              </div>
            </div>
          </div>

          <div class="role-dashboard-section">
            <h3>🤖 AI Role Analysis Dashboard</h3>
            <div class="dashboard-loading" id="role-loading">
              <div class="loading-spinner"></div>
              <p>Analyzing certificates and generating role insights...</p>
            </div>
            <div class="role-dashboard" id="role-dashboard" style="display: none;">
              <div class="dashboard-summary">
                <div class="summary-card">
                  <div class="summary-icon">🎯</div>
                  <div class="summary-content">
                    <h4>Primary Role</h4><span id="primary-role">-</span>
                  </div>
                </div>
                <div class="summary-card">
                  <div class="summary-icon">⭐</div>
                  <div class="summary-content">
                    <h4>Experience Level</h4><span id="experience-level">-</span>
                  </div>
                </div>
                <div class="summary-card">
                  <div class="summary-icon">🏆</div>
                  <div class="summary-content">
                    <h4>Top Match</h4><span id="top-match">-</span>
                  </div>
                </div>
              </div>
              <div class="role-fit-scores">
                <h4>🎯 Role Fit Analysis</h4>
                <div id="fit-scores"></div>
              </div>
              <div class="skills-analysis">
                <h4>💼 Skills Matrix</h4>
                <div id="skills-matrix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="organisasi-page" class="full-page">
        <button class="back-button" onclick="hideFullPage()">← Kembali</button>
        <button class="darkmode-btn" title="Toggle dark mode" aria-label="Toggle dark mode" style="position: fixed; top: 20px; right: 20px; z-index: 10001;">🌙</button>
        <div class="full-page-header">
          <div class="container">
            <h1 class="full-page-title">🤝 Pengalaman Organisasi, Volunteer & Kepanitiaan</h1>
            <p class="full-page-subtitle">Riwayat Keterlibatan dalam Organisasi, Event, dan Komunitas</p>
          </div>
        </div>
        <div class="full-page-content">
          <div class="container">
            <div class="org-timeline">
              <div class="org-timeline-item">
                <div class="org-timeline-dot"></div>
                <div class="org-timeline-content">
                  <h3>2025 - Growth Hacking Summit</h3>
                  <p><strong>Participant</strong> & <strong>Time Keeper</strong> | Growth Hacking Summit / EPIQ / Apiary Academy</p>
                  <ul>
                    <li>Berperan sebagai Time Keeper dalam event nasional inovasi digital.</li>
                    <li>Meningkatkan kemampuan <span class="highlight-skill">Business Development</span> & <span class="highlight-skill">Innovation</span>.</li>
                  </ul>
                </div>
              </div>
              <div class="org-timeline-item">
                <div class="org-timeline-dot"></div>
                <div class="org-timeline-content">
                  <h3>2024 - Youth Empowerment Festival</h3>
                  <p><strong>MC</strong> | Youth Ranger Indonesia</p>
                  <ul>
                    <li>Memimpin acara utama sebagai Master of Ceremony.</li>
                    <li>Skill utama: <span class="highlight-skill">Public Speaking</span>, <span class="highlight-skill">Leadership</span>.</li>
                  </ul>
                </div>
              </div>
              <div class="org-timeline-item">
                <div class="org-timeline-dot"></div>
                <div class="org-timeline-content">
                  <h3>2024 - Kuliah Umum Komunita</h3>
                  <p><strong>Panitia</strong> | Kementerian Keuangan RI</p>
                  <ul>
                    <li>Panitia event edukasi nasional, mengelola logistik & publikasi.</li>
                    <li>Skill: <span class="highlight-skill">Event Management</span>, <span class="highlight-skill">Public Relations</span>.</li>
                  </ul>
                </div>
              </div>
              <div class="org-timeline-item">
                <div class="org-timeline-dot"></div>
                <div class="org-timeline-content">
                  <h3>2024 - Jakarta Creator Con</h3>
                  <p><strong>Logistic Crew</strong> | Commaa Asia / Slice</p>
                  <ul>
                    <li>Menangani koordinasi logistik event kreator terbesar di Jakarta.</li>
                    <li>Skill: <span class="highlight-skill">Logistics Management</span>, <span class="highlight-skill">Team Coordination</span>.</li>
                  </ul>
                </div>
              </div>
              <div class="org-timeline-item">
                <div class="org-timeline-dot"></div>
                <div class="org-timeline-content">
                  <h3>2023-2024 - Community Development Manupsia</h3>
                  <p><strong>Volunteer</strong> | Manupsia</p>
                  <ul>
                    <li>Aktif dalam pengembangan komunitas & pemberdayaan masyarakat.</li>
                    <li>Skill: <span class="highlight-skill">Community Building</span>, <span class="highlight-skill">Social Impact</span>.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cards-container" style="margin-top:2rem;">
              <div class="card">
                <h2>Skill & Pencapaian Utama</h2>
                <div class="achievements">
                  <span class="achievement-badge">🎤 Technology Enthusiast</span>
                  <span class="achievement-badge">🤝 Team Player</span>
                  <span class="achievement-badge">📋 Event Organizer</span>
                  <span class="achievement-badge">🌱 Community Development</span>
                  <span class="achievement-badge">🚚 Logistic Crew</span>
                </div>
                <ul style="margin-top:1rem;">
                  <li>Public Speaking & Event Hosting</li>
                  <li>Teamwork & Leadership</li>
                  <li>Event Planning & Management</li>
                  <li>Community Engagement</li>
                  <li>Problem Solving</li>
                </ul>
              </div>
              <div class="card">
                <h2>Highlight Pengalaman</h2>
                <ul>
                  <li><strong>Leadership:</strong> Sering dipercaya sebagai MC dan koordinator tim.</li>
                  <li><strong>Adaptasi:</strong> Terbiasa bekerja di lingkungan dinamis & deadline ketat.</li>
                  <li><strong>Kolaborasi:</strong> Berhasil membangun jejaring dengan berbagai komunitas & institusi.</li>
                  <li><strong>Inovasi:</strong> Aktif mengusulkan ide-ide baru untuk efisiensi event.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="karier-page" class="full-page">
        <button class="back-button" onclick="hideFullPage()">← Kembali</button>
        <button class="darkmode-btn" title="Toggle dark mode" aria-label="Toggle dark mode" style="position: fixed; top: 20px; right: 20px; z-index: 10001;">🌙</button>
        <div class="full-page-header">
          <div class="container">
            <h1 class="full-page-title">🚀 Tujuan Karier</h1>
            <p class="full-page-subtitle">Visi, Misi, Nilai, dan Strategi Pengembangan Karier</p>
          </div>
        </div>
        <div class="full-page-content">
          <div class="container">
            <div class="cards-container">
              <div class="card" style="background:linear-gradient(120deg,#e6f4ea 60%,#f8fafc);border-left:6px solid var(--primary);">
                <h2>Visi Karier</h2>
                <p>Saya ingin menjadi <strong>Full Stack Web Developer</strong> atau <strong>UI/UX Designer</strong> yang mampu:</p>
                <ul>
                  <li>Mengembangkan aplikasi web <strong>user-centric</strong> dan <strong>accessible</strong> untuk semua kalangan.</li>
                  <li>Berperan aktif dalam tim pengembangan produk digital inovatif.</li>
                  <li>Terus belajar, beradaptasi, dan berkontribusi pada komunitas teknologi.</li>
                  <li>Menggabungkan <strong>teknologi</strong> dan <strong>desain</strong> untuk menciptakan solusi berdampak positif.</li>
                </ul>
                <div style="margin-top:1rem;">
                  <span class="achievement-badge">🌟 Inovatif</span>
                  <span class="achievement-badge">💡 Problem Solver</span>
                  <span class="achievement-badge">🤝 Kolaboratif</span>
                </div>
              </div>
              <div class="card" style="background:linear-gradient(120deg,#f8fafc 60%,#e6f4ea);">
                <h2>Motivasi & Nilai Utama</h2>
                <div style="display:flex;gap:2rem;align-items:center;flex-wrap:wrap;">
                  <div style="flex:1;min-width:220px;">
                    <ul>
                      <li><strong>Growth Mindset:</strong> Selalu ingin berkembang dan belajar hal baru.</li>
                      <li><strong>Empati Pengguna:</strong> Mengutamakan pengalaman dan kebutuhan user.</li>
                      <li><strong>Kolaborasi:</strong> Suka bekerja dalam tim lintas disiplin.</li>
                      <li><strong>Integritas:</strong> Menjunjung tinggi etika dan profesionalisme.</li>
                      <li><strong>Kreativitas:</strong> Berani mencoba pendekatan baru dalam pemecahan masalah.</li>
                    </ul>
                  </div>
                  <div style="flex:1;min-width:180px;text-align:center;">
                    <img src="https://img.icons8.com/color/96/goal--v1.png" alt="Motivasi Karier" style="width:64px;height:64px;">
                    <div style="font-size:1.05rem;color:var(--primary);margin-top:0.5rem;">"Karier bukan sekadar tujuan, tapi perjalanan penuh makna."</div>
                  </div>
                </div>
              </div>
              <div class="card">
                <h2>Roadmap & Langkah Strategis</h2>
                <div style="display:flex;gap:2rem;flex-wrap:wrap;">
                  <div style="flex:2;min-width:220px;">
                    <ol>
                      <li><strong>Magang di perusahaan teknologi/startup</strong> untuk pengalaman praktis dan networking.</li>
                      <li><strong>Membangun portfolio</strong> proyek web & UI/UX nyata (freelance, open source, atau kompetisi).</li>
                      <li><strong>Belajar framework modern</strong> (React, Laravel, Tailwind, dsb) dan mengikuti sertifikasi.</li>
                      <li><strong>Aktif di komunitas</strong> developer/designer & mengikuti event hackathon.</li>
                      <li><strong>Upgrade soft skill</strong>: komunikasi, teamwork, manajemen waktu, dan public speaking.</li>
                    </ol>
                  </div>
                  <div style="flex:1;min-width:180px;">
                    <div style="background:#e6f4ea;border-radius:10px;padding:1rem;text-align:center;">
                      <strong>Target 2025-2027:</strong>
                      <ul style="margin:0.5rem 0 0 0;padding-left:1.2rem;text-align:left;">
                        <li>Magang di startup/agency</li>
                        <li>Portfolio 10+ proyek</li>
                        <li>Sertifikasi web & UI/UX</li>
                        <li>Aktif komunitas & event</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <h2>Keunggulan & Daya Saing</h2>
                <ul>
                  <li><strong>Pengalaman organisasi & event:</strong> Terbiasa bekerja dalam tim, mengelola event, dan beradaptasi dengan deadline.</li>
                  <li><strong>Kemampuan komunikasi:</strong> Public speaking, MC, dan kolaborasi lintas bidang.</li>
                  <li><strong>Skill teknis & desain:</strong> Menguasai HTML, CSS, JavaScript, PHP, Figma, Canva, dsb.</li>
                  <li><strong>Portfolio nyata:</strong> Proyek web, desain UI/UX, dan kontribusi komunitas.</li>
                </ul>
                <div style="margin-top:1rem;">
                  <span class="achievement-badge">🏆 Internship Ready</span>
                  <span class="achievement-badge">🌍 Impactful Creator</span>
                  <span class="achievement-badge">🧑‍💻 Tech Enthusiast</span>
                </div>
              </div>
              <div class="card" style="background:linear-gradient(120deg,#e6f4ea 60%,#f8fafc);">
                <h2>Target Jangka Pendek & Panjang</h2>
                <ul>
                  <li><strong>Jangka Pendek:</strong> Mendapatkan posisi magang, memperluas jejaring profesional, dan mengerjakan proyek freelance.</li>
                  <li><strong>Jangka Menengah:</strong> Menjadi developer/designer andalan di perusahaan teknologi atau digital agency.</li>
                  <li><strong>Jangka Panjang:</strong> Membangun startup sendiri atau menjadi pemimpin tim pengembangan produk digital.</li>
                </ul>
              </div>
            </div>
            <div style="margin:2.5rem 0 1.5rem 0;text-align:center;">
              <img src="https://img.icons8.com/color/96/rocket--v2.png" alt="Karier" style="width:64px;height:64px;margin-bottom:1rem;">
              <div style="font-size:1.15rem;color:var(--primary);font-weight:600;">
                "Karier adalah perjalanan bertumbuh, berkontribusi, dan memberi dampak. <br>
                <span style='color:#2f5233;'>Saya siap melangkah lebih jauh untuk masa depan digital Indonesia.</span>"
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="certificate-modal" class="project-modal">
        <div class="project-modal-content certificate-modal-content">
          <div class="project-modal-header">
            <button class="project-modal-close" onclick="closeCertificateModal()">&times;</button>
            <h2 class="project-modal-title" id="cert-modal-title">Certificate Details</h2>
          </div>
          <div class="project-modal-body" id="cert-modal-body">
            <div class="certificate-detail-view">
              <img id="cert-modal-image" src="" alt="Certificate" class="certificate-full-image">
              <div class="certificate-details" id="cert-modal-details"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>© 2025 Azizan Ramadhan - All Rights Reserved</p>
    </div>
  </footer>

  <script>
    let currentFullPage = null;
    const certificateData = {
      cert1: {title: "Certificate of Appreciation - Growth Hacking Summit", issuer: "Growth Hacking Summit / EPIQ / Apiary Academy", date: "4 Juni 2025", role: "Time Keeper", description: "Penghargaan atas dedikasi dan kontribusi dalam mensukseskan Growth Hacking Summit 2025 di Kuningan City Ballroom", skills: ["Growth Hacking", "Digital Marketing", "Business Development", "Innovation"]},
      cert2: {title: "Staff Acara - Youth Empowerment Festival", issuer: "Youth Ranger Indonesia", date: "19 Agustus - 3 November 2024", role: "Master of Ceremony (MC)", description: "Bertugas sebagai MC dalam Youth Empowerment Festival yang diselenggarakan oleh Youth Ranger Indonesia, memimpin acara dengan profesional dan engaging", skills: ["Public Speaking", "Event Hosting", "Audience Engagement", "Improvisasi"]},
      cert3: {title: "Volunteer Community Development", issuer: "Manupsia", date: "September 2023 - Maret 2024", role: "Community Development Volunteer", description: "Berkontribusi sebagai volunteer dalam divisi Community Development di Manupsia selama 6+ bulan, fokus pada pengembangan komunitas dan pemberdayaan masyarakat", skills: ["Community Building", "Social Impact", "Volunteer Management", "Program Development"]},
      cert4: {title: "Sertifikat Apresiasi - Event #UangKita", issuer: "Komunitas #UangKita Kemenkeu", date: "14 Desember 2024", role: "Event Committee", description: "Grand Event 'Level Up Your Money: How To Invest Now For A Wealthy Tomorrow' yang diselenggarakan oleh Komunitas #UangKita Regional Jabodetabek", skills: ["Financial Literacy Event", "Event Planning", "Committee Work"]},
      cert5: {title: "Sertifikat Apresiasi - Panitia Kuliah Umum Komunita", issuer: "Kementerian Keuangan RI", date: "27 Juli 2024", role: "Panitia", description: "Sertifikat apresiasi atas kontribusi sebagai panitia dalam kegiatan Kuliah Umum Komunita Jabodetabek dengan tema 'Optimalisasi Penerimaan Negara bukan Pajak dalam Meningkatkan Kemandirian Fiskal Indonesia'", skills: ["Event Management", "Public Relations", "Team Coordination"]},
      cert6: {title: "Certificate of Participation - Jakarta Creator Con", issuer: "Commaa Asia / Jakarta Creator Con / Slice", date: "21 September 2024", role: "Logistic Crew", description: "Berkontribusi sebagai Logistic Crew dalam Jakarta Creator Con 2024, menangani koordinasi logistik dan operasional event", skills: ["Logistics Management", "Event Operations", "Team Coordination", "Problem Solving"]}
    };

    const showAllSections = () => {
      document.querySelectorAll('.nav-buttons button').forEach(btn => btn.classList.remove('active'));
      event.target.classList.add('active');
      document.querySelectorAll('.card').forEach(el => el.classList.remove('hidden'));
    };

    const showFullPage = (pageId) => {
      document.querySelectorAll('.card').forEach(el => el.classList.add('hidden'));
      const page = document.getElementById(pageId);
      if (page) {
        page.classList.add('active');
        document.body.style.overflow = 'hidden';
        currentFullPage = pageId;
      }
      if (pageId === 'sertifikat-page') {
        setTimeout(() => loadRoleAnalysis(), 500);
      }
    };

    const hideFullPage = () => {
      if (currentFullPage) {
        document.getElementById(currentFullPage).classList.remove('active');
        document.body.style.overflow = '';
        currentFullPage = null;
        document.querySelectorAll('.card').forEach(el => el.classList.remove('hidden'));
      }
    };
    
    // Fungsi toggleMode() dan inisialisasi dark mode dihapus dari sini, diganti oleh darkmode.js

    const copyToClipboard = (text) => {
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(text).then(() => showNotification('📋 Informasi telah disalin!')).catch(() => {
          const textArea = document.createElement('textarea');
          textArea.value = text;
          document.body.appendChild(textArea);
          textArea.select();
          document.execCommand('copy');
          document.body.removeChild(textArea);
          showNotification('📋 Informasi telah disalin!');
        });
      }
    };

    const showNotification = (message) => {
      const notification = document.createElement('div');
      notification.style.cssText = `position: fixed; top: 20px; right: 20px; background: var(--primary); color: white; padding: 1rem 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.15); z-index: 10000; font-weight: 600; transform: translateX(100%); transition: transform 0.3s ease;`;
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
    };

    const openCertificateModal = (certId) => {
      const modal = document.getElementById('certificate-modal');
      const data = certificateData[certId];
      if (!data) return;
      document.getElementById('cert-modal-title').textContent = data.title;
      const modalImage = document.getElementById('cert-modal-image');
      const modalImageContainer = modalImage.parentNode;
      const existingPlaceholder = modalImageContainer.querySelector('.certificate-placeholder');
      if (existingPlaceholder) existingPlaceholder.remove();
      modalImage.style.display = 'block';
      modalImage.style.opacity = '0';
      modalImage.onload = null;
      modalImage.onerror = null;
      const imageMap = {cert1: 'foto/GHS2025.png', cert2: 'foto/YRI.png', cert3: 'foto/manupsia.png', cert4: 'foto/komunita1.png', cert5: 'foto/komunita2.png', cert6: 'foto/JCC2024.png'};
      modalImage.src = imageMap[certId] || 'foto/YRI.png';
      modalImage.alt = data.title;
      modalImage.onload = function() {this.style.opacity = '1'; this.style.display = 'block';};
      modalImage.onerror = function() {this.style.display = 'none'; const placeholder = document.createElement('div'); placeholder.className = 'certificate-placeholder'; placeholder.style.cssText = `width: 100%; height: 300px; background: linear-gradient(135deg, #2f5233, #6b9071); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; text-align: center; flex-direction: column; padding: 2rem;`; placeholder.innerHTML = `<div style="font-size: 3rem; margin-bottom: 1rem;">📄</div><div style="font-weight: 600; margin-bottom: 0.5rem;">${data.title}</div><div style="font-size: 0.9rem; opacity: 0.8;">Image: ${this.src.split('/').pop()}</div>`; modalImageContainer.appendChild(placeholder);};
      const detailsHTML = `<div class="cert-detail-content"><h4>📋 Detail Sertifikat</h4><div class="cert-info-grid"><div class="cert-info-item"><strong>Penerbit:</strong> ${data.issuer}</div><div class="cert-info-item"><strong>Tanggal:</strong> ${data.date}</div><div class="cert-info-item"><strong>Role:</strong> ${data.role}</div></div><div class="cert-description"><h5>Deskripsi:</h5><p>${data.description}</p></div><div class="cert-skills"><h5>Skills yang Dikembangkan:</h5><div class="skills-tags">${data.skills.map(skill => `<span class="skill-tag">${skill}</span>`).join('')}</div></div></div>`;
      document.getElementById('cert-modal-details').innerHTML = detailsHTML;
      modal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    };

    const closeCertificateModal = () => {
      const modal = document.getElementById('certificate-modal');
      const modalImage = document.getElementById('cert-modal-image');
      const modalImageContainer = modalImage.parentNode;
      modalImage.onload = null;
      modalImage.onerror = null;
      modalImage.src = '';
      modalImage.style.opacity = '0';
      const existingPlaceholder = modalImageContainer.querySelector('.certificate-placeholder');
      if (existingPlaceholder) existingPlaceholder.remove();
      modal.style.display = 'none';
      document.body.style.overflow = '';
    };

    const loadRoleAnalysis = async () => {
      try {
        const response = await fetch('role-scanner.php?api=role-analysis');
        const data = await response.json();
        setTimeout(() => {
          document.getElementById('role-loading').style.display = 'none';
          document.getElementById('role-dashboard').style.display = 'block';
          document.getElementById('primary-role').textContent = data.summary.primary_role;
          document.getElementById('experience-level').textContent = data.summary.experience_level;
          const fitScores = data.role_fit_score;
          const topRole = Object.keys(fitScores)[0];
          const topScore = fitScores[topRole];
          document.getElementById('top-match').textContent = `${topRole} (${topScore}%)`;
          document.getElementById('fit-scores').innerHTML = Object.entries(fitScores).map(([role, score]) => `<div class="fit-score-bar"><div class="fit-score-label">${role}</div><div class="fit-score-progress"><div class="fit-score-fill" style="width: ${score}%"></div><span class="fit-score-text">${score}%</span></div></div>`).join('');
          const skillsMatrix = data.summary.strongest_skills;
          document.getElementById('skills-matrix').innerHTML = skillsMatrix.map(skill => `<span class="skill-matrix-tag">${skill}</span>`).join('');
        }, 2000);
      } catch (error) {
        console.error('Error loading role analysis:', error);
        document.getElementById('role-loading').innerHTML = '<p>Error loading analysis. Please try again.</p>';
      }
    };

    document.addEventListener('DOMContentLoaded', function() {
      // Baris ini akan ditangani oleh darkmode.js, jadi bisa dihapus dari sini:
      // const isDarkMode = localStorage.getItem('darkMode') === 'true'; 
      // if (isDarkMode) document.body.classList.add('dark'); 
      // document.querySelectorAll('.toggle-mode').forEach(btn => btn.textContent = isDarkMode ? '☀️' : '🌙');
      
      const firstButton = document.querySelector('.nav-buttons button');
      if (firstButton) firstButton.classList.add('active');
      
      const certificateImages = document.querySelectorAll('.certificate-image img');
      certificateImages.forEach(img => {
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.5s ease';
        const testImage = new Image();
        testImage.onload = function() { img.style.opacity = '1'; };
        testImage.onerror = function() {
          img.style.display = 'none';
          const parent = img.parentElement;
          if (!parent.querySelector('.fallback-icon')) {
            const fallback = document.createElement('div');
            fallback.className = 'fallback-icon';
            fallback.style.cssText = `position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3rem; color: #ccc; z-index: 1;`;
            fallback.textContent = '📄';
            parent.style.position = 'relative';
            parent.appendChild(fallback);
          }
        };
        testImage.src = img.src;
      });
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && currentFullPage) hideFullPage();
    });
    window.addEventListener('click', (event) => {
      const modal = document.getElementById('certificate-modal');
      if (event.target === modal) closeCertificateModal();
    });
  </script>
</body>
</html>