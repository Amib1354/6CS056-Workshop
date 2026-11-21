<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Training Institute')</title>
    <style>
        :root { color-scheme: light; --ink:#17233b; --muted:#64748b; --line:#dbe3ef; --brand:#3157d5; --surface:#fff; --wash:#f4f7fc; --danger:#b42318; }
        * { box-sizing:border-box; }
        body { margin:0; background:var(--wash); color:var(--ink); font:16px/1.5 system-ui,-apple-system,Segoe UI,sans-serif; }
        header { background:var(--surface); border-bottom:1px solid var(--line); }
        .nav, main { width:min(1100px,calc(100% - 32px)); margin:0 auto; }
        .nav { min-height:66px; display:flex; align-items:center; justify-content:space-between; gap:24px; }
        .brand { color:var(--ink); font-weight:750; text-decoration:none; }
        nav { display:flex; flex-wrap:wrap; gap:8px; }
        nav a { color:var(--muted); text-decoration:none; padding:8px 12px; border-radius:9px; }
        nav a:hover,nav a:focus-visible { color:var(--brand); background:#eef2ff; }
        main { padding:36px 0 64px; }
        h1,h2,p { margin-top:0; } h1 { margin-bottom:4px; font-size:clamp(1.7rem,3vw,2.2rem); letter-spacing:-.03em; }
        .muted,.hint { color:var(--muted); }
        .page-heading { display:flex; align-items:center; justify-content:space-between; gap:16px; margin-bottom:22px; }
        .card { background:var(--surface); border:1px solid var(--line); border-radius:16px; padding:clamp(18px,3vw,26px); box-shadow:0 8px 24px rgba(28,45,86,.05); }
        .button,button { display:inline-flex; align-items:center; justify-content:center; border:0; border-radius:9px; padding:10px 15px; background:var(--brand); color:#fff; font:inherit; font-weight:650; text-decoration:none; cursor:pointer; }
        .button:hover,button:hover { background:#2444b4; }
        .button.secondary,button.secondary { background:#e9eef7; color:var(--ink); }
        .field { margin-bottom:17px; } label { display:block; margin-bottom:6px; font-weight:650; }
        input,textarea,select { width:100%; border:1px solid #cbd5e1; border-radius:9px; padding:10px 12px; color:var(--ink); background:#fff; font:inherit; }
        input:focus,textarea:focus,select:focus { outline:3px solid #dbe5ff; border-color:var(--brand); }
        textarea { min-height:110px; resize:vertical; } input[type=checkbox] { width:auto; margin-right:7px; }
        .check-row { display:flex; align-items:center; } .check-row label { margin:0; }
        .form-actions,.actions { display:flex; flex-wrap:wrap; align-items:center; gap:8px; }
        .search { display:flex; gap:8px; margin:0 0 18px; } .search input { flex:1; }
        .table-wrap { overflow-x:auto; } table { width:100%; border-collapse:collapse; background:#fff; }
        th,td { padding:12px 14px; text-align:left; border-bottom:1px solid var(--line); vertical-align:top; }
        th { color:var(--muted); font-size:.84rem; letter-spacing:.04em; text-transform:uppercase; white-space:nowrap; }
        tr:last-child td { border-bottom:0; } .actions a { color:var(--brand); font-weight:650; text-decoration:none; }
        .link-button { padding:0; color:var(--danger); background:transparent; font:inherit; font-weight:650; }
        .alert { margin:0 0 18px; padding:13px 16px; border-radius:10px; }
        .success { color:#17633a; background:#e9f8ef; border:1px solid #b9e9c9; }
        .error { color:#912018; background:#fff0ee; border:1px solid #ffd0c9; } .error ul { margin:8px 0 0; padding-left:22px; }
        .detail-grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:18px; }
        .detail-item { padding-bottom:12px; border-bottom:1px solid var(--line); }
        .detail-item dt { color:var(--muted); font-size:.88rem; } .detail-item dd { margin:3px 0 0; font-weight:600; overflow-wrap:anywhere; }
        .pagination { margin-top:18px; }
        @media(max-width:650px) { .nav,.page-heading { align-items:flex-start; flex-direction:column; padding:14px 0; } main { padding-top:24px; } .search { flex-direction:column; } .detail-grid { grid-template-columns:1fr; } }
    </style>
</head>
<body>
<header><div class="nav">
    <a class="brand" href="{{ route('students.index') }}">Training Institute</a>
    <nav aria-label="Main navigation"><a href="{{ route('students.index') }}">Students</a><a href="{{ route('courses.index') }}">Courses</a></nav>
</div></header>
<main>@yield('content')</main>
</body>
</html>