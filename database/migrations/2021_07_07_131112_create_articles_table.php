<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->float('cote',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}



"dans l'ordre:

supprimez les models, controllers et migrations debase

1)
php artisan make:migration create_photos_table -> créer juste la table pas besoin de modal ou controllers
dans les migrations: 
ajouter les $table: string('nom', 30); string('path',50);

terminal: php artisan migrate

2)
php artisan make:migration create_students_table
dans les migration:
ajouter les $table: string('nom', 50); string('prenom',50); string('email',50); string('address', 200); date('date de naissance'); ipAddress('addresse_ip');

3)
php artisan make:migration create_students_table
dans les migration:
ajouter les $table: string('nom',100); longText('text', 200); float('number');


";