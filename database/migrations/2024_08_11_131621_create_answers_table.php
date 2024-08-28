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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->longText('answer');
            $table->unsignedBigInteger('question_id');
            $table->longText('style');
            $table->timestamps();
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('answers')->insert([
            [
                'answer' => 'Hombreras de conquistador — Un héroe famoso, volviendo de la batalla, se detuvo y me dio sus hombreras. Desde entonces, las he usado como mías, y hago todo lo posible a la altura de su leyenda. Yo también voy a ser un conquistador.', 
                'question_id' => 1, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Hombreras de fanático — Hace mucho tiempo, decidí mi camino, y nada me apartará de él. Soy un incondicional de mis creencias e inamovible en mis lealtades. Mi manto me recuerda el peso que elegí llevar.', 
                'question_id' => 1, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Yelmo de visionario — Tyria es más grande de lo que nosotros sabemos y lleno de misterios. Este yelmo es abierto, lo que me permite ver con claridad. Con él, voy a buscar las mayores verdades del mundo que otros temen que explorar.', 
                'question_id' => 1, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Spangenhelm — Mi spangenhelm intimida a mis enemigos y obtengo el respeto de los aliados. Cuando me lo pongo soy casi invencible.', 
                'question_id' => 2, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Casquete — Mi casco es abierto para que mis enemigos recuerden mi cara y me miren a los ojos. Recordarán quien los derrotó.', 
                'question_id' => 2, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Sin yelmo — Un verdadero guerrero no necesita casco. Mis enemigos tiemblan y flaquearán al ver la determinación sin miedo en mi rostro.', 
                'question_id' => 2, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Moa — Crié mi moa desde el huevo. Su devoción por mí es incomparable, y he visto caer a un enemigo antes de que pudiera sacar mi arma.', 
                'question_id' => 3, 
                'style' => 'race-4 race-2', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Acechador — Mi acechador es un buen compañero. Es tranquilo, silencioso y veloz como una flecha. Sus ojos revelan su inteligencia.', 
                'question_id' => 3, 
                'style' => 'race-4 race-3 race-1 race-2', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Draco — Domestiqué a mi draco poco después de haber nacido. Ahora me sigue a todas las partes. Es un amigo incansable y poderoso.', 
                'question_id' => 3, 
                'style' => 'race-4 race-3 race-1', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Devorador — Mi devorador es un luchador salvaje e implacable. Lo críe desde el huevo y me gané su confianza. Daría su vida para defenderme.', 
                'question_id' => 3, 
                'style' => 'race-3', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Oso — Mi oso y yo, luchamos al unísono. Solo necesito un pequeño gesto para darle una orden, y estaremos luchando ferozmente contra nuestros enemigos.', 
                'question_id' => 3, 
                'style' => 'race-1 race-5', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Lobo — Un compañero lobo se considera un gran premio. Cuando está totalmente crecido, es un cazador astuto y un aliado fiel.', 
                'question_id' => 3, 
                'style' => 'race-5', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Leopardo de las nieves — El hermoso leopardo de las nieves es un símbolo de independencia. Su gracia y su sigilo son inspiradores y lo convierten en un cazador insuperable.', 
                'question_id' => 3, 
                'style' => 'race-5', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Mastín del helecho — Mi perro siempre ha estado a mi lado, incluso en contra de los atacantes más peligrosos. No puedo pedir un mejor amigo y aliado.', 
                'question_id' => 3, 
                'style' => 'race-2', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Multi-herramienta universal — Es un destornillador. Es una llave inglesa. ¡Se trata de un desplazador lateral! No me importa cómo la llames, este artilugio es algo que llevo a todas partes conmigo.', 
                'question_id' => 4, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Gafas de ojo de águila — Nada ve el mundo con más claridad que un águila volando. Estas gafas permiten a su portador ver igual de bien.', 
                'question_id' => 4, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Monóculo panoscópico — La cuestión son los detalles. Si tienes el sistema doble de control de cableado en tus nuevos explosivos o la carga del engranaje principal en tu torreta favorita, este monóculo le permite ver lo que tiene que ser visto.', 
                'question_id' => 4, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Anonimato — Mis talentos están en el arte del sigilo, la infiltración y la fuga. No llamo la atención sobre mí. Para proteger mi identidad, oculto mi cara detrás de una máscara de oscuridad.', 
                'question_id' => 5, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Determinación — Pienso en el negocio. Soy el matón, el músculo, el oso que usted no quiere empujar. Mi venda mantiene mi visión clara, no importa el físico que tengo.', 
                'question_id' => 5, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Subterfugio — Una máscara llama la atención, y una cara destapada permite a la gente identificarte. Prefiero un subterfugio más sutil. Una capucha echada me deja mezclarme entre la muchedumbre, y nadie sabe que yo estaba allí.', 
                'question_id' => 5, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Agua — El agua, ya sea congelada, ya sea líquida, es vida; sus corrientes fluyen dentro de nosotros.', 
                'question_id' => 6, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Fuego — El hambre del fuego, su quemadura destructiva, exige respeto. Inmola y despeja el camino para un nuevo crecimiento.', 
                'question_id' => 6, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Tierra — La Tierra es la base sobre la que se asienta toda vida. La piedra nos fortifica. La roca nos cimenta.', 
                'question_id' => 6, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Aire — El aire es el origen de toda vida. Es invisible, pero puede destruir aldeas enteras.', 
                'question_id' => 6, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Sonrisa de arlequín — Se necesita valentía para enfrentarte a tus miedos y aprovechar sus victorias. Nunca dejes que te vean sin una sonrisa.', 
                'question_id' => 7, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Fantasma del pesar — Muestro al mundo una cara marcada por la tragedia. Es una lástima que no se pueda ver detrás de la máscara — para saber si estoy riendo en secreto o no.', 
                'question_id' => 7, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Terror acolmillado — Soy un susurro en la noche, los ojos que brillan en la oscuridad. Estoy en las sombras, y mi máscara es el monstruo que temes.', 
                'question_id' => 7, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Demonio embaucador — El demonio embaucador de niebla encuentra la forma de entrar a nuestro mundo para destruirlo. Yo también soy una fuerza destructiva, y todos me temen.', 
                'question_id' => 8, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Calavera — Respeto las tradiciones de los nigromantes que han pasado antes que yo. Marco mi cara con el símbolo de una calavera que me recuerde que incluso los más grandes finalmente mueren', 
                'question_id' => 8, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Espectro fantasmal — Un espectro es una criatura de energía, y su astucia le ayuda a eludir a sus enemigos. Lo que no puedes ver ... te puede matar.', 
                'question_id' => 8, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Encanto — Soy un encanto. Nadie puede resistirse cuando estoy en mi mejor. Sé lo que tengo que decir para mejorar el estado de ánimo o reforzar la valentía.', 
                'question_id' => 9, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Dignidad — Soy digno aunque esté enfangado hasta las orejas. Es lo que hace que la gente me respete. Un comportamiento serio, reflexivo, es el camino hacia el éxito.', 
                'question_id' => 9, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Ferocidad — Soy feroz. Amenazar con violencia me atrae más que cualquier otra cosa. Soy natural, aunque trato de utilizar mis poderes de intimidación para el bien.', 
                'question_id' => 9, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Estática — Constructores y arquitectos forman el Instituto de la Estática, y lo construimos para que perdure. Muchos nos llaman conservadores, pero somos excelentes creando nuevos diseños, usando materiales antiguos de forma innovadora, y ampliando el ámbito del conocimiento de la magia para aplicaciones practicas."', 
                'question_id' => 10, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Dinámica — El Instituto de Dinámica produce extraordinarios constructores de aparatos. Energía, entusiasmo y audacia son nuestras mayores cualidades. Creemos en el aprovechamiento de la naturaleza aplicable a todas las cosas. Si un prototipo explota, no supone un fallo a no ser que no aprendas la lección."', 
                'question_id' => 10, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Sinergética — Como miembros del Instituto de Sinergética, estudiamos cómo se forman los patrones de energía y cómo se propagan los fractales alquimágicos. Pocos fuera de nuestro colegio entienden las complejidades místicas y filosóficas que nos ocupan. Investigamos con devoción la verdadera naturaleza de la Alquimia Eterna."', 
                'question_id' => 10, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Gólem VAL-A — La mayoría de gólems son centros de poder, diseñados para la guerra. Nos muestran la sutileza o la originalidad del diseño. Mi gólem era compacto y eficiente, y tenia un paquete de características sin precedentes. Revolucionó la limpieza del laboratorio, y mezclaba unos cócteles estupendos.', 
                'question_id' => 11, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Conversor transatmosférico — ¡Qué alegría poder cambiar el tiempo a mi antojo! Eso si el prototipo hubiese sido más fuerte. Sin embargo, el diseño fue muy vanguardista. Mi conversor transatmosférico era una obra maestra de un completo genio. Ojalá hubiese tenido más fondos.', 
                'question_id' => 11, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'answer' => 'Bola del infinito — Me dijeron que era un juguete, una ilusión, y un desperdicio de recursos. Qué equivocados estaban. Mi invención predice el futuro. ¿Y qué si no siempre lo predice correctamente? ¡Eso es irrelevante! ¿Podría darme ventaja? Respuesta confusa. Pregunte de nuevo.', 
                'question_id' => 11, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'answer' => 'Bronk — Good Ol\'Maestro Bronk me enseñó los beneficios de la potencia de fuego superior. A él le gustaba decir: "Cuando se trata de superar a los enemigos, no hay tal cosa como un exceso."', 
                'question_id' => 12, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Zinga — Maestra Zinga me enseñó que la mejor forma de magia es buena suerte a la vieja usanza. A ella le gustaba decir: "Planificar de antemano es para bobos que creen que pueden predecir todos los resultados posibles. ¡El futuro es mutable! ¡Ir con la corriente!"', 
                'question_id' => 12, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Blipp — Maestro Blipp era conocido por sus redundancias, así como sus despidos. A menudo decía: "Su primer intento no debe ser el último, sobre todo si lo logró. Usted siempre puede tener éxito más grande la próxima vez."', 
                'question_id' => 12, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Canni — Consejero Canni no era una burócrata. Era una paraciencitologo exopolitica. Ella solía decir: "Siempre lleve un testigo, preferiblemente uno prescindible. Nunca se sabe cuándo vas a necesitar un chivo expiatorio."', 
                'question_id' => 12, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Legión de la sangre — Soy de la legión de la sangre. Puedo cargar directamente en la batalla. La Legión de Sangre se encuentra en el frente en cualquier combate. Somos poderosos y audaces, ninguno puede igualar nuestra destreza en el campo.', 
                'question_id' => 13, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Legión de ceniza — Soy de la legión de la ceniza. Uso la astucia para vencer a mis enemigos. La Legión de la Ceniza nos enseña el arte del sigilo y la astucia. Con la infiltración, terminamos batallas incluso antes de comenzar, recopilando información y con ataques precisos.', 
                'question_id' => 13, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Legión de hierro — Soy de la legión del hierro. Marcho al son de las máquinas de guerra. La Legión de Hierro ha desencadenado nuestra revolución industrial. Hemos perfeccionado el metal, los cañones y lo más importante; las armas.', 
                'question_id' => 13, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Maverick — Maverick es el mejor luchador de uno contra uno que haya conocido. Desafortunadamente, tiene una vena rebelde y ha generado una reputación fuera de nuestra banda como una bala perdida.', 
                'question_id' => 14, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Euryale — Euryale es el soldado más leal en las legiones. Es terca y malhumorada. Cree que nuestra hermandad no puede hacer nada malo y a cualquiera que diga lo contrario le hace morder el polvo.', 
                'question_id' => 14, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Clawspur — Clawspur deja que sus espadas hablen por él. Desenvaina tranquila y silenciosamente. Mientras que otros le gritan y le amenazan, Clawspur se posiciona sigilosamente para hacer una muerte rápida.', 
                'question_id' => 14, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Dinky — Dinky era el cachorro más pequeño de nuestro Fahrar, asi que tuvo que ser dos veces más fuerte que el resto de nosotros para seguir adelante. En estos días, Dinky pelea con saña y tenacidad. No es muy inteligente, pero es un buen compañero.', 
                'question_id' => 14, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Reeva — Reeva combate duro y juega duro. Nada la consigue derrotar. Situa su espada en la mano, fija la mirada en el enemigo, y es un soldado feliz. Ella siempre bromea diciendo que sus mejores armas son sus herramientas de ingeniería, tiene un agudo sentido del humor. Para ella la vida no significa nada si no es divertida.', 
                'question_id' => 14, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Soldado leal — He oído que han pronunciado el nombre de mi padre con mucho respeto desde que era un cachorro en el Fahrar. Pienso estar a la altura de su reputación o superarla.', 
                'question_id' => 15, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Chamán hechicero — La Legión de la Llama nos esclavizarón una vez. Debido a esto, mi padre, que es un chamán, le tratan con recelo y desconfianza. Tengo que salvar su reputación.', 
                'question_id' => 15, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Gladio sin honor — Un gladio no tiene banda. Mi padre dio la espalda a la suya. Ahora, él es un gladio sin honor, sin ningún respeto por la cadena de mando, y no tengo ningún respeto hacia él.', 
                'question_id' => 15, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Plebeyo — Me crié entre gente común de Linde de la Divinidad. Somos de la clase obrera, los engranajes que mantienen a la ciudad en marcha. Ayudo en la taberna propiedad de mis amigos, Andrés y su hija Petra.', 
                'question_id' => 16, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Noble — Crecí entre los nobles, incluyendo a mi amigo Lord Faren, su descendencia se remonta a los antiguos reyes. He recibido una excelente educación, estoy versado en la finura cortesana, y comprendo la responsabilidad que conlleva este privilegio.', 
                'question_id' => 16, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Rata callejera — Crecí en la pobreza de la calle, sobreviviendo como podia. Cada día es un reto, pero como le digo a mi compañero Quinn, "Lo que no te mata, te hace más fuerte". He trabajado duro para cambiar mi suerte, pero todavía tengo un largo camino por recorrer.', 
                'question_id' => 16, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Huerfano — Cuando yo era un niño, fui abandonado en un orfanato. Una pareja amable me adoptó y se convirtió en mi familia. Sin embargo, siempre me he preguntado acerca de mis verdaderos padres.', 
                'question_id' => 17, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Hermana muerta — Mi hermana era una Serafín. Los Centauros la matarón mientras ella estaba en la patrulla. Nunca encontré su cuerpo, y siempre me ha molestado.', 
                'question_id' => 17, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Oportunidad perdida — Cuando yo era joven, tuve la oportunidad de actuar en el circo, pero la rechacé. A día de hoy, me lamento de haberla rechazado.', 
                'question_id' => 17, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Dwayna — Dwayna es la diosa de la curación, el aire y la vida, es la líder ecuánime de los antiguos dioses. Es a menudo descrita como joven, alta y delgada, elevándose en el aire con sus inmensas alas de plumas.', 
                'question_id' => 18, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Grenth — Grenth Es el dios de la oscuridad, el hielo y la muerte. Sus acólitos saben que el velo entre mundos es fino. La muerte no me asusta. Incluso las noches más ocuras me dan comodidad, porqué Grenth vela por mi.', 
                'question_id' => 18, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Balthazar — Balthazar Es el dios de la guerra, el fuego y el reto — supervisa el campo de batalla. Favorecen a aquellos que tienen un don para la estrategia en el combate y habilidad con las armas. He entrenado muy duro para honrar a Balthazar.', 
                'question_id' => 18, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Melandru — Melandru la diosa de la naturaleza, la tierra y el crecimiento — se puede encontrar en cada cosecha y cada flor. Sonríe a aquellos que, como yo, tienen una afinidad con los animales. Soy un seguidor de Melandru.', 
                'question_id' => 18, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Lyssa — Lyssa lleva muchas máscaras- Es la diosa de doble cara de belleza, el agua y la ilusión. Es la patrona de los más atractivos y elegantes entre nosotros. Sus bendiciones me han ayudado durante toda mi vida.', 
                'question_id' => 18, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Kormir — Kormir es la diosa del orden, espíritu y de la verdad. Me inspira todos los días para encontrar un mayor valor y buscar la rectitud de mente, corazón y acción.', 
                'question_id' => 18, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Derrotar a nuestros enemigos ancestrales —Mantengo mi cuerpo en forma para poder derrotar a nuestros enemigos ancestrales y proteger el Gran Albergue.', 
                'question_id' => 19, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Proteger a los espíritus — Mi deber es proteger a los espíritus de la naturaleza, y hace falta astucia para mantenerlos a salvo del dragón de hielo.', 
                'question_id' => 19, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Defender la Niebla - Mi intuición me proporciona el conocimiento que necesito para defender la Niebla, donde las almas de nuestros ancestros perduran con gloria.', 
                'question_id' => 19, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Inconsciente — ¡Cerveza! ¡Peleas escandalosas! Es demasiado fácil dejarse llevar por la emoción del momento. Cuando me desperté, no podía recordar lo que había hecho. Seguro que no fue para tanto.', 
                'question_id' => 20, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Venganza — Tengo un gran rival desde siempre. Es inteligente, traicionero y astuto. Perdí en nuestro último combate, pero la próxima vez que nos veamos, me tomaré la revancha.', 
                'question_id' => 20, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Herencia perdida — Heredé el Cuerno de Romke, una reliquia mágica ancestral que ha pasado de generación en generación. Sin embargo, después de unas copas lo aposté en un concurso de fuerza... y perdí.', 
                'question_id' => 20, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Oso — La Osa es el más poderoso de los espíritus de la naturaleza. Es un símbolo de fortaleza y autosuficiencia. Me rugió cuando era un bebé y desde entonces, he portado el valor de la Osa en mi corazón.', 
                'question_id' => 21, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Pantera de las Nieves — La Pantera de las Nieves es un espíritu sigiloso y sonriente. Nos enseña independencia y estrategia, así como a reírnos en la cara del peligro. Hasta hoy, su sabiduría me guía y el recuerdo de su visita me consuela en las noches oscuras.', 
                'question_id' => 21, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Lobo — El Lobo tiene tras él la astucia de la manada. Imparte las virtudes de la lealtad, la ferocidad y el poder de la multitud. Cuando vino a mí, me susurró acerca de mi heroico futuro y me dijo que nunca estaría solo.', 
                'question_id' => 21, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Cuervo — El Cuervo, sabio e inteligente, nos guía con verdades que otros temen. Nos concede intuición y claridad mental. En mi visión, me habló con acertijos y me abrió los ojos a secretos que pocos pueden ver.', 
                'question_id' => 21, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'El Ciervo Blanco — El Ciervo Blanco es una criatura encantada, una bestia inmortal de gran poder. Se dice que el ciervo negociará su libertad a cambio de una bendición mágica, si lograra cojerlo.', 
                'question_id' => 22, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'El Caballero verde — Vi a un poderoso cazador con armadura verde, con el rostro oscurecido por las enredaderas. Fue derrotado, pero no sometido; fue asesinado, pero no murió. ¿Me atrevería a combatirlo en batalla?', 
                'question_id' => 22, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'El Escudo de la Luna — La luna es un poderoso símbolo de curación y magia. Estaré protegido de cualquier sueño por la luna si tengo fe y fortaleza, espero ser digno de esta visión.', 
                'question_id' => 22, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Actúa sabiamente, pero actúa -Una cosa es saber lo que es correcto y otra usarlo para cambiar el mundo. Todos tenemos una vocación. Me voy a distinguir a través de mis acciones y con ello levantar Tyria a un estado superior de nobleza.', 
                'question_id' => 23, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Todas las cosas tienen derecho a crecer — La flor es hermano de la maleza. La discusión es saludable. Nadie debe ser rechazado simplemente por ser diferente. Lucharé por los derechos de todos.', 
                'question_id' => 23, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Allá donde vaya la vida, deberías seguirla — El mundo es un lugar delicioso y precioso creado para nosotros, para explorar, disfrutar y proteger. Voy a aprender lecciones de cada experiencia, y al crecer, podre ofrecer algo más a cambio.', 
                'question_id' => 23, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Ciclo de la Aurora — Los Sylvari que despertarón al amanecer son habladores naturales, diplomáticos y abiertos. Estamos íntimamente conectados con nuestro entorno y empatizamos marcadamente con todo, incluso con el resto de razas.', 
                'question_id' => 24, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Ciclo del Día — Los Sylvari nacidos en el medio día solucionan sus problemas de frente. Son guerreros, cazadores, y viajeros, viven las experiencias de la vida de primera mano y disfrutan de la emoción del riesgo al sentirse vivos.', 
                'question_id' => 24, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Ciclo del Crepúsculo — Los Sylvari que despertaron en el crepúsculo son naturalmente curiosos y reflexivos. Nos encanta aprender y pasar el tiempo leyendo y estudiando. Somos inteligentes y nos atrae las exuberantes complejidades de la magia.', 
                'question_id' => 24, 
                'style' => '', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'answer' => 'Ciclo de la Noche — Los Sylvari que despertaron en la noche son reservados y cautos con la información. Tomamos nuestras propias decisiones, vamos y volvemos como nos plazca, ágiles de cuerpo y mente.', 
                'question_id' => 24, 
                'style' => '', 
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
        Schema::dropIfExists('answers');
    }
};
