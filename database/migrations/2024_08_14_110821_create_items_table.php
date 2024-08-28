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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->longText('description');
            $table->timestamps();
        });

        DB::table('items')->insert([
            [
                'name' => 'Detector de energía ancestral', 
                'image' => '/images/items/Ancient_Magic_Detector.png', 
                'description' => 'El portador del objeto obtiene la habilidad Conocimiento (Magia) a la hora de reconocerla o entenderla, pero no de usarla.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Capacitador', 
                'image' => '/images/items/Trainer.png', 
                'description' => 'Cuando hagas una tirada para arreglar o activar dispositivos electrónicos o máquinas, puedes anular el resultado y conseguir los éxitos necesarios automáticamente, sin éxitos críticos ni ventajas. Luego, el capacitador queda inservible.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Control remoto', 
                'image' => '/images/items/Remote_Control.png', 
                'description' => 'Con una tirada de Conocimiento (Golemancia), puedes pasar a controlar un Golem no pilotado. Solo puedes controlar un golem a la vez. La dificultad de la tirada depende del nivel del Golem.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Golem VAL-A', 
                'image' => '/images/items/VAL-A_Golem.png', 
                'description' => '<b>Requiere de materiales y una inversión de 8 tiempos libres para poder utilizarse.</b><br/>Potencia 5. Daño de condición 3. Pericia 2. Dureza 10. Vitalidad 20. Precisión del piloto. No puedes usar habilidades.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Conversor Transatmosférico a medio construir', 
                'image' => '/images/items/Atmospheric_Converter.png', 
                'description' => '<b>Requiere de materiales y una inversión de 8 tiempos libres para poder utilizarse.</b><br/>Con una tirada de dificultad 3 de Conocimiento (Artilugios Asura) puedes cambiar el clima de la zona a: Lluvioso, Tormentoso, Soleado, Caluroso, Tormenta de nieve (En zonas nevadas) y Mar revuelto (En el mar).', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bola del infinito', 
                'image' => '/images/items/Inifinity_Ball.png', 
                'description' => '<b>Requiere de materiales y una inversión de 10 tiempos libres para poder utilizarse.</b><br/>En los tiempos libres, puedes gastar el tiempo para subir de nivel conocimientos que ya tengas sin necesidad de un maestro.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tanque charr de la legión del acero Gorr I', 
                'image' => '/images/items/Charr_Tank.jpg', 
                'description' => 'Potencia 4. Dureza 4. Vitalidad 20. No puedes usar habilidades.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Parte de la joya familiar', 
                'image' => '/images/items/Part_Of_Family_Jewel.png', 
                'description' => 'Cuando me gane el respeto de la manada y esté a la altura de mi padre, me ganaré lo que falta.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Informe de espionaje sobre la legión de la llama', 
                'image' => '/images/items/Inform.png', 
                'description' => 'La legión de la llama nos arrebató el honor. Solo hay una forma de recuperarlo...', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Joya familiar', 
                'image' => '/images/items/', 
                'description' => 'Joya de la familia, ahora recae sobre mi la obligación de devolverle a los mios el honor que una vez tuvieron.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sello familiar', 
                'image' => '/images/items/Family_Seal.png', 
                'description' => 'El único recuerdo que tienes de tus padres, es un sello familiar, la marca de la familia, deberías investigar al respecto.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Informe de batalla', 
                'image' => '/images/items/Inform.png', 
                'description' => 'Informe en el que se describe el fatídico destino del escuadrón de sarifnes al que pertenecía tu hermana, aunque en el informe hay cosas que no encajan y los soldados no han querido hablar mas sobre el tema, deberías investigar mas al respecto.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Folleto del circo', 
                'image' => '/images/items/Circus_Pamphlet.png', 
                'description' => 'Folleto que indica donde se asienta el circo de Ajja en los próximos días, por intentarlo...', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nota misteriosa', 
                'image' => '/images/items/Misterious_Note.png', 
                'description' => '"Lo de anoche fue genial, llámame :)" Hay una dirección...', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rivalidad (No es un objeto)', 
                'image' => '/images/items/Rivalry.png', 
                'description' => 'Cree que es mejor que yo, pero no es así y pienso demostrárselo.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Herencia familiar', 
                'image' => '/images/items/Lost_an_Heirloom.png', 
                'description' => 'Cuerno de guerra familiar que no debes perder a toda costa. O eso te gustaría pensar, es solo su funda.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Misión: El ciervo blanco (No es un objeto)', 
                'image' => '/images/items/White_Stag.png', 
                'description' => 'El ciervo blanco te reta. Es un honor que no debes rechazar. Todo lo que hace, es por algo.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Misión: El caballero verde (No es un objeto)', 
                'image' => '/images/items/Green_Knight.png', 
                'description' => 'El caballero verde aterroriza tus sueños. Se presenta como un mal para todo lo que quieres proteger.', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Misión: El escudo de la luna (No es un objeto)', 
                'image' => '/images/items/Shield_of_the_Moon.png', 
                'description' => 'La luna es un símbolo de protección. En la visión sueñas con un claro, con un lago, hay que encontrar ese sitio.', 
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
        Schema::dropIfExists('items');
    }
};
