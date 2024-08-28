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
        Schema::create('rols', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->integer('charm');
            $table->integer('aggressiveness');
            $table->integer('charisma');
            $table->integer('hp_base');
            $table->integer('hp_level');
            $table->string('style');
            $table->timestamps();
        });

        // Insertar los roles con sus respectivos valores
        DB::table('rols')->insert([
            [
                'name' => 'Guardian', 
                'description' => 'El Guardián es el baluarte impenetrable del grupo, una clase especializada en la protección y el apoyo. Equipado con una robusta armadura pesada, es capaz de resistir los ataques más feroces mientras se mantiene en la primera línea de combate. Su mayor fortaleza radica en su habilidad para generar bendiciones y curas con sus virtudes, proporcionando a sus aliados la vitalidad necesaria para seguir luchando. Además de su papel defensivo, el Guardián puede desatar un devastador daño en el campo de batalla, golpeando con fuerza a los enemigos que se atrevan a acercarse. Sin embargo, su efectividad disminuye considerablemente a larga distancia, lo que lo hace vulnerable a los ataques que no puede alcanzar con su espada y escudo. Por ello, el Guardián es una figura esencial en el frente, pero necesita el apoyo de otros para enfrentar amenazas lejanas.',
                'charm' => 2, 
                'aggressiveness' => 0, 
                'charisma' => 2,
                'hp_base' => 12,
                'hp_level' => 4,
                'style' => 'guardian', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Guerrero', 
                'description' => 'El Guerrero es una fuerza imparable en el campo de batalla con armadura pesada, conocido por su capacidad para absorber y desatar una tremenda cantidad de daño. Esta clase es extremadamente versátil, capaz de enfrentarse a sus enemigos tanto en combate cuerpo a cuerpo como a distancia, gracias a su habilidad para manejar una amplia variedad de armas. En el fragor de la batalla, el Guerrero puede entrar en un modo de furia, desatando una potencia destructiva que le permite infligir enormes cantidades de daño en un corto período de tiempo. Sin embargo, a pesar de su poderío ofensivo y resistencia, el Guerrero carece de habilidades para asistir directamente a sus compañeros de equipo. Su enfoque está en el combate individual, lo que lo convierte en un luchador formidable, pero dependiente de sus aliados para cubrir otras necesidades del grupo.', 
                'charm' => 1, 
                'aggressiveness' => 3, 
                'charisma' => 0,
                'hp_base' => 20,
                'hp_level' => 12,
                'style' => 'warrior', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Guardabosques', 
                'description' => 'El Guardabosques es un combatiente ágil y versátil, equipado con una armadura media que le permite mantener una alta movilidad en el campo de batalla. Especialista en infligir daño tanto en combate cuerpo a cuerpo como a distancia, el Guardabosques es una amenaza constante para sus enemigos, capaz de adaptarse rápidamente a cualquier situación. Una de sus mayores ventajas es su fiel mascota, que no solo le cubre las espaldas, sino que también le proporciona habilidades de apoyo que pueden inclinar la balanza a su favor, ya sean defensivas u ofensivas. Sin embargo, el Guardabosques debe moverse con cautela, ya que su armadura limitada lo deja vulnerable si el enemigo logra detenerlo o inmovilizarlo. En esas situaciones, su falta de defensa puede convertirse en su mayor debilidad, haciendo crucial que mantenga su agilidad y astucia en todo momento.', 
                'charm' => 1, 
                'aggressiveness' => 1, 
                'charisma' => 2,
                'hp_base' => 15,
                'hp_level' => 8,
                'style' => 'ranger', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ingeniero', 
                'description' => 'El Ingeniero es un verdadero maestro de la innovación en el campo de batalla, equipado con una armadura media y un vasto arsenal de armas y herramientas. Esta clase es la personificación de la versatilidad, capaz de adaptarse a cualquier situación con su amplia gama de dispositivos. El Ingeniero puede infligir daño devastador, curar a sus aliados, otorgar bendiciones y debilitar a sus enemigos con una variedad de estados alterados. Sin embargo, toda esta tecnología tiene un costo: el peso de su equipo limita significativamente su movilidad. A pesar de su capacidad para dominar el campo de batalla con una increíble variedad de herramientas, el Ingeniero debe tener cuidado con su falta de agilidad, ya que su movilidad reducida puede convertirlo en un blanco fácil si no es manejado con astucia.', 
                'charm' => 0, 
                'aggressiveness' => 1, 
                'charisma' => 3,
                'hp_base' => 15,
                'hp_level' => 8,
                'style' => 'engineer', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ladrón', 
                'description' => 'El Ladrón es un maestro de la agilidad y el sigilo, una clase equipada con armadura media que combina un impresionante daño tanto cuerpo a cuerpo como a distancia con una excepcional movilidad. Con su capacidad para esquivar ataques y volverse invisible, el Ladrón puede moverse por el campo de batalla sin ser detectado, eligiendo el momento perfecto para atacar. Lo que hace único al Ladrón es su sistema de habilidades, que no están sujetas a enfriamientos, sino al consumo de puntos de iniciativa. Mientras tenga puntos de iniciativa, el Ladrón puede usar sus habilidades tantas veces como quiera, pero si se queda sin ellos, se verá incapaz de lanzar ninguna habilidad, lo que lo deja vulnerable. Por lo tanto, la gestión de la iniciativa es crucial para maximizar su eficacia. Además, el Ladrón tiene la capacidad de robar objetos a sus enemigos y utilizarlos más tarde en su contra, añadiendo una capa extra de estrategia y engaño a su estilo de juego.', 
                'charm' => 1, 
                'aggressiveness' => 2, 
                'charisma' => 1,
                'hp_base' => 12,
                'hp_level' => 4,
                'style' => 'thief', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Elementalista', 
                'description' => 'El Elementalista es una clase de armadura ligera y gran versatilidad, especializado en el combate a distancia, capaz de canalizar el poder de los cuatro elementos a través de su arma para producir una amplia gama de efectos en el campo de batalla. Al invocar el fuego, el Elementalista puede potenciar a sus aliados y desatar un devastador daño sobre sus enemigos. Al canalizar el agua, es capaz de curar a su equipo y congelar a sus adversarios, deteniendo su avance. Con el viento, puede paralizar a los enemigos o aumentar su propia agilidad, convirtiéndose en un objetivo difícil de alcanzar. Finalmente, al recurrir a la tierra, fortalece sus defensas y las de sus aliados, mientras bloquea el movimiento de sus enemigos. Sin embargo, a pesar de su arsenal impresionante, el Elementalista debe actuar con precaución, ya que su armadura ligera lo convierte en una clase extremadamente frágil. Un error de cálculo podría dejarlo expuesto y vulnerable en medio de la batalla.', 
                'charm' => 2, 
                'aggressiveness' => 1, 
                'charisma' => 1,
                'hp_base' => 12,
                'hp_level' => 4,
                'style' => 'elementalist', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hipnotizador', 
                'description' => 'El Hipnotizador es un hechicero de combate ágil, capaz de hacer daño cuerpo a cuerpo y a distancia, que se destaca por su capacidad para confundir y desorientar a sus enemigos mientras mantiene una armadura ligera. Su habilidad principal radica en la creación de clones e ilusiones, que no solo confunden a los adversarios, sino que también pueden ser detonados para desencadenar una variedad de efectos devastadores que debilitan a sus enemigos. Gracias a su gran movilidad y la capacidad de hacerse invisible, el Hipnotizador puede maniobrar con facilidad por el campo de batalla y evitar ataques, lo que le permite mantenerse fuera del alcance de sus enemigos. Sin embargo, su fragilidad es una desventaja considerable: si su movilidad se ve restringida, se vuelve extremadamente vulnerable. Por lo tanto, el Hipnotizador debe emplear su astucia y velocidad para evitar el daño, ya que su capacidad de defensa es limitada.', 
                'charm' => 1, 
                'aggressiveness' => 0, 
                'charisma' => 3,
                'hp_base' => 15,
                'hp_level' => 8,
                'style' => 'mesmer', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nigromante', 
                'description' => 'El Nigromante es un hechicero de combate con armadura ligera que se especializa en ataques cuerpo a cuerpo, combinando el poder oscuro con una sorprendente resistenciay la capacidad de debilitar a los enemigos de muchas maneras. Su habilidad principal radica en absorber la energía de la muerte que lo rodea, transformándola en un sudario que le proporciona una segunda vida. Cuanto más daño inflige, más resistente se vuelve, lo que le permite sostenerse en la batalla y sobrevivir a los ataques enemigos. Sin embargo, el Nigromante debe tener cuidado con su capacidad de infligir daño: si no logra generar suficiente destrucción, su fragilidad por la armadura ligera puede dejarlo en una situación comprometida. En enfrentamientos cercanos sin el respaldo de su habilidad absorbente, el Nigromante podría encontrarse en desventaja, enfrentando a sus enemigos sin las protecciones necesarias.', 
                'charm' => 0, 
                'aggressiveness' => 3, 
                'charisma' => 1,
                'hp_base' => 20,
                'hp_level' => 12,
                'style' => 'necromancer', 
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
        Schema::dropIfExists('rols');
    }
};
