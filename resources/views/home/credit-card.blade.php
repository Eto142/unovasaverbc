@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>Credit Cards</h1>
    <p>A card for how you spend — rewards, travel, or a rate that won't sting.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> Credit Cards</div>
  </div>
</section>

<!-- Cards -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Our Cards</span>
      <h2 class="bk-title">Three Cards, One Simple Choice</h2>
      <p class="bk-desc">Cash back, air miles, or a lower rate — tell us how you spend and we'll point you to the right one.</p>
    </div>
    <div class="bk-page-grid-3">
      <div class="bk-product-card sr">
        <div class="bk-pc-head bk-pc-head--gold">
          <i class="ri-money-dollar-circle-line"></i>
          <h3>Cash Rewards Card</h3>
          <p>Cash back on the stuff you already buy</p>
        </div>
        <div class="bk-pc-body">
          <ul>
            <li><i class="ri-check-line"></i> 5% back in rotating bonus categories</li>
            <li><i class="ri-check-line"></i> 2% back at supermarkets &amp; gas stations</li>
            <li><i class="ri-check-line"></i> 1% back on everything else, unlimited</li>
            <li><i class="ri-check-line"></i> No annual fee</li>
            <li><i class="ri-check-line"></i> $200 welcome bonus</li>
            <li><i class="ri-check-line"></i> 0% intro APR for 15 months</li>
          </ul>
          <a href="{{ route('register') }}" class="bk-btn bk-btn--primary bk-btn--block">Apply Now</a>
        </div>
      </div>
      <div class="bk-product-card sr">
        <div class="bk-pc-head bk-pc-head--blue">
          <i class="ri-flight-takeoff-line"></i>
          <h3>Travel Rewards Card</h3>
          <p>Miles that add up fast</p>
        </div>
        <div class="bk-pc-body">
          <ul>
            <li><i class="ri-check-line"></i> 3x miles on travel &amp; dining</li>
            <li><i class="ri-check-line"></i> 1.5x miles on everything else</li>
            <li><i class="ri-check-line"></i> 60,000 bonus miles after $3,000 spend</li>
            <li><i class="ri-check-line"></i> Zero foreign transaction fees</li>
            <li><i class="ri-check-line"></i> Complimentary airport lounge access</li>
            <li><i class="ri-check-line"></i> Built-in travel insurance</li>
          </ul>
          <a href="{{ route('register') }}" class="bk-btn bk-btn--primary bk-btn--block">Apply Now</a>
        </div>
      </div>
      <div class="bk-product-card sr">
        <div class="bk-pc-head bk-pc-head--green">
          <i class="ri-percent-line"></i>
          <h3>Low Interest Card</h3>
          <p>For balance transfers &amp; big purchases</p>
        </div>
        <div class="bk-pc-body">
          <ul>
            <li><i class="ri-check-line"></i> 0% intro APR for 21 months</li>
            <li><i class="ri-check-line"></i> Ongoing APR from as low as 11.99%</li>
            <li><i class="ri-check-line"></i> $0 balance transfer fee</li>
            <li><i class="ri-check-line"></i> No annual fee</li>
            <li><i class="ri-check-line"></i> Free FICO score tracking</li>
            <li><i class="ri-check-line"></i> Flexible payment dates</li>
          </ul>
          <a href="{{ route('register') }}" class="bk-btn bk-btn--primary bk-btn--block">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-page-grid-2">
      <div class="sr">
        <img src="frontassets/images/banner/8.jpg" alt="Paying with a card from a mobile device" style="border-radius:var(--r-lg);width:100%;height:340px;object-fit:cover">
      </div>
      <div class="sr">
        <span class="bk-label">Benefits</span>
        <h2 class="bk-title" style="text-align:left">Standard on Every Card</h2>
        <div style="margin-top:16px">
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-shield-check-line"></i></div>
            <div><h4>Zero Fraud Liability</h4><p>Unauthorised charges are on us to chase down — never on you to pay.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-lock-line"></i></div>
            <div><h4>Lock It in a Tap</h4><p>Misplaced your card? Freeze it instantly from the app and unfreeze it the moment you find it.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-notification-3-line"></i></div>
            <div><h4>Alerts on Every Swipe</h4><p>A notification lands the second your card is used, so nothing slips past you.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-smartphone-line"></i></div>
            <div><h4>Ready for Your Wallet App</h4><p>Add it to Apple Pay, Google Pay, or Samsung Pay and leave the physical card at home.</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Comparison Table -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Compare</span>
      <h2 class="bk-title">Side by Side</h2>
    </div>
    <div style="overflow-x:auto" class="sr">
      <table class="bk-compare-table">
        <thead>
          <tr><th>Feature</th><th>Cash Rewards</th><th>Travel Rewards</th><th>Low Interest</th></tr>
        </thead>
        <tbody>
          <tr><td>Annual Fee</td><td>$0</td><td>$95</td><td>$0</td></tr>
          <tr><td>Intro APR</td><td>0% for 15 months</td><td>N/A</td><td>0% for 21 months</td></tr>
          <tr><td>Regular APR</td><td>16.99% – 24.99%</td><td>18.99% – 25.99%</td><td>11.99% – 21.99%</td></tr>
          <tr><td>Rewards Rate</td><td>1%–5% cash back</td><td>1.5x–3x miles</td><td>1% cash back</td></tr>
          <tr><td>Welcome Bonus</td><td>$200</td><td>60,000 miles</td><td>N/A</td></tr>
          <tr><td>Foreign Fees</td><td>3%</td><td>None</td><td>3%</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Find Your Card in Under a Minute</h2>
        <p>Apply online and get a decision before you've finished your coffee.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Apply Now <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Talk to an Advisor <i class="ri-phone-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')
