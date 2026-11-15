<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(['primary' => 'Primary']);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'unitedbeats-lumbros-fonts',
        'https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    if (is_front_page()) {
        wp_enqueue_style(
            'unitedbeats-soul-fonts-1',
            'https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Manrope:wght@600&family=Space+Grotesk:wght@600&family=Plus+Jakarta+Sans:wght@600&family=Outfit:wght@600&family=Sora:wght@600&family=DM+Sans:wght@600&family=Urbanist:wght@600&family=Rubik:wght@600&family=Work+Sans:wght@600&family=Nunito:wght@700&family=Quicksand:wght@600&family=Cabin:wght@600&family=Karla:wght@600&family=Mulish:wght@600&family=Figtree:wght@600&family=Lexend:wght@600&family=Red+Hat+Display:wght@600&family=Exo+2:wght@600&family=Chakra+Petch:wght@600&family=Rajdhani:wght@600&family=Orbitron:wght@600&family=Oxanium:wght@600&family=Syne:wght@600&family=Josefin+Sans:wght@600&family=Montserrat:wght@600&family=Raleway:wght@600&display=swap',
            [],
            null
        );
        wp_enqueue_style(
            'unitedbeats-soul-fonts-2',
            'https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Kanit:wght@600&family=Barlow:wght@600&family=Archivo:wght@600&family=Comfortaa:wght@600&family=Fredoka:wght@600&family=Varela+Round&family=Questrial&family=Public+Sans:wght@600&family=Playfair+Display:wght@600&family=Merriweather:wght@700&family=Lora:wght@600&family=Libre+Baskerville:wght@700&family=Crimson+Pro:wght@600&family=Spectral:wght@600&family=Cormorant+Garamond:wght@600&family=Bitter:wght@600&family=Arvo:wght@700&family=Zilla+Slab:wght@600&family=Roboto+Slab:wght@600&family=Domine:wght@600&family=Vollkorn:wght@600&family=EB+Garamond:wght@600&family=Fraunces:wght@600&family=Bree+Serif&family=Alegreya:wght@600&family=PT+Serif:wght@700&display=swap',
            [],
            null
        );
        wp_enqueue_style(
            'unitedbeats-soul-fonts-3',
            'https://fonts.googleapis.com/css2?family=Noto+Serif:wght@600&family=Cinzel:wght@600&family=Philosopher:wght@700&family=Marcellus&family=Prata&family=DM+Serif+Display&family=Crete+Round&family=Cardo:wght@700&family=Literata:wght@600&family=Newsreader:wght@600&family=Titillium+Web:wght@600&family=Maven+Pro:wght@600&family=Signika:wght@600&family=Asap:wght@600&family=Atkinson+Hyperlegible:wght@700&family=Righteous&family=Audiowide&family=Fira+Code:wght@600&family=JetBrains+Mono:wght@600&family=Space+Mono:wght@700&family=IBM+Plex+Mono:wght@600&family=Source+Code+Pro:wght@600&family=Ubuntu+Mono:wght@700&family=Inconsolata:wght@600&family=Courier+Prime:wght@700&family=Share+Tech+Mono&family=IBM+Plex+Sans:wght@600&family=Libre+Franklin:wght@600&family=DM+Mono:wght@500&family=Merriweather+Sans:wght@600&display=swap',
            [],
            null
        );
    }

    $css_path = get_stylesheet_directory() . '/style.css';
    wp_enqueue_style(
        'unitedbeats-style',
        get_stylesheet_uri(),
        ['unitedbeats-lumbros-fonts'],
        file_exists($css_path) ? (string) filemtime($css_path) : '1.6.0'
    );
});

/* === UB LUM 10K COMMISSION === */
add_action('init', function () {
    register_post_type('ub_lum_invoice', [
        'labels' => [
            'name'          => 'Lum $10K Invoices',
            'singular_name' => 'Lum $10K Invoice',
            'menu_name'     => 'Lum $10K Chair',
            'all_items'     => 'All $10K Dossiers',
        ],
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-money-alt',
        'capability_type'     => 'post',
        'supports'            => ['title', 'editor', 'custom-fields'],
        'exclude_from_search' => true,
    ]);
});

add_filter('manage_ub_lum_invoice_posts_columns', function ($cols) {
    return [
        'cb'        => $cols['cb'] ?? '',
        'title'     => 'Invoice & Principal',
        'ub_email'  => 'Direct Dispatch',
        'ub_signal' => 'Signal / Line',
        'ub_rail'   => 'Settlement Rail',
        'ub_amount' => 'Retainer',
        'date'      => 'Submitted',
    ];
});

add_action('manage_ub_lum_invoice_posts_custom_column', function ($col, $post_id) {
    if ($col === 'ub_email') {
        echo esc_html((string) get_post_meta($post_id, '_ub_principal_email', true));
    } elseif ($col === 'ub_signal') {
        echo esc_html((string) get_post_meta($post_id, '_ub_principal_signal', true));
    } elseif ($col === 'ub_rail') {
        echo esc_html((string) get_post_meta($post_id, '_ub_rail', true));
    } elseif ($col === 'ub_amount') {
        echo '<strong>$10,000.00 USD</strong>';
    }
}, 10, 2);

add_shortcode('ub_lum_commission', function () {
    $tpl = get_stylesheet_directory() . '/lum-commission.php';
    if (!file_exists($tpl)) {
        return '';
    }
    ob_start();
    include $tpl;
    return ob_get_clean();
});

add_action('rest_api_init', function () {
    register_rest_route('unitedbeats/v1', '/lum-invoice', [
        'methods'             => 'POST',
        'permission_callback' => '__return_true',
        'callback'            => function (\WP_REST_Request $req) {
            $params = $req->get_json_params();
            if (!is_array($params) || empty($params)) {
                $params = $req->get_params();
            }

            // Honeypot check
            if (!empty($params['ub_website_hp'])) {
                return new \WP_REST_Response(['ok' => true, 'invoice_number' => 'INV-LUM-FILTERED'], 200);
            }

            // Per-IP rate limit (max 8 submissions per 15 minutes)
            $ip = isset($_SERVER['REMOTE_ADDR']) ? sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'])) : '0.0.0.0';
            $rl_key = 'ub_lum_rl_' . substr(md5($ip), 0, 16);
            $hits = (int) get_transient($rl_key);
            if ($hits >= 8) {
                return new \WP_REST_Response([
                    'ok'      => false,
                    'message' => 'Dispatch rate limit reached. Please wait a few minutes or contact United Beats directly.',
                ], 429);
            }

            $name     = sanitize_text_field($params['principal_name'] ?? '');
            $entity   = sanitize_text_field($params['principal_entity'] ?? '');
            $email    = sanitize_email($params['principal_email'] ?? '');
            $signal   = sanitize_text_field($params['principal_signal'] ?? '');
            $modality = sanitize_text_field($params['session_modality'] ?? 'United Beats Sanctuary — Detroit Private Arrival');
            $rail     = sanitize_text_field($params['settlement_rail'] ?? 'Same-Day Wire — $10,000.00 USD');
            $attest   = !empty($params['no_expense_attestation']);

            $q1 = sanitize_textarea_field($params['q1'] ?? '');
            $q2 = sanitize_textarea_field($params['q2'] ?? '');
            $q3 = sanitize_textarea_field($params['q3'] ?? '');
            $q4 = sanitize_textarea_field($params['q4'] ?? '');
            $q5 = sanitize_textarea_field($params['q5'] ?? '');

            if (mb_strlen($name) < 2) {
                return new \WP_REST_Response(['ok' => false, 'message' => 'Please enter Principal / Celebrity Name.'], 400);
            }
            if (!is_email($email)) {
                return new \WP_REST_Response(['ok' => false, 'message' => 'Please provide a valid direct or Chief-of-Staff email address.'], 400);
            }
            if (mb_strlen($signal) < 3) {
                return new \WP_REST_Response(['ok' => false, 'message' => 'Please provide a direct phone, Signal, or private contact line.'], 400);
            }
            foreach ([1 => $q1, 2 => $q2, 3 => $q3, 4 => $q4, 5 => $q5] as $idx => $ans) {
                if (mb_strlen(trim($ans)) < 6) {
                    return new \WP_REST_Response([
                        'ok'      => false,
                        'message' => sprintf('Question 0%d requires a candid, substantive response before an invoice can be issued.', $idx),
                    ], 400);
                }
            }
            if (!$attest) {
                return new \WP_REST_Response([
                    'ok'      => false,
                    'message' => 'You must confirm the Sovereign Principal Attestation ($10,000.00 USD with zero expense friction).',
                ], 400);
            }

            $seq = (int) get_option('ub_lum_invoice_seq', 1000) + 1;
            update_option('ub_lum_invoice_seq', $seq, false);
            $code = strtoupper(substr(bin2hex(random_bytes(2)), 0, 4));
            $inv_no = sprintf('INV-LUM-%s-%04d-%s', gmdate('Y'), $seq, $code);
            $issued_at = gmdate('Y-m-d H:i:s') . ' UTC';

            $dossier_body = implode("\n\n", [
                "UNITED BEATS LLC — $10,000.00 HAIRCUT & LIFE-CHANGING CHAIR COMMISSION BY LUM",
                "INVOICE NUMBER: {$inv_no}",
                "ISSUED AT: {$issued_at}",
                "RETAINER AMOUNT: $10,000.00 USD (Zero-Expense-Problem Attested)",
                "------------------------------------------------------------",
                "PRINCIPAL / CELEBRITY: {$name}",
                "ENTITY / FAMILY OFFICE: " . ($entity !== '' ? $entity : 'Personal / Unspecified'),
                "DIRECT EMAIL: {$email}",
                "DIRECT PHONE / SIGNAL: {$signal}",
                "MODALITY: {$modality}",
                "SETTLEMENT RAIL: {$rail}",
                "------------------------------------------------------------",
                "[Q1] Why are you qualified to get your haircut by Lum?\n{$q1}",
                "[Q2] Why do you want to get your haircut by Lum?\n{$q2}",
                "[Q3] Why do you want this $10,000 haircut by the co-founder of United Beats (visual artist to math magician with his friend Bob)?\n{$q3}",
                "[Q4] Life-changing experience on top of a haircut — what do you genuinely need help cutting through?\n{$q4}",
                "[Q5] Zero-expense-problems readiness, location & execution window:\n{$q5}",
            ]);

            $post_id = wp_insert_post([
                'post_type'    => 'ub_lum_invoice',
                'post_status'  => 'publish',
                'post_title'   => "{$inv_no} — {$name}" . ($entity !== '' ? " ({$entity})" : ''),
                'post_content' => $dossier_body,
                'meta_input'   => [
                    '_ub_invoice_number'   => $inv_no,
                    '_ub_issued_at'        => $issued_at,
                    '_ub_principal_name'   => $name,
                    '_ub_principal_entity' => $entity,
                    '_ub_principal_email'  => $email,
                    '_ub_principal_signal' => $signal,
                    '_ub_modality'         => $modality,
                    '_ub_rail'             => $rail,
                    '_ub_q1'               => $q1,
                    '_ub_q2'               => $q2,
                    '_ub_q3'               => $q3,
                    '_ub_q4'               => $q4,
                    '_ub_q5'               => $q5,
                    '_ub_amount'           => '10000.00',
                    '_ub_client_ip'        => $ip,
                ],
            ], true);

            if (is_wp_error($post_id)) {
                return new \WP_REST_Response([
                    'ok'      => false,
                    'message' => 'Could not record commission dossier. Please retry momentarily.',
                ], 500);
            }

            set_transient($rl_key, $hits + 1, 15 * MINUTE_IN_SECONDS);

            $admin_to = get_option('admin_email');
            if ($admin_to && is_email($admin_to)) {
                $subject = "[UnitedBeats $10K Chair] {$inv_no} — {$name}";
                $headers = ['Content-Type: text/plain; charset=UTF-8'];
                if (is_email($email)) {
                    $headers[] = "Reply-To: {$name} <{$email}>";
                }
                @wp_mail($admin_to, $subject, $dossier_body, $headers);
            }

            return new \WP_REST_Response([
                'ok'             => true,
                'invoice_number' => $inv_no,
                'issued_at'      => $issued_at,
                'amount'         => '$10,000.00 USD',
                'status'         => 'ISSUED · CO-FOUNDER REVIEW',
                'message'        => "Official Invoice {$inv_no} ($10,000.00 USD) generated and logged for Lum's personal review.",
            ], 200);
        },
    ]);
});

add_action('wp_footer', function () {
    if (empty($GLOBALS['ub_lum_rendered'])) {
        return;
    }
    $endpoint = esc_url_raw(rest_url('unitedbeats/v1/lum-invoice'));
    ?>
    <script id="ub-lum-commission-js">
    (function () {
      var endpoint = <?php echo wp_json_encode($endpoint); ?>;
      var navPill = document.getElementById('lumChairNavBtn');
      if (navPill) {
        navPill.addEventListener('click', function (ev) {
          var target = document.getElementById('lum-chair');
          if (target) {
            ev.preventDefault();
            ev.stopPropagation();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        });
      }

      var form = document.getElementById('ub-lum-form');
      if (!form) return;

      // Shield form keystrokes from hero canvas keyboard shortcuts
      form.addEventListener('keydown', function (ev) {
        ev.stopPropagation();
      });

      var elName = document.getElementById('ub-lum-name');
      var elEntity = document.getElementById('ub-lum-entity');
      var elEmail = document.getElementById('ub-lum-email');
      var elSignal = document.getElementById('ub-lum-signal');
      var elModality = document.getElementById('ub-lum-modality');
      var elRail = document.getElementById('ub-lum-rail');
      var elAttest = document.getElementById('ub-lum-attest');
      var qFields = [
        document.getElementById('ub-lum-q1'),
        document.getElementById('ub-lum-q2'),
        document.getElementById('ub-lum-q3'),
        document.getElementById('ub-lum-q4'),
        document.getElementById('ub-lum-q5')
      ];

      var invCard = document.getElementById('ub-lum-invoice-card');
      var invBillTo = document.getElementById('ub-inv-billto');
      var invEntity = document.getElementById('ub-inv-entity');
      var invContact = document.getElementById('ub-inv-contact');
      var invModality = document.getElementById('ub-inv-modality');
      var invLogisticsAmt = document.getElementById('ub-inv-logistics-amt');
      var invRail = document.getElementById('ub-inv-rail');
      var invQCount = document.getElementById('ub-inv-qcount');
      var progPill = document.getElementById('ub-lum-progress-pill');
      var invStatus = document.getElementById('ub-inv-status');
      var invNumber = document.getElementById('ub-inv-number');
      var invDate = document.getElementById('ub-inv-date');
      var issuedPanel = document.getElementById('ub-lum-issued-panel');
      var issuedMsg = document.getElementById('ub-lum-issued-msg');
      var feedback = document.getElementById('ub-lum-feedback');
      var submitBtn = document.getElementById('ub-lum-submit-btn');
      var printBtn = document.getElementById('ub-lum-print-btn');
      var copyBtn = document.getElementById('ub-lum-copy-btn');
      var printQList = document.getElementById('ub-lum-print-qlist');

      var qTitles = [
        'Q1 · Qualification for Lum',
        'Q2 · Why Lum Right Now',
        'Q3 · Visual Artist to Math Magician (with Bob)',
        'Q4 · Life-Changing Experience & Real Help Needed',
        'Q5 · Zero-Expense $10,000 Readiness & Window'
      ];

      function syncLedger() {
        var nm = elName && elName.value.trim() ? elName.value.trim() : 'Awaiting Principal Identity';
        var ent = elEntity && elEntity.value.trim() ? elEntity.value.trim() : 'Private Sovereign / Family Office';
        var em = elEmail && elEmail.value.trim() ? elEmail.value.trim() : '';
        var sg = elSignal && elSignal.value.trim() ? elSignal.value.trim() : '';
        var ct = [em, sg].filter(Boolean).join(' · ') || 'Direct channel pending';

        if (invBillTo) invBillTo.textContent = nm;
        if (invEntity) invEntity.textContent = ent;
        if (invContact) invContact.textContent = ct;

        if (elModality && invModality) {
          invModality.textContent = elModality.value;
          if (invLogisticsAmt) {
            invLogisticsAmt.textContent = elModality.value.indexOf('Global Fly-Out') !== -1 ? 'AT COST' : '$0.00';
          }
        }
        if (elRail && invRail) {
          invRail.textContent = elRail.value;
        }

        var answered = 0;
        var htmlParts = [];
        for (var i = 0; i < qFields.length; i++) {
          var v = qFields[i] && qFields[i].value ? qFields[i].value.trim() : '';
          if (v.length >= 6) answered++;
          if (v) {
            var safe = v.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
            htmlParts.push('<div class="ub-lum-print-qitem"><strong>' + qTitles[i] + ':</strong> ' + safe + '</div>');
          }
        }
        if (invQCount) invQCount.textContent = answered + ' / 5 Answered';
        if (progPill) progPill.textContent = answered + ' / 5 Questions Completed';
        if (printQList) printQList.innerHTML = htmlParts.join('');
      }

      form.addEventListener('input', syncLedger);
      form.addEventListener('change', syncLedger);
      syncLedger();

      if (printBtn) {
        printBtn.addEventListener('click', function () {
          syncLedger();
          window.print();
        });
      }

      if (copyBtn) {
        copyBtn.addEventListener('click', function () {
          var refText = (invNumber ? invNumber.textContent : 'INV-LUM-10K') + ' | United Beats $10,000.00 USD Chair by Lum';
          if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(refText).then(function () {
              var prev = copyBtn.textContent;
              copyBtn.textContent = 'Copied!';
              setTimeout(function () { copyBtn.textContent = prev; }, 1800);
            });
          }
        });
      }

      form.addEventListener('submit', function (ev) {
        ev.preventDefault();
        syncLedger();
        if (feedback) {
          feedback.className = 'ub-lum-feedback';
          feedback.textContent = '';
        }

        var payload = {
          principal_name: elName ? elName.value.trim() : '',
          principal_entity: elEntity ? elEntity.value.trim() : '',
          principal_email: elEmail ? elEmail.value.trim() : '',
          principal_signal: elSignal ? elSignal.value.trim() : '',
          session_modality: elModality ? elModality.value : '',
          settlement_rail: elRail ? elRail.value : '',
          no_expense_attestation: !!(elAttest && elAttest.checked),
          ub_website_hp: (document.getElementById('ub-lum-website-hp') || {}).value || '',
          q1: qFields[0] ? qFields[0].value.trim() : '',
          q2: qFields[1] ? qFields[1].value.trim() : '',
          q3: qFields[2] ? qFields[2].value.trim() : '',
          q4: qFields[3] ? qFields[3].value.trim() : '',
          q5: qFields[4] ? qFields[4].value.trim() : ''
        };

        if (submitBtn) {
          submitBtn.disabled = true;
          submitBtn.innerHTML = '<span>TRANSMITTING DOSSIER &amp; MINTING $10,000.00 INVOICE...</span>';
        }

        fetch(endpoint, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        })
          .then(function (r) { return r.json().then(function (d) { return { status: r.status, body: d }; }); })
          .then(function (res) {
            if (!res.body || !res.body.ok) {
              var msg = (res.body && res.body.message) ? res.body.message : 'Validation check failed. Please complete all 5 questions and principal fields.';
              if (feedback) {
                feedback.className = 'ub-lum-feedback is-error';
                feedback.textContent = msg;
              }
              return;
            }
            if (invCard) invCard.classList.add('is-issued');
            if (invStatus) invStatus.textContent = res.body.status || 'ISSUED · CO-FOUNDER REVIEW';
            if (invNumber) invNumber.textContent = res.body.invoice_number;
            if (invDate && res.body.issued_at) invDate.textContent = res.body.issued_at;
            if (issuedPanel) issuedPanel.hidden = false;
            if (issuedMsg) issuedMsg.textContent = res.body.message;
            if (feedback) {
              feedback.className = 'ub-lum-feedback is-ok';
              feedback.textContent = '✓ ' + res.body.message + ' Use "Print / Save $10,000 PDF Invoice" on the ledger to retain your copy.';
            }
            if (invCard && window.innerWidth < 960) {
              invCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
          })
          .catch(function () {
            if (feedback) {
              feedback.className = 'ub-lum-feedback is-error';
              feedback.textContent = 'Network interruption while issuing invoice. Please retry.';
            }
          })
          .finally(function () {
            if (submitBtn) {
              submitBtn.disabled = false;
              submitBtn.innerHTML = '<span>SUBMIT 5-QUESTION DOSSIER &amp; ISSUE $10,000.00 INVOICE</span>';
            }
          });
      });
    })();
    </script>
    <?php
}, 30);
