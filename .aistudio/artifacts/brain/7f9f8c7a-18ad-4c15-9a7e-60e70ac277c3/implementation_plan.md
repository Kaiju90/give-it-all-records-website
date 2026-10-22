# Milestone C.006: Expanded 11-Asset Crypto Terminal Matrix (Staged in Memory)

- **Release Stamp**: COMPILED REV: C.006 (Snapshot: src/App.tsx.backup_C014)
- **Status**: Live in preview and verified.
- **Core Architecture**: 3-Tab Category Navigation (`STABLECOINS`, `NATIVE COINS`, `PRIVACY / CULTURE`) supporting 11 payment rails.

---

## 1. Expanded 11-Asset Multi-Network Matrix

| Asset / Rail | Category | Role / Fee Profile | Staging Placeholder Address |
| :--- | :--- | :--- | :--- |
| **USDT (TRC20)** | Stablecoin | Primary default (~$1.00 fee) | `T_GIAR_TEST_TRC20_STAGING_WALLET_HEX_99` |
| **USDC (Polygon)** | Stablecoin | Sub-penny (<$0.05 fee) | `0xGIAR_TEST_POLYGON_STAGING_WALLET_44` |
| **USDC (Solana)** | Stablecoin | Instant sub-cent (<$0.001) | `SolGiarTestSplUsdcStagingAddress11111111` |
| **USDT (BEP-20)** | Stablecoin | Low Binance fee (~$0.08) | `0xGIAR_TEST_BEP20_STAGING_WALLET_55` |
| **USDT/C (ERC20)** | Stablecoin | Legacy fallback `[ HIGH GAS ]` | `0xGIAR_TEST_ERC20_STAGING_WALLET_01` |
| **SOL (Solana)** | Native | Mobile web3 native | `SolGiarTestNativeSolStagingAddress222222` |
| **BTC (Bitcoin)** | Native | SegWit satoshis | `bc1q_giar_test_segwit_staging_wallet_88` |
| **ETH (Ethereum)** | Native | Web3 audio collector | `0xGIAR_TEST_ETH_STAGING_WALLET_02` |
| **LTC (Litecoin)** | Native | Low-fee legacy (~$0.02) | `ltc1q_giar_test_staging_wallet_33` |
| **XMR (Monero)** | Privacy | Untraceable stealth address | `888tE_giar_test_xmr_staging_address_77` |
| **DOGE (Dogecoin)** | Culture | Microtransactions (~$0.05) | `D_GIAR_TEST_DOGE_STAGING_WALLET_66` |

---

## 2. 3-Tab Terminal Architecture & UX Flow

1. **Category Filter Tabs**:
   - `[ 01. STABLECOINS ]` (5 assets): USDT (TRC20), USDC (Polygon), USDC (Solana), USDT (BEP-20), ERC-20 [HIGH GAS]
   - `[ 02. NATIVE COINS ]` (4 assets): SOL (Solana), BTC (Bitcoin), ETH (Ethereum), LTC (Litecoin)
   - `[ 03. PRIVACY / CULTURE ]` (2 assets): XMR (Monero), DOGE (Dogecoin)
2. **Instant Asset Switching**:
   - Dynamic rate calculation per asset (1:1 for USD stablecoins, live satoshis/wei/lamports/litoshiblocks for native/culture).
   - Recipient address and procedural SVG QR code regenerate immediately upon selection.
3. **One-Click Keypad & Verification**:
   - `[ COPY ADDRESS ]` and `[ COPY AMOUNT ]` with tactile visual feedback.
   - Multi-format TxID validator (Base58 for Solana, 64-hex for TRC20/BTC/LTC/DOGE/XMR, 66-hex 0x for EVM/BEP20).
   - Cloudflare R2 direct download link release for 24-bit / 48kHz WAV audio files.

---

## 3. Pre-Build Verification Checklist

- [x] Alternating two-tone storefront cadence (Profile A / Profile B) locked.
- [x] Snapshot `src/App.tsx.backup_C014` created before compilation.
- [x] Compiled and deployed the 3-tab 11-asset terminal in preview.
- [x] Linter and TypeScript compiler verified with zero errors.

---

# Milestone C.007: UI & Copy Refinements (Live & Compiled)

- **Release Stamp**: COMPILED REV: C.007 (Snapshot: src/App.tsx.backup_C015)
- **Status**: Live in preview and verified.

### Deployed Items:
1. **Crypto Terminal Verification Button**:
   - Updated submit trigger to exact brutalist copy: `[ VERIFY TRANSACTION & UNLOCK 24-BIT MASTER VAULT ]`.
   - Reinforces immediate access to pristine studio-grade 24-bit audio upon on-chain verification.

2. **Custom Production / Scoring Contact Banner (`div#about-section`)**:
   - Replaced agency jargon with Recommendation B copy:
     *"Want me to produce music for you, rearrange a song from the catalog, or build a custom track for your film or game? Let's talk:"*
   - Direct brutalist action button: `[ LET'S TALK // DROP ME A LINE ↗ ]`.
   - Pre-fills email link to `contact@giveitallrecords.com` with subject: `CUSTOM MUSIC PRODUCTION / SCORING INQUIRY`.

3. **Pre-Build Verification**:
   - [x] Snapshot `src/App.tsx.backup_C015` created before compilation.
   - [x] Alternating two-tone cadence (Profile A / Profile B) locked.
   - [x] Structural modules (oscilloscope, player bar, catalog accordion, R2 audio engine) remain untouched.
   - [x] TypeScript compiler and linter verified with zero errors.

---

# Milestone C.008: Centralized Version Constant & Live Build Status Box (Live & Compiled)

- **Release Stamp**: COMPILED REV: C.008 (Snapshot: src/App.tsx.backup_C016)
- **Status**: Live in preview and verified.

### Deployed Features:
1. **Centralized Revision Source of Truth**:
   - `CURRENT_BUILD_REVISION = 'REV: C.008'` bound directly to:
     - Top header hardware badge (`header > div > div > span`)
     - Return to Top button ascend badge (`ASCEND // REV: C.008`)
     - Dedicated bottom Live System Status Box
   - Ensures visual release tags across the entire interface remain 100% synchronized automatically.

2. **Dedicated Live Build & System Status Box**:
   - Restored right below the Return to Top button above the footer.
   - Left Indicator: Glowing white phosphor pulse beacon + `LIVE SYSTEM STATUS: [ REV: C.008 ] // ACTIVE DEPLOYMENT`.
   - Right Indicator: Active restore snapshot tag (`RESTORE SNAPSHOT: src/App.tsx.backup_C016`) + `11-ASSET CRYPTO TERMINAL ONLINE`.

3. **Pre-Build Verification**:
   - [x] Snapshot `src/App.tsx.backup_C016` created before compilation.
   - [x] Alternating two-tone cadence (Profile A / Profile B) locked.
   - [x] Structural modules (oscilloscope, player bar, catalog accordion, R2 audio engine) remain untouched.
   - [x] TypeScript compiler and linter verified with zero errors.

---

# Milestone C.009: Synthesized Studio Production & Scoring Copy (Live & Compiled)

- **Release Stamp**: COMPILED REV: C.009 (Snapshot: src/App.tsx.backup_C018)
- **Status**: Live in preview and verified.

### Deployed Items:
1. **Synthesized Studio Production Copy (`div#about-section`)**:
   - Exact approved phrasing:
     *"Want me to produce your next song, produce your rough tracks or demos into finished songs, or score music for your films, games, art installations & creative projects? I also build custom edits of anything in this catalog. Let's talk:"*
   - Brutalist Action Button: `[ LET'S TALK // DROP ME A LINE ↗ ]`
   - Destination: `mailto:contact@giveitallrecords.com?subject=CUSTOM%20MUSIC%20PRODUCTION%20/%20SCORING%20INQUIRY`

2. **Centralized Version Synchronization**:
   - `CURRENT_BUILD_REVISION = 'REV: C.009'` active across:
     - Top header system badge
     - Return-to-top ascend badge
     - Dedicated bottom Live System Status Box
   - Snapshot archive locked at `src/App.tsx.backup_C018`.

3. **Pre-Build Verification**:
   - [x] Snapshot `src/App.tsx.backup_C018` created before compilation.
   - [x] Alternating two-tone cadence (Profile A / Profile B) locked.
   - [x] Structural modules (oscilloscope, player bar, catalog accordion, R2 audio engine, 11-asset crypto matrix) remain untouched.
   - [x] TypeScript compiler, linter, and production build verified with zero errors.

---

# Milestone C.010: Return to Top Cleanup & Status Box Removal (Live & Compiled)

- **Release Stamp**: COMPILED REV: C.010 (Snapshot: src/App.tsx.backup_C019)
- **Status**: Live in preview and verified.

### Deployed Items:
1. **Return to Top Button Center Badge (`section#licensing-section > div:nth-of-type(3) > button > div > div:nth-of-type(2) > span:nth-of-type(2)`)**:
   - Stripped the revision tag `// {CURRENT_BUILD_REVISION}`.
   - Cleanly displays the minimal brutalist label: `ASCEND`.

2. **Second Status Box Removal (`section#licensing-section > div:nth-of-type(4)`)**:
   - Erased the dedicated Live System Status & Archive Box in its entirety.
   - Restored seamless page flow from the Return to Top button directly into the global footer.

3. **Pre-Build Verification**:
   - [x] Snapshot `src/App.tsx.backup_C019` created before compilation.
   - [x] Top header system badge remains synchronized on REV: C.010.
   - [x] Structural modules (oscilloscope, player bar, catalog accordion, R2 audio engine, 11-asset crypto matrix) remain untouched.
   - [x] TypeScript compiler, linter, and production build verified with zero errors.

---

# Milestone C.011: Licensing Accordion & Return to Top Refinement (Live & Compiled)

- **Release Stamp**: COMPILED REV: C.011 (Snapshot: src/App.tsx.backup_C020)
- **Status**: Live in preview and verified.

### Deployed Items:
1. **Licensing Accordion Trigger Header (`section#licensing-section > div:nth-of-type(1) > button`)**:
   - Collapsed state title: `VIEW PERPETUAL COMMERCIAL SYNC LICENSE & USAGE TERMS`.
   - Expanded state title: `PERPETUAL COMMERCIAL SYNC LICENSE & USAGE TERMS`.
   - Stripped redundant duplicate `[ + ]` from the inner title label.
   - Preserved far-left square keycap toggle `[+]` / `[−]`.
   - Preserved right-hand action badge (`CLICK TO EXPAND` / `COLLAPSE TERMS`) and directional chevron arrow.

2. **Return to Top Keycap Streamlining (`section#licensing-section > div:nth-of-type(3) > button`)**:
   - Removed the extra inner arrow keycaps from both the left and right wings.
   - Symmetrically displays a single tactile keycap `[ ↑ ]` on the left and a single tactile keycap `[ ↑ ]` on the right flanking the `RETURN TO TOP // ASCEND` label.

3. **Pre-Build Verification**:
   - [x] Snapshot `src/App.tsx.backup_C020` created before compilation.
   - [x] Top header system badge synchronized to `REV: C.011`.
   - [x] Structural modules (oscilloscope, player bar, catalog accordion, R2 audio engine, 11-asset crypto matrix) remain untouched.
   - [x] TypeScript compiler, linter, and production Vite build verified with zero errors.

---

# Milestone C.012: Licensing Header Subtitle Clearance (Live & Compiled)

- **Release Stamp**: COMPILED REV: C.012 (Snapshot: src/App.tsx.backup_C021)
- **Status**: Live in preview and verified.

### Deployed Items:
1. **Licensing Trigger Subtitle Clearance (`section#licensing-section > div:nth-of-type(1) > button > div > div > div:nth-of-type(2)`)**:
   - Removed the 3 subtitle items (`100% DIRECT RIGHTS`, `NEVER CONTENT-ID FLAGGED`, `PERPETUAL WORLDWIDE SYNC`) and their separator bullets.
   - The trigger button now cleanly presents:
     - Far-left square keycap toggle: `[+]` / `[−]`
     - Direct title: `VIEW PERPETUAL COMMERCIAL SYNC LICENSE & USAGE TERMS` (when collapsed) / `PERPETUAL COMMERCIAL SYNC LICENSE & USAGE TERMS` (when expanded)
     - Far-right action indicator: `CLICK TO EXPAND` / `COLLAPSE TERMS` badge and directional chevron arrow.

2. **Pre-Build Verification**:
   - [x] Snapshot `src/App.tsx.backup_C021` created before compilation.
   - [x] Top header system badge synchronized to `REV: C.012`.
   - [x] Structural modules (oscilloscope, player bar, catalog accordion, R2 audio engine, 11-asset crypto matrix) remain untouched.
   - [x] TypeScript compiler, linter, and production Vite build verified with zero errors.

---

# Master Reference Document Registry

- **Master Plan Title**: `Give It All Records - Master Deployment Plan A to Z (All-WAV Updated)`
- **Function**: Authoritative master deployment specification and nuance tracker for the entire Give It All Records platform.
- **Protocol**: Every architectural nuance, feature definition, workflow rule, asset spec, and milestone track is mapped and preserved against this plan to prevent any details, states, or requirements from dropping across iterations.

---

# Milestone C.013: Main Audio Monitor Element Clearance (Live & Compiled)

- **Release Stamp**: COMPILED REV: C.013 (Snapshot: src/App.tsx.backup_C022)
- **Status**: Live in preview and verified.

### Deployed Items:
1. **Live Audio Monitor Sub-Label Clearance (`section#main-audio-monitor > div:nth-of-type(1) > div:nth-of-type(1) > span:nth-of-type(3)`)**:
   - Erased the sub-header label: `| 24-BIT / 48KHZ WAV AUDITION`.
   - The monitor top-bar now cleanly displays the live signal indicator LED, `LIVE AUDIO MONITORING`, status badge (`LIVE: [CAT_ID]` or `IDLE / READY`), and detected BPM grid.

2. **Live Audio Monitor Metadata Panel Tag Clearance (`section#main-audio-monitor > div:nth-of-type(2) > div:nth-of-type(2) > div:nth-of-type(3)`)**:
   - Completely erased the bottom metadata divider box containing `100% OWNED BY LUCIANO LUPINI` and genre tag.
   - Preserved source bank display, track duration/BPM, and uppercase track title with zero layout shift or regression to the oscilloscope canvas or transport buttons.

3. **Pre-Build Verification**:
   - [x] Snapshot `src/App.tsx.backup_C022` created and locked prior to compilation.
   - [x] Top header system badge synchronized to `REV: C.013`.
   - [x] Structural modules (oscilloscope canvas, player bar, catalog accordion, R2 audio engine, 11-asset crypto matrix) remain strictly untouched.
   - [x] TypeScript compiler and linter verified with zero errors.

---

# Milestone C.014: Crate HUD Notification Subtle Fade & Timing Refinement (Live & Compiled)

- **Release Stamp**: COMPILED REV: C.014 (Snapshot: src/App.tsx.backup_C023)
- **Status**: Live in preview and verified.

### Deployed Items:
1. **Subtle Fade Transition (Zero Bouncing / Spring Physics)**:
   - Permanently eliminated `animate-bounce`, spring physics, position sliding, and vertical motion from the floating crate toast (`aside[aria-label="Crate notification"]`).
   - The HUD notification stays in a fixed position at the bottom-right corner (`bottom-14 sm:bottom-16 right-3 sm:right-6`).
   - Applied a minimal 150ms linear opacity fade (`transition-opacity duration-150 ease-linear`) between `opacity-100` and `opacity-0`.

2. **Display Timing & Instant Reset**:
   - Extended notification visibility to exactly 6.0 seconds before starting the 150ms fade-out.
   - Any prior timeouts are cleared and reset whenever another song is added to or removed from the crate, so the full 6-second window resets cleanly on rapid interactions.
   - Allows instant dismissal when clicking the `[X]` button or proceeding to `[VIEW CRATE ↗]`.

3. **Zero Layout Shift & Brutalist Dark Styling**:
   - Preserves stable browser scrollbars with zero document body overflow toggling.
   - Retains the brutalist `#050505` dark background, stark 2px white borders, and Space Mono typography.

4. **Pre-Build Verification**:
   - [x] Snapshot `src/App.tsx.backup_C023` created and locked prior to compilation.
   - [x] Top header system badge synchronized to `REV: C.014`.
   - [x] Adjacent audio synthesis, playback chassis, catalog grid, and 11-asset crypto matrix remain strictly untouched.
   - [x] TypeScript compiler, linter, and production Vite build verified with zero errors.
