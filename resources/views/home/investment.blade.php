@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>Investment &amp; Wealth</h1>
    <p>Put your money to work with strategies built around your goals, not ours.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> Investment &amp; Wealth</div>
  </div>
</section>

<!-- Investment Products -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Investment Products</span>
      <h2 class="bk-title">Pick Your Path to Growth</h2>
      <p class="bk-desc">Cautious or ambitious, short-term or decades out our product range covers every risk appetite and time horizon.</p>
    </div>
    <div class="bk-page-grid-4">
      <div class="bk-product-card sr">
        <div class="bk-product-card-head">
          <h3>Stocks &amp; Equities</h3>
          <p>Own a piece of the market</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Trade on global exchanges</li>
            <li><i class="ri-check-line"></i> Live quotes &amp; market data</li>
            <li><i class="ri-check-line"></i> Fractional shares from $1</li>
            <li><i class="ri-check-line"></i> Automatic dividend reinvestment</li>
            <li><i class="ri-check-line"></i> $0 commission on domestic trades</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ url('account-options') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Open Account <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--gold">
          <h3>Fixed Income &amp; Bonds</h3>
          <p>Steady, predictable returns</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Government &amp; corporate bonds</li>
            <li><i class="ri-check-line"></i> Competitive fixed rates</li>
            <li><i class="ri-check-line"></i> Terms from 1 to 30 years</li>
            <li><i class="ri-check-line"></i> Monthly or annual coupon payouts</li>
            <li><i class="ri-check-line"></i> Built around capital preservation</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ url('account-options') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Open Account <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--blue">
          <h3>Mutual Funds &amp; ETFs</h3>
          <p>Diversification, managed for you</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Professionally managed portfolios</li>
            <li><i class="ri-check-line"></i> Broad exposure across markets</li>
            <li><i class="ri-check-line"></i> Expense ratios from as low as 0.05%</li>
            <li><i class="ri-check-line"></i> SIP or lump-sum contributions</li>
            <li><i class="ri-check-line"></i> Tax-efficient fund structures</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ url('account-options') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Open Account <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--purple">
          <h3>Digital Assets</h3>
          <p>Regulated crypto investing</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Bitcoin, Ethereum &amp; leading altcoins</li>
            <li><i class="ri-check-line"></i> Regulated, insured custody</li>
            <li><i class="ri-check-line"></i> Trade around the clock</li>
            <li><i class="ri-check-line"></i> Offline cold-storage protection</li>
            <li><i class="ri-check-line"></i> Auto-invest &amp; dollar-cost averaging</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ url('account-options') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Open Account <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Investment Solutions -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Solutions</span>
      <h2 class="bk-title">Beyond the Trade Ticket</h2>
      <p class="bk-desc">Markets move fast. Our advisory team helps you build a plan that holds up regardless of what happens next.</p>
    </div>
    <div class="bk-cards-grid">
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-pie-chart-2-line"></i></div>
        <h3>Portfolio Management</h3>
        <p>A portfolio built around your risk tolerance and rebalanced actively as markets shift.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-umbrella-line"></i></div>
        <h3>Retirement Planning</h3>
        <p>Pension plans, IRAs, and annuities mapped out so retirement feels like a plan, not a guess.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-building-line"></i></div>
        <h3>Real Estate Investment</h3>
        <p>Get property exposure through REITs and commercial real estate funds no landlord duties required.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-exchange-funds-line"></i></div>
        <h3>Forex &amp; Commodities</h3>
        <p>Trade major currency pairs alongside gold, oil, and agricultural commodities at tight spreads.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bit-coin-line"></i></div>
        <h3>Crypto Funds</h3>
        <p>Regulated digital-asset funds, including Bitcoin and Ethereum exposure, through one trusted platform.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-vip-crown-line"></i></div>
        <h3>Wealth Advisory</h3>
        <p>Estate planning, tax strategy, and philanthropic giving, coordinated under one advisory relationship.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Why Invest With Us -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-page-grid-2">
      <div class="sr">
        <span class="bk-label">Why Invest With Us</span>
        <h2 class="bk-title" style="text-align:left">An Edge in Any Market Condition</h2>
        <div style="margin-top:16px">
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-team-line"></i></div>
            <div><h4>Portfolio Managers Who've Seen Cycles</h4><p>Decades of experience navigating bull runs, corrections, and everything between.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-bar-chart-grouped-line"></i></div>
            <div><h4>Institutional-Grade Data, In Your Pocket</h4><p>Live pricing and advanced charting that used to be reserved for trading floors.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-percent-line"></i></div>
            <div><h4>Fees You Can Actually See</h4><p>Transparent, competitive pricing no buried charges eating into your returns.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-shield-check-line"></i></div>
            <div><h4>Regulated &amp; Insured Where It Matters</h4><p>Bank-grade security around your data, and FDIC coverage where applicable.</p></div>
          </div>
        </div>
      </div>
      <div class="sr">
        <img src="frontassets/images/banner/banner-slide-2.jpg" alt="Reviewing an investment portfolio and financial plan" style="border-radius:var(--r-lg);width:100%;height:340px;object-fit:cover">
      </div>
    </div>
  </div>
</section>

<!-- Investment Risk Notice -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="sr" style="max-width:780px;margin:0 auto;background:var(--surface,#fff);border:1.5px solid var(--border,#e2e8f0);border-left:5px solid var(--primary,#1a56db);border-radius:var(--r-lg,12px);padding:32px 36px">
      <div style="display:flex;align-items:flex-start;gap:16px">
        <div style="flex-shrink:0;width:44px;height:44px;border-radius:50%;background:rgba(26,86,219,.1);display:flex;align-items:center;justify-content:center;font-size:1.4rem;color:var(--primary,#1a56db)">
          <i class="ri-information-line"></i>
        </div>
        <div>
          <h3 style="margin:0 0 10px;font-size:1.05rem;font-weight:700">Before You Invest</h3>
          <p style="margin:0 0 10px;line-height:1.7;font-size:.92rem;color:var(--text-muted,#64748b)">
            Every investment carries risk, including the possible loss of principal, and past performance never guarantees future results. Values move in both directions, and you could get back less than you put in.
          </p>
          <p style="margin:0;line-height:1.7;font-size:.92rem;color:var(--text-muted,#64748b)">
            unova saver Bank does not offer tax or legal advice speak with your own advisors before making investment decisions. Investment products are <strong>not FDIC-insured</strong>, <strong>not bank guaranteed</strong>, and <strong>may lose value</strong>. Read all offering documents carefully before investing.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Investor Stories</span>
      <h2 class="bk-title">What Our Investors Say</h2>
    </div>
    <div class="bk-page-grid-3">
      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"My portfolio is up 28% over two years, and my manager actually calls before big moves instead of after. That's rare."</p>
        <div class="bk-testi-mini-author"><div><strong>Amanda Clarke</strong><span>Equity Investor, 3 Years</span></div></div>
      </div>
      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"Retirement used to feel like a vague someday. Now I have an actual roadmap and someone managing it with me."</p>
        <div class="bk-testi-mini-author"><div><strong>James Okafor</strong><span>Retirement Planning Client</span></div></div>
      </div>
      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
        <p>"Low fees, solid diversification, and data that updates in real time. Switching to their ETF platform was overdue."</p>
        <div class="bk-testi-mini-author"><div><strong>Priya Nair</strong><span>ETF &amp; Mutual Funds Investor</span></div></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Your Money Could Be Doing More</h2>
        <p>Open an investment account in minutes and let expert-guided strategy take it from here.</p>
        <div class="bk-cta-btns">
          <a href="{{ url('account-options') }}" class="bk-btn bk-btn--white">Open Investment Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Speak to an Advisor <i class="ri-phone-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')
