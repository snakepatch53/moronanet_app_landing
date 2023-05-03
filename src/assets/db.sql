DROP TABLE IF EXISTS info;

CREATE TABLE info (
    info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    info_name VARCHAR(50),
    info_country VARCHAR(50),
    info_province VARCHAR(50),
    info_city VARCHAR(50),
    info_address VARCHAR(50),
    info_location TEXT,
    info_phone VARCHAR(15),
    info_cellphone VARCHAR(15),
    info_email VARCHAR(50),
    info_desc TEXT,
    info_mision TEXT,
    info_vision TEXT,
    info_slider_title VARCHAR(50),
    info_slider_desc TEXT,
    info_last VARCHAR(50),
    info_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    info
VALUES
    (
        1,
        'Moronanet',
        'Ecuador',
        'Morona Santiago',
        'Macas',
        'Soasti y Cuenca',
        '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3!2d-78.11825101337976!3d-2.30215443949185!2m3!1f52.67314464226125!2f80.41061151369871!3f0!3m2!1i1024!2i768!4f75!3m3!1m2!1s0x91d20f3956994643%3A0xa7d12b2dd5950974!2sMORONA%20NET!5e0!3m2!1ses!2sec!4v1671211259291!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        '304 6355',
        '098 807 8711',
        'info@moronanet.com',
        'Morona NET inicia sus actividades en el 2018 brindando servicio de Internet con planes domiciliarios, para lo cual se implementó nueva tecnología en relación a la que utilizaba la competencia, lo que permitió un ingreso rápido en este mercado.',
        'Proporcionar el servicio de telecomunicaciones eficientes, confiables que permitan incrementar su productividad, con seguridad, simplicidad y valor, utilizando tecnología de última generación, gestionada por personal altamente calificado para brindar un servicio acorde a las necesidades de nuestros usuarios.',
        'Ser una Empresa con un gran crecimiento de cobertura de servicio en el centro del país, posicionando nuestra empresa en las mejores a nivel nacional y proporcionando servicio de calidad para satisfacer la necesidades de nuestros clientes.',
        'INTERNET POR FIBRA ÓPTICA',
        'Servicio de internet desde $ 17.99 al mes',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS user;

CREATE TABLE user (
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_name VARCHAR(50),
    user_user VARCHAR(50),
    user_pass TEXT,
    user_last VARCHAR(50),
    user_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    user
VALUES
    (
        1,
        'Administrador',
        'admin',
        'admin',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Root',
        'moronanet',
        'lzTCs\\0Qj=%J',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS slider;

CREATE TABLE slider (
    slider_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    slider_img VARCHAR(150),
    slider_title VARCHAR(50),
    slider_desc TEXT,
    slider_last VARCHAR(50),
    slider_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    slider
VALUES
    (
        1,
        '1.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        '2.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        '3.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS social;

CREATE TABLE social (
    social_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    social_nombre VARCHAR(50),
    social_url VARCHAR(100),
    social_icon VARCHAR(50),
    social_color VARCHAR(50),
    social_last VARCHAR(50),
    social_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    social
VALUES
    (
        1,
        'Whatsapp',
        'https://api.whatsapp.com/',
        '<i class="fab fa-whatsapp"></i>',
        '#25D366',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Facebook',
        'https://www.facebook.com/',
        'fab fa-facebook-f',
        '3b5998',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Instagram',
        'https://www.instagram.com/',
        'fab fa-instagram',
        '#833ab4',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS plan;

CREATE TABLE plan (
    plan_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    plan_name VARCHAR(50),
    plan_icon TEXT,
    plan_sharing_name VARCHAR(50),
    plan_sharing_value VARCHAR(50),
    plan_price_value DOUBLE,
    plan_price_iva BOOLEAN,
    plan_speed_value VARCHAR(50),
    plan_speed_devices INT,
    plan_last VARCHAR(50),
    plan_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    plan
VALUES
    (
        1,
        'PLAN BÁSICO',
        '<i class=\"fas fa-signal\"></i>',
        'ILIMITADO',
        'Sin Compartición',
        20,
        1,
        '40 MEGAS',
        20,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'AVANZADO',
        '<i class=\"fas fa-wifi\"></i>',
        'ILIMITADO',
        'Sin Compartición',
        25,
        1,
        '60 MEGAS',
        40,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'PLUS',
        '<i class=\"fas fa-building\"></i>',
        'ILIMITADO',
        'Sin Compartición',
        30,
        1,
        '80 MEGAS',
        60,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        4,
        'ULTRA VELOCIDAD',
        '<i class=\"fas fa-tachometer-alt\"></i>',
        'ILIMITADO',
        'Sin Compartición',
        45,
        1,
        '150 MEGAS',
        100,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        5,
        'ULTRA VELOCIDAD 4K',
        '<i class=\"fas fa-fighter-jet\"></i>',
        'ILIMITADO',
        'Sin Compartición',
        65,
        1,
        '300 MEGAS',
        200,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        6,
        'EMPRESARIAL',
        '<i class=\"fas fa-chart-line\"></i>',
        'ILIMITADO',
        'Sin Compartición',
        0,
        1,
        'A acordar',
        0,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS link;

CREATE TABLE link (
    link_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    link_name VARCHAR(50),
    link_ref TEXT,
    link_last VARCHAR(50),
    link_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    link
VALUES
    (
        1,
        'Arcotel',
        'https://www.arcotel.gob.ec/',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Aeprovi',
        'https://aeprovi.org.ec/es/',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Ministerio de Telecomunicaciones',
        'https://www.telecomunicaciones.gob.ec/',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        4,
        'Ley Organica de Telecomunicaciones',
        'localhost/LEY-ORGANICA-DE-TELECOMUNICACIONES.pdf',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        5,
        'Reglamento de Telecomunicaciones',
        'localhost/Reglamento-General-a-la-ley-organica-de-telecomunicaciones.pdf',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        6,
        'Norma tecnica planes contingencia',
        'localhost/Planes-de-Contingencia-para-Operaciones-de-Telecomunicaciones.pdf',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        7,
        'Reglamento normas SVA',
        'localhost/Reglamento-Norma-SVA.pdf',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        8,
        'Ley Adultos Mayores',
        'localhost/Ley-Organica-de-las-Personas-Adultas-Mayores.pdf',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        9,
        'Reglamento Adultos Mayores',
        'localhost/Reglamento-a-la-ley-organica-Adulto-mayor.pdf',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        10,
        'Ley Organica de Discapacidades',
        'localhost/ley_organica_discapacidades.pdf',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS preguntas;

CREATE TABLE preguntas (
    pregunta_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    pregunta_name VARCHAR(50),
    pregunta_response TEXT,
    pregunta_last VARCHAR(50),
    pregunta_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    preguntas
VALUES
    (
        1,
        '¿Qué es Compartición?',
        'Esta expresión define el número de usuarios asignados a un determinado canal compartido. A menor compartición, mayor garantía de obtener la velocidad contratada.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        '¿Qué es Radio Enlace?',
        'Se denomina radio enlace a cualquier interconexión entre los terminales de telecomunicaciones efectuados por ondas electromagnéticas. Además si los terminales son fijos, el servicio se lo denomina como tal y si algún terminal es móvil, se lo denomina dentro de los servicios de esas características.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        '¿Qué es Fibra Óptica?',
        'La fibra óptica es un medio de transmisión, empleado habitualmente en redes de datos y telecomunicaciones, consistente en un hilo muy fino de material transparente, vidrio o materiales plásticos.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        4,
        '¿Qué es el Ancho de Banda?',
        'Es el volumen de datos que se puede enviar a través de una conexión de Internet en un periodo determinado. Generalmente, el ancho de banda se indica en bits por segundo (bps), kilobits por segundo (kbps) o megabits por segundo (Mbps).',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        5,
        '¿Qué es el Banda Ancha?',
        'Ancho de banda suministrado a un usuario mediante una velocidad de trasmisión de bajada ( proveedor hacia usuario ) mínima efectiva igual o superior a 256 Kbps y una velocidad de transmisión de subida ( usuario hacia proveedor) mínima efectiva igual o superior a 128 kbps para cualquier aplicación.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        6,
        '¿Qué es Router?',
        'Un router es un dispositivo de red que se encarga de llevar por la ruta adecuada el tráfico.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS restricciones;

CREATE TABLE restricciones (
    restriccion_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    restriccion_desc TEXT,
    restriccion_last VARCHAR(50),
    restriccion_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    restricciones
VALUES
    (
        1,
        'Intentar apoderarse de claves de acceso de otros usuarios, acceder y/o modificar archivos de otro usuario.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Violar o intentar violar los sistemas de seguridad de las máquinas a la cuales se tenga acceso, tanto a nivel local como externo.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Violar las reglas y restricciones impuestas por los diferentes administradores de red.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        4,
        'Procurar que los equipos cuenten con antivirus, para evitar la propagación de malware en la red.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        5,
        'No manipular la posición, configuración de los equipos que para dotar del servicio haya Instalado la Empresa.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        6,
        'El cliente no podrá publicar, transmitir, retransmitir, comercializar o almacenar material o contenido ilegal, obsceno, indecente, profano, libidinoso, ofensivo, subversivo, pornográfico, amenazante, abusivo, difamatorio, o información objetable de cualquier tipo, incluyendo, entre otros, cualquier transmisión o contenido que constituya, anime o conlleve a conductas que podrían constituir ofensa criminal, que den origen a responsabilidades civiles, o que de cualquier modo viole la ley.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        7,
        'El cliente no podrá instalar o distribuir productos de software que no estén apropiadamente licenciados para su uso, así como divulgar cracks, números de serie de programas o cualquier otro contenido que vulnere derechos de la propiedad intelectual de terceros.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        8,
        'El cliente no podrá introducir programas malignos, incluyendo, entre otros, virus, gusanos, troyanos, en o a través de los servidores, o en cualquier otro de sus productos o servicios o el de sus proveedores.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        9,
        'El cliente no podrá llevar a cabo acciones que restrinjan o inhiban a cualquiera del uso, goce o disfrute de los productos y servicios de la Internet, o que generen excesivo tráfico de red mediante el uso de rutinas manuales o automatizadas.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        10,
        'El cliente no podrá causar o intentar causar brechas de seguridad o interrupciones o irrupciones forzadas de las comunicaciones a través de Internet. Ejemplos de brechas de seguridad incluyen, entre otros, acceder a datos de los cuales el cliente no es el destinatario indicado, o ingresar a un servidor o cuenta de usuario a la cual el cliente no está expresamente autorizado a acceder. Ejemplos de interrupciones o irrupciones forzadas incluyen, entre otros, la exploración de puertos (port scans), inundación de pings (flood pings), falsificación de paquetes (packet spoofing), ataques de denegación del servicio (DoS) e interceptación, alteración o falsificación de información de enrutamiento.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        11,
        'El cliente no podrá engañar, falsificar, suplantar o intentar suplantar la autenticación de usuarios o engañar o intentar engañar la seguridad de cualquier servidor o host, de la red o de una cuenta de usuario, dentro y fuera de la red ni realizar actividades propias del hacking o el cracking.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        12,
        'El cliente no podrá exportar, reexportar o permitir descargas (downloads) de cualquier programa (software) o contenido en violación de las leyes y normas de importación y exportación locales o internacionales, o sin todas las aprobaciones, licencias y exenciones requeridas.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        13,
        'El cliente no podrá usar el servicio contratado para publicar, transmitir, retransmitir, comercializar o almacenar sitios para juegos de dinero en línea, casinos en línea o similares, ni podrá publicar, transmitir, retransmitir, comercializar o almacenar esquemas tipo multinivel, cadena o pirámide.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        14,
        'El cliente no podrá interceptar datos o información que no esté dirigida a él, por cualquier método.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS mensajes;

CREATE TABLE mensajes (
    mensaje_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    mensaje_name VARCHAR(150),
    mensaje_affair VARCHAR(100),
    mensaje_phone VARCHAR(50),
    mensaje_email VARCHAR(100),
    mensaje_message TEXT,
    mensaje_last VARCHAR(50),
    mensaje_created VARCHAR(50)
) ENGINE INNODB;