<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Family1st — #1 GPS Tracker in America</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;1,9..40,400&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --navy: #0A1628;
  --navy-mid: #111D35;
  --navy-light: #1A2744;
  --slate: #2A3A56;
  --blue: #2563EB;
  --blue-vivid: #1D4ED8;
  --blue-glow: #60A5FA;
  --cyan: #06B6D4;
  --teal: #14B8A6;
  --emerald: #10B981;
  --amber: #F59E0B;
  --purple: #7C3AED;
  --white: #FFFFFF;
  --gray-50: #F8FAFC;
  --gray-100: #F1F5F9;
  --gray-200: #E2E8F0;
  --gray-300: #CBD5E1;
  --gray-400: #94A3B8;
  --gray-500: #64748B;
  --gray-600: #475569;
  --gray-700: #334155;
  --gray-800: #1E293B;
  --gray-900: #0F172A;
  --blue-50: #EFF6FF;
  --blue-100: #DBEAFE;
  --blue-200: #BFDBFE;
  --purple-50: #F5F3FF;
  --purple-100: #EDE9FE;
  --green-50: #ECFDF5;
  --green-100: #D1FAE5;
  --amber-50: #FFFBEB;
  --font-display: 'Playfair Display', Georgia, serif;
  --font-body: 'DM Sans', -apple-system, sans-serif;
  --ease-out-expo: cubic-bezier(0.16, 1, 0.3, 1);
  --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);
  --w04: rgba(255,255,255,0.04);
  --w08: rgba(255,255,255,0.08);
  --w15: rgba(255,255,255,0.15);
  --w30: rgba(255,255,255,0.3);
  --w50: rgba(255,255,255,0.5);
  --w70: rgba(255,255,255,0.7);
  --w90: rgba(255,255,255,0.9);
}

html { scroll-behavior: smooth; }
body {
  font-family: var(--font-body);
  background: var(--white);
  color: var(--gray-900);
  min-height: 100vh;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}
body::before {
  content: '';
  position: fixed; inset: 0; z-index: 9999; pointer-events: none; opacity: 0.018;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  background-repeat: repeat; background-size: 256px;
}

/* === UTILITY === */
.gradient-text {
  background: linear-gradient(135deg, var(--blue) 0%, var(--cyan) 60%, var(--teal) 100%);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.gradient-text-dark {
  background: linear-gradient(135deg, var(--blue-glow) 0%, var(--cyan) 50%, var(--teal) 100%);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.section-eyebrow {
  font-size: 11px; font-weight: 700; letter-spacing: 4px; text-transform: uppercase;
  color: var(--blue); margin-bottom: 14px; display: flex; align-items: center; gap: 12px;
}
.section-eyebrow::before {
  content: ''; width: 32px; height: 1.5px;
  background: linear-gradient(90deg, var(--blue), transparent);
}
.section-heading {
  font-family: var(--font-display);
  font-size: clamp(34px, 4.5vw, 52px); font-weight: 700;
  line-height: 1.12; letter-spacing: -1px; color: var(--gray-900);
}

/* === ANIMATIONS === */
.reveal {
  opacity: 0; transform: translateY(36px);
  transition: opacity 0.7s var(--ease-out-expo), transform 0.7s var(--ease-out-expo);
}
.reveal.visible { opacity: 1; transform: translateY(0); }
.reveal-d1 { transition-delay: 0.1s; }
.reveal-d2 { transition-delay: 0.2s; }
.reveal-d3 { transition-delay: 0.3s; }
.reveal-d4 { transition-delay: 0.4s; }

@keyframes drift {
  0%, 100% { transform: translate(0,0); }
  33% { transform: translate(30px,-20px); }
  66% { transform: translate(-20px,30px); }
}
@keyframes pulse {
  0%,100% { opacity:1; box-shadow: 0 0 0 0 rgba(16,185,129,0.4); }
  50% { opacity:0.7; box-shadow: 0 0 0 8px rgba(16,185,129,0); }
}
@keyframes float {
  0%,100% { transform: translateY(0) rotate(-1deg); }
  50% { transform: translateY(-16px) rotate(1deg); }
}
@keyframes beacon {
  0% { transform: translate(-50%,-50%) scale(1); opacity: 0.6; }
  100% { transform: translate(-50%,-50%) scale(2.5); opacity: 0; }
}
@keyframes fbadge {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}
@keyframes mpop {
  from { opacity: 0; transform: scale(0.92) translateY(20px); }
  to { opacity: 1; transform: scale(1) translateY(0); }
}
@keyframes imgFloat {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-12px); }
}

/* ======================== NAVBAR ======================== */
.navbar {
  position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
  padding: 0 48px; height: 72px; display: flex; align-items: center; justify-content: space-between;
  transition: all 0.4s var(--ease-out-expo);background: white;
}
/* .navbar.scrolled {
  background: rgba(255,255,255,0.96); backdrop-filter: blur(20px) saturate(180%);
  box-shadow: 0 1px 24px rgba(0,0,0,0.06); border-bottom: 1px solid var(--gray-100);
}
.navbar.scrolled .nav-wordmark { color: var(--gray-900); }
.navbar.scrolled .nav-link { color: var(--gray-500); }
.navbar.scrolled .nav-link:hover { color: var(--blue); } */
.nav-brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
.nav-logo {
  width: 38px; height: 38px; border-radius: 10px;
  background: linear-gradient(135deg, var(--blue), var(--cyan));
  display: flex; align-items: center; justify-content: center;
  font-size: 14px; font-weight: 800; color: #fff; letter-spacing: -0.5px;
}
.nav-wordmark { font-size: 20px; font-weight: 700; /*color: #fff;*/ letter-spacing: -0.5px; transition: color 0.3s; }
.nav-wordmark span { color: var(--blue-glow); }
/* .navbar.scrolled .nav-wordmark span { color: var(--blue); } */
.nav-links { display: flex; align-items: center; gap: 36px; }
.nav-link {
  color: var(--gray-500); text-decoration: none; font-size: 14px; font-weight: 500;
  transition: color 0.3s; position: relative;
}
.nav-link:hover {
    color: var(--blue);
}
.nav-link::after {
  content: ''; position: absolute; bottom: -4px; left: 0; width: 0; height: 1.5px;
  background: var(--blue); transition: width 0.3s var(--ease-out-expo);
}
.nav-link:hover::after { width: 100%; }
.nav-cta {
  padding: 10px 24px; border-radius: 10px;
  background: linear-gradient(135deg, var(--blue), var(--cyan));
  color: #fff; font-size: 13px; font-weight: 600; border: none; cursor: pointer;
  transition: all 0.3s; font-family: var(--font-body); letter-spacing: 0.3px;
}
.nav-cta:hover { transform: translateY(-1px); box-shadow: 0 8px 28px rgba(37,99,235,0.3); }

/* ======================== HERO ======================== */
.hero {
  /*min-height: 100vh; display: flex; align-items: center; position: relative; overflow: hidden;
  background: #0a1628bd;
  background: black;*/

  height: calc(100vh - 72px);  /* full viewport minus navbar */
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
  background: black;
  margin-top: 65px;
}
.hero::before {
  content: ''; position: absolute; width: 800px; height: 800px; border-radius: 50%;
  background: radial-gradient(circle, rgba(59,130,246,0.12), transparent 70%);
  top: -200px; left: -200px; animation: drift 20s ease-in-out infinite;
}
.hero::after {
  content: ''; position: absolute; width: 600px; height: 600px; border-radius: 50%;
  background: radial-gradient(circle, rgba(6,182,212,0.08), transparent 70%);
  bottom: -100px; right: -100px; animation: drift 25s ease-in-out infinite reverse;
}
.hero-bg-video { position: absolute; inset:0px; overflow: hidden; z-index: 0;}
.hero-bg-video iframe {
  /* position: absolute; top: 50%; left: 50%; width: 200vw; height: 100vh;
  min-width: 200%; min-height: 200%; transform: translate(-50%,-50%);
  pointer-events: none; opacity: 0.5; */

  position: absolute;
  top: 50%;
  left: 50%;
  width: 100vw;
  height: 56.25vw;      /* 16:9 ratio */
  min-width: 177.78vh;
  transform: translate(-50%, -50%);
  pointer-events: none;
  opacity: 0.5;
  border: 0;
}
/* .hero-grid {
  position: relative; z-index: 10; max-width: 1280px; margin: 0 auto;
  padding: 140px 48px 52px; width: 100%;
  display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 80px; align-items: center;
} */
.hero-grid {
  position: relative; z-index: 10; max-width: 1280px; margin: 0 auto;
  padding: 40px 48px 40px;    /* was 140px top */
  width: 100%;
  display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 80px; align-items: center;
}
.hero-badge {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 8px 18px; border-radius: 50px;
  background: var(--w08); border: 1px solid var(--w08);
  margin-bottom: 28px; backdrop-filter: blur(8px);
}
.hero-badge-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--emerald); animation: pulse 2s infinite; }
.hero-badge span { font-size: 12px; font-weight: 600; color: var(--w70); letter-spacing: 0.5px; }
.hero h1 {
  font-family: var(--font-display); font-size: clamp(48px,6vw,76px);
  font-weight: 800; line-height: 1.04; letter-spacing: -2.5px; margin-bottom: 28px; color: #fff;
}
.hero h1 .line-italic { font-style: italic; font-weight: 500; }
.hero-desc { font-size: 17px; line-height: 1.75; color: var(--w50); margin-bottom: 40px; max-width: 460px; }
.hero-desc strong { color: var(--cyan); font-weight: 600; }
.hero-actions { display: flex; gap: 14px; margin-bottom: 40px; flex-wrap: wrap; }
.btn-hero {
  padding: 16px 36px; border-radius: 14px; font-size: 15px; font-weight: 600;
  cursor: pointer; font-family: var(--font-body); transition: all 0.4s var(--ease-out-expo); border: none;
}
.btn-hero-primary {
  background: linear-gradient(135deg, var(--blue), var(--cyan)); color: #fff;
  box-shadow: 0 4px 20px rgba(59,130,246,0.3), inset 0 1px 0 rgba(255,255,255,0.15);
}
.btn-hero-primary:hover { transform: translateY(-2px); box-shadow: 0 12px 40px rgba(59,130,246,0.4); }
.btn-hero-secondary {
  background: var(--w08); color: var(--w70); border: 1px solid var(--w15);
  backdrop-filter: blur(8px); display: flex; align-items: center; gap: 10px;
}
.btn-hero-secondary:hover { background: var(--w15); color: #fff; border-color: var(--w30); }
.play-circle {
  width: 30px; height: 30px; border-radius: 50%;
  background: linear-gradient(135deg, var(--blue), var(--cyan));
  display: inline-flex; align-items: center; justify-content: center; font-size: 10px; color: #fff;
}
.hero-trust { display: flex; gap: 28px; flex-wrap: wrap; }
.hero-trust-item { font-size: 13px; color: var(--w30); display: flex; align-items: center; gap: 8px; }
.hero-trust-item .check { color: var(--emerald); font-weight: 700; }

/* Hero Device */
.hero-visual { position: relative; display: flex; align-items: center; justify-content: center; }
.hero-device {
  width: 320px; height: 430px; border-radius: 28px;
  background: linear-gradient(160deg, var(--navy-mid), var(--navy-light));
  border: 1px solid var(--w08);
  box-shadow: 0 40px 100px rgba(0,0,0,0.4), inset 0 1px 0 var(--w08);
  position: relative; overflow: hidden; animation: float 6s ease-in-out infinite;
}
.dev-header {
  padding: 20px 24px 14px; display: flex; align-items: center; justify-content: space-between;
  border-bottom: 1px solid var(--w04);
}
.dev-header-left { display: flex; align-items: center; gap: 10px; }
.dev-avatar {
  width: 32px; height: 32px; border-radius: 10px;
  background: linear-gradient(135deg, var(--blue), var(--cyan));
  display: flex; align-items: center; justify-content: center; font-size: 14px;
}
.dev-header-text h4 { font-size: 13px; font-weight: 600; color: var(--w90); }
.dev-header-text p { font-size: 11px; color: var(--w30); }
.dev-status {
  padding: 4px 10px; border-radius: 20px;
  background: rgba(16,185,129,0.12); border: 1px solid rgba(16,185,129,0.2);
  font-size: 10px; font-weight: 600; color: var(--emerald); display: flex; align-items: center; gap: 5px;
}
.dev-status-dot { width: 5px; height: 5px; border-radius: 50%; background: var(--emerald); animation: pulse 2s infinite; }
.dev-map {
  height: 200px; background: linear-gradient(180deg, rgba(59,130,246,0.05), rgba(6,182,212,0.03));
  position: relative; overflow: hidden;
}
.dev-map-grid {
  position: absolute; inset: 0;
  background-image: linear-gradient(var(--w08) 1px, transparent 1px), linear-gradient(90deg, var(--w08) 1px, transparent 1px);
  background-size: 40px 40px; opacity: 0.4;
}
.dev-map-pin { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); }
.pin-ring {
  width: 60px; height: 60px; border-radius: 50%; border: 1.5px solid rgba(59,130,246,0.25);
  position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
  animation: beacon 3s ease-out infinite;
}
.pin-ring:nth-child(2) { animation-delay: 1s; }
.pin-ring:nth-child(3) { animation-delay: 2s; }
.pin-dot {
  width: 14px; height: 14px; border-radius: 50%; background: var(--blue);
  box-shadow: 0 0 20px rgba(59,130,246,0.5); position: relative; z-index: 2;
}
.dev-info { padding: 16px 24px; display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 8px; }
.dev-info-item { text-align: center; }
.dev-info-item .val { font-size: 16px; font-weight: 700; }
.dev-info-item .lbl { font-size: 10px; color: var(--w30); margin-top: 2px; text-transform: uppercase; letter-spacing: 0.5px; }
.dev-alert {
  margin: 0 16px; padding: 12px 16px; border-radius: 12px;
  background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.12);
  display: flex; align-items: center; gap: 10px; font-size: 12px; color: var(--emerald); font-weight: 500;
}
.float-badge {
  position: absolute; padding: 10px 16px; border-radius: 12px;
  background: rgba(10,22,40,0.85); backdrop-filter: blur(16px);
  border: 1px solid var(--w08); box-shadow: 0 8px 30px rgba(0,0,0,0.3);
  font-size: 12px; font-weight: 500; color: var(--w70); white-space: nowrap; z-index: 3;
}
.float-badge-1 { top: 40px; right: -40px; animation: fbadge 5s ease-in-out infinite; }
.float-badge-2 { bottom: 80px; left: -50px; animation: fbadge 6s ease-in-out infinite 1s; }

/* ======================== STATS ======================== */
.stats-section { background: var(--white); border-bottom: 1px solid var(--gray-100); position: relative; z-index: 2; }
.stats-grid {
  max-width: 1280px; margin: 0 auto; padding: 52px 48px;
  display: grid; grid-template-columns: repeat(4,1fr); gap: 32px;
}
.stat-item { text-align: center; position: relative; }
.stat-item:not(:last-child)::after {
  content: ''; position: absolute; right: 0; top: 20%; height: 60%; width: 1px; background: var(--gray-200);
}
.stat-number { font-family: var(--font-display); font-size: 40px; font-weight: 700; letter-spacing: -1px; }
.stat-label { font-size: 13px; color: var(--gray-400); margin-top: 4px; font-weight: 500; }

/* ======================== SOLUTIONS ======================== */
.solutions-section { padding: 120px 48px; max-width: 1280px; margin: 0 auto; }
.solutions-header { margin-bottom: 64px; }
.tab-nav {
  display: flex; gap: 4px; padding: 4px; border-radius: 14px;
  background: var(--gray-50); border: 1px solid var(--gray-100);
  width: fit-content; margin-top: 28px;
}
.tab-btn {
  padding: 11px 28px; border-radius: 10px; border: none; cursor: pointer;
  font-size: 14px; font-weight: 600; transition: all 0.4s var(--ease-out-expo);
  font-family: var(--font-body); background: transparent; color: var(--gray-400); letter-spacing: 0.3px;
}
.tab-btn.active { background: var(--white); color: var(--gray-900); box-shadow: 0 2px 10px rgba(0,0,0,0.06); }
.tab-btn:hover:not(.active) { color: var(--gray-600); }

/* Solution Panels */
.solution-panel {
  display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 56px; align-items: center;
  padding: 52px; border-radius: 28px;
  background: var(--white); border: 1px solid var(--gray-100);
  box-shadow: 0 4px 40px rgba(0,0,0,0.04);
  position: relative; overflow: hidden;
}
.solution-tab-content { display: none; }
.solution-tab-content.active { display: contents; }
.solution-tag {
  display: inline-block; padding: 6px 16px; border-radius: 8px;
  font-size: 11px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 16px;
}
.solution-content h3 {
  font-family: var(--font-display); font-size: 34px; font-weight: 700;
  letter-spacing: -0.8px; margin-bottom: 12px; color: var(--gray-900);
}
.solution-content > p { font-size: 16px; line-height: 1.75; color: var(--gray-500); margin-bottom: 28px; }
.solution-features { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.solution-feature {
  display: flex; align-items: center; gap: 12px; padding: 12px 16px;
  border-radius: 12px; transition: all 0.3s;
}
.solution-feature:hover { background: var(--gray-50); }
.solution-feature-dot { width: 7px; height: 7px; border-radius: 50%; flex-shrink: 0; }
.solution-feature span { font-size: 13px; font-weight: 500; color: var(--gray-700); }
.solution-visual {
  border-radius: 24px; height: 360px; display: flex; align-items: center; justify-content: center;
  position: relative; overflow: hidden;
}
.solution-visual img {
  width: 100%; height: 100%; object-fit: cover; border-radius: 24px;
}
.solution-btn {
  margin-top: 24px; padding: 14px 32px; border-radius: 12px;
  border: 1.5px solid var(--gray-200); background: var(--white); color: var(--gray-700);
  font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.3s; font-family: var(--font-body);
}
.solution-btn:hover { border-color: var(--blue); color: var(--blue); background: var(--blue-50); }

/* ======================== PRODUCTS ======================== */
.products-section { padding: 120px 48px; background: var(--gray-50); }
.products-inner { max-width: 1280px; margin: 0 auto; }
.products-header { text-align: center; margin-bottom: 64px; }
.products-header .section-eyebrow { justify-content: center; }
.products-header .section-eyebrow::before { display: none; }
.products-header p { font-size: 16px; color: var(--gray-400); margin-top: 14px; max-width: 440px; margin-inline: auto; }
.products-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 20px; }
.product-card {
  border-radius: 24px; background: var(--white); border: 1px solid var(--gray-100);
  overflow: hidden; cursor: pointer; transition: all 0.5s var(--ease-out-expo);
}
.product-card:hover { transform: translateY(-8px); box-shadow: 0 24px 60px rgba(0,0,0,0.08); border-color: var(--gray-200); }
.product-img-wrap {
  /* padding: 36px 24px; min-height: 190px; */
  display: flex; align-items: center; justify-content: center;
  position: relative;border-bottom: 1px solid #eee;
}
.product-badge {
  position: absolute; top: 14px; left: 14px; padding: 5px 12px;
  border-radius: 8px; font-size: 10px; font-weight: 700; letter-spacing: 0.5px;
}
.product-img-wrap img {
  max-width: 100%; max-height: 188px; transition: transform 0.5s var(--ease-out-expo); object-fit: contain;
}
.product-card:hover .product-img-wrap img { 
  /* transform: scale(1.08) translateY(-4px);  */
  border-bottom: 1px solid #eee;
  -webkit-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    transform: scale(1.1);
    -webkit-transition: -webkit-transform .6s;
    transition: -webkit-transform .6s;
    -o-transition: transform .6s;
    transition: transform .6s;
    transition: transform .6s, -webkit-transform .6s;
  }
.product-emoji { font-size: 64px; transition: transform 0.5s var(--ease-out-expo); display: block; }
.product-card:hover .product-emoji { transform: scale(1.1); }
.product-body { padding: 4px 24px 28px; }
.product-body h3 { margin-top:20px;font-size: 17px; font-weight: 700; margin-bottom: 8px; color: var(--gray-900); letter-spacing: -0.2px; }
.product-pricing { display: flex; align-items: baseline; gap: 8px; margin-bottom: 18px; }
.product-pricing .price { font-size: 28px; font-weight: 800; font-family: var(--font-display); }
.product-pricing .mo { font-size: 12px; color: var(--gray-400); }
.product-feat-list { display: flex; flex-direction: column; gap: 8px; margin-bottom: 22px; }
.product-feat { display: flex; align-items: center; gap: 10px; font-size: 13px; color: var(--gray-500); }
.product-feat .dot { font-size: 6px; }
.product-add-btn {
  width: 100%; padding: 13px; border-radius: 12px; cursor: pointer;
  font-size: 13px; font-weight: 600; transition: all 0.3s; font-family: var(--font-body);
  background: var(--gray-50); color: var(--gray-500); border: 1px solid var(--gray-200);
}
.product-card:hover .product-add-btn {
  background: linear-gradient(135deg, var(--blue), var(--cyan)); color: #fff;
  border-color: transparent; box-shadow: 0 4px 20px rgba(37,99,235,0.2);
}

/* ======================== HOW IT WORKS ======================== */
.how-section { padding: 120px 48px; max-width: 1280px; margin: 0 auto; }
.how-header { text-align: center; margin-bottom: 72px; }
.how-header .section-eyebrow { justify-content: center; color: var(--emerald); }
.how-header .section-eyebrow::before { display: none; }
.steps-container { display: grid; grid-template-columns: repeat(3,1fr); gap: 40px; position: relative; }
.steps-connector {
  position: absolute; top: 48px; left: 17%; right: 17%; height: 1.5px;
  background: linear-gradient(90deg, var(--blue-200), var(--purple-100), var(--green-100)); opacity: 0.6;
}
.step-card { text-align: center; position: relative; z-index: 1; }
.step-icon-wrap {
  width: 80px; height: 80px; border-radius: 24px;
  display: flex; align-items: center; justify-content: center; font-size: 36px;
  margin: 0 auto 24px; position: relative; border: 1px solid var(--gray-100);
}
.step-number {
  position: absolute; top: -8px; right: -8px; width: 28px; height: 28px; border-radius: 8px;
  display: flex; align-items: center; justify-content: center;
  font-size: 11px; font-weight: 800; color: #fff;
}
.step-card h3 { font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--gray-900); }
.step-card p { font-size: 14px; line-height: 1.7; color: var(--gray-400); max-width: 260px; margin: 0 auto; }

/* ======================== TESTIMONIALS ======================== */
.testimonials-section { padding: 100px 48px; background: var(--gray-50); }
.testimonials-inner { max-width: 700px; margin: 0 auto; }
.testimonials-header { text-align: center; margin-bottom: 56px; }
.testimonials-header .section-eyebrow { justify-content: center; color: var(--amber); }
.testimonials-header .section-eyebrow::before { display: none; }
.testimonial-carousel { position: relative; min-height: 260px; }
.testimonial-slide {
  position: absolute; inset: 0; padding: 44px; text-align: center;
  background: var(--white); border: 1px solid var(--gray-100); border-radius: 24px;
  box-shadow: 0 4px 30px rgba(0,0,0,0.04);
  opacity: 0; transform: translateY(20px) scale(0.97);
  transition: all 0.6s var(--ease-out-expo); pointer-events: none;
}
.testimonial-slide.active { opacity: 1; transform: translateY(0) scale(1); pointer-events: auto; }
.testimonial-stars { font-size: 18px; margin-bottom: 20px; color: #F59E0B; letter-spacing: 4px; }
.testimonial-slide blockquote {
  font-family: var(--font-display); font-size: 19px; line-height: 1.7;
  color: var(--gray-700); font-style: italic; margin-bottom: 24px;
}
.testimonial-author { font-weight: 700; font-size: 15px; color: var(--gray-900); }
.testimonial-role { font-size: 13px; color: var(--gray-400); margin-top: 4px; }
.testimonial-dots { display: flex; justify-content: center; gap: 8px; margin-top: 48px; }
.t-dot {
  width: 8px; height: 8px; border-radius: 4px; border: none; cursor: pointer;
  transition: all 0.4s var(--ease-out-expo); background: var(--gray-200);
}
.t-dot.active { width: 28px; background: linear-gradient(90deg, var(--blue), var(--cyan)); }

/* ======================== FAQ ======================== */
.faq-section { padding: 120px 48px; max-width: 780px; margin: 0 auto; }
.faq-header { text-align: center; margin-bottom: 56px; }
.faq-header .section-eyebrow { justify-content: center; }
.faq-header .section-eyebrow::before { display: none; }
.faq-list { display: flex; flex-direction: column; gap: 8px; }
.faq-item {
  border-radius: 16px; overflow: hidden; cursor: pointer;
  background: var(--white); border: 1px solid var(--gray-100); transition: all 0.3s;
}
.faq-item:hover { border-color: var(--gray-200); }
.faq-item.active { background: var(--blue-50); border-color: var(--blue-100); }
.faq-question { padding: 20px 24px; display: flex; justify-content: space-between; align-items: center; }
.faq-question span:first-child { font-size: 15px; font-weight: 600; color: var(--gray-900); }
.faq-toggle {
  font-size: 20px; color: var(--blue); font-weight: 300;
  transition: transform 0.4s var(--ease-out-expo); flex-shrink: 0; margin-left: 16px;
}
.faq-item.active .faq-toggle { transform: rotate(45deg); }
.faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.5s var(--ease-out-expo); }
.faq-item.active .faq-answer { max-height: 200px; }
.faq-answer-inner { padding: 0 24px 20px; font-size: 14px; line-height: 1.8; color: var(--gray-500); }

/* ======================== CTA ======================== */
.cta-section { padding: 40px 48px 120px; }
.cta-card {
  max-width: 1000px; margin: 0 auto; border-radius: 32px; padding: 80px 64px;
  text-align: center; position: relative; overflow: hidden;
  background: linear-gradient(135deg, var(--navy), var(--navy-light));
  border: 1px solid rgba(255,255,255,0.06);
}
.cta-card::before {
  content: ''; position: absolute; width: 500px; height: 500px; border-radius: 50%;
  background: radial-gradient(circle, rgba(59,130,246,0.12), transparent 70%);
  top: -200px; left: -100px; pointer-events: none;
}
.cta-card::after {
  content: ''; position: absolute; width: 400px; height: 400px; border-radius: 50%;
  background: radial-gradient(circle, rgba(6,182,212,0.08), transparent 70%);
  bottom: -150px; right: -50px; pointer-events: none;
}
.cta-card h2 {
  font-family: var(--font-display); font-size: clamp(32px,4vw,48px); font-weight: 700;
  letter-spacing: -1.5px; margin-bottom: 16px; color: #fff; position: relative; z-index: 1;
}
.cta-card > p {
  font-size: 17px; color: var(--w30); margin-bottom: 40px;
  max-width: 480px; margin-inline: auto; position: relative; z-index: 1;
}
.cta-btn {
  padding: 18px 48px; border-radius: 14px; font-size: 16px; font-weight: 600;
  cursor: pointer; font-family: var(--font-body); transition: all 0.4s var(--ease-out-expo);
  border: none; background: linear-gradient(135deg, var(--blue), var(--cyan)); color: #fff;
  box-shadow: 0 4px 20px rgba(59,130,246,0.3); position: relative; z-index: 1;
}
.cta-btn:hover { transform: translateY(-2px); box-shadow: 0 12px 40px rgba(59,130,246,0.4); }
.cta-card .sub { font-size: 13px; color: var(--w15); margin-top: 20px; position: relative; z-index: 1; }

/* ======================== FOOTER ======================== */
.footer { border-top: 1px solid var(--gray-100); padding: 64px 48px 40px; background: var(--white); }
.footer-grid {
  display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px;
  max-width: 1280px; margin: 0 auto 48px;
}
.footer-brand { display: flex; align-items: center; gap: 10px; margin-bottom: 16px; }
.footer-desc { font-size: 14px; line-height: 1.8; color: var(--gray-400); max-width: 280px; }
.footer-col h4 {
  font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
  margin-bottom: 18px; color: var(--gray-500);
}
.footer-col a { display: block; font-size: 14px; color: var(--gray-400); text-decoration: none; margin-bottom: 12px; transition: color 0.2s; }
.footer-col a:hover { color: var(--blue); }
.footer-bottom {
  border-top: 1px solid var(--gray-100); padding-top: 24px; display: flex;
  justify-content: space-between; align-items: center;
  font-size: 13px; color: var(--gray-300); max-width: 1280px; margin: 0 auto;
}
.footer-bottom a { color: var(--gray-300); text-decoration: none; transition: color 0.2s; margin-left: 24px; }
.footer-bottom a:hover { color: var(--gray-500); }

/* ======================== VIDEO MODAL ======================== */
.video-overlay {
  position: fixed; inset: 0; z-index: 9999; display: none; align-items: center; justify-content: center;
  background: rgba(0,0,0,0.88); backdrop-filter: blur(16px);
}
.video-overlay.active { display: flex; }
.video-modal {
  position: relative; width: 90%; max-width: 900px; aspect-ratio: 16/9;
  border-radius: 20px; overflow: hidden; box-shadow: 0 40px 100px rgba(0,0,0,0.6);
  animation: mpop 0.5s var(--ease-spring);
}
.video-close {
  position: absolute; top: -48px; right: 0; width: 40px; height: 40px; border-radius: 50%;
  background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15);
  color: #fff; font-size: 18px; cursor: pointer; display: flex; align-items: center; justify-content: center;
  transition: all 0.2s;
}
.video-close:hover { background: rgba(255,255,255,0.15); transform: scale(1.1); }

/* ======================== RESPONSIVE ======================== */
@media (max-width: 1024px) {
  .products-grid { grid-template-columns: repeat(2,1fr); }
}
@media (max-width: 900px) {
  .hero-grid { grid-template-columns: 1fr; gap: 48px; }
  .hero-visual { display: none !important; }
  .stats-grid { grid-template-columns: repeat(2,1fr); }
  .stat-item::after { display: none; }
  .solution-panel { grid-template-columns: 1fr; }
  .solution-visual { height: 260px; }
  .steps-container { grid-template-columns: 1fr; gap: 48px; }
  .steps-connector { display: none; }
  .footer-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
  .navbar { padding: 0 24px; }
  .nav-links a.nav-link { display: none; }
  .hero-grid { padding: 120px 24px 80px; }
  .tab-nav { flex-direction: column; width: 100%; }
  .tab-btn { text-align: center; justify-content: center; }
  .solution-features { grid-template-columns: 1fr; }
  .solutions-section, .products-section, .how-section,
  .testimonials-section, .faq-section, .cta-section { padding-left: 24px; padding-right: 24px; }
  .solution-panel { padding: 32px; }
  .testimonial-carousel { min-height: 340px; }
  .hero-bg-video {inset:0;}
}
@media (max-width: 600px) {
  .products-grid { grid-template-columns: 1fr; }
  .stats-grid { grid-template-columns: repeat(2,1fr); padding: 36px 24px; }
  .cta-card { padding: 52px 28px; }
  .cta-card h2 { font-size: 28px; }
  .footer-grid { grid-template-columns: 1fr; }
  .footer-bottom { flex-direction: column; align-items: flex-start; gap: 12px; }
  .footer-bottom div a { margin-left: 0; margin-right: 16px; }
  .footer { padding: 48px 24px 32px; }
}
  </style>
</head>
<body>

<!-- ======================== NAVBAR ======================== -->
<nav class="navbar" id="navbar">
  <a href="#" class="nav-brand">
    <div class="nav-logo">F1</div>
    <span class="nav-wordmark">family<span>1st</span></span>
  </a>
  <div class="nav-links">
    <a href="#solutions" class="nav-link">Solutions</a>
    <a href="#products" class="nav-link">Products</a>
    <a href="#how" class="nav-link">Pricing</a>
    <a href="#faq" class="nav-link">About</a>
    <button class="nav-cta">Shop Now</button>
  </div>
</nav>

<!-- ======================== HERO ======================== -->
<section class="hero">
  <div class="hero-bg-video">
    <!-- <iframe src="https://www.youtube.com/embed/rqyaT3UBfD0?autoplay=1&mute=1&loop=1&playlist=rqyaT3UBfD0&controls=0&showinfo=0&modestbranding=1&rel=0&playsinline=1&disablekb=1"
      title="Background Video" frameborder="0" allow="autoplay; encrypted-media"></iframe> -->

    <iframe src="https://www.youtube.com/embed/VtZrEBRSL_E?autoplay=1&mute=1&loop=1&playlist=VtZrEBRSL_E&controls=0&showinfo=0&modestbranding=1&rel=0&playsinline=1&disablekb=1"
      title="Background Video" frameborder="0" allow="autoplay; encrypted-media"></iframe>
  </div>
  <div class="hero-grid">
    <div class="hero-content">
      <div class="hero-badge reveal">
        <div class="hero-badge-dot"></div>
        <span>#1 Rated GPS Tracker in America</span>
      </div>
      <h1 class="reveal reveal-d1">Know they're safe.<br><span class="line-italic gradient-text-dark">Always.</span></h1>
      <p class="hero-desc reveal reveal-d2">Real-time GPS tracking for your teens, seniors, vehicles, and valuables. One app. Complete peace of mind. Starting at just <strong>$21.95/mo</strong>.</p>
      <div class="hero-actions reveal reveal-d3">
        <button class="btn-hero btn-hero-primary">Shop Trackers →</button>
        <button class="btn-hero btn-hero-secondary" id="watchDemoBtn">
          <span class="play-circle">▶</span> Watch Demo
        </button>
      </div>
      <div class="hero-trust reveal reveal-d4">
        <span class="hero-trust-item"><span class="check">✓</span> No contracts ever</span>
        <span class="hero-trust-item"><span class="check">✓</span> Free 2-day shipping</span>
        <span class="hero-trust-item"><span class="check">✓</span> 30-day guarantee</span>
      </div>
    </div>
    <div class="hero-visual reveal reveal-d2" style="display: none;">
      <div class="hero-device">
        <div class="dev-header">
          <div class="dev-header-left">
            <div class="dev-avatar">📍</div>
            <div class="dev-header-text"><h4>Family Dashboard</h4><p>3 devices active</p></div>
          </div>
          <div class="dev-status"><div class="dev-status-dot"></div>Live</div>
        </div>
        <div class="dev-map">
          <div class="dev-map-grid"></div>
          <div class="dev-map-pin">
            <div class="pin-ring"></div><div class="pin-ring"></div><div class="pin-ring"></div>
            <div class="pin-dot"></div>
          </div>
        </div>
        <div class="dev-info">
          <div class="dev-info-item"><div class="val gradient-text-dark">32</div><div class="lbl">mph</div></div>
          <div class="dev-info-item"><div class="val gradient-text-dark">2.4</div><div class="lbl">mi away</div></div>
          <div class="dev-info-item"><div class="val gradient-text-dark">87%</div><div class="lbl">battery</div></div>
        </div>
        <div class="dev-alert"><span>✓</span> Emma arrived at school safely</div>
      </div>
      <div class="float-badge float-badge-1">⚡ Speed: 32 mph</div>
      <div class="float-badge float-badge-2">🔋 Battery: 87%</div>
    </div>
  </div>
</section>

<!-- ======================== STATS ======================== -->
<section class="stats-section">
  <div class="stats-grid">
    <div class="stat-item reveal">
      <div class="stat-number gradient-text">500K+</div>
      <div class="stat-label">Active Devices</div>
    </div>
    <div class="stat-item reveal reveal-d1">
      <div class="stat-number gradient-text">4.6★</div>
      <div class="stat-label">App Store Rating</div>
    </div>
    <div class="stat-item reveal reveal-d2">
      <div class="stat-number gradient-text">99.9%</div>
      <div class="stat-label">Uptime Guarantee</div>
    </div>
    <div class="stat-item reveal reveal-d3">
      <div class="stat-number gradient-text">24/7</div>
      <div class="stat-label">US-Based Support</div>
    </div>
  </div>
</section>

<!-- ======================== SOLUTIONS ======================== -->
<section class="solutions-section" id="solutions">
  <div class="solutions-header reveal">
    <div class="section-eyebrow">Solutions</div>
    <h2 class="section-heading">Built for every <span class="gradient-text">moment</span></h2>
    <div class="tab-nav">
      <button class="tab-btn active" data-tab="teens">👨‍👩‍👧‍👦 Teens</button>
      <button class="tab-btn" data-tab="seniors">🛡️ Seniors</button>
      <button class="tab-btn" data-tab="assets">📍 Assets</button>
    </div>
  </div>

  <div class="solution-panel reveal">
    <!-- TEENS -->
    <div class="solution-tab-content active" data-panel="teens">
      <div class="solution-content">
        <div class="solution-tag" style="background:var(--blue-50);color:#2563EB">TEEN SAFETY</div>
        <h3>Freedom with guardrails.</h3>
        <p>Real-time location tracking with smart alerts for speed, geofencing, and driving behavior. Give your teen independence while keeping complete peace of mind.</p>
        <div class="solution-features">
          <div class="solution-feature" style="background:rgba(37,99,235,0.04)">
            <div class="solution-feature-dot" style="background:#2563EB"></div><span>Real-time GPS tracking</span>
          </div>
          <div class="solution-feature" style="background:rgba(37,99,235,0.04)">
            <div class="solution-feature-dot" style="background:#2563EB"></div><span>Speed &amp; driving alerts</span>
          </div>
          <div class="solution-feature" style="background:rgba(37,99,235,0.04)">
            <div class="solution-feature-dot" style="background:#2563EB"></div><span>Geofence boundaries</span>
          </div>
          <div class="solution-feature" style="background:rgba(37,99,235,0.04)">
            <div class="solution-feature-dot" style="background:#2563EB"></div><span>Location history &amp; replay</span>
          </div>
        </div>
        <button class="solution-btn">Learn More →</button>
      </div>
    </div>
    <div class="solution-tab-content active" data-panel-img="teens">
      <div class="solution-visual" style="background:var(--blue-50)">
        <img src="img/Teen2.webp" alt="Teen Safety" onerror="this.outerHTML='<div style=font-size:72px;animation:imgFloat_5s_ease-in-out_infinite>👨‍👩‍👧‍👦</div>'" />
      </div>
    </div>

    <!-- SENIORS -->
    <div class="solution-tab-content" data-panel="seniors">
      <div class="solution-content">
        <div class="solution-tag" style="background:var(--purple-50);color:#7C3AED">SENIOR CARE</div>
        <h3>Independence meets protection.</h3>
        <p>Compact, easy-to-use trackers that help families monitor elderly loved ones with SOS alerts, wander prevention, and caregiver notifications.</p>
        <div class="solution-features">
          <div class="solution-feature" style="background:rgba(124,58,237,0.04)">
            <div class="solution-feature-dot" style="background:#7C3AED"></div><span>SOS emergency button</span>
          </div>
          <div class="solution-feature" style="background:rgba(124,58,237,0.04)">
            <div class="solution-feature-dot" style="background:#7C3AED"></div><span>Wander alerts</span>
          </div>
          <div class="solution-feature" style="background:rgba(124,58,237,0.04)">
            <div class="solution-feature-dot" style="background:#7C3AED"></div><span>Caregiver dashboard</span>
          </div>
          <div class="solution-feature" style="background:rgba(124,58,237,0.04)">
            <div class="solution-feature-dot" style="background:#7C3AED"></div><span>Battery-life alerts</span>
          </div>
        </div>
        <button class="solution-btn">Learn More →</button>
      </div>
    </div>
    <div class="solution-tab-content" data-panel-img="seniors">
      <div class="solution-visual" style="background:var(--purple-50)">
        <img src="img/Senior2.webp" alt="Senior Care" onerror="this.outerHTML='<div style=font-size:72px;animation:imgFloat_5s_ease-in-out_infinite>🛡️</div>'" />
      </div>
    </div>

    <!-- ASSETS -->
    <div class="solution-tab-content" data-panel="assets">
      <div class="solution-content">
        <div class="solution-tag" style="background:var(--green-50);color:#059669">ASSET TRACKING</div>
        <h3>Protect what you own.</h3>
        <p>Track vehicles, equipment, and valuables with industrial-grade GPS devices. Weatherproof, long battery life, and tamper-proof designs.</p>
        <div class="solution-features">
          <div class="solution-feature" style="background:rgba(5,150,105,0.04)">
            <div class="solution-feature-dot" style="background:#059669"></div><span>Vehicle tracking</span>
          </div>
          <div class="solution-feature" style="background:rgba(5,150,105,0.04)">
            <div class="solution-feature-dot" style="background:#059669"></div><span>Equipment monitoring</span>
          </div>
          <div class="solution-feature" style="background:rgba(5,150,105,0.04)">
            <div class="solution-feature-dot" style="background:#059669"></div><span>Anti-theft alerts</span>
          </div>
          <div class="solution-feature" style="background:rgba(5,150,105,0.04)">
            <div class="solution-feature-dot" style="background:#059669"></div><span>Fleet management</span>
          </div>
        </div>
        <button class="solution-btn">Learn More →</button>
      </div>
    </div>
    <div class="solution-tab-content" data-panel-img="assets">
      <div class="solution-visual" style="background:var(--green-50)">
        <img src="img/portable-discreet.jpg" alt="Asset Tracking" onerror="this.outerHTML='<div style=font-size:72px;animation:imgFloat_5s_ease-in-out_infinite>📍</div>'" />
      </div>
    </div>
  </div>
</section>

<!-- ======================== PRODUCTS ======================== -->
<section class="products-section" id="products">
  <div class="products-inner">
    <div class="products-header reveal">
      <div class="section-eyebrow">Products</div>
      <h2 class="section-heading">Choose your <span class="gradient-text">device</span></h2>
      <p>From portable trackers to smart dashcams — every need covered.</p>
    </div>
    <div class="products-grid">

      <!-- Product 1 -->
      <div class="product-card reveal reveal-d1">
        <div class="product-img-wrap" style="background:var(--blue-50)">
          <div class="product-badge" style="background:rgba(37,99,235,0.08);color:#2563EB;border:1px solid rgba(37,99,235,0.15)">Best Seller</div>
          <img src="img/portable.jpg" alt="Portable GPS Tracker" />
        </div>
        <div class="product-body">
          <h3>Portable GPS Tracker</h3>
          <div class="product-pricing">
            <span class="price gradient-text">$29.95</span>
            <span class="mo">+ $21.95/mo</span>
          </div>
          <div class="product-feat-list">
            <div class="product-feat"><span class="dot" style="color:#2563EB">●</span>4G LTE real-time tracking</div>
            <div class="product-feat"><span class="dot" style="color:#2563EB">●</span>10–14 day battery life</div>
            <div class="product-feat"><span class="dot" style="color:#2563EB">●</span>Magnetic &amp; compact design</div>
            <div class="product-feat"><span class="dot" style="color:#2563EB">●</span>Nationwide coverage</div>
          </div>
          <button class="product-add-btn">Add to Cart →</button>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="product-card reveal reveal-d2">
        <div class="product-img-wrap" style="background:var(--purple-50)">
          <div class="product-badge" style="background:rgba(124,58,237,0.08);color:#7C3AED;border:1px solid rgba(124,58,237,0.15)">Easiest Setup</div>
          <img src="img/OBD.webp" alt="OBD-II GPS Tracker" />
        </div>
        <div class="product-body">
          <h3>OBD-II GPS Tracker</h3>
          <div class="product-pricing">
            <span class="price gradient-text">$24.95</span>
            <span class="mo">+ $19.95/mo</span>
          </div>
          <div class="product-feat-list">
            <div class="product-feat"><span class="dot" style="color:#7C3AED">●</span>Plug &amp; play — no wiring</div>
            <div class="product-feat"><span class="dot" style="color:#7C3AED">●</span>Vehicle health diagnostics</div>
            <div class="product-feat"><span class="dot" style="color:#7C3AED">●</span>Unlimited tracking range</div>
            <div class="product-feat"><span class="dot" style="color:#7C3AED">●</span>Driving behavior reports</div>
          </div>
          <button class="product-add-btn">Add to Cart →</button>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="product-card reveal reveal-d3">
        <div class="product-img-wrap" style="background:var(--amber-50)">
          <div class="product-badge" style="background:var(--gray-100);color:var(--gray-400);border:1px solid var(--gray-200)">Coming Soon</div>
          <img src="img/dashcam_1.webp" alt="OBD-II GPS Tracker" />
        </div>
        <div class="product-body">
          <h3>Dashcam Pro</h3>
          <div class="product-pricing">
            <span class="price gradient-text">$149.95</span>
            <span class="mo">+ $24.95/mo</span>
          </div>
          <div class="product-feat-list">
            <div class="product-feat"><span class="dot" style="color:#D97706">●</span>4K dual camera system</div>
            <div class="product-feat"><span class="dot" style="color:#D97706">●</span>AI driver safety alerts</div>
            <div class="product-feat"><span class="dot" style="color:#D97706">●</span>Cloud video storage</div>
            <div class="product-feat"><span class="dot" style="color:#D97706">●</span>Built-in GPS tracking</div>
          </div>
          <button class="product-add-btn">Get Notified</button>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="product-card reveal reveal-d4">
        <div class="product-img-wrap" style="background:var(--green-50)">
          <div class="product-badge" style="background:var(--gray-100);color:var(--gray-400);border:1px solid var(--gray-200)">Coming Soon</div>
          <span class="product-emoji">📱</span>
        </div>
        <div class="product-body">
          <h3>Family1st App</h3>
          <div class="product-pricing">
            <span class="price gradient-text">Free Download</span>
            <span class="mo">+ $9.95/mo</span>
          </div>
          <div class="product-feat-list">
            <div class="product-feat"><span class="dot" style="color:#059669">●</span>Phone location sharing</div>
            <div class="product-feat"><span class="dot" style="color:#059669">●</span>Family circles &amp; groups</div>
            <div class="product-feat"><span class="dot" style="color:#059669">●</span>Crash detection alerts</div>
            <div class="product-feat"><span class="dot" style="color:#059669">●</span>Check-in notifications</div>
          </div>
          <button class="product-add-btn">Get Notified</button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ======================== HOW IT WORKS ======================== -->
<section class="how-section" id="how">
  <div class="how-header reveal">
    <div class="section-eyebrow">How It Works</div>
    <h2 class="section-heading">Set up in <span class="gradient-text">3 minutes</span></h2>
  </div>
  <div class="steps-container">
    <div class="steps-connector"></div>
    <div class="step-card reveal">
      <div class="step-icon-wrap" style="background:var(--blue-50)">
        🛒
        <div class="step-number" style="background:linear-gradient(135deg,var(--blue),var(--cyan))">01</div>
      </div>
      <h3>Choose Your Tracker</h3>
      <p>Pick the perfect device for your needs — portable, plug-in, or dashcam.</p>
    </div>
    <div class="step-card reveal reveal-d1">
      <div class="step-icon-wrap" style="background:var(--purple-50)">
        ⚡
        <div class="step-number" style="background:linear-gradient(135deg,var(--purple),var(--blue))">02</div>
      </div>
      <h3>Activate &amp; Place</h3>
      <p>Activate online in 60 seconds. Attach magnetically or plug into your vehicle.</p>
    </div>
    <div class="step-card reveal reveal-d2">
      <div class="step-icon-wrap" style="background:var(--green-50)">
        📍
        <div class="step-number" style="background:linear-gradient(135deg,var(--teal),var(--emerald))">03</div>
      </div>
      <h3>Track in Real-Time</h3>
      <p>Open the Family1st app and start tracking. Set custom alerts and geofences.</p>
    </div>
  </div>
</section>

<!-- ======================== TESTIMONIALS ======================== -->
<section class="testimonials-section">
  <div class="testimonials-inner">
    <div class="testimonials-header reveal">
      <div class="section-eyebrow">Testimonials</div>
      <h2 class="section-heading">Loved by <span class="gradient-text">500K+ families</span></h2>
    </div>
    <div class="testimonial-carousel">

      <div class="testimonial-slide active" data-index="0">
        <div class="testimonial-stars">★★★★★</div>
        <blockquote>"Family1st gives me peace of mind knowing my teen is safe on the road. The speed alerts are a game changer."</blockquote>
        <div class="testimonial-author">Sarah M.</div>
        <div class="testimonial-role">Parent of 2 teens</div>
      </div>

      <div class="testimonial-slide" data-index="1">
        <div class="testimonial-stars">★★★★★</div>
        <blockquote>"We use it to monitor my father who has early-stage dementia. The geofencing alerts have been invaluable for our family."</blockquote>
        <div class="testimonial-author">James R.</div>
        <div class="testimonial-role">Caregiver</div>
      </div>

      <div class="testimonial-slide" data-index="2">
        <div class="testimonial-stars">★★★★★</div>
        <blockquote>"Best GPS tracker for the price. Battery life is incredible and the app is super intuitive to use every day."</blockquote>
        <div class="testimonial-author">Mike T.</div>
        <div class="testimonial-role">Fleet Manager</div>
      </div>

      <div class="testimonial-dots">
        <button class="t-dot active" data-dot="0"></button>
        <button class="t-dot" data-dot="1"></button>
        <button class="t-dot" data-dot="2"></button>
      </div>

    </div>
  </div>
</section>

<!-- ======================== FAQ ======================== -->
<section class="faq-section" id="faq">
  <div class="faq-header reveal">
    <div class="section-eyebrow">FAQ</div>
    <h2 class="section-heading">Common <span class="gradient-text">questions</span></h2>
  </div>
  <div class="faq-list reveal">

    <div class="faq-item">
      <div class="faq-question">
        <span>How does Family1st GPS tracking work?</span>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-answer">
        <div class="faq-answer-inner">Our GPS trackers use 4G LTE cellular networks to transmit real-time location data to our secure cloud platform. View locations, set alerts, and review history through our mobile app or web dashboard.</div>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <span>Is there a contract or commitment?</span>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-answer">
        <div class="faq-answer-inner">No contracts ever. All our plans are month-to-month with no cancellation fees. Pause or cancel your subscription at any time — no questions asked.</div>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <span>How long does the battery last?</span>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-answer">
        <div class="faq-answer-inner">Our portable tracker lasts 10–14 days on a single charge with standard use. The OBD-II tracker is powered by your vehicle's OBD port, so no charging is ever needed.</div>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <span>What areas does Family1st cover?</span>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-answer">
        <div class="faq-answer-inner">Family1st works anywhere in the United States, Canada, and Mexico with 4G LTE cellular coverage — that's over 99% of populated areas.</div>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <span>Can I track multiple devices on one account?</span>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-answer">
        <div class="faq-answer-inner">Absolutely! You can add unlimited devices to your Family1st account and manage them all from a single dashboard or mobile app.</div>
      </div>
    </div>

  </div>
</section>

<!-- ======================== CTA ======================== -->
<section class="cta-section">
  <div class="cta-card reveal">
    <h2>Ready to protect your <span class="gradient-text-dark">family</span>?</h2>
    <p>Join 500,000+ families who trust Family1st for their safety and peace of mind. Set up in minutes.</p>
    <button class="cta-btn">Shop Now — Free Shipping</button>
    <p class="sub">No contracts · Cancel anytime · 30-day money-back guarantee</p>
  </div>
</section>

<!-- ======================== VIDEO MODAL ======================== -->
<div class="video-overlay" id="videoOverlay">
  <div class="video-modal" onclick="event.stopPropagation()">
    <button class="video-close" id="videoCloseBtn">✕</button>
    <iframe id="videoIframe" width="100%" height="100%" src="" title="Family1st Demo" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen style="border-radius:20px"></iframe>
  </div>
</div>

<!-- ======================== FOOTER ======================== -->
<footer class="footer">
  <div class="footer-grid">
    <div>
      <div class="footer-brand">
        <div class="nav-logo" style="width:32px;height:32px;border-radius:8px;font-size:12px">F1</div>
        <span class="nav-wordmark" style="font-size:18px;color:var(--gray-900)">family<span>1st</span></span>
      </div>
      <p class="footer-desc">America's most trusted GPS tracking solution for families. Keeping loved ones safe since 2015.</p>
    </div>
    <div class="footer-col">
      <h4>Products</h4>
      <a href="#">Portable Tracker</a>
      <a href="#">OBD-II Tracker</a>
      <a href="#">Dashcam Pro</a>
      <a href="#">Mobile App</a>
    </div>
    <div class="footer-col">
      <h4>Solutions</h4>
      <a href="#">Teen Safety</a>
      <a href="#">Senior Care</a>
      <a href="#">Asset Tracking</a>
      <a href="#">Fleet Management</a>
    </div>
    <div class="footer-col">
      <h4>Support</h4>
      <a href="#">Help Center</a>
      <a href="#">Contact Us</a>
      <a href="#">Activate Device</a>
      <a href="#">Coverage Map</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Family1st. All rights reserved.</span>
    <div><a href="#">Privacy</a><a href="#">Terms</a><a href="#">Cookies</a></div>
  </div>
</footer>

<!-- ======================== MINIMAL JS (interactions only) ======================== -->
<script>
// Navbar scroll
window.addEventListener('scroll', function() {
  document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 50);
});

// Scroll reveal
var observer = new IntersectionObserver(function(entries) {
  entries.forEach(function(e) { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal').forEach(function(el) { observer.observe(el); });

// Solution tabs
document.querySelectorAll('.tab-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var tab = this.dataset.tab;
    document.querySelectorAll('.tab-btn').forEach(function(b) { b.classList.toggle('active', b.dataset.tab === tab); });
    document.querySelectorAll('[data-panel]').forEach(function(p) { p.classList.toggle('active', p.dataset.panel === tab); });
    document.querySelectorAll('[data-panel-img]').forEach(function(p) { p.classList.toggle('active', p.dataset.panelImg === tab); });
  });
});

// FAQ accordion
document.querySelectorAll('.faq-item').forEach(function(item) {
  item.addEventListener('click', function() {
    var wasActive = this.classList.contains('active');
    document.querySelectorAll('.faq-item').forEach(function(i) { i.classList.remove('active'); });
    if (!wasActive) this.classList.add('active');
  });
});

// Testimonial carousel
var currentSlide = 0;
var slides = document.querySelectorAll('.testimonial-slide');
var dots = document.querySelectorAll('.t-dot');

function goTo(idx) {
  currentSlide = idx;
  slides.forEach(function(s, i) { s.classList.toggle('active', i === idx); });
  dots.forEach(function(d, i) { d.classList.toggle('active', i === idx); });
}
dots.forEach(function(dot) {
  dot.addEventListener('click', function() { goTo(Number(this.dataset.dot)); });
});
setInterval(function() { goTo((currentSlide + 1) % slides.length); }, 5000);

// Video modal
var overlay = document.getElementById('videoOverlay');
var iframe = document.getElementById('videoIframe');
document.getElementById('watchDemoBtn').addEventListener('click', function() {
  overlay.classList.add('active');
  // iframe.src = 'https://www.youtube.com/embed/7W5sNWgXwts?autoplay=1&rel=0&modestbranding=1';
    iframe.src = 'https://www.youtube.com/embed/VtZrEBRSL_E?autoplay=1&rel=0&modestbranding=1';
});
function closeVideo() { overlay.classList.remove('active'); iframe.src = ''; }
document.getElementById('videoCloseBtn').addEventListener('click', closeVideo);
overlay.addEventListener('click', closeVideo);
</script>
</body>
</html>