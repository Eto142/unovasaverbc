@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>Corporate Banking</h1>
    <p>Banking infrastructure built to keep pace with a growing organisation.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> Corporate Banking</div>
  </div>
</section>

<!-- Corporate Account Packages -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Account Packages</span>
      <h2 class="bk-title">An Account Structure for Every Stage</h2>
      <p class="bk-desc">From a two-person startup to a multi-department enterprise, pick the setup that matches how your business actually runs.</p>
    </div>
    <div class="bk-page-grid-3">

      <div class="bk-product-card sr">
        <div class="bk-product-card-head">
          <h3>Corporate Checking</h3>
          <p>For daily operations</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> No cap on monthly transactions</li>
            <li><i class="ri-check-line"></i> Role-based access for your team</li>
            <li><i class="ri-check-line"></i> Built-in payroll disbursement</li>
            <li><i class="ri-check-line"></i> Live balance &amp; activity alerts</li>
            <li><i class="ri-check-line"></i> A named relationship manager</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register.corporate') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Open Account <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--gold">
          <h3>Corporate Savings</h3>
          <p>Put reserves to work</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Tiered interest that rewards larger balances</li>
            <li><i class="ri-check-line"></i> Flexible deposit &amp; withdrawal terms</li>
            <li><i class="ri-check-line"></i> Automatic surplus sweeps</li>
            <li><i class="ri-check-line"></i> Monthly statements built for your accountant</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register.corporate') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Start Saving <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--blue">
          <h3>Business Current Account</h3>
          <p>Full enterprise toolkit</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Overdraft facility on request</li>
            <li><i class="ri-check-line"></i> Priority support line, 24/7</li>
            <li><i class="ri-check-line"></i> No-fee international wires</li>
            <li><i class="ri-check-line"></i> Sub-accounts for every department</li>
            <li><i class="ri-check-line"></i> Open API for your ERP stack</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register.corporate') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Apply Now <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Corporate Solutions -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Our Solutions</span>
      <h2 class="bk-title">One Banking Partner, Every Function Covered</h2>
      <p class="bk-desc">Payroll, payments, cards, trade finance, treasury the tools your finance team needs, without stitching together five vendors.</p>
    </div>
    <div class="bk-cards-grid">

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-group-line"></i></div>
        <h3>Payroll Processing</h3>
        <p>Run salaries, statutory deductions, and payslips on autopilot, with zero manual reconciliation.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-send-plane-line"></i></div>
        <h3>Bulk Payments</h3>
        <p>Pay thousands of vendors or staff in one batch through our secure mass-payment engine.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-card-2-line"></i></div>
        <h3>Corporate Cards</h3>
        <p>Issue physical and virtual cards with per-employee limits and controls you can adjust in real time.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-ship-line"></i></div>
        <h3>Trade Finance</h3>
        <p>Letters of credit, guarantees, and import/export financing to keep goods moving across borders.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-pie-chart-2-line"></i></div>
        <h3>Treasury &amp; Cash Management</h3>
        <p>Sweep, pool, and forecast liquidity across every account so idle cash doesn't sit idle.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-global-line"></i></div>
        <h3>FX &amp; Cross-Border Payments</h3>
        <p>Competitive exchange rates and settlement in over 150 countries, without the wire-transfer runaround.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-page-grid-2">
      <div class="sr">
        <span class="bk-label">Why Choose Us</span>
        <h2 class="bk-title" style="text-align:left">Built to Scale With You</h2>
        <div style="margin-top:16px">
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-user-star-line"></i></div>
            <div><h4>A Relationship Manager Who Knows Your Business</h4><p>One senior banker, briefed on your industry and your goals not a call centre queue.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-team-line"></i></div>
            <div><h4>Access Levels That Match Your Org Chart</h4><p>View-only, approver, or full admin assign the right level to every team member.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-shield-check-line"></i></div>
            <div><h4>Fraud Monitoring That Never Sleeps</h4><p>AI-driven screening flags unusual activity the moment it happens, day or night.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-line-chart-line"></i></div>
            <div><h4>Reporting Your Finance Team Will Actually Use</h4><p>Exportable dashboards and cash flow reports that plug straight into your workflow.</p></div>
          </div>
        </div>
      </div>
      <div class="sr">
        <img src="frontassets/images/banner/2.jpg" alt="Global corporate banking network" style="border-radius:var(--r-lg);width:100%;height:380px;object-fit:cover">
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Client Stories</span>
      <h2 class="bk-title">Businesses That Grew With Us</h2>
    </div>
    <div class="bk-page-grid-3">

      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"Our payroll run used to eat two full days every month. Now it fires automatically every Friday morning without anyone touching it."</p>
        <div class="bk-testi-mini-author"><div><strong>Amanda Osei</strong><span>CFO, NovaTech Solutions</span></div></div>
      </div>

      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"We needed a letter of credit fast to close a shipment window. Their trade finance desk had it sorted in under 48 hours."</p>
        <div class="bk-testi-mini-author"><div><strong>James Owusu</strong><span>Director, Global Imports Ltd</span></div></div>
      </div>

      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
        <p>"Role-based access changed how our finance team operates. Audits that used to take a week now take an afternoon."</p>
        <div class="bk-testi-mini-author"><div><strong>Patricia Mensa</strong><span>Finance Manager, Apex Holdings</span></div></div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Give Your Business a Banking Partner</h2>
        <p>Digital onboarding gets you set up in minutes not weeks.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register.corporate') }}" class="bk-btn bk-btn--white">Register Corporate Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Speak to Our Team <i class="ri-phone-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')
