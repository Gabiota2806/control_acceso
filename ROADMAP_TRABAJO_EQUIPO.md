# Ruta de Trabajo y Asignación de Tareas - Sistema de Control de Accesos

**📅 FECHA DE PRESENTACIÓN: Lunes 6 de Julio de 2026** *(¡Quedan aproximadamente 13 días!)*

Este documento sirve como guía para el desarrollo colaborativo del proyecto en Laravel, asegurando que los 4 integrantes trabajen en paralelo sin generar bloqueos.

---

## 👥 Equipo y Asignación de Roles

A continuación se propone la división de tareas en base a los conocimientos e intereses.

### 1. Pineda Gabriel: Líder Técnico, Repositorio y Hardware
* **Responsabilidades:** Administración del código, setup inicial del framework y conexión con el hardware.
* **Tareas Principales:**
  1. Crear y administrar el **repositorio en GitHub**, gestionando las ramas y resolución de conflictos.
  2. Inicializar el proyecto Laravel base (con Laravel Breeze y base de datos SQLite) para dejar la arquitectura lista según los requisitos del profesor.
  3. Crear los **Endpoints de la API** (`routes/api.php`) que van a recibir los "disparos" del sensor.
  4. Desarrollar el código en **C++ para el Arduino** (usando el sensor de proximidad del kit) y probar la conexión con la API del proyecto local.

### 2. Saucedo Alexia: Líder de Frontend y Diseño UI/UX
* **Responsabilidades:** Interfaz de usuario, Tailwind CSS y vistas estáticas.
* **Tareas Principales:**
  1. Configurar el *Layout* principal (Menú lateral o superior, pie de página, contenedores) asegurando que sea totalmente **Responsive**.
  2. Definir la paleta de colores y estilos globales (botones, fuentes) utilizando Tailwind CSS.
  3. Desarrollar la vista obligatoria de **"Perfiles de los desarrolladores"**.
  4. Pulir visualmente los formularios y tablas (agregando íconos, modales y *cards*).

### 3. Bordón Guillermo: Desarrollador Backend y Lógica de Negocio
* **Responsabilidades:** Estructura de Base de Datos y CRUDs.
* **Tareas Principales:**
  1. Desarrollar las **Migraciones, Modelos y Relaciones** (`User`, `Visitor`, `Destination`, `Access`).
  2. Programar los *Seeders* (para poblar la base de datos con usuarios y datos de prueba rápidos).
  3. Desarrollar el CRUD completo (Create, Read, Update, Delete) para **Visitantes** y **Destinos**.
  4. Implementar las validaciones estrictas del lado del servidor (FormRequests) exigidas por la cátedra.

### 4. Roda Sebastián: Desarrollador de Auditoría, Alertas y Livewire
* **Responsabilidades:** Vistas dinámicas, Dashboard en tiempo real y roles.
* **Tareas Principales:**
  1. Configurar los roles en el sistema (mediante Middleware) para que Empleado, Seguridad y Admin tengan accesos y vistas diferentes.
  2. Integrar **Livewire** para desarrollar vistas reactivas sin que se recargue la página.
  3. Crear la **Vista Especial (Dashboard de Auditoría)** en donde el Admin visualiza los accesos en tiempo real.
  4. Lógica y vistas para manejar las **Alertas** (ej. mostrar a los Visitantes que superaron su tiempo límite dentro del establecimiento).

---

## 🗺️ Fases del Proyecto (Cronograma Acelerado)

Dado que la presentación es el **6 de Julio**, ajustamos el cronograma original de "semanas" por fechas específicas para asegurar cumplir a tiempo:

### Fase 1: Setup y Configuración (Del 24/06 al 26/06)
* [ ] **(Gabriel)** Crear repositorio en GitHub, invitar colaboradores e inicializar Laravel + Breeze + SQLite.
* [ ] **(Guillermo)** Programar migraciones y seeders principales (Estructura de BD).
* [ ] **(Alexia)** Dejar listo el esqueleto visual estático (Layout, navbar, diseño base).

### Fase 2: Funcionalidad Base (Del 27/06 al 30/06)
* [ ] **(Guillermo)** Finalizar el ABM / CRUD de Visitantes y Destinos.
* [ ] **(Sebastián)** Configurar la diferenciación de roles de login y proteger rutas.
* [ ] **(Guillermo/Sebastián)** Lógica del registro manual de accesos (para cuando el Arduino no esté en uso o se haga carga manual).
* [ ] **(Alexia)** Completar la pantalla "Perfiles del equipo" y ayudar a diseñar los formularios CRUD.

### Fase 3: El "Wow Factor" e Interacciones Especiales (Del 01/07 al 03/07)
* [ ] **(Gabriel)** Programar y cablear el Arduino con el sensor de proximidad, conectándolo a la ruta API (Endpoint).
* [ ] **(Sebastián)** Desarrollar el Dashboard reactivo con Livewire para captar los nuevos registros.
* [ ] **(Todos)** **Integración:** Probar físicamente que, al pasar frente al sensor, la información se guarde en Laravel y aparezca instantáneamente en el Dashboard de Auditoría.

### Fase 4: Cierre, Documentación y Entrega (Del 04/07 al 05/07)
* [ ] **(Todos)** Probar el sistema integralmente (Testing) y resolver conflictos finales de mezcla en GitHub (Merge).
* [ ] **(Gabriel/Todos)** Desplegar el sistema en un hosting accesible (Render, Railway, etc.) o confirmar que corra perfecto en una laptop local para la presentación.
* [ ] **(Guillermo)** Exportar la base de datos (archivo `.sql` o `.sqlite`).
* [ ] **(Todos)** Redactar el **Documento PDF final** con capturas, esquema de BD, y explicación detallada del sistema y el hardware implementado.
