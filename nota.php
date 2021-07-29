<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nota</title>
	<link rel="stylesheet" type="text/css" href="css/estiloss.css">
</head>

<body>
	<div class="contenedorpagina">
		
<?php include "partials/header.php" ?>
    
<?php 

    $imagenes = [
        "https://i.postimg.cc/W34T7q7P/notafoto1.png",
        "https://i.postimg.cc/mDMfj3FJ/notafoto2.png",
        "https://i.postimg.cc/8kn8vqzt/notafoto3.jpg",
        "https://i.postimg.cc/hGnNgn2P/notafoto4.jpg",
        "https://i.postimg.cc/j5d9wXVp/notafoto5.png",
        "https://i.postimg.cc/bvqVWTvZ/notafoto6.jpg",
        "https://i.postimg.cc/xCCxT1MY/notafoto7.jpg",
        "https://i.postimg.cc/dV2S5XJM/notafoto8.jpg",
        "https://i.postimg.cc/BZzybHmz/notafoto9.jpg",
        "https://i.postimg.cc/5NHhSnH1/notafoto10.jpg",
        "https://i.postimg.cc/1zM7QqgJ/notafoto11.jpg",
        "https://i.postimg.cc/RZK2jhQD/notafoto12.jpg",

    ];


    $titulos = [
        "100 familias empiezan su huerta gracias a nuestro Programa Huertas Familiares",
        "La escuela N° 367 de Chaco nos cuenta sobre sus Huertas En Casa",
        "¡Te contamos cómo conseguir semillas de tu huerta!",
        "¡Las familias y los docentes son nuestros héroes de la alimentación!",
        "Las huertas familiares siguen multiplicándose por todo el país",
        "Armá tu Barrera Verde",
        "¿Ya tenés todo listo para el cambio de temporada?",
        "¡Feliz Día del Docente!",
        "Nuevo Escenario, nuevas soluciones",
        "Nuevos proyectos que nos deja la pandemia",
        "Es tiempo de comenzar una huerta en tu balcón",
        "¡Buenas noticias durante la cuarentena!"
    ];


    $fechas = [
        "Oct 29, 2020",
        "Oct 29, 2020",
        "Oct 29, 2020",
        "Oct 29, 2020",
        "Oct 05, 2020",
        "Oct 05, 2020",
        "Oct 05, 2020",
        "Sep 11, 2020",
        "Jul 30, 2020",
        "Jul 30, 2020",
        "Jul 27, 2020",
        "May 18, 2020"
];

    $textos = [
        "Desde el principio de la pandemia empezamos a desarrollar nuevas ideas y propuestas para poder mantener el contacto con las escuelas a distancia, en un año en el que no era posible hacer viajes o visitas presenciales. Por eso, parte de nuestro equipo se encargó de realizar el seguimiento y acompañamiento a distancia de los equipos docentes y familias. Esto se convirtió en una parte fundamental de nuestro trabajo este año, que hizo posible seguir en contacto a pesar de las dificultades. <br> <br> Como parte de las estrategias, diseñamos un diagnóstico de relevamiento, que nos permitió conocer el porcentaje de las familias que producen sus propios alimentos en casa, en este momento en el que muchas escuelas del país todavía están cerradas. Como uno de los resultados del diagnóstico, se incrementaron los pedidos de las familias para poder tener acceso a semillas, plantines y capacitaciones de huerta. <br> <br> Ante estas nuevas necesidades, <strong>empezamos a reformular el tipo de acompañamiento, para adaptarnos al crecimiento que tuvieron las huertas en casa y su importancia para las familias.</strong> Un ejemplo del acompañamiento que empezamos a brindar a las familias, respaldados y trabajando en conjunto con los equipos docentes de cada escuela, es el Jardín N°911 de San Vicente, en Provincia de Buenos Aires. <br> <br> En este contexto se organizó, junto a la comunidad del Jardín N°911 de San Vicente, la entrega de Kits de semillas, plantines y bolsas de compost para sus huertas en casa. Este nuevo acompañamiento fue producto de mucho trabajo y compromiso por parte de las familias, las docentes y los miembros de nuestro equipo. <strong>La comunidad de la escuela destinó mucho trabajo y esfuerzo para que los niños y niñas pudieran seguir teniendo sus cosechas en casa, durante el cierre de la escuela por la pandemia.</strong> De esa manera, el 25 de septiembre una parte de nuestro equipo, formado por Bárbara Kuss (Directora Ejecutiva de Huerta Niño), Fiorella Costantino (Directora de Programas) y Pablo Rouaux (Gestión de Proyectos) visitó el Jardín y junto a las docentes para hacer la entrega de los materiales para las huertas.<br> <br> Fue una gran jornada en la que se pudo charlar directamente con las familias y conocer cómo estaban avanzando con sus huertas. Posteriormente, para continuar con el proceso del Programa se realizó el Taller de Huerta virtual junto a las familias para capacitarlos en todo lo necesario para cuidar una huerta y despejar dudas.<br> <br> De esa manera, pudimos empezar a proponer nuevas maneras de seguir impulsando proyectos de huerta, aún a la distancia. Y de la misma manera que los proyectos de huerta en la escuela crecían y se desarrollaban, nuestro objetivo es acompañar a las huertas familiares fortaleciendo cada etapa con nuevas capacitaciones. La entrega de recursos en el Jardín de Infantes N°911 es la primera de muchas otras actividades que tenemos planificadas con otras escuelas, para sus huertas en casa.",
        "Con el cierre de las escuelas debido a la pandemia muchas comunidades empezaron a impulsar activamente sus proyectos de huerta en casa pero para otras, las huertas en casa ya eran parte de su proyecto institucional y hoy son fundamentales para cada familia. <br> <br> Este es el caso de la escuela N°367 de la localidad de Roque Saenz Peña, en Chaco. <strong> Además de tener un proyecto de huerta en la escuela, con el que los acompañamos desde el año 2014, desde el año 2009 mantiene desde la institución el proyecto de huertas domiciliarias </strong> según nos contó Mary Juskow, la docente de huerta. <br> <br> De esa manera, la práctica en la huerta involucra a toda la comunidad. <strong> Y así como la huerta escolar crece y se mantiene, de la misma manera lo hacen las huertas en casa, pensando en que cada alumna y alumno pueda cultivar sus propios alimentos y llevar una alimentación saludable, tanto dentro, como fuera de la escuela. </strong> <br> <br> Con ese objetivo, se organiza desde la escuela un sistema de acompañamiento a las familias. Se impulsa la construcción de sus huertas en casa junto con los técnicos del INTA de la zona y se organizan visitas a las casas de los alumnos y alumnas por parte de los docentes para conocer sus avances y, todavía más importante, responder sus consultas y dudas para seguir manteniendo la huerta. Además, la escuela comparte las herramientas con las familias y también les reparte semillas para que tenga variedad de cultivos en las huertas. De esa manera, el seguimiento y acompañamiento por parte de la escuela es muy completo e incluye la entrega de material de referencia. <strong> Entre los avances una de las familias compartió la foto de Thiago, un alumno que tuvo una gran cosecha en su huerta. </strong> <br> <br> En este momento de pandemia, el gran proyecto de huertas en casa de la escuela siguió avanzando y en octubre invitamos a las docentes a participar de una capacitación virtual, junto a más de 90 docentes de otras escuelas para charlar sobre el trabajo junto a las escuelas y compartir material sobre el trabajo en la huerta para los equipos docentes. <br> <br> Esperamos que esta sea la primera de muchas charlas junto a los equipos docentes y las familias. Y de muchos acompañamientos a las huertas familiares.",
        "<strong> ¿Cuántas veces compramos semillas sin saber que podemos recolectarlas nosotros mismos? </strong>  <br> Lo primero que debemos tener en cuenta a la hora de recolectar las semillas es elegir una planta de calidad. Entre las plantas del mismo tipo que tengamos tenemos que observar cuál es la más fuerte. <br>  En segundo lugar, debemos localizar dónde se encuentran las semillas de cada planta. Normalmente, las semillas se ubican en la flor o el fruto que genera la planta. <br> <br> <strong> ¿Cómo obtener semillas de las hortalizas más comunes? </strong> <br> <em> Calabaza, habas, pepinos y melón: </em> <br> En el interior de la hortaliza encontramos las semillas. Podemos extraerlas de forma fácil, limpiarlas si tienen restos de la pulpa de la hortaliza y dejarlas en un lugar fresco y seco, hasta que ya no estén húmedas. <br> <br> <em> Berenjena, pepinos y tomates: </em> <br> Para obtener sus semillas el proceso es un poco más elaborado. Tenemos que elegir los mejores frutos tempranos y dejarlos madurar completamente. El paso siguiente es abrirlos y separar la pulpa del grano, que es la semilla. Tras este proceso tienen que secarse en un lugar fresco y seco. <br> <br> <em> Morrón: <br></em> Las semillas se encuentran adentro del morrón. Tenemos que sacarlas de la fruta y dejarlas secar en un lugar fresco. <br> <br> <em> Cebollas, puerros, rábanos, remolacha y lechugas: </em> <br> Estas hortalizas florecen y es en la flor donde podemos encontrar las semillas. Para conseguir las semillas, entonces, tenemos que dejar que algunas de nuestras plantas florezcan y recolectarlas. <br> <br> <em> Brócoli o coliflor: </em> <br> Tenés que dejar florecer la planta y le va a salir una parte central o pella. Cortá las partes laterales y dejá que crezca. Las semillas van a estar dentro de las vainas que florezcan Si las dejas secar, se vuelven de un color marrón y ya contienen en su interior las semillas. Es el momento de cortarlas y extraer las semillas. Podés realizar el mismo proceso con las plantas aromáticas y ornamentales por ejemplo: Laurel, albahaca, cebollino, cilantro, eneldo, hinojo, orégano, menta y perejil. Tras florecer, las flores se secan y es el momento de extraer las semillas, ya que permanecen en su interior. Podemos cortar el tallo que tiene las flores secas y ayudarte con los dedos para extraer la semilla que tiene cada flor. <br> <br> <strong> ¿Y cómo podemos almacenar las semillas? </strong> <br> Para almacenar las semillas es importante en primer lugar dejar que se sequen, para evitar la aparición de moho. <br> Para secar completamente las semillas que quieras guardar, simplemente colocalas sobre papel o servilletas, en una zona fresca y seca. Que esté bien aireada, pero sin corrientes de viento para que no se vuelen.<br> Una vez se hayan secado de forma correcta tus semillas, podés guardarlas en tarros de vidrio que impidan la entrada de aire, e intentar que sean de un color oscuro para que la luz del sol no las dañe o las haga germinar. Otra forma de guardarlas es colocarlas en sobres o en bolsitas de papel. No se recomienda guardarlas en bolsas de plástico ya que puede aumentar la humedad y hacerlas germinar. Después se almacenan en un lugar oscuro y fresco. <br> Independientemente de si las guardás en un frasco o en un sobre de papel, acordate de indicar de qué planta se trata y cuándo recolectaste las semillas para facilitar su identificación.",
        "Todos los años se celebra el World Food Day, como una iniciativa impulsada por la FAO (la Organización de las Naciones Unidas por la Alimentación y la Agricultura) para seguir concientizando sobre la importancia de la buena alimentación, además de resaltar la importancia de lograr que comunidades en todo el mundo puedan tener acceso a los alimentos. <br> <br> Este año, el Día Mundial de la Alimentación se celebró en un contexto diferente. La FAO destacó la importancia de poner el foco en la alimentación y en la posibilidad de que muchas más personas en todo el mundo puedan acceder a los alimentos. Cada vez es más urgente la necesidad de que la cadena de producción de los alimentos sea más cuidadosa del medioambiente, más sustentable: el objetivo es reducir el desperdicio de los alimentos que son desechados sin consumirse, reducir el impacto ambiental de producir nuestros alimentos y alcanzar a muchas personas que hoy no tienen la posibilidad de tener alimentos sanos y nutritivos. <br> Por eso, se busca destacar a los #HéroesDeLaAlimentación: cada persona que hace posible tengamos acceso a los alimentos, desde la producción hasta su consumo. Pero es importante que cada vez más personas sean Héroes de la Alimentación, que sean muchas las comunidades que puedan producir sus propios alimentos, de manera sana. Porque durante y después de la pandemia, la alimentación va a seguir siendo una preocupación. <br> La malnutrición tiene profundas consecuencias a largo plazo, tanto en el crecimiento como en la capacidad de aprendizaje en los niños y niñas. <strong> Para muchas familias es muy difícil acceder a alimentos frescos y tener una alimentación más nutritiva y completa, con el cierre de las escuelas se requería buscar soluciones y que esos alimentos no faltaran para los niños. </strong> <br> <strong> Con ese objetivo, buscamos mantener el contacto con los equipos de cada escuela y con las familias, para plantear soluciones e impulsar sus proyectos de huerta. </strong> De esa manera, las propias familias podían seguir teniendo los recursos para la alimentación de los niños y niñas. Son ellas mismas las que generan una respuesta sustentable y agroecológica, que en este momento, resulta fundamental. <strong> Cada una de esas familias, y de esos docentes que las acompañan son #HéroesDeLaAlimentación. </strong> <br> <br> Es un momento de muchos desafíos pero tuvieron un gran compromiso los docentes y las familias para que los proyectos de huerta tuvieran grandes resultados. <br> Y a nuestro trabajo este año junto a las familias y las escuelas, también sumamos Talleres a Distancia, con el objetivo de poder brindar conocimientos sobre cómo empezar y cuidar una huerta, entre otros, y compartir lo que sabemos, para que muchas más personas puedan alimentarse de manera saludable. <br> Todos podemos ser <strong> #HéroesDeLaAlimentación </strong> y una huerta es una gran manera de tener una alimentación más saludable.",
        "La pandemia acentuó la situación de vulnerabilidad en la que ya se encontraban miles de niños y niñas. Con las escuelas cerradas, no solo aumentó la brecha educativa, por la falta de acceso a medios digitales, sino que también comprometió el sustento alimenticio que estas proporcionaban a través del comedor escolar. Todo esto llevó a las escuelas a reinventarse, empezando a acompañar a las familias en el desarrollo de sus proyecto de huerta hogareñas. <br> Muchos docentes nos cuentan cómo se adaptaron las huertas fuera de la escuela, cómo siguen trabajando a distancia y acompañando a las familias para que puedan seguir sembrando y cosechando en casa. Y el compromiso de las familias para impulsar estos proyectos de huerta en casa también fue fundamental para que los niños pudieran seguir teniendo sus cosechas. <br> <br> Entre los desafíos, estaba el poder seguir acompañando a distancia a las escuelas que no pudieron empezar la construcción de sus proyectos de huerta, pero que aún así siguieron manteniendo a la huerta como parte de sus clases todos los días. <br>  Estas son algunas de las iniciativas y avances que nos compartieron la escuela N° 1076 de Fontana, en Chaco, y la escuela N°4 de Guernica, en Provincia de Buenos Aires, dos escuelas que aunque no pudieron empezar a construir sus proyectos de huerta por la pandemia, pero sí empezaron sus huertas en casa. <br> <br> <strong> Escuela N°1076 de Fontana </strong> <br> – Chaco Raúl Palacio es docente de la escuela “Maestro Alberto Rodolfo Rulhe”, este año iban a empezar la construcción del cerco y los canteros para la huerta, con el que los acompañamos desde la Fundación pero, por la pandemia, esa construcción quedó detenida.  Raúl no quería que la huerta quedara inactiva durante el cierre de la escuela. Por eso su propuesta fue la de repartir cebollas y habas, entre otras semillas, para que sus alumnos pudieran empezar sus huertas en casa.  Aportamos  material para que sus alumnos tuvieran una guía para empezar sus proyectos en casa, adaptando el proyecto a pequeños espacios y que pudieran reciclar material o armar sus composteras. Durante estos meses se mantiene en contacto con sus alumnos por Whatsapp y nos cuenta que sus alumnos y alumnas ya empezaron a sembrar en sus pequeños espacios e incluso algunas familias construyeron cercos para sus huertas. <br> <br> <strong> Escuela N°4 de Guernica </strong> <br> – Buenos Aires Desde el principio de la cuarentena, Karina, Docente de Huerta de la escuela, se mantuvo en contacto con nosotros para contarnos cómo empezaron sus alumnos y alumnas las huertas en casa.  Ella nos cuenta que tiene clases con sus alumnos a distancia y se mantienen en contacto también por Whatsapp, compartiendo fotos y avances. Las clases de huerta son parte de la currícula escolar y forman parte de las actividades de todos los días.  Este año íbamos a acompañar a la escuela en la construcción del cerco y los canteros para su huerta. Sin embargo fue una construcción que no pudo realizarse, por la pandemia y el cierre temporal de las escuelas. Pero gracias a todo el trabajo de Karina y las docentes, los alumnos y alumnas van a tener muchos conocimientos para aplicar en la huerta de la escuela cuando se retomen las clases presenciales y los acompañemos en la construcción. <br> <br> Gracias a su gran trabajo durante la cuarentena, los niños y niñas van a tener muchos conocimientos para aplicar en la huerta cuando los acompañemos en la construcción de sus proyectos.",
        "Una barrera verde es una protección con plantas altas para proteger la huerta de los vientos, el calor o el humo y el polvo ambiental. Además, tiene una función muy importante para cuidar a la huerta de las plagas. <br> <br> <strong> Por eso, te contamos toda la protección que le pude dar una barrera verde a tu huerta: </strong> <br> <em>  Si vas a ubicar o tenes la huerta en una terraza o balcón: </em> <br> Es recomendable construir barreras con plantas altas (como cañas verdes o secas) que atenúen los vientos fuertes del invierno y eviten el excesivo calor del verano. También, pueden utilizarse una tela o media sombra para disminuir el impacto de las temperaturas elevadas. <br> <br> <em> Si la huerta está ubicada cerca de avenidas o la calle: </em> <br> Cuando la huerta está en contacto con calles o avenidas muy transitadas, podés colocar una barrera verde en el frente del cultivo para retener el humo y el polvo ambiental. El polvo ambiental o smog,  se adhiere a las hojas de la barrera y la huerta queda al resguardo. <br> La barrera verde y las mascotas: En el caso de haber perros o gatos en el predio, hay que generar algún tipo de cerco para evitar la deposición de excrementos en el lugar del cultivo, ya que eso puede transmitir serias enfermedades. Para armar estos cercos, reutilizá algunos materiales como palets o tarimas, mallas plásticas, etc. <br> <br> <br> <strong> ¿Qué plantas puedo tener para cuidar mi huerta? </strong> <br> <em> A continuación te dejamos una lista de 9 plantas que se consideran útiles para repeler plagas de insectos: </em> <br> <br> <em> Caléndula </em> <br> El olor de las caléndulas es repelente para los pulgones. Las flores de las caléndulas también atraen a los sírfidos – que se consideran beneficiosos, porque son depredadores de pulgones. <br> <br> <em> Zanahorias </em> <br> Las zanahorias plantadas intercaladas con cebolla, puerro, ajo hacen confundir a las moscas. Las flores de las zanahorias atraen insectos depredadores de las plagas. <br> <br> <em> Eneldo </em> <br> El Eneldo se considera útil para las coles, lechuga, maíz, cebollas y pepinos. Atrae mariposas, sírfidos, avispas y abejas. Repele pulgones, ácaros, arañas, e insectos de la calabaza. El eneldo no debe ser plantado junto con cilantro, ya que cruzará polinización con él. <br> <br> <em> Ajo </em> <br> El ajo se cree  ayuda al cultivo de los manzanos, perales, rosas, pepinos, lechuga y apio. Es repelente de pulgones y hormigas. <br> <br> <em> Rábano <br> </em> Los rábanos se pueden utilizar como un cultivo trampa contra los escarabajos, para evitar que ataquen la calabaza , la berenjena , el pepino y la lechuga. Esto significa que van a preferir los rábanos y dejar el cultivo principal solo. <br> <br> <em> Estragón </em> <br> El aroma de estragón no le gusta a la mayoría de las plagas, y esta planta también se cree que tiene propiedades de “Enfermera”, mejorando el crecimiento y el sabor de los cultivos producidos junto a ella. <br> <br> <em> Romero <br> </em> El aceite de este arbusto es celestial para la mayoría de los seres humanos, pero desagradable a los insectos. Es una planta atractiva en los jardines, requiere poca agua y también es deliciosa cuando se utiliza para la cocción de carnes, sopas y platos de huevos. <br> <br> <em> Menta <br> </em> El aceite de esta planta es desagradable para los insectos, es bueno colocar un par de estas plantas en el jardín o a la orilla de la ventana para así mantener alejados a los mosquitos. <br> <br> <em> Salvia <br> <em>  La salvia disuade a las moscas de la col, la mosca de la zanahoria, el escarabajo pulga negro, la oruga y el gusano de la col. Atrae a las abejas. Se cree también beneficioso para el romero, los frijoles y las zanahorias.",
        " <strong> La primavera es una de las mejores épocas para sembrar </strong> y este mes te contamos todo lo que tenés tomar en cuenta para el recambio de temporada. <br> Para empezar, el sol es muy importante, especialmente en esta época en la que se siembran muchas frutas y verduras de fruto como los tomates, los morrones y las berenjenas. <br> -Las frutas y verduras de tallo necesitan al menos 6 horas de sol al día para crecer bien. <br>  -Las verduras de hoja, como la lechuga o la acelga, necesitan menos horas de sol. Con 4 horas de sol diarias, pueden crecer bien. <br> <br> Además, a medida que aumente la temperatura, es importante cuidar que a nuestra huerta no le falte el agua. Por eso, mantené la tierra húmeda, pero sin regar en exceso. <em> Si se riega demasiado seguido o con mucha cantidad de agua, se corre el riesgo de que la planta se enferme. </em> <br> Por último, no te olvides que las plantas de tallo necesitan macetas de al menos 20 litros de capacidad para crecer bien, mientras que las plantas de hoja se adaptan bien a recipientes más chicos, como macetas de 20 o 25 cms de alto.  Otras cuestiones a tener en cuenta pueden ser el tiempo de germinación, el espacio entre semillas a sembrar y otros tips. <br> <br> <br> <strong> ¡Acá les compartimos algunas opciones para empezar a sembrar en primavera! </strong> <br> <br> <em> -– Lechuga –- </em> <br> - Es una buena opción para sembrar en macetas de 25 cms de alto.<br> - Prefiere los espacios con luz solar no muy fuerte, porque el calor puede afectarla y que no crezca bien. <br> - Es recomendable regarlas seguido, para que mantengan la tierra húmeda, porque la planta es sensible a resecarse. <br> <br> <em> –- Tomate –- </em> <br> - Es sensible al frío y necesita al menos 5 horas de sol por día. <br>  - No la riegues demasiado, porque la planta también es sensible a la humedad excesiva <br> - Lo mejor es sembrarlo junto a plantas como la albahaca, para cuidarla de las plagas. <br>- Las raíces necesitan espacio para crecer, así que lo mejor es elegir macetas de al menos 30 0 40 cms de alto o tachos de pintura limpios, de al menos 20 litros. <br> <br> <em> -– Morrón –- </em> <br> - Necesita al menos 6 horas de sol por día para crecer bien.<br> - Necesita que la tierra se mantenga húmeda <br> - Es muy sensible a las bajas temperaturas y necesita al menos 20°C a 25°C para crecer bien.  <br> - Al igual que el tomate, las raíces necesitan espacio para crecer, así que lo mejor es elegir macetas de al menos 30 0 40 cms de alto o tachos de pintura limpios, de al menos 20 litros. <br> <br> <em> –- Rabanito –- <br> </em>  - Necesitan muy poco espacio y crecen bien en cualquier maceta de 15 o 20 cms de alto. <br> - Necesitan agua regularmente. Si la tierra está siempre húmeda pueden crecer mejor. <br> - Crecen rápido y en 30 días ya se pueden cosechar. <br> <br> <em> –- Zanahoria –- </em> <br> – Necesita un suelo profundo y suelto sin piedras ni hierbas. <br> - Germina en 15 días. <br> - El espacio recomendado entre semillas es de 10 cms. <br> - Si ya tenés otras verduras en tu huerta, una buena opción es asociar las zanahorias con lechuga, tomate, escarola, rabanitos, repollo, cebolla.<br> <br> <em> –- Remolacha –- </em> <br> -No le gusta el trasplante, así que te recomendamos que la siembres en el mismo lugar donde va a crecer la planta. <br>- Lo mejor para la remolacha es mantener siempre la humedad en la tierra. <br> - Germina en 7/10 días. <br> <br> <em>  -- Rúcula --  </em> <br> - Una buena opción es cosechar sus hojas sin arrancar la planta. <br> - La rúcula germina en 14 días. <br> - El espacio recomendado entre semillas es de 15 cms. <br> - Una buena opción es asociar con tomates, zanahorias, cebollas, lechuga.",
        "En este mes del docente queremos conmemorarlos por su hermosa labor y compromiso con su trabajo. Sabemos que este año trajo muchos desafíos, por eso, en su día, queremos celebrar junto a las y los docentes que siguen trabajando a distancia o que de a poco se reincorporan a las clases presenciales y que siguen acompañando a sus alumnos y alumnas todos los días. Nuestra promesa es seguir apoyándolos, aún en situaciones de alta incertidumbre.",
        "El nuevo escenario nos obligó a rediseñar soluciones para afrontar las nuevas problemáticas. Acompañar a las comunidades en este momento nos hizo tener que pensar en nuevas maneras de acercar los conocimientos a los niños, en este momento de que las escuelas permanecen cerradas. Pero también nos dio la posibilidad de difundir el autocultivo de alimentos no sólo al ámbito escolar sino también a las familias y a muchas personas interesadas en mejorar su alimentación. <br> <br> Porque una alimentación saludable es fundamental para todos, empezar una huerta es una buena manera de aprovisionarse de alimentos más sanos, tener una mejor nutrición y ahorrar dinero. <br>  Por eso, diseñamos talleres a distancia para poder acercar la posibilidad de comenzar la huerta en casa como lo hacemos en escuelas de todo el país.  Es apenas el principio de nuevas propuestas para compartir lo que hemos cosechado a lo largo de más de 20 años de trabajo. <br> <br> <br> <br> <strong> Estos son algunos de los temas del taller introductorio a la huerta: </strong> <br> <br> <em> Como comenzamos a pensar en la huerta: </em> <br> El Plan Repasamos aquellos recursos naturales y materiales que debemos tener en cuenta al momento de diseñar nuestra huerta.  <br> <br> <em> Manos a la obra. </em> <br> La siembra a medida Definido el objetivo de la huerta abordamos la nociones básicas para lograr una siembra de temporada exitosa <br> <br> <em> De la huerta a la mesa </em> <br> Al tiempo de la cosecha debemos tener en cuenta acciones para que la huerta siga funcionando y enriqueciendo nuestra alimentación, un hábito a la vez.",
        "Frente a este nuevo contexto mundial y entendiendo las consecuencias que provoca la pandemia en términos sanitarios, económicos y sociales, decidimos tomar contacto con docentes, directivos y técnicos para realizar un diagnóstico en todo el país y entender en qué situación se encontraban las familias y cuáles eran sus necesidades.  A partir de este diagnóstico detectamos que más del 50% de las familias producen sus propios alimentos en el hogar, producto de nuestro Programa Mi Huerta, pero que al mismo tiempo debemos acompañar a aquellas familias que aún no desarrollaron su propio proyecto, siendo la solución al problema alimenticio al que se enfrentan.  <br> <br> En las escuelas, como centralizadores de la comunidad, hubo un notable incremento en la demanda de semillas y capacitación hortícola. <strong>Las familias, que gradualmente adherían al programa de huerta familiar, hoy de forma masiva piden capacitación y acompañamiento. </strong> <br> <br> <br> Tomando en cuenta estas demandas y necesidades en tiempo real, es que adaptamos nuestros programas para poder dar un inmediato apoyo a las comunidades con las siguientes iniciativas, que corren en paralelo con nuestros proyectos de huertas escolares en todo el país: <br> <br> <em> Programa de Huertas – La huerta escolar y comunitaria </em> <br> - Se acompaña a la institución desde la formulación del proyecto, la implementación hasta el posterior seguimiento, proporcionándoles todos los materiales que su proyecto requiera para la construcción de un espacio de huerta. <br> - Se a los docentes y a la comunidad para poder desarrollar de forma integral un proyecto de huerta saludable, en la escuela y en los hogares. <br> - Beneficiarios 100% de niños y niñas de la matrícula escolar como beneficiarios directos y a sus familias como beneficiarios indirectos.  <br> <br> <em> Programa de Huertas – La huerta familiar </em> <br> - Desde la escuela, como centralizador comunitario y con el apoyo de técnicos locales, se acompaña a las familias con la entrega de material didáctico para el desarrollo de sus propios espacios de huerta familiar y con la capacitación de Bienestar Nutricional para mejorar los hábitos alimenticios. <br> La financiación de cada Programa de Huerta Familiar beneficia directamente a 30 familias de una comunidad. <br> <br> <em> Espacio Sustentable FHN <br> </em> - El formato del taller virtual es práctico y propone compartir nuestras experiencias con los participantes para un exitoso acercamiento a la Huerta Saludable. <br> - Es este espacio de huerta demostrativa, el objetivo no es sólo enseñar, sino que las personas puedan vivir, compartir y comparar entre ellos los conocimientos de una manera dinámica. <br> Con la donación de cada taller para 20 voluntarios, Huerta Niño puede entregar 20 kits de material educativo a una comunidad.  <br> - Adaptamos nuestro Programa de Voluntariado Corporativo al contexto actual con el fin de continuar promoviendo actividades solidarias junto a los voluntarios en favor de cientos de comunidades de nuestro país. <br> - Y muy pronto tendremos nuestro espacio de Huerta Demostrativa de Fundación Huerta Niño, ubicada en las cercanías de Capital Federal, con espacio amplio, verde y al aire libre, con las medidas de seguridad e higiene apropiadas a los fines de poder brindar a los equipos de Voluntarios un lugar cómodo y adecuado para las actividades solidarias propuestas. <br> <br> <em> Programa de Educación </em> <br> Con el fin de acercar material de capacitación de huerta actualizado para docentes y familias de todo el país es que estamos produciendo material en formato virtual, de uso presencial y analógico, de acuerdo a la necesidad de cada comunidad dada la falta de acceso a internet que muchas tienen.",
        "La organoponía consiste en producir hortalizas y aromáticas en diversos recipientes rellenos con sustrato. Un pequeño espacio en el balcón o incluso en la terraza pueden servir para tener tu huerta en casa y poder contar con productos frescos para cada estación del año. <br> <br> <br> <strong> EL LUGAR </strong> <br> <br> <em> Horas de luz: </em> <br>  Se necesitan, como mínimo, entre cuatro y cinco horas de sol directo en el sector de huerta. Con menos horas, se pueden planificar algunas hortalizas: lechugas, acelgas de temporada, rabanitos, apios; y algunas aromáticas como perejil, cilantro, tomillo y orégano. <em> <br> <br> Vientos: <br> </em> Los vientos pueden ser perjudiciales para las plantas que producen hojas y para las tomateras, debido al quebrado de plantas. Por eso es importante el resguardo, como plantas trepadoras, que delimiten una cortina contra los vientos, o un cultivo de leguminosas o plantas enredaderas con flores. <br> <br> <em> El agua: </em> <br>  De no contar con una fuente de agua cercana, es fundamental una manguera o canilla para proveer el riego. Asimismo, en el futuro se puede planificar riego por goteo. <br> <br> <em> Terrazas o balcones: </em> <br> Es importante revisar cuáles son los puntos dónde se puede cargar peso dentro del espacio de tu huerta. En general, las macetas se ubican cercanas a las paredes, dónde se encuentran las vigas estructurales. <br> <br> <em> Mascotas: </em> <br> Si hay mascotas, es necesario hacer un cerco para evitar que entren en contacto con las plantas de la huerta. <br> <br> <br> <strong> MATERIALES </strong> <br>  <em> Una vez definido el espacio de la huerta, podemos pensar en los materiales para su construcción.</em> <br> <br> Las potenciales macetas que tenemos en casa es innumerable: bidones y botellas de plástico, cajones de madera (los de verdulería, por ejemplo), tachos de pintura, canastos, neumáticos, bolsas plásticas, pallets (tarimas de madera), caños de PVC, baldes. <br> Una vez seleccionados los recipientes, hay que acondicionarlos: higienizarlos, asegurándonos de que no hayan contenido sustancias peligrosas, o que no queden residuos de ellos. Si son recipientes cerrados, debe perforarse el fondo para facilitar el drenaje del exceso de agua. <br> Es necesario realizar una distinción entre los recipientes que servirán para realizar almácigos (con una profundidad menor a 30 centímetros) y los que serán los cajones de cultivos (con una profundidad mayor a 20 centímetros). ¿Qué sembramos? Acelga – Espinaca- Lechuga y Rabanito",
        "Esta pandemia es un desafío para todos. Nos lleva a tener que adaptarnos y acompañarnos a la distancia. <br> Por eso, queremos destacar el gran trabajo que están haciendo los docentes desde las escuelas, que nos cuentan cómo llevan el día a día, cómo siguen enseñando y compartiendo con sus alumnos en distintos puntos del país. <br> Y los proyectos de huerta también se adaptan y se comparten en estos momentos. <br> En la escuela N°6 de Gobernador Ugarte tienen un gran proyecto de huerta desde hace años y las escuelas de los tres niveles, inicial, primario y secundario, comparten el espacio de huerta. Además, mantienen un programa de alimentación saludable y el año pasado tuvieron una jornada de matemáticas en la huerta. <br> A principios de marzo, la escuela tuvo su última cosecha antes de que se decretara la cuarentena y <strong> los alumnos decidieron donarla al hogar de ancianos de la localidad. </strong> <br> <br> Los alumnos de la secundaria tuvieron un gran gesto y nos alegra mucho que su huerta esté ayudando a las personas mayores en estos momentos, que es tan importante que se cuiden. <br>  Además, en otras escuelas nos cuentan que están readaptando la huerta para que acompañe a las familias de los niños durante estos días de cuarentena. <br> <strong> La escuela N°911 </strong> de San Vicente también mantienen su huerta activa desde hace tiempo y siempre nos comparten sus avances y sus cosechas con los niños y niñas del jardín. <br> Durante la cuarentena, las docentes propusieron organizarse con las familias de los alumnos para distribuir plantines de la huerta y que cada niño pudiera tener la huerta de la escuela, en su casa. <br> <br> Mientras todos tenemos que reacomodarnos y adaptar nuestro trabajo, también sabemos que una huerta es un espacio que siempre puede volver a crecer, que puede llevarse a casa y esperar también a que se retomen las clases."
];


    $saludos = [
        "A la comunidad del Jardín N°911: ¡muchas gracias por recibirnos y felicitaciones por todos sus avances",
        "¡Felicitaciones por su gran trabajo y gracias por participar de nuestro Taller!",
        "¡Te invitamos a que puedas hacer tu propia recolección de semillas!",
        "Eligiendo opciones más saludables y cuidando nuestros alimentos, todos los días pueden ser el #WorldFoodDay.",
        "¡Felicitaciones por sus grandes avances!",
        "¡Con todas estas recomendaciones esperamos que armes tu propia barrera verde!",
        "¡No dejes pasar la primavera y prepará tu huerta para el cambio de temporada!",
        "¡Feliz #DíaDelDocente!",
        "¡Queremos que todos se sumen a esta nueva experiencia en donde van a poder nutrirse de información muy valiosa!",
        "El hambre tiene una respuesta, sustentable y probada: la huerta educativa y productiva en casa, para dar respuesta a las nuevas necesidades de las familias.",
        "¡Te contamos estos consejos para que ahora puedas armar tu huerta en el balcón o terraza!",
        "Compartir los ejemplos de su trabajo también nos ayuda a saber cómo podemos seguir acompañándolos.¡Felicitaciones por su gran trabajo!",

    ];


    if ( $_GET["id"] > 12) {
        echo "No hay más notas para mostrar.";
        
    } else {

    
 ?>



<section class="seccionnota">
		<img src="<?php echo $imagenes[ $_GET["id"] ]; ?>" alt="niño plantando">
		<article class="nota">
		<p class="fecha"> <?php echo $fechas[ $_GET["id"] ]; ?> </p>
		<h1 class="h2 titulo_nota"> <?php echo $titulos[ $_GET["id"] ]; ?> 
		<p class="textonotas"><?php echo $textos[ $_GET["id"] ]; ?> </p>
		
		<p class="saludonota"> <?php echo $saludos[ $_GET["id"] ]; ?> </p>
			
			</article>	
		</section>
<?php	
    }
?>

		
	<?php include "partials/footer.php" ?>
    
		
	</div>
</body>
</html>
