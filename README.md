# app-cuc
proyecto final
# 🚨 APP BOTÓN DE EMERGENCIA

## 📌 Descripción breve

APP BOTÓN DE EMERGENCIA es una aplicación web desarrollada para la gestión de alertas y emergencias mediante un botón de pánico digital. El sistema permite a usuarios autorizados generar alertas de emergencia de manera rápida y remota desde dispositivos con acceso a internet, facilitando la comunicación con administradores, personal de seguridad o contactos de emergencia.

La plataforma está orientada a barrios residenciales, conjuntos habitacionales, pequeños negocios y comunidades que requieran mejorar sus mecanismos de seguridad y monitoreo.

---

# ❗ Problema que resuelve

Actualmente muchas comunidades y pequeños negocios presentan dificultades para reportar situaciones de emergencia de forma rápida y efectiva ante eventos como:

- Robos
- Atracos
- Situaciones de violencia
- Emergencias médicas
- Ingresos no autorizados

Los sistemas tradicionales dependen de teclados físicos o mecanismos limitados que dificultan la reacción inmediata ante una situación de riesgo.

La aplicación busca ofrecer una solución tecnológica moderna que permita:

- Activar alertas remotamente.
- Mejorar los tiempos de respuesta.
- Facilitar el monitoreo de incidentes.
- Mantener trazabilidad y registro de eventos.
- Fortalecer la seguridad comunitaria.

---

# 👥 Usuarios objetivo

El sistema está dirigido a:

- Usuarios residenciales.
- Administradores de conjuntos o edificios.
- Pequeños negocios.
- Empresas de seguridad.
- Frentes de seguridad ciudadanos.
- Comunidades barriales.

---

# 🛠 Tecnologías utilizadas

## Frontend
- HTML5
- CSS3
- JavaScript
- Bootstrap
- AJAX
- jQuery

## Backend
- PHP

## Base de datos
- MySQL

## Herramientas adicionales
- SweetAlert2
- FontAwesome
- Bootstrap Modal
- XAMPP / Apache

---

# ⚙️ Instrucciones de instalación y ejecución

## 1️⃣ Clonar o copiar el proyecto

Copiar el proyecto dentro de la carpeta:

```bash
htdocs/
```

de XAMPP o en el servidor Apache.

Ejemplo:

```bash
C:/xampp/htdocs/alerta/
```

---

## 2️⃣ Crear la base de datos

Abrir phpMyAdmin y crear la base de datos:

```sql
DSC_TECLADO
```
--

## 3️⃣ Importar tablas

Importar el archivo `.sql` del proyecto o crear las tablas manualmente.

Ejemplo tabla principal:

-- --------------------------------------------------------
-- Host:                         45.236.131.58
-- Server version:               8.0.21 - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for DSC_TECLADO
CREATE DATABASE IF NOT EXISTS `DSC_TECLADO` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `DSC_TECLADO`;

-- Dumping structure for table DSC_TECLADO.alerta
CREATE TABLE IF NOT EXISTS `alerta` (
  `celular` text,
  `latitud` text,
  `longitud` text,
  `fecha_act` datetime DEFAULT NULL,
  `estado` text,
  `hora_act` text,
  `numero_cuenta` text,
  `cadena_contaid` text,
  `fecha_atencion` datetime DEFAULT NULL,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table DSC_TECLADO.usuario_boton
CREATE TABLE IF NOT EXISTS `usuario_boton` (
  `user_id` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `password` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `user_name` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `id` text,
  `celular` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `imei` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `direccion` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `barrio` tinytext,
  `celularcuadrante` tinytext,
  `celularemergencia1` tinytext,
  `celularemergencia2` tinytext,
  `celularemergencia3` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;



## 4️⃣ Configurar conexión MySQL

Editar el archivo:

```bash
conexion.php
```

y configurar:

```php
$usuario = "root";
$password = "504971055JULIOrda$";
$base_datos = "DSC_TECLADO";
```

---

## 5️⃣ Ejecutar el proyecto

Iniciar:

- Apache
- MySQL

desde XAMPP.

Abrir en el navegador:

1. Webapp Boton de De Emergencia
    si quiere ejecutar la webapp del boton de panico debe hacer el enlace
    http://botonwifi.xyz/CUC
   
    usuario: admin
    clave : 1234
   
2.  WebApp para ver las emergencias enlace http://botonwifi.xyz/CUC/alerta/

# 🖥 Capturas o prototipo de pantallas

## Pantallas principales del sistema

1. WebApp para ver las emergencias
   
- Login de acceso.
- Dashboard principal.
- Gestión de usuarios.
- Gestión de alertas.
- Detalle de alertas.
- Historial de eventos.

2. Webapp Boton de De Emergencia

<img width="1874" height="903" alt="image" src="https://github.com/user-attachments/assets/bf00a472-ccac-451a-881f-e6970433e503" />

Al ver esta imagen el usuario es admin y la contaseña 1234 al ser correctos las credenciales vamos a observar la siguiente pantalla

<img width="1900" height="889" alt="image" src="https://github.com/user-attachments/assets/696c5399-20a6-462e-abde-0cd4de717ef9" />





# 🔐 Advertencia de uso autorizado y seguro

Este sistema fue desarrollado únicamente con fines académicos y de apoyo a la seguridad comunitaria.

El uso de la aplicación debe realizarse únicamente por usuarios autorizados y responsables. El uso indebido de alertas falsas o accesos no autorizados puede generar afectaciones a la comunidad y responsabilidades legales.

Se recomienda:

- Mantener las credenciales protegidas.
- No compartir usuarios y contraseñas.
- Utilizar conexiones seguras.
- Realizar copias de seguridad periódicas de la base de datos.

El desarrollador no se hace responsable por el uso inadecuado de la plataforma fuera de los fines establecidos.

---

# 👨‍💻 Autor

Proyecto desarrollado por:

**[Tu Nombre]**

Desarrollo Web – Proyecto Académico 2026.
