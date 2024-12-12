<?php

return [
    'ad'				        => 'Directorio Activo',
    'ad_domain'				    => 'Dominio del Directorio Activo',
    'ad_domain_help'			=> 'Algunas veces coincide con el dominio de su correo electrónico, pero no siempre.',
    'ad_append_domain_label'    => 'Añadir nombre de dominio',
    'ad_append_domain'          => 'Añadir nombre de dominio al campo de nombre de usuario',
    'ad_append_domain_help'     => 'El usuario no necesita escribir "usuario@dominio.local", puede escribir únicamente "usuario".',
    'admin_cc_email'            => 'Copiar en correo electrónico',
    'admin_cc_email_help'       => 'Si desea enviar una copia de los correos electrónicos de recepción/devolución que se envían a los usuarios a una cuenta de correo electrónico adicional, escríbala aquí. De lo contrario, deje este campo en blanco.',
    'admin_settings'            => 'Configuración de administración',
    'is_ad'				        => 'Este es un servidor de Directorio Activo',
    'alerts'                	=> 'Alertas',
    'alert_title'               => 'Actualizar ajustes de notificación',
    'alert_email'				=> 'Enviar alertas a',
    'alert_email_help'    => 'Direcciones de correo electrónico o listas de distribución a las que desea que se envíen alertas, separadas por comas',
    'alerts_enabled'			=> 'Alertas de correo electrónico habilitadas',
    'alert_interval'			=> 'Umbral para las alertas de caducidad (en días)',
    'alert_inv_threshold'		=> 'Umbral para alerta de inventario',
    'allow_user_skin'           => 'Permitir al usuario cambiar la apariencia',
    'allow_user_skin_help_text' => 'Si se marca esta casilla, el usuario podrá reemplazar la apariencia de la interfaz con una diferente.',
    'asset_ids'					=> 'Códigos de los activos',
    'audit_interval'            => 'Intervalo de auditoría',
    'audit_interval_help'       => 'Si está obligado a auditar físicamente sus activos con regularidad, introduzca el intervalo en meses que utilice. Si actualiza este valor, se actualizarán todas las "próximas fechas de auditoría" de los activos con una fecha de auditoría próxima.',
    'audit_warning_days'        => 'Umbral para aviso de auditoría',
    'audit_warning_days_help'   => '¿Con cuántos días de antelación es necesario avisar que se deben auditar los activos?',
    'auto_increment_assets'		=> 'Generar incremento automático en las placas de activos',
    'auto_increment_prefix'		=> 'Prefijo (opcional)',
    'auto_incrementing_help'    => 'Habilite primero el incremento automático de las placas de activos antes de configurar esto',
    'backups'					=> 'Copias de seguridad',
    'backups_help'              => 'Crear, descargar y restaurar copias de seguridad ',
    'backups_restoring'         => 'Restaurar desde copia de seguridad',
    'backups_clean' => 'Depure la base de datos de la copia de seguridad antes de restaurarla',
    'backups_clean_helptext' => "Esto puede ser útil si está cambiando entre versiones de bases de datos",
    'backups_upload'            => 'Cargar copia de seguridad',
    'backups_path'              => 'Las copias de seguridad en el servidor se almacenan en <code>:path</code>',
    'backups_restore_warning'   => 'Utilice el botón de restauración <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> para restaurar desde una copia de seguridad anterior. (Actualmente esto no funciona con almacenamiento de archivos S3 o Docker).<br><br>Su <strong>base de datos completa de :app_name y cualquier archivo cargado será completamente reemplazado</strong> por lo que hay en la copia de seguridad.  ',
    'backups_logged_out'         => 'A todos los usuarios existentes, incluido usted, se le cerrará la sesión una vez que la restauración haya finalizado.',
    'backups_large'             => 'Las copias de seguridad muy grandes pueden agotar el tiempo de espera en el intento de restauración y todavía pueden necesitar ser ejecutadas a través de la línea de comandos. ',
    'barcode_settings'			=> 'Configuración del código de barras',
    'confirm_purge'			    => 'Confirmar la purga',
    'confirm_purge_help'		=> 'Introduzca el texto "DELETE" en la casilla de abajo para purgar sus registros borrados. Esta acción no se puede deshacer y borrará PERMANENTAMENTE todos los elementos y usuarios eliminados. Debería hacer primero una copia de seguridad, para estar seguro.',
    'custom_css'				=> 'CSS Personalizado',
    'custom_css_help'			=> 'Introduzca cualquier CSS personalizado que desee utilizar. No incluya las etiquetas &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'URL de restablecimiento de contraseña personalizada',
    'custom_forgot_pass_url_help'	=> 'Esto reemplaza la URL de contraseña olvidada incorporada en la pantalla de inicio de sesión, es útil para dirigir a las personas a la funcionalidad de restablecimiento de contraseña LDAP interna o alojada. Deshabilitará efectivamente la funcionalidad de olvido de contraseña del usuario local.',
    'dashboard_message'			=> 'Mensaje en el tablero',
    'dashboard_message_help'	=> 'Este texto aparecerá en el panel para cualquiera que tenga permiso de ver el Panel.',
    'default_currency'  		=> 'Divisa predeterminada',
    'default_eula_text'			=> 'Acuerdo de uso predeterminado',
    'default_language'			=> 'Idioma predeterminado',
    'default_eula_help_text'	=> 'También puede asociar acuerdos de uso personalizados a categorías específicas.',
    'acceptance_note'           => 'Añada una nota para su decisión (opcional)',
    'display_asset_name'        => 'Mostrar nombre del activo',
    'display_checkout_date'     => 'Mostrar fecha de asignación',
    'display_eol'               => 'Mostrar fin de soporte (EOL) en la vista de tabla',
    'display_qr'                => 'Mostrar Códigos QR',
    'display_alt_barcode'		=> 'Mostrar códigos de barras de 1D',
    'email_logo'                => 'Logo de correo electrónico',
    'barcode_type'				=> 'Tipo de códigos de barras de 2D',
    'alt_barcode_type'			=> 'Tipo de código de barras de 1D',
    'email_logo_size'       => 'Los logotipos cuadrados en el correo electrónico se ven mejor. ',
    'enabled'                   => 'Habilitado',
    'eula_settings'				=> 'Configuración de los acuerdos de uso',
    'eula_markdown'				=> 'Estos acuerdos de uso permiten <a href="https://help.github.com/articles/github-flavored-markdown/">markdown estilo Github</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Los tipos de archivo aceptados son ico, png y gif. Es posible que otros formatos de imagen no funcionen en todos los navegadores.',
    'favicon_size'          => 'Los Favicons deben ser imágenes cuadradas, de 16x16 píxeles.',
    'footer_text'               => 'Texto adicional en el pie de página ',
    'footer_text_help'          => 'Este texto aparecerá en el lado derecho del pie de página. Los enlaces son permitidos usando <a href="https://help.github.com/articles/github-flavored-markdown/">markdown estilo Github</a>. Los saltos de línea, encabezados, imágenes, etc. pueden dar lugar a resultados impredecibles.',
    'general_settings'			=> 'Configuración general',
    'general_settings_keywords' => 'soporte de la compañía, firma, aceptación, formato de correo electrónico, formato de nombre de usuario, imágenes, por página, miniatura, acuerdo de uso, términos y condiciones, gravatar, términos de servicio, tablero de indicadores, privacidad',
    'general_settings_help'     => 'Acuerdo de uso predeterminado y más',
    'generate_backup'			=> 'Generar Respaldo',
    'google_workspaces'         => 'Google Workspace',
    'header_color'              => 'Color del encabezado',
    'info'                      => 'Estos ajustes le permiten personalizar ciertos aspectos de su instalación.',
    'label_logo'                => 'Logo de etiqueta',
    'label_logo_size'           => 'Los logos cuadrados se ven mejor - se mostrarán en la parte superior derecha de cada etiqueta de activo. ',
    'laravel'                   => 'Versión de Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Grupo de permisos predeterminado',
    'ldap_default_group_info'   => 'Seleccione un grupo para asignar a los usuarios recién sincronizados. Recuerde que un usuario asume los permisos del grupo que le han asignado.',
    'no_default_group'          => 'Ningún grupo por defecto',
    'ldap_help'                 => 'LDAP/Directorio Activo',
    'ldap_client_tls_key'       => 'Llave TLS del cliente LDAP',
    'ldap_client_tls_cert'      => 'LDAP Certificado TLS del lado del cliente',
    'ldap_enabled'              => 'LDAP activado',
    'ldap_integration'          => 'Integración LDAP',
    'ldap_settings'             => 'Configuración LDAP',
    'ldap_client_tls_cert_help' => 'El certificado TLS del lado del cliente y la clave para las conexiones LDAP normalmente solo son útiles en las configuraciones de Google Workspace con "LDAP Seguro". Ambas son requeridas.',
    'ldap_location'             => 'Ubicación LDAP',
'ldap_location_help'             => 'El campo Location (ubicación) de Ldap debe utilizarse si <strong>una OU no está siendo utilizada en el Base Bind DN (DN del enlace base).</strong> Deje este espacio en blanco si se utiliza una búsqueda OU.',
    'ldap_login_test_help'      => 'Introduzca un nombre de usuario y una contraseña LDAP válidos del DN base que especificó anteriormente para comprobar si el inicio de sesión LDAP está configurado correctamente. PRIMERO DEBE GUARDAR LA CONFIGURACIÓN LDAP ACTUALIZADA.',
    'ldap_login_sync_help'      => 'Esto solo comprueba que el LDAP puede sincronizarse correctamente. Si su solicitud de autenticación LDAP no es correcta, los usuarios aún no podrían iniciar sesión. PRIMERO DEBE GUARDAR LA CONFIGURACIÓN LDAP ACTUALIZADA.',
    'ldap_manager'              => 'Gestor LDAP',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Esto debería comenzar con ldap:// (sin cifrado) o con ldaps:// (para TLS o SSL)',
    'ldap_server_cert'			=> 'Validación del certificado LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Permitir certificado SSL inválido',
    'ldap_server_cert_help'		=> 'Seleccione esta casilla si está utilizando un certificado SSL autofirmado y desea aceptar un certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Esto se debe seleccionar si se está ejecutando STARTTLS en el servidor LDAP. ',
    'ldap_uname'                => 'Nombre de usuario de enlace LDAP (LDAP Bind Username)',
    'ldap_dept'                 => 'Departamento LDAP',
    'ldap_phone'                => 'Número de teléfono LDAP',
    'ldap_jobtitle'             => 'Cargo LDAP',
    'ldap_country'              => 'País LDAP',
    'ldap_pword'                => 'Contraseña de enlace LDAP',
    'ldap_basedn'               => 'DN del enlace base (Base Bind DN)',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronizar contraseña del LDAP',
    'ldap_pw_sync_help'         => 'Desmarque esta casilla si no desea mantener las contraseñas LDAP sincronizadas con las contraseñas locales. Si desactiva esta opción, los usuarios no podrán iniciar sesión si, por algún motivo, no se puede acceder al servidor LDAP.',
    'ldap_username_field'       => 'Campo nombre de usuario',
    'ldap_lname_field'          => 'Apellido',
    'ldap_fname_field'          => 'Nombre LDAP',
    'ldap_auth_filter_query'    => 'Consulta de autentificación LDAP',
    'ldap_version'              => 'Versión LDAP',
    'ldap_active_flag'          => 'Flag activo LDAP',
    'ldap_activated_flag_help'  => 'Este valor se utiliza para determinar si un usuario sincronizado puede iniciar sesión en Snipe-IT. <strong>No afecta a la capacidad de asignarles o retirarles elementos</strong>, y debería ser el <strong>nombre de atributo</strong> dentro de su AD/LDAP, <strong>no el valor</strong>. <br><br>Si este campo está configurado a un nombre de campo que no existe en su AD/LDAP, o el valor en el campo AD/LDAP se establece en <code>0</code> o <code>falso</code>, <strong>el inicio de sesión de usuario será deshabilitado</strong>. Si el valor en el campo AD/LDAP está establecido en <code>1</code> o <code>true</code> o <em>cualquier otro texto</em> significa que el usuario puede iniciar sesión. Cuando el campo está en blanco en su AD, respetamos el atributo <code>userAccountControl</code>, que generalmente permite a los usuarios no suspendidos iniciar sesión.',
    'ldap_emp_num'              => 'Número de empleado LDAP',
    'ldap_email'                => 'Correo electrónico LDAP',
    'ldap_test'                 => 'Probar LDAP',
    'ldap_test_sync'            => 'Prueba de sincronización LDAP',
    'license'                   => 'Licencia de software',
    'load_remote'               => 'Cargar avatares remotos',
    'load_remote_help_text'		=> 'Desmarque esta casilla si su instalación no puede cargar secuencias de comandos (scripts) desde Internet . Esto evitará que Snipe-IT intente cargar avatares de Gravatar u otras fuentes externas.',
    'login'                     => 'Intentos de inicio de sesión',
    'login_attempt'             => 'Intento de inicio de sesión',
    'login_ip'                  => 'Dirección IP',
    'login_success'             => '¿Exitoso?',
    'login_user_agent'          => 'Agente de usuario',
    'login_help'                => 'Lista de intentos de inicio de sesión',
    'login_note'                => 'Nota en inicio de sesión',
    'login_note_help'           => 'Opcionalmente incluya algunas frases en su pantalla de inicio de sesión, por ejemplo para ayudar a las personas que han encontrado un dispositivo perdido o robado. Este campo acepta <a href="https://help.github.com/articles/github-flavored-markdown/">markdown estilo Github</a>',
    'login_remote_user_text'    => 'Opciones de inicio de sesión de usuario remoto',
    'login_remote_user_enabled_text' => 'Habilitar inicio de sesión con encabezado de usuario remoto',
    'login_remote_user_enabled_help' => 'Esta opción habilita la autenticación mediante el encabezado REMOTE_USER de acuerdo con la "Interfaz de puerta de enlace común (rfc3875)"',
    'login_common_disabled_text' => 'Deshabilitar otros mecanismos de autenticación',
    'login_common_disabled_help' => 'Esta opción desactiva otros mecanismos de autenticación. Simplemente habilite esta opción si está seguro de que su inicio de sesión REMOTE_USER ya está funcionando',
    'login_remote_user_custom_logout_url_text' => 'URL de cierre de sesión personalizado',
    'login_remote_user_custom_logout_url_help' => 'Si se proporciona una URL aquí, los usuarios serán redirigidos a esta URL después de que el usuario cierre la sesión de Snipe-IT. Esto es útil para cerrar correctamente las sesiones de usuario de su proveedor de autenticación.',
    'login_remote_user_header_name_text' => 'Cabecera de nombre de usuario personalizado',
    'login_remote_user_header_name_help' => 'Usar la cabecera especificada en lugar de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usar en la impresión',
    'logo_print_assets_help'    => 'Utilice la marca de la empresa en las listas de activos imprimibles ',
    'full_multiple_companies_support_help_text' => 'Limitar los usuarios asignados a compañías (incluyendo administradores) solo a los activos de esa compañía.',
    'full_multiple_companies_support_text' => 'Soporte completo a múltiples compañías',
    'show_in_model_list'   => 'Mostrar en menús desplegables de modelos',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versión de PHP',
    'php_info'                  => 'Información de PHP',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, sistema, información',
    'php_overview_help'         => 'Información del sistema PHP',
    'php_gd_info'               => 'Debe instalar php-gd para mostrar códigos QR, consulte las instrucciones de instalación.',
    'php_gd_warning'            => 'PHP Image Processing y GD plugin NO están instalados.',
    'pwd_secure_complexity'     => 'Complejidad de la contraseña',
    'pwd_secure_complexity_help' => 'Seleccione las reglas de complejidad de las contraseñas que desee aplicar.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'La contraseña no puede ser la misma que el nombre, apellido, correo electrónico o nombre de usuario',
    'pwd_secure_complexity_letters' => 'Requiere al menos una letra',
    'pwd_secure_complexity_numbers' => 'Requiere al menos un número',
    'pwd_secure_complexity_symbols' => 'Requiere al menos un símbolo',
    'pwd_secure_complexity_case_diff' => 'Requiere al menos una mayúscula y una minúscula',
    'pwd_secure_min'            => 'Caracteres mínimos de la contraseña',
    'pwd_secure_min_help'       => 'El valor mínimo permitido es 8',
    'pwd_secure_uncommon'       => 'Evitar contraseñas comunes',
    'pwd_secure_uncommon_help'  => 'Esto impedirá que los usuarios usen contraseñas comunes de las 10,000 contraseñas más usuales reportadas en fugas de datos.',
    'qr_help'                   => 'Habilite primero los códigos QR para configurar esto',
    'qr_text'                   => 'Texto del código QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Actualizar ajustes de SAML',
    'saml_help'                 => 'Configuración SAML',
    'saml_enabled'              => 'SAML activado',
    'saml_integration'          => 'Integración SAML',
    'saml_sp_entityid'          => 'ID de la entidad',
    'saml_sp_acs_url'           => 'URL del Servicio de Consumidor de Afirmaciones (ACS)',
    'saml_sp_sls_url'           => 'URL del Servicio de cierre de sesión único (SLS)',
    'saml_sp_x509cert'          => 'Certificado público',
    'saml_sp_metadata_url'      => 'URL de los metadatos',
    'saml_idp_metadata'         => 'Metadatos SAML IdP',
    'saml_idp_metadata_help'    => 'Puede especificar los metadatos IdP usando un archivo URL o XML.',
    'saml_attr_mapping_username' => 'Asociar atributo - Nombre de usuario',
    'saml_attr_mapping_username_help' => 'NameID se utilizará si la asociación de atributos no está especificada o no es válida.',
    'saml_forcelogin_label'     => 'Forzar inicio de sesión SAML',
    'saml_forcelogin'           => 'Hacer de SAML el método de inicio de sesión principal',
    'saml_forcelogin_help'      => 'Puede usar \'/login?nosaml\' para ir a la página de inicio de sesión normal.',
    'saml_slo_label'            => 'Cerrar sesión única SAML',
    'saml_slo'                  => 'Enviar una solicitud de salida a IdP al cerrar sesión',
    'saml_slo_help'             => 'Esto causará que el usuario sea redirigido primero a la IdP al cerrar sesión. Dejar desmarcado si el IdP no soporta correctamente SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'Ajustes personalizados de SAML',
    'saml_custom_settings_help' => 'Puede especificar ajustes adicionales a la biblioteca onelogin/php-saml. Úselo bajo su propio riesgo.',
    'saml_download'             => 'Descargar metadatos',
    'setting'                   => 'Configuración',
    'settings'                  => 'Configuraciones',
    'show_alerts_in_menu'       => 'Mostrar alertas en el menú superior',
    'show_archived_in_list'     => 'Activos archivados',
    'show_archived_in_list_text'     => 'Mostrar activos archivados en el listado de "todos los activos"',
    'show_assigned_assets'      => 'Mostrar activos asignados a activos',
    'show_assigned_assets_help' => 'Mostrar activos que fueron asignados a otros activos en Ver usuario -> Activos, Ver usuario -> Información -> Imprimir todos los asignados y en Cuenta -> Ver elementos asignados.',
    'show_images_in_email'     => 'Mostrar imágenes en correos electrónicos',
    'show_images_in_email_help'   => 'Desmarque esta casilla si su instalación de Snipe-IT está detrás de una red privada o VPN y los usuarios fuera de la red no pueden cargar las imágenes publicadas desde este servidor de Snipe-IT en sus correos electrónicos.',
    'site_name'                 => 'Nombre del sitio',
    'integrations'               => 'Integraciones',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Webhook general',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Probar para guardar',
    'webhook_title'               => 'Actualizar ajustes de Webhook',
    'webhook_help'                => 'Ajustes de integración',
    'webhook_botname'             => 'Nombre de Bot de :app',
    'webhook_channel'             => 'Canal de :app',
    'webhook_endpoint'            => 'Endpoint de :app',
    'webhook_integration'         => 'Configuración de :app',
    'webhook_test'                 =>'Probar integración con :app',
    'webhook_integration_help'    => 'La integración con :app es opcional, sin embargo, el punto final (endpoint) y el canal son necesarios si desea usarla. Para configurar la integración con :app, primero debe crear <a href=":webhook_link" target="_new" rel="noopener">un webhook entrante</a> en su cuenta :app. Haga clic en el botón <strong>Probar integración con :app</strong> para confirmar que su configuración es correcta antes de guardar. ',
    'webhook_integration_help_button'    => 'Una vez que haya guardado la información de :app, aparecerá un botón de prueba.',
    'webhook_test_help'           => 'Compruebe si su integración con :app está configurada correctamente. PRIMERO DEBE GUARDAR LA CONFIGURACION ACTUALIZADA DE :app.',
    'shortcuts_enabled'         => 'Habilitar accesos directos',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Tecla de acceso, <strong>Mac</strong>: Control + Opción + Tecla de acceso',
    'snipe_version'  			=> 'Versión de Snipe-IT',
    'support_footer'            => 'Enlace al soporte en el pie de página ',
    'support_footer_help'       => 'Especifique quién puede ver los enlaces a la información de soporte de Snipe-IT y al manual de usuario',
    'version_footer'            => 'Versión en el pie de página ',
    'version_footer_help'       => 'Especifique quién puede ver la versión de Snipe-IT y el número de compilación.',
    'system'                    => 'Información del sistema',
    'update'                    => 'Actualizar configuraciones',
    'value'                     => 'Valor',
    'brand'                     => 'Marca',
    'brand_keywords'            => 'pie de página, logotipo, impresión, tema, apariencia, encabezado, colores, color, css',
    'brand_help'                => 'Logo, nombre del sitio',
    'web_brand'                 => 'Tipo de marca en la web',
    'about_settings_title'      => 'Acerca de las configuraciones',
    'about_settings_text'       => 'Estas configuraciones le permiten personalizar ciertos aspectos de su instalación.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensiones de la etiqueta (pulgadas)',
    'next_auto_tag_base'        => 'Siguiente incremento automático',
    'page_padding'              => 'Márgenes de página (pulgadas)',
    'privacy_policy_link'       => 'Enlace a la política de privacidad',
    'privacy_policy'            => 'Política de Privacidad',
    'privacy_policy_link_help'  => 'Si se incluye una url aquí, un enlace a su política de privacidad se incluirá en el pie de página de la aplicación y en cualquier correo electrónico que el sistema envíe, de conformidad con el GDPR. ',
    'purge'                     => 'Purgar registros eliminados',
    'purge_deleted'             => 'Purgar eliminados ',
    'labels_display_bgutter'    => 'Borde inferior de la etiqueta',
    'labels_display_sgutter'    => 'Borde lateral de la etiqueta',
    'labels_fontsize'           => 'Tamaño de letra de la etiqueta',
    'labels_pagewidth'          => 'Ancho de la hoja de etiqueta',
    'labels_pageheight'         => 'Altura de la hoja de etiqueta',
    'label_gutters'        => 'Espacio entre etiquetas (pulgadas)',
    'page_dimensions'        => 'Dimensiones de la página (pulgadas)',
    'label_fields'          => 'Campos visibles de la etiqueta',
    'inches'        => 'pulgadas',
    'width_w'        => 'ancho',
    'height_h'        => 'alto',
    'show_url_in_emails'                => 'Enlace a Snipe-IT en correos electrónicos',
    'show_url_in_emails_help_text'      => 'Desmarque esta casilla si no desea vincular su instalación de Snipe-IT en el pie de página de correo electrónico. Útil si la mayoría de sus usuarios nunca se conectan. ',
    'text_pt'        => 'puntos',
    'thumbnail_max_h'   => 'Altura máxima de la miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima en píxeles para mostrar las miniaturas en la vista de listado. Mín 25, máx 500.',
    'two_factor'        => 'Autenticación de dos factores',
    'two_factor_secret'        => 'Código de verificación de dos factores',
    'two_factor_enrollment'        => 'Inscripción en verificación de dos factores',
    'two_factor_enabled_text'        => 'Activar la verificación de dos factores',
    'two_factor_reset'        => 'Restablecer el secreto en verificación de dos factores',
    'two_factor_reset_help'        => 'Esto obligará al usuario a inscribir de nuevo su dispositivo en su aplicación de autenticación. Esto puede ser útil en caso de pérdida o robo del dispositivo actualmente registrado. ',
    'two_factor_reset_success'          => 'Dispositivo de verificación de dos factores restablecido correctamente',
    'two_factor_reset_error'          => 'Error al restablecer el dispositivo de verificación de doble factor',
    'two_factor_enabled_warning'        => 'Al activar el doble factor si no está activado, se le obligará inmediatamente a autenticarse con un dispositivo registrado en Google Auth. Tendrá la posibilidad de inscribir su dispositivo si uno no está inscrito actualmente.',
    'two_factor_enabled_help'        => 'Esto activará la autenticación de dos factores mediante Google Authenticator.',
    'two_factor_optional'        => 'Selectivo (los usuarios pueden activar o desactivar si está permitido)',
    'two_factor_required'        => 'Requerido para todos los usuarios',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'	=> 'Ingrese el código de verificación de dos factores',
    'two_factor_config_complete'	=> 'Enviar código',
    'two_factor_enabled_edit_not_allowed' => 'El administrador no le permite modificar esta configuración.',
    'two_factor_enrollment_text'	=> "Se requiere autenticación de dos factores, sin embargo su dispositivo aún no ha sido inscrito. Abra la aplicación Google Authenticator y escanee el código QR que aparece a continuación para registrar su dispositivo. Una vez que haya registrado su dispositivo, introduzca el código en la parte inferior",
    'require_accept_signature'      => 'Solicitar firma',
    'require_accept_signature_help_text'      => 'Al activar esta función, los usuarios tendrán que firmar físicamente la aceptación de un activo.',
    'require_checkinout_notes'  => 'Require Notes on Checkin/Checkout',
    'require_checkinout_notes_help_text'    => 'Enabling this feature will require the note fields to be populated when checking in or checking out an asset.',
    'left'        => 'izquierda',
    'right'        => 'derecha',
    'top'        => 'arriba',
    'bottom'        => 'fondo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de serie únicos',
    'unique_serial_help_text'                => 'Al marcar esta casilla, se aplicará una restricción a los activos para tener números de serie únicos',
    'zerofill_count'        => 'Longitud de los números en las placas de los activos, incluyendo los ceros de relleno',
    'username_format_help'   => 'Esta configuración solo será utilizada por el proceso de importación si no se proporciona un nombre de usuario y tenemos que generar un nombre de usuario por usted.',
    'oauth_title' => 'Configuración de la API de OAuth',
    'oauth_clients' => 'Clientes OAuth',
    'oauth' => 'OAuth',
    'oauth_help' => 'Configuración del punto final (endpoint) OAuth',
    'oauth_no_clients' => 'Aún no ha creado ningún cliente OAuth.',
    'oauth_secret' => 'Secreto',
    'oauth_authorized_apps' => 'Aplicaciones autorizadas',
    'oauth_redirect_url' => 'URL de redireccionamiento',
    'oauth_name_help' => ' Algo que sus usuarios reconocerán y en lo que confiarán.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'URL de devolución de llamada de autorización de su aplicación (callback URL).',
    'create_client' => 'Crear cliente',
    'no_scopes' => 'Sin scopes',
    'asset_tag_title' => 'Actualizar la configuración de las placas de activos',
    'barcode_title' => 'Actualizar la configuración de los códigos de barras',
    'barcodes' => 'Códigos de barras',
    'barcodes_help_overview' => 'Configuración de código de barras &amp; QR',
    'barcodes_help' => 'Esto intentará eliminar códigos de barras almacenados en caché. Normalmente solo se usa si la configuración del código de barras ha cambiado o si ha cambiado la URL de Snipe-IT. Los códigos de barras se volverán a generar la próxima vez que se acceda a ellos.',
    'barcodes_spinner' => 'Intentando eliminar archivos...',
    'barcode_delete_cache' => 'Borrar caché de código de barras',
    'branding_title' => 'Actualizar la configuración de la marca',
    'general_title' => 'Actualizar la configuración general',
    'mail_test' => 'Enviar prueba',
    'mail_test_help' => 'Esto intentará enviar un correo de prueba a :replyto.',
    'filter_by_keyword' => 'Filtrar por palabra clave',
    'security' => 'Seguridad',
    'security_title' => 'Actualizar la configuración de seguridad',
    'security_keywords' => 'contraseña, contraseñas, requisitos, dos factores, contraseñas comunes, inicio de sesión remoto, autenticación',
    'security_help' => 'Verificación de dos factores y restricciones de contraseña',
    'groups_keywords' => 'permisos, grupos de permisos, autorización',
    'groups_help' => 'Grupos de permisos',
    'localization' => 'Localización',
    'localization_title' => 'Actualizar la configuración de localización',
    'localization_keywords' => 'localización, moneda, local, ubicación, zona horaria, internacional, internacionalización, idioma, traducción',
    'localization_help' => 'Idioma, visualización de la fecha',
    'notifications' => 'Notificaciones',
    'notifications_help' => 'Configuración de alertas por correo electrónico y de auditoría',
    'asset_tags_help' => 'Incrementos y prefijos',
    'labels' => 'Etiquetas',
    'labels_title' => 'Actualizar configuración de etiquetas',
    'labels_help' => 'Tamaños de etiqueta &amp; ajustes',
    'purge_keywords' => 'eliminar permanentemente',
    'purge_help' => 'Purgar registros eliminados',
    'ldap_extension_warning' => 'No parece que la extensión LDAP esté instalada o habilitada en este servidor. Todavía puede guardar su configuración, pero necesitará habilitar la extensión LDAP para PHP antes de que funcione la sincronización LDAP o el inicio de sesión.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Número de empleado',
    'create_admin_user' => 'Crear un usuario ::',
    'create_admin_success' => '¡Éxito! ¡Su usuario admin ha sido añadido!',
    'create_admin_redirect' => '¡Haga clic aquí para acceder a su aplicación!',
    'setup_migrations' => 'Migraciones de base de datos ::',
    'setup_no_migrations' => 'No hay nada que migrar. ¡Las tablas de la base de datos ya estaban configuradas!',
    'setup_successful_migrations' => 'Se han creado las tablas de la base de datos',
    'setup_migration_output' => 'Salida de Migración:',
    'setup_migration_create_user' => 'Siguiente: Crear usuario',
    'ldap_settings_link' => 'Página de configuración de LDAP',
    'slack_test' => 'Prueba de integración de <i class="fab fa-slack"></i>',
    'label2_enable'           => 'Nuevo motor de etiquetas',
    'label2_enable_help'      => 'Cambiar al nuevo motor de etiquetas. <b>Nota: Deberá guardar esta configuración antes de configurar otros parámetros.</b>',
    'label2_template'         => 'Plantilla',
    'label2_template_help'    => 'Seleccione qué plantilla utilizar para la generación de etiquetas',
    'label2_title'            => 'Título',
    'label2_title_help'       => 'El título para mostrar en etiquetas que lo soportan',
    'label2_title_help_phold' => 'El marcador de posición <code>{COMPANY}</code> será reemplazado con el nombre de la compañía del activo',
    'label2_asset_logo'       => 'Usar logo de activos',
    'label2_asset_logo_help'  => 'Utilice el logotipo de la compañía asignada, en lugar del valor en <code>:setting_name</code>',
    'label2_1d_type'          => 'Tipo de código de barras 1D',
    'label2_1d_type_help'     => 'Formato para códigos de barras 1D',
    'label2_2d_type'          => 'Tipo de códigos de barras 2D',
    'label2_2d_type_help'     => 'Formato para códigos de barras 2D',
    'label2_2d_target'        => 'Apuntamiento del código de barras 2D',
    'label2_2d_target_help'   => 'La URL a la que apunta el código de barras 2D cuando se escanea',
    'label2_fields'           => 'Definiciones del campo',
    'label2_fields_help'      => 'Los campos se pueden añadir, eliminar y reordenar en la columna izquierda. Para cada campo, se pueden agregar, eliminar y reordenar múltiples opciones para etiquetas y para orígenes de datos en la columna derecha.',
    'help_asterisk_bold'    => 'Texto introducido como <code>**texto**</code> se mostrará como negrita',
    'help_blank_to_use'     => 'Deje en blanco para usar el valor de <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> usará el valor de <code>:setting_name</code>. <br>Tenga en cuenta que el valor de los códigos de barra debe estar en cumplimiento con la especificación respectiva para que sean generados exitosamente. Por favor lea <a href="https://snipe-it.readme.io/docs/barcodes">la documentación <i class="fa fa-external-link"></i></a> para más detalles. ',
    'default'               => 'Por defecto',
    'none'                  => 'Ninguna',
    'google_callback_help' => 'Esto debe introducirse como URL de devolución de llamada (callback) en la configuración de su aplicación de Google OAuth en la <strong><a href="https://console.cloud.google.com/" target="_blank">consola de desarrollador de Google <i class="fa fa-external-link" aria-hidden="true"></i></a></strong> de su organización .',
    'google_login'      => 'Configuración de inicio de sesión de Google Workspace',
    'enable_google_login'  => 'Permitir a los usuarios iniciar sesión con Google Workspace',
    'enable_google_login_help'  => 'Los usuarios no serán creados automáticamente. Deben tener una cuenta existente aquí Y en Google Workspace, y su nombre de usuario aquí debe coincidir con su dirección de correo electrónico de Google Workspace. ',
    'mail_reply_to' => 'Dirección de respuesta de correo',
    'mail_from' => 'Correo desde la dirección',
    'database_driver' => 'Controlador de base de datos',
    'bs_table_storage' => 'Almacenamiento de tabla',
    'timezone' => 'Zona horaria',
    'profile_edit'          => 'Editar perfil',
    'profile_edit_help'          => 'Permitir que los usuarios editen sus propios perfiles.',
    'default_avatar' => 'Cargar avatar personalizado por defecto',
    'default_avatar_help' => 'Esta imagen se mostrará como la imagen de perfil si el usuario no tiene foto de perfil.',
    'restore_default_avatar' => 'Restaurar <a href=":default_avatar" data-toggle="lightbox" data-type="image">avatar original por defecto del sistema</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Advertencia para próximos ingresos',
    'due_checkin_days_help' => '¿Cuántos días antes de la fecha prevista de ingreso de un activo debe figurar en la página «Próximos a ingresar»?',
    'no_groups' => 'Todavía no se han creado grupos. Para agregar uno, visite<code>Configuración de administración > Grupos de permisos</code>.',

];
