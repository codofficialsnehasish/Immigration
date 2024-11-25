<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EligibilityAssessment extends Model
{
    public function assessment_details(){
        return $this->hasMany(EligibilityAssessmentDetails::class);
    }
}
