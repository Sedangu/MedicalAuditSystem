# 🏥 Sistema de Auditoría Médica

Sistema web para la gestión, control y seguimiento de **auditorías médicas**, diseñado para clínicas, sanatorios y organizaciones de salud.

El proyecto implementa **control de acceso por roles**, paneles dinámicos (dashboard) y visualización del estado de auditorías, manteniendo una arquitectura simple, segura y escalable.

---

## 🚀 Características principales

* 🔐 **Autenticación segura** (login con sesión)
* 👥 **Gestión de roles** (Administrador, Auditor, Médico)
* 📊 **Dashboard dinámico según rol**
* 🏷️ Clasificación de auditorías (Activas, Observadas, Rechazadas)
* 🏥 Módulos por área médica:

  * Ambulatoria
  * Internaciones
  * Bioquímica
  * Odontología
  * Farmacia
* 📈 Gráficas estadísticas con **Chart.js**
* 📄 Exportación de reportes (PDF)
* 🧩 Arquitectura modular y mantenible

---

## 🧠 Arquitectura del sistema

El sistema sigue un enfoque **MVC simplificado**, separando:

* **Lógica de autenticación y roles**
* **Vistas por tipo de usuario**
* **Componentes reutilizables (sidebar, header, etc.)**

### 📁 Estructura del proyecto

```
/ ├── auth/               # Login, logout y control de sesiones
  ├── dashboard/          # Vistas por rol
  │   ├── admin.php
  │   ├── auditor.php
  │   └── medico.php
  ├── partials/           # Componentes reutilizables (sidebar, header)
  ├── assets/
  │   ├── css/
  │   └── js/
  ├── dashboard.php       # Controlador principal del panel
  ├── index.php           # Login
  └── README.md
```

---

## 👤 Roles del sistema

### 👑 Administrador

* Acceso total al sistema
* Visualiza métricas globales
* Gestiona usuarios
* Accede a todas las áreas de auditoría

### 🧾 Auditor

* Accede únicamente a auditorías asignadas
* Visualiza estados (Activas / Observadas)
* Genera reportes

### 🩺 Médico

* Acceso de solo lectura
* Consulta auditorías y reportes

---

## 🔐 Seguridad

* Control de acceso basado en sesión
* Validación de rol en backend (no solo visual)
* Protección de rutas mediante `auth/guard.php`

---

## 📊 Dashboard por rol

El sistema utiliza **un único dashboard (`dashboard.php`)** que carga dinámicamente la vista correspondiente según el rol del usuario:

```php
if ($rol === 'admin') {
    include 'dashboard/admin.php';
} elseif ($rol === 'auditor') {
    include 'dashboard/auditor.php';
} else {
    include 'dashboard/medico.php';
}
```

Esto permite:

* Mantener un solo punto de entrada
* Escalar fácilmente nuevos roles
* Evitar duplicación de código

---

## 🛠️ Tecnologías utilizadas

* **PHP 8+**
* **HTML5 / CSS3**
* **JavaScript (Chart.js)**
* **MySQL** (o compatible)
* **Bootstrap / CSS personalizado**

---

## ⚙️ Instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/usuario/auditoria-medica.git
```

2. Configurar el entorno:

* Servidor Apache o Nginx
* PHP 8 o superior
* Base de datos MySQL

3. Configurar conexión a la base de datos:

Editar el archivo correspondiente en `/config/database.php`.

4. Acceder al sistema:

```
http://localhost/auditoria-medica
```

---

## 📈 Próximas mejoras

* 🔑 Recuperación de contraseña
* 🧾 Auditoría por historial
* 📊 Gráficas en tiempo real
* 📱 Diseño responsive completo
* 🔒 Registro de actividad (logs)

---

## 🤝 Contribuciones

Las contribuciones son bienvenidas.

1. Fork del proyecto
2. Crear una nueva rama
3. Commit con descripción clara
4. Pull Request

---

## 📄 Licencia

Este proyecto se distribuye bajo licencia **MIT**.

---

## ✨ Autor

Desarrollado por **HardSystem**
*Más que una solución*

---

> Sistema pensado para entornos reales de salud, priorizando seguridad, claridad y escalabilidad.
