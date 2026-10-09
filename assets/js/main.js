// Muestra cada sección con una animación suave cuando entra en pantalla.
document.addEventListener('DOMContentLoaded', () => {
    const secciones = document.querySelectorAll('.revelar');

    if (!('IntersectionObserver' in window)) {
        secciones.forEach(s => s.classList.add('visible'));
        return;
    }

    const observador = new IntersectionObserver((entradas) => {
        entradas.forEach(entrada => {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('visible');
                observador.unobserve(entrada.target);
            }
        });
    }, { threshold: 0.12 });

    secciones.forEach(s => observador.observe(s));

    // Inicializar simulador de pipeline CI/CD
    iniciarSimuladorPipeline();
});

/**
 * Lógica interactiva para la simulación del Pipeline CI/CD hacia Azure.
 */
function iniciarSimuladorPipeline() {
    const contenedor = document.getElementById('simulador-cicd');
    if (!contenedor) return;

    const btnSimular   = document.getElementById('btn-iniciar-sim');
    const btnReset     = document.getElementById('btn-reset-sim');
    const inputCommit  = document.getElementById('sim-commit');
    const selectPreset = document.getElementById('sim-preset');
    const logTerminal  = document.getElementById('terminal-sim-log');
    const badge        = document.getElementById('terminal-badge');
    const resultado    = document.getElementById('sim-resultado');
    const resTexto     = document.getElementById('sim-resultado-texto');
    const metaHash     = document.getElementById('meta-hash');

    const steps = [
        document.getElementById('step-repo'),
        document.getElementById('step-ci'),
        document.getElementById('step-docker'),
        document.getElementById('step-acr'),
        document.getElementById('step-cd')
    ].filter(Boolean);

    let simulacionActiva = false;
    let timeouts = [];

    // Cambiar texto de input al elegir un preset
    if (selectPreset) {
        selectPreset.addEventListener('change', (e) => {
            if (e.target.value && inputCommit) {
                inputCommit.value = e.target.value;
            }
        });
    }

    function timestamp() {
        const d = new Date();
        const h = String(d.getHours()).padStart(2, '0');
        const m = String(d.getMinutes()).padStart(2, '0');
        const s = String(d.getSeconds()).padStart(2, '0');
        return `${h}:${m}:${s}`;
    }

    function hashAleatorio() {
        const chars = '0123456789abcdef';
        let res = '';
        for (let i = 0; i < 7; i++) {
            res += chars[Math.floor(Math.random() * chars.length)];
        }
        return res;
    }

    function agregarLog(html) {
        if (!logTerminal) return;
        const linea = document.createElement('div');
        linea.innerHTML = `<span class="t-clave">[${timestamp()}]</span> ${html}`;
        logTerminal.appendChild(linea);
        logTerminal.scrollTop = logTerminal.scrollHeight;
    }

    function setBadge(estado, texto) {
        if (!badge) return;
        badge.className = `terminal__badge terminal__badge--${estado}`;
        badge.textContent = texto;
    }

    function setStep(index, estado) {
        steps.forEach((st, i) => {
            if (i < index) {
                st.className = 'pipeline-step completado';
            } else if (i === index) {
                st.className = `pipeline-step ${estado}`;
            } else {
                st.className = 'pipeline-step';
            }
        });
    }

    function limpiarSimulador() {
        timeouts.forEach(t => clearTimeout(t));
        timeouts = [];
        simulacionActiva = false;

        steps.forEach(st => st.className = 'pipeline-step');
        if (logTerminal) {
            logTerminal.innerHTML = '<span class="t-tenue">[Esperando commit] Presiona "Simular Despliegue" para disparar el pipeline automático de Azure DevOps...</span>';
        }
        setBadge('espera', 'Listo');
        if (resultado) resultado.classList.remove('visible');

        if (btnSimular) {
            btnSimular.disabled = false;
            btnSimular.innerHTML = '<span class="btn-icono">▶</span><span>Simular Despliegue</span>';
        }
        if (inputCommit) inputCommit.disabled = false;
        if (selectPreset) selectPreset.disabled = false;
    }

    if (btnReset) {
        btnReset.addEventListener('click', limpiarSimulador);
    }

    function programarPaso(ms, fn) {
        const t = setTimeout(fn, ms);
        timeouts.push(t);
    }

    if (btnSimular) {
        btnSimular.addEventListener('click', () => {
            if (simulacionActiva) return;
            simulacionActiva = true;

            const commitMensaje = (inputCommit && inputCommit.value.trim()) 
                ? inputCommit.value.trim() 
                : 'feat: despliegue de cambios en la aplicación';
            const commitHash = hashAleatorio();

            // Bloquear controles durante la simulación
            btnSimular.disabled = true;
            btnSimular.innerHTML = '<span class="btn-icono">⏳</span><span>Ejecutando Pipeline...</span>';
            if (inputCommit) inputCommit.disabled = true;
            if (selectPreset) selectPreset.disabled = true;
            if (resultado) resultado.classList.remove('visible');

            if (logTerminal) logTerminal.innerHTML = '';
            setBadge('corriendo', 'Pipeline Activo');

            // --- FASE 1: GIT PUSH & REPOS ---
            programarPaso(100, () => {
                setStep(0, 'en-progreso');
                agregarLog(`<span class="t-fase">GIT REPOS</span> <span class="t-alerta">⚡ Webhook recibido:</span> git push origin main`);
                agregarLog(`<span class="t-tenue">   ├─ Commit:</span> <span class="t-valor">"${commitMensaje}"</span> (${commitHash})`);
                agregarLog(`<span class="t-tenue">   ├─ Autor:</span> <span class="t-valor">Fernando López Orellana</span>`);
                agregarLog(`<span class="t-tenue">   └─ Azure Boards:</span> <span class="t-exito">Historia de usuario #104 vinculada</span>`);
            });

            // --- FASE 2: CI (AZURE PIPELINES) ---
            programarPaso(1100, () => {
                setStep(1, 'en-progreso');
                agregarLog(`<span class="t-fase">AZURE CI</span> 🚀 Disparando Azure Pipelines Runner (Ubuntu 22.04 LTS)...`);
                agregarLog(`<span class="t-tenue">   ├─ Entorno de ejecución:</span> <span class="t-valor">PHP 8.3 & Composer</span>`);
                agregarLog(`<span class="t-tenue">   ├─ Análisis de calidad:</span> <span class="t-exito">0 errores de sintaxis detectados</span>`);
                agregarLog(`<span class="t-tenue">   └─ Pruebas unitarias:</span> <span class="t-exito">✔ 24/24 pruebas aprobadas exitosamente</span>`);
            });

            // --- FASE 3: DOCKER BUILD ---
            programarPaso(2300, () => {
                setStep(2, 'en-progreso');
                agregarLog(`<span class="t-fase">DOCKER</span> 🐳 Construyendo imagen de contenedor optimizada...`);
                agregarLog(`<span class="t-tenue">   ├─ Dockerfile:</span> <span class="t-valor">FROM mcr.microsoft.com/azure-functions/php:8.3</span>`);
                agregarLog(`<span class="t-tenue">   ├─ Multi-stage build:</span> <span class="t-valor">Copiando código y optimizando assets (41.2 MB)</span>`);
                agregarLog(`<span class="t-tenue">   └─ Tag generado:</span> <span class="t-exito">azure-app:${commitHash} ✔</span>`);
            });

            // --- FASE 4: AZURE CONTAINER REGISTRY (ACR) ---
            programarPaso(3500, () => {
                setStep(3, 'en-progreso');
                agregarLog(`<span class="t-fase">AZURE ACR</span> 🔐 Autenticando de forma segura con Azure Container Registry...`);
                agregarLog(`<span class="t-tenue">   ├─ Repositorio privado:</span> <span class="t-valor">acrpresentacion.azurecr.io/demo-app</span>`);
                agregarLog(`<span class="t-tenue">   ├─ Seguridad Defender:</span> <span class="t-exito">Escaneo de vulnerabilidades sin riesgos detectados</span>`);
                agregarLog(`<span class="t-tenue">   └─ docker push:</span> <span class="t-exito">✔ Imagen subida y sellada en ACR (digest sha256:${commitHash})</span>`);
            });

            // --- FASE 5: CD (DESPLIEGUE A APP SERVICE) ---
            programarPaso(4700, () => {
                setStep(4, 'en-progreso');
                agregarLog(`<span class="t-fase">AZURE CD</span> 🌐 Conectando con Azure App Service (Plan PaaS)...`);
                agregarLog(`<span class="t-tenue">   ├─ Deployment Slot:</span> <span class="t-valor">Descargando nueva imagen desde ACR...</span>`);
                agregarLog(`<span class="t-tenue">   ├─ Zero-Downtime Swap:</span> <span class="t-valor">Intercambiando ranuras en caliente sin interrupción</span>`);
                agregarLog(`<span class="t-tenue">   ├─ Healthcheck HTTP:</span> <span class="t-exito">GET / => 200 OK (Latencia: 34ms)</span>`);
                agregarLog(`<span class="t-fase">COMPLETO</span> <span class="t-exito">🎉 ¡Despliegue finalizado con éxito! El código ya está vivo en la nube.</span>`);

                // Finalizar simulación
                setStep(5, 'completado');
                setBadge('exito', 'Despliegue Exitoso');

                if (metaHash) metaHash.textContent = commitHash;
                if (resTexto) {
                    resTexto.textContent = `Commit "${commitMensaje}" validado con CI, empaquetado en ACR y activo en Azure App Service.`;
                }
                if (resultado) resultado.classList.add('visible');

                simulacionActiva = false;
                btnSimular.disabled = false;
                btnSimular.innerHTML = '<span class="btn-icono">▶</span><span>Simular otro Despliegue</span>';
                if (inputCommit) inputCommit.disabled = false;
                if (selectPreset) selectPreset.disabled = false;
            });
        });
    }
}
