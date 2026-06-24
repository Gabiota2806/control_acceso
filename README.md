# 🛡️ Sistema de Control de Accesos

Bienvenido al repositorio del Sistema de Control de Accesos. Este proyecto nace como una solución para registrar, validar y auditar el ingreso de personas ajenas a un establecimiento, controlando el tiempo límite de permanencia de cada visitante.

## 🚀 Características Principales
- **Roles y Permisos:** Accesos diferenciados para el Administrador, personal de Seguridad y Empleados regulares.
- **Auditoría Reactiva:** Dashboard en tiempo real construido con **Livewire**, permitiendo monitorear los accesos sin recargar la página.
- **Control de Tiempo:** Alertas automáticas para usuarios que han excedido su tiempo permitido dentro del establecimiento.
- **Hardware Integrado:** Conexión vía API con un **Arduino y un sensor de proximidad** para detectar ingresos físicamente y reportarlos al sistema de manera instantánea.

## 🛠️ Stack Tecnológico
- **Framework:** Laravel 11
- **Frontend:** Laravel Breeze (Blade + Livewire + Tailwind CSS)
- **Base de Datos:** SQLite
- **Hardware:** Arduino (C++)
- **Lenguaje:** PHP 8.2+

## 👥 Equipo de Desarrollo
- **Pineda Gabriel** - Líder Técnico & Arduino
- **Saucedo Alexia** - Frontend & Diseño UI/UX
- **Bordón Guillermo** - Backend & Base de Datos
- **Roda Sebastián** - Livewire & Dashboard de Auditoría

---

## 🌿 Metodología de Trabajo (Git Flow Simplificado)

Para evitar conflictos en el código fuente, trabajaremos con el siguiente flujo:

1. **Ramas Principales:**
   - `main`: Rama de producción. Solo código estable y probado. **Prohibido trabajar directamente aquí**.
   - `develop`: Rama de integración. Aquí se fusiona el código de todo el equipo.

2. **Flujo de Trabajo Diario:**
   - **Paso 1:** Ubicarse en `develop` y actualizarla: `git checkout develop` -> `git pull origin develop`.
   - **Paso 2:** Crear tu rama de trabajo (ver prefijos abajo): `git checkout -b <prefijo>/<nombre-tarea>`.
   - **Paso 3:** Programar y hacer commits atómicos (ver reglas de commits).
   - **Paso 4:** Subir tu rama: `git push origin <tu-rama>`.
   - **Paso 5:** Crear un **Pull Request** hacia `develop` en GitHub para que otro integrante lo revise.

### Nomenclatura de Ramas (Prefijos)
Al crear una nueva rama, utiliza el prefijo que describa la naturaleza de tu tarea:
- `feat/`: Desarrollo de una nueva funcionalidad. *(Ej: feat/crud-visitantes)*
- `fix/`: Corrección de un error o bug en el código. *(Ej: fix/error-login)*
- `docs/`: Cambios netamente en la documentación. *(Ej: docs/actualizar-readme)*
- `style/`: Cambios de formato o estilos CSS que no alteran la lógica. *(Ej: style/colores-botones)*
- `refactor/`: Reestructuración de código existente sin agregar funcionalidad ni corregir errores. *(Ej: refactor/controlador-accesos)*
- `perf/`: Cambios orientados a mejorar el rendimiento.
- `test/`: Agregar o corregir pruebas unitarias/feature.
- `chore/`: Tareas de mantenimiento, actualización de dependencias o configuración. *(Ej: chore/instalar-libreria)*

## 📝 Convención de Commits (En Español)

Todo mensaje de commit debe seguir la convención internacional (Conventional Commits) adaptada al español. El formato debe ser:
`<tipo>(ámbito opcional): <descripción en minúsculas>`

**Tipos disponibles (similares a las ramas):**
- **feat**: Incorpora una nueva característica. *(Ej: `feat: agregar vista de dashboard`)*
- **fix**: Soluciona un error. *(Ej: `fix: corregir validación de DNI`)*
- **docs**: Actualización de documentación. *(Ej: `docs: agregar manual de usuario`)*
- **style**: Cambios estéticos en el código (punto y coma, sangrías) o CSS. *(Ej: `style: dar formato al archivo index`)*
- **refactor**: Cambios que no son fixes ni feats. *(Ej: `refactor: optimizar consulta a la base de datos`)*
- **perf**: Cambios para mejorar la velocidad/rendimiento. *(Ej: `perf: mejorar tiempo de carga del listado`)*
- **test**: Agregar tests faltantes o modificarlos. *(Ej: `test: verificar que el usuario no pueda entrar dos veces`)*
- **chore**: Mantenimiento de herramientas. *(Ej: `chore: actualizar framework laravel`)*

*Proyecto desarrollado para la materia Programación III - UTN FRRE.*
