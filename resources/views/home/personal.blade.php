@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>Personal Banking</h1>
    <p>Simple, secure accounts built around how you actually live and spend.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> Personal Banking</div>
  </div>
</section>

<!-- Account Options -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Account Options</span>
      <h2 class="bk-title">Pick an Account That Actually Fits</h2>
      <p class="bk-desc">From your first pay cheque to your next big goal, there's an account here that matches where you're at.</p>
    </div>
    <div class="bk-page-grid-3">
      <div class="bk-product-card sr">
        <div class="bk-product-card-head">
          <h3>Everyday Current Account</h3>
          <p>Built for daily spending</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> $0 monthly fee with direct deposit</li>
            <li><i class="ri-check-line"></i> Full-featured mobile &amp; online banking</li>
            <li><i class="ri-check-line"></i> Contactless debit card included</li>
            <li><i class="ri-check-line"></i> Fee-free withdrawals at 30,000+ ATMs</li>
            <li><i class="ri-check-line"></i> Optional overdraft cushion</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Open Account <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--gold">
          <h3>High-Yield Savings</h3>
          <p>Put idle cash to work</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Earn up to 4.25% APY</li>
            <li><i class="ri-check-line"></i> No minimum balance to open</li>
            <li><i class="ri-check-line"></i> FDIC insured up to $250,000</li>
            <li><i class="ri-check-line"></i> Round-up &amp; auto-save tools</li>
            <li><i class="ri-check-line"></i> Instant transfers to your current account</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Start Saving <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--blue">
          <h3>Premium Membership</h3>
          <p>More perks, fewer limits</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Priority support, no hold music</li>
            <li><i class="ri-check-line"></i> Higher daily transfer limits</li>
            <li><i class="ri-check-line"></i> Members-only rewards catalogue</li>
            <li><i class="ri-check-line"></i> Fee-free international transfers</li>
            <li><i class="ri-check-line"></i> Complimentary annual financial review</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Go Premium <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-page-grid-2">
      <div class="sr">
        <img src="frontassets/images/banner/14.jpg" alt="People managing their money from their phones" style="border-radius:var(--r-lg);width:100%;height:320px;object-fit:cover">
      </div>
      <div class="sr">
        <span class="bk-label">Features</span>
        <h2 class="bk-title" style="text-align:left">Your Bank, Wherever You Are</h2>
        <div style="margin-top:16px">
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-smartphone-line"></i></div>
            <div><h4>An App You'll Actually Use</h4><p>Check balances, move money, and pay bills in a few taps no clutter, no confusion.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-shield-check-line"></i></div>
            <div><h4>Security Baked In</h4><p>Biometric sign-in, live spend alerts, and one-tap card freezing if something looks off.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-customer-service-2-line"></i></div>
            <div><h4>Real People, Round the Clock</h4><p>Talk to a human at 3am or 3pm our support team never clocks out.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-money-dollar-circle-line"></i></div>
            <div><h4>ATMs Without the Fees</h4><p>Withdraw cash at over 30,000 machines nationwide without paying a penny extra.</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Testimonials</span>
      <h2 class="bk-title">Real Members, Real Feedback</h2>
    </div>
    <div class="bk-page-grid-3">
      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"I moved my everyday account over on a whim and haven't looked back. The savings rate alone paid for my holiday this year."</p>
        <div class="bk-testi-mini-author"><div><strong>Michael Johnson</strong><span>Current Account Holder</span></div></div>
      </div>
      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"Setting up my account took less time than making a coffee, and when I had questions a real person walked me through it."</p>
        <div class="bk-testi-mini-author"><div><strong>Sarah Williams</strong><span>Premium Member</span></div></div>
      </div>
      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
        <p>"Between the fee-free ATMs and the round-up savings tool, I'm putting away more each month without even trying."</p>
        <div class="bk-testi-mini-author"><div><strong>David Rodriguez</strong><span>Savings Account Holder</span></div></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Your Account Is Five Minutes Away</h2>
        <p>No branch visit, no paperwork, no waiting around.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Open an Account <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')
