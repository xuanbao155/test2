<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->string('Project');
            $table->string('Key');
            $table->string('Summary');
            $table->string('IssueType');
            $table->string('Status');
            $table->string('Priority');
            $table->string('Resolution');
            $table->string('Assignee');
            $table->string('Reporter');
            $table->datetime('Creator');
            $table->datetime('Images');
            $table->text('Description');
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
        Schema::dropIfExists('projects');
    }
}
