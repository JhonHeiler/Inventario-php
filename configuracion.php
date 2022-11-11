<?php

$modulos = [];

$modulos["inicio"] = [
    "ruta" => "modulos/inicio/",
    "acciones" => [
        "ver" => [
            "archivo" => "",
            "diseño" => "vertical",
            "contenido" => "inicio"
        ]
    ]
];

$modulos["iniciar-sesion"] = [
    "ruta" => "modulos/iniciar_sesion/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "iniciar" => [
            "archivo" => "iniciar.php",
            "diseño" => "json"
        ],
    ]
];

$modulos["cerrar-sesion"] = [
    "ruta" => "modulos/cerrar_sesion/",
    "acciones" => [
        "cerrar" => [
            "archivo" => "cerrar.php",
            "diseño" => "json"
        ] 
    ]
];

$modulos["contenido"] = [
    "ruta" => "modulos/contenido/",
    //"verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];



 $modulos["mision"] = [
    "ruta" => "modulos/mision/",
     "acciones" => [
         "ver" => [
             "archivo" => "",
             "diseño" => "vertical",
             "contenido" => "mision"
         ]
     ]
 ];

  $modulos["vision"] = [
    "ruta" => "modulos/vision/",
     "acciones" => [
         "ver" => [
             "archivo" => "",
             "diseño" => "vertical",
             "contenido" => "vision"
         ]
     ]
 ];

  $modulos["filosofia"] = [
    "ruta" => "modulos/filosofia/",
     "acciones" => [
         "ver" => [
             "archivo" => "",
             "diseño" => "vertical",
             "contenido" => "filosofia"
         ]
     ]
 ];



   $modulos["contactenos"] = [
    "ruta" => "modulos/contactenos/",


     "acciones" => [
         "ver" => [
             "archivo" => "",
             "diseño" => "vertical",
             "contenido" => "contactenos"
         ]
     ]
 ];


$modulos["registrarse"] = [
    "ruta" => "modulos/registrarse/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        
        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ] 


    ]
];

$modulos["modi"] = [
    "ruta" => "modulos/modi/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
        "cambio" => [
            "archivo" => "cambio.php",
            "diseño" => "json"
        ],

    ]
]; 







$modulos["categoria"] = [
    "ruta" => "modulos/categoria/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];

    
$modulos["departamento"] = [
    "ruta" => "modulos/departamento/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];
$modulos["devolucion"] = [
    "ruta" => "modulos/devolucion/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];
$modulos["entrega"] = [
    "ruta" => "modulos/entrega/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];

$modulos["identificacion"] = [
    "ruta" => "modulos/identificacion/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];
$modulos["marca"] = [
    "ruta" => "modulos/marca/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];
$modulos["municipio"] = [
    "ruta" => "modulos/municipio/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];
$modulos["persona"] = [
    "ruta" => "modulos/persona/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];
$modulos["producto"] = [
    "ruta" => "modulos/producto/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];
$modulos["proveedores"] = [
    "ruta" => "modulos/proveedores/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];
$modulos["sexo"] = [
    "ruta" => "modulos/sexo/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];

$modulos["rol"] = [
    "ruta" => "modulos/rol/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];

$modulos["personarol"] = [
    "ruta" => "modulos/personarol/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];


$modulos["permisorol"] = [
    "ruta" => "modulos/permisorol/",
   	"verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];


$modulos["modaccion"] = [
    "ruta" => "modulos/modaccion/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];



$modulos["rproducto"] = [
    "ruta" => "modulos/rproducto/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];


$modulos["reporte2"] = [
    "ruta" => "modulos/reporte2/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];


$modulos["reporte3"] = [
    "ruta" => "modulos/reporte3/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];
    
$modulos["reporte4"] = [
    "ruta" => "modulos/reporte4/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];
   
$modulos["reporte5"] = [
    "ruta" => "modulos/reporte5/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte6"] = [
    "ruta" => "modulos/reporte6/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte7"] = [
    "ruta" => "modulos/reporte7/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte8"] = [
    "ruta" => "modulos/reporte8/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];


$modulos["reporte9"] = [
    "ruta" => "modulos/reporte9/",
     "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];


$modulos["reporte10"] = [
    "ruta" => "modulos/reporte10/",
     "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte12"] = [
    "ruta" => "modulos/reporte12/",
     "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte11"] = [
    "ruta" => "modulos/reporte11/",
     "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte13"] = [
    "ruta" => "modulos/reporte13/",
     "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "vertical" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

