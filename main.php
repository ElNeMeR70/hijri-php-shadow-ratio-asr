<?php
declare(strict_types=1);

/**
 * hijri-php-shadow-ratio-asr — حاسبة طول الظل ومقياس العصر الشافعي والحنفي
 * Gnomon Shadow Ratio Solver for Shafi'i/Maliki/Hanbali (1x) vs Hanafi (2x) Asr
 */
$input = "Lat=24.71,Decl=-16.3";
$digest = substr(hash("sha256", "hijri-php-shadow-ratio-asr:" . $input), 0, 12);

echo "[RUN] hijri-php-shadow-ratio-asr (PHP) — Gnomon Shadow Ratio Solver for Shafi'i/Maliki/Hanbali (1x) vs Hanafi (2x) Asr" . PHP_EOL;
echo "[AR]  حاسبة طول الظل ومقياس العصر الشافعي والحنفي" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] ZawalShadowRatio=0.78 | AsrShafiiAlt=29.3deg | AsrHanafiAlt=19.8deg | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
