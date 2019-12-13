<?php
    namespace App;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Tymon\JWTAuth\Contracts\JWTSubject;
    class NguoiChoi extends Authenticatable implements JWTSubject
    {
        protected $table = 'nguoi_choi';
        use SoftDeletes;
        //
        public function luotChois(){
            return $this->hasMany('App\LuotChoi');
        }
        public function goiCredits(){
            return $this->belongsToMany('App\GoiCredit', 'lich_su_mua_credit');
        }

        public function getPasswordAttribute(){
            return $this->mat_khau;
        }

        public function getJWTIdentifier(){
            return $this->getKey();
        }

        public function getJWTCustomClaims(){
            return [];
        }
    }
?>
