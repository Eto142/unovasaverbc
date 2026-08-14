@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>About Us</h1>
    <p>The story, the people, and the principles behind Unova Saver Bank Corporation.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> About Us</div>
  </div>
</section>

<!-- Mission Section -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-page-grid-2">
      <div class="bk-content-block sr">
        <span class="bk-label">Our Story</span>
        <h2>Banking Shouldn't Feel Like a Chore</h2>
        <p>Unova Saver Bank Corporation started with a simple frustration: banking had gotten complicated when it should have been simple. Over a decade later, that same idea still drives everything we build.</p>
        <p>We pair modern technology with people who actually pick up the phone, so individuals and businesses can manage their money without wrestling with the bank that's supposed to be helping them.</p>
        <div class="bk-check-list" style="margin-top:16px">
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div><strong>Innovation First</strong><p>We keep investing in the platform so it gets better, not just bigger.</p></div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div><strong>Customer-Centric</strong><p>Every product decision starts with a real customer problem, not a spreadsheet.</p></div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div><strong>Trust &amp; Transparency</strong><p>What you see in your account is what you get no fine-print surprises.</p></div>
          </div>
        </div>
      </div>
      <div class="bk-img-stack sr">
        <img src="frontassets/images/banner/4.jpg" alt="Our team working with clients" class="bk-img-main">
        <div class="bk-img-badge">
          <span class="bk-img-badge-num">15+</span>
          <span class="bk-img-badge-txt">Years of<br>Excellence</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Our Values</span>
      <h2 class="bk-title">The Principles We Don't Compromise On</h2>
      <p class="bk-desc">These aren't slogans on a wall they're what shapes every decision we make at unova saver Bank.</p>
    </div>
    <div class="bk-page-grid-3">
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-shield-check-line"></i></div>
        <h3>Security</h3>
        <p>256-bit encryption and multi-factor authentication protect every transaction, every time, without exception.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-heart-3-line"></i></div>
        <h3>Integrity</h3>
        <p>Our fee structure says what it means. If something changes, you'll hear it from us first.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-lightbulb-line"></i></div>
        <h3>Innovation</h3>
        <p>We adopt new technology when it actually makes banking better not just because it's new.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-global-line"></i></div>
        <h3>Global Reach</h3>
        <p>Active across 180+ countries, connecting people and businesses wherever they happen to be.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-team-line"></i></div>
        <h3>Community</h3>
        <p>Our community programmes back financial literacy, education, and local development where we operate.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-customer-service-2-line"></i></div>
        <h3>Reliability</h3>
        <p>24/7 support, 99.99% uptime, and a relationship manager who actually knows your account.</p>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Why Us</span>
      <h2 class="bk-title">What Sets Us Apart</h2>
    </div>
    <div class="bk-page-grid-4">
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-bank-card-line"></i></div>
        <h3>Every Way to Pay</h3>
        <p>Cards, wire transfers, mobile payments however you move money, we support it.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-exchange-dollar-line"></i></div>
        <h3>Rates Worth Comparing</h3>
        <p>Exchange rates and savings yields that consistently beat the industry average.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-lock-2-line"></i></div>
        <h3>Bank-Grade Security</h3>
        <p>PCI-DSS compliant, with fraud detection systems watching your account around the clock.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-24-hours-line"></i></div>
        <h3>Support That Doesn't Sleep</h3>
        <p>Phone, email, or live chat help is available whenever you need it.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Come Bank With People Who Get It</h2>
        <p>Open a free account today and see what banking feels like when it's actually built around you.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Open Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Contact Us <i class="ri-phone-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')
