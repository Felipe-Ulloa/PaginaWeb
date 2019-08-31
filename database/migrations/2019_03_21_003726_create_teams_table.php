 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->string('name', 128);
             $table->string('charge', 128);
             $table->mediumText('excerpt')->nullable();
             $table->string('file', 128)->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.–––
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
