# Guía de Tareas y Roadmap - Sistema de Control de Accesos

Este documento sirve como la fuente de verdad del estado del proyecto.

## 👥 Roles
* **Gabriel Pineda**: Liderazgo Técnico, Hardware (RFID), y APIs Cruzadas.
* **Guillermo Bordón**: Lógica Corporativa (CRUD de `Visitor`, `Destination`) y Base de Datos.
* **Alexia Saucedo**: Frontend, Diseño UI/UX (Tailwind), Vistas estáticas.
* **Sebastián Roda**: Sistema de Roles, Alertas y Dashboard en tiempo real (Livewire).

## 🏗️ Arquitectura de la API del Gimnasio
* **Objetivo:** El gimnasio solo necesita saber si el cliente pagó o no la cuota.
* **Flujo:** Nuestro Arduino lee la tarjeta -> Laravel consulta la API del Gimnasio (Estado de Pago) -> Laravel abre/cierra la puerta y guarda el registro en nuestra BD -> Opcionalmente, le devuelve al Gimnasio un reporte de accesos.
* **Módulos:** Esta integración actuará como un "módulo" dentro de nuestro robusto sistema corporativo principal.

## 📜 Historial de Cambios de Alcance
* **[02/07/2026] Evolución de API del Gimnasio:** Inicialmente el gimnasio iba a consumir nuestro historial completo de accesos. Tras revisar la UX (Experiencia de Usuario), se decidió pivotar la arquitectura a un modelo de **Hardware-as-a-Service (HaaS)**. Ahora les proveeremos un *Endpoint de Enrolamiento* (`/api/gym/latest-scan`) para que su sistema atrape el UID escaneado en tiempo real y no tengan que tipearlo manualmente.

---

## 🗺️ Tareas del Proyecto (Para revisar constantemente)

### Fase 1: Setup y Hardware (✅ Completada)
- [x] (Gabriel) Inicializar Laravel + Breeze + SQLite en GitHub.
- [x] (Gabriel) Programar puente Python-Arduino y lectura de módulo RFID-RC522.
- [x] (Guillermo/Gabriel) Crear migración base `Access` para el registro inicial de la integración.

### Fase 2: Lógica Corporativa y de Integración (🏃 En Progreso)
- [ ] (Guillermo) Migraciones y CRUD completo de `Visitor` y `Destination` (Sistema Corporativo Core).
- [x] (Gabriel) Programar `SensorController` para que guarde el acceso (Mockeado por ahora).
- [x] (Gabriel) Proveer Endpoint de Enrolamiento (HaaS) para que el Gimnasio vincule nuevas tarjetas sin tipeo manual.

### Fase 3: Dashboard Reactivo y Roles (🏃 En Progreso)
- [x] (Sebastián) Implementar Roles (Admin, Seguridad) mediante Middleware.
- [x] (Sebastián) Crear Dashboard de Auditoría en tiempo real con **Livewire**.
### Fase 3: Frontend Avanzado, UI/UX y Vistas (🏃 En Progreso)
- [ ] (Alexia) **CRUD Corporativo:** Diseñar (maquetar) los formularios HTML y tablas para Visitantes y Destinos.
- [ ] (Alexia) **Perfiles del Equipo:** Desarrollar la vista estática "Sobre Nosotros" (Requisito obligatorio).
- [ ] (Alexia) **Landing Page:** Rediseñar `welcome.blade.php` como una página de inicio corporativa.
- [ ] (Alexia) **Dashboard Real-Time:** Aplicar Tailwind CSS y colores a la tabla de accesos en vivo (archivo `access-dashboard.blade.php`).

### Fase 4: Entrega (6 de Julio)
- [ ] (Todos) Pruebas E2E: Tarjeta Física -> Validación de Pago -> Reflejo en Livewire.
- [ ] (Todos) Documentación final y despliegue local para la presentación.
