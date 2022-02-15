<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportPermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_permits', function (Blueprint $table) {
            $table->id();
            $table->json('goods');
            $table->bigInt('permit_no');
            $table->string('applicant_names');
            $table->string('licence_number');
            $table->string('physical_address');
            $table->string('postal_address');
            $table->string('identity_no');

            $table->string('permit_type');
            $table->text('purpose_of_goods');
            $table->string('order_no')->nullable();
            $table->string('destination_of_goods');
            $table->string('port_of_entry');

            $table->string('licence_file')->nullable;
            $table->string('identity_file')->nullable();
            $table->string('residence_permit_file')->nullable();

            $table->enum('status', ['pending', 'approved', 'rejected', 'error'])
                        ->default('pending');
            $table->text('status_details')->nullable();
            $table->string('authorising_officer')->nullable();
            $table->string('receiving_officer')->nullable();

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
        Schema::dropIfExists('import_permits');
    }
}
