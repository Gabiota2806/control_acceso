# 💾 Tareas de Backend y Base de Datos (Guillermo Bordón)

Este documento detalla la estructura lógica del sistema corporativo que debes desarrollar.

## 1. Migraciones y Modelos
Debes crear la estructura de base de datos para el uso independiente de nuestro sistema (más allá del gimnasio).
* **Entidad `Visitor` (Visitante):** DNI, Nombre, Apellido, Teléfono, Empresa.
* **Entidad `Destination` (Destino/Área):** Nombre del área (ej. "Oficina Gerencia", "Sala Servidores"), Nivel de seguridad requerido.
* Relaciones: Un visitante se dirige a un destino. Puedes armar una tabla pivote si lo deseas, o simplemente registrar hacia dónde va.

## 2. CRUD Completo
* Crear los Controladores (`VisitorController`, `DestinationController`) con las funciones `index`, `create`, `store`, `edit`, `update`, `destroy`.
* Implementar validaciones estrictas (FormRequests) para que no se puedan guardar visitantes sin DNI o con datos mal formateados.
* *Nota:* Alexia estará diseñando las vistas HTML, por lo que tú solo tienes que concentrarte en inyectarles los datos (`return view('visitors.index', compact('visitors'));`) y recibir los Requests.

## 3. Seeders y Datos de Prueba
* Programar `VisitorSeeder` y `DestinationSeeder` usando Factories para poblar la base de datos con unos 20 visitantes de prueba y 5 áreas corporativas. Esto es vital para que al profesor le parezca un sistema vivo el día de la presentación.
