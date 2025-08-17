<!doctype html>
<html>
<head><meta charset="utf-8"><title>Registro</title>
<style>
  body{font-family:Arial, sans-serif; margin:2rem;}
  form{max-width:420px;display:grid;gap:12px}
  input,button{padding:10px;border:1px solid #ccc;border-radius:6px}
  .out{margin-top:12px;white-space:pre-wrap;border:1px solid #eee;padding:10px}
</style></head>
<body>
  <h1>Registro</h1>
  <form id="f">
    <input name="name" placeholder="Nombre" required>
    <input name="email" type="email" placeholder="Correo" required>
    <input name="password" type="password" placeholder="Clave (8+)" required>
    <button>Crear cuenta</button>
  </form>
  <div class="out" id="out"></div>
<script>
  f.onsubmit = async (e)=>{
    e.preventDefault();
    const res = await fetch('/api/register', {
      method:'POST',
      headers:{'Content-Type':'application/json','Accept':'application/json'},
      body: JSON.stringify(Object.fromEntries(new FormData(f)))
    });
    out.textContent = JSON.stringify(await res.json(), null, 2);
  };
</script>
</body></html>

