# 📒 Agenda de Contactos Laravel 11 - Parte 02

Este proyecto es una aplicación simple de agenda de contactos, construida con **Laravel 11** y utilizando **Blade** como motor de plantillas.

### 🚀 Tecnologías Utilizadas

- **Laravel 11** - Framework backend del proyecto.
- **Blade** - Motor de plantillas de Laravel para la vista.
- **Bootstrap 5** - Estilos de la interfaz de usuario.
- **Composer** y **npm** - Gestión de dependencias y compilación de activos.

### 📂 Repositorio

Repositorio del proyecto: [jebcdev/AgendaContactosSimple](https://github.com/jebcdev/AgendaContactosSimple)  
Más proyectos de **jebcdev**: [perfil de GitHub](https://github.com/jebcdev)

### 🛠️ Instalación

1. **Clonar el repositorio**:

    ```bash
    git clone https://github.com/jebcdev/AgendaContactosSimple.git
    cd AgendaContactosSimple
    ```

2. **Configurar el archivo `.env`**:

   Copia el archivo de ejemplo `.env.example` y renómbralo a `.env`:

    ```bash
    cp .env.example .env
    ```

   Abre el archivo `.env` y configura las siguientes variables según tu entorno:

    ```env
    APP_NAME="Agenda de Contactos"
    APP_ENV=local
    APP_KEY=base64:GENERADO_AUTOMATICAMENTE
    APP_DEBUG=true
    APP_URL=http://localhost

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=agenda_contactos
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña
    ```

   **Nota**: Asegúrate de que la base de datos especificada (`DB_DATABASE`) esté creada antes de ejecutar las migraciones.

3. **Instalar dependencias**:

    ```bash
    composer install && npm install
    ```

4. **Generar la clave de la aplicación**:

    ```bash
    php artisan key:generate
    ```

5. **Ejecutar migraciones y poblar la base de datos**:

    ```bash
    php artisan migrate:fresh --seed
    ```
