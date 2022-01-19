<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", 
        "status"
    ];

    // Define model events and Point of execution
    public static function boot() {
  
        parent::boot();
  
        /**
         * Write code on Method
         *
         * @return response()
         */
        static::creating(function($item) { 
          
            Log::info('Creating event call: '.$item); 
        });
  
        /** 
         * Write code on Method
         *
         * @return response()
         */
        static::created(function($item) {           
            /*
                Write Logic Here
            */ 
  
            Log::info('Created event call: '.$item);
        });
  
        /**
         * Write code on Method
         *
         * @return response()
         */
        static::updating(function($item) { 
                       
            Log::info('Updating event call: '.$item); 
        });
  
        /**
         * Write code on Method
         *
         * @return response()
         */
        
        static::updated(function($item) {  
            /*
                Write Logic Here
            */    
            Log::info('Updated event call: '.$item);
        });
  
        /**
         * Write code on Method
         *
         * @return response()
         */
        static::deleted(function($item) { 

            Log::info('Deleted event call: '.$item); 
        });
    }
}
