<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('meta')->nullable();
            $table->timestamps();

            $table->index('created_at');
        });

        Schema::create('posts_tags', function (Blueprint $table) {
            $table->uuid('post_id');
            $table->uuid('tag_id');

            $table->unique(['post_id', 'tag_id']);
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->boolean('published')->default(false);
            $table->dateTime('publish_date')->default('2018-10-10 00:00:00');
            $table->string('featured_image')->nullable();
            $table->string('featured_image_caption');
            $table->uuid('author_id')->index();
            $table->text('meta')->nullable();
            $table->timestamps();
        });

        Schema::create('authors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('bio');
            $table->boolean('is_admin')->default(false);
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->text('meta')->nullable();
            $table->timestamps();
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('body');
            $table->text('meta')->nullable();
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
        Schema::dropIfExists('tags');
        Schema::dropIfExists('posts_tags');
        Schema::dropIfExists('authors');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('pages');
    }
}
