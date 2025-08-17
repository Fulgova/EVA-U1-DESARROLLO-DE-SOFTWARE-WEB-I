<!doctype html>
<html>
<head><meta charset="utf-8"><title>Login</title>
<style>
  body{font-family:Arial, sans-serif; margin:2rem;}
  form, .card{max-width:520px;display:grid;gap:12px}
  input,button{padding:10px;border:1px solid #ccc;border-radius:6px}
  .out{white-space:pre-wrap;border:1px solid #eee;padding:10px}
</style></head>
<body>
  <h1>Inicio de Sesión</h1>
  <form id="f">
    <input name="email" type="email" placeholder="Correo" required>
    <input name="password" type="password" placeholder="Clave" required>
    <button>Entrar</button>
  </form>

  <div class="card">
    <button id="btnProyectos">Proyectos (ruta protegida)</button>
    <div class="out" id="out"></div>
  </div>

<script>
  let token = null;
  f.onsubmit = async (e)=>{
    e.preventDefault();
    const res = await fetch('/api/login', {
      method:'POST',
      headers:{'Content-Type':'application/json','Accept':'application/json'},
      body: JSON.stringify(Object.fromEntries(new FormData(f)))
    });
    const data = await res.json();
    token = data.access_token;
    out.textContent = JSON.stringify(data, null, 2);
  };

  btnProyectos.onclick = async ()=>{
    const res = await fetch('/api/projects', {
      headers: {'Authorization': token ? `Bearer ${token}` : ''}
    });
    out.textContent = JSON.stringify(await res.json(), null, 2);
  };
</script>
</body></html>
