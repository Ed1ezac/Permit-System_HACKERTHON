<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRebateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rebate_certificates', function (Blueprint $table) {
            $table->id();
            $table->bigInt('certificate_no');
            $table->string('organisation_names');            
            $table->string('physical_address');
            $table->string('postal_address');
            $table->text('intended_use_of_goods');
            $table->string('certificate_file');
            $table->string('donation_letter_file');
            $table->string('invoice_file');
            $table->string('transport_waybill_file');
            $table->enum('status', ['pending', 'approved', 'rejected', 'error'])
                        ->default('pending');
            $table->text('status_details')->nullable();
            $table->string('authorising-officer')->nullable();
            $table->string('receiving-officer')->nullable();
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
        Schema::dropIfExists('rebate_certificates');
    }
}
