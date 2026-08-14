@include('home.header')

<!-- ============================================================
     HERO CAROUSEL
     ============================================================ -->
<section class="bk-hero">
  <div class="bk-hero-slides" id="bkHeroTrack">
    <!-- Slide 1 -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('frontassets/images/banner/13.jpg')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-sparkling-2-fill"></i> The Next Era of Digital Banking</span>
          <h1>Your Money, Moving <em>Smarter</em> Than Ever</h1>
          <p>Unova Saver pairs bank-grade security with an experience built for how people actually live  instant transfers, real-time insights, and a support team that genuinely has your back, day or night.</p>
          <div class="bk-hero-actions">
            <a href="{{ url('account-options') }}" class="bk-btn bk-btn--white">Open an Account <i class="ri-arrow-right-line"></i></a>
            <a href="{{ route('login') }}" class="bk-btn bk-btn--glass">Sign In <i class="ri-login-circle-line"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('frontassets/images/banner/1.jpg')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-briefcase-4-fill"></i> Personal &amp; Business, One Platform</span>
          <h1>One Login. <em>Every</em> Side of Your Finances.</h1>
          <p>Personal savings, business payroll, credit, and investments  manage all of it from a single dashboard built to scale with you, whether you're saving your first thousand or running a growing company.</p>
          <div class="bk-hero-actions">
            <a href="{{ url('personal') }}" class="bk-btn bk-btn--white">Personal Banking <i class="ri-arrow-right-line"></i></a>
            <a href="{{ url('business') }}" class="bk-btn bk-btn--glass">Business Banking <i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('frontassets/images/banner/8.jpg')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-earth-fill"></i> Borderless by Design</span>
          <h1>Send It Anywhere. <em>Feel</em> No Friction.</h1>
          <p>Reach 50+ countries with transparent, live exchange rates and no surprise fees hiding in the fine print. Global banking, finally built the way it should feel.</p>
          <div class="bk-hero-actions">
            <a href="{{ url('account-options') }}" class="bk-btn bk-btn--white">Open an Account <i class="ri-arrow-right-line"></i></a>
            <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Talk to Us <i class="ri-customer-service-2-line"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="bk-hero-arr bk-hero-arr--prev" onclick="bkSlide(-1)"><i class="ri-arrow-left-s-line"></i></button>
  <button class="bk-hero-arr bk-hero-arr--next" onclick="bkSlide(1)"><i class="ri-arrow-right-s-line"></i></button>
  <div class="bk-hero-dots" id="bkDots">
    <button class="active" onclick="bkGo(0)"></button>
    <button onclick="bkGo(1)"></button>
    <button onclick="bkGo(2)"></button>
  </div>
  <div class="bk-hero-progress"><div class="bk-hero-progress-bar" id="bkProgress"></div></div>
</section>

<!-- ============================================================
     FEATURE TICKER
     ============================================================ -->
<div class="bk-ticker" aria-hidden="true">
  <div class="bk-ticker-track">
    <span class="bk-ticker-item"><i class="ri-shield-check-fill"></i> Bank-Grade Encryption</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-flashlight-fill"></i> Instant Transfers</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-global-fill"></i> 50+ Countries Reached</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-customer-service-2-fill"></i> 24/7 Live Support</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-bank-card-fill"></i> Zero Annual Fee Cards</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-percent-fill"></i> Competitive Interest Rates</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-pie-chart-fill"></i> Smart Investment Tools</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-smartphone-fill"></i> Full Mobile Banking</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-exchange-dollar-fill"></i> Real-Time Exchange Rates</span>
    <span class="bk-ticker-sep"></span>
    <!-- duplicate for seamless loop -->
    <span class="bk-ticker-item"><i class="ri-shield-check-fill"></i> Bank-Grade Encryption</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-flashlight-fill"></i> Instant Transfers</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-global-fill"></i> 50+ Countries Reached</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-customer-service-2-fill"></i> 24/7 Live Support</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-bank-card-fill"></i> Zero Annual Fee Cards</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-percent-fill"></i> Competitive Interest Rates</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-pie-chart-fill"></i> Smart Investment Tools</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-smartphone-fill"></i> Full Mobile Banking</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-exchange-dollar-fill"></i> Real-Time Exchange Rates</span>
    <span class="bk-ticker-sep"></span>
  </div>
</div>


<!-- ============================================================
     TRUST STRIP
     ============================================================ -->
<section class="bk-trust">
  <div class="bk-wrap">
    <div class="bk-trust-grid">
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-lock-2-line"></i></div>
        <div><strong>256-bit Encryption</strong><span>Every session, fully protected</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-global-line"></i></div>
        <div><strong>50+ Countries</strong><span>One network, worldwide reach</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-customer-service-2-line"></i></div>
        <div><strong>24/7 Support</strong><span>Real people, always on call</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-flashlight-line"></i></div>
        <div><strong>Instant Transfers</strong><span>Money moves the moment you do</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICES / FEATURES
     ============================================================ -->
<section class="bk-section" id="services">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Our Services</span>
      <h2 class="bk-title">Banking Built Around <em>Your</em> Life</h2>
      <p class="bk-desc">From your first savings account to your next big investment, explore the full suite of tools built to help your money work as hard as you do.</p>
    </div>
    <div class="bk-cards-grid bk-cards-grid--bento">
      <div class="bk-card bk-card--featured sr">
        <span class="bk-card-badge">Most Popular</span>
        <div class="bk-card-icon"><i class="ri-exchange-dollar-line"></i></div>
        <h3>International Transfers</h3>
        <p>Move money across borders in seconds, with live exchange rates, bank-level security, and fees that stay refreshingly low.</p>
        <a href="{{ url('account-options') }}" class="bk-card-link">Get Started <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-line"></i></div>
        <h3>Personal Banking</h3>
        <p>Everyday checking and savings accounts that reward smart banking  competitive rates, zero hidden fees, always.</p>
        <a href="{{ url('personal') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-briefcase-4-line"></i></div>
        <h3>Business Banking</h3>
        <p>From merchant services to payroll and treasury tools, everything your business needs to grow  under one roof.</p>
        <a href="{{ url('business') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-card-line"></i></div>
        <h3>Credit Cards</h3>
        <p>Cashback, travel rewards, or low-APR  whatever matters most to you, there's a card built for how you spend.</p>
        <a href="{{ url('credit-card') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-hand-coin-line"></i></div>
        <h3>Loans &amp; Mortgages</h3>
        <p>Flexible personal loans, home mortgages, and auto financing with rates that make sense and terms that fit your life.</p>
        <a href="{{ url('loans') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-pie-chart-2-line"></i></div>
        <h3>Wealth Management</h3>
        <p>Personalized financial planning and investment guidance to help you build wealth and plan for what's next.</p>
        <a href="{{ url('about') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card bk-card--cta sr">
        <div class="bk-card-icon"><i class="ri-question-answer-line"></i></div>
        <h3>Not Sure Where to Start?</h3>
        <p>Tell us a bit about your goals and we'll point you to the right account  no pressure, no jargon.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Talk to Us <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     HOW IT WORKS
     ============================================================ -->
<section class="bk-section bk-section--gray">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">How It Works</span>
      <h2 class="bk-title">Open Your Account in <em>Minutes</em></h2>
      <p class="bk-desc">Getting started with Unova Saver is refreshingly simple. Just three steps stand between you and better banking.</p>
    </div>
    <div class="bk-steps">
      <div class="bk-step sr">
        <div class="bk-step-num">01</div>
        <h3>Create Account</h3>
        <p>Sign up online in minutes  all you need is a valid ID and a few basic details.</p>
      </div>
      <div class="bk-step-line"></div>
      <div class="bk-step sr">
        <div class="bk-step-num">02</div>
        <h3>Verify Identity</h3>
        <p>A fast, secure verification process keeps your account protected right from the start.</p>
      </div>
      <div class="bk-step-line"></div>
      <div class="bk-step sr">
        <div class="bk-step-num">03</div>
        <h3>Fund &amp; Transact</h3>
        <p>Add funds, send transfers, and manage your money  all seamlessly, all in one place.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SMART BANKING FEATURES
     ============================================================ -->
<section class="bk-features-dark" id="features">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label bk-label--light">Smart Banking</span>
      <h2 class="bk-title bk-title--white">One App. <em>Total</em> Control Over Your Money.</h2>
      <p class="bk-desc bk-desc--light">We paired cutting-edge technology with genuinely helpful service, so managing your money feels effortless  wherever life takes you.</p>
    </div>
    <div class="bk-fd-grid">
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-send-plane-fill"></i></div>
        <h4>Instant Transfers</h4>
        <p>Move money to anyone, anywhere, in seconds  domestic or international, always at rates that work in your favor.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-smartphone-line"></i></div>
        <h4>Mobile Banking</h4>
        <p>Your entire bank, in your pocket. Check balances, pay bills, and manage every account wherever you are.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-fingerprint-line"></i></div>
        <h4>Biometric Security</h4>
        <p>Skip the passwords. Log in instantly with fingerprint or face ID, backed by the latest in biometric protection.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-notification-3-line"></i></div>
        <h4>Real-Time Alerts</h4>
        <p>Get notified the moment something happens on your account, so you're always a step ahead of your finances.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-line-chart-line"></i></div>
        <h4>Spending Insights</h4>
        <p>Smart, data-driven insights break down your spending habits and help you reach your savings goals faster.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-shield-star-line"></i></div>
        <h4>Fraud Protection</h4>
        <p>Round-the-clock monitoring flags anything unusual the moment it happens, so your money stays exactly where it belongs.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT / WHY CHOOSE US
     ============================================================ -->
<section class="bk-section" id="about">
  <div class="bk-wrap">
    <div class="bk-split">
      <div class="bk-split-media sr">
        <div class="bk-img-stack">
          <img src="frontassets/images/banner/5.jpg" alt="Banking" class="bk-img-main">
          <div class="bk-img-badge">
            <span class="bk-img-badge-num">15+</span>
            <span class="bk-img-badge-txt">Years of<br>Excellence</span>
          </div>
        </div>
      </div>
      <div class="bk-split-text sr">
        <span class="bk-label">Why Choose Us</span>
        <h2 class="bk-title">A Bank Built on Trust, Not Just <em>Transactions</em></h2>
        <p class="bk-desc" style="margin:0 0 20px">For over a decade, Unova Saver has been rethinking what banking should feel like  pairing powerful technology with genuine care, so every customer feels seen, valued, and secure.</p>
        <div class="bk-check-list">
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>Transparent Banking</strong>
              <p>No fine print, no hidden charges  just clear, honest banking you can count on.</p>
            </div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>Advanced Security</strong>
              <p>Multi-factor authentication, biometric login, and round-the-clock fraud monitoring keep your money safe.</p>
            </div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>Dedicated Support</strong>
              <p>Real people, real expertise  our support team is here for you any hour, any day.</p>
            </div>
          </div>
        </div>
        <a href="{{ url('about') }}" class="bk-btn bk-btn--fill" style="margin-top:20px">More About Us <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY SWITCH / COMPARISON
     ============================================================ -->
<section class="bk-section bk-section--gray">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Why Switch</span>
      <h2 class="bk-title">See the <em>Difference</em> for Yourself</h2>
      <p class="bk-desc">No fine print, no waiting rooms  just banking that respects your time and your money.</p>
    </div>
    <div class="bk-compare sr">
      <div class="bk-compare-row bk-compare-row--head">
        <div class="bk-compare-label"></div>
        <div class="bk-compare-col bk-compare-col--us">Unova Saver</div>
        <div class="bk-compare-col">Traditional Banks</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Account opening time</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> Minutes, online</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Days, in branch</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">International transfer fees</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> Low, transparent</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> High, hidden markups</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Customer support</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> 24/7 real people</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Business hours only</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Monthly account fees</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> £0, always</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Often £5-£25</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Fraud monitoring</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> Real-time, automated</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Manual, delayed</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     EXCHANGE RATES
     ============================================================ -->
<section class="bk-section" id="rates">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Live Rates</span>
      <h2 class="bk-title">Today's Exchange Rates, <em>No Guesswork</em></h2>
      <p class="bk-desc">Refreshed around the clock and shown in plain sight, so you always know exactly what you'll get before you send.</p>
    </div>
    <div class="bk-rates-wrap sr">
      <table class="bk-rates-table">
        <thead>
          <tr>
            <th>Currency</th>
            <th>Buy Rate (USD)</th>
            <th>Sell Rate (USD)</th>
            <th>Change</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/gb.png" alt="GBP"><div><b>GBP</b><small>British Pound</small></div></div></td>
            <td class="bk-mono">1.2645</td>
            <td class="bk-mono">1.2590</td>
            <td><span class="bk-badge bk-badge--up">+0.12%</span></td>
            <td><a href="{{ url('account-options') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/eu.png" alt="EUR"><div><b>EUR</b><small>Euro</small></div></div></td>
            <td class="bk-mono">1.0842</td>
            <td class="bk-mono">1.0790</td>
            <td><span class="bk-badge bk-badge--up">+0.08%</span></td>
            <td><a href="{{ url('account-options') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/jp.png" alt="JPY"><div><b>JPY</b><small>Japanese Yen</small></div></div></td>
            <td class="bk-mono">0.00671</td>
            <td class="bk-mono">0.00665</td>
            <td><span class="bk-badge bk-badge--down">-0.15%</span></td>
            <td><a href="{{ url('account-options') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/ca.png" alt="CAD"><div><b>CAD</b><small>Canadian Dollar</small></div></div></td>
            <td class="bk-mono">0.7410</td>
            <td class="bk-mono">0.7365</td>
            <td><span class="bk-badge bk-badge--up">+0.05%</span></td>
            <td><a href="{{ url('account-options') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/ch.png" alt="CHF"><div><b>CHF</b><small>Swiss Franc</small></div></div></td>
            <td class="bk-mono">1.1290</td>
            <td class="bk-mono">1.1235</td>
            <td><span class="bk-badge bk-badge--down">-0.03%</span></td>
            <td><a href="{{ url('account-options') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="bk-section bk-section--gray" id="testimonials">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Testimonials</span>
      <h2 class="bk-title">What Our Customers <em>Say</em></h2>
      <p class="bk-desc">Real stories from real customers who trust us with their finances every single day.</p>
    </div>
    <div class="bk-rating-summary">
      <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
      <span><strong>4.9 / 5</strong> average rating from 12,000+ reviews</span>
    </div>
    <div class="bk-testimonials-scroll">
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"Unova Saver changed how I run my business finances. The app is clean, transfers land instantly, and support actually picks up."</p>
        <div class="bk-testimonial-author">
          <img src="front/images/clients/1.png" alt="Client">
          <div><strong>James Whitfield</strong><span>Business Owner</span></div>
        </div>
      </div>
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"I've banked with several places and nothing compares. Low fees, a genuinely great app, and real humans whenever I need them."</p>
        <div class="bk-testimonial-author">
          <img src="front/images/clients/2.png" alt="Client">
          <div><strong>Sarah Mitchell</strong><span>Freelance Designer</span></div>
        </div>
      </div>
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
        <p>"The international transfer rates are genuinely competitive. I save hundreds every month compared to my old bank."</p>
        <div class="bk-testimonial-author">
          <img src="front/images/clients/4.png" alt="Client">
          <div><strong>David George</strong><span>Import/Export</span></div>
        </div>
      </div>
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"Opening my business account took minutes, not weeks. The team walked me through every step  highly recommend for any founder."</p>
        <div class="bk-testimonial-author">
          <img src="front/images/clients/5.png" alt="Client">
          <div><strong>Maria Fernandez</strong><span>Startup Founder</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SECURITY & TRUST
     ============================================================ -->
<section class="bk-security">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label bk-label--light">Security First</span>
      <h2 class="bk-title bk-title--white">Your Money, Protected From <em>Every</em> Angle</h2>
      <p class="bk-desc bk-desc--light">Security isn't a feature we bolted on  it's built into every layer of Unova Saver.</p>
    </div>
    <div class="bk-security-grid">
      <div class="bk-security-item sr">
        <div class="bk-security-icon"><i class="ri-shield-keyhole-line"></i></div>
        <h4>End-to-End Encryption</h4>
        <p>Every transaction and login is encrypted in transit and at rest.</p>
      </div>
      <div class="bk-security-item sr">
        <div class="bk-security-icon"><i class="ri-fingerprint-2-line"></i></div>
        <h4>Multi-Factor Authentication</h4>
        <p>Biometric and two-step verification keep your account locked to you.</p>
      </div>
      <div class="bk-security-item sr">
        <div class="bk-security-icon"><i class="ri-radar-line"></i></div>
        <h4>Real-Time Fraud Monitoring</h4>
        <p>Automated systems watch every account around the clock for anything unusual.</p>
      </div>
      <div class="bk-security-item sr">
        <div class="bk-security-icon"><i class="ri-file-shield-2-line"></i></div>
        <h4>Regulated Operations</h4>
        <p>We operate under strict compliance standards, audited and enforced continuously.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Ready to Bank Smarter, Starting Today?</h2>
        <p>Join the customers already banking better with Unova Saver. Open your account in under 5 minutes  no paperwork, no hassle.</p>
        <div class="bk-cta-btns">
          <a href="{{ url('account-options') }}" class="bk-btn bk-btn--white">Open Free Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Contact Us <i class="ri-phone-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')
