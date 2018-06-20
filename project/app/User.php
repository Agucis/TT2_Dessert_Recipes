<?php






namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


     protected $fillable = [
         'name', 'email', 'password','role',
     ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
         * App\Role relation.
         *
         * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function roles()
        {
            return $this->belongsToMany(Role::class);
        }


function handle($request, Closure $next)
{
    if (Auth::check() && Auth::user()->role == 'User')
    {
        return $next($request);
    }
    else
    {
        return redirect('/admin');
    }
}
public function hasRole($role)
	{
  //  echo("test");
  //  die;
		if($this->role === $role)
			return true;
		else
			return false;
	}


}
