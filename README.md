# 🤝 PatrocinadoresProyectos - Sistema de Gestión de Patrocinadores y Proyectos

Una aplicación web desarrollada en **PHP (CodeIgniter 3)** para la administración centralizada, registro y vinculación de proyectos e instituciones patrocinadoras (*sponsors*).

---

## 📌 1. Problema
Las organizaciones, fundaciones o equipos que gestionan múltiples proyectos sociales, académicos o tecnológicos a menudo enfrentan dificultades para llevar un control claro de los patrocinadores que respaldan cada iniciativa. La gestión mediante hojas de cálculo descentralizadas genera duplicidad de datos, falta de visibilidad del presupuesto asignado y complicaciones al dar seguimiento a las alianzas estratégicas.

---

## 🎯 2. Objetivo
Desarrollar una solución web centralizada y modular basada en el patrón **MVC (Modelo-Vista-Controlador)** que facilite el registro, la consulta, edición y eliminación de **Proyectos** y **Patrocinadores (Sponsors)**, permitiendo una gestión transparente y eficiente del financiamiento y apoyo a iniciativas.

---

## 🛠️ 3. Stack
- **Lenguaje Principal**: PHP 7.4+ / 8.x
- **Framework Backend**: CodeIgniter 3 (Arquitectura MVC)
- **Base de Datos**: MySQL / MariaDB (Driver `mysqli`, Base de datos `patrosinadoresdeproyectos`)
- **Frontend**: HTML5, CSS3, JavaScript / jQuery y Bootstrap
- **Servidor Web Recomendado**: Apache / Nginx (XAMPP, WAMP, Laragon o LAMP/LEMP)

---

## 📐 4. Arquitectura
El proyecto sigue el patrón MVC nativo del framework CodeIgniter 3:

```text
patrosinadoresProyectos/
├── application/
│   ├── config/             # Configuración del sistema (database.php, config.php, routes.php)
│   ├── controllers/        # Controladores de la aplicación
│   │   ├── Homes.php        # Controlador del panel de inicio
│   │   ├── Projects.php     # Controlador del módulo de proyectos (CRUD)
│   │   ├── Sponsors.php     # Controlador del módulo de patrocinadores (CRUD)
│   │   └── Welcome.php      # Controlador predeterminado
│   ├── models/             # Modelos de consulta y persistencia en MySQL
│   │   ├── Project.php      # Gestión de datos de proyectos
│   │   └── Sponsor.php      # Gestión de datos de patrocinadores
│   └── views/              # Vistas HTML/PHP organizadas por sección
│       ├── header.php        # Encabezado global y navegación
│       ├── footer.php        # Pie de página global
│       ├── Homes/            # Vista de la página principal
│       ├── Projects/         # Vistas del módulo de proyectos (index, newProject, updateProject)
│       └── Sponsors/         # Vistas del módulo de patrocinadores (index, newSponsor, updateSponsor)
├── system/                 # Núcleo del framework CodeIgniter 3
└── index.php               # Punto de entrada de la aplicación web
```

---

## ⚙️ 5. Funcionalidades
- 📁 **Gestión de Proyectos**: Registro de nuevos proyectos, actualización de datos, consulta en tabla interactiva y eliminación.
- 🤝 **Administración de Patrocinadores (Sponsors)**: Alta, modificación y listado de patrocinadores/empresas aportantes.
- 🔗 **Relación Proyecto-Patrocinador**: Vinculación entre proyectos activos y sus respectivos sponsors.
- 🏠 **Panel de Inicio (Homes)**: Vista principal con accesos directos a la gestión de proyectos y patrocinadores.

---

## 📊 6. Estado Actual
🟢 **Funcional / Desarrollado (v1.0.0)**: Módulos de Proyectos y Patrocinadores completamente maquetados y conectados a la base de datos MySQL con operaciones CRUD funcionales.

---

## 🖼️ 7. Capturas

> *Sección reservada para agregar capturas de pantalla de la interfaz de usuario (Vista de Inicio, Módulo de Proyectos, Formulario de Patrocinadores, etc.).*

---

## 🚀 8. Cómo Ejecutarlo

### Requisitos previos
- Servidor web local (**XAMPP**, **WAMP**, **Laragon**) con **PHP 7.4+** o **8.x**.
- Servidor de base de datos **MySQL** / **MariaDB**.

### Pasos de instalación y configuración
1. **Clonar o descargar el repositorio**:
   Copiar el proyecto a la carpeta pública de tu servidor (ej. `C:\xampp\htdocs\patrosinadoresProyectos` en XAMPP):
   ```bash
   git clone https://github.com/RomelAntes/patrosinadoresProyectos.git
   ```

2. **Crear la Base de Datos**:
   - Ingresa a phpMyAdmin (`http://localhost/phpmyadmin`).
   - Crea una base de datos denominada `patrosinadoresdeproyectos`.
   - Importa el archivo de script SQL con la estructura de tablas.

3. **Configurar la conexión a MySQL**:
   Verifica la configuración en el archivo [`application/config/database.php`](file:///C:/Users/User/Documents/GitHub/patrosinadoresProyectos/application/config/database.php):
   ```php
   'hostname' => 'localhost',
   'username' => 'root',
   'password' => '',
   'database' => 'patrosinadoresdeproyectos',
   'dbdriver' => 'mysqli',
   ```

4. **Ajustar la URL Base**:
   En [`application/config/config.php`](file:///C:/Users/User/Documents/GitHub/patrosinadoresProyectos/application/config/config.php), configura la ruta base:
   ```php
   $config['base_url'] = 'http://localhost/patrosinadoresProyectos/';
   ```

5. **Ejecutar la aplicación**:
   Abre el navegador e ingresa a: `http://localhost/patrosinadoresProyectos/`.

---

## 🗺️ 9. Roadmap
- [ ] Sistema de autenticación de usuarios y asignación de roles (Administrador, Gestor, Visitante).
- [ ] Módulo de reportes y gráficas de presupuesto aportado por patrocinador.
- [ ] Exportación de registros de proyectos y patrocinadores a **PDF** y **Excel**.
- [ ] Carga de imágenes/logotipos de patrocinadores y documentos adjuntos de proyectos.
