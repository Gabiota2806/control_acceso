# 🎨 Tareas de Frontend y UI/UX (Alexia Saucedo)

Este documento detalla los requerimientos de diseño para que puedas maquetar sin necesidad de meterte en la lógica de bases de datos. Todo tu trabajo será en las vistas (`.blade.php`) usando **Tailwind CSS**.

## 1. Diseño del CRUD Corporativo
Guillermo se encarga de que los datos se guarden, pero tú debes crear cómo se ven.
* **Archivos recomendados:** Crea `resources/views/visitors/index.blade.php` y `resources/views/visitors/create.blade.php`.
* **Objetivo:** Maquetar una tabla hermosa para listar Visitantes, y un formulario moderno (con sombras, bordes redondeados y colores corporativos) para registrar uno nuevo. Puedes usar componentes de Tailwind gratuitos.

## 2. Pantalla "Perfiles del Equipo"
Requisito obligatorio de la cátedra.
* **Archivo recomendado:** Crea `resources/views/team.blade.php`.
* **Objetivo:** Una vista estática tipo "Sobre Nosotros". Debe contener 4 tarjetas (cards) con la foto o avatar de cada integrante (Gabriel, Alexia, Guillermo, Sebastián), el rol que cumplió en el proyecto y un botón hacia su GitHub.

## 3. Landing Page (Página de Inicio)
* **Archivo:** `resources/views/welcome.blade.php`.
* **Objetivo:** Es lo primero que ve el profesor. Debe parecer la página de un producto de software real. Título llamativo ("Sistema de Control de Accesos Corporativo"), algunos iconos de "Características" (Seguridad, Integración RFID, HaaS) y un botón grande para hacer Login.

## 4. Estilizar el Dashboard Reactivo
Gabriel y Sebastián ya programaron la magia del tiempo real.
* **Archivo:** `resources/views/livewire/access-dashboard.blade.php`.
* **Objetivo:** El archivo actualmente tiene una tabla HTML súper aburrida. Debes limpiarle el CSS en línea (los `style="..."`) y aplicarle clases de Tailwind CSS. Haz que las filas destaquen, usa colores condicionales (ej. textos verdes/rojos dependiendo del estado) y ponle un título bonito.
