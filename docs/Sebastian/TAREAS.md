# 🛡️ Tareas de Auditoría, Roles y Livewire (Sebastián Roda)

Este documento concentra las tareas relacionadas a la seguridad y la reactividad del sistema.
*(Nota: Gabriel ha apoyado en la ejecución de estas tareas para acelerar el desarrollo).*

## 1. Sistema de Roles mediante Middleware (✅ Completado)
* Agregar columna `role` a la tabla de usuarios.
* Crear un `RoleMiddleware` que intercepte peticiones.
* Configurar que solo el `admin` pueda acceder al panel de auditoría, mientras que `seguridad` tiene acceso restringido.

## 2. Dashboard Reactivo en Tiempo Real (✅ Completado)
* Implementar **Livewire** para evitar el uso complejo de WebSockets.
* Usar la directiva `wire:poll` para consultar silenciosamente la base de datos cada 2 segundos.
* Mostrar los datos de acceso (UID, Estado, Hora) instantáneamente cuando alguien apoya la tarjeta en el lector.
