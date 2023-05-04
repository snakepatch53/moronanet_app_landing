# 📝 RESUMEN DE LA APLICACION WEB

## 📋 DATOS GENERALES

<ul>
    <li><b>Cliente:</b> ✅ Moronanet</li>
    <li><b>Estado:</b> 🎉 En producción</li>
    <li><b>Version:</b> 🚀 1.0.0</li>
    <li><b>Nombre:</b> 😎 Landing Page para la APP 'Clientes Moronanet'</li>
</ul>

## 📋 DESCRIPCION

<p>
    👋 ¡Bienvenido a nuestra aplicación! 👋
    <br><br>
    ¿Te has sentido frustrado alguna vez por no poder encontrar tus facturas, contrato o tickets de soporte técnico de tu proveedor de internet? ¡No te preocupes más! Con nuestra aplicación, tendrás acceso fácil y rápido a toda la información de tus servicios de internet con Moronanet.
    <br><br>
    📱💻 Accede desde cualquier dispositivo 📱💻
    <br><br>
    ¡Ya no tendrás que estar buscando tus documentos en una pila de papeles o en una carpeta de tu ordenador! Con nuestra aplicación, podrás acceder a toda la información desde tu móvil, tablet o computadora.
    <br><br>
    🔒🛡️ Tu información está segura con nosotros 🔒🛡️
    <br><br>
    Nuestra aplicación no recopila información adicional, solo te permite acceder a la información que ya proporcionaste a Moronanet. Además, cualquier información que se recoja para los tickets de soporte técnico se manejará con la más estricta confidencialidad y solo será utilizada para solucionar tus problemas.
    <br><br>
    🙅‍♀️ No te preocupes por la eliminación de información 🙅‍♀️
    <br><br>
    No necesitarás solicitar la eliminación de información, ya que la información se almacenará solo mientras sea necesario para atender tus solicitudes de soporte técnico. Si deseas eliminar tus datos personales, deberás dejar de usar nuestros servicios.
    <br><br>
    ¡Gracias por confiar en nosotros! ¡Descarga nuestra aplicación y facilita tu vida con Moronanet!
    <br><br>
</p>

## 📝 LICENCIA

<p>
    Este proyecto es de código abierto, ¡lo que significa que es completamente libre! 🙌 Puedes usarlo, copiarlo, modificarlo y distribuirlo como desees para tus propios proyectos sin ningún tipo de restricciones. 🚀
    <br><br>
    Nos encanta la idea de que más personas puedan utilizar y mejorar nuestra landing page. ¡Así que adelante y úsala como quieras! 💻
    <br><br>
    ¡Gracias por visitarnos y disfruta del código! 😎
    <br><br>
</p>

# 📦 DOCUMENTACION DE INSTALACION

## ⚙️ INSTALACION AUTOMATICA CON .PS1

<!-- Ejecutalo con powershell
<a href="./src/assets/install_win.rar">Descargar archivo 📥</a> -->

## 📄 VARIABLES DE ENTORNO

Crea el archivo <b><i>.env</i></b> en la raiz del proyecto y configuralo

```env
    # PROJECT
    HTTP_DOMAIN = {{TOUR_DOMAIN}}
    TITLE = {{TITLE_OF_LANDING_PAGE}}
    APP_NAME = {{APP_NAME}}

    # MYSQLI
    DB_HOST = {{YOUR_DB_HOST}}
    DB_USER = {{YOUR_DB_USER}}
    DB_PASS = {{YOUR_DB_PASS}}
    DB_NAME = {{YOUR_DB_NAME}}
    DB_PORT =  {{YOUR_DB_PORT}}
```

## 🐬 MYSQL

Crea la base de datos

```sql
  CREATE DATABASE {{YOUR_DB_NAME}};
```

-   Asegurate de que el nombre de la base de datos sea el mismo que el que usas en el archivo .env
-   Si estas en CPANEL tendras que crearla con ayuda de la interfaz grafica.

### 🛠 CONFIGURACION

Luego puedes usar el servicio de configuración para crear las tablas y los datos inciales:

```http
  {{YOUR_DOMAIN}}/service/configuration
```

para generar la base de datos y las tablas.
Luego es importante que desabilites el servicio de configuración para que no se sobreescriban los datos.

## 🪶 APACHE

Crea el archivo <b><i>.htaccess</i></b> en la raiz del proyecto y configuralo

```htaccess
  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule . index.php [L]

  # Denegar el acceso a los directorios
  Options -Indexes

  <FilesMatch "\.(php|html?)$">
    Order Deny,Allow
    Deny from all
  </FilesMatch>
  <Files "index.php">
    Order Allow,Deny
    Allow from all
  </Files>
```

#### 🛠 En caso de que tu proyecto ya este funcionando con un dominio y quieras usar _https_, puedes agregar esta configuracion en _htaccess_

```htaccess
  RewriteEngine On
  RewriteCond %{HTTPS} !=on
  RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301,NE]
  Header always set Content-Security-Policy "upgrade-insecure-requests;"
```

## 🚪 LOGIN

Para abrir el login puedes presionar la combinacion de teclas " <b><i>CTRL + .</i></b> " o puedes ir a la siguiente ruta

```http
  {{YOUR_DOMAIN}}/panel/login
```

Para iniciar sesion por primera vez usa los siguientes credenciales

```txt
  - USUARIO: admin
  - CONTRASEÑA: admin
```
