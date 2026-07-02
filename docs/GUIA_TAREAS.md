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

---

## 🗺️ Tareas del Proyecto (Para revisar constantemente)

### Fase 1: Setup y Hardware (✅ Completada)
- [x] (Gabriel) Inicializar Laravel + Breeze + SQLite en GitHub.
- [x] (Gabriel) Programar puente Python-Arduino y lectura de módulo RFID-RC522.
- [x] (Guillermo/Gabriel) Crear migración base `Access` para el registro inicial de la integración.

### Fase 2: Lógica Corporativa y de Integración (🏃 En Progreso)
- [ ] (Guillermo) Migraciones y CRUD completo de `Visitor` y `Destination` (Sistema Corporativo Core).
- [ ] (Gabriel) Programar `SensorController` para que haga la petición de estado de pago al Gimnasio.
- [ ] (Gabriel) Proveer el endpoint de la API para que el Gimnasio consulte sus ingresos.

### Fase 3: Dashboard Reactivo y Roles (Pendiente)
- [ ] (Sebastián) Implementar Roles (Admin, Seguridad) mediante Middleware.
- [ ] (Sebastián) Crear Dashboard de Auditoría en tiempo real con **Livewire**.
- [ ] (Alexia) Aplicar diseño profesional (Tailwind) a las tablas del Dashboard.

### Fase 4: Entrega (6 de Julio)
- [ ] (Todos) Pruebas E2E: Tarjeta Física -> Validación de Pago -> Reflejo en Livewire.
- [ ] (Todos) Documentación final y despliegue local para la presentación.
