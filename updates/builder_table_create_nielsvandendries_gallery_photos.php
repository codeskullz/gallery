<?php namespace NielsVanDenDries\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesGallery extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_gallery_photos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('naam');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_gallery_photos');
    }
}
