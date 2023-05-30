<?php namespace NielsVanDenDries\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesGalleryCategorie extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_gallery_categorie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('naam');
            $table->string('fotos_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_gallery_categorie');
    }
}
