# 🔌 Tareas de Hardware y Líder Técnico (Gabriel Pineda)

Tu rol es mantener la arquitectura unida y encargarte del "Mundo Real" (el hardware).

## 1. Puente Hardware-Software (✅ Completado)
* Leer los UIDs usando el módulo RFID-RC522 en C++.
* Capturar el puerto Serial mediante Python (`pyserial`).
* Disparar peticiones HTTP POST hacia el servidor local (Laravel).

## 2. APIs de Integración (✅ Completado)
* **API de Ingreso (`POST /api/sensor/trigger`):** Recibe el dato del sensor y guarda el registro de acceso (Access) en la base de datos simulando comunicación externa.
* **API de Enrolamiento (HaaS) (`GET /api/gym/latest-scan`):** Permite que sistemas de terceros escuchen en tiempo real los últimos escaneos físicos para enrolar usuarios sin tipeo manual.

## 3. Revisión y Despliegue (En Progreso)
* Actuar como Scrum Master: Revisar que los PRs (Pull Requests) de Alexia y Guillermo se integren correctamente en `develop` sin conflictos.
* Preparar el entorno físico para la presentación (Notebook + Arduino conectado + Red Local configurada).
