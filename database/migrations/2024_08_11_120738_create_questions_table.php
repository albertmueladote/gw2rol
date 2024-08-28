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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->longText('question');            
            $table->timestamps();
        });

        DB::table('questions')->insert([
            ['question' => 'Como símbolo de mi dedicación, llevo _____.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Llevo _____ en el campo de batalla. Por ello soy reconocido y recibo el debido respeto.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
            ['question' => 'Mi mascota _____ lucha conmigo y me guarda las espaldas.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
            ['question' => 'Mi herramienta favorita es mi _____.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
            ['question' => 'En mi trabajo es importante entender el poder del _____.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
            ['question' => 'Estudio todos los elementos, pero porto una gema que simboliza mi amor por _____.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
            ['question' => 'Una máscara de Hipnotizador crea una imagen. Decido mira desde detrás de una _____.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
            ['question' => 'Un nigromante es el más íntimo compañero de la muerte. En reconocimiento de esto, puedo marcar mi cara con el símbolo de _____.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
            ['question' => 'Puede que los problemas me persigan, pero uso mi ______ para superarlos.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Sí, pertenezco al Instituto de ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'El primer invento de mi vida fue ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Mi primer consejero, quien me enseñó casi todo lo que sé, fue ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Es un orgullo ser _____.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Moriría por mi escuadra, sobre todo por ______, mi camarada en el combate.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Dicen que el soldado del que procedo es un ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Me crié ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Una de las cosas que más lamento es ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'De niño, todos decían que había sido bendecido por ______ .', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Mi cualidad principal es que poseo la suficiente ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'En un reciente festín celebrado en Hoelbrak, yo ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'En mi tierna infancia, tuve una visión. Un espíritu de la naturaleza me habló y me ofreció su custodia y protección. Ese espíritu era ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Soñé con una misión que me llamó a la acción. Era una visión del ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'Para mí, la más importante de las enseñanzas de Ventari es: ______', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['question' => 'El Árbol Pálido me despertó durante el ______.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
