<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->integer('charisma');
            $table->integer('charm');
            $table->integer('aggressiveness');
            $table->string('style');
            $table->timestamps();
        });

        DB::table('races')->insert([
            [
                'name' => 'Humano', 
                'description' => 'Los humanos son una raza excepcionalmente adaptable y diversa, que prospera en la estructura y el orden de las civilizaciones. Su inclinación hacia la vida en comunidad y la organización social los convierte en maestros de la cooperación y el progreso. En las ciudades bulliciosas y en las naciones organizadas, los humanos encuentran su máximo potencial, disfrutando de la estabilidad y el desarrollo que tales entornos ofrecen.

Sin embargo, la vida salvaje y las regiones inexploradas representan un desafío para la mayoría de los humanos. Aunque algunos pueden aventurarse en estos territorios desconocidos, la mayoría prefiere los límites confortables de los asentamientos civilizados. La vida en la naturaleza puede ser vista como una amenaza, un escenario hostil en el que los humanos se sienten desprotegidos y fuera de su elemento.

La raza humana es notable por su vasta diversidad. No hay dos humanos iguales; se encuentran en todos los estratos sociales y exhiben una increíble variedad de personalidades, desde los sabios y nobles hasta los astutos y ambiciosos. Esta diversidad se refleja en su cultura y sus aspiraciones, lo que permite a los humanos adaptarse a una amplia gama de roles y situaciones. Cada humano aporta una mezcla única de habilidades, talentos y perspectivas, enriqueciendo aún más la compleja tapicería de su raza.', 
                'charm' => 1, 
                'aggressiveness' => 1, 
                'charisma' => 1, 
                'style' => 'human', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sylvari', 
                'description' => 'Los Sylvari son una raza humanoide, su cuerpo parece echo en su totalidad de madera, flores y plantas, están en profunda armonía con la naturaleza, nacida del Árbol Pálido en forma de una delicada flor. Cada Sylvari emerge con un propósito específico, una misión que guía su existencia y que, en la mayoría de los casos, abrazan con devoción absoluta. Su vida está intrínsecamente ligada a la protección y preservación del mundo natural que los rodea.

Aunque los Sylvari tienen un hogar ancestral conocido como la Arboleda, la misión encomendada los impulsa a menudo a dejar este refugio para cumplir sus encargos. Su viaje suele ser solitario, pero siempre con un sentido profundo de propósito. Mientras que están dispuestos a integrarse en asentamientos de otras razas cuando es necesario, su verdadero confort se encuentra en los vastos bosques y paisajes salvajes, donde su conexión con la tierra es más fuerte.

Aunque su naturaleza depende de la hora a la que nacieron, en general, son conocidos por ser amistosos; están siempre dispuestos a ofrecer ayuda a quienes se encuentren en peligro. Sin embargo, su lealtad a la flora y fauna es inquebrantable. Si llega el momento de defender la tierra que consideran su hogar, los Sylvari se convierten en guerreros feroces, mostrando una furia implacable para proteger el equilibrio natural.', 
                'charm' => 2, 
                'aggressiveness' => 0, 
                'charisma' => 1, 
                'style' => 'sylvari', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Charr',
                'description' => 'Los Charr son una raza formidable, conocida por su imponente tamaño, su aspecto animal y su naturaleza feroz. Su instinto agresivo y su enfoque directo en cualquier situación los convierten en combatientes natos, siempre dispuestos a enfrentarse a cualquier desafío que se les presente. La diplomacia rara vez es su primera opción; los Charr prefieren resolver los conflictos con fuerza y determinación, sin titubear ante la posibilidad de una pelea.

Los Charr se organizan en escuadras, pequeños grupos que funcionan como una familia, uniendo a sus miembros con lazos inquebrantables de lealtad y compañerismo. Dentro de su escuadra, un Charr encuentra seguridad y fortaleza, sin importar el entorno. Para ellos, la verdadera tranquilidad proviene de la cercanía y el apoyo de sus compañeros, como si de una manada se tratara.

Cada escuadra pertenece a una legión y cada una se especializa en distintas formas de hacer la guerra, lo que les forma en distintas formas de destrucción incluida el manejo de grandes máquinas de guerra, donde su jerarquía está basada en la ley del mas fuerte.', 
                'charm' => 0, 
                'aggressiveness' => 2, 
                'charisma' => 1, 
                'style' => 'charr', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Asura', 
                'description' => 'Los Asura son una raza pequeña y físicamente frágil, los mas grandes apenas llegan al metro de altura, pero lo que les falta en fuerza lo compensan con una inteligencia y astucia incomparables. Evitan el conflicto directo siempre que es posible, prefiriendo resolver problemas mediante la diplomacia y el ingenio. Su verdadera pasión radica en la ciencia, la magia y la tecnología, campos en los que destacan con un talento natural y una curiosidad insaciable.

Aunque no son valientes por naturaleza ni propensos a la aventura, los Asura son incansables en su búsqueda de conocimiento. Viajan constantemente en pos de nuevas investigaciones y descubrimientos que puedan expandir los límites de su comprensión del mundo. Si se ven obligados a luchar, lo hacen de manera estratégica, utilizando magia, armas a distancia o sus ingeniosos golems, que actúan como armaduras de combate y les permiten evitar el peligro directo.

La sociedad Asura está estructurada en torno a la meritocracia; la posición y el respeto que un Asura pueda alcanzar dependen exclusivamente de sus logros y descubrimientos. La mayoría de ellos son ingenieros, científicos o investigadores, dedicados a alguna de las muchas ramas del conocimiento que apasionan a su raza. Para los Asura, el poder verdadero no se encuentra en la fuerza bruta, sino en el dominio del intelecto y la innovación.', 
                'charm' => 1, 
                'aggressiveness' => 0, 
                'charisma' => 2, 
                'style' => 'asura', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Norn', 
                'description' => 'Los Norn son una raza de imponentes gigantes, con una estatura que supera fácilmente los dos metros y una presencia que inspira respeto. Exiliados de su hogar ancestral hace años, han encontrado un nuevo refugio en Hoelbrack, el Gran Albergue, un hogar recién construido que sirve como centro de su cultura y tradiciones. Los Norn encarnan la combinación perfecta de fuerza bruta y paz interior, uniendo en su tribu a feroces guerreros capaces de derribar rocas con su poder, y a sabios chamanes en profunda comunión con el mundo espiritual.

Son cazadores natos, con un instinto y habilidad en la caza que les permite moverse con destreza en la naturaleza. Su conexión especial con los animales totémicos de su raza les otorga un entendimiento único y un vínculo sagrado con estas criaturas, que guían y protegen a los Norn en sus caminos. Aunque Hoelbrack es su hogar, muchos Norn se han dispersado por el mundo tras la pérdida de su tierra original, llevando consigo su cultura, fuerza y sabiduría a cada rincón del mundo.

La estructura social de los Norn es sencilla y directa; su tribu sigue a los chamanes más sabios, aquellos que demuestran una profunda conexión con los espíritus y un entendimiento claro del equilibrio entre fuerza y serenidad. En cualquier parte del mundo, un Norn se reconoce no solo por su tamaño imponente, sino también por la calma y determinación que emana de su espíritu.', 
                'charm' => 1, 
                'aggressiveness' => 2, 
                'charisma' => 0, 
                'style' => 'norn', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
