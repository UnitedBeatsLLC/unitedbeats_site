<?php
/**
 * UnitedBeats — The $10,000 Haircut & Life-Changing Experience by Lum
 * Private Sovereign Commission Dossier (5 Questions) & $10,000.00 USD Invoice Section
 */
if (!defined('ABSPATH')) {
    exit;
}
$GLOBALS['ub_lum_rendered'] = true;
$ub_lum_is_front = function_exists('is_front_page') && is_front_page();
?>
<?php if ($ub_lum_is_front): ?>
<h2 id="lum-chair-heading">Lum &middot; The $10,000 Haircut &amp; Commission</h2>
<?php endif; ?>

<section class="ub-lum-section" id="lum-chair" aria-labelledby="ub-lum-main-title">
  <div class="ub-lum-top-filigree" aria-hidden="true"></div>

  <header class="ub-lum-hero">
    <div class="ub-lum-badges">
      <span class="ub-lum-pill ub-lum-pill-gold">PRIVATE SOVEREIGN COMMISSION &middot; $10,000.00 USD</span>
      <span class="ub-lum-pill ub-lum-pill-emerald">BILLIONAIRES &middot; CELEBRITIES &middot; SOVEREIGN FOUNDERS</span>
      <span class="ub-lum-pill ub-lum-pill-cyan">ZERO EXPENSE FRICTION &middot; BY QUALIFICATION ONLY</span>
    </div>

    <h3 class="ub-lum-title" id="ub-lum-main-title">
      The $10,000 Haircut by Lum
      <span class="ub-lum-subtitle-line">A Life-Changing Experience on Top of a Haircut</span>
    </h3>

    <p class="ub-lum-lead">
      Performed personally by <strong>Lum</strong> &mdash; Co-Founder of <strong>United Beats</strong>, whose range spans
      <strong>visual artist all the way to math magician</strong> alongside his friend and co-founder <strong>Bob</strong>.
      This is not a luxury barbershop appointment. It is an unrepeatable 1-of-1 aesthetic, geometric, and human intervention
      reserved strictly for principals who have <strong>$10,000.00 USD with zero expense problems</strong>, possess the immediate
      agency to sit in the chair, and <strong>genuinely need real help</strong> that nobody on their payroll dares to give them.
    </p>

    <div class="ub-lum-pillars">
      <div class="ub-lum-pillar">
        <span class="ub-lum-pillar-kicker">01 // THE ARCHITECT</span>
        <strong>Lum (with His Friend Bob)</strong>
        <span>Co-Founder of United Beats &mdash; bridging pure visual art, sacred proportion, harmonic spectrum, and mathematical magic.</span>
      </div>
      <div class="ub-lum-pillar">
        <span class="ub-lum-pillar-kicker">02 // THE INTERVENTION</span>
        <strong>Life-Changing Experience + Cut</strong>
        <span>Bespoke cranial sculpture paired with unfiltered, zero-handler truth for people surrounded by yes-men.</span>
      </div>
      <div class="ub-lum-pillar">
        <span class="ub-lum-pillar-kicker">03 // THE THRESHOLD</span>
        <strong>$10,000.00 USD &middot; No Expense Problems</strong>
        <span>Wire clears the retainer; only candor clears the chair. Complete all five qualification questions below to generate your invoice.</span>
      </div>
    </div>
  </header>

  <div class="ub-lum-grid">
    <!-- LEFT COLUMN: 5-QUESTION QUALIFICATION QUESTIONNAIRE -->
    <form class="ub-lum-form" id="ub-lum-form" novalidate>
      <div class="ub-lum-pane-header">
        <span class="ub-lum-pane-code">SECTION I // PRINCIPAL IDENTITY &amp; DISPATCH</span>
        <span class="ub-lum-pane-meta" id="ub-lum-progress-pill">0 / 5 Questions Completed</span>
      </div>

      <div class="ub-lum-ident-grid">
        <div class="ub-lum-field">
          <label for="ub-lum-name">Principal / Celebrity Name <span class="ub-req">*</span></label>
          <input type="text" id="ub-lum-name" name="principal_name" required maxlength="140"
                 placeholder="Full name or public moniker" autocomplete="name" />
        </div>

        <div class="ub-lum-field">
          <label for="ub-lum-entity">Family Office / Studio / Holding Entity</label>
          <input type="text" id="ub-lum-entity" name="principal_entity" maxlength="160"
                 placeholder="e.g., Sovereign Capital / Management / Personal" autocomplete="organization" />
        </div>

        <div class="ub-lum-field">
          <label for="ub-lum-email">Direct Email or Chief-of-Staff Dispatch <span class="ub-req">*</span></label>
          <input type="email" id="ub-lum-email" name="principal_email" required maxlength="160"
                 placeholder="principal@domain.com" autocomplete="email" />
        </div>

        <div class="ub-lum-field">
          <label for="ub-lum-signal">Direct Phone / Signal / Private Line <span class="ub-req">*</span></label>
          <input type="text" id="ub-lum-signal" name="principal_signal" required maxlength="140"
                 placeholder="+1 (...) or Signal handle for Lum's office" autocomplete="tel" />
        </div>

        <div class="ub-lum-field">
          <label for="ub-lum-modality">Chair Location &amp; Modality</label>
          <select id="ub-lum-modality" name="session_modality">
            <option value="United Beats Sanctuary — Detroit Private Arrival (Included)">United Beats Sanctuary &mdash; Detroit Private Arrival (Included)</option>
            <option value="Private Global Fly-Out — Estate / Aviation / Yacht (+ Travel at Cost)">Private Global Fly-Out &mdash; Estate / Aviation / Yacht (+ Travel at Cost)</option>
          </select>
        </div>

        <div class="ub-lum-field">
          <label for="ub-lum-rail">$10,000.00 Settlement Rail (Upon Acceptance)</label>
          <select id="ub-lum-rail" name="settlement_rail">
            <option value="Same-Day Wire (Fedwire / SWIFT) — $10,000.00 USD">Same-Day Wire (Fedwire / SWIFT) &mdash; $10,000.00 USD</option>
            <option value="Family Office / Business Management Immediate Invoice — $10,000.00 USD">Family Office / Business Management Immediate Invoice &mdash; $10,000.00 USD</option>
            <option value="On-Chain Settlement (USDC / BTC / ETH) — $10,000.00 USD Eq.">On-Chain Settlement (USDC / BTC / ETH) &mdash; $10,000.00 USD Eq.</option>
            <option value="Private Cash Retainer Upon Arrival — $10,000.00 USD">Private Cash Retainer Upon Arrival &mdash; $10,000.00 USD</option>
          </select>
        </div>
      </div>

      <div class="ub-lum-pane-header ub-lum-pane-header-questions">
        <span class="ub-lum-pane-code">SECTION II // THE FIVE MANDATORY QUALIFICATION QUESTIONS</span>
        <span class="ub-lum-pane-note">All 5 responses reviewed directly by Lum</span>
      </div>

      <div class="ub-lum-questions">
        <!-- QUESTION 1 -->
        <div class="ub-lum-qcard">
          <div class="ub-lum-qtop">
            <span class="ub-lum-qnum">QUESTION 01 / 05</span>
            <span class="ub-lum-qtag">SOVEREIGN QUALIFICATION</span>
          </div>
          <label class="ub-lum-qlabel" for="ub-lum-q1">
            Why are you qualified to get your haircut by Lum? <span class="ub-req">*</span>
          </label>
          <p class="ub-lum-qhint">
            Net worth clears the wire; it does not clear the chair. State who you are, what you command, create, or carry on your shoulders, and why Lum should grant you a private audience.
          </p>
          <textarea id="ub-lum-q1" name="q1" rows="3" required maxlength="3000"
                    placeholder="Speak directly — no PR bio. Why do you belong in this chair?"></textarea>
        </div>

        <!-- QUESTION 2 -->
        <div class="ub-lum-qcard">
          <div class="ub-lum-qtop">
            <span class="ub-lum-qnum">QUESTION 02 / 05</span>
            <span class="ub-lum-qtag">INTENTION &amp; SINGULARITY</span>
          </div>
          <label class="ub-lum-qlabel" for="ub-lum-q2">
            Why do you want to get your haircut by Lum? <span class="ub-req">*</span>
          </label>
          <p class="ub-lum-qhint">
            Every celebrity stylist on Earth is one call away and paid to flatter you. Why Lum specifically &mdash; and why at this exact moment in your life?
          </p>
          <textarea id="ub-lum-q2" name="q2" rows="3" required maxlength="3000"
                    placeholder="Why Lum, and why right now?"></textarea>
        </div>

        <!-- QUESTION 3 -->
        <div class="ub-lum-qcard">
          <div class="ub-lum-qtop">
            <span class="ub-lum-qnum">QUESTION 03 / 05</span>
            <span class="ub-lum-qtag">VISUAL ARTIST &rarr; MATH MAGICIAN (WITH BOB)</span>
          </div>
          <label class="ub-lum-qlabel" for="ub-lum-q3">
            Why do you want this $10,000 haircut by the co-founder of United Beats &mdash; who is a visual artist all the way to a math magician with his friend Bob? <span class="ub-req">*</span>
          </label>
          <p class="ub-lum-qhint">
            Lum operates across the entire spectrum from visual art and sacred proportion to mathematical magic alongside his friend and co-founder Bob. What pulls you into this exact creative and intellectual frequency?
          </p>
          <textarea id="ub-lum-q3" name="q3" rows="3" required maxlength="3000"
                    placeholder="What draws you to the convergence of visual art, mathematical magic, and the United Beats universe built by Lum &amp; Bob?"></textarea>
        </div>

        <!-- QUESTION 4 -->
        <div class="ub-lum-qcard">
          <div class="ub-lum-qtop">
            <span class="ub-lum-qnum">QUESTION 04 / 05</span>
            <span class="ub-lum-qtag">LIFE-CHANGING EXPERIENCE &amp; REAL HELP</span>
          </div>
          <label class="ub-lum-qlabel" for="ub-lum-q4">
            This is an experience on top of a haircut &mdash; a life-changing experience. What real weight, blind spot, or crossroads do you genuinely need help cutting through? <span class="ub-req">*</span>
          </label>
          <p class="ub-lum-qhint">
            At extreme wealth or fame, almost everyone in your orbit has an agenda. Where do you actually need real help, unvarnished perspective, or personal transformation before you rise from Lum&rsquo;s chair?
          </p>
          <textarea id="ub-lum-q4" name="q4" rows="3" required maxlength="3000"
                    placeholder="Drop the armor. What actually needs to change when you stand up from this chair?"></textarea>
        </div>

        <!-- QUESTION 5 -->
        <div class="ub-lum-qcard">
          <div class="ub-lum-qtop">
            <span class="ub-lum-qnum">QUESTION 05 / 05</span>
            <span class="ub-lum-qtag">ZERO EXPENSE PROBLEMS &amp; EXECUTION</span>
          </div>
          <label class="ub-lum-qlabel" for="ub-lum-q5">
            Confirm effortless $10,000 readiness (&ldquo;no expense problems&rdquo;) and immediate capability &mdash; where are you in the world, what is your window, and can you execute immediately upon Lum&rsquo;s &ldquo;yes&rdquo;? <span class="ub-req">*</span>
          </label>
          <p class="ub-lum-qhint">
            This chair is strictly for someone for whom $10,000.00 USD for a haircut is zero financial strain and who does not need permission to move. State your city, dates, and immediate settlement readiness.
          </p>
          <textarea id="ub-lum-q5" name="q5" rows="3" required maxlength="3000"
                    placeholder="Confirm zero financial friction on $10,000.00 USD, your current location, target window, and immediate readiness..."></textarea>
        </div>
      </div>

      <!-- Honeypot -->
      <div class="ub-lum-hp" aria-hidden="true">
        <label for="ub-lum-website-hp">Leave this field blank</label>
        <input type="text" id="ub-lum-website-hp" name="ub_website_hp" tabindex="-1" autocomplete="off" />
      </div>

      <label class="ub-lum-attestation" for="ub-lum-attest">
        <input type="checkbox" id="ub-lum-attest" name="no_expense_attestation" value="1" required />
        <span>
          <strong>Sovereign Principal Attestation:</strong> I confirm that <strong>$10,000.00 USD</strong> presents
          <em>zero expense problems</em> for me, I have full authority to execute immediately without committee approval,
          and I am submitting these five answers for Lum&rsquo;s personal review and official $10,000.00 commission invoice.
        </span>
      </label>

      <div class="ub-lum-form-actions">
        <button type="submit" class="ub-lum-submit-btn" id="ub-lum-submit-btn">
          <span>SUBMIT 5-QUESTION DOSSIER &amp; ISSUE $10,000.00 INVOICE</span>
        </button>
        <div class="ub-lum-feedback" id="ub-lum-feedback" role="status" aria-live="polite"></div>
      </div>
    </form>

    <!-- RIGHT COLUMN: OFFICIAL $10,000.00 USD PRIVATE COMMISSION INVOICE LEDGER -->
    <aside class="ub-lum-invoice-wrap" aria-label="United Beats $10,000 Haircut Private Commission Invoice">
      <div class="ub-lum-invoice" id="ub-lum-invoice-card">
        <div class="ub-lum-inv-ribbon" aria-hidden="true"></div>

        <div class="ub-lum-inv-head">
          <div>
            <div class="ub-lum-inv-issuer">UNITED BEATS LLC // PRIVATE COMMISSION</div>
            <div class="ub-lum-inv-docname">$10,000.00 CHAIR INVOICE</div>
          </div>
          <div class="ub-lum-inv-status-col">
            <span class="ub-lum-inv-badge" id="ub-inv-status">PRO-FORMA &middot; UNISSUED</span>
            <span class="ub-lum-inv-ref" id="ub-inv-number">REF // LUM-10K-PENDING</span>
          </div>
        </div>

        <div class="ub-lum-inv-meta-grid">
          <div class="ub-lum-inv-meta-box">
            <span class="ub-lum-inv-k">ISSUED BY</span>
            <strong>Lum &mdash; Co-Founder, United Beats</strong>
            <span>Visual Artist &rarr; Math Magician (with Bob)</span>
            <span>Detroit Sanctuary &middot; Global Dispatch</span>
          </div>
          <div class="ub-lum-inv-meta-box">
            <span class="ub-lum-inv-k">BILLED TO (PRINCIPAL / CELEBRITY)</span>
            <strong id="ub-inv-billto">Awaiting Principal Identity</strong>
            <span id="ub-inv-entity">Private Sovereign / Family Office</span>
            <span id="ub-inv-contact">Direct channel pending</span>
          </div>
        </div>

        <div class="ub-lum-inv-bar">
          <div>
            <span class="ub-lum-inv-k">DATE</span>
            <strong id="ub-inv-date"><?php echo esc_html(gmdate('Y-m-d')); ?> UTC</strong>
          </div>
          <div>
            <span class="ub-lum-inv-k">DOSSIER</span>
            <strong id="ub-inv-qcount">0 / 5 Answered</strong>
          </div>
          <div>
            <span class="ub-lum-inv-k">TERMS</span>
            <strong>Due on Acceptance</strong>
          </div>
        </div>

        <table class="ub-lum-inv-table" aria-label="Itemized $10,000 Haircut Commission">
          <thead>
            <tr>
              <th>Line / Description</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <strong>01 &middot; The $10,000 Haircut by Lum</strong>
                <span class="ub-lum-inv-sub">
                  1-of-1 Sculptural Haircut by Co-Founder of United Beats &mdash; Visual Artist to Math Magician
                </span>
              </td>
              <td class="ub-lum-inv-amt">$10,000.00</td>
            </tr>
            <tr>
              <td>
                <strong>02 &middot; The Life-Changing Chair Experience</strong>
                <span class="ub-lum-inv-sub">
                  Private Uncensored Counsel, Harmonic Proportion &amp; Personal Crossroads Recalibration (Lum &amp; Bob Frequency)
                </span>
              </td>
              <td class="ub-lum-inv-amt ub-lum-inv-inc">INCLUDED</td>
            </tr>
            <tr>
              <td>
                <strong>03 &middot; Modality &amp; Logistics</strong>
                <span class="ub-lum-inv-sub" id="ub-inv-modality">
                  United Beats Sanctuary &mdash; Detroit Private Arrival (Included)
                </span>
              </td>
              <td class="ub-lum-inv-amt ub-lum-inv-inc" id="ub-inv-logistics-amt">$0.00</td>
            </tr>
          </tbody>
        </table>

        <div class="ub-lum-inv-rail-box">
          <span class="ub-lum-inv-k">DESIGNATED SETTLEMENT RAIL</span>
          <strong id="ub-inv-rail">Same-Day Wire (Fedwire / SWIFT) &mdash; $10,000.00 USD</strong>
        </div>

        <div class="ub-lum-inv-total-box">
          <div class="ub-lum-inv-total-row">
            <span>TOTAL SOVEREIGN RETAINER</span>
            <strong class="ub-lum-inv-grand">$10,000.00 <span>USD</span></strong>
          </div>
          <p class="ub-lum-inv-fineprint">
            Fixed non-negotiable commission for principals with zero expense friction. Settlement wire/rail coordinates
            are counter-signed and released personally upon Lum&rsquo;s acceptance of your 5-question qualification dossier.
          </p>
        </div>

        <!-- Print-only summary of submitted Q1-Q5 so printed PDF includes full dossier + invoice -->
        <div class="ub-lum-print-dossier" id="ub-lum-print-dossier">
          <div class="ub-lum-inv-k">ATTACHED 5-QUESTION QUALIFICATION DOSSIER SUMMARY</div>
          <div id="ub-lum-print-qlist"></div>
        </div>

        <div class="ub-lum-inv-issued-panel" id="ub-lum-issued-panel" hidden>
          <div class="ub-lum-issued-title">OFFICIAL INVOICE LOGGED &amp; DISPATCHED TO LUM</div>
          <p id="ub-lum-issued-msg">
            Your qualification dossier and $10,000.00 USD commission invoice have been recorded for co-founder review.
          </p>
        </div>

        <div class="ub-lum-inv-actions">
          <button type="button" class="ub-lum-btn-secondary" id="ub-lum-print-btn">
            Print / Save $10,000 PDF Invoice
          </button>
          <button type="button" class="ub-lum-btn-ghost" id="ub-lum-copy-btn">
            Copy Invoice Ref
          </button>
        </div>
      </div>
    </aside>
  </div>
</section>
